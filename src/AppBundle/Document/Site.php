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
     * @MongoDB\Field(type="string")
     */
    private $categoryPageUrl;

    /**
     * @MongoDB\Field(type="int")
     */
    private $categoryPageStepper;

    /**
     * @MongoDB\Field(type="string")
     */
    private $categoryPagePointer;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryPageUrl()
    {
        return $this->categoryPageUrl;
    }

    /**
     * @param mixed $categoryPageUrl
     */
    public function setCategoryPageUrl($categoryPageUrl)
    {
        $this->categoryPageUrl = $categoryPageUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryPageStepper()
    {
        return $this->categoryPageStepper;
    }

    /**
     * @param mixed $categoryPageStepper
     */
    public function setCategoryPageStepper($categoryPageStepper)
    {
        $this->categoryPageStepper = $categoryPageStepper;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryPagePointer()
    {
        return $this->categoryPagePointer;
    }

    /**
     * @param mixed $categoryPagePointer
     */
    public function setCategoryPagePointer($categoryPagePointer)
    {
        $this->categoryPagePointer = $categoryPagePointer;
    }

    /**
     * @return Category
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

        return $this;
    }
}