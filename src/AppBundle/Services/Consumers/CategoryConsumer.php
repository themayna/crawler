<?php
namespace AppBundle\Services\Consumers;

use AppBundle\Document\Category;
use AppBundle\Document\Site;
use AppBundle\Services\Traits\DocumentManagerTrait;
use AppBundle\Services\Traits\CurlTrait;

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 1/30/17
 * Time: 11:42 PM
 */
class CategoryConsumer
{
    use DocumentManagerTrait;
    use CurlTrait;

    const serviceName = 'categoryConsummer';


    public function saveCategoryInfoToDb($categoryInfo)
    {
        /** @var Site $site */
        $site = $this->getDocumentManager()->getRepository(Site::class)->find($categoryInfo->parentId);

        $document = new Category();
        $document->setTitle($categoryInfo->title);
        $document->setSite($site);
        $document->setUrl($categoryInfo->url);

        if ($this->exists($document)) {

            return;
        }
        $this->getDocumentManager()->persist($document);
        $this->getDocumentManager()->flush();
    }

    protected function exists($document)
    {
        return $this->getDocumentManager()->getRepository(Category::class)->findByNameAndParent($document);
    }
}