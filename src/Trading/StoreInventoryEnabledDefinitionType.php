<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreInventoryEnabledDefinitionType
 *
 * This type is no longer applicable, as Store Inventory is no longer a supported eBay listing type.
 * XSD Type: StoreInventoryEnabledDefinitionType
 */
class StoreInventoryEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
