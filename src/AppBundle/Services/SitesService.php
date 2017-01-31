<?php
namespace AppBundle\Services;

use Symfony\Component\DependencyInjection\Container;

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 1/30/17
 * Time: 11:42 PM
 */
class SitesService extends Container
{
    const serviceName = 'siteService';

    function processMessage()
    {
        $rabbitMq = $this->get('old_sound_rabbit_mq.task_example_producer')->publish(serialize(['test', 'bleah']));
    }
}