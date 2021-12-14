<?php

namespace PonderSource\Peppol\Constants;
class UNCL7143
{

    /**
     * Number assigned by manufacturer or seller to identify the release of a product.
     **/
    const PRODUCT_VERSION_NUMBER = "AA";

    /**
     * The item number is that of an assembly.
     **/
    const ASSEMBLY = "AB";

    /**
     * Article identifier used within health sector to indicate data used conforms to HIBC.
     **/
    const HIBC_HEALTH_INDUSTRY_BAR_CODE = "AC";

    /**
     * Number assigned to a cold roll.
     **/
    const COLD_ROLL_NUMBER = "AD";

    /**
     * Number assigned to a hot roll.
     **/
    const HOT_ROLL_NUMBER = "AE";

    /**
     * Number assigned to a slab, which is produced in a particular production step.
     **/
    const SLAB_NUMBER = "AF";

    /**
     * A number assigned to indicate a revision of software.
     **/
    const SOFTWARE_REVISION_NUMBER = "AG";

    /**
     * An 11-digit code that uniquely identifies consumer does not have a check digit.
     **/
    const UPC_UNIVERSAL_PRODUCT_CODE_CONSUMER_PACKAGE_CODE = "AH";

    /**
     * A 12-digit code that uniquely identifies the consumer packaging of a product, including a check digit.
     **/
    const UPC_UNIVERSAL_PRODUCT_CODE_CONSUMER_PACKAGE_CODE_CHECKED = "AI";

    /**
     * Number assigned to a sample.
     **/
    const SAMPLE_NUMBER = "AJ";

    /**
     * Number assigned to a pack containing a stack of items put together (e.g. cold roll sheets (steel product)).
     **/
    const PACK_NUMBER = "AK";

    /**
     * A 13-digit code that uniquely identifies the manufacturer's shipping unit, including the packaging indicator.
     **/
    const UPC_UNIVERSAL_PRODUCT_CODE_SHIPPING_CONTAINER_CODE_ = "AL";

    /**
     * Shipping container code (1-2-5-5-1)manufacturer's shipping unit, including the packagingindicator and the check digit.
     **/
    const UPC_UNIVERSAL_PRODUCT_CODEEAN_EUROPEAN_ARTICLE_NUMBER_SHIPPING_CONTAINER_CODE_ = "AM";

    /**
     * A suffix used in conjunction with a higher level UPC (Universal product code) to define packing variations for a product.
     **/
    const UPC_UNIVERSAL_PRODUCT_CODE_SUFFIX = "AN";

    /**
     * A code which specifies the codification of the state's labelling requirements. 
     **/
    const STATE_LABEL_CODE = "AO";

    /**
     * Number assigned to the heat (also known as the iron charge) for the production of steel products.
     **/
    const HEAT_NUMBER = "AP";

    /**
     * A number identifying a coupon.
     **/
    const COUPON_NUMBER = "AQ";

    /**
     * A number to identify a resource.
     **/
    const RESOURCE_NUMBER = "AR";

    /**
     * A number to identify a work task.
     **/
    const WORK_TASK_NUMBER = "AS";

    /**
     * Identification number on a product allowing a quick electronic retrieval of price information for that product.
     **/
    const PRICE_LOOK_UP_NUMBER = "AT";

    /**
     * Number assigned under the NATO (North Atlantic Treaty Organization) codification system to provide the identification of an approved item of supply.
     **/
    const NSN_NORTH_ATLANTIC_TREATY_ORGANIZATION_STOCK_NUMBER = "AU";

    /**
     * A code specifying the product refinement designation.
     **/
    const REFINED_PRODUCT_CODE = "AV";

    /**
     * A code indicating that the product is identified by an
     **/
    const EXHIBIT = "AW";

    /**
     * A number specifying an end item.
     **/
    const END_ITEM = "AX";

    /**
     * A code to specify a product's Federal supply classification.
     **/
    const FEDERAL_SUPPLY_CLASSIFICATION = "AY";

    /**
     * A code specifying the product's engineering data list.
     **/
    const ENGINEERING_DATA_LIST = "AZ";

    /**
     * A number to identify a milestone event.
     **/
    const MILESTONE_EVENT_NUMBER = "BA";

    /**
     * A number indicating the lot number of a product.
     **/
    const LOT_NUMBER = "BB";

