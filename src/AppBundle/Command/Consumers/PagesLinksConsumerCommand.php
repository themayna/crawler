<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/10/17
 * Time: 6:30 PM
 */

namespace AppBundle\Command\Consumers;


use AppBundle\Services\Consumers\CategoryConsumer;

class PagesLinksConsumerCommand extends BaseConsumerWrapper
{

    protected function getConsummerCommandDescription()
    {
        return 'Gets page content and saves it to db';
    }

    protected function getConsumerName()
    {
        return 'pages.links';
    }

    protected function getMessage($msg)
    {
        var_dump($msg);die;
    }

}