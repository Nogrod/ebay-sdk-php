<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $calculatedShippingAmountForEntireOrder
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
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
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
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $calculatedShippingAmountForEntireOrder
     * @return self
     */
    public function setCalculatedShippingAmountForEntireOrder(\Nogrod\eBaySDK\MerchantData\AmountType $calculatedShippingAmountForEntireOrder)
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingAmountForEntireOrder');
        if (null !== $value) {
            $this->setCalculatedShippingAmountForEntireOrder(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingChargeOption');
        if (null !== $value) {
            $this->setCalculatedShippingChargeOption($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingRateOption');
        if (null !== $value) {
            $this->setCalculatedShippingRateOption($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceOption');
        if (null !== $value) {
            $this->setInsuranceOption($value);
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
