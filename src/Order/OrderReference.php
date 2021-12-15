<?php

namespace PonderSource\Peppol\Order;

use PonderSource\Peppol\Document\DocumentReference;

class OrderReference {
    private DocumentReference $purchaseOrderId;
    private ?DocumentReference $salesOrderId;
}