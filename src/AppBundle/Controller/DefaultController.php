<?php
namespace AppBundle\Controller;

use AppBundle\Document\Product;
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
        $divContent = file_get_contents('http://www.xvideos.com/tags');
//        var_dump($divContent);die;
        $crawler = new Crawler($divContent);

        $divs = $crawler->filter('#tags > li > a');
        foreach ($divs as $div) {
            echo '<pre>';
//            print_r($div->getAttribute('href'));
        }
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
