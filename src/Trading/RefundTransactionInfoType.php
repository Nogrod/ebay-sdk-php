<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundTransactionInfoType
 *
 * Type defining the <strong>Refund</strong> container, which consists of detailed information on an In-Store Pickup item refund.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings.
 *  </span>
 * XSD Type: RefundTransactionInfoType
 */
class RefundTransactionInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates whether the merchant refunded or provided a store credit to the buyer for the returned In-Store Pickup item. Applicable values are 'REFUND' and 'STORE_CREDIT'. This value is picked up by eBay when the merchant passes in the <strong>REFUND_TYPE</strong> parameter through the payload of an <strong>ORDER.RETURNED</strong> notification sent to eBay.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @var string $refundType
     */
    private $refundType = null;

    /**
     * This field is the eBay user ID of the buyer who is receiving the refund or store credit from the merchant. This field is always returned with the <strong>Refund</strong> container.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct refund recipient is returned to the buyer or seller, but the refund recipient will be masked to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\UserIdentityType $refundTo
     */
    private $refundTo = null;

    /**
     * This date/time value is the timestamp for the refund transaction. This field is not returned if the refund was not successful (RefundStatus=FAILED).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @var \DateTime $refundTime
     */
    private $refundTime = null;

    /**
     * This dollar value is the amount of the refund to the buyer for this specific refund transaction. This field is not returned for In-Store Pick or Click and Collect orders where the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, the final value fee amount deducted from the seller's payout funds for the sale is not included in this field, which means that the amount in this field may not reflect the buyer's actual refund amount.
     *  <br/><br/>
     *  The logic will remain the same for <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, but the <strong>GetOrders</strong> call will be updated to include the the seller's final value fee amount in this field, so the amount in this field should match the buyer's actual refund amount. To pick up this new logic in <strong>GetOrders</strong> responses, a Trading WSDL version of 1311 or above must be used, or the user can use an older Trading WSDL version but include and set the <strong>X-EBAY-API-COMPATIBILITY-LEVEL</strong> header value to 1311 or above.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $refundAmount
     */
    private $refundAmount = null;

    /**
     * This value is a merchant-defined identifier used to track In-Store Pickup refunds. This value is picked up by eBay when the merchant passes in the <strong>REFUND_ID</strong> parameter through the payload of an <strong>ORDER.RETURNED</strong> notification sent to eBay. This field is not returned if the merchant does not set this value through <strong>ORDER.RETURNED</strong> notification.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID
     */
    private $referenceID = null;

    /**
     * This dollar value is the total amount of the refund to the buyer for the In-Store Pickup order. Typically, this dollar value will be the same as the <strong>RefundAmount</strong> value, unless the merchant is issuing multiple refund transactions to the buyer, in which case, the <strong>FeeOrCreditAmount</strong> value will be the cumulative amount for multiple refund transactions. This field is not returned if the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount
     */
    private $feeOrCreditAmount = null;

    /**
     * Gets as refundType
     *
     * This value indicates whether the merchant refunded or provided a store credit to the buyer for the returned In-Store Pickup item. Applicable values are 'REFUND' and 'STORE_CREDIT'. This value is picked up by eBay when the merchant passes in the <strong>REFUND_TYPE</strong> parameter through the payload of an <strong>ORDER.RETURNED</strong> notification sent to eBay.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @return string
     */
    public function getRefundType()
    {
        return $this->refundType;
    }

    /**
     * Sets a new refundType
     *
     * This value indicates whether the merchant refunded or provided a store credit to the buyer for the returned In-Store Pickup item. Applicable values are 'REFUND' and 'STORE_CREDIT'. This value is picked up by eBay when the merchant passes in the <strong>REFUND_TYPE</strong> parameter through the payload of an <strong>ORDER.RETURNED</strong> notification sent to eBay.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @param string $refundType
     * @return self
     */
    public function setRefundType($refundType)
    {
        $this->refundType = $refundType;
        return $this;
    }

    /**
     * Gets as refundTo
     *
     * This field is the eBay user ID of the buyer who is receiving the refund or store credit from the merchant. This field is always returned with the <strong>Refund</strong> container.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct refund recipient is returned to the buyer or seller, but the refund recipient will be masked to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\UserIdentityType
     */
    public function getRefundTo()
    {
        return $this->refundTo;
    }

    /**
     * Sets a new refundTo
     *
     * This field is the eBay user ID of the buyer who is receiving the refund or store credit from the merchant. This field is always returned with the <strong>Refund</strong> container.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct refund recipient is returned to the buyer or seller, but the refund recipient will be masked to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\UserIdentityType $refundTo
     * @return self
     */
    public function setRefundTo(\Nogrod\eBaySDK\Trading\UserIdentityType $refundTo)
    {
        $this->refundTo = $refundTo;
        return $this;
    }

    /**
     * Gets as refundTime
     *
     * This date/time value is the timestamp for the refund transaction. This field is not returned if the refund was not successful (RefundStatus=FAILED).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
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
     * This date/time value is the timestamp for the refund transaction. This field is not returned if the refund was not successful (RefundStatus=FAILED).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
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
     * Gets as refundAmount
     *
     * This dollar value is the amount of the refund to the buyer for this specific refund transaction. This field is not returned for In-Store Pick or Click and Collect orders where the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, the final value fee amount deducted from the seller's payout funds for the sale is not included in this field, which means that the amount in this field may not reflect the buyer's actual refund amount.
     *  <br/><br/>
     *  The logic will remain the same for <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, but the <strong>GetOrders</strong> call will be updated to include the the seller's final value fee amount in this field, so the amount in this field should match the buyer's actual refund amount. To pick up this new logic in <strong>GetOrders</strong> responses, a Trading WSDL version of 1311 or above must be used, or the user can use an older Trading WSDL version but include and set the <strong>X-EBAY-API-COMPATIBILITY-LEVEL</strong> header value to 1311 or above.
     *  </span>
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
     * This dollar value is the amount of the refund to the buyer for this specific refund transaction. This field is not returned for In-Store Pick or Click and Collect orders where the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, the final value fee amount deducted from the seller's payout funds for the sale is not included in this field, which means that the amount in this field may not reflect the buyer's actual refund amount.
     *  <br/><br/>
     *  The logic will remain the same for <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, but the <strong>GetOrders</strong> call will be updated to include the the seller's final value fee amount in this field, so the amount in this field should match the buyer's actual refund amount. To pick up this new logic in <strong>GetOrders</strong> responses, a Trading WSDL version of 1311 or above must be used, or the user can use an older Trading WSDL version but include and set the <strong>X-EBAY-API-COMPATIBILITY-LEVEL</strong> header value to 1311 or above.
     *  </span>
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
     * Gets as referenceID
     *
     * This value is a merchant-defined identifier used to track In-Store Pickup refunds. This value is picked up by eBay when the merchant passes in the <strong>REFUND_ID</strong> parameter through the payload of an <strong>ORDER.RETURNED</strong> notification sent to eBay. This field is not returned if the merchant does not set this value through <strong>ORDER.RETURNED</strong> notification.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionReferenceType
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * This value is a merchant-defined identifier used to track In-Store Pickup refunds. This value is picked up by eBay when the merchant passes in the <strong>REFUND_ID</strong> parameter through the payload of an <strong>ORDER.RETURNED</strong> notification sent to eBay. This field is not returned if the merchant does not set this value through <strong>ORDER.RETURNED</strong> notification.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID
     * @return self
     */
    public function setReferenceID(\Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as feeOrCreditAmount
     *
     * This dollar value is the total amount of the refund to the buyer for the In-Store Pickup order. Typically, this dollar value will be the same as the <strong>RefundAmount</strong> value, unless the merchant is issuing multiple refund transactions to the buyer, in which case, the <strong>FeeOrCreditAmount</strong> value will be the cumulative amount for multiple refund transactions. This field is not returned if the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getFeeOrCreditAmount()
    {
        return $this->feeOrCreditAmount;
    }

    /**
     * Sets a new feeOrCreditAmount
     *
     * This dollar value is the total amount of the refund to the buyer for the In-Store Pickup order. Typically, this dollar value will be the same as the <strong>RefundAmount</strong> value, unless the merchant is issuing multiple refund transactions to the buyer, in which case, the <strong>FeeOrCreditAmount</strong> value will be the cumulative amount for multiple refund transactions. This field is not returned if the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount
     * @return self
     */
    public function setFeeOrCreditAmount(\Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount)
    {
        $this->feeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundType", $value);
        }
        $value = $this->getRefundTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundTo", $value);
        }
        $value = $this->getRefundTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundTime", $value);
        }
        $value = $this->getRefundAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundAmount", $value);
        }
        $value = $this->getReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferenceID", $value);
        }
        $value = $this->getFeeOrCreditAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundType');
        if (null !== $value) {
            $this->setRefundType($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundTo');
        if (null !== $value) {
            $this->setRefundTo(\Nogrod\eBaySDK\Trading\UserIdentityType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundTime');
        if (null !== $value) {
            $this->setRefundTime(new \DateTime($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundAmount');
        if (null !== $value) {
            $this->setRefundAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferenceID');
        if (null !== $value) {
            $this->setReferenceID(\Nogrod\eBaySDK\Trading\TransactionReferenceType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount');
        if (null !== $value) {
            $this->setFeeOrCreditAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
