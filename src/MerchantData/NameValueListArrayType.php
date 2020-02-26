<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing NameValueListArrayType
 *
 * A list of one or more valid names and corresponding values. Currently
 *  used to identify Item Specifics and individual variations within a multiple-variation listing.
 * XSD Type: NameValueListArrayType
 */
class NameValueListArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <b>For the <b>AddItem</b> family of calls:</b>
     *  Contains the name and value(s) for an Item Specific.
     *  Only required when the <b>ItemSpecifics</b> container is
     *  specified.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The maximum number of item specifics that may be defined for a listing has increased from 30 to 45.
     *  </span><br>
     *  <b>For the AddFixedPriceItem family of calls:</b>
     *  The same NameValueList schema is used for the
     *  <b>ItemSpecifics</b> node, the <b>VariationSpecifics</b> node, and the
     *  <b>VariationSpecifcsSet</b> node.<br>
     *  <br>
     *  If the listing has variations, any name that you use in the
     *  <b>VariationSpecifics</b> and <b>VariationSpecificsSet</b> nodes can't be used
     *  in the <b>ItemSpecifics</b> node.<br>
     *  When you list with Item Variations:<br>
     *  <b></b>
     *  <ul>
     *  <li>Specify shared Item Specifics (e.g., Brand) in the <b>ItemSpecifics</b> node. </li>
     *  <li>Specify up to five <b>VariationSpecifics</b> in each Variation node. </li>
     *  <li>Specify all applicable names with all their supported values in the <b>VariationSpecificSet</b> node. </li>
     *  </ul>
     *  See the Variation sample in the
     *  <b>AddFixedPriceItem</b> call reference for examples.<br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the item being
     *  purchased includes Item Variations.
     *  <br>
     *  <br>
     *  <b>For AddToWatchList and RemoveFromWatchList:</b> The <b>ItemID</b> value of the multiple-variation listing and the name-value pair to identify each variation in the listing are required.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of August 30, 2018, California will require sellers to display a Proposition 65 warning on online retail sites if products contain chemicals and/or substances that may impact the health of California buyers. This requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories. The warning message can be customized by the seller, but should contain the following basic information:
     *  <ul>
     *  <li>The name of at least one listed chemical that prompted the warning</li>
     *  <li>Text stating that the product 'can expose you to' the chemical(s) in the product </li>
     *  <li>The URL for OEHHA's new Proposition 65 warnings website, which is <a href="www.P65Warnings.ca.gov" target="_blank">www.P65Warnings.ca.gov</a></li>
     *  </ul>
     *  Unlike standard item specifics that allow a maximum of 65 characters in the <b>Value</b> field, the matching value for the 'California Prop 65 Warning' item specific allows up to 800 characters of text. When a seller passes in this item specific, eBay will automatically insert a warning symbol icon for the listing.
     *  </span><br>
     *
     * @var \Nogrod\eBaySDK\MerchantData\NameValueListType[] $nameValueList
     */
    private $nameValueList = [
        
    ];

    /**
     * Adds as nameValueList
     *
     * <b>For the <b>AddItem</b> family of calls:</b>
     *  Contains the name and value(s) for an Item Specific.
     *  Only required when the <b>ItemSpecifics</b> container is
     *  specified.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The maximum number of item specifics that may be defined for a listing has increased from 30 to 45.
     *  </span><br>
     *  <b>For the AddFixedPriceItem family of calls:</b>
     *  The same NameValueList schema is used for the
     *  <b>ItemSpecifics</b> node, the <b>VariationSpecifics</b> node, and the
     *  <b>VariationSpecifcsSet</b> node.<br>
     *  <br>
     *  If the listing has variations, any name that you use in the
     *  <b>VariationSpecifics</b> and <b>VariationSpecificsSet</b> nodes can't be used
     *  in the <b>ItemSpecifics</b> node.<br>
     *  When you list with Item Variations:<br>
     *  <b></b>
     *  <ul>
     *  <li>Specify shared Item Specifics (e.g., Brand) in the <b>ItemSpecifics</b> node. </li>
     *  <li>Specify up to five <b>VariationSpecifics</b> in each Variation node. </li>
     *  <li>Specify all applicable names with all their supported values in the <b>VariationSpecificSet</b> node. </li>
     *  </ul>
     *  See the Variation sample in the
     *  <b>AddFixedPriceItem</b> call reference for examples.<br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the item being
     *  purchased includes Item Variations.
     *  <br>
     *  <br>
     *  <b>For AddToWatchList and RemoveFromWatchList:</b> The <b>ItemID</b> value of the multiple-variation listing and the name-value pair to identify each variation in the listing are required.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of August 30, 2018, California will require sellers to display a Proposition 65 warning on online retail sites if products contain chemicals and/or substances that may impact the health of California buyers. This requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories. The warning message can be customized by the seller, but should contain the following basic information:
     *  <ul>
     *  <li>The name of at least one listed chemical that prompted the warning</li>
     *  <li>Text stating that the product 'can expose you to' the chemical(s) in the product </li>
     *  <li>The URL for OEHHA's new Proposition 65 warnings website, which is <a href="www.P65Warnings.ca.gov" target="_blank">www.P65Warnings.ca.gov</a></li>
     *  </ul>
     *  Unlike standard item specifics that allow a maximum of 65 characters in the <b>Value</b> field, the matching value for the 'California Prop 65 Warning' item specific allows up to 800 characters of text. When a seller passes in this item specific, eBay will automatically insert a warning symbol icon for the listing.
     *  </span><br>
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList
     */
    public function addToNameValueList(\Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList)
    {
        $this->nameValueList[] = $nameValueList;
        return $this;
    }

    /**
     * isset nameValueList
     *
     * <b>For the <b>AddItem</b> family of calls:</b>
     *  Contains the name and value(s) for an Item Specific.
     *  Only required when the <b>ItemSpecifics</b> container is
     *  specified.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The maximum number of item specifics that may be defined for a listing has increased from 30 to 45.
     *  </span><br>
     *  <b>For the AddFixedPriceItem family of calls:</b>
     *  The same NameValueList schema is used for the
     *  <b>ItemSpecifics</b> node, the <b>VariationSpecifics</b> node, and the
     *  <b>VariationSpecifcsSet</b> node.<br>
     *  <br>
     *  If the listing has variations, any name that you use in the
     *  <b>VariationSpecifics</b> and <b>VariationSpecificsSet</b> nodes can't be used
     *  in the <b>ItemSpecifics</b> node.<br>
     *  When you list with Item Variations:<br>
     *  <b></b>
     *  <ul>
     *  <li>Specify shared Item Specifics (e.g., Brand) in the <b>ItemSpecifics</b> node. </li>
     *  <li>Specify up to five <b>VariationSpecifics</b> in each Variation node. </li>
     *  <li>Specify all applicable names with all their supported values in the <b>VariationSpecificSet</b> node. </li>
     *  </ul>
     *  See the Variation sample in the
     *  <b>AddFixedPriceItem</b> call reference for examples.<br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the item being
     *  purchased includes Item Variations.
     *  <br>
     *  <br>
     *  <b>For AddToWatchList and RemoveFromWatchList:</b> The <b>ItemID</b> value of the multiple-variation listing and the name-value pair to identify each variation in the listing are required.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of August 30, 2018, California will require sellers to display a Proposition 65 warning on online retail sites if products contain chemicals and/or substances that may impact the health of California buyers. This requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories. The warning message can be customized by the seller, but should contain the following basic information:
     *  <ul>
     *  <li>The name of at least one listed chemical that prompted the warning</li>
     *  <li>Text stating that the product 'can expose you to' the chemical(s) in the product </li>
     *  <li>The URL for OEHHA's new Proposition 65 warnings website, which is <a href="www.P65Warnings.ca.gov" target="_blank">www.P65Warnings.ca.gov</a></li>
     *  </ul>
     *  Unlike standard item specifics that allow a maximum of 65 characters in the <b>Value</b> field, the matching value for the 'California Prop 65 Warning' item specific allows up to 800 characters of text. When a seller passes in this item specific, eBay will automatically insert a warning symbol icon for the listing.
     *  </span><br>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameValueList($index)
    {
        return isset($this->nameValueList[$index]);
    }

    /**
     * unset nameValueList
     *
     * <b>For the <b>AddItem</b> family of calls:</b>
     *  Contains the name and value(s) for an Item Specific.
     *  Only required when the <b>ItemSpecifics</b> container is
     *  specified.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The maximum number of item specifics that may be defined for a listing has increased from 30 to 45.
     *  </span><br>
     *  <b>For the AddFixedPriceItem family of calls:</b>
     *  The same NameValueList schema is used for the
     *  <b>ItemSpecifics</b> node, the <b>VariationSpecifics</b> node, and the
     *  <b>VariationSpecifcsSet</b> node.<br>
     *  <br>
     *  If the listing has variations, any name that you use in the
     *  <b>VariationSpecifics</b> and <b>VariationSpecificsSet</b> nodes can't be used
     *  in the <b>ItemSpecifics</b> node.<br>
     *  When you list with Item Variations:<br>
     *  <b></b>
     *  <ul>
     *  <li>Specify shared Item Specifics (e.g., Brand) in the <b>ItemSpecifics</b> node. </li>
     *  <li>Specify up to five <b>VariationSpecifics</b> in each Variation node. </li>
     *  <li>Specify all applicable names with all their supported values in the <b>VariationSpecificSet</b> node. </li>
     *  </ul>
     *  See the Variation sample in the
     *  <b>AddFixedPriceItem</b> call reference for examples.<br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the item being
     *  purchased includes Item Variations.
     *  <br>
     *  <br>
     *  <b>For AddToWatchList and RemoveFromWatchList:</b> The <b>ItemID</b> value of the multiple-variation listing and the name-value pair to identify each variation in the listing are required.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of August 30, 2018, California will require sellers to display a Proposition 65 warning on online retail sites if products contain chemicals and/or substances that may impact the health of California buyers. This requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories. The warning message can be customized by the seller, but should contain the following basic information:
     *  <ul>
     *  <li>The name of at least one listed chemical that prompted the warning</li>
     *  <li>Text stating that the product 'can expose you to' the chemical(s) in the product </li>
     *  <li>The URL for OEHHA's new Proposition 65 warnings website, which is <a href="www.P65Warnings.ca.gov" target="_blank">www.P65Warnings.ca.gov</a></li>
     *  </ul>
     *  Unlike standard item specifics that allow a maximum of 65 characters in the <b>Value</b> field, the matching value for the 'California Prop 65 Warning' item specific allows up to 800 characters of text. When a seller passes in this item specific, eBay will automatically insert a warning symbol icon for the listing.
     *  </span><br>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameValueList($index)
    {
        unset($this->nameValueList[$index]);
    }

    /**
     * Gets as nameValueList
     *
     * <b>For the <b>AddItem</b> family of calls:</b>
     *  Contains the name and value(s) for an Item Specific.
     *  Only required when the <b>ItemSpecifics</b> container is
     *  specified.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The maximum number of item specifics that may be defined for a listing has increased from 30 to 45.
     *  </span><br>
     *  <b>For the AddFixedPriceItem family of calls:</b>
     *  The same NameValueList schema is used for the
     *  <b>ItemSpecifics</b> node, the <b>VariationSpecifics</b> node, and the
     *  <b>VariationSpecifcsSet</b> node.<br>
     *  <br>
     *  If the listing has variations, any name that you use in the
     *  <b>VariationSpecifics</b> and <b>VariationSpecificsSet</b> nodes can't be used
     *  in the <b>ItemSpecifics</b> node.<br>
     *  When you list with Item Variations:<br>
     *  <b></b>
     *  <ul>
     *  <li>Specify shared Item Specifics (e.g., Brand) in the <b>ItemSpecifics</b> node. </li>
     *  <li>Specify up to five <b>VariationSpecifics</b> in each Variation node. </li>
     *  <li>Specify all applicable names with all their supported values in the <b>VariationSpecificSet</b> node. </li>
     *  </ul>
     *  See the Variation sample in the
     *  <b>AddFixedPriceItem</b> call reference for examples.<br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the item being
     *  purchased includes Item Variations.
     *  <br>
     *  <br>
     *  <b>For AddToWatchList and RemoveFromWatchList:</b> The <b>ItemID</b> value of the multiple-variation listing and the name-value pair to identify each variation in the listing are required.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of August 30, 2018, California will require sellers to display a Proposition 65 warning on online retail sites if products contain chemicals and/or substances that may impact the health of California buyers. This requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories. The warning message can be customized by the seller, but should contain the following basic information:
     *  <ul>
     *  <li>The name of at least one listed chemical that prompted the warning</li>
     *  <li>Text stating that the product 'can expose you to' the chemical(s) in the product </li>
     *  <li>The URL for OEHHA's new Proposition 65 warnings website, which is <a href="www.P65Warnings.ca.gov" target="_blank">www.P65Warnings.ca.gov</a></li>
     *  </ul>
     *  Unlike standard item specifics that allow a maximum of 65 characters in the <b>Value</b> field, the matching value for the 'California Prop 65 Warning' item specific allows up to 800 characters of text. When a seller passes in this item specific, eBay will automatically insert a warning symbol icon for the listing.
     *  </span><br>
     *
     * @return \Nogrod\eBaySDK\MerchantData\NameValueListType[]
     */
    public function getNameValueList()
    {
        return $this->nameValueList;
    }

    /**
     * Sets a new nameValueList
     *
     * <b>For the <b>AddItem</b> family of calls:</b>
     *  Contains the name and value(s) for an Item Specific.
     *  Only required when the <b>ItemSpecifics</b> container is
     *  specified.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The maximum number of item specifics that may be defined for a listing has increased from 30 to 45.
     *  </span><br>
     *  <b>For the AddFixedPriceItem family of calls:</b>
     *  The same NameValueList schema is used for the
     *  <b>ItemSpecifics</b> node, the <b>VariationSpecifics</b> node, and the
     *  <b>VariationSpecifcsSet</b> node.<br>
     *  <br>
     *  If the listing has variations, any name that you use in the
     *  <b>VariationSpecifics</b> and <b>VariationSpecificsSet</b> nodes can't be used
     *  in the <b>ItemSpecifics</b> node.<br>
     *  When you list with Item Variations:<br>
     *  <b></b>
     *  <ul>
     *  <li>Specify shared Item Specifics (e.g., Brand) in the <b>ItemSpecifics</b> node. </li>
     *  <li>Specify up to five <b>VariationSpecifics</b> in each Variation node. </li>
     *  <li>Specify all applicable names with all their supported values in the <b>VariationSpecificSet</b> node. </li>
     *  </ul>
     *  See the Variation sample in the
     *  <b>AddFixedPriceItem</b> call reference for examples.<br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the item being
     *  purchased includes Item Variations.
     *  <br>
     *  <br>
     *  <b>For AddToWatchList and RemoveFromWatchList:</b> The <b>ItemID</b> value of the multiple-variation listing and the name-value pair to identify each variation in the listing are required.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of August 30, 2018, California will require sellers to display a Proposition 65 warning on online retail sites if products contain chemicals and/or substances that may impact the health of California buyers. This requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories. The warning message can be customized by the seller, but should contain the following basic information:
     *  <ul>
     *  <li>The name of at least one listed chemical that prompted the warning</li>
     *  <li>Text stating that the product 'can expose you to' the chemical(s) in the product </li>
     *  <li>The URL for OEHHA's new Proposition 65 warnings website, which is <a href="www.P65Warnings.ca.gov" target="_blank">www.P65Warnings.ca.gov</a></li>
     *  </ul>
     *  Unlike standard item specifics that allow a maximum of 65 characters in the <b>Value</b> field, the matching value for the 'California Prop 65 Warning' item specific allows up to 800 characters of text. When a seller passes in this item specific, eBay will automatically insert a warning symbol icon for the listing.
     *  </span><br>
     *
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType[] $nameValueList
     * @return self
     */
    public function setNameValueList(array $nameValueList)
    {
        $this->nameValueList = $nameValueList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNameValueList();
        if (null !== $value && !empty($this->getNameValueList())) {
            $writer->write(array_map(function ($v) {
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameValueList', true);
        if (null !== $value && !empty($value)) {
            $this->setNameValueList(array_map(function ($v) {
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
