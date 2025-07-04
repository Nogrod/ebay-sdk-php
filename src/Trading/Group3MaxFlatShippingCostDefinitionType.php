<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing Group3MaxFlatShippingCostDefinitionType
 *
 * About shipping service group 3.
 * XSD Type: Group3MaxFlatShippingCostDefinitionType
 */
class Group3MaxFlatShippingCostDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\Group3MaxFlatShippingCostDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
