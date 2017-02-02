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
class Category extends BaseDocument
{
    /**
     * @MongoDB\Field(type="string")
     */
    private $name;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Site", inversedBy="category")
     */
    private $site;

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
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }
}