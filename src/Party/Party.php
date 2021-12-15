<?php

namespace PonderSource\Peppol\Party;

class Party {
    private EAS $endpointSchemeId;
    private string $endpointId;
    private ?array $partyIdentification;
    private ?string $partyName;
    private PostalAddress $postalAddress;
    private ?PartyTaxScheme $partyTaxScheme1;
    private ?PartyTaxScheme $partyTaxScheme2;
    private LegalEntity $partyLegalEntity;
    private ?Contact $contact;
}