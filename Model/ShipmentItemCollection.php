<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class ShipmentItemCollection {

    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\ShipmentItem>")
     * @var ShipmentItem[]
     */
    protected $items;
    
    /**
     * @param ShipmentItem[] $items
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
