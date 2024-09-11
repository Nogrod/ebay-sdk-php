<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FeeSettlementReportRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> Large Merchant Services (LMS) functionality as a SOAP service has been decommissioned.
 *  </span>
 *  Contains information about user invoice and related order information. To use this report, you must
 *  perform the one-time steps described in <a href="http://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=1394">
 *  Support Knowledge Base Article - LMS: FeeSettlementReport one time set-up process </a>.
 * XSD Type: FeeSettlementReportRequestType
 */
class FeeSettlementReportRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
