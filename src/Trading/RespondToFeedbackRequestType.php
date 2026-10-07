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
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * The eBay user ID of the caller's order partner. The caller is either
     *  replying to or following up on this user's Feedback comment.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
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
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
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
     *  replying to or following up on this user's Feedback comment.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  replying to or following up on this user's Feedback comment.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->feedbackID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FeedbackID', null, (string) $value);
        }
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->transactionID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionID', null, (string) $value);
        }
        $value = $this->targetUserID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TargetUserID', null, (string) $value);
        }
        $value = $this->responseType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ResponseType', null, (string) $value);
        }
        $value = $this->responseText;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ResponseText', null, (string) $value);
        }
        $value = $this->orderLineItemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderLineItemID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RespondToFeedbackRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'FeedbackID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feedbackID = $value;
                    }
                    return true;
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'TransactionID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionID = $value;
                    }
                    return true;
                case 'TargetUserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->targetUserID = $value;
                    }
                    return true;
                case 'ResponseType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->responseType = $value;
                    }
                    return true;
                case 'ResponseText':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->responseText = $value;
                    }
                    return true;
                case 'OrderLineItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderLineItemID = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
