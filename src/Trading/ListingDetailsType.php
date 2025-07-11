<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingDetailsType
 *
 * Various details about a listing. Some of the details are calculated or derived after
 *  an item is listed. The details in this type include the start and end time and
 *  the converted (localized) prices. The details in this type also include
 *  input values applicable to the Best Offer feature.
 *  Additional details in this type include flags indicating if a seller
 *  specified fields whose values are not visible to the requesting user.
 * XSD Type: ListingDetailsType
 */
class ListingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * If <code>true</code>, the item is listed in a Mature category. Users must accept
     *  the Mature Category agreement on the eBay site to retrieve
     *  items listed in Mature categories. (Users do not need to sign
     *  this agreement to be able to list items in Mature Categories.)
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $adult
     */
    private $adult = null;

    /**
     * Applicable for Real Estate auctions only. If <code>true</code>, buyers and sellers are expected to follow through on the sale. If false, bids for the Real Estate auction are only expressions of interest.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $bindingAuction
     */
    private $bindingAuction = null;

    /**
     * Indicates whether or not the seller's Checkout Enabled preference is turned on.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  A 'Checkout Enabled' setting is no longer available to sellers, and this field is always returned as <code>true</code>.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $checkoutEnabled
     */
    private $checkoutEnabled = null;

    /**
     * <br>
     *  Converted value of the <b>BuyItNowPrice</b> in the currency of
     *  the site that returned this response.
     *  For active items, refresh this value every 24 hours to
     *  pick up the current conversion rates.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedBuyItNowPrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedBuyItNowPrice
     */
    private $convertedBuyItNowPrice = null;

    /**
     * <br>
     *  Converted value of the <b>StartPrice</b> in the currency of
     *  the site that returned this response.
     *  For active items, refresh this value every 24 hours to
     *  pick up the current conversion rates.<br>
     *  <br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedStartPrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedStartPrice
     */
    private $convertedStartPrice = null;

    /**
     * <br>
     *  Converted value of the <b>ReservePrice</b> in the currency of the site that returned this response. Only returned for listings with a reserve price when the requesting user is the listing's seller. For active items, refresh this value every 24 hours to pick up the current conversion rates. Not applicable to fixed-price listings.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedReservePrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedReservePrice
     */
    private $convertedReservePrice = null;

    /**
     * If <code>true</code>, the seller specified a value in <b>ReservePrice</b>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $hasReservePrice
     */
    private $hasReservePrice = null;

    /**
     * Indicates the new item ID for a re-listed item. When an item is
     *  re-listed, the item ID for the new item is added to the
     *  old listing, so buyers can navigate to
     *  the new listing. This value only appears when the old listing is
     *  retrieved. The <b>RelistedItemID</b> of the original item will reflect the last relist.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var string $relistedItemID
     */
    private $relistedItemID = null;

    /**
     * The item ID for the original listing from which a second chance offer
     *  is made. This value is only returned when the data for the second chance
     *  offer listing is retrieved.
     *  Output only.
     *
     * @var string $secondChanceOriginalItemID
     */
    private $secondChanceOriginalItemID = null;

    /**
     * The <b>StartTime</b> value returned by non-search calls such as
     *  <b>GetItem</b> is the time stamp (in GMT) for when
     *  the item was listed.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Time stamp (in GMT) when the listing is scheduled to end
     *  (calculated based on the values of <b>StartTime</b> and <b>ListingDuration</b> )
     *  or the actual end time if the item has ended.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * The URL of the Web page where a user can view the listing.
     *  On the US site, this is called the View Item page.
     *  If you enabled affiliate tracking in a search-related call
     *  (for example, if you used the <b>AffiliateTrackingDetails</b> container
     *  in an applicable call), <b>ViewItemURL</b> contains
     *  a string that includes affiliate tracking information
     *  (see the <a href=
     *  "https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var string $viewItemURL
     */
    private $viewItemURL = null;

    /**
     * Indicates whether the item has any unanswered questions. Use
     *  <b>GetMemberMessages</b> to retrieve unanswered questions for the item if this flag
     *  indicates that there are any.
     *
     * @var bool $hasUnansweredQuestions
     */
    private $hasUnansweredQuestions = null;

    /**
     * Indicates whether the item has any publicly displayed messages. Use <b>GetMemberMessages</b> to retrieve public messages for the item if this flag indicates that there are any.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>HasPublicMessages</b> field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b>, on January 31, 2024.
     *  </span>
     *
     * @var bool $hasPublicMessages
     */
    private $hasPublicMessages = null;

    /**
     * Indicates whether the Buy It Now feature is available for an auction listing. As a general rule, once an auction listing has bids (and the high bid exceeds the reserve price, if any), the Buy It Now feature becomes disabled for the listing.
     *
     * @var bool $buyItNowAvailable
     */
    private $buyItNowAvailable = null;

    /**
     * Specifies the minimum acceptable Best Offer price. If a buyer
     *  submits a Best Offer that is below this value, the offer is automatically
     *  declined. This applies only to items listed in categories that
     *  support the Best Offer auto-decline feature.
     *  <br/><br/>
     *  In order for this setting to have an effect, Best Offer must be enabled
     *  for the listing, and this value will only be exposed to the seller who listed the item.
     *  <br/><br/>
     *  <b>For Revise and Relist calls:</b>
     *  If a seller wanted to disable the Best Offer auto-accept and/or Best Offer auto-reject feature when revising or relisting an item, the full path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/>
     *  <pre><code>
     *  <DeletedField>Item.ListingDetails.MinimumBestOfferPrice</DeletedField>
     *  </code></pre>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $minimumBestOfferPrice
     */
    private $minimumBestOfferPrice = null;

    /**
     * This field is needed if the seller is selling a motor vehicle through a Motors Local Listing. The string value supplied in this field actually sets the radius of the area (in miles) in which the vehicle will be available and exposed to interested local buyers. The seller's supplied <b>PostalCode</b> or <b>Location</b> field value will be used as the center point for this radius.
     *  <br/><br/>
     *  There is a closed set of radius values that can be set in this field, and it depends on the seller's subscription level. The user can call
     *  <b>GetCategoryFeatures</b>, including <code>LocalListingDistances</code> as a <b>FeatureID</b> value to retrieve the local listing distances supported by a given site, category, and Local Market subscription level.
     *
     * @var string $localListingDistance
     */
    private $localListingDistance = null;

    /**
     * This URL takes you to the same View Item page as ViewItemURL,
     *  but this URL is optimized to support natural search.
     *  That is, this URL is designed to make items on eBay easier to find via
     *  popular Internet search engines. The URL includes the item title along with other optimizations. To
     *  note, "?" (question mark) optimizes to "_W0QQ", "&" (ampersand) optimizes
     *  to "QQ", and "=" (equals sign) optimizes to "Z".
     *  <br><br>
     *  If you are an eBay affiliate, use this URL to promote your affiliate
     *  information.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This URL may include additional query parameters that don't appear in <b>ViewItemURL</b>
     *  and vice versa. You should not modify the query syntax. For example, eBay won't
     *  recognize the URL if you change QQ to ?.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var string $viewItemURLForNaturalSearch
     */
    private $viewItemURLForNaturalSearch = null;

    /**
     * The price at which Best Offers are automatically accepted. Similar in use to <b>MinimumBestOfferPrice</b>. If a buyer submits a Best Offer that is at or above this value, the offer is automatically accepted by the seller. This applies only to items listed in categories that support the <b>BestOfferAutoAcceptPrice</b> feature.
     *  <br/><br/>
     *  For this setting to have an effect, the Best Offer feature must be
     *  enabled for the listing, and only the seller who listed the item will see
     *  <b>BestOfferAutoAcceptPrice</b> in a call response.
     *  <br/><br/>
     *  <b>For Revise and Relist calls:</b>
     *  If a seller wanted to disable the Best Offer Auto-Accept and/or Best Offer Auto-Reject feature when revising or relisting an item, the full path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/>
     *  <pre><code>
     *  <DeletedField>Item.ListingDetails.BestOfferAutoAcceptPrice</DeletedField>
     *  </code></pre>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $bestOfferAutoAcceptPrice
     */
    private $bestOfferAutoAcceptPrice = null;

    /**
     * This field is only returned if the item was ended early (before listing duration expired) by the seller (through an API call or on the Web site) or ended administratively by eBay. The value in this field indicates the seller's reason for ending the
     *  listing early.
     *
     * @var string $endingReason
     */
    private $endingReason = null;

    /**
     * Gets as adult
     *
     * If <code>true</code>, the item is listed in a Mature category. Users must accept
     *  the Mature Category agreement on the eBay site to retrieve
     *  items listed in Mature categories. (Users do not need to sign
     *  this agreement to be able to list items in Mature Categories.)
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return bool
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Sets a new adult
     *
     * If <code>true</code>, the item is listed in a Mature category. Users must accept
     *  the Mature Category agreement on the eBay site to retrieve
     *  items listed in Mature categories. (Users do not need to sign
     *  this agreement to be able to list items in Mature Categories.)
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param bool $adult
     * @return self
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;
        return $this;
    }

    /**
     * Gets as bindingAuction
     *
     * Applicable for Real Estate auctions only. If <code>true</code>, buyers and sellers are expected to follow through on the sale. If false, bids for the Real Estate auction are only expressions of interest.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return bool
     */
    public function getBindingAuction()
    {
        return $this->bindingAuction;
    }

    /**
     * Sets a new bindingAuction
     *
     * Applicable for Real Estate auctions only. If <code>true</code>, buyers and sellers are expected to follow through on the sale. If false, bids for the Real Estate auction are only expressions of interest.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param bool $bindingAuction
     * @return self
     */
    public function setBindingAuction($bindingAuction)
    {
        $this->bindingAuction = $bindingAuction;
        return $this;
    }

    /**
     * Gets as checkoutEnabled
     *
     * Indicates whether or not the seller's Checkout Enabled preference is turned on.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  A 'Checkout Enabled' setting is no longer available to sellers, and this field is always returned as <code>true</code>.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return bool
     */
    public function getCheckoutEnabled()
    {
        return $this->checkoutEnabled;
    }

    /**
     * Sets a new checkoutEnabled
     *
     * Indicates whether or not the seller's Checkout Enabled preference is turned on.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  A 'Checkout Enabled' setting is no longer available to sellers, and this field is always returned as <code>true</code>.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param bool $checkoutEnabled
     * @return self
     */
    public function setCheckoutEnabled($checkoutEnabled)
    {
        $this->checkoutEnabled = $checkoutEnabled;
        return $this;
    }

    /**
     * Gets as convertedBuyItNowPrice
     *
     * <br>
     *  Converted value of the <b>BuyItNowPrice</b> in the currency of
     *  the site that returned this response.
     *  For active items, refresh this value every 24 hours to
     *  pick up the current conversion rates.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedBuyItNowPrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedBuyItNowPrice()
    {
        return $this->convertedBuyItNowPrice;
    }

    /**
     * Sets a new convertedBuyItNowPrice
     *
     * <br>
     *  Converted value of the <b>BuyItNowPrice</b> in the currency of
     *  the site that returned this response.
     *  For active items, refresh this value every 24 hours to
     *  pick up the current conversion rates.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedBuyItNowPrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedBuyItNowPrice
     * @return self
     */
    public function setConvertedBuyItNowPrice(\Nogrod\eBaySDK\Trading\AmountType $convertedBuyItNowPrice)
    {
        $this->convertedBuyItNowPrice = $convertedBuyItNowPrice;
        return $this;
    }

    /**
     * Gets as convertedStartPrice
     *
     * <br>
     *  Converted value of the <b>StartPrice</b> in the currency of
     *  the site that returned this response.
     *  For active items, refresh this value every 24 hours to
     *  pick up the current conversion rates.<br>
     *  <br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedStartPrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedStartPrice()
    {
        return $this->convertedStartPrice;
    }

    /**
     * Sets a new convertedStartPrice
     *
     * <br>
     *  Converted value of the <b>StartPrice</b> in the currency of
     *  the site that returned this response.
     *  For active items, refresh this value every 24 hours to
     *  pick up the current conversion rates.<br>
     *  <br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedStartPrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedStartPrice
     * @return self
     */
    public function setConvertedStartPrice(\Nogrod\eBaySDK\Trading\AmountType $convertedStartPrice)
    {
        $this->convertedStartPrice = $convertedStartPrice;
        return $this;
    }

    /**
     * Gets as convertedReservePrice
     *
     * <br>
     *  Converted value of the <b>ReservePrice</b> in the currency of the site that returned this response. Only returned for listings with a reserve price when the requesting user is the listing's seller. For active items, refresh this value every 24 hours to pick up the current conversion rates. Not applicable to fixed-price listings.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedReservePrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedReservePrice()
    {
        return $this->convertedReservePrice;
    }

    /**
     * Sets a new convertedReservePrice
     *
     * <br>
     *  Converted value of the <b>ReservePrice</b> in the currency of the site that returned this response. Only returned for listings with a reserve price when the requesting user is the listing's seller. For active items, refresh this value every 24 hours to pick up the current conversion rates. Not applicable to fixed-price listings.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ListingDetails.ConvertedReservePrice</b> field will stop being returned in <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetMyeBaySelling</b> (SoldList and DeletedFromSoldList) on January 31, 2024.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedReservePrice
     * @return self
     */
    public function setConvertedReservePrice(\Nogrod\eBaySDK\Trading\AmountType $convertedReservePrice)
    {
        $this->convertedReservePrice = $convertedReservePrice;
        return $this;
    }

    /**
     * Gets as hasReservePrice
     *
     * If <code>true</code>, the seller specified a value in <b>ReservePrice</b>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return bool
     */
    public function getHasReservePrice()
    {
        return $this->hasReservePrice;
    }

    /**
     * Sets a new hasReservePrice
     *
     * If <code>true</code>, the seller specified a value in <b>ReservePrice</b>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param bool $hasReservePrice
     * @return self
     */
    public function setHasReservePrice($hasReservePrice)
    {
        $this->hasReservePrice = $hasReservePrice;
        return $this;
    }

    /**
     * Gets as relistedItemID
     *
     * Indicates the new item ID for a re-listed item. When an item is
     *  re-listed, the item ID for the new item is added to the
     *  old listing, so buyers can navigate to
     *  the new listing. This value only appears when the old listing is
     *  retrieved. The <b>RelistedItemID</b> of the original item will reflect the last relist.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return string
     */
    public function getRelistedItemID()
    {
        return $this->relistedItemID;
    }

    /**
     * Sets a new relistedItemID
     *
     * Indicates the new item ID for a re-listed item. When an item is
     *  re-listed, the item ID for the new item is added to the
     *  old listing, so buyers can navigate to
     *  the new listing. This value only appears when the old listing is
     *  retrieved. The <b>RelistedItemID</b> of the original item will reflect the last relist.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param string $relistedItemID
     * @return self
     */
    public function setRelistedItemID($relistedItemID)
    {
        $this->relistedItemID = $relistedItemID;
        return $this;
    }

    /**
     * Gets as secondChanceOriginalItemID
     *
     * The item ID for the original listing from which a second chance offer
     *  is made. This value is only returned when the data for the second chance
     *  offer listing is retrieved.
     *  Output only.
     *
     * @return string
     */
    public function getSecondChanceOriginalItemID()
    {
        return $this->secondChanceOriginalItemID;
    }

    /**
     * Sets a new secondChanceOriginalItemID
     *
     * The item ID for the original listing from which a second chance offer
     *  is made. This value is only returned when the data for the second chance
     *  offer listing is retrieved.
     *  Output only.
     *
     * @param string $secondChanceOriginalItemID
     * @return self
     */
    public function setSecondChanceOriginalItemID($secondChanceOriginalItemID)
    {
        $this->secondChanceOriginalItemID = $secondChanceOriginalItemID;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The <b>StartTime</b> value returned by non-search calls such as
     *  <b>GetItem</b> is the time stamp (in GMT) for when
     *  the item was listed.
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
     * The <b>StartTime</b> value returned by non-search calls such as
     *  <b>GetItem</b> is the time stamp (in GMT) for when
     *  the item was listed.
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
     * Time stamp (in GMT) when the listing is scheduled to end
     *  (calculated based on the values of <b>StartTime</b> and <b>ListingDuration</b> )
     *  or the actual end time if the item has ended.
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
     * Time stamp (in GMT) when the listing is scheduled to end
     *  (calculated based on the values of <b>StartTime</b> and <b>ListingDuration</b> )
     *  or the actual end time if the item has ended.
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
     * Gets as viewItemURL
     *
     * The URL of the Web page where a user can view the listing.
     *  On the US site, this is called the View Item page.
     *  If you enabled affiliate tracking in a search-related call
     *  (for example, if you used the <b>AffiliateTrackingDetails</b> container
     *  in an applicable call), <b>ViewItemURL</b> contains
     *  a string that includes affiliate tracking information
     *  (see the <a href=
     *  "https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return string
     */
    public function getViewItemURL()
    {
        return $this->viewItemURL;
    }

    /**
     * Sets a new viewItemURL
     *
     * The URL of the Web page where a user can view the listing.
     *  On the US site, this is called the View Item page.
     *  If you enabled affiliate tracking in a search-related call
     *  (for example, if you used the <b>AffiliateTrackingDetails</b> container
     *  in an applicable call), <b>ViewItemURL</b> contains
     *  a string that includes affiliate tracking information
     *  (see the <a href=
     *  "https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param string $viewItemURL
     * @return self
     */
    public function setViewItemURL($viewItemURL)
    {
        $this->viewItemURL = $viewItemURL;
        return $this;
    }

    /**
     * Gets as hasUnansweredQuestions
     *
     * Indicates whether the item has any unanswered questions. Use
     *  <b>GetMemberMessages</b> to retrieve unanswered questions for the item if this flag
     *  indicates that there are any.
     *
     * @return bool
     */
    public function getHasUnansweredQuestions()
    {
        return $this->hasUnansweredQuestions;
    }

    /**
     * Sets a new hasUnansweredQuestions
     *
     * Indicates whether the item has any unanswered questions. Use
     *  <b>GetMemberMessages</b> to retrieve unanswered questions for the item if this flag
     *  indicates that there are any.
     *
     * @param bool $hasUnansweredQuestions
     * @return self
     */
    public function setHasUnansweredQuestions($hasUnansweredQuestions)
    {
        $this->hasUnansweredQuestions = $hasUnansweredQuestions;
        return $this;
    }

    /**
     * Gets as hasPublicMessages
     *
     * Indicates whether the item has any publicly displayed messages. Use <b>GetMemberMessages</b> to retrieve public messages for the item if this flag indicates that there are any.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>HasPublicMessages</b> field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b>, on January 31, 2024.
     *  </span>
     *
     * @return bool
     */
    public function getHasPublicMessages()
    {
        return $this->hasPublicMessages;
    }

    /**
     * Sets a new hasPublicMessages
     *
     * Indicates whether the item has any publicly displayed messages. Use <b>GetMemberMessages</b> to retrieve public messages for the item if this flag indicates that there are any.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>HasPublicMessages</b> field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b>, on January 31, 2024.
     *  </span>
     *
     * @param bool $hasPublicMessages
     * @return self
     */
    public function setHasPublicMessages($hasPublicMessages)
    {
        $this->hasPublicMessages = $hasPublicMessages;
        return $this;
    }

    /**
     * Gets as buyItNowAvailable
     *
     * Indicates whether the Buy It Now feature is available for an auction listing. As a general rule, once an auction listing has bids (and the high bid exceeds the reserve price, if any), the Buy It Now feature becomes disabled for the listing.
     *
     * @return bool
     */
    public function getBuyItNowAvailable()
    {
        return $this->buyItNowAvailable;
    }

    /**
     * Sets a new buyItNowAvailable
     *
     * Indicates whether the Buy It Now feature is available for an auction listing. As a general rule, once an auction listing has bids (and the high bid exceeds the reserve price, if any), the Buy It Now feature becomes disabled for the listing.
     *
     * @param bool $buyItNowAvailable
     * @return self
     */
    public function setBuyItNowAvailable($buyItNowAvailable)
    {
        $this->buyItNowAvailable = $buyItNowAvailable;
        return $this;
    }

    /**
     * Gets as minimumBestOfferPrice
     *
     * Specifies the minimum acceptable Best Offer price. If a buyer
     *  submits a Best Offer that is below this value, the offer is automatically
     *  declined. This applies only to items listed in categories that
     *  support the Best Offer auto-decline feature.
     *  <br/><br/>
     *  In order for this setting to have an effect, Best Offer must be enabled
     *  for the listing, and this value will only be exposed to the seller who listed the item.
     *  <br/><br/>
     *  <b>For Revise and Relist calls:</b>
     *  If a seller wanted to disable the Best Offer auto-accept and/or Best Offer auto-reject feature when revising or relisting an item, the full path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/>
     *  <pre><code>
     *  <DeletedField>Item.ListingDetails.MinimumBestOfferPrice</DeletedField>
     *  </code></pre>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMinimumBestOfferPrice()
    {
        return $this->minimumBestOfferPrice;
    }

    /**
     * Sets a new minimumBestOfferPrice
     *
     * Specifies the minimum acceptable Best Offer price. If a buyer
     *  submits a Best Offer that is below this value, the offer is automatically
     *  declined. This applies only to items listed in categories that
     *  support the Best Offer auto-decline feature.
     *  <br/><br/>
     *  In order for this setting to have an effect, Best Offer must be enabled
     *  for the listing, and this value will only be exposed to the seller who listed the item.
     *  <br/><br/>
     *  <b>For Revise and Relist calls:</b>
     *  If a seller wanted to disable the Best Offer auto-accept and/or Best Offer auto-reject feature when revising or relisting an item, the full path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/>
     *  <pre><code>
     *  <DeletedField>Item.ListingDetails.MinimumBestOfferPrice</DeletedField>
     *  </code></pre>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $minimumBestOfferPrice
     * @return self
     */
    public function setMinimumBestOfferPrice(\Nogrod\eBaySDK\Trading\AmountType $minimumBestOfferPrice)
    {
        $this->minimumBestOfferPrice = $minimumBestOfferPrice;
        return $this;
    }

    /**
     * Gets as localListingDistance
     *
     * This field is needed if the seller is selling a motor vehicle through a Motors Local Listing. The string value supplied in this field actually sets the radius of the area (in miles) in which the vehicle will be available and exposed to interested local buyers. The seller's supplied <b>PostalCode</b> or <b>Location</b> field value will be used as the center point for this radius.
     *  <br/><br/>
     *  There is a closed set of radius values that can be set in this field, and it depends on the seller's subscription level. The user can call
     *  <b>GetCategoryFeatures</b>, including <code>LocalListingDistances</code> as a <b>FeatureID</b> value to retrieve the local listing distances supported by a given site, category, and Local Market subscription level.
     *
     * @return string
     */
    public function getLocalListingDistance()
    {
        return $this->localListingDistance;
    }

    /**
     * Sets a new localListingDistance
     *
     * This field is needed if the seller is selling a motor vehicle through a Motors Local Listing. The string value supplied in this field actually sets the radius of the area (in miles) in which the vehicle will be available and exposed to interested local buyers. The seller's supplied <b>PostalCode</b> or <b>Location</b> field value will be used as the center point for this radius.
     *  <br/><br/>
     *  There is a closed set of radius values that can be set in this field, and it depends on the seller's subscription level. The user can call
     *  <b>GetCategoryFeatures</b>, including <code>LocalListingDistances</code> as a <b>FeatureID</b> value to retrieve the local listing distances supported by a given site, category, and Local Market subscription level.
     *
     * @param string $localListingDistance
     * @return self
     */
    public function setLocalListingDistance($localListingDistance)
    {
        $this->localListingDistance = $localListingDistance;
        return $this;
    }

    /**
     * Gets as viewItemURLForNaturalSearch
     *
     * This URL takes you to the same View Item page as ViewItemURL,
     *  but this URL is optimized to support natural search.
     *  That is, this URL is designed to make items on eBay easier to find via
     *  popular Internet search engines. The URL includes the item title along with other optimizations. To
     *  note, "?" (question mark) optimizes to "_W0QQ", "&" (ampersand) optimizes
     *  to "QQ", and "=" (equals sign) optimizes to "Z".
     *  <br><br>
     *  If you are an eBay affiliate, use this URL to promote your affiliate
     *  information.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This URL may include additional query parameters that don't appear in <b>ViewItemURL</b>
     *  and vice versa. You should not modify the query syntax. For example, eBay won't
     *  recognize the URL if you change QQ to ?.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return string
     */
    public function getViewItemURLForNaturalSearch()
    {
        return $this->viewItemURLForNaturalSearch;
    }

    /**
     * Sets a new viewItemURLForNaturalSearch
     *
     * This URL takes you to the same View Item page as ViewItemURL,
     *  but this URL is optimized to support natural search.
     *  That is, this URL is designed to make items on eBay easier to find via
     *  popular Internet search engines. The URL includes the item title along with other optimizations. To
     *  note, "?" (question mark) optimizes to "_W0QQ", "&" (ampersand) optimizes
     *  to "QQ", and "=" (equals sign) optimizes to "Z".
     *  <br><br>
     *  If you are an eBay affiliate, use this URL to promote your affiliate
     *  information.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This URL may include additional query parameters that don't appear in <b>ViewItemURL</b>
     *  and vice versa. You should not modify the query syntax. For example, eBay won't
     *  recognize the URL if you change QQ to ?.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param string $viewItemURLForNaturalSearch
     * @return self
     */
    public function setViewItemURLForNaturalSearch($viewItemURLForNaturalSearch)
    {
        $this->viewItemURLForNaturalSearch = $viewItemURLForNaturalSearch;
        return $this;
    }

    /**
     * Gets as bestOfferAutoAcceptPrice
     *
     * The price at which Best Offers are automatically accepted. Similar in use to <b>MinimumBestOfferPrice</b>. If a buyer submits a Best Offer that is at or above this value, the offer is automatically accepted by the seller. This applies only to items listed in categories that support the <b>BestOfferAutoAcceptPrice</b> feature.
     *  <br/><br/>
     *  For this setting to have an effect, the Best Offer feature must be
     *  enabled for the listing, and only the seller who listed the item will see
     *  <b>BestOfferAutoAcceptPrice</b> in a call response.
     *  <br/><br/>
     *  <b>For Revise and Relist calls:</b>
     *  If a seller wanted to disable the Best Offer Auto-Accept and/or Best Offer Auto-Reject feature when revising or relisting an item, the full path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/>
     *  <pre><code>
     *  <DeletedField>Item.ListingDetails.BestOfferAutoAcceptPrice</DeletedField>
     *  </code></pre>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getBestOfferAutoAcceptPrice()
    {
        return $this->bestOfferAutoAcceptPrice;
    }

    /**
     * Sets a new bestOfferAutoAcceptPrice
     *
     * The price at which Best Offers are automatically accepted. Similar in use to <b>MinimumBestOfferPrice</b>. If a buyer submits a Best Offer that is at or above this value, the offer is automatically accepted by the seller. This applies only to items listed in categories that support the <b>BestOfferAutoAcceptPrice</b> feature.
     *  <br/><br/>
     *  For this setting to have an effect, the Best Offer feature must be
     *  enabled for the listing, and only the seller who listed the item will see
     *  <b>BestOfferAutoAcceptPrice</b> in a call response.
     *  <br/><br/>
     *  <b>For Revise and Relist calls:</b>
     *  If a seller wanted to disable the Best Offer Auto-Accept and/or Best Offer Auto-Reject feature when revising or relisting an item, the full path to one or both of these two corresponding fields would be provided in a <b>DeletedField</b> tag, like the following: <br/>
     *  <pre><code>
     *  <DeletedField>Item.ListingDetails.BestOfferAutoAcceptPrice</DeletedField>
     *  </code></pre>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $bestOfferAutoAcceptPrice
     * @return self
     */
    public function setBestOfferAutoAcceptPrice(\Nogrod\eBaySDK\Trading\AmountType $bestOfferAutoAcceptPrice)
    {
        $this->bestOfferAutoAcceptPrice = $bestOfferAutoAcceptPrice;
        return $this;
    }

    /**
     * Gets as endingReason
     *
     * This field is only returned if the item was ended early (before listing duration expired) by the seller (through an API call or on the Web site) or ended administratively by eBay. The value in this field indicates the seller's reason for ending the
     *  listing early.
     *
     * @return string
     */
    public function getEndingReason()
    {
        return $this->endingReason;
    }

    /**
     * Sets a new endingReason
     *
     * This field is only returned if the item was ended early (before listing duration expired) by the seller (through an API call or on the Web site) or ended administratively by eBay. The value in this field indicates the seller's reason for ending the
     *  listing early.
     *
     * @param string $endingReason
     * @return self
     */
    public function setEndingReason($endingReason)
    {
        $this->endingReason = $endingReason;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAdult();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Adult", $value);
        }
        $value = $this->getBindingAuction();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BindingAuction", $value);
        }
        $value = $this->getCheckoutEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutEnabled", $value);
        }
        $value = $this->getConvertedBuyItNowPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedBuyItNowPrice", $value);
        }
        $value = $this->getConvertedStartPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedStartPrice", $value);
        }
        $value = $this->getConvertedReservePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedReservePrice", $value);
        }
        $value = $this->getHasReservePrice();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasReservePrice", $value);
        }
        $value = $this->getRelistedItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelistedItemID", $value);
        }
        $value = $this->getSecondChanceOriginalItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondChanceOriginalItemID", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getViewItemURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ViewItemURL", $value);
        }
        $value = $this->getHasUnansweredQuestions();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasUnansweredQuestions", $value);
        }
        $value = $this->getHasPublicMessages();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasPublicMessages", $value);
        }
        $value = $this->getBuyItNowAvailable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyItNowAvailable", $value);
        }
        $value = $this->getMinimumBestOfferPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumBestOfferPrice", $value);
        }
        $value = $this->getLocalListingDistance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalListingDistance", $value);
        }
        $value = $this->getViewItemURLForNaturalSearch();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ViewItemURLForNaturalSearch", $value);
        }
        $value = $this->getBestOfferAutoAcceptPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferAutoAcceptPrice", $value);
        }
        $value = $this->getEndingReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndingReason", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ListingDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Adult');
        if (null !== $value) {
            $this->setAdult(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BindingAuction');
        if (null !== $value) {
            $this->setBindingAuction(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutEnabled');
        if (null !== $value) {
            $this->setCheckoutEnabled(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedBuyItNowPrice');
        if (null !== $value) {
            $this->setConvertedBuyItNowPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedStartPrice');
        if (null !== $value) {
            $this->setConvertedStartPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedReservePrice');
        if (null !== $value) {
            $this->setConvertedReservePrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasReservePrice');
        if (null !== $value) {
            $this->setHasReservePrice(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistedItemID');
        if (null !== $value) {
            $this->setRelistedItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceOriginalItemID');
        if (null !== $value) {
            $this->setSecondChanceOriginalItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ViewItemURL');
        if (null !== $value) {
            $this->setViewItemURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasUnansweredQuestions');
        if (null !== $value) {
            $this->setHasUnansweredQuestions(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasPublicMessages');
        if (null !== $value) {
            $this->setHasPublicMessages(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyItNowAvailable');
        if (null !== $value) {
            $this->setBuyItNowAvailable(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumBestOfferPrice');
        if (null !== $value) {
            $this->setMinimumBestOfferPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistance');
        if (null !== $value) {
            $this->setLocalListingDistance($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ViewItemURLForNaturalSearch');
        if (null !== $value) {
            $this->setViewItemURLForNaturalSearch($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferAutoAcceptPrice');
        if (null !== $value) {
            $this->setBestOfferAutoAcceptPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndingReason');
        if (null !== $value) {
            $this->setEndingReason($value);
        }
    }
}
