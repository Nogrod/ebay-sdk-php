<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DomesticRefundMethodDefinitionType
 *
 * On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account API.
 * XSD Type: DomesticRefundMethodDefinitionType
 */
class DomesticRefundMethodDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
