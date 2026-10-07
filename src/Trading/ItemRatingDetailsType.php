<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemRatingDetailsType
 *
 * Applicable to sites that support the Detailed Seller Ratings feature.
 *  The <b>ItemRatingDetailsType</b> contains detailed seller ratings for an order line item in one area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * XSD Type: ItemRatingDetailsType
 */
class ItemRatingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ItemRatingDetailsType
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
                        $this->rating = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['RatingDetail'] = $this->ratingDetail;
        $data['Rating'] = $this->rating;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
