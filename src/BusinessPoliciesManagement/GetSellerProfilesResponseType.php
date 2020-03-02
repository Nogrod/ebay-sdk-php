<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerProfilesResponseType
 *
 * This is the root container that returns all business policies for a specific seller.
 * XSD Type: GetSellerProfilesResponse
 */
class GetSellerProfilesResponseType extends BaseResponseType
{

    /**
     * Container for a list of payment policies that a seller provides. This container can list one or more payment policies that a seller offers.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[] $paymentProfileList
     */
    private $paymentProfileList = null;

    /**
     * The top-level container for a returns policy that a seller created.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[] $returnPolicyProfileList
     */
    private $returnPolicyProfileList = null;

    /**
     * The top-level container for a shipping policy that a seller created.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     */
    private $shippingPolicyProfile = null;

    /**
     * Adds as paymentProfile
     *
     * Container for a list of payment policies that a seller provides. This container can list one or more payment policies that a seller offers.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile
     */
    public function addToPaymentProfileList(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile)
    {
        $this->paymentProfileList[] = $paymentProfile;
        return $this;
    }

    /**
     * isset paymentProfileList
     *
     * Container for a list of payment policies that a seller provides. This container can list one or more payment policies that a seller offers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentProfileList($index)
    {
        return isset($this->paymentProfileList[$index]);
    }

    /**
     * unset paymentProfileList
     *
     * Container for a list of payment policies that a seller provides. This container can list one or more payment policies that a seller offers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentProfileList($index)
    {
        unset($this->paymentProfileList[$index]);
    }

    /**
     * Gets as paymentProfileList
     *
     * Container for a list of payment policies that a seller provides. This container can list one or more payment policies that a seller offers.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[]
     */
    public function getPaymentProfileList()
    {
        return $this->paymentProfileList;
    }

    /**
     * Sets a new paymentProfileList
     *
     * Container for a list of payment policies that a seller provides. This container can list one or more payment policies that a seller offers.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[] $paymentProfileList
     * @return self
     */
    public function setPaymentProfileList(array $paymentProfileList)
    {
        $this->paymentProfileList = $paymentProfileList;
        return $this;
    }

    /**
     * Adds as returnPolicyProfile
     *
     * The top-level container for a returns policy that a seller created.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile
     */
    public function addToReturnPolicyProfileList(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile)
    {
        $this->returnPolicyProfileList[] = $returnPolicyProfile;
        return $this;
    }

    /**
     * isset returnPolicyProfileList
     *
     * The top-level container for a returns policy that a seller created.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReturnPolicyProfileList($index)
    {
        return isset($this->returnPolicyProfileList[$index]);
    }

    /**
     * unset returnPolicyProfileList
     *
     * The top-level container for a returns policy that a seller created.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReturnPolicyProfileList($index)
    {
        unset($this->returnPolicyProfileList[$index]);
    }

    /**
     * Gets as returnPolicyProfileList
     *
     * The top-level container for a returns policy that a seller created.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[]
     */
    public function getReturnPolicyProfileList()
    {
        return $this->returnPolicyProfileList;
    }

    /**
     * Sets a new returnPolicyProfileList
     *
     * The top-level container for a returns policy that a seller created.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[] $returnPolicyProfileList
     * @return self
     */
    public function setReturnPolicyProfileList(array $returnPolicyProfileList)
    {
        $this->returnPolicyProfileList = $returnPolicyProfileList;
        return $this;
    }

    /**
     * Adds as shippingPolicyProfile
     *
     * The top-level container for a shipping policy that a seller created.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     */
    public function addToShippingPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile[] = $shippingPolicyProfile;
        return $this;
    }

    /**
     * isset shippingPolicyProfile
     *
     * The top-level container for a shipping policy that a seller created.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingPolicyProfile($index)
    {
        return isset($this->shippingPolicyProfile[$index]);
    }

    /**
     * unset shippingPolicyProfile
     *
     * The top-level container for a shipping policy that a seller created.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingPolicyProfile($index)
    {
        unset($this->shippingPolicyProfile[$index]);
    }

    /**
     * Gets as shippingPolicyProfile
     *
     * The top-level container for a shipping policy that a seller created.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[]
     */
    public function getShippingPolicyProfile()
    {
        return $this->shippingPolicyProfile;
    }

    /**
     * Sets a new shippingPolicyProfile
     *
     * The top-level container for a shipping policy that a seller created.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(array $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile = $shippingPolicyProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaymentProfileList();
        if (null !== $value && !empty($this->getPaymentProfileList())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}paymentProfileList", array_map(function ($v) {
                return ["PaymentProfile" => $v];
            }, $value));
        }
        $value = $this->getReturnPolicyProfileList();
        if (null !== $value && !empty($this->getReturnPolicyProfileList())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfileList", array_map(function ($v) {
                return ["ReturnPolicyProfile" => $v];
            }, $value));
        }
        $value = $this->getShippingPolicyProfile();
        if (null !== $value && !empty($this->getShippingPolicyProfile())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile", array_map(function ($v) {
                return ["ShippingPolicyProfile" => $v];
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paymentProfileList', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentProfileList(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfileList', true);
        if (null !== $value && !empty($value)) {
            $this->setReturnPolicyProfileList(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingPolicyProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::fromKeyValue($v);
            }, $value));
        }
    }
}
