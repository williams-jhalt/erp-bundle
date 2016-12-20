<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints\DateTime;

class Shipment extends SalesOrder {

    
    /**
     * @JMS\Type("string")
     * @var string
     */
    protected $manifestId;
    
    /**
     * @JMS\Type("DateTime")
     * @var DateTime
     */
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
