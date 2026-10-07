<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemListCustomizationType
 *
 * Defines how a list of items should be returned.
 * XSD Type: ItemListCustomizationType
 */
class ItemListCustomizationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->include;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Include', null, ($value ? 'true' : 'false'));
        }
        $value = $this->listingType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ListingType', null, (string) $value);
        }
        $value = $this->sort;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Sort', null, (string) $value);
        }
        $value = $this->durationInDays;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DurationInDays', null, (string) $value);
        }
        $value = $this->includeNotes;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeNotes', null, ($value ? 'true' : 'false'));
        }
        $value = $this->pagination;
        if (null !== $value) {
            $writer->startElementNs(null, 'Pagination', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->orderStatusFilter;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderStatusFilter', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ItemListCustomizationType
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
                case 'Include':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->include = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ListingType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->listingType = $value;
                    }
                    return true;
                case 'Sort':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sort = $value;
                    }
                    return true;
                case 'DurationInDays':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->durationInDays = (int) $value;
                    }
                    return true;
                case 'IncludeNotes':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeNotes = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'Pagination':
                    $this->pagination = \Nogrod\eBaySDK\Trading\PaginationType::xmlRead($reader);
                    return true;
                case 'OrderStatusFilter':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderStatusFilter = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Include'] = $this->include;
        $data['ListingType'] = $this->listingType;
        $data['Sort'] = $this->sort;
        $data['DurationInDays'] = $this->durationInDays;
        $data['IncludeNotes'] = $this->includeNotes;
        $data['Pagination'] = $this->pagination;
        $data['OrderStatusFilter'] = $this->orderStatusFilter;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
