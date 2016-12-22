<?php

namespace Williams\ErpBundle\Repository;

use Williams\ErpBundle\Model\Order;
use Williams\ErpBundle\Model\SalesOrder;
use Williams\ErpBundle\Model\SalesOrderCollection;
use Williams\ErpBundle\Model\SalesOrderItemCollection;

interface SalesOrderRepositoryInterface {

    /**
     * 
     * @param integer $limit
     * @param integer $offset
     * 
     * @return SalesOrderCollection
     */
    public function findAll($limit = 100, $offset = 0);
    
    /**
     * 
     * @param integer $limit
     * @param integer $offset
     * 
     * @return SalesOrderCollection
     */
    public function findOpen($limit = 100, $offset = 0);
    
    /**
     * 
     * @param string $searchTerms
     * 
     * @return SalesOrderCollection
     */
    public function findByTextSearch($searchTerms);
    
    /**
     * 
     * @param integer $orderNumber
     * 
     * @return SalesOrder
     */
    public function get($orderNumber);
    
    /**
     * 
     * @param string $webReferenceNumber
     * @param string $customerNumber
     * 
     * @return SalesOrder
     */
    public function getByWebReferenceNumberAndCustomerNumber($webReferenceNumber, $customerNumber);
    
    /**
     * 
     * @param integer $orderNumber
     * 
     * @return SalesOrderItemCollection
     */
    public function getItems($orderNumber);
    
    /**
     * 
     * @param Order $order
     * 
     * @return boolean 
     */
    public function submitOrder(Order $order);

}
