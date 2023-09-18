<?php

namespace AppBundle\Command;

use AfipBundle\Util\Connector;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class TestCommand extends ContainerAwareCommand
{

    protected $container;
    /** @var Connector $connector */
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
            ->setName('test')
            ->addArgument('cuit', InputArgument::REQUIRED, 'cuit test')
            ->setDescription('Genera archivo transferencias');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        set_time_limit(0);

        $cuit = $input->getArgument('cuit');

        $entorno = "dev";

        if (in_array($this->container->get('kernel')->getEnvironment(), array('prod'))) {
            $entorno = 'prod';
        }

        $hora = new \DateTime('now');
        $log_info = '[' . $hora->format('Y-m-d H:i:s') . ']' . '[' . $entorno . ']';

        $repo=$this->connector->getApiRepository("PadronConstancia");
        
        dump($repo->getData(array($cuit)));


    }

}