<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemArrayType
 *
 * Container for a list of items. Can contain zero, one, or multiple
 *  <b>ItemType</b> objects, each of which conveys the data for one item listing.
 * XSD Type: ItemArrayType
 */
class ItemArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains the data properties that define one item listing. <b>GetSellerEvents</b> and
     *  <b>GetSellerList</b> only return items if any are available for the seller within the
     *  time window specified in the request.<br>
     *  <br>
     *  Some optional fields are only returned if the seller defined them for the
     *  item. Some fields are only returned under particular conditions specified in
     *  the individual field descriptions. For example, a buyer's contact information
     *  might only be returned if the member who is making the request (as identified
     *  in the <b>eBayAuthToken</b>) has an order relationship with that buyer. <br>
     *  <br>
     *  For calls that support detail levels, the set of fields returned is also
     *  controlled by the value of <b>DetailLevel</b> in the request. For some calls, other
     *  parameters in the request can also control the data returned for each item.
     *  For example, <b>GranularityLevel</b> controls the fields to return for each item in
     *  the <b>GetSellerList</b>
     *  response.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> When making a <b>GetSellerList</b> call, items that are on-hold due to an eBay policy violation will not be returned in the response.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $item
     */
    private $item = [

    ];

    /**
     * Adds as item
     *
     * Contains the data properties that define one item listing. <b>GetSellerEvents</b> and
     *  <b>GetSellerList</b> only return items if any are available for the seller within the
     *  time window specified in the request.<br>
     *  <br>
     *  Some optional fields are only returned if the seller defined them for the
     *  item. Some fields are only returned under particular conditions specified in
     *  the individual field descriptions. For example, a buyer's contact information
     *  might only be returned if the member who is making the request (as identified
     *  in the <b>eBayAuthToken</b>) has an order relationship with that buyer. <br>
     *  <br>
     *  For calls that support detail levels, the set of fields returned is also
     *  controlled by the value of <b>DetailLevel</b> in the request. For some calls, other
     *  parameters in the request can also control the data returned for each item.
     *  For example, <b>GranularityLevel</b> controls the fields to return for each item in
     *  the <b>GetSellerList</b>
     *  response.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> When making a <b>GetSellerList</b> call, items that are on-hold due to an eBay policy violation will not be returned in the response.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     */
    public function addToItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Contains the data properties that define one item listing. <b>GetSellerEvents</b> and
     *  <b>GetSellerList</b> only return items if any are available for the seller within the
     *  time window specified in the request.<br>
     *  <br>
     *  Some optional fields are only returned if the seller defined them for the
     *  item. Some fields are only returned under particular conditions specified in
     *  the individual field descriptions. For example, a buyer's contact information
     *  might only be returned if the member who is making the request (as identified
     *  in the <b>eBayAuthToken</b>) has an order relationship with that buyer. <br>
     *  <br>
     *  For calls that support detail levels, the set of fields returned is also
     *  controlled by the value of <b>DetailLevel</b> in the request. For some calls, other
     *  parameters in the request can also control the data returned for each item.
     *  For example, <b>GranularityLevel</b> controls the fields to return for each item in
     *  the <b>GetSellerList</b>
     *  response.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> When making a <b>GetSellerList</b> call, items that are on-hold due to an eBay policy violation will not be returned in the response.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * Contains the data properties that define one item listing. <b>GetSellerEvents</b> and
     *  <b>GetSellerList</b> only return items if any are available for the seller within the
     *  time window specified in the request.<br>
     *  <br>
     *  Some optional fields are only returned if the seller defined them for the
     *  item. Some fields are only returned under particular conditions specified in
     *  the individual field descriptions. For example, a buyer's contact information
     *  might only be returned if the member who is making the request (as identified
     *  in the <b>eBayAuthToken</b>) has an order relationship with that buyer. <br>
     *  <br>
     *  For calls that support detail levels, the set of fields returned is also
     *  controlled by the value of <b>DetailLevel</b> in the request. For some calls, other
     *  parameters in the request can also control the data returned for each item.
     *  For example, <b>GranularityLevel</b> controls the fields to return for each item in
     *  the <b>GetSellerList</b>
     *  response.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> When making a <b>GetSellerList</b> call, items that are on-hold due to an eBay policy violation will not be returned in the response.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * Contains the data properties that define one item listing. <b>GetSellerEvents</b> and
     *  <b>GetSellerList</b> only return items if any are available for the seller within the
     *  time window specified in the request.<br>
     *  <br>
     *  Some optional fields are only returned if the seller defined them for the
     *  item. Some fields are only returned under particular conditions specified in
     *  the individual field descriptions. For example, a buyer's contact information
     *  might only be returned if the member who is making the request (as identified
     *  in the <b>eBayAuthToken</b>) has an order relationship with that buyer. <br>
     *  <br>
     *  For calls that support detail levels, the set of fields returned is also
     *  controlled by the value of <b>DetailLevel</b> in the request. For some calls, other
     *  parameters in the request can also control the data returned for each item.
     *  For example, <b>GranularityLevel</b> controls the fields to return for each item in
     *  the <b>GetSellerList</b>
     *  response.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> When making a <b>GetSellerList</b> call, items that are on-hold due to an eBay policy violation will not be returned in the response.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Contains the data properties that define one item listing. <b>GetSellerEvents</b> and
     *  <b>GetSellerList</b> only return items if any are available for the seller within the
     *  time window specified in the request.<br>
     *  <br>
     *  Some optional fields are only returned if the seller defined them for the
     *  item. Some fields are only returned under particular conditions specified in
     *  the individual field descriptions. For example, a buyer's contact information
     *  might only be returned if the member who is making the request (as identified
     *  in the <b>eBayAuthToken</b>) has an order relationship with that buyer. <br>
     *  <br>
     *  For calls that support detail levels, the set of fields returned is also
     *  controlled by the value of <b>DetailLevel</b> in the request. For some calls, other
     *  parameters in the request can also control the data returned for each item.
     *  For example, <b>GranularityLevel</b> controls the fields to return for each item in
     *  the <b>GetSellerList</b>
     *  response.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> When making a <b>GetSellerList</b> call, items that are on-hold due to an eBay policy violation will not be returned in the response.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItem();
        if (null !== $value && [] !== $this->getItem()) {
            $writer->write(array_map(function ($v) {return ["Item" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ItemArrayType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($v);}, $value));
        }
    }
}
