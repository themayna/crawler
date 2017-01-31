<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 1/31/17
 * Time: 1:09 AM
 */

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

class BaseDocument
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}