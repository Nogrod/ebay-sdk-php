<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserPreferencesResponseType
 *
 * Contains some or all of the authenticated user's preferences. The preferences are
 *  grouped in sets and are returned according to the flag settings in the request.
 * XSD Type: GetUserPreferencesResponseType
 */
class GetUserPreferencesResponseType extends AbstractResponseType
{
    /**
     * Container consisting of the seller's preference for receiving contact information for unsuccessful bidders. This container is returned when <b>ShowBidderNoticePreferences</b> is included and set to <code>true</code> in the request. This preference is only applicable for auction listings.
     *
     * @var \Nogrod\eBaySDK\Trading\BidderNoticePreferencesType $bidderNoticePreferences
     */
    private $bidderNoticePreferences = null;

    /**
     * Container consisting of the seller's Combined Invoice preferences. These preferences are used to allow Combined Invoice orders. This container is returned when <b>ShowCombinedPaymentPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\CombinedPaymentPreferencesType $combinedPaymentPreferences
     */
    private $combinedPaymentPreferences = null;

    /**
     * This container is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CrossPromotionPreferencesType $crossPromotionPreferences
     */
    private $crossPromotionPreferences = null;

    /**
     * Container consisting of the seller's payment preferences. This container is returned when <b>ShowSellerPaymentPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerPaymentPreferencesType $sellerPaymentPreferences
     */
    private $sellerPaymentPreferences = null;

    /**
     * Container consisting of the seller's preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. This container is returned when <b>ShowSellerFavoriteItemPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     */
    private $sellerFavoriteItemPreferences = null;

    /**
     * Container consisting of the seller's preferences for the end-of-auction email sent to the winning bidder. This container is returned when <b>ShowEndOfAuctionEmailPreferences</b> is included and set to <code>true</code> in the request. These preferences are only applicable for auction listings.
     *
     * @var \Nogrod\eBaySDK\Trading\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     */
    private $endOfAuctionEmailPreferences = null;

    /**
     * Container consisting of the seller's preference for sending an email to the buyer with the shipment tracking number. This container is returned when <b>ShowEmailShipmentTrackingNumberPreference</b> is included and set to <code>true</code> in the request.
     *
     * @var bool $emailShipmentTrackingNumberPreference
     */
    private $emailShipmentTrackingNumberPreference = null;

    /**
     * Container consisting of the seller's preference for requiring that the buyer supply a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number. This container is returned when <b>ShowRequiredShipPhoneNumberPreference</b> is included and set to <code>true</code> in the request.
     *
     * @var bool $requiredShipPhoneNumberPreference
     */
    private $requiredShipPhoneNumberPreference = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ProStoresCheckoutPreferenceType $proStoresPreference
     */
    private $proStoresPreference = null;

    /**
     * Container consisting of a seller's Unpaid Item preferences. The Unpaid Item preferences can be used to automatically cancel an unpaid order and relist the item on the behalf of the seller. This container is returned if <b>ShowUnpaidItemAssistancePreference</b> is included and set to <code>true</code> in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     */
    private $unpaidItemAssistancePreferences = null;

    /**
     * Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current <a href="http://cgi5.ebay.com/ws/eBayISAPI.dll?ExcludeShippingList" target="_blank">Exclude shipping locations</a> list in My eBay's shipping preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq).
     *  <br/><br/>
     *  Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the Add/Revise/Relist calls. This container is returned if the <b>ShowSellerExcludeShipToLocationPreference</b> field is included and set to <code>true</code> in the request.
     *
     * @var string[] $sellerExcludeShipToLocationPreferences
     */
    private $sellerExcludeShipToLocationPreferences = null;

    /**
     * Container consisting of a seller's preference for sending a purchase reminder email to buyers. This container is returned if the <b>ShowPurchaseReminderEmailPreferences</b> field is included and set to <code>true</code> in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     */
    private $purchaseReminderEmailPreferences = null;

    /**
     * This field is deprecated along with third-party checkout.
     *
     * @var bool $sellerThirdPartyCheckoutDisabled
     */
    private $sellerThirdPartyCheckoutDisabled = null;

    /**
     * Parent response container consisting of high-level information for all Business Policies defined for the user's account. This container is returned if <b>ShowSellerProfilePreferences</b> is included and set to <code>true</code> in the <b>GetUserPreferences</b> request (and one or more Business Policies are defined for the user's account).
     *
     * @var \Nogrod\eBaySDK\Trading\SellerProfilePreferencesType $sellerProfilePreferences
     */
    private $sellerProfilePreferences = null;

    /**
     * Container consisting of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns. This container is only returned if <b>ShowSellerReturnPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerReturnPreferencesType $sellerReturnPreferences
     */
    private $sellerReturnPreferences = null;

