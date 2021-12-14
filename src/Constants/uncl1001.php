<?php

namespace PonderSource\Peppol\Constants;
class UNCL1001
{

    /**
     * Certificate providing the values of an analysis.
     **/
    const CERTIFICATE_OF_ANALYSIS = "1";

    /**
     * Certificate certifying the conformity to predefined definitions. 
     **/
    const CERTIFICATE_OF_CONFORMITY = "2";

    /**
     * Certificate certifying the quality of goods, services etc. 
     **/
    const CERTIFICATE_OF_QUALITY = "3";

    /**
     * Report providing the results of a test session.
     **/
    const TEST_REPORT = "4";

    /**
     * Report specifying the performance values of products.
     **/
    const PRODUCT_PERFORMANCE_REPORT = "5";

    /**
     * Report providing specification values of products.
     **/
    const PRODUCT_SPECIFICATION_REPORT = "6";

    /**
     * Reports on events during production process.
     **/
    const PROCESS_DATA_REPORT = "7";

    /**
     * Document/message describes the test report of the first sample. 
     **/
    const FIRST_SAMPLE_TEST_REPORT = "8";

    /**
     * A document/message to enable the transmission of information regarding pricing and catalogue details for goods and services offered by a seller to a buyer. 
     **/
    const PRICESALES_CATALOGUE = "9";

    /**
     * Document/message providing basic data concerning a party. 
     **/
    const PARTY_INFORMATION = "10";

    /**
     * A pre-approved document relating to federal label approval requirements. 
     **/
    const FEDERAL_LABEL_APPROVAL = "11";

    /**
     * Certificate certifying a specific quality of agricultural products. 
     **/
    const MILL_CERTIFICATE = "12";

    /**
     * Document/message which evidences the transport of goods by post (e.g. mail, parcel, etc.). 
     **/
    const POST_RECEIPT = "13";

    /**
     * Certificate certifying the weight of goods.
     **/
    const WEIGHT_CERTIFICATE = "14";

    /**
     * Document/message specifying the weight of goods.
     **/
    const WEIGHT_LIST = "15";

    /**
     * Document by means of which the documentary credit applicant specifies the conditions for the certificate and by whom the certificate is to be issued. 
     **/
    const CERTIFICATE = "16";

    /**
     * Document identifying goods in which the issuing authority expressly certifies that the goods originate in a specific country or part of, or group of countries. It also states the price and/or cost of the goods with the purpose of determining the customs origin. 
     **/
    const COMBINED_CERTIFICATE_OF_VALUE_AND_ORIGIN = "17";

    /**
     * Specific form of transit declaration issued by the exporter (movement certificate). 
     **/
    const MOVEMENT_CERTIFICATE_ATR = "18";

    /**
     * Certificate certifying the quantity of goods, services etc. 
     **/
    const CERTIFICATE_OF_QUANTITY = "19";

    /**
     * Usage of QALITY-message.
     **/
    const QUALITY_DATA_MESSAGE = "20";

    /**
     * Request information based on defined criteria.
     **/
    const QUERY = "21";

    /**
     * Document/message returned as an answer to a question.
     **/
    const RESPONSE_TO_QUERY = "22";

    /**
     * Information regarding the status of a related message.
     **/
    const STATUS_INFORMATION = "23";

    /**
     * Message/document identifying containers that have been unloaded and then reloaded onto the same means of transport. 
     **/
    const RESTOW = "24";

    /**
     * Message/document itemising containers to be discharged from vessel. 
     **/
    const CONTAINER_DISCHARGE_LIST = "25";

    /**
     * Document/message providing contributions advice used for corporate superannuation schemes. 
     **/
    const CORPORATE_SUPERANNUATION_CONTRIBUTIONS_ADVICE = "26";

    /**
     * Document/message providing contributions advice used for superannuation schemes which are industry wide. 
     **/
    const INDUSTRY_SUPERANNUATION_CONTRIBUTIONS_ADVICE = "27";

    /**
     * Member maintenance message used for corporate superannuation schemes. 
     **/
    const CORPORATE_SUPERANNUATION_MEMBER_MAINTENANCE_MESSAGE = "28";

    /**
     * Member maintenance message used for industry wide superannuation schemes. 
     **/
    const INDUSTRY_SUPERANNUATION_MEMBER_MAINTENANCE_MESSAGE = "29";

    /**
     * Payroll deductions advice used in the life insurance industry. 
     **/
    const LIFE_INSURANCE_PAYROLL_DEDUCTIONS_ADVICE = "30";

    /**
     * A Message/document requesting to move cargo from one Customs control point to another. 
     **/
    const UNDERBOND_REQUEST = "31";

    /**
     * A message/document issuing Customs approval to move cargo from one Customs control point to another. 
     **/
    const UNDERBOND_APPROVAL = "32";

    /**
     * Document / message issued by the authority in the exporting country evidencing the sealing of export meat lockers. 
     **/
    const CERTIFICATE_OF_SEALING_OF_EXPORT_MEAT_LOCKERS = "33";

    /**
     * Message identifying the status of cargo.
     **/
    const CARGO_STATUS = "34";

    /**
     * A message specifying information relating to held inventories. 
     **/
    const INVENTORY_REPORT = "35";

    /**
     * Official document to identify a person.
     **/
    const IDENTITY_CARD = "36";

    /**
     * Document/message in which the competent national authorities provide a declarant with an acceptance or a rejection about a received declaration for European statistical purposes. 
     **/
    const RESPONSE_TO_A_TRADE_STATISTICS_MESSAGE = "37";

    /**
     * Official document proving immunisation against certain diseases. 
     **/
    const VACCINATION_CERTIFICATE = "38";

    /**
     * An official document giving permission to travel in foreign countries. 
     **/
    const PASSPORT = "39";

    /**
     * An official document giving permission to drive a car in a given country. 
     **/
    const DRIVING_LICENCE_NATIONAL = "40";

    /**
     * An official document giving a native of one country permission to drive a vehicle in certain other countries. 
     **/
    const DRIVING_LICENCE_INTERNATIONAL = "41";

    /**
     * A document giving free access to a service.
     **/
    const FREE_PASS = "42";

    /**
     * A document giving access to a service for a determined period of time. 
     **/
    const SEASON_TICKET = "43";

    /**
     * (1125) A message to report the transport status and/or change in the transport status (i.e. event) between agreed parties. 
     **/
    const TRANSPORT_STATUS_REPORT = "44";

    /**
     * (1127) A message to request a transport status report (e.g. through the national multimodal status report message IFSTA). 
     **/
    const TRANSPORT_STATUS_REQUEST = "45";

    /**
     * A banking status document and/or message.
     **/
    const BANKING_STATUS = "46";

    /**
     * Document/message in which a declarant provides information about extra-Community trade of goods required by the body responsible for the collection of trade statistics. Trade by a country in the European Union with a country outside the European Union. 
     **/
    const EXTRACOMMUNITY_TRADE_STATISTICAL_DECLARATION = "47";

    /**
     * 10385 Written instructions relating to dangerous goods and defined in the European Agreement of Dangerous Transport by Road known as ADR (Accord europeen relatif au transport international des marchandises Dangereuses par Route). 
     **/
    const WRITTEN_INSTRUCTIONS_IN_CONFORMANCE_WITH_ADR_ARTICLE_NUMBER = "48";

    /**
     * Official certification that damages to the goods to be transported have been discovered. 
     **/
    const DAMAGE_CERTIFICATION = "49";

    /**
     * A validated priced tender.
     **/
    const VALIDATED_PRICED_TENDER = "50";

    /**
     * A document providing a response to a previously sent price/sales catalogue. 
     **/
    const PRICESALES_CATALOGUE_RESPONSE = "51";

    /**
     * A document providing the result of price negotiations.
     **/
    const PRICE_NEGOTIATION_RESULT = "52";

    /**
     * Document or message to supply advice on a dangerous or hazardous material to industrial customers so as to enable them to take measures to protect their employees and the environment from any potential harmful effects from these material. 
     **/
    const SAFETY_AND_HAZARD_DATA_SHEET = "53";

    /**
     * A statement of an account containing the booked items as in the ledger of the account servicing financial institution. 
     **/
    const LEGAL_STATEMENT_OF_AN_ACCOUNT = "54";

    /**
     * A statement from the account servicing financial institution containing items pending to be booked. 
     **/
    const LISTING_STATEMENT_OF_AN_ACCOUNT = "55";

    /**
     * Last statement of a period containing the interest calculation and the final balance of the last entry date. 
     **/
    const CLOSING_STATEMENT_OF_AN_ACCOUNT = "56";

    /**
     * Report on the movement of containers or other items of transport equipment to record physical movement activity and establish the beginning of a rental period. 
     **/
    const TRANSPORT_EQUIPMENT_ONHIRE_REPORT = "57";

    /**
     * Report on the movement of containers or other items of transport equipment to record physical movement activity and establish the end of a rental period. 
     **/
    const TRANSPORT_EQUIPMENT_OFFHIRE_REPORT = "58";

    /**
     * No shortage, surplus or damaged outturn resulting from container vessel unpacking. 
     **/
    const TREATMENT__NIL_OUTTURN = "59";

    /**
     * Movement type indicator: goods are moved under customs control for warehousing due to being time-up. 
     **/
    const TREATMENT__TIMEUP_UNDERBOND = "60";

    /**
     * Movement type indicator: goods are to move by sea under customs control to a customs office where formalities will be completed. 
     **/
    const TREATMENT__UNDERBOND_BY_SEA = "61";

    /**
     * Cargo consists of personal effects.
     **/
    const TREATMENT__PERSONAL_EFFECT = "62";

    /**
     * Cargo consists of timber.
     **/
    const TREATMENT__TIMBER = "63";

    /**
     * Document/message issued either by a factor to indicate his preliminary credit assessment on a buyer, or by a seller to request a factor's preliminary credit assessment on a buyer. 
     **/
    const PRELIMINARY_CREDIT_ASSESSMENT = "64";

    /**
     * Document/message issued either by a factor to give a credit cover on a buyer, or by a seller to request a factor's credit cover. 
     **/
    const CREDIT_COVER = "65";

    /**
     * Document/message issued by a factor to indicate the money movements of a seller's or another factor's account with him. 
     **/
    const CURRENT_ACCOUNT = "66";

    /**
     * Document/message issued by a party (usually the buyer) to indicate that one or more invoices or one or more credit notes are disputed for payment. 
     **/
    const COMMERCIAL_DISPUTE = "67";

    /**
     * Document/message issued by a factor to a seller or to another factor to indicate that the rest of the amounts of one or more invoices uncollectable from buyers are charged back to clear the invoice(s) off the ledger. 
     **/
    const CHARGEBACK = "68";

    /**
     * Document/message issued by a factor to a seller or to another factor to reassign an invoice or credit note previously assigned to him. 
     **/
    const REASSIGNMENT = "69";

    /**
     * Document message issued by a factor to indicate the movements of invoices, credit notes and payments of a seller's account. 
     **/
    const COLLATERAL_ACCOUNT = "70";

    /**
     * Document/message issued by a creditor to a debtor to request payment of one or more invoices past due. 
     **/
    const REQUEST_FOR_PAYMENT = "71";

    /**
     * A message or document issuing permission to unship cargo. 
     **/
    const UNSHIP_PERMIT = "72";

    /**
     * Transmission of one or more statistical definitions.
     **/
    const STATISTICAL_DEFINITIONS = "73";

    /**
     * Transmission of one or more items of data or data sets.
     **/
    const STATISTICAL_DATA = "74";

    /**
     * Request for one or more items or data sets of statistical data. 
     **/
    const REQUEST_FOR_STATISTICAL_DATA = "75";

    /**
     * Document/message to provide split quantities and delivery dates referring to a previous delivery instruction. 
     **/
    const CALLOFF_DELIVERY = "76";

    /**
     * Message covers information about the consignment status.
     **/
    const CONSIGNMENT_STATUS_REPORT = "77";

    /**
     * Advice of inventory movements.
     **/
    const INVENTORY_MOVEMENT_ADVICE = "78";

    /**
     * Advice of stock on hand.
     **/
    const INVENTORY_STATUS_ADVICE = "79";

    /**
     * Debit information related to a transaction for goods or services to the relevant party. 
     **/
    const DEBIT_NOTE_RELATED_TO_GOODS_OR_SERVICES = "80";

    /**
     * Document message used to provide credit information related to a transaction for goods or services to the relevant party. 
     **/
    const CREDIT_NOTE_RELATED_TO_GOODS_OR_SERVICES = "81";

    /**
     * Document/message claiming payment for the supply of metered services (e.g., gas, electricity, etc.) supplied to a fixed meter whose consumption is measured over a period of time. 
     **/
    const METERED_SERVICES_INVOICE = "82";

    /**
     * Document message for providing credit information related to financial adjustments to the relevant party, e.g., bonuses. 
     **/
    const CREDIT_NOTE_RELATED_TO_FINANCIAL_ADJUSTMENTS = "83";

    /**
     * Document/message for providing debit information related to financial adjustments to the relevant party. 
     **/
    const DEBIT_NOTE_RELATED_TO_FINANCIAL_ADJUSTMENTS = "84";

    /**
     * Message/document identifying a customs manifest. The document itemises a list of cargo prepared by shipping companies from bills of landing and presented to customs for formal report of cargo. 
     **/
    const CUSTOMS_MANIFEST = "85";

    /**
     * A document code to indicate that the message being transmitted identifies all short and surplus cargoes off-loaded from a vessel at a specified discharging port. 
     **/
    const VESSEL_UNPACK_REPORT = "86";

    /**
     * A document code to indicate that the message being transmitted is summary manifest information for general cargo. 
     **/
    const GENERAL_CARGO_SUMMARY_MANIFEST_REPORT = "87";

    /**
     * A document code to indicate that the message being transmitted is a consignment unpack report only. 
     **/
    const CONSIGNMENT_UNPACK_REPORT = "88";

    /**
     * Document or message issued by the competent authority in the exporting country evidencing that meat or meat by- products comply with the requirements set by the importing country. 
     **/
    const MEAT_AND_MEAT_BYPRODUCTS_SANITARY_CERTIFICATE = "89";

    /**
     * Document or message issued by the competent authority in the exporting country evidencing that meat food products comply with the requirements set by the importing country. 
     **/
    const MEAT_FOOD_PRODUCTS_SANITARY_CERTIFICATE = "90";

    /**
     * Document or message issued by the competent authority in the exporting country evidencing that poultry products comply with the requirements set by the importing country. 
     **/
    const POULTRY_SANITARY_CERTIFICATE = "91";

    /**
     * Document or message issued by the competent authority in the exporting country evidencing that horsemeat products comply with the requirements set by the importing country. 
     **/
    const HORSEMEAT_SANITARY_CERTIFICATE = "92";

    /**
     * Document or message issued by the competent authority in the exporting country evidencing that casing products comply with the requirements set by the importing country. 
     **/
    const CASING_SANITARY_CERTIFICATE = "93";

    /**
     * Document or message issued by the competent authority in the exporting country evidencing that pharmaceutical products comply with the requirements set by the importing country. 
     **/
    const PHARMACEUTICAL_SANITARY_CERTIFICATE = "94";

    /**
     * Document or message issued by the competent authority in the exporting country evidencing that inedible products comply with the requirements set by the importing country. 
     **/
    const INEDIBLE_SANITARY_CERTIFICATE = "95";

    /**
     * Notification of impending arrival details for vessel.
     **/
    const IMPENDING_ARRIVAL = "96";

    /**
     * Message reporting the means of transport used to carry goods or cargo. 
     **/
    const MEANS_OF_TRANSPORT_ADVICE = "97";

    /**
     * Message reporting the arrival details of goods or cargo.
     **/
    const ARRIVAL_INFORMATION = "98";

    /**
     * Message/document sent by the cargo handler indicating that the cargo has moved from a Customs controlled premise. 
     **/
    const CARGO_RELEASE_NOTIFICATION = "99";

    /**
     * Certificate asserting that the goods have been submitted to the excise authorities before departure from the exporting country or before delivery in case of import traffic. 
     **/
    const EXCISE_CERTIFICATE = "100";

    /**
     * An official document providing registration details.
     **/
    const REGISTRATION_DOCUMENT = "101";

    /**
     * Used to specify that the message is a tax notification.
     **/
    const TAX_NOTIFICATION = "102";

    /**
     * Report on the movement of containers or other items of transport equipment being exchanged, establishing relevant rental periods. 
     **/
    const TRANSPORT_EQUIPMENT_DIRECT_INTERCHANGE_REPORT = "103";

