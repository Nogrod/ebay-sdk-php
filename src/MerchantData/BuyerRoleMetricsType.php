<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyerRoleMetricsType
 *
 * Type defining the <b>BuyerRoleMetrics</b> container, which consists of details relating to the eBay buyer's one-year history of leaving feedback for the seller.
 * XSD Type: BuyerRoleMetricsType
 */
class BuyerRoleMetricsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This integer value indicates the number of positive feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @var int $positiveFeedbackLeftCount
     */
    private $positiveFeedbackLeftCount = null;

    /**
     * This integer value indicates the number of negative feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @var int $negativeFeedbackLeftCount
     */
    private $negativeFeedbackLeftCount = null;

    /**
     * This integer value indicates the number of neutral feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @var int $neutralFeedbackLeftCount
     */
    private $neutralFeedbackLeftCount = null;

    /**
     * This float value indicates the percentage of time that the eBay user, acting in the buying role, has left feedback for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @var float $feedbackLeftPercent
     */
    private $feedbackLeftPercent = null;

    /**
     * Gets as positiveFeedbackLeftCount
     *
     * This integer value indicates the number of positive feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @return int
     */
    public function getPositiveFeedbackLeftCount()
    {
        return $this->positiveFeedbackLeftCount;
    }

    /**
     * Sets a new positiveFeedbackLeftCount
     *
     * This integer value indicates the number of positive feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @param int $positiveFeedbackLeftCount
     * @return self
     */
    public function setPositiveFeedbackLeftCount($positiveFeedbackLeftCount)
    {
        $this->positiveFeedbackLeftCount = $positiveFeedbackLeftCount;
        return $this;
    }

    /**
     * Gets as negativeFeedbackLeftCount
     *
     * This integer value indicates the number of negative feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @return int
     */
    public function getNegativeFeedbackLeftCount()
    {
        return $this->negativeFeedbackLeftCount;
    }

    /**
     * Sets a new negativeFeedbackLeftCount
     *
     * This integer value indicates the number of negative feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @param int $negativeFeedbackLeftCount
     * @return self
     */
    public function setNegativeFeedbackLeftCount($negativeFeedbackLeftCount)
    {
        $this->negativeFeedbackLeftCount = $negativeFeedbackLeftCount;
        return $this;
    }

    /**
     * Gets as neutralFeedbackLeftCount
     *
     * This integer value indicates the number of neutral feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @return int
     */
    public function getNeutralFeedbackLeftCount()
    {
        return $this->neutralFeedbackLeftCount;
    }

    /**
     * Sets a new neutralFeedbackLeftCount
     *
     * This integer value indicates the number of neutral feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @param int $neutralFeedbackLeftCount
     * @return self
     */
    public function setNeutralFeedbackLeftCount($neutralFeedbackLeftCount)
    {
        $this->neutralFeedbackLeftCount = $neutralFeedbackLeftCount;
        return $this;
    }

    /**
     * Gets as feedbackLeftPercent
     *
     * This float value indicates the percentage of time that the eBay user, acting in the buying role, has left feedback for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @return float
     */
    public function getFeedbackLeftPercent()
    {
        return $this->feedbackLeftPercent;
    }

    /**
     * Sets a new feedbackLeftPercent
     *
     * This float value indicates the percentage of time that the eBay user, acting in the buying role, has left feedback for their order partner (seller) during the last one-year period, counting back from the present date.
     *
     * @param float $feedbackLeftPercent
     * @return self
     */
    public function setFeedbackLeftPercent($feedbackLeftPercent)
    {
        $this->feedbackLeftPercent = $feedbackLeftPercent;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPositiveFeedbackLeftCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackLeftCount", $value);
        }
        $value = $this->getNegativeFeedbackLeftCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NegativeFeedbackLeftCount", $value);
        }
        $value = $this->getNeutralFeedbackLeftCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NeutralFeedbackLeftCount", $value);
        }
        $value = $this->getFeedbackLeftPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackLeftPercent", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackLeftCount');
        if (null !== $value) {
            $this->setPositiveFeedbackLeftCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NegativeFeedbackLeftCount');
        if (null !== $value) {
            $this->setNegativeFeedbackLeftCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NeutralFeedbackLeftCount');
        if (null !== $value) {
            $this->setNeutralFeedbackLeftCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackLeftPercent');
        if (null !== $value) {
            $this->setFeedbackLeftPercent($value);
        }
    }
}
