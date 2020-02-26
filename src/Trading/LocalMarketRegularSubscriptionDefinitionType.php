<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketRegularSubscriptionDefinitionType
 *
 * Defines the LocalMarketRegularSubscription feature. If this field
 *  is present, the corresponding feature applies to the category. The
 *  field is returned as an empty element (i.e., a boolean value is not
 *  returned). A subscription for Local Market for Vehicles will be
 *  returned by GetUser if a dealer has subscribed to any of the following
 *  Local Market Regular sub-types: Vehicles Regular Six Months,
 *  Vehicles Regular Special Promotion, Vehicles Regular Multistore
 *  Level S, Vehicles Regular Multistore Level M, or Vehicles Regular
 *  Multistore Level L. Each of these sub-types has a separate discount
 *  and billing cycle.
 * XSD Type: LocalMarketRegularSubscriptionDefinitionType
 */
class LocalMarketRegularSubscriptionDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
