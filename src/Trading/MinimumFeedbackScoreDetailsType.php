<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MinimumFeedbackScoreDetailsType
 *
 * Type defining the <b>MinimumFeedbackScore</b> container that is returned in <b>GeteBayDetails</b>. The <b>MinimumFeedbackScore</b> container consists of the values that can be used as the threshold value for a buyer's Minimum Feedback Score in Buyer Requirements. The Feedback Score for a potential buyer must be greater than or equal to the specified value, or that buyer is blocked from buying the item. <br/><br/> For the <b>MinimumFeedbackScore</b> container to appear in the <b>GeteBayDetails</b> response, <b>BuyerRequirementDetails</b> must be one of the values passed into the <b>DetailName</b> field in the <b>GeteBayDetails</b> request (or, no <b>DetailName</b> filters should be used).
 *  <br><br>
 *  <span class="tablenote"><b>Note:</b> Although the <b>MinimumFeedbackScore</b> container is still returned in <b>GeteBayDetails</b>, sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
 *  </span>
 * XSD Type: MinimumFeedbackScoreDetailsType
 */
class MinimumFeedbackScoreDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each value that is returned in this field can be used as an account-level Minimum Feedback Score. Sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls. The Feedback Score for a potential buyer must be greater than or equal to the specified value in the seller's account settings, or that buyer is blocked from buying the item. <br/><br/> One or more <b>FeedbackScore</b> fields are always returned with the <b>MinimumFeedbackScore</b> container.
     *
     * @var int[] $feedbackScore
     */
    private $feedbackScore = [

    ];

    /**
     * Adds as feedbackScore
     *
     * Each value that is returned in this field can be used as an account-level Minimum Feedback Score. Sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls. The Feedback Score for a potential buyer must be greater than or equal to the specified value in the seller's account settings, or that buyer is blocked from buying the item. <br/><br/> One or more <b>FeedbackScore</b> fields are always returned with the <b>MinimumFeedbackScore</b> container.
     *
     * @return self
     * @param int $feedbackScore
     */
    public function addToFeedbackScore($feedbackScore)
    {
        if (!is_array($this->feedbackScore)) {
            throw new \LogicException('feedbackScore is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->feedbackScore[] = $feedbackScore;
        return $this;
    }

    /**
     * isset feedbackScore
     *
     * Each value that is returned in this field can be used as an account-level Minimum Feedback Score. Sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls. The Feedback Score for a potential buyer must be greater than or equal to the specified value in the seller's account settings, or that buyer is blocked from buying the item. <br/><br/> One or more <b>FeedbackScore</b> fields are always returned with the <b>MinimumFeedbackScore</b> container.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeedbackScore($index)
    {
        return isset($this->feedbackScore[$index]);
    }

    /**
     * unset feedbackScore
     *
     * Each value that is returned in this field can be used as an account-level Minimum Feedback Score. Sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls. The Feedback Score for a potential buyer must be greater than or equal to the specified value in the seller's account settings, or that buyer is blocked from buying the item. <br/><br/> One or more <b>FeedbackScore</b> fields are always returned with the <b>MinimumFeedbackScore</b> container.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeedbackScore($index)
    {
        unset($this->feedbackScore[$index]);
    }

    /**
     * Gets as feedbackScore
     *
     * Each value that is returned in this field can be used as an account-level Minimum Feedback Score. Sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls. The Feedback Score for a potential buyer must be greater than or equal to the specified value in the seller's account settings, or that buyer is blocked from buying the item. <br/><br/> One or more <b>FeedbackScore</b> fields are always returned with the <b>MinimumFeedbackScore</b> container.
     *
     * @return iterable<int>
     */
    public function getFeedbackScore()
    {
        return $this->feedbackScore;
    }

    /**
     * Sets a new feedbackScore
     *
     * Each value that is returned in this field can be used as an account-level Minimum Feedback Score. Sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls. The Feedback Score for a potential buyer must be greater than or equal to the specified value in the seller's account settings, or that buyer is blocked from buying the item. <br/><br/> One or more <b>FeedbackScore</b> fields are always returned with the <b>MinimumFeedbackScore</b> container.
     *
     * @param iterable<int> $feedbackScore
     * @return self
     */
    public function setFeedbackScore(iterable $feedbackScore)
    {
        $this->feedbackScore = $feedbackScore;
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
        $value = $this->feedbackScore;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'FeedbackScore', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MinimumFeedbackScoreDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->feedbackScore = [];
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
                case 'FeedbackScore':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feedbackScore[] = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
