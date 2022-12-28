<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetConsolidationJobStatusRequestType
 *
 * This call can be used to retrieve the status of a shipping policies consolidation job.
 * XSD Type: GetConsolidationJobStatusRequest
 */
class GetConsolidationJobStatusRequestType extends BaseRequestType
{
    /**
     * Unique ID assigned to a shipping policies consolidation job. The <b>JobId</b> value passed into this field will retrieve the shipping policies consolidation job identified by this value. If no <b>JobId</b> is passed in, the status of the most recent consolidation job is returned.
     *
     * @var int $jobId
     */
    private $jobId = null;

    /**
     * Gets as jobId
     *
     * Unique ID assigned to a shipping policies consolidation job. The <b>JobId</b> value passed into this field will retrieve the shipping policies consolidation job identified by this value. If no <b>JobId</b> is passed in, the status of the most recent consolidation job is returned.
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Sets a new jobId
     *
     * Unique ID assigned to a shipping policies consolidation job. The <b>JobId</b> value passed into this field will retrieve the shipping policies consolidation job identified by this value. If no <b>JobId</b> is passed in, the status of the most recent consolidation job is returned.
     *
     * @param int $jobId
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}JobId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}JobId');
        if (null !== $value) {
            $this->setJobId($value);
        }
    }
}
