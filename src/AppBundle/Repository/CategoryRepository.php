<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/7/17
 * Time: 1:32 AM
 */

namespace AppBundle\Repository;


use AppBundle\Document\Category;
use Doctrine\ODM\MongoDB\DocumentRepository;

class CategoryRepository extends DocumentRepository
{
    public function findByNameAndParent(Category $categoryObj)
    {
        return $this->createQueryBuilder()
            ->field('url')->equals($categoryObj->getUrl())
            ->field('site')->references($categoryObj->getSite())
            ->getQuery()
            ->getSingleResult();
    }

}