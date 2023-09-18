<?php

namespace AppBundle\Command;

use AfipBundle\Util\Connector;
use AfipBundle\Soap\Retencion as Retencion;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerarRetencionesPagofacilCommand extends ContainerAwareCommand
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
            ->setName('genera:retenciones:pagofacil')
            ->setDescription('Genera retenciones de pagofacil');
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

        $strsql = "select pdt.importe,pt.montototal,pt.archivo_idreg,c.cuit,eg.idexclusion ganancias,pt.nroorden,ei.idexclusion iva,pdt.idcategoria,pdt.fechapago 
            from pagofacil_transferencias_det pdt " .
            " left join pagofacil_transferencias pt on pt.idtransferencia=pdt.idtransferencia " .
            " left join clientes c on c.idcliente=pt.idcliente " .
            " left join exencion_iva ei on ei.cuit=c.cuit " .
            " left join exencion_ganancias eg on eg.cuit=c.cuit " .
            " where pdt.retencion_enviada is null and pdt.fechapago>'20200401' and pdt.idzona=5 and pdt.idcategoria in(11,12) AND c.cuit IS NOT NULL";

        $conn = $em->getConnection();
        $stmt = $conn->prepare($strsql);
        
        $stmt->execute();
        
        $resultado = $stmt->fetchAll();
        
        $cuits = array();

        foreach ($resultado as $data) {
            
            if (!in_array($data['cuit'], $cuits)) {
                $cuits = array_merge($cuits, array($data['cuit']));
            }
            
        }

        //dump($cuits);
        //die;
        $repoPadron = $this->connector->getApiRepository("PadronConstancia");
        $infoAfip = $repoPadron->getData($cuits);
        
        foreach ($resultado as $data) {
            
            $certificado = new Retencion\Type\Certificado();
            $certificado=$certificado->withVersion(100);
            $certificado=$certificado->withImpuesto(216);
            $certificado=$certificado->withRegimen(831);
            
            if ($infoAfip[$data['cuit']]['status'] == "32_exento" || $infoAfip[$data['cuit']]['status'] == "30_iva") {
                $certificado=$certificado->withCondicion(1);
            } else {
                $certificado=$certificado->withCondicion(2);
            }
            
            $certificado=$certificado->withImposibilidadRetencion(false);
            $certificado=$certificado->withImporteRetencion(-$data['importe']);
            $certificado=$certificado->withImporteBaseCalculo(($data['montototal'] + $data['importe']));
            
            if ($data['idcategoria'] == 11) {//iva
                
            }elseif ($data['idcategoria'] == 12) {//ganancias
                
            }
            
            ///EU! esto cuando aplica? si está excluido de retenciones, ni la generamos, no?!
            $certificado=$certificado->withRegimenExclusion(false);
            $certificado=$certificado->withPorcentajeExclusion(0);
            $certificado=$certificado->withFechaPublicacion(null);//tmb, wtf?
            $certificado=$certificado->withTipoComprobante(6);//orden de pago
            $certificado=$certificado->withFechaComprobante($data['fechapago']);
            $certificado=$certificado->withNumeroComprobante("991".str_pad($data['nroorden'],5,"0",STR_PAD_LEFT));//es lo que se hace en el banco frances
            $certificado=$certificado->withCoe(" ");
            $certificado=$certificado->withCae(" ");
            $certificado=$certificado->withCoeOriginal(" ");
            $certificado=$certificado->withImporteComprobante($data['montototal']);
            $certificado=$certificado->withCuitRetenido($data['cuit']);
            $certificado=$certificado->withMotivoAnulacion(4);
            dump("VAMOS POR AQUI");
        }
        
        $zona = 5; //General
        $tipo = 8; //Express

        $output->writeLn("Proceso finalizado");
        
        return 0;
    
    }

}
