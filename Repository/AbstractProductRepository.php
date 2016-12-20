<?php

namespace Williams\ErpBundle\Repository;

interface AbstractProductRepository {

    public function findAll($limit = 1000, $offset = 0);
    public function findByTextSearch($searchTerms, $limit = 1000, $offset = 0);
    public function getByItemNumber($itemNumber);

}
