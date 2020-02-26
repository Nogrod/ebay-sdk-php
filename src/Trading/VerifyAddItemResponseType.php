<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing VerifyAddItemResponseType
 *
 * Returns the listing recommendations (if applicable), the estimated fees for the proposed new listing (except the Final Value Fee, which isn't calculated until the item has sold), and other details.
 * XSD Type: VerifyAddItemResponseType
 */
class VerifyAddItemResponseType extends AbstractResponseType
{

    /**
     * With a successful <b>VerifyAddItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually create an active listing.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Child Fee containers provide the listing feature names, fees, and possible discounts for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. <br /> <br /> There is no guarantee that a PromotionalDiscount returned with VerifyAddItem will be realized when the seller uses AddItem to list the same item. This is the result of the timing of certain promotions.
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fees
     */
    private $fees = null;

    /**
     * This field is deprecated.
     *
     * @var bool $expressListing
     */
    private $expressListing = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ExpressItemRequirementsType $expressItemRequirements
     */
    private $expressItemRequirements = null;

    /**
     * ID of the primary category in which the item would be listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID you passed in PrimaryCategory was mapped to a new ID by eBay.
     *  If the primary category has not changed or it has expired with no replacement,
     *  CategoryID does not return a value.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * ID of the secondary category in which the item would be listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID you passed in SecondaryCategory was mapped to a new ID by eBay.
     *  If the secondary category has not changed or it has expired with no replacement,
     *  Category2ID does not return a value.
     *
     * @var string $category2ID
     */
    private $category2ID = null;

    /**
     * The nature of the discount, if a discount would have applied
     *  had this actually been listed at this time.
     *
     * @var string[] $discountReason
     */
    private $discountReason = [
        
    ];

    /**
     * Provides a list of products recommended by eBay which match the item information provided by the seller.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductSuggestionType[] $productSuggestions
     */
    private $productSuggestions = null;

    /**
     * Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge.
     *  <br><br>
     *  This container is only returned if the <b>IncludeRecommendations</b>
     *  flag was included and set to 'true' in the <b>VerifyAddItem</b> request, and if
     *  at least one listing recommendation exists for the listing about to be listed. If
     *  one or more listing recommendations are returned, it will be at the seller's
     *  discretion about whether to revise the listing based on eBay's listing
     *  recommendation(s) before actually creating the listing through an
     *  <b>AddItem</b> call.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingRecommendationType[] $listingRecommendations
     */
    private $listingRecommendations = null;

    /**
     * Gets as itemID
     *
     * With a successful <b>VerifyAddItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually create an active listing.
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
     * With a successful <b>VerifyAddItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually create an active listing.
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
     * Adds as fee
     *
     * Child Fee containers provide the listing feature names, fees, and possible discounts for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. <br /> <br /> There is no guarantee that a PromotionalDiscount returned with VerifyAddItem will be realized when the seller uses AddItem to list the same item. This is the result of the timing of certain promotions.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeeType $fee
     */
    public function addToFees(\Nogrod\eBaySDK\Trading\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * Child Fee containers provide the listing feature names, fees, and possible discounts for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. <br /> <br /> There is no guarantee that a PromotionalDiscount returned with VerifyAddItem will be realized when the seller uses AddItem to list the same item. This is the result of the timing of certain promotions.
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
     * Child Fee containers provide the listing feature names, fees, and possible discounts for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. <br /> <br /> There is no guarantee that a PromotionalDiscount returned with VerifyAddItem will be realized when the seller uses AddItem to list the same item. This is the result of the timing of certain promotions.
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
     * Child Fee containers provide the listing feature names, fees, and possible discounts for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. <br /> <br /> There is no guarantee that a PromotionalDiscount returned with VerifyAddItem will be realized when the seller uses AddItem to list the same item. This is the result of the timing of certain promotions.
     *
     * @return \Nogrod\eBaySDK\Trading\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Child Fee containers provide the listing feature names, fees, and possible discounts for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. <br /> <br /> There is no guarantee that a PromotionalDiscount returned with VerifyAddItem will be realized when the seller uses AddItem to list the same item. This is the result of the timing of certain promotions.
     *
     * @param \Nogrod\eBaySDK\Trading\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as expressListing
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getExpressListing()
    {
        return $this->expressListing;
    }

    /**
     * Sets a new expressListing
     *
     * This field is deprecated.
     *
     * @param bool $expressListing
     * @return self
     */
    public function setExpressListing($expressListing)
    {
        $this->expressListing = $expressListing;
        return $this;
    }

    /**
     * Gets as expressItemRequirements
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ExpressItemRequirementsType
     */
    public function getExpressItemRequirements()
    {
        return $this->expressItemRequirements;
    }

    /**
     * Sets a new expressItemRequirements
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ExpressItemRequirementsType $expressItemRequirements
     * @return self
     */
    public function setExpressItemRequirements(\Nogrod\eBaySDK\Trading\ExpressItemRequirementsType $expressItemRequirements)
    {
        $this->expressItemRequirements = $expressItemRequirements;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * ID of the primary category in which the item would be listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID you passed in PrimaryCategory was mapped to a new ID by eBay.
     *  If the primary category has not changed or it has expired with no replacement,
     *  CategoryID does not return a value.
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
     * ID of the primary category in which the item would be listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID you passed in PrimaryCategory was mapped to a new ID by eBay.
     *  If the primary category has not changed or it has expired with no replacement,
     *  CategoryID does not return a value.
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
     * ID of the secondary category in which the item would be listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID you passed in SecondaryCategory was mapped to a new ID by eBay.
     *  If the secondary category has not changed or it has expired with no replacement,
     *  Category2ID does not return a value.
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
     * ID of the secondary category in which the item would be listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID you passed in SecondaryCategory was mapped to a new ID by eBay.
     *  If the secondary category has not changed or it has expired with no replacement,
     *  Category2ID does not return a value.
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
     * The nature of the discount, if a discount would have applied
     *  had this actually been listed at this time.
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
     * The nature of the discount, if a discount would have applied
     *  had this actually been listed at this time.
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
     * The nature of the discount, if a discount would have applied
     *  had this actually been listed at this time.
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
     * The nature of the discount, if a discount would have applied
     *  had this actually been listed at this time.
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
     * The nature of the discount, if a discount would have applied
     *  had this actually been listed at this time.
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
     * Provides a list of products recommended by eBay which match the item information provided by the seller.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ProductSuggestionType $productSuggestion
     */
    public function addToProductSuggestions(\Nogrod\eBaySDK\Trading\ProductSuggestionType $productSuggestion)
    {
        $this->productSuggestions[] = $productSuggestion;
        return $this;
    }

    /**
     * isset productSuggestions
     *
     * Provides a list of products recommended by eBay which match the item information provided by the seller.
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
     * Provides a list of products recommended by eBay which match the item information provided by the seller.
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
     * Provides a list of products recommended by eBay which match the item information provided by the seller.
     *
     * @return \Nogrod\eBaySDK\Trading\ProductSuggestionType[]
     */
    public function getProductSuggestions()
    {
        return $this->productSuggestions;
    }

    /**
     * Sets a new productSuggestions
     *
     * Provides a list of products recommended by eBay which match the item information provided by the seller.
     *
     * @param \Nogrod\eBaySDK\Trading\ProductSuggestionType[] $productSuggestions
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
     *  This container is only returned if the <b>IncludeRecommendations</b>
     *  flag was included and set to 'true' in the <b>VerifyAddItem</b> request, and if
     *  at least one listing recommendation exists for the listing about to be listed. If
     *  one or more listing recommendations are returned, it will be at the seller's
     *  discretion about whether to revise the listing based on eBay's listing
     *  recommendation(s) before actually creating the listing through an
     *  <b>AddItem</b> call.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ListingRecommendationType $recommendation
     */
    public function addToListingRecommendations(\Nogrod\eBaySDK\Trading\ListingRecommendationType $recommendation)
    {
        $this->listingRecommendations[] = $recommendation;
        return $this;
    }

    /**
     * isset listingRecommendations
     *
     * Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge.
     *  <br><br>
     *  This container is only returned if the <b>IncludeRecommendations</b>
     *  flag was included and set to 'true' in the <b>VerifyAddItem</b> request, and if
     *  at least one listing recommendation exists for the listing about to be listed. If
     *  one or more listing recommendations are returned, it will be at the seller's
     *  discretion about whether to revise the listing based on eBay's listing
     *  recommendation(s) before actually creating the listing through an
     *  <b>AddItem</b> call.
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
     *  This container is only returned if the <b>IncludeRecommendations</b>
     *  flag was included and set to 'true' in the <b>VerifyAddItem</b> request, and if
     *  at least one listing recommendation exists for the listing about to be listed. If
     *  one or more listing recommendations are returned, it will be at the seller's
     *  discretion about whether to revise the listing based on eBay's listing
     *  recommendation(s) before actually creating the listing through an
     *  <b>AddItem</b> call.
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
     *  This container is only returned if the <b>IncludeRecommendations</b>
     *  flag was included and set to 'true' in the <b>VerifyAddItem</b> request, and if
     *  at least one listing recommendation exists for the listing about to be listed. If
     *  one or more listing recommendations are returned, it will be at the seller's
     *  discretion about whether to revise the listing based on eBay's listing
     *  recommendation(s) before actually creating the listing through an
     *  <b>AddItem</b> call.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingRecommendationType[]
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
     *  This container is only returned if the <b>IncludeRecommendations</b>
     *  flag was included and set to 'true' in the <b>VerifyAddItem</b> request, and if
     *  at least one listing recommendation exists for the listing about to be listed. If
     *  one or more listing recommendations are returned, it will be at the seller's
     *  discretion about whether to revise the listing based on eBay's listing
     *  recommendation(s) before actually creating the listing through an
     *  <b>AddItem</b> call.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingRecommendationType[] $listingRecommendations
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
        $value = $this->getFees();
        if (null !== $value && !empty($this->getFees())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fees", array_map(function ($v) {
                return ["Fee" => $v];
            }, $value));
        }
        $value = $this->getExpressListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressListing", $value);
        }
        $value = $this->getExpressItemRequirements();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressItemRequirements", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fees', true);
        if (null !== $value && !empty($value)) {
            $this->setFees(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressListing');
        if (null !== $value) {
            $this->setExpressListing($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressItemRequirements');
        if (null !== $value) {
            $this->setExpressItemRequirements(\Nogrod\eBaySDK\Trading\ExpressItemRequirementsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category2ID');
        if (null !== $value) {
            $this->setCategory2ID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountReason', true);
        if (null !== $value && !empty($value)) {
            $this->setDiscountReason($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSuggestions', true);
        if (null !== $value && !empty($value)) {
            $this->setProductSuggestions(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ProductSuggestionType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingRecommendations', true);
        if (null !== $value && !empty($value)) {
            $this->setListingRecommendations(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ListingRecommendationType::fromKeyValue($v);
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
