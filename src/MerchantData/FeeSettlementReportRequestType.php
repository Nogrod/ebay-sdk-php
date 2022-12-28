<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeeSettlementReportRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> Large Merchant Services (LMS) functionality as a SOAP service and this call have been decommissioned.
 *  </span>
 * XSD Type: FeeSettlementReportRequestType
 */
class FeeSettlementReportRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
    }
}
