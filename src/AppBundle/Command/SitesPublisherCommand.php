<?php

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/1/17
 * Time: 12:11 AM
 */
namespace AppBundle\Command;

use AppBundle\Services\SitesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SitesPublisherCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('rabbitmq:publisher.sites')
            ->setDescription('Publish all website for further parsing');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var SitesService $service */
        $service = $this->getContainer()->get(SitesService::serviceName);
        $service->publishSites();
    }
}