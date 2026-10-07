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
        if (!is_array($this->orderTransaction)) {
            throw new \LogicException('orderTransaction is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\OrderTransactionType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\OrderTransactionType> $orderTransaction
     * @return self
     */
    public function setOrderTransaction(iterable $orderTransaction)
    {
        $this->orderTransaction = $orderTransaction;
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
        $value = $this->orderTransaction;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'OrderTransaction', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\OrderTransactionArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->orderTransaction = [];
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
                case 'OrderTransaction':
                    $this->orderTransaction[] = \Nogrod\eBaySDK\Trading\OrderTransactionType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
