<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetConsolidationJobStatusResponseType
 *
 *
 * XSD Type: GetConsolidationJobStatusResponse
 */
class GetConsolidationJobStatusResponseType extends BaseResponseType
{
    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType[] $job
     */
    private $job = [

    ];

    /**
     * Adds as job
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType $job
     */
    public function addToJob(\Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType $job)
    {
        $this->job[] = $job;
        return $this;
    }

    /**
     * isset job
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJob($index)
    {
        return isset($this->job[$index]);
    }

    /**
     * unset job
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJob($index)
    {
        unset($this->job[$index]);
    }

    /**
     * Gets as job
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType[]
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Sets a new job
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType[] $job
     * @return self
     */
    public function setJob(array $job)
    {
        $this->job = $job;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getJob();
        if (null !== $value && !empty($this->getJob())) {
            $writer->write(array_map(function ($v) {
                return ["Job" => $v];
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}Job', true);
        if (null !== $value && !empty($value)) {
            $this->setJob(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType::fromKeyValue($v);
            }, $value));
        }
    }
}
