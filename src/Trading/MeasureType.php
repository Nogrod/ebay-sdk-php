<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MeasureType
 *
 * Basic type for specifying measures and the system of measurement.
 *  A decimal value (e.g., 10.25) is meaningful
 *  as a measure when accompanied by a definition of the unit of measure (e.g., Pounds),
 *  in which case the value specifies the quantity of that unit.
 *  A MeasureType expresses both the value (a decimal) and, optionally, the unit and
 *  the system of measurement.
 *  Details such as shipping weights are specified as measure types.
 * XSD Type: MeasureType
 */
class MeasureType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * Unit of measure. This attribute is shared by various fields,
     *  representing units such as lbs, oz, kg, g, in, cm.
     *  <br><br>
     *  For weight, English major/minor units are pounds and ounces,
     *  and metric major/minor units are kilograms and grams.
     *  For length, the English unit is inches, and metric unit is centimeters.
     *  <br><br>
     *  To get the full list of package dimension and weight measurement units
     *  (and all alternative spellings and abbreviations) supported by your site,
     *  call <b>GeteBayDetails</b>.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * The system of measurement (e.g., English).
     *
     * @var string $measurementSystem
     */
    private $measurementSystem = null;

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
     * Unit of measure. This attribute is shared by various fields,
     *  representing units such as lbs, oz, kg, g, in, cm.
     *  <br><br>
     *  For weight, English major/minor units are pounds and ounces,
     *  and metric major/minor units are kilograms and grams.
     *  For length, the English unit is inches, and metric unit is centimeters.
     *  <br><br>
     *  To get the full list of package dimension and weight measurement units
     *  (and all alternative spellings and abbreviations) supported by your site,
     *  call <b>GeteBayDetails</b>.
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
     * Unit of measure. This attribute is shared by various fields,
     *  representing units such as lbs, oz, kg, g, in, cm.
     *  <br><br>
     *  For weight, English major/minor units are pounds and ounces,
     *  and metric major/minor units are kilograms and grams.
     *  For length, the English unit is inches, and metric unit is centimeters.
     *  <br><br>
     *  To get the full list of package dimension and weight measurement units
     *  (and all alternative spellings and abbreviations) supported by your site,
     *  call <b>GeteBayDetails</b>.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as measurementSystem
     *
     * The system of measurement (e.g., English).
     *
     * @return string
     */
    public function getMeasurementSystem()
    {
        return $this->measurementSystem;
    }

    /**
     * Sets a new measurementSystem
     *
     * The system of measurement (e.g., English).
     *
     * @param string $measurementSystem
     * @return self
     */
    public function setMeasurementSystem($measurementSystem)
    {
        $this->measurementSystem = $measurementSystem;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getUnit();
        if (null !== $value) {
            $writer->writeAttribute("unit", $value);
        }
        $value = $this->getMeasurementSystem();
        if (null !== $value) {
            $writer->writeAttribute("measurementSystem", $value);
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
}
