<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddSellerProfileRequestType
 *
 * Sellers use this call to create one or more business policies. With one call instance, the seller can create a payment policy, a return policy, a shipping policy, or any combination of the three policy types.</p><p class="tablenote"><b>Important!</b> This API is deprecated and will be decommissioned later in 2022, on a date TBD. We recommend that you migrate to the <b>fulfillment_policy</b>, <b>payment_policy</b>, and <b>return_policy</b> resources of the <a href="https://developer.ebay.com/api-docs/sell/account/resources/methods">Account API</a> to set up and manage all of your fulfillment, payment, and return business policies.</p>
 * XSD Type: AddSellerProfileRequest
 */
class AddSellerProfileRequestType extends BaseRequestType
{
    /**
     * Root container for a seller's payment policy. The <b>paymentProfile</b> container consists of payment information, the name and description of the policy, and the site and category group(s) to which the payment policy will be applied.
     *  <br><br>
     *  The <b>paymentProfile</b> container is conditionally required if the seller wants to create a new payment policy.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile
     */
    private $paymentProfile = null;

    /**
     * Root container for a seller's return policy. The <b>returnPolicyProfile</b> container consists of return policy information, the name and description of the policy, and the site and category group(s) to which the return policy will be applied.
     *  <br><br>
     *  The <b>returnPolicyProfile</b> container is conditionally required if the seller wants to create a new return policy.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile
     */
    private $returnPolicyProfile = null;

    /**
     * Root container for a seller's shipping policy. The <b>shippingPolicyProfile</b> container consists of shipping information, the name and description of the policy, and the site and category group(s) to which the shipping policy will be applied.
     *  <br><br>
     *  The <b>shippingPolicyProfile</b> container is conditionally required if the seller wants to create a new shipping policy.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     */
    private $shippingPolicyProfile = null;

    /**
     * Gets as paymentProfile
     *
     * Root container for a seller's payment policy. The <b>paymentProfile</b> container consists of payment information, the name and description of the policy, and the site and category group(s) to which the payment policy will be applied.
     *  <br><br>
     *  The <b>paymentProfile</b> container is conditionally required if the seller wants to create a new payment policy.
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
     * Root container for a seller's payment policy. The <b>paymentProfile</b> container consists of payment information, the name and description of the policy, and the site and category group(s) to which the payment policy will be applied.
     *  <br><br>
     *  The <b>paymentProfile</b> container is conditionally required if the seller wants to create a new payment policy.
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
     * Root container for a seller's return policy. The <b>returnPolicyProfile</b> container consists of return policy information, the name and description of the policy, and the site and category group(s) to which the return policy will be applied.
     *  <br><br>
     *  The <b>returnPolicyProfile</b> container is conditionally required if the seller wants to create a new return policy.
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
     * Root container for a seller's return policy. The <b>returnPolicyProfile</b> container consists of return policy information, the name and description of the policy, and the site and category group(s) to which the return policy will be applied.
     *  <br><br>
     *  The <b>returnPolicyProfile</b> container is conditionally required if the seller wants to create a new return policy.
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
     * Root container for a seller's shipping policy. The <b>shippingPolicyProfile</b> container consists of shipping information, the name and description of the policy, and the site and category group(s) to which the shipping policy will be applied.
     *  <br><br>
     *  The <b>shippingPolicyProfile</b> container is conditionally required if the seller wants to create a new shipping policy.
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
     * Root container for a seller's shipping policy. The <b>shippingPolicyProfile</b> container consists of shipping information, the name and description of the policy, and the site and category group(s) to which the shipping policy will be applied.
     *  <br><br>
     *  The <b>shippingPolicyProfile</b> container is conditionally required if the seller wants to create a new shipping policy.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile = $shippingPolicyProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\AddSellerProfileRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paymentProfile');
        if (null !== $value) {
            $this->setPaymentProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnPolicyProfile');
        if (null !== $value) {
            $this->setReturnPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyProfile');
        if (null !== $value) {
            $this->setShippingPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::fromKeyValue($value));
        }
    }
}
