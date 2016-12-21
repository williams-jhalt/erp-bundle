<?php

namespace Williams\ErpBundle\Service;

use JMS\Serializer\Serializer;
use Williams\ErpBundle\Repository\ClientInvoiceRepository;
use Williams\ErpBundle\Repository\ClientProductRepository;
use Williams\ErpBundle\Repository\ClientSalesOrderRepository;
use Williams\ErpBundle\Repository\ClientShipmentRepository;

class ErpClientService implements ErpService {

    private $host;
    private $username;
    private $password;
    private $serializer;

    public function __construct($host, $username, $password, Serializer $serializer) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->serializer = $serializer;
    }

    /**
     * 
     * @return ClientProductRepository
     */
    public function getProductRepository() {
        return new ClientProductRepository($this);
    }

    /**
     * 
     * @return ClientSalesOrderRepository
     */
    public function getSalesOrderRepository() {
        return new ClientSalesOrderRepository($this);
    }

    /**
     * 
     * @return ClientShipmentRepository
     */
    public function getShipmentRepository() {
        return new ClientShipmentRepository($this);
    }

    /**
     * 
     * @return ClientInvoiceRepository
     */
    public function getInvoiceRepository() {
        return new ClientInvoiceRepository($this);
    }

    /**
     * Gets the host / url for queries
     * 
     * @return string
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * Get the username for the http request
     * 
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Get the password for the http request
     * 
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Gets the serializer
     * 
     * @return Serializer
     */
    public function getSerializer() {
        return $this->serializer;
    }

}
