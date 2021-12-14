<?php

namespace PonderSource\Peppol\Constants;
class UNCL5387
{

    /**
     * Code identifying a reference price.
     **/
    const REFERENCE_PRICE = "AAA";

    /**
     * Code specifying that the price is inclusive of tax.
     **/
    const PRICE_INCLUDES_TAX = "AAB";

    /**
     * The suggested retail price as suggested or determined by the party purchasing the goods.
     **/
    const BUYER_SUGGESTED_RETAIL_PRICE = "AAC";

    /**
     * The charges imposed by the ocean transportation industry above and beyond the basic freight.
     **/
    const OCEAN_CHARGES_RATE = "AAD";

    /**
     * Not subject to escalation or adjustment.
     **/
    const NOT_SUBJECT_TO_FLUCTUATION = "AAE";

    /**
     * Subject to increase or development by successive stages.
     **/
    const SUBJECT_TO_ESCALATION = "AAF";

    /**
     * Code specifying that the price is subject to adjustment.
     **/
    const SUBJECT_TO_PRICE_ADJUSTMENT = "AAG";

    /**
     * Subject to increase or development by successive stages and price adjustment.
     **/
    const SUBJECT_TO_ESCALATION_AND_PRICE_ADJUSTMENT = "AAH";

    /**
     * Code specifying that the fluctuation conditions are not identified.
     **/
    const FLUCTUATION_CONDITIONS_NOT_SPECIFIED = "AAI";

    /**
     * Firm price for specified work.
     **/
    const ALL_IN_PRICE = "AAJ";

    /**
     * A price valid from an effective date/time/period.
     **/
    const NEW_PRICE = "AAK";

    /**
     * A price valid prior to an effective date/time/period of a new price.
     **/
    const OLD_PRICE = "AAL";

    /**
     * To indicate that the given price applies per week.
     **/
    const PER_WEEK = "AAM";

    /**
     * Price can be obtained on request from seller.
     **/
    const PRICE_ON_APPLICATION = "AAN";

    /**
     * The price given is the price of the item without packaging.
     **/
    const UNPACKED_PRICE = "AAO";

    /**
     * Discount price available to all customers except the retail customer.
     **/
    const TRADE_PRICE = "AAP";

    /**
     * Price which will remain unchanged for a given time period.
     **/
    const FIRM_PRICE = "AAQ";

    /**
     * The per unit cost of referenced material based on a given quotation for that material.
     **/
    const MATERIAL_SHARE_OF_ITEM_PRICE = "AAR";

    /**
     * The labour component of the per-unit item price.
     **/
    const LABOUR_SHARE_OF_ITEM_PRICE = "AAS";

    /**
     * The transport component of the per-unit item price.
     **/
    const TRANSPORT_SHARE_OF_ITEM_PRICE = "AAT";

    /**
     * The packing component of the per-unit item price.
     **/
    const PACKING_SHARE_OF_ITEM_PRICE = "AAU";

    /**
     * The tooling component of the per-unit item price.
     **/
    const TOOLING_SHARE_OF_ITEM_PRICE = "AAV";

    /**
     * The component of a price charged for providing a temporary vehicle.
     **/
    const TEMPORARY_VEHICLE_CHARGE = "AAW";

    /**
     * This is the component of the price which is charged due to interest.
     **/
    const PRICE_COMPONENT_DUE_TO_INTEREST = "AAX";

    /**
     * This is the component of the price which is charged due to management services rendered.
     **/
    const PRICE_COMPONENT_DUE_TO_MANAGEMENT_SERVICES = "AAY";

    /**
     * This is the component of the price which is charged due to maintenance.
     **/
    const PRICE_COMPONENT_DUE_TO_MAINTENANCE = "AAZ";

    /**
     * A price which is available to an individual buyer as opposed to an institutional buyer.
     **/
    const INDIVIDUAL_BUYER_PRICE = "ABA";

    /**
     * A price which is available to a buying group.
     **/
    const GROUP_BUYING_PRICE = "ABB";

    /**
     * A special price given to a member of a buying group.
     **/
    const GROUP_MEMBER_BUYING_PRICE = "ABC";

    /**
     * A special price if pre-payment is made for the article ordered.
     **/
    const PREPAYMENT_PRICE = "ABD";

    /**
     * Retail price not including any applicable taxes.
     **/
    const RETAIL_PRICE__EXCLUDING_TAXES = "ABE";

    /**
     * Suggested retail price not including any applicable taxes.
     **/
    const SUGGESTED_RETAIL_PRICE__EXCLUDING_TAXES = "ABF";

    /**
     * The minimum price agreed between trading partners.
     **/
    const AGREED_MINIMUM_PRICE = "ABG";

    /**
     * The legal minimum retail price.
     **/
    const STATUTORY_MINIMUM_RETAIL_PRICE = "ABH";

    /**
     * A code to indicate that the price represents the reimbursement of the actual costs incurred.
     **/
    const COST_REIMBURSEMENT_PRICE = "ABI";

