<?php
namespace AppBundle\Services\Consumers;

use AppBundle\Document\Category;
use AppBundle\Document\Site;
use AppBundle\Services\Traits\DocumentManagerTrait;
use AppBundle\Services\Traits\CurlTrait;
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
class CategoryConsumer extends Container implements ConsumerInterface
{
    use DocumentManagerTrait;
    use CurlTrait;

    const serviceName = 'categoryConsummer';


    public function execute(AMQPMessage $msg)
    {
        $msg = json_decode($msg->body);
        $this->saveCategoryInfo($msg);

    }

    public function saveCategoryInfo($categoryInfo)
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