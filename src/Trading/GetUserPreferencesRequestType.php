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
     * This field is deprecated.
     *
     * @var bool $showCrossPromotionPreferences
     */
    private $showCrossPromotionPreferences = null;

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
     * This field is deprecated.
     *
     * @var bool $showProStoresPreferences
     */
    private $showProStoresPreferences = null;

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
     * If included and set to <code>true</code>, the seller's Unpaid Item Assistant preferences are returned in the response. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
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
     * If included and set to <code>true</code>, the list of eBay user IDs on the Unpaid Item Assistant Excluded User list is returned through the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field in the response. <br/><br/> For excluded users, an Unpaid Item dispute is not automatically filed through the UPI Assistance mechanism. The Excluded User list is managed through the <b>SetUserPreferences</b> call. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the <b>ShowUnpaidItemAssistancePreference</b> field must also be included and set to <b>true</b> in the request. </span>
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
     * To determine whether a seller can offer eBay Plus in qualified listings, include this field and set it to <code>true</code>.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus, and can offer the program on a per-listing basis.
     *  <br/><br/>
     *  The <strong>eBayPLUSPreference</strong> container is returned in the response with information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia.
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
     * Gets as showCrossPromotionPreferences
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getShowCrossPromotionPreferences()
    {
        return $this->showCrossPromotionPreferences;
    }

    /**
     * Sets a new showCrossPromotionPreferences
     *
     * This field is deprecated.
     *
     * @param bool $showCrossPromotionPreferences
     * @return self
     */
    public function setShowCrossPromotionPreferences($showCrossPromotionPreferences)
    {
        $this->showCrossPromotionPreferences = $showCrossPromotionPreferences;
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
     * Gets as showProStoresPreferences
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getShowProStoresPreferences()
    {
        return $this->showProStoresPreferences;
    }

    /**
     * Sets a new showProStoresPreferences
     *
     * This field is deprecated.
     *
     * @param bool $showProStoresPreferences
     * @return self
     */
    public function setShowProStoresPreferences($showProStoresPreferences)
    {
        $this->showProStoresPreferences = $showProStoresPreferences;
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
     * If included and set to <code>true</code>, the seller's Unpaid Item Assistant preferences are returned in the response. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
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
     * If included and set to <code>true</code>, the seller's Unpaid Item Assistant preferences are returned in the response. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field. </span>
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
     * If included and set to <code>true</code>, the list of eBay user IDs on the Unpaid Item Assistant Excluded User list is returned through the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field in the response. <br/><br/> For excluded users, an Unpaid Item dispute is not automatically filed through the UPI Assistance mechanism. The Excluded User list is managed through the <b>SetUserPreferences</b> call. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the <b>ShowUnpaidItemAssistancePreference</b> field must also be included and set to <b>true</b> in the request. </span>
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
     * If included and set to <code>true</code>, the list of eBay user IDs on the Unpaid Item Assistant Excluded User list is returned through the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field in the response. <br/><br/> For excluded users, an Unpaid Item dispute is not automatically filed through the UPI Assistance mechanism. The Excluded User list is managed through the <b>SetUserPreferences</b> call. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the <b>ShowUnpaidItemAssistancePreference</b> field must also be included and set to <b>true</b> in the request. </span>
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
     * To determine whether a seller can offer eBay Plus in qualified listings, include this field and set it to <code>true</code>.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus, and can offer the program on a per-listing basis.
     *  <br/><br/>
     *  The <strong>eBayPLUSPreference</strong> container is returned in the response with information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia.
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
     * To determine whether a seller can offer eBay Plus in qualified listings, include this field and set it to <code>true</code>.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus, and can offer the program on a per-listing basis.
     *  <br/><br/>
     *  The <strong>eBayPLUSPreference</strong> container is returned in the response with information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getShowBidderNoticePreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowBidderNoticePreferences", $value);
        }
        $value = $this->getShowCombinedPaymentPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowCombinedPaymentPreferences", $value);
        }
        $value = $this->getShowCrossPromotionPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowCrossPromotionPreferences", $value);
        }
        $value = $this->getShowSellerPaymentPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowSellerPaymentPreferences", $value);
        }
        $value = $this->getShowEndOfAuctionEmailPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowEndOfAuctionEmailPreferences", $value);
        }
        $value = $this->getShowSellerFavoriteItemPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowSellerFavoriteItemPreferences", $value);
        }
        $value = $this->getShowProStoresPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowProStoresPreferences", $value);
        }
        $value = $this->getShowEmailShipmentTrackingNumberPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowEmailShipmentTrackingNumberPreference", $value);
        }
        $value = $this->getShowRequiredShipPhoneNumberPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowRequiredShipPhoneNumberPreference", $value);
        }
        $value = $this->getShowSellerExcludeShipToLocationPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowSellerExcludeShipToLocationPreference", $value);
        }
        $value = $this->getShowUnpaidItemAssistancePreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowUnpaidItemAssistancePreference", $value);
        }
        $value = $this->getShowPurchaseReminderEmailPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowPurchaseReminderEmailPreferences", $value);
        }
        $value = $this->getShowUnpaidItemAssistanceExclusionList();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowUnpaidItemAssistanceExclusionList", $value);
        }
        $value = $this->getShowSellerProfilePreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowSellerProfilePreferences", $value);
        }
        $value = $this->getShowSellerReturnPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowSellerReturnPreferences", $value);
        }
        $value = $this->getShowGlobalShippingProgramPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowGlobalShippingProgramPreference", $value);
        }
        $value = $this->getShowDispatchCutoffTimePreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowDispatchCutoffTimePreferences", $value);
        }
        $value = $this->getShowGlobalShippingProgramListingPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowGlobalShippingProgramListingPreference", $value);
        }
        $value = $this->getShowOverrideGSPServiceWithIntlServicePreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowOverrideGSPServiceWithIntlServicePreference", $value);
        }
        $value = $this->getShowPickupDropoffPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowPickupDropoffPreferences", $value);
        }
        $value = $this->getShowOutOfStockControlPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowOutOfStockControlPreference", $value);
        }
        $value = $this->getShoweBayPLUSPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShoweBayPLUSPreference", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowBidderNoticePreferences');
        if (null !== $value) {
            $this->setShowBidderNoticePreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowCombinedPaymentPreferences');
        if (null !== $value) {
            $this->setShowCombinedPaymentPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowCrossPromotionPreferences');
        if (null !== $value) {
            $this->setShowCrossPromotionPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowSellerPaymentPreferences');
        if (null !== $value) {
            $this->setShowSellerPaymentPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowEndOfAuctionEmailPreferences');
        if (null !== $value) {
            $this->setShowEndOfAuctionEmailPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowSellerFavoriteItemPreferences');
        if (null !== $value) {
            $this->setShowSellerFavoriteItemPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowProStoresPreferences');
        if (null !== $value) {
            $this->setShowProStoresPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowEmailShipmentTrackingNumberPreference');
        if (null !== $value) {
            $this->setShowEmailShipmentTrackingNumberPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowRequiredShipPhoneNumberPreference');
        if (null !== $value) {
            $this->setShowRequiredShipPhoneNumberPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowSellerExcludeShipToLocationPreference');
        if (null !== $value) {
            $this->setShowSellerExcludeShipToLocationPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowUnpaidItemAssistancePreference');
        if (null !== $value) {
            $this->setShowUnpaidItemAssistancePreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowPurchaseReminderEmailPreferences');
        if (null !== $value) {
            $this->setShowPurchaseReminderEmailPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowUnpaidItemAssistanceExclusionList');
        if (null !== $value) {
            $this->setShowUnpaidItemAssistanceExclusionList($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowSellerProfilePreferences');
        if (null !== $value) {
            $this->setShowSellerProfilePreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowSellerReturnPreferences');
        if (null !== $value) {
            $this->setShowSellerReturnPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowGlobalShippingProgramPreference');
        if (null !== $value) {
            $this->setShowGlobalShippingProgramPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowDispatchCutoffTimePreferences');
        if (null !== $value) {
            $this->setShowDispatchCutoffTimePreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowGlobalShippingProgramListingPreference');
        if (null !== $value) {
            $this->setShowGlobalShippingProgramListingPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowOverrideGSPServiceWithIntlServicePreference');
        if (null !== $value) {
            $this->setShowOverrideGSPServiceWithIntlServicePreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowPickupDropoffPreferences');
        if (null !== $value) {
            $this->setShowPickupDropoffPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowOutOfStockControlPreference');
        if (null !== $value) {
            $this->setShowOutOfStockControlPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShoweBayPLUSPreference');
        if (null !== $value) {
            $this->setShoweBayPLUSPreference($value);
        }
    }
}
