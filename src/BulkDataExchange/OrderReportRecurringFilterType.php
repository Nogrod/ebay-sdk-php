<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderReportRecurringFilterType
 *
 * Creates a recurring Bulk Data Exchange job for Order Report and assigns it a <b
 *  class="con">recurringJobId</b>.
 *  When creating a recurring job for OrderReport, you must specify the version,
 *  you must specify a recurrence interval, such
 *  as daily, weekly, monthly, or a frequency in minutes.
 *  You may specify the listingType as 'Half' else by default only 'ebay' orders are returned.
 *  You may specify the createTimeRange or modTimeRange to sepcify the time range for which orders will be returned
 *  createTimeRange if provided with modTimeRnage then createTimeRange takes precedence and modTimeRange is ignored.
 *  else the default range is 30 days from the job start time.
 *  Be dafault, Orders returned will have includeFinalValueFee = false and all orders with orderStatus = completed, cancelled, active and shipped
 *  will be returned.
 *  <br><br>
 *  Once a recurring job has been created, a separate job ID is created for each
 *  job that is created/executed. For example, if a job runs every hour, it will
 *  have a single <b class="con">recurringJobId</b> and each hourly job
 *  will have a unique <b class="con">jobId</b> and <b
 *  class="con">fileReferenceI</b>d.
 * XSD Type: OrderReportRecurringFilter
 */
class OrderReportRecurringFilterType extends BaseServiceRequestType
{
    /**
     * Specify the range in minutes. The Order Report will retrieve orders that have not been acked during the provided create time range
     *
     * @var int $createTimeRange
     */
    private $createTimeRange = null;

    /**
     * Specify the range in minutes. The Order Report will retrieve orders that have not been acked during the provided modified time range
     *
     * @var int $modTimeRange
     */
    private $modTimeRange = null;

    /**
     * This field must be included and must be set to 'Half' in order to retrieve the seller's Half.com orders.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Do not use this field if you are retrieving eBay.com orders.
     *  <br><br>
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * The value input into this field indicates the version number of the Trading API (specifically, GetOrders) that will be called when the <strong>orderReport</strong> response is generated. This value must be a valid Trading API version number and it must be Version 841 or later. If an older version is used, <strong>orderReport</strong> will fail.
     *  <br><br>
     *  This field is required if the <strong>orderReportRecurringFilter</strong> container is used.
     *
     * @var int $version
     */
    private $version = null;

    /**
     * Gets as createTimeRange
     *
     * Specify the range in minutes. The Order Report will retrieve orders that have not been acked during the provided create time range
     *
     * @return int
     */
    public function getCreateTimeRange()
    {
        return $this->createTimeRange;
    }

    /**
     * Sets a new createTimeRange
     *
     * Specify the range in minutes. The Order Report will retrieve orders that have not been acked during the provided create time range
     *
     * @param int $createTimeRange
     * @return self
     */
    public function setCreateTimeRange($createTimeRange)
    {
        $this->createTimeRange = $createTimeRange;
        return $this;
    }

    /**
     * Gets as modTimeRange
     *
     * Specify the range in minutes. The Order Report will retrieve orders that have not been acked during the provided modified time range
     *
     * @return int
     */
    public function getModTimeRange()
    {
        return $this->modTimeRange;
    }

    /**
     * Sets a new modTimeRange
     *
     * Specify the range in minutes. The Order Report will retrieve orders that have not been acked during the provided modified time range
     *
     * @param int $modTimeRange
     * @return self
     */
    public function setModTimeRange($modTimeRange)
    {
        $this->modTimeRange = $modTimeRange;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * This field must be included and must be set to 'Half' in order to retrieve the seller's Half.com orders.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Do not use this field if you are retrieving eBay.com orders.
     *  <br><br>
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * This field must be included and must be set to 'Half' in order to retrieve the seller's Half.com orders.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Do not use this field if you are retrieving eBay.com orders.
     *  <br><br>
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as version
     *
     * The value input into this field indicates the version number of the Trading API (specifically, GetOrders) that will be called when the <strong>orderReport</strong> response is generated. This value must be a valid Trading API version number and it must be Version 841 or later. If an older version is used, <strong>orderReport</strong> will fail.
     *  <br><br>
     *  This field is required if the <strong>orderReportRecurringFilter</strong> container is used.
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The value input into this field indicates the version number of the Trading API (specifically, GetOrders) that will be called when the <strong>orderReport</strong> response is generated. This value must be a valid Trading API version number and it must be Version 841 or later. If an older version is used, <strong>orderReport</strong> will fail.
     *  <br><br>
     *  This field is required if the <strong>orderReportRecurringFilter</strong> container is used.
     *
     * @param int $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCreateTimeRange();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}createTimeRange", $value);
        }
        $value = $this->getModTimeRange();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}modTimeRange", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}listingType", $value);
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}version", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}createTimeRange');
        if (null !== $value) {
            $this->setCreateTimeRange($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}modTimeRange');
        if (null !== $value) {
            $this->setModTimeRange($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}listingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}version');
        if (null !== $value) {
            $this->setVersion($value);
        }
    }
}