    /**
     * A code identifying the product in national drug format 4-4-2.
     **/
    const NATIONAL_DRUG_CODE__FORMAT_442 = "BC";

    /**
     * A code identifying the product in national drug format 5-3-2.
     **/
    const NATIONAL_DRUG_CODE__FORMAT_532 = "BD";

    /**
     * A code identifying the product in national drug format 5-4-1.
     **/
    const NATIONAL_DRUG_CODE__FORMAT_541 = "BE";

    /**
     * A code identifying the product in national drug format 5-4-2.
     **/
    const NATIONAL_DRUG_CODE__FORMAT_542 = "BF";

    /**
     * A code specifying the national drug classification.
     **/
    const NATIONAL_DRUG_CODE = "BG";

    /**
     * A number indicating the part.
     **/
    const PART_NUMBER = "BH";

    /**
     * A local number assigned to an item of stock.
     **/
    const LOCAL_STOCK_NUMBER_LSN = "BI";

    /**
     * A number specifying the next higher assembly or component into which the product is being incorporated.
     **/
    const NEXT_HIGHER_ASSEMBLY_NUMBER = "BJ";

    /**
     * A code specifying a category of data.
     **/
    const DATA_CATEGORY = "BK";

    /**
     * To specify the control number.
     **/
    const CONTROL_NUMBER = "BL";

    /**
     * A number to identify the special material code.
     **/
    const SPECIAL_MATERIAL_IDENTIFICATION_CODE = "BM";

    /**
     * A number assigned locally for control purposes.
     **/
    const LOCALLY_ASSIGNED_CONTROL_NUMBER = "BN";

    /**
     * Colour assigned by buyer.
     **/
    const BUYERS_COLOUR = "BO";

    /**
     * Reference number assigned by the buyer to identify an article.
     **/
    const BUYERS_PART_NUMBER = "BP";

    /**
     * A code assigned to identify a variable measure item.
     **/
    const VARIABLE_MEASURE_PRODUCT_CODE = "BQ";

    /**
     * To specify as an item, the financial phase.
     **/
    const FINANCIAL_PHASE = "BR";

    /**
     * To specify as an item, the contract breakdown.
     **/
    const CONTRACT_BREAKDOWN = "BS";

    /**
     * To specify as an item, the technical phase.
     **/
    const TECHNICAL_PHASE = "BT";

    /**
     * Number identifying a dye lot.
     **/
    const DYE_LOT_NUMBER = "BU";

    /**
     * A statement listing activities of one day.
     **/
    const DAILY_STATEMENT_OF_ACTIVITIES = "BV";

    /**
     * Periodical statement listing activities within a bilaterally agreed time period. 
     **/
    const PERIODICAL_STATEMENT_OF_ACTIVITIES_WITHIN_A_BILATERALLY_AGREED_TIME_PERIOD = "BW";

    /**
     * A statement listing activities of a calendar week.
     **/
    const CALENDAR_WEEK_STATEMENT_OF_ACTIVITIES = "BX";

    /**
     * A statement listing activities of a calendar month.
     **/
    const CALENDAR_MONTH_STATEMENT_OF_ACTIVITIES = "BY";

    /**
     * Original equipment number allocated to spare parts by the manufacturer. 
     **/
    const ORIGINAL_EQUIPMENT_NUMBER = "BZ";

    /**
     * The codes given to certain commodities by an industry.
     **/
    const INDUSTRY_COMMODITY_CODE = "CC";

    /**
     * Code for a group of articles with common characteristics (e.g. used for statistical purposes).
     **/
    const COMMODITY_GROUPING = "CG";

    /**
     * Code for the colour of an article.
     **/
    const COLOUR_NUMBER = "CL";

    /**
     * Reference number identifying a contract.
     **/
    const CONTRACT_NUMBER = "CR";

    /**
     * Code defined by Customs authorities to an article or a group of articles for Customs purposes.
     **/
    const CUSTOMS_ARTICLE_NUMBER = "CV";

    /**
     * Reference number indicating that a change or revision has been applied to a drawing.
     **/
    const DRAWING_REVISION_NUMBER = "DR";

    /**
     * Reference number identifying a drawing of an article.
     **/
    const DRAWING = "DW";

    /**
     * Reference number indicating that a change or revision has been applied to an article's specification.
     **/
    const ENGINEERING_CHANGE_LEVEL = "EC";

