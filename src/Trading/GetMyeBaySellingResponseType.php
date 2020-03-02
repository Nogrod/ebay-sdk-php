<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMyeBaySellingResponseType
 *
 * Returns summary and detail information about items the user is selling,
 *  items scheduled to sell, currently listed, sold, and closed but not sold.
 * XSD Type: GetMyeBaySellingResponseType
 */
class GetMyeBaySellingResponseType extends AbstractResponseType
{

    /**
     * This container consists of seller activity counts and values. For this container to be returned, the user must include the <b>SellingSummary.Include</b> field in the request and set its value to <code>true</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingSummaryType $sellingSummary
     */
    private $sellingSummary = null;

    /**
     * This container consists of the items that are scheduled to become active at a future date/time. This container will be returned if the eBay user has one or more listings scheduled to become active at a future date/time.
     *  <br><br>
     *  This container will not be returned in the response (even if there are listings scheduled to become active) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ScheduledList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $scheduledList
     */
    private $scheduledList = null;

    /**
     * This container consists of active listings. This container will be returned if the eBay user has one or more active listings on eBay.com.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more active listings) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ActiveList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $activeList
     */
    private $activeList = null;

    /**
     * This container consists of order line items that have been sold. This container will be returned if the eBay user has one or more listings that have had recent sales.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $soldList
     */
    private $soldList = null;

    /**
     * This container consists of listings that have ended without sales. This container will be returned if the eBay user has one or more listings that have ended without sales.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that ended without sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UnsoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $unsoldList
     */
    private $unsoldList = null;

    /**
     * This container consists of seller activity counts and values. This container is always returned if there has been recent sell activity.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBaySellingSummaryType $summary
     */
    private $summary = null;

    /**
     * This container is no longer applicable to <b>GetMyeBaySelling</b>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bidList
     */
    private $bidList = null;

    /**
     * This container consists of listings that have had sales but have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $deletedFromSoldList
     */
    private $deletedFromSoldList = null;

    /**
     * This container consists of listings that have ended without sales and have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $deletedFromUnsoldList
     */
    private $deletedFromUnsoldList = null;

    /**
     * Gets as sellingSummary
     *
     * This container consists of seller activity counts and values. For this container to be returned, the user must include the <b>SellingSummary.Include</b> field in the request and set its value to <code>true</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingSummaryType
     */
    public function getSellingSummary()
    {
        return $this->sellingSummary;
    }

    /**
     * Sets a new sellingSummary
     *
     * This container consists of seller activity counts and values. For this container to be returned, the user must include the <b>SellingSummary.Include</b> field in the request and set its value to <code>true</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingSummaryType $sellingSummary
     * @return self
     */
    public function setSellingSummary(\Nogrod\eBaySDK\Trading\SellingSummaryType $sellingSummary)
    {
        $this->sellingSummary = $sellingSummary;
        return $this;
    }

