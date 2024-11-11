<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RespondToFeedbackRequestType
 *
 * Enables a seller to reply to Feedback that has been left for a user, or to post a
 *  follow-up comment to a Feedback comment the user has left for someone else.
 * XSD Type: RespondToFeedbackRequestType
 */
class RespondToFeedbackRequestType extends AbstractRequestType
{
    /**
     * A unique identifier for a Feedback record. Buying and selling partners
     *  leave feedback for one another after the completion of an order.
     *  Feedback is left at the order line item level, so a
     *  Feedback comment for each order line item in a Combined Payment order is
     *  expected from the buyer and seller. A unique <b>FeedbackID</b> is created
     *  whenever a buyer leaves feedback for a seller, and vice versa. A
     *  <b>FeedbackID</b> is created by eBay when feedback is left through the eBay
     *  site, or through the <b>LeaveFeedback</b> call. <b>FeedbackIDs</b> can be retrieved
     *  with the <b>GetFeedback</b> call. In the <b>RespondToFeedback</b> call, <b>FeedbackID</b> can
     *  be used as an input filter to respond to a specific Feedback comment.
     *  Since Feedback is always linked to a unique order line item, an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> can also be used to
     *  respond to a Feedback comment.
     *
     * @var string $feedbackID
     */
    private $feedbackID = null;

    /**
     * Unique identifier for the eBay listing to which the user will be responding to Feedback. A listing can have multiple
     *  order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter
     *  to respond to a Feedback comment in the <b>RespondToFeedback</b> call. Unless
     *  the specific Feedback record is identified by a <b>FeedbackID</b> or an
     *  <b>OrderLineItemID</b> in the request, an <b>ItemID</b>/<b>TransactionID</b> pair is
     *  required.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for an eBay order line item. A
     *  <b>TransactionID</b> can be paired up with its corresponding <b>ItemID</b> and used as
     *  an input filter to respond to a Feedback comment in the
     *  <b>RespondToFeedback</b> call. Unless the specific Feedback record is
     *  identified by a <b>FeedbackID</b> or an <b>OrderLineItemID</b> in the request, an
     *  <b>ItemID</b>/<b>TransactionID</b> pair is required.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * The eBay user ID of the caller's order partner. The caller is either
     *  replyting to or following up on this user's Feedback comment.
     *
     * @var string $targetUserID
     */
    private $targetUserID = null;

    /**
     * Specifies whether the response is a reply or a follow-up to a Feedback
     *  comment left by the user identified in the <b>TargetUserID</b> field.
     *
     * @var string $responseType
     */
    private $responseType = null;

    /**
     * Textual comment that the user who is subject of feedback may leave in
     *  response or rebuttal to the Feedback comment. Alternatively, when the
     *  <b>ResponseType</b> is <b>FollowUp</b>, this value contains the text of the follow-up
     *  comment.
     *  <br>
     *
     * @var string $responseText
     */
    private $responseText = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. Since Feedback is always linked to a
     *  unique order line item, an <b>OrderLineItemID</b> can be used to respond
     *  to a Feedback comment.
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair or a <b>FeedbackID</b> is used to identify
     *  a Feedback record, the <b>OrderLineItemID</b> must be specified.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as feedbackID
     *
     * A unique identifier for a Feedback record. Buying and selling partners
     *  leave feedback for one another after the completion of an order.
     *  Feedback is left at the order line item level, so a
     *  Feedback comment for each order line item in a Combined Payment order is
     *  expected from the buyer and seller. A unique <b>FeedbackID</b> is created
     *  whenever a buyer leaves feedback for a seller, and vice versa. A
     *  <b>FeedbackID</b> is created by eBay when feedback is left through the eBay
     *  site, or through the <b>LeaveFeedback</b> call. <b>FeedbackIDs</b> can be retrieved
     *  with the <b>GetFeedback</b> call. In the <b>RespondToFeedback</b> call, <b>FeedbackID</b> can
     *  be used as an input filter to respond to a specific Feedback comment.
     *  Since Feedback is always linked to a unique order line item, an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> can also be used to
     *  respond to a Feedback comment.
     *
     * @return string
     */
    public function getFeedbackID()
    {
        return $this->feedbackID;
    }

