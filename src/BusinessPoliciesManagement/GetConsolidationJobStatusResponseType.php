<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetConsolidationJobStatusResponseType
 *
 * The response container for the <b>getConsolidationJobStatus</b> call.
 * XSD Type: GetConsolidationJobStatusResponse
 */
class GetConsolidationJobStatusResponseType extends BaseResponseType
{
    /**
     * Container consisting of details related to the shipping policies consolidation job, including the status of the job and the eBay site ID.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType[] $job
     */
    private $job = [

    ];

    /**
     * Adds as job
     *
     * Container consisting of details related to the shipping policies consolidation job, including the status of the job and the eBay site ID.
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
     * Container consisting of details related to the shipping policies consolidation job, including the status of the job and the eBay site ID.
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
     * Container consisting of details related to the shipping policies consolidation job, including the status of the job and the eBay site ID.
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
     * Container consisting of details related to the shipping policies consolidation job, including the status of the job and the eBay site ID.
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
     * Container consisting of details related to the shipping policies consolidation job, including the status of the job and the eBay site ID.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType[] $job
     * @return self
     */
    public function setJob(array $job)
    {
        $this->job = $job;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getJob();
        if (null !== $value && [] !== $this->getJob()) {
            $writer->write(array_map(function ($v) {return ["Job" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}Job');
        if (null !== $value) {
            $this->setJob(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType::fromKeyValue($v);}, $value));
        }
    }
}
