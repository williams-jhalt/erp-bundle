<?php

namespace Williams\ErpBundle\Model;

class SalesOrderItem {

    protected $itemNumber;
    protected $quantityOrdered;
    protected $unitOfMeasure;

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

    public function getUnitOfMeasure() {
        return $this->unitOfMeasure;
    }

    public function setUnitOfMeasure($unitOfMeasure) {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

}
