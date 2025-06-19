<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketAdFormatEnabledDefinitionType
 *
 * Defines the AdFormatEnabled feature. If the field is present, the corresponding feature applies to the category. This field is returned as an empty element (e.g., a boolean value is not returned).
 *  Added for Local Market users.
 * XSD Type: LocalMarketAdFormatEnabledDefinitionType
 */
class LocalMarketAdFormatEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\LocalMarketAdFormatEnabledDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
