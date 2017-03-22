<?php

namespace Williams\ErpBundle\Controller;

use DateTime;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\View\View;
use Williams\ErpBundle\Model\InvoiceCollection;
use Williams\ErpBundle\Service\ErpService;

class InvoicesController extends FOSRestController {

    /**
     * 
     * @return ErpService
     */
    private function getErpService() {
        return $this->get('williams_erp.service');
    }

    /**
     * @Rest\QueryParam(name="offset", requirements="\d+", default="0", description="Offset of record to start at")
     * @Rest\QueryParam(name="limit", requirements="\d+", default="1000", description="Number of items to return")
     * @Rest\QueryParam(name="orderNumber", description="If set, returns invoices matching order number")
     * @Rest\QueryParam(name="consolidated", description="If true, returns only consolidated invoices")
     * @Rest\QueryParam(name="customerNumber", description="If set, returns invoices for this customer")
     * @Rest\QueryParam(name="startDate", description="If set, returns only invoices after this date")
     * @Rest\QueryParam(name="endDate", description="If set, returns only invoices before this date")
     * 
     * @param ParamFetcher $paramFetcher
     * @return View
     */
    public function getInvoicesAction(ParamFetcher $paramFetcher) {

        $offset = $paramFetcher->get('offset', 0);
        $limit = $paramFetcher->get('limit', 1000);
        $orderNumber = $paramFetcher->get('orderNumber');
        $consolidated = $paramFetcher->get('consolidated');
        $customerNumber = $paramFetcher->get('customerNumber');
        $startDate = $paramFetcher->get('startDate');
        $endDate = $paramFetcher->get('endDate');

        $repo = $this->getErpService()->getInvoiceRepository();

        if (!empty($orderNumber)) {
            $invoices = $repo->findByOrderNumber($orderNumber);
        } else if (!empty($customerNumber)) {

            if (!empty($startDate)) {
                $sd = new DateTime($startDate);
            } else {
                $sd = null;
            }

            if (!empty($endDate)) {
                $ed = new DateTime($endDate);
            } else {
                $ed = null;
            }

            $invoices = $repo->findByCustomerAndDate($customerNumber, $sd, $ed, $consolidated, $limit, $offset);
        } else {
            $invoices = $repo->findAll($limit, $offset);
        }

        $view = $this->view($invoices, 200);

        return $this->handleView($view);
    }

    /**
     * @param int $orderNumber
     * @param int $recordSequence
     * @return View
     */
    public function getInvoiceAction($orderNumber, $recordSequence) {

        $repo = $this->getErpService()->getInvoiceRepository();

        $invoice = $repo->get((int) $orderNumber, (int) $recordSequence);

        $view = $this->view($invoice, 200);

        return $this->handleView($view);
    }

}
