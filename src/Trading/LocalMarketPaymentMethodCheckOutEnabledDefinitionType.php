<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketPaymentMethodCheckOutEnabledDefinitionType
 *
 * Indicates whether the category supports the use of payment method checkOut
 *  for Classified Ad format listings. Added for Local market users.
 * XSD Type: LocalMarketPaymentMethodCheckOutEnabledDefinitionType
 */
class LocalMarketPaymentMethodCheckOutEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\LocalMarketPaymentMethodCheckOutEnabledDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
