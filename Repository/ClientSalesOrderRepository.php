<?php

namespace Williams\ErpBundle\Repository;

use DateTime;
use Williams\ErpBundle\Model\Order;
use Williams\ErpBundle\Model\SalesOrder;
use Williams\ErpBundle\Model\SalesOrderItem;
use Williams\ErpBundle\Service\ErpService;

class ClientSalesOrderRepository extends AbstractSalesOrderRepository {

    public function findAll($limit = 100, $offset = 0) {
    }

    public function findOpen($limit = 100, $offset = 0) {
    }

    public function findByTextSearch($searchTerms) {
    }

    public function get($orderNumber) {
    }

    public function getByWebReferenceNumberAndCustomerNumber($webReferenceNumber, $customerNumber) {
    }

    public function getItems($orderNumber) {
    }

    public function submitOrder(Order $order) {        
    }

}
