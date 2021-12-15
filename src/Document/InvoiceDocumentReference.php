<?php

namespace PonderSource\Peppol\Document;

use PonderSource\Peppol\Document\DocumentReference;

class InvoiceDocumentReference extends DocumentReference {
    private ?DateTime $issueDate;
}