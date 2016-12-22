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

    /**
     * 
     * @return string
     */
    public function getItemNumber() {
        return $this->itemNumber;
    }

    /**
     * 
     * @return integer
     */
    public function getQuantityOrdered() {
        return $this->quantityOrdered;
    }

    /**
     * 
     * @param string $itemNumber
     * @return SalesOrderItem
     */
    public function setItemNumber($itemNumber) {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    /**
     * 
     * @param integer $quantityOrdered
     * @return SalesOrderItem
     */
    public function setQuantityOrdered($quantityOrdered) {
        $this->quantityOrdered = $quantityOrdered;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getUnitOfMeasure() {
        return $this->unitOfMeasure;
    }

    /**
     * 
     * @param string $unitOfMeasure
     * @return SalesOrderItem
     */
    public function setUnitOfMeasure($unitOfMeasure) {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

}
