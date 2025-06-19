<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketAutoDeclineEnabledDefinitionType
 *
 * Indicates whether automatic declination of Best Offers is allowed for this category for Motors Local Market listings. Returned only if this category overrides the site default.
 * XSD Type: LocalMarketAutoDeclineEnabledDefinitionType
 */
class LocalMarketAutoDeclineEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\LocalMarketAutoDeclineEnabledDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
