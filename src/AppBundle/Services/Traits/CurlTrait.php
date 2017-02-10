<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/7/17
 * Time: 1:03 AM
 */

namespace AppBundle\Services\Traits;


use AppBundle\Services\CurlService;

trait CurlTrait
{
    /** @var  CurlService */
    private $curl;

    /**
     * @return CurlService
     */
    public function getCurl()
    {
        return $this->curl;
    }

    /**
     * @param CurlService $curl
     */
    public function setCurl(CurlService $curl)
    {
        $this->curl = $curl;
    }
}