    /**
     * This flag indicates whether the seller has opted in to the Global Shipping Program and is able to offer global shipping to international buyers. Returned when <b>ShowGlobalShippingProgramPreference</b> is included and set to <code>true</code>.
     *
     * @var bool $offerGlobalShippingProgramPreference
     */
    private $offerGlobalShippingProgramPreference = null;

    /**
     * Contains information about a seller's order cutoff time preferences for same-day shipping. If the seller specifies a value of '0' in <b>Item.DispatchTimeMax</b> to offer same-day handling when listing an item, the seller's shipping time commitment depends on the order cutoff time set for the listing site, as indicated by <b>DispatchCutoffTimePreference.CutoffTime</b>. Returned when <b>ShowDispatchCutoffTimePreferences</b> is included and set to <code>true</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time returned in this container may not be accurate. In order for the seller to confirm the actual order cutoff time for same-day handling, that seller should view Shipping Preferences in My eBay. </span>
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     */
    private $dispatchCutoffTimePreference = null;

    /**
     * If the <b>ShowGlobalShippingProgramListingPreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global Shipping Program by default.
     *
     * @var bool $globalShippingProgramListingPreference
     */
    private $globalShippingProgramListingPreference = null;

    /**
     * If the <b>ShowOverrideGSPServiceWithIntlServicePreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     *  <br/><br/>
     *  A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global Shipping-eligible country.
     *
     * @var bool $overrideGSPServiceWithIntlServicePreference
     */
    private $overrideGSPServiceWithIntlServicePreference = null;

    /**
     * This boolean field is returned if the <b>ShowPickupDropoffPreferences</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has enabled the Click and Collect feature at the account level. All of the seller's new listings will by default be eligible to be evaluated for the Click and Collect feature. With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are notified by eBay once their items are available. The Click and Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers to set the Click and Collect preference at the listing level.
     *  </span>
     *
     * @var bool $pickupDropoffSellerPreference
     */
    private $pickupDropoffSellerPreference = null;

    /**
     * This boolean field is returned if the <b>ShowOutOfStockControlPreference</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has set
     *  <a href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     *
     * @var bool $outOfStockControlPreference
     */
    private $outOfStockControlPreference = null;

    /**
     * Contains information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to offer the program on a per-listing basis.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\EBayPLUSPreferenceType[] $eBayPLUSPreference
     */
    private $eBayPLUSPreference = [

    ];

    /**
     * Gets as bidderNoticePreferences
     *
     * Container consisting of the seller's preference for receiving contact information for unsuccessful bidders. This container is returned when <b>ShowBidderNoticePreferences</b> is included and set to <code>true</code> in the request. This preference is only applicable for auction listings.
     *
     * @return \Nogrod\eBaySDK\Trading\BidderNoticePreferencesType
     */
    public function getBidderNoticePreferences()
    {
        return $this->bidderNoticePreferences;
    }

    /**
     * Sets a new bidderNoticePreferences
     *
     * Container consisting of the seller's preference for receiving contact information for unsuccessful bidders. This container is returned when <b>ShowBidderNoticePreferences</b> is included and set to <code>true</code> in the request. This preference is only applicable for auction listings.
     *
     * @param \Nogrod\eBaySDK\Trading\BidderNoticePreferencesType $bidderNoticePreferences
     * @return self
     */
    public function setBidderNoticePreferences(\Nogrod\eBaySDK\Trading\BidderNoticePreferencesType $bidderNoticePreferences)
    {
        $this->bidderNoticePreferences = $bidderNoticePreferences;
        return $this;
    }

    /**
     * Gets as combinedPaymentPreferences
     *
     * Container consisting of the seller's Combined Invoice preferences. These preferences are used to allow Combined Invoice orders. This container is returned when <b>ShowCombinedPaymentPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\CombinedPaymentPreferencesType
     */
    public function getCombinedPaymentPreferences()
    {
        return $this->combinedPaymentPreferences;
    }

    /**
     * Sets a new combinedPaymentPreferences
     *
     * Container consisting of the seller's Combined Invoice preferences. These preferences are used to allow Combined Invoice orders. This container is returned when <b>ShowCombinedPaymentPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\CombinedPaymentPreferencesType $combinedPaymentPreferences
     * @return self
     */
    public function setCombinedPaymentPreferences(\Nogrod\eBaySDK\Trading\CombinedPaymentPreferencesType $combinedPaymentPreferences)
    {
        $this->combinedPaymentPreferences = $combinedPaymentPreferences;
        return $this;
    }

    /**
     * Gets as crossPromotionPreferences
     *
     * This container is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CrossPromotionPreferencesType
     */
    public function getCrossPromotionPreferences()
    {
        return $this->crossPromotionPreferences;
    }

