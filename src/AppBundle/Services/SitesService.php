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
class SitesService implements ConsumerInterface
{
    use DocumentManagerTrait;
    use RabbitMqWrapperTrait;
    const serviceName = 'siteService';

    public function publishSites()
    {
        $sites = $this->getDocumentManager()->getRepository(Site::class)->findAll();
        if (empty($sites)) {
            return;
        }

        foreach ($sites as $site) {
            $this->getRabbitMqWrapper()->doPublish('sites', $site->getId());
        }
    }

    public function execute(AMQPMessage $msg)
    {
        $siteId = json_decode($msg->body);
        $this->publishCategoriesLinks($siteId);

    }

    public function publishCategoriesLinks($siteId)
    {
        $site = $this->getDocumentManager()->getRepository(Site::class)->find($siteId);

        $divContent = file_get_contents($site->getCategoryUrl());
        $crawler = new Crawler($divContent);
        $divs = $crawler->filter($site->getFilter());
        if (empty($divs)) {

            return;
        }
        $categoryInfo = ['parentId' => $siteId];
        foreach ($divs as $div) {
            $categoryInfo['url'] = $div->getAttribute('href');
            $this->getRabbitMqWrapper()->doPublish('categories', $categoryInfo);
        }
    }
}