<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumItemRequirementsDetailsType
 *
 * This type is used by the <b>MaximumItemRequirements</b> container that is returned under the <b>BuyerRequirementDetails</b> in the <b>GeteBayDetails</b>. The Maximum Item Requirement settings of Buyer Requirements allow a seller to restrict the quantity of a line item that may be purchased during a consecutive 10-day period.
 * XSD Type: MaximumItemRequirementsDetailsType
 */
class MaximumItemRequirementsDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->maximumItemCount)) {
            throw new \LogicException('maximumItemCount is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<int>
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
     * @param iterable<int> $maximumItemCount
     * @return self
     */
    public function setMaximumItemCount(iterable $maximumItemCount)
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
        if (!is_array($this->minimumFeedbackScore)) {
            throw new \LogicException('minimumFeedbackScore is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<int>
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
     * @param iterable<int> $minimumFeedbackScore
     * @return self
     */
    public function setMinimumFeedbackScore(iterable $minimumFeedbackScore)
    {
        $this->minimumFeedbackScore = $minimumFeedbackScore;
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
        $value = $this->maximumItemCount;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'MaximumItemCount', null, (string) $v);
            }
        }
        $value = $this->minimumFeedbackScore;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'MinimumFeedbackScore', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MaximumItemRequirementsDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->maximumItemCount = [];
        $this->minimumFeedbackScore = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'MaximumItemCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maximumItemCount[] = (int) $value;
                    }
                    return true;
                case 'MinimumFeedbackScore':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minimumFeedbackScore[] = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['MaximumItemCount'] = Func::jsonList($this->maximumItemCount);
        $data['MinimumFeedbackScore'] = Func::jsonList($this->minimumFeedbackScore);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
