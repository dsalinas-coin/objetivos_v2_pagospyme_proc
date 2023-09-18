<?php

namespace AppBundle\Command;

use AppBundle\Model\ArchivoPagoProveedoresFrances;
use AppBundle\Model\Registro10Header;
use AppBundle\Model\Registro20TransferenciaIndividual;
use AppBundle\Util\GeneradorArchivoFrances;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerarArchivoTransferenciasCommand extends ContainerAwareCommand
{

    protected $container;

    public function __construct($service_container)
    {
        $this->container = $service_container;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('genera:archivo:transferencia:express')
            ->addArgument('nroorden', InputArgument::REQUIRED, 'Numero de transferencia')
            ->setDescription('Genera archivo transferencias');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        set_time_limit(0);

        $nrotransf = $input->getArgument('nroorden');

        $entorno = "dev";

        if (in_array($this->container->get('kernel')->getEnvironment(), array('prod'))) {
            $entorno = 'prod';
        }
        
        $hora = new \DateTime('now');
        $log_info = '[' . $hora->format('Y-m-d H:i:s') . ']' . '[' . $entorno . ']';

        $arrClientes = array();

        $totalFinal = 0;
        $secuencia = 1;

        $em = $this->container->get('doctrine.orm.entity_manager');
        $transferencias = $em->getRepository("AppBundle:PagofacilTransferencias")->createQueryBuilder('pt')->leftJoin("pt.idcliente","c","WITH","c.idcliente=pt.idcliente")->where('pt.nroorden=:nrotransf and pt.estado=1 and c.estado=0') ->setParameter("nrotranf",$nrotransf)->getQuery()->getResult();

        $totalesATransferir = array();

        foreach ($transferencias as $transferencia) {

            $categorias = array();

            $detalles = $em->getRepository("AppBundle:PagofacilTransferenciasDet")->findBy(array('idtransferencia' => $transferencia->getIdtransferencia()));
            
            if (!isset($totalesATransferir[$transferencia->getIdcliente()])) {

                $totalesATransferir[$transferencia->getIdcliente()]['datoscliente'] = $em->getRepository("AppBundle:Clientes")->find($transferencia->getIdcliente());
                $totalesATransferir[$transferencia->getIdcliente()]['importe'] = 0;

            }

            foreach ($detalles as $detalle) {

                $totalesATransferir[$transferencia->getIdcliente()]['importe'] += round($detalle->getImporte(),2);
                $totalFinal += round($detalle->getImporte(),2);

            }

        }

        $header = new Registro10Header();
        $header->setCantidad(count($totalesATransferir));
        $header->setFechaEmision(new \DateTime());
        $header->setImporteTotal($totalFinal);
        
        $lineas = array();

        foreach ($totalesATransferir as $transferenciaIndividual) {

            $esClienteAjeno = ($transferenciaIndividual['datoscliente']->getIdbanco() != 11);
            
            $registro = new Registro20TransferenciaIndividual($header->getCuit(), $secuencia, $transferenciaIndividual['importe'], $esClienteAjeno);
            
            $provincia = "";

            switch ($transferenciaIndividual['datoscliente']->getIdprovincia()) {

                case "1":
                    $provincia="02";
                    break;
                case "2":
                    $provincia="01";
                    break;

                case "3":
                    $provincia="03";
                    break;

                case "4":
                    $provincia="06";
                    break;

                case "5":
                    $provincia="07";
                    break;

                case "6":
                    $provincia="04";
                    break;

                case "7":
                    $provincia="05";
                    break;

                case "8":
                    $provincia="08";
                    break;

                case "9":
                    $provincia="09";
                    break;

                case "10":
                    $provincia="10";
                    break;

                case "11":
                    $provincia="11";
                    break;

                case "12":
                    $provincia="12";
                    break;

                case "13":
                    $provincia="13";
                    break;

                case "14":
                    $provincia="14";
                    break;

                case "15":
                    $provincia="15";
                    break;

                case "16":
                    $provincia="16";
                    break;

                case "17":
                    $provincia="17";
                    break;

                case "18":
                    $provincia="18";
                    break;

                case "19":
                    $provincia="19";
                    break;

                case "20":
                    $provincia="20";
                    break;

                case "21":
                    $provincia="21";
                    break;

                case "22":
                    $provincia="22";
                    break;

                case "23":
                    $provincia="40";
                    break;

                case "24":
                    $provincia="23";
                    break;

            }

            $secuencia++;

            //$emails=explode(",",$transferenciaIndividual['datoscliente']->getEmailAdmin());
            $emails =  explode(",",$this->container->getParameter("emails_to"));

            $registro->setDetalleProveedor($transferenciaIndividual['datoscliente']->getCuit(), $secuencia, $nrotransf, $transferenciaIndividual['datoscliente']->getCuit(), "CUI", substr( $transferenciaIndividual['datoscliente']->getRazonsocial(),0,40),
 
            $transferenciaIndividual['datoscliente']->getCbu(), "", substr($transferenciaIndividual['datoscliente']->getDireccion(),0,24), "", "", "", "", "",$provincia,"080",$emails[0]);

            $secuencia++;

            $lineas[]=$registro;
        }

        $archivo=new ArchivoPagoProveedoresFrances($header,$lineas);
        $generador=new GeneradorArchivoFrances();
 
        $generador->generarArchivoFrances($archivo,$nrotransf);

    }

}