<?php

namespace Williams\ErpBundle\Model;

class ShipmentPackageItem {

    protected $itemNumber;
    protected $quantity;

    public function getItemNumber() {
        return $this->itemNumber;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setItemNumber($itemNumber) {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

}
