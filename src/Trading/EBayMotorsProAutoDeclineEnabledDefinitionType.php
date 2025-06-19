<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing EBayMotorsProAutoDeclineEnabledDefinitionType
 *
 * Type defining the <b>eBayMotorsProAutoAcceptEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container if <code>eBayMotorsProAutoDeclineEnabled</code> is used as a <b>FeatureID</b> value in the request, or if no <b>FeatureID</b> values are used in the request. This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for eBay Motors Classified Ad listings. Only eBay Motors Pro users are eligible to use eBay Motors Classified Ad listings.
 *  <br/><br/>
 *  To verify if a specific eBay site supports the Best Offer Auto-Decline feature for eBay Motors Classified Ad listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.eBayMotorsProAutoDeclineEnabled</b> field.
 *  <br/><br/>
 *  To verify if a specific category on a specific eBay site supports the Best Offer Auto-Decline feature for eBay Motors Classified Ad listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>eBayMotorsProAutoDeclineEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
 * XSD Type: eBayMotorsProAutoDeclineEnabledDefinitionType
 */
class EBayMotorsProAutoDeclineEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\EBayMotorsProAutoDeclineEnabledDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
