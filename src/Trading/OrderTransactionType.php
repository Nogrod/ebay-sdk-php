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
class OrderTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->order;
        if (null !== $value) {
            $writer->startElementNs(null, 'Order', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->transaction;
        if (null !== $value) {
            $writer->startElementNs(null, 'Transaction', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\OrderTransactionType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'Order':
                    $this->order = \Nogrod\eBaySDK\Trading\OrderType::xmlRead($reader);
                    return true;
                case 'Transaction':
                    $this->transaction = \Nogrod\eBaySDK\Trading\TransactionType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Order'] = $this->order;
        $data['Transaction'] = $this->transaction;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
