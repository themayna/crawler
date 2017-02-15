<?php

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/1/17
 * Time: 12:11 AM
 */
namespace AppBundle\Command;

use AppBundle\Services\CategoryPagesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CategoryPagesPublisherCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('rabbitmq:publisher:category.pages')
            ->setDescription('Publish website pages with skip param for later crawling');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var CategoryPagesService $categories */
        $service = $this->getContainer()->get(CategoryPagesService::serviceName);
        $service->generateCategoryPages();
    }
}