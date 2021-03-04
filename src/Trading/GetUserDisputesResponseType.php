<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserDisputesResponseType
 *
 * Returns a list of disputes that involve the calling user
 *  as buyer or seller, in response to a <b>GetUserDisputesRequest</b>.
 * XSD Type: GetUserDisputesResponseType
 */
class GetUserDisputesResponseType extends AbstractResponseType
{
    /**
     * The index of the first dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned per page: The first page returns a <b>StartingDisputeID</b> value of 1 and the second page returns a <b>StartingDisputeID</b> value of 201.
     *
     * @var string $startingDisputeID
     */
    private $startingDisputeID = null;

    /**
     * The index of the last dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned per page: The first page returns an <b>EndingDisputeID</b> value of 200 and the second page returns an <b>EndingDisputeID</b> value of 228.
     *
     * @var string $endingDisputeID
     */
    private $endingDisputeID = null;

    /**
     * The array of disputes returned.
     *
     * @var \Nogrod\eBaySDK\Trading\DisputeType[] $disputeArray
     */
    private $disputeArray = null;

    /**
     * The number of disputes on each virtual page in the result set.
     *  The virtual page returned is determined by <b>PageNumber</b>.
     *
     * @var int $itemsPerPage
     */
    private $itemsPerPage = null;

    /**
     * The page of the total result set returned in the call. The entire result set
     *  is virtual and the call returns only one page of it.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * The number of disputes that involve the requester as
     *  buyer or seller and match a given filter type.
     *
     * @var \Nogrod\eBaySDK\Trading\DisputeFilterCountType[] $disputeFilterCount
     */
    private $disputeFilterCount = [
        
    ];

    /**
     * The result of the pagination, including the total number
     *  of virtual pages in the result set and the total number of
     *  disputes returned.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Gets as startingDisputeID
     *
     * The index of the first dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned per page: The first page returns a <b>StartingDisputeID</b> value of 1 and the second page returns a <b>StartingDisputeID</b> value of 201.
     *
     * @return string
     */
    public function getStartingDisputeID()
    {
        return $this->startingDisputeID;
    }

    /**
     * Sets a new startingDisputeID
     *
     * The index of the first dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned per page: The first page returns a <b>StartingDisputeID</b> value of 1 and the second page returns a <b>StartingDisputeID</b> value of 201.
     *
     * @param string $startingDisputeID
     * @return self
     */
    public function setStartingDisputeID($startingDisputeID)
    {
        $this->startingDisputeID = $startingDisputeID;
        return $this;
    }

    /**
     * Gets as endingDisputeID
     *
     * The index of the last dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned per page: The first page returns an <b>EndingDisputeID</b> value of 200 and the second page returns an <b>EndingDisputeID</b> value of 228.
     *
     * @return string
     */
    public function getEndingDisputeID()
    {
        return $this->endingDisputeID;
    }

    /**
     * Sets a new endingDisputeID
     *
     * The index of the last dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned per page: The first page returns an <b>EndingDisputeID</b> value of 200 and the second page returns an <b>EndingDisputeID</b> value of 228.
     *
     * @param string $endingDisputeID
     * @return self
     */
    public function setEndingDisputeID($endingDisputeID)
    {
        $this->endingDisputeID = $endingDisputeID;
        return $this;
    }

    /**
     * Adds as dispute
     *
     * The array of disputes returned.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DisputeType $dispute
     */
    public function addToDisputeArray(\Nogrod\eBaySDK\Trading\DisputeType $dispute)
    {
        $this->disputeArray[] = $dispute;
        return $this;
    }

    /**
     * isset disputeArray
     *
     * The array of disputes returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisputeArray($index)
    {
        return isset($this->disputeArray[$index]);
    }

    /**
     * unset disputeArray
     *
     * The array of disputes returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisputeArray($index)
    {
        unset($this->disputeArray[$index]);
    }

    /**
     * Gets as disputeArray
     *
     * The array of disputes returned.
     *
     * @return \Nogrod\eBaySDK\Trading\DisputeType[]
     */
    public function getDisputeArray()
    {
        return $this->disputeArray;
    }

