<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderArrayType
 *
 * Type used by the <b>OrderArray</b> container that is returned in order management calls. The <b>OrderArray</b> container consists of one or more eBay orders that match the input criteria.
 * XSD Type: OrderArrayType
 */
class OrderArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @var \Nogrod\eBaySDK\Trading\OrderType[] $order
     */
    private $order = [
        
    ];

    /**
     * Adds as order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderType $order
     */
    public function addToOrder(\Nogrod\eBaySDK\Trading\OrderType $order)
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * isset order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrder($index)
    {
        return isset($this->order[$index]);
    }

    /**
     * unset order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrder($index)
    {
        unset($this->order[$index]);
    }

    /**
     * Gets as order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @return \Nogrod\eBaySDK\Trading\OrderType[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @param \Nogrod\eBaySDK\Trading\OrderType[] $order
     * @return self
     */
    public function setOrder(array $order)
    {
        $this->order = $order;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrder();
        if (null !== $value && !empty($this->getOrder())) {
            $writer->write(array_map(function ($v) {
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Order', true);
        if (null !== $value && !empty($value)) {
            $this->setOrder(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\OrderType::fromKeyValue($v);
            }, $value));
        }
    }
}
