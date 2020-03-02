<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddFixedPriceItemResponseType
 *
 * Returns the item ID, SKU (if any), listing recommendations (if applicable), the estimated fees for the new listing (except the Final Value Fee, which isn't calculated until the item has sold), the start and end times of the listing, and other details.
 * XSD Type: AddFixedPriceItemResponseType
 */
class AddFixedPriceItemResponseType extends AbstractResponseType
{

    /**
     * Unique identifier for the new fixed-price listing. This field is returned as long as the listing was successfully created.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The SKU value for an item is returned if the seller specified a SKU value through the <b>Item.SKU</b> field in the request. In the case of a multi-variation listing, variation-level SKU values are not returned in the response. To get this data, a <b>GetItem</b> call would have to be made by the seller.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>Item.ScheduleTime</b> field in the request and set a custom start time of the listing (in the future).
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled) this value will be set 30 days ahead of the start time, although this value will be updated if the GTC listing is still alive and automatically renewed 30 days after start time.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the
     *  <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change.
     *  </span>
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * This container is an array of fees associated with the creation of the listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
     *
     * @var \Nogrod\eBaySDK\MerchantData\FeeType[] $fees
     */
    private $fees = null;

    /**
     * The unique identifier of the primary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category ID passed in as the primary listing category was automatically mapped to a new Category ID by eBay. If the primary category ID passed in the request is still active/valid, this field is not returned.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * Unique identifier of the secondary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category ID passed in as the secondary listing category was automatically mapped to a new Category ID by eBay. If the secondary category ID passed in the request is still active/valid, this field is not returned.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
     *
     * @var string $category2ID
     */
    private $category2ID = null;

    /**
     * This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     *
     * @var string[] $discountReason
     */
    private $discountReason = [
        
    ];

    /**
     * This container holds an array of one or more products in the eBay product catalog that appear to match the product being listed, just based on the information in the listing. This container will not be returned if no similar products were found in the eBay product catalog.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProductSuggestionType[] $productSuggestions
     */
    private $productSuggestions = null;

    /**
     * Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge.
     *  <br><br>
     *  This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in the <b>AddFixedPriceItem</b> request, and if at least one listing recommendation exists for the newly created listing. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the item based on eBay's listing recommendation(s).
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingRecommendationType[] $listingRecommendations
     */
    private $listingRecommendations = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for the new fixed-price listing. This field is returned as long as the listing was successfully created.
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
     * Unique identifier for the new fixed-price listing. This field is returned as long as the listing was successfully created.
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
     * Gets as sKU
     *
     * The SKU value for an item is returned if the seller specified a SKU value through the <b>Item.SKU</b> field in the request. In the case of a multi-variation listing, variation-level SKU values are not returned in the response. To get this data, a <b>GetItem</b> call would have to be made by the seller.
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * The SKU value for an item is returned if the seller specified a SKU value through the <b>Item.SKU</b> field in the request. In the case of a multi-variation listing, variation-level SKU values are not returned in the response. To get this data, a <b>GetItem</b> call would have to be made by the seller.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>Item.ScheduleTime</b> field in the request and set a custom start time of the listing (in the future).
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>Item.ScheduleTime</b> field in the request and set a custom start time of the listing (in the future).
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled) this value will be set 30 days ahead of the start time, although this value will be updated if the GTC listing is still alive and automatically renewed 30 days after start time.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the
     *  <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change.
     *  </span>
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled) this value will be set 30 days ahead of the start time, although this value will be updated if the GTC listing is still alive and automatically renewed 30 days after start time.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the
     *  <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change.
     *  </span>
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Adds as fee
     *
     * This container is an array of fees associated with the creation of the listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\FeeType $fee
     */
    public function addToFees(\Nogrod\eBaySDK\MerchantData\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * This container is an array of fees associated with the creation of the listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * This container is an array of fees associated with the creation of the listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * This container is an array of fees associated with the creation of the listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
     *
     * @return \Nogrod\eBaySDK\MerchantData\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * This container is an array of fees associated with the creation of the listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
     *
     * @param \Nogrod\eBaySDK\MerchantData\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * The unique identifier of the primary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category ID passed in as the primary listing category was automatically mapped to a new Category ID by eBay. If the primary category ID passed in the request is still active/valid, this field is not returned.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
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
     * The unique identifier of the primary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category ID passed in as the primary listing category was automatically mapped to a new Category ID by eBay. If the primary category ID passed in the request is still active/valid, this field is not returned.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
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
     * Gets as category2ID
     *
     * Unique identifier of the secondary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category ID passed in as the secondary listing category was automatically mapped to a new Category ID by eBay. If the secondary category ID passed in the request is still active/valid, this field is not returned.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
     *
     * @return string
     */
    public function getCategory2ID()
    {
        return $this->category2ID;
    }

    /**
     * Sets a new category2ID
     *
     * Unique identifier of the secondary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category ID passed in as the secondary listing category was automatically mapped to a new Category ID by eBay. If the secondary category ID passed in the request is still active/valid, this field is not returned.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
     *
     * @param string $category2ID
     * @return self
     */
    public function setCategory2ID($category2ID)
    {
        $this->category2ID = $category2ID;
        return $this;
    }

    /**
     * Adds as discountReason
     *
     * This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     *
     * @return self
     * @param string $discountReason
     */
    public function addToDiscountReason($discountReason)
    {
        $this->discountReason[] = $discountReason;
        return $this;
    }

    /**
     * isset discountReason
     *
     * This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscountReason($index)
    {
        return isset($this->discountReason[$index]);
    }

    /**
     * unset discountReason
     *
     * This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscountReason($index)
    {
        unset($this->discountReason[$index]);
    }

    /**
     * Gets as discountReason
     *
     * This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     *
     * @return string[]
     */
    public function getDiscountReason()
    {
        return $this->discountReason;
    }

    /**
     * Sets a new discountReason
     *
     * This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     *
     * @param string $discountReason
     * @return self
     */
    public function setDiscountReason(array $discountReason)
    {
        $this->discountReason = $discountReason;
        return $this;
    }

    /**
     * Adds as productSuggestion
     *
     * This container holds an array of one or more products in the eBay product catalog that appear to match the product being listed, just based on the information in the listing. This container will not be returned if no similar products were found in the eBay product catalog.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ProductSuggestionType $productSuggestion
     */
    public function addToProductSuggestions(\Nogrod\eBaySDK\MerchantData\ProductSuggestionType $productSuggestion)
    {
        $this->productSuggestions[] = $productSuggestion;
        return $this;
    }

    /**
     * isset productSuggestions
     *
     * This container holds an array of one or more products in the eBay product catalog that appear to match the product being listed, just based on the information in the listing. This container will not be returned if no similar products were found in the eBay product catalog.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductSuggestions($index)
    {
        return isset($this->productSuggestions[$index]);
    }

    /**
     * unset productSuggestions
     *
     * This container holds an array of one or more products in the eBay product catalog that appear to match the product being listed, just based on the information in the listing. This container will not be returned if no similar products were found in the eBay product catalog.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductSuggestions($index)
    {
        unset($this->productSuggestions[$index]);
    }

    /**
     * Gets as productSuggestions
     *
     * This container holds an array of one or more products in the eBay product catalog that appear to match the product being listed, just based on the information in the listing. This container will not be returned if no similar products were found in the eBay product catalog.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProductSuggestionType[]
     */
    public function getProductSuggestions()
    {
        return $this->productSuggestions;
    }

    /**
     * Sets a new productSuggestions
     *
     * This container holds an array of one or more products in the eBay product catalog that appear to match the product being listed, just based on the information in the listing. This container will not be returned if no similar products were found in the eBay product catalog.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProductSuggestionType[] $productSuggestions
     * @return self
     */
    public function setProductSuggestions(array $productSuggestions)
    {
        $this->productSuggestions = $productSuggestions;
        return $this;
    }

    /**
     * Adds as recommendation
     *
     * Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge.
     *  <br><br>
     *  This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in the <b>AddFixedPriceItem</b> request, and if at least one listing recommendation exists for the newly created listing. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the item based on eBay's listing recommendation(s).
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ListingRecommendationType $recommendation
     */
    public function addToListingRecommendations(\Nogrod\eBaySDK\MerchantData\ListingRecommendationType $recommendation)
    {
        $this->listingRecommendations[] = $recommendation;
        return $this;
    }

    /**
     * isset listingRecommendations
     *
     * Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge.
     *  <br><br>
     *  This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in the <b>AddFixedPriceItem</b> request, and if at least one listing recommendation exists for the newly created listing. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the item based on eBay's listing recommendation(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingRecommendations($index)
    {
        return isset($this->listingRecommendations[$index]);
    }

    /**
     * unset listingRecommendations
     *
     * Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge.
     *  <br><br>
     *  This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in the <b>AddFixedPriceItem</b> request, and if at least one listing recommendation exists for the newly created listing. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the item based on eBay's listing recommendation(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingRecommendations($index)
    {
        unset($this->listingRecommendations[$index]);
    }

    /**
     * Gets as listingRecommendations
     *
     * Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge.
     *  <br><br>
     *  This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in the <b>AddFixedPriceItem</b> request, and if at least one listing recommendation exists for the newly created listing. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the item based on eBay's listing recommendation(s).
     *
     * @return \Nogrod\eBaySDK\MerchantData\ListingRecommendationType[]
     */
    public function getListingRecommendations()
    {
        return $this->listingRecommendations;
    }

    /**
     * Sets a new listingRecommendations
     *
     * Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge.
     *  <br><br>
     *  This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in the <b>AddFixedPriceItem</b> request, and if at least one listing recommendation exists for the newly created listing. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the item based on eBay's listing recommendation(s).
     *
     * @param \Nogrod\eBaySDK\MerchantData\ListingRecommendationType[] $listingRecommendations
     * @return self
     */
    public function setListingRecommendations(array $listingRecommendations)
    {
        $this->listingRecommendations = $listingRecommendations;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getFees();
        if (null !== $value && !empty($this->getFees())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fees", array_map(function ($v) {
                return ["Fee" => $v];
            }, $value));
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getCategory2ID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Category2ID", $value);
        }
        $value = $this->getDiscountReason();
        if (null !== $value && !empty($this->getDiscountReason())) {
            $writer->write(array_map(function ($v) {
                return ["DiscountReason" => $v];
            }, $value));
        }
        $value = $this->getProductSuggestions();
        if (null !== $value && !empty($this->getProductSuggestions())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductSuggestions", array_map(function ($v) {
                return ["ProductSuggestion" => $v];
            }, $value));
        }
        $value = $this->getListingRecommendations();
        if (null !== $value && !empty($this->getListingRecommendations())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingRecommendations", array_map(function ($v) {
                return ["Recommendation" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fees', true);
        if (null !== $value && !empty($value)) {
            $this->setFees(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\FeeType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category2ID');
        if (null !== $value) {
            $this->setCategory2ID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountReason', true);
        if (null !== $value && !empty($value)) {
            $this->setDiscountReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSuggestions', true);
        if (null !== $value && !empty($value)) {
            $this->setProductSuggestions(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ProductSuggestionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingRecommendations', true);
        if (null !== $value && !empty($value)) {
            $this->setListingRecommendations(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ListingRecommendationType::fromKeyValue($v);
            }, $value));
        }
    }
}