    /**
     * Advice that containers or other items of transport equipment may be expected to be delivered to a certain location. 
     **/
    const TRANSPORT_EQUIPMENT_IMPENDING_ARRIVAL_ADVICE = "104";

    /**
     * Document/message issued within an enterprise to initiate the purchase of articles, materials or services required for the production or manufacture of goods to be offered for sale or otherwise supplied to customers. 
     **/
    const PURCHASE_ORDER = "105";

    /**
     * Report of damaged items of transport equipment that have been returned. 
     **/
    const TRANSPORT_EQUIPMENT_DAMAGE_REPORT = "106";

    /**
     * advice Advice providing estimates of transport equipment maintenance and repair costs. 
     **/
    const TRANSPORT_EQUIPMENT_MAINTENANCE_AND_REPAIR_WORK_ESTIMATE = "107";

    /**
     * Instruction to release an item of empty transport equipment to a specified party or parties. 
     **/
    const TRANSPORT_EQUIPMENT_EMPTY_RELEASE_INSTRUCTION = "108";

    /**
     * Report on the inward movement of cargo, containers or other items of transport equipment which have been delivered to a facility by an inland carrier. 
     **/
    const TRANSPORT_MOVEMENT_GATE_IN_REPORT = "109";

    /**
     * Document/message issued within an enterprise to initiate the manufacture of goods to be offered for sale. 
     **/
    const MANUFACTURING_INSTRUCTIONS = "110";

    /**
     * Report on the outward movement of cargo, containers or other items of transport equipment (either full or empty) which have been picked up by an inland carrier. 
     **/
    const TRANSPORT_MOVEMENT_GATE_OUT_REPORT = "111";

    /**
     * Instruction to unpack specified cargo from specified containers or other items of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_UNPACKING_INSTRUCTION = "112";

    /**
     * Report on the completion of unpacking specified containers or other items of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_UNPACKING_REPORT = "113";

    /**
     * Request for confirmation that an item of transport equipment will be available for collection. 
     **/
    const TRANSPORT_EQUIPMENT_PICKUP_AVAILABILITY_REQUEST = "114";

    /**
     * Confirmation that an item of transport equipment is available for collection. 
     **/
    const TRANSPORT_EQUIPMENT_PICKUP_AVAILABILITY_CONFIRMATION = "115";

    /**
     * Report that an item of transport equipment has been collected. 
     **/
    const TRANSPORT_EQUIPMENT_PICKUP_REPORT = "116";

    /**
     * Report on the movement of containers or other items of transport within a facility. 
     **/
    const TRANSPORT_EQUIPMENT_SHIFT_REPORT = "117";

    /**
     * Instruction to unload specified cargo, containers or transport equipment from a means of transport. 
     **/
    const TRANSPORT_DISCHARGE_INSTRUCTION = "118";

    /**
     * Report on cargo, containers or transport equipment unloaded from a particular means of transport. 
     **/
    const TRANSPORT_DISCHARGE_REPORT = "119";

    /**
     * Document/message issued within an enterprise ordering the taking out of stock of goods. 
     **/
    const STORES_REQUISITION = "120";

    /**
     * Instruction to load cargo, containers or transport equipment onto a means of transport. 
     **/
    const TRANSPORT_LOADING_INSTRUCTION = "121";

    /**
     * Report on completion of loading cargo, containers or other transport equipment onto a means of transport. 
     **/
    const TRANSPORT_LOADING_REPORT = "122";

    /**
     * authorisation Authorisation to have transport equipment repaired or to have maintenance performed. 
     **/
    const TRANSPORT_EQUIPMENT_MAINTENANCE_AND_REPAIR_WORK = "123";

    /**
     * Report of the departure of a means of transport from a particular facility. 
     **/
    const TRANSPORT_DEPARTURE_REPORT = "124";

    /**
     * Advice that an item or items of empty transport equipment are available for return. 
     **/
    const TRANSPORT_EMPTY_EQUIPMENT_ADVICE = "125";

    /**
     * Order to accept items of transport equipment which are to be delivered by an inland carrier (rail, road or barge) to a specified facility. 
     **/
    const TRANSPORT_EQUIPMENT_ACCEPTANCE_ORDER = "126";

    /**
     * Instruction to perform a specified service or services on an item or items of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_SPECIAL_SERVICE_INSTRUCTION = "127";

    /**
     * Report on the number of items of transport equipment stored at one or more locations. 
     **/
    const TRANSPORT_EQUIPMENT_STOCK_REPORT = "128";

    /**
     * Order to release cargo or items of transport equipment to a specified party. 
     **/
    const TRANSPORT_CARGO_RELEASE_ORDER = "129";

    /**
     * Document/message issued within an enterprise containing data about goods sold, to be used as the basis for the preparation of an invoice. 
     **/
    const INVOICING_DATA_SHEET = "130";

    /**
     * Instruction to pack cargo into a container or other item of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_PACKING_INSTRUCTION = "131";

    /**
     * Notification of customs clearance of cargo or items of transport equipment. 
     **/
    const CUSTOMS_CLEARANCE_NOTICE = "132";

    /**
     * Notice specifying expiration of Customs documents relating to cargo or items of transport equipment. 
     **/
    const CUSTOMS_DOCUMENTS_EXPIRATION_NOTICE = "133";

    /**
     * Request for transport equipment to be made available for hire. 
     **/
    const TRANSPORT_EQUIPMENT_ONHIRE_REQUEST = "134";

    /**
     * Order to release empty items of transport equipment for on-hire to a lessee, and authorising collection by or on behalf of a specified party. 
     **/
    const TRANSPORT_EQUIPMENT_ONHIRE_ORDER = "135";

    /**
     * Request to terminate the lease on an item of transport equipment at a specified time. 
     **/
    const TRANSPORT_EQUIPMENT_OFFHIRE_REQUEST = "136";

    /**
     * Order to perform a survey on specified items of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_SURVEY_ORDER = "137";

    /**
     * Response to an order to conduct a survey of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_SURVEY_ORDER_RESPONSE = "138";

    /**
     * Survey report of specified items of transport equipment.
     **/
    const TRANSPORT_EQUIPMENT_SURVEY_REPORT = "139";

    /**
     * Document/message within an enterprise giving instructions on how goods are to be packed. 
     **/
    const PACKING_INSTRUCTIONS = "140";

    /**
     * A document and/or message advising of items which have to be booked to a financial account. 
     **/
    const ADVISING_ITEMS_TO_BE_BOOKED_TO_A_FINANCIAL_ACCOUNT = "141";

    /**
     * order Order to draw up an estimate of the costs of maintenance or repair of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_MAINTENANCE_AND_REPAIR_WORK_ESTIMATE = "142";

    /**
     * Report of transport equipment which has been repaired or has had maintenance performed. 
     **/
    const TRANSPORT_EQUIPMENT_MAINTENANCE_AND_REPAIR_NOTICE = "143";

    /**
     * Order to make available empty containers.
     **/
    const EMPTY_CONTAINER_DISPOSITION_ORDER = "144";

    /**
     * Order that the containers or cargo specified are to be discharged from a vessel. 
     **/
    const CARGO_VESSEL_DISCHARGE_ORDER = "145";

    /**
     * Order that specified cargo, containers or groups of containers are to be loaded in or on a vessel. 
     **/
    const CARGO_VESSEL_LOADING_ORDER = "146";

    /**
     * One purchase order that contains the orders of two or more vendors and the associated delivery points for each. 
     **/
    const MULTIDROP_ORDER = "147";

    /**
     * A document authorizing the bailing of goods.
     **/
    const BAILMENT_CONTRACT = "148";

    /**
     * A document indicating an agreement containing basic terms and conditions applicable to future contracts between two parties. 
     **/
    const BASIC_AGREEMENT = "149";

    /**
     * Document/message giving instructions about the transport of goods within an enterprise. 
     **/
    const INTERNAL_TRANSPORT_ORDER = "150";

    /**
     * A document indicating the granting of funds.
     **/
    const GRANT = "151";

    /**
     * A document indicating a contract calling for the indefinite deliveries of indefinite quantities of goods. 
     **/
    const INDEFINITE_DELIVERY_INDEFINITE_QUANTITY_CONTRACT = "152";

    /**
     * A document indicating a contract calling for indefinite deliveries of definite quantities. 
     **/
    const INDEFINITE_DELIVERY_DEFINITE_QUANTITY_CONTRACT = "153";

    /**
     * A document indicating a requirements contract that authorizes the filling of all purchase requirements during a specified contract period. 
     **/
    const REQUIREMENTS_CONTRACT = "154";

    /**
     * A document indicating an order that tasks a contractor to perform a specified function. 
     **/
    const TASK_ORDER = "155";

    /**
     * A document indicating a plan that identifies which items will be made and which items will be bought. 
     **/
    const MAKE_OR_BUY_PLAN = "156";

    /**
     * A document indicating a plan that identifies the manufacturer's subcontracting strategy for a specific contract. 
     **/
    const SUBCONTRACTOR_PLAN = "157";

    /**
     * A document indicating a summary of cost data.
     **/
    const COST_DATA_SUMMARY = "158";

    /**
     * A document indicating cost and price data whose accuracy has been certified. 
     **/
    const CERTIFIED_COST_AND_PRICE_DATA = "159";

    /**
     * A document indicating a determination of the wages to be paid. 
     **/
    const WAGE_DETERMINATION = "160";

    /**
     * A report to provide the status of funds applicable to the contract. 
     **/
    const CONTRACT_FUNDS_STATUS_REPORT_CFSR = "161";

    /**
     * A certification as to the accuracy of inspection and test results. 
     **/
    const CERTIFIED_INSPECTION_AND_TEST_RESULTS = "162";

    /**
     * A report that is both an inspection report for materials and a receiving document. 
     **/
    const MATERIAL_INSPECTION_AND_RECEIVING_REPORT = "163";

    /**
     * A document indicating a specification used to purchase an item. 
     **/
    const PURCHASING_SPECIFICATION = "164";

    /**
     * A document indicating a bond that guarantees the payment of monies or a performance. 
     **/
    const PAYMENT_OR_PERFORMANCE_BOND = "165";

    /**
     * A document that indicates the specification contains the security and classification requirements for a contract. 
     **/
    const CONTRACT_SECURITY_CLASSIFICATION_SPECIFICATION = "166";

    /**
     * A document indicating the specification of how an item is to be manufactured. 
     **/
    const MANUFACTURING_SPECIFICATION = "167";

    /**
     * A document certifying that more than 50 percent of the cost of an item is attributed to US origin. 
     **/
    const BUY_AMERICA_CERTIFICATE_OF_COMPLIANCE = "168";

    /**
     * Notice to return leased containers.
     **/
    const CONTAINER_OFFHIRE_NOTICE = "169";

    /**
     * Order to accept cargo to be delivered by a carrier.
     **/
    const CARGO_ACCEPTANCE_ORDER = "170";

    /**
     * Notice specifying the pick-up of released cargo or containers from a certain address. 
     **/
    const PICKUP_NOTICE = "171";

    /**
     * Document or message that authorises receiver to plan orders, based on information in this message, and send these orders as suggestions to the sender. 
     **/
    const AUTHORISATION_TO_PLAN_AND_SUGGEST_ORDERS = "172";

    /**
     * Document or message that authorises receiver to plan and ship orders based on information in this message. 
     **/
    const AUTHORISATION_TO_PLAN_AND_SHIP_ORDERS = "173";

    /**
     * The document or message is a drawing.
     **/
    const DRAWING = "174";

    /**
     * A report identifying the cost performance on a contract at specified levels of the work breakdown structure (format 2 - organizational categories). 
     **/
    const COST_PERFORMANCE_REPORT_CPR_FORMAT_ = "175";

    /**
     * A report providing the status of the cost and schedule applicable to a contract. 
     **/
    const COST_SCHEDULE_STATUS_REPORT_CSSR = "176";

    /**
     * A report identifying the cost performance on a contract including the current month's values at specified levels of the work breakdown structure (format 1 - work breakdown structure). 
     **/
    const COST_PERFORMANCE_REPORT_CPR_FORMAT_ = "177";

    /**
     * A report identifying the cost performance on a contract that summarizes changes to a contract over a given reporting period with beginning and ending values (format 3 - baseline). 
     **/
    const COST_PERFORMANCE_REPORT_CPR_FORMAT_ = "178";

    /**
     * A report identifying the cost performance on a contract including forecasts of labour requirements for the remaining portion of the contract (format 4 - staffing). 
     **/
    const COST_PERFORMANCE_REPORT_CPR_FORMAT_ = "179";

    /**
     * A report identifying the cost performance on a contract that summarizes cost or schedule variances (format 5 - explanations and problem analysis). 
     **/
    const COST_PERFORMANCE_REPORT_CPR_FORMAT_ = "180";

    /**
     * Document or message progressively issued by the container terminal operator in charge of discharging a vessel identifying containers that have been discharged from a specific vessel at that point in time. 
     **/
    const PROGRESSIVE_DISCHARGE_REPORT = "181";

    /**
     * Confirmation of a balance at an entry date.
     **/
    const BALANCE_CONFIRMATION = "182";

    /**
     * Order to unload goods from a container.
     **/
    const CONTAINER_STRIPPING_ORDER = "183";

    /**
     * Order to stuff specified goods or consignments in a container. 
     **/
    const CONTAINER_STUFFING_ORDER = "184";

    /**
     * Declaration to the public authority upon arrival of the conveyance. 
     **/
    const CONVEYANCE_DECLARATION_ARRIVAL = "185";

    /**
     * Declaration to the public authority upon departure of the conveyance. 
     **/
    const CONVEYANCE_DECLARATION_DEPARTURE = "186";

    /**
     * Combined declaration of arrival and departure to the public authority. 
     **/
    const CONVEYANCE_DECLARATION_COMBINED = "187";

    /**
     * A project plan for recovery after a delay or problem resolution. 
     **/
    const PROJECT_RECOVERY_PLAN = "188";

    /**
     * A project plan for the production of goods.
     **/
    const PROJECT_PRODUCTION_PLAN = "189";

    /**
     * Documents/messages issued within an enterprise for the for the purpose of collection of production and other internal statistics, and for other administration purposes. 
     **/
    const STATISTICAL_AND_OTHER_ADMINISTRATIVE_INTERNAL_DOCUMENTS = "190";

    /**
     * A high level, all encompassing master schedule of activities to complete a project. 
     **/
    const PROJECT_MASTER_SCHEDULE = "191";

    /**
     * A priced tender based upon an alternate specification.
     **/
    const PRICED_ALTERNATE_TENDER_BILL_OF_QUANTITY = "192";

    /**
     * An estimate based upon a detailed, quantity based specification (bill of quantity). 
     **/
    const ESTIMATED_PRICED_BILL_OF_QUANTITY = "193";

    /**
     * Document/message providing a draft bill of quantity, issued in an unpriced form. 
     **/
    const DRAFT_BILL_OF_QUANTITY = "194";

    /**
     * Instruction for the collection of the documentary credit. 
     **/
    const DOCUMENTARY_CREDIT_COLLECTION_INSTRUCTION = "195";

    /**
     * Request for an amendment of a documentary credit.
     **/
    const REQUEST_FOR_AN_AMENDMENT_OF_A_DOCUMENTARY_CREDIT = "196";

    /**
     * Documentary credit amendment information.
     **/
    const DOCUMENTARY_CREDIT_AMENDMENT_INFORMATION = "197";

    /**
     * Advice of an amendment of a documentary credit.
     **/
    const ADVICE_OF_AN_AMENDMENT_OF_A_DOCUMENTARY_CREDIT = "198";

    /**
     * Response to an amendment of a documentary credit.
     **/
    const RESPONSE_TO_AN_AMENDMENT_OF_A_DOCUMENTARY_CREDIT = "199";

    /**
     * Provides information on documentary credit issuance.
     **/
    const DOCUMENTARY_CREDIT_ISSUANCE_INFORMATION = "200";

    /**
     * Request to establish a direct payment valuation.
     **/
    const DIRECT_PAYMENT_VALUATION_REQUEST = "201";

    /**
     * Document/message addressed, for instance, by a general contractor to the owner, in order that a direct payment be made to a subcontractor. 
     **/
    const DIRECT_PAYMENT_VALUATION = "202";

    /**
     * Document/message establishing a provisional payment valuation. 
     **/
    const PROVISIONAL_PAYMENT_VALUATION = "203";

    /**
     * Document/message establishing the financial elements of a situation of works. 
     **/
    const PAYMENT_VALUATION = "204";

