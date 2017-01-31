<?php
namespace AppBundle\Document;

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 1/31/17
 * Time: 12:09 AM
 */
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Site extends BaseDocument
{

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $rootUrl;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $categoriesUrl;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $categoriesDefaultPageCount;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRootUrl()
    {
        return $this->rootUrl;
    }

    /**
     * @param mixed $rootUrl
     */
    public function setRootUrl($rootUrl)
    {
        $this->rootUrl = $rootUrl;
    }

    /**
     * @return mixed
     */
    public function getCategoriesUrl()
    {
        return $this->categoriesUrl;
    }

    /**
     * @param mixed $categoriesUrl
     */
    public function setCategoriesUrl($categoriesUrl)
    {
        $this->categoriesUrl = $categoriesUrl;
    }

    /**
     * @return mixed
     */
    public function getCategoriesDefaultPageCount()
    {
        return $this->categoriesDefaultPageCount;
    }

    /**
     * @param mixed $categoriesDefaultPageCount
     */
    public function setCategoriesDefaultPageCount($categoriesDefaultPageCount)
    {
        $this->categoriesDefaultPageCount = $categoriesDefaultPageCount;
    }
}