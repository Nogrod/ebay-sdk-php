<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing DistanceType
 *
 * Distance, used for local searches.
 * XSD Type: Distance
 */
class DistanceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * Unit of measure used in a distance calculation. Units can be in either
     *  kilometers or miles, depending on the Global ID.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as unit
     *
     * Unit of measure used in a distance calculation. Units can be in either
     *  kilometers or miles, depending on the Global ID.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Unit of measure used in a distance calculation. Units can be in either
     *  kilometers or miles, depending on the Global ID.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getUnit();
        if (null !== $value) {
            $writer->writeAttribute("unit", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self($keyValue);
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
