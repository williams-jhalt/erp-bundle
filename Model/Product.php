<?php

namespace Williams\ErpBundle\Model;

class Product {

    protected $itemNumber;
    protected $name;
    protected $wholesalePrice;
    protected $releaseDate;
    protected $binLocation;
    protected $manufacturerCode;
    protected $productTypeCode;
    protected $quantityOnHand;
    protected $quantityCommitted;
    protected $createdOn;
    protected $deleted;
    protected $webItem;
    protected $warehouse;
    protected $unitOfMeasure;

    public function getItemNumber() {
        return $this->itemNumber;
    }

    public function getName() {
        return $this->name;
    }

    public function getWholesalePrice() {
        return $this->wholesalePrice;
    }

    public function getReleaseDate() {
        return $this->releaseDate;
    }

    public function getBinLocation() {
        return $this->binLocation;
    }

    public function getManufacturerCode() {
        return $this->manufacturerCode;
    }

    public function getProductTypeCode() {
        return $this->productTypeCode;
    }

    public function setItemNumber($itemNumber) {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setWholesalePrice($wholesalePrice) {
        $this->wholesalePrice = $wholesalePrice;
        return $this;
    }

    public function setReleaseDate($releaseDate) {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    public function setBinLocation($binLocation) {
        $this->binLocation = $binLocation;
        return $this;
    }

    public function setManufacturerCode($manufacturerCode) {
        $this->manufacturerCode = $manufacturerCode;
        return $this;
    }

    public function setProductTypeCode($productTypeCode) {
        $this->productTypeCode = $productTypeCode;
        return $this;
    }

    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }

    public function getQuantityCommitted() {
        return $this->quantityCommitted;
    }

    public function setQuantityOnHand($quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    public function setQuantityCommitted($quantityCommitted) {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    public function getCreatedOn() {
        return $this->createdOn;
    }

    public function setCreatedOn($createdOn) {
        $this->createdOn = $createdOn;
        return $this;
    }

    public function getDeleted() {
        return $this->deleted;
    }

    public function getWebItem() {
        return $this->webItem;
    }

    public function setDeleted($deleted) {
        $this->deleted = $deleted;
        return $this;
    }

    public function setWebItem($webItem) {
        $this->webItem = $webItem;
        return $this;
    }

    public function getWarehouse() {
        return $this->warehouse;
    }

    public function getUnitOfMeasure() {
        return $this->unitOfMeasure;
    }

    public function setWarehouse($warehouse) {
        $this->warehouse = $warehouse;
        return $this;
    }

    public function setUnitOfMeasure($unitOfMeasure) {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

}