    /**
     * Gets as scheduledList
     *
     * This container consists of the items that are scheduled to become active at a future date/time. This container will be returned if the eBay user has one or more listings scheduled to become active at a future date/time.
     *  <br><br>
     *  This container will not be returned in the response (even if there are listings scheduled to become active) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ScheduledList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getScheduledList()
    {
        return $this->scheduledList;
    }

    /**
     * Sets a new scheduledList
     *
     * This container consists of the items that are scheduled to become active at a future date/time. This container will be returned if the eBay user has one or more listings scheduled to become active at a future date/time.
     *  <br><br>
     *  This container will not be returned in the response (even if there are listings scheduled to become active) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ScheduledList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $scheduledList
     * @return self
     */
    public function setScheduledList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $scheduledList)
    {
        $this->scheduledList = $scheduledList;
        return $this;
    }

    /**
     * Gets as activeList
     *
     * This container consists of active listings. This container will be returned if the eBay user has one or more active listings on eBay.com.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more active listings) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ActiveList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getActiveList()
    {
        return $this->activeList;
    }

    /**
     * Sets a new activeList
     *
     * This container consists of active listings. This container will be returned if the eBay user has one or more active listings on eBay.com.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more active listings) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>ActiveList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $activeList
     * @return self
     */
    public function setActiveList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $activeList)
    {
        $this->activeList = $activeList;
        return $this;
    }

    /**
     * Gets as soldList
     *
     * This container consists of order line items that have been sold. This container will be returned if the eBay user has one or more listings that have had recent sales.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType
     */
    public function getSoldList()
    {
        return $this->soldList;
    }

    /**
     * Sets a new soldList
     *
     * This container consists of order line items that have been sold. This container will be returned if the eBay user has one or more listings that have had recent sales.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $soldList
     * @return self
     */
    public function setSoldList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $soldList)
    {
        $this->soldList = $soldList;
        return $this;
    }

    /**
     * Gets as unsoldList
     *
     * This container consists of listings that have ended without sales. This container will be returned if the eBay user has one or more listings that have ended without sales.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that ended without sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UnsoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getUnsoldList()
    {
        return $this->unsoldList;
    }

    /**
     * Sets a new unsoldList
     *
     * This container consists of listings that have ended without sales. This container will be returned if the eBay user has one or more listings that have ended without sales.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that ended without sales) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UnsoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $unsoldList
     * @return self
     */
    public function setUnsoldList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $unsoldList)
    {
        $this->unsoldList = $unsoldList;
        return $this;
    }

    /**
     * Gets as summary
     *
     * This container consists of seller activity counts and values. This container is always returned if there has been recent sell activity.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBaySellingSummaryType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * This container consists of seller activity counts and values. This container is always returned if there has been recent sell activity.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBaySellingSummaryType $summary
     * @return self
     */
    public function setSummary(\Nogrod\eBaySDK\Trading\MyeBaySellingSummaryType $summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as bidList
     *
     * This container is no longer applicable to <b>GetMyeBaySelling</b>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getBidList()
    {
        return $this->bidList;
    }

    /**
     * Sets a new bidList
     *
     * This container is no longer applicable to <b>GetMyeBaySelling</b>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bidList
     * @return self
     */
    public function setBidList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bidList)
    {
        $this->bidList = $bidList;
        return $this;
    }

    /**
     * Gets as deletedFromSoldList
     *
     * This container consists of listings that have had sales but have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType
     */
    public function getDeletedFromSoldList()
    {
        return $this->deletedFromSoldList;
    }

    /**
     * Sets a new deletedFromSoldList
     *
     * This container consists of listings that have had sales but have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $deletedFromSoldList
     * @return self
     */
    public function setDeletedFromSoldList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $deletedFromSoldList)
    {
        $this->deletedFromSoldList = $deletedFromSoldList;
        return $this;
    }

    /**
     * Gets as deletedFromUnsoldList
     *
     * This container consists of listings that have ended without sales and have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getDeletedFromUnsoldList()
    {
        return $this->deletedFromUnsoldList;
    }

    /**
     * Sets a new deletedFromUnsoldList
     *
     * This container consists of listings that have ended without sales and have been deleted from My eBay. This container will be returned if the eBay user has one or more listings with sales that have been deleted from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if there are one or more listings that have sales but have been deleted) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromSoldList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $deletedFromUnsoldList
     * @return self
     */
    public function setDeletedFromUnsoldList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $deletedFromUnsoldList)
    {
        $this->deletedFromUnsoldList = $deletedFromUnsoldList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSellingSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingSummary", $value);
        }
        $value = $this->getScheduledList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ScheduledList", $value);
        }
        $value = $this->getActiveList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActiveList", $value);
        }
        $value = $this->getSoldList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SoldList", $value);
        }
        $value = $this->getUnsoldList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnsoldList", $value);
        }
        $value = $this->getSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Summary", $value);
        }
        $value = $this->getBidList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidList", $value);
        }
        $value = $this->getDeletedFromSoldList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedFromSoldList", $value);
        }
        $value = $this->getDeletedFromUnsoldList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedFromUnsoldList", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingSummary');
        if (null !== $value) {
            $this->setSellingSummary(\Nogrod\eBaySDK\Trading\SellingSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduledList');
        if (null !== $value) {
            $this->setScheduledList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActiveList');
        if (null !== $value) {
            $this->setActiveList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldList');
        if (null !== $value) {
            $this->setSoldList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnsoldList');
        if (null !== $value) {
            $this->setUnsoldList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Summary');
        if (null !== $value) {
            $this->setSummary(\Nogrod\eBaySDK\Trading\MyeBaySellingSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidList');
        if (null !== $value) {
            $this->setBidList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedFromSoldList');
        if (null !== $value) {
            $this->setDeletedFromSoldList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedFromUnsoldList');
        if (null !== $value) {
            $this->setDeletedFromUnsoldList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
    }
}
