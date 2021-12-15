<?php

namespace PonderSource\Peppol\Payment;

class AllowanceCharge {
    private bool $chargeIndicator;
    private UNCL5189|UNCL7161|null $allowanceChargeReasonCode;
    private ?string $allowanceChargeReason;
    private ?float $multiplierFactorNumeric;
    private float $amount; //@TODO: currency type rounded to 2 decimals
    private ?ISO4217 $currency;
    private ?float $baseAmount; //@TODO: currency type rounded to 2 decimals
    private ?ISO4217 $baseAmountCurrency;
}