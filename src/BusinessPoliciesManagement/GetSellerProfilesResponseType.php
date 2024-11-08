<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerProfilesResponseType
 *
 * Response container for the <b>getSellerProfiles</b> call.
 * XSD Type: GetSellerProfilesResponse
 */
class GetSellerProfilesResponseType extends BaseResponseType
{
    /**
     * Container consisting of one or more payment policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no payment policies match the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[] $paymentProfileList
     */
    private $paymentProfileList = null;

    /**
     * Container consisting of one or more return policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no return policies match the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[] $returnPolicyProfileList
     */
    private $returnPolicyProfileList = null;

    /**
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     */
    private $shippingPolicyProfile = null;

    /**
     * Adds as paymentProfile
     *
     * Container consisting of one or more payment policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no payment policies match the input criteria.
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
     * Container consisting of one or more payment policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no payment policies match the input criteria.
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
     * Container consisting of one or more payment policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no payment policies match the input criteria.
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
     * Container consisting of one or more payment policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no payment policies match the input criteria.
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
     * Container consisting of one or more payment policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no payment policies match the input criteria.
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
     * Container consisting of one or more return policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no return policies match the input criteria.
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
     * Container consisting of one or more return policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no return policies match the input criteria.
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
     * Container consisting of one or more return policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no return policies match the input criteria.
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
     * Container consisting of one or more return policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no return policies match the input criteria.
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
     * Container consisting of one or more return policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no return policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(array $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile = $shippingPolicyProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaymentProfileList();
        if (null !== $value && !empty($this->getPaymentProfileList())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}paymentProfileList", array_map(function ($v) {return ["PaymentProfile" => $v];}, $value));
        }
        $value = $this->getReturnPolicyProfileList();
        if (null !== $value && !empty($this->getReturnPolicyProfileList())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfileList", array_map(function ($v) {return ["ReturnPolicyProfile" => $v];}, $value));
        }
        $value = $this->getShippingPolicyProfile();
        if (null !== $value && !empty($this->getShippingPolicyProfile())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile", array_map(function ($v) {return ["ShippingPolicyProfile" => $v];}, $value));
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
            $this->setPaymentProfileList(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::fromKeyValue(Func::mapArray($v, '{http://www.ebay.com/marketplace/selling/v1/services}PaymentProfile'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfileList', true);
        if (null !== $value && !empty($value)) {
            $this->setReturnPolicyProfileList(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::fromKeyValue(Func::mapArray($v, '{http://www.ebay.com/marketplace/selling/v1/services}ReturnPolicyProfile'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingPolicyProfile(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::fromKeyValue(Func::mapArray($v, '{http://www.ebay.com/marketplace/selling/v1/services}ShippingPolicyProfile'));}, $value));
        }
    }
}
