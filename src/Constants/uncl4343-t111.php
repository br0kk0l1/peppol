<?php

namespace PonderSource\Peppol\Constants;
class UNCL4343-T111
{

    /**
     * Indicates that an acknowledgement relating to receipt of message or transaction is required. Status is used when Buyer has received a readable invoice message that can be understood and submitted for processing by the Buyer. 
     **/
    const MESSAGE_ACKNOWLEDGEMENT = "AB";

    /**
     * Indication that the referenced offer or transaction (e.g., cargo booking or quotation request) has been accepted. Status is used only when the Buyer has given a final approval of the invoice and the next step is payment 
     **/
    const ACCEPTED = "AP";

    /**
     * Indication that the referenced offer or transaction (e.g., cargo booking or quotation request) is not accepted. Status is used only when the Buyer will not process the referenced Invoice any further. Buyer is rejecting this invoice but not necessarily the commercial transaction. Although it can be used also for rejection for commercial reasons (invoice not corresponding to delivery). 
     **/
    const REJECTED = "RE";

    /**
     * Indicates that the referenced message or transaction is being processed. Status is used when the processing of the Invoice has started in Buyers system. 
     **/
    const IN_PROCESS = "IP";

    /**
     * Indicates that the processing of the referenced message has been halted pending response to a query. Status is used when Buyer will not proceed to accept the Invoice without receiving additional information from the Seller.
     **/
    const UNDER_QUERY = "UQ";

    /**
     * Indication that the referenced offer or transaction (e.g., cargo booking or quotation request) has been accepted under conditions indicated in this message. Status is used when Buyer is accepting the Invoice under conditions stated in ‘Status Reason’ and proceed to pay accordingly unless disputed by Seller.
     **/
    const CONDITIONALLY_ACCEPTED = "CA";

    /**
     * Indicates that the referenced document or transaction has been paid. Status is used only when the Buyer has initiated the payment of the invoice.
     **/
    const PAID = "PD";
}