    /**
     * Sets a new crossPromotionPreferences
     *
     * This container is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\CrossPromotionPreferencesType $crossPromotionPreferences
     * @return self
     */
    public function setCrossPromotionPreferences(\Nogrod\eBaySDK\Trading\CrossPromotionPreferencesType $crossPromotionPreferences)
    {
        $this->crossPromotionPreferences = $crossPromotionPreferences;
        return $this;
    }

    /**
     * Gets as sellerPaymentPreferences
     *
     * Container consisting of the seller's payment preferences. This container is returned when <b>ShowSellerPaymentPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerPaymentPreferencesType
     */
    public function getSellerPaymentPreferences()
    {
        return $this->sellerPaymentPreferences;
    }

    /**
     * Sets a new sellerPaymentPreferences
     *
     * Container consisting of the seller's payment preferences. This container is returned when <b>ShowSellerPaymentPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerPaymentPreferencesType $sellerPaymentPreferences
     * @return self
     */
    public function setSellerPaymentPreferences(\Nogrod\eBaySDK\Trading\SellerPaymentPreferencesType $sellerPaymentPreferences)
    {
        $this->sellerPaymentPreferences = $sellerPaymentPreferences;
        return $this;
    }

    /**
     * Gets as sellerFavoriteItemPreferences
     *
     * Container consisting of the seller's preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. This container is returned when <b>ShowSellerFavoriteItemPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerFavoriteItemPreferencesType
     */
    public function getSellerFavoriteItemPreferences()
    {
        return $this->sellerFavoriteItemPreferences;
    }

    /**
     * Sets a new sellerFavoriteItemPreferences
     *
     * Container consisting of the seller's preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. This container is returned when <b>ShowSellerFavoriteItemPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     * @return self
     */
    public function setSellerFavoriteItemPreferences(\Nogrod\eBaySDK\Trading\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences)
    {
        $this->sellerFavoriteItemPreferences = $sellerFavoriteItemPreferences;
        return $this;
    }

    /**
     * Gets as endOfAuctionEmailPreferences
     *
     * Container consisting of the seller's preferences for the end-of-auction email sent to the winning bidder. This container is returned when <b>ShowEndOfAuctionEmailPreferences</b> is included and set to <code>true</code> in the request. These preferences are only applicable for auction listings.
     *
     * @return \Nogrod\eBaySDK\Trading\EndOfAuctionEmailPreferencesType
     */
    public function getEndOfAuctionEmailPreferences()
    {
        return $this->endOfAuctionEmailPreferences;
    }

    /**
     * Sets a new endOfAuctionEmailPreferences
     *
     * Container consisting of the seller's preferences for the end-of-auction email sent to the winning bidder. This container is returned when <b>ShowEndOfAuctionEmailPreferences</b> is included and set to <code>true</code> in the request. These preferences are only applicable for auction listings.
     *
     * @param \Nogrod\eBaySDK\Trading\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     * @return self
     */
    public function setEndOfAuctionEmailPreferences(\Nogrod\eBaySDK\Trading\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences)
    {
        $this->endOfAuctionEmailPreferences = $endOfAuctionEmailPreferences;
        return $this;
    }

    /**
     * Gets as emailShipmentTrackingNumberPreference
     *
     * Container consisting of the seller's preference for sending an email to the buyer with the shipment tracking number. This container is returned when <b>ShowEmailShipmentTrackingNumberPreference</b> is included and set to <code>true</code> in the request.
     *
     * @return bool
     */
    public function getEmailShipmentTrackingNumberPreference()
    {
        return $this->emailShipmentTrackingNumberPreference;
    }

    /**
     * Sets a new emailShipmentTrackingNumberPreference
     *
     * Container consisting of the seller's preference for sending an email to the buyer with the shipment tracking number. This container is returned when <b>ShowEmailShipmentTrackingNumberPreference</b> is included and set to <code>true</code> in the request.
     *
     * @param bool $emailShipmentTrackingNumberPreference
     * @return self
     */
    public function setEmailShipmentTrackingNumberPreference($emailShipmentTrackingNumberPreference)
    {
        $this->emailShipmentTrackingNumberPreference = $emailShipmentTrackingNumberPreference;
        return $this;
    }

    /**
     * Gets as requiredShipPhoneNumberPreference
     *
     * Container consisting of the seller's preference for requiring that the buyer supply a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number. This container is returned when <b>ShowRequiredShipPhoneNumberPreference</b> is included and set to <code>true</code> in the request.
     *
     * @return bool
     */
    public function getRequiredShipPhoneNumberPreference()
    {
        return $this->requiredShipPhoneNumberPreference;
    }

    /**
     * Sets a new requiredShipPhoneNumberPreference
     *
     * Container consisting of the seller's preference for requiring that the buyer supply a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number. This container is returned when <b>ShowRequiredShipPhoneNumberPreference</b> is included and set to <code>true</code> in the request.
     *
     * @param bool $requiredShipPhoneNumberPreference
     * @return self
     */
    public function setRequiredShipPhoneNumberPreference($requiredShipPhoneNumberPreference)
    {
        $this->requiredShipPhoneNumberPreference = $requiredShipPhoneNumberPreference;
        return $this;
    }

