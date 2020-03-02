<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ConditionEnabledDefinitionType
 *
 * Type defining the <b>ConditionEnabled</b> field that is
 *  returned under the <b>FeatureDefinitions</b> container of the
 *  <b>GetCategoryFeatures</b> response (as long as
 *  'ConditionEnabled' is included as a <b>FeatureID</b> value in
 *  the call request or no <b>FeatureID</b> values are passed into the call
 *  request). This field is returned as an
 *  empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 *  support the use of Condition IDs to express the condition of an item.
 *  <br/><br/>
 *  To verify if a specific eBay site supports Condition IDs (for most
 *  categories), look for a 'Enabled' value in the
 *  <b>SiteDefaults.ConditionEnabled</b> field.
 *  <br/><br/>
 *  To verify if a specific category on a specific eBay site supports Condition IDs, pass in a <b>CategoryID</b> value in the request, and then
 *  look for an 'Enabled' or 'Required' value in the <b>ConditionEnabled</b> field
 *  of the corresponding Category node (match up the <b>CategoryID</b> values
 *  if more than one Category IDs were passed in the request).
 * XSD Type: ConditionEnabledDefinitionType
 */
class ConditionEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
