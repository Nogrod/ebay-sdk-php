<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FlatRateInsuranceRangeCostType
 *
 * This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * XSD Type: FlatRateInsuranceRangeCostType
 */
class FlatRateInsuranceRangeCostType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $flatRateInsuranceRange
     */
    private $flatRateInsuranceRange = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost
     */
    private $insuranceCost = null;

    /**
     * Gets as flatRateInsuranceRange
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getFlatRateInsuranceRange()
    {
        return $this->flatRateInsuranceRange;
    }

    /**
     * Sets a new flatRateInsuranceRange
     *
     * This field is deprecated.
     *
     * @param string $flatRateInsuranceRange
     * @return self
     */
    public function setFlatRateInsuranceRange($flatRateInsuranceRange)
    {
        $this->flatRateInsuranceRange = $flatRateInsuranceRange;
        return $this;
    }

    /**
     * Gets as insuranceCost
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getInsuranceCost()
    {
        return $this->insuranceCost;
    }

    /**
     * Sets a new insuranceCost
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost
     * @return self
     */
    public function setInsuranceCost(\Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost)
    {
        $this->insuranceCost = $insuranceCost;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFlatRateInsuranceRange();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FlatRateInsuranceRange", $value);
        }
        $value = $this->getInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceCost", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlatRateInsuranceRange');
        if (null !== $value) {
            $this->setFlatRateInsuranceRange($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceCost');
        if (null !== $value) {
            $this->setInsuranceCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
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
