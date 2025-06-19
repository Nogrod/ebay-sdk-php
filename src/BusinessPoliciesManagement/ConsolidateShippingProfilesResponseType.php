<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConsolidateShippingProfilesResponseType
 *
 * The response container for the <b>consolidateShippingProfiles</b> call.
 * XSD Type: ConsolidateShippingProfilesResponse
 */
class ConsolidateShippingProfilesResponseType extends BaseResponseType
{
    /**
     * Container consisting of details related to the shipping policies consolidation job, including a unique ID, the status of the job, and the eBay site ID.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType $job
     */
    private $job = null;

    /**
     * Gets as job
     *
     * Container consisting of details related to the shipping policies consolidation job, including a unique ID, the status of the job, and the eBay site ID.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Sets a new job
     *
     * Container consisting of details related to the shipping policies consolidation job, including a unique ID, the status of the job, and the eBay site ID.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType $job
     * @return self
     */
    public function setJob(\Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType $job)
    {
        $this->job = $job;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getJob();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}Job", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}Job');
        if (null !== $value) {
            $this->setJob(\Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType::fromKeyValue($value));
        }
    }
}
