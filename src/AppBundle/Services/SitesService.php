<?php
namespace AppBundle\Services;

use AppBundle\Document\Site;
use AppBundle\Services\Traits\DocumentManagerTrait;
use AppBundle\Services\Traits\ServiceContainerTrait;

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 1/30/17
 * Time: 11:42 PM
 */
class SitesService
{
    use DocumentManagerTrait;
    use ServiceContainerTrait;

    const serviceName = 'siteService';

    public function publishSites($pages)
    {
        $sites = $this->getDocumentManager()->getRepository(Site::class)->findAllOpenSource();
        if (empty($sites)) {
            return;
        }

        foreach ($sites as $site) {
            $this->publishData($site->getName(), $pages);
        }
        return;
    }

    private function publishData($site, $pages)
    {
        $service = $this->getServiceContainer()->get($site . 'PageParser');
        $service->publishPages($pages);
    }
}