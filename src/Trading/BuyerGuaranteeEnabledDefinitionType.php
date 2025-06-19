<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BuyerGuaranteeEnabledDefinitionType
 *
 * Type defining the <b>BuyerGuaranteeEnabled</b> field that is
 *  returned under the <b>FeatureDefinitions</b> container of the
 *  <b>GetCategoryFeatures</b> response (as long as
 *  <code>BuyerGuaranteeEnabled</code> is included as a <b>FeatureID</b> value in
 *  the call request or no <b>FeatureID</b> values are passed into the call
 *  request). This field is returned as an
 *  empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 *  support the Buyer Guarantee feature.
 *  <br/><br/>
 *  To verify if a specific eBay site supports the Buyer Guarantee feature (for most
 *  categories), look for a <code>true</code> value in the
 *  <b>SiteDefaults.BuyerGuaranteeEnabled</b> field.
 *  <br/><br/>
 *  To verify if a specific category on a specific eBay site supports the Buyer Guarantee feature, pass in a <b>CategoryID</b> value in the request, and then
 *  look for a <code>true</code> value in the <b>BuyerGuaranteeEnabled</b> field
 *  of the corresponding Category node (match up the <b>CategoryID</b> values
 *  if more than one Category IDs were passed in the request).
 * XSD Type: BuyerGuaranteeEnabledDefinitionType
 */
class BuyerGuaranteeEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\BuyerGuaranteeEnabledDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
