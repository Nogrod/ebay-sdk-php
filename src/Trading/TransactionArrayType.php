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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTransaction();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["Transaction" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\TransactionArrayType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Transaction');
        if (null !== $value) {
            $this->setTransaction(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\TransactionType::fromKeyValue($v);
            }, $value));
        }
    }
}
