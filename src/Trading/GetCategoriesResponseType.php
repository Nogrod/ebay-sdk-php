<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategoriesResponseType
 *
 * Contains the category data for the eBay site specified as input. The category
 *  data is contained in a CategoryArrayType object, within which are zero, one, or
 *  multiple CategoryType objects. Each CategoryType object contains the detail data
 *  for one category. Other fields tell how many categories are returned in a call,
 *  when the category hierarchy was last updated, and the version of the category
 *  hierarchy (all three of which can differ from one eBay site to the next).
 * XSD Type: GetCategoriesResponseType
 */
class GetCategoriesResponseType extends AbstractResponseType
{

    /**
     * List of the returned categories. The category array contains one CategoryType
     *  object for each returned category. Returns empty if no detail level is specified.
     *
     * @var \Nogrod\eBaySDK\Trading\CategoryType[] $categoryArray
     */
    private $categoryArray = null;

    /**
     * Indicates the number of categories returned (i.e., the number of CategoryType
     *  objects in CategoryArray).
     *
     * @var int $categoryCount
     */
    private $categoryCount = null;

    /**
     * Indicates the last date and time that eBay modified the category hierarchy for the
     *  specified eBay site.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Indicates the version of the category hierarchy on the
     *  specified eBay site.
     *
     * @var string $categoryVersion
     */
    private $categoryVersion = null;

    /**
     * If true, <b>ReservePriceAllowed</b> indicates that all categories on the
     *  site allow the seller to specify a reserve price for an item.
     *  If false, this field is not returned in the response and all categories on the site do not normally allow sellers to specify reserve prices.
     *  The Category.ORPA (override reserve price allowed) field can override (or toggle)
     *  the reserve price allowed setting for a given category.
     *  For example, if <b>ReservePriceAllowed</b> is false and Category.ORPA is true,
     *  the category overrides the site setting and supports reserve prices.
     *  If <b>ReservePriceAllowed</b> is true and Category.ORPA is true, the category
     *  overrides the site setting and does does not support reserve prices.
     *
     * @var bool $reservePriceAllowed
     */
    private $reservePriceAllowed = null;

    /**
     * Indicates the lowest possible reserve price allowed for any item
     *  listed in any category on the site. You can use the fields returned by <b>GetCategoryFeatures</b> to determine if a different Minimum Reserve Price is defined for the category you want to use.
     *
     * @var float $minimumReservePrice
     */
    private $minimumReservePrice = null;

    /**
     * If true, <b>ReduceReserveAllowed</b> indicates that all categories on the
     *  site allow the seller to reduce an item's reserve price.
     *  If false, this field is not returned in the response and all categories on the site do not normally allow sellers to reduce an
     *  item's reserve price.
     *  The Category.ORRA (override reduce reserve price) field can override (or toggle)
     *  the reserve price reduction setting for a given category.
     *  For example, if <b>ReduceReserveAllowed</b> is false and Category.ORRA is true,
     *  the category overrides the site setting and supports reducing reserve prices.
     *  If <b>ReduceReserveAllowed</b> is true and Category.ORRA is true, the category
     *  overrides the site setting and does does not support reducing reserve prices.
     *
     * @var bool $reduceReserveAllowed
     */
    private $reduceReserveAllowed = null;

    /**
     * Adds as category
     *
     * List of the returned categories. The category array contains one CategoryType
     *  object for each returned category. Returns empty if no detail level is specified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CategoryType $category
     */
    public function addToCategoryArray(\Nogrod\eBaySDK\Trading\CategoryType $category)
    {
        $this->categoryArray[] = $category;
        return $this;
    }

