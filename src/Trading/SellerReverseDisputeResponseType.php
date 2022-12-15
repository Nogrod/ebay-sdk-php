<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerReverseDisputeResponseType
 *
 * The response of a <b>SellerReverseDispute</b> call only includes the standard response fields for Trading API calls, such as the <b>Ack</b> field (to indicate the success or failure of the call), the timestamp, and an <b>Errors</b> container (if there were any errors and/or warnings).
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>SellerReverseDispute</b> call is deprecated and is scheduled for decommission on January 31, 2023. There is no alternative to this call since eBay no longer supports Unpaid Item cases.
 *  </span>
 * XSD Type: SellerReverseDisputeResponseType
 */
class SellerReverseDisputeResponseType extends AbstractResponseType
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
