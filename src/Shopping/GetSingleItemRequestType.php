<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSingleItemRequestType
 *
 * Retrieves publicly available data for a single listing.
 *  Use this call to retrieve most of the information that is visible
 *  on a listing's View Item page on the eBay Web site,
 *  such as title, description, prices, basic seller and bidder information,
 *  and other details about the listing. Also returns basic
 *  shipping cost information. For more information on shipping details, use <b>GetShippingCosts</b>.
 * XSD Type: GetSingleItemRequestType
 */
class GetSingleItemRequestType extends AbstractRequestType
{
    /**
     * The item ID that uniquely identifies the item listing
     *  for which to retrieve the data.<br>
     *  <br>
     *  You can determine an item's ID by calling <b>findItemsAdvanced</b>( <a
     *  href="https://developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Variation-level SKU that uniquely identifies a variation within
     *  the listing identified by <b>ItemID</b>. Only applicable when the
     *  seller included variation-level SKU (<b>Variation.SKU</b>)
     *  values. Retrieves all the usual listing fields, but limits the
     *  variations content to the specified variation.
     *  If not specified, the response includes all variations.
     *
     * @var string $variationSKU
     */
    private $variationSKU = null;

    /**
     * Name-value pairs that identify one or more variations within the
     *  listing identified by ItemID. Only applicable when the seller
     *  listed the item with variations. Retrieves all the usual Item
     *  fields, but limits the Variations content to the specified
     *  variation(s). If the specified pairs do not match any variation,
     *  eBay returns all variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @var \Nogrod\eBaySDK\Shopping\NameValueListType[] $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * Defines standard subsets of fields to return within the
     *  response.<br>
     *  <br>
     *  If you don't specify this field, the call returns a default
     *  set of fields (see the "Detail Controls" link below). If you specify this field, the additional
     *  fields you retrieve can affect the call's response time
     *  (performance).<br>
     *  <br>
     *  <b>Applicable values</b>:
     *  <p class="ename">&bull;&nbsp;&nbsp; Details</p>
     *  <p class="edef">Include most available fields in the
     *  response (except fields that significantly affect the call's
     *  performance).</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Description</p>
     *  <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; TextDescription</p>
     *  <p class="edef">Include the text Description (no html tag) field in the response. (This can affect the call's performance.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; ShippingCosts</p>
     *  <p class="edef">Include basic shipping costs in the
     *  response. (Use GetShippingCosts to retrieve more
     *  details.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p>
     *  <p class="edef">Include ItemSpecifics in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Variations</p>
     *  <p class="edef">Include Variations in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Compatibility</p>
     *  <p class="edef">Include Compatibility in the response.</p>
     *  <br>
     *  Use a comma to specify multiple values. (In this case,
     *  the results are cumulative.) See "GetSingleItem Samples"
     *  for an example of how to use this field.<br>
     *  <br>
     *  See "Detail Controls" for a complete list of
     *  fields that can be returned for each selector.
     *
     * @var string $includeSelector
     */
    private $includeSelector = null;

    /**
     * Gets as itemID
     *
     * The item ID that uniquely identifies the item listing
     *  for which to retrieve the data.<br>
     *  <br>
     *  You can determine an item's ID by calling <b>findItemsAdvanced</b>( <a
     *  href="https://developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The item ID that uniquely identifies the item listing
     *  for which to retrieve the data.<br>
     *  <br>
     *  You can determine an item's ID by calling <b>findItemsAdvanced</b>( <a
     *  href="https://developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as variationSKU
     *
     * Variation-level SKU that uniquely identifies a variation within
     *  the listing identified by <b>ItemID</b>. Only applicable when the
     *  seller included variation-level SKU (<b>Variation.SKU</b>)
     *  values. Retrieves all the usual listing fields, but limits the
     *  variations content to the specified variation.
     *  If not specified, the response includes all variations.
     *
     * @return string
     */
    public function getVariationSKU()
    {
        return $this->variationSKU;
    }

