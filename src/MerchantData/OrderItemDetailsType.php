<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing OrderItemDetailsType
 *
 * Contains the line item information for each order.
 * XSD Type: OrderItemDetailsType
 */
class OrderItemDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Specifics for the sale data for a single SKU or item.
     *
     * @var \Nogrod\eBaySDK\MerchantData\OrderLineItemType[] $orderLineItem
     */
    private $orderLineItem = [
        
    ];

    /**
     * Adds as orderLineItem
     *
     * Specifics for the sale data for a single SKU or item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderLineItemType $orderLineItem
     */
    public function addToOrderLineItem(\Nogrod\eBaySDK\MerchantData\OrderLineItemType $orderLineItem)
    {
        $this->orderLineItem[] = $orderLineItem;
        return $this;
    }

    /**
     * isset orderLineItem
     *
     * Specifics for the sale data for a single SKU or item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLineItem($index)
    {
        return isset($this->orderLineItem[$index]);
    }

    /**
     * unset orderLineItem
     *
     * Specifics for the sale data for a single SKU or item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLineItem($index)
    {
        unset($this->orderLineItem[$index]);
    }

    /**
     * Gets as orderLineItem
     *
     * Specifics for the sale data for a single SKU or item.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderLineItemType[]
     */
    public function getOrderLineItem()
    {
        return $this->orderLineItem;
    }

    /**
     * Sets a new orderLineItem
     *
     * Specifics for the sale data for a single SKU or item.
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderLineItemType[] $orderLineItem
     * @return self
     */
    public function setOrderLineItem(array $orderLineItem)
    {
        $this->orderLineItem = $orderLineItem;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderLineItem();
        if (null !== $value && !empty($this->getOrderLineItem())) {
            $writer->write(array_map(function ($v) {
                return ["OrderLineItem" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItem', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderLineItem(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderLineItemType::fromKeyValue($v);
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
