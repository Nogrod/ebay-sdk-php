<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RelistFixedPriceItemResponseType
 *
 * The base response type for the <b>RelistFixedPriceItem</b> call. The response includes the Item ID for the relisted item, the SKU value for the item (if any), listing recommendations (if applicable), the estimated fees for the relisted item (except the transaction fees, which aren't calculated until the item has sold), the start and end times of the listing, and other details.
 * XSD Type: RelistFixedPriceItemResponseType
 */
class RelistFixedPriceItemResponseType extends AbstractResponseType
{
    /**
     * The unique identifier for the relisted item. Note that the <b>ItemID</b> value changes when a listing is relisted, so this will not be the same <b>ItemID</b> value that was passed in the call request.
     *  <br/><br/>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The seller-defined SKU value for the new listing (if a SKU value exists for the item).
     *  <br/><br/>
     *  Note that variation-level SKU values will not be returned if a multiple-variation listing was relisted. The seller would have to make a <b>GetItem</b> call to get variation-level SKU values.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as transaction fees) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistFixedPriceItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * Date and time when the relisted item is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled), this value will be set one month ahead of the start time and will be updated if the GTC listing is still alive. GTC listings are automatically renewed each month according to the calendar day.
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
     * Provides a list of products recommended by eBay which match the item information
     *  provided by the seller.
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
     * Gets as sKU
     *
     * The seller-defined SKU value for the new listing (if a SKU value exists for the item).
     *  <br/><br/>
     *  Note that variation-level SKU values will not be returned if a multiple-variation listing was relisted. The seller would have to make a <b>GetItem</b> call to get variation-level SKU values.
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
     * The seller-defined SKU value for the new listing (if a SKU value exists for the item).
     *  <br/><br/>
     *  Note that variation-level SKU values will not be returned if a multiple-variation listing was relisted. The seller would have to make a <b>GetItem</b> call to get variation-level SKU values.
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
     * This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as transaction fees) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistFixedPriceItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeeType $fee
     */
    public function addToFees(\Nogrod\eBaySDK\Trading\FeeType $fee)
    {
        if (!is_array($this->fees)) {
            throw new \LogicException('fees is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistFixedPriceItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistFixedPriceItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistFixedPriceItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeeType>
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
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistFixedPriceItem</b> call to relist an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeeType> $fees
     * @return self
     */
    public function setFees(iterable $fees)
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
     * Date and time when the relisted item is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled), this value will be set one month ahead of the start time and will be updated if the GTC listing is still alive. GTC listings are automatically renewed each month according to the calendar day.
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
     * Date and time when the relisted item is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled), this value will be set one month ahead of the start time and will be updated if the GTC listing is still alive. GTC listings are automatically renewed each month according to the calendar day.
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
        if (!is_array($this->discountReason)) {
            throw new \LogicException('discountReason is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setDiscountReason(iterable $discountReason)
    {
        $this->discountReason = $discountReason;
        return $this;
    }

    /**
     * Adds as productSuggestion
     *
     * Provides a list of products recommended by eBay which match the item information
     *  provided by the seller.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ProductSuggestionType $productSuggestion
     */
    public function addToProductSuggestions(\Nogrod\eBaySDK\Trading\ProductSuggestionType $productSuggestion)
    {
        if (!is_array($this->productSuggestions)) {
            throw new \LogicException('productSuggestions is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->productSuggestions[] = $productSuggestion;
        return $this;
    }

    /**
     * isset productSuggestions
     *
     * Provides a list of products recommended by eBay which match the item information
     *  provided by the seller.
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
     * Provides a list of products recommended by eBay which match the item information
     *  provided by the seller.
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
     * Provides a list of products recommended by eBay which match the item information
     *  provided by the seller.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ProductSuggestionType>
     */
    public function getProductSuggestions()
    {
        return $this->productSuggestions;
    }

    /**
     * Sets a new productSuggestions
     *
     * Provides a list of products recommended by eBay which match the item information
     *  provided by the seller.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ProductSuggestionType> $productSuggestions
     * @return self
     */
    public function setProductSuggestions(iterable $productSuggestions)
    {
        $this->productSuggestions = $productSuggestions;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->sKU;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SKU', null, (string) $value);
        }
        $value = $this->fees;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'Fees', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Fee', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->startTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartTime', null, Func::formatDateTime($value));
        }
        $value = $this->endTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTime', null, Func::formatDateTime($value));
        }
        $value = $this->categoryID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CategoryID', null, (string) $value);
        }
        $value = $this->category2ID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Category2ID', null, (string) $value);
        }
        $value = $this->discountReason;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'DiscountReason', null, (string) $v);
            }
        }
        $value = $this->productSuggestions;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'ProductSuggestions', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'ProductSuggestion', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->fees = [];
        $this->discountReason = [];
        $this->productSuggestions = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'SKU':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sKU = $value;
                    }
                    return true;
                case 'Fees':
                    $this->fees = Func::readList($reader, 'Fee', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\FeeType::xmlRead($reader));
                    return true;
                case 'StartTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startTime = new \DateTime($value);
                    }
                    return true;
                case 'EndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTime = new \DateTime($value);
                    }
                    return true;
                case 'CategoryID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->categoryID = $value;
                    }
                    return true;
                case 'Category2ID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->category2ID = $value;
                    }
                    return true;
                case 'DiscountReason':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->discountReason[] = $value;
                    }
                    return true;
                case 'ProductSuggestions':
                    $this->productSuggestions = Func::readList($reader, 'ProductSuggestion', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\ProductSuggestionType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ItemID'] = $this->itemID;
        $data['SKU'] = $this->sKU;
        $data['Fees'] = Func::jsonList($this->fees);
        $data['StartTime'] = Func::jsonDate($this->startTime);
        $data['EndTime'] = Func::jsonDate($this->endTime);
        $data['CategoryID'] = $this->categoryID;
        $data['Category2ID'] = $this->category2ID;
        $data['DiscountReason'] = Func::jsonList($this->discountReason);
        $data['ProductSuggestions'] = Func::jsonList($this->productSuggestions);
        return $data;
    }
}
