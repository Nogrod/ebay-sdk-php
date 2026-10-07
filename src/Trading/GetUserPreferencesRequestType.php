<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserPreferencesRequestType
 *
 * Retrieves the specified user preferences for the authenticated caller.
 * XSD Type: GetUserPreferencesRequestType
 */
class GetUserPreferencesRequestType extends AbstractRequestType
{
    /**
     * If included and set to <code>true</code>, the seller's preference for receiving contact information for unsuccessful bidders is returned in the response.
     *
     * @var bool $showBidderNoticePreferences
     */
    private $showBidderNoticePreferences = null;

    /**
     * If included and set to <code>true</code>, the seller's combined invoice preferences are returned in the response. These preferences are used to allow Combined Invoice orders.
     *  <br>
     *
     * @var bool $showCombinedPaymentPreferences
     */
    private $showCombinedPaymentPreferences = null;

    /**
     * If included and set to <code>true</code>, the seller's payment preferences are returned in the response.
     *
     * @var bool $showSellerPaymentPreferences
     */
    private $showSellerPaymentPreferences = null;

    /**
     * If included and set to <code>true</code>, the seller's preferences for the end-of-auction email sent to the winning bidder is returned in the response. These preferences are only applicable for auction listings.
     *
     * @var bool $showEndOfAuctionEmailPreferences
     */
    private $showEndOfAuctionEmailPreferences = null;

    /**
     * If included and set to <code>true</code>, the seller's favorite item preferences are returned in the response.
     *
     * @var bool $showSellerFavoriteItemPreferences
     */
    private $showSellerFavoriteItemPreferences = null;

    /**
     * If included and set to <code>true</code>, the seller's preference for sending an email to the buyer with the shipping tracking number is returned in the response.
     *
     * @var bool $showEmailShipmentTrackingNumberPreference
     */
    private $showEmailShipmentTrackingNumberPreference = null;

    /**
     * If included and set to <code>true</code>, the seller's preference for requiring that the buyer supply a shipping phone number upon checkout is returned in the response. Some shipping carriers require the receiver's phone number.
     *
     * @var bool $showRequiredShipPhoneNumberPreference
     */
    private $showRequiredShipPhoneNumberPreference = null;

    /**
     * If included and set to <code>true</code>, all of the seller's excluded shipping locations are returned in the response. The returned list mirrors the seller's current Exclude shipping locations list in My eBay's Shipping Preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq). Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the <b>AddItem</b> family of calls.
     *
     * @var bool $showSellerExcludeShipToLocationPreference
     */
    private $showSellerExcludeShipToLocationPreference = null;

    /**
     * If included and set to <code>true</code>, the seller's Unpaid Item preferences are returned in the response. The Unpaid Item preferences can be used to automatically cancel an unpaid order and relist the item on the behalf of the seller. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
     *
     * @var bool $showUnpaidItemAssistancePreference
     */
    private $showUnpaidItemAssistancePreference = null;

    /**
     * If included and set to <code>true</code>, the seller's preference for sending a purchase reminder email to buyers is returned in the response.
     *
     * @var bool $showPurchaseReminderEmailPreferences
     */
    private $showPurchaseReminderEmailPreferences = null;

    /**
     * If included and set to <code>true</code>, the list of eBay user IDs on the Unpaid Item preferences Excluded User list is returned through the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field in the response. <br/><br/> For excluded users, an Unpaid Item is not automatically cancelled. The Excluded User list is managed through the <b>SetUserPreferences</b> call. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistancePreference</b> field must also be included and set to <b>true</b> in the request. </span>
     *
     * @var bool $showUnpaidItemAssistanceExclusionList
     */
    private $showUnpaidItemAssistanceExclusionList = null;

    /**
     * If this flag is included and set to <code>true</code>, the seller's Business Policies profile information is returned in the response. This information includes a flag that indicates whether or not the seller has opted into Business Policies, as well as Business Policies profiles (payment, shipping, and return policy) active on the seller's account.
     *
     * @var bool $showSellerProfilePreferences
     */
    private $showSellerProfilePreferences = null;

    /**
     * If this flag is included and set to <code>true</code>, the <b>SellerReturnPreferences</b> container is returned in the response and indicates whether or not the seller has opted in to eBay Managed Returns.
     *  <br><br>
     *  eBay Managed Returns are currently only available on the US, UK, DE, AU, and CA (English and French) sites.
     *
     * @var bool $showSellerReturnPreferences
     */
    private $showSellerReturnPreferences = null;

