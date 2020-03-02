<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FreeGalleryPlusEnabledDefinitionType
 *
 * Type defining the <b>FreeGalleryPlusEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <code>FreeGalleryPlusEnabled</code> is included as a <b>FeatureID</b> value in the call request, or no <b>FeatureID</b> values are passed into the call request). This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Free Gallery Plus feature for one or multiple categories.
 * XSD Type: FreeGalleryPlusEnabledDefinitionType
 */
class FreeGalleryPlusEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
