<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Model\Order;

class ClientSalesOrderRepository extends AbstractClientRepository implements SalesOrderRepositoryInterface {

    public function findAll($limit = 100, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("/orders.{$format}", ['query' => ['limit' => $limit, 'offset' => $offset]]);
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\SalesOrderCollection', $format);

        return $result;
    }

    public function findOpen($limit = 100, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("/orders.{$format}", ['query' => ['limit' => $limit, 'offset' => $offset, 'open' => true]]);
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\SalesOrderCollection', $format);

        return $result;
    }

    public function findByTextSearch($searchTerms) {

        $format = 'json';

        $response = $this->client->get("/orders.{$format}", ['query' => ['search' => $searchTerms]]);
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\SalesOrderCollection', $format);

        return $result;
    }

    public function get($orderNumber) {

        $format = 'json';

        $response = $this->client->get("/orders/{$orderNumber}.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\SalesOrder', $format);

        return $result;
    }

    public function getByWebReferenceNumberAndCustomerNumber($webReferenceNumber, $customerNumber) {

        $format = 'json';

        $id = $webReferenceNumber . "-" . $customerNumber;

        $response = $this->client->get("/weborders/{$id}.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\SalesOrder', $format);

        return $result;
    }

    public function getItems($orderNumber) {

        $format = 'json';

        $response = $this->client->get("/orders/{$orderNumber}/items.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\SalesOrderItemCollection', $format);

        return $result;
    }

    public function submitOrder(Order $order) {

        $serializer = $this->erp->getSerializer();

        $this->client->post("/orders.{$format}", [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => $serializer->serialize($order, 'json')
        ]);
        
    }

}
