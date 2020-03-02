<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerRoleMetricsType
 *
 * Specifies 1 year feedback metrics for a seller.
 * XSD Type: SellerRoleMetricsType
 */
class SellerRoleMetricsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
        $value = $this->getRepeatBuyerCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RepeatBuyerCount", $value);
        }
        $value = $this->getRepeatBuyerPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RepeatBuyerPercent", $value);
        }
        $value = $this->getUniqueBuyerCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueBuyerCount", $value);
        }
        $value = $this->getTransactionPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionPercent", $value);
        }
        $value = $this->getCrossBorderTransactionCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTransactionCount", $value);
        }
        $value = $this->getCrossBorderTransactionPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTransactionPercent", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RepeatBuyerCount');
        if (null !== $value) {
            $this->setRepeatBuyerCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RepeatBuyerPercent');
        if (null !== $value) {
            $this->setRepeatBuyerPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueBuyerCount');
        if (null !== $value) {
            $this->setUniqueBuyerCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionPercent');
        if (null !== $value) {
            $this->setTransactionPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTransactionCount');
        if (null !== $value) {
            $this->setCrossBorderTransactionCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTransactionPercent');
        if (null !== $value) {
            $this->setCrossBorderTransactionPercent($value);
        }
    }
}
