<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class OrderItemCollection {

    /**
     * @JMS\Type(array<Williams\ErpBundle\Model\OrderItem>)
     * @var OrderItem[]
     */
    protected $items;
    
    /**
     * @param OrderItem[] $items
     */
    public function __construct(array $items) {
        $this->items = $items;
    }

    function getItems() {
        return $this->items;
    }

    function setItems(array $items) {
        $this->items = $items;
    }

}
