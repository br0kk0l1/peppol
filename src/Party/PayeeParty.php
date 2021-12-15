<?php

namespace PonderSource\Peppol\Party;

class PayeeParty {
    private ?PartyIdentification $partyIdentification;
    private string $partyName;
    private ?LegalEntity $partyLegalEntity;
}