<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetFeedbackRequestType
 *
 * Retrieves one, many, or all Feedback records for a specific eBay user. There is a filter option in the call request to limit Feedback records to those that are received, or to those that are left for other buyers, as well as a filter option to limit Feedback records to those that are received as a buyer or seller.
 * XSD Type: GetFeedbackRequestType
 */
class GetFeedbackRequestType extends AbstractRequestType
{
    /**
     * The user's eBay User ID is specified in this field. If this field is used, all retrieved Feedback data will be for this eBay user. Specifies the user whose feedback data is to be returned. If this field is omitted in the call request, all retrieved Feedback records will be for the eBay user making the call.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * The unique identifier of a Feedback record. This field is used if the user wants to retrieve a specific Feedback record. If <b>FeedbackID</b> is specified in the call request, all other input fields are ignored.
     *
     * @var string $feedbackID
     */
    private $feedbackID = null;

    /**
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. If <b>ItemID</b> is specified in the <b>GetFeedback</b> request, the returned Feedback record(s) are restricted to the specified <b>ItemID</b>. The maximum number of Feedback records that can be returned is 100.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for an eBay order line item. A
     *  <b>TransactionID</b> can be paired up with its corresponding <b>ItemID</b> and used as
     *  an input filter in the <b>GetFeedback</b> request. If an <b>ItemID</b>/<b>TransactionID</b>
     *  pair or an <b>OrderLineItemID</b> value is used to retrieve a feedback record
     *  on a specific order line item, the <b>FeedbackType</b> and <b>Pagination</b>
     *  fields (if included) are ignored.
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
     * This field is used to retrieve Feedback records of a specific type (Positive, Negative, or Neutral) in <b>FeedbackDetailArray</b>. You can include one or two <b> CommentType</b> fields in the request. If no <b>CommentType</b> value is specified, Feedback records of all types are returned.
     *
     * @var string[] $commentType
     */
    private $commentType = [

    ];

    /**
     * This field is used to restrict retrieved Feedback records to those that the user left for other buyers, Feedback records received as a seller, Feedback records received as a buyer, or Feedback records received as a buyer and seller. The default value is <b>FeedbackReceived</b>, so if the <b>FeedbackType</b> field is omitted in the request, all Feedback records received by the user as a buyer and seller are returned in the response. "Feedback Left" data will not be returned in the call response.
     *
     * @var string $feedbackType
     */
    private $feedbackType = null;