    /**
     * If this flag is included and set to <code>true</code>, the seller's preference for offering the Global Shipping Program to international buyers will be returned in <strong>OfferGlobalShippingProgramPreference</strong>.
     *
     * @var bool $showGlobalShippingProgramPreference
     */
    private $showGlobalShippingProgramPreference = null;

    /**
     * If included and set to <code>true</code>, the seller's same-day handling cutoff time is returned in <strong>DispatchCutoffTimePreference.CutoffTime</strong>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time returned in the response may not be accurate. In order for the seller to confirm the actual order cutoff time for same-day handling, that seller should view Shipping Preferences in My eBay. </span>
     *  <br>
     *
     * @var bool $showDispatchCutoffTimePreferences
     */
    private $showDispatchCutoffTimePreferences = null;

    /**
     * If included and set to <code>true</code>, the <strong>GlobalShippingProgramListingPreference</strong> field is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global Shipping Program by default.
     *
     * @var bool $showGlobalShippingProgramListingPreference
     */
    private $showGlobalShippingProgramListingPreference = null;

    /**
     * If included and set to <code>true</code>, the <strong>OverrideGSPServiceWithIntlServicePreference</strong> field is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     *  <br/><br/>
     *  A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global Shipping-eligible country.
     *
     * @var bool $showOverrideGSPServiceWithIntlServicePreference
     */
    private $showOverrideGSPServiceWithIntlServicePreference = null;

    /**
     * If included and set to <code>true</code>, the <strong>PickupDropoffSellerPreference</strong> field is returned. A returned value of <code>true</code> indicates that the seller's new listings will by default be eligible to be evaluated for the Click and Collect feature.
     *  <br/><br/>
     *  With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are notified by eBay once their items are available. The Click and Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers to set the Click and Collect preference at the listing level.
     *  </span>
     *
     * @var bool $showPickupDropoffPreferences
     */
    private $showPickupDropoffPreferences = null;

    /**
     * If included and set to <code>true</code>, the seller's preferences related to the Out-of-Stock feature will be returned. This feature is set using the <a href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences</a> call.
     *
     * @var bool $showOutOfStockControlPreference
     */
    private $showOutOfStockControlPreference = null;

    /**
     * <span class="tablenote"><b>Note:</b> Do not use this boolean field. The opt-in and listing preference for eBayPlus has been disabled. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. If used, the ListingPreference and OptInStatus fields are returned as false. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
     *  <br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.
     *  <br/><br/>
     *  The <strong>eBayPLUSPreference</strong> container is returned in the response with information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. The seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @var bool $showeBayPLUSPreference
     */
    private $showeBayPLUSPreference = null;

    /**
     * Gets as showBidderNoticePreferences
     *
     * If included and set to <code>true</code>, the seller's preference for receiving contact information for unsuccessful bidders is returned in the response.
     *
     * @return bool
     */
    public function getShowBidderNoticePreferences()
    {
        return $this->showBidderNoticePreferences;
    }

    /**
     * Sets a new showBidderNoticePreferences
     *
     * If included and set to <code>true</code>, the seller's preference for receiving contact information for unsuccessful bidders is returned in the response.
     *
     * @param bool $showBidderNoticePreferences
     * @return self
     */
    public function setShowBidderNoticePreferences($showBidderNoticePreferences)
    {
        $this->showBidderNoticePreferences = $showBidderNoticePreferences;
        return $this;
    }

    /**
     * Gets as showCombinedPaymentPreferences
     *
     * If included and set to <code>true</code>, the seller's combined invoice preferences are returned in the response. These preferences are used to allow Combined Invoice orders.
     *  <br>
     *
     * @return bool
     */
    public function getShowCombinedPaymentPreferences()
    {
        return $this->showCombinedPaymentPreferences;
    }

    /**
     * Sets a new showCombinedPaymentPreferences
     *
     * If included and set to <code>true</code>, the seller's combined invoice preferences are returned in the response. These preferences are used to allow Combined Invoice orders.
     *  <br>
     *
     * @param bool $showCombinedPaymentPreferences
     * @return self
     */
    public function setShowCombinedPaymentPreferences($showCombinedPaymentPreferences)
    {
        $this->showCombinedPaymentPreferences = $showCombinedPaymentPreferences;
        return $this;
    }

