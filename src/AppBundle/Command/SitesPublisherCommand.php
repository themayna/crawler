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
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SitesPublisherCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('rabbitmq:publisher:sites')
            ->setDescription('Publish all website for further parsing')
            ->addArgument('site', InputArgument::OPTIONAL, 'Site name form the db');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var SitesService $service */
        $service = $this->getContainer()->get(SitesService::serviceName);
        $site = $input->getArgument('site');
        $service->publishSites($site);
    }
}