    /**
     * Controls the pagination of the result set. Child elements, <b>EntriesPerPage</b> and
     *  <b>PageNumber</b>, specify the maximum number of individual feedback records to return
     *  per call and which page of data to return. Only applicable if <b>DetailLevel</b> is
     *  set to <b>ReturnAll</b> and the call is returning feedback for a <b>UserID</b>. Feedback
     *  summary data is not paginated, but when pagination is used, it is returned
     *  after the last feedback detail entry.
     *  <br><br>
     *  Accepted values for <b>Pagination.EntriesPerPage</b> for GetFeedback is 25 (the
     *  default), 50, 100, and 200. If you specify a value of zero, or a value
     *  greater than 200, the call fails with an error. If you specify a value between
     *  one and twenty-four, the value is rounded up to 25. Values between 26 and 199
     *  that are not one of the accepted values are rounded down to the nearest
     *  accepted value.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. An <b>OrderLineItemID</b> can be used as an
     *  input filter in the <b>GetFeedback</b> request. If an <b>OrderLineItemID</b> value is
     *  used to retrieve a feedback record on a specific order line item, the
     *  <b>FeedbackType</b> and <b>Pagination</b> fields (if included) are ignored.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as userID
     *
     * The user's eBay User ID is specified in this field. If this field is used, all retrieved Feedback data will be for this eBay user. Specifies the user whose feedback data is to be returned. If this field is omitted in the call request, all retrieved Feedback records will be for the eBay user making the call.
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * The user's eBay User ID is specified in this field. If this field is used, all retrieved Feedback data will be for this eBay user. Specifies the user whose feedback data is to be returned. If this field is omitted in the call request, all retrieved Feedback records will be for the eBay user making the call.
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as feedbackID
     *
     * The unique identifier of a Feedback record. This field is used if the user wants to retrieve a specific Feedback record. If <b>FeedbackID</b> is specified in the call request, all other input fields are ignored.
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
     * The unique identifier of a Feedback record. This field is used if the user wants to retrieve a specific Feedback record. If <b>FeedbackID</b> is specified in the call request, all other input fields are ignored.
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
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. If <b>ItemID</b> is specified in the <b>GetFeedback</b> request, the returned Feedback record(s) are restricted to the specified <b>ItemID</b>. The maximum number of Feedback records that can be returned is 100.
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
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. If <b>ItemID</b> is specified in the <b>GetFeedback</b> request, the returned Feedback record(s) are restricted to the specified <b>ItemID</b>. The maximum number of Feedback records that can be returned is 100.
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
     *  an input filter in the <b>GetFeedback</b> request. If an <b>ItemID</b>/<b>TransactionID</b>
     *  pair or an <b>OrderLineItemID</b> value is used to retrieve a feedback record
     *  on a specific order line item, the <b>FeedbackType</b> and <b>Pagination</b>
     *  fields (if included) are ignored.
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
     *  an input filter in the <b>GetFeedback</b> request. If an <b>ItemID</b>/<b>TransactionID</b>
     *  pair or an <b>OrderLineItemID</b> value is used to retrieve a feedback record
     *  on a specific order line item, the <b>FeedbackType</b> and <b>Pagination</b>
     *  fields (if included) are ignored.
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
     * Adds as commentType
     *
     * This field is used to retrieve Feedback records of a specific type (Positive, Negative, or Neutral) in <b>FeedbackDetailArray</b>. You can include one or two <b> CommentType</b> fields in the request. If no <b>CommentType</b> value is specified, Feedback records of all types are returned.
     *
     * @return self
     * @param string $commentType
     */
    public function addToCommentType($commentType)
    {
        $this->commentType[] = $commentType;
        return $this;
    }

    /**
     * isset commentType
     *
     * This field is used to retrieve Feedback records of a specific type (Positive, Negative, or Neutral) in <b>FeedbackDetailArray</b>. You can include one or two <b> CommentType</b> fields in the request. If no <b>CommentType</b> value is specified, Feedback records of all types are returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommentType($index)
    {
        return isset($this->commentType[$index]);
    }

    /**
     * unset commentType
     *
     * This field is used to retrieve Feedback records of a specific type (Positive, Negative, or Neutral) in <b>FeedbackDetailArray</b>. You can include one or two <b> CommentType</b> fields in the request. If no <b>CommentType</b> value is specified, Feedback records of all types are returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommentType($index)
    {
        unset($this->commentType[$index]);
    }

    /**
     * Gets as commentType
     *
     * This field is used to retrieve Feedback records of a specific type (Positive, Negative, or Neutral) in <b>FeedbackDetailArray</b>. You can include one or two <b> CommentType</b> fields in the request. If no <b>CommentType</b> value is specified, Feedback records of all types are returned.
     *
     * @return string[]
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Sets a new commentType
     *
     * This field is used to retrieve Feedback records of a specific type (Positive, Negative, or Neutral) in <b>FeedbackDetailArray</b>. You can include one or two <b> CommentType</b> fields in the request. If no <b>CommentType</b> value is specified, Feedback records of all types are returned.
     *
     * @param string $commentType
     * @return self
     */
    public function setCommentType(array $commentType)
    {
        $this->commentType = $commentType;
        return $this;
    }

