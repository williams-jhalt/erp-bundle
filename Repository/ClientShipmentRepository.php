<?php

namespace Williams\ErpBundle\Repository;

use DateTime;
use Williams\ErpBundle\Model\Shipment;
use Williams\ErpBundle\Model\ShipmentItem;
use Williams\ErpBundle\Model\ShipmentPackage;
use Williams\ErpBundle\Model\ShipmentPackageItem;
use Williams\ErpBundle\Service\ErpService;

class ClientShipmentRepository extends AbstractShipmentRepository {

    public function findAll($limit = 1000, $offset = 0) {
    }

    public function findByOrderNumber($orderNumber) {
    }

    public function get($orderNumber, $recordSequence = 1) {
    }

    public function getItems($orderNumber, $recordSequence = 1) {
    }

    public function getPackages($orderNumber) {
    }

}
