<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DomesticReturnsAcceptedDefinitionType
 *
 * The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
 * XSD Type: DomesticReturnsAcceptedDefinitionType
 */
class DomesticReturnsAcceptedDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
