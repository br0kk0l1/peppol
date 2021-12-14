<?php

namespace PonderSource\Peppol\Constants;
class OPStatusAction
{

    /**
     * No action required
     **/
    const NO_ACTION_REQUIRED = "NOA";

    /**
     * Missing information requested without re-issuing invoice
     **/
    const PROVIDE_INFORMATION = "PIN";

    /**
     * Request to re-issue a corrected invoice
     **/
    const ISSUE_NEW_INVOICE = "NIN";

    /**
     * Request to fully cancel the referenced invoice with a credit note
     **/
    const CREDIT_FULLY = "CNF";

    /**
     * Request to issue partial credit note for corrections only
     **/
    const CREDIT_PARTIALLY = "CNP";

    /**
     * Request to repay the amount paid on the invoice
     **/
    const CREDIT_THE_AMOUNT = "CNA";

    /**
     * Requested action is not defined by code
     **/
    const OTHER = "OTH";
}