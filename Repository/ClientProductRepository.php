<?php

namespace Williams\ErpBundle\Repository;

class ClientProductRepository extends AbstractClientRepository implements ProductRepositoryInterface {

    public function findAll($limit = 1000, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("/products.{$format}", ['query' => ['limit' => $limit, 'offset' => $offset]]);
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\ProductCollection', $format);

        return $result;
    }

    public function findByTextSearch($searchTerms, $limit = 1000, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("/products.{$format}", ['query' => ['limit' => $limit, 'offset' => $offset, 'search' => $searchTerms]]);
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\ProductCollection', $format);

        return $result;
        
    }

    public function getByItemNumber($itemNumber) {
        
        $format = 'json';

        $response = $this->client->get("/products/{$itemNumber}.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\Product', $format);

        return $result;
        
    }

}
