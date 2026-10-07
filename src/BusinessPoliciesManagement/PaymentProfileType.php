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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->paymentInfo;
        if (null !== $value) {
            $writer->startElementNs(null, 'paymentInfo', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType
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
                case 'paymentInfo':
                    $this->paymentInfo = \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentInfoType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
