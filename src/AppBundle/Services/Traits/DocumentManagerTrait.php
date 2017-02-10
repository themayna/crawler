<?php
namespace AppBundle\Services\Traits;

/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/1/17
 * Time: 12:18 AM
 */
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;

trait DocumentManagerTrait
{
    protected $documentManager;

    /**
     * @return ManagerRegistry
     */
    public function getDocumentManager()
    {
        return $this->documentManager;
    }

    /**
     * @param ManagerRegistry $documentManager
     */
    public function setDocumentManager($documentManager)
    {
        $this->documentManager = $documentManager->getManager();
    }
}
