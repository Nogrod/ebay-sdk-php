<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharacteristicsSetType
 *
 * This type is deprecated.
 * XSD Type: CharacteristicsSetType
 */
class CharacteristicsSetType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This field is deprecated.
     *
     * @var int $attributeSetID
     */
    private $attributeSetID = null;

    /**
     * This field is deprecated.
     *
     * @var string $attributeSetVersion
     */
    private $attributeSetVersion = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CharacteristicType[] $characteristics
     */
    private $characteristics = [
        
    ];

    /**
     * Gets as name
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This field is deprecated.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as attributeSetID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }

    /**
     * Sets a new attributeSetID
     *
     * This field is deprecated.
     *
     * @param int $attributeSetID
     * @return self
     */
    public function setAttributeSetID($attributeSetID)
    {
        $this->attributeSetID = $attributeSetID;
        return $this;
    }

    /**
     * Gets as attributeSetVersion
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getAttributeSetVersion()
    {
        return $this->attributeSetVersion;
    }

    /**
     * Sets a new attributeSetVersion
     *
     * This field is deprecated.
     *
     * @param string $attributeSetVersion
     * @return self
     */
    public function setAttributeSetVersion($attributeSetVersion)
    {
        $this->attributeSetVersion = $attributeSetVersion;
        return $this;
    }

    /**
     * Adds as characteristics
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CharacteristicType $characteristics
     */
    public function addToCharacteristics(\Nogrod\eBaySDK\Trading\CharacteristicType $characteristics)
    {
        $this->characteristics[] = $characteristics;
        return $this;
    }

    /**
     * isset characteristics
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristics($index)
    {
        return isset($this->characteristics[$index]);
    }

    /**
     * unset characteristics
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristics($index)
    {
        unset($this->characteristics[$index]);
    }

    /**
     * Gets as characteristics
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CharacteristicType[]
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Sets a new characteristics
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\CharacteristicType[] $characteristics
     * @return self
     */
    public function setCharacteristics(array $characteristics)
    {
        $this->characteristics = $characteristics;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getAttributeSetID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeSetID", $value);
        }
        $value = $this->getAttributeSetVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeSetVersion", $value);
        }
        $value = $this->getCharacteristics();
        if (null !== $value && !empty($this->getCharacteristics())) {
            $writer->write(array_map(function ($v) {
                return ["Characteristics" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSetID');
        if (null !== $value) {
            $this->setAttributeSetID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSetVersion');
        if (null !== $value) {
            $this->setAttributeSetVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Characteristics', true);
        if (null !== $value && !empty($value)) {
            $this->setCharacteristics(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CharacteristicType::fromKeyValue($v);
            }, $value));
        }
    }
}
