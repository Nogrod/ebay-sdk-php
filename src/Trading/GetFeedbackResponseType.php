<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetFeedbackResponseType
 *
 * The <b>GetFeedback</b> response contains the feedback summary if a <b>TransactionID</b> or <b>ItemID</b> is specified, and contains the specified user's total feedback score and feedback summary data if a <b>UserID</b> is specified. If no value is supplied, the feedback score and feedback summary for the requesting user will be returned.
 *  <br>
 *  If a detail level value of <b>ReturnAll</b> is specified, an array of all feedback records will be returned.
 * XSD Type: GetFeedbackResponseType
 */
class GetFeedbackResponseType extends AbstractResponseType
{
    /**
     * Contains the individual Feedback records for the user or order line item specified in the request. There is one <b>FeedbackDetail</b> container returned for each Feedback record. Only populated with data when a detail level of <code>ReturnAll</code> is specified in the request. Not returned if you specify a <b>FeedbackID</b> in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackDetailType[] $feedbackDetailArray
     */
    private $feedbackDetailArray = null;

    /**
     * Indicates the total number of Feedback records returned in the the response. Only applicable if Feedback details are returned.
     *
     * @var int $feedbackDetailItemTotal
     */
    private $feedbackDetailItemTotal = null;

    /**
     * Summary Feedback data for the user. Contains counts of positive, neutral,
     *  and negative Feedback for pre-defined time periods. Only applicable if Feedback details are returned.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackSummaryType $feedbackSummary
     */
    private $feedbackSummary = null;

    /**
     * Indicates the total Feedback score for the user.
     *
     * @var int $feedbackScore
     */
    private $feedbackScore = null;

    /**
     * Contains information regarding the pagination of data, including the total number of Feedback entries and the total number of pages required to show all of these Feedback entries. The total number of pages is dependent on the <b>Pagination.EntriesPerPage</b> value (if set). The <b>EntriesPerPage</b> value defaults to <code>25</code> if the <b>Pagination.EntriesPerPage</b> field is not used.
     *  <br><br>
     *  If the call request returns no Feedback entries because there are none, or because the <b>DetailLevel</b> field was not included and set to <code>ReturnAll</code>, the <b>PaginationResult.TotalNumberOfPages</b> and <b>PaginationResult.TotalNumberOfEntries</b> fields are still returned, but with values of <code>0</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Indicates the number of Feedback records that are set to be
     *  returned per page of data (i.e., per call). The <b>EntriesPerPage</b> value defaults to <code>25</code> if the <b>Pagination.EntriesPerPage</b> field is not set in the request.
     *  <br><br>
     *  This field is always returned even if the response is not showing any Feedback entries.
     *
     * @var int $entriesPerPage
     */
    private $entriesPerPage = null;

    /**
     * Indicates the page of data that is currently displaying. The page number to display is set in the <b>Pagination.PageNumber</b> field in the request. If this field is omitted, the <b>PageNumber</b> value defaults to <code>1</code> (first page of Feedback entries). If the integer value input into the <b>Pagination.PageNumber</b> field in the request is higher than the total number of available pages, the call fails with an error.
     *  <br><br>
     *  This field is always returned even if the response is not showing any Feedback entries.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * Adds as feedbackDetail
     *
     * Contains the individual Feedback records for the user or order line item specified in the request. There is one <b>FeedbackDetail</b> container returned for each Feedback record. Only populated with data when a detail level of <code>ReturnAll</code> is specified in the request. Not returned if you specify a <b>FeedbackID</b> in the request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeedbackDetailType $feedbackDetail
     */
    public function addToFeedbackDetailArray(\Nogrod\eBaySDK\Trading\FeedbackDetailType $feedbackDetail)
    {
        $this->feedbackDetailArray[] = $feedbackDetail;
        return $this;
    }

