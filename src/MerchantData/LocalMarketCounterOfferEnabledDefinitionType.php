<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing LocalMarketCounterOfferEnabledDefinitionType
 *
 * Indicates whether counter offers to Best Offers are allowed for this category for Motors Local Market listings. Returned only if this category overrides the site default.
 * XSD Type: LocalMarketCounterOfferEnabledDefinitionType
 */
class LocalMarketCounterOfferEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
