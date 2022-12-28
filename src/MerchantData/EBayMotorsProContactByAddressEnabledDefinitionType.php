<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing EBayMotorsProContactByAddressEnabledDefinitionType
 *
 * Indicates whether the site supports the use of a company address when contacting the
 *  seller about eBay Motors Classified Ad listings. This feature is only
 *  applicable for eBay Motors Pro users.
 * XSD Type: eBayMotorsProContactByAddressEnabledDefinitionType
 */
class EBayMotorsProContactByAddressEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
