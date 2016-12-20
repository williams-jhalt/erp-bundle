<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Service\ErpService;

abstract class AbstractShipmentRepository {

    /**
     * @var ErpService
     */
    protected $erp;

    public function __construct(ErpService $erp) {
        $this->erp = $erp;
    }

    abstract public function findAll($limit = 1000, $offset = 0);

    abstract public function findByOrderNumber($orderNumber);

    abstract public function get($orderNumber, $recordSequence = 1);

    abstract public function getItems($orderNumber, $recordSequence = 1);

    abstract public function getPackages($orderNumber);
}
