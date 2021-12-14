<?php

namespace PonderSource\Peppol\Constants;
class UNCL1229
{

    /**
     * The information is to be or has been added.
     **/
    const ORDER_LINE_IS_ADDED = "1";

    /**
     * The Order line is accepted with change.
     **/
    const CHANGED = "3";

    /**
     * The Order line is accepted without changes.
     **/
    const ACCEPTED_WITHOUT_AMENDMENT = "5";

    /**
     * The Order line is rejected.
     **/
    const NOT_ACCEPTED = "7";

    /**
     * Delivery has taken place
     **/
    const ALLREADY_DELIVERED = "42";
}