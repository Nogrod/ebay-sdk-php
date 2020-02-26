<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing GetConsolidationJobStatusRequestType
 *
 *
 * XSD Type: GetConsolidationJobStatusRequest
 */
class GetConsolidationJobStatusRequestType extends BaseRequestType
{

    /**
     * @var int $jobId
     */
    private $jobId = null;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}JobId');
        if (null !== $value) {
            $this->setJobId($value);
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
