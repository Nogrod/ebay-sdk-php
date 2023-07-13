<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PayPalRequiredDefinitionType
 *
 * Defines the PayPal Required feature. If the field is
 *  present, the corresponding feature applies to the category. The field is returned
 *  as an empty element (i.e., a boolean value is not returned).
 *  <br><br>
 *  <span class="tablenote"><b>Note: </b> Although the <b>PayPalRequired</b> field is still being returned for now, sellers never need to set the available electronic payments, and PayPal will never be required on any eBay marketplace.
 *  </span>
 * XSD Type: PayPalRequiredDefinitionType
 */
class PayPalRequiredDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
