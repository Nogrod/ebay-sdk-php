<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentInformationCodeType
 *
 * This type is deprecated.
 * XSD Type: PaymentInformationCodeType
 */
class PaymentInformationCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType[] $payment
     */
    private $payment = [

    ];

    /**
     * Adds as payment
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType $payment
     */
    public function addToPayment(\Nogrod\eBaySDK\Trading\PaymentTransactionCodeType $payment)
    {
        $this->payment[] = $payment;
        return $this;
    }

    /**
     * isset payment
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayment($index)
    {
        return isset($this->payment[$index]);
    }

    /**
     * unset payment
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayment($index)
    {
        unset($this->payment[$index]);
    }

    /**
     * Gets as payment
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType[] $payment
     * @return self
     */
    public function setPayment(array $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPayment();
        if (null !== $value && !empty($this->getPayment())) {
            $writer->write(array_map(function ($v) {
                return ["Payment" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payment', true);
        if (null !== $value && !empty($value)) {
            $this->setPayment(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType::fromKeyValue($v);
            }, $value));
        }
    }
}
