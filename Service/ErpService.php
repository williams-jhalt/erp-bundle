<?php

namespace Williams\ErpBundle\Service;

use Williams\ErpBundle\Repository\AbstractInvoiceRepository;
use Williams\ErpBundle\Repository\AbstractProductRepository;
use Williams\ErpBundle\Repository\AbstractSalesOrderRepository;
use Williams\ErpBundle\Repository\AbstractShipmentRepository;

interface ErpService {

    /**
     * @return AbstractProductRepository
     */
    public function getProductRepository();

    /**
     * @return AbstractSalesOrderRepository
     */
    public function getSalesOrderRepository();

    /**
     * @return AbstractShipmentRepository
     */
    public function getShipmentRepository();

    /**
     * @return AbstractInvoiceRepository
     */
    public function getInvoiceRepository();
    
}
