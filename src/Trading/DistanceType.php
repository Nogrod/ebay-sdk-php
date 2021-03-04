<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DistanceType
 *
 * This type is deprecated.
 * XSD Type: DistanceType
 */
class DistanceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var int $distanceMeasurement
     */
    private $distanceMeasurement = null;

    /**
     * This field is deprecated.
     *
     * @var string $distanceUnit
     */
    private $distanceUnit = null;

    /**
     * Gets as distanceMeasurement
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getDistanceMeasurement()
    {
        return $this->distanceMeasurement;
    }

    /**
     * Sets a new distanceMeasurement
     *
     * This field is deprecated.
     *
     * @param int $distanceMeasurement
     * @return self
     */
    public function setDistanceMeasurement($distanceMeasurement)
    {
        $this->distanceMeasurement = $distanceMeasurement;
        return $this;
    }

    /**
     * Gets as distanceUnit
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDistanceUnit()
    {
        return $this->distanceUnit;
    }

    /**
     * Sets a new distanceUnit
     *
     * This field is deprecated.
     *
     * @param string $distanceUnit
     * @return self
     */
    public function setDistanceUnit($distanceUnit)
    {
        $this->distanceUnit = $distanceUnit;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDistanceMeasurement();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DistanceMeasurement", $value);
        }
        $value = $this->getDistanceUnit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DistanceUnit", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DistanceMeasurement');
        if (null !== $value) {
            $this->setDistanceMeasurement($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DistanceUnit');
        if (null !== $value) {
            $this->setDistanceUnit($value);
        }
    }
}
