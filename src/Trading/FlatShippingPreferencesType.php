<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FlatShippingPreferencesType
 *
 * This type is deprecated.
 * XSD Type: FlatShippingPreferencesType
 */
class FlatShippingPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amountPerAdditionalItem
     */
    private $amountPerAdditionalItem = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $deductionAmountPerAdditionalItem
     */
    private $deductionAmountPerAdditionalItem = null;

    /**
     * This field is deprecated.
     *
     * @var string $flatShippingRateOption
     */
    private $flatShippingRateOption = null;

    /**
     * This field is deprecated.
     *
     * @var string $insuranceOption
     */
    private $insuranceOption = null;

    /**
     * Gets as amountPerAdditionalItem
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAmountPerAdditionalItem()
    {
        return $this->amountPerAdditionalItem;
    }

    /**
     * Sets a new amountPerAdditionalItem
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $amountPerAdditionalItem
     * @return self
     */
    public function setAmountPerAdditionalItem(\Nogrod\eBaySDK\Trading\AmountType $amountPerAdditionalItem)
    {
        $this->amountPerAdditionalItem = $amountPerAdditionalItem;
        return $this;
    }

    /**
     * Gets as deductionAmountPerAdditionalItem
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getDeductionAmountPerAdditionalItem()
    {
        return $this->deductionAmountPerAdditionalItem;
    }

    /**
     * Sets a new deductionAmountPerAdditionalItem
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $deductionAmountPerAdditionalItem
     * @return self
     */
    public function setDeductionAmountPerAdditionalItem(\Nogrod\eBaySDK\Trading\AmountType $deductionAmountPerAdditionalItem)
    {
        $this->deductionAmountPerAdditionalItem = $deductionAmountPerAdditionalItem;
        return $this;
    }

    /**
     * Gets as flatShippingRateOption
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getFlatShippingRateOption()
    {
        return $this->flatShippingRateOption;
    }

    /**
     * Sets a new flatShippingRateOption
     *
     * This field is deprecated.
     *
     * @param string $flatShippingRateOption
     * @return self
     */
    public function setFlatShippingRateOption($flatShippingRateOption)
    {
        $this->flatShippingRateOption = $flatShippingRateOption;
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
        $value = $this->getAmountPerAdditionalItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AmountPerAdditionalItem", $value);
        }
        $value = $this->getDeductionAmountPerAdditionalItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeductionAmountPerAdditionalItem", $value);
        }
        $value = $this->getFlatShippingRateOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FlatShippingRateOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AmountPerAdditionalItem');
        if (null !== $value) {
            $this->setAmountPerAdditionalItem(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeductionAmountPerAdditionalItem');
        if (null !== $value) {
            $this->setDeductionAmountPerAdditionalItem(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlatShippingRateOption');
        if (null !== $value) {
            $this->setFlatShippingRateOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceOption');
        if (null !== $value) {
            $this->setInsuranceOption($value);
        }
    }
}
