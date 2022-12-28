<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing EBayMotorsProCounterOfferEnabledDefinitionType
 *
 * Type defining the <b>eBayMotorsProCounterOfferEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container if <code>eBayMotorsProCounterOfferEnabled</code> is used as a <b>FeatureID</b> value in the request, or if no <b>FeatureID</b> values are used in the request. This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for eBay Motors Classified Ad listings. Only eBay Motors Pro users are eligible to use eBay Motors Classified Ad listings.
 *  <br/><br/>
 *  To verify if a specific eBay site supports counter offers to Best Offers for eBay Motors Classified Ad listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.eBayMotorsProCounterOfferEnabled</b> field.
 *  <br/><br/>
 *  To verify if a specific category on a specific eBay site supports counter offers to Best Offers for eBay Motors Classified Ad listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>eBayMotorsProCounterOfferEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
 * XSD Type: eBayMotorsProCounterOfferEnabledDefinitionType
 */
class EBayMotorsProCounterOfferEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
