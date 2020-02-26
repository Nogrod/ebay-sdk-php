<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing UnitPriceInfoType
 *
 * This type contains the type (e.g kg,lb) and quantity of the unit.
 * XSD Type: UnitPriceInfo
 */
class UnitPriceInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}type", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}quantity", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}type');
        if (null !== $value) {
            $this->setType($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}quantity');
        if (null !== $value) {
            $this->setQuantity($value);
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
