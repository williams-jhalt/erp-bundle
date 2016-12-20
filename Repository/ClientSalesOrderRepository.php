<?php

namespace Williams\ErpBundle\Repository;

class ClientSalesOrderRepository implements AbstractSalesOrderRepository {

    /**
     * @var ErpClientService
     */
    protected $erp;

    public function __construct(ErpClientService $erp) {
        $this->erp = $erp;
    }

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
