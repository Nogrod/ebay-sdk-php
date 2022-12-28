<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ClassifiedAdContactByPhoneEnabledDefinitionType
 *
 * Indicates whether the telephone can be a contact method for the category.
 * XSD Type: ClassifiedAdContactByPhoneEnabledDefinitionType
 */
class ClassifiedAdContactByPhoneEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
