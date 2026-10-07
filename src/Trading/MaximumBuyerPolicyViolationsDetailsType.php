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
        if (!is_array($this->numberOfPolicyViolations)) {
            throw new \LogicException('numberOfPolicyViolations is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<int>
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
     * @param iterable<int> $numberOfPolicyViolations
     * @return self
     */
    public function setNumberOfPolicyViolations(iterable $numberOfPolicyViolations)
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
        if (!is_array($this->policyViolationDuration)) {
            throw new \LogicException('policyViolationDuration is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType> $policyViolationDuration
     * @return self
     */
    public function setPolicyViolationDuration(iterable $policyViolationDuration)
    {
        $this->policyViolationDuration = $policyViolationDuration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->getNumberOfPolicyViolations();
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElement("{urn:ebay:apis:eBLBaseComponents}NumberOfPolicyViolations");
                    $open = true;
                }
                $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Count", $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->getPolicyViolationDuration();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PolicyViolationDuration", $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MaximumBuyerPolicyViolationsDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumberOfPolicyViolations');
        if (null !== $value) {
            $value = Func::mapArray($value, '{urn:ebay:apis:eBLBaseComponents}Count', true);
            $this->setNumberOfPolicyViolations($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PolicyViolationDuration');
        if (null !== $value) {
            $this->setPolicyViolationDuration(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PolicyViolationDurationDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
