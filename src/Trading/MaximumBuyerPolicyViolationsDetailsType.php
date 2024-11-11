<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumBuyerPolicyViolationsDetailsType
 *
 * Although the <b>MaximumBuyerPolicyViolations</b> container is still returned in <b>GeteBayDetails</b>, a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, so this type is no longer applicable.
 * XSD Type: MaximumBuyerPolicyViolationsDetailsType
 */
class MaximumBuyerPolicyViolationsDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @var int[] $numberOfPolicyViolations
     */
    private $numberOfPolicyViolations = null;

    /**
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @var \Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType[] $policyViolationDuration
     */
    private $policyViolationDuration = [

    ];

    /**
     * Adds as count
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @return self
     * @param int $count
     */
    public function addToNumberOfPolicyViolations($count)
    {
        $this->numberOfPolicyViolations[] = $count;
        return $this;
    }

    /**
     * isset numberOfPolicyViolations
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumberOfPolicyViolations($index)
    {
        return isset($this->numberOfPolicyViolations[$index]);
    }

    /**
     * unset numberOfPolicyViolations
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumberOfPolicyViolations($index)
    {
        unset($this->numberOfPolicyViolations[$index]);
    }

    /**
     * Gets as numberOfPolicyViolations
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @return int[]
     */
    public function getNumberOfPolicyViolations()
    {
        return $this->numberOfPolicyViolations;
    }

    /**
     * Sets a new numberOfPolicyViolations
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @param int[] $numberOfPolicyViolations
     * @return self
     */
    public function setNumberOfPolicyViolations(array $numberOfPolicyViolations)
    {
        $this->numberOfPolicyViolations = $numberOfPolicyViolations;
        return $this;
    }

    /**
     * Adds as policyViolationDuration
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType $policyViolationDuration
     */
    public function addToPolicyViolationDuration(\Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType $policyViolationDuration)
    {
        $this->policyViolationDuration[] = $policyViolationDuration;
        return $this;
    }

    /**
     * isset policyViolationDuration
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPolicyViolationDuration($index)
    {
        return isset($this->policyViolationDuration[$index]);
    }

    /**
     * unset policyViolationDuration
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPolicyViolationDuration($index)
    {
        unset($this->policyViolationDuration[$index]);
    }

    /**
     * Gets as policyViolationDuration
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @return \Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType[]
     */
    public function getPolicyViolationDuration()
    {
        return $this->policyViolationDuration;
    }

    /**
     * Sets a new policyViolationDuration
     *
     * As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     *
     * @param \Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType[] $policyViolationDuration
     * @return self
     */
    public function setPolicyViolationDuration(array $policyViolationDuration)
    {
        $this->policyViolationDuration = $policyViolationDuration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNumberOfPolicyViolations();
        if (null !== $value && !empty($this->getNumberOfPolicyViolations())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NumberOfPolicyViolations", array_map(function ($v) {return ["Count" => $v];}, $value));
        }
        $value = $this->getPolicyViolationDuration();
        if (null !== $value && !empty($this->getPolicyViolationDuration())) {
            $writer->write(array_map(function ($v) {return ["PolicyViolationDuration" => $v];}, $value));
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumberOfPolicyViolations');
        if (null !== $value) {
            $this->setNumberOfPolicyViolations($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PolicyViolationDuration');
        if (null !== $value) {
            $this->setPolicyViolationDuration(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType::fromKeyValue($v);}, $value));
        }
    }
}
