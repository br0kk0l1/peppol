<?php

namespace PonderSource\Peppol\Invoice;

use PonderSource\Peppol\Constants\UNCL2005;

class InvoicePeriod {
    private ?DateTime $startDate;
    private ?DateTime $endDate;
    private ?UNCL2005 $descriptionCode;
}