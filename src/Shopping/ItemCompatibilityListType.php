<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemCompatibilityListType
 *
 * A list of vehicles that are compatible with a motor vehicle part or accessory. Describes assemblies with which a part is compatible (i.e., compatibility by application). For example, to specify a part's compatibility with a vehicle, the name would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values describe the specific vehicle, such as a 2006 Honda Accord.
 *  <br><br>
 *  The <b>ItemCompatibilityList</b> container will only be returned if a parts compatibility list exists for the listing, and the <b>IncludeSelector </b>field is included and set to <code>Compatibility</code>
 * XSD Type: ItemCompatibilityListType
 */
class ItemCompatibilityListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A <b>Compatibility</b> container is returned for each motor vehicle that is compatible with the motor vehicle part or accessory. The Year, Make, Model, Trim, and Engine type of the vehicle is expressed through name-value pairs, and notes about compatibility (if available/applicable) is expressed through the <b>CompatibilityNotes</b> field.
     *
     * @var \Nogrod\eBaySDK\Shopping\ItemCompatibilityType[] $compatibility
     */
    private $compatibility = [
        
    ];

    /**
     * Adds as compatibility
     *
     * A <b>Compatibility</b> container is returned for each motor vehicle that is compatible with the motor vehicle part or accessory. The Year, Make, Model, Trim, and Engine type of the vehicle is expressed through name-value pairs, and notes about compatibility (if available/applicable) is expressed through the <b>CompatibilityNotes</b> field.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\ItemCompatibilityType $compatibility
     */
    public function addToCompatibility(\Nogrod\eBaySDK\Shopping\ItemCompatibilityType $compatibility)
    {
        $this->compatibility[] = $compatibility;
        return $this;
    }

    /**
     * isset compatibility
     *
     * A <b>Compatibility</b> container is returned for each motor vehicle that is compatible with the motor vehicle part or accessory. The Year, Make, Model, Trim, and Engine type of the vehicle is expressed through name-value pairs, and notes about compatibility (if available/applicable) is expressed through the <b>CompatibilityNotes</b> field.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompatibility($index)
    {
        return isset($this->compatibility[$index]);
    }

    /**
     * unset compatibility
     *
     * A <b>Compatibility</b> container is returned for each motor vehicle that is compatible with the motor vehicle part or accessory. The Year, Make, Model, Trim, and Engine type of the vehicle is expressed through name-value pairs, and notes about compatibility (if available/applicable) is expressed through the <b>CompatibilityNotes</b> field.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompatibility($index)
    {
        unset($this->compatibility[$index]);
    }

    /**
     * Gets as compatibility
     *
     * A <b>Compatibility</b> container is returned for each motor vehicle that is compatible with the motor vehicle part or accessory. The Year, Make, Model, Trim, and Engine type of the vehicle is expressed through name-value pairs, and notes about compatibility (if available/applicable) is expressed through the <b>CompatibilityNotes</b> field.
     *
     * @return \Nogrod\eBaySDK\Shopping\ItemCompatibilityType[]
     */
    public function getCompatibility()
    {
        return $this->compatibility;
    }

    /**
     * Sets a new compatibility
     *
     * A <b>Compatibility</b> container is returned for each motor vehicle that is compatible with the motor vehicle part or accessory. The Year, Make, Model, Trim, and Engine type of the vehicle is expressed through name-value pairs, and notes about compatibility (if available/applicable) is expressed through the <b>CompatibilityNotes</b> field.
     *
     * @param \Nogrod\eBaySDK\Shopping\ItemCompatibilityType[] $compatibility
     * @return self
     */
    public function setCompatibility(array $compatibility)
    {
        $this->compatibility = $compatibility;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCompatibility();
        if (null !== $value && !empty($this->getCompatibility())) {
            $writer->write(array_map(function ($v) {
                return ["Compatibility" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Compatibility', true);
        if (null !== $value && !empty($value)) {
            $this->setCompatibility(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\ItemCompatibilityType::fromKeyValue($v);
            }, $value));
        }
    }
}
