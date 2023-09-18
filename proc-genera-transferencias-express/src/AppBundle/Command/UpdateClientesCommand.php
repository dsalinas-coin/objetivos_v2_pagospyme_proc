<?php

namespace AppBundle\Command;

use AfipBundle\Util\Connector;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateClientesCommand extends ContainerAwareCommand
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
            ->setName('update:clientes:afip')
            ->setDescription('accede a la afip y en base a la respuesta, actualiza el cliente la columna estado_afip');
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

        $strsql = "select idcliente,cuit from clientes where estado=0 and cuit<>'' and cuit<>'00000000000' and cuit<>'000000000000'";
	    //$strsql = "select idcliente,cuit from clientes where idcliente=133";
        
        $conn = $em->getConnection();
        $stmt = $conn->prepare($strsql);
        $stmt->execute();
	    $clientes = $stmt->fetchAll();
	    
        echo "\n\n----------------Se van a actualizar " . sizeof($clientes) . " clientes" . "----------------\n";

        $cuitRetenciones=array();
        
        foreach ($clientes as $cliente) {
        
            if (!in_array($cliente['cuit'], $cuitRetenciones) ) {
                $cuitRetenciones = array_merge($cuitRetenciones, array($cliente['cuit']));
            }

        }
    
        $repoPadron = $this->connector->getApiRepository("PadronConstancia");
        //$cuitRetenciones=array_unique($cuitRetenciones);
        $infoAfip = $repoPadron->getData($cuitRetenciones);
        
	    foreach($cuitRetenciones as $cuit){
	        
            if (isset($infoAfip[$cuit])) {
        	
                $impuesto = $infoAfip[$cuit];
		        $leyenda="";
        	    
                //dejo fijo el medio de pago, cuando se termine de agregar coin, hay que agregar acá el comportamiento, checkeando tambien la lista de estaciones de servicio y demas
        	    switch ($impuesto['status']) {
            	    case "mono":
                	$leyenda="Monotributista";
                	break;
            	    case "cert_error":
                	$leyenda="Error";
                        break;
            	    case "super_error":
                	$leyenda="La afip ni lo registra";
                        break;
            	    case "32_exento":
                	$leyenda="IVA exento";
                	break;
            	    case "30_iva":
                	$leyenda="Responsable ins.";
                	break;
        	    }
		        
                $infoAfip[$cuit]['leyenda']=$leyenda;
    	    
            }
	    }

	    foreach($clientes as $cliente){
    	    
            $sqlstr="update clientes set estado_afip='".$infoAfip[$cliente['cuit']]['leyenda']."' where idcliente=".$cliente['idcliente'];
            //echo $sqlstr."\n";
	        $stmt = $conn->prepare($sqlstr);
    	    
            $stmt->execute();
            dump("ACTUALIZANDO " . sizeof($clientes) . " clientes");
        
        }
	
        $output->writeLn("Proceso finalizado");
 
        return 0;
 
    }

}