    /**
     * Gets as proStoresPreference
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ProStoresCheckoutPreferenceType
     */
    public function getProStoresPreference()
    {
        return $this->proStoresPreference;
    }

    /**
     * Sets a new proStoresPreference
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ProStoresCheckoutPreferenceType $proStoresPreference
     * @return self
     */
    public function setProStoresPreference(\Nogrod\eBaySDK\Trading\ProStoresCheckoutPreferenceType $proStoresPreference)
    {
        $this->proStoresPreference = $proStoresPreference;
        return $this;
    }

    /**
     * Gets as unpaidItemAssistancePreferences
     *
     * Container consisting of a seller's Unpaid Item preferences. The Unpaid Item preferences can be used to automatically cancel an unpaid order and relist the item on the behalf of the seller. This container is returned if <b>ShowUnpaidItemAssistancePreference</b> is included and set to <code>true</code> in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType
     */
    public function getUnpaidItemAssistancePreferences()
    {
        return $this->unpaidItemAssistancePreferences;
    }

    /**
     * Sets a new unpaidItemAssistancePreferences
     *
     * Container consisting of a seller's Unpaid Item preferences. The Unpaid Item preferences can be used to automatically cancel an unpaid order and relist the item on the behalf of the seller. This container is returned if <b>ShowUnpaidItemAssistancePreference</b> is included and set to <code>true</code> in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  To return the list of buyers excluded from the Unpaid Item preferences, the <b>ShowUnpaidItemAssistanceExclusionList</b> field must also be included and set to <code>true</code> in the request. Excluded buyers can be viewed in the <b>UnpaidItemAssistancePreferences.ExcludedUser</b> field.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     * @return self
     */
    public function setUnpaidItemAssistancePreferences(\Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences)
    {
        $this->unpaidItemAssistancePreferences = $unpaidItemAssistancePreferences;
        return $this;
    }

    /**
     * Adds as excludeShipToLocation
     *
     * Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current <a href="http://cgi5.ebay.com/ws/eBayISAPI.dll?ExcludeShippingList" target="_blank">Exclude shipping locations</a> list in My eBay's shipping preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq).
     *  <br/><br/>
     *  Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the Add/Revise/Relist calls. This container is returned if the <b>ShowSellerExcludeShipToLocationPreference</b> field is included and set to <code>true</code> in the request.
     *
     * @return self
     * @param string $excludeShipToLocation
     */
    public function addToSellerExcludeShipToLocationPreferences($excludeShipToLocation)
    {
        $this->sellerExcludeShipToLocationPreferences[] = $excludeShipToLocation;
        return $this;
    }

    /**
     * isset sellerExcludeShipToLocationPreferences
     *
     * Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current <a href="http://cgi5.ebay.com/ws/eBayISAPI.dll?ExcludeShippingList" target="_blank">Exclude shipping locations</a> list in My eBay's shipping preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq).
     *  <br/><br/>
     *  Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the Add/Revise/Relist calls. This container is returned if the <b>ShowSellerExcludeShipToLocationPreference</b> field is included and set to <code>true</code> in the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerExcludeShipToLocationPreferences($index)
    {
        return isset($this->sellerExcludeShipToLocationPreferences[$index]);
    }

    /**
     * unset sellerExcludeShipToLocationPreferences
     *
     * Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current <a href="http://cgi5.ebay.com/ws/eBayISAPI.dll?ExcludeShippingList" target="_blank">Exclude shipping locations</a> list in My eBay's shipping preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq).
     *  <br/><br/>
     *  Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the Add/Revise/Relist calls. This container is returned if the <b>ShowSellerExcludeShipToLocationPreference</b> field is included and set to <code>true</code> in the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerExcludeShipToLocationPreferences($index)
    {
        unset($this->sellerExcludeShipToLocationPreferences[$index]);
    }

    /**
     * Gets as sellerExcludeShipToLocationPreferences
     *
     * Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current <a href="http://cgi5.ebay.com/ws/eBayISAPI.dll?ExcludeShippingList" target="_blank">Exclude shipping locations</a> list in My eBay's shipping preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq).
     *  <br/><br/>
     *  Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the Add/Revise/Relist calls. This container is returned if the <b>ShowSellerExcludeShipToLocationPreference</b> field is included and set to <code>true</code> in the request.
     *
     * @return string[]
     */
    public function getSellerExcludeShipToLocationPreferences()
    {
        return $this->sellerExcludeShipToLocationPreferences;
    }

