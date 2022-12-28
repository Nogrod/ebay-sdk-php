<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\OrderType $order
     */
    private $order = null;

    /**
     * Contains the information describing a transaction.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TransactionType $transaction
     */
    private $transaction = null;

    /**
     * Gets as order
     *
     * Contains the information describing an order.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderType
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
     * @param \Nogrod\eBaySDK\MerchantData\OrderType $order
     * @return self
     */
    public function setOrder(\Nogrod\eBaySDK\MerchantData\OrderType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as transaction
     *
     * Contains the information describing a transaction.
     *
     * @return \Nogrod\eBaySDK\MerchantData\TransactionType
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
     * @param \Nogrod\eBaySDK\MerchantData\TransactionType $transaction
     * @return self
     */
    public function setTransaction(\Nogrod\eBaySDK\MerchantData\TransactionType $transaction)
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
            $this->setOrder(\Nogrod\eBaySDK\MerchantData\OrderType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Transaction');
        if (null !== $value) {
            $this->setTransaction(\Nogrod\eBaySDK\MerchantData\TransactionType::fromKeyValue($value));
        }
    }
}
