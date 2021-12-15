<?php

namespace PonderSource\Peppol\Payment;

class CardInformation {
    private string $primaryAccountNumberId;
    private string $networkId;
    private ?string $holderName;
}