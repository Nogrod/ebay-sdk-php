<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UnitInfoType
 *
 * This type provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
 * XSD Type: UnitInfoType
 */
class UnitInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Designation of size, weight, volume or count to be used to specify the unit quantity of the item. This value can be one of the following:
     *  <br/>
     *  <pre> Kg 100g 10g L 100ml 10ml M M2 M3 Unit </pre>
     *  With <b>GetItem</b>, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
     *
     * @var string $unitType
     */
    private $unitType = null;

    /**
     * Number of units of size, weight, volume or count of the specified unit type for the item. eBay divides the item price by this number to get the price per unit to be displayed in the item listing for comparison purposes.
     *  <br/><br/>
     *  With GetItem, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
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
     *  With <b>GetItem</b>, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
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
     *  With <b>GetItem</b>, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
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
     *  With GetItem, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
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
     *  With GetItem, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->unitType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UnitType', null, (string) $value);
        }
        $value = $this->unitQuantity;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UnitQuantity', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\UnitInfoType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
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
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'UnitType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->unitType = $value;
                    }
                    return true;
                case 'UnitQuantity':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->unitQuantity = (float) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['UnitType'] = $this->unitType;
        $data['UnitQuantity'] = $this->unitQuantity;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
