<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing EBayMotorsProPhoneCountDefinitionType
 *
 * Indicates which phone option the site supports
 *  for contacting the seller about Classified Ad format listings.
 *  Added for EbayMotors Pro users.
 * XSD Type: eBayMotorsProPhoneCountDefinitionType
 */
class EBayMotorsProPhoneCountDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\EBayMotorsProPhoneCountDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