    /**
     * Gets as showSellerPaymentPreferences
     *
     * If included and set to <code>true</code>, the seller's payment preferences are returned in the response.
     *
     * @return bool
     */
    public function getShowSellerPaymentPreferences()
    {
        return $this->showSellerPaymentPreferences;
    }

    /**
     * Sets a new showSellerPaymentPreferences
     *
     * If included and set to <code>true</code>, the seller's payment preferences are returned in the response.
     *
     * @param bool $showSellerPaymentPreferences
     * @return self
     */
    public function setShowSellerPaymentPreferences($showSellerPaymentPreferences)
    {
        $this->showSellerPaymentPreferences = $showSellerPaymentPreferences;
        return $this;
    }

    /**
     * Gets as showEndOfAuctionEmailPreferences
     *
     * If included and set to <code>true</code>, the seller's preferences for the end-of-auction email sent to the winning bidder is returned in the response. These preferences are only applicable for auction listings.
     *
     * @return bool
     */
    public function getShowEndOfAuctionEmailPreferences()
    {
        return $this->showEndOfAuctionEmailPreferences;
    }

    /**
     * Sets a new showEndOfAuctionEmailPreferences
     *
     * If included and set to <code>true</code>, the seller's preferences for the end-of-auction email sent to the winning bidder is returned in the response. These preferences are only applicable for auction listings.
     *
     * @param bool $showEndOfAuctionEmailPreferences
     * @return self
     */
    public function setShowEndOfAuctionEmailPreferences($showEndOfAuctionEmailPreferences)
    {
        $this->showEndOfAuctionEmailPreferences = $showEndOfAuctionEmailPreferences;
        return $this;
    }

    /**
     * Gets as showSellerFavoriteItemPreferences
     *
     * If included and set to <code>true</code>, the seller's favorite item preferences are returned in the response.
     *
     * @return bool
     */
    public function getShowSellerFavoriteItemPreferences()
    {
        return $this->showSellerFavoriteItemPreferences;
    }

    /**
     * Sets a new showSellerFavoriteItemPreferences
     *
     * If included and set to <code>true</code>, the seller's favorite item preferences are returned in the response.
     *
     * @param bool $showSellerFavoriteItemPreferences
     * @return self
     */
    public function setShowSellerFavoriteItemPreferences($showSellerFavoriteItemPreferences)
    {
        $this->showSellerFavoriteItemPreferences = $showSellerFavoriteItemPreferences;
        return $this;
    }

    /**
     * Gets as showEmailShipmentTrackingNumberPreference
     *
     * If included and set to <code>true</code>, the seller's preference for sending an email to the buyer with the shipping tracking number is returned in the response.
     *
     * @return bool
     */
    public function getShowEmailShipmentTrackingNumberPreference()
    {
        return $this->showEmailShipmentTrackingNumberPreference;
    }

    /**
     * Sets a new showEmailShipmentTrackingNumberPreference
     *
     * If included and set to <code>true</code>, the seller's preference for sending an email to the buyer with the shipping tracking number is returned in the response.
     *
     * @param bool $showEmailShipmentTrackingNumberPreference
     * @return self
     */
    public function setShowEmailShipmentTrackingNumberPreference($showEmailShipmentTrackingNumberPreference)
    {
        $this->showEmailShipmentTrackingNumberPreference = $showEmailShipmentTrackingNumberPreference;
        return $this;
    }

    /**
     * Gets as showRequiredShipPhoneNumberPreference
     *
     * If included and set to <code>true</code>, the seller's preference for requiring that the buyer supply a shipping phone number upon checkout is returned in the response. Some shipping carriers require the receiver's phone number.
     *
     * @return bool
     */
    public function getShowRequiredShipPhoneNumberPreference()
    {
        return $this->showRequiredShipPhoneNumberPreference;
    }

    /**
     * Sets a new showRequiredShipPhoneNumberPreference
     *
     * If included and set to <code>true</code>, the seller's preference for requiring that the buyer supply a shipping phone number upon checkout is returned in the response. Some shipping carriers require the receiver's phone number.
     *
     * @param bool $showRequiredShipPhoneNumberPreference
     * @return self
     */
    public function setShowRequiredShipPhoneNumberPreference($showRequiredShipPhoneNumberPreference)
    {
        $this->showRequiredShipPhoneNumberPreference = $showRequiredShipPhoneNumberPreference;
        return $this;
    }

