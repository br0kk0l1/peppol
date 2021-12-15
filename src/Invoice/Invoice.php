<?php

namespace PonderSource\Peppol\Invoice;

use PonderSource\Peppol\Constants\UNCL1001;
use PonderSource\Peppol\Constants\ISO4217;
use PonderSource\Peppol\Invoice\InvoicePeriod;
use PonderSource\Peppol\Invoice\InvoiceLine;
use PonderSource\Peppol\Order\OrderReference;
use PonderSource\Peppol\Document\DocumentReference;
use PonderSource\Peppol\Party\Party;
use PonderSource\Peppol\Party\PayeeParty;
use PonderSource\Peppol\Party\TaxRepresentativeParty;
use PonderSource\Peppol\Project\ProjectReference;
use PonderSource\Peppol\Payment\PaymentTerms;
use PonderSource\Peppol\Tax\TaxTotal;
use PonderSource\Peppol\Tax\LegalMonetaryTotal;

class Invoice {
    private string $customizationID = 'urn:cen.eu:en16931:2017#compliant#urn:fdc:peppol.eu:2017:poacc:billing:3.0';
    private string $profileID = 'urn:fdc:peppol.eu:2017:poacc:billing:01:1.0';
    private int $id;
    private DateTime $issueDate; 
    private ?DateTime $dueDate;
    private UNCL1001 $invoiceTypeCode;
    private ?string $note;
    private ?DateTime $taxPointDate;
    private ISO4217 $documentCurrencyCode;
    private ?ISO4217 $taxCurrencyCode;
    private ?string $accountingCost;
    private ?string $buyerReference;
    private ?InvoicePeriod $invoicePeriod;
    private ?OrderReference $orderReference;
    private ?array $billingRefrence;
    private ?DocumentReference $despatchDocumentReference;
    private ?DocumentReference $receiptDocumentReference;
    private ?DocumentReference $originatorDocumentReference;
    private ?DocumentReference $contractDocumentReference;
    private ?array $additionalDocumentReference;
    private ?ProjectReference $projectReference;
    private Party $accountingSupplierParty;
    private Party $accountingCustomerParty;
    private ?PayeeParty $payeeParty;
    private ?TaxRepresentativeParty $taxRepresentativeParty;
    private ?Delivery $delivery;
    private ?array $paymentMeans;
    private ?PaymentTerms $paymentTerms;
    private ?array $allowanceChange;
    private TaxTotal $taxTotal;
    private ?TaxTotal $taxTotal2;
    private LegalMonetaryTotal $legalMonetaryTotal;
    private array $invoiceLine;
}