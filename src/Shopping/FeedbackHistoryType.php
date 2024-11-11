<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeedbackHistoryType
 *
 * Type used by the <b>FeedbackHistory</b> container that is returned in the <b>GetUserProfile</b> response. The <b>FeedbackHistory</b> container is only returned if an <b>IncludeSelector</b> field is included in the request with a value set to <code>FeedbackHistory</code>.
 *  <br/><br/>
 *  The <b>FeedbackHistory</b> container consists of various statistical data about the specified eBay user's Feedback history, including counts of Positive, Neutral, and Negative, and Withdrawn Feedback entries for predefined time periods, as well as Detaled Seller Ratings (if applicable to the eBay seller).
 * XSD Type: FeedbackHistoryType
 */
class FeedbackHistoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>BidRetractionFeedbackPeriods</b> container shows the cumulative number of Withdrawn Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @var \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $bidRetractionFeedbackPeriods
     */
    private $bidRetractionFeedbackPeriods = [

    ];

    /**
     * A <b>NegativeFeedbackPeriods</b> container shows the cumulative number of Negative Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @var \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $negativeFeedbackPeriods
     */
    private $negativeFeedbackPeriods = [

    ];

    /**
     * A <b>NeutralFeedbackPeriods</b> container shows the cumulative number of Neutral Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @var \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $neutralFeedbackPeriods
     */
    private $neutralFeedbackPeriods = [

    ];

    /**
     * A <b>PositiveFeedbackPeriods</b> container shows the cumulative number of Positive Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @var \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $positiveFeedbackPeriods
     */
    private $positiveFeedbackPeriods = [

    ];

    /**
     * A <b>TotalFeedbackPeriods</b> container shows the cumulative number of all Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @var \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $totalFeedbackPeriods
     */
    private $totalFeedbackPeriods = [

    ];

    /**
     * This integer value indicates the total number of Negative Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay since eBay buyers cannot receive Negative feedback from their order partners.
     *
     * @var int $uniqueNegativeFeedbackCount
     */
    private $uniqueNegativeFeedbackCount = null;

    /**
     * This integer value indicates the total number of Positive Feedback entries that the specified eBay user has received (as a buyer or seller) from unique users, ever since the eBay user first registered on eBay.
     *
     * @var int $uniquePositiveFeedbackCount
     */
    private $uniquePositiveFeedbackCount = null;

    /**
     * Each returned <b>AverageRatingDetails</b> container shows the seller's current rating for the Detailed Seller Rating type (specified in the <b>RatingDetail</b> field), as well as the total count that this seller has been rated for this particular Detailed Seller Rating type.
     *  <br/><br/>
     *  This container is only returned if applicable. If the specified eBay user only buys on eBay, these containers will not get returned, and Detailed Seller Ratings are not available or applicable for all sellers.
     *
     * @var \Nogrod\eBaySDK\Shopping\AverageRatingDetailsType[] $averageRatingDetails
     */
    private $averageRatingDetails = [

    ];

    /**
     * Number of Neutral comments received from suspended users. This field is only returned if applicable.
     *
     * @var int $neutralCommentCountFromSuspendedUsers
     */
    private $neutralCommentCountFromSuspendedUsers = null;

    /**
     * This integer value indicates the total number of Neutral Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay since eBay buyers cannot receive Neutral feedback from their order partners.
     *  This field is only returned if applicable.
     *
     * @var int $uniqueNeutralFeedbackCount
     */
    private $uniqueNeutralFeedbackCount = null;

    /**
     * Adds as bidRetractionFeedbackPeriods
     *
     * A <b>BidRetractionFeedbackPeriods</b> container shows the cumulative number of Withdrawn Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType $bidRetractionFeedbackPeriods
     */
    public function addToBidRetractionFeedbackPeriods(\Nogrod\eBaySDK\Shopping\FeedbackPeriodType $bidRetractionFeedbackPeriods)
    {
        $this->bidRetractionFeedbackPeriods[] = $bidRetractionFeedbackPeriods;
        return $this;
    }

    /**
     * isset bidRetractionFeedbackPeriods
     *
     * A <b>BidRetractionFeedbackPeriods</b> container shows the cumulative number of Withdrawn Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidRetractionFeedbackPeriods($index)
    {
        return isset($this->bidRetractionFeedbackPeriods[$index]);
    }

    /**
     * unset bidRetractionFeedbackPeriods
     *
     * A <b>BidRetractionFeedbackPeriods</b> container shows the cumulative number of Withdrawn Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidRetractionFeedbackPeriods($index)
    {
        unset($this->bidRetractionFeedbackPeriods[$index]);
    }

    /**
     * Gets as bidRetractionFeedbackPeriods
     *
     * A <b>BidRetractionFeedbackPeriods</b> container shows the cumulative number of Withdrawn Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[]
     */
    public function getBidRetractionFeedbackPeriods()
    {
        return $this->bidRetractionFeedbackPeriods;
    }

    /**
     * Sets a new bidRetractionFeedbackPeriods
     *
     * A <b>BidRetractionFeedbackPeriods</b> container shows the cumulative number of Withdrawn Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $bidRetractionFeedbackPeriods
     * @return self
     */
    public function setBidRetractionFeedbackPeriods(array $bidRetractionFeedbackPeriods)
    {
        $this->bidRetractionFeedbackPeriods = $bidRetractionFeedbackPeriods;
        return $this;
    }

    /**
     * Adds as negativeFeedbackPeriods
     *
     * A <b>NegativeFeedbackPeriods</b> container shows the cumulative number of Negative Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType $negativeFeedbackPeriods
     */
    public function addToNegativeFeedbackPeriods(\Nogrod\eBaySDK\Shopping\FeedbackPeriodType $negativeFeedbackPeriods)
    {
        $this->negativeFeedbackPeriods[] = $negativeFeedbackPeriods;
        return $this;
    }

    /**
     * isset negativeFeedbackPeriods
     *
     * A <b>NegativeFeedbackPeriods</b> container shows the cumulative number of Negative Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNegativeFeedbackPeriods($index)
    {
        return isset($this->negativeFeedbackPeriods[$index]);
    }

    /**
     * unset negativeFeedbackPeriods
     *
     * A <b>NegativeFeedbackPeriods</b> container shows the cumulative number of Negative Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNegativeFeedbackPeriods($index)
    {
        unset($this->negativeFeedbackPeriods[$index]);
    }

    /**
     * Gets as negativeFeedbackPeriods
     *
     * A <b>NegativeFeedbackPeriods</b> container shows the cumulative number of Negative Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[]
     */
    public function getNegativeFeedbackPeriods()
    {
        return $this->negativeFeedbackPeriods;
    }

    /**
     * Sets a new negativeFeedbackPeriods
     *
     * A <b>NegativeFeedbackPeriods</b> container shows the cumulative number of Negative Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $negativeFeedbackPeriods
     * @return self
     */
    public function setNegativeFeedbackPeriods(array $negativeFeedbackPeriods)
    {
        $this->negativeFeedbackPeriods = $negativeFeedbackPeriods;
        return $this;
    }

    /**
     * Adds as neutralFeedbackPeriods
     *
     * A <b>NeutralFeedbackPeriods</b> container shows the cumulative number of Neutral Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType $neutralFeedbackPeriods
     */
    public function addToNeutralFeedbackPeriods(\Nogrod\eBaySDK\Shopping\FeedbackPeriodType $neutralFeedbackPeriods)
    {
        $this->neutralFeedbackPeriods[] = $neutralFeedbackPeriods;
        return $this;
    }

    /**
     * isset neutralFeedbackPeriods
     *
     * A <b>NeutralFeedbackPeriods</b> container shows the cumulative number of Neutral Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNeutralFeedbackPeriods($index)
    {
        return isset($this->neutralFeedbackPeriods[$index]);
    }

    /**
     * unset neutralFeedbackPeriods
     *
     * A <b>NeutralFeedbackPeriods</b> container shows the cumulative number of Neutral Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNeutralFeedbackPeriods($index)
    {
        unset($this->neutralFeedbackPeriods[$index]);
    }

    /**
     * Gets as neutralFeedbackPeriods
     *
     * A <b>NeutralFeedbackPeriods</b> container shows the cumulative number of Neutral Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[]
     */
    public function getNeutralFeedbackPeriods()
    {
        return $this->neutralFeedbackPeriods;
    }

    /**
     * Sets a new neutralFeedbackPeriods
     *
     * A <b>NeutralFeedbackPeriods</b> container shows the cumulative number of Neutral Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $neutralFeedbackPeriods
     * @return self
     */
    public function setNeutralFeedbackPeriods(array $neutralFeedbackPeriods)
    {
        $this->neutralFeedbackPeriods = $neutralFeedbackPeriods;
        return $this;
    }

    /**
     * Adds as positiveFeedbackPeriods
     *
     * A <b>PositiveFeedbackPeriods</b> container shows the cumulative number of Positive Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType $positiveFeedbackPeriods
     */
    public function addToPositiveFeedbackPeriods(\Nogrod\eBaySDK\Shopping\FeedbackPeriodType $positiveFeedbackPeriods)
    {
        $this->positiveFeedbackPeriods[] = $positiveFeedbackPeriods;
        return $this;
    }

    /**
     * isset positiveFeedbackPeriods
     *
     * A <b>PositiveFeedbackPeriods</b> container shows the cumulative number of Positive Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPositiveFeedbackPeriods($index)
    {
        return isset($this->positiveFeedbackPeriods[$index]);
    }

    /**
     * unset positiveFeedbackPeriods
     *
     * A <b>PositiveFeedbackPeriods</b> container shows the cumulative number of Positive Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPositiveFeedbackPeriods($index)
    {
        unset($this->positiveFeedbackPeriods[$index]);
    }

    /**
     * Gets as positiveFeedbackPeriods
     *
     * A <b>PositiveFeedbackPeriods</b> container shows the cumulative number of Positive Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[]
     */
    public function getPositiveFeedbackPeriods()
    {
        return $this->positiveFeedbackPeriods;
    }

    /**
     * Sets a new positiveFeedbackPeriods
     *
     * A <b>PositiveFeedbackPeriods</b> container shows the cumulative number of Positive Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $positiveFeedbackPeriods
     * @return self
     */
    public function setPositiveFeedbackPeriods(array $positiveFeedbackPeriods)
    {
        $this->positiveFeedbackPeriods = $positiveFeedbackPeriods;
        return $this;
    }

    /**
     * Adds as totalFeedbackPeriods
     *
     * A <b>TotalFeedbackPeriods</b> container shows the cumulative number of all Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType $totalFeedbackPeriods
     */
    public function addToTotalFeedbackPeriods(\Nogrod\eBaySDK\Shopping\FeedbackPeriodType $totalFeedbackPeriods)
    {
        $this->totalFeedbackPeriods[] = $totalFeedbackPeriods;
        return $this;
    }

    /**
     * isset totalFeedbackPeriods
     *
     * A <b>TotalFeedbackPeriods</b> container shows the cumulative number of all Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalFeedbackPeriods($index)
    {
        return isset($this->totalFeedbackPeriods[$index]);
    }

    /**
     * unset totalFeedbackPeriods
     *
     * A <b>TotalFeedbackPeriods</b> container shows the cumulative number of all Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalFeedbackPeriods($index)
    {
        unset($this->totalFeedbackPeriods[$index]);
    }

    /**
     * Gets as totalFeedbackPeriods
     *
     * A <b>TotalFeedbackPeriods</b> container shows the cumulative number of all Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[]
     */
    public function getTotalFeedbackPeriods()
    {
        return $this->totalFeedbackPeriods;
    }

    /**
     * Sets a new totalFeedbackPeriods
     *
     * A <b>TotalFeedbackPeriods</b> container shows the cumulative number of all Feedback entries (shown in <b>Count</b> field) for the specified time period (shown in <b>PeriodInDays</b> field).
     *
     * @param \Nogrod\eBaySDK\Shopping\FeedbackPeriodType[] $totalFeedbackPeriods
     * @return self
     */
    public function setTotalFeedbackPeriods(array $totalFeedbackPeriods)
    {
        $this->totalFeedbackPeriods = $totalFeedbackPeriods;
        return $this;
    }

    /**
     * Gets as uniqueNegativeFeedbackCount
     *
     * This integer value indicates the total number of Negative Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay since eBay buyers cannot receive Negative feedback from their order partners.
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
     * This integer value indicates the total number of Negative Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay since eBay buyers cannot receive Negative feedback from their order partners.
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
     * This integer value indicates the total number of Positive Feedback entries that the specified eBay user has received (as a buyer or seller) from unique users, ever since the eBay user first registered on eBay.
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
     * This integer value indicates the total number of Positive Feedback entries that the specified eBay user has received (as a buyer or seller) from unique users, ever since the eBay user first registered on eBay.
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
     * Adds as averageRatingDetails
     *
     * Each returned <b>AverageRatingDetails</b> container shows the seller's current rating for the Detailed Seller Rating type (specified in the <b>RatingDetail</b> field), as well as the total count that this seller has been rated for this particular Detailed Seller Rating type.
     *  <br/><br/>
     *  This container is only returned if applicable. If the specified eBay user only buys on eBay, these containers will not get returned, and Detailed Seller Ratings are not available or applicable for all sellers.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\AverageRatingDetailsType $averageRatingDetails
     */
    public function addToAverageRatingDetails(\Nogrod\eBaySDK\Shopping\AverageRatingDetailsType $averageRatingDetails)
    {
        $this->averageRatingDetails[] = $averageRatingDetails;
        return $this;
    }

    /**
     * isset averageRatingDetails
     *
     * Each returned <b>AverageRatingDetails</b> container shows the seller's current rating for the Detailed Seller Rating type (specified in the <b>RatingDetail</b> field), as well as the total count that this seller has been rated for this particular Detailed Seller Rating type.
     *  <br/><br/>
     *  This container is only returned if applicable. If the specified eBay user only buys on eBay, these containers will not get returned, and Detailed Seller Ratings are not available or applicable for all sellers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAverageRatingDetails($index)
    {
        return isset($this->averageRatingDetails[$index]);
    }

    /**
     * unset averageRatingDetails
     *
     * Each returned <b>AverageRatingDetails</b> container shows the seller's current rating for the Detailed Seller Rating type (specified in the <b>RatingDetail</b> field), as well as the total count that this seller has been rated for this particular Detailed Seller Rating type.
     *  <br/><br/>
     *  This container is only returned if applicable. If the specified eBay user only buys on eBay, these containers will not get returned, and Detailed Seller Ratings are not available or applicable for all sellers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAverageRatingDetails($index)
    {
        unset($this->averageRatingDetails[$index]);
    }

    /**
     * Gets as averageRatingDetails
     *
     * Each returned <b>AverageRatingDetails</b> container shows the seller's current rating for the Detailed Seller Rating type (specified in the <b>RatingDetail</b> field), as well as the total count that this seller has been rated for this particular Detailed Seller Rating type.
     *  <br/><br/>
     *  This container is only returned if applicable. If the specified eBay user only buys on eBay, these containers will not get returned, and Detailed Seller Ratings are not available or applicable for all sellers.
     *
     * @return \Nogrod\eBaySDK\Shopping\AverageRatingDetailsType[]
     */
    public function getAverageRatingDetails()
    {
        return $this->averageRatingDetails;
    }

    /**
     * Sets a new averageRatingDetails
     *
     * Each returned <b>AverageRatingDetails</b> container shows the seller's current rating for the Detailed Seller Rating type (specified in the <b>RatingDetail</b> field), as well as the total count that this seller has been rated for this particular Detailed Seller Rating type.
     *  <br/><br/>
     *  This container is only returned if applicable. If the specified eBay user only buys on eBay, these containers will not get returned, and Detailed Seller Ratings are not available or applicable for all sellers.
     *
     * @param \Nogrod\eBaySDK\Shopping\AverageRatingDetailsType[] $averageRatingDetails
     * @return self
     */
    public function setAverageRatingDetails(array $averageRatingDetails)
    {
        $this->averageRatingDetails = $averageRatingDetails;
        return $this;
    }

    /**
     * Gets as neutralCommentCountFromSuspendedUsers
     *
     * Number of Neutral comments received from suspended users. This field is only returned if applicable.
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
     * Number of Neutral comments received from suspended users. This field is only returned if applicable.
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
     * Gets as uniqueNeutralFeedbackCount
     *
     * This integer value indicates the total number of Neutral Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay since eBay buyers cannot receive Neutral feedback from their order partners.
     *  This field is only returned if applicable.
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
     * This integer value indicates the total number of Neutral Feedback entries that a seller has received from unique buyers, ever since the eBay user first registered on eBay. This field is not applicable to users who only buy on eBay since eBay buyers cannot receive Neutral feedback from their order partners.
     *  This field is only returned if applicable.
     *
     * @param int $uniqueNeutralFeedbackCount
     * @return self
     */
    public function setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
    {
        $this->uniqueNeutralFeedbackCount = $uniqueNeutralFeedbackCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBidRetractionFeedbackPeriods();
        if (null !== $value && !empty($this->getBidRetractionFeedbackPeriods())) {
            $writer->write(array_map(function ($v) {return ["BidRetractionFeedbackPeriods" => $v];}, $value));
        }
        $value = $this->getNegativeFeedbackPeriods();
        if (null !== $value && !empty($this->getNegativeFeedbackPeriods())) {
            $writer->write(array_map(function ($v) {return ["NegativeFeedbackPeriods" => $v];}, $value));
        }
        $value = $this->getNeutralFeedbackPeriods();
        if (null !== $value && !empty($this->getNeutralFeedbackPeriods())) {
            $writer->write(array_map(function ($v) {return ["NeutralFeedbackPeriods" => $v];}, $value));
        }
        $value = $this->getPositiveFeedbackPeriods();
        if (null !== $value && !empty($this->getPositiveFeedbackPeriods())) {
            $writer->write(array_map(function ($v) {return ["PositiveFeedbackPeriods" => $v];}, $value));
        }
        $value = $this->getTotalFeedbackPeriods();
        if (null !== $value && !empty($this->getTotalFeedbackPeriods())) {
            $writer->write(array_map(function ($v) {return ["TotalFeedbackPeriods" => $v];}, $value));
        }
        $value = $this->getUniqueNegativeFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueNegativeFeedbackCount", $value);
        }
        $value = $this->getUniquePositiveFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniquePositiveFeedbackCount", $value);
        }
        $value = $this->getAverageRatingDetails();
        if (null !== $value && !empty($this->getAverageRatingDetails())) {
            $writer->write(array_map(function ($v) {return ["AverageRatingDetails" => $v];}, $value));
        }
        $value = $this->getNeutralCommentCountFromSuspendedUsers();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NeutralCommentCountFromSuspendedUsers", $value);
        }
        $value = $this->getUniqueNeutralFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueNeutralFeedbackCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidRetractionFeedbackPeriods');
        if (null !== $value) {
            $this->setBidRetractionFeedbackPeriods(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NegativeFeedbackPeriods');
        if (null !== $value) {
            $this->setNegativeFeedbackPeriods(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NeutralFeedbackPeriods');
        if (null !== $value) {
            $this->setNeutralFeedbackPeriods(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPeriods');
        if (null !== $value) {
            $this->setPositiveFeedbackPeriods(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalFeedbackPeriods');
        if (null !== $value) {
            $this->setTotalFeedbackPeriods(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\FeedbackPeriodType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueNegativeFeedbackCount');
        if (null !== $value) {
            $this->setUniqueNegativeFeedbackCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniquePositiveFeedbackCount');
        if (null !== $value) {
            $this->setUniquePositiveFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageRatingDetails');
        if (null !== $value) {
            $this->setAverageRatingDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\AverageRatingDetailsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}NeutralCommentCountFromSuspendedUsers');
        if (null !== $value) {
            $this->setNeutralCommentCountFromSuspendedUsers($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueNeutralFeedbackCount');
        if (null !== $value) {
            $this->setUniqueNeutralFeedbackCount($value);
        }
    }
}
