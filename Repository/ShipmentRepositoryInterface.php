<?php

namespace Williams\ErpBundle\Repository;

interface ShipmentRepositoryInterface {

    public function findAll($limit = 1000, $offset = 0);
    public function findByOrderNumber($orderNumber);
    public function get($orderNumber, $recordSequence = 1);
    public function getItems($orderNumber, $recordSequence = 1);
    public function getPackages($orderNumber);
    
}
