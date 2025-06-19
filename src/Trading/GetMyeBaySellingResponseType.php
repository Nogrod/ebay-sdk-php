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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetMyeBaySellingResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingSummary');
        if (null !== $value) {
            $this->setSellingSummary(\Nogrod\eBaySDK\Trading\SellingSummaryType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduledList');
        if (null !== $value) {
            $this->setScheduledList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActiveList');
        if (null !== $value) {
            $this->setActiveList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldList');
        if (null !== $value) {
            $this->setSoldList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnsoldList');
        if (null !== $value) {
            $this->setUnsoldList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Summary');
        if (null !== $value) {
            $this->setSummary(\Nogrod\eBaySDK\Trading\MyeBaySellingSummaryType::fromKeyValue($value));
        }
    }
}