    /**
     * Document/message providing a confirmed assessment, by quantity, of the completed work for a construction contract. 
     **/
    const QUANTITY_VALUATION = "205";

    /**
     * Document/message providing an initial assessment, by quantity, of the completed work for a construction contract. 
     **/
    const QUANTITY_VALUATION_REQUEST = "206";

    /**
     * Document/message providing a formal specification identifying quantities and prices that are the basis of a contract for a construction project. BOQ means: Bill of quantity. 
     **/
    const CONTRACT_BILL_OF_QUANTITIES__BOQ = "207";

    /**
     * Document/message providing a detailed, quantity based specification, issued in an unpriced form to invite tender prices. 
     **/
    const UNPRICED_BILL_OF_QUANTITY = "208";

    /**
     * Document/message providing a detailed, quantity based specification, updated with prices to form a tender submission for a construction contract. BOQ means: Bill of quantity. 
     **/
    const PRICED_TENDER_BOQ = "209";

    /**
     * Document/message issued by a party interested in the purchase of goods specified therein and indicating particular, desirable conditions regarding delivery terms, etc., addressed to a prospective supplier with a view to obtaining an offer. 
     **/
    const ENQUIRY = "210";

    /**
     * Document/message containing a provisional assessment in support of a request for payment for completed work for a construction contract. 
     **/
    const INTERIM_APPLICATION_FOR_PAYMENT = "211";

    /**
     * Document/message in which the debtor expresses the intention to pay. 
     **/
    const AGREEMENT_TO_PAY = "212";

    /**
     * The message is a request for financial cancellation.
     **/
    const REQUEST_FOR_FINANCIAL_CANCELLATION = "213";

    /**
     * The message contains pre-authorised direct debit(s).
     **/
    const PREAUTHORISED_DIRECT_DEBITS = "214";

    /**
     * Document/message by means of which a buyer informs a seller that the buyer intends to enter into contractual negotiations. 
     **/
    const LETTER_OF_INTENT = "215";

    /**
     * Document/message providing an approved detailed, quantity based specification (bill of quantity), in an unpriced form. 
     **/
    const APPROVED_UNPRICED_BILL_OF_QUANTITY = "216";

    /**
     * A payment valuation for unscheduled items.
     **/
    const PAYMENT_VALUATION_FOR_UNSCHEDULED_ITEMS = "217";

    /**
     * The final payment request of a series of payment requests submitted upon completion of all the work. 
     **/
    const FINAL_PAYMENT_REQUEST_BASED_ON_COMPLETION_OF_WORK = "218";

    /**
     * A request for payment for completed units.
     **/
    const PAYMENT_REQUEST_FOR_COMPLETED_UNITS = "219";

    /**
     * Document/message by means of which a buyer initiates a transaction with a seller involving the supply of goods or services as specified, according to conditions set out in an offer, or otherwise known to the buyer. 
     **/
    const ORDER = "220";

    /**
     * Usage of document/message for general order purposes with later split into quantities and delivery dates and maybe delivery locations. 
     **/
    const BLANKET_ORDER = "221";

    /**
     * Document/message ordering the remainder of a production's batch. 
     **/
    const SPOT_ORDER = "222";

    /**
     * Document/message for goods in leasing contracts.
     **/
    const LEASE_ORDER = "223";

    /**
     * Document/message for urgent ordering.
     **/
    const RUSH_ORDER = "224";

    /**
     * Document/message to order repair of goods.
     **/
    const REPAIR_ORDER = "225";

    /**
     * Document/message to provide split quantities and delivery dates referring to a previous blanket order. 
     **/
    const CALL_OFF_ORDER = "226";

    /**
     * Order to deliver goods into stock with agreement on payment when goods are sold out of this stock. 
     **/
    const CONSIGNMENT_ORDER = "227";

    /**
     * Document/message to order samples.
     **/
    const SAMPLE_ORDER = "228";

    /**
     * Document/message informing buyer or seller of the replacement of goods previously ordered. 
     **/
    const SWAP_ORDER = "229";

    /**
     * Change to an purchase order already sent.
     **/
    const PURCHASE_ORDER_CHANGE_REQUEST = "230";

    /**
     * Response to an purchase order already received.
     **/
    const PURCHASE_ORDER_RESPONSE = "231";

    /**
     * Document/message for hiring human resources or renting goods or equipment. 
     **/
    const HIRE_ORDER = "232";

    /**
     * Document/message to order spare parts.
     **/
    const SPARE_PARTS_ORDER = "233";

    /**
     * A price/sales catalogue containing special prices which are valid only for a specified period or under specified conditions. 
     **/
    const CAMPAIGN_PRICESALES_CATALOGUE = "234";

    /**
     * Document or message issued by party identifying the containers for which they are responsible. 
     **/
    const CONTAINER_LIST = "235";

    /**
     * A message which enables the transmission of delivery or product forecasting requirements. 
     **/
    const DELIVERY_FORECAST = "236";

    /**
     * A document or message to order cross docking services.
     **/
    const CROSS_DOCKING_SERVICES_ORDER = "237";

    /**
     * The message contains non-pre-authorised direct debit(s).
     **/
    const NONPREAUTHORISED_DIRECT_DEBITS = "238";

    /**
     * The message contains rejected direct debit(s).
     **/
    const REJECTED_DIRECT_DEBITS = "239";

    /**
     * (1174) Document/message giving instruction regarding the delivery of goods. 
     **/
    const DELIVERY_INSTRUCTIONS = "240";

    /**
     * Usage of DELFOR-message.
     **/
    const DELIVERY_SCHEDULE = "241";

    /**
     * Usage of DELJIT-message.
     **/
    const DELIVERY_JUSTINTIME = "242";

    /**
     * The message contains pre-authorised direct debit request(s). 
     **/
    const PREAUTHORISED_DIRECT_DEBIT_REQUESTS = "243";

    /**
     * The message contains non-pre-authorised direct debit request(s). 
     **/
    const NONPREAUTHORISED_DIRECT_DEBIT_REQUESTS = "244";

    /**
     * Document/message issued by a buyer releasing the despatch of goods after receipt of the Ready for despatch advice from the seller. 
     **/
    const DELIVERY_RELEASE = "245";

    /**
     * Settlement of a letter of credit.
     **/
    const SETTLEMENT_OF_A_LETTER_OF_CREDIT = "246";

    /**
     * The message is a bank to bank funds transfer.
     **/
    const BANK_TO_BANK_FUNDS_TRANSFER = "247";

    /**
     * The message contains customer payment order(s).
     **/
    const CUSTOMER_PAYMENT_ORDERS = "248";

    /**
     * The message contains low value payment order(s) only.
     **/
    const LOW_VALUE_PAYMENT_ORDERS = "249";

    /**
     * Declaration regarding crew members aboard the conveyance. 
     **/
    const CREW_LIST_DECLARATION = "250";

    /**
     * This is a request for information.
     **/
    const INQUIRY = "251";

    /**
     * A response to a previously sent banking status message.
     **/
    const RESPONSE_TO_PREVIOUS_BANKING_STATUS_MESSAGE = "252";

    /**
     * A high level, all encompassing master plan to complete a project. 
     **/
    const PROJECT_MASTER_PLAN = "253";

    /**
     * A plan for project work to be completed.
     **/
    const PROJECT_PLAN = "254";

    /**
     * A schedule of project activities to be completed.
     **/
    const PROJECT_SCHEDULE = "255";

    /**
     * Available resources for project planning purposes.
     **/
    const PROJECT_PLANNING_AVAILABLE_RESOURCES = "256";

    /**
     * Work calendar information for project planning purposes.
     **/
    const PROJECT_PLANNING_CALENDAR = "257";

    /**
     * An order to supply fixed quantities of products at fixed regular intervals. 
     **/
    const STANDING_ORDER = "258";

    /**
     * A document detailing times and dates of events pertaining to a cargo movement. 
     **/
    const CARGO_MOVEMENT_EVENT_LOG = "259";

    /**
     * An analysis of the cargo for a voyage.
     **/
    const CARGO_ANALYSIS_VOYAGE_REPORT = "260";

    /**
     * A document which indicates that the customer is claiming credit in a self billing environment. 
     **/
    const SELF_BILLED_CREDIT_NOTE = "261";

    /**
     * Credit note for goods and services that covers multiple transactions involving more than one invoice. 
     **/
    const CONSOLIDATED_CREDIT_NOTE__GOODS_AND_SERVICES = "262";

    /**
     * A message detailing statuses related to the adjustment of inventory. 
     **/
    const INVENTORY_ADJUSTMENT_STATUS_REPORT = "263";

    /**
     * Instruction to perform one or more different movements of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_MOVEMENT_INSTRUCTION = "264";

    /**
     * Report on one or more different movements of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_MOVEMENT_REPORT = "265";

    /**
     * Report on one or more changes of status associated with an item or items of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_STATUS_CHANGE_REPORT = "266";

    /**
     * Certificate attesting that fumigation has been performed. 
     **/
    const FUMIGATION_CERTIFICATE = "267";

    /**
     * Certificate attesting to the quality, origin or appellation of wine. 
     **/
    const WINE_CERTIFICATE = "268";

    /**
     * Certificate attesting that wool is free from specified risks to human or animal health. 
     **/
    const WOOL_HEALTH_CERTIFICATE = "269";

    /**
     * Paper document attached to a consignment informing the receiving party about contents of this consignment. 
     **/
    const DELIVERY_NOTE = "270";

    /**
     * Document/message specifying the distribution of goods in individual packages (in trade environment the despatch advice message is used for the packing list). 
     **/
    const PACKING_LIST = "271";

    /**
     * Requesting a new code.
     **/
    const NEW_CODE_REQUEST = "272";

    /**
     * Request a change to an existing code.
     **/
    const CODE_CHANGE_REQUEST = "273";

    /**
     * Requesting a new simple data element.
     **/
    const SIMPLE_DATA_ELEMENT_REQUEST = "274";

    /**
     * Request a change to an existing simple data element.
     **/
    const SIMPLE_DATA_ELEMENT_CHANGE_REQUEST = "275";

    /**
     * Requesting a new composite data element.
     **/
    const COMPOSITE_DATA_ELEMENT_REQUEST = "276";

    /**
     * Request a change to an existing composite data element.
     **/
    const COMPOSITE_DATA_ELEMENT_CHANGE_REQUEST = "277";

    /**
     * Request a new segment.
     **/
    const SEGMENT_REQUEST = "278";

    /**
     * Requesting a change to an existing segment.
     **/
    const SEGMENT_CHANGE_REQUEST = "279";

    /**
     * Request for a new message (NMR).
     **/
    const NEW_MESSAGE_REQUEST = "280";

    /**
     * Requesting a Message in Development (MiD).
     **/
    const MESSAGE_IN_DEVELOPMENT_REQUEST = "281";

    /**
     * Requesting a change to an existing message.
     **/
    const MODIFICATION_OF_EXISTING_MESSAGE = "282";

    /**
     * Report of assigned tracking numbers.
     **/
    const TRACKING_NUMBER_ASSIGNMENT_REPORT = "283";

    /**
     * Document/message defining the contents of a user directory set or parts thereof. 
     **/
    const USER_DIRECTORY_DEFINITION = "284";

    /**
     * Requesting a United Nations Standard Message (UNSM).
     **/
    const UNITED_NATIONS_STANDARD_MESSAGE_REQUEST = "285";

    /**
     * Document/message defining the contents of a service directory set or parts thereof. 
     **/
    const SERVICE_DIRECTORY_DEFINITION = "286";

    /**
     * Message covers information about the status.
     **/
    const STATUS_REPORT = "287";

    /**
     * Message to describe a Kanban schedule.
     **/
    const KANBAN_SCHEDULE = "288";

    /**
     * A message to submit master data, a set of data that is rarely changed, to identify and describe products a supplier offers to their (potential) customer or buyer. 
     **/
    const PRODUCT_DATA_MESSAGE = "289";

    /**
     * A claim for parts and/or labour charges incurred .
     **/
    const A_CLAIM_FOR_PARTS_ANDOR_LABOUR_CHARGES = "290";

    /**
     * A message providing a response to a previously transmitted delivery schedule. 
     **/
    const DELIVERY_SCHEDULE_RESPONSE = "291";

    /**
     * A message requesting a party to inspect items.
     **/
    const INSPECTION_REQUEST = "292";

    /**
     * A message informing a party of the results of an inspection. 
     **/
    const INSPECTION_REPORT = "293";

    /**
     * A message used by an application to acknowledge reception of a message and/or to report any errors. 
     **/
    const APPLICATION_ACKNOWLEDGEMENT_AND_ERROR_REPORT = "294";

    /**
     * An invoice which requests payment for the difference in price between an original invoice and the result of the application of a price variation formula. 
     **/
    const PRICE_VARIATION_INVOICE = "295";

    /**
     * A credit note which is issued against a price variation invoice. 
     **/
    const CREDIT_NOTE_FOR_PRICE_VARIATION = "296";

    /**
     * A message instructing a party to collect goods.
     **/
    const INSTRUCTION_TO_COLLECT = "297";

    /**
     * Listing of all details of dangerous goods carried.
     **/
    const DANGEROUS_GOODS_LIST = "298";

    /**
     * Code specifying the continued validity of previously submitted registration information. 
     **/
    const REGISTRATION_RENEWAL = "299";

    /**
     * Code specifying the modification of previously submitted registration information. 
     **/
    const REGISTRATION_CHANGE = "300";

    /**
     * Code specifying a response to an occurrence of a registration message. 
     **/
    const RESPONSE_TO_REGISTRATION = "301";

    /**
     * A document specifying the criterion and format for exchanging information in an electronic data interchange syntax. 
     **/
    const IMPLEMENTATION_GUIDELINE = "302";

    /**
     * Document/message is a request for transfer.
     **/
    const REQUEST_FOR_TRANSFER = "303";

    /**
     * A report to convey cost performance data for a project or contract. 
     **/
    const COST_PERFORMANCE_REPORT = "304";

    /**
     * A message to inform a message issuer that a previously sent message has been received by the addressee's application, or that a previously sent message has been rejected by the addressee's application. 
     **/
    const APPLICATION_ERROR_AND_ACKNOWLEDGEMENT = "305";

    /**
     * A financial statement for a cash pool.
     **/
    const CASH_POOL_FINANCIAL_STATEMENT = "306";

    /**
     * Message to describe a sequence of product delivery.
     **/
    const SEQUENCED_DELIVERY_SCHEDULE = "307";

    /**
     * A credit note sent to the party paying on behalf of a number of buyers. 
     **/
    const DELCREDERE_CREDIT_NOTE = "308";

    /**
     * Final discharge report by healthcare provider.
     **/
    const HEALTHCARE_DISCHARGE_REPORT_FINAL = "309";

    /**
     * (1332) Document/message which, with a view to concluding a contract, sets out the conditions under which the goods are offered. 
     **/
    const OFFER__QUOTATION = "310";

    /**
     * Document/message requesting a quote on specified goods or services. 
     **/
    const REQUEST_FOR_QUOTE = "311";

    /**
     * Message providing acknowledgement information at the business application level concerning the processing of a message. 
     **/
    const ACKNOWLEDGEMENT_MESSAGE = "312";

    /**
     * Message indicating that a message was rejected due to errors encountered at the application level. 
     **/
    const APPLICATION_ERROR_MESSAGE = "313";

    /**
     * A consolidated voyage summary which contains the information in a certificate of analysis, a voyage analysis and a cargo movement time log for a voyage. 
     **/
    const CARGO_MOVEMENT_VOYAGE_SUMMARY = "314";

    /**
     * (1296) Document/message evidencing an agreement between the seller and the buyer for the supply of goods or services; its effects are equivalent to those of an order followed by an acknowledgement of order. 
     **/
    const CONTRACT = "315";

    /**
     * Document to apply for usage of berth or mooring facilities. 
     **/
    const APPLICATION_FOR_USAGE_OF_BERTH_OR_MOORING_FACILITIES = "316";

    /**
     * Document to apply for designation of berthing places.
     **/
    const APPLICATION_FOR_DESIGNATION_OF_BERTHING_PLACES = "317";

    /**
     * Document to apply for shifting from the designated place in port. 
     **/
    const APPLICATION_FOR_SHIFTING_FROM_THE_DESIGNATED_PLACE_IN_PORT = "318";

    /**
     * of dangerous goods Supplementary document to apply for cargo operation of dangerous goods. 
     **/
    const SUPPLEMENTARY_DOCUMENT_FOR_APPLICATION_FOR_CARGO_OPERATION = "319";

