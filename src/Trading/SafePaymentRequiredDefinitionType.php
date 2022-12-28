<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SafePaymentRequiredDefinitionType
 *
 * For the US, Canada and Australia sites, users are
 *  required to offer at least one safe payment method.
 *  <br><br>
 *  If a seller has a 'SafePaymentExempt' status, they are exempt from the category
 *  requirement to offer at least one safe payment method when listing an item on a
 *  site that has the safe payment requirement.
 *  <br><br>
 *  <span class="tablenote"><b>Note: </b> Although the <b>SafePaymentRequired</b> field is still being returned for now, sellers never need to set the available electronic payments, so this requirement is no longer applicable.
 *  </span>
 * XSD Type: SafePaymentRequiredDefinitionType
 */
class SafePaymentRequiredDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
