<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Service\ErpService;

abstract class AbstractProductRepository {

    /**
     * @var ErpService
     */
    protected $erp;

    public function __construct(ErpService $erp) {
        $this->erp = $erp;
    }

    abstract public function findAll($limit = 1000, $offset = 0);

    abstract public function findByTextSearch($searchTerms, $limit = 1000, $offset = 0);

    abstract public function getByItemNumber($itemNumber);

}
