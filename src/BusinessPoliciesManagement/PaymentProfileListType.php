<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing PaymentProfileListType
 *
 * The root response container for the getSellerProfiles call that lists all payment policies that a seller accepts.
 * XSD Type: PaymentProfileList
 */
class PaymentProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Response container for a specific payment policy that a seller accepts. This container includes the category group, profile details, and the payment information that the policy applies to.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[] $paymentProfile
     */
    private $paymentProfile = [
        
    ];

    /**
     * Adds as paymentProfile
     *
     * Response container for a specific payment policy that a seller accepts. This container includes the category group, profile details, and the payment information that the policy applies to.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile
     */
    public function addToPaymentProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile)
    {
        $this->paymentProfile[] = $paymentProfile;
        return $this;
    }

    /**
     * isset paymentProfile
     *
     * Response container for a specific payment policy that a seller accepts. This container includes the category group, profile details, and the payment information that the policy applies to.
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
     * Response container for a specific payment policy that a seller accepts. This container includes the category group, profile details, and the payment information that the policy applies to.
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
     * Response container for a specific payment policy that a seller accepts. This container includes the category group, profile details, and the payment information that the policy applies to.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[]
     */
    public function getPaymentProfile()
    {
        return $this->paymentProfile;
    }

    /**
     * Sets a new paymentProfile
     *
     * Response container for a specific payment policy that a seller accepts. This container includes the category group, profile details, and the payment information that the policy applies to.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[] $paymentProfile
     * @return self
     */
    public function setPaymentProfile(array $paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getPaymentProfile();
        if (null !== $value && !empty($this->getPaymentProfile())) {
            $writer->write(array_map(function ($v) {
                return ["PaymentProfile" => $v];
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}PaymentProfile', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
