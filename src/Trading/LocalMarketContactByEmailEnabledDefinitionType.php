<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketContactByEmailEnabledDefinitionType
 *
 * Indicates whether the category supports the use of email to contact the
 *  seller for Classified Ad format listings.Added for Local market users.
 * XSD Type: LocalMarketContactByEmailEnabledDefinitionType
 */
class LocalMarketContactByEmailEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
