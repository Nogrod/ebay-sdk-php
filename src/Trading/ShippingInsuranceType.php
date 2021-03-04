<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingInsuranceType
 *
 * This type is deprecated, as Shipping Insurance can no longer be offered by the seller to the buyer in the APIs.
 *
 *  orders.
 * XSD Type: ShippingInsuranceType
 */
class ShippingInsuranceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Whether the seller offers shipping insurance and, if
     *  so, whether the insurance is optional or required. Flat and
     *  calculated shipping.
     *
     * @var string $insuranceOption
     */
    private $insuranceOption = null;

    /**
     * A pairing of range of item price total and insurance cost.
     *  For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must
     *  submit all range pairs. For those ranges that do not apply, set the cost to 0.
     *
     * @var \Nogrod\eBaySDK\Trading\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     */
    private $flatRateInsuranceRangeCost = [
        
    ];

    /**
     * Gets as insuranceOption
     *
     * Whether the seller offers shipping insurance and, if
     *  so, whether the insurance is optional or required. Flat and
     *  calculated shipping.
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
     * Whether the seller offers shipping insurance and, if
     *  so, whether the insurance is optional or required. Flat and
     *  calculated shipping.
     *
     * @param string $insuranceOption
     * @return self
     */
    public function setInsuranceOption($insuranceOption)
    {
        $this->insuranceOption = $insuranceOption;
        return $this;
    }

    /**
     * Adds as flatRateInsuranceRangeCost
     *
     * A pairing of range of item price total and insurance cost.
     *  For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must
     *  submit all range pairs. For those ranges that do not apply, set the cost to 0.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FlatRateInsuranceRangeCostType $flatRateInsuranceRangeCost
     */
    public function addToFlatRateInsuranceRangeCost(\Nogrod\eBaySDK\Trading\FlatRateInsuranceRangeCostType $flatRateInsuranceRangeCost)
    {
        $this->flatRateInsuranceRangeCost[] = $flatRateInsuranceRangeCost;
        return $this;
    }

    /**
     * isset flatRateInsuranceRangeCost
     *
     * A pairing of range of item price total and insurance cost.
     *  For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must
     *  submit all range pairs. For those ranges that do not apply, set the cost to 0.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlatRateInsuranceRangeCost($index)
    {
        return isset($this->flatRateInsuranceRangeCost[$index]);
    }

    /**
     * unset flatRateInsuranceRangeCost
     *
     * A pairing of range of item price total and insurance cost.
     *  For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must
     *  submit all range pairs. For those ranges that do not apply, set the cost to 0.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlatRateInsuranceRangeCost($index)
    {
        unset($this->flatRateInsuranceRangeCost[$index]);
    }

    /**
     * Gets as flatRateInsuranceRangeCost
     *
     * A pairing of range of item price total and insurance cost.
     *  For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must
     *  submit all range pairs. For those ranges that do not apply, set the cost to 0.
     *
     * @return \Nogrod\eBaySDK\Trading\FlatRateInsuranceRangeCostType[]
     */
    public function getFlatRateInsuranceRangeCost()
    {
        return $this->flatRateInsuranceRangeCost;
    }

    /**
     * Sets a new flatRateInsuranceRangeCost
     *
     * A pairing of range of item price total and insurance cost.
     *  For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must
     *  submit all range pairs. For those ranges that do not apply, set the cost to 0.
     *
     * @param \Nogrod\eBaySDK\Trading\FlatRateInsuranceRangeCostType[] $flatRateInsuranceRangeCost
     * @return self
     */
    public function setFlatRateInsuranceRangeCost(array $flatRateInsuranceRangeCost)
    {
        $this->flatRateInsuranceRangeCost = $flatRateInsuranceRangeCost;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceOption", $value);
        }
        $value = $this->getFlatRateInsuranceRangeCost();
        if (null !== $value && !empty($this->getFlatRateInsuranceRangeCost())) {
            $writer->write(array_map(function ($v) {
                return ["FlatRateInsuranceRangeCost" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceOption');
        if (null !== $value) {
            $this->setInsuranceOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlatRateInsuranceRangeCost', true);
        if (null !== $value && !empty($value)) {
            $this->setFlatRateInsuranceRangeCost(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\FlatRateInsuranceRangeCostType::fromKeyValue($v);
            }, $value));
        }
    }
}
