<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentInfoType
 *
 * Defines the common type library for Payment type
 * XSD Type: PaymentInfo
 */
class PaymentInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string[] $acceptedPaymentMethod
     */
    private $acceptedPaymentMethod = [

    ];

    /**
     * @var bool $immediatePay
     */
    private $immediatePay = null;

    /**
     * @var string $paymentInstructions
     */
    private $paymentInstructions = null;

    /**
     * @var string $paypalEmailAddress
     */
    private $paypalEmailAddress = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType $depositDetails
     */
    private $depositDetails = null;

    /**
     * @var int $daysToFullPayment
     */
    private $daysToFullPayment = null;

    /**
     * Adds as acceptedPaymentMethod
     *
     * @return self
     * @param string $acceptedPaymentMethod
     */
    public function addToAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $this->acceptedPaymentMethod[] = $acceptedPaymentMethod;
        return $this;
    }

    /**
     * isset acceptedPaymentMethod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedPaymentMethod($index)
    {
        return isset($this->acceptedPaymentMethod[$index]);
    }

    /**
     * unset acceptedPaymentMethod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedPaymentMethod($index)
    {
        unset($this->acceptedPaymentMethod[$index]);
    }

    /**
     * Gets as acceptedPaymentMethod
     *
     * @return string[]
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * Sets a new acceptedPaymentMethod
     *
     * @param string[] $acceptedPaymentMethod
     * @return self
     */
    public function setAcceptedPaymentMethod(array $acceptedPaymentMethod)
    {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
        return $this;
    }

    /**
     * Gets as immediatePay
     *
     * @return bool
     */
    public function getImmediatePay()
    {
        return $this->immediatePay;
    }

    /**
     * Sets a new immediatePay
     *
     * @param bool $immediatePay
     * @return self
     */
    public function setImmediatePay($immediatePay)
    {
        $this->immediatePay = $immediatePay;
        return $this;
    }

    /**
     * Gets as paymentInstructions
     *
     * @return string
     */
    public function getPaymentInstructions()
    {
        return $this->paymentInstructions;
    }

    /**
     * Sets a new paymentInstructions
     *
     * @param string $paymentInstructions
     * @return self
     */
    public function setPaymentInstructions($paymentInstructions)
    {
        $this->paymentInstructions = $paymentInstructions;
        return $this;
    }

    /**
     * Gets as paypalEmailAddress
     *
     * @return string
     */
    public function getPaypalEmailAddress()
    {
        return $this->paypalEmailAddress;
    }

    /**
     * Sets a new paypalEmailAddress
     *
     * @param string $paypalEmailAddress
     * @return self
     */
    public function setPaypalEmailAddress($paypalEmailAddress)
    {
        $this->paypalEmailAddress = $paypalEmailAddress;
        return $this;
    }

    /**
     * Gets as depositDetails
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType
     */
    public function getDepositDetails()
    {
        return $this->depositDetails;
    }

    /**
     * Sets a new depositDetails
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType $depositDetails
     * @return self
     */
    public function setDepositDetails(\Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType $depositDetails)
    {
        $this->depositDetails = $depositDetails;
        return $this;
    }

    /**
     * Gets as daysToFullPayment
     *
     * @return int
     */
    public function getDaysToFullPayment()
    {
        return $this->daysToFullPayment;
    }

    /**
     * Sets a new daysToFullPayment
     *
     * @param int $daysToFullPayment
     * @return self
     */
    public function setDaysToFullPayment($daysToFullPayment)
    {
        $this->daysToFullPayment = $daysToFullPayment;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getAcceptedPaymentMethod();
        if (null !== $value && !empty($this->getAcceptedPaymentMethod())) {
            $writer->write(array_map(function ($v) {
                return ["acceptedPaymentMethod" => $v];
            }, $value));
        }
        $value = $this->getImmediatePay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}immediatePay", $value);
        }
        $value = $this->getPaymentInstructions();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}paymentInstructions", $value);
        }
        $value = $this->getPaypalEmailAddress();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}paypalEmailAddress", $value);
        }
        $value = $this->getDepositDetails();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}depositDetails", $value);
        }
        $value = $this->getDaysToFullPayment();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}daysToFullPayment", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}acceptedPaymentMethod', true);
        if (null !== $value && !empty($value)) {
            $this->setAcceptedPaymentMethod($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}immediatePay');
        if (null !== $value) {
            $this->setImmediatePay($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paymentInstructions');
        if (null !== $value) {
            $this->setPaymentInstructions($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paypalEmailAddress');
        if (null !== $value) {
            $this->setPaypalEmailAddress($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}depositDetails');
        if (null !== $value) {
            $this->setDepositDetails(\Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}daysToFullPayment');
        if (null !== $value) {
            $this->setDaysToFullPayment($value);
        }
    }
}
