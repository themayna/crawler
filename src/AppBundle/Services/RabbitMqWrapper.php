<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/1/17
 * Time: 12:40 AM
 */

namespace AppBundle\Services;

use OldSound\RabbitMqBundle\RabbitMq\ProducerInterface;

class RabbitMqWrapper implements ProducerInterface
{
    const serviceName = 'RabbitMqWrapper';

    protected $container;

    protected $producer;

    public function __construct($container)
    {
        $this->container = $container;
    }


    public function doPublish($producer, $message)
    {
        $this->getProducer($producer);
        $this->publish($this->jsonEncode($message));

    }

    private function getProducer($proucer)
    {
        $this->producer = sprintf('old_sound_rabbit_mq.%s_producer', $proucer);
    }


    private function jsonEncode($message)
    {
        return json_encode($message);
    }

    public function publish($msgBody, $routingKey = '', $additionalProperties = array())
    {
        $this->container->get($this->producer)->publish($msgBody);
    }
}