    /**
     * Sets a new feedbackID
     *
     * A unique identifier for a Feedback record. Buying and selling partners
     *  leave feedback for one another after the completion of an order.
     *  Feedback is left at the order line item level, so a
     *  Feedback comment for each order line item in a Combined Payment order is
     *  expected from the buyer and seller. A unique <b>FeedbackID</b> is created
     *  whenever a buyer leaves feedback for a seller, and vice versa. A
     *  <b>FeedbackID</b> is created by eBay when feedback is left through the eBay
     *  site, or through the <b>LeaveFeedback</b> call. <b>FeedbackIDs</b> can be retrieved
     *  with the <b>GetFeedback</b> call. In the <b>RespondToFeedback</b> call, <b>FeedbackID</b> can
     *  be used as an input filter to respond to a specific Feedback comment.
     *  Since Feedback is always linked to a unique order line item, an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> can also be used to
     *  respond to a Feedback comment.
     *
     * @param string $feedbackID
     * @return self
     */
    public function setFeedbackID($feedbackID)
    {
        $this->feedbackID = $feedbackID;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Unique identifier for the eBay listing to which the user will be responding to Feedback. A listing can have multiple
     *  order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter
     *  to respond to a Feedback comment in the <b>RespondToFeedback</b> call. Unless
     *  the specific Feedback record is identified by a <b>FeedbackID</b> or an
     *  <b>OrderLineItemID</b> in the request, an <b>ItemID</b>/<b>TransactionID</b> pair is
     *  required.
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
     * Unique identifier for the eBay listing to which the user will be responding to Feedback. A listing can have multiple
     *  order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter
     *  to respond to a Feedback comment in the <b>RespondToFeedback</b> call. Unless
     *  the specific Feedback record is identified by a <b>FeedbackID</b> or an
     *  <b>OrderLineItemID</b> in the request, an <b>ItemID</b>/<b>TransactionID</b> pair is
     *  required.
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
     * Unique identifier for an eBay order line item. A
     *  <b>TransactionID</b> can be paired up with its corresponding <b>ItemID</b> and used as
     *  an input filter to respond to a Feedback comment in the
     *  <b>RespondToFeedback</b> call. Unless the specific Feedback record is
     *  identified by a <b>FeedbackID</b> or an <b>OrderLineItemID</b> in the request, an
     *  <b>ItemID</b>/<b>TransactionID</b> pair is required.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
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
     * Unique identifier for an eBay order line item. A
     *  <b>TransactionID</b> can be paired up with its corresponding <b>ItemID</b> and used as
     *  an input filter to respond to a Feedback comment in the
     *  <b>RespondToFeedback</b> call. Unless the specific Feedback record is
     *  identified by a <b>FeedbackID</b> or an <b>OrderLineItemID</b> in the request, an
     *  <b>ItemID</b>/<b>TransactionID</b> pair is required.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
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
     * Gets as targetUserID
     *
     * The eBay user ID of the caller's order partner. The caller is either
     *  replyting to or following up on this user's Feedback comment.
     *
     * @return string
     */
    public function getTargetUserID()
    {
        return $this->targetUserID;
    }

    /**
     * Sets a new targetUserID
     *
     * The eBay user ID of the caller's order partner. The caller is either
     *  replyting to or following up on this user's Feedback comment.
     *
     * @param string $targetUserID
     * @return self
     */
    public function setTargetUserID($targetUserID)
    {
        $this->targetUserID = $targetUserID;
        return $this;
    }

    /**
     * Gets as responseType
     *
     * Specifies whether the response is a reply or a follow-up to a Feedback
     *  comment left by the user identified in the <b>TargetUserID</b> field.
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * Specifies whether the response is a reply or a follow-up to a Feedback
     *  comment left by the user identified in the <b>TargetUserID</b> field.
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
        return $this;
    }

    /**
     * Gets as responseText
     *
     * Textual comment that the user who is subject of feedback may leave in
     *  response or rebuttal to the Feedback comment. Alternatively, when the
     *  <b>ResponseType</b> is <b>FollowUp</b>, this value contains the text of the follow-up
     *  comment.
     *  <br>
     *
     * @return string
     */
    public function getResponseText()
    {
        return $this->responseText;
    }

    /**
     * Sets a new responseText
     *
     * Textual comment that the user who is subject of feedback may leave in
     *  response or rebuttal to the Feedback comment. Alternatively, when the
     *  <b>ResponseType</b> is <b>FollowUp</b>, this value contains the text of the follow-up
     *  comment.
     *  <br>
     *
     * @param string $responseText
     * @return self
     */
    public function setResponseText($responseText)
    {
        $this->responseText = $responseText;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. Since Feedback is always linked to a
     *  unique order line item, an <b>OrderLineItemID</b> can be used to respond
     *  to a Feedback comment.
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair or a <b>FeedbackID</b> is used to identify
     *  a Feedback record, the <b>OrderLineItemID</b> must be specified.
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
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. Since Feedback is always linked to a
     *  unique order line item, an <b>OrderLineItemID</b> can be used to respond
     *  to a Feedback comment.
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair or a <b>FeedbackID</b> is used to identify
     *  a Feedback record, the <b>OrderLineItemID</b> must be specified.
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
        $value = $this->getFeedbackID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackID", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getTargetUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TargetUserID", $value);
        }
        $value = $this->getResponseType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponseType", $value);
        }
        $value = $this->getResponseText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponseText", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackID');
        if (null !== $value) {
            $this->setFeedbackID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TargetUserID');
        if (null !== $value) {
            $this->setTargetUserID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponseType');
        if (null !== $value) {
            $this->setResponseType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponseText');
        if (null !== $value) {
            $this->setResponseText($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
