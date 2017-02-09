<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DomCrawler\Crawler;
use DOMDocument;
use DOMElement;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $divContent = file_get_contents('http://www.redtube.com/redtube/youngandold');
        $crawler = new Crawler($divContent);

        $divs = $crawler->filter('.tabsElements li:nth-child(3) > a')->text();
//        var_dump(str_replace(' Index','',$divs));
//        echo '<pre>';
//        print_r($divs);die;
        $i = 1;
        foreach ($divs as $div) {
            var_dump(str_replace(' Index','',$div->getAttribute('href')));
            print_r($div->getAttribute('href'));
            $i++;
        }
        var_dump($i);
        die('after crawling');
    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction()
    {
        /** @var Product $product */
        $product = new Product();
        $product->setName('plm');
        $product->setPrice(23);

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->flush();
    }
}
