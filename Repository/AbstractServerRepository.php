<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Service\ErpServerService;

abstract class AbstractServerRepository {

    /**
     * @var ErpServerService
     */
    protected $erp;

    public function __construct(ErpServerService $erp) {
        $this->erp = $erp;
    }
    
}