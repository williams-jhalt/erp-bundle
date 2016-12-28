<?php

namespace Williams\ErpBundle\Service;

use Williams\ErpBundle\Repository\CustomerRepositoryInterface;
use Williams\ErpBundle\Repository\InvoiceRepositoryInterface;
use Williams\ErpBundle\Repository\ProductRepositoryInterface;
use Williams\ErpBundle\Repository\SalesOrderRepositoryInterface;
use Williams\ErpBundle\Repository\ShipmentRepositoryInterface;

interface ErpService {

    /**
     * @return ProductRepositoryInterface
     */
    public function getProductRepository();

    /**
     * @return SalesOrderRepositoryInterface
     */
    public function getSalesOrderRepository();

    /**
     * @return ShipmentRepositoryInterface
     */
    public function getShipmentRepository();

    /**
     * @return InvoiceRepositoryInterface
     */
    public function getInvoiceRepository();

    /**
     * @return CustomerRepositoryInterface
     */
    public function getCustomerRepository();
    
}
