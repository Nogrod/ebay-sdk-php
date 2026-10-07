<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
        $value = $this->unit;
        if (null !== $value) {
            $writer->writeAttribute('unit', (string) $value);
        }
        $value = $this->measurementSystem;
        if (null !== $value) {
            $writer->writeAttribute('measurementSystem', (string) $value);
        }
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->__value;
        if (null !== $value) {
            $writer->text((string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MeasureType
    {
        $self = new self(null);
        $self->xmlInitLists();
        $value = Func::readValue($reader, $self);
        if ('' !== $value) {
            $self->value((float) $value);
        }
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        switch ($reader->localName) {
            case 'unit':
                $this->unit = $reader->value;
                return true;
            case 'measurementSystem':
                $this->measurementSystem = $reader->value;
                return true;
        }
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        return false;
    }
}
