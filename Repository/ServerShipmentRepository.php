<?php

namespace Williams\ErpBundle\Repository;

use DateTime;
use Williams\ErpBundle\Model\Shipment;
use Williams\ErpBundle\Model\ShipmentCollection;
use Williams\ErpBundle\Model\ShipmentItem;
use Williams\ErpBundle\Model\ShipmentItemCollection;
use Williams\ErpBundle\Model\ShipmentPackage;
use Williams\ErpBundle\Model\ShipmentPackageCollection;
use Williams\ErpBundle\Model\ShipmentPackageItem;

class ServerShipmentRepository extends AbstractServerRepository implements ShipmentRepositoryInterface {

    /**
     * 
     * @param integer $limit
     * @param integer $offset
     * @return ShipmentCollection
     */
    public function findAll($limit = 1000, $offset = 0) {

        $query = "FOR EACH oe_head NO-LOCK "
                . "WHERE oe_head.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_head.rec_type = 'S'";

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
                . "postal_code,"
                . "Manifest_id";

        $response = $this->erp->read($query, $fields, $limit, $offset);

        $result = array();

        foreach ($response as $erpItem) {
            $item = new Shipment();
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
            $item->setManifestId($erpItem->Manifest_id);
            $result[] = $item;
        }

        return new ShipmentCollection($result);
    }

    /**
     * 
     * @param integer $orderNumber
     * @return ShipmentCollection
     */
    public function findByOrderNumber($orderNumber) {

        $query = "FOR EACH oe_head NO-LOCK "
                . "WHERE oe_head.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_head.rec_type = 'S' "
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
                . "postal_code,"
                . "Manifest_id";

        $response = $this->erp->read($query, $fields);

        $result = array();

        foreach ($response as $erpItem) {
            $item = new Shipment();
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
            $item->setManifestId($erpItem->Manifest_id);
            $result[] = $item;
        }

        return new ShipmentCollection($result);
    }

    /**
     * 
     * @param integer $orderNumber
     * @param integer $recordSequence
     * @return Shipment
     */
    public function get($orderNumber, $recordSequence = 1) {

        $query = "FOR EACH oe_head NO-LOCK "
                . "WHERE oe_head.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_head.rec_type = 'S' "
                . "AND oe_head.order = '{$orderNumber}' AND oe_head.rec_seq = '{$recordSequence}'";

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
                . "postal_code,"
                . "Manifest_id";

        $response = $this->erp->read($query, $fields, 1);

        $erpItem = $response[0];

        $item = new Shipment();
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
        $item->setManifestId($erpItem->Manifest_id);

        return $item;
    }

    /**
     * 
     * @param integer $orderNumber
     * @param integer $recordSequence
     * @return ShipmentItemCollection
     */
    public function getItems($orderNumber, $recordSequence = 1) {

        $query = "FOR EACH oe_line NO-LOCK "
                . "WHERE oe_line.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_line.rec_type = 'S' "
                . "AND oe_line.order = '{$orderNumber}' AND oe_line.rec_seq = '{$recordSequence}'";

        $fields = "line,"
                . "item,"
                . "descr,"
                . "price,"
                . "q_ord,"
                . "q_comm";

        $response = $this->erp->read($query, $fields);

        $result = array();

        foreach ($response as $erpItem) {
            $item = new ShipmentItem();
            $item->setItemNumber($erpItem->item);
            $item->setQuantityOrdered($erpItem->q_ord);
            $item->setQuantityShipped($erpItem->q_comm);
            $result[] = $item;
        }

        return new ShipmentItemCollection($result);
    }

    /**
     * 
     * @param integer $orderNumber
     * @return ShipmentPackageCollection
     */
    public function getPackages($orderNumber) {

        $query = "FOR EACH oe_ship_pack NO-LOCK "
                . "WHERE oe_ship_pack.company_oe = '" . $this->erp->getCompany() . "' "
                . "AND oe_ship_pack.order = '{$orderNumber}'";

        $fields = "order,"
                . "rec_seq,"
                . "tracking_no,"
                . "Manifest_id,"
                . "ship_via_code,"
                . "pkg_chg,"
                . "pack_weight,"
                . "pack_height,"
                . "pack_length,"
                . "pack_width";

        $response = $this->erp->read($query, $fields);

        $result = array();

        foreach ($response as $erpItem) {
            $item = new ShipmentPackage();
            $item->setFreightCost($erpItem->pkg_chg);
            $item->setShippingWeight($erpItem->pack_weight);
            $item->setTrackingNumber($erpItem->tracking_no);
            $item->setShipViaCode($erpItem->ship_via_code);
            $item->setPackageHeight($erpItem->pack_height);
            $item->setPackageLength($erpItem->pack_length);
            $item->setPackageWidth($erpItem->pack_width);

            $query2 = "FOR EACH ed_ucc128pk NO-LOCK "
                    . "WHERE ed_ucc128pk.company_oe = '" . $this->erp->getCompany() . "' "
                    . "AND ed_ucc128pk.order = '{$orderNumber}', "
                    . "FIRST ed_ucc128ln NO-LOCK WHERE "
                    . "ed_ucc128ln.order = ed_ucc128pk.order AND "
                    . "ed_ucc128ln.rec_type = ed_ucc128pk.rec_type AND "
                    . "ed_ucc128ln.rec_seq = ed_ucc128pk.rec_seq AND "
                    . "ed_ucc128ln.company_oe = ed_ucc128pk.company_oe AND "
                    . "ed_ucc128ln.line = ed_ucc128pk.line AND "
                    . "ed_ucc128ln.carton = ed_ucc128pk.carton AND "
                    . "ed_ucc128ln.tracking_no = '{$erpItem->tracking_no}";

            $fields2 = "ed_ucc128pk.item,ed_ucc128pk.qty,ed_ucc128pk.ucc";

            $response2 = $this->erp->read($query2, $fields2);

            $items = array();

            foreach ($response2 as $erpItem2) {

                $item->setUcc($erpItem2->ed_ucc128pk_ucc);

                $item2 = new ShipmentPackageItem();
                $item2->setItemNumber($erpItem2->ed_ucc128pk_item);
                $item2->setQuantity($erpItem2->ed_ucc128pk_qty);

                $items[] = $item2;
            }

            $item->setItems($items);

            $result[] = $item;
        }

        return new ShipmentPackageCollection($result);
    }

}