    /**
     * Document/message acknowledging an undertaking to fulfil an order and confirming conditions or acceptance of conditions. 
     **/
    const ACKNOWLEDGEMENT_OF_ORDER = "320";

    /**
     * dangerous goods Supplementary document to apply for transport of dangerous goods. 
     **/
    const SUPPLEMENTARY_DOCUMENT_FOR_APPLICATION_FOR_TRANSPORT_OF = "321";

    /**
     * Payment effected by an Optical Character Reading (OCR) document. 
     **/
    const OPTICAL_CHARACTER_READING_OCR_PAYMENT = "322";

    /**
     * Preliminary sales report sent before all the information is available. 
     **/
    const PRELIMINARY_SALES_REPORT = "323";

    /**
     * Official document specifying, for a given dangerous goods item, information such as nature of hazard, protective devices, actions to be taken in case of accident, spillage or fire and first aid to be given. 
     **/
    const TRANSPORT_EMERGENCY_CARD = "324";

    /**
     * Document/message serving as a preliminary invoice, containing - on the whole - the same information as the final invoice, but not actually claiming payment. 
     **/
    const PROFORMA_INVOICE = "325";

    /**
     * Document/message specifying details of an incomplete invoice. 
     **/
    const PARTIAL_INVOICE = "326";

    /**
     * Document/message describing instructions for operation.
     **/
    const OPERATING_INSTRUCTIONS = "327";

    /**
     * Plates on goods identifying and describing an article.
     **/
    const NAMEPRODUCT_PLATE = "328";

    /**
     * The document or message contains a bordereau describing co-insurance ceding information. 
     **/
    const COINSURANCE_CEDING_BORDEREAU = "329";

    /**
     * Document/message issued by a supplier requesting instructions from the buyer regarding the details of the delivery of goods ordered. 
     **/
    const REQUEST_FOR_DELIVERY_INSTRUCTIONS = "330";

    /**
     * Commercial transaction (invoice) will include a packing list. 
     **/
    const COMMERCIAL_INVOICE_WHICH_INCLUDES_A_PACKING_LIST = "331";

    /**
     * Document/message is for trade data.
     **/
    const TRADE_DATA = "332";

    /**
     * Declaration provided to customs for cargo examination.
     **/
    const CUSTOMS_DECLARATION_FOR_CARGO_EXAMINATION = "333";

    /**
     * Alternate declaration provided to customs for cargo examination. 
     **/
    const CUSTOMS_DECLARATION_FOR_CARGO_EXAMINATION_ALTERNATE = "334";

    /**
     * Document/message issued by a supplier to a carrier requesting space to be reserved for a specified consignment, indicating desirable conveyance, despatch time, etc. 
     **/
    const BOOKING_REQUEST = "335";

    /**
     * Document/message contains information regarding the crew list and conveyance. 
     **/
    const CUSTOMS_CREW_AND_CONVEYANCE = "336";

    /**
     * alternate Alternate Customs declaration summary with commercial transaction details. 
     **/
    const CUSTOMS_SUMMARY_DECLARATION_WITH_COMMERCIAL_DETAIL = "337";

    /**
     * A message reporting items which have been booked to a financial account. 
     **/
    const ITEMS_BOOKED_TO_A_FINANCIAL_ACCOUNT_REPORT = "338";

    /**
     * the receiver A message reporting transactions which need further information from the receiver. 
     **/
    const REPORT_OF_TRANSACTIONS_WHICH_NEED_FURTHER_INFORMATION_FROM = "339";

    /**
     * (1121) Document/message advising details of cargo and exporter's requirements for its physical movement. 
     **/
    const SHIPPING_INSTRUCTIONS = "340";

    /**
     * Document/message issued by a consignor in which he gives details of a consignment of goods that enables an airline or its agent to prepare an air waybill. 
     **/
    const SHIPPERS_LETTER_OF_INSTRUCTIONS_AIR = "341";

    /**
     * A message reporting transactions for information only.
     **/
    const REPORT_OF_TRANSACTIONS_FOR_INFORMATION_ONLY = "342";

    /**
     * Document/message giving instructions regarding local transport of goods, e.g. from the premises of an enterprise to those of a carrier undertaking further transport. 
     **/
    const CARTAGE_ORDER_LOCAL_TRANSPORT = "343";

    /**
     * A message giving additional information about the exchange of an EDI associated object. 
     **/
    const EDI_ASSOCIATED_OBJECT_ADMINISTRATION_MESSAGE = "344";

    /**
     * Document/message issued by a supplier informing a buyer that goods ordered are ready for despatch. 
     **/
    const READY_FOR_DESPATCH_ADVICE = "345";

    /**
     * Sales report containing summaries for several earlier sent sales reports. 
     **/
    const SUMMARY_SALES_REPORT = "346";

    /**
     * A message enquiring the status of previously sent orders. 
     **/
    const ORDER_STATUS_ENQUIRY = "347";

    /**
     * A message reporting the status of previously sent orders. 
     **/
    const ORDER_STATUS_REPORT = "348";

    /**
     * vessel Document to declare inward and outward movement of a vessel. 
     **/
    const DECLARATION_REGARDING_THE_INWARD_AND_OUTWARD_MOVEMENT_OF = "349";

    /**
     * Document/message issued by a supplier initiating the despatch of goods to a buyer (consignee). 
     **/
    const DESPATCH_ORDER = "350";

    /**
     * Document/message by means of which the seller or consignor informs the consignee about the despatch of goods. 
     **/
    const DESPATCH_ADVICE = "351";

    /**
     * Document to notify usage of berth or mooring facilities.
     **/
    const NOTIFICATION_OF_USAGE_OF_BERTH_OR_MOORING_FACILITIES = "352";

    /**
     * time Document to apply for vessel's entering into port area in night-time. 
     **/
    const APPLICATION_FOR_VESSELS_ENTERING_INTO_PORT_AREA_IN_NIGHT = "353";

    /**
     * place in port Document to notify shifting from designated place in port once secured at the designated place. 
     **/
    const NOTIFICATION_OF_EMERGENCY_SHIFTING_FROM_THE_DESIGNATED = "354";

    /**
     * alternate Alternate Customs declaration summary without any commercial transaction details. 
     **/
    const CUSTOMS_SUMMARY_DECLARATION_WITHOUT_COMMERCIAL_DETAIL = "355";

    /**
     * A document that guarantees performance.
     **/
    const PERFORMANCE_BOND = "356";

    /**
     * A document that guarantees the payment of monies.
     **/
    const PAYMENT_BOND = "357";

    /**
     * Preliminary discharge report by healthcare provider.
     **/
    const HEALTHCARE_DISCHARGE_REPORT_PRELIMINARY = "358";

    /**
     * Document containing request for provision of a health service. 
     **/
    const REQUEST_FOR_PROVISION_OF_A_HEALTH_SERVICE = "359";

    /**
     * Document/message requesting price conditions under which goods are offered. 
     **/
    const REQUEST_FOR_PRICE_QUOTE = "360";

    /**
     * Document/message confirming price conditions under which goods are offered. 
     **/
    const PRICE_QUOTE = "361";

    /**
     * Document/message confirming delivery conditions under which goods are offered. 
     **/
    const DELIVERY_QUOTE = "362";

    /**
     * Document/message confirming price and delivery conditions under which goods are offered. 
     **/
    const PRICE_AND_DELIVERY_QUOTE = "363";

    /**
     * Document/message confirming contractual price conditions under which goods are offered. 
     **/
    const CONTRACT_PRICE_QUOTE = "364";

    /**
     * Document/message confirming contractual price conditions and contractual delivery conditions under which goods are offered. 
     **/
    const CONTRACT_PRICE_AND_DELIVERY_QUOTE = "365";

    /**
     * Document/message confirming price conditions under which goods are offered, provided that they are sold to the end-customer specified on the quote. 
     **/
    const PRICE_QUOTE_SPECIFIED_ENDCUSTOMER = "366";

    /**
     * Document/message confirming price conditions and delivery conditions under which goods are offered, provided that they are sold to the end-customer specified on the quote. 
     **/
    const PRICE_AND_DELIVERY_QUOTE_SPECIFIED_ENDCUSTOMER = "367";

    /**
     * Document/message from a supplier to a distributor confirming price conditions under which goods can be sold by a distributor to the end-customer specified on the quote with compensation for loss of inventory value. 
     **/
    const PRICE_QUOTE_SHIP_AND_DEBIT = "368";

    /**
     * Document/message from a supplier to a distributor confirming price conditions and delivery conditions under which goods can be sold by a distributor to the end-customer specified on the quote with compensation for loss of inventory value. 
     **/
    const PRICE_AND_DELIVERY_QUOTE_SHIP_AND_DEBIT = "369";

    /**
     * Document/message in which the party responsible for the issue of a set of trade documents specifies the various recipients of originals and copies of these documents, with an indication of the number of copies distributed to each of them. 
     **/
    const ADVICE_OF_DISTRIBUTION_OF_DOCUMENTS = "370";

    /**
     * Document containing a plan for provision of health service. 
     **/
    const PLAN_FOR_PROVISION_OF_HEALTH_SERVICE = "371";

    /**
     * Instructions for the dispensing and use of medicine or remedy. 
     **/
    const PRESCRIPTION = "372";

    /**
     * Request to issue a prescription for medicine or remedy.
     **/
    const PRESCRIPTION_REQUEST = "373";

    /**
     * Document containing information of products dispensed according to a prescription. 
     **/
    const PRESCRIPTION_DISPENSING_REPORT = "374";

    /**
     * (1109) Certificate providing confirmation that a consignment has been shipped. 
     **/
    const CERTIFICATE_OF_SHIPMENT = "375";

    /**
     * A product inquiry which stands until it is cancelled.
     **/
    const STANDING_INQUIRY_ON_PRODUCT_INFORMATION = "376";

    /**
     * Document/message providing data concerning the credit information of a party. 
     **/
    const PARTY_CREDIT_INFORMATION = "377";

    /**
     * Document/message providing data concerning the payment behaviour of a party. 
     **/
    const PARTY_PAYMENT_BEHAVIOUR_INFORMATION = "378";

    /**
     * Message to request information about a metering point.
     **/
    const REQUEST_FOR_METERING_POINT_INFORMATION = "379";

    /**
     * (1334) Document/message claiming payment for goods or services supplied under conditions agreed between seller and buyer. 
     **/
    const COMMERCIAL_INVOICE = "380";

    /**
     * (1113) Document/message for providing credit information to the relevant party. 
     **/
    const CREDIT_NOTE = "381";

    /**
     * (1111) Document/message in which a seller specifies the amount of commission, the percentage of the invoice amount, or some other basis for the calculation of the commission to which a sales agent is entitled. 
     **/
    const COMMISSION_NOTE = "382";

    /**
     * Document/message for providing debit information to the relevant party. 
     **/
    const DEBIT_NOTE = "383";

    /**
     * Commercial invoice that includes revised information differing from an earlier submission of the same invoice. 
     **/
    const CORRECTED_INVOICE = "384";

    /**
     * Commercial invoice that covers multiple transactions involving more than one vendor. 
     **/
    const CONSOLIDATED_INVOICE = "385";

    /**
     * An invoice to pay amounts for goods and services in advance; these amounts will be subtracted from the final invoice. 
     **/
    const PREPAYMENT_INVOICE = "386";

    /**
     * Document/message for invoicing the hiring of human resources or renting goods or equipment. 
     **/
    const HIRE_INVOICE = "387";

    /**
     * An invoice for tax purposes.
     **/
    const TAX_INVOICE = "388";

    /**
     * An invoice the invoicee is producing instead of the seller. 
     **/
    const SELFBILLED_INVOICE = "389";

    /**
     * An invoice sent to the party paying for a number of buyers. 
     **/
    const DELCREDERE_INVOICE = "390";

    /**
     * Response to a request for information about a metering point. 
     **/
    const METERING_POINT_INFORMATION_RESPONSE = "391";

    /**
     * A notification of a change of supplier.
     **/
    const NOTIFICATION_OF_CHANGE_OF_SUPPLIER = "392";

    /**
     * Invoice assigned to a third party for collection.
     **/
    const FACTORED_INVOICE = "393";

    /**
     * Usage of INVOIC-message for goods in leasing contracts.
     **/
    const LEASE_INVOICE = "394";

    /**
     * Commercial invoice that covers a transaction other than one involving a sale. 
     **/
    const CONSIGNMENT_INVOICE = "395";

    /**
     * Credit note related to assigned invoice(s).
     **/
    const FACTORED_CREDIT_NOTE = "396";

    /**
     * A document providing a response to a previously sent commercial account summary message. 
     **/
    const COMMERCIAL_ACCOUNT_SUMMARY_RESPONSE = "397";

    /**
     * Document by means of which the supplier or consignor informs the buyer, consignee or the distribution centre about the despatch of goods for cross docking. 
     **/
    const CROSS_DOCKING_DESPATCH_ADVICE = "398";

    /**
     * Document by means of which the supplier or consignor informs the buyer, consignee or the distribution centre about the despatch of goods for transshipment. 
     **/
    const TRANSSHIPMENT_DESPATCH_ADVICE = "399";

    /**
     * An order which falls outside the framework of an agreement. 
     **/
    const EXCEPTIONAL_ORDER = "400";

    /**
     * An order requesting the supply of products packed according to the final delivery point which will be moved across a dock in a distribution centre without further handling. 
     **/
    const PREPACKED_CROSS_DOCKING_ORDER = "401";

    /**
     * An order requesting the supply of products which will be moved across a dock, de-consolidated and re-consolidated according to the final delivery location requirements. 
     **/
    const INTERMEDIATE_HANDLING_CROSS_DOCKING_ORDER = "402";

    /**
     * Information giving the various availabilities of a means of transportation. 
     **/
    const MEANS_OF_TRANSPORTATION_AVAILABILITY_INFORMATION = "403";

    /**
     * Information giving the various schedules of a means of transportation. 
     **/
    const MEANS_OF_TRANSPORTATION_SCHEDULE_INFORMATION = "404";

    /**
     * Notification regarding the delivery of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_DELIVERY_NOTICE = "405";

    /**
     * Notification to the supplier regarding the termination of a contract. 
     **/
    const NOTIFICATION_TO_SUPPLIER_OF_CONTRACT_TERMINATION = "406";

    /**
     * Notification to the supplier about changes regarding a metering point. 
     **/
    const NOTIFICATION_TO_SUPPLIER_OF_METERING_POINT_CHANGES = "407";

    /**
     * Notification about the change of a meter.
     **/
    const NOTIFICATION_OF_METER_CHANGE = "408";

    /**
     * Document/message containing instructions from a customer to his bank to pay an amount in a specified currency to a nominated party in another country by a method either specified (e.g. teletransmission, air mail) or left to the discretion of the bank. 
     **/
    const INSTRUCTIONS_FOR_BANK_TRANSFER = "409";

    /**
     * Notification of the change of metering point identification. 
     **/
    const NOTIFICATION_OF_METERING_POINT_IDENTIFICATION_CHANGE = "410";

    /**
     * The Utilities time series message is sent between responsible parties in a utilities infrastructure for the purpose of reporting time series and connected technical and/or administrative information. 
     **/
    const UTILITIES_TIME_SERIES_MESSAGE = "411";

    /**
     * Application by a customer to his bank to issue a banker's draft stating the amount and currency of the draft, the name of the payee and the place and country of payment. 
     **/
    const APPLICATION_FOR_BANKERS_DRAFT = "412";

    /**
     * Information about components in an infrastructure.
     **/
    const INFRASTRUCTURE_CONDITION = "413";

    /**
     * Acknowledgement of the change of supplier.
     **/
    const ACKNOWLEDGEMENT_OF_CHANGE_OF_SUPPLIER = "414";

    /**
     * Document/Message providing technical description and information of the crop production. 
     **/
    const DATA_PLOT_SHEET = "415";

    /**
     * Soil analysis document.
     **/
    const SOIL_ANALYSIS = "416";

    /**
     * Farmyard manure analysis document.
     **/
    const FARMYARD_MANURE_ANALYSIS = "417";

    /**
     * Declaration, in accordance with the WCO Customs Data Model, to Customs concerning the export of cargo carried by commercial means of transport over land, e.g. truck or train. 
     **/
    const WCO_CARGO_REPORT_EXPORT_RAIL_OR_ROAD = "418";

    /**
     * Declaration, in accordance with the WCO Customs Data Model, to Customs concerning the export of cargo carried by commercial means of transport over water or through the air, e.g. vessel or aircraft. 
     **/
    const WCO_CARGO_REPORT_EXPORT_AIR_OR_MARITIME = "419";

