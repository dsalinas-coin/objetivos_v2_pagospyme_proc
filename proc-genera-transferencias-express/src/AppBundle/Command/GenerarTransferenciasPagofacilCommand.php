<?php

namespace AppBundle\Command;

use AfipBundle\Util\Connector;
use AppBundle\Entity\PagofacilTransferencias;
use AppBundle\Entity\PagofacilTransferenciasDet;
use AppBundle\Util\GeneradorRetenciones;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerarTransferenciasPagofacilCommand extends ContainerAwareCommand
{

    protected $container;
    protected $connector;

    public function __construct($service_container, Connector $connector)
    {
        $this->container = $service_container;
        $this->connector = $connector;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('genera:transferencias:pagofacil:express')
            ->addArgument('fechadesde', InputArgument::REQUIRED, 'Fecha de deposito desde yyyymmdd')
            ->addArgument('fechahasta', InputArgument::REQUIRED, 'Fecha de deposito hasta')
            ->addArgument('fechadeposito', InputArgument::REQUIRED, 'Fecha de deposito hasta')
            ->setDescription('Genera transferencias para express en un rango de fechas indicado yyyymmdd');
    }

    // php app/console genera:transferencias:pagofacil:express 20230101 20230131 20230131

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        set_time_limit(0);

        //traigo todos los pagos de este rango de fechas
        $fechadesde = $input->getArgument('fechadesde');
        $fechahasta = $input->getArgument('fechahasta');
        $fechaDeposito = \DateTime::createFromFormat("Ymd", $input->getArgument('fechadeposito'));

        $em = $this->container->get('doctrine.orm.entity_manager');

        //Procedure de SQLServer traducido a MySQL
        //$strsql = "exec dbo.CobrosTransferenciasExpress " . "@fechadesde =:fechadesde, @fechahasta=:fechahasta";
        $strsql = "CALL `CobrosTransferenciasExpress`(?, ?)";

        $conn = $em->getConnection();

        $stmt = $conn->prepare($strsql);
        $stmt->bindValue(1, $fechadesde);
        $stmt->bindValue(2, $fechahasta);
        $stmt->execute();

        $resultado = $stmt->fetchAll();
        
        $conn->close();

        dump($resultado);
        die;
        /*$resultado = [[
            'idcliente' => 1615, //unico para cada resultado, deberian salir agrupados
            'cantidad' => 5, //cantidad de transferencias agrupadas por idcobro
            'fechapago' => '2023-05-30',
            'importe' => 1080.00, //suma de los importes
            'cobrado' => 70,  //   sum(case when cp.importe * ct.valor <= 70 then 70 else cp.importe * ct.valor end) cobrado, mejor explicado abajo
            'comision' => 50.00, // valor dentro de clientes tarifas, se utiliza para calcular el total cobrado.
            'certificado_pyme' => 0, // supongo es un boolean, en la db que me pasaron, todas son 0.
            'cuit' => '30500010912', //cliente
            'ex_iva' => 0, //bolean, determian las exepciones
            'ex_ganancias' => 0  //bolean, determian las exepciones
        ],*/

        echo "\n\n----------------Se van a procesar " . sizeof($resultado) . " transferencias del SP" . "----------------\n";

        $parametro = $em->getRepository("AppBundle:Parametros")->createQueryBuilder('p')->where("p.name='BANK_SEQ_ID'")->getQuery()->getSingleResult();
        $secuenciaOP = (int)$parametro->getValue();

        echo 'Numero de secuencia de operacion: ' . $secuenciaOP . "\n";
        
        $cuitRetenciones = array();

        // Chequeamos que el CUIT no este ya en el array y que NO TENGAN certificado PYME y lo guardamos en $cuitRetenciones
        foreach ($resultado as $ArrTransferenciaDetalle) {
            if (!in_array($ArrTransferenciaDetalle['cuit'], $cuitRetenciones) && $ArrTransferenciaDetalle['certificado_pyme'] == 0) {
                $cuitRetenciones = array_merge($cuitRetenciones, array($ArrTransferenciaDetalle['cuit']));
            }
        }

        $repoPadron = $this->connector->getApiRepository("PadronConstancia");
        
        //Comienza consulta a AFIP sobre estado de los CUITS sin Certificado. PYME
        echo "Comienza consulta a AFIP \n";

        $infoAfip = $repoPadron->getData($cuitRetenciones);

        $generadorRetenciones = new GeneradorRetenciones($infoAfip, $output);

        //Aca hace lo mismo que arriba pero no le interesa si tienen certificado pyme
        foreach ($resultado as $ArrTransferenciaDetalle) {
            $cuitRetenciones = array_merge($cuitRetenciones, array($ArrTransferenciaDetalle['cuit']));
        }

        $infoAfipProv = $repoPadron->getData($cuitRetenciones);
        
        echo 'Finalizada consulta a AFIP sobre estado de los CUITS' . "\n";
        echo "------------------------------------------------------------------------------\n";

        $cuitCliente = "";
        $exIvaCliente = 0;
        $exGanCliente = 0;
        $zona = 5; //General, diferencia la zona si es capital o del resto del pais
        $tipo = 8; // 8 tipo de transferencia Express
        $currIdcliente = 0;
        $transferencia = null;
        $sumaDetalles = 0;
        $sumaTotales = 0;

        echo 'Comienza procesamiento de transferencias' . "\n";

        foreach ($resultado as $ArrTransferenciaDetalle) {

            $saltearDetallesEx = false;
            
            if ($ArrTransferenciaDetalle['cantidad'] == "") {
                $saltearDetallesEx = true;
            }

            $fechapago = \DateTime::createFromFormat("Y-m-d", $ArrTransferenciaDetalle['fechapago']);

            if ($currIdcliente != $ArrTransferenciaDetalle['idcliente']) {

                if ($transferencia != null) {

                    if ($sumaDetalles <= 0) {
                    
                        $output->writeLn("Borrando transferencia por no tener montos " . $transferencia->getIdtransferencia());
                        $em->remove($transferencia);
                    
                    } else {

                        $output->writeLn("la transferencia con id " . $transferencia->getIdtransferencia() . " posee " . $sumaTotales . " de totales y " . $sumaDetalles . " de detalles");

                        $fecha = new \DateTime();

                        $transferencia->setNroorden(str_pad($fecha->format("yz") . "35", 8, "0", STR_PAD_RIGHT));

                        $suma = $sumaTotales - $sumaDetalles;
                        $suma = round($suma, 2);

                        //logica de retenciones para cada uno de los regimenes
                        $retenciones = $generadorRetenciones->getRetenciones($cuitCliente, $suma, $exIvaCliente, $exGanCliente);
                        
                        //ASI COMO LLAMAMOS A LA AFIP CON getRetenciones, AQUI DEBEMOS LLAMAR EL WS O EL PADRON DE IIBB QUE NOS DICE SI LA PERSONA ES ALCANZADA O NO POR IIBB
                        $iibb = ['iibb' => 10000];

                        if (sizeof($retenciones) > 0) {
                            if (isset($retenciones['iva'])) {
                                
                                echo 'Hay IVA';

                                $transferenciaDetalle = new PagofacilTransferenciasDet();
                                $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                                $transferenciaDetalle->setCantidad(0);
                                $transferenciaDetalle->setImporte(-$retenciones['iva']['importe']);
                                $suma = $suma - $retenciones['iva']['importe'];
                                dump("Hay IVA");
                                $transferenciaDetalle->setIdcategoria(11);
                                $transferenciaDetalle->setIdzona($zona);
                                $transferenciaDetalle->setFechapago($fechaDeposito);
                                $em->persist($transferenciaDetalle);
                                $em->flush();
                            }
                            if (isset($retenciones['ganancias'])) {
                                
                                echo 'Hay GANANCIAS';
                                
                                $transferenciaDetalle = new PagofacilTransferenciasDet();
                                $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                                $transferenciaDetalle->setCantidad(0);
                                $transferenciaDetalle->setImporte(-$retenciones['ganancias']['importe']);
                                $suma = $suma - $retenciones['ganancias']['importe'];
                                dump("Hay GANANCIAS");
                                $transferenciaDetalle->setIdcategoria(12);
                                $transferenciaDetalle->setIdzona($zona);
                                $transferenciaDetalle->setFechapago($fechaDeposito);
                                $em->persist($transferenciaDetalle);
                                $em->flush();
                            }

                            if (isset($iibb['iibb'])) {
                                
                                echo 'Hay IIBB';

                                $transferenciaDetalle = new PagofacilTransferenciasDet();
                                $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                                $transferenciaDetalle->setCantidad(0);
                                $transferenciaDetalle->setImporte(-100);
                                $suma = -10;
                                dump("Hay IIBB");
                                $transferenciaDetalle->setIdcategoria(14);
                                $transferenciaDetalle->setIdzona($zona);
                                $transferenciaDetalle->setFechapago($fechaDeposito);
                                $em->persist($transferenciaDetalle);
                                $em->flush();
                            }


                        } else {

                            $output->writeLn("El cuit  " . $cuitCliente . " no tiene retenciones");

                        }

                        $transferencia->setMontototal($suma);
                        $transferencia->setArchivoIdreg($secuenciaOP);

                        $secuenciaOP++;
                    }

                    $em->flush();
                }

                $currIdcliente = $ArrTransferenciaDetalle['idcliente'];
                $cuitCliente = $ArrTransferenciaDetalle['cuit'];
                $exIvaCliente = $ArrTransferenciaDetalle['ex_iva'];
                $exGanCliente = $ArrTransferenciaDetalle['ex_ganancias'];

                //Seteamos todos los datos correspondientes a la transferencia
                $transferencia = null;
                $transferencia = new PagofacilTransferencias();
                $transferencia->setIdcliente($ArrTransferenciaDetalle['idcliente']);
                $transferencia->setEmailEnviado(null);
                $transferencia->setEstado(1); //estado Informado (1) de la tabla cobros_estados?
                $transferencia->setFechadeposito($fechaDeposito);
                $transferencia->setMontototal(0);
                $transferencia->setIdtransferenciaTipo($tipo); // 8 tipo de transferencia Express
                $transferencia->setMediopago(1);
                $transferencia->setFechaingreso(new \DateTime('now'));
                
                $sumaDetalles = 0;
                $sumaTotales = 0;

                $em->persist($transferencia);
                
                $em->flush();
                                
                $output->writeLn("Creada la transferencia " . $transferencia->getIdtransferencia() . " del cliente " . $currIdcliente);

                dump("--------------------------------------------------------------------------------------------------------------------------------------");
                dump("VUELTA COMPLETA DEL FOR EACH DE TRANSFERENCIA");
                dump("ID DE TRANSFEENCIA DEL FOR EACH DE TRANSFERENCIA " . $transferencia->getIdtransferencia());
                dump("--------------------------------------------------------------------------------------------------------------------------------------");

            }

            echo "Calculando detalles" . "\n";

            if (!$saltearDetallesEx) {

                $transferenciaDetalle = null;
                $transferenciaDetalle = new PagofacilTransferenciasDet();
                $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia()); //id de la transferencia a la que pertenece el detalle, viene de aca arriba
                $transferenciaDetalle->setCantidad($ArrTransferenciaDetalle['cantidad']);  //viene del SP
                $transferenciaDetalle->setImporte($ArrTransferenciaDetalle['importe']); //viene del SP
                                    //categorias 1 (Total pagos)
                $transferenciaDetalle->setIdcategoria(1); //refiere a la columna "Tipo" que envia por mail? transferencias_tipos?
                $transferenciaDetalle->setIdzona($zona); //diferencia la zona si es capital o del resto del pais
                $transferenciaDetalle->setFechapago($fechapago); //la fecha de la transferencia formateada, viene del SP.

                $em->persist($transferenciaDetalle);
                $em->flush();

                $sumaTotales += $ArrTransferenciaDetalle['importe'];

                $output->writeLn("Guardando detalle para la transferencia " . $transferencia->getIdtransferencia() . " detalle con categoria 1");

                $transferenciaDetalle = null;
                $transferenciaDetalle = new PagofacilTransferenciasDet();
                $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                $transferenciaDetalle->setCantidad(0);
                $transferenciaDetalle->setImporte(-$ArrTransferenciaDetalle['cobrado']);
                                    //categorias 6 (variable)
                $transferenciaDetalle->setIdcategoria(6);  //todo refiere a la columna "Tipo" que envia por mail? creo que es transferencias_tipos, no tengo datos.
                $transferenciaDetalle->setIdzona($zona);
                $transferenciaDetalle->setFechapago($fechapago);
                
                $em->persist($transferenciaDetalle);
                $em->flush();

                $sumaDetalles += $ArrTransferenciaDetalle['cobrado'];

                $output->writeLn("Guardando detalle para la transferencia " . $transferencia->getIdtransferencia() . " detalle con categoria 6");

                $transferenciaDetalle = null;
                $impuesto = $infoAfipProv[$ArrTransferenciaDetalle['cuit']];

                if ($impuesto['provincia'] != 24 && $impuesto['descripcionProvincia'] != 'TIERRA DEL FUEGO') {

                    $transferenciaDetalle = new PagofacilTransferenciasDet();
                    $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                    $transferenciaDetalle->setCantidad(0);
                    $transferenciaDetalle->setImporte(-($ArrTransferenciaDetalle['cobrado'] * 0.21));
                                        // categorías 3 (Iva)
                    $transferenciaDetalle->setIdcategoria(3);
                    $transferenciaDetalle->setIdzona($zona);
                    $transferenciaDetalle->setFechapago($fechapago);

                    $em->persist($transferenciaDetalle);
                    $em->flush();

                    $sumaDetalles += $ArrTransferenciaDetalle['cobrado'] * 0.21;
                    $output->writeLn("Guardando detalle para la transferencia " . $transferencia->getIdtransferencia() . " detalle con categoria 3");

                }

                dump("--------------------------------------------------------------------------------------------------------------------------------------");
                dump("VUELTA COMPLETA DEL FOR EACH EN EL DETALLE");
                dump("ID DE TRANSFEENCIA DEL FOR EACH EN EL DETALLE " . $transferencia->getIdtransferencia());
                dump("--------------------------------------------------------------------------------------------------------------------------------------");

            }

            echo "Fin detalles" . "\n";

        }

        $output->writeLn("la transferencia con id " . $transferencia->getIdtransferencia() . " posee " . $sumaTotales . " de totales y " . $sumaDetalles . " de detalles");
        
        if ($sumaDetalles <= 0) {
            
            $output->writeLn("Borrando transferencia por no tener montos " . $transferencia->getIdtransferencia());
            
            $em->remove($transferencia);
        } else {
            
            $fecha = new \DateTime();
            
            $transferencia->setNroorden(str_pad($fecha->format("yz") . "35", 8, "0", STR_PAD_RIGHT));
            
            $suma = $sumaTotales - $sumaDetalles;
            $suma = round($suma, 2);
            
            $retenciones = $generadorRetenciones->getRetenciones($cuitCliente, $suma, $exIvaCliente, $exGanCliente);

            //ASI COMO LLAMAMOS A LA AFIP CON getRetenciones, AQUI DEBEMOS LLAMAR EL WS O EL PADRON DE IIBB QUE NOS DICE SI LA PERSONA ES ALCANZADA O NO POR IIBB
            $iibb = ['iibb' => 10000];

            if (sizeof($retenciones) > 0) {

                if (isset($retenciones['iva'])) {

                    $transferenciaDetalle = new PagofacilTransferenciasDet();
                    $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                    $transferenciaDetalle->setCantidad(0);
                    $transferenciaDetalle->setImporte(-$retenciones['iva']['importe']);
                    $suma = $suma - $retenciones['iva']['importe'];
                    $transferenciaDetalle->setIdcategoria(11);
                    dump("TENEMOS IVA");
                    $transferenciaDetalle->setIdzona($zona);
                    $transferenciaDetalle->setFechapago($fechaDeposito);

                    $em->persist($transferenciaDetalle);
                    $em->flush();
                }
                if (isset($retenciones['ganancias'])) {

                    $transferenciaDetalle = new PagofacilTransferenciasDet();
                    $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                    $transferenciaDetalle->setCantidad(0);
                    $transferenciaDetalle->setImporte(-$retenciones['ganancias']['importe']);
                    $suma = $suma - $retenciones['ganancias']['importe'];
                    $transferenciaDetalle->setIdcategoria(12);
                    dump("TENEMOS GANACIAS");
                    $transferenciaDetalle->setIdzona($zona);
                    $transferenciaDetalle->setFechapago($fechaDeposito);

                    $em->persist($transferenciaDetalle);
                    $em->flush();
                }

                if (isset($iibb['iibb'])) {

                    $transferenciaDetalle = new PagofacilTransferenciasDet();
                    $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                    $transferenciaDetalle->setCantidad(0);
                    $transferenciaDetalle->setImporte(-$retenciones['ganancias']['importe']);
                    $suma = $suma - $retenciones['ganancias']['importe'];
                    $transferenciaDetalle->setIdcategoria(14);
                    dump("TENEMOS INGRESOS BUTOS");
                    $transferenciaDetalle->setIdzona($zona);
                    $transferenciaDetalle->setFechapago($fechaDeposito);
                    $em->persist($transferenciaDetalle);
                    $em->flush();
                }


            } else {

                $output->writeLn("El cuit  " . $cuitCliente . " no tiene retenciones");

            }


            $transferencia->setMontototal($suma);
            $transferencia->setArchivoIdreg($secuenciaOP);

            $secuenciaOP++;
        }


        $parametro->setValue($secuenciaOP);
        $em->flush();

        
        echo "------------------------------------------------------------------------------\n";
        echo "FIN sin ejecutar SP de UPDATE en cobros_credenciales y cobrosparciales. \n\n";

        //Procedure de SQLServer traducido a MySQL
        //$strsql = "exec dbo.CobrosTransferenciasExpressSetPagos " . "@fechadesde =:fechadesde, @fechahasta=:fechahasta";
        $strsql = "CALL CobrosTransferenciasExpressSetPagos (?, ?)";
        $conn = $em->getConnection();
        $stmt = $conn->prepare($strsql);

        $stmt->bindValue(1, $fechadesde);
        $stmt->bindValue(2, $fechahasta);
        $stmt->execute();
        $conn->close();

        $output->writeLn("Proceso finalizado 🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉\n\n");

        return 0;
        
    }

}
