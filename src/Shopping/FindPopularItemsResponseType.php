<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FindPopularItemsResponseType
 *
 * <b>This call is deprecated.</b>
 * XSD Type: FindPopularItemsResponseType
 */
class FindPopularItemsResponseType extends AbstractResponseType
{

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleItemType[] $itemArray
     */
    private $itemArray = null;

    /**
     * Adds as item
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType $item
     */
    public function addToItemArray(\Nogrod\eBaySDK\Shopping\SimpleItemType $item)
    {
        $this->itemArray[] = $item;
        return $this;
    }

    /**
     * isset itemArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemArray($index)
    {
        return isset($this->itemArray[$index]);
    }

    /**
     * unset itemArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemArray($index)
    {
        unset($this->itemArray[$index]);
    }

    /**
     * Gets as itemArray
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleItemType[]
     */
    public function getItemArray()
    {
        return $this->itemArray;
    }

    /**
     * Sets a new itemArray
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType[] $itemArray
     * @return self
     */
    public function setItemArray(array $itemArray)
    {
        $this->itemArray = $itemArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemArray();
        if (null !== $value && !empty($this->getItemArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemArray", array_map(function ($v) {
                return ["Item" => $v];
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemArray', true);
        if (null !== $value && !empty($value)) {
            $this->setItemArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\SimpleItemType::fromKeyValue($v);
            }, $value));
        }
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
