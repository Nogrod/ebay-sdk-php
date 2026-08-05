<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentProfileListType
 *
 * Container consisting of one or more payment policies that match the input criteria in a <b>getSellerProfiles<
 *  /b> call request.
 * XSD Type: PaymentProfileList
 */
class PaymentProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[] $paymentProfile
     */
    private $paymentProfile = [

    ];

    /**
     * Adds as paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile
     */
    public function addToPaymentProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile)
    {
        if (!is_array($this->paymentProfile)) {
            throw new \LogicException('paymentProfile is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->paymentProfile[] = $paymentProfile;
        return $this;
    }

    /**
     * isset paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentProfile($index)
    {
        return isset($this->paymentProfile[$index]);
    }

    /**
     * unset paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentProfile($index)
    {
        unset($this->paymentProfile[$index]);
    }

    /**
     * Gets as paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType>
     */
    public function getPaymentProfile()
    {
        return $this->paymentProfile;
    }

    /**
     * Sets a new paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType> $paymentProfile
     * @return self
     */
    public function setPaymentProfile(iterable $paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getPaymentProfile();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["PaymentProfile" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileListType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}PaymentProfile');
        if (null !== $value) {
            $this->setPaymentProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::fromKeyValue($v);
            }, $value));
        }
    }
}
