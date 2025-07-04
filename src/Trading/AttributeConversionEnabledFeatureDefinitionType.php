<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AttributeConversionEnabledFeatureDefinitionType
 *
 * This enumerated type is deprecated.
 * XSD Type: AttributeConversionEnabledFeatureDefinitionType
 */
class AttributeConversionEnabledFeatureDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AttributeConversionEnabledFeatureDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
