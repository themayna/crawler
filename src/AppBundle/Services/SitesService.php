<?php
namespace AppBundle\Services;

use AppBundle\Document\Site;
use AppBundle\Services\Traits\DocumentManagerTrait;
use AppBundle\Services\Traits\RabbitMqWrapperTrait;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Component\DependencyInjection\Container;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 1/30/17
 * Time: 11:42 PM
 */
class SitesService
{
    use DocumentManagerTrait;
    use RabbitMqWrapperTrait;

    const serviceName = 'siteService';

    public function publishSites($site)
    {
        if (!$site) {
            $sites = $this->getDocumentManager()->getRepository(Site::class)->findAll();
            if (empty($sites)) {
                return;
            }

            foreach ($sites as $site) {
                $this->getRabbitMqWrapper()->doPublish('sites', $site->getId());
            }
            return;
        }
        $site = $this->getDocumentManager()->getRepository(Site::class)->findOneBy(['name' => $site]);

        $this->getRabbitMqWrapper()->doPublish('sites', $site->getId());

    }
}