    /**
     * isset categoryArray
     *
     * List of the returned categories. The category array contains one CategoryType
     *  object for each returned category. Returns empty if no detail level is specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryArray($index)
    {
        return isset($this->categoryArray[$index]);
    }

    /**
     * unset categoryArray
     *
     * List of the returned categories. The category array contains one CategoryType
     *  object for each returned category. Returns empty if no detail level is specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryArray($index)
    {
        unset($this->categoryArray[$index]);
    }

    /**
     * Gets as categoryArray
     *
     * List of the returned categories. The category array contains one CategoryType
     *  object for each returned category. Returns empty if no detail level is specified.
     *
     * @return \Nogrod\eBaySDK\Trading\CategoryType[]
     */
    public function getCategoryArray()
    {
        return $this->categoryArray;
    }

    /**
     * Sets a new categoryArray
     *
     * List of the returned categories. The category array contains one CategoryType
     *  object for each returned category. Returns empty if no detail level is specified.
     *
     * @param \Nogrod\eBaySDK\Trading\CategoryType[] $categoryArray
     * @return self
     */
    public function setCategoryArray(array $categoryArray)
    {
        $this->categoryArray = $categoryArray;
        return $this;
    }

    /**
     * Gets as categoryCount
     *
     * Indicates the number of categories returned (i.e., the number of CategoryType
     *  objects in CategoryArray).
     *
     * @return int
     */
    public function getCategoryCount()
    {
        return $this->categoryCount;
    }

