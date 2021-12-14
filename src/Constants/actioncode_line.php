<?php

namespace PonderSource\Peppol\Constants;
class ActionCode_line
{

    /**
     * Used on catalogue level when a catalogue is sent for the first time to the Catalogue Receiver referring to the contract in the header of the catalogue. On line level this is used to indicate added items in the catalogue.
     **/
    const ADDITION = "Add";

    /**
     * Updates a current catalogue/catalogue line.
     **/
    const UPDATE = "Update";

    /**
     * Deletes the catalogue or catalogue line
     **/
    const DELETE = "Delete";
}