<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundTransactionArrayType
 *
 * This type is deprecated.
 * XSD Type: RefundTransactionArrayType
 */
class RefundTransactionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\RefundTransactionType[] $refundTransaction
     */
    private $refundTransaction = [

    ];

    /**
     * Adds as refundTransaction
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\RefundTransactionType $refundTransaction
     */
    public function addToRefundTransaction(\Nogrod\eBaySDK\MerchantData\RefundTransactionType $refundTransaction)
    {
        $this->refundTransaction[] = $refundTransaction;
        return $this;
    }

    /**
     * isset refundTransaction
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefundTransaction($index)
    {
        return isset($this->refundTransaction[$index]);
    }

    /**
     * unset refundTransaction
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefundTransaction($index)
    {
        unset($this->refundTransaction[$index]);
    }

    /**
     * Gets as refundTransaction
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\RefundTransactionType[]
     */
    public function getRefundTransaction()
    {
        return $this->refundTransaction;
    }

    /**
     * Sets a new refundTransaction
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\RefundTransactionType[] $refundTransaction
     * @return self
     */
    public function setRefundTransaction(array $refundTransaction)
    {
        $this->refundTransaction = $refundTransaction;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundTransaction();
        if (null !== $value && !empty($this->getRefundTransaction())) {
            $writer->write(array_map(function ($v) {
                return ["RefundTransaction" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundTransaction', true);
        if (null !== $value && !empty($value)) {
            $this->setRefundTransaction(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\RefundTransactionType::fromKeyValue($v);
            }, $value));
        }
    }
}
