<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing InsuranceType
 *
 * Insurance:
 * XSD Type: Insurance
 */
class InsuranceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $domesticInsuranceFee
     */
    private $domesticInsuranceFee = null;

    /**
     * @var string $domesticInsuranceOption
     */
    private $domesticInsuranceOption = null;

    /**
     * @var string $intlInsuranceOption
     */
    private $intlInsuranceOption = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $intlInsuranceFee
     */
    private $intlInsuranceFee = null;

    /**
     * Gets as domesticInsuranceFee
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getDomesticInsuranceFee()
    {
        return $this->domesticInsuranceFee;
    }

    /**
     * Sets a new domesticInsuranceFee
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $domesticInsuranceFee
     * @return self
     */
    public function setDomesticInsuranceFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $domesticInsuranceFee)
    {
        $this->domesticInsuranceFee = $domesticInsuranceFee;
        return $this;
    }

    /**
     * Gets as domesticInsuranceOption
     *
     * @return string
     */
    public function getDomesticInsuranceOption()
    {
        return $this->domesticInsuranceOption;
    }

    /**
     * Sets a new domesticInsuranceOption
     *
     * @param string $domesticInsuranceOption
     * @return self
     */
    public function setDomesticInsuranceOption($domesticInsuranceOption)
    {
        $this->domesticInsuranceOption = $domesticInsuranceOption;
        return $this;
    }

    /**
     * Gets as intlInsuranceOption
     *
     * @return string
     */
    public function getIntlInsuranceOption()
    {
        return $this->intlInsuranceOption;
    }

    /**
     * Sets a new intlInsuranceOption
     *
     * @param string $intlInsuranceOption
     * @return self
     */
    public function setIntlInsuranceOption($intlInsuranceOption)
    {
        $this->intlInsuranceOption = $intlInsuranceOption;
        return $this;
    }

    /**
     * Gets as intlInsuranceFee
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getIntlInsuranceFee()
    {
        return $this->intlInsuranceFee;
    }

    /**
     * Sets a new intlInsuranceFee
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $intlInsuranceFee
     * @return self
     */
    public function setIntlInsuranceFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $intlInsuranceFee)
    {
        $this->intlInsuranceFee = $intlInsuranceFee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getDomesticInsuranceFee();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticInsuranceFee", $value);
        }
        $value = $this->getDomesticInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticInsuranceOption", $value);
        }
        $value = $this->getIntlInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlInsuranceOption", $value);
        }
        $value = $this->getIntlInsuranceFee();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlInsuranceFee", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticInsuranceFee');
        if (null !== $value) {
            $this->setDomesticInsuranceFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticInsuranceOption');
        if (null !== $value) {
            $this->setDomesticInsuranceOption($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlInsuranceOption');
        if (null !== $value) {
            $this->setIntlInsuranceOption($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlInsuranceFee');
        if (null !== $value) {
            $this->setIntlInsuranceFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
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
