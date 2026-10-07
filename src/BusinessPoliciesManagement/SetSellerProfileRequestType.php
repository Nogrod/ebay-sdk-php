<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetSellerProfileRequestType
 *
 * Sellers use this call to modify one or more business policies. With one call instance, the seller can modify a payment policy, a return policy, a shipping policy, or any combination of the three policy types.
 * XSD Type: SetSellerProfileRequest
 */
class SetSellerProfileRequestType extends BaseRequestType
{
    /**
     * Root container for a seller's payment policy. The <b>paymentProfile</b> container consists of payment information, the name and description of the policy, and the site and category group to which the payment policy will be applied.
     *  <br><br>
     *  The <b>paymentProfile</b> container is conditionally required if the seller wants to modify an existing payment policy.
     *  <br><br>
     *  Sellers only pass in values for the fields they want to change. To delete an optional field, sellers can pass an empty value into the field.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile
     */
    private $paymentProfile = null;

    /**
     * Root container for a seller's return policy. The <b>returnPolicyProfile</b> container consists of return policy information, the name and description of the policy, and the site and category group to which the return policy will be applied.
     *  <br><br>
     *  The <b>returnPolicyProfile</b> container is conditionally required if the seller wants to modify an existing return policy.
     *  <br><br>
     *  Sellers only pass in values for the fields that they want to change. To delete an optional field, sellers can pass an empty value into the field.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile
     */
    private $returnPolicyProfile = null;

    /**
     * Root container for a seller's shipping policy. The <b>shippingPolicyProfile</b> container consists of shipping information, the name and description of the policy, and the site and category group to which the shipping policy will be applied.
     *  <br><br>
     *  The <b>shippingPolicyProfile</b> container is conditionally required if the seller wants to modify an existing shipping policy.
     *  <br><br>
     *  Sellers only pass in values for the fields they want to change. To delete an optional field, sellers can pass an empty value into the field.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     */
    private $shippingPolicyProfile = null;

    /**
     * Gets as paymentProfile
     *
     * Root container for a seller's payment policy. The <b>paymentProfile</b> container consists of payment information, the name and description of the policy, and the site and category group to which the payment policy will be applied.
     *  <br><br>
     *  The <b>paymentProfile</b> container is conditionally required if the seller wants to modify an existing payment policy.
     *  <br><br>
     *  Sellers only pass in values for the fields they want to change. To delete an optional field, sellers can pass an empty value into the field.
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
     * Root container for a seller's payment policy. The <b>paymentProfile</b> container consists of payment information, the name and description of the policy, and the site and category group to which the payment policy will be applied.
     *  <br><br>
     *  The <b>paymentProfile</b> container is conditionally required if the seller wants to modify an existing payment policy.
     *  <br><br>
     *  Sellers only pass in values for the fields they want to change. To delete an optional field, sellers can pass an empty value into the field.
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
     * Root container for a seller's return policy. The <b>returnPolicyProfile</b> container consists of return policy information, the name and description of the policy, and the site and category group to which the return policy will be applied.
     *  <br><br>
     *  The <b>returnPolicyProfile</b> container is conditionally required if the seller wants to modify an existing return policy.
     *  <br><br>
     *  Sellers only pass in values for the fields that they want to change. To delete an optional field, sellers can pass an empty value into the field.
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
     * Root container for a seller's return policy. The <b>returnPolicyProfile</b> container consists of return policy information, the name and description of the policy, and the site and category group to which the return policy will be applied.
     *  <br><br>
     *  The <b>returnPolicyProfile</b> container is conditionally required if the seller wants to modify an existing return policy.
     *  <br><br>
     *  Sellers only pass in values for the fields that they want to change. To delete an optional field, sellers can pass an empty value into the field.
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
     * Root container for a seller's shipping policy. The <b>shippingPolicyProfile</b> container consists of shipping information, the name and description of the policy, and the site and category group to which the shipping policy will be applied.
     *  <br><br>
     *  The <b>shippingPolicyProfile</b> container is conditionally required if the seller wants to modify an existing shipping policy.
     *  <br><br>
     *  Sellers only pass in values for the fields they want to change. To delete an optional field, sellers can pass an empty value into the field.
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
     * Root container for a seller's shipping policy. The <b>shippingPolicyProfile</b> container consists of shipping information, the name and description of the policy, and the site and category group to which the shipping policy will be applied.
     *  <br><br>
     *  The <b>shippingPolicyProfile</b> container is conditionally required if the seller wants to modify an existing shipping policy.
     *  <br><br>
     *  Sellers only pass in values for the fields they want to change. To delete an optional field, sellers can pass an empty value into the field.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile)
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
        $value = $this->paymentProfile;
        if (null !== $value) {
            $writer->startElementNs(null, 'paymentProfile', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->returnPolicyProfile;
        if (null !== $value) {
            $writer->startElementNs(null, 'returnPolicyProfile', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->shippingPolicyProfile;
        if (null !== $value) {
            $writer->startElementNs(null, 'shippingPolicyProfile', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\SetSellerProfileRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'paymentProfile':
                    $this->paymentProfile = \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::xmlRead($reader);
                    return true;
                case 'returnPolicyProfile':
                    $this->returnPolicyProfile = \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::xmlRead($reader);
                    return true;
                case 'shippingPolicyProfile':
                    $this->shippingPolicyProfile = \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['paymentProfile'] = $this->paymentProfile;
        $data['returnPolicyProfile'] = $this->returnPolicyProfile;
        $data['shippingPolicyProfile'] = $this->shippingPolicyProfile;
        return $data;
    }
}
