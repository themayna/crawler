<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/17/17
 * Time: 6:43 PM
 */

namespace AppBundle\Services\Parsers\Categories;


use AppBundle\Document\Site;

abstract class AbstractCategoryParser
{
    abstract public function publishCategories(Site $site);

}