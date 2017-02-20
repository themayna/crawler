<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/7/17
 * Time: 1:03 AM
 */

namespace AppBundle\Services\Traits;

use Symfony\Component\DependencyInjection\ContainerInterface;

trait ServiceContainerTrait
{
    protected $serviceContainer;

    /**
     * @return ContainerInterface
     */
    public function getServiceContainer()
    {
        return $this->serviceContainer;
    }

    /**
     * @param ContainerInterface $serviceContainer
     */
    public function setServiceContainer($serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }
}