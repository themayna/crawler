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
class CategoryPagesService
{
    use DocumentManagerTrait;
    use RabbitMqWrapperTrait;

    const serviceName = 'categoryPages';

    public function generateCategoryPages()
    {
        $categories = $this->getDocumentManager()->getRepository(Category::class)->findAll();

        if (empty($categories)) {

            return;
        }

        /** @var Category $category */
        foreach ($categories as $category) {
            $step = 1;
            while ($step <= $category->getSite()->getCategoryPageStepper()) {
                $data['categoryId'] = $category->getId();
                $data['url'] = $this->formatUrl($category, $step);
                $this->getRabbitMqWrapper()->doPublish('categories.pages', $data);

                $step++;
            }
        }
    }

    private function formatUrl(Category $category, $step)
    {
        $baseUrl = $category->getSite()->getCategoryPageUrl();
        if ($step == 1) {
            $baseUrl = str_replace('?page=%s', '', $baseUrl);
            return sprintf($baseUrl, $category->getUrl());
        }
        return sprintf($baseUrl, $category->getUrl(), $step);
    }
}