    /**
     * Code defining the material's type, surface, geometric form plus various classifying characteristics.
     **/
    const MATERIAL_CODE = "EF";

    /**
     * Number assigned to a manufacturer's product according to the International Article Numbering Association.
     **/
    const INTERNATIONAL_ARTICLE_NUMBERING_ASSOCIATION_EAN = "EN";

    /**
     * Identification of fish species.
     **/
    const FISH_SPECIES = "FS";

    /**
     * Product group code used within a buyer's internal systems.
     **/
    const BUYERS_INTERNAL_PRODUCT_GROUP_CODE = "GB";

    /**
     * National product group code. Administered by a national agency.
     **/
    const NATIONAL_PRODUCT_GROUP_CODE = "GN";

    /**
     * The item number is a general specification number.
     **/
    const GENERAL_SPECIFICATION_NUMBER = "GS";

    /**
     * The item number is part of, or is generated in the context of the Harmonised Commodity Description and Coding System (Harmonised System), as developed and maintained by the World Customs Organization (WCO).
     **/
    const HARMONISED_SYSTEM = "HS";

    /**
     * A unique number identifying a book.
     **/
    const ISBN_INTERNATIONAL_STANDARD_BOOK_NUMBER = "IB";

    /**
     * The item number has been allocated by the buyer.
     **/
    const BUYERS_ITEM_NUMBER = "IN";

    /**
     * A unique number identifying a serial publication.
     **/
    const ISSN_INTERNATIONAL_STANDARD_SERIAL_NUMBER = "IS";

    /**
     * Number given by the buyer to a specific style or form of an article, especially used for garments.
     **/
    const BUYERS_STYLE_NUMBER = "IT";

    /**
     * Code given by the buyer to designate the size of an article in textile and shoe industry.
     **/
    const BUYERS_SIZE_CODE = "IZ";

    /**
     * The item number is a machine number.
     **/
    const MACHINE_NUMBER = "MA";

    /**
     * The number given to an article by its manufacturer.
     **/
    const MANUFACTURERS_PRODUCERS_ARTICLE_NUMBER = "MF";

    /**
     * Reference number assigned by the manufacturer to differentiate variations in similar products in a class or group.
     **/
    const MODEL_NUMBER = "MN";

    /**
     * Reference number identifying a product or service.
     **/
    const PRODUCTSERVICE_IDENTIFICATION_NUMBER = "MP";

    /**
     * The item number is a batch number.
     **/
    const BATCH_NUMBER = "NB";

    /**
     * Reference number of a customer's order.
     **/
    const CUSTOMER_ORDER_NUMBER = "ON";

    /**
     * Reference number identifying a description associated with a number ultimately used to identify an article.
     **/
    const PART_NUMBER_DESCRIPTION = "PD";

    /**
     * Reference number identifying a line entry in a customer's order for goods or services.
     **/
    const PURCHASERS_ORDER_LINE_NUMBER = "PL";

    /**
     * Reference number identifying a customer's order.
     **/
    const PURCHASE_ORDER_NUMBER = "PO";

    /**
     * The item number is a promotional variant number.
     **/
    const PROMOTIONAL_VARIANT_NUMBER = "PV";

    /**
     * The item number qualifies the size of the buyer.
     **/
    const BUYERS_QUALIFIER_FOR_SIZE = "QS";

    /**
     * Reference number identifying a returnable container.
     **/
    const RETURNABLE_CONTAINER_NUMBER = "RC";

    /**
     * Reference number identifying a release from a buyer's purchase order.
     **/
    const RELEASE_NUMBER = "RN";

    /**
     * The item number identifies the production or manufacturing run or sequence in which the item was manufactured, processed or assembled.
     **/
    const RUN_NUMBER = "RU";

    /**
     * The item number relates to the year in which the particular model was kept.
     **/
    const RECORD_KEEPING_OF_MODEL_YEAR = "RY";

    /**
     * Number assigned to an article by the supplier of that article.
     **/
    const SUPPLIERS_ARTICLE_NUMBER = "SA";

    /**
     * The item number relates to a standard group of other items (mixed) which are grouped together as a single item for identification purposes.
     **/
    const STANDARD_GROUP_OF_PRODUCTS_MIXED_ASSORTMENT = "SG";

    /**
     * Reference number of a stock keeping unit.
     **/
    const SKU_STOCK_KEEPING_UNIT = "SK";

