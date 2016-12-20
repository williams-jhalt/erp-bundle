<?php

namespace Williams\ErpBundle\Model;

class OrderItem {

    protected $itemNumber;
    protected $quantityOrdered;

    public function getItemNumber() {
        return $this->itemNumber;
    }

    public function getQuantityOrdered() {
        return $this->quantityOrdered;
    }

    public function setItemNumber($itemNumber) {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    public function setQuantityOrdered($quantityOrdered) {
        $this->quantityOrdered = $quantityOrdered;
        return $this;
    }

}
