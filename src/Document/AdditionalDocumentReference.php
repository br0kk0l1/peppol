<?php

namespace PonderSource\Peppol\Document;

use PonderSource\Peppol\Document\DocumentReference;
use PonderSource\Peppol\Constants\UNCL1153;

class AdditionalDocumentReference extends DocumentReference {
    private UNCL1153 $schemeId;
    private integer $documentTypeCode = 130;
    private ?string $documentDescription;
    private ?Attachment $attachment;
}