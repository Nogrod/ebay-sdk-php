<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VerifyAddFixedPriceItemResponseType
 *
 * Returns the listing recommendations (if applicable), the estimated fees for the proposed new listing (except the Final Value Fee, which isn't calculated until the item has sold), and other details.
 * XSD Type: VerifyAddFixedPriceItemResponseType
 */
class VerifyAddFixedPriceItemResponseType extends AbstractResponseType
{
    /**
     * With a successful <b>VerifyAddFixedPriceItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually create an active listing.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Item-level SKU for the new listing, if the seller specified
     *  tem.SKU in the request. Variation SKUs are not returned
     *  (see GetItem instead).
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyAddFixedPriceItem<b> call was published. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>VerifyAddFixedPriceItem</b> call to verify a listing on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * Gets as itemID
     *
     * With a successful <b>VerifyAddFixedPriceItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually create an active listing.
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
     * With a successful <b>VerifyAddFixedPriceItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually create an active listing.
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
     * Item-level SKU for the new listing, if the seller specified
     *  tem.SKU in the request. Variation SKUs are not returned
     *  (see GetItem instead).
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
     * Item-level SKU for the new listing, if the seller specified
     *  tem.SKU in the request. Variation SKUs are not returned
     *  (see GetItem instead).
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
     * Adds as fee
     *
     * This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyAddFixedPriceItem<b> call was published. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>VerifyAddFixedPriceItem</b> call to verify a listing on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyAddFixedPriceItem<b> call was published. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>VerifyAddFixedPriceItem</b> call to verify a listing on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyAddFixedPriceItem<b> call was published. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>VerifyAddFixedPriceItem</b> call to verify a listing on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyAddFixedPriceItem<b> call was published. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>VerifyAddFixedPriceItem</b> call to verify a listing on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyAddFixedPriceItem<b> call was published. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>VerifyAddFixedPriceItem</b> call to verify a listing on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        $value = $this->getFees();
        if (null !== $value && !empty($this->getFees())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fees", array_map(function ($v) {return ["Fee" => $v];}, $value));
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
            $writer->write(array_map(function ($v) {return ["DiscountReason" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fees', true);
        if (null !== $value && !empty($value)) {
            $this->setFees(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressListing');
        if (null !== $value) {
            $this->setExpressListing($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressItemRequirements');
        if (null !== $value) {
            $this->setExpressItemRequirements(\Nogrod\eBaySDK\Trading\ExpressItemRequirementsType::fromKeyValue($value));
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
    }
}
