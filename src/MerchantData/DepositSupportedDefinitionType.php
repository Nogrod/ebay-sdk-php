<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DepositSupportedDefinitionType
 *
 * If present, the site defines category settings for whether the seller can specify a vehicle deposit for US eBay Motors listings.
 * XSD Type: DepositSupportedDefinitionType
 */
class DepositSupportedDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