    /**
     * Sets a new sellerExcludeShipToLocationPreferences
     *
     * Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current <a href="http://cgi5.ebay.com/ws/eBayISAPI.dll?ExcludeShippingList" target="_blank">Exclude shipping locations</a> list in My eBay's shipping preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq).
     *  <br/><br/>
     *  Sellers can override these default settings for an individual listing by using the <b>Item.ShippingDetails.ExcludeShipToLocation</b> field in the Add/Revise/Relist calls. This container is returned if the <b>ShowSellerExcludeShipToLocationPreference</b> field is included and set to <code>true</code> in the request.
     *
     * @param string[] $sellerExcludeShipToLocationPreferences
     * @return self
     */
    public function setSellerExcludeShipToLocationPreferences(array $sellerExcludeShipToLocationPreferences)
    {
        $this->sellerExcludeShipToLocationPreferences = $sellerExcludeShipToLocationPreferences;
        return $this;
    }

    /**
     * Gets as purchaseReminderEmailPreferences
     *
     * Container consisting of a seller's preference for sending a purchase reminder email to buyers. This container is returned if the <b>ShowPurchaseReminderEmailPreferences</b> field is included and set to <code>true</code> in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType
     */
    public function getPurchaseReminderEmailPreferences()
    {
        return $this->purchaseReminderEmailPreferences;
    }

    /**
     * Sets a new purchaseReminderEmailPreferences
     *
     * Container consisting of a seller's preference for sending a purchase reminder email to buyers. This container is returned if the <b>ShowPurchaseReminderEmailPreferences</b> field is included and set to <code>true</code> in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     * @return self
     */
    public function setPurchaseReminderEmailPreferences(\Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences)
    {
        $this->purchaseReminderEmailPreferences = $purchaseReminderEmailPreferences;
        return $this;
    }

    /**
     * Gets as sellerThirdPartyCheckoutDisabled
     *
     * This field is deprecated along with third-party checkout.
     *
     * @return bool
     */
    public function getSellerThirdPartyCheckoutDisabled()
    {
        return $this->sellerThirdPartyCheckoutDisabled;
    }

    /**
     * Sets a new sellerThirdPartyCheckoutDisabled
     *
     * This field is deprecated along with third-party checkout.
     *
     * @param bool $sellerThirdPartyCheckoutDisabled
     * @return self
     */
    public function setSellerThirdPartyCheckoutDisabled($sellerThirdPartyCheckoutDisabled)
    {
        $this->sellerThirdPartyCheckoutDisabled = $sellerThirdPartyCheckoutDisabled;
        return $this;
    }

    /**
     * Gets as sellerProfilePreferences
     *
     * Parent response container consisting of high-level information for all Business Policies defined for the user's account. This container is returned if <b>ShowSellerProfilePreferences</b> is included and set to <code>true</code> in the <b>GetUserPreferences</b> request (and one or more Business Policies are defined for the user's account).
     *
     * @return \Nogrod\eBaySDK\Trading\SellerProfilePreferencesType
     */
    public function getSellerProfilePreferences()
    {
        return $this->sellerProfilePreferences;
    }

    /**
     * Sets a new sellerProfilePreferences
     *
     * Parent response container consisting of high-level information for all Business Policies defined for the user's account. This container is returned if <b>ShowSellerProfilePreferences</b> is included and set to <code>true</code> in the <b>GetUserPreferences</b> request (and one or more Business Policies are defined for the user's account).
     *
     * @param \Nogrod\eBaySDK\Trading\SellerProfilePreferencesType $sellerProfilePreferences
     * @return self
     */
    public function setSellerProfilePreferences(\Nogrod\eBaySDK\Trading\SellerProfilePreferencesType $sellerProfilePreferences)
    {
        $this->sellerProfilePreferences = $sellerProfilePreferences;
        return $this;
    }

    /**
     * Gets as sellerReturnPreferences
     *
     * Container consisting of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns. This container is only returned if <b>ShowSellerReturnPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerReturnPreferencesType
     */
    public function getSellerReturnPreferences()
    {
        return $this->sellerReturnPreferences;
    }

    /**
     * Sets a new sellerReturnPreferences
     *
     * Container consisting of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns. This container is only returned if <b>ShowSellerReturnPreferences</b> is included and set to <code>true</code> in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerReturnPreferencesType $sellerReturnPreferences
     * @return self
     */
    public function setSellerReturnPreferences(\Nogrod\eBaySDK\Trading\SellerReturnPreferencesType $sellerReturnPreferences)
    {
        $this->sellerReturnPreferences = $sellerReturnPreferences;
        return $this;
    }

    /**
     * Gets as offerGlobalShippingProgramPreference
     *
     * This flag indicates whether the seller has opted in to the Global Shipping Program and is able to offer global shipping to international buyers. Returned when <b>ShowGlobalShippingProgramPreference</b> is included and set to <code>true</code>.
     *
     * @return bool
     */
    public function getOfferGlobalShippingProgramPreference()
    {
        return $this->offerGlobalShippingProgramPreference;
    }

