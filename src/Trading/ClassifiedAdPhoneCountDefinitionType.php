<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ClassifiedAdPhoneCountDefinitionType
 *
 * Indicates which phone option the category supports for contacting
 *  the seller for Classified Ad format listings.
 *  Added for the For Sale By Owner format.
 * XSD Type: ClassifiedAdPhoneCountDefinitionType
 */
class ClassifiedAdPhoneCountDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ClassifiedAdPhoneCountDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
