<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyProfileType
 *
 *
 * XSD Type: ReturnPolicyProfile
 */
class ReturnPolicyProfileType extends SellerProfileType
{
    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType $returnPolicyInfo
     */
    private $returnPolicyInfo = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo
     */
    private $internationalReturnPolicyInfo = null;

    /**
     * Gets as returnPolicyInfo
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType
     */
    public function getReturnPolicyInfo()
    {
        return $this->returnPolicyInfo;
    }

    /**
     * Sets a new returnPolicyInfo
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType $returnPolicyInfo
     * @return self
     */
    public function setReturnPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType $returnPolicyInfo)
    {
        $this->returnPolicyInfo = $returnPolicyInfo;
        return $this;
    }

    /**
     * Gets as internationalReturnPolicyInfo
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType
     */
    public function getInternationalReturnPolicyInfo()
    {
        return $this->internationalReturnPolicyInfo;
    }

    /**
     * Sets a new internationalReturnPolicyInfo
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo
     * @return self
     */
    public function setInternationalReturnPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo)
    {
        $this->internationalReturnPolicyInfo = $internationalReturnPolicyInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getReturnPolicyInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyInfo", $value);
        }
        $value = $this->getInternationalReturnPolicyInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}internationalReturnPolicyInfo", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyInfo');
        if (null !== $value) {
            $this->setReturnPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}internationalReturnPolicyInfo');
        if (null !== $value) {
            $this->setInternationalReturnPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType::fromKeyValue($value));
        }
    }
}
