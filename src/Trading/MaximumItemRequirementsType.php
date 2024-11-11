<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumItemRequirementsType
 *
 * Type used by the <b>MaximumItemRequirements</b> container to specify the maximum quantity of an order line item that a prospective buyer may purchase during any given 10-day period.
 * XSD Type: MaximumItemRequirementsType
 */
class MaximumItemRequirementsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field indicates the maximum quantity of a line item that one prospective buyer may purchase from the listing.
     *  <br/><br/>
     *  This buyer requirement is only applicable to fixed-price listings where multiple quantity is available for purchase.
     *  <br/><br/>
     *  If the <b>MinimumFeedbackScore</b> field is also set/returned, the maximum quantity threshold value will only apply to those prospective buyers who don't meet or exceed the minimum Feedback score threshold returned in that field. If the <b>MinimumFeedbackScore</b> field not set/returned, the maximum quantity threshold value will apply to all prospective buyers.
     *  <br/><br/>
     *  This field is always returned along with the <b>MaximumItemRequirements</b> container.
     *
     * @var int $maximumItemCount
     */
    private $maximumItemCount = null;

    /**
     * If this field is returned, it indicates that the seller has set a maximum quantity threshold value, but this maximum quantity threshold value (returned in <b>MaximumItemCount</b> will only apply to those prospective buyers who don't meet or exceed the minimum Feedback score threshold returned in this field. If this field is not returned, the maximum quantity threshold value will apply to all prospective buyers.
     *
     * @var int $minimumFeedbackScore
     */
    private $minimumFeedbackScore = null;

    /**
     * Gets as maximumItemCount
     *
     * This field indicates the maximum quantity of a line item that one prospective buyer may purchase from the listing.
     *  <br/><br/>
     *  This buyer requirement is only applicable to fixed-price listings where multiple quantity is available for purchase.
     *  <br/><br/>
     *  If the <b>MinimumFeedbackScore</b> field is also set/returned, the maximum quantity threshold value will only apply to those prospective buyers who don't meet or exceed the minimum Feedback score threshold returned in that field. If the <b>MinimumFeedbackScore</b> field not set/returned, the maximum quantity threshold value will apply to all prospective buyers.
     *  <br/><br/>
     *  This field is always returned along with the <b>MaximumItemRequirements</b> container.
     *
     * @return int
     */
    public function getMaximumItemCount()
    {
        return $this->maximumItemCount;
    }

    /**
     * Sets a new maximumItemCount
     *
     * This field indicates the maximum quantity of a line item that one prospective buyer may purchase from the listing.
     *  <br/><br/>
     *  This buyer requirement is only applicable to fixed-price listings where multiple quantity is available for purchase.
     *  <br/><br/>
     *  If the <b>MinimumFeedbackScore</b> field is also set/returned, the maximum quantity threshold value will only apply to those prospective buyers who don't meet or exceed the minimum Feedback score threshold returned in that field. If the <b>MinimumFeedbackScore</b> field not set/returned, the maximum quantity threshold value will apply to all prospective buyers.
     *  <br/><br/>
     *  This field is always returned along with the <b>MaximumItemRequirements</b> container.
     *
     * @param int $maximumItemCount
     * @return self
     */
    public function setMaximumItemCount($maximumItemCount)
    {
        $this->maximumItemCount = $maximumItemCount;
        return $this;
    }

    /**
     * Gets as minimumFeedbackScore
     *
     * If this field is returned, it indicates that the seller has set a maximum quantity threshold value, but this maximum quantity threshold value (returned in <b>MaximumItemCount</b> will only apply to those prospective buyers who don't meet or exceed the minimum Feedback score threshold returned in this field. If this field is not returned, the maximum quantity threshold value will apply to all prospective buyers.
     *
     * @return int
     */
    public function getMinimumFeedbackScore()
    {
        return $this->minimumFeedbackScore;
    }

    /**
     * Sets a new minimumFeedbackScore
     *
     * If this field is returned, it indicates that the seller has set a maximum quantity threshold value, but this maximum quantity threshold value (returned in <b>MaximumItemCount</b> will only apply to those prospective buyers who don't meet or exceed the minimum Feedback score threshold returned in this field. If this field is not returned, the maximum quantity threshold value will apply to all prospective buyers.
     *
     * @param int $minimumFeedbackScore
     * @return self
     */
    public function setMinimumFeedbackScore($minimumFeedbackScore)
    {
        $this->minimumFeedbackScore = $minimumFeedbackScore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaximumItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumItemCount", $value);
        }
        $value = $this->getMinimumFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumItemCount');
        if (null !== $value) {
            $this->setMaximumItemCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore');
        if (null !== $value) {
            $this->setMinimumFeedbackScore($value);
        }
    }
}
