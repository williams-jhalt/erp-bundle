<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class InvoiceCollection {

    /**
     * @JMS\Type(array<Williams\ErpBundle\Model\Invoice>)
     * @var Invoice[]
     */
    protected $invoices;
    
    /**
     * @param Invoice[] $invoices
     */
    public function __construct(array $invoices) {
        $this->invoices = $invoices;
    }

    function getInvoices() {
        return $this->invoices;
    }

    function setInvoices($invoices) {
        $this->invoices = $invoices;
    }

}
