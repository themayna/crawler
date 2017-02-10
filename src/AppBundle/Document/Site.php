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
    private $name;

    /**
     * @MongoDB\Field(type="string")
     */
    private $rootUrl;

    /**
     * @MongoDB\Field(type="string")
     */
    private $categoryUrl;

    /**
     * @MongoDB\Field(type="string")
     */
    private $categoryPointer;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Category", mappedBy="site")
     */
    private $category;

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
    public function getCategoryUrl()
    {
        return $this->categoryUrl;
    }

    /**
     * @param mixed $categoryUrl
     */
    public function setCategoryUrl($categoryUrl)
    {
        $this->categoryUrl = $categoryUrl;
    }

    /**
     * @return mixed
     */
    public function getCategoryPointer()
    {
        return $this->categoryPointer;
    }

    /**
     * @param mixed $categoryPointer
     */
    public function setCategoryPointer($categoryPointer)
    {
        $this->categoryPointer = $categoryPointer;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}