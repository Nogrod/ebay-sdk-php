<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing EpidSupportedDefinitionType
 *
 * Type defining the <b>EpidSupported</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>EpidSupported</b> is included as a <b>FeatureID</b> value in the call request, or no <b>FeatureID</b> values are passed into the call request). The <b>EpidSupported</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support specifying parts compatibility through an eBay product ID (ePID).
 *  <br><br>
 *  At this time, this feature is only supported for motorcycle and scooter listings on the Germany and UK sites.
 *  <br><br>
 *  To verify if a specific category supports specifying parts compatibility through an ePID, pass in a <b>EpidSupported</b> value in the request, and then look for a <code>true</code> value in the <b>EpidSupported</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one category ID was passed in the request).
 * XSD Type: EpidSupportedDefinitionType
 */
class EpidSupportedDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
