<?php

namespace Nogrod\eBaySDK\Trading;

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
        $value = $this->positiveFeedbackLeftCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PositiveFeedbackLeftCount', null, (string) $value);
        }
        $value = $this->negativeFeedbackLeftCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NegativeFeedbackLeftCount', null, (string) $value);
        }
        $value = $this->neutralFeedbackLeftCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NeutralFeedbackLeftCount', null, (string) $value);
        }
        $value = $this->feedbackLeftPercent;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FeedbackLeftPercent', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BuyerRoleMetricsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'PositiveFeedbackLeftCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->positiveFeedbackLeftCount = (int) $value;
                    }
                    return true;
                case 'NegativeFeedbackLeftCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->negativeFeedbackLeftCount = (int) $value;
                    }
                    return true;
                case 'NeutralFeedbackLeftCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->neutralFeedbackLeftCount = (int) $value;
                    }
                    return true;
                case 'FeedbackLeftPercent':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feedbackLeftPercent = (float) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
