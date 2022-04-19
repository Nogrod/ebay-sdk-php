<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SearchAttributesType
 *
 * This type is deprecated.
 * XSD Type: SearchAttributesType
 */
class SearchAttributesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var int $attributeID
     */
    private $attributeID = null;

    /**
     * This field is deprecated.
     *
     * @var string $dateSpecifier
     */
    private $dateSpecifier = null;

    /**
     * This field is deprecated.
     *
     * @var string $rangeSpecifier
     */
    private $rangeSpecifier = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ValType[] $valueList
     */
    private $valueList = [

    ];

    /**
     * Gets as attributeID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * This field is deprecated.
     *
     * @param int $attributeID
     * @return self
     */
    public function setAttributeID($attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as dateSpecifier
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDateSpecifier()
    {
        return $this->dateSpecifier;
    }

    /**
     * Sets a new dateSpecifier
     *
     * This field is deprecated.
     *
     * @param string $dateSpecifier
     * @return self
     */
    public function setDateSpecifier($dateSpecifier)
    {
        $this->dateSpecifier = $dateSpecifier;
        return $this;
    }

    /**
     * Gets as rangeSpecifier
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getRangeSpecifier()
    {
        return $this->rangeSpecifier;
    }

    /**
     * Sets a new rangeSpecifier
     *
     * This field is deprecated.
     *
     * @param string $rangeSpecifier
     * @return self
     */
    public function setRangeSpecifier($rangeSpecifier)
    {
        $this->rangeSpecifier = $rangeSpecifier;
        return $this;
    }

    /**
     * Adds as valueList
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ValType $valueList
     */
    public function addToValueList(\Nogrod\eBaySDK\Trading\ValType $valueList)
    {
        $this->valueList[] = $valueList;
        return $this;
    }

    /**
     * isset valueList
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueList($index)
    {
        return isset($this->valueList[$index]);
    }

    /**
     * unset valueList
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueList($index)
    {
        unset($this->valueList[$index]);
    }

    /**
     * Gets as valueList
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ValType[]
     */
    public function getValueList()
    {
        return $this->valueList;
    }

    /**
     * Sets a new valueList
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ValType[] $valueList
     * @return self
     */
    public function setValueList(array $valueList)
    {
        $this->valueList = $valueList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAttributeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeID", $value);
        }
        $value = $this->getDateSpecifier();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DateSpecifier", $value);
        }
        $value = $this->getRangeSpecifier();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RangeSpecifier", $value);
        }
        $value = $this->getValueList();
        if (null !== $value && !empty($this->getValueList())) {
            $writer->write(array_map(function ($v) {
                return ["ValueList" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeID');
        if (null !== $value) {
            $this->setAttributeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DateSpecifier');
        if (null !== $value) {
            $this->setDateSpecifier($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RangeSpecifier');
        if (null !== $value) {
            $this->setRangeSpecifier($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueList', true);
        if (null !== $value && !empty($value)) {
            $this->setValueList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ValType::fromKeyValue($v);
            }, $value));
        }
    }
}
