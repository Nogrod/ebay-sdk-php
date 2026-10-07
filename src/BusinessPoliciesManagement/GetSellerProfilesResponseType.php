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
        $value = $this->paymentProfileList;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'paymentProfileList', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'PaymentProfile', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->returnPolicyProfileList;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'returnPolicyProfileList', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'ReturnPolicyProfile', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->shippingPolicyProfile;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'shippingPolicyProfile', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'ShippingPolicyProfile', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->paymentProfileList = [];
        $this->returnPolicyProfileList = [];
        $this->shippingPolicyProfile = [];
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
                case 'paymentProfileList':
                    $this->paymentProfileList = Func::readList($reader, 'PaymentProfile', 'http://www.ebay.com/marketplace/selling/v1/services', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::xmlRead($reader));
                    return true;
                case 'returnPolicyProfileList':
                    $this->returnPolicyProfileList = Func::readList($reader, 'ReturnPolicyProfile', 'http://www.ebay.com/marketplace/selling/v1/services', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::xmlRead($reader));
                    return true;
                case 'shippingPolicyProfile':
                    $this->shippingPolicyProfile = Func::readList($reader, 'ShippingPolicyProfile', 'http://www.ebay.com/marketplace/selling/v1/services', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
