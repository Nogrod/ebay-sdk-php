<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisableUnpaidItemAssistanceRequestType
 *
 * Enables a seller who has opted into the automated Unpaid Item Assistant mechanism to disable the Unpaid Item Assistant at the order line item level. This call can be made whether or not a Unpaid Item case exists for the order line item. If an Unpaid Item case has already been created by the Unpaid Item Assistant, it is converted to a "manual" case for the seller to manage like any other manually-created case.
 * XSD Type: DisableUnpaidItemAssistanceRequestType
 */
class DisableUnpaidItemAssistanceRequestType extends AbstractRequestType
{
    /**
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if an Unpaid Item case already exists) is required in the request.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The unique identifier of an order line item. An order line item is created once there is a commitment from a buyer to purchase an item. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if an Unpaid Item case already exists) is required in the request.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * A unique identifier for an Unpaid Item case that is filed against an order line item. If an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> is used to identify an order line item, <b>DisputeID</b> cannot be used and will be ignored if it is included in the request.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> is required in the request.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if an Unpaid Item case already exists) is required in the request.
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
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if an Unpaid Item case already exists) is required in the request.
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
     * The unique identifier of an order line item. An order line item is created once there is a commitment from a buyer to purchase an item. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if an Unpaid Item case already exists) is required in the request.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * The unique identifier of an order line item. An order line item is created once there is a commitment from a buyer to purchase an item. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if an Unpaid Item case already exists) is required in the request.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * Gets as disputeID
     *
     * A unique identifier for an Unpaid Item case that is filed against an order line item. If an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> is used to identify an order line item, <b>DisputeID</b> cannot be used and will be ignored if it is included in the request.
     *
     * @return string
     */
    public function getDisputeID()
    {
        return $this->disputeID;
    }

    /**
     * Sets a new disputeID
     *
     * A unique identifier for an Unpaid Item case that is filed against an order line item. If an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> is used to identify an order line item, <b>DisputeID</b> cannot be used and will be ignored if it is included in the request.
     *
     * @param string $disputeID
     * @return self
     */
    public function setDisputeID($disputeID)
    {
        $this->disputeID = $disputeID;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> is required in the request.
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
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> is required in the request.
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getDisputeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeID');
        if (null !== $value) {
            $this->setDisputeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
