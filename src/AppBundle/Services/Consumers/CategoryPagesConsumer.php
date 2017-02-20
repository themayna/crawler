<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/13/17
 * Time: 6:44 PM
 */

namespace AppBundle\Services\Consumers;

use AppBundle\Document\Category;
use AppBundle\Services\Traits\RabbitMqWrapperTrait;
use AppBundle\Services\Traits\CurlTrait;
use AppBundle\Services\Traits\DocumentManagerTrait;
use Symfony\Component\DomCrawler\Crawler;

class CategoryPagesConsumer
{
    const serviceName = 'categoryPagesConsumer';
    use RabbitMqWrapperTrait;
    use CurlTrait;
    use DocumentManagerTrait;

    public function getVideosUrl($msg)
    {
        try {
            $category = $this->getDocumentManager()->getRepository(Category::class)->find($msg->categoryId);
            $divContent = $this->getCurl()->doCurl($msg->url);
            $crawler = new Crawler($divContent);

            $divs = $crawler->filter($category->getSite()->getCategoryPagePointer());
            if (empty($divs)) {

                return;
            }
            /** @var \DOMElement $div */
            foreach ($divs as $div) {
                $toPublish ['siteId'] = $category->getSite()->getName();
                $toPublish['url'] = $category->getSite()->getRootUrl() . $div->getAttribute('href');
                $this->getRabbitMqWrapper()->doPublish('pages.links', $toPublish);
            }
        } catch (\Exception $e) {
            print_r($e->getMessage());
            print_r($msg->url);
        }
    }
}