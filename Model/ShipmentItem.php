<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class ShipmentItem extends SalesOrderItem {

    
    /**
     * @JMS\Type("integer")
     * @var integer
     */
    protected $quantityShipped;

    public function getQuantityShipped() {
        return $this->quantityShipped;
    }

    public function setQuantityShipped($quantityShipped) {
        $this->quantityShipped = $quantityShipped;
        return $this;
    }

}
