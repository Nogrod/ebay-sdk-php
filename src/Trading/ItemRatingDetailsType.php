<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemRatingDetailsType
 *
 * Applicable to sites that support the Detailed Seller Ratings feature.
 *  The <b>ItemRatingDetailsType</b> contains detailed seller ratings for an order line item in one area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * XSD Type: ItemRatingDetailsType
 */
class ItemRatingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The area of a specific detailed seller rating for an order line item.
     *  When buyers leave an overall Feedback rating (positive, neutral, or negative)
     *  for a seller, they also can leave ratings in four areas: item as described,
     *  communication, shipping time, and charges for shipping and handling.
     *
     * @var string $ratingDetail
     */
    private $ratingDetail = null;

    /**
     * A detailed seller rating for an order line item applied to the area
     *  in the corresponding RatingDetail field. Valid input values are
     *  numerical integers 1 though 5.
     *
     * @var int $rating
     */
    private $rating = null;

    /**
     * Gets as ratingDetail
     *
     * The area of a specific detailed seller rating for an order line item.
     *  When buyers leave an overall Feedback rating (positive, neutral, or negative)
     *  for a seller, they also can leave ratings in four areas: item as described,
     *  communication, shipping time, and charges for shipping and handling.
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
     * The area of a specific detailed seller rating for an order line item.
     *  When buyers leave an overall Feedback rating (positive, neutral, or negative)
     *  for a seller, they also can leave ratings in four areas: item as described,
     *  communication, shipping time, and charges for shipping and handling.
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
     * A detailed seller rating for an order line item applied to the area
     *  in the corresponding RatingDetail field. Valid input values are
     *  numerical integers 1 though 5.
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * A detailed seller rating for an order line item applied to the area
     *  in the corresponding RatingDetail field. Valid input values are
     *  numerical integers 1 though 5.
     *
     * @param int $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRatingDetail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RatingDetail", $value);
        }
        $value = $this->getRating();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Rating", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RatingDetail');
        if (null !== $value) {
            $this->setRatingDetail($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Rating');
        if (null !== $value) {
            $this->setRating($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
