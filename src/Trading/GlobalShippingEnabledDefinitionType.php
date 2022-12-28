<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GlobalShippingEnabledDefinitionType
 *
 * Specifies whether the Global Shipping Program (GSP) is enabled or not. The field is
 *  returned as an empty element (i.e., a boolean value is not returned).
 * XSD Type: GlobalShippingEnabledDefinitionType
 */
class GlobalShippingEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
