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
        if (!is_array($this->averageRatingDetails)) {
            throw new \LogicException('averageRatingDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AverageRatingDetailsType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\AverageRatingDetailsType> $averageRatingDetails
     * @return self
     */
    public function setAverageRatingDetails(iterable $averageRatingDetails)
    {
        $this->averageRatingDetails = $averageRatingDetails;
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
        $value = $this->feedbackSummaryPeriod;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FeedbackSummaryPeriod', null, (string) $value);
        }
        $value = $this->averageRatingDetails;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AverageRatingDetails', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AverageRatingSummaryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->averageRatingDetails = [];
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
                case 'FeedbackSummaryPeriod':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feedbackSummaryPeriod = $value;
                    }
                    return true;
                case 'AverageRatingDetails':
                    $this->averageRatingDetails[] = \Nogrod\eBaySDK\Trading\AverageRatingDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
