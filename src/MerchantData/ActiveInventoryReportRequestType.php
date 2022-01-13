<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ActiveInventoryReportRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> Large Merchant Services functionality as a SOAP service is deprecated and will be decommissioned by the end of April 2022. It is fully migrated into the REST-based <a href="https://developer.ebay.com/api-docs/sell/feed/resources/methods" target=\"_blank\" >Sell Feed API</a> The <strong>Sell Feed API</strong> supports the same XML data files that LMS supported but through REST methods. For more information, see the <a href="https://developer.ebay.com/api-docs/sell/static/lms-migration-landing.html" target="_blank" >LMS Migration Guide</a>.
 *  </span>
 *  A report that contains price and quantity information for all of the active
 *  listings for a specific seller. A seller can use this information to maintain
 *  their inventory on eBay.
 *  <br><br>
 *  The eBay servers read the token information passed in by the seller's application
 *  to determine which seller's data to retrieve.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> ActiveInventoryReport cannot be issued on its own like an ordinary API call, using an endpoint. This Large Merchant Services call must be invoked as a parameter in a Bulk Data Exchange API call, which will produce a report that can be downloaded using a File Transfer API call. This call has no request type.
 *  </span>
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
