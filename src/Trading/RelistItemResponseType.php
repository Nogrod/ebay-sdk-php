<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RelistItemResponseType
 *
 * The base response type for the <b>RelistItem</b> call. The response includes the Item ID for the relisted item, the SKU value for the item (if any), listing recommendations (if applicable), the estimated fees for the relisted item (except the transaction fees, which aren't calculated until the item has sold), the start and end times of the listing, and other details.
 * XSD Type: RelistItemResponseType
 */
class RelistItemResponseType extends AbstractResponseType
{
    /**
     * The unique identifier for the relisted item. Note that the <b>ItemID</b> value changes when a listing is relisted, so this will not be the same <b>ItemID</b> value that was passed in the call request.
     *  <br/><br/>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as transaction fees) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fees
     */
    private $fees = null;

    /**
     * This timestamp indicates the date and time when the relisted item became active on the eBay site.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * This timestamp indicates the date and time when the relisted item is scheduled to end on the eBay site. This date/time is calculated by using the <b>StartTime</b> and the listing duration. GTC listings are automatically renewed each month according to the calendar day.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Unique identifier of the primary eBay category in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID passed in the <b>Item.PrimaryCategory</b> field was mapped to a new category ID by eBay. If the primary category has not changed or it has expired with no replacement, this field is not returned.
     *  <br/><br/>
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * Unique identifier of the secondary eBay category (if one was used) in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID passed in the <b>Item.SecondaryCategory</b> field was mapped to a new category ID by eBay. If the secondary category has not changed or it has expired with no replacement, this field is not returned.
     *  <br/><br/>
     *
     * @var string $category2ID
     */
    private $category2ID = null;

    /**
     * This field is returned if an eBay special offer or promotion is applicable to the listing.
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
     * Gets as itemID
     *
     * The unique identifier for the relisted item. Note that the <b>ItemID</b> value changes when a listing is relisted, so this will not be the same <b>ItemID</b> value that was passed in the call request.
     *  <br/><br/>
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
     * The unique identifier for the relisted item. Note that the <b>ItemID</b> value changes when a listing is relisted, so this will not be the same <b>ItemID</b> value that was passed in the call request.
     *  <br/><br/>
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
     * This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as transaction fees) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as transaction fees) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as transaction fees) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as transaction fees) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as transaction fees) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * Gets as startTime
     *
     * This timestamp indicates the date and time when the relisted item became active on the eBay site.
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
     * This timestamp indicates the date and time when the relisted item became active on the eBay site.
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
     * This timestamp indicates the date and time when the relisted item is scheduled to end on the eBay site. This date/time is calculated by using the <b>StartTime</b> and the listing duration. GTC listings are automatically renewed each month according to the calendar day.
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
     * This timestamp indicates the date and time when the relisted item is scheduled to end on the eBay site. This date/time is calculated by using the <b>StartTime</b> and the listing duration. GTC listings are automatically renewed each month according to the calendar day.
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
     * Gets as categoryID
     *
     * Unique identifier of the primary eBay category in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID passed in the <b>Item.PrimaryCategory</b> field was mapped to a new category ID by eBay. If the primary category has not changed or it has expired with no replacement, this field is not returned.
     *  <br/><br/>
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
     * Unique identifier of the primary eBay category in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID passed in the <b>Item.PrimaryCategory</b> field was mapped to a new category ID by eBay. If the primary category has not changed or it has expired with no replacement, this field is not returned.
     *  <br/><br/>
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
     * Unique identifier of the secondary eBay category (if one was used) in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID passed in the <b>Item.SecondaryCategory</b> field was mapped to a new category ID by eBay. If the secondary category has not changed or it has expired with no replacement, this field is not returned.
     *  <br/><br/>
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
     * Unique identifier of the secondary eBay category (if one was used) in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID passed in the <b>Item.SecondaryCategory</b> field was mapped to a new category ID by eBay. If the secondary category has not changed or it has expired with no replacement, this field is not returned.
     *  <br/><br/>
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
     * This field is returned if an eBay special offer or promotion is applicable to the listing.
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
     * This field is returned if an eBay special offer or promotion is applicable to the listing.
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
     * This field is returned if an eBay special offer or promotion is applicable to the listing.
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
     * This field is returned if an eBay special offer or promotion is applicable to the listing.
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
     * This field is returned if an eBay special offer or promotion is applicable to the listing.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getFees();
        if (null !== $value && [] !== $this->getFees()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fees", array_map(function ($v) {return ["Fee" => $v];}, $value));
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
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
        if (null !== $value && [] !== $this->getDiscountReason()) {
            $writer->write(array_map(function ($v) {return ["DiscountReason" => $v];}, $value));
        }
        $value = $this->getProductSuggestions();
        if (null !== $value && [] !== $this->getProductSuggestions()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductSuggestions", array_map(function ($v) {return ["ProductSuggestion" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\RelistItemResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fees');
        if (null !== $value) {
            $this->setFees(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Fee'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category2ID');
        if (null !== $value) {
            $this->setCategory2ID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountReason', true);
        if (null !== $value) {
            $this->setDiscountReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSuggestions');
        if (null !== $value) {
            $this->setProductSuggestions(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ProductSuggestionType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}ProductSuggestion'));}, $value));
        }
    }
}
