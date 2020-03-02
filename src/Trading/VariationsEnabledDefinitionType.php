<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing VariationsEnabledDefinitionType
 *
 * Defines the multi-variation listing feature. If the field is present,
 *  the corresponding feature applies to the site. The field is returned as
 *  an empty element (e.g., a boolean value is not returned).<br>
 *  <br>
 *  Multi-variation listings contain items that are logically the same
 *  product, but that vary in their manufacturing details or packaging.
 *  For example, a particular brand and style of shirt could be
 *  available in different sizes and colors, such as "large blue" and
 *  "medium black" variations.
 * XSD Type: VariationsEnabledDefinitionType
 */
class VariationsEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
