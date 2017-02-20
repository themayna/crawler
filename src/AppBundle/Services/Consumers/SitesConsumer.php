<?php
namespace AppBundle\Services\Consumers;

use AppBundle\Document\Site;
use AppBundle\Services\Traits\DocumentManagerTrait;
use AppBundle\Services\Traits\ServiceContainerTrait;


/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 1/30/17
 * Time: 11:42 PM
 */
class SitesConsumer
{
    use DocumentManagerTrait;
    use ServiceContainerTrait;
    const serviceName = 'siteConsumer';


    public function saveCategories($siteId)
    {
        /** @var Site $site */
        $site = $this->getDocumentManager()->getRepository(Site::class)->find($siteId);
        $service = $this->getServiceContainer()->get($site->getName() . 'CategoryParser');
        $service->publishCategories($site);
    }


}
