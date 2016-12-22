<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Model\Invoice;
use Williams\ErpBundle\Model\InvoiceCollection;
use Williams\ErpBundle\Model\InvoiceItemCollection;

interface InvoiceRepositoryInterface {

    /**
     * 
     * @param integer $limit
     * @param integer $offset
     * 
     * @return InvoiceCollection
     */
    public function findAll($limit = 1000, $offset = 0);
    
    /**
     * 
     * @param integer $orderNumber
     * 
     * @return InvoiceCollection
     */
    public function findByOrderNumber($orderNumber);
    
    /**
     * 
     * @param integer $orderNumber
     * @param integer $recordSequence
     * 
     * @return Invoice
     */
    public function get($orderNumber, $recordSequence = 1);
    
    /**
     * 
     * @param integer $orderNumber
     * @param integer $recordSequence
     * 
     * @return InvoiceItemCollection
     */
    public function getItems($orderNumber, $recordSequence = 1);

}
