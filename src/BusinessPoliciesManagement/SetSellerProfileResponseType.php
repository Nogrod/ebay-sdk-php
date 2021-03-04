<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetSellerProfileResponseType
 *
 * This is the root container that returns all business policies for a specific seller that can be updated.
 * XSD Type: SetSellerProfileResponse
 */
class SetSellerProfileResponseType extends BaseResponseType
{
    /**
     * Container that has the details of the payment policy that a seller updated.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile
     */
    private $paymentProfile = null;

    /**
     * Container that has the details of the returns policy that a seller updated.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile
     */
    private $returnPolicyProfile = null;

    /**
     * Container that has the details of the shipping policy that a seller updated.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     */
    private $shippingPolicyProfile = null;

    /**
     * Gets as paymentProfile
     *
     * Container that has the details of the payment policy that a seller updated.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType
     */
    public function getPaymentProfile()
    {
        return $this->paymentProfile;
    }

    /**
     * Sets a new paymentProfile
     *
     * Container that has the details of the payment policy that a seller updated.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile
     * @return self
     */
    public function setPaymentProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
        return $this;
    }

    /**
     * Gets as returnPolicyProfile
     *
     * Container that has the details of the returns policy that a seller updated.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType
     */
    public function getReturnPolicyProfile()
    {
        return $this->returnPolicyProfile;
    }

    /**
     * Sets a new returnPolicyProfile
     *
     * Container that has the details of the returns policy that a seller updated.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile
     * @return self
     */
    public function setReturnPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile)
    {
        $this->returnPolicyProfile = $returnPolicyProfile;
        return $this;
    }

    /**
     * Gets as shippingPolicyProfile
     *
     * Container that has the details of the shipping policy that a seller updated.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType
     */
    public function getShippingPolicyProfile()
    {
        return $this->shippingPolicyProfile;
    }

    /**
     * Sets a new shippingPolicyProfile
     *
     * Container that has the details of the shipping policy that a seller updated.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile = $shippingPolicyProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaymentProfile();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}paymentProfile", $value);
        }
        $value = $this->getReturnPolicyProfile();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfile", $value);
        }
        $value = $this->getShippingPolicyProfile();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paymentProfile');
        if (null !== $value) {
            $this->setPaymentProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfile');
        if (null !== $value) {
            $this->setReturnPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile');
        if (null !== $value) {
            $this->setShippingPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::fromKeyValue($value));
        }
    }
}
