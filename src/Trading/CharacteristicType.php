<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharacteristicType
 *
 * This type is deprecated.
 * XSD Type: CharacteristicType
 */
class CharacteristicType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     * @var string $dateFormat
     */
    private $dateFormat = null;

    /**
     * This field is deprecated.
     *
     * @var string $displaySequence
     */
    private $displaySequence = null;

    /**
     * This field is deprecated.
     *
     * @var string $displayUOM
     */
    private $displayUOM = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\LabelType $label
     */
    private $label = null;

    /**
     * This field is deprecated.
     *
     * @var string $sortOrder
     */
    private $sortOrder = null;

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
     * Gets as dateFormat
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * Sets a new dateFormat
     *
     * This field is deprecated.
     *
     * @param string $dateFormat
     * @return self
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;
        return $this;
    }

    /**
     * Gets as displaySequence
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDisplaySequence()
    {
        return $this->displaySequence;
    }

    /**
     * Sets a new displaySequence
     *
     * This field is deprecated.
     *
     * @param string $displaySequence
     * @return self
     */
    public function setDisplaySequence($displaySequence)
    {
        $this->displaySequence = $displaySequence;
        return $this;
    }

    /**
     * Gets as displayUOM
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDisplayUOM()
    {
        return $this->displayUOM;
    }

    /**
     * Sets a new displayUOM
     *
     * This field is deprecated.
     *
     * @param string $displayUOM
     * @return self
     */
    public function setDisplayUOM($displayUOM)
    {
        $this->displayUOM = $displayUOM;
        return $this;
    }

    /**
     * Gets as label
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\LabelType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\LabelType $label
     * @return self
     */
    public function setLabel(\Nogrod\eBaySDK\Trading\LabelType $label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * This field is deprecated.
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
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
        $value = $this->getDateFormat();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DateFormat", $value);
        }
        $value = $this->getDisplaySequence();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplaySequence", $value);
        }
        $value = $this->getDisplayUOM();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayUOM", $value);
        }
        $value = $this->getLabel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Label", $value);
        }
        $value = $this->getSortOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SortOrder", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DateFormat');
        if (null !== $value) {
            $this->setDateFormat($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplaySequence');
        if (null !== $value) {
            $this->setDisplaySequence($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayUOM');
        if (null !== $value) {
            $this->setDisplayUOM($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Label');
        if (null !== $value) {
            $this->setLabel(\Nogrod\eBaySDK\Trading\LabelType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortOrder');
        if (null !== $value) {
            $this->setSortOrder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueList', true);
        if (null !== $value && !empty($value)) {
            $this->setValueList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ValType::fromKeyValue($v);
            }, $value));
        }
    }
}