    /**
     * Sets a new categoryCount
     *
     * Indicates the number of categories returned (i.e., the number of CategoryType
     *  objects in CategoryArray).
     *
     * @param int $categoryCount
     * @return self
     */
    public function setCategoryCount($categoryCount)
    {
        $this->categoryCount = $categoryCount;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Indicates the last date and time that eBay modified the category hierarchy for the
     *  specified eBay site.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Indicates the last date and time that eBay modified the category hierarchy for the
     *  specified eBay site.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * Gets as categoryVersion
     *
     * Indicates the version of the category hierarchy on the
     *  specified eBay site.
     *
     * @return string
     */
    public function getCategoryVersion()
    {
        return $this->categoryVersion;
    }

    /**
     * Sets a new categoryVersion
     *
     * Indicates the version of the category hierarchy on the
     *  specified eBay site.
     *
     * @param string $categoryVersion
     * @return self
     */
    public function setCategoryVersion($categoryVersion)
    {
        $this->categoryVersion = $categoryVersion;
        return $this;
    }

    /**
     * Gets as reservePriceAllowed
     *
     * If true, <b>ReservePriceAllowed</b> indicates that all categories on the
     *  site allow the seller to specify a reserve price for an item.
     *  If false, this field is not returned in the response and all categories on the site do not normally allow sellers to specify reserve prices.
     *  The Category.ORPA (override reserve price allowed) field can override (or toggle)
     *  the reserve price allowed setting for a given category.
     *  For example, if <b>ReservePriceAllowed</b> is false and Category.ORPA is true,
     *  the category overrides the site setting and supports reserve prices.
     *  If <b>ReservePriceAllowed</b> is true and Category.ORPA is true, the category
     *  overrides the site setting and does does not support reserve prices.
     *
     * @return bool
     */
    public function getReservePriceAllowed()
    {
        return $this->reservePriceAllowed;
    }

    /**
     * Sets a new reservePriceAllowed
     *
     * If true, <b>ReservePriceAllowed</b> indicates that all categories on the
     *  site allow the seller to specify a reserve price for an item.
     *  If false, this field is not returned in the response and all categories on the site do not normally allow sellers to specify reserve prices.
     *  The Category.ORPA (override reserve price allowed) field can override (or toggle)
     *  the reserve price allowed setting for a given category.
     *  For example, if <b>ReservePriceAllowed</b> is false and Category.ORPA is true,
     *  the category overrides the site setting and supports reserve prices.
     *  If <b>ReservePriceAllowed</b> is true and Category.ORPA is true, the category
     *  overrides the site setting and does does not support reserve prices.
     *
     * @param bool $reservePriceAllowed
     * @return self
     */
    public function setReservePriceAllowed($reservePriceAllowed)
    {
        $this->reservePriceAllowed = $reservePriceAllowed;
        return $this;
    }

    /**
     * Gets as minimumReservePrice
     *
     * Indicates the lowest possible reserve price allowed for any item
     *  listed in any category on the site. You can use the fields returned by <b>GetCategoryFeatures</b> to determine if a different Minimum Reserve Price is defined for the category you want to use.
     *
     * @return float
     */
    public function getMinimumReservePrice()
    {
        return $this->minimumReservePrice;
    }

    /**
     * Sets a new minimumReservePrice
     *
     * Indicates the lowest possible reserve price allowed for any item
     *  listed in any category on the site. You can use the fields returned by <b>GetCategoryFeatures</b> to determine if a different Minimum Reserve Price is defined for the category you want to use.
     *
     * @param float $minimumReservePrice
     * @return self
     */
    public function setMinimumReservePrice($minimumReservePrice)
    {
        $this->minimumReservePrice = $minimumReservePrice;
        return $this;
    }

    /**
     * Gets as reduceReserveAllowed
     *
     * If true, <b>ReduceReserveAllowed</b> indicates that all categories on the
     *  site allow the seller to reduce an item's reserve price.
     *  If false, this field is not returned in the response and all categories on the site do not normally allow sellers to reduce an
     *  item's reserve price.
     *  The Category.ORRA (override reduce reserve price) field can override (or toggle)
     *  the reserve price reduction setting for a given category.
     *  For example, if <b>ReduceReserveAllowed</b> is false and Category.ORRA is true,
     *  the category overrides the site setting and supports reducing reserve prices.
     *  If <b>ReduceReserveAllowed</b> is true and Category.ORRA is true, the category
     *  overrides the site setting and does does not support reducing reserve prices.
     *
     * @return bool
     */
    public function getReduceReserveAllowed()
    {
        return $this->reduceReserveAllowed;
    }

    /**
     * Sets a new reduceReserveAllowed
     *
     * If true, <b>ReduceReserveAllowed</b> indicates that all categories on the
     *  site allow the seller to reduce an item's reserve price.
     *  If false, this field is not returned in the response and all categories on the site do not normally allow sellers to reduce an
     *  item's reserve price.
     *  The Category.ORRA (override reduce reserve price) field can override (or toggle)
     *  the reserve price reduction setting for a given category.
     *  For example, if <b>ReduceReserveAllowed</b> is false and Category.ORRA is true,
     *  the category overrides the site setting and supports reducing reserve prices.
     *  If <b>ReduceReserveAllowed</b> is true and Category.ORRA is true, the category
     *  overrides the site setting and does does not support reducing reserve prices.
     *
     * @param bool $reduceReserveAllowed
     * @return self
     */
    public function setReduceReserveAllowed($reduceReserveAllowed)
    {
        $this->reduceReserveAllowed = $reduceReserveAllowed;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryArray();
        if (null !== $value && !empty($this->getCategoryArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryArray", array_map(function ($v) {
                return ["Category" => $v];
            }, $value));
        }
        $value = $this->getCategoryCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryCount", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
        }
        $value = $this->getCategoryVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryVersion", $value);
        }
        $value = $this->getReservePriceAllowed();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReservePriceAllowed", $value);
        }
        $value = $this->getMinimumReservePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumReservePrice", $value);
        }
        $value = $this->getReduceReserveAllowed();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReduceReserveAllowed", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryArray', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CategoryType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryCount');
        if (null !== $value) {
            $this->setCategoryCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryVersion');
        if (null !== $value) {
            $this->setCategoryVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReservePriceAllowed');
        if (null !== $value) {
            $this->setReservePriceAllowed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumReservePrice');
        if (null !== $value) {
            $this->setMinimumReservePrice($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReduceReserveAllowed');
        if (null !== $value) {
            $this->setReduceReserveAllowed($value);
        }
    }
}