    /**
     * A code to indicate that the given price is applicable under normal competitive conditions.
     **/
    const MARKET_PRICE = "ABJ";

    /**
     * A code to indicate that the price mentioned has been submitted in the context of an open tender.
     **/
    const OPEN_TENDER_PRICE = "ABK";

    /**
     * The base price of a product or service.
     **/
    const BASE_PRICE = "ABL";

    /**
     * The difference in price against a base price.
     **/
    const BASE_PRICE_DIFFERENCE = "ABM";

    /**
     * A price which can be adjusted due to economic conditions between the date of offer and the date of acceptance.
     **/
    const ADJUSTABLE_PRICE_PRIOR_TO_ACCEPTANCE = "ABN";

    /**
     * A price which can be revised due to economic conditions between the date of acceptance of the order and the date of delivery.
     **/
    const REVISABLE_PRICE_AFTER_ACCEPTANCE = "ABO";

    /**
     * A provisional price which cannot be exceeded.
     **/
    const PROVISIONAL_CEILING_PRICE = "ABP";

    /**
     * A provisional price which cannot be exceeded but which can be adjusted due to economic conditions between the date of offer and the date of acceptance.
     **/
    const ADJUSTABLE_PROVISIONAL_CEILING_PRICE = "ABQ";

    /**
     * A provisional price which cannot be exceeded but is revisable due to economic conditions between the date of acceptance of the order through to the date of delivery.
     **/
    const REVISABLE_PROVISIONAL_CEILING_PRICE = "ABR";

    /**
     * A provisional price which is revisable due to economic conditions between the date of acceptance of the order and the date of delivery.
     **/
    const REVISABLE_PROVISIONAL_PRICE = "ABS";

    /**
     * A provisional price which is adjustable due to economic conditions between the date of offer and the date of acceptance.
     **/
    const ADJUSTABLE_PROVISIONAL_PRICE = "ABT";

    /**
     * Price connected to a geographical area.
     **/
    const AREA_PRICE = "ABU";

    /**
     * A basis price applied to a geographic area.
     **/
    const AREA_SYSTEM_PRICE = "ABV";

    /**
     * The price applicable to the power generated as a result of a special balance regulation.
     **/
    const SPECIAL_BALANCE_REGULATION_PRICE = "ABW";

    /**
     * The price applicable to the power generated as a result of a balance regulation.
     **/
    const BALANCE_REGULATION_PRICE = "ABX";

    /**
     * The price applicable to the power generated as a result of an upward balance regulation.
     **/
    const UPWARD_BALANCE_REGULATION_PRICE = "ABY";

    /**
     * The price applicable to the power generated as a result of a downward balance regulation.
     **/
    const DOWNWARD_BALANCE_REGULATION_PRICE = "ABZ";

    /**
     * The agreed minimum retail price for an article.
     **/
    const AGREED_MINIMUM_RETAIL_PRICE = "ACA";

    /**
     * The retail price of a product which has been marked on the products packaging.
     **/
    const MARKED_RETAIL_PRICE = "ACB";

    /**
     * Code specifying that price is based on the active ingredient.
     **/
    const ACTIVE_INGREDIENT = "AI";

    /**
     * A substitute cost.
     **/
    const ALTERNATE_PRICE = "ALT";

    /**
     * Code specifying an advice price.
     **/
    const ADVICE_PRICE = "AP";

    /**
     * Code specifying a broker price.
     **/
    const BROKER_PRICE = "BR";

    /**
     * Price per unit of quantity of a product as specified in a catalogue.
     **/
    const CATALOGUE_PRICE = "CAT";

    /**
     * The present worth of a thing which comes from ones homeland, in terms of money or goods.
     **/
    const CURRENT_DOMESTIC_VALUE = "CDV";

    /**
     * Price per unit of quantity of a product/service as agreed in a contract between parties.
     **/
    const CONTRACT_PRICE = "CON";

    /**
     * Price at time of transaction, but subject to future change.
     **/
    const CURRENT_PRICE = "CP";

    /**
     * Code specifying that the price is based on consumer unit.
     **/
    const CONSUMER_UNIT = "CU";

    /**
     * The value of a single item that proves to be correct.
     **/
    const CONFIRMED_UNIT_PRICE = "CUP";

    /**
     * A clearly known duty on a single item which is imposed by law.
     **/
    const DECLARED_CUSTOMS_UNIT_VALUE = "CUS";

    /**
     * The necessary or desirable changes that the sales agency makes with respect to the value of the product.
     **/
    const DEALER_ADJUSTED_PRICE = "DAP";

    /**
     * The cost associated with the agency that markets goods.
     **/
    const DISTRIBUTOR_PRICE = "DIS";

    /**
     * A reduction from the usual list value.
     **/
    const DISCOUNT_PRICE = "DPR";

    /**
     * Code specifying a dealer price.
     **/
    const DEALER_PRICE = "DR";

