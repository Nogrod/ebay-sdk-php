<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConsolidateShippingProfilesResponseType
 *
 *
 * XSD Type: ConsolidateShippingProfilesResponse
 */
class ConsolidateShippingProfilesResponseType extends BaseResponseType
{

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType $job
     */
    private $job = null;

    /**
     * Gets as job
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
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType $job
     * @return self
     */
    public function setJob(\Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType $job)
    {
        $this->job = $job;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getJob();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}Job", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}Job');
        if (null !== $value) {
            $this->setJob(\Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType::fromKeyValue($value));
        }
    }
}
