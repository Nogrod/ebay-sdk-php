<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisableUnpaidItemAssistanceResponseType
 *
 * Response of the <b>DisableUnpaidItemAssistance</b> call, which includes only the standard response fields like <b>Ack</b>, <b>Timestamp</b>, <b>Errors</b>, etc.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>DisableUnpaidItemAssistance</b> call is deprecated and is scheduled for decommission on January 31, 2023. There is no alternative to this call since eBay no longer supports Unpaid Item cases and the Unpaid Item Assistant. However, there is a page in Selling Preferences in My eBay that allows a seller to cancel and relist any items that have not been paid for after a specified amount of days.
 *  </span>
 * XSD Type: DisableUnpaidItemAssistanceResponseType
 */
class DisableUnpaidItemAssistanceResponseType extends AbstractResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        parent::setKeyValue($keyValue);
    }
}
