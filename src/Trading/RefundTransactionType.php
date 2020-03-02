<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundTransactionType
 *
 * This type is deprecated.
 * XSD Type: RefundTransactionType
 */
class RefundTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * This field is deprecated.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is deprecated.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\RefundLineType[] $refundLineArray
     */
    private $refundLineArray = null;

    /**
     * Gets as orderID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * This field is deprecated.
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * This field is deprecated.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * This field is deprecated.
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Adds as refundLine
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundLineType $refundLine
     */
    public function addToRefundLineArray(\Nogrod\eBaySDK\Trading\RefundLineType $refundLine)
    {
        $this->refundLineArray[] = $refundLine;
        return $this;
    }

    /**
     * isset refundLineArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefundLineArray($index)
    {
        return isset($this->refundLineArray[$index]);
    }

    /**
     * unset refundLineArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefundLineArray($index)
    {
        unset($this->refundLineArray[$index]);
    }

    /**
     * Gets as refundLineArray
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\RefundLineType[]
     */
    public function getRefundLineArray()
    {
        return $this->refundLineArray;
    }

    /**
     * Sets a new refundLineArray
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\RefundLineType[] $refundLineArray
     * @return self
     */
    public function setRefundLineArray(array $refundLineArray)
    {
        $this->refundLineArray = $refundLineArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getRefundLineArray();
        if (null !== $value && !empty($this->getRefundLineArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundLineArray", array_map(function ($v) {
                return ["RefundLine" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundLineArray', true);
        if (null !== $value && !empty($value)) {
            $this->setRefundLineArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RefundLineType::fromKeyValue($v);
            }, $value));
        }
    }
}
