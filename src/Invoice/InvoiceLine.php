<?php

namespace PonderSource\Peppol\Invoice;

class InvoiceLine {
    private string $id;
    private ?string $note;
    private integer $invoicedQuantity;
    private UNECEREC20 $invoicedQuantityUnit;
    private Currency $lineExtensionAmount;
    private ?string $accountingCost;
    private ?DateInterval $invoicePeriod;
    private ?string $orderLineReference;
    private ?DocumentReference $documentReference;
    private ?array $allowanceCharge;
    private Item $item;
    private Price $price;
}