<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NameValueListType
 *
 * This type is used to set or identify either an Item Specific name/value pair for a category/item/variation, or to identify a Parts Compatibility name/value pair.
 * XSD Type: NameValueListType
 */
class NameValueListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Depending on the call and context, this value is either a name of an Item/Variation Specific, or a Parts Compatibility name.
     *  <br>
     *  <br>
     *  <b>For the AddItem and AddFixedPriceItem families of calls:</b> In the <b>Item.ItemSpecifics</b> context, the value in this field will either be the name of a required/recommended/optional item specific name for the category, or it may be a seller's customized item specific name.
     *  <br>
     *  <br>
     *  <b>For the <b>AddFixedPriceItem</b> family of calls:</b>
     *  In the <b>Compatibility.NameValueList</b> context, this value is a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For required and recommended item specifics that are returned in the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API, the seller should pass in the name of these item specifics just as they are shown in the <b>getItemAspectsForCategory</b> response. Similarly, for catalog-enabled categories, the seller should pass in the name of instance aspects just as they are shown in the <b>getItemAspectsForCategory</b> response. Instance aspects are additional details unique to a specific item or listing that a seller can include along with the product aspects that are already defined in the eBay catalog product associated with the listing. Instance aspects common to many catalog-enabled categories include 'Bundle Description' and 'Modification Description'. eBay US sellers who ship to California are required to pass in a 'California Prop 65 Warning' item specific if the item in the listing contains one or more chemicals known to be harmful to human health. This item specific is passed at the listing level for both single-variation and multiple-variation listings. The 'California Prop 65 Warning' is considered an instance specific because it will be retained on the listing even when the seller lists using an eBay catalog product. The 'California Prop 65 Warning' may be applicable in most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories.
     *  </span>
     *
     *  <span class="tablenote"><b>Note:</b>
     *  If Brand and MPN (Manufacturer Part Number) are being used to identify product variations in a multiple-variation listing, the Brand must be specified at the item level (<b>ItemSpecifics</b> container) and the MPN for each product variation must be specified at the variation level (<b>VariationSpecifics</b> container). The Brand name must be the same for all variations within a single listing.
     *  </span>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Depending on the call and context, this value is either the value of an Item/Variation Specific, a Parts Compatibility value, or a product identifier.<br>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b>
     *  Multiple values can only be specified for an Item Specific if the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>. If an item specific only supports a single value, only the first item specific value specified in the request will be used.
     *  <br>
     *  <br>
     *  For the <b>Compatibility.NameValueList</b> context, this is the corresponding value of a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The standard maximum length for the value of an item specific is 65, but the maximum allowed length increases for instance aspects such as 'Bundle Description' and 'Modification Description'. For item specifics with max lengths greater than 65, the actual max length will be returned in a corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.aspectMaxLength" target="_blank">aspectMaxLength</a> field. The maximum allowed length for the new 'California Prop 65 Warning' item specific is 800 characters. For more information about the 'California Prop 65 Warning' item specific, see the <b>ItemSpecifics.NameValueList</b> field description.
     *  </span>
     *
     * @var string[] $value
     */
    private $value = [

    ];

    /**
     * This enumerated value indicates whether the Item Specific was manually input or selected during listing/revision/re-listing time, or if the Item Specific name-value pair came from an eBay catalog product that the listing is associated with.
     *
     * @var string $source
     */
    private $source = null;

    /**
     * Gets as name
     *
     * Depending on the call and context, this value is either a name of an Item/Variation Specific, or a Parts Compatibility name.
     *  <br>
     *  <br>
     *  <b>For the AddItem and AddFixedPriceItem families of calls:</b> In the <b>Item.ItemSpecifics</b> context, the value in this field will either be the name of a required/recommended/optional item specific name for the category, or it may be a seller's customized item specific name.
     *  <br>
     *  <br>
     *  <b>For the <b>AddFixedPriceItem</b> family of calls:</b>
     *  In the <b>Compatibility.NameValueList</b> context, this value is a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For required and recommended item specifics that are returned in the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API, the seller should pass in the name of these item specifics just as they are shown in the <b>getItemAspectsForCategory</b> response. Similarly, for catalog-enabled categories, the seller should pass in the name of instance aspects just as they are shown in the <b>getItemAspectsForCategory</b> response. Instance aspects are additional details unique to a specific item or listing that a seller can include along with the product aspects that are already defined in the eBay catalog product associated with the listing. Instance aspects common to many catalog-enabled categories include 'Bundle Description' and 'Modification Description'. eBay US sellers who ship to California are required to pass in a 'California Prop 65 Warning' item specific if the item in the listing contains one or more chemicals known to be harmful to human health. This item specific is passed at the listing level for both single-variation and multiple-variation listings. The 'California Prop 65 Warning' is considered an instance specific because it will be retained on the listing even when the seller lists using an eBay catalog product. The 'California Prop 65 Warning' may be applicable in most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories.
     *  </span>
     *
     *  <span class="tablenote"><b>Note:</b>
     *  If Brand and MPN (Manufacturer Part Number) are being used to identify product variations in a multiple-variation listing, the Brand must be specified at the item level (<b>ItemSpecifics</b> container) and the MPN for each product variation must be specified at the variation level (<b>VariationSpecifics</b> container). The Brand name must be the same for all variations within a single listing.
     *  </span>
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Depending on the call and context, this value is either a name of an Item/Variation Specific, or a Parts Compatibility name.
     *  <br>
     *  <br>
     *  <b>For the AddItem and AddFixedPriceItem families of calls:</b> In the <b>Item.ItemSpecifics</b> context, the value in this field will either be the name of a required/recommended/optional item specific name for the category, or it may be a seller's customized item specific name.
     *  <br>
     *  <br>
     *  <b>For the <b>AddFixedPriceItem</b> family of calls:</b>
     *  In the <b>Compatibility.NameValueList</b> context, this value is a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For required and recommended item specifics that are returned in the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API, the seller should pass in the name of these item specifics just as they are shown in the <b>getItemAspectsForCategory</b> response. Similarly, for catalog-enabled categories, the seller should pass in the name of instance aspects just as they are shown in the <b>getItemAspectsForCategory</b> response. Instance aspects are additional details unique to a specific item or listing that a seller can include along with the product aspects that are already defined in the eBay catalog product associated with the listing. Instance aspects common to many catalog-enabled categories include 'Bundle Description' and 'Modification Description'. eBay US sellers who ship to California are required to pass in a 'California Prop 65 Warning' item specific if the item in the listing contains one or more chemicals known to be harmful to human health. This item specific is passed at the listing level for both single-variation and multiple-variation listings. The 'California Prop 65 Warning' is considered an instance specific because it will be retained on the listing even when the seller lists using an eBay catalog product. The 'California Prop 65 Warning' may be applicable in most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories.
     *  </span>
     *
     *  <span class="tablenote"><b>Note:</b>
     *  If Brand and MPN (Manufacturer Part Number) are being used to identify product variations in a multiple-variation listing, the Brand must be specified at the item level (<b>ItemSpecifics</b> container) and the MPN for each product variation must be specified at the variation level (<b>VariationSpecifics</b> container). The Brand name must be the same for all variations within a single listing.
     *  </span>
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as value
     *
     * Depending on the call and context, this value is either the value of an Item/Variation Specific, a Parts Compatibility value, or a product identifier.<br>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b>
     *  Multiple values can only be specified for an Item Specific if the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>. If an item specific only supports a single value, only the first item specific value specified in the request will be used.
     *  <br>
     *  <br>
     *  For the <b>Compatibility.NameValueList</b> context, this is the corresponding value of a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The standard maximum length for the value of an item specific is 65, but the maximum allowed length increases for instance aspects such as 'Bundle Description' and 'Modification Description'. For item specifics with max lengths greater than 65, the actual max length will be returned in a corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.aspectMaxLength" target="_blank">aspectMaxLength</a> field. The maximum allowed length for the new 'California Prop 65 Warning' item specific is 800 characters. For more information about the 'California Prop 65 Warning' item specific, see the <b>ItemSpecifics.NameValueList</b> field description.
     *  </span>
     *
     * @return self
     * @param string $value
     */
    public function addToValue($value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * Depending on the call and context, this value is either the value of an Item/Variation Specific, a Parts Compatibility value, or a product identifier.<br>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b>
     *  Multiple values can only be specified for an Item Specific if the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>. If an item specific only supports a single value, only the first item specific value specified in the request will be used.
     *  <br>
     *  <br>
     *  For the <b>Compatibility.NameValueList</b> context, this is the corresponding value of a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The standard maximum length for the value of an item specific is 65, but the maximum allowed length increases for instance aspects such as 'Bundle Description' and 'Modification Description'. For item specifics with max lengths greater than 65, the actual max length will be returned in a corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.aspectMaxLength" target="_blank">aspectMaxLength</a> field. The maximum allowed length for the new 'California Prop 65 Warning' item specific is 800 characters. For more information about the 'California Prop 65 Warning' item specific, see the <b>ItemSpecifics.NameValueList</b> field description.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * Depending on the call and context, this value is either the value of an Item/Variation Specific, a Parts Compatibility value, or a product identifier.<br>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b>
     *  Multiple values can only be specified for an Item Specific if the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>. If an item specific only supports a single value, only the first item specific value specified in the request will be used.
     *  <br>
     *  <br>
     *  For the <b>Compatibility.NameValueList</b> context, this is the corresponding value of a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The standard maximum length for the value of an item specific is 65, but the maximum allowed length increases for instance aspects such as 'Bundle Description' and 'Modification Description'. For item specifics with max lengths greater than 65, the actual max length will be returned in a corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.aspectMaxLength" target="_blank">aspectMaxLength</a> field. The maximum allowed length for the new 'California Prop 65 Warning' item specific is 800 characters. For more information about the 'California Prop 65 Warning' item specific, see the <b>ItemSpecifics.NameValueList</b> field description.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * Depending on the call and context, this value is either the value of an Item/Variation Specific, a Parts Compatibility value, or a product identifier.<br>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b>
     *  Multiple values can only be specified for an Item Specific if the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>. If an item specific only supports a single value, only the first item specific value specified in the request will be used.
     *  <br>
     *  <br>
     *  For the <b>Compatibility.NameValueList</b> context, this is the corresponding value of a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The standard maximum length for the value of an item specific is 65, but the maximum allowed length increases for instance aspects such as 'Bundle Description' and 'Modification Description'. For item specifics with max lengths greater than 65, the actual max length will be returned in a corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.aspectMaxLength" target="_blank">aspectMaxLength</a> field. The maximum allowed length for the new 'California Prop 65 Warning' item specific is 800 characters. For more information about the 'California Prop 65 Warning' item specific, see the <b>ItemSpecifics.NameValueList</b> field description.
     *  </span>
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Depending on the call and context, this value is either the value of an Item/Variation Specific, a Parts Compatibility value, or a product identifier.<br>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b>
     *  Multiple values can only be specified for an Item Specific if the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>. If an item specific only supports a single value, only the first item specific value specified in the request will be used.
     *  <br>
     *  <br>
     *  For the <b>Compatibility.NameValueList</b> context, this is the corresponding value of a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings.
     *  <br>
     *  <br>
     *  <b>For PlaceOffer:</b> Required if the line item being
     *  purchased is an item variation within a multiple-variation listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The standard maximum length for the value of an item specific is 65, but the maximum allowed length increases for instance aspects such as 'Bundle Description' and 'Modification Description'. For item specifics with max lengths greater than 65, the actual max length will be returned in a corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.aspectMaxLength" target="_blank">aspectMaxLength</a> field. The maximum allowed length for the new 'California Prop 65 Warning' item specific is 800 characters. For more information about the 'California Prop 65 Warning' item specific, see the <b>ItemSpecifics.NameValueList</b> field description.
     *  </span>
     *
     * @param string[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as source
     *
     * This enumerated value indicates whether the Item Specific was manually input or selected during listing/revision/re-listing time, or if the Item Specific name-value pair came from an eBay catalog product that the listing is associated with.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * This enumerated value indicates whether the Item Specific was manually input or selected during listing/revision/re-listing time, or if the Item Specific name-value pair came from an eBay catalog product that the listing is associated with.
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getValue();
        if (null !== $value && !empty($this->getValue())) {
            $writer->write(array_map(function ($v) {return ["Value" => $v];}, $value));
        }
        $value = $this->getSource();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Source", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value', true);
        if (null !== $value && !empty($value)) {
            $this->setValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Source');
        if (null !== $value) {
            $this->setSource($value);
        }
    }
}
