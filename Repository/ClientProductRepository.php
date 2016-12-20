<?php

namespace Williams\ErpBundle\Repository;

use JMS\Serializer\Serializer;
use Williams\ErpBundle\Service\ErpClientService;

class ClientProductRepository implements AbstractProductRepository {

    /**
     * @var ErpClientService
     */
    protected $erp;

    public function __construct(ErpClientService $erp) {
        $this->erp = $erp;
    }

    /**
     * @return Serializer
     */
    private function getSerializer() {
        return $this->get('jms_serializer');
    }

    public function findAll($limit = 1000, $offset = 0) {

        $format = 'json';

        $data = file_get_contents($this->erp->getHost() . "/products.{$format}?limit={$limit}&offset={$offset}");

        $result = array();

        $serializer = $this->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\Product', $format);

        return $result;
    }

    public function findByTextSearch($searchTerms, $limit = 1000, $offset = 0) {
        
    }

    public function getByItemNumber($itemNumber) {
        
    }

}
