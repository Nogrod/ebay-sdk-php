<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ISBNEnabledDefinitionType
 *
 * Type defining the <b>ISBNEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as 'ISBNEnabled' is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request). This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the ISBN product identifying feature.
 *  <br><br>
 *  To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a 'true' value in the <b>SiteDefaults.ISBNEnabled</b> field.
 *  <br><br>
 *  To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
 * XSD Type: ISBNEnabledDefinitionType
 */
class ISBNEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ISBNEnabledDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
