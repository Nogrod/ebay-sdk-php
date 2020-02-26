<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FindReviewsAndGuidesRequestType
 *
 * <span class="tablenote"><b>Note: </b> The <b>FindReviewsAndGuides</b> call is deprecated.
 *  </span>
 * XSD Type: FindReviewsAndGuidesRequestType
 */
class FindReviewsAndGuidesRequestType extends AbstractRequestType
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     */
    private $productID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $maxResultsPerPage
     */
    private $maxResultsPerPage = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $reviewSort
     */
    private $reviewSort = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $sortOrder
     */
    private $sortOrder = null;

    /**
     * Gets as productID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
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
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
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
     * Gets as userID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as maxResultsPerPage
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return int
     */
    public function getMaxResultsPerPage()
    {
        return $this->maxResultsPerPage;
    }

    /**
     * Sets a new maxResultsPerPage
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int $maxResultsPerPage
     * @return self
     */
    public function setMaxResultsPerPage($maxResultsPerPage)
    {
        $this->maxResultsPerPage = $maxResultsPerPage;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
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
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
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
     * Gets as reviewSort
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return string
     */
    public function getReviewSort()
    {
        return $this->reviewSort;
    }

    /**
     * Sets a new reviewSort
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param string $reviewSort
     * @return self
     */
    public function setReviewSort($reviewSort)
    {
        $this->reviewSort = $reviewSort;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * <span class="tablenote"><b>Note: </b> <b>FindReviewsAndGuidesRequestType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getMaxResultsPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxResultsPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getReviewSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewSort", $value);
        }
        $value = $this->getSortOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SortOrder", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxResultsPerPage');
        if (null !== $value) {
            $this->setMaxResultsPerPage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewSort');
        if (null !== $value) {
            $this->setReviewSort($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortOrder');
        if (null !== $value) {
            $this->setSortOrder($value);
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
