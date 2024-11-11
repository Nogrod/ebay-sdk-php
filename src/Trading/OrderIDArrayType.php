<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderIDArrayType
 *
 * Type defining the <b>OrderIDArray</b> container, which consists of an array of order IDs. The <b>OrderIDArray</b> container is used to specify one or more orders to retrieve in a <b>GetOrders</b> call.
 * XSD Type: OrderIDArrayType
 */
class OrderIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders.
     *  </span>
     *
     * @var string[] $orderID
     */
    private $orderID = [

    ];

    /**
     * Adds as orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders.
     *  </span>
     *
     * @return self
     * @param string $orderID
     */
    public function addToOrderID($orderID)
    {
        $this->orderID[] = $orderID;
        return $this;
    }

    /**
     * isset orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderID($index)
    {
        return isset($this->orderID[$index]);
    }

    /**
     * unset orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderID($index)
    {
        unset($this->orderID[$index]);
    }

    /**
     * Gets as orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders.
     *  </span>
     *
     * @return string[]
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders.
     *  </span>
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID(array $orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderID();
        if (null !== $value && [] !== $this->getOrderID()) {
            $writer->write(array_map(function ($v) {return ["OrderID" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
    }
}
