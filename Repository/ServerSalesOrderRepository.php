<?php

namespace Williams\ErpBundle\Repository;

use DateTime;
use Williams\ErpBundle\Model\Order;
use Williams\ErpBundle\Model\SalesOrder;
use Williams\ErpBundle\Model\SalesOrderItem;

class ServerSalesOrderRepository extends AbstractServerRepository implements SalesOrderRepositoryInterface {

    private function _find($query, $limit = 100, $offset = 0) {

        $fields = "adr,"
                . "created_date,"
                . "created_time,"
                . "customer,"
                . "cu_po,"
                . "c_tot_code,"
                . "c_tot_code_amt,"
                . "c_tot_gross,"
                . "c_tot_net_ar,"
                . "email,"
                . "invc_date,"
                . "invc_seq,"
                . "invoice,"
                . "opn,"
                . "order,"
                . "ord_date,"
                . "ord_ext,"
                . "phone,"
                . "rec_seq,"
                . "residential,"
                . "ship_via_code,"
                . "stat,"
                . "state,"
                . "country_code,"
                . "postal_code";

        $response = $this->erp->read($query, $fields, $limit, $offset);

        $result = array();

        foreach ($response as $erpItem) {
            $item = new SalesOrder();
            $item->setShipToAddress1($erpItem->adr[0]);
            $item->setShipToAddress2($erpItem->adr[1]);
            $item->setShipToAddress3($erpItem->adr[2]);
            $item->setShipToCity($erpItem->adr[3]);
            $item->setCustomerNumber($erpItem->customer);
            $item->setCustomerPurchaseOrder($erpItem->cu_po);
            $item->setShipToEmail($erpItem->email);
            $item->setOpen($erpItem->opn);
            $item->setOrderNumber($erpItem->order);
            $item->setOrderDate(new DateTime($erpItem->ord_date));
            $item->setWebReferenceNumber($erpItem->ord_ext);
            $item->setShipToPhone($erpItem->phone);
            $item->setRecordSequence($erpItem->rec_seq);
            $item->setShipViaCode($erpItem->ship_via_code);
            $item->setStatus($erpItem->stat);
            $item->setShipToState($erpItem->state);
            $item->setShipToCountry($erpItem->country_code);
            $item->setShipToZip($erpItem->postal_code);
            $result[] = $item;
        }

        return $result;
    }

    public function findAll($limit = 100, $offset = 0) {

        $query = "FOR EACH oe_head NO-LOCK "
                . "WHERE oe_head.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_head.rec_type = 'O' "
                . "USE-INDEX order";

        return $this->_find($query, $limit, $offset);
    }

    public function findOpen($limit = 100, $offset = 0) {

        $query = "FOR EACH oe_head NO-LOCK "
                . "WHERE oe_head.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_head.rec_type = 'O' "
                . "AND oe_head.opn = 'Y' "
                . "USE-INDEX order";

        return $this->_find($query, $limit, $offset);
    }

    public function findByTextSearch($searchTerms) {

        $query = "FOR EACH oe_head NO-LOCK "
                . "WHERE oe_head.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_head.rec_type = 'O' "
                . "AND oe_head.sy_lookup MATCHES '*{$searchTerms}*'";


        return $this->_find($query, 100);
    }

    public function get($orderNumber) {

        $query = "FOR EACH oe_head NO-LOCK "
                . "WHERE oe_head.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_head.rec_type = 'O' "
                . "AND oe_head.order = '{$orderNumber}'";

        $fields = "adr,"
                . "created_date,"
                . "created_time,"
                . "customer,"
                . "cu_po,"
                . "c_tot_code,"
                . "c_tot_code_amt,"
                . "c_tot_gross,"
                . "c_tot_net_ar,"
                . "email,"
                . "invc_date,"
                . "invc_seq,"
                . "invoice,"
                . "opn,"
                . "order,"
                . "ord_date,"
                . "ord_ext,"
                . "phone,"
                . "rec_seq,"
                . "residential,"
                . "ship_via_code,"
                . "stat,"
                . "state,"
                . "country_code,"
                . "postal_code";

        $response = $this->erp->read($query, $fields, 1);

        $erpItem = $response[0];

        $item = new SalesOrder();
        $item->setShipToAddress1($erpItem->adr[0]);
        $item->setShipToAddress2($erpItem->adr[1]);
        $item->setShipToAddress3($erpItem->adr[2]);
        $item->setShipToCity($erpItem->adr[3]);
        $item->setCustomerNumber($erpItem->customer);
        $item->setCustomerPurchaseOrder($erpItem->cu_po);
        $item->setShipToEmail($erpItem->email);
        $item->setOpen($erpItem->opn);
        $item->setOrderNumber($erpItem->order);
        $item->setOrderDate(new DateTime($erpItem->ord_date));
        $item->setWebReferenceNumber($erpItem->ord_ext);
        $item->setShipToPhone($erpItem->phone);
        $item->setRecordSequence($erpItem->rec_seq);
        $item->setShipViaCode($erpItem->ship_via_code);
        $item->setStatus($erpItem->stat);
        $item->setShipToState($erpItem->state);
        $item->setShipToCountry($erpItem->country_code);
        $item->setShipToZip($erpItem->postal_code);

        return $item;
    }

