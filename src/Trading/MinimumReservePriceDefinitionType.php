<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MinimumReservePriceDefinitionType
 *
 * Defines the Minimum Reserve Price feature. If the field is present, the feature applies to the category. The field is returned as an empty element (i.e., a boolean value is not returned).
 * XSD Type: MinimumReservePriceDefinitionType
 */
class MinimumReservePriceDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MinimumReservePriceDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
