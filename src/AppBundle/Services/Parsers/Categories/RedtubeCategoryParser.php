<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/17/17
 * Time: 6:41 PM
 */

namespace AppBundle\Services\Parsers\Categories;

use AppBundle\Document\Site;
use AppBundle\Services\CurlService;
use AppBundle\Services\Traits\CurlTrait;
use AppBundle\Services\Traits\DocumentManagerTrait;
use AppBundle\Services\Traits\RabbitMqWrapperTrait;
use Symfony\Component\DomCrawler\Crawler;


class RedtubeCategoryParser extends AbstractCategoryParser
{
    const serviceName = 'redtubeCategoryParser';

    use CurlTrait;
    use RabbitMqWrapperTrait;
    use DocumentManagerTrait;

    public function publishCategories(Site $site)
    {
        $divContent = $this->getCurl()->doCurl($site->getCategoryUrl());

        $crawler = new Crawler($divContent);

        $divs = $crawler->filter($site->getCategoryPointer());
        if (empty($divs)) {

            return;
        }
        $categoryInfo = ['parentId' => $site->getId()];
        foreach ($divs as $div) {
            $categoryInfo['url'] = $this->cleanUrl($div->getAttribute('href'));
            $categoryInfo['title'] = $div->getAttribute('title');
            $this->getRabbitMqWrapper()->doPublish('categories', $categoryInfo);
        }
    }

    private function cleanUrl($url)
    {
        return str_replace("/redtube/", "", $url);
    }
}