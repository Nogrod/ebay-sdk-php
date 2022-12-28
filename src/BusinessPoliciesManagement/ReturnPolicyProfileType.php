<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyProfileType
 *
 * Type defining the <b>returnPolicyProfile</b> container, which is the container used to define one return policy for a seller.
 * XSD Type: ReturnPolicyProfile
 */
class ReturnPolicyProfileType extends SellerProfileType
{
    /**
     * This container consists of detailed information on a seller's return policy. This container is conditionally required if the caller is creating a new return policy or modifying an existing return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType $returnPolicyInfo
     */
    private $returnPolicyInfo = null;

    /**
     * This container consists of detailed information on a seller's international return policy (returns that require an international shipping service to ship). This container is optional and allows for a seller to establish an international return policy that differs from their domestic return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo
     */
    private $internationalReturnPolicyInfo = null;

    /**
     * Gets as returnPolicyInfo
     *
     * This container consists of detailed information on a seller's return policy. This container is conditionally required if the caller is creating a new return policy or modifying an existing return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
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
     * This container consists of detailed information on a seller's return policy. This container is conditionally required if the caller is creating a new return policy or modifying an existing return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
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
     * This container consists of detailed information on a seller's international return policy (returns that require an international shipping service to ship). This container is optional and allows for a seller to establish an international return policy that differs from their domestic return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
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
     * This container consists of detailed information on a seller's international return policy (returns that require an international shipping service to ship). This container is optional and allows for a seller to establish an international return policy that differs from their domestic return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo
     * @return self
     */
    public function setInternationalReturnPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo)
    {
        $this->internationalReturnPolicyInfo = $internationalReturnPolicyInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
