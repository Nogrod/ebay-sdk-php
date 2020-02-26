<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ProximitySearchDetailsType
 *
 * Contains information for use in proximity search.
 * XSD Type: ProximitySearchDetailsType
 */
class ProximitySearchDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Not returned with compatibility level 483 and higher.
     *  Remove application dependencies on this element.
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * Gets as postalCode
     *
     * Not returned with compatibility level 483 and higher.
     *  Remove application dependencies on this element.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * Not returned with compatibility level 483 and higher.
     *  Remove application dependencies on this element.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostalCode", $value);
        }
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
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
