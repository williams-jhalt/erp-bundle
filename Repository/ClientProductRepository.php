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
        
        $query = http_build_query(array(
            'limit' => $limit,
            'offset' => $offset
        ));

        $data = file_get_contents($this->erp->getHost() . "/products.{$format}?" . $query);

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\ProductCollection', $format);

        return $result;
    }

    public function findByTextSearch($searchTerms, $limit = 1000, $offset = 0) {

        $format = 'json';
        
        $query = http_build_query(array(
            'search' => $searchTerms,
            'limit' => $limit,
            'offset' => $offset
        ));

        $data = file_get_contents($this->erp->getHost() . "/products.{$format}?" . $query);

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\ProductCollection', $format);

        return $result;
        
    }

    public function getByItemNumber($itemNumber) {
        
        $format = 'json';

        $data = file_get_contents($this->erp->getHost() . "/products/{$itemNumber}.{$format}");

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\Product', $format);

        return $result;
        
    }

}
