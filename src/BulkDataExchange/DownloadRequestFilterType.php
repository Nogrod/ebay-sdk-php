<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DownloadRequestFilterType
 *
 * Type defining the <b>downloadRequestFilter</b> container, which is parent container of any and all filters used in the <b>startDownloadJob</b> request.
 * XSD Type: DownloadRequestFilter
 */
class DownloadRequestFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * If the <b>startDownloadJob</b> request is using 'FeeSettlementReport' as the <b>downloadJobType</b>, the <b>feeSettlementReportFilter</b> container allows the user to set a <b>startTime</b> value, and only fee data on invoices sent to the seller after this date-time are returned in a <b>FeeSettlementReport</b> response.
     *  <br/><br/>
     *  This container is only applicable if the <b>downloadJobType</b> value is set to 'FeeSettlementReport'.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\FeeSettlementReportFilterType $feeSettlementReportFilter
     */
    private $feeSettlementReportFilter = null;

    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\GetItemInfoReportFilterType $getItemInfoReportFilter
     */
    private $getItemInfoReportFilter = null;

    /**
     * Reserved for internal or future use.
     *
     * @var string[] $siteFilter
     */
    private $siteFilter = null;

    /**
     * If the <b>startDownloadJob</b> request is using 'ActiveInventoryReport' as the <b>downloadJobType</b>, the <b>activeInventoryReportFilter</b> container allows the user to control which containers/fields are returned in an <b>ActiveInventoryReport</b> response.
     *  <br/><br/>
     *  This container is only applicable if the <b>downloadJobType</b> value is set to 'ActiveInventoryReport'.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\ActiveInventoryReportFilterType $activeInventoryReportFilter
     */
    private $activeInventoryReportFilter = null;

    /**
     * Reserved for internal or future use.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\DateFilterType $dateFilter
     */
    private $dateFilter = null;

    /**
     * If the <b>downloadJobType</b> value is set to 'SoldReport', the <b>soldReportFilter</b> container allows the user to control whether (and when) the buyers' shipping addresses are returned in an <b>SoldReport</b> response.
     *  <br/><br/>
     *  This container is applicable only if the <b>downloadJobType</b> value is set to 'SoldReport'.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\SoldReportFilterType $soldReportFilter
     */
    private $soldReportFilter = null;

    /**
     * If the <b>downloadJobType</b> value is set to 'OrderReport', the <b>orderReportFilter</b> container is required and allows the user to set time, order status, or order type (eBay.com or Half.com) filters, and to specify whether or not to include Final Value Fees for each order line item in the report. <br/><br/>
     *  This container is applicable only if the <b>downloadJobType</b> value is set to 'OrderReport'.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\OrderReportFilterType $orderReportFilter
     */
    private $orderReportFilter = null;

    /**
     * Gets as feeSettlementReportFilter
     *
     * If the <b>startDownloadJob</b> request is using 'FeeSettlementReport' as the <b>downloadJobType</b>, the <b>feeSettlementReportFilter</b> container allows the user to set a <b>startTime</b> value, and only fee data on invoices sent to the seller after this date-time are returned in a <b>FeeSettlementReport</b> response.
     *  <br/><br/>
     *  This container is only applicable if the <b>downloadJobType</b> value is set to 'FeeSettlementReport'.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\FeeSettlementReportFilterType
     */
    public function getFeeSettlementReportFilter()
    {
        return $this->feeSettlementReportFilter;
    }

    /**
     * Sets a new feeSettlementReportFilter
     *
     * If the <b>startDownloadJob</b> request is using 'FeeSettlementReport' as the <b>downloadJobType</b>, the <b>feeSettlementReportFilter</b> container allows the user to set a <b>startTime</b> value, and only fee data on invoices sent to the seller after this date-time are returned in a <b>FeeSettlementReport</b> response.
     *  <br/><br/>
     *  This container is only applicable if the <b>downloadJobType</b> value is set to 'FeeSettlementReport'.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\FeeSettlementReportFilterType $feeSettlementReportFilter
     * @return self
     */
    public function setFeeSettlementReportFilter(\Nogrod\eBaySDK\BulkDataExchange\FeeSettlementReportFilterType $feeSettlementReportFilter)
    {
        $this->feeSettlementReportFilter = $feeSettlementReportFilter;
        return $this;
    }

    /**
     * Gets as getItemInfoReportFilter
     *
     * Reserved for future use.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\GetItemInfoReportFilterType
     */
    public function getGetItemInfoReportFilter()
    {
        return $this->getItemInfoReportFilter;
    }

    /**
     * Sets a new getItemInfoReportFilter
     *
     * Reserved for future use.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\GetItemInfoReportFilterType $getItemInfoReportFilter
     * @return self
     */
    public function setGetItemInfoReportFilter(\Nogrod\eBaySDK\BulkDataExchange\GetItemInfoReportFilterType $getItemInfoReportFilter)
    {
        $this->getItemInfoReportFilter = $getItemInfoReportFilter;
        return $this;
    }

    /**
     * Adds as globalId
     *
     * Reserved for internal or future use.
     *
     * @return self
     * @param string $globalId
     */
    public function addToSiteFilter($globalId)
    {
        $this->siteFilter[] = $globalId;
        return $this;
    }

    /**
     * isset siteFilter
     *
     * Reserved for internal or future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSiteFilter($index)
    {
        return isset($this->siteFilter[$index]);
    }

    /**
     * unset siteFilter
     *
     * Reserved for internal or future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSiteFilter($index)
    {
        unset($this->siteFilter[$index]);
    }

    /**
     * Gets as siteFilter
     *
     * Reserved for internal or future use.
     *
     * @return string[]
     */
    public function getSiteFilter()
    {
        return $this->siteFilter;
    }

    /**
     * Sets a new siteFilter
     *
     * Reserved for internal or future use.
     *
     * @param string[] $siteFilter
     * @return self
     */
    public function setSiteFilter(array $siteFilter)
    {
        $this->siteFilter = $siteFilter;
        return $this;
    }

    /**
     * Gets as activeInventoryReportFilter
     *
     * If the <b>startDownloadJob</b> request is using 'ActiveInventoryReport' as the <b>downloadJobType</b>, the <b>activeInventoryReportFilter</b> container allows the user to control which containers/fields are returned in an <b>ActiveInventoryReport</b> response.
     *  <br/><br/>
     *  This container is only applicable if the <b>downloadJobType</b> value is set to 'ActiveInventoryReport'.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\ActiveInventoryReportFilterType
     */
    public function getActiveInventoryReportFilter()
    {
        return $this->activeInventoryReportFilter;
    }

    /**
     * Sets a new activeInventoryReportFilter
     *
     * If the <b>startDownloadJob</b> request is using 'ActiveInventoryReport' as the <b>downloadJobType</b>, the <b>activeInventoryReportFilter</b> container allows the user to control which containers/fields are returned in an <b>ActiveInventoryReport</b> response.
     *  <br/><br/>
     *  This container is only applicable if the <b>downloadJobType</b> value is set to 'ActiveInventoryReport'.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\ActiveInventoryReportFilterType $activeInventoryReportFilter
     * @return self
     */
    public function setActiveInventoryReportFilter(\Nogrod\eBaySDK\BulkDataExchange\ActiveInventoryReportFilterType $activeInventoryReportFilter)
    {
        $this->activeInventoryReportFilter = $activeInventoryReportFilter;
        return $this;
    }

    /**
     * Gets as dateFilter
     *
     * Reserved for internal or future use.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\DateFilterType
     */
    public function getDateFilter()
    {
        return $this->dateFilter;
    }

    /**
     * Sets a new dateFilter
     *
     * Reserved for internal or future use.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\DateFilterType $dateFilter
     * @return self
     */
    public function setDateFilter(\Nogrod\eBaySDK\BulkDataExchange\DateFilterType $dateFilter)
    {
        $this->dateFilter = $dateFilter;
        return $this;
    }

    /**
     * Gets as soldReportFilter
     *
     * If the <b>downloadJobType</b> value is set to 'SoldReport', the <b>soldReportFilter</b> container allows the user to control whether (and when) the buyers' shipping addresses are returned in an <b>SoldReport</b> response.
     *  <br/><br/>
     *  This container is applicable only if the <b>downloadJobType</b> value is set to 'SoldReport'.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\SoldReportFilterType
     */
    public function getSoldReportFilter()
    {
        return $this->soldReportFilter;
    }

    /**
     * Sets a new soldReportFilter
     *
     * If the <b>downloadJobType</b> value is set to 'SoldReport', the <b>soldReportFilter</b> container allows the user to control whether (and when) the buyers' shipping addresses are returned in an <b>SoldReport</b> response.
     *  <br/><br/>
     *  This container is applicable only if the <b>downloadJobType</b> value is set to 'SoldReport'.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\SoldReportFilterType $soldReportFilter
     * @return self
     */
    public function setSoldReportFilter(\Nogrod\eBaySDK\BulkDataExchange\SoldReportFilterType $soldReportFilter)
    {
        $this->soldReportFilter = $soldReportFilter;
        return $this;
    }

    /**
     * Gets as orderReportFilter
     *
     * If the <b>downloadJobType</b> value is set to 'OrderReport', the <b>orderReportFilter</b> container is required and allows the user to set time, order status, or order type (eBay.com or Half.com) filters, and to specify whether or not to include Final Value Fees for each order line item in the report. <br/><br/>
     *  This container is applicable only if the <b>downloadJobType</b> value is set to 'OrderReport'.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\OrderReportFilterType
     */
    public function getOrderReportFilter()
    {
        return $this->orderReportFilter;
    }

    /**
     * Sets a new orderReportFilter
     *
     * If the <b>downloadJobType</b> value is set to 'OrderReport', the <b>orderReportFilter</b> container is required and allows the user to set time, order status, or order type (eBay.com or Half.com) filters, and to specify whether or not to include Final Value Fees for each order line item in the report. <br/><br/>
     *  This container is applicable only if the <b>downloadJobType</b> value is set to 'OrderReport'.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\OrderReportFilterType $orderReportFilter
     * @return self
     */
    public function setOrderReportFilter(\Nogrod\eBaySDK\BulkDataExchange\OrderReportFilterType $orderReportFilter)
    {
        $this->orderReportFilter = $orderReportFilter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getFeeSettlementReportFilter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}feeSettlementReportFilter", $value);
        }
        $value = $this->getGetItemInfoReportFilter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}getItemInfoReportFilter", $value);
        }
        $value = $this->getSiteFilter();
        if (null !== $value && !empty($this->getSiteFilter())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}siteFilter", array_map(function ($v) {
                return ["globalId" => $v];
            }, $value));
        }
        $value = $this->getActiveInventoryReportFilter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}activeInventoryReportFilter", $value);
        }
        $value = $this->getDateFilter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}dateFilter", $value);
        }
        $value = $this->getSoldReportFilter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}soldReportFilter", $value);
        }
        $value = $this->getOrderReportFilter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}orderReportFilter", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}feeSettlementReportFilter');
        if (null !== $value) {
            $this->setFeeSettlementReportFilter(\Nogrod\eBaySDK\BulkDataExchange\FeeSettlementReportFilterType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}getItemInfoReportFilter');
        if (null !== $value) {
            $this->setGetItemInfoReportFilter(\Nogrod\eBaySDK\BulkDataExchange\GetItemInfoReportFilterType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}siteFilter', true);
        if (null !== $value && !empty($value)) {
            $this->setSiteFilter($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}activeInventoryReportFilter');
        if (null !== $value) {
            $this->setActiveInventoryReportFilter(\Nogrod\eBaySDK\BulkDataExchange\ActiveInventoryReportFilterType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}dateFilter');
        if (null !== $value) {
            $this->setDateFilter(\Nogrod\eBaySDK\BulkDataExchange\DateFilterType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}soldReportFilter');
        if (null !== $value) {
            $this->setSoldReportFilter(\Nogrod\eBaySDK\BulkDataExchange\SoldReportFilterType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}orderReportFilter');
        if (null !== $value) {
            $this->setOrderReportFilter(\Nogrod\eBaySDK\BulkDataExchange\OrderReportFilterType::fromKeyValue($value));
        }
    }
}