    /**
     * Sets a new offerGlobalShippingProgramPreference
     *
     * This flag indicates whether the seller has opted in to the Global Shipping Program and is able to offer global shipping to international buyers. Returned when <b>ShowGlobalShippingProgramPreference</b> is included and set to <code>true</code>.
     *
     * @param bool $offerGlobalShippingProgramPreference
     * @return self
     */
    public function setOfferGlobalShippingProgramPreference($offerGlobalShippingProgramPreference)
    {
        $this->offerGlobalShippingProgramPreference = $offerGlobalShippingProgramPreference;
        return $this;
    }

    /**
     * Gets as dispatchCutoffTimePreference
     *
     * Contains information about a seller's order cutoff time preferences for same-day shipping. If the seller specifies a value of '0' in <b>Item.DispatchTimeMax</b> to offer same-day handling when listing an item, the seller's shipping time commitment depends on the order cutoff time set for the listing site, as indicated by <b>DispatchCutoffTimePreference.CutoffTime</b>. Returned when <b>ShowDispatchCutoffTimePreferences</b> is included and set to <code>true</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time returned in this container may not be accurate. In order for the seller to confirm the actual order cutoff time for same-day handling, that seller should view Shipping Preferences in My eBay. </span>
     *  <br>
     *
     * @return \Nogrod\eBaySDK\Trading\DispatchCutoffTimePreferencesType
     */
    public function getDispatchCutoffTimePreference()
    {
        return $this->dispatchCutoffTimePreference;
    }

    /**
     * Sets a new dispatchCutoffTimePreference
     *
     * Contains information about a seller's order cutoff time preferences for same-day shipping. If the seller specifies a value of '0' in <b>Item.DispatchTimeMax</b> to offer same-day handling when listing an item, the seller's shipping time commitment depends on the order cutoff time set for the listing site, as indicated by <b>DispatchCutoffTimePreference.CutoffTime</b>. Returned when <b>ShowDispatchCutoffTimePreferences</b> is included and set to <code>true</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time returned in this container may not be accurate. In order for the seller to confirm the actual order cutoff time for same-day handling, that seller should view Shipping Preferences in My eBay. </span>
     *  <br>
     *
     * @param \Nogrod\eBaySDK\Trading\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     * @return self
     */
    public function setDispatchCutoffTimePreference(\Nogrod\eBaySDK\Trading\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference)
    {
        $this->dispatchCutoffTimePreference = $dispatchCutoffTimePreference;
        return $this;
    }

    /**
     * Gets as globalShippingProgramListingPreference
     *
     * If the <b>ShowGlobalShippingProgramListingPreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global Shipping Program by default.
     *
     * @return bool
     */
    public function getGlobalShippingProgramListingPreference()
    {
        return $this->globalShippingProgramListingPreference;
    }

    /**
     * Sets a new globalShippingProgramListingPreference
     *
     * If the <b>ShowGlobalShippingProgramListingPreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that the seller's new listings will enable the Global Shipping Program by default.
     *
     * @param bool $globalShippingProgramListingPreference
     * @return self
     */
    public function setGlobalShippingProgramListingPreference($globalShippingProgramListingPreference)
    {
        $this->globalShippingProgramListingPreference = $globalShippingProgramListingPreference;
        return $this;
    }

    /**
     * Gets as overrideGSPServiceWithIntlServicePreference
     *
     * If the <b>ShowOverrideGSPServiceWithIntlServicePreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     *  <br/><br/>
     *  A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global Shipping-eligible country.
     *
     * @return bool
     */
    public function getOverrideGSPServiceWithIntlServicePreference()
    {
        return $this->overrideGSPServiceWithIntlServicePreference;
    }

    /**
     * Sets a new overrideGSPServiceWithIntlServicePreference
     *
     * If the <b>ShowOverrideGSPServiceWithIntlServicePreference</b> field is submitted and set to <code>true</code>, this flag is returned. A returned value of <code>true</code> indicates that for the seller's listings that specify an international shipping service for any Global Shipping-eligible country, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program.
     *  <br/><br/>
     *  A returned value of <code>false</code> indicates that the Global Shipping program will take precedence over any international shipping service as the default option in Global Shipping-eligible listings for shipping to any Global Shipping-eligible country.
     *
     * @param bool $overrideGSPServiceWithIntlServicePreference
     * @return self
     */
    public function setOverrideGSPServiceWithIntlServicePreference($overrideGSPServiceWithIntlServicePreference)
    {
        $this->overrideGSPServiceWithIntlServicePreference = $overrideGSPServiceWithIntlServicePreference;
        return $this;
    }

