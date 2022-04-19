<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExternalTransactionType
 *
 * Container consisting of details related to payment of an eBay order on an external system. This container is only returned if order payment has been made on an external system. For <b>GetSellerTransaactions</b> and <b>GetItemTransactions</b>, this container is not returned for multiple line item orders.
 * XSD Type: ExternalTransactionType
 */
class ExternalTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier for a payment of an eBay order that occurred outside of eBay's system.
     *
     * @var string $externalTransactionID
     */
    private $externalTransactionID = null;

    /**
     * Timestamp for the payment transaction.
     *
     * @var \DateTime $externalTransactionTime
     */
    private $externalTransactionTime = null;

    /**
     * Fee amount is a positive value and credit amount is a negative value.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $feeOrCreditAmount
     */
    private $feeOrCreditAmount = null;

    /**
     * If this dollar value is a positive amount, this is the amount that the buyer paid the seller through for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any 'Collect and Remit' tax (mandated US state sales tax or 'Goods and Services' tax in Australia or New Zealand) charged to the buyer for one or more order line items, since this tax is collected by eBay and not by the seller.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $paymentOrRefundAmount
     */
    private $paymentOrRefundAmount = null;

    /**
     * The current processing status of a PayPal payment for an eBay order.
     *
     * @var string $externalTransactionStatus
     */
    private $externalTransactionStatus = null;

    /**
     * Gets as externalTransactionID
     *
     * Unique identifier for a payment of an eBay order that occurred outside of eBay's system.
     *
     * @return string
     */
    public function getExternalTransactionID()
    {
        return $this->externalTransactionID;
    }

    /**
     * Sets a new externalTransactionID
     *
     * Unique identifier for a payment of an eBay order that occurred outside of eBay's system.
     *
     * @param string $externalTransactionID
     * @return self
     */
    public function setExternalTransactionID($externalTransactionID)
    {
        $this->externalTransactionID = $externalTransactionID;
        return $this;
    }

    /**
     * Gets as externalTransactionTime
     *
     * Timestamp for the payment transaction.
     *
     * @return \DateTime
     */
    public function getExternalTransactionTime()
    {
        return $this->externalTransactionTime;
    }

    /**
     * Sets a new externalTransactionTime
     *
     * Timestamp for the payment transaction.
     *
     * @param \DateTime $externalTransactionTime
     * @return self
     */
    public function setExternalTransactionTime(\DateTime $externalTransactionTime)
    {
        $this->externalTransactionTime = $externalTransactionTime;
        return $this;
    }

    /**
     * Gets as feeOrCreditAmount
     *
     * Fee amount is a positive value and credit amount is a negative value.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getFeeOrCreditAmount()
    {
        return $this->feeOrCreditAmount;
    }

    /**
     * Sets a new feeOrCreditAmount
     *
     * Fee amount is a positive value and credit amount is a negative value.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $feeOrCreditAmount
     * @return self
     */
    public function setFeeOrCreditAmount(\Nogrod\eBaySDK\MerchantData\AmountType $feeOrCreditAmount)
    {
        $this->feeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }

    /**
     * Gets as paymentOrRefundAmount
     *
     * If this dollar value is a positive amount, this is the amount that the buyer paid the seller through for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any 'Collect and Remit' tax (mandated US state sales tax or 'Goods and Services' tax in Australia or New Zealand) charged to the buyer for one or more order line items, since this tax is collected by eBay and not by the seller.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getPaymentOrRefundAmount()
    {
        return $this->paymentOrRefundAmount;
    }

    /**
     * Sets a new paymentOrRefundAmount
     *
     * If this dollar value is a positive amount, this is the amount that the buyer paid the seller through for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any 'Collect and Remit' tax (mandated US state sales tax or 'Goods and Services' tax in Australia or New Zealand) charged to the buyer for one or more order line items, since this tax is collected by eBay and not by the seller.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $paymentOrRefundAmount
     * @return self
     */
    public function setPaymentOrRefundAmount(\Nogrod\eBaySDK\MerchantData\AmountType $paymentOrRefundAmount)
    {
        $this->paymentOrRefundAmount = $paymentOrRefundAmount;
        return $this;
    }

    /**
     * Gets as externalTransactionStatus
     *
     * The current processing status of a PayPal payment for an eBay order.
     *
     * @return string
     */
    public function getExternalTransactionStatus()
    {
        return $this->externalTransactionStatus;
    }

    /**
     * Sets a new externalTransactionStatus
     *
     * The current processing status of a PayPal payment for an eBay order.
     *
     * @param string $externalTransactionStatus
     * @return self
     */
    public function setExternalTransactionStatus($externalTransactionStatus)
    {
        $this->externalTransactionStatus = $externalTransactionStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExternalTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalTransactionID", $value);
        }
        $value = $this->getExternalTransactionTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalTransactionTime", $value);
        }
        $value = $this->getFeeOrCreditAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount", $value);
        }
        $value = $this->getPaymentOrRefundAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentOrRefundAmount", $value);
        }
        $value = $this->getExternalTransactionStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalTransactionStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransactionID');
        if (null !== $value) {
            $this->setExternalTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransactionTime');
        if (null !== $value) {
            $this->setExternalTransactionTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount');
        if (null !== $value) {
            $this->setFeeOrCreditAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentOrRefundAmount');
        if (null !== $value) {
            $this->setPaymentOrRefundAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransactionStatus');
        if (null !== $value) {
            $this->setExternalTransactionStatus($value);
        }
    }
}
