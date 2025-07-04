<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MaxGranularFitmentCountDefinitionType
 *
 * Type used by the <b>MaxGranularFitmentCount</b> field that is returned under the <b>FeatureDefinitions</b> container. The <b>MaxGranularFitmentCount</b> field is returned as empty and indicates that a maximum parts compatibility threshold is applicable to some motor vehicle parts and accessory categories on the corresponding eBay site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <b>MaxGranularFitmentCount</b> is not one of the values passed into those <b>FeatureID</b> fields.
 * XSD Type: MaxGranularFitmentCountDefinitionType
 */
class MaxGranularFitmentCountDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MaxGranularFitmentCountDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
