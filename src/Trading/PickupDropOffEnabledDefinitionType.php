<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PickupDropOffEnabledDefinitionType
 *
 * The <b>PickupDropOffEnabled</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the "Click and Collect" feature. This field will be returned as long as 'PickupDropOffEnabled' is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
 *  <br/><br/>
 *  The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
 *  <br/><br/>
 *  To verify if a specific category supports the the "Click and Collect" feature, pass in a <b>CategoryID</b> value in the request, and then look for a 'true' value in the <b>PickupDropOffEnabled</b> field of the corresponding Category node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
 *  </span>
 * XSD Type: PickupDropOffEnabledDefinitionType
 */
class PickupDropOffEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
