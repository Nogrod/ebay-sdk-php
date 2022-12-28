<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ClassifiedAdStreetCountDefinitionType
 *
 * Indicates which address option the category supports for
 *  Classified Ad format listings.
 *  Added for the For Sale By Owner format.
 * XSD Type: ClassifiedAdStreetCountDefinitionType
 */
class ClassifiedAdStreetCountDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
