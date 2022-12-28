<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ProfileCategoryGroupDefinitionType
 *
 * Type defining the <b>PaymentProfileCategoryGroup</b>, <b> ReturnPolicyProfileCategoryGroup</b>, and <b>ShippingProfileCategoryGroup</b> fields, which are all returned in the <b>GetCategoryFeature</b> response if these Business Policies profile types apply to the category. Each of these fields is returned as an empty element.
 * XSD Type: ProfileCategoryGroupDefinitionType
 */
class ProfileCategoryGroupDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
