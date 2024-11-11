<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetVeROReportStatusResponseType
 *
 * Base response of the <strong>GetVeROReportStatus</strong> call. This response contains status information for items reported by the VeRO Program member.
 * XSD Type: GetVeROReportStatusResponseType
 */
class GetVeROReportStatusResponseType extends AbstractResponseType
{
    /**
     * Contains information regarding the pagination of data (if pagination is
     *  used), including total number of pages and total number of entries.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * If true, there are more items yet to be retrieved. Additional
     *  calls with higher page numbers or more items per page must
     *  be made to retrieve these items. Not returned if no items match the
     *  request.
     *
     * @var bool $hasMoreItems
     */
    private $hasMoreItems = null;

    /**
     * Indicates the maximum number of Reported Item objects that can be returned in any given call.
     *  <br/>
     *
     * @var int $itemsPerPage
     */
    private $itemsPerPage = null;

    /**
     * Indicates the page of data returned by the current call. For instance,
     *  for the first set of items can be returned, this field has a value of
     *  one.
     *  <br/>
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * The packet ID for status being returned.
     *
     * @var int $veROReportPacketID
     */
    private $veROReportPacketID = null;

    /**
     * Status of the packet.
     *
     * @var string $veROReportPacketStatus
     */
    private $veROReportPacketStatus = null;

    /**
     * This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     *
     * @var \Nogrod\eBaySDK\Trading\VeROReportedItemType[] $reportedItemDetails
     */
    private $reportedItemDetails = null;

    /**
     * Gets as paginationResult
     *
     * Contains information regarding the pagination of data (if pagination is
     *  used), including total number of pages and total number of entries.
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
     * Contains information regarding the pagination of data (if pagination is
     *  used), including total number of pages and total number of entries.
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
     * Gets as hasMoreItems
     *
     * If true, there are more items yet to be retrieved. Additional
     *  calls with higher page numbers or more items per page must
     *  be made to retrieve these items. Not returned if no items match the
     *  request.
     *
     * @return bool
     */
    public function getHasMoreItems()
    {
        return $this->hasMoreItems;
    }

    /**
     * Sets a new hasMoreItems
     *
     * If true, there are more items yet to be retrieved. Additional
     *  calls with higher page numbers or more items per page must
     *  be made to retrieve these items. Not returned if no items match the
     *  request.
     *
     * @param bool $hasMoreItems
     * @return self
     */
    public function setHasMoreItems($hasMoreItems)
    {
        $this->hasMoreItems = $hasMoreItems;
        return $this;
    }

    /**
     * Gets as itemsPerPage
     *
     * Indicates the maximum number of Reported Item objects that can be returned in any given call.
     *  <br/>
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
     * Indicates the maximum number of Reported Item objects that can be returned in any given call.
     *  <br/>
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
     * Indicates the page of data returned by the current call. For instance,
     *  for the first set of items can be returned, this field has a value of
     *  one.
     *  <br/>
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
     * Indicates the page of data returned by the current call. For instance,
     *  for the first set of items can be returned, this field has a value of
     *  one.
     *  <br/>
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
     * Gets as veROReportPacketID
     *
     * The packet ID for status being returned.
     *
     * @return int
     */
    public function getVeROReportPacketID()
    {
        return $this->veROReportPacketID;
    }

    /**
     * Sets a new veROReportPacketID
     *
     * The packet ID for status being returned.
     *
     * @param int $veROReportPacketID
     * @return self
     */
    public function setVeROReportPacketID($veROReportPacketID)
    {
        $this->veROReportPacketID = $veROReportPacketID;
        return $this;
    }

    /**
     * Gets as veROReportPacketStatus
     *
     * Status of the packet.
     *
     * @return string
     */
    public function getVeROReportPacketStatus()
    {
        return $this->veROReportPacketStatus;
    }

    /**
     * Sets a new veROReportPacketStatus
     *
     * Status of the packet.
     *
     * @param string $veROReportPacketStatus
     * @return self
     */
    public function setVeROReportPacketStatus($veROReportPacketStatus)
    {
        $this->veROReportPacketStatus = $veROReportPacketStatus;
        return $this;
    }

    /**
     * Adds as reportedItem
     *
     * This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VeROReportedItemType $reportedItem
     */
    public function addToReportedItemDetails(\Nogrod\eBaySDK\Trading\VeROReportedItemType $reportedItem)
    {
        $this->reportedItemDetails[] = $reportedItem;
        return $this;
    }

    /**
     * isset reportedItemDetails
     *
     * This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReportedItemDetails($index)
    {
        return isset($this->reportedItemDetails[$index]);
    }

    /**
     * unset reportedItemDetails
     *
     * This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReportedItemDetails($index)
    {
        unset($this->reportedItemDetails[$index]);
    }

    /**
     * Gets as reportedItemDetails
     *
     * This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     *
     * @return \Nogrod\eBaySDK\Trading\VeROReportedItemType[]
     */
    public function getReportedItemDetails()
    {
        return $this->reportedItemDetails;
    }

    /**
     * Sets a new reportedItemDetails
     *
     * This container of one or more reported items that match the input criteria in the call request. Returns empty if no items are available that match the request.
     *
     * @param \Nogrod\eBaySDK\Trading\VeROReportedItemType[] $reportedItemDetails
     * @return self
     */
    public function setReportedItemDetails(array $reportedItemDetails)
    {
        $this->reportedItemDetails = $reportedItemDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
        }
        $value = $this->getHasMoreItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasMoreItems", $value);
        }
        $value = $this->getItemsPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemsPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getVeROReportPacketID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VeROReportPacketID", $value);
        }
        $value = $this->getVeROReportPacketStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VeROReportPacketStatus", $value);
        }
        $value = $this->getReportedItemDetails();
        if (null !== $value && [] !== $this->getReportedItemDetails()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReportedItemDetails", array_map(function ($v) {return ["ReportedItem" => $v];}, $value));
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasMoreItems');
        if (null !== $value) {
            $this->setHasMoreItems(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemsPerPage');
        if (null !== $value) {
            $this->setItemsPerPage($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}VeROReportPacketID');
        if (null !== $value) {
            $this->setVeROReportPacketID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}VeROReportPacketStatus');
        if (null !== $value) {
            $this->setVeROReportPacketStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReportedItemDetails');
        if (null !== $value) {
            $this->setReportedItemDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\VeROReportedItemType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}ReportedItem'));}, $value));
        }
    }
}
