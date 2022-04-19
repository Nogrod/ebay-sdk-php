<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetRecurringJobExecutionHistoryRequestType
 *
 * Returns all instances of a recurring job that have occurred so far. To see only
 *  the status information for the latest instance of a recurring job, use
 *  <b>getRecurringJobExecutionStatus</b>.
 * XSD Type: GetRecurringJobExecutionHistoryRequest
 */
class GetRecurringJobExecutionHistoryRequestType extends BaseServiceRequestType
{
    /**
     * The <b>startTime</b> and <b>endTime</b> date range filters can be used to restrict recurring job instances retrieved in the response to those instances executed within the specified date range.
     *  <br/><br/>
     *  The <b>startTime</b> is the starting date/time for the date range. The <b>startTime</b> must be older than the <b>endTime</b> (if one is specified). If a <b>startTime</b> is specified, but an <b>endTime</b> value is not, the ending date/time of the date range defaults to the current date/time.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The <b>startTime</b> and <b>endTime</b> date range filters can be used to restrict recurring job instances retrieved in the response to those instances executed within the specified date range.
     *  <br/><br/>
     *  The <b>endTime</b> is the ending date/time for the date range. The <b>endTime</b> must be more recent than the <b>startTime</b> (if one is specified). If an <b>endTime</b> is specified, but an <b>startTime</b> value is not, all recurring job instances (for which data exists) executed before the <b>endTime</b> value are retrieved.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. The specified <b>recurringJobId</b> value will control which recurring job instances are retrieved in the response.
     *  <br/><br/>
     *  <b>recurringJobId</b> values are
     *  returned in <b>createRecurringJob</b> responses, and
     *  you can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @var string $recurringJobId
     */
    private $recurringJobId = null;

    /**
     * This field is used to retrieve recurring job instances in various states. If this field is not used, recurring job instances in all states are retrieved.
     *
     * @var string[] $jobStatus
     */
    private $jobStatus = [

    ];

    /**
     * Gets as startTime
     *
     * The <b>startTime</b> and <b>endTime</b> date range filters can be used to restrict recurring job instances retrieved in the response to those instances executed within the specified date range.
     *  <br/><br/>
     *  The <b>startTime</b> is the starting date/time for the date range. The <b>startTime</b> must be older than the <b>endTime</b> (if one is specified). If a <b>startTime</b> is specified, but an <b>endTime</b> value is not, the ending date/time of the date range defaults to the current date/time.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The <b>startTime</b> and <b>endTime</b> date range filters can be used to restrict recurring job instances retrieved in the response to those instances executed within the specified date range.
     *  <br/><br/>
     *  The <b>startTime</b> is the starting date/time for the date range. The <b>startTime</b> must be older than the <b>endTime</b> (if one is specified). If a <b>startTime</b> is specified, but an <b>endTime</b> value is not, the ending date/time of the date range defaults to the current date/time.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The <b>startTime</b> and <b>endTime</b> date range filters can be used to restrict recurring job instances retrieved in the response to those instances executed within the specified date range.
     *  <br/><br/>
     *  The <b>endTime</b> is the ending date/time for the date range. The <b>endTime</b> must be more recent than the <b>startTime</b> (if one is specified). If an <b>endTime</b> is specified, but an <b>startTime</b> value is not, all recurring job instances (for which data exists) executed before the <b>endTime</b> value are retrieved.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The <b>startTime</b> and <b>endTime</b> date range filters can be used to restrict recurring job instances retrieved in the response to those instances executed within the specified date range.
     *  <br/><br/>
     *  The <b>endTime</b> is the ending date/time for the date range. The <b>endTime</b> must be more recent than the <b>startTime</b> (if one is specified). If an <b>endTime</b> is specified, but an <b>startTime</b> value is not, all recurring job instances (for which data exists) executed before the <b>endTime</b> value are retrieved.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as recurringJobId
     *
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. The specified <b>recurringJobId</b> value will control which recurring job instances are retrieved in the response.
     *  <br/><br/>
     *  <b>recurringJobId</b> values are
     *  returned in <b>createRecurringJob</b> responses, and
     *  you can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @return string
     */
    public function getRecurringJobId()
    {
        return $this->recurringJobId;
    }

    /**
     * Sets a new recurringJobId
     *
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. The specified <b>recurringJobId</b> value will control which recurring job instances are retrieved in the response.
     *  <br/><br/>
     *  <b>recurringJobId</b> values are
     *  returned in <b>createRecurringJob</b> responses, and
     *  you can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @param string $recurringJobId
     * @return self
     */
    public function setRecurringJobId($recurringJobId)
    {
        $this->recurringJobId = $recurringJobId;
        return $this;
    }

    /**
     * Adds as jobStatus
     *
     * This field is used to retrieve recurring job instances in various states. If this field is not used, recurring job instances in all states are retrieved.
     *
     * @return self
     * @param string $jobStatus
     */
    public function addToJobStatus($jobStatus)
    {
        $this->jobStatus[] = $jobStatus;
        return $this;
    }

    /**
     * isset jobStatus
     *
     * This field is used to retrieve recurring job instances in various states. If this field is not used, recurring job instances in all states are retrieved.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJobStatus($index)
    {
        return isset($this->jobStatus[$index]);
    }

    /**
     * unset jobStatus
     *
     * This field is used to retrieve recurring job instances in various states. If this field is not used, recurring job instances in all states are retrieved.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJobStatus($index)
    {
        unset($this->jobStatus[$index]);
    }

    /**
     * Gets as jobStatus
     *
     * This field is used to retrieve recurring job instances in various states. If this field is not used, recurring job instances in all states are retrieved.
     *
     * @return string[]
     */
    public function getJobStatus()
    {
        return $this->jobStatus;
    }

    /**
     * Sets a new jobStatus
     *
     * This field is used to retrieve recurring job instances in various states. If this field is not used, recurring job instances in all states are retrieved.
     *
     * @param string $jobStatus
     * @return self
     */
    public function setJobStatus(array $jobStatus)
    {
        $this->jobStatus = $jobStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}startTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}endTime", $value);
        }
        $value = $this->getRecurringJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}recurringJobId", $value);
        }
        $value = $this->getJobStatus();
        if (null !== $value && !empty($this->getJobStatus())) {
            $writer->write(array_map(function ($v) {
                return ["jobStatus" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}startTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}endTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}recurringJobId');
        if (null !== $value) {
            $this->setRecurringJobId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobStatus', true);
        if (null !== $value && !empty($value)) {
            $this->setJobStatus($value);
        }
    }
}
