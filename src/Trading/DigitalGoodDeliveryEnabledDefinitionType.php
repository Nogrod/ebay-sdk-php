<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DigitalGoodDeliveryEnabledDefinitionType
 *
 * Type defining the <b>DigitalGoodDeliveryEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>DigitalGoodDeliveryEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request). The <b>DigitalGoodDeliveryEnabled</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support digital gift card listings.
 *  <br><br>
 *  To verify if a specific eBay site supports digital gift card listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field.
 *  <br><br>
 *  To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>DigitalGoodDeliveryEnabled</b> value in the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one category ID was passed in the request).
 * XSD Type: DigitalGoodDeliveryEnabledDefinitionType
 */
class DigitalGoodDeliveryEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
