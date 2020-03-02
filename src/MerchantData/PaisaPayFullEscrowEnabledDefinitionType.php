<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PaisaPayFullEscrowEnabledDefinitionType
 *
 * This type is no longer applicable/used, as the the Paisa Pay Escrow payment feature was only applicable to the eBay India site, and this site is no longer a functional eBay marketplace for sellers.
 * XSD Type: PaisaPayFullEscrowEnabledDefinitionType
 */
class PaisaPayFullEscrowEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
