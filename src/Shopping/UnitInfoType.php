<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UnitInfoType
 *
 * This type provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
 * XSD Type: UnitInfoType
 */
class UnitInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Designation of size, weight, volume or count to be used to specify the unit quantity of the item. This value can be one of the following:
     *  <br/>
     *  <pre> Kg 100g 10g L 100ml 10ml M M2 M3 Unit </pre>
     *  This field is returned only when you provide <strong>IncludeSelector</strong> in the request and set it to <code>ItemSpecifics</code>.
     *
     * @var string $unitType
     */
    private $unitType = null;

    /**
     * Number of units of size, weight, volume or count of the specified unit type for the item. eBay divides the item price by this number to get the price per unit to be displayed in the item listing for comparison purposes.
     *  <br/><br/>
     *  This field is returned only when you provide <strong>IncludeSelector</strong> in the request and set it to <code>ItemSpecifics</code>.
     *
     * @var float $unitQuantity
     */
    private $unitQuantity = null;

    /**
     * Gets as unitType
     *
     * Designation of size, weight, volume or count to be used to specify the unit quantity of the item. This value can be one of the following:
     *  <br/>
     *  <pre> Kg 100g 10g L 100ml 10ml M M2 M3 Unit </pre>
     *  This field is returned only when you provide <strong>IncludeSelector</strong> in the request and set it to <code>ItemSpecifics</code>.
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * Sets a new unitType
     *
     * Designation of size, weight, volume or count to be used to specify the unit quantity of the item. This value can be one of the following:
     *  <br/>
     *  <pre> Kg 100g 10g L 100ml 10ml M M2 M3 Unit </pre>
     *  This field is returned only when you provide <strong>IncludeSelector</strong> in the request and set it to <code>ItemSpecifics</code>.
     *
     * @param string $unitType
     * @return self
     */
    public function setUnitType($unitType)
    {
        $this->unitType = $unitType;
        return $this;
    }

    /**
     * Gets as unitQuantity
     *
     * Number of units of size, weight, volume or count of the specified unit type for the item. eBay divides the item price by this number to get the price per unit to be displayed in the item listing for comparison purposes.
     *  <br/><br/>
     *  This field is returned only when you provide <strong>IncludeSelector</strong> in the request and set it to <code>ItemSpecifics</code>.
     *
     * @return float
     */
    public function getUnitQuantity()
    {
        return $this->unitQuantity;
    }

    /**
     * Sets a new unitQuantity
     *
     * Number of units of size, weight, volume or count of the specified unit type for the item. eBay divides the item price by this number to get the price per unit to be displayed in the item listing for comparison purposes.
     *  <br/><br/>
     *  This field is returned only when you provide <strong>IncludeSelector</strong> in the request and set it to <code>ItemSpecifics</code>.
     *
     * @param float $unitQuantity
     * @return self
     */
    public function setUnitQuantity($unitQuantity)
    {
        $this->unitQuantity = $unitQuantity;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUnitType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnitType", $value);
        }
        $value = $this->getUnitQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnitQuantity", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnitType');
        if (null !== $value) {
            $this->setUnitType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnitQuantity');
        if (null !== $value) {
            $this->setUnitQuantity($value);
        }
    }
}
