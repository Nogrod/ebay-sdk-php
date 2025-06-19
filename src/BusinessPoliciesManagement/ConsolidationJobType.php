<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConsolidationJobType
 *
 * Enumerated type defining the possible shipping policies consolidation job types.
 * XSD Type: ConsolidationJobType
 */
class ConsolidationJobType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Constant for 'ShippingProfilesConsolidation' value.
     *
     * This value indicates that the job type is a shipping policies consolidation job.
     */
    public const VAL_SHIPPING_PROFILES_CONSOLIDATION = 'ShippingProfilesConsolidation';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}JobId');
        if (null !== $value) {
            $this->setJobId($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}JobType');
        if (null !== $value) {
            $this->setJobType($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}JobStatus');
        if (null !== $value) {
            $this->setJobStatus($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}SiteId');
        if (null !== $value) {
            $this->setSiteId($value);
        }
    }
}
