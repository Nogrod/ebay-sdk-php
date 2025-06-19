<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing EBayMotorsProCompanyNameEnabledDefinitionType
 *
 * Indicates whether the site supports the use of a company name
 *  when contacting the seller about eBay Motors Classified Ad listings.
 *  This feature is only applicable for eBay Motors Pro users.
 * XSD Type: eBayMotorsProCompanyNameEnabledDefinitionType
 */
class EBayMotorsProCompanyNameEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\EBayMotorsProCompanyNameEnabledDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
