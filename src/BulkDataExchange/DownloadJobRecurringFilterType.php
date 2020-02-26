<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing DownloadJobRecurringFilterType
 *
 * Creates a recurring Bulk Data Exchange job for different LMS Reports and assigns it a <b
 *  class="con">recurringJobId</b>.
 *  When you create a recurring job, you must specify a recurrence interval, such
 *  as daily, weekly, monthly, or a frequency in minutes.
 *  <br><br>
 *  Once a recurring job has been created, a separate job ID is created for each
 *  job that is created/executed. For example, if a job runs every hour, it will
 *  have a single <b class="con">recurringJobId</b> and each hourly job
 *  will have a unique <b class="con">jobId</b> and <b
 *  class="con">fileReferenceI</b>d.
 * XSD Type: DownloadJobRecurringFilter
 */
class DownloadJobRecurringFilterType extends BaseServiceRequestType
{

    /**
     * Creates a recurrring job for Order Report.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\OrderReportRecurringFilterType $orderReportRecurringFilter
     */
    private $orderReportRecurringFilter = null;

    /**
     * Gets as orderReportRecurringFilter
     *
     * Creates a recurrring job for Order Report.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\OrderReportRecurringFilterType
     */
    public function getOrderReportRecurringFilter()
    {
        return $this->orderReportRecurringFilter;
    }

    /**
     * Sets a new orderReportRecurringFilter
     *
     * Creates a recurrring job for Order Report.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\OrderReportRecurringFilterType $orderReportRecurringFilter
     * @return self
     */
    public function setOrderReportRecurringFilter(\Nogrod\eBaySDK\BulkDataExchange\OrderReportRecurringFilterType $orderReportRecurringFilter)
    {
        $this->orderReportRecurringFilter = $orderReportRecurringFilter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrderReportRecurringFilter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}orderReportRecurringFilter", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}orderReportRecurringFilter');
        if (null !== $value) {
            $this->setOrderReportRecurringFilter(\Nogrod\eBaySDK\BulkDataExchange\OrderReportRecurringFilterType::fromKeyValue($value));
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