    /**
     * isset feedbackDetailArray
     *
     * Contains the individual Feedback records for the user or order line item specified in the request. There is one <b>FeedbackDetail</b> container returned for each Feedback record. Only populated with data when a detail level of <code>ReturnAll</code> is specified in the request. Not returned if you specify a <b>FeedbackID</b> in the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeedbackDetailArray($index)
    {
        return isset($this->feedbackDetailArray[$index]);
    }

    /**
     * unset feedbackDetailArray
     *
     * Contains the individual Feedback records for the user or order line item specified in the request. There is one <b>FeedbackDetail</b> container returned for each Feedback record. Only populated with data when a detail level of <code>ReturnAll</code> is specified in the request. Not returned if you specify a <b>FeedbackID</b> in the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeedbackDetailArray($index)
    {
        unset($this->feedbackDetailArray[$index]);
    }

    /**
     * Gets as feedbackDetailArray
     *
     * Contains the individual Feedback records for the user or order line item specified in the request. There is one <b>FeedbackDetail</b> container returned for each Feedback record. Only populated with data when a detail level of <code>ReturnAll</code> is specified in the request. Not returned if you specify a <b>FeedbackID</b> in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\FeedbackDetailType[]
     */
    public function getFeedbackDetailArray()
    {
        return $this->feedbackDetailArray;
    }

    /**
     * Sets a new feedbackDetailArray
     *
     * Contains the individual Feedback records for the user or order line item specified in the request. There is one <b>FeedbackDetail</b> container returned for each Feedback record. Only populated with data when a detail level of <code>ReturnAll</code> is specified in the request. Not returned if you specify a <b>FeedbackID</b> in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\FeedbackDetailType[] $feedbackDetailArray
     * @return self
     */
    public function setFeedbackDetailArray(array $feedbackDetailArray)
    {
        $this->feedbackDetailArray = $feedbackDetailArray;
        return $this;
    }

    /**
     * Gets as feedbackDetailItemTotal
     *
     * Indicates the total number of Feedback records returned in the the response. Only applicable if Feedback details are returned.
     *
     * @return int
     */
    public function getFeedbackDetailItemTotal()
    {
        return $this->feedbackDetailItemTotal;
    }

    /**
     * Sets a new feedbackDetailItemTotal
     *
     * Indicates the total number of Feedback records returned in the the response. Only applicable if Feedback details are returned.
     *
     * @param int $feedbackDetailItemTotal
     * @return self
     */
    public function setFeedbackDetailItemTotal($feedbackDetailItemTotal)
    {
        $this->feedbackDetailItemTotal = $feedbackDetailItemTotal;
        return $this;
    }

    /**
     * Gets as feedbackSummary
     *
     * Summary Feedback data for the user. Contains counts of positive, neutral,
     *  and negative Feedback for pre-defined time periods. Only applicable if Feedback details are returned.
     *
     * @return \Nogrod\eBaySDK\Trading\FeedbackSummaryType
     */
    public function getFeedbackSummary()
    {
        return $this->feedbackSummary;
    }

    /**
     * Sets a new feedbackSummary
     *
     * Summary Feedback data for the user. Contains counts of positive, neutral,
     *  and negative Feedback for pre-defined time periods. Only applicable if Feedback details are returned.
     *
     * @param \Nogrod\eBaySDK\Trading\FeedbackSummaryType $feedbackSummary
     * @return self
     */
    public function setFeedbackSummary(\Nogrod\eBaySDK\Trading\FeedbackSummaryType $feedbackSummary)
    {
        $this->feedbackSummary = $feedbackSummary;
        return $this;
    }

    /**
     * Gets as feedbackScore
     *
     * Indicates the total Feedback score for the user.
     *
     * @return int
     */
    public function getFeedbackScore()
    {
        return $this->feedbackScore;
    }

