<?php

namespace PonderSource\Peppol\Address;

class PostalAddress {
    private ?string $streetName;
    private ?string $additionalStreetName;
    private ?string $cityName;
    private ?string $postalZone;
    private ?string $countrySubentity;
    private ?string $addressLine;
    private ISO3166 $country;
}