<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryType
 *
 * Container for data on one listing category. Many of the <b>CategoryType</b> fields are only returned in the <b>GetCategories</b> response. Add/Revise/Relist calls only use the <b>CategoryID</b> field to specify which eBay category in which to list the item.
 * XSD Type: CategoryType
 */
class CategoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * If this field is returned as <code>true</code>, the corresponding category supports Best Offers. If this field is not present, the category does not support Best Offers. This field is not returned when <code>false</code>.
     *
     * @var bool $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * If this field is returned as <code>true</code>, the corresponding category supports immediate payment for listings. The immediate payment feature is only applicable to fixed-price listings and to auction listings with the Buy It Now option enabled. If the immediate payment feature is enabled for a listing, the buyer must pay immediately after clicking the 'Buy it Now' button. This field is only returned when <code>true</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  For sellers who are not opted in to eBay managed payments, PayPal must be set as the only accepted payment method for the listing in order to enable the immediate payment requirement. For managed payments sellers, no payment methods are required, as eBay controls which payment methods are available to the buyer.
     *  </span>
     *
     * @var bool $autoPayEnabled
     */
    private $autoPayEnabled = null;

    /**
     * If this field is returned as <code>true</code>, the corresponding category supports business-to-business (B2B) VAT
     *  listings. If this field is not present, the category does not B2B VAT listings. This field is not returned when <code>false</code>. This feature is applicable to the eBay Germany (DE), Austria (AT),
     *  and Switzerland (CH) sites only.
     *
     * @var bool $b2BVATEnabled
     */
    private $b2BVATEnabled = null;

    /**
     * If this field is deprecated..
     *
     * @var bool $catalogEnabled
     */
    private $catalogEnabled = null;

    /**
     * This string value is the unique identifier of an eBay category.
     *  In <b>GetItem</b> and related calls, see the <b>CategoryName</b> field for the text name of
     *  the category. The parent category of this eBay category is only shown in <b>GetCategories</b>.
     *  <br>
     *  <br>
     *  In an Add call, the <b>PrimaryCategory.CategoryID</b> is conditionally required unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing category, and stock photo defined in the catalog product is used to create the listing.
     *  <br>
     *  <br>
     *  In an Add/Revise/Relist call, the <b>SecondaryCategory.CategoryID</b> is conditionally required if a Secondary Category is used. Using a Secondary Category can incur a listing fee.
     *  <br><br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *  <br>
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This integer value indicates the level where the category fits in the eBay site's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category in the eBay site's category hierarchy.
     *
     * @var int $categoryLevel
     */
    private $categoryLevel = null;

    /**
     * This string value is the display name of the eBay primary category, as it would appear on the eBay site. In <b>GetItem</b>, this will be a fully-qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).
     *
     * @var string $categoryName
     */
    private $categoryName = null;

    /**
     * This string value is the Category ID of the primary category's (indicated in the <b>CategoryID</b> field) parent category. The number of <b>CategoryParentID</b> values that are returned will depend on the <b>LevelLimit</b> value that is set (in <b>GetCategories</b>) and on how far up the primary category is in the eBay category hierarchy. <b>CategoryParentID</b> values are
     *  returned in correct sequence, starting from the root category
     *  and ending with the category that is the direct parent of
     *  the primary category specified in <b>CategoryID</b>. The <b>CategoryID</b> and <b>CategoryParentID</b> values will be the same if the <b>LevelLimit</b> value is set to <code>1</code>.
     *
     * @var string[] $categoryParentID
     */
    private $categoryParentID = [
        
    ];

    /**
     * This string value is the display name of the category indicated in the corresponding <b>CategoryParentID</b> field. If multiple parent categories are retrieved in the <b>GetSuggestedCategories</b> call, the matching <b>CategoryParentID</b> and <b>CategoryParentName</b> can be found by following the sequence in which these fields are returned. The primary category's ancestors are returned in sequence beginning with the root category all the way down to the primary category's direct parent category.
     *  <br><br>
     *  The <b>CategoryParentName</b> fields and the <b>CategoryName</b> field can be used to build
     *  the fully-qualified category name and/or "breadcrumbs" browse path.
     *  (e.g., Computers & Networking > Technology Books > Certification).
     *
     * @var string[] $categoryParentName
     */
    private $categoryParentName = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var bool $productSearchPageAvailable
     */
    private $productSearchPageAvailable = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ExtendedProductFinderIDType[] $productFinderIDs
     */
    private $productFinderIDs = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CharacteristicsSetType[] $characteristicsSets
     */
    private $characteristicsSets = [
        
    ];

    /**
     * If this field is returned as <code>true</code>, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. This field is not returned when <code>false</code>.
     *
     * @var bool $expired
     */
    private $expired = null;

    /**
     * This field is deprecated.
     *
     * @var bool $intlAutosFixedCat
     */
    private $intlAutosFixedCat = null;

    /**
     * If this field is returned as <code>true</code>, the corresponding category is an eBay leaf category, a category in which items may be listed. This field is not returned when <code>false</code>.
     *
     * @var bool $leafCategory
     */
    private $leafCategory = null;

    /**
     * If this field is returned as <code>true</code>, the corresponding category is an eBay virtual category, a category in which items may not be listed. This field is not returned when <code>false</code>.
     *
     * @var bool $virtual
     */
    private $virtual = null;

    /**
     * This field is deprecated.
     *
     * @var int $numOfItems
     */
    private $numOfItems = null;

    /**
     * This field is deprecated.
     *
     * @var bool $sellerGuaranteeEligible
     */
    private $sellerGuaranteeEligible = null;

    /**
     * If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reserve Price policy on auction listings. For example, if the site's default setting is to allow setting a Reserve Price, but <b>ORPA</b> is returned as <code>true</code>, this particular category does not support setting a Reserve Price. Or, if the site's default setting is not to allow setting a Reserve Price, but <b>ORPA</b> is returned as <code>true</code>, this particular category is the exception to that rule and does support setting a Reserve Price. If <b>ORPA</b> is <code>true</code> for the corresponding category, you can generally assume that the category's subcategories inherit the same setting. 'ORPA' is an acronym for 'Override Reserve Price Allowed'.
     *  <br>
     *  <br>
     *  This field is not returned when <code>false</code>.
     *
     * @var bool $oRPA
     */
    private $oRPA = null;

    /**
     * If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reduce Reserve Price (on active auction listing) policy. For example, if the site's default setting is to allow reducing a Reserve Price for the active auction listing, but <b>ORRA</b> is returned as <code>true</code>, this particular category does not support reducing a Reserve Price. Or, if the site's default setting is not to allow reducting a Reserve Price, but <b>ORRA</b> is returned as <code>true</code>, this particular category is the exception to that rule and does support reducing a Reserve Price. If <b>ORRA</b> is <code>true</code> for the corresponding category, you can generally assume that the category's subcategories inherit the same setting. 'ORRA' is an acronym for 'Override Reduce Reserve Allowed'.
     *  <br>
     *  <br>
     *  This field is not returned when <code>false</code>.
     *
     * @var bool $oRRA
     */
    private $oRRA = null;

    /**
     * If this field is returned as <code>true</code>, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. 'LSD' is an acronym for 'Lot Size Disabled'. 'Lot Size' refers to the <b>LotSize</b> field in the Add/Revise/Relisting calls that is conditionally required if the seller is creating a lot listing. The <b>LSD</b> field is not returned when <code>false</code>.
     *
     * @var bool $lSD
     */
    private $lSD = null;

    /**
     * This field is deprecated.
     *
     * @var string $keywords
     */
    private $keywords = null;

    /**
     * Gets as bestOfferEnabled
     *
     * If this field is returned as <code>true</code>, the corresponding category supports Best Offers. If this field is not present, the category does not support Best Offers. This field is not returned when <code>false</code>.
     *
     * @return bool
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * Sets a new bestOfferEnabled
     *
     * If this field is returned as <code>true</code>, the corresponding category supports Best Offers. If this field is not present, the category does not support Best Offers. This field is not returned when <code>false</code>.
     *
     * @param bool $bestOfferEnabled
     * @return self
     */
    public function setBestOfferEnabled($bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }

    /**
     * Gets as autoPayEnabled
     *
     * If this field is returned as <code>true</code>, the corresponding category supports immediate payment for listings. The immediate payment feature is only applicable to fixed-price listings and to auction listings with the Buy It Now option enabled. If the immediate payment feature is enabled for a listing, the buyer must pay immediately after clicking the 'Buy it Now' button. This field is only returned when <code>true</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  For sellers who are not opted in to eBay managed payments, PayPal must be set as the only accepted payment method for the listing in order to enable the immediate payment requirement. For managed payments sellers, no payment methods are required, as eBay controls which payment methods are available to the buyer.
     *  </span>
     *
     * @return bool
     */
    public function getAutoPayEnabled()
    {
        return $this->autoPayEnabled;
    }

    /**
     * Sets a new autoPayEnabled
     *
     * If this field is returned as <code>true</code>, the corresponding category supports immediate payment for listings. The immediate payment feature is only applicable to fixed-price listings and to auction listings with the Buy It Now option enabled. If the immediate payment feature is enabled for a listing, the buyer must pay immediately after clicking the 'Buy it Now' button. This field is only returned when <code>true</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  For sellers who are not opted in to eBay managed payments, PayPal must be set as the only accepted payment method for the listing in order to enable the immediate payment requirement. For managed payments sellers, no payment methods are required, as eBay controls which payment methods are available to the buyer.
     *  </span>
     *
     * @param bool $autoPayEnabled
     * @return self
     */
    public function setAutoPayEnabled($autoPayEnabled)
    {
        $this->autoPayEnabled = $autoPayEnabled;
        return $this;
    }

    /**
     * Gets as b2BVATEnabled
     *
     * If this field is returned as <code>true</code>, the corresponding category supports business-to-business (B2B) VAT
     *  listings. If this field is not present, the category does not B2B VAT listings. This field is not returned when <code>false</code>. This feature is applicable to the eBay Germany (DE), Austria (AT),
     *  and Switzerland (CH) sites only.
     *
     * @return bool
     */
    public function getB2BVATEnabled()
    {
        return $this->b2BVATEnabled;
    }

    /**
     * Sets a new b2BVATEnabled
     *
     * If this field is returned as <code>true</code>, the corresponding category supports business-to-business (B2B) VAT
     *  listings. If this field is not present, the category does not B2B VAT listings. This field is not returned when <code>false</code>. This feature is applicable to the eBay Germany (DE), Austria (AT),
     *  and Switzerland (CH) sites only.
     *
     * @param bool $b2BVATEnabled
     * @return self
     */
    public function setB2BVATEnabled($b2BVATEnabled)
    {
        $this->b2BVATEnabled = $b2BVATEnabled;
        return $this;
    }

    /**
     * Gets as catalogEnabled
     *
     * If this field is deprecated..
     *
     * @return bool
     */
    public function getCatalogEnabled()
    {
        return $this->catalogEnabled;
    }

    /**
     * Sets a new catalogEnabled
     *
     * If this field is deprecated..
     *
     * @param bool $catalogEnabled
     * @return self
     */
    public function setCatalogEnabled($catalogEnabled)
    {
        $this->catalogEnabled = $catalogEnabled;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * This string value is the unique identifier of an eBay category.
     *  In <b>GetItem</b> and related calls, see the <b>CategoryName</b> field for the text name of
     *  the category. The parent category of this eBay category is only shown in <b>GetCategories</b>.
     *  <br>
     *  <br>
     *  In an Add call, the <b>PrimaryCategory.CategoryID</b> is conditionally required unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing category, and stock photo defined in the catalog product is used to create the listing.
     *  <br>
     *  <br>
     *  In an Add/Revise/Relist call, the <b>SecondaryCategory.CategoryID</b> is conditionally required if a Secondary Category is used. Using a Secondary Category can incur a listing fee.
     *  <br><br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *  <br>
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * This string value is the unique identifier of an eBay category.
     *  In <b>GetItem</b> and related calls, see the <b>CategoryName</b> field for the text name of
     *  the category. The parent category of this eBay category is only shown in <b>GetCategories</b>.
     *  <br>
     *  <br>
     *  In an Add call, the <b>PrimaryCategory.CategoryID</b> is conditionally required unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing category, and stock photo defined in the catalog product is used to create the listing.
     *  <br>
     *  <br>
     *  In an Add/Revise/Relist call, the <b>SecondaryCategory.CategoryID</b> is conditionally required if a Secondary Category is used. Using a Secondary Category can incur a listing fee.
     *  <br><br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *  <br>
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as categoryLevel
     *
     * This integer value indicates the level where the category fits in the eBay site's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category in the eBay site's category hierarchy.
     *
     * @return int
     */
    public function getCategoryLevel()
    {
        return $this->categoryLevel;
    }

    /**
     * Sets a new categoryLevel
     *
     * This integer value indicates the level where the category fits in the eBay site's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category in the eBay site's category hierarchy.
     *
     * @param int $categoryLevel
     * @return self
     */
    public function setCategoryLevel($categoryLevel)
    {
        $this->categoryLevel = $categoryLevel;
        return $this;
    }

    /**
     * Gets as categoryName
     *
     * This string value is the display name of the eBay primary category, as it would appear on the eBay site. In <b>GetItem</b>, this will be a fully-qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * This string value is the display name of the eBay primary category, as it would appear on the eBay site. In <b>GetItem</b>, this will be a fully-qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).
     *
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * Adds as categoryParentID
     *
     * This string value is the Category ID of the primary category's (indicated in the <b>CategoryID</b> field) parent category. The number of <b>CategoryParentID</b> values that are returned will depend on the <b>LevelLimit</b> value that is set (in <b>GetCategories</b>) and on how far up the primary category is in the eBay category hierarchy. <b>CategoryParentID</b> values are
     *  returned in correct sequence, starting from the root category
     *  and ending with the category that is the direct parent of
     *  the primary category specified in <b>CategoryID</b>. The <b>CategoryID</b> and <b>CategoryParentID</b> values will be the same if the <b>LevelLimit</b> value is set to <code>1</code>.
     *
     * @return self
     * @param string $categoryParentID
     */
    public function addToCategoryParentID($categoryParentID)
    {
        $this->categoryParentID[] = $categoryParentID;
        return $this;
    }

    /**
     * isset categoryParentID
     *
     * This string value is the Category ID of the primary category's (indicated in the <b>CategoryID</b> field) parent category. The number of <b>CategoryParentID</b> values that are returned will depend on the <b>LevelLimit</b> value that is set (in <b>GetCategories</b>) and on how far up the primary category is in the eBay category hierarchy. <b>CategoryParentID</b> values are
     *  returned in correct sequence, starting from the root category
     *  and ending with the category that is the direct parent of
     *  the primary category specified in <b>CategoryID</b>. The <b>CategoryID</b> and <b>CategoryParentID</b> values will be the same if the <b>LevelLimit</b> value is set to <code>1</code>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryParentID($index)
    {
        return isset($this->categoryParentID[$index]);
    }

    /**
     * unset categoryParentID
     *
     * This string value is the Category ID of the primary category's (indicated in the <b>CategoryID</b> field) parent category. The number of <b>CategoryParentID</b> values that are returned will depend on the <b>LevelLimit</b> value that is set (in <b>GetCategories</b>) and on how far up the primary category is in the eBay category hierarchy. <b>CategoryParentID</b> values are
     *  returned in correct sequence, starting from the root category
     *  and ending with the category that is the direct parent of
     *  the primary category specified in <b>CategoryID</b>. The <b>CategoryID</b> and <b>CategoryParentID</b> values will be the same if the <b>LevelLimit</b> value is set to <code>1</code>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryParentID($index)
    {
        unset($this->categoryParentID[$index]);
    }

    /**
     * Gets as categoryParentID
     *
     * This string value is the Category ID of the primary category's (indicated in the <b>CategoryID</b> field) parent category. The number of <b>CategoryParentID</b> values that are returned will depend on the <b>LevelLimit</b> value that is set (in <b>GetCategories</b>) and on how far up the primary category is in the eBay category hierarchy. <b>CategoryParentID</b> values are
     *  returned in correct sequence, starting from the root category
     *  and ending with the category that is the direct parent of
     *  the primary category specified in <b>CategoryID</b>. The <b>CategoryID</b> and <b>CategoryParentID</b> values will be the same if the <b>LevelLimit</b> value is set to <code>1</code>.
     *
     * @return string[]
     */
    public function getCategoryParentID()
    {
        return $this->categoryParentID;
    }

    /**
     * Sets a new categoryParentID
     *
     * This string value is the Category ID of the primary category's (indicated in the <b>CategoryID</b> field) parent category. The number of <b>CategoryParentID</b> values that are returned will depend on the <b>LevelLimit</b> value that is set (in <b>GetCategories</b>) and on how far up the primary category is in the eBay category hierarchy. <b>CategoryParentID</b> values are
     *  returned in correct sequence, starting from the root category
     *  and ending with the category that is the direct parent of
     *  the primary category specified in <b>CategoryID</b>. The <b>CategoryID</b> and <b>CategoryParentID</b> values will be the same if the <b>LevelLimit</b> value is set to <code>1</code>.
     *
     * @param string[] $categoryParentID
     * @return self
     */
    public function setCategoryParentID(array $categoryParentID)
    {
        $this->categoryParentID = $categoryParentID;
        return $this;
    }

    /**
     * Adds as categoryParentName
     *
     * This string value is the display name of the category indicated in the corresponding <b>CategoryParentID</b> field. If multiple parent categories are retrieved in the <b>GetSuggestedCategories</b> call, the matching <b>CategoryParentID</b> and <b>CategoryParentName</b> can be found by following the sequence in which these fields are returned. The primary category's ancestors are returned in sequence beginning with the root category all the way down to the primary category's direct parent category.
     *  <br><br>
     *  The <b>CategoryParentName</b> fields and the <b>CategoryName</b> field can be used to build
     *  the fully-qualified category name and/or "breadcrumbs" browse path.
     *  (e.g., Computers & Networking > Technology Books > Certification).
     *
     * @return self
     * @param string $categoryParentName
     */
    public function addToCategoryParentName($categoryParentName)
    {
        $this->categoryParentName[] = $categoryParentName;
        return $this;
    }

    /**
     * isset categoryParentName
     *
     * This string value is the display name of the category indicated in the corresponding <b>CategoryParentID</b> field. If multiple parent categories are retrieved in the <b>GetSuggestedCategories</b> call, the matching <b>CategoryParentID</b> and <b>CategoryParentName</b> can be found by following the sequence in which these fields are returned. The primary category's ancestors are returned in sequence beginning with the root category all the way down to the primary category's direct parent category.
     *  <br><br>
     *  The <b>CategoryParentName</b> fields and the <b>CategoryName</b> field can be used to build
     *  the fully-qualified category name and/or "breadcrumbs" browse path.
     *  (e.g., Computers & Networking > Technology Books > Certification).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryParentName($index)
    {
        return isset($this->categoryParentName[$index]);
    }

    /**
     * unset categoryParentName
     *
     * This string value is the display name of the category indicated in the corresponding <b>CategoryParentID</b> field. If multiple parent categories are retrieved in the <b>GetSuggestedCategories</b> call, the matching <b>CategoryParentID</b> and <b>CategoryParentName</b> can be found by following the sequence in which these fields are returned. The primary category's ancestors are returned in sequence beginning with the root category all the way down to the primary category's direct parent category.
     *  <br><br>
     *  The <b>CategoryParentName</b> fields and the <b>CategoryName</b> field can be used to build
     *  the fully-qualified category name and/or "breadcrumbs" browse path.
     *  (e.g., Computers & Networking > Technology Books > Certification).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryParentName($index)
    {
        unset($this->categoryParentName[$index]);
    }

    /**
     * Gets as categoryParentName
     *
     * This string value is the display name of the category indicated in the corresponding <b>CategoryParentID</b> field. If multiple parent categories are retrieved in the <b>GetSuggestedCategories</b> call, the matching <b>CategoryParentID</b> and <b>CategoryParentName</b> can be found by following the sequence in which these fields are returned. The primary category's ancestors are returned in sequence beginning with the root category all the way down to the primary category's direct parent category.
     *  <br><br>
     *  The <b>CategoryParentName</b> fields and the <b>CategoryName</b> field can be used to build
     *  the fully-qualified category name and/or "breadcrumbs" browse path.
     *  (e.g., Computers & Networking > Technology Books > Certification).
     *
     * @return string[]
     */
    public function getCategoryParentName()
    {
        return $this->categoryParentName;
    }

    /**
     * Sets a new categoryParentName
     *
     * This string value is the display name of the category indicated in the corresponding <b>CategoryParentID</b> field. If multiple parent categories are retrieved in the <b>GetSuggestedCategories</b> call, the matching <b>CategoryParentID</b> and <b>CategoryParentName</b> can be found by following the sequence in which these fields are returned. The primary category's ancestors are returned in sequence beginning with the root category all the way down to the primary category's direct parent category.
     *  <br><br>
     *  The <b>CategoryParentName</b> fields and the <b>CategoryName</b> field can be used to build
     *  the fully-qualified category name and/or "breadcrumbs" browse path.
     *  (e.g., Computers & Networking > Technology Books > Certification).
     *
     * @param string[] $categoryParentName
     * @return self
     */
    public function setCategoryParentName(array $categoryParentName)
    {
        $this->categoryParentName = $categoryParentName;
        return $this;
    }

    /**
     * Gets as productSearchPageAvailable
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getProductSearchPageAvailable()
    {
        return $this->productSearchPageAvailable;
    }

    /**
     * Sets a new productSearchPageAvailable
     *
     * This field is deprecated.
     *
     * @param bool $productSearchPageAvailable
     * @return self
     */
    public function setProductSearchPageAvailable($productSearchPageAvailable)
    {
        $this->productSearchPageAvailable = $productSearchPageAvailable;
        return $this;
    }

    /**
     * Adds as productFinderIDs
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ExtendedProductFinderIDType $productFinderIDs
     */
    public function addToProductFinderIDs(\Nogrod\eBaySDK\MerchantData\ExtendedProductFinderIDType $productFinderIDs)
    {
        $this->productFinderIDs[] = $productFinderIDs;
        return $this;
    }

    /**
     * isset productFinderIDs
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductFinderIDs($index)
    {
        return isset($this->productFinderIDs[$index]);
    }

    /**
     * unset productFinderIDs
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductFinderIDs($index)
    {
        unset($this->productFinderIDs[$index]);
    }

    /**
     * Gets as productFinderIDs
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ExtendedProductFinderIDType[]
     */
    public function getProductFinderIDs()
    {
        return $this->productFinderIDs;
    }

    /**
     * Sets a new productFinderIDs
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ExtendedProductFinderIDType[] $productFinderIDs
     * @return self
     */
    public function setProductFinderIDs(array $productFinderIDs)
    {
        $this->productFinderIDs = $productFinderIDs;
        return $this;
    }

    /**
     * Adds as characteristicsSets
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\CharacteristicsSetType $characteristicsSets
     */
    public function addToCharacteristicsSets(\Nogrod\eBaySDK\MerchantData\CharacteristicsSetType $characteristicsSets)
    {
        $this->characteristicsSets[] = $characteristicsSets;
        return $this;
    }

    /**
     * isset characteristicsSets
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristicsSets($index)
    {
        return isset($this->characteristicsSets[$index]);
    }

    /**
     * unset characteristicsSets
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristicsSets($index)
    {
        unset($this->characteristicsSets[$index]);
    }

    /**
     * Gets as characteristicsSets
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CharacteristicsSetType[]
     */
    public function getCharacteristicsSets()
    {
        return $this->characteristicsSets;
    }

    /**
     * Sets a new characteristicsSets
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CharacteristicsSetType[] $characteristicsSets
     * @return self
     */
    public function setCharacteristicsSets(array $characteristicsSets)
    {
        $this->characteristicsSets = $characteristicsSets;
        return $this;
    }

    /**
     * Gets as expired
     *
     * If this field is returned as <code>true</code>, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. This field is not returned when <code>false</code>.
     *
     * @return bool
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Sets a new expired
     *
     * If this field is returned as <code>true</code>, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. This field is not returned when <code>false</code>.
     *
     * @param bool $expired
     * @return self
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;
        return $this;
    }

    /**
     * Gets as intlAutosFixedCat
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getIntlAutosFixedCat()
    {
        return $this->intlAutosFixedCat;
    }

    /**
     * Sets a new intlAutosFixedCat
     *
     * This field is deprecated.
     *
     * @param bool $intlAutosFixedCat
     * @return self
     */
    public function setIntlAutosFixedCat($intlAutosFixedCat)
    {
        $this->intlAutosFixedCat = $intlAutosFixedCat;
        return $this;
    }

    /**
     * Gets as leafCategory
     *
     * If this field is returned as <code>true</code>, the corresponding category is an eBay leaf category, a category in which items may be listed. This field is not returned when <code>false</code>.
     *
     * @return bool
     */
    public function getLeafCategory()
    {
        return $this->leafCategory;
    }

    /**
     * Sets a new leafCategory
     *
     * If this field is returned as <code>true</code>, the corresponding category is an eBay leaf category, a category in which items may be listed. This field is not returned when <code>false</code>.
     *
     * @param bool $leafCategory
     * @return self
     */
    public function setLeafCategory($leafCategory)
    {
        $this->leafCategory = $leafCategory;
        return $this;
    }

    /**
     * Gets as virtual
     *
     * If this field is returned as <code>true</code>, the corresponding category is an eBay virtual category, a category in which items may not be listed. This field is not returned when <code>false</code>.
     *
     * @return bool
     */
    public function getVirtual()
    {
        return $this->virtual;
    }

    /**
     * Sets a new virtual
     *
     * If this field is returned as <code>true</code>, the corresponding category is an eBay virtual category, a category in which items may not be listed. This field is not returned when <code>false</code>.
     *
     * @param bool $virtual
     * @return self
     */
    public function setVirtual($virtual)
    {
        $this->virtual = $virtual;
        return $this;
    }

    /**
     * Gets as numOfItems
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getNumOfItems()
    {
        return $this->numOfItems;
    }

    /**
     * Sets a new numOfItems
     *
     * This field is deprecated.
     *
     * @param int $numOfItems
     * @return self
     */
    public function setNumOfItems($numOfItems)
    {
        $this->numOfItems = $numOfItems;
        return $this;
    }

    /**
     * Gets as sellerGuaranteeEligible
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getSellerGuaranteeEligible()
    {
        return $this->sellerGuaranteeEligible;
    }

    /**
     * Sets a new sellerGuaranteeEligible
     *
     * This field is deprecated.
     *
     * @param bool $sellerGuaranteeEligible
     * @return self
     */
    public function setSellerGuaranteeEligible($sellerGuaranteeEligible)
    {
        $this->sellerGuaranteeEligible = $sellerGuaranteeEligible;
        return $this;
    }

    /**
     * Gets as oRPA
     *
     * If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reserve Price policy on auction listings. For example, if the site's default setting is to allow setting a Reserve Price, but <b>ORPA</b> is returned as <code>true</code>, this particular category does not support setting a Reserve Price. Or, if the site's default setting is not to allow setting a Reserve Price, but <b>ORPA</b> is returned as <code>true</code>, this particular category is the exception to that rule and does support setting a Reserve Price. If <b>ORPA</b> is <code>true</code> for the corresponding category, you can generally assume that the category's subcategories inherit the same setting. 'ORPA' is an acronym for 'Override Reserve Price Allowed'.
     *  <br>
     *  <br>
     *  This field is not returned when <code>false</code>.
     *
     * @return bool
     */
    public function getORPA()
    {
        return $this->oRPA;
    }

    /**
     * Sets a new oRPA
     *
     * If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reserve Price policy on auction listings. For example, if the site's default setting is to allow setting a Reserve Price, but <b>ORPA</b> is returned as <code>true</code>, this particular category does not support setting a Reserve Price. Or, if the site's default setting is not to allow setting a Reserve Price, but <b>ORPA</b> is returned as <code>true</code>, this particular category is the exception to that rule and does support setting a Reserve Price. If <b>ORPA</b> is <code>true</code> for the corresponding category, you can generally assume that the category's subcategories inherit the same setting. 'ORPA' is an acronym for 'Override Reserve Price Allowed'.
     *  <br>
     *  <br>
     *  This field is not returned when <code>false</code>.
     *
     * @param bool $oRPA
     * @return self
     */
    public function setORPA($oRPA)
    {
        $this->oRPA = $oRPA;
        return $this;
    }

    /**
     * Gets as oRRA
     *
     * If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reduce Reserve Price (on active auction listing) policy. For example, if the site's default setting is to allow reducing a Reserve Price for the active auction listing, but <b>ORRA</b> is returned as <code>true</code>, this particular category does not support reducing a Reserve Price. Or, if the site's default setting is not to allow reducting a Reserve Price, but <b>ORRA</b> is returned as <code>true</code>, this particular category is the exception to that rule and does support reducing a Reserve Price. If <b>ORRA</b> is <code>true</code> for the corresponding category, you can generally assume that the category's subcategories inherit the same setting. 'ORRA' is an acronym for 'Override Reduce Reserve Allowed'.
     *  <br>
     *  <br>
     *  This field is not returned when <code>false</code>.
     *
     * @return bool
     */
    public function getORRA()
    {
        return $this->oRRA;
    }

    /**
     * Sets a new oRRA
     *
     * If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reduce Reserve Price (on active auction listing) policy. For example, if the site's default setting is to allow reducing a Reserve Price for the active auction listing, but <b>ORRA</b> is returned as <code>true</code>, this particular category does not support reducing a Reserve Price. Or, if the site's default setting is not to allow reducting a Reserve Price, but <b>ORRA</b> is returned as <code>true</code>, this particular category is the exception to that rule and does support reducing a Reserve Price. If <b>ORRA</b> is <code>true</code> for the corresponding category, you can generally assume that the category's subcategories inherit the same setting. 'ORRA' is an acronym for 'Override Reduce Reserve Allowed'.
     *  <br>
     *  <br>
     *  This field is not returned when <code>false</code>.
     *
     * @param bool $oRRA
     * @return self
     */
    public function setORRA($oRRA)
    {
        $this->oRRA = $oRRA;
        return $this;
    }

    /**
     * Gets as lSD
     *
     * If this field is returned as <code>true</code>, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. 'LSD' is an acronym for 'Lot Size Disabled'. 'Lot Size' refers to the <b>LotSize</b> field in the Add/Revise/Relisting calls that is conditionally required if the seller is creating a lot listing. The <b>LSD</b> field is not returned when <code>false</code>.
     *
     * @return bool
     */
    public function getLSD()
    {
        return $this->lSD;
    }

    /**
     * Sets a new lSD
     *
     * If this field is returned as <code>true</code>, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. 'LSD' is an acronym for 'Lot Size Disabled'. 'Lot Size' refers to the <b>LotSize</b> field in the Add/Revise/Relisting calls that is conditionally required if the seller is creating a lot listing. The <b>LSD</b> field is not returned when <code>false</code>.
     *
     * @param bool $lSD
     * @return self
     */
    public function setLSD($lSD)
    {
        $this->lSD = $lSD;
        return $this;
    }

    /**
     * Gets as keywords
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * This field is deprecated.
     *
     * @param string $keywords
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBestOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled", $value);
        }
        $value = $this->getAutoPayEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutoPayEnabled", $value);
        }
        $value = $this->getB2BVATEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}B2BVATEnabled", $value);
        }
        $value = $this->getCatalogEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CatalogEnabled", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getCategoryLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryLevel", $value);
        }
        $value = $this->getCategoryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryName", $value);
        }
        $value = $this->getCategoryParentID();
        if (null !== $value && !empty($this->getCategoryParentID())) {
            $writer->write(array_map(function ($v) {
                return ["CategoryParentID" => $v];
            }, $value));
        }
        $value = $this->getCategoryParentName();
        if (null !== $value && !empty($this->getCategoryParentName())) {
            $writer->write(array_map(function ($v) {
                return ["CategoryParentName" => $v];
            }, $value));
        }
        $value = $this->getProductSearchPageAvailable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductSearchPageAvailable", $value);
        }
        $value = $this->getProductFinderIDs();
        if (null !== $value && !empty($this->getProductFinderIDs())) {
            $writer->write(array_map(function ($v) {
                return ["ProductFinderIDs" => $v];
            }, $value));
        }
        $value = $this->getCharacteristicsSets();
        if (null !== $value && !empty($this->getCharacteristicsSets())) {
            $writer->write(array_map(function ($v) {
                return ["CharacteristicsSets" => $v];
            }, $value));
        }
        $value = $this->getExpired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Expired", $value);
        }
        $value = $this->getIntlAutosFixedCat();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IntlAutosFixedCat", $value);
        }
        $value = $this->getLeafCategory();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LeafCategory", $value);
        }
        $value = $this->getVirtual();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Virtual", $value);
        }
        $value = $this->getNumOfItems();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NumOfItems", $value);
        }
        $value = $this->getSellerGuaranteeEligible();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerGuaranteeEligible", $value);
        }
        $value = $this->getORPA();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ORPA", $value);
        }
        $value = $this->getORRA();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ORRA", $value);
        }
        $value = $this->getLSD();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LSD", $value);
        }
        $value = $this->getKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Keywords", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled');
        if (null !== $value) {
            $this->setBestOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutoPayEnabled');
        if (null !== $value) {
            $this->setAutoPayEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}B2BVATEnabled');
        if (null !== $value) {
            $this->setB2BVATEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CatalogEnabled');
        if (null !== $value) {
            $this->setCatalogEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryLevel');
        if (null !== $value) {
            $this->setCategoryLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryName');
        if (null !== $value) {
            $this->setCategoryName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryParentID', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryParentID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryParentName', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryParentName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSearchPageAvailable');
        if (null !== $value) {
            $this->setProductSearchPageAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductFinderIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setProductFinderIDs(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ExtendedProductFinderIDType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharacteristicsSets', true);
        if (null !== $value && !empty($value)) {
            $this->setCharacteristicsSets(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\CharacteristicsSetType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Expired');
        if (null !== $value) {
            $this->setExpired($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IntlAutosFixedCat');
        if (null !== $value) {
            $this->setIntlAutosFixedCat($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LeafCategory');
        if (null !== $value) {
            $this->setLeafCategory($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Virtual');
        if (null !== $value) {
            $this->setVirtual($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumOfItems');
        if (null !== $value) {
            $this->setNumOfItems($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerGuaranteeEligible');
        if (null !== $value) {
            $this->setSellerGuaranteeEligible($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ORPA');
        if (null !== $value) {
            $this->setORPA($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ORRA');
        if (null !== $value) {
            $this->setORRA($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LSD');
        if (null !== $value) {
            $this->setLSD($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Keywords');
        if (null !== $value) {
            $this->setKeywords($value);
        }
    }
}
