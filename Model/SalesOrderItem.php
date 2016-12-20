<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class SalesOrderItem {

    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $itemNumber;
    
    /**
     * @JMS\Type("integer")
     * @var integer
     */
    protected $quantityOrdered;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
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