    /**
     * Payment credit note effected by an Optical Character Reading (OCR) document. 
     **/
    const OPTICAL_CHARACTER_READING_OCR_PAYMENT_CREDIT_NOTE = "420";

    /**
     * Declaration, in accordance with the WCO Customs Data Model, to Customs concerning the import of cargo carried by commercial means of transport over land, e.g. truck or train. 
     **/
    const WCO_CARGO_REPORT_IMPORT_RAIL_OR_ROAD = "421";

    /**
     * Declaration, in accordance with the WCO Customs Data Model, to Customs concerning the import of cargo carried by commercial means of transport over water or through the air, e.g. vessel or aircraft. 
     **/
    const WCO_CARGO_REPORT_IMPORT_AIR_OR_MARITIME = "422";

    /**
     * Single step declaration, in accordance with the WCO Customs Data Model, to Customs by which goods are declared for a Customs export procedure based on the 
     **/
    const WCO_ONESTEP_EXPORT_DECLARATION = "423";

    
    const KYOTO_CONVENTION = "1999";

    /**
     * First part of a simplified declaration, in accordance with the WCO Customs Data Model, to Customs by which goods are declared for Customs export procedure based on the 1999 Kyoto Convention. 
     **/
    const WCO_FIRST_STEP_OF_TWOSTEP_EXPORT_DECLARATION = "424";

    /**
     * Document/message whereby a bank advises that a collection has been paid, giving details and methods of funds disposal. 
     **/
    const COLLECTION_PAYMENT_ADVICE = "425";

    /**
     * Document/message whereby a bank advises payment under a documentary credit. 
     **/
    const DOCUMENTARY_CREDIT_PAYMENT_ADVICE = "426";

    /**
     * Document/message whereby a bank advises acceptance under a documentary credit. 
     **/
    const DOCUMENTARY_CREDIT_ACCEPTANCE_ADVICE = "427";

    /**
     * Document/message whereby a bank advises negotiation under a documentary credit. 
     **/
    const DOCUMENTARY_CREDIT_NEGOTIATION_ADVICE = "428";

    /**
     * Document/message whereby a customer requests his bank to issue a guarantee in favour of a nominated party in another country, stating the amount and currency and the specific conditions of the guarantee. 
     **/
    const APPLICATION_FOR_BANKERS_GUARANTEE = "429";

    /**
     * Document/message in which a bank undertakes to pay out a limited amount of money to a designated party, on conditions stated therein (other than those laid down in the Uniform Customs Practice). 
     **/
    const BANKERS_GUARANTEE = "430";

    /**
     * Document/message in which a beneficiary of a documentary credit accepts responsibility for non-compliance with the terms and conditions of the credit, and undertakes to refund the money received under the credit, with interest and charges accrued. 
     **/
    const DOCUMENTARY_CREDIT_LETTER_OF_INDEMNITY = "431";

    /**
     * Notification to the grid operator regarding the termination of a contract. 
     **/
    const NOTIFICATION_TO_GRID_OPERATOR_OF_CONTRACT_TERMINATION = "432";

    /**
     * Notification to the grid operator about changes regarding a metering point. 
     **/
    const NOTIFICATION_TO_GRID_OPERATOR_OF_METERING_POINT_CHANGES = "433";

    /**
     * Notification of a change of balance responsible entity.
     **/
    const NOTIFICATION_OF_BALANCE_RESPONSIBLE_ENTITY_CHANGE = "434";

    /**
     * Preadvice indicating a credit to happen in the future.
     **/
    const PREADVICE_OF_A_CREDIT = "435";

    /**
     * Report on the profile of transport equipment.
     **/
    const TRANSPORT_EQUIPMENT_PROFILE_REPORT = "436";

    /**
     * Document/message requesting price conditions and delivery conditions under which goods are offered, provided that they are sold to the end-customer specified on the request for quote. 
     **/
    const REQUEST_FOR_PRICE_AND_DELIVERY_QUOTE_SPECIFIED_ENDUSER = "437";

    /**
     * Document/message from a distributor to a supplier requesting price conditions under which goods can be sold by the distributor to the end-customer specified on the request for quote with compensation for loss of inventory value. 
     **/
    const REQUEST_FOR_PRICE_QUOTE_SHIP_AND_DEBIT = "438";

    /**
     * Document/message from a distributor to a supplier requesting price conditions and delivery conditions under which goods can be sold by the distributor to the end-customer specified on the request for quote with compensation for loss of inventory value. 
     **/
    const REQUEST_FOR_PRICE_AND_DELIVERY_QUOTE_SHIP_AND_DEBIT = "439";

    /**
     * A list of delivery point addresses.
     **/
    const DELIVERY_POINT_LIST = "440";

    /**
     * Document specifying the routes for transport between locations. 
     **/
    const TRANSPORT_ROUTING_INFORMATION = "441";

    /**
     * Document/message requesting delivery conditions under which goods are offered. 
     **/
    const REQUEST_FOR_DELIVERY_QUOTE = "442";

    /**
     * Document/message requesting price and delivery conditions under which goods are offered. 
     **/
    const REQUEST_FOR_PRICE_AND_DELIVERY_QUOTE = "443";

    /**
     * Document/message requesting contractual price conditions under which goods are offered. 
     **/
    const REQUEST_FOR_CONTRACT_PRICE_QUOTE = "444";

    /**
     * Document/message requesting contractual price conditions and contractual delivery conditions under which goods are offered. 
     **/
    const REQUEST_FOR_CONTRACT_PRICE_AND_DELIVERY_QUOTE = "445";

    /**
     * Document/message requesting price conditions under which goods are offered, provided that they are sold to the end-customer specified on the request for quote. 
     **/
    const REQUEST_FOR_PRICE_QUOTE_SPECIFIED_ENDCUSTOMER = "446";

    /**
     * Document/message whereby a bank is instructed (or requested) to handle financial and/or commercial documents in order to obtain acceptance and/or payment, or to deliver documents on such other terms and conditions as may be specified. 
     **/
    const COLLECTION_ORDER = "447";

    /**
     * Document/message whereby a draft or similar instrument and/or commercial documents are presented to a bank for acceptance, discounting, negotiation, payment or collection, whether or not against a documentary credit. 
     **/
    const DOCUMENTS_PRESENTATION_FORM = "448";

    /**
     * Message related to conducting a search for an identification match. 
     **/
    const IDENTIFICATION_MATCH = "449";

    /**
     * Document/message containing information needed to initiate the payment. It may cover the financial settlement for one or more commercial trade transactions. A payment order is an instruction to the ordered bank to arrange for the payment of one specified amount to the beneficiary. 
     **/
    const PAYMENT_ORDER = "450";

    /**
     * Document/message containing information needed to initiate the payment. It may cover the financial settlement for several commercial trade transactions, which it is possible to specify in a special payments detail part. It is an instruction to the ordered bank to arrange for the payment of one specified amount to the beneficiary. 
     **/
    const EXTENDED_PAYMENT_ORDER = "451";

    /**
     * Document/message containing a payment order to debit one or more accounts and to credit one or more beneficiaries. 
     **/
    const MULTIPLE_PAYMENT_ORDER = "452";

    /**
     * goods Message used to inform a supplier that delivered goods cannot be paid due to circumstances which prevent payment. 
     **/
    const NOTICE_THAT_CIRCUMSTANCES_PREVENT_PAYMENT_OF_DELIVERED = "453";

    /**
     * Document/message sent by an account servicing institution to one of its account owners, to inform the account owner of an entry which has been or will be credited to its account for a specified amount on the date indicated. 
     **/
    const CREDIT_ADVICE = "454";

    /**
     * Document/message sent by an account servicing institution to one of its account owners, to inform the account owner of an entry that has been or will be credited to its account for a specified amount on the date indicated. It provides extended commercial information concerning the relevant remittance advice. 
     **/
    const EXTENDED_CREDIT_ADVICE = "455";

    /**
     * Advice on a debit.
     **/
    const DEBIT_ADVICE = "456";

    /**
     * Reversal of debit accounting entry by bank.
     **/
    const REVERSAL_OF_DEBIT = "457";

    /**
     * Reversal of credit accounting entry by bank.
     **/
    const REVERSAL_OF_CREDIT = "458";

    /**
     * The document is a ticket giving access to a travel service. 
     **/
    const TRAVEL_TICKET = "459";

    /**
     * Document/message whereby a bank is requested to issue a documentary credit on the conditions specified therein. 
     **/
    const DOCUMENTARY_CREDIT_APPLICATION = "460";

    /**
     * The document is a credit, guarantee or charge card.
     **/
    const PAYMENT_CARD = "461";

    /**
     * Document to advise that the goods ordered are ready for transshipment. 
     **/
    const READY_FOR_TRANSSHIPMENT_DESPATCH_ADVICE = "462";

    /**
     * Document by means of which the supplier or consignor informs the buyer, consignee or distribution centre about the despatch of products packed according to the final delivery point requirements which will be moved across a dock in a distribution centre without further handling. 
     **/
    const PREPACKED_CROSS_DOCKING_DESPATCH_ADVICE = "463";

    /**
     * Document by means of which the supplier or consignor informs the buyer, consignee or the distribution centre about the despatch of products which will be moved across a dock, de-consolidated and re-consolidated according to final delivery location requirements. 
     **/
    const INTERMEDIATE_HANDLING_CROSS_DOCKING_DESPATCH_ADVICE = "464";

    /**
     * Document/message in which a bank states that it has issued a documentary credit under which the beneficiary is to obtain payment, acceptance or negotiation on compliance with certain terms and conditions and against presentation of stipulated documents and such drafts as may be specified. The credit may or may not be confirmed by another bank. 
     **/
    const DOCUMENTARY_CREDIT = "465";

    /**
     * Document/message issued by an advising bank in order to transmit a documentary credit to a beneficiary, or to another advising bank. 
     **/
    const DOCUMENTARY_CREDIT_NOTIFICATION = "466";

    /**
     * Document/message whereby a bank advises that (part of) a documentary credit is being or has been transferred in favour of a second beneficiary. 
     **/
    const DOCUMENTARY_CREDIT_TRANSFER_ADVICE = "467";

    /**
     * Document/message whereby a bank advises that the terms and conditions of a documentary credit have been amended. 
     **/
    const DOCUMENTARY_CREDIT_AMENDMENT_NOTIFICATION = "468";

    /**
     * Document/message whereby a bank notifies a beneficiary of the details of an amendment to the terms and conditions of a documentary credit. 
     **/
    const DOCUMENTARY_CREDIT_AMENDMENT = "469";

    /**
     * Document/message sent by a shipping agent to an authority for reporting information on waste disposal. 
     **/
    const WASTE_DISPOSAL_REPORT = "470";

    /**
     * Document/message advising of the remittance of payment.
     **/
    const REMITTANCE_ADVICE = "481";

    /**
     * Document/message sent by a port authority to another port authority for reporting information on waste disposal. 
     **/
    const PORT_AUTHORITY_WASTE_DISPOSAL_REPORT = "482";

    /**
     * An endorsement on a passport or any other recognised travel document indicating that it has been examined and found correct, especially as permitting the holder to enter or leave a country. 
     **/
    const VISA = "483";

    /**
     * Document/message containing a direct debit request to credit one or more accounts and to debit one or more debtors. 
     **/
    const MULTIPLE_DIRECT_DEBIT_REQUEST = "484";

    /**
     * Draft drawn in favour of a third party either by one bank on another bank, or by a branch of a bank on its head office (or vice versa) or upon another branch of the same bank. In either case, the draft should comply with the specifications laid down for cheques in the country in which it is to be payable. 
     **/
    const BANKERS_DRAFT = "485";

    /**
     * Document/message containing a direct debit to credit one or more accounts and to debit one or more debtors. 
     **/
    const MULTIPLE_DIRECT_DEBIT = "486";

    /**
     * Document or message issuing permission to disembark.
     **/
    const CERTIFICATE_OF_DISEMBARKATION_PERMISSION = "487";

    /**
     * Document certifying that the object was free of rats when inspected and that it is exempt from a deratting statement. 
     **/
    const DERATTING_EXEMPTION_CERTIFICATE = "488";

    /**
     * Order to connect a reefer container to a reefer point.
     **/
    const REEFER_CONNECTION_ORDER = "489";

    /**
     * Document/message, issued and signed in conformity with the applicable legislation, which contains an unconditional order whereby the drawer directs the drawee to pay a definite sum of money to the payee or to his order, on demand or at a definite time, against the surrender of the document itself. 
     **/
    const BILL_OF_EXCHANGE = "490";

    /**
     * Document/message, issued and signed in conformity with the applicable legislation, which contains an unconditional promise whereby the maker undertakes to pay a definite sum of money to the payee or to his order, on demand or at a definite time, against the surrender of the document itself. 
     **/
    const PROMISSORY_NOTE = "491";

    /**
     * Usage of STATAC-message.
     **/
    const STATEMENT_OF_ACCOUNT_MESSAGE = "493";

    /**
     * Document/message ordering the direct delivery of goods/consignment from one means of transport into another means of transport in one movement. 
     **/
    const DIRECT_DELIVERY_TRANSPORT = "494";

    /**
     * Second part of a simplified declaration, in accordance with the WCO Customs Data Model, to Customs by which goods are declared for Customs export procedure based on the 1999 Kyoto Convention. 
     **/
    const WCO_SECOND_STEP_OF_TWOSTEP_EXPORT_DECLARATION = "495";

    /**
     * Single step declaration, in accordance with the WCO Customs Data Model, to Customs by which goods are declared for Customs import procedure based on the 1999 Kyoto Convention. 
     **/
    const WCO_ONESTEP_IMPORT_DECLARATION = "496";

    /**
     * First part of a simplified declaration, in accordance with the WCO Customs Data Model, to Customs by which goods are declared for Customs import procedure based on the 1999 Kyoto Convention. 
     **/
    const WCO_FIRST_STEP_OF_TWOSTEP_IMPORT_DECLARATION = "497";

    /**
     * Second part of a simplified declaration, in accordance with the WCO Customs Data Model, to Customs by which goods are declared for Customs import procedure based on the 1999 Kyoto Convention. 
     **/
    const WCO_SECOND_STEP_OF_TWOSTEP_IMPORT_DECLARATION = "498";

    /**
     * Identification of the previous transport document.
     **/
    const PREVIOUS_TRANSPORT_DOCUMENT = "499";

    /**
     * Document/message issued to the insured certifying that insurance has been effected and that a policy has been issued. Such a certificate for a particular cargo is primarily used when good are insured under the terms of a floating or an open policy; at the request of the insured it can be exchanged for a policy. 
     **/
    const INSURANCE_CERTIFICATE = "520";

    /**
     * cargo A permit related to a transport document granting the transport of cargo under the conditions as specifically required. 
     **/
    const SPECIAL_REQUIREMENTS_PERMIT_RELATED_TO_THE_TRANSPORT_OF = "521";

    /**
     * Dangerous Goods Notification for a vessel carrying liquid cargo in bulk. 
     **/
    const DANGEROUS_GOODS_NOTIFICATION_FOR_TANKER_VESSEL = "522";

    /**
     * Dangerous Goods Notification for a vessel carrying cargo other than bulk liquid cargo. 
     **/
    const DANGEROUS_GOODS_NOTIFICATION_FOR_NONTANKER_VESSEL = "523";

    /**
     * Declaration, in accordance with the WCO Customs Data Model, to Customs regarding the conveyance arriving in a Customs territory. 
     **/
    const WCO_CONVEYANCE_ARRIVAL_REPORT = "524";

    /**
     * Declaration, in accordance with the WCO Customs Data Model, to Customs regarding the conveyance departing a Customs territory. 
     **/
    const WCO_CONVEYANCE_DEPARTURE_REPORT = "525";

    /**
     * A document/message justifying an accounting entry.
     **/
    const ACCOUNTING_VOUCHER = "526";

    /**
     * A document which indicates that the customer is claiming debit in a self billing environment. 
     **/
    const SELF_BILLED_DEBIT_NOTE = "527";

    /**
     * The official document used for military personnel on travel orders, substituting a passport. 
     **/
    const MILITARY_IDENTIFICATION_CARD = "528";

    /**
     * A permit to re-enter a country.
     **/
    const REENTRY_PERMIT = "529";

    /**
     * Document/message issued by the insurer evidencing an agreement to insure and containing the conditions of the agreement concluded whereby the insurer undertakes for a specific fee to indemnify the insured for the losses arising out of the perils and accidents specified in the contract. 
     **/
    const INSURANCE_POLICY = "530";

