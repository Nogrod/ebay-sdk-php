<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConsolidationJobType
 *
 *
 * XSD Type: ConsolidationJob
 */
class ConsolidationJobType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var int $jobId
     */
    private $jobId = null;

    /**
     * @var string $jobType
     */
    private $jobType = null;

    /**
     * @var string $jobStatus
     */
    private $jobStatus = null;

    /**
     * @var int $siteId
     */
    private $siteId = null;

    /**
     * Gets as jobId
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
     * @param int $jobId
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * Gets as jobType
     *
     * @return string
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Sets a new jobType
     *
     * @param string $jobType
     * @return self
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
        return $this;
    }

    /**
     * Gets as jobStatus
     *
     * @return string
     */
    public function getJobStatus()
    {
        return $this->jobStatus;
    }

    /**
     * Sets a new jobStatus
     *
     * @param string $jobStatus
     * @return self
     */
    public function setJobStatus($jobStatus)
    {
        $this->jobStatus = $jobStatus;
        return $this;
    }

    /**
     * Gets as siteId
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Sets a new siteId
     *
     * @param int $siteId
     * @return self
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}JobId", $value);
        }
        $value = $this->getJobType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}JobType", $value);
        }
        $value = $this->getJobStatus();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}JobStatus", $value);
        }
        $value = $this->getSiteId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}SiteId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}JobId');
        if (null !== $value) {
            $this->setJobId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}JobType');
        if (null !== $value) {
            $this->setJobType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}JobStatus');
        if (null !== $value) {
            $this->setJobStatus($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}SiteId');
        if (null !== $value) {
            $this->setSiteId($value);
        }
    }
}
