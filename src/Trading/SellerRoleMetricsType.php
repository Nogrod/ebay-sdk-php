<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerRoleMetricsType
 *
 * Specifies 1 year feedback metrics for a seller.
 * XSD Type: SellerRoleMetricsType
 */
class SellerRoleMetricsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Count of positive feedback entries given as a seller.
     *
     * @var int $positiveFeedbackLeftCount
     */
    private $positiveFeedbackLeftCount = null;

    /**
     * Count of negative feedback entries given as a seller.
     *
     * @var int $negativeFeedbackLeftCount
     */
    private $negativeFeedbackLeftCount = null;

    /**
     * Count of neutral feedback entries given as a seller.
     *
     * @var int $neutralFeedbackLeftCount
     */
    private $neutralFeedbackLeftCount = null;

    /**
     * Percentage of leaving feedback as a seller.
     *
     * @var float $feedbackLeftPercent
     */
    private $feedbackLeftPercent = null;

    /**
     * Number of buyers who bought more than once from this seller.
     *
     * @var int $repeatBuyerCount
     */
    private $repeatBuyerCount = null;

    /**
     * Percentage of repeat buyers.
     *
     * @var float $repeatBuyerPercent
     */
    private $repeatBuyerPercent = null;

    /**
     * Count of unique buyers from this seller.
     *
     * @var int $uniqueBuyerCount
     */
    private $uniqueBuyerCount = null;

    /**
     * Percentage of number of times a member has sold successfully vs. the number of
     *  times a member has bought an item in the preceding 365 days.
     *
     * @var float $transactionPercent
     */
    private $transactionPercent = null;

    /**
     * The count of Cross-Border Trade order line items.
     *
     * @var int $crossBorderTransactionCount
     */
    private $crossBorderTransactionCount = null;

    /**
     * The percentage of order line items that are Cross-Border Trade order line items.
     *
     * @var float $crossBorderTransactionPercent
     */
    private $crossBorderTransactionPercent = null;

    /**
     * Gets as positiveFeedbackLeftCount
     *
     * Count of positive feedback entries given as a seller.
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
     * Count of positive feedback entries given as a seller.
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
     * Count of negative feedback entries given as a seller.
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
     * Count of negative feedback entries given as a seller.
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
     * Count of neutral feedback entries given as a seller.
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
     * Count of neutral feedback entries given as a seller.
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
     * Percentage of leaving feedback as a seller.
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
     * Percentage of leaving feedback as a seller.
     *
     * @param float $feedbackLeftPercent
     * @return self
     */
    public function setFeedbackLeftPercent($feedbackLeftPercent)
    {
        $this->feedbackLeftPercent = $feedbackLeftPercent;
        return $this;
    }

    /**
     * Gets as repeatBuyerCount
     *
     * Number of buyers who bought more than once from this seller.
     *
     * @return int
     */
    public function getRepeatBuyerCount()
    {
        return $this->repeatBuyerCount;
    }

    /**
     * Sets a new repeatBuyerCount
     *
     * Number of buyers who bought more than once from this seller.
     *
     * @param int $repeatBuyerCount
     * @return self
     */
    public function setRepeatBuyerCount($repeatBuyerCount)
    {
        $this->repeatBuyerCount = $repeatBuyerCount;
        return $this;
    }

    /**
     * Gets as repeatBuyerPercent
     *
     * Percentage of repeat buyers.
     *
     * @return float
     */
    public function getRepeatBuyerPercent()
    {
        return $this->repeatBuyerPercent;
    }

    /**
     * Sets a new repeatBuyerPercent
     *
     * Percentage of repeat buyers.
     *
     * @param float $repeatBuyerPercent
     * @return self
     */
    public function setRepeatBuyerPercent($repeatBuyerPercent)
    {
        $this->repeatBuyerPercent = $repeatBuyerPercent;
        return $this;
    }

    /**
     * Gets as uniqueBuyerCount
     *
     * Count of unique buyers from this seller.
     *
     * @return int
     */
    public function getUniqueBuyerCount()
    {
        return $this->uniqueBuyerCount;
    }

    /**
     * Sets a new uniqueBuyerCount
     *
     * Count of unique buyers from this seller.
     *
     * @param int $uniqueBuyerCount
     * @return self
     */
    public function setUniqueBuyerCount($uniqueBuyerCount)
    {
        $this->uniqueBuyerCount = $uniqueBuyerCount;
        return $this;
    }

    /**
     * Gets as transactionPercent
     *
     * Percentage of number of times a member has sold successfully vs. the number of
     *  times a member has bought an item in the preceding 365 days.
     *
     * @return float
     */
    public function getTransactionPercent()
    {
        return $this->transactionPercent;
    }

    /**
     * Sets a new transactionPercent
     *
     * Percentage of number of times a member has sold successfully vs. the number of
     *  times a member has bought an item in the preceding 365 days.
     *
     * @param float $transactionPercent
     * @return self
     */
    public function setTransactionPercent($transactionPercent)
    {
        $this->transactionPercent = $transactionPercent;
        return $this;
    }

    /**
     * Gets as crossBorderTransactionCount
     *
     * The count of Cross-Border Trade order line items.
     *
     * @return int
     */
    public function getCrossBorderTransactionCount()
    {
        return $this->crossBorderTransactionCount;
    }

    /**
     * Sets a new crossBorderTransactionCount
     *
     * The count of Cross-Border Trade order line items.
     *
     * @param int $crossBorderTransactionCount
     * @return self
     */
    public function setCrossBorderTransactionCount($crossBorderTransactionCount)
    {
        $this->crossBorderTransactionCount = $crossBorderTransactionCount;
        return $this;
    }

    /**
     * Gets as crossBorderTransactionPercent
     *
     * The percentage of order line items that are Cross-Border Trade order line items.
     *
     * @return float
     */
    public function getCrossBorderTransactionPercent()
    {
        return $this->crossBorderTransactionPercent;
    }

    /**
     * Sets a new crossBorderTransactionPercent
     *
     * The percentage of order line items that are Cross-Border Trade order line items.
     *
     * @param float $crossBorderTransactionPercent
     * @return self
     */
    public function setCrossBorderTransactionPercent($crossBorderTransactionPercent)
    {
        $this->crossBorderTransactionPercent = $crossBorderTransactionPercent;
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
        $value = $this->repeatBuyerCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RepeatBuyerCount', null, (string) $value);
        }
        $value = $this->repeatBuyerPercent;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RepeatBuyerPercent', null, (string) $value);
        }
        $value = $this->uniqueBuyerCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UniqueBuyerCount', null, (string) $value);
        }
        $value = $this->transactionPercent;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionPercent', null, (string) $value);
        }
        $value = $this->crossBorderTransactionCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CrossBorderTransactionCount', null, (string) $value);
        }
        $value = $this->crossBorderTransactionPercent;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CrossBorderTransactionPercent', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerRoleMetricsType
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
                case 'RepeatBuyerCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->repeatBuyerCount = (int) $value;
                    }
                    return true;
                case 'RepeatBuyerPercent':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->repeatBuyerPercent = (float) $value;
                    }
                    return true;
                case 'UniqueBuyerCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uniqueBuyerCount = (int) $value;
                    }
                    return true;
                case 'TransactionPercent':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionPercent = (float) $value;
                    }
                    return true;
                case 'CrossBorderTransactionCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->crossBorderTransactionCount = (int) $value;
                    }
                    return true;
                case 'CrossBorderTransactionPercent':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->crossBorderTransactionPercent = (float) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['PositiveFeedbackLeftCount'] = $this->positiveFeedbackLeftCount;
        $data['NegativeFeedbackLeftCount'] = $this->negativeFeedbackLeftCount;
        $data['NeutralFeedbackLeftCount'] = $this->neutralFeedbackLeftCount;
        $data['FeedbackLeftPercent'] = $this->feedbackLeftPercent;
        $data['RepeatBuyerCount'] = $this->repeatBuyerCount;
        $data['RepeatBuyerPercent'] = $this->repeatBuyerPercent;
        $data['UniqueBuyerCount'] = $this->uniqueBuyerCount;
        $data['TransactionPercent'] = $this->transactionPercent;
        $data['CrossBorderTransactionCount'] = $this->crossBorderTransactionCount;
        $data['CrossBorderTransactionPercent'] = $this->crossBorderTransactionPercent;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