    /**
     * Document identifying a refugee recognized by a country.
     **/
    const REFUGEE_PERMIT = "531";

    /**
     * Document/message for providing credit information to the relevant party. 
     **/
    const FORWARDERS_CREDIT_NOTE = "532";

    /**
     * To indicate that the document/message justifying an accounting entry is original. 
     **/
    const ORIGINAL_ACCOUNTING_VOUCHER = "533";

    /**
     * To indicate that the document/message justifying an accounting entry is a copy. 
     **/
    const COPY_ACCOUNTING_VOUCHER = "534";

    /**
     * To indicate that the document/message justifying an accounting entry is pro-forma. 
     **/
    const PROFORMA_ACCOUNTING_VOUCHER = "535";

    /**
     * A certificate on ship security issued based on the International code for the Security of Ships and of Port facilities (ISPS code). 
     **/
    const INTERNATIONAL_SHIP_SECURITY_CERTIFICATE = "536";

    /**
     * An interim certificate on ship security issued basis under the International code for the Security of Ships and of Port facilities (ISPS code). 
     **/
    const INTERIM_INTERNATIONAL_SHIP_SECURITY_CERTIFICATE = "537";

    /**
     * Certificate that guarantees quality manufacturing and processing of food products, medications, cosmetics, etc. 
     **/
    const GOOD_MANUFACTURING_PRACTICE_GMP_CERTIFICATE = "538";

    /**
     * An agreement between one or more contracting authorities and one or more economic operators, the purpose of which is to establish the terms governing contracts to be awarded during a given period, in particular with regard to price and, where appropriate, the quantity envisaged. 
     **/
    const FRAMEWORK_AGREEMENT = "539";

    /**
     * A document/message used when an insured reports to his insurer details of individual shipments which are covered by an insurance contract - an open cover or a floating policy - between the parties. 
     **/
    const INSURANCE_DECLARATION_SHEET_BORDEREAU = "550";

    /**
     * Offering of capacity for the transport of goods for a date and a route. 
     **/
    const TRANSPORT_CAPACITY_OFFER = "551";

    /**
     * Ship Security Plan (SSP) is a document prepared in terms of the ISPS Code to contribute to the prevention of illegal acts against the ship and its crew. 
     **/
    const SHIP_SECURITY_PLAN = "552";

    /**
     * Document/message reporting invoice discrepancies indentified by the forwarder. 
     **/
    const FORWARDERS_INVOICE_DISCREPANCY_REPORT = "553";

    /**
     * Offering of capacity to store goods.
     **/
    const STORAGE_CAPACITY_OFFER = "554";

    /**
     * Document/message issued by an insurer specifying the cost of an insurance which has been effected and claiming payment therefore. 
     **/
    const INSURERS_INVOICE = "575";

    /**
     * Request for capacity to store goods.
     **/
    const STORAGE_CAPACITY_REQUEST = "576";

    /**
     * Request for capacity for the transport of goods for a date and a route. 
     **/
    const TRANSPORT_CAPACITY_REQUEST = "577";

    /**
     * Customs declaration for goods under the external Community/common transit procedure. This applies to "non-Community goods" ("T1" under EU legislation and EC- EFTA "Transit Convention"). 
     **/
    const EU_CUSTOMS_DECLARATION_FOR_EXTERNAL_COMMUNITY_TRANSIT_T = "578";

    /**
     * Customs declaration for goods under the internal Community/common transit procedure. This applies to "Community goods" ("T2" under EU legislation and EC-EFTA "Transit Convention"). 
     **/
    const EU_CUSTOMS_DECLARATION_FOR_INTERNAL_COMMUNITY_TRANSIT_T = "579";

    /**
     * Document/message issued by an insurer (insurance broker, agent, etc.) to notify the insured that his insurance have been carried out. 
     **/
    const COVER_NOTE = "580";

    /**
     * Community Transit (T2F) Declaration for goods under the internal Community transit procedure in the context of trade between the "VAT" territory of EU Member States and EU territories where the VAT rules do not apply, such as Canary islands, some French overseas territories, the Channel islands and the Aaland islands, and between those territories. ("T2F" under EU Legislation). 
     **/
    const EU_CUSTOMS_DECLARATION_FOR_NONFISCAL_AREA_INTERNAL = "581";

    /**
     * (T2SM) Customs declaration for goods under the internal Community transit procedure between the Community and San Marino. ("T2SM" under EU Legislation). 
     **/
    const EU_CUSTOMS_DECLARATION_FOR_INTERNAL_TRANSIT_TO_SAN_MARINO = "582";

    /**
     * Customs declaration for goods under the Community/common transit procedure for mixed consignments (i.e. consignments that comprise goods of different statuses, like "T1" and "T2") ("T" under EU Legislation). 
     **/
    const EU_CUSTOMS_DECLARATION_FOR_MIXED_CONSIGNMENTS_T = "583";

    /**
     * (T2L) Form establishing the Community status of goods ("T2L" under EU Legislation). 
     **/
    const EU_DOCUMENT_FOR_ESTABLISHING_THE_COMMUNITY_STATUS_OF_GOODS = "584";

    /**
     * for certain fiscal purposes (T2LF) Form establishing the Community status of goods in the context of trade between the "VAT" territory of EU Member States and EU territories where the VAT rules do not apply, such as Canary islands, some French overseas territories, the Channel islands and the Aaland islands, and between those territories ("T2LF" under EU Legislation). 
     **/
    const EU_DOCUMENT_FOR_ESTABLISHING_THE_COMMUNITY_STATUS_OF_GOODS = "585";

    /**
     * San Marino (T2LSM) Form establishing the Community status of goods ("T2L" under European Legislation) in the context of trade between the EU and San Marino. ("T2LSM" under EU Legislation). 
     **/
    const DOCUMENT_FOR_ESTABLISHING_THE_CUSTOMS_STATUS_OF_GOODS_FOR = "586";

    /**
     * A Customs declaration in which goods move under cover of TIR Carnets. 
     **/
    const CUSTOMS_DECLARATION_FOR_TIR_CARNET_GOODS = "587";

    /**
     * A document reporting the security status and related information of a means of transport. 
     **/
    const TRANSPORT_MEANS_SECURITY_REPORT = "588";

    /**
     * A certificate verifying that meat has been produced from slaughter in accordance with Islamic laws and practices. 
     **/
    const HALAL_SLAUGHTERING_CERTIFICATE = "589";

    /**
     * Document/message issued to a freight forwarder, giving instructions regarding the action to be taken by the forwarder for the forwarding of goods described therein. 
     **/
    const FORWARDING_INSTRUCTIONS = "610";

    /**
     * Document/message issued by a freight forwarder in an exporting country advising his counterpart in an importing country about the forwarding of goods described therein. 
     **/
    const FORWARDERS_ADVICE_TO_IMPORT_AGENT = "621";

    /**
     * Document/message issued by a freight forwarder informing an exporter of the action taken in fulfillment of instructions received. 
     **/
    const FORWARDERS_ADVICE_TO_EXPORTER = "622";

    /**
     * Invoice issued by a freight forwarder specifying services rendered and costs incurred and claiming payment therefore. 
     **/
    const FORWARDERS_INVOICE = "623";

    /**
     * Non-negotiable document issued by a forwarder to certify that he has assumed control of a specified consignment, with irrevocable instructions to send it to the consignee indicated in the document or to hold it at his disposal. E.g. FIATA-FCR. 
     **/
    const FORWARDERS_CERTIFICATE_OF_RECEIPT = "624";

    /**
     * A certificate verifying the heat treatment of the product is in conformance with international standards to ensure the product�s healthiness and/or shows the mode of heat treatment indicating the temperature and the amount of time the product or raw material used in the product was treated (such as milk). 
     **/
    const HEAT_TREATMENT_CERTIFICATE = "625";

    /**
     * Wild Fauna and Flora (CITES) Certificate A certificate used in the trade of endangered species in accordance with the CITES convention. 
     **/
    const CONVENTION_ON_INTERNATIONAL_TRADE_IN_ENDANGERED_SPECIES_OF = "626";

    /**
     * A certificate confirming that a specified product is free for sale in the country of origin. 
     **/
    const FREE_SALE_CERTIFICATE_IN_THE_COUNTRY_OF_ORIGIN = "627";

    /**
     * Document/message issued by the competent body in accordance with transit regulations in force, by which authorization is granted to a party to move articles under customs procedure. 
     **/
    const TRANSIT_LICENSE = "628";

    /**
     * A certification that livestock or animal products, that are either imported or entering free zones, are kept under health supervision for a time period determined by veterinary quarantine instructions. 
     **/
    const VETERINARY_QUARANTINE_CERTIFICATE = "629";

    /**
     * (1123) Document/message provided by the shipper or his agent to the carrier, multimodal transport operator, terminal or other receiving authority, giving information about export consignments offered for transport, and providing for the necessary receipts and declarations of liability. Sometimes a multipurpose cargo handling document also fulfilling the functions of document 632, 633, 650 and 655. 
     **/
    const SHIPPING_NOTE = "630";

    /**
     * Document/message issued by a forwarder acting as Warehouse Keeper acknowledging receipt of goods placed in a warehouse, and stating or referring to the conditions which govern the warehousing and the release of goods. The document contains detailed provisions regarding the rights of holders-by-endorsement, transfer of ownership, etc. E.g. FIATA-FWR. 
     **/
    const FORWARDERS_WAREHOUSE_RECEIPT = "631";

    /**
     * Document/message to acknowledge the receipt of goods and in addition may indicate receiving conditions. 
     **/
    const GOODS_RECEIPT = "632";

    /**
     * Documents/messages specifying services rendered, storage and handling costs, demurrage and other charges due to the owner of goods described therein. 
     **/
    const PORT_CHARGES_DOCUMENTS = "633";

    /**
     * A document legalized from a competent authority that shows the components of the product (food additive, detergent, disinfectant and sanitizer). 
     **/
    const CERTIFIED_LIST_OF_INGREDIENTS = "634";

    /**
     * Negotiable receipt document, issued by a Warehouse Keeper to a person placing goods in a warehouse and conferring title to the goods stored. 
     **/
    const WAREHOUSE_WARRANT = "635";

    /**
     * A document legalized from a competent authority that shows that the product has been tested microbiologically and is free from any pathogens and fit for human consumption and/or declares that the product is in compliance with sanitary and phytosanitary measures. 
     **/
    const HEALTH_CERTIFICATE = "636";

    /**
     * A document that shows that the product (food additive, detergent, disinfectant and sanitizer) is suitable to be used in the food industry. 
     **/
    const FOOD_GRADE_CERTIFICATE = "637";

    /**
     * legumes Certificate of inspection for the vessel stating its readiness and suitability for transporting grains and legumes. 
     **/
    const CERTIFICATE_OF_SUITABILITY_FOR_TRANSPORT_OF_GRAINS_AND = "638";

    /**
     * Inspection document shows that the container, the cooling devices and measured temperature is in good working condition. 
     **/
    const CERTIFICATE_OF_REFRIGERATED_TRANSPORT_EQUIPMENT_INSPECTION = "639";

    /**
     * Document/message issued by a party entitled to authorize the release of goods specified therein to a named consignee, to be retained by the custodian of the goods. 
     **/
    const DELIVERY_ORDER = "640";

    /**
     * A report of temperature readings over a period.
     **/
    const THERMOGRAPHIC_READING_REPORT = "641";

    /**
     * A certificate to verify readiness of a transport or transport area such as a reservoir or hold to transport food items. 
     **/
    const CERTIFICATE_OF_FOOD_ITEM_TRANSPORT_READINESS = "642";

    /**
     * A document legalized from a competent authority that shows that the food packaging product is safe to come into contact with food. 
     **/
    const FOOD_PACKAGING_CONTACT_CERTIFICATE = "643";

    /**
     * A document that shows the main structure that composes the packaging material. 
     **/
    const PACKAGING_MATERIAL_COMPOSITION_REPORT = "644";

    /**
     * A certification executed by the competent authority from country of exportation stating the export price of the goods. 
     **/
    const EXPORT_PRICE_CERTIFICATE = "645";

    /**
     * A certification executed by the competent authority from country of production stating the price of the goods to the general public. 
     **/
    const PUBLIC_PRICE_CERTIFICATE = "646";

    /**
     * A document containing results from the study which determines the shelf life, namely the time period of storage at a specified condition within which a drug substance or drug product still meets its established specifications; its identity, strength, quality and purity. 
     **/
    const DRUG_SHELF_LIFE_STUDY_REPORT = "647";

    /**
     * Organization for Animal Health (OIE) A certification that the products have been treated in a way consistent with the standards set by the World Organization for Animal Health (OIE). 
     **/
    const CERTIFICATE_OF_COMPLIANCE_WITH_STANDARDS_OF_THE_WORLD = "648";

    /**
     * A license granted by a competent authority to a production facility for manufacturing specific products. 
     **/
    const PRODUCTION_FACILITY_LICENSE = "649";

    /**
     * Document/message issued by a cargo handling organization (port administration, terminal operator, etc.) for the removal or other handling of goods under their care. 
     **/
    const HANDLING_ORDER = "650";

    /**
     * A license granted by a competent authority to a manufacturer for production of specific products. 
     **/
    const MANUFACTURING_LICENSE = "651";

    /**
     * An official letter issued by an import authority granted to the importer of goods from a low risk country which allows the importer to place its products in the local market with certain favorable considerations. 
     **/
    const LOW_RISK_COUNTRY_FORMAL_LETTER = "652";

    /**
     * Correspondence previously exchanged.
     **/
    const PREVIOUS_CORRESPONDENCE = "653";

    /**
     * A declaration to be presented to the competent authority when radioactive material moves cross-border. 
     **/
    const DECLARATION_FOR_RADIOACTIVE_MATERIAL = "654";

    /**
     * Document/message authorizing goods specified therein to be brought out of a fenced-in port or terminal area. 
     **/
    const GATE_PASS = "655";

    /**
     * Document/message providing information on a resale.
     **/
    const RESALE_INFORMATION = "656";

    /**
     * A message/document consistent with the model for re- export phytosanitary certificates of the IPPC, attesting that a consignment meets phytosanitary import requirements. 
     **/
    const PHYTOSANITARY_REEXPORT_CERTIFICATE = "657";

    /**
     * A full bayplan containing all occupied and/or blocked stowage locations. 
     **/
    const BAYPLANSTOWAGE_PLAN_FULL = "658";

    /**
     * A partial bayplan. containing only a selected part of the available stowage locations. 
     **/
    const BAYPLANSTOWAGE_PLAN_PARTIAL = "659";

    /**
     * Non-negotiable document evidencing the contract for the transport of cargo. 
     **/
    const WAYBILL = "700";

    /**
     * Document/message evidencing a contract of carriage covering the movement of goods by any mode of transport, or combination of modes, for national as well as international transport, under any applicable international convention or national law and under the conditions of carriage of any carrier or transport operator undertaking or arranging the transport referred to in the document. 
     **/
    const UNIVERSAL_MULTIPURPOSE_TRANSPORT_DOCUMENT = "701";

    /**
     * Document/message issued by a carrier or a carrier's agent, acknowledging receipt for carriage of goods specified therein on conditions stated or referred to in the document, enabling the carrier to issue a transport document. 
     **/
    const GOODS_RECEIPT_CARRIAGE = "702";

    /**
     * The document made out by an agent/consolidator which evidences the contract between the shipper and the agent/consolidator for the arrangement of carriage of goods. 
     **/
    const HOUSE_WAYBILL = "703";

    /**
     * A bill of lading issued by the master of a vessel (in actuality the owner or charterer of the vessel). It could cover a number of house bills. 
     **/
    const MASTER_BILL_OF_LADING = "704";

    /**
     * Negotiable document/message which evidences a contract of carriage by sea and the taking over or loading of goods by carrier, and by which carrier undertakes to deliver goods against surrender of the document. A provision in the document that goods are to be delivered to the order of a named person, or to order, or to bearer, constitutes such an undertaking. 
     **/
    const BILL_OF_LADING = "705";

    /**
     * The original of the bill of lading issued by a transport company. When issued by the maritime industry it could signify ownership of the cargo. 
     **/
    const BILL_OF_LADING_ORIGINAL = "706";

    /**
     * A copy of the bill of lading issued by a transport company. 
     **/
    const BILL_OF_LADING_COPY = "707";

    /**
     * Bill of lading indicating an empty container.
     **/
    const EMPTY_CONTAINER_BILL = "708";

