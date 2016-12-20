<?php

namespace Williams\ErpBundle\Model;

class Invoice extends SalesOrder {

    protected $invoiceNumber;
    protected $invoiceDate;
    protected $grossInvoiceAmount;
    protected $netInvoiceAmount;
    protected $shippingAndHandling;
    protected $freightCharge;

    public function getInvoiceNumber() {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber($invoiceNumber) {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    public function getInvoiceDate() {
        return $this->invoiceDate;
    }

    public function getGrossInvoiceAmount() {
        return $this->grossInvoiceAmount;
    }

    public function getNetInvoiceAmount() {
        return $this->netInvoiceAmount;
    }

    public function getShippingAndHandling() {
        return $this->shippingAndHandling;
    }

    public function getFreightCharge() {
        return $this->freightCharge;
    }

    public function setInvoiceDate($invoiceDate) {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    public function setGrossInvoiceAmount($grossInvoiceAmount) {
        $this->grossInvoiceAmount = $grossInvoiceAmount;
        return $this;
    }

    public function setNetInvoiceAmount($netInvoiceAmount) {
        $this->netInvoiceAmount = $netInvoiceAmount;
        return $this;
    }

    public function setShippingAndHandling($shippingAndHandling) {
        $this->shippingAndHandling = $shippingAndHandling;
        return $this;
    }

    public function setFreightCharge($freightCharge) {
        $this->freightCharge = $freightCharge;
        return $this;
    }

}
