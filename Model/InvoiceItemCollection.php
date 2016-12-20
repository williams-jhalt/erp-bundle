<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class InvoiceItemCollection {

    /**
     * @JMS\Type(array<Williams\ErpBundle\Model\InvoiceItem>)
     * @var InvoiceItem[]
     */
    protected $items;
    
    /**
     * @param InvoiceItem[] $items
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
