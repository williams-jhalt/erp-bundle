<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class ShipmentPackageItemCollection {

    /**
     * @JMS\Type(array<Williams\ErpBundle\Model\ShipmentPackageItem>)
     * @var ShipmentPackageItem[]
     */
    protected $items;
    
    /**
     * @param ShipmentPackageItem[] $items
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
