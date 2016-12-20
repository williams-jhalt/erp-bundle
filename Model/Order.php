<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;


class Order {

    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $webOrderNumber;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $customerNumber;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToName;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToAddress1;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToAddress2;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToAddress3;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToCity;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToState;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToZip;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToCountry;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToPhone;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipToEmail;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipViaCode;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $residential = 'Y';

    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\OrderItem>")
     * @var OrderItem[]
     */
    protected $items;

    public function getWebOrderNumber() {
        return $this->webOrderNumber;
    }

    public function getCustomerNumber() {
        return $this->customerNumber;
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

    public function getWarehouse() {
        return $this->warehouse;
    }

    public function getItems() {
        return $this->items;
    }

    public function setWebOrderNumber($webOrderNumber) {
        $this->webOrderNumber = $webOrderNumber;
        return $this;
    }

    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
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

    public function setWarehouse($warehouse) {
        $this->warehouse = $warehouse;
        return $this;
    }

    public function setItems(array $items) {
        $this->items = $items;
        return $this;
    }

    public function getShipToCountry() {
        return $this->shipToCountry;
    }

    public function getShipViaCode() {
        return $this->shipViaCode;
    }

    public function setShipToCountry($shipToCountry) {
        $this->shipToCountry = $shipToCountry;
        return $this;
    }

    public function setShipViaCode($shipViaCode) {
        $this->shipViaCode = $shipViaCode;
        return $this;
    }

    public function getResidential() {
        return $this->residential;
    }

    public function setResidential($residential) {
        $this->residential = $residential;
        return $this;
    }

    public function getShipToPhone() {
        return $this->shipToPhone;
    }

    public function getShipToEmail() {
        return $this->shipToEmail;
    }

    public function setShipToPhone($shipToPhone) {
        $this->shipToPhone = $shipToPhone;
        return $this;
    }

    public function setShipToEmail($shipToEmail) {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

}
