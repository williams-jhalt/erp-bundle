<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class InvoiceCollection {

    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\Order>")
     * @var Order[]
     */
    protected $orders;
    
    /**
     * @param Order[] $orders
     */
    public function __construct(array $orders) {
        $this->orders = $orders;
    }

    function getOrders() {
        return $this->orders;
    }

    function setOrders(array $orders) {
        $this->orders = $orders;
    }

}
