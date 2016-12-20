<?php

namespace Williams\ErpBundle\Service;

use JMS\Serializer\Serializer;
use Williams\ErpBundle\Repository\ClientInvoiceRepository;
use Williams\ErpBundle\Repository\ClientProductRepository;
use Williams\ErpBundle\Repository\ClientSalesOrderRepository;
use Williams\ErpBundle\Repository\ClientShipmentRepository;

class ErpClientService implements ErpService {

    private $host;
    private $serializer;

    public function __construct($host, Serializer $serializer) {
        $this->host = $host;
    }

    public function getProductRepository() {
        return new ClientProductRepository($this);
    }

    public function getSalesOrderRepository() {
        return new ClientSalesOrderRepository($this);
    }

    public function getShipmentRepository() {
        return new ClientShipmentRepository($this);
    }

    public function getInvoiceRepository() {
        return new ClientInvoiceRepository($this);
    }

    public function getHost() {
        return $this->host;
    }

    /**
     * 
     * @return Serializer
     */
    public function getSerializer() {
        return $this->serializer;
    }

}
