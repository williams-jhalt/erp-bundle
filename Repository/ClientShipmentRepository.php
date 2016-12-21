<?php

namespace Williams\ErpBundle\Repository;

class ClientShipmentRepository extends AbstractClientRepository implements ShipmentRepositoryInterface {

    public function findAll($limit = 1000, $offset = 0) {

        $format = 'json';

        $response = $this->client->get("shipments.{$format}", ['query' => ['limit' => $limit, 'offset' => $offset]]);
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\ShipmentCollection', $format);

        return $result;
    }

    public function findByOrderNumber($orderNumber) {

        $format = 'json';

        $response = $this->client->get("shipments/{$orderNumber}.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\ShipmentCollection', $format);

        return $result;
    }

    public function get($orderNumber, $recordSequence = 1) {

        $format = 'json';

        $response = $this->client->get("shipments/{$orderNumber}/{$recordSequence}.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\Shipment', $format);

        return $result;
        
    }

    public function getItems($orderNumber, $recordSequence = 1) {

        $format = 'json';

        $response = $this->client->get("shipments/{$orderNumber}/{$recordSequence}/items.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\ShipmentItemCollection', $format);

        return $result;
    }

    public function getPackages($orderNumber) {

        $format = 'json';

        $response = $this->client->get("shipments/{$orderNumber}/packages.{$format}");
        
        $data = $response->getBody();

        $serializer = $this->erp->getSerializer();

        $result = $serializer->deserialize($data, 'Williams\ErpBundle\Model\ShipmentPackageCollection', $format);

        return $result;
        
    }

}