    /**
     * Document which evidences a transport of liquid bulk cargo. 
     **/
    const TANKER_BILL_OF_LADING = "709";

    /**
     * Non-negotiable document which evidences a contract for the carriage of goods by sea and the taking over of the goods by the carrier, and by which the carrier undertakes to deliver the goods to the consignee named in the document. 
     **/
    const SEA_WAYBILL = "710";

    /**
     * Negotiable transport document made out to a named person, to order or to bearer, signed by the carrier and handed to the sender after receipt of the goods. 
     **/
    const INLAND_WATERWAY_BILL_OF_LADING = "711";

    /**
     * Non-negotiable document which evidences a contract for the carriage of goods by sea and the taking over or loading of the goods by the carrier, and by which the carrier undertakes to deliver the goods to the consignee named in the document. E.g. Sea waybill. Remark: Synonymous with "straight" or "non-negotiable Bill of lading" used in certain countries, e.g. Canada. 
     **/
    const NONNEGOTIABLE_MARITIME_TRANSPORT_DOCUMENT_GENERIC = "712";

    /**
     * Document/message issued by a ship's officer to acknowledge that a specified consignment has been received on board a vessel, and the apparent condition of the goods; enabling the carrier to issue a Bill of lading. 
     **/
    const MATES_RECEIPT = "713";

    /**
     * The bill of lading issued not by the carrier but by the freight forwarder/consolidator known by the carrier. 
     **/
    const HOUSE_BILL_OF_LADING = "714";

    /**
     * Document/message issued by a commercial party or a bank of an insurance company accepting responsibility to the beneficiary of the indemnity in accordance with the terms thereof. 
     **/
    const LETTER_OF_INDEMNITY_FOR_NONSURRENDER_OF_BILL_OF_LADING = "715";

    /**
     * Non-negotiable document issued by a freight forwarder evidencing a contract for the carriage of goods by sea and the taking over or loading of the goods by the freight forwarder, and by which the freight forwarder undertakes to deliver the goods to the consignee named in the document. 
     **/
    const FORWARDERS_BILL_OF_LADING = "716";

    /**
     * A document authorizing residence.
     **/
    const RESIDENCE_PERMIT = "717";

    /**
     * A national identity document issued to professional seamen that contains a record of their rank and service career. 
     **/
    const SEAMANS_BOOK = "718";

    /**
     * Document/message providing agreed textual information.
     **/
    const GENERAL_MESSAGE = "719";

    /**
     * Transport document constituting a contract for the carriage of goods between the sender and the carrier (the railway). For international rail traffic, this document must conform to the model prescribed by the international conventions concerning carriage of goods by rail, e.g. CIM Convention, SMGS Convention. 
     **/
    const RAIL_CONSIGNMENT_NOTE_GENERIC_TERM = "720";

    /**
     * Document/message responding to a previously received Product Data document/message. 
     **/
    const PRODUCT_DATA_RESPONSE = "721";

    /**
     * Accounting document, one copy of which is drawn up for each consignment note; it accompanies the consignment over the whole route and is a rail transport document. 
     **/
    const ROAD_LISTSMGS = "722";

    /**
     * Document/message which gives right to the owner to exert all functions normally transferred to a guard in a train by which an escorted consignment is transported. 
     **/
    const ESCORT_OFFICIAL_RECOGNITION = "723";

    /**
     * Fictitious transport document regarding a previous transport, enabling a carrier's agent to give to another carrier's agent (in a different country) the possibility to collect charges relating to the original transport (rail environment). 
     **/
    const RECHARGING_DOCUMENT = "724";

    /**
     * Document/message providing details of an order which has been raised by a manufacturer. 
     **/
    const MANUFACTURER_RAISED_ORDER = "725";

    /**
     * Document/message providing details of a consignment order which has been raised by a manufacturer. 
     **/
    const MANUFACTURER_RAISED_CONSIGNMENT_ORDER = "726";

    /**
     * A price/sales catalogue message containing no commercial information, such as prices, terms or conditions. 
     **/
    const PRICESALES_CATALOGUE_NOT_CONTAINING_COMMERCIAL_INFORMATION = "727";

    /**
     * A price/sales catalogue message containing only commercial terms or conditions data. 
     **/
    const PRICESALES_CATALOGUE_CONTAINING_COMMERCIAL_INFORMATION = "728";

    /**
     * Document/message by means of which the buyer informs the seller about the despatch of returned goods. 
     **/
    const RETURNS_ADVICE = "729";

    /**
     * Transport document/message which evidences a contract between a carrier and a sender for the carriage of goods by road (generic term). Remark: For international road traffic, this document must contain at least the particulars prescribed by the convention on the contract for the international carriage of goods by road (CMR). 
     **/
    const ROAD_CONSIGNMENT_NOTE = "730";

    /**
     * A message enabling the transmission of commercial data concerning payments made and outstanding items on an account over a period of time. 
     **/
    const COMMERCIAL_ACCOUNT_SUMMARY = "731";

    /**
     * A message by which a party announces to another party details of goods for return due to specified reasons (e.g. returns for repair, returns because of damage, etc). 
     **/
    const ANNOUNCEMENT_FOR_RETURNS = "732";

    /**
     * A message by which a party informs another party whether and how goods shall be returned. 
     **/
    const INSTRUCTION_FOR_RETURNS = "733";

    /**
     * A message enabling companies to exchange or report electronically, basic sales forecast data related to products or services, including the corresponding location, time period, product identification, pricing and quantity information. It enables the recip. 
     **/
    const SALES_FORECAST_REPORT = "734";

    /**
     * A message enabling companies to exchange or report electronically, basic sales data related to products or services, including the corresponding location, time period, product identification, pricing and quantity information. It enables the recipient to p. 
     **/
    const SALES_DATA_REPORT = "735";

    /**
     * A product inquiry which stands until it is cancelled. It requests not only the updates since last time, but always the complete product information of a data supplier. This means that within the standing request every time a complete download of the respe. 
     **/
    const STANDING_INQUIRY_ON_COMPLETE_PRODUCT_INFORMATION = "736";

    /**
     * A message by which a consignee provides for a carrier proof of delivery of a consignment. 
     **/
    const PROOF_OF_DELIVERY = "737";

    /**
     * A message from a party to a warehouse, distribution centre, or logistics service provider identifying the handling services and where required the movement of specified goods, limited to warehouses within the jurisdiction of the distribution centre or log. 
     **/
    const CARGOGOODS_HANDLING_AND_MOVEMENT_MESSAGE = "738";

    /**
     * Document/message providing metered consumption details supporiting an invoice. 
     **/
    const METERED_SERVICES_CONSUMPTION_REPORT_SUPPORTING_AN_INVOICE = "739";

    /**
     * Document/message made out by or on behalf of the shipper which evidences the contract between the shipper and carrier(s) for carriage of goods over routes of the carrier(s) and which is identified by the airline prefix issuing the document plus a serial (IATA). 
     **/
    const AIR_WAYBILL = "740";

    /**
     * Document/message made out by or on behalf of the agent/consolidator which evidences the contract between the agent/consolidator and carrier(s) for carriage of goods over routes of the carrier(s) for a consignment consisting of goods originated by more than one shipper (IATA). 
     **/
    const MASTER_AIR_WAYBILL = "741";

    /**
     * Document/message providing metered consumption details.
     **/
    const METERED_SERVICES_CONSUMPTION_REPORT = "742";

    /**
     * A temporary air waybill which contains only limited information because of the absence of the original. 
     **/
    const SUBSTITUTE_AIR_WAYBILL = "743";

    /**
     * Declaration to Customs regarding the personal effects of crew members aboard the conveyance; equivalent to IMO FAL 4. 
     **/
    const CREWS_EFFECTS_DECLARATION = "744";

    /**
     * Declaration to Customs regarding passengers aboard the conveyance; equivalent to IMO FAL 6. 
     **/
    const PASSENGER_LIST = "745";

    /**
     * Document/message created by the consignor or by the departure station, joined to the transport or sent to the consignee, giving the possibility to the consignee or the arrival station to attest the delivery of the goods. The document must be returned to the consignor or to the departure station. 
     **/
    const DELIVERY_NOTICE_RAIL_TRANSPORT = "746";

    /**
     * A message sent by a party (usually an employer or its representative) to a service providing organisation, to detail payroll deductions paid on behalf of its employees to the service providing organisation. 
     **/
    const PAYROLL_DEDUCTIONS_ADVICE = "747";

    /**
     * Document/message by means of which the supplier informs the buyer about the despatch of goods ordered on consignment (goods to be delivered into stock with agreement on payment when goods are sold out of this stock). 
     **/
    const CONSIGNMENT_DESPATCH_ADVICE = "748";

    /**
     * Message containing information regarding gross mass verification of transport equipment. 
     **/
    const TRANSPORT_EQUIPMENT_GROSS_MASS_VERIFICATION_MESSAGE = "749";

    /**
     * Document/message which, according to Article 106 of the "Agreement concerning Postal Parcels" under the UPU convention, is to accompany post parcels. 
     **/
    const DESPATCH_NOTE_POST_PARCELS = "750";

    /**
     * A document / message containing accounting related information such as monetary summations, seller id and VAT information. This may not be a complete invoice according to legal requirements. For instance the line item information might be excluded. 
     **/
    const INVOICE_INFORMATION_FOR_ACCOUNTING_PURPOSES = "751";

    /**
     * A transport document used when more than one mode of transportation is involved in the movement of cargo. It is a contract of carriage and receipt of the cargo for a multimodal transport. It indicates the place where the responsible transport company in the move takes responsibility for the cargo, the place where the responsibility of this transport company in the move ends and the conveyances involved. 
     **/
    const MULTIMODALCOMBINED_TRANSPORT_DOCUMENT_GENERIC = "760";

    /**
     * Bill of lading which evidences a contract of carriage from one place to another in separate stages of which at least one stage is a sea transit, and by which the issuing carrier accepts responsibility for the carriage as set forth in the through bill of lading. 
     **/
    const THROUGH_BILL_OF_LADING = "761";

    /**
     * Negotiable document/message issued by a forwarder to certify that he has taken charge of a specified consignment for despatch and delivery in accordance with the consignor's instructions, as indicated in the document, and that he accepts responsibility for delivery of the goods to the holder of the document through the intermediary of a delivery agent of his choice. E.g. FIATA-FCT. 
     **/
    const FORWARDERS_CERTIFICATE_OF_TRANSPORT = "763";

    /**
     * Negotiable or non-negotiable document evidencing a contract for the performance and/or procurement of performance of combined transport of goods and bearing on its face either the heading "Negotiable combined transport document issued subject to Uniform Rules for a Combined Transport Document (ICC Brochure No. 298)" or the heading "Non-negotiable Combined Transport Document issued subject to Uniform Rules for a Combined Transport Document (ICC Brochure No. 298)". 
     **/
    const COMBINED_TRANSPORT_DOCUMENT_GENERIC = "764";

    /**
     * Document/message which evidences a multimodal transport contract, the taking in charge of the goods by the multimodal transport operator, and an undertaking by him to deliver the goods in accordance with the terms of the contract. (International Convention on Multimodal Transport of Goods). 
     **/
    const MULTIMODAL_TRANSPORT_DOCUMENT_GENERIC = "765";

    /**
     * Document which evidences a multimodal transport contract, the taking in charge of the goods by the multimodal transport operator, and an undertaking by him to deliver the goods in accordance with the terms of the contract. 
     **/
    const COMBINED_TRANSPORT_BILL_OF_LADINGMULTIMODAL_BILL_OF_LADING = "766";

    /**
     * Document/message issued by a carrier to confirm that space has been reserved for a consignment in means of transport. 
     **/
    const BOOKING_CONFIRMATION = "770";

    /**
     * Instructions for release or delivery of goods.
     **/
    const CALLING_FORWARD_NOTICE = "775";

    /**
     * Document/message issued by a transport operation specifying freight costs and charges incurred for a transport operation and stating conditions of payment. 
     **/
    const FREIGHT_INVOICE = "780";

    /**
     * Notification from the carrier to the consignee in writing, by telephone or by any other means (express letter, message, telegram, etc.) informing him that a consignment addressed to him is being or will shortly be held at his disposal at a specified point in the place of destination. 
     **/
    const ARRIVAL_NOTICE_GOODS = "781";

    /**
     * Request made by the carrier to the sender, or, as the case may be, the consignee, for instructions as to the disposal of the consignment when circumstances prevent delivery and the return of the goods has not been requested by the consignor in the transport document. 
     **/
    const NOTICE_OF_CIRCUMSTANCES_PREVENTING_DELIVERY_GOODS = "782";

    /**
     * Request made by the carrier to the sender, or, the consignee as the case may be, for instructions as to the disposal of the goods when circumstances prevent transport before departure or en route, after acceptance of the consignment concerned. 
     **/
    const NOTICE_OF_CIRCUMSTANCES_PREVENTING_TRANSPORT_GOODS = "783";

    /**
     * Notification in writing, sent by the carrier to the sender, to inform him at his request of the actual date of delivery of the goods. 
     **/
    const DELIVERY_NOTICE_GOODS = "784";

    /**
     * Listing of goods comprising the cargo carried in a means of transport or in a transport-unit. The cargo manifest gives the commercial particulars of the goods, such as transport document numbers, consignors, consignees, shipping marks, number and kind of packages and descriptions and quantities of the goods. 
     **/
    const CARGO_MANIFEST = "785";

    /**
     * Document/message containing the same information as a cargo manifest, and additional details on freight amounts, charges, etc. 
     **/
    const FREIGHT_MANIFEST = "786";

    /**
     * Document/message used in road transport, listing the cargo carried on a road vehicle, often referring to appended copies of Road consignment note. 
     **/
    const BORDEREAU = "787";

    /**
     * Document/message specifying the contents of particular freight containers or other transport units, prepared by the party responsible for their loading into the container or unit. 
     **/
    const CONTAINER_MANIFEST_UNIT_PACKING_LIST = "788";

    /**
     * Document used by the rail organization to indicate freight charges or additional charges in each case where the departure station is not able to calculate the charges for the total voyage (e.g. tariff not yet updated, part of voyage not covered by the tariff). This document must be considered as joined to the transport. 
     **/
    const CHARGES_NOTE = "789";

    /**
     * (1030) Document that is joined to the transport or sent by separate means, giving to the departure rail organization the proof that the cash-on delivery amount has been encashed by the arrival rail organization before reimbursement of the consignor. 
     **/
    const ADVICE_OF_COLLECTION = "790";

    /**
     * Document certifying a ship's safety to a specified date.
     **/
    const SAFETY_OF_SHIP_CERTIFICATE = "791";

    /**
     * Document certifying the safety of a ship's radio facilities to a specified date. 
     **/
    const SAFETY_OF_RADIO_CERTIFICATE = "792";

    /**
     * Document certifying the safety of a ship's equipment to a specified date. 
     **/
    const SAFETY_OF_EQUIPMENT_CERTIFICATE = "793";

    /**
     * Document declaring a ship owner's liability for oil propelling or carried on a vessel. 
     **/
    const CIVIL_LIABILITY_FOR_OIL_CERTIFICATE = "794";

    /**
     * Document specifying the limit of a ship's legal submersion under various conditions. 
     **/
    const LOADLINE_DOCUMENT = "795";

    /**
     * Document certifying that a ship is free of rats, valid to a specified date. 
     **/
    const DERAT_DOCUMENT = "796";

    /**
     * Document certifying the health condition on board a vessel, valid to a specified date. 
     **/
    const MARITIME_DECLARATION_OF_HEALTH = "797";

    /**
     * Official certificate stating the vessel's registry.
     **/
    const CERTIFICATE_OF_REGISTRY = "798";

    /**
     * Declaration to Customs regarding the contents of the ship's stores (equivalent to IMO FAL 3) i.e. goods intended for consumption by passengers/crew on board vessels, aircraft or trains, whether or not sold or landed; goods necessary for operation/maintenance of conveyance, including fuel/lubricants, excluding spare parts/equipment (IMO). 
     **/
    const SHIPS_STORES_DECLARATION = "799";

    /**
     * Application for a permit issued by a government authority permitting exportation of a specified commodity subject to specified conditions as quantity, country of destination, etc. 
     **/
    const EXPORT_LICENCE_APPLICATION_FOR = "810";

    /**
     * Permit issued by a government authority permitting exportation of a specified commodity subject to specified conditions as quantity, country of destination, etc. Synonym: Embargo permit. 
     **/
    const EXPORT_LICENCE = "811";

