<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class ShipmentCollection {

    /**
     * @JMS\Type("array<Williams\ErpBundle\Model\Shipment>")
     * @var Shipment[]
     */
    protected $shipments;
    
    /**
     * @param Shipment[] $shipments
     */
    public function __construct(array $shipments) {
        $this->shipments = $shipments;
    }

    function getShipments() {
        return $this->shipments;
    }

    function setShipments(array $shipments) {
        $this->shipments = $shipments;
    }

}
