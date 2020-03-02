<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetJobStatusRequestType
 *
 * Get job status for the provided job ID.
 * XSD Type: GetJobStatusRequest
 */
class GetJobStatusRequestType extends BaseServiceRequestType
{

    /**
     * Unique ID assigned by the Bulk Data Exchange service for managing your
     *  upload or download job. Use the <b>jobId</b> value
     *  returned in the <b>createUploadJob</b> response or
     *  the <b>startDownloadJob</b> response. You can also
     *  use <b>getJobs</b> to retrieve job IDs for any of
     *  your upload or download jobs.
     *
     * @var string $jobId
     */
    private $jobId = null;

    /**
     * Gets as jobId
     *
     * Unique ID assigned by the Bulk Data Exchange service for managing your
     *  upload or download job. Use the <b>jobId</b> value
     *  returned in the <b>createUploadJob</b> response or
     *  the <b>startDownloadJob</b> response. You can also
     *  use <b>getJobs</b> to retrieve job IDs for any of
     *  your upload or download jobs.
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Sets a new jobId
     *
     * Unique ID assigned by the Bulk Data Exchange service for managing your
     *  upload or download job. Use the <b>jobId</b> value
     *  returned in the <b>createUploadJob</b> response or
     *  the <b>startDownloadJob</b> response. You can also
     *  use <b>getJobs</b> to retrieve job IDs for any of
     *  your upload or download jobs.
     *
     * @param string $jobId
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}jobId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobId');
        if (null !== $value) {
            $this->setJobId($value);
        }
    }
}
