<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddItemResponseContainerType
 *
 * Type defining the <b>AddItemResponseContainer</b> containers that are returned in an <b>AddItems</b> call. An <b>AddItemResponseContainer</b> container is returned for each item created through an <b>AddItems</b> call. Each item being created through an <b>AddItems</b> call is identified through a unique <b>AddItemRequestContainer.MessageID</b> value that is defined by the seller. To match up the <b>AddItemResponseContainer</b> to the <b>AddItemRequestContainer</b>, look for a <b>AddItemResponseContainer.CorrelationID</b> value that matches the <b>AddItemRequestContainer.MessageID</b> value in the request.
 * XSD Type: AddItemResponseContainerType
 */
class AddItemResponseContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier for the new listing. This field is returned as long as the listing was successfully created.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>Item.ScheduleTime</b> field in the request and set a custom start time of the listing (in the future).
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
     *  All listing fee types are returned, even if those fees are not applicable for the revised listings and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItems</b> call to list items on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>AddItems</b>, a unique <b>MessageID</b> value is required for
     *  each <b>AddItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddItemResponseContainer</b> container is used to correlate each
     *  item request container with its corresponding response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * This container is an array of one or more errors and/or warnings (if any) that occurred when eBay attempted to create the corresponding listing. Note that one or more errors and/or warnings may also occur at the call-level.
     *  <br>
     *  <br>
     *  This container is only returned if there were one or more warnings and/or errors that occurred with the creation of the corresponding listing.
     *
     * @var \Nogrod\eBaySDK\Trading\ErrorType[] $errors
     */
    private $errors = [

    ];

    /**
     * Supplemental information from eBay, if applicable. May elaborate on errors or
     *  provide useful hints for the seller. This data can accompany the call's normal
     *  data result set or a result set that contains only errors. The string can
     *  return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML-
     *  based application should be able to include the HTML as-is in the HTML page
     *  that displays the results. A non-HTML application would need to parse the HTML
     *  and convert the table elements and image references into UI elements
     *  particular to the programming language used. Because this data is returned as
     *  a string, the HTML markup elements are escaped with character entity
     *  references (e.g.,&lt;table&gt;&lt;tr&gt;...).
     *
     * @var string $message
     */
    private $message = null;

    /**
     * This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     *
     * @var string[] $discountReason
     */
    private $discountReason = [

    ];

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
     *  All listing fee types are returned, even if those fees are not applicable for the revised listings and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItems</b> call to list items on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     *  All listing fee types are returned, even if those fees are not applicable for the revised listings and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItems</b> call to list items on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     *  All listing fee types are returned, even if those fees are not applicable for the revised listings and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItems</b> call to list items on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     *  All listing fee types are returned, even if those fees are not applicable for the revised listings and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItems</b> call to list items on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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
     *  All listing fee types are returned, even if those fees are not applicable for the revised listings and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItems</b> call to list items on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
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

    /**
     * Gets as correlationID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>AddItems</b>, a unique <b>MessageID</b> value is required for
     *  each <b>AddItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddItemResponseContainer</b> container is used to correlate each
     *  item request container with its corresponding response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>AddItems</b>, a unique <b>MessageID</b> value is required for
     *  each <b>AddItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddItemResponseContainer</b> container is used to correlate each
     *  item request container with its corresponding response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Adds as errors
     *
     * This container is an array of one or more errors and/or warnings (if any) that occurred when eBay attempted to create the corresponding listing. Note that one or more errors and/or warnings may also occur at the call-level.
     *  <br>
     *  <br>
     *  This container is only returned if there were one or more warnings and/or errors that occurred with the creation of the corresponding listing.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ErrorType $errors
     */
    public function addToErrors(\Nogrod\eBaySDK\Trading\ErrorType $errors)
    {
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * This container is an array of one or more errors and/or warnings (if any) that occurred when eBay attempted to create the corresponding listing. Note that one or more errors and/or warnings may also occur at the call-level.
     *  <br>
     *  <br>
     *  This container is only returned if there were one or more warnings and/or errors that occurred with the creation of the corresponding listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * This container is an array of one or more errors and/or warnings (if any) that occurred when eBay attempted to create the corresponding listing. Note that one or more errors and/or warnings may also occur at the call-level.
     *  <br>
     *  <br>
     *  This container is only returned if there were one or more warnings and/or errors that occurred with the creation of the corresponding listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * This container is an array of one or more errors and/or warnings (if any) that occurred when eBay attempted to create the corresponding listing. Note that one or more errors and/or warnings may also occur at the call-level.
     *  <br>
     *  <br>
     *  This container is only returned if there were one or more warnings and/or errors that occurred with the creation of the corresponding listing.
     *
     * @return \Nogrod\eBaySDK\Trading\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * This container is an array of one or more errors and/or warnings (if any) that occurred when eBay attempted to create the corresponding listing. Note that one or more errors and/or warnings may also occur at the call-level.
     *  <br>
     *  <br>
     *  This container is only returned if there were one or more warnings and/or errors that occurred with the creation of the corresponding listing.
     *
     * @param \Nogrod\eBaySDK\Trading\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as message
     *
     * Supplemental information from eBay, if applicable. May elaborate on errors or
     *  provide useful hints for the seller. This data can accompany the call's normal
     *  data result set or a result set that contains only errors. The string can
     *  return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML-
     *  based application should be able to include the HTML as-is in the HTML page
     *  that displays the results. A non-HTML application would need to parse the HTML
     *  and convert the table elements and image references into UI elements
     *  particular to the programming language used. Because this data is returned as
     *  a string, the HTML markup elements are escaped with character entity
     *  references (e.g.,&lt;table&gt;&lt;tr&gt;...).
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * Supplemental information from eBay, if applicable. May elaborate on errors or
     *  provide useful hints for the seller. This data can accompany the call's normal
     *  data result set or a result set that contains only errors. The string can
     *  return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML-
     *  based application should be able to include the HTML as-is in the HTML page
     *  that displays the results. A non-HTML application would need to parse the HTML
     *  and convert the table elements and image references into UI elements
     *  particular to the programming language used. Because this data is returned as
     *  a string, the HTML markup elements are escaped with character entity
     *  references (e.g.,&lt;table&gt;&lt;tr&gt;...).
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fees", array_map(function ($v) {return ["Fee" => $v];}, $value));
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getCategory2ID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Category2ID", $value);
        }
        $value = $this->getCorrelationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CorrelationID", $value);
        }
        $value = $this->getErrors();
        if (null !== $value && !empty($this->getErrors())) {
            $writer->write(array_map(function ($v) {return ["Errors" => $v];}, $value));
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Message", $value);
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
            $this->setFees(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category2ID');
        if (null !== $value) {
            $this->setCategory2ID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CorrelationID');
        if (null !== $value) {
            $this->setCorrelationID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Errors', true);
        if (null !== $value && !empty($value)) {
            $this->setErrors(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ErrorType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Message');
        if (null !== $value) {
            $this->setMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountReason', true);
        if (null !== $value && !empty($value)) {
            $this->setDiscountReason($value);
        }
    }
}