    /**
     * Identification number of an item which distinguishes this specific item out of a number of identical items.
     **/
    const SERIAL_NUMBER = "SN";

    /**
     * Plumbing and heating.
     **/
    const RSK_NUMBER = "SRS";

    /**
     * 5 digit code for product classification managed by the Institut Francais du Libre Service.
     **/
    const IFLS_INSTITUT_FRANCAIS_DU_LIBRE_SERVICE__DIGIT_PRODUCT_CLASSIFICATION_CODE_5 = "SRT";

    /**
     * 9 digit code for product classification managed by the Institut Francais du Libre Service.
     **/
    const IFLS_INSTITUT_FRANCAIS_DU_LIBRE_SERVICE__DIGIT_PRODUCT_CLASSIFICATION_CODE_9 = "SRU";

    /**
     * A unique number, up to 14-digits, assigned according to the numbering structure of the GS1 system.
     **/
    const GS_GLOBAL_TRADE_ITEM_NUMBER = "SRV";

    /**
     * European system for identification of meter data.
     **/
    const EDIS_ENERGY_DATA_IDENTIFICATION_SYSTEM = "SRW";

    /**
     * Unique number given by a slaughterhouse to an animal or a group of animals of the same breed.
     **/
    const SLAUGHTER_NUMBER = "SRX";

    /**
     * Unique number given by a national authority to identify an animal individually.
     **/
    const OFFICIAL_ANIMAL_NUMBER = "SRY";

    /**
     * The international Harmonized Tariff Schedule (HTS) to classify the article for customs, statistical and other purposes.
     **/
    const HARMONIZED_TARIFF_SCHEDULE = "SRZ";

    /**
     * Article number referring to a sales catalogue of supplier's supplier. 
     **/
    const SUPPLIERS_SUPPLIER_ARTICLE_NUMBER = "SS";

    /**
     * A US Department of Transportation (DOT) code to identify hazardous (dangerous) goods, managed by the Customs and Border Protection (CBP) agency. 
     **/
    const _LEVEL_DOT_CODE = "SSA";

    /**
     * A US code agreed to by the airline industry to identify hazardous (dangerous) goods, managed by the Customs and Border Protection (CBP) agency.
     **/
    const AIRLINE_TARIFF_D = "SSB";

    /**
     * A US Customs and Border Protection (CBP) code used to identify hazardous (dangerous) goods.
     **/
    const TITLE__CODE_OF_FEDERAL_REGULATIONS = "SSC";

    /**
     * A US Department of Transportation/Federal Aviation Administration code used to identify hazardous (dangerous) goods, managed by the Customs and Border Protection (CBP) agency.
     **/
    const INTERNATIONAL_CIVIL_AVIATION_ADMINISTRATION_CODE = "SSD";

    /**
     * A US Department of Transportation (DOT) code used toCustoms and Border Protection (CBP) agency.
     **/
    const HAZARDOUS_MATERIALS_ID_DOT = "SSE";

    /**
     * A US Customs and Border Protection (CBP) code used to identify hazardous (dangerous) goods.
     **/
    const ENDORSEMENT = "SSF";

    /**
     * A department of Defense/Air Force code used to identifyBorder Protection (CBP) agency.
     **/
    const AIR_FORCE_REGULATION_ = "SSG";

    /**
     * The breed of the item (e.g. plant or animal).
     **/
    const BREED = "SSH";

    /**
     * A unique numerical identifier for for chemical compounds, polymers, biological sequences, mixtures and alloys.
     **/
    const CHEMICAL_ABSTRACT_SERVICE_CAS_REGISTRY_NUMBER = "SSI";

    /**
     * A name or designation to identify an engine model.
     **/
    const ENGINE_MODEL_DESIGNATION = "SSJ";

    /**
     * A number assigned by agricultural authorities to identify and track meat and meat products.
     **/
    const INSTITUTIONAL_MEAT_PURCHASE_SPECIFICATIONS_IMPS_NUMBER = "SSK";

    /**
     * A number assigned by agricultural authorities to identify and track meat and meat products.
     **/
    const PRICE_LOOKUP_CODE_PLU = "SSL";

    /**
     * An International Maritime Organization (IMO) code used to identify hazardous (dangerous) goods.
     **/
    const INTERNATIONAL_MARITIME_ORGANIZATION_IMO_CODE = "SSM";

