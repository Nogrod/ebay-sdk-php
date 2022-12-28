<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderTransactionType
 *
 * Contains an order or a transaction. A transaction is the sale of one or
 *  more items from a seller's listing to a buyer. An order combines two or more transactions
 *  into a single payment.
 * XSD Type: OrderTransactionType
 */
class OrderTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains the information describing an order.
     *
     * @var \Nogrod\eBaySDK\Trading\OrderType $order
     */
    private $order = null;

    /**
     * Contains the information describing a transaction.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionType $transaction
     */
    private $transaction = null;

    /**
     * Gets as order
     *
     * Contains the information describing an order.
     *
     * @return \Nogrod\eBaySDK\Trading\OrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Contains the information describing an order.
     *
     * @param \Nogrod\eBaySDK\Trading\OrderType $order
     * @return self
     */
    public function setOrder(\Nogrod\eBaySDK\Trading\OrderType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as transaction
     *
     * Contains the information describing a transaction.
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionType
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * Contains the information describing a transaction.
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionType $transaction
     * @return self
     */
    public function setTransaction(\Nogrod\eBaySDK\Trading\TransactionType $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Order", $value);
        }
        $value = $this->getTransaction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Transaction", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Order');
        if (null !== $value) {
            $this->setOrder(\Nogrod\eBaySDK\Trading\OrderType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Transaction');
        if (null !== $value) {
            $this->setTransaction(\Nogrod\eBaySDK\Trading\TransactionType::fromKeyValue($value));
        }
    }
}
