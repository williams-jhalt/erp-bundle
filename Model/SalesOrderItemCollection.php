<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class SalesOrderItemCollection {

    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\SalesOrderItem>")
     * @var SalesOrderItem[]
     */
    protected $items;
    
    /**
     * @param SalesOrderItem[] $items
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
