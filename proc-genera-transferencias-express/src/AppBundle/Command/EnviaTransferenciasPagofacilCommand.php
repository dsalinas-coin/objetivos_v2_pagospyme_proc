<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class EnviaTransferenciasPagofacilCommand extends ContainerAwareCommand
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
            ->setName('envia:transferencia:express:pagofacil')
            ->setDescription('Envia transferencias');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        set_time_limit(0);

        $entorno = "dev";

        if (in_array($this->container->get('kernel')->getEnvironment(), array('prod'))) {
            $entorno = 'prod';
        }

        $hora = new \DateTime('now');
        $log_info = '[' . $hora->format('Y-m-d H:i:s') . ']' . '[' . $entorno . ']';

        $em = $this->container->get('doctrine.orm.entity_manager');
        
        $transferencias = $em->getRepository("AppBundle:PagofacilTransferencias")->findBy(array('emailEnviado' => null, 'idtransferenciaTipo' => 8, 'estado' => 1));
        
        $template = $em->getRepository("AppBundle:EmailsPymes")->find(36);
        
        $zonas = array();
        $categorias = array();
        $arrClientesMails = array();

        foreach ($transferencias as $transferencia) {

            $detalles = $em->getRepository("AppBundle:PagofacilTransferenciasDet")->findBy(array('idtransferencia' => $transferencia->getIdtransferencia()));

            if (!isset($arrClientesMails[$transferencia->getIdcliente()])) {

                $arrClientesMails[$transferencia->getIdcliente()] = $em->getRepository("AppBundle:Clientes")->find(1615);
            
            }

            $cantidad = 0;

            $body = $template->getPbody();
            $body = str_replace('[contacto]', $arrClientesMails[$transferencia->getIdcliente()]->getContacto(), $body);
            $body = str_replace('[nombrefantasia]', $arrClientesMails[$transferencia->getIdcliente()]->getNombrefantasia(), $body);
            $body = str_replace('[dia]', $transferencia->getFechadeposito()->format("d/m/Y"), $body);
            $body = str_replace('[total]', number_format($transferencia->getMontototal(), 2, ",", ".") , $body);
            
            $table = "<table class=\"MsoNormalTable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" style=\"border:grey\"><tbody>";
            $table .= "<tr>
                            <td width=\"80\" style=\"width:60.0pt;background:#C8C5AA;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-size:9.0pt\">Dia</span></b></div></td>
                            <td width=\"150\" style=\"width:112.5pt;background:#C8C5AA;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-size:9.0pt\">Cliente</span></b></div></td>
                            <td width=\"140\" style=\"width:105.0pt;background:#C8C5AA;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-size:9.0pt\">Zona</span></b></div></td>
                            <td width=\"150\" style=\"width:112.5pt;background:#C8C5AA;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-size:9.0pt\">Tipo</span></b></div></td>
                            <td width=\"70\" style=\"width:52.5pt;background:#C8C5AA;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-size:9.0pt\">Cantidad</span></b></div></td>
                            <td width=\"70\" style=\"width:52.5pt;background:#C8C5AA;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-size:9.0pt\">Importe</span></b></div></td>
                        </tr>";

            // En la variable $detalles tenemos el detalle de la(s) transferencia(s)
            foreach ($detalles as $detalle) {
            
                if (!isset($zonas[$detalle->getIdzona()])) {

                    $zonas[$detalle->getIdzona()] = $em->getRepository("AppBundle:PagofacilTransferenciasZonas")->find($detalle->getIdzona());
                
                }

                if (!isset($categorias[$detalle->getIdcategoria()])) {

                    $categorias[$detalle->getIdcategoria()] = $em->getRepository("AppBundle:PagofacilTransferenciasCateg")->find($detalle->getIdcategoria());
                
                }

                //armamos la data del body con el detalle que se enviará en el mail
                $table .= "<tr>
                                <td style=\"background:#CCCBBD;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:9.0pt\">" . $detalle->getFechapago()->format("d/m/Y") . "</span></div></td>
                                <td style=\"background:#CCCBBD;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:9.0pt\">" . $arrClientesMails[$transferencia->getIdcliente()]->getNombrefantasia() . "</span></div></td>
                                <td style=\"background:#CCCBBD;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:9.0pt\">" . $zonas[$detalle->getIdzona()]->getDescripcion() . "</span></div></td>
                                <td style=\"background:#CCCBBD;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:9.0pt\">" . $categorias[$detalle->getIdcategoria()]->getDescripcion() . "</span></div></td>
                                <td style=\"background:#CCCBBD;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:9.0pt\">" . number_format($detalle->getCantidad(), 2, ",", ".") . "</span></div></td>
                                <td style=\"background:#CCCBBD;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:9.0pt\">" . number_format($detalle->getImporte(), 2, ",", ".") . "</span></div></td>
                            </tr>";
                
                $cantidad += $detalle->getCantidad();

            }
            
            $table .= "<tr>
                            <td colspan=\"5\" style=\"background:#C8C5AA;padding:.75pt 6.0pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"right\" style=\"text-align:right\">
                                <b><span style=\"font-size:9.0pt\">Total a transferir</span></b><span style=\"font-size:9.0pt\"></span></div>
                            </td>
                            <td style=\"background:#C8C5AA;padding:.75pt .75pt .75pt .75pt\"><div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\">
                                <b><span style=\"font-size:9.0pt\">$ " . number_format($transferencia->getMontototal(), 2, ",", ".") . "</span></b><span style=\"font-size:9.0pt\"></span></div>
                            </td>
                        </tr>
                    </tbody></table>";
            
            $body = str_replace('[cantidad]', $cantidad, $body);
            $body = str_replace('[tabladatos]', $table, $body);

            $output->writeLn($template->getPfrom());

            $from = $this->parseAddressList($template->getPfrom());
            $sender = $from;
            $subject = $template->getPsubject();
        
            $enviar = true;
        
            //$to =  explode(",",$arrClientesMails[$transferencia->getIdcliente()]->getEmailprocesos());
            $to =  explode(",",$this->container->getParameter("emails_to"));
            //$cco = explode(",",$this->container->getParameter("emails_to"));
            $body=utf8_encode($body);
            
	        $output->writeLn(json_encode($to));
            dump("----------------------------------");
            dump("----------------------------------");

            try {

                if ($enviar) {

                    $message = \Swift_Message::newInstance()
                        ->setSubject($subject)
                        ->setSender($sender['email'], $sender['name'])
                        ->setFrom($from['email'], $from['name'])
                        ->setTo($to)
			            //->setBcc($cco)
                        ->setBody($body, 'text/html');
                    $this->container->get('mailer')->send($message);
                    $spool = $this->container->get('mailer')->getTransport()->getSpool();
                    $transport = $this->container->get('swiftmailer.transport.real');
                    $spool->flushQueue($transport);
                    $output->writeLn("enviando mail de transferencia ".$transferencia->getIdtransferencia());
                
                }

		        $transferencia->setEmailEnviado(true);
                $em->flush();

            } catch (\Exception $e) {

                $output->writeln($log_info . 'Error enviando Mail ' . $e->getMessage());
            
            }
        }
    }

    public function parseAddressList($address)
    {

        $name = "";

        preg_match("#\"([\w\s]+)\"#", $address, $matches_1);

        if (sizeof($matches_1) > 0) {
            $name = $matches_1[1];
        }

        preg_match("/[^0-9<][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}/i", $address, $matches_2);

        $email = $matches_2[0];

        if ($name != "") {

            $data['name'] = $name;
            $data['email'] = $email;

        } else {

            $data['name'] = $email;
            $data['email'] = $email;

        }

        return $data;


    }
}
