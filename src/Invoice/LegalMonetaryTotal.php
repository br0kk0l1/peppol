<?php

namespace PonderSource\Peppol\Invoice;

class LegalMonetaryTotal {
    private float $lineExtensionAmount;
    private float $taxExclusiveAmount;
    private float $taxInclusiveAmount;
    private ?float $allowanceTotalAmount;
    private ?float $chargeTotalAmount;
    private ?float $prepaidAmount;
    private ?float $payableRoundingAmount;
    private float $payableAmount;
}