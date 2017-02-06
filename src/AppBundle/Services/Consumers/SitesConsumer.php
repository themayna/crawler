<?php
namespace AppBundle\Services\Consumers;

use AppBundle\Document\Site;
use AppBundle\Services\Traits\DocumentManagerTrait;
use AppBundle\Services\Traits\RabbitMqWrapperTrait;
use AppBundle\Services\Traits\CurlTrait;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 1/30/17
 * Time: 11:42 PM
 */
class SitesConsumer implements ConsumerInterface
{
    use DocumentManagerTrait;
    use RabbitMqWrapperTrait;
    use CurlTrait;

    const serviceName = 'siteConsummer';

    public function execute(AMQPMessage $msg)
    {
        $siteId = json_decode($msg->body);
        $this->saveCategories($siteId);
    }


    public function saveCategories($siteId)
    {
        /** @var Site $site */
        $site = $this->getDocumentManager()->getRepository(Site::class)->find($siteId);

        $divContent = $this->getCurl()->doCurl($site->getCategoryUrl());

        $crawler = new Crawler($divContent);

        $divs = $crawler->filter($site->getCategoryPointer());
        if (empty($divs)) {

            return;
        }
        $categoryInfo = ['parentId' => $siteId];
        foreach ($divs as $div) {
            $categoryInfo['url'] = $div->getAttribute('href');
            $categoryInfo['title'] = $div->getAttribute('title');
            $this->getRabbitMqWrapper()->doPublish('categories', $categoryInfo);
        }
    }
}