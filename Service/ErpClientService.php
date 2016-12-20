<?php

namespace Williams\ErpBundle\Service;

use Williams\ErpBundle\Repository\ClientInvoiceRepository;
use Williams\ErpBundle\Repository\ClientProductRepository;
use Williams\ErpBundle\Repository\ClientSalesOrderRepository;
use Williams\ErpBundle\Repository\ClientShipmentRepository;

class ErpClientService implements ErpService {
    
    private $host;
    
    public function __construct($host) {
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

}
