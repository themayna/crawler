<?php
namespace AppBundle\Services;

use AppBundle\Document\Category;
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
class CategoryInfoService extends Container implements ConsumerInterface
{
    use DocumentManagerTrait;
    use RabbitMqWrapperTrait;
    const serviceName = 'categoryInfoService';

    /** @var  Site $siteData */
    protected $siteData;


    public function execute(AMQPMessage $msg)
    {
        $categoryInfo = json_decode($msg->body);
        $this->saveCategoryInfo($categoryInfo);

    }

    public function saveCategoryInfo($categoryInfo)
    {
        $this->siteData = $this->getDocumentManager()->getRepository(Site::class)->find($categoryInfo->parentId);
        try {
            $c = curl_init($this->siteData->getRootUrl() . $categoryInfo->url);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

            $divContent = curl_exec($c);

            $status = curl_getinfo($c, CURLINFO_HTTP_CODE);
            if ($status !== 200) {
                return;
            }
            curl_close($c);
            if ($divContent !== false) {
                $crawler = new Crawler($divContent);
                $name = $crawler->filter($this->siteData->getCategoryFilter())->text();

                $name = $this->stripName($name);
                $document = new Category();
                $document->setName($name);
                $document->setSite($this->siteData);
                $this->getDocumentManager()->persist($document);
                $this->getDocumentManager()->flush();
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());

        }
    }

    protected function stripName($name)
    {
        $tile = str_replace($this->siteData->getCategoryFilerStripper(), '', $name);
        return ucfirst($tile);
    }
}