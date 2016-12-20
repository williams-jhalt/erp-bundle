<?php

namespace Williams\ErpBundle\Service;

interface ErpService {

    public function getProductRepository();
    public function getSalesOrderRepository();
    public function getShipmentRepository();
    public function getInvoiceRepository();

}