    /**
     * Gets as showSellerExcludeShipToLocationPreference
     *
     * If included and set to <code>true</code>, all of the seller's excluded shipping locations are returned in the response. The returned list mirrors the seller's current Exclude shipping locations list in My eBay's Shipping Preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq). Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the <b>AddItem</b> family of calls.
     *
     * @return bool
     */
    public function getShowSellerExcludeShipToLocationPreference()
    {
        return $this->showSellerExcludeShipToLocationPreference;
    }

    /**
     * Sets a new showSellerExcludeShipToLocationPreference
     *
     * If included and set to <code>true</code>, all of the seller's excluded shipping locations are returned in the response. The returned list mirrors the seller's current Exclude shipping locations list in My eBay's Shipping Preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq). Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the <b>AddItem</b> family of calls.
     *
     * @param bool $showSellerExcludeShipToLocationPreference
     * @return self
     */
    public function setShowSellerExcludeShipToLocationPreference($showSellerExcludeShipToLocationPreference)
    {
        $this->showSellerExcludeShipToLocationPreference = $showSellerExcludeShipToLocationPreference;
        return $this;
    }

    /**
     * Gets as showUnpaidItemAssistancePreference
     *
     * If included and set to <code>true</code>, the seller's Unpaid Item preferences are returned in the response. The Unpaid Item preferences can be used to automatically cancel an unpaid order and relist the item on the behalf of the seller. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
     *
     * @return bool
     */
    public function getShowUnpaidItemAssistancePreference()
    {
        return $this->showUnpaidItemAssistancePreference;
    }

    /**
     * Sets a new showUnpaidItemAssistancePreference
     *
     * If included and set to <code>true</code>, the seller's Unpaid Item preferences are returned in the response. The Unpaid Item preferences can be used to automatically cancel an unpaid order and relist the item on the behalf of the seller. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
     *
     * @param bool $showUnpaidItemAssistancePreference
     * @return self
     */
    public function setShowUnpaidItemAssistancePreference($showUnpaidItemAssistancePreference)
    {
        $this->showUnpaidItemAssistancePreference = $showUnpaidItemAssistancePreference;
        return $this;
    }

    /**
     * Gets as showPurchaseReminderEmailPreferences
     *
     * If included and set to <code>true</code>, the seller's preference for sending a purchase reminder email to buyers is returned in the response.
     *
     * @return bool
     */
    public function getShowPurchaseReminderEmailPreferences()
    {
        return $this->showPurchaseReminderEmailPreferences;
    }

    /**
     * Sets a new showPurchaseReminderEmailPreferences
     *
     * If included and set to <code>true</code>, the seller's preference for sending a purchase reminder email to buyers is returned in the response.
     *
     * @param bool $showPurchaseReminderEmailPreferences
     * @return self
     */
    public function setShowPurchaseReminderEmailPreferences($showPurchaseReminderEmailPreferences)
    {
        $this->showPurchaseReminderEmailPreferences = $showPurchaseReminderEmailPreferences;
        return $this;
    }

    /**
     * Gets as showUnpaidItemAssistanceExclusionList
     *
     * If included and set to <code>true</code>, the list of eBay user IDs on the Unpaid Item preferences Excluded User list is returned through the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field in the response. <br/><br/> For excluded users, an Unpaid Item is not automatically cancelled. The Excluded User list is managed through the <b>SetUserPreferences</b> call. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistancePreference</b> field must also be included and set to <b>true</b> in the request. </span>
     *
     * @return bool
     */
    public function getShowUnpaidItemAssistanceExclusionList()
    {
        return $this->showUnpaidItemAssistanceExclusionList;
    }

    /**
     * Sets a new showUnpaidItemAssistanceExclusionList
     *
     * If included and set to <code>true</code>, the list of eBay user IDs on the Unpaid Item preferences Excluded User list is returned through the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field in the response. <br/><br/> For excluded users, an Unpaid Item is not automatically cancelled. The Excluded User list is managed through the <b>SetUserPreferences</b> call. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistancePreference</b> field must also be included and set to <b>true</b> in the request. </span>
     *
     * @param bool $showUnpaidItemAssistanceExclusionList
     * @return self
     */
    public function setShowUnpaidItemAssistanceExclusionList($showUnpaidItemAssistanceExclusionList)
    {
        $this->showUnpaidItemAssistanceExclusionList = $showUnpaidItemAssistanceExclusionList;
        return $this;
    }

