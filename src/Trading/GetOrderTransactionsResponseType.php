<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetOrderTransactionsResponseType
 *
 * The base response type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more eBay.com orders. An <b>OrderArray.Order</b> container is returned for each order that matches the input criteria in the call request.
 * XSD Type: GetOrderTransactionsResponseType
 */
class GetOrderTransactionsResponseType extends AbstractResponseType
{

    /**
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @var \Nogrod\eBaySDK\Trading\OrderType[] $orderArray
     */
    private $orderArray = null;

    /**
     * Adds as order
     *
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderType $order
     */
    public function addToOrderArray(\Nogrod\eBaySDK\Trading\OrderType $order)
    {
        $this->orderArray[] = $order;
        return $this;
    }

    /**
     * isset orderArray
     *
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderArray($index)
    {
        return isset($this->orderArray[$index]);
    }

    /**
     * unset orderArray
     *
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderArray($index)
    {
        unset($this->orderArray[$index]);
    }

    /**
     * Gets as orderArray
     *
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @return \Nogrod\eBaySDK\Trading\OrderType[]
     */
    public function getOrderArray()
    {
        return $this->orderArray;
    }

    /**
     * Sets a new orderArray
     *
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @param \Nogrod\eBaySDK\Trading\OrderType[] $orderArray
     * @return self
     */
    public function setOrderArray(array $orderArray)
    {
        $this->orderArray = $orderArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrderArray();
        if (null !== $value && !empty($this->getOrderArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderArray", array_map(function ($v) {
                return ["Order" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderArray', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\OrderType::fromKeyValue($v);
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
