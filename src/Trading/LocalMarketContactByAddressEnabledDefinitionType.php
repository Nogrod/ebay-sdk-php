<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketContactByAddressEnabledDefinitionType
 *
 * Indicates whether the category supports using an address when
 *  contacting the seller for Classified Ad format listings.
 *  Added for Local Market users.
 * XSD Type: LocalMarketContactByAddressEnabledDefinitionType
 */
class LocalMarketContactByAddressEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
