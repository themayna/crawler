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
    private $filter;

    /**
     * @MongoDB\Field(type="string")
     */
    private $categoryFilter;

    /**
     * @MongoDB\Field(type="string")
     */
    private $categoryFilerStripper;
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
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param mixed $filter
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return mixed
     */
    public function getCategoryFilter()
    {
        return $this->categoryFilter;
    }

    /**
     * @param mixed $categoryFilter
     */
    public function setCategoryFilter($categoryFilter)
    {
        $this->categoryFilter = $categoryFilter;
    }

    /**
     * @return mixed
     */
    public function getCategoryFilerStripper()
    {
        return $this->categoryFilerStripper;
    }

    /**
     * @param mixed $categoryFilerStripper
     */
    public function setCategoryFilerStripper($categoryFilerStripper)
    {
        $this->categoryFilerStripper = $categoryFilerStripper;
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