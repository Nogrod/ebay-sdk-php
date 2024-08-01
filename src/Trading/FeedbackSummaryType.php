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
class FeedbackSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     * @return \Nogrod\eBaySDK\Trading\FeedbackPeriodType[]
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
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $bidRetractionFeedbackPeriodArray
     * @return self
     */
    public function setBidRetractionFeedbackPeriodArray(array $bidRetractionFeedbackPeriodArray)
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
     * @return \Nogrod\eBaySDK\Trading\FeedbackPeriodType[]
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
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $negativeFeedbackPeriodArray
     * @return self
     */
    public function setNegativeFeedbackPeriodArray(array $negativeFeedbackPeriodArray)
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
     * @return \Nogrod\eBaySDK\Trading\FeedbackPeriodType[]
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
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $neutralFeedbackPeriodArray
     * @return self
     */
    public function setNeutralFeedbackPeriodArray(array $neutralFeedbackPeriodArray)
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
     * @return \Nogrod\eBaySDK\Trading\FeedbackPeriodType[]
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
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $positiveFeedbackPeriodArray
     * @return self
     */
    public function setPositiveFeedbackPeriodArray(array $positiveFeedbackPeriodArray)
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
     * @return \Nogrod\eBaySDK\Trading\FeedbackPeriodType[]
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
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $totalFeedbackPeriodArray
     * @return self
     */
    public function setTotalFeedbackPeriodArray(array $totalFeedbackPeriodArray)
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
     * @return \Nogrod\eBaySDK\Trading\AverageRatingSummaryType[]
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
     * @param \Nogrod\eBaySDK\Trading\AverageRatingSummaryType[] $sellerRatingSummaryArray
     * @return self
     */
    public function setSellerRatingSummaryArray(array $sellerRatingSummaryArray)
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBidRetractionFeedbackPeriodArray();
        if (null !== $value && !empty($this->getBidRetractionFeedbackPeriodArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidRetractionFeedbackPeriodArray", array_map(function ($v) {return ["FeedbackPeriod" => $v];}, $value));
        }
        $value = $this->getNegativeFeedbackPeriodArray();
        if (null !== $value && !empty($this->getNegativeFeedbackPeriodArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NegativeFeedbackPeriodArray", array_map(function ($v) {return ["FeedbackPeriod" => $v];}, $value));
        }
        $value = $this->getNeutralFeedbackPeriodArray();
        if (null !== $value && !empty($this->getNeutralFeedbackPeriodArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NeutralFeedbackPeriodArray", array_map(function ($v) {return ["FeedbackPeriod" => $v];}, $value));
        }
        $value = $this->getPositiveFeedbackPeriodArray();
        if (null !== $value && !empty($this->getPositiveFeedbackPeriodArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPeriodArray", array_map(function ($v) {return ["FeedbackPeriod" => $v];}, $value));
        }
        $value = $this->getTotalFeedbackPeriodArray();
        if (null !== $value && !empty($this->getTotalFeedbackPeriodArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalFeedbackPeriodArray", array_map(function ($v) {return ["FeedbackPeriod" => $v];}, $value));
        }
        $value = $this->getNeutralCommentCountFromSuspendedUsers();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NeutralCommentCountFromSuspendedUsers", $value);
        }
        $value = $this->getUniqueNegativeFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueNegativeFeedbackCount", $value);
        }
        $value = $this->getUniquePositiveFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniquePositiveFeedbackCount", $value);
        }
        $value = $this->getUniqueNeutralFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueNeutralFeedbackCount", $value);
        }
        $value = $this->getSellerRatingSummaryArray();
        if (null !== $value && !empty($this->getSellerRatingSummaryArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerRatingSummaryArray", array_map(function ($v) {return ["AverageRatingSummary" => $v];}, $value));
        }
        $value = $this->getSellerRoleMetrics();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerRoleMetrics", $value);
        }
        $value = $this->getBuyerRoleMetrics();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerRoleMetrics", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidRetractionFeedbackPeriodArray', true);
        if (null !== $value && !empty($value)) {
            $this->setBidRetractionFeedbackPeriodArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NegativeFeedbackPeriodArray', true);
        if (null !== $value && !empty($value)) {
            $this->setNegativeFeedbackPeriodArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NeutralFeedbackPeriodArray', true);
        if (null !== $value && !empty($value)) {
            $this->setNeutralFeedbackPeriodArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPeriodArray', true);
        if (null !== $value && !empty($value)) {
            $this->setPositiveFeedbackPeriodArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalFeedbackPeriodArray', true);
        if (null !== $value && !empty($value)) {
            $this->setTotalFeedbackPeriodArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NeutralCommentCountFromSuspendedUsers');
        if (null !== $value) {
            $this->setNeutralCommentCountFromSuspendedUsers($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueNegativeFeedbackCount');
        if (null !== $value) {
            $this->setUniqueNegativeFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniquePositiveFeedbackCount');
        if (null !== $value) {
            $this->setUniquePositiveFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueNeutralFeedbackCount');
        if (null !== $value) {
            $this->setUniqueNeutralFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerRatingSummaryArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSellerRatingSummaryArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\AverageRatingSummaryType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerRoleMetrics');
        if (null !== $value) {
            $this->setSellerRoleMetrics(\Nogrod\eBaySDK\Trading\SellerRoleMetricsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerRoleMetrics');
        if (null !== $value) {
            $this->setBuyerRoleMetrics(\Nogrod\eBaySDK\Trading\BuyerRoleMetricsType::fromKeyValue($value));
        }
    }
}