    /**
     * Gets as pickupDropoffSellerPreference
     *
     * This boolean field is returned if the <b>ShowPickupDropoffPreferences</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has enabled the Click and Collect feature at the account level. All of the seller's new listings will by default be eligible to be evaluated for the Click and Collect feature. With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are notified by eBay once their items are available. The Click and Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers to set the Click and Collect preference at the listing level.
     *  </span>
     *
     * @return bool
     */
    public function getPickupDropoffSellerPreference()
    {
        return $this->pickupDropoffSellerPreference;
    }

    /**
     * Sets a new pickupDropoffSellerPreference
     *
     * This boolean field is returned if the <b>ShowPickupDropoffPreferences</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has enabled the Click and Collect feature at the account level. All of the seller's new listings will by default be eligible to be evaluated for the Click and Collect feature. With the Click and Collect feature, a buyer can purchase certain items on eBay and collect them at a local store. Buyers are notified by eBay once their items are available. The Click and Collect feature is only available to large merchants on the eBay UK (site ID 3), eBay Australia (Site ID 15), and eBay Germany (Site ID 77) sites.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The Click and Collect program no longer allows sellers to set the Click and Collect preference at the listing level.
     *  </span>
     *
     * @param bool $pickupDropoffSellerPreference
     * @return self
     */
    public function setPickupDropoffSellerPreference($pickupDropoffSellerPreference)
    {
        $this->pickupDropoffSellerPreference = $pickupDropoffSellerPreference;
        return $this;
    }

    /**
     * Gets as outOfStockControlPreference
     *
     * This boolean field is returned if the <b>ShowOutOfStockControlPreference</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has set
     *  <a href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     *
     * @return bool
     */
    public function getOutOfStockControlPreference()
    {
        return $this->outOfStockControlPreference;
    }

    /**
     * Sets a new outOfStockControlPreference
     *
     * This boolean field is returned if the <b>ShowOutOfStockControlPreference</b> field is included and set to <code>true</code> in the request. This field will be returned as <code>true</code> if the seller has set
     *  <a href="SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     *
     * @param bool $outOfStockControlPreference
     * @return self
     */
    public function setOutOfStockControlPreference($outOfStockControlPreference)
    {
        $this->outOfStockControlPreference = $outOfStockControlPreference;
        return $this;
    }

    /**
     * Adds as eBayPLUSPreference
     *
     * Contains information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to offer the program on a per-listing basis.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EBayPLUSPreferenceType $eBayPLUSPreference
     */
    public function addToEBayPLUSPreference(\Nogrod\eBaySDK\Trading\EBayPLUSPreferenceType $eBayPLUSPreference)
    {
        $this->eBayPLUSPreference[] = $eBayPLUSPreference;
        return $this;
    }

    /**
     * isset eBayPLUSPreference
     *
     * Contains information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to offer the program on a per-listing basis.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEBayPLUSPreference($index)
    {
        return isset($this->eBayPLUSPreference[$index]);
    }

    /**
     * unset eBayPLUSPreference
     *
     * Contains information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to offer the program on a per-listing basis.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEBayPLUSPreference($index)
    {
        unset($this->eBayPLUSPreference[$index]);
    }

    /**
     * Gets as eBayPLUSPreference
     *
     * Contains information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to offer the program on a per-listing basis.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\EBayPLUSPreferenceType[]
     */
    public function getEBayPLUSPreference()
    {
        return $this->eBayPLUSPreference;
    }

