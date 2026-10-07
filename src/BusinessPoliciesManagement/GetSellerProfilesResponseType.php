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
        if (!is_array($this->paymentProfileList)) {
            throw new \LogicException('paymentProfileList is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType>
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
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType> $paymentProfileList
     * @return self
     */
    public function setPaymentProfileList(iterable $paymentProfileList)
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
        if (!is_array($this->returnPolicyProfileList)) {
            throw new \LogicException('returnPolicyProfileList is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType>
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
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType> $returnPolicyProfileList
     * @return self
     */
    public function setReturnPolicyProfileList(iterable $returnPolicyProfileList)
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
        if (!is_array($this->shippingPolicyProfile)) {
            throw new \LogicException('shippingPolicyProfile is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType>
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
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType> $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(iterable $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile = $shippingPolicyProfile;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->getPaymentProfileList();
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElement("{http://www.ebay.com/marketplace/selling/v1/services}paymentProfileList");
                    $open = true;
                }
                $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}PaymentProfile", $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->getReturnPolicyProfileList();
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElement("{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfileList");
                    $open = true;
                }
                $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}ReturnPolicyProfile", $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->getShippingPolicyProfile();
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile");
                    $open = true;
                }
                $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}ShippingPolicyProfile", $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paymentProfileList');
        if (null !== $value) {
            $value = Func::mapArray($value, '{http://www.ebay.com/marketplace/selling/v1/services}PaymentProfile');
            $this->setPaymentProfileList(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfileList');
        if (null !== $value) {
            $value = Func::mapArray($value, '{http://www.ebay.com/marketplace/selling/v1/services}ReturnPolicyProfile');
            $this->setReturnPolicyProfileList(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile');
        if (null !== $value) {
            $value = Func::mapArray($value, '{http://www.ebay.com/marketplace/selling/v1/services}ShippingPolicyProfile');
            $this->setShippingPolicyProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::fromKeyValue($v);
            }, $value));
        }
    }
}
