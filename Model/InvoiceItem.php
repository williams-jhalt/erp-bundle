<?php

namespace Williams\ErpBundle\Model;

class InvoiceItem extends SalesOrderItem {

    protected $quantityBilled;

    public function getQuantityBilled() {
        return $this->quantityBilled;
    }

    public function setQuantityBilled($quantityBilled) {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

}
