<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviewDetailsType
 *
 * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
 *  </span>
 * XSD Type: ReviewDetailsType
 */
class ReviewDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var float $averageRating
     */
    private $averageRating = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ReviewType[] $review
     */
    private $review = [
        
    ];

    /**
     * Gets as averageRating
     *
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\ReviewType $review
     */
    public function addToReview(\Nogrod\eBaySDK\Shopping\ReviewType $review)
    {
        $this->review[] = $review;
        return $this;
    }

    /**
     * isset review
     *
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ReviewType[]
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Sets a new review
     *
     * <span class="tablenote"><b>Note: </b> <b>ReviewDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ReviewType[] $review
     * @return self
     */
    public function setReview(array $review)
    {
        $this->review = $review;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
                return \Nogrod\eBaySDK\Shopping\ReviewType::fromKeyValue($v);
            }, $value));
        }
    }
}
