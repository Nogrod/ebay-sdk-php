<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MaximumItemRequirementsDetailsType
 *
 * This type is used by the <b>MaximumItemRequirements</b> container that is returned under the <b>BuyerRequirementDetails</b> in the <b>GeteBayDetails</b>. The Maximum Item Requirement settings of Buyer Requirements allow a seller to restrict the quantity of a line item that may be purchased during a consecutive 10-day period.
 * XSD Type: MaximumItemRequirementsDetailsType
 */
class MaximumItemRequirementsDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Values returned in this field indicate the maximum quantity of an order line item that one buyer can purchase during a consecutive 10-day period.
     *
     * @var int[] $maximumItemCount
     */
    private $maximumItemCount = [
        
    ];

    /**
     * A Minimum Feedback Score threshold can be added to the Maximum Item Requirement rule if the seller only wishes to restrict possible buyers with low Feedback scores. The values returned in this field indicate the minimum Feedback Score thresholds that can be used.
     *
     * @var int[] $minimumFeedbackScore
     */
    private $minimumFeedbackScore = [
        
    ];

    /**
     * Adds as maximumItemCount
     *
     * Values returned in this field indicate the maximum quantity of an order line item that one buyer can purchase during a consecutive 10-day period.
     *
     * @return self
     * @param int $maximumItemCount
     */
    public function addToMaximumItemCount($maximumItemCount)
    {
        $this->maximumItemCount[] = $maximumItemCount;
        return $this;
    }

    /**
     * isset maximumItemCount
     *
     * Values returned in this field indicate the maximum quantity of an order line item that one buyer can purchase during a consecutive 10-day period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMaximumItemCount($index)
    {
        return isset($this->maximumItemCount[$index]);
    }

    /**
     * unset maximumItemCount
     *
     * Values returned in this field indicate the maximum quantity of an order line item that one buyer can purchase during a consecutive 10-day period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMaximumItemCount($index)
    {
        unset($this->maximumItemCount[$index]);
    }

    /**
     * Gets as maximumItemCount
     *
     * Values returned in this field indicate the maximum quantity of an order line item that one buyer can purchase during a consecutive 10-day period.
     *
     * @return int[]
     */
    public function getMaximumItemCount()
    {
        return $this->maximumItemCount;
    }

    /**
     * Sets a new maximumItemCount
     *
     * Values returned in this field indicate the maximum quantity of an order line item that one buyer can purchase during a consecutive 10-day period.
     *
     * @param int[] $maximumItemCount
     * @return self
     */
    public function setMaximumItemCount(array $maximumItemCount)
    {
        $this->maximumItemCount = $maximumItemCount;
        return $this;
    }

    /**
     * Adds as minimumFeedbackScore
     *
     * A Minimum Feedback Score threshold can be added to the Maximum Item Requirement rule if the seller only wishes to restrict possible buyers with low Feedback scores. The values returned in this field indicate the minimum Feedback Score thresholds that can be used.
     *
     * @return self
     * @param int $minimumFeedbackScore
     */
    public function addToMinimumFeedbackScore($minimumFeedbackScore)
    {
        $this->minimumFeedbackScore[] = $minimumFeedbackScore;
        return $this;
    }

    /**
     * isset minimumFeedbackScore
     *
     * A Minimum Feedback Score threshold can be added to the Maximum Item Requirement rule if the seller only wishes to restrict possible buyers with low Feedback scores. The values returned in this field indicate the minimum Feedback Score thresholds that can be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMinimumFeedbackScore($index)
    {
        return isset($this->minimumFeedbackScore[$index]);
    }

    /**
     * unset minimumFeedbackScore
     *
     * A Minimum Feedback Score threshold can be added to the Maximum Item Requirement rule if the seller only wishes to restrict possible buyers with low Feedback scores. The values returned in this field indicate the minimum Feedback Score thresholds that can be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMinimumFeedbackScore($index)
    {
        unset($this->minimumFeedbackScore[$index]);
    }

    /**
     * Gets as minimumFeedbackScore
     *
     * A Minimum Feedback Score threshold can be added to the Maximum Item Requirement rule if the seller only wishes to restrict possible buyers with low Feedback scores. The values returned in this field indicate the minimum Feedback Score thresholds that can be used.
     *
     * @return int[]
     */
    public function getMinimumFeedbackScore()
    {
        return $this->minimumFeedbackScore;
    }

    /**
     * Sets a new minimumFeedbackScore
     *
     * A Minimum Feedback Score threshold can be added to the Maximum Item Requirement rule if the seller only wishes to restrict possible buyers with low Feedback scores. The values returned in this field indicate the minimum Feedback Score thresholds that can be used.
     *
     * @param int[] $minimumFeedbackScore
     * @return self
     */
    public function setMinimumFeedbackScore(array $minimumFeedbackScore)
    {
        $this->minimumFeedbackScore = $minimumFeedbackScore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaximumItemCount();
        if (null !== $value && !empty($this->getMaximumItemCount())) {
            $writer->write(array_map(function ($v) {
                return ["MaximumItemCount" => $v];
            }, $value));
        }
        $value = $this->getMinimumFeedbackScore();
        if (null !== $value && !empty($this->getMinimumFeedbackScore())) {
            $writer->write(array_map(function ($v) {
                return ["MinimumFeedbackScore" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumItemCount', true);
        if (null !== $value && !empty($value)) {
            $this->setMaximumItemCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore', true);
        if (null !== $value && !empty($value)) {
            $this->setMinimumFeedbackScore($value);
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
