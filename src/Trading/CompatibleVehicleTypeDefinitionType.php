<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CompatibleVehicleTypeDefinitionType
 *
 * Defines the vehicle type to which parts compatibility applies. If the field is
 *  present, the corresponding feature applies to the site. The field is returned as an
 *  empty element (e.g., a boolean value is not returned).
 * XSD Type: CompatibleVehicleTypeDefinitionType
 */
class CompatibleVehicleTypeDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\CompatibleVehicleTypeDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
