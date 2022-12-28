<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MaxFlatShippingCostDefinitionType
 *
 * Type used by the <b>MaxFlatShippingCost</b> field that is returned under the <b>FeatureDefinitions</b> container. The <b>MaxFlatShippingCost</b> field is returned as empty and indicates that a maximum flat-rate shipping cost threshold is enforced for some categories on the corresponding eBay site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <b>MaxFlatShippingCost</b> is not one of the values passed into those <b>FeatureID</b> fields.
 * XSD Type: MaxFlatShippingCostDefinitionType
 */
class MaxFlatShippingCostDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
