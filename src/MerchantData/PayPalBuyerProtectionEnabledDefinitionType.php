<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PayPalBuyerProtectionEnabledDefinitionType
 *
 * Defines the PayPal Buyer Protection feature.
 *  If the field is present, the corresponding feature applies to the category.
 *  The field is returned as an empty element (i.e., a boolean value is not returned).
 *  <br><br>
 *  <span class="tablenote"><b>Note: </b> Although the <b>PayPalBuyerProtectionEnabled</b> field is still being returned for now, PayPal Purchase Protection is no longer a feature on any eBay marketplace.
 *  </span>
 * XSD Type: PayPalBuyerProtectionEnabledDefinitionType
 */
class PayPalBuyerProtectionEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
