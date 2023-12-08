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
     * @return int[]
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
     * @param int[] $feedbackScore
     * @return self
     */
    public function setFeedbackScore(array $feedbackScore)
    {
        $this->feedbackScore = $feedbackScore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFeedbackScore();
        if (null !== $value && !empty($this->getFeedbackScore())) {
            $writer->write(array_map(function ($v) {return ["FeedbackScore" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackScore', true);
        if (null !== $value && !empty($value)) {
            $this->setFeedbackScore($value);
        }
    }
}
