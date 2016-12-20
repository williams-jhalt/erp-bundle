<?php

namespace Williams\ErpBundle\Controller;

use AppBundle\Form\OrderType;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Component\HttpFoundation\Request;
use Williams\ErpBundle\Model\Order;
use Williams\ErpBundle\Model\SalesOrderCollection;
use Williams\ErpBundle\Service\ErpService;

class SalesOrdersController extends FOSRestController {

    /**
     * 
     * @return ErpService
     */
    private function getErpService() {
        return $this->get('williams_erp.service');
    }

    public function postOrderAction(Request $request) {

        $order = new Order();

        $form = $this->createForm(OrderType::class, $order);
        
        $form->submit($request->request->get($form->getName()));

        if ($form->isSubmitted() && $form->isValid()) {

            $repo = $this->getErpService()->getSalesOrderRepository();

            $response = $repo->submitOrder($order);

            $view = $this->view($response, 200);

            return $this->handleView($view);
        }

        $view = $this->view($form, 200);

        return $this->handleView($view);
    }

    public function getWeborderAction($identifier) {

        list($webReferenceNumber, $customerNumber) = explode("-", $identifier);

        $repo = $this->getErpService()->getSalesOrderRepository();

        $salesOrder = $repo->getByWebReferenceNumberAndCustomerNumber($webReferenceNumber, $customerNumber);

        $view = $this->view($salesOrder, 200);

        return $this->handleView($view);
    }

    /**
     * @Rest\QueryParam(name="offset", requirements="\d+", default="0", description="Offset of record to start at")
     * @Rest\QueryParam(name="limit", requirements="\d+", default="100", description="Number of items to return")
     * @Rest\QueryParam(name="search", description="Optional search terms")
     */
    public function getOrdersAction(ParamFetcher $paramFetcher) {

        $limit = (int) $paramFetcher->get('limit');
        $offset = (int) $paramFetcher->get('offset');
        $search = $paramFetcher->get('search');

        $repo = $this->getErpService()->getSalesOrderRepository();

        if (!empty($search)) {
            $salesOrders = $repo->findByTextSearch($search);
        } else {
            $salesOrders = $repo->findOpen($limit, $offset);
        }

        $view = $this->view(new SalesOrderCollection($salesOrders), 200);

        return $this->handleView($view);
    }

    public function getOrderAction($orderNumber) {

        $repo = $this->getErpService()->getSalesOrderRepository();

        $salesOrder = $repo->get((int) $orderNumber);

        $view = $this->view($salesOrder, 200);

        return $this->handleView($view);
    }

}
