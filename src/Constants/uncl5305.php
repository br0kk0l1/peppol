<?php

namespace PonderSource\Peppol\Constants;
class UNCL5305
{

    /**
     * Code specifying that the standard VAT rate is levied from the invoicee.
     **/
    const VAT_REVERSE_CHARGE = "AE";

    /**
     * Code specifying that taxes are not applicable.
     **/
    const EXEMPT_FROM_TAX = "E";

    /**
     * Code specifying the standard rate.
     **/
    const STANDARD_RATE = "S";

    /**
     * Code specifying that the goods are at a zero rate.
     **/
    const ZERO_RATED_GOODS = "Z";

    /**
     * Code specifying that the item is free export and taxes are not charged.
     **/
    const FREE_EXPORT_ITEM_VAT_NOT_CHARGED = "G";

    /**
     * Code specifying that taxes are not applicable to the services.
     **/
    const SERVICES_OUTSIDE_SCOPE_OF_TAX = "O";

    /**
     * A tax category code indicating the item is VAT exempt due to an intra-community supply in the European Economic Area.
     **/
    const VAT_EXEMPT_FOR_EEA_INTRACOMMUNITY_SUPPLY_OF_GOODS_AND_SERVICES = "K";

    /**
     * Impuesto General Indirecto Canario (IGIC) is an indirect tax levied on goods and services supplied in the Canary Islands (Spain) by traders and professionals, as well as on import of goods.
     **/
    const CANARY_ISLANDS_GENERAL_INDIRECT_TAX = "L";

    /**
     * Impuesto sobre la Producción, los Servicios y la Importación (IPSI) is an indirect municipal tax, levied on the production, processing and import of all kinds of movable tangible property, the supply of services and the transfer of immovable property located in the cities of Ceuta and Melilla.
     **/
    const TAX_FOR_PRODUCTION_SERVICES_AND_IMPORTATION_IN_CEUTA_AND_MELILLA = "M";
}