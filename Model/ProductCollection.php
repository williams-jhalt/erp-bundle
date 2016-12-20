<?php

namespace Williams\ErpBundle\Model;

use JMS\Serializer\Annotation as JMS;

class ProductCollection {

    /**
     * @JMS\Type(array<Williams\ErpBundle\Model\Product>)
     * @var Product[]
     */
    protected $products;
    
    /**
     * @param Product[] $products
     */
    public function __construct(array $products) {
        $this->products = $products;
    }

    function getProducts() {
        return $this->products;
    }

    function setProducts(array $products) {
        $this->products = $products;
    }

}
