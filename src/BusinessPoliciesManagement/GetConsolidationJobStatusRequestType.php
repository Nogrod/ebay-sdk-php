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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->jobId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'JobId', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'JobId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->jobId = (int) $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['JobId'] = $this->jobId;
        return $data;
    }
}
