<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderIDArrayType
 *
 * Type defining the <b>OrderIDArray</b> container, which consists of an array of order IDs. The <b>OrderIDArray</b> container is used to specify one or more orders to retrieve in a <b>GetOrders</b> call.
 * XSD Type: OrderIDArrayType
 */
class OrderIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->orderID)) {
            throw new \LogicException('orderID is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setOrderID(iterable $orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->orderID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'OrderID', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\OrderIDArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->orderID = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'OrderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderID[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['OrderID'] = Func::jsonList($this->orderID);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