    /**
     * Document/message completed by an exporter/seller as a means whereby the competent body may control that the amount of foreign exchange accrued from a trade transaction is repatriated in accordance with the conditions of payment and exchange control regulations in force. 
     **/
    const EXCHANGE_CONTROL_DECLARATION_EXPORT = "812";

    /**
     * European community transit declaration.
     **/
    const DESPATCH_NOTE_MODEL_T = "820";

    /**
     * Transit declaration for goods circulating under internal community transit procedures (between European Union (EU) countries). 
     **/
    const DESPATCH_NOTE_MODEL_T = "821";

    /**
     * Ascertainment that the declared goods were originally produced in an European Union (EU) country. 
     **/
    const DESPATCH_NOTE_MODEL_T = "822";

    /**
     * Control document (export declaration) used particularly in case of re-sending without use with only VAT collection, refusal, unconformity with contract etc. 
     **/
    const CONTROL_DOCUMENT_T = "823";

    /**
     * Rail consignment note prepared by the consignor for the facilitation of an eventual return to the origin of the goods. 
     **/
    const RESENDING_CONSIGNMENT_NOTE = "824";

    /**
     * Ascertainment that the declared goods were originally produced in an European Union (EU) country. May only be used for goods that are loaded on one single means of transport in one single departure point for one single delivery point. 
     **/
    const DESPATCH_NOTE_MODEL_TL = "825";

    /**
     * Document/message by which goods are declared for export Customs clearance, conforming to the layout key set out at Appendix I to Annex C.1 concerning outright exportation to the Kyoto convention (CCC). Within a Customs union, "for despatch" may have the same meaning as "for exportation". 
     **/
    const GOODS_DECLARATION_FOR_EXPORTATION = "830";

    /**
     * Generic term, sometimes referred to as Freight declaration, applied to the documents providing the particulars required by the Customs concerning the cargo (freight) carried by commercial means of transport (CCC). 
     **/
    const CARGO_DECLARATION_DEPARTURE = "833";

    /**
     * Document/message submitted to a competent body by party requesting a Goods control certificate to be issued in accordance with national or international standards, or conforming to legislation in the importing country, or as specified in the contract. 
     **/
    const APPLICATION_FOR_GOODS_CONTROL_CERTIFICATE = "840";

    /**
     * Document/message issued by a competent body evidencing the quality of the goods described therein, in accordance with national or international standards, or conforming to legislation in the importing country, or as specified in the contract. 
     **/
    const GOODS_CONTROL_CERTIFICATE = "841";

    /**
     * Document/message submitted to a competent body by party requesting a Phytosanitary certificate to be issued. 
     **/
    const APPLICATION_FOR_PHYTOSANITARY_CERTIFICATE = "850";

    /**
     * A message/doucment consistent with the model for certificates of the IPPC, attesting that a consignment meets phytosanitary import requirements. 
     **/
    const PHYTOSANITARY_CERTIFICATE = "851";

    /**
     * Document/message issued by the competent authority in the exporting country evidencing that alimentary and animal products, including dead animals, are fit for human consumption, and giving details, when relevant, of controls undertaken. 
     **/
    const SANITARY_CERTIFICATE = "852";

    /**
     * Document/message issued by the competent authority in the exporting country evidencing that live animals or birds are not infested or infected with disease, and giving details regarding their provenance, and of vaccinations and other treatment to which they have been subjected. 
     **/
    const VETERINARY_CERTIFICATE = "853";

    /**
     * Document/message submitted to a competent body by a party requesting an Inspection certificate to be issued in accordance with national or international standards, or conforming to legislation in the country in which it is required, or as specified in the contract. 
     **/
    const APPLICATION_FOR_INSPECTION_CERTIFICATE = "855";

    /**
     * Document/message issued by a competent body evidencing that the goods described therein have been inspected in accordance with national or international standards, in conformity with legislation in the country in which the inspection is required, or as specified in the contract. 
     **/
    const INSPECTION_CERTIFICATE = "856";

    /**
     * Document/message submitted to a competent body by an interested party requesting a Certificate of origin to be issued in accordance with relevant criteria, and on the basis of evidence of the origin of the goods. 
     **/
    const CERTIFICATE_OF_ORIGIN_APPLICATION_FOR = "860";

    /**
     * Document/message identifying goods, in which the authority or body authorized to issue it certifies expressly that the goods to which the certificate relates originate in a specific country. The word "country" may include a group of countries, a region or a part of a country. This certificate may also include a declaration by the manufacturer, producer, supplier, exporter or other competent person. 
     **/
    const CERTIFICATE_OF_ORIGIN = "861";

    /**
     * Appropriate statement as to the origin of the goods, made in connection with their exportation by the manufacturer, producer, supplier, exporter or other competent person on the Commercial invoice or any other document relating to the goods (CCC). 
     **/
    const DECLARATION_OF_ORIGIN = "862";

    /**
     * Certificate drawn up in accordance with the rules laid down by an authority or approved body, certifying that the goods described therein qualify for a designation specific to the given region (e.g. champagne, port wine, Parmesan cheese). 
     **/
    const REGIONAL_APPELLATION_CERTIFICATE = "863";

    /**
     * Document/message describing a certificate of origin meeting the requirements for preferential treatment. 
     **/
    const PREFERENCE_CERTIFICATE_OF_ORIGIN = "864";

    /**
     * Specific form of certificate of origin for goods qualifying for preferential treatment under the generalized system of preferences (includes a combined declaration of origin and certificate, form A). 
     **/
    const CERTIFICATE_OF_ORIGIN_FORM_GSP = "865";

    /**
     * Document/message to be prepared by an exporter in his country and presented to a diplomatic representation of the importing country for endorsement and subsequently to be presented by the importer in connection with the import of the goods described therein. 
     **/
    const CONSULAR_INVOICE = "870";

    /**
     * (1115) Document/message issued by a consignor in accordance with applicable conventions or regulations, describing hazardous goods or materials for transport purposes, and stating that the latter have been packed and labelled in accordance with the provisions of the relevant conventions or regulations. 
     **/
    const DANGEROUS_GOODS_DECLARATION = "890";

    /**
     * Document/message in which an exporter provides information about exported goods required by the body responsible for the collection of international trade statistics. 
     **/
    const STATISTICAL_DOCUMENT_EXPORT = "895";

    /**
     * Document/message in which a declarant provides information about goods required by the body responsible for the collection of trade statistics. 
     **/
    const INTRASTAT_DECLARATION = "896";

    /**
     * Document/message whereby an official authority (Customs or governmental) certifies that goods have been delivered. 
     **/
    const DELIVERY_VERIFICATION_CERTIFICATE = "901";

    /**
     * Document/message in which an interested party applies to the competent body for authorization to import either a limited quantity of articles subject to import restrictions, or an unlimited quantity of such articles during a limited period, and specifies the kind of articles, their origin and value, etc. 
     **/
    const IMPORT_LICENCE_APPLICATION_FOR = "910";

    /**
     * Document/message issued by the competent body in accordance with import regulations in force, by which authorization is granted to a named party to import either a limited quantity of designated articles or an unlimited quantity of such articles during a limited period, under conditions specified in the document. 
     **/
    const IMPORT_LICENCE = "911";

    /**
     * CUSDEC transmission that does not include data from the commercial detail section of the message. 
     **/
    const CUSTOMS_DECLARATION_WITHOUT_COMMERCIAL_DETAIL = "913";

    /**
     * CUSDEC transmission that includes data from both the commercial detail and item detail sections of the message. 
     **/
    const CUSTOMS_DECLARATION_WITH_COMMERCIAL_AND_ITEM_DETAIL = "914";

    /**
     * CUSDEC transmission that does not include data from the item detail section of the message. 
     **/
    const CUSTOMS_DECLARATION_WITHOUT_ITEM_DETAIL = "915";

    /**
     * Document that has a relationship with the stated document/message. 
     **/
    const RELATED_DOCUMENT = "916";

    /**
     * Receipt for Customs duty/tax/fee paid.
     **/
    const RECEIPT_CUSTOMS = "917";

    /**
     * Document/message whereby an importer/buyer requests the competent body to allocate an amount of foreign exchange to be transferred to an exporter/seller in payment for goods. 
     **/
    const APPLICATION_FOR_EXCHANGE_ALLOCATION = "925";

    /**
     * Document/message issued by the competent body authorizing an importer/buyer to transfer an amount of foreign exchange to an exporter/seller in payment for goods. 
     **/
    const FOREIGN_EXCHANGE_PERMIT = "926";

    /**
     * Document/message completed by an importer/buyer as a means for the competent body to control that a trade transaction for which foreign exchange has been allocated has been executed and that money has been transferred in accordance with the conditions of payment and the exchange control regulations in force. 
     **/
    const EXCHANGE_CONTROL_DECLARATION_IMPORT = "927";

    /**
     * Document/message by which goods are declared for import Customs clearance [sister entry of 830]. 
     **/
    const GOODS_DECLARATION_FOR_IMPORTATION = "929";

    /**
     * Document/message by which goods are declared for import Customs clearance according to Annex B.1 (concerning clearance for home use) to the Kyoto convention (CCC). 
     **/
    const GOODS_DECLARATION_FOR_HOME_USE = "930";

    /**
     * Document/message issued by an importer notifying Customs that goods have been removed from an importing means of transport to the importer's premises under a Customs- approved arrangement for immediate release, or requesting authorization to do so. 
     **/
    const CUSTOMS_IMMEDIATE_RELEASE_DECLARATION = "931";

    /**
     * Document/message whereby a Customs authority releases goods under its control to be placed at the disposal of the party concerned. Synonym: Customs release note. 
     **/
    const CUSTOMS_DELIVERY_NOTE = "932";

    /**
     * Generic term, sometimes referred to as Freight declaration, applied to the documents providing the particulars required by the Customs concerning the cargo (freight) carried by commercial means of transport (CCC). 
     **/
    const CARGO_DECLARATION_ARRIVAL = "933";

    /**
     * Document/message in which a declarant (importer) states the invoice or other price (e.g. selling price, price of identical goods), and specifies costs for freight, insurance and packing, etc., terms of delivery and payment, any relationship with the trading partner, etc., for the purpose of determining the Customs value of goods imported. 
     **/
    const VALUE_DECLARATION = "934";

    /**
     * Document/message required by the Customs in an importing country in which an exporter states the invoice or other price (e.g. selling price, price of identical goods), and specifies costs for freight, insurance and packing, etc., terms of delivery and payment, for the purpose of determining the Customs value in the importing country of goods consigned to that country. 
     **/
    const CUSTOMS_INVOICE = "935";

    /**
     * Document/message which, according to Article 106 of the "Agreement concerning Postal Parcels" under the UPU Convention, must accompany post parcels and in which the contents of such parcels are specified. 
     **/
    const CUSTOMS_DECLARATION_POST_PARCELS = "936";

    /**
     * Document/message in which an importer states the pertinent information required by the competent body for assessment of value-added tax. 
     **/
    const TAX_DECLARATION_VALUE_ADDED_TAX = "937";

    /**
     * Document/message containing a general tax declaration.
     **/
    const TAX_DECLARATION_GENERAL = "938";

    /**
     * Document/message containing the demand of tax.
     **/
    const TAX_DEMAND = "940";

    /**
     * Document/message giving the permission to export specified goods. 
     **/
    const EMBARGO_PERMIT = "941";

    /**
     * Document/message by which the sender declares goods for Customs transit according to Annex E.1 (concerning Customs transit) to the Kyoto convention (CCC). 
     **/
    const GOODS_DECLARATION_FOR_CUSTOMS_TRANSIT = "950";

    /**
     * International Customs transit document by which the sender declares goods for carriage by rail in accordance with the provisions of the 1952 International Convention to facilitate the crossing of frontiers for goods carried by rail (TIF Convention of UIC). 
     **/
    const TIF_FORM = "951";

    /**
     * International Customs document (International Transit by Road), issued by a guaranteeing association approved by the Customs authorities, under the cover of which goods are carried, in most cases under Customs seal, in road vehicles and/or containers in compliance with the requirements of the Customs TIR Convention of the International Transport of Goods under cover of TIR Carnets (UN/ECE). 
     **/
    const TIR_CARNET = "952";

    /**
     * EC customs transit document issued by EC customs authorities for transit and/or temporary user of goods within the EC. 
     **/
    const EC_CARNET = "953";

    /**
     * Customs certificate used in preferential goods interchanges between EC countries and EC external countries. 
     **/
    const EUR__CERTIFICATE_OF_ORIGIN = "954";

    /**
     * International Customs document (Admission Temporaire / Temporary Admission) which, issued under the terms of the ATA Convention (1961), incorporates an internationally valid guarantee and may be used, in lieu of national Customs documents and as security for import duties and taxes, to cover the temporary admission of goods and, where appropriate, the transit of goods. If accepted for controlling the temporary export and reimport of goods, international guarantee does not apply (CCC). 
     **/
    const ATA_CARNET = "955";

    /**
     * A set of documents, replacing the various (national) forms for Customs declaration within the EC, implemented on 01-01-1988. 
     **/
    const SINGLE_ADMINISTRATIVE_DOCUMENT = "960";

    /**
     * General response message to permit the transfer of data from Customs to the transmitter of the previous message. 
     **/
    const GENERAL_RESPONSE_CUSTOMS = "961";

    /**
     * Document response message to permit the transfer of data from Customs to the transmitter of the previous message. 
     **/
    const DOCUMENT_RESPONSE_CUSTOMS = "962";

    /**
     * Error response message to permit the transfer of data from Customs to the transmitter of the previous message. 
     **/
    const ERROR_RESPONSE_CUSTOMS = "963";

    /**
     * Package response message to permit the transfer of data from Customs to the transmitter of the previous message. 
     **/
    const PACKAGE_RESPONSE_CUSTOMS = "964";

    /**
     * Tax calculation/confirmation response message to permit the transfer of data from Customs to the transmitter of the previous message. 
     **/
    const TAX_CALCULATIONCONFIRMATION_RESPONSE_CUSTOMS = "965";

    /**
     * Document/message issued by the competent body for prior allocation of a quota. 
     **/
    const QUOTA_PRIOR_ALLOCATION_CERTIFICATE = "966";

    /**
     * Document which contains consignment information concerning the wagons and their lading in a case of a multiple wagon consignment. 
     **/
    const WAGON_REPORT = "970";

    /**
     * Document for a course of transit used for a carrier who is neither the carrier at the beginning nor the arrival. The transit carrier can directly invoice the expenses for its part of the transport. 
     **/
    const TRANSIT_CONVEYOR_DOCUMENT = "971";

    /**
     * Document which is a copy of the rail consignment note printed especially for the need of the forwarder. 
     **/
    const RAIL_CONSIGNMENT_NOTE_FORWARDER_COPY = "972";

    /**
     * Document giving details for the carriage of excisable goods on a duty-suspended basis. 
     **/
    const DUTY_SUSPENDED_GOODS = "974";

    /**
     * A document providing proof that a transit declaration has been accepted. 
     **/
    const PROOF_OF_TRANSIT_DECLARATION = "975";

    /**
     * Document for the carriage of containers. Syn: transfer note. 
     **/
    const CONTAINER_TRANSFER_NOTE = "976";

    /**
     * Customs transit document for the carriage of shipments of the NATO armed forces under Customs supervision. 
     **/
    const NATO_TRANSIT_DOCUMENT = "977";

    /**
     * Document containing the authorization from the relevant authority for the international carriage of waste. Syn: Transfrontier waste shipment permit. 
     **/
    const TRANSFRONTIER_WASTE_SHIPMENT_AUTHORIZATION = "978";

    /**
     * Document certified by the carriers and the consignee to be used for the international carriage of waste. 
     **/
    const TRANSFRONTIER_WASTE_SHIPMENT_MOVEMENT_DOCUMENT = "979";

    /**
     * Document issued by Customs granting the end-use Customs procedure. 
     **/
    const END_USE_AUTHORIZATION = "990";

    /**
     * Document/message describing a contract with a government authority. 
     **/
    const GOVERNMENT_CONTRACT = "991";

    /**
     * Document/message describing an import document that is used for statistical purposes. 
     **/
    const STATISTICAL_DOCUMENT_IMPORT = "995";

    /**
     * Message with application for opening of a documentary credit. 
     **/
    const APPLICATION_FOR_DOCUMENTARY_CREDIT = "996";

    /**
     * Indication of the previous Customs document/message concerning the same transaction. 
     **/
    const PREVIOUS_CUSTOMS_DOCUMENTMESSAGE = "998";
}