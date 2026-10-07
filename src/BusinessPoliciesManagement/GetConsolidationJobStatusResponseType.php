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
        if (!is_array($this->job)) {
            throw new \LogicException('job is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType>
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
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType> $job
     * @return self
     */
    public function setJob(iterable $job)
    {
        $this->job = $job;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->job;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Job', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->job = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Job':
                    $this->job[] = \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
