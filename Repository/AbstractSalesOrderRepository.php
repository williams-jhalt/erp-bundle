<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Service\ErpService;

abstract class AbstractSalesOrderRepository {

    /**
     * @var ErpService
     */
    protected $erp;

    public function __construct(ErpService $erp) {
        $this->erp = $erp;
    }

    abstract public function findAll($limit = 100, $offset = 0);

    abstract public function findOpen($limit = 100, $offset = 0);

    abstract public function findByTextSearch($searchTerms);

    abstract public function get($orderNumber);

    abstract public function getByWebReferenceNumberAndCustomerNumber($webReferenceNumber, $customerNumber);

    abstract public function getItems($orderNumber);

    abstract public function submitOrder(Order $order);

}
