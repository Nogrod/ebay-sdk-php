<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationsType
 *
 * Variations are multiple similar (but not identical) items in a
 *  fixed-price listing.
 *  For example, a single listing could contain multiple items of the
 *  same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can have its own quantity and
 *  price. For example, a listing could include 10 "Blue, Large"
 *  variations and 20 "Black, Medium" variations.
 * XSD Type: VariationsType
 */
class VariationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains data that distinguishes one item variation from another.
     *  For example, if an item varies by color and size, each <b>Variation</b>
     *  node specifies a combination of one of those colors and
     *  sizes.<br>
     *  <br>
     *  When listing or relisting an item, you are allowed to create a
     *  listing with only one item variation, and you might have a plan to add more item variations to the listing in the future. However, if you don't plan to add other item variations in the future, we recommend that you avoid listing with only one variation, so that you avoid confusing buyers.
     *  <br> <br>
     *  If you specify multiple <b>Variation</b> containers in an add/revise/relist/verify add call to define multiple item variations, the <b>Variation</b> containers must be contiguous or an error will occur. This means that you would not want to input a <b>Pictures</b> or a <b>VariationSpecificsSet</b> container in between <b>Variation</b> containers in an API call.
     *  <br> <br>
     *  When you modify an item variation with a <b>ReviseFixedPriceItem</b> call, the best practice is to include all applicable fields under the <b>Variation</b> container, even if some of the values/settings are not being modified. The <b>StartPrice</b> and <b>VariationSpecifics</b> must be included when modifying an existing item variation, even if these values are not being changed. If a SKU value is defined for the item variation, it is strongly recommended that you include the <b>SKU</b> field, regardless of whether the SKU value is changing or not. If the <b>SKU</b> field is not included, any existing SKU value will be removed from the item variation. It is also strongly recommended that you include the <b>Quantity</b> field and input an accurate value, because if the <b>Quantity</b> field is omitted in the API call, the quantity for the item variation is set to <code>0</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\VariationType[] $variation
     */
    private $variation = [

    ];

    /**
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as Color. For example, if a listing
     *  has blue and black color variations, you could choose Color
     *  for all the pictures, and then include a set of pictures
     *  for the blue variations and another set of pictures for the black
     *  variations.<br>
     *  <br>
     *  We strongly recommend that you also include shared pictures
     *  in Item.PictureDetails, as this results in a better experience
     *  for buyers.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only:</b> To replace
     *  or delete individual pictures, pass in the entire Pictures
     *  node with the complete set of variation pictures that you
     *  want in the listing. If the applicable variations have purchases
     *  or the listing ends in less than 12 hours, you can add
     *  pictures, but you can't remove existing pictures.<br>
     *  <br>
     *  Variation, Pictures, or ModifyNameList (or all) need to be
     *  specified when the Variations node is specified in listing requests<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is allowed for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\PicturesType[] $pictures
     */
    private $pictures = [

    ];

    /**
     * The set of all variation specific names and values that can be
     *  applicable to the listing (at any time in its life cycle).
     *  This must include all names and values specified in the
     *  VariationSpecifics nodes.<br>
     *  <br>
     *  Required when Variations are specified in a new listing, and when you
     *  modify the name of a variation by using ModifyNameList.
     *  When you modify variation specific names, VariationSpecificsSet must
     *  include the new names plus the names that are not changing (but omit the old names), <br>
     *  <br>
     *  This set configures variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if you specify Color and Size names in the set,
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to enable a buyer to choose a variation of interest.<br>
     *  <br>
     *  The order in which you specify the names and values also
     *  controls the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if you specify "Color", then "Size", and then
     *  "Sleeve Style" as names, the View Item page shows drop-down lists
     *  with those labels in that order. For "Size", if you specify
     *  "S", "M", and "L" as values, the View Item page
     *  shows the values in that order in the Size drop-down list.<br>
     *  <br>
     *  Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve recommendations for names and values.<br>
     *  <br>
     *  Required when Variations are specified in a new listing
     *  (e.g., in AddFixedPriceItem). Also required when you change
     *  variation specific names or values in ReviseFixedPriceItem and
     *  RelistFixedPriceItem.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecificsSet
     */
    private $variationSpecificsSet = null;

    /**
     * Modifies variation specific names when you revise or
     *  relist items.<br>
     *  <br>
     *  You can modify a variation specific name regardless of the quantity sold (i.e., no restrictions on whether the item has orders or order line items (transactions)).<br>
     *  <br>
     *  (Use VariationSpecifics to modify variation specific values.)<br>
     *  <br>
     *  You are not required to specify SKU, VariationSpecifics, and other variation details in the request when you are only modifying a variation specific name.
     *  <br>
     *  <br>
     *  Variation, Pictures, VariationSpecificsSet, or ModifyNameList (or all) need to be specified when the Variations node is specified in listing requests.
     *
     * @var \Nogrod\eBaySDK\Trading\ModifyNameType[] $modifyNameList
     */
    private $modifyNameList = null;

    /**
     * Adds as variation
     *
     * Contains data that distinguishes one item variation from another.
     *  For example, if an item varies by color and size, each <b>Variation</b>
     *  node specifies a combination of one of those colors and
     *  sizes.<br>
     *  <br>
     *  When listing or relisting an item, you are allowed to create a
     *  listing with only one item variation, and you might have a plan to add more item variations to the listing in the future. However, if you don't plan to add other item variations in the future, we recommend that you avoid listing with only one variation, so that you avoid confusing buyers.
     *  <br> <br>
     *  If you specify multiple <b>Variation</b> containers in an add/revise/relist/verify add call to define multiple item variations, the <b>Variation</b> containers must be contiguous or an error will occur. This means that you would not want to input a <b>Pictures</b> or a <b>VariationSpecificsSet</b> container in between <b>Variation</b> containers in an API call.
     *  <br> <br>
     *  When you modify an item variation with a <b>ReviseFixedPriceItem</b> call, the best practice is to include all applicable fields under the <b>Variation</b> container, even if some of the values/settings are not being modified. The <b>StartPrice</b> and <b>VariationSpecifics</b> must be included when modifying an existing item variation, even if these values are not being changed. If a SKU value is defined for the item variation, it is strongly recommended that you include the <b>SKU</b> field, regardless of whether the SKU value is changing or not. If the <b>SKU</b> field is not included, any existing SKU value will be removed from the item variation. It is also strongly recommended that you include the <b>Quantity</b> field and input an accurate value, because if the <b>Quantity</b> field is omitted in the API call, the quantity for the item variation is set to <code>0</code>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VariationType $variation
     */
    public function addToVariation(\Nogrod\eBaySDK\Trading\VariationType $variation)
    {
        $this->variation[] = $variation;
        return $this;
    }

    /**
     * isset variation
     *
     * Contains data that distinguishes one item variation from another.
     *  For example, if an item varies by color and size, each <b>Variation</b>
     *  node specifies a combination of one of those colors and
     *  sizes.<br>
     *  <br>
     *  When listing or relisting an item, you are allowed to create a
     *  listing with only one item variation, and you might have a plan to add more item variations to the listing in the future. However, if you don't plan to add other item variations in the future, we recommend that you avoid listing with only one variation, so that you avoid confusing buyers.
     *  <br> <br>
     *  If you specify multiple <b>Variation</b> containers in an add/revise/relist/verify add call to define multiple item variations, the <b>Variation</b> containers must be contiguous or an error will occur. This means that you would not want to input a <b>Pictures</b> or a <b>VariationSpecificsSet</b> container in between <b>Variation</b> containers in an API call.
     *  <br> <br>
     *  When you modify an item variation with a <b>ReviseFixedPriceItem</b> call, the best practice is to include all applicable fields under the <b>Variation</b> container, even if some of the values/settings are not being modified. The <b>StartPrice</b> and <b>VariationSpecifics</b> must be included when modifying an existing item variation, even if these values are not being changed. If a SKU value is defined for the item variation, it is strongly recommended that you include the <b>SKU</b> field, regardless of whether the SKU value is changing or not. If the <b>SKU</b> field is not included, any existing SKU value will be removed from the item variation. It is also strongly recommended that you include the <b>Quantity</b> field and input an accurate value, because if the <b>Quantity</b> field is omitted in the API call, the quantity for the item variation is set to <code>0</code>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariation($index)
    {
        return isset($this->variation[$index]);
    }

    /**
     * unset variation
     *
     * Contains data that distinguishes one item variation from another.
     *  For example, if an item varies by color and size, each <b>Variation</b>
     *  node specifies a combination of one of those colors and
     *  sizes.<br>
     *  <br>
     *  When listing or relisting an item, you are allowed to create a
     *  listing with only one item variation, and you might have a plan to add more item variations to the listing in the future. However, if you don't plan to add other item variations in the future, we recommend that you avoid listing with only one variation, so that you avoid confusing buyers.
     *  <br> <br>
     *  If you specify multiple <b>Variation</b> containers in an add/revise/relist/verify add call to define multiple item variations, the <b>Variation</b> containers must be contiguous or an error will occur. This means that you would not want to input a <b>Pictures</b> or a <b>VariationSpecificsSet</b> container in between <b>Variation</b> containers in an API call.
     *  <br> <br>
     *  When you modify an item variation with a <b>ReviseFixedPriceItem</b> call, the best practice is to include all applicable fields under the <b>Variation</b> container, even if some of the values/settings are not being modified. The <b>StartPrice</b> and <b>VariationSpecifics</b> must be included when modifying an existing item variation, even if these values are not being changed. If a SKU value is defined for the item variation, it is strongly recommended that you include the <b>SKU</b> field, regardless of whether the SKU value is changing or not. If the <b>SKU</b> field is not included, any existing SKU value will be removed from the item variation. It is also strongly recommended that you include the <b>Quantity</b> field and input an accurate value, because if the <b>Quantity</b> field is omitted in the API call, the quantity for the item variation is set to <code>0</code>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariation($index)
    {
        unset($this->variation[$index]);
    }

    /**
     * Gets as variation
     *
     * Contains data that distinguishes one item variation from another.
     *  For example, if an item varies by color and size, each <b>Variation</b>
     *  node specifies a combination of one of those colors and
     *  sizes.<br>
     *  <br>
     *  When listing or relisting an item, you are allowed to create a
     *  listing with only one item variation, and you might have a plan to add more item variations to the listing in the future. However, if you don't plan to add other item variations in the future, we recommend that you avoid listing with only one variation, so that you avoid confusing buyers.
     *  <br> <br>
     *  If you specify multiple <b>Variation</b> containers in an add/revise/relist/verify add call to define multiple item variations, the <b>Variation</b> containers must be contiguous or an error will occur. This means that you would not want to input a <b>Pictures</b> or a <b>VariationSpecificsSet</b> container in between <b>Variation</b> containers in an API call.
     *  <br> <br>
     *  When you modify an item variation with a <b>ReviseFixedPriceItem</b> call, the best practice is to include all applicable fields under the <b>Variation</b> container, even if some of the values/settings are not being modified. The <b>StartPrice</b> and <b>VariationSpecifics</b> must be included when modifying an existing item variation, even if these values are not being changed. If a SKU value is defined for the item variation, it is strongly recommended that you include the <b>SKU</b> field, regardless of whether the SKU value is changing or not. If the <b>SKU</b> field is not included, any existing SKU value will be removed from the item variation. It is also strongly recommended that you include the <b>Quantity</b> field and input an accurate value, because if the <b>Quantity</b> field is omitted in the API call, the quantity for the item variation is set to <code>0</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\VariationType[]
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Sets a new variation
     *
     * Contains data that distinguishes one item variation from another.
     *  For example, if an item varies by color and size, each <b>Variation</b>
     *  node specifies a combination of one of those colors and
     *  sizes.<br>
     *  <br>
     *  When listing or relisting an item, you are allowed to create a
     *  listing with only one item variation, and you might have a plan to add more item variations to the listing in the future. However, if you don't plan to add other item variations in the future, we recommend that you avoid listing with only one variation, so that you avoid confusing buyers.
     *  <br> <br>
     *  If you specify multiple <b>Variation</b> containers in an add/revise/relist/verify add call to define multiple item variations, the <b>Variation</b> containers must be contiguous or an error will occur. This means that you would not want to input a <b>Pictures</b> or a <b>VariationSpecificsSet</b> container in between <b>Variation</b> containers in an API call.
     *  <br> <br>
     *  When you modify an item variation with a <b>ReviseFixedPriceItem</b> call, the best practice is to include all applicable fields under the <b>Variation</b> container, even if some of the values/settings are not being modified. The <b>StartPrice</b> and <b>VariationSpecifics</b> must be included when modifying an existing item variation, even if these values are not being changed. If a SKU value is defined for the item variation, it is strongly recommended that you include the <b>SKU</b> field, regardless of whether the SKU value is changing or not. If the <b>SKU</b> field is not included, any existing SKU value will be removed from the item variation. It is also strongly recommended that you include the <b>Quantity</b> field and input an accurate value, because if the <b>Quantity</b> field is omitted in the API call, the quantity for the item variation is set to <code>0</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\VariationType[] $variation
     * @return self
     */
    public function setVariation(array $variation)
    {
        $this->variation = $variation;
        return $this;
    }

    /**
     * Adds as pictures
     *
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as Color. For example, if a listing
     *  has blue and black color variations, you could choose Color
     *  for all the pictures, and then include a set of pictures
     *  for the blue variations and another set of pictures for the black
     *  variations.<br>
     *  <br>
     *  We strongly recommend that you also include shared pictures
     *  in Item.PictureDetails, as this results in a better experience
     *  for buyers.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only:</b> To replace
     *  or delete individual pictures, pass in the entire Pictures
     *  node with the complete set of variation pictures that you
     *  want in the listing. If the applicable variations have purchases
     *  or the listing ends in less than 12 hours, you can add
     *  pictures, but you can't remove existing pictures.<br>
     *  <br>
     *  Variation, Pictures, or ModifyNameList (or all) need to be
     *  specified when the Variations node is specified in listing requests<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is allowed for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PicturesType $pictures
     */
    public function addToPictures(\Nogrod\eBaySDK\Trading\PicturesType $pictures)
    {
        $this->pictures[] = $pictures;
        return $this;
    }

    /**
     * isset pictures
     *
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as Color. For example, if a listing
     *  has blue and black color variations, you could choose Color
     *  for all the pictures, and then include a set of pictures
     *  for the blue variations and another set of pictures for the black
     *  variations.<br>
     *  <br>
     *  We strongly recommend that you also include shared pictures
     *  in Item.PictureDetails, as this results in a better experience
     *  for buyers.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only:</b> To replace
     *  or delete individual pictures, pass in the entire Pictures
     *  node with the complete set of variation pictures that you
     *  want in the listing. If the applicable variations have purchases
     *  or the listing ends in less than 12 hours, you can add
     *  pictures, but you can't remove existing pictures.<br>
     *  <br>
     *  Variation, Pictures, or ModifyNameList (or all) need to be
     *  specified when the Variations node is specified in listing requests<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is allowed for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictures($index)
    {
        return isset($this->pictures[$index]);
    }

    /**
     * unset pictures
     *
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as Color. For example, if a listing
     *  has blue and black color variations, you could choose Color
     *  for all the pictures, and then include a set of pictures
     *  for the blue variations and another set of pictures for the black
     *  variations.<br>
     *  <br>
     *  We strongly recommend that you also include shared pictures
     *  in Item.PictureDetails, as this results in a better experience
     *  for buyers.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only:</b> To replace
     *  or delete individual pictures, pass in the entire Pictures
     *  node with the complete set of variation pictures that you
     *  want in the listing. If the applicable variations have purchases
     *  or the listing ends in less than 12 hours, you can add
     *  pictures, but you can't remove existing pictures.<br>
     *  <br>
     *  Variation, Pictures, or ModifyNameList (or all) need to be
     *  specified when the Variations node is specified in listing requests<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is allowed for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictures($index)
    {
        unset($this->pictures[$index]);
    }

    /**
     * Gets as pictures
     *
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as Color. For example, if a listing
     *  has blue and black color variations, you could choose Color
     *  for all the pictures, and then include a set of pictures
     *  for the blue variations and another set of pictures for the black
     *  variations.<br>
     *  <br>
     *  We strongly recommend that you also include shared pictures
     *  in Item.PictureDetails, as this results in a better experience
     *  for buyers.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only:</b> To replace
     *  or delete individual pictures, pass in the entire Pictures
     *  node with the complete set of variation pictures that you
     *  want in the listing. If the applicable variations have purchases
     *  or the listing ends in less than 12 hours, you can add
     *  pictures, but you can't remove existing pictures.<br>
     *  <br>
     *  Variation, Pictures, or ModifyNameList (or all) need to be
     *  specified when the Variations node is specified in listing requests<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is allowed for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @return \Nogrod\eBaySDK\Trading\PicturesType[]
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Sets a new pictures
     *
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as Color. For example, if a listing
     *  has blue and black color variations, you could choose Color
     *  for all the pictures, and then include a set of pictures
     *  for the blue variations and another set of pictures for the black
     *  variations.<br>
     *  <br>
     *  We strongly recommend that you also include shared pictures
     *  in Item.PictureDetails, as this results in a better experience
     *  for buyers.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only:</b> To replace
     *  or delete individual pictures, pass in the entire Pictures
     *  node with the complete set of variation pictures that you
     *  want in the listing. If the applicable variations have purchases
     *  or the listing ends in less than 12 hours, you can add
     *  pictures, but you can't remove existing pictures.<br>
     *  <br>
     *  Variation, Pictures, or ModifyNameList (or all) need to be
     *  specified when the Variations node is specified in listing requests<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is allowed for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @param \Nogrod\eBaySDK\Trading\PicturesType[] $pictures
     * @return self
     */
    public function setPictures(array $pictures)
    {
        $this->pictures = $pictures;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * The set of all variation specific names and values that can be
     *  applicable to the listing (at any time in its life cycle).
     *  This must include all names and values specified in the
     *  VariationSpecifics nodes.<br>
     *  <br>
     *  Required when Variations are specified in a new listing, and when you
     *  modify the name of a variation by using ModifyNameList.
     *  When you modify variation specific names, VariationSpecificsSet must
     *  include the new names plus the names that are not changing (but omit the old names), <br>
     *  <br>
     *  This set configures variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if you specify Color and Size names in the set,
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to enable a buyer to choose a variation of interest.<br>
     *  <br>
     *  The order in which you specify the names and values also
     *  controls the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if you specify "Color", then "Size", and then
     *  "Sleeve Style" as names, the View Item page shows drop-down lists
     *  with those labels in that order. For "Size", if you specify
     *  "S", "M", and "L" as values, the View Item page
     *  shows the values in that order in the Size drop-down list.<br>
     *  <br>
     *  Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve recommendations for names and values.<br>
     *  <br>
     *  Required when Variations are specified in a new listing
     *  (e.g., in AddFixedPriceItem). Also required when you change
     *  variation specific names or values in ReviseFixedPriceItem and
     *  RelistFixedPriceItem.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToVariationSpecificsSet(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->variationSpecificsSet[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecificsSet
     *
     * The set of all variation specific names and values that can be
     *  applicable to the listing (at any time in its life cycle).
     *  This must include all names and values specified in the
     *  VariationSpecifics nodes.<br>
     *  <br>
     *  Required when Variations are specified in a new listing, and when you
     *  modify the name of a variation by using ModifyNameList.
     *  When you modify variation specific names, VariationSpecificsSet must
     *  include the new names plus the names that are not changing (but omit the old names), <br>
     *  <br>
     *  This set configures variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if you specify Color and Size names in the set,
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to enable a buyer to choose a variation of interest.<br>
     *  <br>
     *  The order in which you specify the names and values also
     *  controls the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if you specify "Color", then "Size", and then
     *  "Sleeve Style" as names, the View Item page shows drop-down lists
     *  with those labels in that order. For "Size", if you specify
     *  "S", "M", and "L" as values, the View Item page
     *  shows the values in that order in the Size drop-down list.<br>
     *  <br>
     *  Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve recommendations for names and values.<br>
     *  <br>
     *  Required when Variations are specified in a new listing
     *  (e.g., in AddFixedPriceItem). Also required when you change
     *  variation specific names or values in ReviseFixedPriceItem and
     *  RelistFixedPriceItem.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationSpecificsSet($index)
    {
        return isset($this->variationSpecificsSet[$index]);
    }

    /**
     * unset variationSpecificsSet
     *
     * The set of all variation specific names and values that can be
     *  applicable to the listing (at any time in its life cycle).
     *  This must include all names and values specified in the
     *  VariationSpecifics nodes.<br>
     *  <br>
     *  Required when Variations are specified in a new listing, and when you
     *  modify the name of a variation by using ModifyNameList.
     *  When you modify variation specific names, VariationSpecificsSet must
     *  include the new names plus the names that are not changing (but omit the old names), <br>
     *  <br>
     *  This set configures variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if you specify Color and Size names in the set,
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to enable a buyer to choose a variation of interest.<br>
     *  <br>
     *  The order in which you specify the names and values also
     *  controls the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if you specify "Color", then "Size", and then
     *  "Sleeve Style" as names, the View Item page shows drop-down lists
     *  with those labels in that order. For "Size", if you specify
     *  "S", "M", and "L" as values, the View Item page
     *  shows the values in that order in the Size drop-down list.<br>
     *  <br>
     *  Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve recommendations for names and values.<br>
     *  <br>
     *  Required when Variations are specified in a new listing
     *  (e.g., in AddFixedPriceItem). Also required when you change
     *  variation specific names or values in ReviseFixedPriceItem and
     *  RelistFixedPriceItem.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationSpecificsSet($index)
    {
        unset($this->variationSpecificsSet[$index]);
    }

    /**
     * Gets as variationSpecificsSet
     *
     * The set of all variation specific names and values that can be
     *  applicable to the listing (at any time in its life cycle).
     *  This must include all names and values specified in the
     *  VariationSpecifics nodes.<br>
     *  <br>
     *  Required when Variations are specified in a new listing, and when you
     *  modify the name of a variation by using ModifyNameList.
     *  When you modify variation specific names, VariationSpecificsSet must
     *  include the new names plus the names that are not changing (but omit the old names), <br>
     *  <br>
     *  This set configures variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if you specify Color and Size names in the set,
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to enable a buyer to choose a variation of interest.<br>
     *  <br>
     *  The order in which you specify the names and values also
     *  controls the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if you specify "Color", then "Size", and then
     *  "Sleeve Style" as names, the View Item page shows drop-down lists
     *  with those labels in that order. For "Size", if you specify
     *  "S", "M", and "L" as values, the View Item page
     *  shows the values in that order in the Size drop-down list.<br>
     *  <br>
     *  Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve recommendations for names and values.<br>
     *  <br>
     *  Required when Variations are specified in a new listing
     *  (e.g., in AddFixedPriceItem). Also required when you change
     *  variation specific names or values in ReviseFixedPriceItem and
     *  RelistFixedPriceItem.
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getVariationSpecificsSet()
    {
        return $this->variationSpecificsSet;
    }

    /**
     * Sets a new variationSpecificsSet
     *
     * The set of all variation specific names and values that can be
     *  applicable to the listing (at any time in its life cycle).
     *  This must include all names and values specified in the
     *  VariationSpecifics nodes.<br>
     *  <br>
     *  Required when Variations are specified in a new listing, and when you
     *  modify the name of a variation by using ModifyNameList.
     *  When you modify variation specific names, VariationSpecificsSet must
     *  include the new names plus the names that are not changing (but omit the old names), <br>
     *  <br>
     *  This set configures variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if you specify Color and Size names in the set,
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to enable a buyer to choose a variation of interest.<br>
     *  <br>
     *  The order in which you specify the names and values also
     *  controls the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if you specify "Color", then "Size", and then
     *  "Sleeve Style" as names, the View Item page shows drop-down lists
     *  with those labels in that order. For "Size", if you specify
     *  "S", "M", and "L" as values, the View Item page
     *  shows the values in that order in the Size drop-down list.<br>
     *  <br>
     *  Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve recommendations for names and values.<br>
     *  <br>
     *  Required when Variations are specified in a new listing
     *  (e.g., in AddFixedPriceItem). Also required when you change
     *  variation specific names or values in ReviseFixedPriceItem and
     *  RelistFixedPriceItem.
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecificsSet
     * @return self
     */
    public function setVariationSpecificsSet(array $variationSpecificsSet)
    {
        $this->variationSpecificsSet = $variationSpecificsSet;
        return $this;
    }

    /**
     * Adds as modifyName
     *
     * Modifies variation specific names when you revise or
     *  relist items.<br>
     *  <br>
     *  You can modify a variation specific name regardless of the quantity sold (i.e., no restrictions on whether the item has orders or order line items (transactions)).<br>
     *  <br>
     *  (Use VariationSpecifics to modify variation specific values.)<br>
     *  <br>
     *  You are not required to specify SKU, VariationSpecifics, and other variation details in the request when you are only modifying a variation specific name.
     *  <br>
     *  <br>
     *  Variation, Pictures, VariationSpecificsSet, or ModifyNameList (or all) need to be specified when the Variations node is specified in listing requests.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ModifyNameType $modifyName
     */
    public function addToModifyNameList(\Nogrod\eBaySDK\Trading\ModifyNameType $modifyName)
    {
        $this->modifyNameList[] = $modifyName;
        return $this;
    }

    /**
     * isset modifyNameList
     *
     * Modifies variation specific names when you revise or
     *  relist items.<br>
     *  <br>
     *  You can modify a variation specific name regardless of the quantity sold (i.e., no restrictions on whether the item has orders or order line items (transactions)).<br>
     *  <br>
     *  (Use VariationSpecifics to modify variation specific values.)<br>
     *  <br>
     *  You are not required to specify SKU, VariationSpecifics, and other variation details in the request when you are only modifying a variation specific name.
     *  <br>
     *  <br>
     *  Variation, Pictures, VariationSpecificsSet, or ModifyNameList (or all) need to be specified when the Variations node is specified in listing requests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModifyNameList($index)
    {
        return isset($this->modifyNameList[$index]);
    }

    /**
     * unset modifyNameList
     *
     * Modifies variation specific names when you revise or
     *  relist items.<br>
     *  <br>
     *  You can modify a variation specific name regardless of the quantity sold (i.e., no restrictions on whether the item has orders or order line items (transactions)).<br>
     *  <br>
     *  (Use VariationSpecifics to modify variation specific values.)<br>
     *  <br>
     *  You are not required to specify SKU, VariationSpecifics, and other variation details in the request when you are only modifying a variation specific name.
     *  <br>
     *  <br>
     *  Variation, Pictures, VariationSpecificsSet, or ModifyNameList (or all) need to be specified when the Variations node is specified in listing requests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModifyNameList($index)
    {
        unset($this->modifyNameList[$index]);
    }

    /**
     * Gets as modifyNameList
     *
     * Modifies variation specific names when you revise or
     *  relist items.<br>
     *  <br>
     *  You can modify a variation specific name regardless of the quantity sold (i.e., no restrictions on whether the item has orders or order line items (transactions)).<br>
     *  <br>
     *  (Use VariationSpecifics to modify variation specific values.)<br>
     *  <br>
     *  You are not required to specify SKU, VariationSpecifics, and other variation details in the request when you are only modifying a variation specific name.
     *  <br>
     *  <br>
     *  Variation, Pictures, VariationSpecificsSet, or ModifyNameList (or all) need to be specified when the Variations node is specified in listing requests.
     *
     * @return \Nogrod\eBaySDK\Trading\ModifyNameType[]
     */
    public function getModifyNameList()
    {
        return $this->modifyNameList;
    }

    /**
     * Sets a new modifyNameList
     *
     * Modifies variation specific names when you revise or
     *  relist items.<br>
     *  <br>
     *  You can modify a variation specific name regardless of the quantity sold (i.e., no restrictions on whether the item has orders or order line items (transactions)).<br>
     *  <br>
     *  (Use VariationSpecifics to modify variation specific values.)<br>
     *  <br>
     *  You are not required to specify SKU, VariationSpecifics, and other variation details in the request when you are only modifying a variation specific name.
     *  <br>
     *  <br>
     *  Variation, Pictures, VariationSpecificsSet, or ModifyNameList (or all) need to be specified when the Variations node is specified in listing requests.
     *
     * @param \Nogrod\eBaySDK\Trading\ModifyNameType[] $modifyNameList
     * @return self
     */
    public function setModifyNameList(array $modifyNameList)
    {
        $this->modifyNameList = $modifyNameList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVariation();
        if (null !== $value && !empty($this->getVariation())) {
            $writer->write(array_map(function ($v) {
                return ["Variation" => $v];
            }, $value));
        }
        $value = $this->getPictures();
        if (null !== $value && !empty($this->getPictures())) {
            $writer->write(array_map(function ($v) {
                return ["Pictures" => $v];
            }, $value));
        }
        $value = $this->getVariationSpecificsSet();
        if (null !== $value && !empty($this->getVariationSpecificsSet())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecificsSet", array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
        }
        $value = $this->getModifyNameList();
        if (null !== $value && !empty($this->getModifyNameList())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModifyNameList", array_map(function ($v) {
                return ["ModifyName" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Variation', true);
        if (null !== $value && !empty($value)) {
            $this->setVariation(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\VariationType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pictures', true);
        if (null !== $value && !empty($value)) {
            $this->setPictures(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PicturesType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecificsSet', true);
        if (null !== $value && !empty($value)) {
            $this->setVariationSpecificsSet(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModifyNameList', true);
        if (null !== $value && !empty($value)) {
            $this->setModifyNameList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ModifyNameType::fromKeyValue($v);
            }, $value));
        }
    }
}
