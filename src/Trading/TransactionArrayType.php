<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TransactionArrayType
 *
 * Type defining the <b>TransactionArray</b> container, which contains an
 *  array of <b>Transaction</b> containers. Each <b>Transaction</b>
 *  container consists of detailed information on one order line item.
 * XSD Type: TransactionArrayType
 */
class TransactionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item.
     *  <br/><br/>
     *  For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to identified the unpaid order line items that are being combined into one Combined Invoice order.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionType[] $transaction
     */
    private $transaction = [

    ];

    /**
     * Adds as transaction
     *
     * A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item.
     *  <br/><br/>
     *  For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to identified the unpaid order line items that are being combined into one Combined Invoice order.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TransactionType $transaction
     */
    public function addToTransaction(\Nogrod\eBaySDK\Trading\TransactionType $transaction)
    {
        if (!is_array($this->transaction)) {
            throw new \LogicException('transaction is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->transaction[] = $transaction;
        return $this;
    }

    /**
     * isset transaction
     *
     * A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item.
     *  <br/><br/>
     *  For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to identified the unpaid order line items that are being combined into one Combined Invoice order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransaction($index)
    {
        return isset($this->transaction[$index]);
    }

    /**
     * unset transaction
     *
     * A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item.
     *  <br/><br/>
     *  For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to identified the unpaid order line items that are being combined into one Combined Invoice order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransaction($index)
    {
        unset($this->transaction[$index]);
    }

    /**
     * Gets as transaction
     *
     * A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item.
     *  <br/><br/>
     *  For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to identified the unpaid order line items that are being combined into one Combined Invoice order.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\TransactionType>
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item.
     *  <br/><br/>
     *  For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to identified the unpaid order line items that are being combined into one Combined Invoice order.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\TransactionType> $transaction
     * @return self
     */
    public function setTransaction(iterable $transaction)
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
        $value = $this->transaction;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Transaction', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TransactionArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->transaction = [];
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
                case 'Transaction':
                    $this->transaction[] = \Nogrod\eBaySDK\Trading\TransactionType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
