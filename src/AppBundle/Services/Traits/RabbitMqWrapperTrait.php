<?php
namespace AppBundle\Services\Traits;

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/1/17
 * Time: 12:18 AM
 */
use AppBundle\Services\RabbitMqWrapper;

trait RabbitMqWrapperTrait
{
    protected $rabbitMqWrapper;

    /**
     * @return RabbitMqWrapper
     */
    public function getRabbitMqWrapper()
    {
        return $this->rabbitMqWrapper;
    }

    /**
     * @param RabbitMqWrapper $rabbitMqWrapper
     */
    public function setRabbitMqWrapper($rabbitMqWrapper)
    {
        $this->rabbitMqWrapper = $rabbitMqWrapper;
    }

}
