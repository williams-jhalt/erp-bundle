<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class SalesOrderCollection {

    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\SalesOrder>")
     * @var SalesOrder[]
     */
    protected $salesOrders;
    
    /**
     * @param SalesOrder[] $salesOrders
     */
    public function __construct(array $salesOrders) {
        $this->salesOrders = $salesOrders;
    }

    /**
     * 
     * @return SalesOrder[]
     */
    function getSalesOrders() {
        return $this->salesOrders;
    }

    /**
     * 
     * @param SalesOrder[] $salesOrders
     * @return SalesOrderCollection
     */
    function setSalesOrders(array $salesOrders) {
        $this->salesOrders = $salesOrders;
        return $this;
    }

}
