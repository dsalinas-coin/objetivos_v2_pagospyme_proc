<?php

namespace AppBundle\Command;

use AppBundle\Model\ArchivoPagoProveedoresFrances;
use AppBundle\Model\Registro10Header;
use AppBundle\Model\Registro20TransferenciaIndividual;
use AppBundle\Util\GeneradorArchivoFrances;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerarArchivoTransferenciasTarjetasCommand extends ContainerAwareCommand {

    protected $container;

    public function __construct($service_container) {
        $this->container = $service_container;

        parent::__construct();
    }

    protected function configure() {
        $this
                ->setName('genera:archivo:transferencia:tarjetas:express')
                ->setDescription('Genera archivo transferencias');
    }

    // php app/console genera:archivo:transferencia:tarjetas:express

    protected function execute(InputInterface $input, OutputInterface $output) {
        
        set_time_limit(0);

        $entorno = "dev";

        if (in_array($this->container->get('kernel')->getEnvironment(), array('prod'))) {
            $entorno = 'prod';
        }

        $hora = new \DateTime('now');
        $log_info = '[' . $hora->format('Y-m-d H:i:s') . ']' . '[' . $entorno . ']';

        $enviar = false;

        $em = $this->container->get('doctrine.orm.entity_manager');

        $transferencias = $em->getRepository("AppBundle:Transferencias")->createQueryBuilder('pt')->leftJoin("AppBundle:Clientes", "c", "WITH", "c.idcliente=pt.idcliente")->where("pt.archivoEnviado<>1 and pt.estado=1 and c.estado=0 and c.idcliente not in(41,52) and pt.montototal>0")->getQuery()->getResult();
        
        $totalesATransferir = array();
        $groupedArray = array();

        foreach ($transferencias as $transferencia) {

            $groupedArray[$transferencia->getNroorden()]['data'][] = $transferencia;
            $groupedArray[$transferencia->getNroorden()]['number'] = $transferencia->getNroorden();
        
        }

        $listaArchivos = array();

        foreach ($groupedArray as $transf) {

            $enviar = true;
            
            $totalesATransferir = array();
            $arrClientes = array();
            
            $totalFinal = 0;
            $secuencia = 1;
            $nroTransf = $transf['number'];

            $contador = 0;
            foreach ($transf['data'] as $transferencia) {

                $contador++;
                dump("VAMOS POR AQUÍ " . $contador . " DE " . count($transf['data']));

                if($contador == 2){break;}

                $totalesATransferir[$transferencia->getIdcliente()]['datoscliente'] = $em->getRepository("AppBundle:Clientes")->find($transferencia->getIdcliente());
                $totalesATransferir[$transferencia->getIdcliente()]['importe'] = $transferencia->getMontototal();
                $totalesATransferir[$transferencia->getIdcliente()]['idreg'] = $transferencia->getArchivoIdreg();
                
                $totalFinal += $transferencia->getMontototal();

            }

            $header = new Registro10Header();
            $header->setCantidad(count($totalesATransferir));
            $header->setFechaEmision($transferencia->getFechadeposito());
            $header->setImporteTotal($totalFinal);
        
            $lineas = array();

            foreach ($totalesATransferir as $transferenciaIndividual) {

                $esClienteAjeno = ($transferenciaIndividual['datoscliente']->getIdbanco() != 17);
                $registro = new Registro20TransferenciaIndividual($header->getCuit(), $secuencia, $transferenciaIndividual['importe'], $esClienteAjeno,$transferenciaIndividual['idreg']);

                $provincia = "";
                
                switch ($transferenciaIndividual['datoscliente']->getIdprovincia()) {

                    case "1":
                        $provincia = "02";
                        break;
                    case "2":
                        $provincia = "01";
                        break;
                    case "3":
                        $provincia = "03";
                        break;
                    case "4":
                        $provincia = "06";
                        break;
                    case "5":
                        $provincia = "07";
                        break;
                    case "6":
                        $provincia = "04";
                        break;
                    case "7":
                        $provincia = "05";
                        break;
                    case "8":
                        $provincia = "08";
                        break;
                    case "9":
                        $provincia = "09";
                        break;
                    case "10":
                        $provincia = "10";
                        break;
                    case "11":
                        $provincia = "11";
                        break;
                    case "12":
                        $provincia = "12";
                        break;
                    case "13":
                        $provincia = "13";
                        break;
                    case "14":
                        $provincia = "14";
                        break;
                    case "15":
                        $provincia = "15";
                        break;
                    case "16":
                        $provincia = "16";
                        break;
                    case "17":
                        $provincia = "17";
                        break;
                    case "18":
                        $provincia = "18";
                        break;
                    case "19":
                        $provincia = "19";
                        break;
                    case "20":
                        $provincia = "20";
                        break;
                    case "21":
                        $provincia = "21";
                        break;
                    case "22":
                        $provincia = "22";
                        break;
                    case "23":
                        $provincia = "40";
                        break;
                    case "24":
                        $provincia = "23";
                        break;
                }

                $secuencia++;
                
                //$emails = explode(",", $transferenciaIndividual['datoscliente']->getEmailAdmin());
                $emails =  explode(",",$this->container->getParameter("emails_to"));
                
                $registro->setDetalleProveedor($transferenciaIndividual['datoscliente']->getCuit(), $secuencia, $nroTransf, $transferenciaIndividual['datoscliente']->getCuit(), "CUI", substr($transferenciaIndividual['datoscliente']->getRazonsocial(), 0, 40),
                $transferenciaIndividual['datoscliente']->getCbu(), "", substr($transferenciaIndividual['datoscliente']->getDireccion(), 0, 24), "", "", "", "", "", $provincia, "080", $emails[0]);
                
                $secuencia++;
                
                $lineas[] = $registro;
            
            }

            $archivo = new ArchivoPagoProveedoresFrances($header, $lineas);
            $generador = new GeneradorArchivoFrances();
            
            $generador->generarArchivoFrances($archivo, $nroTransf);
            
            $listaArchivos[] = $nroTransf . ".pap";
        }

           try {

            if ($enviar) {
                
                $from['email'] = "postmaster@pagospyme.com";
                $from['name'] = "PagosPyme";
                $sender = $from;
                $to = explode(",", $this->container->getParameter("emails_to"));
                $message = \Swift_Message::newInstance()
                        ->setSubject("Archivo/s de Ordenes Banco Frances Debito Express")
                        ->setSender($sender['email'], $sender['name'])
                        ->setFrom($from['email'], $from['name'])
                        ->setTo($to)
                        ->setBody("se adjunta/n el/los archivos de debito express", 'text/html');
                foreach ($listaArchivos as $archivo) {

                    $message->attach(
                            \Swift_Attachment::fromPath($archivo)->setFilename($archivo)
                    );
                
                }
                
                $this->container->get('mailer')->send($message);
                
                $spool = $this->container->get('mailer')->getTransport()->getSpool();
                $transport = $this->container->get('swiftmailer.transport.real');

                $spool->flushQueue($transport);
                $output->writeLn("enviando mail de archivo de debito/credito ");
            
            }

            foreach ($transferencias as $transferencia) {
                $transferencia->setArchivoEnviado(1);
            }
            
            $em->flush();

        } catch (\Exception $e) {

            $output->writeln($log_info . 'Error enviando Mail ' . $e->getMessage());

        }

        foreach ($transferencias as $transferencia) {
            $transferencia->setArchivoEnviado = 1;
        }
        
        $em->flush();
    }
}
