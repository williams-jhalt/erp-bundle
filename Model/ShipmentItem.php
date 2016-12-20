<?php

namespace Williams\ErpBundle\Model;

class ShipmentItem extends SalesOrderItem {

    protected $quantityShipped;

    public function getQuantityShipped() {
        return $this->quantityShipped;
    }

    public function setQuantityShipped($quantityShipped) {
        $this->quantityShipped = $quantityShipped;
        return $this;
    }

}
