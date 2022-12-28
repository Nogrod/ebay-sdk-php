<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CalculatedShippingPreferencesType
 *
 * This type is deprecated.
 * XSD Type: CalculatedShippingPreferencesType
 */
class CalculatedShippingPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $calculatedShippingAmountForEntireOrder
     */
    private $calculatedShippingAmountForEntireOrder = null;

    /**
     * This field is deprecated.
     *
     * @var string $calculatedShippingChargeOption
     */
    private $calculatedShippingChargeOption = null;

    /**
     * This field is deprecated.
     *
     * @var string $calculatedShippingRateOption
     */
    private $calculatedShippingRateOption = null;

    /**
     * This field is deprecated.
     *
     * @var string $insuranceOption
     */
    private $insuranceOption = null;

    /**
     * Gets as calculatedShippingAmountForEntireOrder
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getCalculatedShippingAmountForEntireOrder()
    {
        return $this->calculatedShippingAmountForEntireOrder;
    }

    /**
     * Sets a new calculatedShippingAmountForEntireOrder
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $calculatedShippingAmountForEntireOrder
     * @return self
     */
    public function setCalculatedShippingAmountForEntireOrder(\Nogrod\eBaySDK\Trading\AmountType $calculatedShippingAmountForEntireOrder)
    {
        $this->calculatedShippingAmountForEntireOrder = $calculatedShippingAmountForEntireOrder;
        return $this;
    }

    /**
     * Gets as calculatedShippingChargeOption
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCalculatedShippingChargeOption()
    {
        return $this->calculatedShippingChargeOption;
    }

    /**
     * Sets a new calculatedShippingChargeOption
     *
     * This field is deprecated.
     *
     * @param string $calculatedShippingChargeOption
     * @return self
     */
    public function setCalculatedShippingChargeOption($calculatedShippingChargeOption)
    {
        $this->calculatedShippingChargeOption = $calculatedShippingChargeOption;
        return $this;
    }

    /**
     * Gets as calculatedShippingRateOption
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCalculatedShippingRateOption()
    {
        return $this->calculatedShippingRateOption;
    }

    /**
     * Sets a new calculatedShippingRateOption
     *
     * This field is deprecated.
     *
     * @param string $calculatedShippingRateOption
     * @return self
     */
    public function setCalculatedShippingRateOption($calculatedShippingRateOption)
    {
        $this->calculatedShippingRateOption = $calculatedShippingRateOption;
        return $this;
    }

    /**
     * Gets as insuranceOption
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getInsuranceOption()
    {
        return $this->insuranceOption;
    }

    /**
     * Sets a new insuranceOption
     *
     * This field is deprecated.
     *
     * @param string $insuranceOption
     * @return self
     */
    public function setInsuranceOption($insuranceOption)
    {
        $this->insuranceOption = $insuranceOption;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCalculatedShippingAmountForEntireOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedShippingAmountForEntireOrder", $value);
        }
        $value = $this->getCalculatedShippingChargeOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedShippingChargeOption", $value);
        }
        $value = $this->getCalculatedShippingRateOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedShippingRateOption", $value);
        }
        $value = $this->getInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingAmountForEntireOrder');
        if (null !== $value) {
            $this->setCalculatedShippingAmountForEntireOrder(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingChargeOption');
        if (null !== $value) {
            $this->setCalculatedShippingChargeOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingRateOption');
        if (null !== $value) {
            $this->setCalculatedShippingRateOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceOption');
        if (null !== $value) {
            $this->setInsuranceOption($value);
        }
    }
}
