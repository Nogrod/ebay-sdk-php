<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddItemFromSellingManagerTemplateResponseType
 *
 * Returns the item ID, the estimated fees for the new listing (except the Final Value Fee, which isn't calculated until the item has sold), the start and end times of the listing, and other details.
 * XSD Type: AddItemFromSellingManagerTemplateResponseType
 */
class AddItemFromSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * Unique identifier for the new listing. This field is returned as long as the listing was successfully created.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>ScheduleTime</b> field in the request and set a custom start time of the listing (in the future).
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled) this value will be set one month ahead of the start time, and this value will continue to be updated one month ahead each time the GTC listing needs to be renewed. Fixed-price listings get renewed automatically as long as there is still a quantity of <code>1</code> or above, or even if the quantity is <code>0</code>, but the 'out-of-stock control' feature is enabled.
     *  <br><br>
     *  Note that <code>GTC</code> is not a supported listing duration for auction listings, but is the only supported listing duration for fixed-price listings except for a few motor vehicle categories on eBay Motors US, eBay UK, and eBay Italy.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change. </span>
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * This container is an array of fees associated with the creation of the listing. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItemFromSellingManagerTemplate</b> call to list an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fees
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
     * Gets as itemID
     *
     * Unique identifier for the new listing. This field is returned as long as the listing was successfully created.
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
     * Unique identifier for the new listing. This field is returned as long as the listing was successfully created.
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
     * Gets as startTime
     *
     * Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>ScheduleTime</b> field in the request and set a custom start time of the listing (in the future).
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
     * Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>ScheduleTime</b> field in the request and set a custom start time of the listing (in the future).
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
     * Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled) this value will be set one month ahead of the start time, and this value will continue to be updated one month ahead each time the GTC listing needs to be renewed. Fixed-price listings get renewed automatically as long as there is still a quantity of <code>1</code> or above, or even if the quantity is <code>0</code>, but the 'out-of-stock control' feature is enabled.
     *  <br><br>
     *  Note that <code>GTC</code> is not a supported listing duration for auction listings, but is the only supported listing duration for fixed-price listings except for a few motor vehicle categories on eBay Motors US, eBay UK, and eBay Italy.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change. </span>
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
     * Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to <code>GTC</code> (Good 'Til Cancelled) this value will be set one month ahead of the start time, and this value will continue to be updated one month ahead each time the GTC listing needs to be renewed. Fixed-price listings get renewed automatically as long as there is still a quantity of <code>1</code> or above, or even if the quantity is <code>0</code>, but the 'out-of-stock control' feature is enabled.
     *  <br><br>
     *  Note that <code>GTC</code> is not a supported listing duration for auction listings, but is the only supported listing duration for fixed-price listings except for a few motor vehicle categories on eBay Motors US, eBay UK, and eBay Italy.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change. </span>
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
     * This container is an array of fees associated with the creation of the listing. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItemFromSellingManagerTemplate</b> call to list an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * This container is an array of fees associated with the creation of the listing. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItemFromSellingManagerTemplate</b> call to list an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * This container is an array of fees associated with the creation of the listing. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItemFromSellingManagerTemplate</b> call to list an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * This container is an array of fees associated with the creation of the listing. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItemFromSellingManagerTemplate</b> call to list an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * This container is an array of fees associated with the creation of the listing. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItemFromSellingManagerTemplate</b> call to list an item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
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
                return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);
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
    }
}