    /**
     * Sets a new feedbackScore
     *
     * Indicates the total Feedback score for the user.
     *
     * @param int $feedbackScore
     * @return self
     */
    public function setFeedbackScore($feedbackScore)
    {
        $this->feedbackScore = $feedbackScore;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * Contains information regarding the pagination of data, including the total number of Feedback entries and the total number of pages required to show all of these Feedback entries. The total number of pages is dependent on the <b>Pagination.EntriesPerPage</b> value (if set). The <b>EntriesPerPage</b> value defaults to <code>25</code> if the <b>Pagination.EntriesPerPage</b> field is not used.
     *  <br><br>
     *  If the call request returns no Feedback entries because there are none, or because the <b>DetailLevel</b> field was not included and set to <code>ReturnAll</code>, the <b>PaginationResult.TotalNumberOfPages</b> and <b>PaginationResult.TotalNumberOfEntries</b> fields are still returned, but with values of <code>0</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationResultType
     */
    public function getPaginationResult()
    {
        return $this->paginationResult;
    }

    /**
     * Sets a new paginationResult
     *
     * Contains information regarding the pagination of data, including the total number of Feedback entries and the total number of pages required to show all of these Feedback entries. The total number of pages is dependent on the <b>Pagination.EntriesPerPage</b> value (if set). The <b>EntriesPerPage</b> value defaults to <code>25</code> if the <b>Pagination.EntriesPerPage</b> field is not used.
     *  <br><br>
     *  If the call request returns no Feedback entries because there are none, or because the <b>DetailLevel</b> field was not included and set to <code>ReturnAll</code>, the <b>PaginationResult.TotalNumberOfPages</b> and <b>PaginationResult.TotalNumberOfEntries</b> fields are still returned, but with values of <code>0</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    /**
     * Gets as entriesPerPage
     *
     * Indicates the number of Feedback records that are set to be
     *  returned per page of data (i.e., per call). The <b>EntriesPerPage</b> value defaults to <code>25</code> if the <b>Pagination.EntriesPerPage</b> field is not set in the request.
     *  <br><br>
     *  This field is always returned even if the response is not showing any Feedback entries.
     *
     * @return int
     */
    public function getEntriesPerPage()
    {
        return $this->entriesPerPage;
    }

    /**
     * Sets a new entriesPerPage
     *
     * Indicates the number of Feedback records that are set to be
     *  returned per page of data (i.e., per call). The <b>EntriesPerPage</b> value defaults to <code>25</code> if the <b>Pagination.EntriesPerPage</b> field is not set in the request.
     *  <br><br>
     *  This field is always returned even if the response is not showing any Feedback entries.
     *
     * @param int $entriesPerPage
     * @return self
     */
    public function setEntriesPerPage($entriesPerPage)
    {
        $this->entriesPerPage = $entriesPerPage;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * Indicates the page of data that is currently displaying. The page number to display is set in the <b>Pagination.PageNumber</b> field in the request. If this field is omitted, the <b>PageNumber</b> value defaults to <code>1</code> (first page of Feedback entries). If the integer value input into the <b>Pagination.PageNumber</b> field in the request is higher than the total number of available pages, the call fails with an error.
     *  <br><br>
     *  This field is always returned even if the response is not showing any Feedback entries.
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Sets a new pageNumber
     *
     * Indicates the page of data that is currently displaying. The page number to display is set in the <b>Pagination.PageNumber</b> field in the request. If this field is omitted, the <b>PageNumber</b> value defaults to <code>1</code> (first page of Feedback entries). If the integer value input into the <b>Pagination.PageNumber</b> field in the request is higher than the total number of available pages, the call fails with an error.
     *  <br><br>
     *  This field is always returned even if the response is not showing any Feedback entries.
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getFeedbackDetailArray();
        if (null !== $value && [] !== $this->getFeedbackDetailArray()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackDetailArray", array_map(function ($v) {return ["FeedbackDetail" => $v];}, $value));
        }
        $value = $this->getFeedbackDetailItemTotal();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackDetailItemTotal", $value);
        }
        $value = $this->getFeedbackSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackSummary", $value);
        }
        $value = $this->getFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackScore", $value);
        }
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
        }
        $value = $this->getEntriesPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EntriesPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetFeedbackResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackDetailArray');
        if (null !== $value) {
            $this->setFeedbackDetailArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeedbackDetailType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}FeedbackDetail'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackDetailItemTotal');
        if (null !== $value) {
            $this->setFeedbackDetailItemTotal($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackSummary');
        if (null !== $value) {
            $this->setFeedbackSummary(\Nogrod\eBaySDK\Trading\FeedbackSummaryType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackScore');
        if (null !== $value) {
            $this->setFeedbackScore($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EntriesPerPage');
        if (null !== $value) {
            $this->setEntriesPerPage($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
    }
}