    /**
     * A Department of Transportation/Federal Railroad Administration code used to identify hazardous (dangerous) goods.
     **/
    const BUREAU_OF_EXPLOSIVES_A_RAIL = "SSN";

    /**
     * A UN code used to classify and identify dangerous goods.
     **/
    const UNITED_NATIONS_DANGEROUS_GOODS_LIST = "SSO";

    /**
     * A code established by the International Code of Botanical Nomenclature (ICBN) used to classify and identify botanical articles and commodities.
     **/
    const INTERNATIONAL_CODE_OF_BOTANICAL_NOMENCLATURE_ICBN = "SSP";

    /**
     * A code established by the International Code of Zoological Nomenclature (ICZN) used to classify and identify animals.
     **/
    const INTERNATIONAL_CODE_OF_ZOOLOGICAL_NOMENCLATURE_ICZN = "SSQ";

    /**
     * A code established by the International Code of Nomenclature for Cultivated Plants (ICNCP) used to classify and identify animals.
     **/
    const INTERNATIONAL_CODE_OF_NOMENCLATURE_FOR_CULTIVATED_PLANTS_ICNCP = "SSR";

    /**
     * Identifier assigned to an article by the distributor of that article. 
     **/
    const DISTRIBUTORS_ARTICLE_IDENTIFIER = "SSS";

    /**
     * Product classification system used in the Norwegian market.
     **/
    const NORWEGIAN_CLASSIFICATION_SYSTEM_ENVA = "SST";

    /**
     * Product classification assigned by the supplier.
     **/
    const SUPPLIER_ASSIGNED_CLASSIFICATION = "SSU";

    /**
     * Product classification system used in the Mexican market.
     **/
    const MEXICAN_CLASSIFICATION_SYSTEM_AMECE = "SSV";

    /**
     * Product classification system used in the German market.
     **/
    const GERMAN_CLASSIFICATION_SYSTEM_CCG = "SSW";

    /**
     * Product classification system used in the Finnish market.
     **/
    const FINNISH_CLASSIFICATION_SYSTEM_EANFIN = "SSX";

    /**
     * Product classification system used in the Canadian market.
     **/
    const CANADIAN_CLASSIFICATION_SYSTEM_ICC = "SSY";

    /**
     * Product classification system used in the French market.
     **/
    const FRENCH_CLASSIFICATION_SYSTEM_IFLS = "SSZ";

    /**
     * Number given to a specific style or form of an article, especially used for garments.
     **/
    const STYLE_NUMBER = "ST";

    /**
     * Product classification system used in the Dutch market.
     **/
    const DUTCH_CLASSIFICATION_SYSTEM_CBL = "STA";

    /**
     * Product classification system used in the Japanese market.
     **/
    const JAPANESE_CLASSIFICATION_SYSTEM_JICFS = "STB";

    /**
     * Category of product eligible for EU subsidy (applies for certain dairy products with specific level of fat content).
     **/
    const EUROPEAN_UNION_DAIRY_SUBSIDY_ELIGIBILITY_CLASSIFICATION = "STC";

    /**
     * Product classification system used in the Spanish market.
     **/
    const GS_SPAIN_CLASSIFICATION_SYSTEM = "STD";

    /**
     * Product classification system used in the Polish market.
     **/
    const GS_POLAND_CLASSIFICATION_SYSTEM = "STE";

    /**
     * A Russian government agency that serves as a national standardization body of the Russian Federation.
     **/
    const FEDERAL_AGENCY_ON_TECHNICAL_REGULATING_AND_METROLOGY_OF_THE_RUSSIAN_FEDERATION = "STF";

    /**
     * Product classification system used in the Austrian market.
     **/
    const EFFICIENT_CONSUMER_RESPONSE_ECR_AUSTRIA_CLASSIFICATION_SYSTEM = "STG";

    /**
     * Product classification system used in the Italian market.
     **/
    const GS_ITALY_CLASSIFICATION_SYSTEM = "STH";

    /**
     * Official classification system for public procurement in the European Union.
     **/
    const CPV_COMMON_PROCUREMENT_VOCABULARY = "STI";

    /**
     * International Foodservice Distributors Association (IFDA).
     **/
    const IFDA_INTERNATIONAL_FOODSERVICE_DISTRIBUTORS_ASSOCIATION = "STJ";

