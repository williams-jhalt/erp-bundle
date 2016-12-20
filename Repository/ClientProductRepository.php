<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Service\ErpClientService;

class ClientProductRepository implements AbstractProductRepository {

    /**
     * @var ErpClientService
     */
    protected $erp;

    public function __construct(ErpClientService $erp) {
        $this->erp = $erp;
    }

    public function findAll($limit = 1000, $offset = 0) {

        $format = 'json';

        $data = file_get_contents($this->erp->getHost() . "/products.{$format}?limit={$limit}&offset={$offset}");

        $result = array();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\Product', $format);

        return $result;
    }

    public function findByTextSearch($searchTerms, $limit = 1000, $offset = 0) {
        
    }

    public function getByItemNumber($itemNumber) {
        
    }

}
