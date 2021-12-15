<?php

namespace PonderSource\Peppol\Item;

class Item {
    private ?string $description;
    private string $name;
    private ?string $buyersItemIdentification;
    private ?string $sellersItemIdentification;
    private ?string $standardItemIdentification;
    private ?ISO3166 $originCountry;
    private ?array $commodityClassification;
    private TaxCategory $classifiedTaxCategory;
    private array $additionalItemProperty;
}