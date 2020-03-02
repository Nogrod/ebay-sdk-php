<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentProfileType
 *
 * The root container for all payment policies.
 * XSD Type: PaymentProfile
 */
class PaymentProfileType extends SellerProfileType
{

    /**
     * Defines the payment method that a seller accepts.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentInfoType $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * Gets as paymentInfo
     *
     * Defines the payment method that a seller accepts.
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
     * Defines the payment method that a seller accepts.
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
