<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemListCustomizationType
 *
 * Defines how a list of items should be returned.
 * XSD Type: ItemListCustomizationType
 */
class ItemListCustomizationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specifies whether or not to include the container in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @var bool $include
     */
    private $include = null;

    /**
     * Specifies the listing type of items in the returned list.
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * Specifies the sort order of the result. Default is Ascending.
     *
     * @var string $sort
     */
    private $sort = null;

    /**
     * Specifies the time period during which an item was won or lost. Similar to the
     *  period drop-down menu in the My eBay user interface. For example, to return
     *  the items won or lost in the last week, specify a DurationInDays of 7.
     *
     * @var int $durationInDays
     */
    private $durationInDays = null;

    /**
     * Specifies whether or not to include Item.PrivateNotes and Item.eBayNotes
     *  in the response.
     *
     * @var bool $includeNotes
     */
    private $includeNotes = null;

    /**
     * Specifies how to create virtual pages in the returned list.
     *  <br>
     *  Default for EntriesPerPage with GetMyeBayBuying is 200.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * Filter to reduce the <b>SoldList</b> response based on whether the seller (or eBay) marked the applicable order as Paid and/or Shipped
     *  in My eBay.<br>
     *  <br>
     *  Sellers can use <b>CompleteSale</b> or My eBay to mark an
     *  order as Paid or Shipped.
     *
     * @var string $orderStatusFilter
     */
    private $orderStatusFilter = null;

    /**
     * Gets as include
     *
     * Specifies whether or not to include the container in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @return bool
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * Specifies whether or not to include the container in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @param bool $include
     * @return self
     */
    public function setInclude($include)
    {
        $this->include = $include;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * Specifies the listing type of items in the returned list.
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * Specifies the listing type of items in the returned list.
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as sort
     *
     * Specifies the sort order of the result. Default is Ascending.
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
     * Specifies the sort order of the result. Default is Ascending.
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
     * Gets as durationInDays
     *
     * Specifies the time period during which an item was won or lost. Similar to the
     *  period drop-down menu in the My eBay user interface. For example, to return
     *  the items won or lost in the last week, specify a DurationInDays of 7.
     *
     * @return int
     */
    public function getDurationInDays()
    {
        return $this->durationInDays;
    }

    /**
     * Sets a new durationInDays
     *
     * Specifies the time period during which an item was won or lost. Similar to the
     *  period drop-down menu in the My eBay user interface. For example, to return
     *  the items won or lost in the last week, specify a DurationInDays of 7.
     *
     * @param int $durationInDays
     * @return self
     */
    public function setDurationInDays($durationInDays)
    {
        $this->durationInDays = $durationInDays;
        return $this;
    }

    /**
     * Gets as includeNotes
     *
     * Specifies whether or not to include Item.PrivateNotes and Item.eBayNotes
     *  in the response.
     *
     * @return bool
     */
    public function getIncludeNotes()
    {
        return $this->includeNotes;
    }

    /**
     * Sets a new includeNotes
     *
     * Specifies whether or not to include Item.PrivateNotes and Item.eBayNotes
     *  in the response.
     *
     * @param bool $includeNotes
     * @return self
     */
    public function setIncludeNotes($includeNotes)
    {
        $this->includeNotes = $includeNotes;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * Specifies how to create virtual pages in the returned list.
     *  <br>
     *  Default for EntriesPerPage with GetMyeBayBuying is 200.
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
     * Specifies how to create virtual pages in the returned list.
     *  <br>
     *  Default for EntriesPerPage with GetMyeBayBuying is 200.
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
     * Gets as orderStatusFilter
     *
     * Filter to reduce the <b>SoldList</b> response based on whether the seller (or eBay) marked the applicable order as Paid and/or Shipped
     *  in My eBay.<br>
     *  <br>
     *  Sellers can use <b>CompleteSale</b> or My eBay to mark an
     *  order as Paid or Shipped.
     *
     * @return string
     */
    public function getOrderStatusFilter()
    {
        return $this->orderStatusFilter;
    }

    /**
     * Sets a new orderStatusFilter
     *
     * Filter to reduce the <b>SoldList</b> response based on whether the seller (or eBay) marked the applicable order as Paid and/or Shipped
     *  in My eBay.<br>
     *  <br>
     *  Sellers can use <b>CompleteSale</b> or My eBay to mark an
     *  order as Paid or Shipped.
     *
     * @param string $orderStatusFilter
     * @return self
     */
    public function setOrderStatusFilter($orderStatusFilter)
    {
        $this->orderStatusFilter = $orderStatusFilter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInclude();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Include", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Sort", $value);
        }
        $value = $this->getDurationInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DurationInDays", $value);
        }
        $value = $this->getIncludeNotes();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeNotes", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
        $value = $this->getOrderStatusFilter();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderStatusFilter", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Include');
        if (null !== $value) {
            $this->setInclude($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Sort');
        if (null !== $value) {
            $this->setSort($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DurationInDays');
        if (null !== $value) {
            $this->setDurationInDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeNotes');
        if (null !== $value) {
            $this->setIncludeNotes($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderStatusFilter');
        if (null !== $value) {
            $this->setOrderStatusFilter($value);
        }
    }
}
