<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing LocalMarketBestOfferEnabledDefinitionType
 *
 * Indicates whether Contact Seller is enabled for Classified Ads.
 *  Added for Local Market users.
 * XSD Type: LocalMarketBestOfferEnabledDefinitionType
 */
class LocalMarketBestOfferEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
