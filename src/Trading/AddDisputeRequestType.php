<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddDisputeRequestType
 *
 * Enables a seller to create a cancellation request.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  This call is deprecated and is scheduled for decommission on January 31, 2023. The alternative API to create cancellation requests is the <a href="https://developer.ebay.com/devzone/post-order/post-order_v2_cancellation__post.html" target="_blank">Create Cancellation Request</a> method of the <a href="https://developer.ebay.com/devzone/post-order/index.html" target="_blank">Post-Order API </a>.
 *  </span>
 * XSD Type: AddDisputeRequestType
 */
class AddDisputeRequestType extends AbstractRequestType
{
    /**
     * This enumerated value gives the explanation of why an order is being cancelled. Not all values contained in <b>DisputeExplanationCodeType</b> are allowed in the <b>AddDispute</b> call, and the values that are allowed must match the <b>DisputeReason</b> value.
     *  <br>
     *
     * @var string $disputeExplanation
     */
    private $disputeExplanation = null;

    /**
     * This enumeration value indicates the reason why the order is being cancelled. The seller should pass in <code>TransactionMutuallyCanceled</code> into this field if both buyer and seller have mutually agreed to cancel the order. Alternatively, if the buyer has not paid for an order within four days after committing to purchase, and the seller has not been able to communicate with the buyer concerning payment and cancellation, the seller can pass in <code>BuyerHasNotPaid</code> into this field.
     *
     * @var string $disputeReason
     */
    private $disputeReason = null;

    /**
     * Unique identifier of an eBay listing. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The unique identifier of a buyer's commitment to purchase. A <b>TransactionID</b> is created by eBay once a buyer commits to purchasing an item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier of an order line item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as disputeExplanation
     *
     * This enumerated value gives the explanation of why an order is being cancelled. Not all values contained in <b>DisputeExplanationCodeType</b> are allowed in the <b>AddDispute</b> call, and the values that are allowed must match the <b>DisputeReason</b> value.
     *  <br>
     *
     * @return string
     */
    public function getDisputeExplanation()
    {
        return $this->disputeExplanation;
    }

    /**
     * Sets a new disputeExplanation
     *
     * This enumerated value gives the explanation of why an order is being cancelled. Not all values contained in <b>DisputeExplanationCodeType</b> are allowed in the <b>AddDispute</b> call, and the values that are allowed must match the <b>DisputeReason</b> value.
     *  <br>
     *
     * @param string $disputeExplanation
     * @return self
     */
    public function setDisputeExplanation($disputeExplanation)
    {
        $this->disputeExplanation = $disputeExplanation;
        return $this;
    }

    /**
     * Gets as disputeReason
     *
     * This enumeration value indicates the reason why the order is being cancelled. The seller should pass in <code>TransactionMutuallyCanceled</code> into this field if both buyer and seller have mutually agreed to cancel the order. Alternatively, if the buyer has not paid for an order within four days after committing to purchase, and the seller has not been able to communicate with the buyer concerning payment and cancellation, the seller can pass in <code>BuyerHasNotPaid</code> into this field.
     *
     * @return string
     */
    public function getDisputeReason()
    {
        return $this->disputeReason;
    }

    /**
     * Sets a new disputeReason
     *
     * This enumeration value indicates the reason why the order is being cancelled. The seller should pass in <code>TransactionMutuallyCanceled</code> into this field if both buyer and seller have mutually agreed to cancel the order. Alternatively, if the buyer has not paid for an order within four days after committing to purchase, and the seller has not been able to communicate with the buyer concerning payment and cancellation, the seller can pass in <code>BuyerHasNotPaid</code> into this field.
     *
     * @param string $disputeReason
     * @return self
     */
    public function setDisputeReason($disputeReason)
    {
        $this->disputeReason = $disputeReason;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Unique identifier of an eBay listing. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
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
     * Unique identifier of an eBay listing. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
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
     * The unique identifier of a buyer's commitment to purchase. A <b>TransactionID</b> is created by eBay once a buyer commits to purchasing an item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br>
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
     * The unique identifier of a buyer's commitment to purchase. A <b>TransactionID</b> is created by eBay once a buyer commits to purchasing an item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br>
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
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier of an order line item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required.
     *  <br>
     *
     * @return string
     */
    public function getOrderLineItemID()
    {
        return $this->orderLineItemID;
    }

    /**
     * Sets a new orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier of an order line item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required.
     *  <br>
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getDisputeExplanation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeExplanation", $value);
        }
        $value = $this->getDisputeReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeReason", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeExplanation');
        if (null !== $value) {
            $this->setDisputeExplanation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeReason');
        if (null !== $value) {
            $this->setDisputeReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
