<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundFundingSourceType
 *
 * This type is deprecated.
 * XSD Type: RefundFundingSourceType
 */
class RefundFundingSourceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $refundingSourceType
     */
    private $refundingSourceType = null;

    /**
     * This field is deprecated.
     *
     * @var string $accountNumber
     */
    private $accountNumber = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $refundAmount
     */
    private $refundAmount = null;

    /**
     * This field is deprecated.
     *
     * @var string $sellerExternalTransactionID
     */
    private $sellerExternalTransactionID = null;

    /**
     * This field is deprecated.
     *
     * @var string $buyerExternalTransactionID
     */
    private $buyerExternalTransactionID = null;

    /**
     * Gets as refundingSourceType
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getRefundingSourceType()
    {
        return $this->refundingSourceType;
    }

    /**
     * Sets a new refundingSourceType
     *
     * This field is deprecated.
     *
     * @param string $refundingSourceType
     * @return self
     */
    public function setRefundingSourceType($refundingSourceType)
    {
        $this->refundingSourceType = $refundingSourceType;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * This field is deprecated.
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as refundAmount
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets a new refundAmount
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $refundAmount
     * @return self
     */
    public function setRefundAmount(\Nogrod\eBaySDK\MerchantData\AmountType $refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }

    /**
     * Gets as sellerExternalTransactionID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSellerExternalTransactionID()
    {
        return $this->sellerExternalTransactionID;
    }

    /**
     * Sets a new sellerExternalTransactionID
     *
     * This field is deprecated.
     *
     * @param string $sellerExternalTransactionID
     * @return self
     */
    public function setSellerExternalTransactionID($sellerExternalTransactionID)
    {
        $this->sellerExternalTransactionID = $sellerExternalTransactionID;
        return $this;
    }

    /**
     * Gets as buyerExternalTransactionID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getBuyerExternalTransactionID()
    {
        return $this->buyerExternalTransactionID;
    }

    /**
     * Sets a new buyerExternalTransactionID
     *
     * This field is deprecated.
     *
     * @param string $buyerExternalTransactionID
     * @return self
     */
    public function setBuyerExternalTransactionID($buyerExternalTransactionID)
    {
        $this->buyerExternalTransactionID = $buyerExternalTransactionID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundingSourceType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundingSourceType", $value);
        }
        $value = $this->getAccountNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AccountNumber", $value);
        }
        $value = $this->getRefundAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundAmount", $value);
        }
        $value = $this->getSellerExternalTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerExternalTransactionID", $value);
        }
        $value = $this->getBuyerExternalTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerExternalTransactionID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundingSourceType');
        if (null !== $value) {
            $this->setRefundingSourceType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountNumber');
        if (null !== $value) {
            $this->setAccountNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundAmount');
        if (null !== $value) {
            $this->setRefundAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerExternalTransactionID');
        if (null !== $value) {
            $this->setSellerExternalTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerExternalTransactionID');
        if (null !== $value) {
            $this->setBuyerExternalTransactionID($value);
        }
    }
}
