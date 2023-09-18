<?php

namespace AppBundle\Command;

use AppBundle\Entity\Transferencias;
use AppBundle\Util\GeneradorRetenciones;
use AppBundle\Entity\TransferenciasDet;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Unirest\Request;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AfipBundle\Util\Connector;

class GenerarTransferenciasTarjetasCommand extends ContainerAwareCommand
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
            ->setName('genera:transferencias:tarjetas:express')
            ->addArgument('fechadesde', InputArgument::REQUIRED, 'Fecha de ingreso desde yyyymmdd')
            ->addArgument('fechahasta', InputArgument::REQUIRED, 'Fecha de ingreso hasta')
            ->addArgument('fechadeposito', InputArgument::REQUIRED, 'Fecha de deposito')
            ->addArgument('mediopago', InputArgument::REQUIRED, 'MedioPago')
            ->setDescription('Genera transferencias para express  en un rango de fechas indicado yyyymmdd');
    }

    // php app/console genera:transferencias:tarjetas:express 20230101 20230131 20230131 40

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        set_time_limit(0);
        
        $fechadesde = $input->getArgument('fechadesde');
        $fechadesde = \DateTime::createFromFormat("Ymd", $fechadesde);
        $fechahasta = $input->getArgument('fechahasta');
        $fechahasta = \DateTime::createFromFormat("Ymd", $fechahasta);
        
        $fechadesde->setTime(0, 0, 0);
        $fechahasta->setTime(0, 0, 0);
        
        $fechaDeposito = \DateTime::createFromFormat("Ymd", $input->getArgument('fechadeposito'));
        $medioPago = $input->getArgument('mediopago');
        $entorno = "dev";

        if (in_array($this->container->get('kernel')->getEnvironment(), array('prod'))) {
            $entorno = 'prod';
        }
        
        $hora = new \DateTime('now');
        $log_info = '[' . $hora->format('Y-m-d H:i:s') . ']' . '[' . $entorno . ']';

        $em = $this->container->get('doctrine.orm.entity_manager');
        $clientes = $this->getClientes($medioPago, $fechadesde, $fechahasta);
        
        $resultado = array();
	
        foreach ($clientes as $row) {
            $resultado = array_merge($resultado, $this->getComisionesTarjetasGw($row, $medioPago, $fechadesde, $fechahasta));
        }
    
        $zona = 5; //General
    
        switch ($medioPago) {
            case 40:
                $tipo = 1; //Debito
                break;
            case 41:
                $tipo = 2; //Credito
                break;
        }

	    $output->writeLn("Iniciando proceso...");
                    
        $categoriaComp = 7;
        $categoriaVar = 6;
        $importeTotalTransferencia = 0;
        $cantidadTotalTransferencia = 0;
        $currIdcliente = 0;
        $transferencia = null;
        $sumaDetalles = 0;
        $sumaTotales = 0;
        $parametro = $em->getRepository("AppBundle:Parametros")->createQueryBuilder('p')->where("p.name='BANK_SEQ_ID'")->getQuery()->getSingleResult();
        $secuenciaOP = (int)$parametro->getValue();
        $cuitRetenciones = array();

        foreach ($resultado as $ArrTransferenciaDetalle) {
        
            if (!in_array($ArrTransferenciaDetalle['cuit'], $cuitRetenciones) && $ArrTransferenciaDetalle['certificado_pyme'] == 0) {
                $cuitRetenciones = array_merge($cuitRetenciones, array($ArrTransferenciaDetalle['cuit']));
            }
        
        }

	    $output->writeLn("Antes de afip");
        $repoPadron = $this->connector->getApiRepository("PadronConstancia");
        $infoAfip = $repoPadron->getData($cuitRetenciones);
        $generadorRetenciones = new GeneradorRetenciones($infoAfip, $output);

        foreach ($resultado as $ArrTransferenciaDetalle) {
            $cuitRetenciones = array_merge($cuitRetenciones, array($ArrTransferenciaDetalle['cuit']));
        }
    
        $infoAfipProv = $repoPadron->getData($cuitRetenciones);
	    
        $output->writeLn("Después de afip");
        
        $cuitCliente = "";
        $exIvaCliente = 0;
        $exGanCliente = 0;

        foreach ($resultado as $ArrTransferenciaDetalle) {
            
            $saltearDetallesEx = false;

            if ($ArrTransferenciaDetalle['cantidad'] == "") {
                $saltearDetallesEx = true;
            }
        
            $fechapago = \DateTime::createFromFormat("Y-m-d", $ArrTransferenciaDetalle['fechapago']);
        
            if ($currIdcliente != $ArrTransferenciaDetalle['idcliente']) {
            
                if ($transferencia != null) {
                    $output->writeLn("la transferencia con id " . $transferencia->getIdtransferencia() . " posee " . $sumaTotales . " de totales y " . $sumaDetalles . " de detalles");
                    $fecha = new \DateTime();
                    $transferencia->setNroorden(str_pad($fecha->format("yz") . $medioPago, 8, "0", STR_PAD_RIGHT));
                    $suma = $sumaTotales - $sumaDetalles;
		    
                    if($suma>0){
			            $suma = round($suma, 2);
			            $retenciones = $generadorRetenciones->getRetenciones($cuitCliente, $suma, $exIvaCliente, $exGanCliente);
        		
                        if (sizeof($retenciones) > 0) {
	                    
                            if (isset($retenciones['iva'])) {
        		                $transferenciaDetalle = new TransferenciasDet();
	                            $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
        		                $transferenciaDetalle->setCantidad(0);
	                            $transferenciaDetalle->setImporte(-$retenciones['iva']['importe']);
        		                $suma = $suma - $retenciones['iva']['importe'];
	                            $transferenciaDetalle->setIdcategoria(5);
	                            $transferenciaDetalle->setIdzona($zona);
        		                $transferenciaDetalle->setFechapago($fechaDeposito);
	                            $em->persist($transferenciaDetalle);
        		                $em->flush();
	                        }

        		            if (isset($retenciones['ganancias'])) {

	                            $transferenciaDetalle = new TransferenciasDet();
	                            $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
	                            $transferenciaDetalle->setCantidad(0);
	                            $transferenciaDetalle->setImporte(-$retenciones['ganancias']['importe']);
	                            $suma = $suma - $retenciones['ganancias']['importe'];
	                            $transferenciaDetalle->setIdcategoria(6);
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
                	    
                        $em->flush();

		            } else {
	        	
                        $output->writeLn("Borrando transferencia por no tener montos " . $transferencia->getIdtransferencia());
    	        	    $em->remove($transferencia);
		        
                    }
                    
                }

                $currIdcliente = $ArrTransferenciaDetalle['idcliente'];
                $transferencia = null;
                $transferencia = new Transferencias();
                $transferencia->setIdcliente($ArrTransferenciaDetalle['idcliente']);
                $transferencia->setEmailEnviado(null);
                $transferencia->setEstado(1);
                $cuitCliente = $ArrTransferenciaDetalle['cuit'];
                $exIvaCliente = $ArrTransferenciaDetalle['ex_iva'];
                $exGanCliente = $ArrTransferenciaDetalle['ex_ganancias'];
                $transferencia->setFechadeposito($fechaDeposito);
                //se le muestra el total, o lo que se le va a transferir?
                $transferencia->setMontototal(0);
                $transferencia->setIdtransferenciaTipo($tipo);
                $transferencia->setFechaingreso(new \DateTime('now'));
                $sumaDetalles = 0;
                $sumaTotales = 0;
                $em->persist($transferencia);
                $em->flush();
                $output->writeLn("Creada la transferencia " . $transferencia->getIdtransferencia() . " del cliente " . $currIdcliente);

            }

            if (!$saltearDetallesEx) {
                
                //primero la transferencia detalle correspondiente a la comision
                $transferenciaDetalle = null;
                $transferenciaDetalle = new TransferenciasDet();
                $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                $transferenciaDetalle->setCantidad($ArrTransferenciaDetalle['cantidad']);
                $transferenciaDetalle->setImporte($ArrTransferenciaDetalle['importe']);
                $transferenciaDetalle->setIdcategoria(1);
                $transferenciaDetalle->setIdzona($zona);
                $transferenciaDetalle->setFechapago($fechapago);
                $em->persist($transferenciaDetalle);
                $em->flush();
                $sumaTotales += $ArrTransferenciaDetalle['importe'];
                $output->writeLn("Guardando detalle para la transferencia " . $transferencia->getIdtransferencia() . " detalle con categoria 1");
                
                //transferencia Detalle comision
                $transferenciaDetalle = null;
                $transferenciaDetalle = new TransferenciasDet();
                $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
                $transferenciaDetalle->setCantidad(0);
                $transferenciaDetalle->setImporte(-$ArrTransferenciaDetalle['cobrado']);
                $transferenciaDetalle->setIdcategoria(4);
                $transferenciaDetalle->setIdzona($zona);
                $transferenciaDetalle->setFechapago($fechapago);
                $em->persist($transferenciaDetalle);
                $em->flush();
                $sumaDetalles += $ArrTransferenciaDetalle['cobrado'];
                $output->writeLn("Guardando detalle para la transferencia " . $transferencia->getIdtransferencia() . " detalle con categoria 4");
                
                //transferencia Detalle iva
                $transferenciaDetalle = null;
                $impuesto=$infoAfipProv[$ArrTransferenciaDetalle['cuit']];

                if ($impuesto['provincia'] != 24 && $impuesto['descripcionProvincia'] != 'TIERRA DEL FUEGO') {

                    $transferenciaDetalle = new TransferenciasDet();
	                $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
    	            $transferenciaDetalle->setCantidad(0);
	                $transferenciaDetalle->setImporte(-($ArrTransferenciaDetalle['cobrado'] * 0.21));
	                $transferenciaDetalle->setIdcategoria(2);
	                $transferenciaDetalle->setIdzona($zona);
	                $transferenciaDetalle->setFechapago($fechapago);
	                $em->persist($transferenciaDetalle);
	                $em->flush();
	                $sumaDetalles += $ArrTransferenciaDetalle['cobrado'] * 0.21;
	                $output->writeLn("Guardando detalle para la transferencia " . $transferencia->getIdtransferencia() . " detalle con categoria 2");
		        }
            }
        }

        if ($transferencia != null) {
            
            if ($sumaDetalles == 0) {

                $output->writeLn("Borrando transferencia por no tener montos " . $transferencia->getIdtransferencia());
                $em->remove($transferencia);
            
            } else {
            
                $output->writeLn("la transferencia con id " . $transferencia->getIdtransferencia() . " posee " . $sumaTotales . " de totales y " . $sumaDetalles . " de detalles");
            
                $fecha = new \DateTime();
            
                $transferencia->setNroorden(str_pad($fecha->format("yz") . $medioPago, 8, "0", STR_PAD_RIGHT));
            
                $suma = $sumaTotales - $sumaDetalles;
		        
                if ($suma>0) {
		        
                    $suma = round($suma, 2);
		            $retenciones = $generadorRetenciones->getRetenciones($cuitCliente, $suma, $exIvaCliente, $exGanCliente);

    			    if (sizeof($retenciones) > 0) {
	                    
                        if (isset($retenciones['iva'])) {
        	
                            $transferenciaDetalle = new TransferenciasDet();
	                        $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
        		            $transferenciaDetalle->setCantidad(0);
	                        $transferenciaDetalle->setImporte(-$retenciones['iva']['importe']);
        		            $suma = $suma - $retenciones['iva']['importe'];
	                        $transferenciaDetalle->setIdcategoria(5);
	                        $transferenciaDetalle->setIdzona($zona);
        		            $transferenciaDetalle->setFechapago($fechaDeposito);
	                        $em->persist($transferenciaDetalle);
        		            $em->flush();
	        
                        }

        		        if (isset($retenciones['ganancias'])) {

	                        $transferenciaDetalle = new TransferenciasDet();
	                        $transferenciaDetalle->setIdtransferencia($transferencia->getIdtransferencia());
	                        $transferenciaDetalle->setCantidad(0);
	                        $transferenciaDetalle->setImporte(-$retenciones['ganancias']['importe']);
	                        $suma = $suma - $retenciones['ganancias']['importe'];
	                        $transferenciaDetalle->setIdcategoria(6);
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

		        } else {
	            
                    $output->writeLn("Borrando transferencia por no tener montos " . $transferencia->getIdtransferencia());
    	            $em->remove($transferencia);
		        
                }
                
            }

            $parametro->setValue($secuenciaOP);
            $em->flush();
        
        }
        
        $output->writeLn("Proceso finalizado");

        return 0;
    }

    private function getClientes($medioPago, $fechadesde, $fechahasta)
    {
        $fechahastaplus = clone($fechahasta); //we split the
        $intervaloDia = new \DateInterval('P1D');
        
        $fechahastaplus->add($intervaloDia);
        
        $em = $this->container->get('doctrine.orm.entity_manager');
        
        $strsql = "select distinct(c.diasremision) idcliente_new,c.idcliente,c.cuit,c.certificado_pyme,case when ei.idexclusion is null then 0 else 1 end ex_iva,case when eg.idexclusion is null then 0 else 1 end ex_ganancias from clientes c 
	                left join mediospago_clientes mc on mc.idcliente=c.idcliente 
	                left join exencion_iva ei on ei.cuit=c.cuit
	                left join exencion_ganancias eg on eg.cuit=c.cuit
	                left join servicios s on s.idcliente=c.idcliente
	                left join facturas f on f.idservicio=s.idservicio
	                left join cobrosparciales cp on cp.idfactura=f.idfactura and mc.idmedio=cp.idmediopago
	                where mc.idmedio=:idmedio and mc.activo=1  and cp.fechaingreso between :fechadesde and :fechahasta and c.diasremision is not null";
        
        $conn = $em->getConnection();
        $stmt = $conn->prepare($strsql);
        $strDesde = $fechadesde->format("Ymd");
        $strHasta = $fechahastaplus->format("Ymd");
        
        $stmt->bindParam("idmedio", $medioPago);
        $stmt->bindParam("fechadesde", $strDesde);
        $stmt->bindParam("fechahasta", $strHasta);
        $stmt->execute();
        
        $clientes = $stmt->fetchAll();

        return $clientes;
    }

    private function getComisionesTarjetasGw($cliente, $medioPago, $fechadesde, $fechahasta)
    {

        $resultados = array();
        
        $intervaloDia = new \DateInterval('P1D');
	    $fechadesde=clone($fechadesde);
    	$fechahastaSeg=clone($fechahasta);
        
        $fechahastaSeg->add(new \DateInterval('P2D'));
        
        $rangoSegmentos = new \DatePeriod($fechadesde, $intervaloDia, $fechahastaSeg);
        $fechaFromSegmentoActual = $fechadesde;
    
        foreach ($rangoSegmentos as $segmento) {
    
            if ($fechadesde != $segmento) {
    
                $resultado = $this->getComisionesSegmento($cliente, $medioPago, $fechaFromSegmentoActual, $segmento);
    
                if ($resultado) {
                    $resultados[] = $resultado;
                }
            
            }
    
            $fechaFromSegmentoActual = $segmento;
    
        }
    
        return $resultados;

    }

    private function getComisionesSegmento($cliente, $medioPago, $fechadesdeSeg, $fechahastaSeg)
    {

        $resultado = array();

        $medioString = "";
    
        switch ($medioPago) {
            case 40:
                $medioString = "DEBITO";
                break;
            case 41:
                $medioString = "CREDITO";
                break;
        }
	
        $parameters = array(
            "from_date" => $fechadesdeSeg->format(\DateTime::ATOM),
            "to_date" => $fechahastaSeg->format(\DateTime::ATOM),
            "payment_method" => $medioString,
            "client_reference_id" => $cliente['idcliente_new']
        );

        $response = Request::get($this->container->getParameter('url_apigw'), $headers = array(), $parameters);
        $data = json_decode($response->raw_body, true);
    
        if (isset($data[0]) && isset($data[0]['total']) && $data[0]['total'] > 0) {

            $resultado['importe'] = $data[0]['total'];
            $resultado['cantidad'] = $data[0]['transactions'];
            $resultado['fechapago'] = $fechadesdeSeg->format("Y-m-d");
            $resultado['cobrado'] = $data[0]['commission'];
            $resultado['idcliente'] = $cliente['idcliente'];
            $resultado['cuit'] = $cliente['cuit'];
            $resultado['certificado_pyme'] = $cliente['certificado_pyme'];
            $resultado['ex_ganancias'] = $cliente['ex_ganancias'];
            $resultado['ex_iva'] = $cliente['ex_iva'];
    
            return $resultado;
 
        } else {
    
            return false;
    
        }
    }
}