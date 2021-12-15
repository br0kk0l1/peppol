<?php

namespace PonderSource\Peppol\Delivery;

class Delivery {
    private ?DateTime $actualDeliveryDate;
    private ?DeliveryLocation $deliveryLocation;
    private ?string $deliveryParty;
}