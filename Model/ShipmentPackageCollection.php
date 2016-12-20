<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class ShipmentPackageCollection {

    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\ShipmentPackage>")
     * @var ShipmentPackage[]
     */
    protected $shipmentPackages;
    
    /**
     * @param ShipmentPackage[] $shipmentPackages
     */
    public function __construct(array $shipmentPackages) {
        $this->shipmentPackages = $shipmentPackages;
    }

    function getShipmentPackages() {
        return $this->shipmentPackages;
    }

    function setShipmentPackages(array $shipmentPackages) {
        $this->shipmentPackages = $shipmentPackages;
    }

}
