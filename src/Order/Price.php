<?php

namespace PonderSource\Peppol\Order;

class Price {
    private Currency $amount;
    private ?Quantity $baseQuantity;
    private ?AllowanceCharge $allowance;
}