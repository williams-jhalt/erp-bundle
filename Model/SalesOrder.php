<?php

namespace Williams\ErpBundle\Model;

class SalesOrder {

    protected $orderNumber;
    protected $recordSequence;
    protected $shipToName;
    protected $shipToAddress1;
    protected $shipToAddress2;
    protected $shipToAddress3;
    protected $shipToCity;
    protected $shipToState;
    protected $shipToZip;
    protected $shipToCountry;
    protected $shipToPhone;
    protected $shipToEmail;
    protected $orderDate;
    protected $shipViaCode;
    protected $customerNumber;
    protected $webReferenceNumber;
    protected $customerPurchaseOrder;
    protected $open;
    protected $status;

    public function getOrderNumber() {
        return $this->orderNumber;
    }

    public function getRecordSequence() {
        return $this->recordSequence;
    }

    public function getShipToName() {
        return $this->shipToName;
    }

    public function getShipToAddress1() {
        return $this->shipToAddress1;
    }

    public function getShipToAddress2() {
        return $this->shipToAddress2;
    }

    public function getShipToAddress3() {
        return $this->shipToAddress3;
    }

    public function getShipToCity() {
        return $this->shipToCity;
    }

    public function getShipToState() {
        return $this->shipToState;
    }

    public function getShipToZip() {
        return $this->shipToZip;
    }

    public function getShipToCountry() {
        return $this->shipToCountry;
    }

    public function getShipToPhone() {
        return $this->shipToPhone;
    }

    public function getShipToEmail() {
        return $this->shipToEmail;
    }

    public function getOrderDate() {
        return $this->orderDate;
    }

    public function getShipViaCode() {
        return $this->shipViaCode;
    }

    public function getCustomerNumber() {
        return $this->customerNumber;
    }

    public function getWebReferenceNumber() {
        return $this->webReferenceNumber;
    }

    public function getCustomerPurchaseOrder() {
        return $this->customerPurchaseOrder;
    }

    public function getOpen() {
        return $this->open;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setOrderNumber($orderNumber) {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function setRecordSequence($recordSequence) {
        $this->recordSequence = $recordSequence;
        return $this;
    }

    public function setShipToName($shipToName) {
        $this->shipToName = $shipToName;
        return $this;
    }

    public function setShipToAddress1($shipToAddress1) {
        $this->shipToAddress1 = $shipToAddress1;
        return $this;
    }

    public function setShipToAddress2($shipToAddress2) {
        $this->shipToAddress2 = $shipToAddress2;
        return $this;
    }

    public function setShipToAddress3($shipToAddress3) {
        $this->shipToAddress3 = $shipToAddress3;
        return $this;
    }

    public function setShipToCity($shipToCity) {
        $this->shipToCity = $shipToCity;
        return $this;
    }

    public function setShipToState($shipToState) {
        $this->shipToState = $shipToState;
        return $this;
    }

    public function setShipToZip($shipToZip) {
        $this->shipToZip = $shipToZip;
        return $this;
    }

    public function setShipToCountry($shipToCountry) {
        $this->shipToCountry = $shipToCountry;
        return $this;
    }

    public function setShipToPhone($shipToPhone) {
        $this->shipToPhone = $shipToPhone;
        return $this;
    }

    public function setShipToEmail($shipToEmail) {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    public function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;
        return $this;
    }

    public function setShipViaCode($shipViaCode) {
        $this->shipViaCode = $shipViaCode;
        return $this;
    }

    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    public function setWebReferenceNumber($webReferenceNumber) {
        $this->webReferenceNumber = $webReferenceNumber;
        return $this;
    }

    public function setCustomerPurchaseOrder($customerPurchaseOrder) {
        $this->customerPurchaseOrder = $customerPurchaseOrder;
        return $this;
    }

    public function setOpen($open) {
        $this->open = $open;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

}
