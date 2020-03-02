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
