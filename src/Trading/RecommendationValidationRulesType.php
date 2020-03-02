<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RecommendationValidationRulesType
 *
 * This type is used by the <b>ValidationRules</b> containers returned in the <b>GetCategorySpecifics</b> response, which contains some rules and limits for the recommended Item Specific name (specified in the <b>NameRecommendation.Name</b> field) and corresponding value(s) (specified in the <b>ValueRecommendation.Value</b> field). These rules and limits will apply when the recommended Item Specific is subsequently used in an Add/Revise/Relist call.
 * XSD Type: RecommendationValidationRulesType
 */
class RecommendationValidationRulesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The data type (e.g., date) that eBay expects the value to
     *  adhere to in listing requests.
     *  Only returned if the data type is not Text.
     *  In some cases, more details about the data type are returned
     *  in the <b>ValueFormat</b> field.<br>
     *  <br>
     *  As buyers may search on the value you specify in <b>AddItem</b>,
     *  the ISBN, UPC, or EAN should match the value that was specified by
     *  the publisher or manufacturer.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  The <code>Numeric</code> enumeration value is returned for whole integers (no decimal point), and the <code>Decimal</code> enumeration value is returned for numbers with decimals.
     *  </span>
     *
     * @var string $valueType
     */
    private $valueType = null;

    /**
     * Minimum number of values that you can specify for this Item Specific
     *  in listing requests. Not returned if zero (0).<br>
     *  <br>
     *  If this field is returned, it indicates that the Item Specific is required
     *  in listing requests in the corresponding category.
     *  If the <b>Relationship</b> field is also present, it means this Item Specific is
     *  required when you specify its parent value in listing requests.
     *
     * @var int $minValues
     */
    private $minValues = null;

    /**
     * Maximum number of values that you can specify for this Item Specific
     *  in listing requests (like AddItem) in the specified
     *  category.<br>
     *  <br>
     *  Most Item Specifics can only have one value. When this is
     *  greater than 1, your application can present the value
     *  recommendations (if any) as a multi-select list to the seller.
     *  (See <b>SelectionMode</b> to determine whether the seller needs to
     *  choose from eBay's recommendations or not.)
     *
     * @var int $maxValues
     */
    private $maxValues = null;

    /**
     * Controls whether you can specify your own name and value
     *  in listing requests, or if you need to use a name and/or value
     *  that eBay has defined.
     *
     * @var string $selectionMode
     */
    private $selectionMode = null;

    /**
     * The value returned in this field will indicate if the item specific value is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Currently, the <b>AspectUsage</b> field will only be returned for some item/instance aspects (and not product aspects). Examples of common instance aspects that are shared by many eBay categories include 'Custom Bundle', 'Bundle Description', 'Modified Item', 'Modification Description', and 'California Prop 65 Warning'. Many instance aspect values are allowed more characters than the standard 65 max character threshold, and sellers can look at the corresponding <b>MaxValueLength</b> field to get the maximum number of characters allowed for that particular instance aspect value.
     *  </span>
     *
     * @var string $aspectUsage
     */
    private $aspectUsage = null;

    /**
     * This integer value will state the maximum length of the instance aspect's value. The seller must make sure not to exceed this value when setting instance aspects on a listing. This field is only returned for instance aspects (<b>AspectUsage</b>=<code>Instance</code>). The standard maximum length for an item specific value is 65 characters.
     *
     * @var int $maxValueLength
     */
    private $maxValueLength = null;

    /**
     * The enumeration value returned in this field will indicate whether or not the corresponding product brand requires listings within that category to be associated with an eBay catalog product. To create a listing that is associated with an eBay catalog product, the seller uses the <b>ProductListingDetails</b> container of the <b>AddItem</b> call. To find a matching product in the eBay catalog, the seller can use the new <b>eBay Catalog API</b> or <b>FindProducts</b> call of the <b>eBay Shopping API</b>.
     *  <br>
     *  <br>
     *  This field is only returned for the 'Brand' <b>NameRecommendation</b> container, and only if that particular product brand within that Product-Based Shopping Experience-enabled category requires a catalog product.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories (and brands within those categories), the <b>ValidationRules.ProductRequired</b> field will not get returned for any brands within any eBay category. Due to this fact, the <b>ProductRequired</b> field is currently not applicable.
     *  </span>
     *
     * @var string $productRequired
     */
    private $productRequired = null;

    /**
     * This field is returned for each item specific that is returned in the response. The enumeration value returned will indicate whether the item specific is required, recommended, or optional.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Previously, returned item specifics were only 'marked' as required or optional. With the introduction of this new field, eBay is able to specify to sellers which item specifics are highly recommended, although not required. The item specifics that are recommended can possibly improve search results and/or sales conversion if the seller includes them in the listing.
     *  </span>
     *
     * @var string $usageConstraint
     */
    private $usageConstraint = null;

    /**
     * Indicates eBay's confidence that this is the right name or value,
     *  given the data you specified your request. The confidence is based
     *  on historical items in the same category, with similar titles
     *  (if specified).<br>
     *  <br>
     *  This field is only returned when <b>IncludeConfidence</b> is included in the request and set to <code>true</code>.
     *  This field is not returned when <b>SelectionMode</b> is set to <code>Prefilled</code>.
     *
     * @var int $confidence
     */
    private $confidence = null;

    /**
     * Indicates the Item Specific's logical dependency on another
     *  Item Specific, if any.
     *  <br>
     *  <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=XL would
     *  mean something different to buyers when
     *  Size Type=Juniors or Size Type=Regular. <br>
     *  <br>
     *  Or in the US (in the future), a list of cities can vary depending
     *  on the state, so State could be recommended as a parent of City.<br>
     *  <br>
     *  Currently, categories only recommend a maximum of one parent
     *  for an Item Specific.
     *  For example, Size=XL could have a Size Type=Juniors
     *  parent in a Juniors clothing category.
     *  In the future, some categories may recommend multiple parents.
     *  For example, City=Mountain View could have parents like
     *  State=California, State=New York, and State=North Carolina.<br>
     *  <br>
     *  If an Item Specific has value dependencies (i.e., if it has value recommendations that contain <b>Relationship</b>), then
     *  all of its value recommendations are returned (regardless of the
     *  number you specified in <b>MaxValuesPerName</b>).
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueRelationshipType[] $relationship
     */
    private $relationship = [
        
    ];

    /**
     * Indicates whether the name (e.g., Color) can (or must) be used to
     *  classify the variation pictures.
     *
     * @var string $variationPicture
     */
    private $variationPicture = null;

    /**
     * Indicates whether the recommended name/value pair can be used in
     *  an <b>Item.Variations</b> container in a fixed-price listing call.
     *  For example, a given category could disable a name like Brand
     *  in variation specifics (if Brand is only allowed in the item specifics at the Item level). The same category could
     *  enable a name like Size for variation specifics
     *  (in addition to recommending it for item specifics).
     *  If not returned, then the name/value can be used for
     *  both variation specifics and item specifics.
     *
     * @var string $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * The format of the data type (e.g., date format) that eBay
     *  expects the item specific's value to adhere to in listing requests.
     *  A data type identified by the <b>ValueType</b> field may have different
     *  representations, and <b>ValueFormat</b> specifies the precise format
     *  that is required.
     *
     * @var string $valueFormat
     */
    private $valueFormat = null;

    /**
     * Gets as valueType
     *
     * The data type (e.g., date) that eBay expects the value to
     *  adhere to in listing requests.
     *  Only returned if the data type is not Text.
     *  In some cases, more details about the data type are returned
     *  in the <b>ValueFormat</b> field.<br>
     *  <br>
     *  As buyers may search on the value you specify in <b>AddItem</b>,
     *  the ISBN, UPC, or EAN should match the value that was specified by
     *  the publisher or manufacturer.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  The <code>Numeric</code> enumeration value is returned for whole integers (no decimal point), and the <code>Decimal</code> enumeration value is returned for numbers with decimals.
     *  </span>
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Sets a new valueType
     *
     * The data type (e.g., date) that eBay expects the value to
     *  adhere to in listing requests.
     *  Only returned if the data type is not Text.
     *  In some cases, more details about the data type are returned
     *  in the <b>ValueFormat</b> field.<br>
     *  <br>
     *  As buyers may search on the value you specify in <b>AddItem</b>,
     *  the ISBN, UPC, or EAN should match the value that was specified by
     *  the publisher or manufacturer.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  The <code>Numeric</code> enumeration value is returned for whole integers (no decimal point), and the <code>Decimal</code> enumeration value is returned for numbers with decimals.
     *  </span>
     *
     * @param string $valueType
     * @return self
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
        return $this;
    }

    /**
     * Gets as minValues
     *
     * Minimum number of values that you can specify for this Item Specific
     *  in listing requests. Not returned if zero (0).<br>
     *  <br>
     *  If this field is returned, it indicates that the Item Specific is required
     *  in listing requests in the corresponding category.
     *  If the <b>Relationship</b> field is also present, it means this Item Specific is
     *  required when you specify its parent value in listing requests.
     *
     * @return int
     */
    public function getMinValues()
    {
        return $this->minValues;
    }

    /**
     * Sets a new minValues
     *
     * Minimum number of values that you can specify for this Item Specific
     *  in listing requests. Not returned if zero (0).<br>
     *  <br>
     *  If this field is returned, it indicates that the Item Specific is required
     *  in listing requests in the corresponding category.
     *  If the <b>Relationship</b> field is also present, it means this Item Specific is
     *  required when you specify its parent value in listing requests.
     *
     * @param int $minValues
     * @return self
     */
    public function setMinValues($minValues)
    {
        $this->minValues = $minValues;
        return $this;
    }

    /**
     * Gets as maxValues
     *
     * Maximum number of values that you can specify for this Item Specific
     *  in listing requests (like AddItem) in the specified
     *  category.<br>
     *  <br>
     *  Most Item Specifics can only have one value. When this is
     *  greater than 1, your application can present the value
     *  recommendations (if any) as a multi-select list to the seller.
     *  (See <b>SelectionMode</b> to determine whether the seller needs to
     *  choose from eBay's recommendations or not.)
     *
     * @return int
     */
    public function getMaxValues()
    {
        return $this->maxValues;
    }

    /**
     * Sets a new maxValues
     *
     * Maximum number of values that you can specify for this Item Specific
     *  in listing requests (like AddItem) in the specified
     *  category.<br>
     *  <br>
     *  Most Item Specifics can only have one value. When this is
     *  greater than 1, your application can present the value
     *  recommendations (if any) as a multi-select list to the seller.
     *  (See <b>SelectionMode</b> to determine whether the seller needs to
     *  choose from eBay's recommendations or not.)
     *
     * @param int $maxValues
     * @return self
     */
    public function setMaxValues($maxValues)
    {
        $this->maxValues = $maxValues;
        return $this;
    }

    /**
     * Gets as selectionMode
     *
     * Controls whether you can specify your own name and value
     *  in listing requests, or if you need to use a name and/or value
     *  that eBay has defined.
     *
     * @return string
     */
    public function getSelectionMode()
    {
        return $this->selectionMode;
    }

    /**
     * Sets a new selectionMode
     *
     * Controls whether you can specify your own name and value
     *  in listing requests, or if you need to use a name and/or value
     *  that eBay has defined.
     *
     * @param string $selectionMode
     * @return self
     */
    public function setSelectionMode($selectionMode)
    {
        $this->selectionMode = $selectionMode;
        return $this;
    }

    /**
     * Gets as aspectUsage
     *
     * The value returned in this field will indicate if the item specific value is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Currently, the <b>AspectUsage</b> field will only be returned for some item/instance aspects (and not product aspects). Examples of common instance aspects that are shared by many eBay categories include 'Custom Bundle', 'Bundle Description', 'Modified Item', 'Modification Description', and 'California Prop 65 Warning'. Many instance aspect values are allowed more characters than the standard 65 max character threshold, and sellers can look at the corresponding <b>MaxValueLength</b> field to get the maximum number of characters allowed for that particular instance aspect value.
     *  </span>
     *
     * @return string
     */
    public function getAspectUsage()
    {
        return $this->aspectUsage;
    }

    /**
     * Sets a new aspectUsage
     *
     * The value returned in this field will indicate if the item specific value is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Currently, the <b>AspectUsage</b> field will only be returned for some item/instance aspects (and not product aspects). Examples of common instance aspects that are shared by many eBay categories include 'Custom Bundle', 'Bundle Description', 'Modified Item', 'Modification Description', and 'California Prop 65 Warning'. Many instance aspect values are allowed more characters than the standard 65 max character threshold, and sellers can look at the corresponding <b>MaxValueLength</b> field to get the maximum number of characters allowed for that particular instance aspect value.
     *  </span>
     *
     * @param string $aspectUsage
     * @return self
     */
    public function setAspectUsage($aspectUsage)
    {
        $this->aspectUsage = $aspectUsage;
        return $this;
    }

    /**
     * Gets as maxValueLength
     *
     * This integer value will state the maximum length of the instance aspect's value. The seller must make sure not to exceed this value when setting instance aspects on a listing. This field is only returned for instance aspects (<b>AspectUsage</b>=<code>Instance</code>). The standard maximum length for an item specific value is 65 characters.
     *
     * @return int
     */
    public function getMaxValueLength()
    {
        return $this->maxValueLength;
    }

    /**
     * Sets a new maxValueLength
     *
     * This integer value will state the maximum length of the instance aspect's value. The seller must make sure not to exceed this value when setting instance aspects on a listing. This field is only returned for instance aspects (<b>AspectUsage</b>=<code>Instance</code>). The standard maximum length for an item specific value is 65 characters.
     *
     * @param int $maxValueLength
     * @return self
     */
    public function setMaxValueLength($maxValueLength)
    {
        $this->maxValueLength = $maxValueLength;
        return $this;
    }

    /**
     * Gets as productRequired
     *
     * The enumeration value returned in this field will indicate whether or not the corresponding product brand requires listings within that category to be associated with an eBay catalog product. To create a listing that is associated with an eBay catalog product, the seller uses the <b>ProductListingDetails</b> container of the <b>AddItem</b> call. To find a matching product in the eBay catalog, the seller can use the new <b>eBay Catalog API</b> or <b>FindProducts</b> call of the <b>eBay Shopping API</b>.
     *  <br>
     *  <br>
     *  This field is only returned for the 'Brand' <b>NameRecommendation</b> container, and only if that particular product brand within that Product-Based Shopping Experience-enabled category requires a catalog product.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories (and brands within those categories), the <b>ValidationRules.ProductRequired</b> field will not get returned for any brands within any eBay category. Due to this fact, the <b>ProductRequired</b> field is currently not applicable.
     *  </span>
     *
     * @return string
     */
    public function getProductRequired()
    {
        return $this->productRequired;
    }

    /**
     * Sets a new productRequired
     *
     * The enumeration value returned in this field will indicate whether or not the corresponding product brand requires listings within that category to be associated with an eBay catalog product. To create a listing that is associated with an eBay catalog product, the seller uses the <b>ProductListingDetails</b> container of the <b>AddItem</b> call. To find a matching product in the eBay catalog, the seller can use the new <b>eBay Catalog API</b> or <b>FindProducts</b> call of the <b>eBay Shopping API</b>.
     *  <br>
     *  <br>
     *  This field is only returned for the 'Brand' <b>NameRecommendation</b> container, and only if that particular product brand within that Product-Based Shopping Experience-enabled category requires a catalog product.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories (and brands within those categories), the <b>ValidationRules.ProductRequired</b> field will not get returned for any brands within any eBay category. Due to this fact, the <b>ProductRequired</b> field is currently not applicable.
     *  </span>
     *
     * @param string $productRequired
     * @return self
     */
    public function setProductRequired($productRequired)
    {
        $this->productRequired = $productRequired;
        return $this;
    }

    /**
     * Gets as usageConstraint
     *
     * This field is returned for each item specific that is returned in the response. The enumeration value returned will indicate whether the item specific is required, recommended, or optional.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Previously, returned item specifics were only 'marked' as required or optional. With the introduction of this new field, eBay is able to specify to sellers which item specifics are highly recommended, although not required. The item specifics that are recommended can possibly improve search results and/or sales conversion if the seller includes them in the listing.
     *  </span>
     *
     * @return string
     */
    public function getUsageConstraint()
    {
        return $this->usageConstraint;
    }

    /**
     * Sets a new usageConstraint
     *
     * This field is returned for each item specific that is returned in the response. The enumeration value returned will indicate whether the item specific is required, recommended, or optional.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Previously, returned item specifics were only 'marked' as required or optional. With the introduction of this new field, eBay is able to specify to sellers which item specifics are highly recommended, although not required. The item specifics that are recommended can possibly improve search results and/or sales conversion if the seller includes them in the listing.
     *  </span>
     *
     * @param string $usageConstraint
     * @return self
     */
    public function setUsageConstraint($usageConstraint)
    {
        $this->usageConstraint = $usageConstraint;
        return $this;
    }

    /**
     * Gets as confidence
     *
     * Indicates eBay's confidence that this is the right name or value,
     *  given the data you specified your request. The confidence is based
     *  on historical items in the same category, with similar titles
     *  (if specified).<br>
     *  <br>
     *  This field is only returned when <b>IncludeConfidence</b> is included in the request and set to <code>true</code>.
     *  This field is not returned when <b>SelectionMode</b> is set to <code>Prefilled</code>.
     *
     * @return int
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Sets a new confidence
     *
     * Indicates eBay's confidence that this is the right name or value,
     *  given the data you specified your request. The confidence is based
     *  on historical items in the same category, with similar titles
     *  (if specified).<br>
     *  <br>
     *  This field is only returned when <b>IncludeConfidence</b> is included in the request and set to <code>true</code>.
     *  This field is not returned when <b>SelectionMode</b> is set to <code>Prefilled</code>.
     *
     * @param int $confidence
     * @return self
     */
    public function setConfidence($confidence)
    {
        $this->confidence = $confidence;
        return $this;
    }

    /**
     * Adds as relationship
     *
     * Indicates the Item Specific's logical dependency on another
     *  Item Specific, if any.
     *  <br>
     *  <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=XL would
     *  mean something different to buyers when
     *  Size Type=Juniors or Size Type=Regular. <br>
     *  <br>
     *  Or in the US (in the future), a list of cities can vary depending
     *  on the state, so State could be recommended as a parent of City.<br>
     *  <br>
     *  Currently, categories only recommend a maximum of one parent
     *  for an Item Specific.
     *  For example, Size=XL could have a Size Type=Juniors
     *  parent in a Juniors clothing category.
     *  In the future, some categories may recommend multiple parents.
     *  For example, City=Mountain View could have parents like
     *  State=California, State=New York, and State=North Carolina.<br>
     *  <br>
     *  If an Item Specific has value dependencies (i.e., if it has value recommendations that contain <b>Relationship</b>), then
     *  all of its value recommendations are returned (regardless of the
     *  number you specified in <b>MaxValuesPerName</b>).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueRelationshipType $relationship
     */
    public function addToRelationship(\Nogrod\eBaySDK\Trading\NameValueRelationshipType $relationship)
    {
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * isset relationship
     *
     * Indicates the Item Specific's logical dependency on another
     *  Item Specific, if any.
     *  <br>
     *  <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=XL would
     *  mean something different to buyers when
     *  Size Type=Juniors or Size Type=Regular. <br>
     *  <br>
     *  Or in the US (in the future), a list of cities can vary depending
     *  on the state, so State could be recommended as a parent of City.<br>
     *  <br>
     *  Currently, categories only recommend a maximum of one parent
     *  for an Item Specific.
     *  For example, Size=XL could have a Size Type=Juniors
     *  parent in a Juniors clothing category.
     *  In the future, some categories may recommend multiple parents.
     *  For example, City=Mountain View could have parents like
     *  State=California, State=New York, and State=North Carolina.<br>
     *  <br>
     *  If an Item Specific has value dependencies (i.e., if it has value recommendations that contain <b>Relationship</b>), then
     *  all of its value recommendations are returned (regardless of the
     *  number you specified in <b>MaxValuesPerName</b>).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelationship($index)
    {
        return isset($this->relationship[$index]);
    }

    /**
     * unset relationship
     *
     * Indicates the Item Specific's logical dependency on another
     *  Item Specific, if any.
     *  <br>
     *  <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=XL would
     *  mean something different to buyers when
     *  Size Type=Juniors or Size Type=Regular. <br>
     *  <br>
     *  Or in the US (in the future), a list of cities can vary depending
     *  on the state, so State could be recommended as a parent of City.<br>
     *  <br>
     *  Currently, categories only recommend a maximum of one parent
     *  for an Item Specific.
     *  For example, Size=XL could have a Size Type=Juniors
     *  parent in a Juniors clothing category.
     *  In the future, some categories may recommend multiple parents.
     *  For example, City=Mountain View could have parents like
     *  State=California, State=New York, and State=North Carolina.<br>
     *  <br>
     *  If an Item Specific has value dependencies (i.e., if it has value recommendations that contain <b>Relationship</b>), then
     *  all of its value recommendations are returned (regardless of the
     *  number you specified in <b>MaxValuesPerName</b>).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelationship($index)
    {
        unset($this->relationship[$index]);
    }

    /**
     * Gets as relationship
     *
     * Indicates the Item Specific's logical dependency on another
     *  Item Specific, if any.
     *  <br>
     *  <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=XL would
     *  mean something different to buyers when
     *  Size Type=Juniors or Size Type=Regular. <br>
     *  <br>
     *  Or in the US (in the future), a list of cities can vary depending
     *  on the state, so State could be recommended as a parent of City.<br>
     *  <br>
     *  Currently, categories only recommend a maximum of one parent
     *  for an Item Specific.
     *  For example, Size=XL could have a Size Type=Juniors
     *  parent in a Juniors clothing category.
     *  In the future, some categories may recommend multiple parents.
     *  For example, City=Mountain View could have parents like
     *  State=California, State=New York, and State=North Carolina.<br>
     *  <br>
     *  If an Item Specific has value dependencies (i.e., if it has value recommendations that contain <b>Relationship</b>), then
     *  all of its value recommendations are returned (regardless of the
     *  number you specified in <b>MaxValuesPerName</b>).
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueRelationshipType[]
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * Indicates the Item Specific's logical dependency on another
     *  Item Specific, if any.
     *  <br>
     *  <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=XL would
     *  mean something different to buyers when
     *  Size Type=Juniors or Size Type=Regular. <br>
     *  <br>
     *  Or in the US (in the future), a list of cities can vary depending
     *  on the state, so State could be recommended as a parent of City.<br>
     *  <br>
     *  Currently, categories only recommend a maximum of one parent
     *  for an Item Specific.
     *  For example, Size=XL could have a Size Type=Juniors
     *  parent in a Juniors clothing category.
     *  In the future, some categories may recommend multiple parents.
     *  For example, City=Mountain View could have parents like
     *  State=California, State=New York, and State=North Carolina.<br>
     *  <br>
     *  If an Item Specific has value dependencies (i.e., if it has value recommendations that contain <b>Relationship</b>), then
     *  all of its value recommendations are returned (regardless of the
     *  number you specified in <b>MaxValuesPerName</b>).
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueRelationshipType[] $relationship
     * @return self
     */
    public function setRelationship(array $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as variationPicture
     *
     * Indicates whether the name (e.g., Color) can (or must) be used to
     *  classify the variation pictures.
     *
     * @return string
     */
    public function getVariationPicture()
    {
        return $this->variationPicture;
    }

    /**
     * Sets a new variationPicture
     *
     * Indicates whether the name (e.g., Color) can (or must) be used to
     *  classify the variation pictures.
     *
     * @param string $variationPicture
     * @return self
     */
    public function setVariationPicture($variationPicture)
    {
        $this->variationPicture = $variationPicture;
        return $this;
    }

    /**
     * Gets as variationSpecifics
     *
     * Indicates whether the recommended name/value pair can be used in
     *  an <b>Item.Variations</b> container in a fixed-price listing call.
     *  For example, a given category could disable a name like Brand
     *  in variation specifics (if Brand is only allowed in the item specifics at the Item level). The same category could
     *  enable a name like Size for variation specifics
     *  (in addition to recommending it for item specifics).
     *  If not returned, then the name/value can be used for
     *  both variation specifics and item specifics.
     *
     * @return string
     */
    public function getVariationSpecifics()
    {
        return $this->variationSpecifics;
    }

    /**
     * Sets a new variationSpecifics
     *
     * Indicates whether the recommended name/value pair can be used in
     *  an <b>Item.Variations</b> container in a fixed-price listing call.
     *  For example, a given category could disable a name like Brand
     *  in variation specifics (if Brand is only allowed in the item specifics at the Item level). The same category could
     *  enable a name like Size for variation specifics
     *  (in addition to recommending it for item specifics).
     *  If not returned, then the name/value can be used for
     *  both variation specifics and item specifics.
     *
     * @param string $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics($variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
        return $this;
    }

    /**
     * Gets as valueFormat
     *
     * The format of the data type (e.g., date format) that eBay
     *  expects the item specific's value to adhere to in listing requests.
     *  A data type identified by the <b>ValueType</b> field may have different
     *  representations, and <b>ValueFormat</b> specifies the precise format
     *  that is required.
     *
     * @return string
     */
    public function getValueFormat()
    {
        return $this->valueFormat;
    }

    /**
     * Sets a new valueFormat
     *
     * The format of the data type (e.g., date format) that eBay
     *  expects the item specific's value to adhere to in listing requests.
     *  A data type identified by the <b>ValueType</b> field may have different
     *  representations, and <b>ValueFormat</b> specifies the precise format
     *  that is required.
     *
     * @param string $valueFormat
     * @return self
     */
    public function setValueFormat($valueFormat)
    {
        $this->valueFormat = $valueFormat;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getValueType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValueType", $value);
        }
        $value = $this->getMinValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinValues", $value);
        }
        $value = $this->getMaxValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxValues", $value);
        }
        $value = $this->getSelectionMode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SelectionMode", $value);
        }
        $value = $this->getAspectUsage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AspectUsage", $value);
        }
        $value = $this->getMaxValueLength();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxValueLength", $value);
        }
        $value = $this->getProductRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductRequired", $value);
        }
        $value = $this->getUsageConstraint();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UsageConstraint", $value);
        }
        $value = $this->getConfidence();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Confidence", $value);
        }
        $value = $this->getRelationship();
        if (null !== $value && !empty($this->getRelationship())) {
            $writer->write(array_map(function ($v) {
                return ["Relationship" => $v];
            }, $value));
        }
        $value = $this->getVariationPicture();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationPicture", $value);
        }
        $value = $this->getVariationSpecifics();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecifics", $value);
        }
        $value = $this->getValueFormat();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValueFormat", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueType');
        if (null !== $value) {
            $this->setValueType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinValues');
        if (null !== $value) {
            $this->setMinValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxValues');
        if (null !== $value) {
            $this->setMaxValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SelectionMode');
        if (null !== $value) {
            $this->setSelectionMode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AspectUsage');
        if (null !== $value) {
            $this->setAspectUsage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxValueLength');
        if (null !== $value) {
            $this->setMaxValueLength($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductRequired');
        if (null !== $value) {
            $this->setProductRequired($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UsageConstraint');
        if (null !== $value) {
            $this->setUsageConstraint($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Confidence');
        if (null !== $value) {
            $this->setConfidence($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Relationship', true);
        if (null !== $value && !empty($value)) {
            $this->setRelationship(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NameValueRelationshipType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationPicture');
        if (null !== $value) {
            $this->setVariationPicture($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecifics');
        if (null !== $value) {
            $this->setVariationSpecifics($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueFormat');
        if (null !== $value) {
            $this->setValueFormat($value);
        }
    }
}