    /**
     * Sets a new eBayPLUSPreference
     *
     * Contains information about each country where the seller is eligible to offer eBay Plus on listings (one <strong>eBayPLUSPreference</strong> container per country), as well as the seller's opt-in status and listing preference for each country.
     *  <br/><br/>
     *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to offer the program on a per-listing basis.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\EBayPLUSPreferenceType[] $eBayPLUSPreference
     * @return self
     */
    public function setEBayPLUSPreference(array $eBayPLUSPreference)
    {
        $this->eBayPLUSPreference = $eBayPLUSPreference;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getBidderNoticePreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidderNoticePreferences", $value);
        }
        $value = $this->getCombinedPaymentPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedPaymentPreferences", $value);
        }
        $value = $this->getCrossPromotionPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossPromotionPreferences", $value);
        }
        $value = $this->getSellerPaymentPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerPaymentPreferences", $value);
        }
        $value = $this->getSellerFavoriteItemPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerFavoriteItemPreferences", $value);
        }
        $value = $this->getEndOfAuctionEmailPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndOfAuctionEmailPreferences", $value);
        }
        $value = $this->getEmailShipmentTrackingNumberPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EmailShipmentTrackingNumberPreference", $value);
        }
        $value = $this->getRequiredShipPhoneNumberPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RequiredShipPhoneNumberPreference", $value);
        }
        $value = $this->getProStoresPreference();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProStoresPreference", $value);
        }
        $value = $this->getUnpaidItemAssistancePreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnpaidItemAssistancePreferences", $value);
        }
        $value = $this->getSellerExcludeShipToLocationPreferences();
        if (null !== $value && !empty($this->getSellerExcludeShipToLocationPreferences())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerExcludeShipToLocationPreferences", array_map(function ($v) {return ["ExcludeShipToLocation" => $v];}, $value));
        }
        $value = $this->getPurchaseReminderEmailPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PurchaseReminderEmailPreferences", $value);
        }
        $value = $this->getSellerThirdPartyCheckoutDisabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerThirdPartyCheckoutDisabled", $value);
        }
        $value = $this->getSellerProfilePreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerProfilePreferences", $value);
        }
        $value = $this->getSellerReturnPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerReturnPreferences", $value);
        }
        $value = $this->getOfferGlobalShippingProgramPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OfferGlobalShippingProgramPreference", $value);
        }
        $value = $this->getDispatchCutoffTimePreference();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DispatchCutoffTimePreference", $value);
        }
        $value = $this->getGlobalShippingProgramListingPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GlobalShippingProgramListingPreference", $value);
        }
        $value = $this->getOverrideGSPServiceWithIntlServicePreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OverrideGSPServiceWithIntlServicePreference", $value);
        }
        $value = $this->getPickupDropoffSellerPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupDropoffSellerPreference", $value);
        }
        $value = $this->getOutOfStockControlPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OutOfStockControlPreference", $value);
        }
        $value = $this->getEBayPLUSPreference();
        if (null !== $value && !empty($this->getEBayPLUSPreference())) {
            $writer->write(array_map(function ($v) {return ["eBayPLUSPreference" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidderNoticePreferences');
        if (null !== $value) {
            $this->setBidderNoticePreferences(\Nogrod\eBaySDK\Trading\BidderNoticePreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedPaymentPreferences');
        if (null !== $value) {
            $this->setCombinedPaymentPreferences(\Nogrod\eBaySDK\Trading\CombinedPaymentPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossPromotionPreferences');
        if (null !== $value) {
            $this->setCrossPromotionPreferences(\Nogrod\eBaySDK\Trading\CrossPromotionPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerPaymentPreferences');
        if (null !== $value) {
            $this->setSellerPaymentPreferences(\Nogrod\eBaySDK\Trading\SellerPaymentPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerFavoriteItemPreferences');
        if (null !== $value) {
            $this->setSellerFavoriteItemPreferences(\Nogrod\eBaySDK\Trading\SellerFavoriteItemPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndOfAuctionEmailPreferences');
        if (null !== $value) {
            $this->setEndOfAuctionEmailPreferences(\Nogrod\eBaySDK\Trading\EndOfAuctionEmailPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailShipmentTrackingNumberPreference');
        if (null !== $value) {
            $this->setEmailShipmentTrackingNumberPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RequiredShipPhoneNumberPreference');
        if (null !== $value) {
            $this->setRequiredShipPhoneNumberPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProStoresPreference');
        if (null !== $value) {
            $this->setProStoresPreference(\Nogrod\eBaySDK\Trading\ProStoresCheckoutPreferenceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnpaidItemAssistancePreferences');
        if (null !== $value) {
            $this->setUnpaidItemAssistancePreferences(\Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerExcludeShipToLocationPreferences', true);
        if (null !== $value && !empty($value)) {
            $this->setSellerExcludeShipToLocationPreferences($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PurchaseReminderEmailPreferences');
        if (null !== $value) {
            $this->setPurchaseReminderEmailPreferences(\Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerThirdPartyCheckoutDisabled');
        if (null !== $value) {
            $this->setSellerThirdPartyCheckoutDisabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerProfilePreferences');
        if (null !== $value) {
            $this->setSellerProfilePreferences(\Nogrod\eBaySDK\Trading\SellerProfilePreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerReturnPreferences');
        if (null !== $value) {
            $this->setSellerReturnPreferences(\Nogrod\eBaySDK\Trading\SellerReturnPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OfferGlobalShippingProgramPreference');
        if (null !== $value) {
            $this->setOfferGlobalShippingProgramPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DispatchCutoffTimePreference');
        if (null !== $value) {
            $this->setDispatchCutoffTimePreference(\Nogrod\eBaySDK\Trading\DispatchCutoffTimePreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalShippingProgramListingPreference');
        if (null !== $value) {
            $this->setGlobalShippingProgramListingPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OverrideGSPServiceWithIntlServicePreference');
        if (null !== $value) {
            $this->setOverrideGSPServiceWithIntlServicePreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupDropoffSellerPreference');
        if (null !== $value) {
            $this->setPickupDropoffSellerPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OutOfStockControlPreference');
        if (null !== $value) {
            $this->setOutOfStockControlPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPLUSPreference', true);
        if (null !== $value && !empty($value)) {
            $this->setEBayPLUSPreference(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\EBayPLUSPreferenceType::fromKeyValue($v);}, $value));
        }
    }
}