    /**
     * Pharmacologic -therapeutic classification maintained by the American Hospital Formulary Service (AHFS).
     **/
    const AHFS_AMERICAN_HOSPITAL_FORMULARY_SERVICE_PHARMACOLOGIC_THERAPEUTIC_CLASSIFICATION = "STK";

    /**
     * Anatomical Therapeutic Chemical classification system maintained by the World Health Organisation (WHO).
     **/
    const ATC_ANATOMICAL_THERAPEUTIC_CHEMICAL_CLASSIFICATION_SYSTEM = "STL";

    /**
     * A five level classification system for medical decvices maintained by the CLADIMED organisation used in the French market.
     **/
    const CLADIMED_CLASSIFICATION_DES_DISPOSITIFS_MDICAUX = "STM";

    /**
     * Classification system related to the Canadian Medical Device Regulations maintained by Health Canada. 
     **/
    const CMDR_CANADIAN_MEDICAL_DEVICE_REGULATIONS_CLASSIFICATION_SYSTEM = "STN";

    /**
     * A classification system for medical devices used in the Italian market.
     **/
    const CNDM_CLASSIFICAZIONE_NAZIONALE_DEI_DISPOSITIVI_MEDICI = "STO";

    /**
     * A classification system for medicines and devices used in the UK market.
     **/
    const UK_DMD_DICTIONARY_OF_MEDICINES__DEVICES_STANDARD_CODING_SCHEME = "STP";

    /**
     * Standardized material and service classification and dictionary maintained by eClass e.V.
     **/
    const ECLSS = "STQ";

    /**
     * Classification for in vitro diagnostics medical devices maintained by the European Diagnostic Manufacturers Association.
     **/
    const EDMA_EUROPEAN_DIAGNOSTIC_MANUFACTURERS_ASSOCIATION_PRODUCT_CLASSIFICATION = "STR";

    /**
     * A classification system for medical devices.
     **/
    const EGAR_EUROPEAN_GENERIC_ARTICLE_REGISTER = "STS";

    /**
     * Nomenclature system for identification of medical devices officially apprroved by the European Union.
     **/
    const GMDN_GLOBAL_MEDICAL_DEVICES_NOMENCLATURE = "STT";

    /**
     * A drug classification system managed by Medi-Span.
     **/
    const GPI_GENERIC_PRODUCT_IDENTIFIER = "STU";

    /**
     * A classification system used with US healthcare insurance programs.
     **/
    const HCPCS_HEALTHCARE_COMMON_PROCEDURE_CODING_SYSTEM = "STV";

    /**
     * A patient safety taxonomy maintained by the World Health Organisation.
     **/
    const ICPS_INTERNATIONAL_CLASSIFICATION_FOR_PATIENT_SAFETY = "STW";

    /**
     * A medical dictionary maintained by the International Federation of Pharmaceutical Manufacturers and Associations (IFPMA).
     **/
    const MEDDRA_MEDICAL_DICTIONARY_FOR_REGULATORY_ACTIVITIES = "STX";

    /**
     * Medical product classification system used in the German market.
     **/
    const MEDICAL_COLUMBUS = "STY";

    /**
     * Product classification system used in the North American market.
     **/
    const NAPCS_NORTH_AMERICAN_PRODUCT_CLASSIFICATION_SYSTEM = "STZ";

    /**
     * Product and Service classification system used in United Kingdom market.
     **/
    const NHS_NATIONAL_HEALTH_SERVICES_ECLASS = "SUA";

    /**
     * US FDA Product Code Classification Database contains medical device names and associated information developed by the Center for Devices and Radiological Health (CDRH).
     **/
    const US_FDA_FOOD_AND_DRUG_ADMINISTRATION_PRODUCT_CODE_CLASSIFICATION_DATABASE = "SUB";

    /**
     * A medical nomenclature system developed between the NHS and the College of American Pathologists.
     **/
    const SNOMED_CT_SYSTEMATIZED_NOMENCLATURE_OF_MEDICINECLINICAL_TERMS = "SUC";

    /**
     * A standard international nomenclature and computer coding system for medical devices maintained by the Emergency Care Research Institute (ECRI).
     **/
    const UMDNS_UNIVERSAL_MEDICAL_DEVICE_NOMENCLATURE_SYSTEM = "SUD";

