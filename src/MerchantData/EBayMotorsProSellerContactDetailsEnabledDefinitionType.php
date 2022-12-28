<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing EBayMotorsProSellerContactDetailsEnabledDefinitionType
 *
 * This field is returned (as an empty element) if the site supports contacting
 *  the seller for a Classified Ad listings.
 *  This is for EbayMotors Pro users only.
 * XSD Type: eBayMotorsProSellerContactDetailsEnabledDefinitionType
 */
class EBayMotorsProSellerContactDetailsEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
