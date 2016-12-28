<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Model\Customer;
use Williams\ErpBundle\Model\CustomerCollection;

class ClientCustomerRepository extends AbstractClientRepository implements CustomerRepositoryInterface {

    /**
     * 
     * @param integer $limit
     * @param integer $offset
     * @return CustomerCollection
     */
    public function findAll($limit = 1000, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("customers.{$format}", ['query' => ['limit' => $limit, 'offset' => $offset]]);

        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\CustomerCollection', $format);

        return $result;
    }

    /**
     * 
     * @param string $searchTerms
     * @param integer $limit
     * @param integer $offset
     * @return CustomerCollection
     */
    public function findByTextSearch($searchTerms, $limit = 1000, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("customers.{$format}", ['query' => ['limit' => $limit, 'offset' => $offset, 'search' => $searchTerms]]);

        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\CustomerCollection', $format);

        return $result;
    }

    /**
     * 
     * @param string $customerNumber
     * @return Customer
     */
    public function getByCustomerNumber($customerNumber) {

        $format = 'json';

        $response = $this->client->get("customers/{$customerNumber}.{$format}");

        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\Customer', $format);

        return $result;
    }

}
