<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing Group1MaxFlatShippingCostDefinitionType
 *
 * About shipping service group 1.
 * XSD Type: Group1MaxFlatShippingCostDefinitionType
 */
class Group1MaxFlatShippingCostDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
