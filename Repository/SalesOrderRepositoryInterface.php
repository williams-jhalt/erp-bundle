<?php

namespace Williams\ErpBundle\Repository;

interface SalesOrderRepositoryInterface {

    public function findAll($limit = 100, $offset = 0);
    public function findOpen($limit = 100, $offset = 0);
    public function findByTextSearch($searchTerms);
    public function get($orderNumber);
    public function getByWebReferenceNumberAndCustomerNumber($webReferenceNumber, $customerNumber);
    public function getItems($orderNumber);
    public function submitOrder(Order $order);

}
