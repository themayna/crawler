<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/1/17
 * Time: 12:11 AM
 */
namespace AppBundle\Command\Consumers;

use AppBundle\Services\Consumers\CategoryPagesConsumer;
use AppBundle\Services\Consumers\SitesConsumer;

class CategoryPagesConsumerCommand extends BaseConsumerWrapper
{

    protected function getConsumerName()
    {
        return 'categories.pages';
    }

    protected function getConsummerCommandDescription()
    {
        return 'Gets the videos urls from different category pages';
    }

    protected function getMessage($msg)
    {
        /** @var CategoryPagesConsumer $service */
        $service = $this->getContainer()->get(CategoryPagesConsumer::serviceName);
        $service->getVideosUrl($msg);

    }

}