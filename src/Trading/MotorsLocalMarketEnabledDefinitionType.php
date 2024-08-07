<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MotorsLocalMarketEnabledDefinitionType
 *
 * Defines the Motors Local Market feature. If the Motors Local Market field is present, the corresponding feature applies to the Motors Local Market category. The field is returned as an empty element (e.g., a boolean value is not returned).
 * XSD Type: MotorsLocalMarketEnabledDefinitionType
 */
class MotorsLocalMarketEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
