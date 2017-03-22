<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Model\Invoice;
use Williams\ErpBundle\Model\InvoiceCollection;
use Williams\ErpBundle\Model\InvoiceItemCollection;

class ClientInvoiceRepository extends AbstractClientRepository implements InvoiceRepositoryInterface {

    /**
     * 
     * @param integer $limit
     * @param integer $offset
     * @return InvoiceCollection
     */
    public function findAll($limit = 1000, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("invoices.{$format}", ['query' => ['limit' => $limit, 'offset' => $offset]]);

        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\InvoiceCollection', $format);

        return $result;
    }

    public function findByCustomerAndDate($customerNumber, $startDate = null, $endDate = null, $consolidated = false, $limit = 1000, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("invoices.{$format}", [
            'query' => [
                'customerNumber' => $customerNumber,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'consolidated' => $consolidated,
                'limit' => $limit,
                'offset' => $offset]]);

        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\InvoiceCollection', $format);

        return $result;
    }

    /**
     * 
     * @param integer $orderNumber
     * @return InvoiceCollection
     */
    public function findByOrderNumber($orderNumber) {

        $format = 'json';

        $response = $this->client->get("invoices.{$format}", ['query' => ['orderNumber' => $orderNumber]]);

        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\InvoiceCollection', $format);

        return $result;
    }

    /**
     * 
     * @param integer $orderNumber
     * @param integer $recordSequence
     * @return Invoice
     */
    public function get($orderNumber, $recordSequence = 1) {

        $format = 'json';

        $response = $this->client->get("invoices/{$orderNumber}/{$recordSequence}.{$format}");

        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\Invoice', $format);

        return $result;
    }

    /**
     * 
     * @param integer $orderNumber
     * @param integer $recordSequence
     * @return InvoiceItemCollection
     */
    public function getItems($orderNumber, $recordSequence = 1) {

        $format = 'json';

        $response = $this->client->get("invoices/{$orderNumber}/{$recordSequence}/items.{$format}");

        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\InvoiceItemCollection', $format);

        return $result;
    }

}