    /**
     * Gets as showSellerProfilePreferences
     *
     * If this flag is included and set to <code>true</code>, the seller's Business Policies profile information is returned in the response. This information includes a flag that indicates whether or not the seller has opted into Business Policies, as well as Business Policies profiles (payment, shipping, and return policy) active on the seller's account.
     *
     * @return bool
     */
    public function getShowSellerProfilePreferences()
    {
        return $this->showSellerProfilePreferences;
    }

    /**
     * Sets a new showSellerProfilePreferences
     *
     * If this flag is included and set to <code>true</code>, the seller's Business Policies profile information is returned in the response. This information includes a flag that indicates whether or not the seller has opted into Business Policies, as well as Business Policies profiles (payment, shipping, and return policy) active on the seller's account.
     *
     * @param bool $showSellerProfilePreferences
     * @return self
     */
    public function setShowSellerProfilePreferences($showSellerProfilePreferences)
    {
        $this->showSellerProfilePreferences = $showSellerProfilePreferences;
        return $this;
    }

    /**
     * Gets as showSellerReturnPreferences
     *
     * If this flag is included and set to <code>true</code>, the <b>SellerReturnPreferences</b> container is returned in the response and indicates whether or not the seller has opted in to eBay Managed Returns.
     *  <br><br>
     *  eBay Managed Returns are currently only available on the US, UK, DE, AU, and CA (English and French) sites.
     *
     * @return bool
     */
    public function getShowSellerReturnPreferences()
    {
        return $this->showSellerReturnPreferences;
    }

    /**
     * Sets a new showSellerReturnPreferences
     *
     * If this flag is included and set to <code>true</code>, the <b>SellerReturnPreferences</b> container is returned in the response and indicates whether or not the seller has opted in to eBay Managed Returns.
     *  <br><br>
     *  eBay Managed Returns are currently only available on the US, UK, DE, AU, and CA (English and French) sites.
     *
     * @param bool $showSellerReturnPreferences
     * @return self
     */
    public function setShowSellerReturnPreferences($showSellerReturnPreferences)
    {
        $this->showSellerReturnPreferences = $showSellerReturnPreferences;
        return $this;
    }

    /**
     * Gets as showGlobalShippingProgramPreference
     *
     * If this flag is included and set to <code>true</code>, the seller's preference for offering the Global Shipping Program to international buyers will be returned in <strong>OfferGlobalShippingProgramPreference</strong>.
     *
     * @return bool
     */
    public function getShowGlobalShippingProgramPreference()
    {
        return $this->showGlobalShippingProgramPreference;
    }

    /**
     * Sets a new showGlobalShippingProgramPreference
     *
     * If this flag is included and set to <code>true</code>, the seller's preference for offering the Global Shipping Program to international buyers will be returned in <strong>OfferGlobalShippingProgramPreference</strong>.
     *
     * @param bool $showGlobalShippingProgramPreference
     * @return self
     */
    public function setShowGlobalShippingProgramPreference($showGlobalShippingProgramPreference)
    {
        $this->showGlobalShippingProgramPreference = $showGlobalShippingProgramPreference;
        return $this;
    }

    /**
     * Gets as showDispatchCutoffTimePreferences
     *
     * If included and set to <code>true</code>, the seller's same-day handling cutoff time is returned in <strong>DispatchCutoffTimePreference.CutoffTime</strong>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time returned in the response may not be accurate. In order for the seller to confirm the actual order cutoff time for same-day handling, that seller should view Shipping Preferences in My eBay. </span>
     *  <br>
     *
     * @return bool
     */
    public function getShowDispatchCutoffTimePreferences()
    {
        return $this->showDispatchCutoffTimePreferences;
    }

    /**
     * Sets a new showDispatchCutoffTimePreferences
     *
     * If included and set to <code>true</code>, the seller's same-day handling cutoff time is returned in <strong>DispatchCutoffTimePreference.CutoffTime</strong>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time returned in the response may not be accurate. In order for the seller to confirm the actual order cutoff time for same-day handling, that seller should view Shipping Preferences in My eBay. </span>
     *  <br>
     *
     * @param bool $showDispatchCutoffTimePreferences
     * @return self
     */
    public function setShowDispatchCutoffTimePreferences($showDispatchCutoffTimePreferences)
    {
        $this->showDispatchCutoffTimePreferences = $showDispatchCutoffTimePreferences;
        return $this;
    }

