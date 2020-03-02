<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CrossBorderTradeAustraliaEnabledDefinitionType
 *
 * Type defining the <b>CrossBorderTradeAustraliaEnabled</b> field that is
 *  returned under the <b>FeatureDefinitions</b> container of the
 *  <b>GetCategoryFeatures</b> response (as long as
 *  'CrossBorderTradeEnabled' is included as a <b>FeatureID</b> value in
 *  the call request or no <b>FeatureID</b> values are passed into the call
 *  request). This field is returned as an
 *  empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 *  support Cross Border Trade listings on the eBay Australia site.
 *  <br/><br/>
 *  To verify if a specific eBay site supports Cross Border Trade listings on the eBay Australia site (for most
 *  categories), look for a 'true' value in the
 *  <b>SiteDefaults.CrossBorderTradeAustraliaEnabled</b> field.
 *  <br/><br/>
 *  To verify if a specific category on a specific eBay site supports Cross Border Trade listings on the eBay Australia site, pass in a <b>CategoryID</b> value in the request, and then
 *  look for a 'true' value in the <b>CrossBorderTradeAustraliaEnabled</b> field
 *  of the corresponding Category node (match up the <b>CategoryID</b> values
 *  if more than one Category IDs were passed in the request).
 * XSD Type: CrossBorderTradeAustraliaEnabledDefinitionType
 */
class CrossBorderTradeAustraliaEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
