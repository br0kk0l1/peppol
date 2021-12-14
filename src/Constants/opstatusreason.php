<?php

namespace PonderSource\Peppol\Constants;
class OPStatusReason
{

    /**
     * Indicates that receiver of the documents sends the message just to update the status and there are no problems with document processing
     **/
    const NO_ISSUE = "NON";

    /**
     * Indicates that the received document did not contain references as required by the receiver for correctly routing the document for approval or processing.
     **/
    const REFERENCES_INCORRECT = "REF";

    /**
     * Information in the received document is not according to legal requirements.
     **/
    const LEGAL_INFORMATION_INCORRECT = "LEG";

    /**
     * The party to which the document is addressed is not known.
     **/
    const RECEIVER_UNKNOWN = "REC";

    /**
     * Unacceptable or incorrect quality
     **/
    const ITEM_QUALITY_INSUFFICIENT = "QUA";

    /**
     * Delivery proposed or provided is not acceptable.
     **/
    const DELIVERY_ISSUES = "DEL";

    /**
     * Prices not according to previous expectation.
     **/
    const PRICES_INCORRECT = "PRI";

    /**
     * Quantity not according to previous expectation.
     **/
    const QUANTITY_INCORRECT = "QTY";

    /**
     * Items not according to previous expectation.
     **/
    const ITEMS_INCORRECT = "ITM";

    /**
     * Payment terms not according to previous expectation.
     **/
    const PAYMENT_TERMS_INCORRECT = "PAY";

    /**
     * Commercial transaction not recognized.
     **/
    const NOT_RECOGNIZED = "UNR";

    /**
     * Finance terms not according to previous expectation.
     **/
    const FINANCE_INCORRECT = "FIN";

    /**
     * Payment is partially but not fully paid.
     **/
    const PARTIALLY_PAID = "PPD";

    /**
     * Reason for status is not defined by code.
     **/
    const OTHER = "OTH";
}