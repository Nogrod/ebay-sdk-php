<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalListingDistancesSpecialtyDefinitionType
 *
 * Defines the LocalListingDistancesSpecialty feature. This feature displays the supported local listing
 *  distances for items listed by sellers subscribed to Local Market for Specialty Vehicles.
 * XSD Type: LocalListingDistancesSpecialtyDefinitionType
 */
class LocalListingDistancesSpecialtyDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\LocalListingDistancesSpecialtyDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
