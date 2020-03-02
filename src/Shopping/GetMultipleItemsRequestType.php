<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMultipleItemsRequestType
 *
 * Retrieves publicly available data for one or more listings. Use this call to retrieve much of the information that is visible on a listing's View Item page on the eBay Web site, such as title, prices, and basic shipping costs. Provide an <b>ItemID</b> value for every listing for which you want information. This call returns the same minimal information that is returned by <b>GetSingleItem</b>. Use <b>GetShippingCosts</b> to retrieve more detailed shipping cost information for a given item.
 * XSD Type: GetMultipleItemsRequestType
 */
class GetMultipleItemsRequestType extends AbstractRequestType
{

    /**
     * The uniqe ID that identifies the listing for which to
     *  retrieve the data. You can provide a maximum of 20 <b>ItemID</b> values. When making a
     *  URL request, there are two ways to handle specifying multiple item ID values. You can use multiple <b>ItemID</b> fields, but each one must be specified as an indexed
     *  array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)=
     *  300321408208& ItemID(2)=370214653822...</code>).
     *  <br><br>
     *  Alternatively, as a shortcut for URL requests, you can specify multipe item ID values as a comma-separated list in a single <b>ItemID</b> field (e.g., ...<
     *  code>&ItemID=130310421484,300321408208,370214653822...</code>
     *  ) for convenience.
     *  <br><br>
     *  You can determine an item's ID by calling findItemsAdvanced (<a
     *  href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site. Provide ItemID for
     *  every item for which you want information.
     *
     * @var string[] $itemID
     */
    private $itemID = [
        
    ];

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
     *  <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p>
     *  <p class="edef">Include ItemSpecifics in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Variations</p>
     *  <p class="edef">Include Variations in the response.</p>
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
     * Adds as itemID
     *
     * The uniqe ID that identifies the listing for which to
     *  retrieve the data. You can provide a maximum of 20 <b>ItemID</b> values. When making a
     *  URL request, there are two ways to handle specifying multiple item ID values. You can use multiple <b>ItemID</b> fields, but each one must be specified as an indexed
     *  array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)=
     *  300321408208& ItemID(2)=370214653822...</code>).
     *  <br><br>
     *  Alternatively, as a shortcut for URL requests, you can specify multipe item ID values as a comma-separated list in a single <b>ItemID</b> field (e.g., ...<
     *  code>&ItemID=130310421484,300321408208,370214653822...</code>
     *  ) for convenience.
     *  <br><br>
     *  You can determine an item's ID by calling findItemsAdvanced (<a
     *  href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site. Provide ItemID for
     *  every item for which you want information.
     *
     * @return self
     * @param string $itemID
     */
    public function addToItemID($itemID)
    {
        $this->itemID[] = $itemID;
        return $this;
    }

    /**
     * isset itemID
     *
     * The uniqe ID that identifies the listing for which to
     *  retrieve the data. You can provide a maximum of 20 <b>ItemID</b> values. When making a
     *  URL request, there are two ways to handle specifying multiple item ID values. You can use multiple <b>ItemID</b> fields, but each one must be specified as an indexed
     *  array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)=
     *  300321408208& ItemID(2)=370214653822...</code>).
     *  <br><br>
     *  Alternatively, as a shortcut for URL requests, you can specify multipe item ID values as a comma-separated list in a single <b>ItemID</b> field (e.g., ...<
     *  code>&ItemID=130310421484,300321408208,370214653822...</code>
     *  ) for convenience.
     *  <br><br>
     *  You can determine an item's ID by calling findItemsAdvanced (<a
     *  href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site. Provide ItemID for
     *  every item for which you want information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemID($index)
    {
        return isset($this->itemID[$index]);
    }

    /**
     * unset itemID
     *
     * The uniqe ID that identifies the listing for which to
     *  retrieve the data. You can provide a maximum of 20 <b>ItemID</b> values. When making a
     *  URL request, there are two ways to handle specifying multiple item ID values. You can use multiple <b>ItemID</b> fields, but each one must be specified as an indexed
     *  array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)=
     *  300321408208& ItemID(2)=370214653822...</code>).
     *  <br><br>
     *  Alternatively, as a shortcut for URL requests, you can specify multipe item ID values as a comma-separated list in a single <b>ItemID</b> field (e.g., ...<
     *  code>&ItemID=130310421484,300321408208,370214653822...</code>
     *  ) for convenience.
     *  <br><br>
     *  You can determine an item's ID by calling findItemsAdvanced (<a
     *  href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site. Provide ItemID for
     *  every item for which you want information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemID($index)
    {
        unset($this->itemID[$index]);
    }

    /**
     * Gets as itemID
     *
     * The uniqe ID that identifies the listing for which to
     *  retrieve the data. You can provide a maximum of 20 <b>ItemID</b> values. When making a
     *  URL request, there are two ways to handle specifying multiple item ID values. You can use multiple <b>ItemID</b> fields, but each one must be specified as an indexed
     *  array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)=
     *  300321408208& ItemID(2)=370214653822...</code>).
     *  <br><br>
     *  Alternatively, as a shortcut for URL requests, you can specify multipe item ID values as a comma-separated list in a single <b>ItemID</b> field (e.g., ...<
     *  code>&ItemID=130310421484,300321408208,370214653822...</code>
     *  ) for convenience.
     *  <br><br>
     *  You can determine an item's ID by calling findItemsAdvanced (<a
     *  href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site. Provide ItemID for
     *  every item for which you want information.
     *
     * @return string[]
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The uniqe ID that identifies the listing for which to
     *  retrieve the data. You can provide a maximum of 20 <b>ItemID</b> values. When making a
     *  URL request, there are two ways to handle specifying multiple item ID values. You can use multiple <b>ItemID</b> fields, but each one must be specified as an indexed
     *  array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)=
     *  300321408208& ItemID(2)=370214653822...</code>).
     *  <br><br>
     *  Alternatively, as a shortcut for URL requests, you can specify multipe item ID values as a comma-separated list in a single <b>ItemID</b> field (e.g., ...<
     *  code>&ItemID=130310421484,300321408208,370214653822...</code>
     *  ) for convenience.
     *  <br><br>
     *  You can determine an item's ID by calling findItemsAdvanced (<a
     *  href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html"
     *  >Finding API</a>) or from the eBay Web site. Provide ItemID for
     *  every item for which you want information.
     *
     * @param string[] $itemID
     * @return self
     */
    public function setItemID(array $itemID)
    {
        $this->itemID = $itemID;
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
     *  <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p>
     *  <p class="edef">Include ItemSpecifics in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Variations</p>
     *  <p class="edef">Include Variations in the response.</p>
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
     *  <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p>
     *  <p class="edef">Include ItemSpecifics in the response.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; Variations</p>
     *  <p class="edef">Include Variations in the response.</p>
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value && !empty($this->getItemID())) {
            $writer->write(array_map(function ($v) {
                return ["ItemID" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID', true);
        if (null !== $value && !empty($value)) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeSelector');
        if (null !== $value) {
            $this->setIncludeSelector($value);
        }
    }
}