    /**
     * Gets as feedbackType
     *
     * This field is used to restrict retrieved Feedback records to those that the user left for other buyers, Feedback records received as a seller, Feedback records received as a buyer, or Feedback records received as a buyer and seller. The default value is <b>FeedbackReceived</b>, so if the <b>FeedbackType</b> field is omitted in the request, all Feedback records received by the user as a buyer and seller are returned in the response. "Feedback Left" data will not be returned in the call response.
     *
     * @return string
     */
    public function getFeedbackType()
    {
        return $this->feedbackType;
    }

    /**
     * Sets a new feedbackType
     *
     * This field is used to restrict retrieved Feedback records to those that the user left for other buyers, Feedback records received as a seller, Feedback records received as a buyer, or Feedback records received as a buyer and seller. The default value is <b>FeedbackReceived</b>, so if the <b>FeedbackType</b> field is omitted in the request, all Feedback records received by the user as a buyer and seller are returned in the response. "Feedback Left" data will not be returned in the call response.
     *
     * @param string $feedbackType
     * @return self
     */
    public function setFeedbackType($feedbackType)
    {
        $this->feedbackType = $feedbackType;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * Controls the pagination of the result set. Child elements, <b>EntriesPerPage</b> and
     *  <b>PageNumber</b>, specify the maximum number of individual feedback records to return
     *  per call and which page of data to return. Only applicable if <b>DetailLevel</b> is
     *  set to <b>ReturnAll</b> and the call is returning feedback for a <b>UserID</b>. Feedback
     *  summary data is not paginated, but when pagination is used, it is returned
     *  after the last feedback detail entry.
     *  <br><br>
     *  Accepted values for <b>Pagination.EntriesPerPage</b> for GetFeedback is 25 (the
     *  default), 50, 100, and 200. If you specify a value of zero, or a value
     *  greater than 200, the call fails with an error. If you specify a value between
     *  one and twenty-four, the value is rounded up to 25. Values between 26 and 199
     *  that are not one of the accepted values are rounded down to the nearest
     *  accepted value.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * Controls the pagination of the result set. Child elements, <b>EntriesPerPage</b> and
     *  <b>PageNumber</b>, specify the maximum number of individual feedback records to return
     *  per call and which page of data to return. Only applicable if <b>DetailLevel</b> is
     *  set to <b>ReturnAll</b> and the call is returning feedback for a <b>UserID</b>. Feedback
     *  summary data is not paginated, but when pagination is used, it is returned
     *  after the last feedback detail entry.
     *  <br><br>
     *  Accepted values for <b>Pagination.EntriesPerPage</b> for GetFeedback is 25 (the
     *  default), 50, 100, and 200. If you specify a value of zero, or a value
     *  greater than 200, the call fails with an error. If you specify a value between
     *  one and twenty-four, the value is rounded up to 25. Values between 26 and 199
     *  that are not one of the accepted values are rounded down to the nearest
     *  accepted value.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. An <b>OrderLineItemID</b> can be used as an
     *  input filter in the <b>GetFeedback</b> request. If an <b>OrderLineItemID</b> value is
     *  used to retrieve a feedback record on a specific order line item, the
     *  <b>FeedbackType</b> and <b>Pagination</b> fields (if included) are ignored.
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
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. An <b>OrderLineItemID</b> can be used as an
     *  input filter in the <b>GetFeedback</b> request. If an <b>OrderLineItemID</b> value is
     *  used to retrieve a feedback record on a specific order line item, the
     *  <b>FeedbackType</b> and <b>Pagination</b> fields (if included) are ignored.
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
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
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
        $value = $this->getCommentType();
        if (null !== $value && [] !== $this->getCommentType()) {
            $writer->write(array_map(function ($v) {return ["CommentType" => $v];}, $value));
        }
        $value = $this->getFeedbackType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackType", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentType', true);
        if (null !== $value) {
            $this->setCommentType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackType');
        if (null !== $value) {
            $this->setFeedbackType($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
