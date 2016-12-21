<?php

namespace Williams\ErpBundle\Repository;

class ClientInvoiceRepository extends AbstractClientRepository implements InvoiceRepositoryInterface {

    public function findAll($limit = 1000, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("/invoices.{$format}", [ 'query' => ['limit' => $limit, 'offset' => $offset]]);
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\InvoiceCollection', $format);

        return $result;
        
    }

    public function findByOrderNumber($orderNumber) {

        $format = 'json';

        $response = $this->client->get("/invoices/{$orderNumber}.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\InvoiceCollection', $format);

        return $result;
    }

    public function get($orderNumber, $recordSequence = 1) {

        $format = 'json';

        $response = $this->client->get("/invoices/{$orderNumber}/{$recordSequence}.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\Invoice', $format);

        return $result;
        
    }

    public function getItems($orderNumber, $recordSequence = 1) {

        $format = 'json';
        
        $response = file_get_contents($this->erp->getHost() . "/invoices/{$orderNumber}/{$recordSequence}/items.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\InvoiceItemCollection', $format);

        return $result;
        
    }

}
