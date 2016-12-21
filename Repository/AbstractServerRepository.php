<?php

namespace Williams\ErpBundle\Repository;

abstract class AbstractServerRepository {

    /**
     * @var ErpServerService
     */
    protected $erp;

    public function __construct(ErpServerService $erp) {
        $this->erp = $erp;
    }
    
}