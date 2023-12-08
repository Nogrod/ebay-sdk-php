<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing LeaveFeedbackRequestType
 *
 * Enables a buyer and seller to leave Feedback for their order partner at the
 *  conclusion of a successful order.
 * XSD Type: LeaveFeedbackRequestType
 */
class LeaveFeedbackRequestType extends AbstractRequestType
{
    /**
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items, but only one <b>ItemID</b>. Unless an
     *  <b>OrderLineItemID</b> is specified in the <b>LeaveFeedback</b> request, the <b>ItemID</b> is
     *  required along with the <b>TargetUser</b> to identify an order line item
     *  existing between the caller and the <b>TargetUser</b> that requires feedback. A
     *  Feedback comment will be posted for this order line item. If there are
     *  multiple order line items between the two order partners that still
     *  require feedback, the <b>TransactionID</b> will also be required to isolate the
     *  targeted order line item. Feedback cannot be left for order line items
     *  with creation dates more than 60 days in the past.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Textual comment that explains, clarifies, or justifies the feedback
     *  score specified in <b>CommentType</b>.
     *  <br>
     *
     * @var string $commentText
     */
    private $commentText = null;

    /**
     * Score for the Feedback being left. May be Positive, Neutral, or Negative.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Sellers can not leave neutral or negative feedback for buyers. In addition, buyers can not leave neutral or negative feedback within 7 days from the completion of the order for active Power Sellers who have been on eBay for 12 months.
     *  </span>
     *
     * @var string $commentType
     */
    private $commentType = null;

    /**
     * Unique identifier for an eBay order line item. If there
     *  are multiple order line items between the two order partners that still
     *  require Feedback, the <b>TransactionID</b> is required along with the
     *  corresponding <b>ItemID</b> and <b>TargetUser</b> to isolate the targeted order line
     *  item. If an <b>OrderLineItemID</b> is included in the response to identify a
     *  specific order line item, none of the preceding fields (<b>ItemID</b>,
     *  <b>TransactionID</b>, <b>TargetUser</b>) are needed. Feedback cannot be left for order
     *  line items with creation dates more than 60 days in the past.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * Specifies the recipient user about whom the Feedback is being left.
     *
     * @var string $targetUser
     */
    private $targetUser = null;

    /**
     * Container for detailed seller ratings (DSRs). If a buyer is providing DSRs, they are specified in this container. Sellers have access to the number of ratings they've received, as well as to the averages of the DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *
     * @var \Nogrod\eBaySDK\Trading\ItemRatingDetailsType[] $sellerItemRatingDetailArray
     */
    private $sellerItemRatingDetailArray = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. If an <b>OrderLineItemID</b> is included in
     *  the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>TargetUser</b> fields are not
     *  required. Feedback cannot be left for order line items with creation
     *  dates more than 60 days in the past.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * This field or the <b>ItemDeliveredWithinEDD</b> field should be included if it is the buyer leaving feedback for the seller. This field will inform eBay about whether or not the buyer received the order line item within the estimated delivery date, which is established once a buyer purchases or commits to buy an item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> A new "Late shipment rate" metric became a new component of Seller Standards beginning in February 2016. On-time shipping means that the seller shipped the item before the "handling time" expired and/or the item was received by the buyer within the estimated delivery date window, which is established once the buyer pays for the order line item. Previously, a seller's account could be dinged just for getting a low rating for the "shippping time" Detailed Seller Rating. </span>
     *
     * @var string $itemArrivedWithinEDDType
     */
    private $itemArrivedWithinEDDType = null;

