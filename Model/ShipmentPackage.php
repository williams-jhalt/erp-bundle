<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class ShipmentPackage {

    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $trackingNumber;
    
    /**
     * @JMS\Type("double")
     * @var double
     */
    protected $freightCost;
    
    /**
     * @JMS\Type("double")
     * @var double
     */
    protected $shippingWeight;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $shipViaCode;
    
    /**
     * @JMS\Type("double")
     * @var double
     */
    protected $packageHeight;
    
    /**
     * @JMS\Type("double")
     * @var double
     */
    protected $packageLength;
    
    /**
     * @JMS\Type("double")
     * @var double
     */
    protected $packageWidth;
    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $ucc;
    
    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\ShipmentPackageItem>")
     * @var ShipmentPackageItem[]
     */
    protected $items;

    public function getTrackingNumber() {
        return $this->trackingNumber;
    }

    public function getFreightCost() {
        return $this->freightCost;
    }

    public function setTrackingNumber($trackingNumber) {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function setFreightCost($freightCost) {
        $this->freightCost = $freightCost;
        return $this;
    }

    public function getShippingWeight() {
        return $this->shippingWeight;
    }

    public function setShippingWeight($shippingWeight) {
        $this->shippingWeight = $shippingWeight;
        return $this;
    }

    public function getShipViaCode() {
        return $this->shipViaCode;
    }

    public function getPackageHeight() {
        return $this->packageHeight;
    }

    public function getPackageLength() {
        return $this->packageLength;
    }

    public function getPackageWidth() {
        return $this->packageWidth;
    }

    public function setShipViaCode($shipViaCode) {
        $this->shipViaCode = $shipViaCode;
        return $this;
    }

    public function setPackageHeight($packageHeight) {
        $this->packageHeight = $packageHeight;
        return $this;
    }

    public function setPackageLength($packageLength) {
        $this->packageLength = $packageLength;
        return $this;
    }

    public function setPackageWidth($packageWidth) {
        $this->packageWidth = $packageWidth;
        return $this;
    }

    public function getUcc() {
        return $this->ucc;
    }

    public function setUcc($ucc) {
        $this->ucc = $ucc;
        return $this;
    }

    public function getItems() {
        return $this->items;
    }

    public function setItems($items) {
        $this->items = $items;
        return $this;
    }

}
