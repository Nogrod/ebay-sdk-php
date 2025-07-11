<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalListingDistancesNonSubscriptionDefinitionType
 *
 * Defines the LocalListingDistancesNonSubscription feature. This feature displays all the supported local
 *  listing distances for items listed by sellers who have not subscribed to either Local Market for Vehicles
 *  or Local Market for Specialty Vehicles.
 * XSD Type: LocalListingDistancesNonSubscriptionDefinitionType
 */
class LocalListingDistancesNonSubscriptionDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\LocalListingDistancesNonSubscriptionDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
