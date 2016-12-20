<?php

namespace Williams\ErpBundle\Model;

class Shipment extends SalesOrder {

    protected $manifestId;
    protected $shipDate;

    public function getManifestId() {
        return $this->manifestId;
    }

    public function getShipDate() {
        return $this->shipDate;
    }

    public function setManifestId($manifestId) {
        $this->manifestId = $manifestId;
        return $this;
    }

    public function setShipDate($shipDate) {
        $this->shipDate = $shipDate;
        return $this;
    }

}
