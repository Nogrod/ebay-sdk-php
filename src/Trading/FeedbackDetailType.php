<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeedbackDetailType
 *
 * Type used by the <b>FeedbackDetail</b> containers that are returned in the <b>GetFeedback</b> response. Each <b>FeedbackDetail</b> container consists of detailed information on one Feedback entry for a specific
 *  order line item. This container will only be returned if uses the <b>DetailLevel</b> field and sets its value to <code>ReturnAll</code>.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b> Although it is possible for users to retrieve Feedback entries for order line items in which they are not the buyer or seller, some of the fields of the <b>FeedbackDetail</b> container will not be returned or masked. More details on the fields that will not be returned or masked are discussed in this type's individual fields.
 *  </span>
 * XSD Type: FeedbackDetailType
 */
class FeedbackDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The eBay User ID of the user who left the Feedback entry.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This field is returned, but masked to users who are not either the buyer or seller of the order line item.
     *  </span>
     *
     * @var string $commentingUser
     */
    private $commentingUser = null;

    /**
     * This enumeration value is the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback Rating Stars, and the Feedback score ranges associated with those stars.
     *
     * @var string $feedbackRatingStar
     */
    private $feedbackRatingStar = null;

    /**
     * This integer value is the Feedback score of the user indicated in the <b>CommentingUser</b> field.
     *
     * @var int $commentingUserScore
     */
    private $commentingUserScore = null;

    /**
     * This free-form text is the actual comment that the commenting user left for their order partner. The Feedback comment's purpose is to explain, clarify, or justify the Feedback rating specified
     *  in the <b>CommentType</b> field.
     *  <br><br>
     *  The comment is returned as text in the language that the comment was originally left in. This comment will still be displayed even if a submitted Feedback entry is withdrawn.
     *
     * @var string $commentText
     */
    private $commentText = null;

    /**
     * This timestamp (in GMT) indicates the date/time that the Feedback entry was submitted to eBay.
     *
     * @var \DateTime $commentTime
     */
    private $commentTime = null;

    /**
     * This value indicates the rating of the Feedback left by the user identified in the <b>CommentingUser</b> field.
     *  <br><br>
     *  A <b>Positive</b> rating increases a user's Feedback score, a <b>Negative</b> rating decreases a user's Feedback score, and a <b>Neutral</b> rating does not affect a user's Feedback score.
     *  <br><br>
     *  Sellers cannot leave <b>Neutral</b> or <b>Negative</b> ratings for buyers.
     *
     * @var string $commentType
     */
    private $commentType = null;

    /**
     * This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API.
     *
     * @var string $feedbackResponse
     */
    private $feedbackResponse = null;

    /**
     * This free-form text is the explanation that a user can give to a response. Follow-ups to Feedback comments cannot be submitted or edited via the API.
     *
     * @var string $followup
     */
    private $followup = null;

    /**
     * The unique identifier of the eBay listing associated with the Feedback entry. <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '111111111' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
     *  </span>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Indicates whether the recipient of the Feedback entry is the buyer
     *  or the seller for the corresponding order line item.
     *
     * @var string $role
     */
    private $role = null;

    /**
     * The title of the item listing for which Feedback was provided. The title is returned as CDATA. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @var string $itemTitle
     */
    private $itemTitle = null;

    /**
     * The purchase price for the item that was associated with the Feedback entry.
     *  This value can be returned as part of the Detailed Seller Ratings feature.
     *  Not returned if a listing ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $itemPrice
     */
    private $itemPrice = null;

    /**
     * Unique identifier for the Feedback entry.
     *
     * @var string $feedbackID
     */
    private $feedbackID = null;

    /**
     * Unique identifier for an eBay order line item for which the Feedback entry was left. This field is not returned if the Feedback entry was left for an auction listing, since all auction listings have a <b>TransactionID</b> value of 0.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '111111111' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
     *  </span>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * This boolean value indicates whether or not eBay replaced the Feedback comment with a message that the Feedback comment was removed.
     *
     * @var bool $commentReplaced
     */
    private $commentReplaced = null;

    /**
     * This boolean value indicates whether or not eBay replaced the response to the Feedback comment with a message that the response to the Feedback comment was removed.
     *
     * @var bool $responseReplaced
     */
    private $responseReplaced = null;

    /**
     * This boolean value indicates whether or not eBay replaced the follow-up to the Feedback comment with a message that the follow-up to the Feedback comment was removed.
     *
     * @var bool $followUpReplaced
     */
    private $followUpReplaced = null;

    /**
     * This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score. Only Feedback left by verified users can count toward the aggregate score of another user. If a unverified user leaves a Feedback entry, then later becomes verified, that Feedback entry will still have no affect on the recipient user's Feedback score. Or, if a user is verified and at some later date changes to unverified status, the Feedback entry left while the user was verified remains in effect.
     *
     * @var bool $countable
     */
    private $countable = null;

    /**
     * This flag indicates whether or not a Feedback entry was revised (rating was
     *  changed).
     *
     * @var bool $feedbackRevised
     */
    private $feedbackRevised = null;

    /**
     * The unique identifier for an eBay order line item. For Feedback entries that were left for the buyer by the seller, an <b>OrderLineItemID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '11111111-0' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
     *  </span>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as commentingUser
     *
     * The eBay User ID of the user who left the Feedback entry.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This field is returned, but masked to users who are not either the buyer or seller of the order line item.
     *  </span>
     *
     * @return string
     */
    public function getCommentingUser()
    {
        return $this->commentingUser;
    }

    /**
     * Sets a new commentingUser
     *
     * The eBay User ID of the user who left the Feedback entry.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This field is returned, but masked to users who are not either the buyer or seller of the order line item.
     *  </span>
     *
     * @param string $commentingUser
     * @return self
     */
    public function setCommentingUser($commentingUser)
    {
        $this->commentingUser = $commentingUser;
        return $this;
    }

    /**
     * Gets as feedbackRatingStar
     *
     * This enumeration value is the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback Rating Stars, and the Feedback score ranges associated with those stars.
     *
     * @return string
     */
    public function getFeedbackRatingStar()
    {
        return $this->feedbackRatingStar;
    }

    /**
     * Sets a new feedbackRatingStar
     *
     * This enumeration value is the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback Rating Stars, and the Feedback score ranges associated with those stars.
     *
     * @param string $feedbackRatingStar
     * @return self
     */
    public function setFeedbackRatingStar($feedbackRatingStar)
    {
        $this->feedbackRatingStar = $feedbackRatingStar;
        return $this;
    }

    /**
     * Gets as commentingUserScore
     *
     * This integer value is the Feedback score of the user indicated in the <b>CommentingUser</b> field.
     *
     * @return int
     */
    public function getCommentingUserScore()
    {
        return $this->commentingUserScore;
    }

    /**
     * Sets a new commentingUserScore
     *
     * This integer value is the Feedback score of the user indicated in the <b>CommentingUser</b> field.
     *
     * @param int $commentingUserScore
     * @return self
     */
    public function setCommentingUserScore($commentingUserScore)
    {
        $this->commentingUserScore = $commentingUserScore;
        return $this;
    }

    /**
     * Gets as commentText
     *
     * This free-form text is the actual comment that the commenting user left for their order partner. The Feedback comment's purpose is to explain, clarify, or justify the Feedback rating specified
     *  in the <b>CommentType</b> field.
     *  <br><br>
     *  The comment is returned as text in the language that the comment was originally left in. This comment will still be displayed even if a submitted Feedback entry is withdrawn.
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
     * This free-form text is the actual comment that the commenting user left for their order partner. The Feedback comment's purpose is to explain, clarify, or justify the Feedback rating specified
     *  in the <b>CommentType</b> field.
     *  <br><br>
     *  The comment is returned as text in the language that the comment was originally left in. This comment will still be displayed even if a submitted Feedback entry is withdrawn.
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
     * Gets as commentTime
     *
     * This timestamp (in GMT) indicates the date/time that the Feedback entry was submitted to eBay.
     *
     * @return \DateTime
     */
    public function getCommentTime()
    {
        return $this->commentTime;
    }

    /**
     * Sets a new commentTime
     *
     * This timestamp (in GMT) indicates the date/time that the Feedback entry was submitted to eBay.
     *
     * @param \DateTime $commentTime
     * @return self
     */
    public function setCommentTime(\DateTime $commentTime)
    {
        $this->commentTime = $commentTime;
        return $this;
    }

    /**
     * Gets as commentType
     *
     * This value indicates the rating of the Feedback left by the user identified in the <b>CommentingUser</b> field.
     *  <br><br>
     *  A <b>Positive</b> rating increases a user's Feedback score, a <b>Negative</b> rating decreases a user's Feedback score, and a <b>Neutral</b> rating does not affect a user's Feedback score.
     *  <br><br>
     *  Sellers cannot leave <b>Neutral</b> or <b>Negative</b> ratings for buyers.
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
     * This value indicates the rating of the Feedback left by the user identified in the <b>CommentingUser</b> field.
     *  <br><br>
     *  A <b>Positive</b> rating increases a user's Feedback score, a <b>Negative</b> rating decreases a user's Feedback score, and a <b>Neutral</b> rating does not affect a user's Feedback score.
     *  <br><br>
     *  Sellers cannot leave <b>Neutral</b> or <b>Negative</b> ratings for buyers.
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
     * Gets as feedbackResponse
     *
     * This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API.
     *
     * @return string
     */
    public function getFeedbackResponse()
    {
        return $this->feedbackResponse;
    }

    /**
     * Sets a new feedbackResponse
     *
     * This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API.
     *
     * @param string $feedbackResponse
     * @return self
     */
    public function setFeedbackResponse($feedbackResponse)
    {
        $this->feedbackResponse = $feedbackResponse;
        return $this;
    }

    /**
     * Gets as followup
     *
     * This free-form text is the explanation that a user can give to a response. Follow-ups to Feedback comments cannot be submitted or edited via the API.
     *
     * @return string
     */
    public function getFollowup()
    {
        return $this->followup;
    }

    /**
     * Sets a new followup
     *
     * This free-form text is the explanation that a user can give to a response. Follow-ups to Feedback comments cannot be submitted or edited via the API.
     *
     * @param string $followup
     * @return self
     */
    public function setFollowup($followup)
    {
        $this->followup = $followup;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of the eBay listing associated with the Feedback entry. <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '111111111' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
     *  </span>
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
     * The unique identifier of the eBay listing associated with the Feedback entry. <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '111111111' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
     *  </span>
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
     * Gets as role
     *
     * Indicates whether the recipient of the Feedback entry is the buyer
     *  or the seller for the corresponding order line item.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Indicates whether the recipient of the Feedback entry is the buyer
     *  or the seller for the corresponding order line item.
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as itemTitle
     *
     * The title of the item listing for which Feedback was provided. The title is returned as CDATA. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * Sets a new itemTitle
     *
     * The title of the item listing for which Feedback was provided. The title is returned as CDATA. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @param string $itemTitle
     * @return self
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * Gets as itemPrice
     *
     * The purchase price for the item that was associated with the Feedback entry.
     *  This value can be returned as part of the Detailed Seller Ratings feature.
     *  Not returned if a listing ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Sets a new itemPrice
     *
     * The purchase price for the item that was associated with the Feedback entry.
     *  This value can be returned as part of the Detailed Seller Ratings feature.
     *  Not returned if a listing ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $itemPrice
     * @return self
     */
    public function setItemPrice(\Nogrod\eBaySDK\Trading\AmountType $itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }

    /**
     * Gets as feedbackID
     *
     * Unique identifier for the Feedback entry.
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
     * Unique identifier for the Feedback entry.
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
     * Gets as transactionID
     *
     * Unique identifier for an eBay order line item for which the Feedback entry was left. This field is not returned if the Feedback entry was left for an auction listing, since all auction listings have a <b>TransactionID</b> value of 0.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '111111111' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
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
     * Unique identifier for an eBay order line item for which the Feedback entry was left. This field is not returned if the Feedback entry was left for an auction listing, since all auction listings have a <b>TransactionID</b> value of 0.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '111111111' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
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
     * Gets as commentReplaced
     *
     * This boolean value indicates whether or not eBay replaced the Feedback comment with a message that the Feedback comment was removed.
     *
     * @return bool
     */
    public function getCommentReplaced()
    {
        return $this->commentReplaced;
    }

    /**
     * Sets a new commentReplaced
     *
     * This boolean value indicates whether or not eBay replaced the Feedback comment with a message that the Feedback comment was removed.
     *
     * @param bool $commentReplaced
     * @return self
     */
    public function setCommentReplaced($commentReplaced)
    {
        $this->commentReplaced = $commentReplaced;
        return $this;
    }

    /**
     * Gets as responseReplaced
     *
     * This boolean value indicates whether or not eBay replaced the response to the Feedback comment with a message that the response to the Feedback comment was removed.
     *
     * @return bool
     */
    public function getResponseReplaced()
    {
        return $this->responseReplaced;
    }

    /**
     * Sets a new responseReplaced
     *
     * This boolean value indicates whether or not eBay replaced the response to the Feedback comment with a message that the response to the Feedback comment was removed.
     *
     * @param bool $responseReplaced
     * @return self
     */
    public function setResponseReplaced($responseReplaced)
    {
        $this->responseReplaced = $responseReplaced;
        return $this;
    }

    /**
     * Gets as followUpReplaced
     *
     * This boolean value indicates whether or not eBay replaced the follow-up to the Feedback comment with a message that the follow-up to the Feedback comment was removed.
     *
     * @return bool
     */
    public function getFollowUpReplaced()
    {
        return $this->followUpReplaced;
    }

    /**
     * Sets a new followUpReplaced
     *
     * This boolean value indicates whether or not eBay replaced the follow-up to the Feedback comment with a message that the follow-up to the Feedback comment was removed.
     *
     * @param bool $followUpReplaced
     * @return self
     */
    public function setFollowUpReplaced($followUpReplaced)
    {
        $this->followUpReplaced = $followUpReplaced;
        return $this;
    }

    /**
     * Gets as countable
     *
     * This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score. Only Feedback left by verified users can count toward the aggregate score of another user. If a unverified user leaves a Feedback entry, then later becomes verified, that Feedback entry will still have no affect on the recipient user's Feedback score. Or, if a user is verified and at some later date changes to unverified status, the Feedback entry left while the user was verified remains in effect.
     *
     * @return bool
     */
    public function getCountable()
    {
        return $this->countable;
    }

    /**
     * Sets a new countable
     *
     * This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score. Only Feedback left by verified users can count toward the aggregate score of another user. If a unverified user leaves a Feedback entry, then later becomes verified, that Feedback entry will still have no affect on the recipient user's Feedback score. Or, if a user is verified and at some later date changes to unverified status, the Feedback entry left while the user was verified remains in effect.
     *
     * @param bool $countable
     * @return self
     */
    public function setCountable($countable)
    {
        $this->countable = $countable;
        return $this;
    }

    /**
     * Gets as feedbackRevised
     *
     * This flag indicates whether or not a Feedback entry was revised (rating was
     *  changed).
     *
     * @return bool
     */
    public function getFeedbackRevised()
    {
        return $this->feedbackRevised;
    }

    /**
     * Sets a new feedbackRevised
     *
     * This flag indicates whether or not a Feedback entry was revised (rating was
     *  changed).
     *
     * @param bool $feedbackRevised
     * @return self
     */
    public function setFeedbackRevised($feedbackRevised)
    {
        $this->feedbackRevised = $feedbackRevised;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * The unique identifier for an eBay order line item. For Feedback entries that were left for the buyer by the seller, an <b>OrderLineItemID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '11111111-0' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
     *  </span>
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
     * The unique identifier for an eBay order line item. For Feedback entries that were left for the buyer by the seller, an <b>OrderLineItemID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For Feedback entries that were submitted less than five years ago, this field is returned to users who are not the buyer or seller of the order line item, but a dummy value such as '11111111-0' will be displayed. For Feedback entries that were submitted more than five years ago, this field will not be returned at all to users who do not have a relationship (as a buyer or seller) to the Feedback entry.
     *  </span>
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->commentingUser;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CommentingUser', null, (string) $value);
        }
        $value = $this->feedbackRatingStar;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FeedbackRatingStar', null, (string) $value);
        }
        $value = $this->commentingUserScore;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CommentingUserScore', null, (string) $value);
        }
        $value = $this->commentText;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CommentText', null, (string) $value);
        }
        $value = $this->commentTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CommentTime', null, Func::formatDateTime($value));
        }
        $value = $this->commentType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CommentType', null, (string) $value);
        }
        $value = $this->feedbackResponse;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FeedbackResponse', null, (string) $value);
        }
        $value = $this->followup;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Followup', null, (string) $value);
        }
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->role;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Role', null, (string) $value);
        }
        $value = $this->itemTitle;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemTitle', null, (string) $value);
        }
        $value = $this->itemPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'ItemPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->feedbackID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FeedbackID', null, (string) $value);
        }
        $value = $this->transactionID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionID', null, (string) $value);
        }
        $value = $this->commentReplaced;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CommentReplaced', null, ($value ? 'true' : 'false'));
        }
        $value = $this->responseReplaced;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ResponseReplaced', null, ($value ? 'true' : 'false'));
        }
        $value = $this->followUpReplaced;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FollowUpReplaced', null, ($value ? 'true' : 'false'));
        }
        $value = $this->countable;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Countable', null, ($value ? 'true' : 'false'));
        }
        $value = $this->feedbackRevised;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FeedbackRevised', null, ($value ? 'true' : 'false'));
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeedbackDetailType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'CommentingUser':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->commentingUser = $value;
                    }
                    return true;
                case 'FeedbackRatingStar':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feedbackRatingStar = $value;
                    }
                    return true;
                case 'CommentingUserScore':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->commentingUserScore = (int) $value;
                    }
                    return true;
                case 'CommentText':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->commentText = $value;
                    }
                    return true;
                case 'CommentTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->commentTime = new \DateTime($value);
                    }
                    return true;
                case 'CommentType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->commentType = $value;
                    }
                    return true;
                case 'FeedbackResponse':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feedbackResponse = $value;
                    }
                    return true;
                case 'Followup':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->followup = $value;
                    }
                    return true;
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'Role':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->role = $value;
                    }
                    return true;
                case 'ItemTitle':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemTitle = $value;
                    }
                    return true;
                case 'ItemPrice':
                    $this->itemPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'FeedbackID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feedbackID = $value;
                    }
                    return true;
                case 'TransactionID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionID = $value;
                    }
                    return true;
                case 'CommentReplaced':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->commentReplaced = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ResponseReplaced':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->responseReplaced = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'FollowUpReplaced':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->followUpReplaced = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'Countable':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->countable = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'FeedbackRevised':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feedbackRevised = filter_var($value, FILTER_VALIDATE_BOOLEAN);
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
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['CommentingUser'] = $this->commentingUser;
        $data['FeedbackRatingStar'] = $this->feedbackRatingStar;
        $data['CommentingUserScore'] = $this->commentingUserScore;
        $data['CommentText'] = $this->commentText;
        $data['CommentTime'] = Func::jsonDate($this->commentTime);
        $data['CommentType'] = $this->commentType;
        $data['FeedbackResponse'] = $this->feedbackResponse;
        $data['Followup'] = $this->followup;
        $data['ItemID'] = $this->itemID;
        $data['Role'] = $this->role;
        $data['ItemTitle'] = $this->itemTitle;
        $data['ItemPrice'] = $this->itemPrice;
        $data['FeedbackID'] = $this->feedbackID;
        $data['TransactionID'] = $this->transactionID;
        $data['CommentReplaced'] = $this->commentReplaced;
        $data['ResponseReplaced'] = $this->responseReplaced;
        $data['FollowUpReplaced'] = $this->followUpReplaced;
        $data['Countable'] = $this->countable;
        $data['FeedbackRevised'] = $this->feedbackRevised;
        $data['OrderLineItemID'] = $this->orderLineItemID;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
