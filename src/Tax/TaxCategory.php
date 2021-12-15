<?php

namespace PonderSource\Peppol\Tax;

class TaxCategory {
    private UNCL5305 $id;
    private float $percent;
    private string $taxScheme = 'VAT'; //might be extended to more types at some point (?)
    private ?string $taxExemptionReasonCode;
    private ?string $taxExemptionReason;
}