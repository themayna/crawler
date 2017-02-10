<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/10/17
 * Time: 6:30 PM
 */

namespace AppBundle\Command;


use AppBundle\Services\Consumers\CategoryConsumer;

class CategoryConsumerCommand extends BaseConsumerWrapper
{

    protected function getConsummerCommandDescription()
    {
        return 'Gets categories data and saves them to mongo';
    }

    protected function getConsumerName()
    {
        return 'categories';
    }

    protected function getMessage($msg)
    {
        /** @var CategoryConsumer $service */
        $service = $this->getContainer()->get(CategoryConsumer::serviceName);
        $service->saveCategoryInfo($msg);
    }

}