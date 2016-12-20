<?php

namespace Williams\ErpBundle\Repository;

use DateTime;
use Williams\ErpBundle\Model\Invoice;
use Williams\ErpBundle\Model\InvoiceItem;
use Williams\ErpBundle\Service\ErpService;

class ClientInvoiceRepository extends AbstractInvoiceRepository {

    public function findAll($limit = 1000, $offset = 0) {
    }

    public function findByOrderNumber($orderNumber) {
    }

    public function get($orderNumber, $recordSequence = 1) {
    }

    public function getItems($orderNumber, $recordSequence = 1) {
    }

}
