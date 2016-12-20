<?php

namespace Williams\ErpBundle\Repository;

class ClientShipmentRepository implements AbstractShipmentRepository {

    /**
     * @var ErpClientService
     */
    protected $erp;

    public function __construct(ErpClientService $erp) {
        $this->erp = $erp;
    }

    public function findAll($limit = 1000, $offset = 0) {
    }

    public function findByOrderNumber($orderNumber) {
    }

    public function get($orderNumber, $recordSequence = 1) {
    }

    public function getItems($orderNumber, $recordSequence = 1) {
    }

    public function getPackages($orderNumber) {
    }

}
