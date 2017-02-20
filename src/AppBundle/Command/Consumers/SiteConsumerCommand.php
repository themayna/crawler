<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/1/17
 * Time: 12:11 AM
 */
namespace AppBundle\Command\Consumers;

use AppBundle\Services\Consumers\SitesConsumer;

class SiteConsumerCommand extends BaseConsumerWrapper
{

    protected function getConsumerName()
    {
        return 'sites';
    }

    protected function getConsummerCommandDescription()
    {
        return 'Gets sites data and publises categories on queue';
    }

    protected function getMessage($msg)
    {
        /** @var SitesConsumer $serice */
        $serice = $this->getContainer()->get(SitesConsumer::serviceName);
        $serice->saveCategories($msg);
    }

}