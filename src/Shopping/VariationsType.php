<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationsType
 *
 * Variations are multiple similar (but not identical) items in a
 *  single fixed-price listing.
 *  For example, a single listing could contain multiple items of the
 *  same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can have its own quantity and
 *  price. For example, a listing could include 10 "Blue, Large"
 *  variations and 20 "Black, Medium" variations.
 * XSD Type: VariationsType
 */
class VariationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains data that distinguishes one variation from another.
     *  For example, if the items vary by color and size, each Variation
     *  node specifies a combination of one of those colors and
     *  sizes. The quantity and price for each variation is also shown in the <b>Variation</b> container
     *
     * @var \Nogrod\eBaySDK\Shopping\VariationType[] $variation
     */
    private $variation = [

    ];

    /**
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as 'Color'. For example, if a listing
     *  has blue and black color variations, a listing could specify the
     *  name 'Color' as an organizing mechanism for all the pictures,
     *  and then include a set of pictures for the blue variations and
     *  another set of pictures for the black variations.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is currently returned for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @var \Nogrod\eBaySDK\Shopping\PicturesType[] $pictures
     */
    private $pictures = [

    ];

    /**
     * A list of all variation names and values that are defined on
     *  the item. This could include values that were previously
     *  defined (but no longer for sale).<br>
     *  <br>
     *  eBay uses this list to configure variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if 'Color' and 'Size' are names in the list, then
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to help a buyer choose a variation of interest.<br>
     *  <br>
     *  The order in which the names and values are returned
     *  matches the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if the names "Color", then "Size", and then
     *  "Sleeve Style" are returned, the View Item page shows drop-down
     *  lists with those labels in that order. For "Size", if the values
     *  returned are "S", "M", and then "L", the View Item page
     *  shows the values in that order in the Size drop-down list.
     *
     * @var \Nogrod\eBaySDK\Shopping\NameValueListType[] $variationSpecificsSet
     */
    private $variationSpecificsSet = null;

    /**
     * Adds as variation
     *
     * Contains data that distinguishes one variation from another.
     *  For example, if the items vary by color and size, each Variation
     *  node specifies a combination of one of those colors and
     *  sizes. The quantity and price for each variation is also shown in the <b>Variation</b> container
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\VariationType $variation
     */
    public function addToVariation(\Nogrod\eBaySDK\Shopping\VariationType $variation)
    {
        $this->variation[] = $variation;
        return $this;
    }

    /**
     * isset variation
     *
     * Contains data that distinguishes one variation from another.
     *  For example, if the items vary by color and size, each Variation
     *  node specifies a combination of one of those colors and
     *  sizes. The quantity and price for each variation is also shown in the <b>Variation</b> container
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
     * Contains data that distinguishes one variation from another.
     *  For example, if the items vary by color and size, each Variation
     *  node specifies a combination of one of those colors and
     *  sizes. The quantity and price for each variation is also shown in the <b>Variation</b> container
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
     * Contains data that distinguishes one variation from another.
     *  For example, if the items vary by color and size, each Variation
     *  node specifies a combination of one of those colors and
     *  sizes. The quantity and price for each variation is also shown in the <b>Variation</b> container
     *
     * @return \Nogrod\eBaySDK\Shopping\VariationType[]
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Sets a new variation
     *
     * Contains data that distinguishes one variation from another.
     *  For example, if the items vary by color and size, each Variation
     *  node specifies a combination of one of those colors and
     *  sizes. The quantity and price for each variation is also shown in the <b>Variation</b> container
     *
     * @param \Nogrod\eBaySDK\Shopping\VariationType[] $variation
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
     *  variation specifics, such as 'Color'. For example, if a listing
     *  has blue and black color variations, a listing could specify the
     *  name 'Color' as an organizing mechanism for all the pictures,
     *  and then include a set of pictures for the blue variations and
     *  another set of pictures for the black variations.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is currently returned for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\PicturesType $pictures
     */
    public function addToPictures(\Nogrod\eBaySDK\Shopping\PicturesType $pictures)
    {
        $this->pictures[] = $pictures;
        return $this;
    }

    /**
     * isset pictures
     *
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as 'Color'. For example, if a listing
     *  has blue and black color variations, a listing could specify the
     *  name 'Color' as an organizing mechanism for all the pictures,
     *  and then include a set of pictures for the blue variations and
     *  another set of pictures for the black variations.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is currently returned for a listing.
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
     *  variation specifics, such as 'Color'. For example, if a listing
     *  has blue and black color variations, a listing could specify the
     *  name 'Color' as an organizing mechanism for all the pictures,
     *  and then include a set of pictures for the blue variations and
     *  another set of pictures for the black variations.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is currently returned for a listing.
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
     *  variation specifics, such as 'Color'. For example, if a listing
     *  has blue and black color variations, a listing could specify the
     *  name 'Color' as an organizing mechanism for all the pictures,
     *  and then include a set of pictures for the blue variations and
     *  another set of pictures for the black variations.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is currently returned for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @return \Nogrod\eBaySDK\Shopping\PicturesType[]
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Sets a new pictures
     *
     * Contains a set of pictures that correspond to one of the
     *  variation specifics, such as 'Color'. For example, if a listing
     *  has blue and black color variations, a listing could specify the
     *  name 'Color' as an organizing mechanism for all the pictures,
     *  and then include a set of pictures for the blue variations and
     *  another set of pictures for the black variations.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Only one Pictures node is currently returned for a listing.
     *  However, the node has been defined as unbounded (repeatable) in
     *  the schema to allow for different use cases for some calls or sites
     *  in the future.</span>
     *
     * @param \Nogrod\eBaySDK\Shopping\PicturesType[] $pictures
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
     * A list of all variation names and values that are defined on
     *  the item. This could include values that were previously
     *  defined (but no longer for sale).<br>
     *  <br>
     *  eBay uses this list to configure variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if 'Color' and 'Size' are names in the list, then
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to help a buyer choose a variation of interest.<br>
     *  <br>
     *  The order in which the names and values are returned
     *  matches the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if the names "Color", then "Size", and then
     *  "Sleeve Style" are returned, the View Item page shows drop-down
     *  lists with those labels in that order. For "Size", if the values
     *  returned are "S", "M", and then "L", the View Item page
     *  shows the values in that order in the Size drop-down list.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList
     */
    public function addToVariationSpecificsSet(\Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList)
    {
        $this->variationSpecificsSet[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecificsSet
     *
     * A list of all variation names and values that are defined on
     *  the item. This could include values that were previously
     *  defined (but no longer for sale).<br>
     *  <br>
     *  eBay uses this list to configure variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if 'Color' and 'Size' are names in the list, then
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to help a buyer choose a variation of interest.<br>
     *  <br>
     *  The order in which the names and values are returned
     *  matches the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if the names "Color", then "Size", and then
     *  "Sleeve Style" are returned, the View Item page shows drop-down
     *  lists with those labels in that order. For "Size", if the values
     *  returned are "S", "M", and then "L", the View Item page
     *  shows the values in that order in the Size drop-down list.
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
     * A list of all variation names and values that are defined on
     *  the item. This could include values that were previously
     *  defined (but no longer for sale).<br>
     *  <br>
     *  eBay uses this list to configure variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if 'Color' and 'Size' are names in the list, then
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to help a buyer choose a variation of interest.<br>
     *  <br>
     *  The order in which the names and values are returned
     *  matches the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if the names "Color", then "Size", and then
     *  "Sleeve Style" are returned, the View Item page shows drop-down
     *  lists with those labels in that order. For "Size", if the values
     *  returned are "S", "M", and then "L", the View Item page
     *  shows the values in that order in the Size drop-down list.
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
     * A list of all variation names and values that are defined on
     *  the item. This could include values that were previously
     *  defined (but no longer for sale).<br>
     *  <br>
     *  eBay uses this list to configure variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if 'Color' and 'Size' are names in the list, then
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to help a buyer choose a variation of interest.<br>
     *  <br>
     *  The order in which the names and values are returned
     *  matches the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if the names "Color", then "Size", and then
     *  "Sleeve Style" are returned, the View Item page shows drop-down
     *  lists with those labels in that order. For "Size", if the values
     *  returned are "S", "M", and then "L", the View Item page
     *  shows the values in that order in the Size drop-down list.
     *
     * @return \Nogrod\eBaySDK\Shopping\NameValueListType[]
     */
    public function getVariationSpecificsSet()
    {
        return $this->variationSpecificsSet;
    }

    /**
     * Sets a new variationSpecificsSet
     *
     * A list of all variation names and values that are defined on
     *  the item. This could include values that were previously
     *  defined (but no longer for sale).<br>
     *  <br>
     *  eBay uses this list to configure variation selection widgets
     *  that appear on eBay's View Item page.
     *  For example, if 'Color' and 'Size' are names in the list, then
     *  eBay's View Item page displays Color and Size drop-down lists
     *  to help a buyer choose a variation of interest.<br>
     *  <br>
     *  The order in which the names and values are returned
     *  matches the order in which the selection widgets appear on
     *  the View Item page.
     *  For example, if the names "Color", then "Size", and then
     *  "Sleeve Style" are returned, the View Item page shows drop-down
     *  lists with those labels in that order. For "Size", if the values
     *  returned are "S", "M", and then "L", the View Item page
     *  shows the values in that order in the Size drop-down list.
     *
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType[] $variationSpecificsSet
     * @return self
     */
    public function setVariationSpecificsSet(array $variationSpecificsSet)
    {
        $this->variationSpecificsSet = $variationSpecificsSet;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
                return \Nogrod\eBaySDK\Shopping\VariationType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pictures', true);
        if (null !== $value && !empty($value)) {
            $this->setPictures(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\PicturesType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecificsSet', true);
        if (null !== $value && !empty($value)) {
            $this->setVariationSpecificsSet(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\NameValueListType::fromKeyValue($v);
            }, $value));
        }
    }
}