    public function getByWebReferenceNumberAndCustomerNumber($webReferenceNumber, $customerNumber) {

        $query = "FOR EACH oe_head NO-LOCK "
                . "WHERE oe_head.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_head.rec_type = 'O' "
                . "AND oe_head.ord_ext = '{$webReferenceNumber}' "
                . "AND oe_head.customer = '{$customerNumber}'";

        $fields = "adr,"
                . "created_date,"
                . "created_time,"
                . "customer,"
                . "cu_po,"
                . "c_tot_code,"
                . "c_tot_code_amt,"
                . "c_tot_gross,"
                . "c_tot_net_ar,"
                . "email,"
                . "invc_date,"
                . "invc_seq,"
                . "invoice,"
                . "opn,"
                . "order,"
                . "ord_date,"
                . "ord_ext,"
                . "phone,"
                . "rec_seq,"
                . "residential,"
                . "ship_via_code,"
                . "stat,"
                . "state,"
                . "country_code,"
                . "postal_code";

        $response = $this->erp->read($query, $fields, 1);

        $erpItem = $response[0];

        $item = new SalesOrder();
        $item->setShipToAddress1($erpItem->adr[0]);
        $item->setShipToAddress2($erpItem->adr[1]);
        $item->setShipToAddress3($erpItem->adr[2]);
        $item->setShipToCity($erpItem->adr[3]);
        $item->setCustomerNumber($erpItem->customer);
        $item->setCustomerPurchaseOrder($erpItem->cu_po);
        $item->setShipToEmail($erpItem->email);
        $item->setOpen($erpItem->opn);
        $item->setOrderNumber($erpItem->order);
        $item->setOrderDate(new DateTime($erpItem->ord_date));
        $item->setWebReferenceNumber($erpItem->ord_ext);
        $item->setShipToPhone($erpItem->phone);
        $item->setRecordSequence($erpItem->rec_seq);
        $item->setShipViaCode($erpItem->ship_via_code);
        $item->setStatus($erpItem->stat);
        $item->setShipToState($erpItem->state);
        $item->setShipToCountry($erpItem->country_code);
        $item->setShipToZip($erpItem->postal_code);

        return $item;
    }

    public function getItems($orderNumber) {

        $query = "FOR EACH oe_line NO-LOCK "
                . "WHERE oe_line.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_line.rec_type = 'O' "
                . "AND oe_line.order = '{$orderNumber}'";

        $fields = "line,"
                . "item,"
                . "descr,"
                . "price,"
                . "q_ord";

        $response = $this->erp->read($query, $fields);

        $result = array();

        foreach ($response as $erpItem) {
            $item = new SalesOrderItem();
            $item->setItemNumber($erpItem->item);
            $item->setQuantityOrdered($erpItem->q_ord);
            $result[] = $item;
        }

        return $result;
    }

    public function submitOrder(Order $order) {

        $data = array(
            'order_ext' => $order->getWebOrderNumber(),
            'customer' => $order->getCustomerNumber(),
            's_name' => $order->getShipToName(),
            's_adr' => array(
                $order->getShipToAddress1(),
                $order->getShipToAddress2(),
                $order->getShipToAddress3(),
                $order->getShipToCity()
            ),            
            's_st' => $order->getShipToState(),
            's_postal_code' => $order->getShipToZip(),
            's_country_code' => $order->getShipToCountry(),
            'company_cu' => $this->erp->getCompany(),
            'company_oe' => $this->erp->getCompany(),
            'warehouse' => $this->erp->getWarehouse(),
            'ship_via_code' => $order->getShipViaCode(),
            'residential' => $order->getResidential()
        );
        
        $response = $this->erp->create('ec_oehead', array($data), false);

        $itemData = array();

        foreach ($order->getItems() as $key => $item) {

            $erpItem = $this->erp
                    ->getProductRepository()
                    ->getByItemNumber($item->getItemNumber());

            $itemData[] = array(
                'order_ext' => $order->getWebOrderNumber(),
                'customer' => $order->getCustomerNumber(),
                'line' => $key + 1,
                'item' => $item->getItemNumber(),
                'qty_ord' => $item->getQuantityOrdered(),
                'unit_price' => $erpItem->getWholesalePrice(),
                'um_o' => $erpItem->getUnitOfMeasure(),
                'company_cu' => $this->erp->getCompany(),
                'company_it' => $this->erp->getCompany(),
                'company_oe' => $this->erp->getCompany(),
                'warehouse' => $this->erp->getWarehouse()
            );
        }

        $response2 = $this->erp->create('ec_oeline', $itemData, false);
        
        return array(
            'order_response' => $response,
            'item_response' => $response2
        );
        
    }

}
