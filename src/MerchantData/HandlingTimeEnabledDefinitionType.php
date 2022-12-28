<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing HandlingTimeEnabledDefinitionType
 *
 * Defines the feature that specifies whether a handling time (dispatch time)
 *  could be enabled on the site.
 * XSD Type: HandlingTimeEnabledDefinitionType
 */
class HandlingTimeEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
