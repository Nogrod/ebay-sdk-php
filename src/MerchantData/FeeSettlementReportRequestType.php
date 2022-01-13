<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeeSettlementReportRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> Large Merchant Services (LMS) functionality as a SOAP service is deprecated and will be decommissioned by the end of April 2022. It is fully migrated into the REST-based <a href="https://developer.ebay.com/api-docs/sell/feed/resources/methods" target=\"_blank\" >Sell Feed API</a> The <strong>Sell Feed API</strong> supports the same XML data files that LMS supported but through REST methods. For more information, see the <a href="https://developer.ebay.com/api-docs/sell/static/lms-migration-landing.html" target="_blank" >LMS Migration Guide</a>.
 *  </span>
 *  Contains information about user invoice and related order information. To use this report, you must
 *  perform the one-time steps described in <a href="http://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=1394">
 *  Support Knowledge Base Article - LMS: FeeSettlementReport one time set-up process </a>.
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