    /**
     * Gets as showGlobalShippingProgramListingPreference
     *
     * If included and set to <code>true</code>, the <strong>GlobalShippingProgramListingPreference</strong> field is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global Shipping Program by default.
     *
     * @return bool
     */
    public function getShowGlobalShippingProgramListingPreference()
    {
        return $this->showGlobalShippingProgramListingPreference;
    }

    /**
     * Sets a new showGlobalShippingProgramListingPreference
     *
     * If included and set to <code>true</code>, the <strong>GlobalShippingProgramListingPreference</strong> field is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global Shipping Program by default.
     *
     * @param bool $showGlobalShippingProgramListingPreference
     * @return self
     */
    public function setShowGlobalShippingProgramListingPreference($showGlobalShippingProgramListingPreference)
    {
        $this->showGlobalShippingProgramListingPreference = $showGlobalShippingProgramListingPreference;
        return $this;
    }

    /**
     * Gets as showOverrideGSPServiceWithIntlServicePreference
     *
     * If included and set to <code>true</code>, the <strong>OverrideGSPServiceWithIntlServicePreference</strong> field is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     *  <br/><br/>
     *  A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global Shipping-eligible country.
     *
     * @return bool
     */
    public function getShowOverrideGSPServiceWithIntlServicePreference()
    {
        return $this->showOverrideGSPServiceWithIntlServicePreference;
    }

    /**
     * Sets a new showOverrideGSPServiceWithIntlServicePreference
     *
     * If included and set to <code>true</code>, the <strong>OverrideGSPServiceWithIntlServicePreference</strong> field is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     *  <br/><br/>
     *  A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global Shipping-eligible country.
     *
     * @param bool $showOverrideGSPServiceWithIntlServicePreference
     * @return self
     */
    public function setShowOverrideGSPServiceWithIntlServicePreference($showOverrideGSPServiceWithIntlServicePreference)
    {
        $this->showOverrideGSPServiceWithIntlServicePreference = $showOverrideGSPServiceWithIntlServicePreference;
        return $this;
    }

    /**
     * Gets as showPickupDropoffPreferences
     *
     * If included and set to <code>true</code>, the <strong>PickupDropoffSellerPreference</strong> field is returned. A returned value of <code>true</code> indicates that the seller's new listings will by default be eligible to be evaluated for the Click and Collect feature.
     *  <br/><br/>
     *  With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are notified by eBay once their items are available. The Click and Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers to set the Click and Collect preference at the listing level.
     *  </span>
     *
     * @return bool
     */
    public function getShowPickupDropoffPreferences()
    {
        return $this->showPickupDropoffPreferences;
    }

    /**
     * Sets a new showPickupDropoffPreferences
     *
     * If included and set to <code>true</code>, the <strong>PickupDropoffSellerPreference</strong> field is returned. A returned value of <code>true</code> indicates that the seller's new listings will by default be eligible to be evaluated for the Click and Collect feature.
     *  <br/><br/>
     *  With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are notified by eBay once their items are available. The Click and Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers to set the Click and Collect preference at the listing level.
     *  </span>
     *
     * @param bool $showPickupDropoffPreferences
     * @return self
     */
    public function setShowPickupDropoffPreferences($showPickupDropoffPreferences)
    {
        $this->showPickupDropoffPreferences = $showPickupDropoffPreferences;
        return $this;
    }

    /**
     * Gets as showOutOfStockControlPreference
     *
     * If included and set to <code>true</code>, the seller's preferences related to the Out-of-Stock feature will be returned. This feature is set using the <a href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences</a> call.
     *
     * @return bool
     */
    public function getShowOutOfStockControlPreference()
    {
        return $this->showOutOfStockControlPreference;
    }

    /**
     * Sets a new showOutOfStockControlPreference
     *
     * If included and set to <code>true</code>, the seller's preferences related to the Out-of-Stock feature will be returned. This feature is set using the <a href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences</a> call.
     *
     * @param bool $showOutOfStockControlPreference
     * @return self
     */
    public function setShowOutOfStockControlPreference($showOutOfStockControlPreference)
    {
        $this->showOutOfStockControlPreference = $showOutOfStockControlPreference;
        return $this;
    }

