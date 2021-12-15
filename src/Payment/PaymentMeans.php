<?php

namespace PonderSource\Peppol\Payment;

class PaymentMeans {
    private UNCL4461 $paymentMeansCode;
    private string $paymentMeansName;
    private ?string $paymentId;
    private ?CardInformation $cardAccount;
    private ?FinancialAccount $payeeFinancialAccount;
    private ?PaymentMandate $paymentMandate;
}