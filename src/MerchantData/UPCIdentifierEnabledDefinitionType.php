<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing UPCIdentifierEnabledDefinitionType
 *
 * This type is deprecated and has been replaced by <b>UPCEnabledDefinitionType</b>.
 * XSD Type: UPCIdentifierEnabledDefinitionType
 */
class UPCIdentifierEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
