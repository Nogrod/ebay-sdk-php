<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DomesticReturnsShipmentPayeeDefinitionType
 *
 * The values returned in this field indicate the available options for who pays the return shipping for domestic returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
 * XSD Type: DomesticReturnsShipmentPayeeDefinitionType
 */
class DomesticReturnsShipmentPayeeDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\DomesticReturnsShipmentPayeeDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
