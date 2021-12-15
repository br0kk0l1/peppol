<?php

namespace PonderSource\Peppol\Delivery;

class DeliveryLocation {
    private ?ICD $deliveryLocationScheme;
    private ?string $deliveryLocationId;
    private ?Address $address;
}