    /**
     * A unique, 13-digit number assigned according to the numbering structure of the GS1 system and used to identify a type of Reusable Transport Item (RTI).
     **/
    const GS_GLOBAL_RETURNABLE_ASSET_IDENTIFIER_NONSERIALISED = "SUE";

    /**
     * The International Mobile Station Equipment Identity (IMEI) is a unique number to identify mobile phones. It includes the origin, model and serial number of the device. The structure is specified in 3GPP TS 23.003.
     **/
    const IMEI = "SUF";

    /**
     * Classification of waste as defined by the European Maritime Safety Agency (EMSA).
     **/
    const WASTE_TYPE_EMSA = "SUG";

    /**
     * Classification of ship’s stores.
     **/
    const SHIPS_STORE_CLASSIFICATION_TYPE = "SUH";

    /**
     * Classification for emergency response procedures related to fire.
     **/
    const EMERGENCY_FIRE_CODE = "SUI";

    /**
     * Classification for emergency response procedures related to spillage.
     **/
    const EMERGENCY_SPILLAGE_CODE = "SUJ";

    /**
     * Packing group as defined in the International Marititme Dangerous Goods (IMDG) specification.
     **/
    const IMDG_PACKING_GROUP = "SUK";

    /**
     * International Bulk Chemical (IBC) code defined by the International Convention for the Prevention of Pollution from Ships (MARPOL).
     **/
    const MARPOL_CODE_IBC = "SUL";

    /**
     * Subsidiary risk class as defined in the International Maritime Dangerous Goods (IMDG) specification.
     **/
    const IMDG_SUBSIDIARY_RISK_CLASS = "SUM";

    /**
     * (8012) Additional number to form article groups for packing and/or transportation purposes.
     **/
    const TRANSPORT_GROUP_NUMBER = "TG";

    /**
     * A unique number assigned to a taxonomic entity, commonly to a species of plants or animals, providing information on their hierarchical classification, scientific name, taxonomic rank, associated synonyms and vernacular names where appropriate, data source information and data quality indicators.
     **/
    const TAXONOMIC_SERIAL_NUMBER = "TSN";

    /**
     * Main hazard class as defined in the International Maritime Dangerous Goods (IMDG) specification.
     **/
    const IMDG_MAIN_HAZARD_CLASS = "TSO";

    /**
     * The number is part of, or is generated in the context ofand maintained by the European Union (EU).
     **/
    const EU_COMBINED_NOMENCLATURE_EU = "TSP";

    /**
     * The number is part of, or is generated in the context of the Combined Nomenclature classification, as developed and maintained by the European Union (EU).
     **/
    const EU_COMBINED_NOMENCLATURE_CNC = "TSP";

    /**
     * A code to specify a product's therapeutic classification.
     **/
    const THERAPEUTIC_CLASSIFICATION_NUMBER = "TSQ";

    /**
     * Waste type number according to the European Waste Catalogue (EWC).
     **/
    const EUROPEAN_WASTE_CATALOGUE = "TSR";

    /**
     * Number assigned to identify a grouping of products based on price.
     **/
    const PRICE_GROUPING_CODE = "TSS";

    /**
     * The UNSPSC commodity classification system.
     **/
    const UNSPSC = "TST";

    /**
     * European Union Directive on the restriction of hazardous substances.
     **/
    const EU_ROHS_DIRECTIVE = "TSU";

    /**
     * Number assigned by ultimate customer to identify relevant article.
     **/
    const ULTIMATE_CUSTOMERS_ARTICLE_NUMBER = "UA";

    /**
     * Number assigned to a manufacturer's product by the Product Code Council.
     **/
    const UPC_UNIVERSAL_PRODUCT_CODE = "UP";

    /**
     * Reference number assigned by a vendor/seller identifying
     **/
    const VENDOR_ITEM_NUMBER = "VN";

    /**
     * Reference number assigned by a vendor/seller identifying a product/service/article.
     **/
    const VENDORS_SELLERS_PART_NUMBER = "VP";

    /**
     * The item number is a specified by the vendor as a supplemental number for the vendor's purposes.
     **/
    const VENDORS_SUPPLEMENTAL_ITEM_NUMBER = "VS";

    /**
     * The item number has been allocated by the vendor as a specification number.
     **/
    const VENDOR_SPECIFICATION_NUMBER = "VX";

    /**
     * Item type identification mutually agreed between interchanging parties.
     **/
    const MUTUALLY_DEFINED = "ZZZ";
}