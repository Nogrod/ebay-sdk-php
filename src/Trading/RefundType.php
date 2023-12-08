<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundType
 *
 * <span class="tablenote"><b>Note: </b> This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type will also be deprecated.
 *  </span>
 *  Contains information about a single Half.com refund.
 * XSD Type: RefundType
 */
class RefundType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  Total amount refunded by the seller for this order line item.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $refundFromSeller
     */
    private $refundFromSeller = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  Total amount refunded to the buyer for this order line item.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalRefundToBuyer
     */
    private $totalRefundToBuyer = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The date and time at which the refund was issued.
     *
     * @var \DateTime $refundTime
     */
    private $refundTime = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The unique identifier of the refund.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real refund identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @var string $refundID
     */
    private $refundID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RefundTransactionType[] $refundTransactionArray
     */
    private $refundTransactionArray = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The total amount of the refund requested.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $refundAmount
     */
    private $refundAmount = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var string $refundStatus
     */
    private $refundStatus = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RefundFailureReasonType $refundFailureReason
     */
    private $refundFailureReason = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RefundFundingSourceType[] $refundFundingSourceArray
     */
    private $refundFundingSourceArray = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var string $externalReferenceID
     */
    private $externalReferenceID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var \DateTime $refundRequestedTime
     */
    private $refundRequestedTime = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var \DateTime $refundCompletionTime
     */
    private $refundCompletionTime = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var \DateTime $estimatedRefundCompletionTime
     */
    private $estimatedRefundCompletionTime = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var string $sellerNoteToBuyer
     */
    private $sellerNoteToBuyer = null;

    /**
     * Gets as refundFromSeller
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  Total amount refunded by the seller for this order line item.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getRefundFromSeller()
    {
        return $this->refundFromSeller;
    }

    /**
     * Sets a new refundFromSeller
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  Total amount refunded by the seller for this order line item.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $refundFromSeller
     * @return self
     */
    public function setRefundFromSeller(\Nogrod\eBaySDK\Trading\AmountType $refundFromSeller)
    {
        $this->refundFromSeller = $refundFromSeller;
        return $this;
    }

    /**
     * Gets as totalRefundToBuyer
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  Total amount refunded to the buyer for this order line item.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalRefundToBuyer()
    {
        return $this->totalRefundToBuyer;
    }

    /**
     * Sets a new totalRefundToBuyer
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  Total amount refunded to the buyer for this order line item.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalRefundToBuyer
     * @return self
     */
    public function setTotalRefundToBuyer(\Nogrod\eBaySDK\Trading\AmountType $totalRefundToBuyer)
    {
        $this->totalRefundToBuyer = $totalRefundToBuyer;
        return $this;
    }

    /**
     * Gets as refundTime
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The date and time at which the refund was issued.
     *
     * @return \DateTime
     */
    public function getRefundTime()
    {
        return $this->refundTime;
    }

    /**
     * Sets a new refundTime
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The date and time at which the refund was issued.
     *
     * @param \DateTime $refundTime
     * @return self
     */
    public function setRefundTime(\DateTime $refundTime)
    {
        $this->refundTime = $refundTime;
        return $this;
    }

    /**
     * Gets as refundID
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The unique identifier of the refund.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real refund identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @return string
     */
    public function getRefundID()
    {
        return $this->refundID;
    }

    /**
     * Sets a new refundID
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The unique identifier of the refund.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real refund identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @param string $refundID
     * @return self
     */
    public function setRefundID($refundID)
    {
        $this->refundID = $refundID;
        return $this;
    }

    /**
     * Adds as refundTransaction
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundTransactionType $refundTransaction
     */
    public function addToRefundTransactionArray(\Nogrod\eBaySDK\Trading\RefundTransactionType $refundTransaction)
    {
        $this->refundTransactionArray[] = $refundTransaction;
        return $this;
    }

    /**
     * isset refundTransactionArray
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefundTransactionArray($index)
    {
        return isset($this->refundTransactionArray[$index]);
    }

    /**
     * unset refundTransactionArray
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefundTransactionArray($index)
    {
        unset($this->refundTransactionArray[$index]);
    }

    /**
     * Gets as refundTransactionArray
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RefundTransactionType[]
     */
    public function getRefundTransactionArray()
    {
        return $this->refundTransactionArray;
    }

    /**
     * Sets a new refundTransactionArray
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RefundTransactionType[] $refundTransactionArray
     * @return self
     */
    public function setRefundTransactionArray(array $refundTransactionArray)
    {
        $this->refundTransactionArray = $refundTransactionArray;
        return $this;
    }

    /**
     * Gets as refundAmount
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The total amount of the refund requested.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets a new refundAmount
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The total amount of the refund requested.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $refundAmount
     * @return self
     */
    public function setRefundAmount(\Nogrod\eBaySDK\Trading\AmountType $refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }

    /**
     * Gets as refundStatus
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->refundStatus;
    }

    /**
     * Sets a new refundStatus
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param string $refundStatus
     * @return self
     */
    public function setRefundStatus($refundStatus)
    {
        $this->refundStatus = $refundStatus;
        return $this;
    }

    /**
     * Gets as refundFailureReason
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RefundFailureReasonType
     */
    public function getRefundFailureReason()
    {
        return $this->refundFailureReason;
    }

    /**
     * Sets a new refundFailureReason
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RefundFailureReasonType $refundFailureReason
     * @return self
     */
    public function setRefundFailureReason(\Nogrod\eBaySDK\Trading\RefundFailureReasonType $refundFailureReason)
    {
        $this->refundFailureReason = $refundFailureReason;
        return $this;
    }

    /**
     * Adds as refundFundingSource
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundFundingSourceType $refundFundingSource
     */
    public function addToRefundFundingSourceArray(\Nogrod\eBaySDK\Trading\RefundFundingSourceType $refundFundingSource)
    {
        $this->refundFundingSourceArray[] = $refundFundingSource;
        return $this;
    }

    /**
     * isset refundFundingSourceArray
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefundFundingSourceArray($index)
    {
        return isset($this->refundFundingSourceArray[$index]);
    }

    /**
     * unset refundFundingSourceArray
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefundFundingSourceArray($index)
    {
        unset($this->refundFundingSourceArray[$index]);
    }

    /**
     * Gets as refundFundingSourceArray
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RefundFundingSourceType[]
     */
    public function getRefundFundingSourceArray()
    {
        return $this->refundFundingSourceArray;
    }

    /**
     * Sets a new refundFundingSourceArray
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RefundFundingSourceType[] $refundFundingSourceArray
     * @return self
     */
    public function setRefundFundingSourceArray(array $refundFundingSourceArray)
    {
        $this->refundFundingSourceArray = $refundFundingSourceArray;
        return $this;
    }

    /**
     * Gets as externalReferenceID
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return string
     */
    public function getExternalReferenceID()
    {
        return $this->externalReferenceID;
    }

    /**
     * Sets a new externalReferenceID
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param string $externalReferenceID
     * @return self
     */
    public function setExternalReferenceID($externalReferenceID)
    {
        $this->externalReferenceID = $externalReferenceID;
        return $this;
    }

    /**
     * Gets as refundRequestedTime
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return \DateTime
     */
    public function getRefundRequestedTime()
    {
        return $this->refundRequestedTime;
    }

    /**
     * Sets a new refundRequestedTime
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param \DateTime $refundRequestedTime
     * @return self
     */
    public function setRefundRequestedTime(\DateTime $refundRequestedTime)
    {
        $this->refundRequestedTime = $refundRequestedTime;
        return $this;
    }

    /**
     * Gets as refundCompletionTime
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return \DateTime
     */
    public function getRefundCompletionTime()
    {
        return $this->refundCompletionTime;
    }

    /**
     * Sets a new refundCompletionTime
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param \DateTime $refundCompletionTime
     * @return self
     */
    public function setRefundCompletionTime(\DateTime $refundCompletionTime)
    {
        $this->refundCompletionTime = $refundCompletionTime;
        return $this;
    }

    /**
     * Gets as estimatedRefundCompletionTime
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return \DateTime
     */
    public function getEstimatedRefundCompletionTime()
    {
        return $this->estimatedRefundCompletionTime;
    }

    /**
     * Sets a new estimatedRefundCompletionTime
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param \DateTime $estimatedRefundCompletionTime
     * @return self
     */
    public function setEstimatedRefundCompletionTime(\DateTime $estimatedRefundCompletionTime)
    {
        $this->estimatedRefundCompletionTime = $estimatedRefundCompletionTime;
        return $this;
    }

    /**
     * Gets as sellerNoteToBuyer
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return string
     */
    public function getSellerNoteToBuyer()
    {
        return $this->sellerNoteToBuyer;
    }

    /**
     * Sets a new sellerNoteToBuyer
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param string $sellerNoteToBuyer
     * @return self
     */
    public function setSellerNoteToBuyer($sellerNoteToBuyer)
    {
        $this->sellerNoteToBuyer = $sellerNoteToBuyer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundFromSeller();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundFromSeller", $value);
        }
        $value = $this->getTotalRefundToBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalRefundToBuyer", $value);
        }
        $value = $this->getRefundTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundTime", $value);
        }
        $value = $this->getRefundID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundID", $value);
        }
        $value = $this->getRefundTransactionArray();
        if (null !== $value && !empty($this->getRefundTransactionArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundTransactionArray", array_map(function ($v) {return ["RefundTransaction" => $v];}, $value));
        }
        $value = $this->getRefundAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundAmount", $value);
        }
        $value = $this->getRefundStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundStatus", $value);
        }
        $value = $this->getRefundFailureReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundFailureReason", $value);
        }
        $value = $this->getRefundFundingSourceArray();
        if (null !== $value && !empty($this->getRefundFundingSourceArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundFundingSourceArray", array_map(function ($v) {return ["RefundFundingSource" => $v];}, $value));
        }
        $value = $this->getExternalReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalReferenceID", $value);
        }
        $value = $this->getRefundRequestedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundRequestedTime", $value);
        }
        $value = $this->getRefundCompletionTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundCompletionTime", $value);
        }
        $value = $this->getEstimatedRefundCompletionTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedRefundCompletionTime", $value);
        }
        $value = $this->getSellerNoteToBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerNoteToBuyer", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundFromSeller');
        if (null !== $value) {
            $this->setRefundFromSeller(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalRefundToBuyer');
        if (null !== $value) {
            $this->setTotalRefundToBuyer(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundTime');
        if (null !== $value) {
            $this->setRefundTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundID');
        if (null !== $value) {
            $this->setRefundID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundTransactionArray', true);
        if (null !== $value && !empty($value)) {
            $this->setRefundTransactionArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\RefundTransactionType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundAmount');
        if (null !== $value) {
            $this->setRefundAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundStatus');
        if (null !== $value) {
            $this->setRefundStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundFailureReason');
        if (null !== $value) {
            $this->setRefundFailureReason(\Nogrod\eBaySDK\Trading\RefundFailureReasonType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundFundingSourceArray', true);
        if (null !== $value && !empty($value)) {
            $this->setRefundFundingSourceArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\RefundFundingSourceType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalReferenceID');
        if (null !== $value) {
            $this->setExternalReferenceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundRequestedTime');
        if (null !== $value) {
            $this->setRefundRequestedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundCompletionTime');
        if (null !== $value) {
            $this->setRefundCompletionTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedRefundCompletionTime');
        if (null !== $value) {
            $this->setEstimatedRefundCompletionTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerNoteToBuyer');
        if (null !== $value) {
            $this->setSellerNoteToBuyer($value);
        }
    }
}
