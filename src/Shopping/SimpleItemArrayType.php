<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing SimpleItemArrayType
 *
 * <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call.
 *  </span>
 * XSD Type: SimpleItemArrayType
 */
class SimpleItemArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleItemType[] $item
     */
    private $item = [
        
    ];

    /**
     * Adds as item
     *
     * <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType $item
     */
    public function addToItem(\Nogrod\eBaySDK\Shopping\SimpleItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItem();
        if (null !== $value && !empty($this->getItem())) {
            $writer->write(array_map(function ($v) {
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item', true);
        if (null !== $value && !empty($value)) {
            $this->setItem(array_map(function ($v) {
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
