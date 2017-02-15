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
        $category = $this->getDocumentManager()->getRepository(Category::class)->find($msg->categoryId);
        var_dump($category);die;
        $divContent = $this->getCurl()->doCurl($msg->url);
        $crawler = new Crawler($divContent);

        $divs = $crawler->filter($category->getSite()->getCategoryPagePointer());
        if (empty($divs)) {

            return;
        }
        /** @var \DOMElement $div */
        foreach ($divs as $div) {
            var_dump($div->childNodes);
            die;
            var_dump($div->getAttribute('a'));
            die;
            $categoryInfo['url'] = $div->getAttribute('href');
            $categoryInfo['title'] = $div->getAttribute('title');
            $this->getRabbitMqWrapper()->doPublish('categories', $categoryInfo);
        }
    }
}