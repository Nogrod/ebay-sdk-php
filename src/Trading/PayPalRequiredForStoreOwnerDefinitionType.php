<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PayPalRequiredForStoreOwnerDefinitionType
 *
 * This type is deprecated.
 * XSD Type: PayPalRequiredForStoreOwnerDefinitionType
 */
class PayPalRequiredForStoreOwnerDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PayPalRequiredForStoreOwnerDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