    /**
     * A certain price up to which one is able to make reductions from the usual list value.
     **/
    const DISCOUNT_AMOUNT_ALLOWED = "DSC";

    /**
     * Price registered at European Commission Steel and Carbon office (DG III).
     **/
    const PRICE = "CSC";

    /**
     * Code specifying an estimated price.
     **/
    const ESTIMATED_PRICE = "ES";

    /**
     * The anticipated value of a single item.
     **/
    const EXPECTED_UNIT_PRICE = "EUP";

    /**
     * The price that is either a freight rate or a rate on which freight charges are calculated.
     **/
    const FREIGHTCHARGE_RATE = "FCR";

    /**
     * Unit price to which allowances and charges apply.
     **/
    const GROSS_UNIT_PRICE = "GRP";

    /**
     * Price per unit of quantity of a product as specified on an invoice.
     **/
    const INVOICE_PRICE = "INV";

    /**
     * Retail price of the buyer that should be printed by the producer on the articles label. The labelling price is not necessary the effective retail price.
     **/
    const LABELLING_PRICE = "LBL";

    /**
     * The greatest amount of goods or services which one can buy to receive a certain value.
     **/
    const MAXIMUM_ORDER_QUANTITY_PRICE = "MAX";

    /**
     * The least amount of goods or services that one can buy to receive a certain value.
     **/
    const MINIMUM_ORDER_QUANTITY_PRICE = "MIN";

    /**
     * The least amount of an order one can place in order to receive a certain value.
     **/
    const MINIMUM_RELEASE_QUANTITY_PRICE = "MNR";

    /**
     * Price that reflects "Sales to other manufacturers" or "Sales for resale".
     **/
    const MANUFACTURERS_SUGGESTED_RETAIL = "MSR";

    /**
     * The greatest amount of an order that one can place in order to receive a certain value.
     **/
    const MAXIMUM_RELEASE_QUANTITY_PRICE = "MXR";

    /**
     * Code specifying a price that cannot be increased.
     **/
    const NOTTOEXCEED_PRICE = "NE";

    /**
     * No price available.
     **/
    const NO_QUOTE = "NQT";

    /**
     * Unit price to which no allowances and charges apply.
     **/
    const NET_UNIT_PRICE = "NTP";

    /**
     * Code specifying a net weight price.
     **/
    const NET_WEIGHT = "NW";

    /**
     * The price per pricing unit of ocean transportation services for moving cargo from one location to another.
     **/
    const OCEAN_FREIGHT_RATE = "OFR";

    /**
     * Numerical amounts of goods or services which are associated with different sums of money. As the amount goes up, the price per individual item decreases.
     **/
    const PRICE_BREAK_QUANTITYS = "PAQ";

    /**
     * The starting amount at which you can place a value on a single item.
     **/
    const UNIT_PRICE_BEGINNING_QUANTITY = "PBQ";

    /**
     * The cost of shipping is paid before the goods are shipped.
     **/
    const PREPAID_FREIGHT_CHARGES = "PPD";

    /**
     * Price per unit of quantity of a product as provisionally agreed.
     **/
    const PROVISIONAL_PRICE = "PPR";

    /**
     * The value that the maker of a good places on an item.
     **/
    const PRODUCERS_PRICE = "PRO";

    /**
     * The value that is placed on an item that is being developed. The idea is to sell this product for less than one normally would, and make up for it by selling a larger quantity.
     **/
    const PROMOTIONAL_PRICE = "PRP";

    /**
     * Code specifying a gross weight price.
     **/
    const GROSS_WEIGHT = "PW";

    /**
     * Price per unit of quantity of a product as specified in a quote.
     **/
    const QUOTE_PRICE = "QTE";

    /**
     * Price per unit of quantity of a product to be used for resale.
     **/
    const RESALE_PRICE = "RES";

    /**
     * Price per unit of quantity of a product to be used for retail.
     **/
    const RETAIL_PRICE = "RTP";

    /**
     * To transport goods and be owed money by the customer for the services performed.
     **/
    const SHIP_AND_DEBIT = "SHD";

    /**
     * Price per unit of quantity of a product suggested for retail.
     **/
    const SUGGESTED_RETAIL_PRICE = "SRP";

    /**
     * Used in steel industry.
     **/
    const GROSS_WEIGHT_WITHOUT_WOODEN_PALLETS = "SW";

    /**
     * Code specifying that the price has to be negotiated.
     **/
    const TO_BE_NEGOTIATED = "TB";

    /**
     * To carry or remove from one place, situation, or person to another.
     **/
    const TRANSFER = "TRF";

    /**
     * Code specifying a traded unit price.
     **/
    const TRADED_UNIT = "TU";

    /**
     * Code specifying a price based on a theoretical weight.
     **/
    const THEORETICAL_WEIGHT = "TW";

    /**
     * Code specifying a wholesale price.
     **/
    const WHOLESALE_PRICE = "WH";
}