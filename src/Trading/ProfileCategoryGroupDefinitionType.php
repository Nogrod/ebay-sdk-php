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

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