    /**
     * This field or the <b>ItemArrivedWithinEDDType</b> field should be included if it is the buyer leaving feedback for the seller. This field will inform eBay about whether or not the buyer received the order line item within the estimated delivery date window, which is established once a buyer purchases or commits to buy an item. The value of this field is set to <code>true</code> if the item did arrive within the estimated delivery date, or <code>false</code> if the item arrived past the estimated delivery date.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> A new "Late shipment rate" metric became a new component of Seller Standards beginning in February 2016. On-time shipping means that the seller shipped the item before the "handling time" expired and/or the item was received by the buyer within the estimated delivery date window, which is established once the buyer pays for the order line item. Previously, a seller's account could be dinged just for getting a low rating for the "shippping time" Detailed Seller Rating. </span>
     *
     * @var bool $itemDeliveredWithinEDD
     */
    private $itemDeliveredWithinEDD = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items, but only one <b>ItemID</b>. Unless an
     *  <b>OrderLineItemID</b> is specified in the <b>LeaveFeedback</b> request, the <b>ItemID</b> is
     *  required along with the <b>TargetUser</b> to identify an order line item
     *  existing between the caller and the <b>TargetUser</b> that requires feedback. A
     *  Feedback comment will be posted for this order line item. If there are
     *  multiple order line items between the two order partners that still
     *  require feedback, the <b>TransactionID</b> will also be required to isolate the
     *  targeted order line item. Feedback cannot be left for order line items
     *  with creation dates more than 60 days in the past.
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
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items, but only one <b>ItemID</b>. Unless an
     *  <b>OrderLineItemID</b> is specified in the <b>LeaveFeedback</b> request, the <b>ItemID</b> is
     *  required along with the <b>TargetUser</b> to identify an order line item
     *  existing between the caller and the <b>TargetUser</b> that requires feedback. A
     *  Feedback comment will be posted for this order line item. If there are
     *  multiple order line items between the two order partners that still
     *  require feedback, the <b>TransactionID</b> will also be required to isolate the
     *  targeted order line item. Feedback cannot be left for order line items
     *  with creation dates more than 60 days in the past.
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
     * Gets as commentText
     *
     * Textual comment that explains, clarifies, or justifies the feedback
     *  score specified in <b>CommentType</b>.
     *  <br>
     *
     * @return string
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * Sets a new commentText
     *
     * Textual comment that explains, clarifies, or justifies the feedback
     *  score specified in <b>CommentType</b>.
     *  <br>
     *
     * @param string $commentText
     * @return self
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;
        return $this;
    }

    /**
     * Gets as commentType
     *
     * Score for the Feedback being left. May be Positive, Neutral, or Negative.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Sellers can not leave neutral or negative feedback for buyers. In addition, buyers can not leave neutral or negative feedback within 7 days from the completion of the order for active Power Sellers who have been on eBay for 12 months.
     *  </span>
     *
     * @return string
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Sets a new commentType
     *
     * Score for the Feedback being left. May be Positive, Neutral, or Negative.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Sellers can not leave neutral or negative feedback for buyers. In addition, buyers can not leave neutral or negative feedback within 7 days from the completion of the order for active Power Sellers who have been on eBay for 12 months.
     *  </span>
     *
     * @param string $commentType
     * @return self
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * Unique identifier for an eBay order line item. If there
     *  are multiple order line items between the two order partners that still
     *  require Feedback, the <b>TransactionID</b> is required along with the
     *  corresponding <b>ItemID</b> and <b>TargetUser</b> to isolate the targeted order line
     *  item. If an <b>OrderLineItemID</b> is included in the response to identify a
     *  specific order line item, none of the preceding fields (<b>ItemID</b>,
     *  <b>TransactionID</b>, <b>TargetUser</b>) are needed. Feedback cannot be left for order
     *  line items with creation dates more than 60 days in the past.
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
     * Unique identifier for an eBay order line item. If there
     *  are multiple order line items between the two order partners that still
     *  require Feedback, the <b>TransactionID</b> is required along with the
     *  corresponding <b>ItemID</b> and <b>TargetUser</b> to isolate the targeted order line
     *  item. If an <b>OrderLineItemID</b> is included in the response to identify a
     *  specific order line item, none of the preceding fields (<b>ItemID</b>,
     *  <b>TransactionID</b>, <b>TargetUser</b>) are needed. Feedback cannot be left for order
     *  line items with creation dates more than 60 days in the past.
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
     * Gets as targetUser
     *
     * Specifies the recipient user about whom the Feedback is being left.
     *
     * @return string
     */
    public function getTargetUser()
    {
        return $this->targetUser;
    }

    /**
     * Sets a new targetUser
     *
     * Specifies the recipient user about whom the Feedback is being left.
     *
     * @param string $targetUser
     * @return self
     */
    public function setTargetUser($targetUser)
    {
        $this->targetUser = $targetUser;
        return $this;
    }

    /**
     * Adds as itemRatingDetails
     *
     * Container for detailed seller ratings (DSRs). If a buyer is providing DSRs, they are specified in this container. Sellers have access to the number of ratings they've received, as well as to the averages of the DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemRatingDetailsType $itemRatingDetails
     */
    public function addToSellerItemRatingDetailArray(\Nogrod\eBaySDK\Trading\ItemRatingDetailsType $itemRatingDetails)
    {
        $this->sellerItemRatingDetailArray[] = $itemRatingDetails;
        return $this;
    }

    /**
     * isset sellerItemRatingDetailArray
     *
     * Container for detailed seller ratings (DSRs). If a buyer is providing DSRs, they are specified in this container. Sellers have access to the number of ratings they've received, as well as to the averages of the DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerItemRatingDetailArray($index)
    {
        return isset($this->sellerItemRatingDetailArray[$index]);
    }

    /**
     * unset sellerItemRatingDetailArray
     *
     * Container for detailed seller ratings (DSRs). If a buyer is providing DSRs, they are specified in this container. Sellers have access to the number of ratings they've received, as well as to the averages of the DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerItemRatingDetailArray($index)
    {
        unset($this->sellerItemRatingDetailArray[$index]);
    }

    /**
     * Gets as sellerItemRatingDetailArray
     *
     * Container for detailed seller ratings (DSRs). If a buyer is providing DSRs, they are specified in this container. Sellers have access to the number of ratings they've received, as well as to the averages of the DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *
     * @return \Nogrod\eBaySDK\Trading\ItemRatingDetailsType[]
     */
    public function getSellerItemRatingDetailArray()
    {
        return $this->sellerItemRatingDetailArray;
    }

    /**
     * Sets a new sellerItemRatingDetailArray
     *
     * Container for detailed seller ratings (DSRs). If a buyer is providing DSRs, they are specified in this container. Sellers have access to the number of ratings they've received, as well as to the averages of the DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *
     * @param \Nogrod\eBaySDK\Trading\ItemRatingDetailsType[] $sellerItemRatingDetailArray
     * @return self
     */
    public function setSellerItemRatingDetailArray(array $sellerItemRatingDetailArray)
    {
        $this->sellerItemRatingDetailArray = $sellerItemRatingDetailArray;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. If an <b>OrderLineItemID</b> is included in
     *  the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>TargetUser</b> fields are not
     *  required. Feedback cannot be left for order line items with creation
     *  dates more than 60 days in the past.
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
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. If an <b>OrderLineItemID</b> is included in
     *  the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>TargetUser</b> fields are not
     *  required. Feedback cannot be left for order line items with creation
     *  dates more than 60 days in the past.
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

    /**
     * Gets as itemArrivedWithinEDDType
     *
     * This field or the <b>ItemDeliveredWithinEDD</b> field should be included if it is the buyer leaving feedback for the seller. This field will inform eBay about whether or not the buyer received the order line item within the estimated delivery date, which is established once a buyer purchases or commits to buy an item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> A new "Late shipment rate" metric became a new component of Seller Standards beginning in February 2016. On-time shipping means that the seller shipped the item before the "handling time" expired and/or the item was received by the buyer within the estimated delivery date window, which is established once the buyer pays for the order line item. Previously, a seller's account could be dinged just for getting a low rating for the "shippping time" Detailed Seller Rating. </span>
     *
     * @return string
     */
    public function getItemArrivedWithinEDDType()
    {
        return $this->itemArrivedWithinEDDType;
    }

    /**
     * Sets a new itemArrivedWithinEDDType
     *
     * This field or the <b>ItemDeliveredWithinEDD</b> field should be included if it is the buyer leaving feedback for the seller. This field will inform eBay about whether or not the buyer received the order line item within the estimated delivery date, which is established once a buyer purchases or commits to buy an item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> A new "Late shipment rate" metric became a new component of Seller Standards beginning in February 2016. On-time shipping means that the seller shipped the item before the "handling time" expired and/or the item was received by the buyer within the estimated delivery date window, which is established once the buyer pays for the order line item. Previously, a seller's account could be dinged just for getting a low rating for the "shippping time" Detailed Seller Rating. </span>
     *
     * @param string $itemArrivedWithinEDDType
     * @return self
     */
    public function setItemArrivedWithinEDDType($itemArrivedWithinEDDType)
    {
        $this->itemArrivedWithinEDDType = $itemArrivedWithinEDDType;
        return $this;
    }

    /**
     * Gets as itemDeliveredWithinEDD
     *
     * This field or the <b>ItemArrivedWithinEDDType</b> field should be included if it is the buyer leaving feedback for the seller. This field will inform eBay about whether or not the buyer received the order line item within the estimated delivery date window, which is established once a buyer purchases or commits to buy an item. The value of this field is set to <code>true</code> if the item did arrive within the estimated delivery date, or <code>false</code> if the item arrived past the estimated delivery date.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> A new "Late shipment rate" metric became a new component of Seller Standards beginning in February 2016. On-time shipping means that the seller shipped the item before the "handling time" expired and/or the item was received by the buyer within the estimated delivery date window, which is established once the buyer pays for the order line item. Previously, a seller's account could be dinged just for getting a low rating for the "shippping time" Detailed Seller Rating. </span>
     *
     * @return bool
     */
    public function getItemDeliveredWithinEDD()
    {
        return $this->itemDeliveredWithinEDD;
    }

    /**
     * Sets a new itemDeliveredWithinEDD
     *
     * This field or the <b>ItemArrivedWithinEDDType</b> field should be included if it is the buyer leaving feedback for the seller. This field will inform eBay about whether or not the buyer received the order line item within the estimated delivery date window, which is established once a buyer purchases or commits to buy an item. The value of this field is set to <code>true</code> if the item did arrive within the estimated delivery date, or <code>false</code> if the item arrived past the estimated delivery date.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> A new "Late shipment rate" metric became a new component of Seller Standards beginning in February 2016. On-time shipping means that the seller shipped the item before the "handling time" expired and/or the item was received by the buyer within the estimated delivery date window, which is established once the buyer pays for the order line item. Previously, a seller's account could be dinged just for getting a low rating for the "shippping time" Detailed Seller Rating. </span>
     *
     * @param bool $itemDeliveredWithinEDD
     * @return self
     */
    public function setItemDeliveredWithinEDD($itemDeliveredWithinEDD)
    {
        $this->itemDeliveredWithinEDD = $itemDeliveredWithinEDD;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getCommentText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentText", $value);
        }
        $value = $this->getCommentType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentType", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getTargetUser();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TargetUser", $value);
        }
        $value = $this->getSellerItemRatingDetailArray();
        if (null !== $value && !empty($this->getSellerItemRatingDetailArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerItemRatingDetailArray", array_map(function ($v) {return ["ItemRatingDetails" => $v];}, $value));
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
        }
        $value = $this->getItemArrivedWithinEDDType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemArrivedWithinEDDType", $value);
        }
        $value = $this->getItemDeliveredWithinEDD();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemDeliveredWithinEDD", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentText');
        if (null !== $value) {
            $this->setCommentText($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentType');
        if (null !== $value) {
            $this->setCommentType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TargetUser');
        if (null !== $value) {
            $this->setTargetUser($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerItemRatingDetailArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSellerItemRatingDetailArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ItemRatingDetailsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemArrivedWithinEDDType');
        if (null !== $value) {
            $this->setItemArrivedWithinEDDType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemDeliveredWithinEDD');
        if (null !== $value) {
            $this->setItemDeliveredWithinEDD($value);
        }
    }
}
