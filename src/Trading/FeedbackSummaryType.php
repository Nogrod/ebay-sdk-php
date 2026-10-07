<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeedbackSummaryType
 *
 * Specifies all feedback summary information (except Score). Contains
 *  FeedbackPeriodArrayType objects that each convey feedback counts for positive,
 *  negative, neutral, and total feedback counts - for various time periods each. Also
 *  conveys counts of bid retractions for the predefined time periods.
 * XSD Type: FeedbackSummaryType
 */
class FeedbackSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Bid retractions count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $bidRetractionFeedbackPeriodArray
     */
    private $bidRetractionFeedbackPeriodArray = null;

    /**
     * Negative feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $negativeFeedbackPeriodArray
     */
    private $negativeFeedbackPeriodArray = null;

    /**
     * Neutral feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $neutralFeedbackPeriodArray
     */
    private $neutralFeedbackPeriodArray = null;

    /**
     * Positive feedback entries count, for multiple predefined time periods
     *  preceding the call. Returned if no detail level is specified.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $positiveFeedbackPeriodArray
     */
    private $positiveFeedbackPeriodArray = null;

    /**
     * Total feedback score, for multiple predefined time periods preceding the
     *  call. Returned if no detail level is specified.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $totalFeedbackPeriodArray
     */
    private $totalFeedbackPeriodArray = null;

    /**
     * Number of neutral comments received from suspended users. Returned if no
     *  detail level is specified.
     *
     * @var int $neutralCommentCountFromSuspendedUsers
     */
    private $neutralCommentCountFromSuspendedUsers = null;

    /**
     * Total number of negative Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @var int $uniqueNegativeFeedbackCount
     */
    private $uniqueNegativeFeedbackCount = null;

    /**
     * Total number of positive Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @var int $uniquePositiveFeedbackCount
     */
    private $uniquePositiveFeedbackCount = null;

    /**
     * Total number of neutral Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @var int $uniqueNeutralFeedbackCount
     */
    private $uniqueNeutralFeedbackCount = null;

    /**
     * Container for information about detailed seller ratings (DSRs)
     *  that buyers have left for a seller.
     *  Sellers have access to the number of ratings they've received, as well as
     *  to the averages of DSRs they've received in each
     *  DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *  The DSR feature is available everywhere on API-enabled country sites,
     *  including the US site (site ID 0).
     *
     * @var \Nogrod\eBaySDK\Trading\AverageRatingSummaryType[] $sellerRatingSummaryArray
     */
    private $sellerRatingSummaryArray = null;

    /**
     * Container for information about 1 year feedback metric as seller.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerRoleMetricsType $sellerRoleMetrics
     */
    private $sellerRoleMetrics = null;

    /**
     * Container for information about 1 year feedback metric as buyer.
     *
     * @var \Nogrod\eBaySDK\Trading\BuyerRoleMetricsType $buyerRoleMetrics
     */
    private $buyerRoleMetrics = null;

    /**
     * Adds as feedbackPeriod
     *
     * Bid retractions count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod
     */
    public function addToBidRetractionFeedbackPeriodArray(\Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod)
    {
        if (!is_array($this->bidRetractionFeedbackPeriodArray)) {
            throw new \LogicException('bidRetractionFeedbackPeriodArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->bidRetractionFeedbackPeriodArray[] = $feedbackPeriod;
        return $this;
    }

    /**
     * isset bidRetractionFeedbackPeriodArray
     *
     * Bid retractions count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidRetractionFeedbackPeriodArray($index)
    {
        return isset($this->bidRetractionFeedbackPeriodArray[$index]);
    }

    /**
     * unset bidRetractionFeedbackPeriodArray
     *
     * Bid retractions count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidRetractionFeedbackPeriodArray($index)
    {
        unset($this->bidRetractionFeedbackPeriodArray[$index]);
    }

    /**
     * Gets as bidRetractionFeedbackPeriodArray
     *
     * Bid retractions count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType>
     */
    public function getBidRetractionFeedbackPeriodArray()
    {
        return $this->bidRetractionFeedbackPeriodArray;
    }

    /**
     * Sets a new bidRetractionFeedbackPeriodArray
     *
     * Bid retractions count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType> $bidRetractionFeedbackPeriodArray
     * @return self
     */
    public function setBidRetractionFeedbackPeriodArray(iterable $bidRetractionFeedbackPeriodArray)
    {
        $this->bidRetractionFeedbackPeriodArray = $bidRetractionFeedbackPeriodArray;
        return $this;
    }

    /**
     * Adds as feedbackPeriod
     *
     * Negative feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod
     */
    public function addToNegativeFeedbackPeriodArray(\Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod)
    {
        if (!is_array($this->negativeFeedbackPeriodArray)) {
            throw new \LogicException('negativeFeedbackPeriodArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->negativeFeedbackPeriodArray[] = $feedbackPeriod;
        return $this;
    }

    /**
     * isset negativeFeedbackPeriodArray
     *
     * Negative feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNegativeFeedbackPeriodArray($index)
    {
        return isset($this->negativeFeedbackPeriodArray[$index]);
    }

    /**
     * unset negativeFeedbackPeriodArray
     *
     * Negative feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNegativeFeedbackPeriodArray($index)
    {
        unset($this->negativeFeedbackPeriodArray[$index]);
    }

    /**
     * Gets as negativeFeedbackPeriodArray
     *
     * Negative feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType>
     */
    public function getNegativeFeedbackPeriodArray()
    {
        return $this->negativeFeedbackPeriodArray;
    }

    /**
     * Sets a new negativeFeedbackPeriodArray
     *
     * Negative feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType> $negativeFeedbackPeriodArray
     * @return self
     */
    public function setNegativeFeedbackPeriodArray(iterable $negativeFeedbackPeriodArray)
    {
        $this->negativeFeedbackPeriodArray = $negativeFeedbackPeriodArray;
        return $this;
    }

    /**
     * Adds as feedbackPeriod
     *
     * Neutral feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod
     */
    public function addToNeutralFeedbackPeriodArray(\Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod)
    {
        if (!is_array($this->neutralFeedbackPeriodArray)) {
            throw new \LogicException('neutralFeedbackPeriodArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->neutralFeedbackPeriodArray[] = $feedbackPeriod;
        return $this;
    }

    /**
     * isset neutralFeedbackPeriodArray
     *
     * Neutral feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNeutralFeedbackPeriodArray($index)
    {
        return isset($this->neutralFeedbackPeriodArray[$index]);
    }

    /**
     * unset neutralFeedbackPeriodArray
     *
     * Neutral feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNeutralFeedbackPeriodArray($index)
    {
        unset($this->neutralFeedbackPeriodArray[$index]);
    }

    /**
     * Gets as neutralFeedbackPeriodArray
     *
     * Neutral feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType>
     */
    public function getNeutralFeedbackPeriodArray()
    {
        return $this->neutralFeedbackPeriodArray;
    }

    /**
     * Sets a new neutralFeedbackPeriodArray
     *
     * Neutral feedback entries count, for multiple predefined time periods preceding
     *  the call. Returned if no detail level is specified.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType> $neutralFeedbackPeriodArray
     * @return self
     */
    public function setNeutralFeedbackPeriodArray(iterable $neutralFeedbackPeriodArray)
    {
        $this->neutralFeedbackPeriodArray = $neutralFeedbackPeriodArray;
        return $this;
    }

    /**
     * Adds as feedbackPeriod
     *
     * Positive feedback entries count, for multiple predefined time periods
     *  preceding the call. Returned if no detail level is specified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod
     */
    public function addToPositiveFeedbackPeriodArray(\Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod)
    {
        if (!is_array($this->positiveFeedbackPeriodArray)) {
            throw new \LogicException('positiveFeedbackPeriodArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->positiveFeedbackPeriodArray[] = $feedbackPeriod;
        return $this;
    }

    /**
     * isset positiveFeedbackPeriodArray
     *
     * Positive feedback entries count, for multiple predefined time periods
     *  preceding the call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPositiveFeedbackPeriodArray($index)
    {
        return isset($this->positiveFeedbackPeriodArray[$index]);
    }

    /**
     * unset positiveFeedbackPeriodArray
     *
     * Positive feedback entries count, for multiple predefined time periods
     *  preceding the call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPositiveFeedbackPeriodArray($index)
    {
        unset($this->positiveFeedbackPeriodArray[$index]);
    }

    /**
     * Gets as positiveFeedbackPeriodArray
     *
     * Positive feedback entries count, for multiple predefined time periods
     *  preceding the call. Returned if no detail level is specified.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType>
     */
    public function getPositiveFeedbackPeriodArray()
    {
        return $this->positiveFeedbackPeriodArray;
    }

    /**
     * Sets a new positiveFeedbackPeriodArray
     *
     * Positive feedback entries count, for multiple predefined time periods
     *  preceding the call. Returned if no detail level is specified.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType> $positiveFeedbackPeriodArray
     * @return self
     */
    public function setPositiveFeedbackPeriodArray(iterable $positiveFeedbackPeriodArray)
    {
        $this->positiveFeedbackPeriodArray = $positiveFeedbackPeriodArray;
        return $this;
    }

    /**
     * Adds as feedbackPeriod
     *
     * Total feedback score, for multiple predefined time periods preceding the
     *  call. Returned if no detail level is specified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod
     */
    public function addToTotalFeedbackPeriodArray(\Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod)
    {
        if (!is_array($this->totalFeedbackPeriodArray)) {
            throw new \LogicException('totalFeedbackPeriodArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->totalFeedbackPeriodArray[] = $feedbackPeriod;
        return $this;
    }

    /**
     * isset totalFeedbackPeriodArray
     *
     * Total feedback score, for multiple predefined time periods preceding the
     *  call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalFeedbackPeriodArray($index)
    {
        return isset($this->totalFeedbackPeriodArray[$index]);
    }

    /**
     * unset totalFeedbackPeriodArray
     *
     * Total feedback score, for multiple predefined time periods preceding the
     *  call. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalFeedbackPeriodArray($index)
    {
        unset($this->totalFeedbackPeriodArray[$index]);
    }

    /**
     * Gets as totalFeedbackPeriodArray
     *
     * Total feedback score, for multiple predefined time periods preceding the
     *  call. Returned if no detail level is specified.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType>
     */
    public function getTotalFeedbackPeriodArray()
    {
        return $this->totalFeedbackPeriodArray;
    }

    /**
     * Sets a new totalFeedbackPeriodArray
     *
     * Total feedback score, for multiple predefined time periods preceding the
     *  call. Returned if no detail level is specified.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType> $totalFeedbackPeriodArray
     * @return self
     */
    public function setTotalFeedbackPeriodArray(iterable $totalFeedbackPeriodArray)
    {
        $this->totalFeedbackPeriodArray = $totalFeedbackPeriodArray;
        return $this;
    }

    /**
     * Gets as neutralCommentCountFromSuspendedUsers
     *
     * Number of neutral comments received from suspended users. Returned if no
     *  detail level is specified.
     *
     * @return int
     */
    public function getNeutralCommentCountFromSuspendedUsers()
    {
        return $this->neutralCommentCountFromSuspendedUsers;
    }

    /**
     * Sets a new neutralCommentCountFromSuspendedUsers
     *
     * Number of neutral comments received from suspended users. Returned if no
     *  detail level is specified.
     *
     * @param int $neutralCommentCountFromSuspendedUsers
     * @return self
     */
    public function setNeutralCommentCountFromSuspendedUsers($neutralCommentCountFromSuspendedUsers)
    {
        $this->neutralCommentCountFromSuspendedUsers = $neutralCommentCountFromSuspendedUsers;
        return $this;
    }

    /**
     * Gets as uniqueNegativeFeedbackCount
     *
     * Total number of negative Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @return int
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->uniqueNegativeFeedbackCount;
    }

    /**
     * Sets a new uniqueNegativeFeedbackCount
     *
     * Total number of negative Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @param int $uniqueNegativeFeedbackCount
     * @return self
     */
    public function setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount)
    {
        $this->uniqueNegativeFeedbackCount = $uniqueNegativeFeedbackCount;
        return $this;
    }

    /**
     * Gets as uniquePositiveFeedbackCount
     *
     * Total number of positive Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @return int
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->uniquePositiveFeedbackCount;
    }

    /**
     * Sets a new uniquePositiveFeedbackCount
     *
     * Total number of positive Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @param int $uniquePositiveFeedbackCount
     * @return self
     */
    public function setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount)
    {
        $this->uniquePositiveFeedbackCount = $uniquePositiveFeedbackCount;
        return $this;
    }

    /**
     * Gets as uniqueNeutralFeedbackCount
     *
     * Total number of neutral Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @return int
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->uniqueNeutralFeedbackCount;
    }

    /**
     * Sets a new uniqueNeutralFeedbackCount
     *
     * Total number of neutral Feedback comments, including weekly repeats. Returned if no detail level is specified.
     *
     * @param int $uniqueNeutralFeedbackCount
     * @return self
     */
    public function setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
    {
        $this->uniqueNeutralFeedbackCount = $uniqueNeutralFeedbackCount;
        return $this;
    }

    /**
     * Adds as averageRatingSummary
     *
     * Container for information about detailed seller ratings (DSRs)
     *  that buyers have left for a seller.
     *  Sellers have access to the number of ratings they've received, as well as
     *  to the averages of DSRs they've received in each
     *  DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *  The DSR feature is available everywhere on API-enabled country sites,
     *  including the US site (site ID 0).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AverageRatingSummaryType $averageRatingSummary
     */
    public function addToSellerRatingSummaryArray(\Nogrod\eBaySDK\Trading\AverageRatingSummaryType $averageRatingSummary)
    {
        if (!is_array($this->sellerRatingSummaryArray)) {
            throw new \LogicException('sellerRatingSummaryArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->sellerRatingSummaryArray[] = $averageRatingSummary;
        return $this;
    }

    /**
     * isset sellerRatingSummaryArray
     *
     * Container for information about detailed seller ratings (DSRs)
     *  that buyers have left for a seller.
     *  Sellers have access to the number of ratings they've received, as well as
     *  to the averages of DSRs they've received in each
     *  DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *  The DSR feature is available everywhere on API-enabled country sites,
     *  including the US site (site ID 0).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerRatingSummaryArray($index)
    {
        return isset($this->sellerRatingSummaryArray[$index]);
    }

    /**
     * unset sellerRatingSummaryArray
     *
     * Container for information about detailed seller ratings (DSRs)
     *  that buyers have left for a seller.
     *  Sellers have access to the number of ratings they've received, as well as
     *  to the averages of DSRs they've received in each
     *  DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *  The DSR feature is available everywhere on API-enabled country sites,
     *  including the US site (site ID 0).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerRatingSummaryArray($index)
    {
        unset($this->sellerRatingSummaryArray[$index]);
    }

    /**
     * Gets as sellerRatingSummaryArray
     *
     * Container for information about detailed seller ratings (DSRs)
     *  that buyers have left for a seller.
     *  Sellers have access to the number of ratings they've received, as well as
     *  to the averages of DSRs they've received in each
     *  DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *  The DSR feature is available everywhere on API-enabled country sites,
     *  including the US site (site ID 0).
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AverageRatingSummaryType>
     */
    public function getSellerRatingSummaryArray()
    {
        return $this->sellerRatingSummaryArray;
    }

    /**
     * Sets a new sellerRatingSummaryArray
     *
     * Container for information about detailed seller ratings (DSRs)
     *  that buyers have left for a seller.
     *  Sellers have access to the number of ratings they've received, as well as
     *  to the averages of DSRs they've received in each
     *  DSR area (i.e., to the average of ratings in the item-description area, etc.).
     *  The DSR feature is available everywhere on API-enabled country sites,
     *  including the US site (site ID 0).
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AverageRatingSummaryType> $sellerRatingSummaryArray
     * @return self
     */
    public function setSellerRatingSummaryArray(iterable $sellerRatingSummaryArray)
    {
        $this->sellerRatingSummaryArray = $sellerRatingSummaryArray;
        return $this;
    }

    /**
     * Gets as sellerRoleMetrics
     *
     * Container for information about 1 year feedback metric as seller.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerRoleMetricsType
     */
    public function getSellerRoleMetrics()
    {
        return $this->sellerRoleMetrics;
    }

    /**
     * Sets a new sellerRoleMetrics
     *
     * Container for information about 1 year feedback metric as seller.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerRoleMetricsType $sellerRoleMetrics
     * @return self
     */
    public function setSellerRoleMetrics(\Nogrod\eBaySDK\Trading\SellerRoleMetricsType $sellerRoleMetrics)
    {
        $this->sellerRoleMetrics = $sellerRoleMetrics;
        return $this;
    }

    /**
     * Gets as buyerRoleMetrics
     *
     * Container for information about 1 year feedback metric as buyer.
     *
     * @return \Nogrod\eBaySDK\Trading\BuyerRoleMetricsType
     */
    public function getBuyerRoleMetrics()
    {
        return $this->buyerRoleMetrics;
    }

    /**
     * Sets a new buyerRoleMetrics
     *
     * Container for information about 1 year feedback metric as buyer.
     *
     * @param \Nogrod\eBaySDK\Trading\BuyerRoleMetricsType $buyerRoleMetrics
     * @return self
     */
    public function setBuyerRoleMetrics(\Nogrod\eBaySDK\Trading\BuyerRoleMetricsType $buyerRoleMetrics)
    {
        $this->buyerRoleMetrics = $buyerRoleMetrics;
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
        $value = $this->bidRetractionFeedbackPeriodArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'BidRetractionFeedbackPeriodArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'FeedbackPeriod', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->negativeFeedbackPeriodArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'NegativeFeedbackPeriodArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'FeedbackPeriod', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->neutralFeedbackPeriodArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'NeutralFeedbackPeriodArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'FeedbackPeriod', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->positiveFeedbackPeriodArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'PositiveFeedbackPeriodArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'FeedbackPeriod', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->totalFeedbackPeriodArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'TotalFeedbackPeriodArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'FeedbackPeriod', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->neutralCommentCountFromSuspendedUsers;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NeutralCommentCountFromSuspendedUsers', null, (string) $value);
        }
        $value = $this->uniqueNegativeFeedbackCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UniqueNegativeFeedbackCount', null, (string) $value);
        }
        $value = $this->uniquePositiveFeedbackCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UniquePositiveFeedbackCount', null, (string) $value);
        }
        $value = $this->uniqueNeutralFeedbackCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UniqueNeutralFeedbackCount', null, (string) $value);
        }
        $value = $this->sellerRatingSummaryArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'SellerRatingSummaryArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'AverageRatingSummary', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->sellerRoleMetrics;
        if (null !== $value) {
            $writer->startElementNs(null, 'SellerRoleMetrics', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->buyerRoleMetrics;
        if (null !== $value) {
            $writer->startElementNs(null, 'BuyerRoleMetrics', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeedbackSummaryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->bidRetractionFeedbackPeriodArray = [];
        $this->negativeFeedbackPeriodArray = [];
        $this->neutralFeedbackPeriodArray = [];
        $this->positiveFeedbackPeriodArray = [];
        $this->totalFeedbackPeriodArray = [];
        $this->sellerRatingSummaryArray = [];
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
                case 'BidRetractionFeedbackPeriodArray':
                    $this->bidRetractionFeedbackPeriodArray = Func::readList($reader, 'FeedbackPeriod', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\FeedbackPeriodType::xmlRead($reader));
                    return true;
                case 'NegativeFeedbackPeriodArray':
                    $this->negativeFeedbackPeriodArray = Func::readList($reader, 'FeedbackPeriod', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\FeedbackPeriodType::xmlRead($reader));
                    return true;
                case 'NeutralFeedbackPeriodArray':
                    $this->neutralFeedbackPeriodArray = Func::readList($reader, 'FeedbackPeriod', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\FeedbackPeriodType::xmlRead($reader));
                    return true;
                case 'PositiveFeedbackPeriodArray':
                    $this->positiveFeedbackPeriodArray = Func::readList($reader, 'FeedbackPeriod', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\FeedbackPeriodType::xmlRead($reader));
                    return true;
                case 'TotalFeedbackPeriodArray':
                    $this->totalFeedbackPeriodArray = Func::readList($reader, 'FeedbackPeriod', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\FeedbackPeriodType::xmlRead($reader));
                    return true;
                case 'NeutralCommentCountFromSuspendedUsers':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->neutralCommentCountFromSuspendedUsers = (int) $value;
                    }
                    return true;
                case 'UniqueNegativeFeedbackCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uniqueNegativeFeedbackCount = (int) $value;
                    }
                    return true;
                case 'UniquePositiveFeedbackCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uniquePositiveFeedbackCount = (int) $value;
                    }
                    return true;
                case 'UniqueNeutralFeedbackCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uniqueNeutralFeedbackCount = (int) $value;
                    }
                    return true;
                case 'SellerRatingSummaryArray':
                    $this->sellerRatingSummaryArray = Func::readList($reader, 'AverageRatingSummary', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\AverageRatingSummaryType::xmlRead($reader));
                    return true;
                case 'SellerRoleMetrics':
                    $this->sellerRoleMetrics = \Nogrod\eBaySDK\Trading\SellerRoleMetricsType::xmlRead($reader);
                    return true;
                case 'BuyerRoleMetrics':
                    $this->buyerRoleMetrics = \Nogrod\eBaySDK\Trading\BuyerRoleMetricsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['BidRetractionFeedbackPeriodArray'] = Func::jsonList($this->bidRetractionFeedbackPeriodArray);
        $data['NegativeFeedbackPeriodArray'] = Func::jsonList($this->negativeFeedbackPeriodArray);
        $data['NeutralFeedbackPeriodArray'] = Func::jsonList($this->neutralFeedbackPeriodArray);
        $data['PositiveFeedbackPeriodArray'] = Func::jsonList($this->positiveFeedbackPeriodArray);
        $data['TotalFeedbackPeriodArray'] = Func::jsonList($this->totalFeedbackPeriodArray);
        $data['NeutralCommentCountFromSuspendedUsers'] = $this->neutralCommentCountFromSuspendedUsers;
        $data['UniqueNegativeFeedbackCount'] = $this->uniqueNegativeFeedbackCount;
        $data['UniquePositiveFeedbackCount'] = $this->uniquePositiveFeedbackCount;
        $data['UniqueNeutralFeedbackCount'] = $this->uniqueNeutralFeedbackCount;
        $data['SellerRatingSummaryArray'] = Func::jsonList($this->sellerRatingSummaryArray);
        $data['SellerRoleMetrics'] = $this->sellerRoleMetrics;
        $data['BuyerRoleMetrics'] = $this->buyerRoleMetrics;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
