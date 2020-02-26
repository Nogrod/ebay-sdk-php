<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FeedbackDetailType
 *
 * Type used by the <b>FeedbackDetails</b> containers that are returned in the <b>GetUserProfile</b> response. Each <b>FeedbackDetails</b> container consists of detailed information on one Feedback entry for the specified eBay user. <b>FeedbackDetails</b> containers are only returned if an <b>IncludeSelector</b> field is included in the request with a value set to <code>FeedbackDetails</code>.
 * XSD Type: FeedbackDetailType
 */
class FeedbackDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This enumeration value provides the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback Rating Stars, and the Feedback score ranges associated with those stars.
     *
     * @var string $feedbackRatingStar
     */
    private $feedbackRatingStar = null;

    /**
     * The eBay User ID of the user who left the Feedback entry.
     *
     * @var string $commentingUser
     */
    private $commentingUser = null;

    /**
     * This integer value is the Feedback score of the user indicated in the <b>CommentingUser</b> field.
     *
     * @var int $commentingUserScore
     */
    private $commentingUserScore = null;

    /**
     * This free-form text is the actual comment that the commenting user left for their order partner. The Feedback comment's purpose is to explain, clarify, or justify the Feedback rating specified in the <b>CommentType</b> field.
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
     *  A <b>Positive</b> rating increases a user's Feedback score by a value of 1, a <b>Negative</b> rating decreases a user's Feedback score by a value of 1, and a <b>Neutral</b> rating does not affect a user's Feedback score.
     *  <br><br>
     *  Sellers cannot leave <b>Neutral</b> or <b>Negative</b> ratings for buyers.
     *
     * @var string $commentType
     */
    private $commentType = null;

    /**
     * This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API. This field is returned as an empty tag if no response to the Feedback entry has been submitted.
     *
     * @var string $feedbackResponse
     */
    private $feedbackResponse = null;

    /**
     * This free-form text is the explanation that a user can give to a submitted Feedback response. Follow-ups to Feedback comments cannot be submitted or edited via the API. This field is returned as an empty tag if no Follow-Up to the Feedback response has been submitted.
     *
     * @var string $followUp
     */
    private $followUp = null;

    /**
     * The unique identifier of the listing associated with the Feedback entry. For Feedback entries that were left for the buyer by the seller, an <b>ItemID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This enumeration value indicates whether the specified eBay user (and recipient of the Feedback entry) was the buyer
     *  or the seller for the corresponding order line item.
     *
     * @var string $role
     */
    private $role = null;

    /**
     * The title of the listing for which Feedback was provided. This field may not be returned for a listing that ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @var string $itemTitle
     */
    private $itemTitle = null;

    /**
     * The purchase price for the order line item associated with the Feedback entry. This field may not be returned for a listing that ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $itemPrice
     */
    private $itemPrice = null;

    /**
     * Unique identifier for the Feedback entry. This identifier is auto-generated by eBay at the time of Feedback submittal.
     *
     * @var string $feedbackID
     */
    private $feedbackID = null;

    /**
     * Unique identifier for the order line item for which the Feedback entry was left. The value of this field is always '0' for auction listings since auctions only have one winner/buyer, and only the <b>ItemID</b> value is needed to identify the transaction. For Feedback entries that were left for the buyer by the seller, a <b>TransactionID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
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
     * This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score.
     *
     * @var bool $countable
     */
    private $countable = null;

    /**
     * Gets as feedbackRatingStar
     *
     * This enumeration value provides the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback Rating Stars, and the Feedback score ranges associated with those stars.
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
     * This enumeration value provides the Feedback Rating Star of the user indicated in the <b>CommentingUser</b> field. See <a href="types/FeedbackRatingStarCodeType.html">FeedbackRatingStarCodeType</a> for the full list of Feedback Rating Stars, and the Feedback score ranges associated with those stars.
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
     * Gets as commentingUser
     *
     * The eBay User ID of the user who left the Feedback entry.
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
     * This free-form text is the actual comment that the commenting user left for their order partner. The Feedback comment's purpose is to explain, clarify, or justify the Feedback rating specified in the <b>CommentType</b> field.
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
     * This free-form text is the actual comment that the commenting user left for their order partner. The Feedback comment's purpose is to explain, clarify, or justify the Feedback rating specified in the <b>CommentType</b> field.
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
     *  A <b>Positive</b> rating increases a user's Feedback score by a value of 1, a <b>Negative</b> rating decreases a user's Feedback score by a value of 1, and a <b>Neutral</b> rating does not affect a user's Feedback score.
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
     *  A <b>Positive</b> rating increases a user's Feedback score by a value of 1, a <b>Negative</b> rating decreases a user's Feedback score by a value of 1, and a <b>Neutral</b> rating does not affect a user's Feedback score.
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
     * This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API. This field is returned as an empty tag if no response to the Feedback entry has been submitted.
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
     * This free-form text is the comment that the recipient of the Feedback may leave in response or rebuttal to the Feedback. Responses to Feedback comments cannot be submitted or edited via the API. This field is returned as an empty tag if no response to the Feedback entry has been submitted.
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
     * Gets as followUp
     *
     * This free-form text is the explanation that a user can give to a submitted Feedback response. Follow-ups to Feedback comments cannot be submitted or edited via the API. This field is returned as an empty tag if no Follow-Up to the Feedback response has been submitted.
     *
     * @return string
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * Sets a new followUp
     *
     * This free-form text is the explanation that a user can give to a submitted Feedback response. Follow-ups to Feedback comments cannot be submitted or edited via the API. This field is returned as an empty tag if no Follow-Up to the Feedback response has been submitted.
     *
     * @param string $followUp
     * @return self
     */
    public function setFollowUp($followUp)
    {
        $this->followUp = $followUp;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing associated with the Feedback entry. For Feedback entries that were left for the buyer by the seller, an <b>ItemID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
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
     * The unique identifier of the listing associated with the Feedback entry. For Feedback entries that were left for the buyer by the seller, an <b>ItemID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
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
     * This enumeration value indicates whether the specified eBay user (and recipient of the Feedback entry) was the buyer
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
     * This enumeration value indicates whether the specified eBay user (and recipient of the Feedback entry) was the buyer
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
     * The title of the listing for which Feedback was provided. This field may not be returned for a listing that ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
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
     * The title of the listing for which Feedback was provided. This field may not be returned for a listing that ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemTitle</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
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
     * The purchase price for the order line item associated with the Feedback entry. This field may not be returned for a listing that ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Sets a new itemPrice
     *
     * The purchase price for the order line item associated with the Feedback entry. This field may not be returned for a listing that ended more than 90 days ago. For Feedback entries that were left for the buyer by the seller, an <b>ItemPrice</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $itemPrice
     * @return self
     */
    public function setItemPrice(\Nogrod\eBaySDK\Shopping\AmountType $itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }

    /**
     * Gets as feedbackID
     *
     * Unique identifier for the Feedback entry. This identifier is auto-generated by eBay at the time of Feedback submittal.
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
     * Unique identifier for the Feedback entry. This identifier is auto-generated by eBay at the time of Feedback submittal.
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
     * Unique identifier for the order line item for which the Feedback entry was left. The value of this field is always '0' for auction listings since auctions only have one winner/buyer, and only the <b>ItemID</b> value is needed to identify the transaction. For Feedback entries that were left for the buyer by the seller, a <b>TransactionID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
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
     * Unique identifier for the order line item for which the Feedback entry was left. The value of this field is always '0' for auction listings since auctions only have one winner/buyer, and only the <b>ItemID</b> value is needed to identify the transaction. For Feedback entries that were left for the buyer by the seller, a <b>TransactionID</b> value will not be returned to a user that was not involved in the transaction as either the buyer or seller.
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
     * This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score.
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
     * This boolean value indicates whether or not the Feedback entry will affect the user's Feedback score.
     *
     * @param bool $countable
     * @return self
     */
    public function setCountable($countable)
    {
        $this->countable = $countable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFeedbackRatingStar();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackRatingStar", $value);
        }
        $value = $this->getCommentingUser();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentingUser", $value);
        }
        $value = $this->getCommentingUserScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentingUserScore", $value);
        }
        $value = $this->getCommentText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentText", $value);
        }
        $value = $this->getCommentTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentTime", $value);
        }
        $value = $this->getCommentType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentType", $value);
        }
        $value = $this->getFeedbackResponse();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackResponse", $value);
        }
        $value = $this->getFollowUp();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FollowUp", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getRole();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Role", $value);
        }
        $value = $this->getItemTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemTitle", $value);
        }
        $value = $this->getItemPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemPrice", $value);
        }
        $value = $this->getFeedbackID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getCommentReplaced();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentReplaced", $value);
        }
        $value = $this->getResponseReplaced();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponseReplaced", $value);
        }
        $value = $this->getFollowUpReplaced();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FollowUpReplaced", $value);
        }
        $value = $this->getCountable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Countable", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackRatingStar');
        if (null !== $value) {
            $this->setFeedbackRatingStar($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentingUser');
        if (null !== $value) {
            $this->setCommentingUser($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentingUserScore');
        if (null !== $value) {
            $this->setCommentingUserScore($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentText');
        if (null !== $value) {
            $this->setCommentText($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentTime');
        if (null !== $value) {
            $this->setCommentTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentType');
        if (null !== $value) {
            $this->setCommentType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackResponse');
        if (null !== $value) {
            $this->setFeedbackResponse($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FollowUp');
        if (null !== $value) {
            $this->setFollowUp($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Role');
        if (null !== $value) {
            $this->setRole($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTitle');
        if (null !== $value) {
            $this->setItemTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemPrice');
        if (null !== $value) {
            $this->setItemPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackID');
        if (null !== $value) {
            $this->setFeedbackID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentReplaced');
        if (null !== $value) {
            $this->setCommentReplaced($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponseReplaced');
        if (null !== $value) {
            $this->setResponseReplaced($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FollowUpReplaced');
        if (null !== $value) {
            $this->setFollowUpReplaced($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Countable');
        if (null !== $value) {
            $this->setCountable($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
