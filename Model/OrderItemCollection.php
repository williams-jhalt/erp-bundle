<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class OrderItemCollection {

    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\OrderItem>")
     * @var OrderItem[]
     */
    protected $items;
    
    /**
     * @param OrderItem[] $items
     */
    public function __construct(array $items) {
        $this->items = $items;
    }

    /**
     * 
     * @return OrderItem[]
     */
    function getItems() {
        return $this->items;
    }

    /**
     * 
     * @param OrderItem[] $items
     * @return OrderItemCollection
     */
    function setItems(array $items) {
        $this->items = $items;
        return $this;
    }

}
