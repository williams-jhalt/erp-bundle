<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class OrderCollection {

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

    /**
     * 
     * @return Order[]
     */
    function getOrders() {
        return $this->orders;
    }

    /**
     * 
     * @param Order[] $orders
     * @return OrderCollection
     */
    function setOrders(array $orders) {
        $this->orders = $orders;
        return $this;
    }

}