    /**
     * Gets as showeBayPLUSPreference
     *
     * <span class="tablenote"><b>Note:</b> Do not use this boolean field. The opt-in and listing preference for eBayPlus has been disabled. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. If used, the ListingPreference and OptInStatus fields are returned as false. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
     *  <br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.
     *  <br/><br/>
     *  The <strong>eBayPLUSPreference</strong> container is returned in the response with information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. The seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @return bool
     */
    public function getShoweBayPLUSPreference()
    {
        return $this->showeBayPLUSPreference;
    }

    /**
     * Sets a new showeBayPLUSPreference
     *
     * <span class="tablenote"><b>Note:</b> Do not use this boolean field. The opt-in and listing preference for eBayPlus has been disabled. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. If used, the ListingPreference and OptInStatus fields are returned as false. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
     *  <br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.
     *  <br/><br/>
     *  The <strong>eBayPLUSPreference</strong> container is returned in the response with information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. The seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @param bool $showeBayPLUSPreference
     * @return self
     */
    public function setShoweBayPLUSPreference($showeBayPLUSPreference)
    {
        $this->showeBayPLUSPreference = $showeBayPLUSPreference;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->showBidderNoticePreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowBidderNoticePreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showCombinedPaymentPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowCombinedPaymentPreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showSellerPaymentPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowSellerPaymentPreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showEndOfAuctionEmailPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowEndOfAuctionEmailPreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showSellerFavoriteItemPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowSellerFavoriteItemPreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showEmailShipmentTrackingNumberPreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowEmailShipmentTrackingNumberPreference', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showRequiredShipPhoneNumberPreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowRequiredShipPhoneNumberPreference', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showSellerExcludeShipToLocationPreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowSellerExcludeShipToLocationPreference', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showUnpaidItemAssistancePreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowUnpaidItemAssistancePreference', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showPurchaseReminderEmailPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowPurchaseReminderEmailPreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showUnpaidItemAssistanceExclusionList;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowUnpaidItemAssistanceExclusionList', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showSellerProfilePreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowSellerProfilePreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showSellerReturnPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowSellerReturnPreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showGlobalShippingProgramPreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowGlobalShippingProgramPreference', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showDispatchCutoffTimePreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowDispatchCutoffTimePreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showGlobalShippingProgramListingPreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowGlobalShippingProgramListingPreference', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showOverrideGSPServiceWithIntlServicePreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowOverrideGSPServiceWithIntlServicePreference', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showPickupDropoffPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowPickupDropoffPreferences', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showOutOfStockControlPreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShowOutOfStockControlPreference', null, ($value ? 'true' : 'false'));
        }
        $value = $this->showeBayPLUSPreference;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShoweBayPLUSPreference', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetUserPreferencesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'ShowBidderNoticePreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showBidderNoticePreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowCombinedPaymentPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showCombinedPaymentPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowSellerPaymentPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showSellerPaymentPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowEndOfAuctionEmailPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showEndOfAuctionEmailPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowSellerFavoriteItemPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showSellerFavoriteItemPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowEmailShipmentTrackingNumberPreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showEmailShipmentTrackingNumberPreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowRequiredShipPhoneNumberPreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showRequiredShipPhoneNumberPreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowSellerExcludeShipToLocationPreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showSellerExcludeShipToLocationPreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowUnpaidItemAssistancePreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showUnpaidItemAssistancePreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowPurchaseReminderEmailPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showPurchaseReminderEmailPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowUnpaidItemAssistanceExclusionList':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showUnpaidItemAssistanceExclusionList = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowSellerProfilePreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showSellerProfilePreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowSellerReturnPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showSellerReturnPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowGlobalShippingProgramPreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showGlobalShippingProgramPreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowDispatchCutoffTimePreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showDispatchCutoffTimePreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowGlobalShippingProgramListingPreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showGlobalShippingProgramListingPreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowOverrideGSPServiceWithIntlServicePreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showOverrideGSPServiceWithIntlServicePreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowPickupDropoffPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showPickupDropoffPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShowOutOfStockControlPreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showOutOfStockControlPreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShoweBayPLUSPreference':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->showeBayPLUSPreference = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
