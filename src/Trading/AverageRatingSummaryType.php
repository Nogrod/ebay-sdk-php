<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AverageRatingSummaryType
 *
 * This type is used by the <b>AverageRatingSummary</b> container that is returned in the <b>GetFeedback</b> call to display the seller's rating information across the four different Detail Seller Rating areas. The Detail Seller Rating subject areas include Item as Described, Communication, Shipping Time, and Shipping and Handling charges.
 * XSD Type: AverageRatingSummaryType
 */
class AverageRatingSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This enumeration value will indicate whether the statistics in each AverageRatingDetails container is for the last year (<code>FiftyTwoWeeks</code>) or the last month (<code>ThirtyDays</code>).
     *
     * @var string $feedbackSummaryPeriod
     */
    private $feedbackSummaryPeriod = null;

    /**
     * Applicable to sites that support the Detailed Seller Ratings feature.
     *  Each <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     *
     * @var \Nogrod\eBaySDK\Trading\AverageRatingDetailsType[] $averageRatingDetails
     */
    private $averageRatingDetails = [

    ];

    /**
     * Gets as feedbackSummaryPeriod
     *
     * This enumeration value will indicate whether the statistics in each AverageRatingDetails container is for the last year (<code>FiftyTwoWeeks</code>) or the last month (<code>ThirtyDays</code>).
     *
     * @return string
     */
    public function getFeedbackSummaryPeriod()
    {
        return $this->feedbackSummaryPeriod;
    }

    /**
     * Sets a new feedbackSummaryPeriod
     *
     * This enumeration value will indicate whether the statistics in each AverageRatingDetails container is for the last year (<code>FiftyTwoWeeks</code>) or the last month (<code>ThirtyDays</code>).
     *
     * @param string $feedbackSummaryPeriod
     * @return self
     */
    public function setFeedbackSummaryPeriod($feedbackSummaryPeriod)
    {
        $this->feedbackSummaryPeriod = $feedbackSummaryPeriod;
        return $this;
    }

    /**
     * Adds as averageRatingDetails
     *
     * Applicable to sites that support the Detailed Seller Ratings feature.
     *  Each <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AverageRatingDetailsType $averageRatingDetails
     */
    public function addToAverageRatingDetails(\Nogrod\eBaySDK\Trading\AverageRatingDetailsType $averageRatingDetails)
    {
        $this->averageRatingDetails[] = $averageRatingDetails;
        return $this;
    }

    /**
     * isset averageRatingDetails
     *
     * Applicable to sites that support the Detailed Seller Ratings feature.
     *  Each <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
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
     * Applicable to sites that support the Detailed Seller Ratings feature.
     *  Each <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
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
     * Applicable to sites that support the Detailed Seller Ratings feature.
     *  Each <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     *
     * @return \Nogrod\eBaySDK\Trading\AverageRatingDetailsType[]
     */
    public function getAverageRatingDetails()
    {
        return $this->averageRatingDetails;
    }

    /**
     * Sets a new averageRatingDetails
     *
     * Applicable to sites that support the Detailed Seller Ratings feature.
     *  Each <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     *
     * @param \Nogrod\eBaySDK\Trading\AverageRatingDetailsType[] $averageRatingDetails
     * @return self
     */
    public function setAverageRatingDetails(array $averageRatingDetails)
    {
        $this->averageRatingDetails = $averageRatingDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFeedbackSummaryPeriod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackSummaryPeriod", $value);
        }
        $value = $this->getAverageRatingDetails();
        if (null !== $value && !empty($this->getAverageRatingDetails())) {
            $writer->write(array_map(function ($v) {
                return ["AverageRatingDetails" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackSummaryPeriod');
        if (null !== $value) {
            $this->setFeedbackSummaryPeriod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageRatingDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setAverageRatingDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AverageRatingDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
