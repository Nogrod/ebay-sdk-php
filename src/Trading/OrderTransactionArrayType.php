<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderTransactionArrayType
 *
 * Type used by the <b>OrderTransactionArray</b> container that is returned in the <b>GetMyeBaySelling</b> and <b>GetMyeBayBuying</b> calls. The <b>OrderTransactionArray</b> container consists a list of orders and each order line item in that order.
 * XSD Type: OrderTransactionArrayType
 */
class OrderTransactionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of detailed information on a specific order and each order line item in that order.
     *
     * @var \Nogrod\eBaySDK\Trading\OrderTransactionType[] $orderTransaction
     */
    private $orderTransaction = [

    ];

    /**
     * Adds as orderTransaction
     *
     * This container consists of detailed information on a specific order and each order line item in that order.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderTransactionType $orderTransaction
     */
    public function addToOrderTransaction(\Nogrod\eBaySDK\Trading\OrderTransactionType $orderTransaction)
    {
        $this->orderTransaction[] = $orderTransaction;
        return $this;
    }

    /**
     * isset orderTransaction
     *
     * This container consists of detailed information on a specific order and each order line item in that order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderTransaction($index)
    {
        return isset($this->orderTransaction[$index]);
    }

    /**
     * unset orderTransaction
     *
     * This container consists of detailed information on a specific order and each order line item in that order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderTransaction($index)
    {
        unset($this->orderTransaction[$index]);
    }

    /**
     * Gets as orderTransaction
     *
     * This container consists of detailed information on a specific order and each order line item in that order.
     *
     * @return \Nogrod\eBaySDK\Trading\OrderTransactionType[]
     */
    public function getOrderTransaction()
    {
        return $this->orderTransaction;
    }

    /**
     * Sets a new orderTransaction
     *
     * This container consists of detailed information on a specific order and each order line item in that order.
     *
     * @param \Nogrod\eBaySDK\Trading\OrderTransactionType[] $orderTransaction
     * @return self
     */
    public function setOrderTransaction(array $orderTransaction)
    {
        $this->orderTransaction = $orderTransaction;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderTransaction();
        if (null !== $value && !empty($this->getOrderTransaction())) {
            $writer->write(array_map(function ($v) {return ["OrderTransaction" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderTransaction', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderTransaction(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\OrderTransactionType::fromKeyValue($v);}, $value));
        }
    }
}
