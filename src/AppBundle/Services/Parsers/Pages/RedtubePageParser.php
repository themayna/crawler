<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/17/17
 * Time: 8:15 PM
 */

namespace AppBundle\Services\Parsers\Pages;


use AppBundle\Services\Traits\CurlTrait;
use AppBundle\Services\Traits\DocumentManagerTrait;
use AppBundle\Services\Traits\RabbitMqWrapperTrait;
use Doctrine\DBAL\VersionAwarePlatformDriver;

class RedtubePageParser extends AbstractPageParser
{
    const serviceName = 'redtubePageParser';
    const apiUrl = 'http://api.redtube.com/?data=redtube.Videos.searchVideos&output=json';
    protected $pages;

    use CurlTrait;
    use DocumentManagerTrait;
    use RabbitMqWrapperTrait;

    public function publishPages($pages)
    {
        $this->setPages($pages);
        if (!$this->getPages()) {
            $this->getMaximumPages();

            var_dump($this->getPages());
        }

        for ($x = 1; $x <= $this->getPages(); $x++) {
            echo $x;
            $videos = $this->getVideos(self::apiUrl . '&page=' . $x);
            if (isset($videos->code)) {
                break;
            }
            $this->publishVideos($videos);
        }
    }

    private function getMaximumPages()
    {
        $test = null;
        $test = $this->getCurl()->doCurl(self::apiUrl, true);
        if (!isset($test->count)) {
            sleep(2);
            echo "failed to count pages\n";
            $this->getMaximumPages();
            return;
        }
        $pages = ceil($test->count / 20);
        $this->setPages($pages);

        return;
    }

    private function publishVideos($videos)
    {
        $pageData['site'] = 'redtube';
        foreach ($videos->videos as $video) {
            $pageData['videoId'] = $video->video->video_id;
            $this->getRabbitMqWrapper()->doPublish('pages.links', $pageData);
        }

        return;
    }

    private function getVideos($url)
    {
        $videos = $this->getCurl()->doCurl($url, true);
        if (!$videos) {
            echo "failed to get content\n";
            sleep(2);
            return $this->getVideos($url);
        }
        return $videos;
    }

    /**
     * @return integer
     */
    public function getPages()
    {
        return (int)$this->pages;
    }

    /**
     * @param $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }
}