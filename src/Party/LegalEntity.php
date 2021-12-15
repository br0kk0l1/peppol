<?php

namespace PonderSource\Peppol\Party;

class LegalEntity {
    private string $registrationName;
    private ?ICD $companyIdScheme;
    private ?string $companyId;
    private ?string $companyLegalForm;
}