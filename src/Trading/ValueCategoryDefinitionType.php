<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ValueCategoryDefinitionType
 *
 * Defines the value category feature. If a field of this type is present,
 *  the corresponding feature applies to the site. The field is returned as
 *  an empty element (e.g., a boolean value is not returned).
 * XSD Type: ValueCategoryDefinitionType
 */
class ValueCategoryDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
