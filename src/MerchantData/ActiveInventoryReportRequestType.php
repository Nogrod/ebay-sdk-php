<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ActiveInventoryReportRequestType
 *
 * <span class="tablenote"> <strong>Note:</strong> Large Merchant Services (LMS) functionality as a SOAP service has been decommissioned. It is fully migrated into the REST-based <a href="/api-docs/sell/feed/resources/methods" target=\"_blank\" >Sell Feed API</a> The <strong>Sell Feed API</strong> supports the same XML data files that LMS supported but through REST methods. For more information, see the <a href="/api-docs/sell/static/feed/lms-feeds.html" target="_blank" >LMS Feed Guide</a>. </span>
 *  A report that contains price and quantity information for all of the active
 *  listings for a specific seller. A seller can use this information to maintain
 *  their inventory on eBay.
 *  <br><br>
 *  The eBay servers read the token information passed in by the seller's application
 *  to determine which seller's data to retrieve.
 * XSD Type: ActiveInventoryReportRequestType
 */
class ActiveInventoryReportRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
