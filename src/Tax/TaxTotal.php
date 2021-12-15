<?php

namespace PonderSource\Peppol\Tax;

class TaxTotal {
    private float $taxAmount; //@TODO: currency type: 2 decimals
    private ?ISO4217 $currency;
    private ?array $taxSubtotal;
}