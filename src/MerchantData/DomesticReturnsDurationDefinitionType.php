<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DomesticReturnsDurationDefinitionType
 *
 * The values returned in this field indicate the return-duration options that are available for domestic returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
 * XSD Type: DomesticReturnsDurationDefinitionType
 */
class DomesticReturnsDurationDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
