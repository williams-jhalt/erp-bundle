<?php

namespace Williams\ErpBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Williams\ErpBundle\Model\InvoiceItemCollection;
use Williams\ErpBundle\Service\ErpService;

class InvoiceItemsController extends FOSRestController {
    
    /**
     * 
     * @return ErpService
     */
    private function getErpService() {        
        return $this->get('williams_erp.service');
    }
    
    /**
     * @param int $orderNumber
     * @param int $recordSequence
     * @return View
     */
    public function getItemsAction($orderNumber, $recordSequence) {
                        
        $repo = $this->getErpService()->getInvoiceRepository();
        
        $items = $repo->getItems((int)$orderNumber, (int)$recordSequence);
        
        $view = $this->view($items, 200);
        
        return $this->handleView($view);
        
    }
    
}