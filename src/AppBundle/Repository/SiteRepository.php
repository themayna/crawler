<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/7/17
 * Time: 1:32 AM
 */

namespace AppBundle\Repository;


use Doctrine\ODM\MongoDB\DocumentRepository;

class SiteRepository extends DocumentRepository
{
    public function findAllOpenSource()
    {
        return $this->createQueryBuilder()
            ->field('dataType')->equals(true)
            ->getQuery()
            ->execute();
    }

}