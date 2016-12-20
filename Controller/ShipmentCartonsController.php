<?php

namespace Williams\ErpBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Williams\ErpBundle\Model\ShipmentPackageCollection;
use Williams\ErpBundle\Service\ErpService;

class ShipmentCartonsController extends FOSRestController {
    
    /**
     * 
     * @return ErpService
     */
    private function getErpService() {        
        return $this->get('williams_erp.service');
    }
        
    /**
     * @param int $orderNumber
     * @return View
     */
    public function getCartonsAction($orderNumber) {
                
        $repo = $this->getErpService()->getShipmentRepository();
        
        $items = $repo->getPackages((int)$orderNumber);        
        
        $view = $this->view(new ShipmentPackageCollection($items), 200);
        
        return $this->handleView($view);
        
    }
    
}