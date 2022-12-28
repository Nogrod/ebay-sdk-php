<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddDisputeResponseResponseType
 *
 * This type is the base response of the <b>AddDisputeResponse</b> call.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>AddDisputeResponse</b> call is deprecated and is scheduled for decommission on January 31, 2023. There is no alternative to this call since eBay no longer supports Unpaid Item cases. However, there is a page in Selling Preferences in My eBay that allows a seller to cancel and relist any items that have not been paid for after a specified amount of days.
 *  </span>
 * XSD Type: AddDisputeResponseResponseType
 */
class AddDisputeResponseResponseType extends AbstractResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