    /**
     * Sets a new variationSKU
     *
     * Variation-level SKU that uniquely identifies a variation within
     *  the listing identified by <b>ItemID</b>. Only applicable when the
     *  seller included variation-level SKU (<b>Variation.SKU</b>)
     *  values. Retrieves all the usual listing fields, but limits the
     *  variations content to the specified variation.
     *  If not specified, the response includes all variations.
     *
     * @param string $variationSKU
     * @return self
     */
    public function setVariationSKU($variationSKU)
    {
        $this->variationSKU = $variationSKU;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * Name-value pairs that identify one or more variations within the
     *  listing identified by ItemID. Only applicable when the seller
     *  listed the item with variations. Retrieves all the usual Item
     *  fields, but limits the Variations content to the specified
     *  variation(s). If the specified pairs do not match any variation,
     *  eBay returns all variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList
     */
    public function addToVariationSpecifics(\Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList)
    {
        $this->variationSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecifics
     *
     * Name-value pairs that identify one or more variations within the
     *  listing identified by ItemID. Only applicable when the seller
     *  listed the item with variations. Retrieves all the usual Item
     *  fields, but limits the Variations content to the specified
     *  variation(s). If the specified pairs do not match any variation,
     *  eBay returns all variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationSpecifics($index)
    {
        return isset($this->variationSpecifics[$index]);
    }

    /**
     * unset variationSpecifics
     *
     * Name-value pairs that identify one or more variations within the
     *  listing identified by ItemID. Only applicable when the seller
     *  listed the item with variations. Retrieves all the usual Item
     *  fields, but limits the Variations content to the specified
     *  variation(s). If the specified pairs do not match any variation,
     *  eBay returns all variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationSpecifics($index)
    {
        unset($this->variationSpecifics[$index]);
    }

    /**
     * Gets as variationSpecifics
     *
     * Name-value pairs that identify one or more variations within the
     *  listing identified by ItemID. Only applicable when the seller
     *  listed the item with variations. Retrieves all the usual Item
     *  fields, but limits the Variations content to the specified
     *  variation(s). If the specified pairs do not match any variation,
     *  eBay returns all variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @return \Nogrod\eBaySDK\Shopping\NameValueListType[]
     */
    public function getVariationSpecifics()
    {
        return $this->variationSpecifics;
    }

    /**
     * Sets a new variationSpecifics
     *
     * Name-value pairs that identify one or more variations within the
     *  listing identified by ItemID. Only applicable when the seller
     *  listed the item with variations. Retrieves all the usual Item
     *  fields, but limits the Variations content to the specified
     *  variation(s). If the specified pairs do not match any variation,
     *  eBay returns all variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType[] $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(array $variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
        return $this;
    }

    /**
     * Gets as includeSelector
     *
     * Defines standard subsets of fields to return within the
     *  response.<br>
     *  <br>
     *  If you don't specify this field, the call returns a default
     *  set of fields (see the "Detail Controls" link below). If you specify this field, the additional
     *  fields you retrieve can affect the call's response time
     *  (performance).<br>
     *  <br>
     *  <b>Applicable values</b>:
     *  <p class="ename">&bull;&nbsp;&nbsp; Details</p>
     *  <p class="edef">Include most available fields in the
     *  response (except fields that significantly affect the call's
     *  performance).</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Description</p>
     *  <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; TextDescription</p>
     *  <p class="edef">Include the text Description (no html tag) field in the response. (This can affect the call's performance.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; ShippingCosts</p>
     *  <p class="edef">Include basic shipping costs in the
     *  response. (Use GetShippingCosts to retrieve more
     *  details.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p>
     *  <p class="edef">Include ItemSpecifics in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Variations</p>
     *  <p class="edef">Include Variations in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Compatibility</p>
     *  <p class="edef">Include Compatibility in the response.</p>
     *  <br>
     *  Use a comma to specify multiple values. (In this case,
     *  the results are cumulative.) See "GetSingleItem Samples"
     *  for an example of how to use this field.<br>
     *  <br>
     *  See "Detail Controls" for a complete list of
     *  fields that can be returned for each selector.
     *
     * @return string
     */
    public function getIncludeSelector()
    {
        return $this->includeSelector;
    }

    /**
     * Sets a new includeSelector
     *
     * Defines standard subsets of fields to return within the
     *  response.<br>
     *  <br>
     *  If you don't specify this field, the call returns a default
     *  set of fields (see the "Detail Controls" link below). If you specify this field, the additional
     *  fields you retrieve can affect the call's response time
     *  (performance).<br>
     *  <br>
     *  <b>Applicable values</b>:
     *  <p class="ename">&bull;&nbsp;&nbsp; Details</p>
     *  <p class="edef">Include most available fields in the
     *  response (except fields that significantly affect the call's
     *  performance).</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Description</p>
     *  <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; TextDescription</p>
     *  <p class="edef">Include the text Description (no html tag) field in the response. (This can affect the call's performance.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; ShippingCosts</p>
     *  <p class="edef">Include basic shipping costs in the
     *  response. (Use GetShippingCosts to retrieve more
     *  details.)</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p>
     *  <p class="edef">Include ItemSpecifics in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Variations</p>
     *  <p class="edef">Include Variations in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Compatibility</p>
     *  <p class="edef">Include Compatibility in the response.</p>
     *  <br>
     *  Use a comma to specify multiple values. (In this case,
     *  the results are cumulative.) See "GetSingleItem Samples"
     *  for an example of how to use this field.<br>
     *  <br>
     *  See "Detail Controls" for a complete list of
     *  fields that can be returned for each selector.
     *
     * @param string $includeSelector
     * @return self
     */
    public function setIncludeSelector($includeSelector)
    {
        $this->includeSelector = $includeSelector;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getVariationSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSKU", $value);
        }
        $value = $this->getVariationSpecifics();
        if (null !== $value && !empty($this->getVariationSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecifics", array_map(function ($v) {return ["NameValueList" => $v];}, $value));
        }
        $value = $this->getIncludeSelector();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeSelector", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSKU');
        if (null !== $value) {
            $this->setVariationSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setVariationSpecifics(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\NameValueListType::fromKeyValue(Func::mapArray($v, '{urn:ebay:apis:eBLBaseComponents}NameValueList'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeSelector');
        if (null !== $value) {
            $this->setIncludeSelector($value);
        }
    }
}
