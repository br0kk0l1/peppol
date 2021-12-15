<?php

namespace PonderSource\Peppol\Document;

abstract class Attachment {

}

class EmbeddedBinaryDocument extends Attachment {
    private MIMECODE $mimeCode;
    private string $filename;
} 

class ExternalReference extends Attachment {
    private string $uri;
}