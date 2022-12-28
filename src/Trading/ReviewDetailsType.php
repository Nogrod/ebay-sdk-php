<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviewDetailsType
 *
 * This type is deprecated.
 * XSD Type: ReviewDetailsType
 */
class ReviewDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var float $averageRating
     */
    private $averageRating = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ReviewType[] $review
     */
    private $review = [

    ];

    /**
     * Gets as averageRating
     *
     * This field is deprecated.
     *
     * @return float
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * Sets a new averageRating
     *
     * This field is deprecated.
     *
     * @param float $averageRating
     * @return self
     */
    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
        return $this;
    }

    /**
     * Adds as review
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviewType $review
     */
    public function addToReview(\Nogrod\eBaySDK\Trading\ReviewType $review)
    {
        $this->review[] = $review;
        return $this;
    }

    /**
     * isset review
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReview($index)
    {
        return isset($this->review[$index]);
    }

    /**
     * unset review
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReview($index)
    {
        unset($this->review[$index]);
    }

    /**
     * Gets as review
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ReviewType[]
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Sets a new review
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ReviewType[] $review
     * @return self
     */
    public function setReview(array $review)
    {
        $this->review = $review;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAverageRating();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AverageRating", $value);
        }
        $value = $this->getReview();
        if (null !== $value && !empty($this->getReview())) {
            $writer->write(array_map(function ($v) {
                return ["Review" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageRating');
        if (null !== $value) {
            $this->setAverageRating($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Review', true);
        if (null !== $value && !empty($value)) {
            $this->setReview(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ReviewType::fromKeyValue($v);
            }, $value));
        }
    }
}
