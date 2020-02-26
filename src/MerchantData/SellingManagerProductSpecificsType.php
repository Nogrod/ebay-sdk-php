<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerProductSpecificsType
 *
 * This type is used by the <b>AddSellingManagerProduct</b> and <b>ReviseSellingManagerProduct</b> calls to add/revise listing-level Item Specifics and/or to define multiple variations for a new or existing Selling Manager Product record.
 *  <br><br>
 *  This type is also used by the respone of the <b>GetSellingManagerInventory</b> call.
 * XSD Type: SellingManagerProductSpecificsType
 */
class SellingManagerProductSpecificsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This optional field sets the primary eBay listing category for the Selling Manager Product. If the primary eBay listing category ID is not specified with <b>AddSellingManagerProduct</b> or <b>ReviseSellingManagerProduct</b> call, the seller can pass in this information with a subsequent <b>AddSellingManagerTemplate</b> call.
     *  <br><br>
     *  The <b>GetSuggestedCategories</b> or <b>GetCategories</b> call can be used to retrieve eBay leaf category IDs.
     *  <br><br>
     *  This field is returned in a <b>GetSellingManagerInventory</b> call
     *  only if it is defined for the Selling Manager Product.
     *
     * @var string $primaryCategoryID
     */
    private $primaryCategoryID = null;

    /**
     * This container is used to define/revise multiple variations for a new or existing Selling Manager Product record. This container is only applicable if the new or existing Selling Manager Product record will ultimately be converted to a multiple-variation, fixed-price listing on an eBay Marketplace.
     *  <br><br>
     *  Note that Item Specifics that all product variations share are actually set in the <b>ItemSpecifics</b> container, the <b>Variations.Pictures</b> container is used to specify URLs for all pictures that will end up in the listing, the <b>Variations.VariationSpecificsSet</b> container is used to set all available options for the aspects that all product variations share (such as 'Color' and 'Size'), and a <b>Variations.Variation</b> container is need to define each variation, including its defining aspects (such as 'Blue, Large'), quantity available, price, SKU value (if applicable) and any eBay Product ID (ePID) or GTIN (UPC, EAN, ISBN) value asssociated with the variation.
     *  <br><br>
     *  Not all eBay listing categories support multiple-variation listings, so it might be a good idea to run a <b>GetCategoryFeatures</b> call on one or more categories, and include a <b>FeatureID</b> filter set to a value of <code>ItemSpecificsEnabled</code>. If the listing category supports multiple-variation listings, a <code>ItemSpecificsEnabled</code> tag will get returned for the category with a value of <code>Enabled</code>.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if variations are defined in the Selling Manager Product.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VariationsType $variations
     */
    private $variations = null;

    /**
     * This container is used to define/revise listing-level Item Specifics for a single-variation or multiple-variation listing. Item Specifics give sellers a structured way to describe details of their items through name-value pairs.
     *  <br><br>
     *  Each Item Specific requires its own <b>ItemSpecifics.NameValueList</b> container, and it is possible that a single Item Specific can more than one applicable value. An example of this would be a 'Features' Item Specific. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Many listing categories have mandatory Item Specifics, and just about all listing categories have recommended Item Specifics. To retrieve mandatory and recommended Item Specifics for a category, the <b>GetCategorySpecifics</b> call can be used.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if Item Specifics are defined for the Selling Manager Product.
     *
     * @var \Nogrod\eBaySDK\MerchantData\NameValueListType[] $itemSpecifics
     */
    private $itemSpecifics = null;

    /**
     * Gets as primaryCategoryID
     *
     * This optional field sets the primary eBay listing category for the Selling Manager Product. If the primary eBay listing category ID is not specified with <b>AddSellingManagerProduct</b> or <b>ReviseSellingManagerProduct</b> call, the seller can pass in this information with a subsequent <b>AddSellingManagerTemplate</b> call.
     *  <br><br>
     *  The <b>GetSuggestedCategories</b> or <b>GetCategories</b> call can be used to retrieve eBay leaf category IDs.
     *  <br><br>
     *  This field is returned in a <b>GetSellingManagerInventory</b> call
     *  only if it is defined for the Selling Manager Product.
     *
     * @return string
     */
    public function getPrimaryCategoryID()
    {
        return $this->primaryCategoryID;
    }

    /**
     * Sets a new primaryCategoryID
     *
     * This optional field sets the primary eBay listing category for the Selling Manager Product. If the primary eBay listing category ID is not specified with <b>AddSellingManagerProduct</b> or <b>ReviseSellingManagerProduct</b> call, the seller can pass in this information with a subsequent <b>AddSellingManagerTemplate</b> call.
     *  <br><br>
     *  The <b>GetSuggestedCategories</b> or <b>GetCategories</b> call can be used to retrieve eBay leaf category IDs.
     *  <br><br>
     *  This field is returned in a <b>GetSellingManagerInventory</b> call
     *  only if it is defined for the Selling Manager Product.
     *
     * @param string $primaryCategoryID
     * @return self
     */
    public function setPrimaryCategoryID($primaryCategoryID)
    {
        $this->primaryCategoryID = $primaryCategoryID;
        return $this;
    }

    /**
     * Gets as variations
     *
     * This container is used to define/revise multiple variations for a new or existing Selling Manager Product record. This container is only applicable if the new or existing Selling Manager Product record will ultimately be converted to a multiple-variation, fixed-price listing on an eBay Marketplace.
     *  <br><br>
     *  Note that Item Specifics that all product variations share are actually set in the <b>ItemSpecifics</b> container, the <b>Variations.Pictures</b> container is used to specify URLs for all pictures that will end up in the listing, the <b>Variations.VariationSpecificsSet</b> container is used to set all available options for the aspects that all product variations share (such as 'Color' and 'Size'), and a <b>Variations.Variation</b> container is need to define each variation, including its defining aspects (such as 'Blue, Large'), quantity available, price, SKU value (if applicable) and any eBay Product ID (ePID) or GTIN (UPC, EAN, ISBN) value asssociated with the variation.
     *  <br><br>
     *  Not all eBay listing categories support multiple-variation listings, so it might be a good idea to run a <b>GetCategoryFeatures</b> call on one or more categories, and include a <b>FeatureID</b> filter set to a value of <code>ItemSpecificsEnabled</code>. If the listing category supports multiple-variation listings, a <code>ItemSpecificsEnabled</code> tag will get returned for the category with a value of <code>Enabled</code>.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if variations are defined in the Selling Manager Product.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VariationsType
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * Sets a new variations
     *
     * This container is used to define/revise multiple variations for a new or existing Selling Manager Product record. This container is only applicable if the new or existing Selling Manager Product record will ultimately be converted to a multiple-variation, fixed-price listing on an eBay Marketplace.
     *  <br><br>
     *  Note that Item Specifics that all product variations share are actually set in the <b>ItemSpecifics</b> container, the <b>Variations.Pictures</b> container is used to specify URLs for all pictures that will end up in the listing, the <b>Variations.VariationSpecificsSet</b> container is used to set all available options for the aspects that all product variations share (such as 'Color' and 'Size'), and a <b>Variations.Variation</b> container is need to define each variation, including its defining aspects (such as 'Blue, Large'), quantity available, price, SKU value (if applicable) and any eBay Product ID (ePID) or GTIN (UPC, EAN, ISBN) value asssociated with the variation.
     *  <br><br>
     *  Not all eBay listing categories support multiple-variation listings, so it might be a good idea to run a <b>GetCategoryFeatures</b> call on one or more categories, and include a <b>FeatureID</b> filter set to a value of <code>ItemSpecificsEnabled</code>. If the listing category supports multiple-variation listings, a <code>ItemSpecificsEnabled</code> tag will get returned for the category with a value of <code>Enabled</code>.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if variations are defined in the Selling Manager Product.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VariationsType $variations
     * @return self
     */
    public function setVariations(\Nogrod\eBaySDK\MerchantData\VariationsType $variations)
    {
        $this->variations = $variations;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This container is used to define/revise listing-level Item Specifics for a single-variation or multiple-variation listing. Item Specifics give sellers a structured way to describe details of their items through name-value pairs.
     *  <br><br>
     *  Each Item Specific requires its own <b>ItemSpecifics.NameValueList</b> container, and it is possible that a single Item Specific can more than one applicable value. An example of this would be a 'Features' Item Specific. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Many listing categories have mandatory Item Specifics, and just about all listing categories have recommended Item Specifics. To retrieve mandatory and recommended Item Specifics for a category, the <b>GetCategorySpecifics</b> call can be used.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if Item Specifics are defined for the Selling Manager Product.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList
     */
    public function addToItemSpecifics(\Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList)
    {
        $this->itemSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset itemSpecifics
     *
     * This container is used to define/revise listing-level Item Specifics for a single-variation or multiple-variation listing. Item Specifics give sellers a structured way to describe details of their items through name-value pairs.
     *  <br><br>
     *  Each Item Specific requires its own <b>ItemSpecifics.NameValueList</b> container, and it is possible that a single Item Specific can more than one applicable value. An example of this would be a 'Features' Item Specific. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Many listing categories have mandatory Item Specifics, and just about all listing categories have recommended Item Specifics. To retrieve mandatory and recommended Item Specifics for a category, the <b>GetCategorySpecifics</b> call can be used.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if Item Specifics are defined for the Selling Manager Product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecifics($index)
    {
        return isset($this->itemSpecifics[$index]);
    }

    /**
     * unset itemSpecifics
     *
     * This container is used to define/revise listing-level Item Specifics for a single-variation or multiple-variation listing. Item Specifics give sellers a structured way to describe details of their items through name-value pairs.
     *  <br><br>
     *  Each Item Specific requires its own <b>ItemSpecifics.NameValueList</b> container, and it is possible that a single Item Specific can more than one applicable value. An example of this would be a 'Features' Item Specific. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Many listing categories have mandatory Item Specifics, and just about all listing categories have recommended Item Specifics. To retrieve mandatory and recommended Item Specifics for a category, the <b>GetCategorySpecifics</b> call can be used.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if Item Specifics are defined for the Selling Manager Product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecifics($index)
    {
        unset($this->itemSpecifics[$index]);
    }

    /**
     * Gets as itemSpecifics
     *
     * This container is used to define/revise listing-level Item Specifics for a single-variation or multiple-variation listing. Item Specifics give sellers a structured way to describe details of their items through name-value pairs.
     *  <br><br>
     *  Each Item Specific requires its own <b>ItemSpecifics.NameValueList</b> container, and it is possible that a single Item Specific can more than one applicable value. An example of this would be a 'Features' Item Specific. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Many listing categories have mandatory Item Specifics, and just about all listing categories have recommended Item Specifics. To retrieve mandatory and recommended Item Specifics for a category, the <b>GetCategorySpecifics</b> call can be used.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if Item Specifics are defined for the Selling Manager Product.
     *
     * @return \Nogrod\eBaySDK\MerchantData\NameValueListType[]
     */
    public function getItemSpecifics()
    {
        return $this->itemSpecifics;
    }

    /**
     * Sets a new itemSpecifics
     *
     * This container is used to define/revise listing-level Item Specifics for a single-variation or multiple-variation listing. Item Specifics give sellers a structured way to describe details of their items through name-value pairs.
     *  <br><br>
     *  Each Item Specific requires its own <b>ItemSpecifics.NameValueList</b> container, and it is possible that a single Item Specific can more than one applicable value. An example of this would be a 'Features' Item Specific. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Many listing categories have mandatory Item Specifics, and just about all listing categories have recommended Item Specifics. To retrieve mandatory and recommended Item Specifics for a category, the <b>GetCategorySpecifics</b> call can be used.
     *  <br><br>
     *  This container is returned in a <b>GetSellingManagerInventory</b> call only if Item Specifics are defined for the Selling Manager Product.
     *
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType[] $itemSpecifics
     * @return self
     */
    public function setItemSpecifics(array $itemSpecifics)
    {
        $this->itemSpecifics = $itemSpecifics;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPrimaryCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrimaryCategoryID", $value);
        }
        $value = $this->getVariations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Variations", $value);
        }
        $value = $this->getItemSpecifics();
        if (null !== $value && !empty($this->getItemSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecifics", array_map(function ($v) {
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrimaryCategoryID');
        if (null !== $value) {
            $this->setPrimaryCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Variations');
        if (null !== $value) {
            $this->setVariations(\Nogrod\eBaySDK\MerchantData\VariationsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setItemSpecifics(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\NameValueListType::fromKeyValue($v);
            }, $value));
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
