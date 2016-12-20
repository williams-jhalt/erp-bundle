<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class InvoiceItem extends SalesOrderItem {

    /**
     * @JMS\Type("integer")
     * @var integer
     */
    protected $quantityBilled;

    public function getQuantityBilled() {
        return $this->quantityBilled;
    }

    public function setQuantityBilled($quantityBilled) {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

}
