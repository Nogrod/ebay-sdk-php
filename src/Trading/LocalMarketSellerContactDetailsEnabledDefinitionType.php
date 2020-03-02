<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketSellerContactDetailsEnabledDefinitionType
 *
 * Defines the SellerContactDetailsEnabled feature. If the field is
 *  present, the category allows retrieval of seller-level contact
 *  information. The field is returned as an empty element
 *  (e.g., a boolean value is not returned).
 *  Added for Local Market users.
 * XSD Type: LocalMarketSellerContactDetailsEnabledDefinitionType
 */
class LocalMarketSellerContactDetailsEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
