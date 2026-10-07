<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AverageRatingDetailsType
 *
 * Applicable to sites that support the Detailed Seller Rating (DSR) feature.
 *  The <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * XSD Type: AverageRatingDetailsType
 */
class AverageRatingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The value shown in this field indicates the Detailed Seller Rating area. The corresponding <b>Rating</b> value is the average rating that the seller has received for this DSR area, and the <b>RatingCount</b> value is the total number of buyer ratings that the seller has received in this DSR area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     *
     * @var string $ratingDetail
     */
    private $ratingDetail = null;

    /**
     * This value is the seller's average rating (given by buyers) for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     *
     * @var float $rating
     */
    private $rating = null;

    /**
     * This value is the total count of buyer ratings given for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     *
     * @var int $ratingCount
     */
    private $ratingCount = null;

    /**
     * Gets as ratingDetail
     *
     * The value shown in this field indicates the Detailed Seller Rating area. The corresponding <b>Rating</b> value is the average rating that the seller has received for this DSR area, and the <b>RatingCount</b> value is the total number of buyer ratings that the seller has received in this DSR area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     *
     * @return string
     */
    public function getRatingDetail()
    {
        return $this->ratingDetail;
    }

    /**
     * Sets a new ratingDetail
     *
     * The value shown in this field indicates the Detailed Seller Rating area. The corresponding <b>Rating</b> value is the average rating that the seller has received for this DSR area, and the <b>RatingCount</b> value is the total number of buyer ratings that the seller has received in this DSR area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     *
     * @param string $ratingDetail
     * @return self
     */
    public function setRatingDetail($ratingDetail)
    {
        $this->ratingDetail = $ratingDetail;
        return $this;
    }

    /**
     * Gets as rating
     *
     * This value is the seller's average rating (given by buyers) for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     *
     * @return float
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * This value is the seller's average rating (given by buyers) for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     *
     * @param float $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Gets as ratingCount
     *
     * This value is the total count of buyer ratings given for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     *
     * @return int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * Sets a new ratingCount
     *
     * This value is the total count of buyer ratings given for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     *
     * @param int $ratingCount
     * @return self
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
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
        $value = $this->ratingDetail;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RatingDetail', null, (string) $value);
        }
        $value = $this->rating;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Rating', null, (string) $value);
        }
        $value = $this->ratingCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RatingCount', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AverageRatingDetailsType
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
                case 'RatingDetail':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->ratingDetail = $value;
                    }
                    return true;
                case 'Rating':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->rating = (float) $value;
                    }
                    return true;
                case 'RatingCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->ratingCount = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
