<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SpecialitySubscriptionDefinitionType
 *
 * Indicates category support for listing of Local Market items by sellers
 *  subscribed to Local Market for Specialty Vehicles.
 *  Each of the subscriptions will have following options, which will define
 *  "National" vs "Local" ad format listing.
 *  "LocalOptional" : This will allow national and local listing.
 *  "LocalOnly" : Seller can have Local listings only.
 *  "NationalOnly" : Seller can not opt into local only exposure. It has to be
 *  national listing.
 * XSD Type: SpecialitySubscriptionDefinitionType
 */
class SpecialitySubscriptionDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SpecialitySubscriptionDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
