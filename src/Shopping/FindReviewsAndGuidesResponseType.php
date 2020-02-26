<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FindReviewsAndGuidesResponseType
 *
 * <span class="tablenote"><b>Note: </b> The <b>FindReviewsAndGuides</b> call is deprecated.
 *  </span>
 * XSD Type: FindReviewsAndGuidesResponseType
 */
class FindReviewsAndGuidesResponseType extends AbstractResponseType
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $reviewCount
     */
    private $reviewCount = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $buyingGuideCount
     */
    private $buyingGuideCount = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $reviewerRank
     */
    private $reviewerRank = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $totalHelpfulnessVotes
     */
    private $totalHelpfulnessVotes = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     */
    private $productID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $reviewsAndGuidesURL
     */
    private $reviewsAndGuidesURL = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $totalPages
     */
    private $totalPages = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\BuyingGuideDetailsType $buyingGuideDetails
     */
    private $buyingGuideDetails = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ReviewDetailsType $reviewDetails
     */
    private $reviewDetails = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $positiveHelpfulnessVotes
     */
    private $positiveHelpfulnessVotes = null;

    /**
     * Gets as reviewCount
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return int
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * Sets a new reviewCount
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int $reviewCount
     * @return self
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }

    /**
     * Gets as buyingGuideCount
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return int
     */
    public function getBuyingGuideCount()
    {
        return $this->buyingGuideCount;
    }

    /**
     * Sets a new buyingGuideCount
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int $buyingGuideCount
     * @return self
     */
    public function setBuyingGuideCount($buyingGuideCount)
    {
        $this->buyingGuideCount = $buyingGuideCount;
        return $this;
    }

    /**
     * Gets as reviewerRank
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return int
     */
    public function getReviewerRank()
    {
        return $this->reviewerRank;
    }

    /**
     * Sets a new reviewerRank
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int $reviewerRank
     * @return self
     */
    public function setReviewerRank($reviewerRank)
    {
        $this->reviewerRank = $reviewerRank;
        return $this;
    }

    /**
     * Gets as totalHelpfulnessVotes
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return int
     */
    public function getTotalHelpfulnessVotes()
    {
        return $this->totalHelpfulnessVotes;
    }

    /**
     * Sets a new totalHelpfulnessVotes
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int $totalHelpfulnessVotes
     * @return self
     */
    public function setTotalHelpfulnessVotes($totalHelpfulnessVotes)
    {
        $this->totalHelpfulnessVotes = $totalHelpfulnessVotes;
        return $this;
    }

    /**
     * Gets as productID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ProductIDType
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     * @return self
     */
    public function setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType $productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as reviewsAndGuidesURL
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return string
     */
    public function getReviewsAndGuidesURL()
    {
        return $this->reviewsAndGuidesURL;
    }

    /**
     * Sets a new reviewsAndGuidesURL
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param string $reviewsAndGuidesURL
     * @return self
     */
    public function setReviewsAndGuidesURL($reviewsAndGuidesURL)
    {
        $this->reviewsAndGuidesURL = $reviewsAndGuidesURL;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Sets a new pageNumber
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * Gets as totalPages
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * Sets a new totalPages
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int $totalPages
     * @return self
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * Gets as buyingGuideDetails
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\BuyingGuideDetailsType
     */
    public function getBuyingGuideDetails()
    {
        return $this->buyingGuideDetails;
    }

    /**
     * Sets a new buyingGuideDetails
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\BuyingGuideDetailsType $buyingGuideDetails
     * @return self
     */
    public function setBuyingGuideDetails(\Nogrod\eBaySDK\Shopping\BuyingGuideDetailsType $buyingGuideDetails)
    {
        $this->buyingGuideDetails = $buyingGuideDetails;
        return $this;
    }

    /**
     * Gets as reviewDetails
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ReviewDetailsType
     */
    public function getReviewDetails()
    {
        return $this->reviewDetails;
    }

    /**
     * Sets a new reviewDetails
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ReviewDetailsType $reviewDetails
     * @return self
     */
    public function setReviewDetails(\Nogrod\eBaySDK\Shopping\ReviewDetailsType $reviewDetails)
    {
        $this->reviewDetails = $reviewDetails;
        return $this;
    }

    /**
     * Gets as positiveHelpfulnessVotes
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return int
     */
    public function getPositiveHelpfulnessVotes()
    {
        return $this->positiveHelpfulnessVotes;
    }

    /**
     * Sets a new positiveHelpfulnessVotes
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesResponseType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int $positiveHelpfulnessVotes
     * @return self
     */
    public function setPositiveHelpfulnessVotes($positiveHelpfulnessVotes)
    {
        $this->positiveHelpfulnessVotes = $positiveHelpfulnessVotes;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getReviewCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewCount", $value);
        }
        $value = $this->getBuyingGuideCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyingGuideCount", $value);
        }
        $value = $this->getReviewerRank();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewerRank", $value);
        }
        $value = $this->getTotalHelpfulnessVotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalHelpfulnessVotes", $value);
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getReviewsAndGuidesURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewsAndGuidesURL", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getTotalPages();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalPages", $value);
        }
        $value = $this->getBuyingGuideDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyingGuideDetails", $value);
        }
        $value = $this->getReviewDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewDetails", $value);
        }
        $value = $this->getPositiveHelpfulnessVotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PositiveHelpfulnessVotes", $value);
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewCount');
        if (null !== $value) {
            $this->setReviewCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingGuideCount');
        if (null !== $value) {
            $this->setBuyingGuideCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewerRank');
        if (null !== $value) {
            $this->setReviewerRank($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalHelpfulnessVotes');
        if (null !== $value) {
            $this->setTotalHelpfulnessVotes($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewsAndGuidesURL');
        if (null !== $value) {
            $this->setReviewsAndGuidesURL($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalPages');
        if (null !== $value) {
            $this->setTotalPages($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingGuideDetails');
        if (null !== $value) {
            $this->setBuyingGuideDetails(\Nogrod\eBaySDK\Shopping\BuyingGuideDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewDetails');
        if (null !== $value) {
            $this->setReviewDetails(\Nogrod\eBaySDK\Shopping\ReviewDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PositiveHelpfulnessVotes');
        if (null !== $value) {
            $this->setPositiveHelpfulnessVotes($value);
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