    /**
     * Sets a new disputeArray
     *
     * The array of disputes returned.
     *
     * @param \Nogrod\eBaySDK\Trading\DisputeType[] $disputeArray
     * @return self
     */
    public function setDisputeArray(array $disputeArray)
    {
        $this->disputeArray = $disputeArray;
        return $this;
    }

    /**
     * Gets as itemsPerPage
     *
     * The number of disputes on each virtual page in the result set.
     *  The virtual page returned is determined by <b>PageNumber</b>.
     *
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * Sets a new itemsPerPage
     *
     * The number of disputes on each virtual page in the result set.
     *  The virtual page returned is determined by <b>PageNumber</b>.
     *
     * @param int $itemsPerPage
     * @return self
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * The page of the total result set returned in the call. The entire result set
     *  is virtual and the call returns only one page of it.
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
     * The page of the total result set returned in the call. The entire result set
     *  is virtual and the call returns only one page of it.
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * Adds as disputeFilterCount
     *
     * The number of disputes that involve the requester as
     *  buyer or seller and match a given filter type.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DisputeFilterCountType $disputeFilterCount
     */
    public function addToDisputeFilterCount(\Nogrod\eBaySDK\Trading\DisputeFilterCountType $disputeFilterCount)
    {
        $this->disputeFilterCount[] = $disputeFilterCount;
        return $this;
    }

    /**
     * isset disputeFilterCount
     *
     * The number of disputes that involve the requester as
     *  buyer or seller and match a given filter type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisputeFilterCount($index)
    {
        return isset($this->disputeFilterCount[$index]);
    }

    /**
     * unset disputeFilterCount
     *
     * The number of disputes that involve the requester as
     *  buyer or seller and match a given filter type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisputeFilterCount($index)
    {
        unset($this->disputeFilterCount[$index]);
    }

    /**
     * Gets as disputeFilterCount
     *
     * The number of disputes that involve the requester as
     *  buyer or seller and match a given filter type.
     *
     * @return \Nogrod\eBaySDK\Trading\DisputeFilterCountType[]
     */
    public function getDisputeFilterCount()
    {
        return $this->disputeFilterCount;
    }

    /**
     * Sets a new disputeFilterCount
     *
     * The number of disputes that involve the requester as
     *  buyer or seller and match a given filter type.
     *
     * @param \Nogrod\eBaySDK\Trading\DisputeFilterCountType[] $disputeFilterCount
     * @return self
     */
    public function setDisputeFilterCount(array $disputeFilterCount)
    {
        $this->disputeFilterCount = $disputeFilterCount;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * The result of the pagination, including the total number
     *  of virtual pages in the result set and the total number of
     *  disputes returned.
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
     * The result of the pagination, including the total number
     *  of virtual pages in the result set and the total number of
     *  disputes returned.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getStartingDisputeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartingDisputeID", $value);
        }
        $value = $this->getEndingDisputeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndingDisputeID", $value);
        }
        $value = $this->getDisputeArray();
        if (null !== $value && !empty($this->getDisputeArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeArray", array_map(function ($v) {
                return ["Dispute" => $v];
            }, $value));
        }
        $value = $this->getItemsPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemsPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getDisputeFilterCount();
        if (null !== $value && !empty($this->getDisputeFilterCount())) {
            $writer->write(array_map(function ($v) {
                return ["DisputeFilterCount" => $v];
            }, $value));
        }
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartingDisputeID');
        if (null !== $value) {
            $this->setStartingDisputeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndingDisputeID');
        if (null !== $value) {
            $this->setEndingDisputeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeArray', true);
        if (null !== $value && !empty($value)) {
            $this->setDisputeArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DisputeType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemsPerPage');
        if (null !== $value) {
            $this->setItemsPerPage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeFilterCount', true);
        if (null !== $value && !empty($value)) {
            $this->setDisputeFilterCount(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DisputeFilterCountType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
    }
}
