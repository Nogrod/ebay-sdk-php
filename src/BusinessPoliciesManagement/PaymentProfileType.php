<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentProfileType
 *
 * Type defining the <b>paymentProfile</b> container, which is the container used to define one payment policy for a seller.
 * XSD Type: PaymentProfile
 */
class PaymentProfileType extends SellerProfileType
{
    /**
     * This container consists of detailed payment information for a seller's payment policy. This container is conditionally required if the caller is creating a new payment policy or modifying an existing payment policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more payment policies match the input criteria in the call request, and is returned in the response of <b>addSellerProfile</b> or <b>setSellerProfile</b> if a payment policy is being created or modified, respectively.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentInfoType $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * Gets as paymentInfo
     *
     * This container consists of detailed payment information for a seller's payment policy. This container is conditionally required if the caller is creating a new payment policy or modifying an existing payment policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more payment policies match the input criteria in the call request, and is returned in the response of <b>addSellerProfile</b> or <b>setSellerProfile</b> if a payment policy is being created or modified, respectively.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentInfoType
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * Sets a new paymentInfo
     *
     * This container consists of detailed payment information for a seller's payment policy. This container is conditionally required if the caller is creating a new payment policy or modifying an existing payment policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more payment policies match the input criteria in the call request, and is returned in the response of <b>addSellerProfile</b> or <b>setSellerProfile</b> if a payment policy is being created or modified, respectively.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentInfoType $paymentInfo
     * @return self
     */
    public function setPaymentInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentInfoType $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaymentInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}paymentInfo", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paymentInfo');
        if (null !== $value) {
            $this->setPaymentInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentInfoType::fromKeyValue($value));
        }
    }
}
