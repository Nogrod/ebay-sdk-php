<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketPhoneCountDefinitionType
 *
 * Indicates which phone option the category supports when contacting
 *  the seller about listings in Classified Ad format.
 *  Added for Local Market users.
 * XSD Type: LocalMarketPhoneCountDefinitionType
 */
class LocalMarketPhoneCountDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\LocalMarketPhoneCountDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
