<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketShippingMethodEnabledDefinitionType
 *
 * Indicates if shipping options are available for Classified Ad
 *  format listings in the category.
 *  Added for Local Market users.
 * XSD Type: LocalMarketShippingMethodEnabledDefinitionType
 */
class LocalMarketShippingMethodEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
