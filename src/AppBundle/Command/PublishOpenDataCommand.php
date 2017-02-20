<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/17/17
 * Time: 7:58 PM
 */

namespace AppBundle\Command;

use AppBundle\Services\SitesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PublishOpenDataCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('rabbitmq:publisher:open.source.sites')
            ->setDescription('Publish all open source sites for parsing')
            ->addArgument('pages', InputArgument::OPTIONAL, 'pages to be indexed, default is all');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var SitesService $service */
        $service = $this->getContainer()->get(SitesService::serviceName);
        $site = $input->getArgument('pages');
        $service->publishSites($site);
    }
}