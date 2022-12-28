<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing VINSupportedDefinitionType
 *
 * If present, the site defines category settings for when the seller
 *  can provide a Vehicle Identification Number (VIN) for
 *  US, CA, and CAFR eBay Motors sites. VIN is required for cars and trucks
 *  from model year 1981 and later. (The US developed national standards for VIN
 *  values as of 1981.)
 * XSD Type: VINSupportedDefinitionType
 */
class VINSupportedDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
