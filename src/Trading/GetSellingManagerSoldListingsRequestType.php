<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellingManagerSoldListingsRequestType
 *
 * Returns a Selling Manager user's sold listings.
 *  <br><br>
 *  This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: GetSellingManagerSoldListingsRequestType
 */
class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{

    /**
     * This container is used if the seller would like to search for Selling Manager Sele Records based on certain identifiers like Saler Record ID, Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported search types in <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerSearchType $search
     */
    private $search = null;

    /**
     * This field is used if the seller would like to retrieve all Selling Manager Sale Records for products listed in a specific eBay Store Category.
     *
     * @var int $storeCategoryID
     */
    private $storeCategoryID = null;

    /**
     * One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     *
     * @var string[] $filter
     */
    private $filter = [
        
    ];

    /**
     * This field is included and set to <code>true</code> if the seller would like to retrieve one or more archived orders between 90 and 120 days old.
     *
     * @var bool $archived
     */
    private $archived = null;

    /**
     * This field is used if the seller would like to sort Selling Manager Sale Record results based on a specific aspect such as purchase date, checkout status, total price, etc. See <b>SellingManagerSoldListingsSortTypeCodeType</b> to read more about the available sorting options.
     *
     * @var string $sort
     */
    private $sort = null;

    /**
     * This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
     *
     * @var string $sortOrder
     */
    private $sortOrder = null;

    /**
     * This container is used if the seller would like to control how many Sale Records are returned per page and which page to view.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * This container allows the seller to retrieve orders that were purchased within a specified time range. A time range can be set up to 90 days in the past (or up to 120 days if the <b>Archived</b> field is included and set to <code>true</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\TimeRangeType $saleDateRange
     */
    private $saleDateRange = null;

    /**
     * Gets as search
     *
     * This container is used if the seller would like to search for Selling Manager Sele Records based on certain identifiers like Saler Record ID, Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported search types in <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerSearchType
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Sets a new search
     *
     * This container is used if the seller would like to search for Selling Manager Sele Records based on certain identifiers like Saler Record ID, Item ID, listing title, buyer user ID, etc. The seller will specify one of the supported search types in <b>SellingManagerSearchTypeCodeType</b>, and then provides the value for that search type.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerSearchType $search
     * @return self
     */
    public function setSearch(\Nogrod\eBaySDK\Trading\SellingManagerSearchType $search)
    {
        $this->search = $search;
        return $this;
    }

    /**
     * Gets as storeCategoryID
     *
     * This field is used if the seller would like to retrieve all Selling Manager Sale Records for products listed in a specific eBay Store Category.
     *
     * @return int
     */
    public function getStoreCategoryID()
    {
        return $this->storeCategoryID;
    }

    /**
     * Sets a new storeCategoryID
     *
     * This field is used if the seller would like to retrieve all Selling Manager Sale Records for products listed in a specific eBay Store Category.
     *
     * @param int $storeCategoryID
     * @return self
     */
    public function setStoreCategoryID($storeCategoryID)
    {
        $this->storeCategoryID = $storeCategoryID;
        return $this;
    }

    /**
     * Adds as filter
     *
     * One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     *
     * @return self
     * @param string $filter
     */
    public function addToFilter($filter)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * isset filter
     *
     * One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFilter($index)
    {
        return isset($this->filter[$index]);
    }

    /**
     * unset filter
     *
     * One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFilter($index)
    {
        unset($this->filter[$index]);
    }

    /**
     * Gets as filter
     *
     * One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     *
     * @return string[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * One or more <b>Filter</b> fields can be used to retrieve Selling Manager Sale Records for orders that are in a certain state. See <b>SellingManagerSoldListingsPropertyTypeCodeType</b> for the supported values.
     *
     * @param string $filter
     * @return self
     */
    public function setFilter(array $filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Gets as archived
     *
     * This field is included and set to <code>true</code> if the seller would like to retrieve one or more archived orders between 90 and 120 days old.
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Sets a new archived
     *
     * This field is included and set to <code>true</code> if the seller would like to retrieve one or more archived orders between 90 and 120 days old.
     *
     * @param bool $archived
     * @return self
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
        return $this;
    }

    /**
     * Gets as sort
     *
     * This field is used if the seller would like to sort Selling Manager Sale Record results based on a specific aspect such as purchase date, checkout status, total price, etc. See <b>SellingManagerSoldListingsSortTypeCodeType</b> to read more about the available sorting options.
     *
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * This field is used if the seller would like to sort Selling Manager Sale Record results based on a specific aspect such as purchase date, checkout status, total price, etc. See <b>SellingManagerSoldListingsSortTypeCodeType</b> to read more about the available sorting options.
     *
     * @param string $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
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
     * This field allows the seller to sort in ascending or descending order (based on the selected aspect in the <b>Sort</b> field).
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * This container is used if the seller would like to control how many Sale Records are returned per page and which page to view.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * This container is used if the seller would like to control how many Sale Records are returned per page and which page to view.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * Gets as saleDateRange
     *
     * This container allows the seller to retrieve orders that were purchased within a specified time range. A time range can be set up to 90 days in the past (or up to 120 days if the <b>Archived</b> field is included and set to <code>true</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\TimeRangeType
     */
    public function getSaleDateRange()
    {
        return $this->saleDateRange;
    }

    /**
     * Sets a new saleDateRange
     *
     * This container allows the seller to retrieve orders that were purchased within a specified time range. A time range can be set up to 90 days in the past (or up to 120 days if the <b>Archived</b> field is included and set to <code>true</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\TimeRangeType $saleDateRange
     * @return self
     */
    public function setSaleDateRange(\Nogrod\eBaySDK\Trading\TimeRangeType $saleDateRange)
    {
        $this->saleDateRange = $saleDateRange;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSearch();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Search", $value);
        }
        $value = $this->getStoreCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreCategoryID", $value);
        }
        $value = $this->getFilter();
        if (null !== $value && !empty($this->getFilter())) {
            $writer->write(array_map(function ($v) {
                return ["Filter" => $v];
            }, $value));
        }
        $value = $this->getArchived();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Archived", $value);
        }
        $value = $this->getSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Sort", $value);
        }
        $value = $this->getSortOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SortOrder", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
        $value = $this->getSaleDateRange();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleDateRange", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Search');
        if (null !== $value) {
            $this->setSearch(\Nogrod\eBaySDK\Trading\SellingManagerSearchType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreCategoryID');
        if (null !== $value) {
            $this->setStoreCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Filter', true);
        if (null !== $value && !empty($value)) {
            $this->setFilter($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Archived');
        if (null !== $value) {
            $this->setArchived($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Sort');
        if (null !== $value) {
            $this->setSort($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortOrder');
        if (null !== $value) {
            $this->setSortOrder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleDateRange');
        if (null !== $value) {
            $this->setSaleDateRange(\Nogrod\eBaySDK\Trading\TimeRangeType::fromKeyValue($value));
        }
    }
}
