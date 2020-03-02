<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerProvidedTitleSupportedDefinitionType
 *
 * If present, the site defines category settings for whether the seller can provide their own title for a US or CA eBay Motors listing.
 * XSD Type: SellerProvidedTitleSupportedDefinitionType
 */
class SellerProvidedTitleSupportedDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
