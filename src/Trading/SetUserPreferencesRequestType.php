<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetUserPreferencesRequestType
 *
 * This call allows an eBay user to set/modify numerous seller account preferences.
 * XSD Type: SetUserPreferencesRequestType
 */
class SetUserPreferencesRequestType extends AbstractRequestType
{

    /**
     * This container is included if the seller wishes to receive contact information for unsuccessful bidders. This preference is only applicable for auction listings.
     *
     * @var \Nogrod\eBaySDK\Trading\BidderNoticePreferencesType $bidderNoticePreferences
     */
    private $bidderNoticePreferences = null;

    /**
     * This container is included if the seller wishes to set the preference for allowing Combined Invoice orders for cases where the buyer has multiple unpaid order line items from the same seller.
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
     * This container is included if the seller wishes to set various payment preferences. One or more preferences may be set or modified under this container. Payment preferences specified in a <b>SetUserPreferences</b> call override the settings in My eBay payment preferences.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerPaymentPreferencesType $sellerPaymentPreferences
     */
    private $sellerPaymentPreferences = null;

    /**
     * This container is included if the seller wishes to set preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. One or more preferences may be set or modified under this container.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerFavoriteItemPreferencesType $sellerFavoriteItemPreferences
     */
    private $sellerFavoriteItemPreferences = null;

    /**
     * This container is included if the seller wishes to set preferences for the end-of-auction email sent to the winning bidder. These preferences allow the seller to customize the Email that is sent to buyer at the end of the auction. One or more preferences may be set or modified under this container. These preferences are only applicable for auction listings.
     *
     * @var \Nogrod\eBaySDK\Trading\EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences
     */
    private $endOfAuctionEmailPreferences = null;

    /**
     * This field is included and set to <code>true</code> if the seller wishes to email the shipment's tracking number to the buyer.
     *
     * @var bool $emailShipmentTrackingNumberPreference
     */
    private $emailShipmentTrackingNumberPreference = null;

    /**
     * This field is included and set to <code>true</code> if the seller wishes to require the buyer to provide a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number.
     *
     * @var bool $requiredShipPhoneNumberPreference
     */
    private $requiredShipPhoneNumberPreference = null;

    /**
     * This container is included if the seller wishes to set Unpaid Item Assistant preferences. The Unpaid Item Assistant automatically opens an Unpaid Item case on the behalf of the seller if the buyer has not paid for the order after a specified number of days. One or more preferences may be set or modified under this container.
     *
     * @var \Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType $unpaidItemAssistancePreferences
     */
    private $unpaidItemAssistancePreferences = null;

    /**
     * This container is included if the seller wishes to set the preference for sending a purchase reminder email to buyers.
     *
     * @var \Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType $purchaseReminderEmailPreferences
     */
    private $purchaseReminderEmailPreferences = null;

    /**
     * This field is no longer applicable, as third-party checkout on eBay is no longer possible.
     *
     * @var bool $sellerThirdPartyCheckoutDisabled
     */
    private $sellerThirdPartyCheckoutDisabled = null;

    /**
     * This container is included if the seller wishes to set/modify the order cut off time for same-day shipping. If the seller specifies a value of <code>0</code> in <strong>Item.DispatchTimeMax</strong> to offer same day handling when listing an item, the seller's shipping time commitment depends on the order cut off time set for the listing site, as indicated by the <strong>DispatchCutoffTimePreference.CutoffTime</strong> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cut off times for each business day, this container cannot be used to change the order cut off for one or more business days. If this container is used, it will have no effect on any of the order cut off times configured for the seller. In order for the seller to change and/or confirm the actual order cutoff times for same-day handling, that seller should go to Shipping Preferences in My eBay.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference
     */
    private $dispatchCutoffTimePreference = null;

    /**
     * If this flag is included and set to <code>true</code>, the seller's new listings will enable the Global Shipping Program by default.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is ignored for sellers who are not opted in to the Global Shipping Program (when GetUserPreferences returns <strong>OfferGlobalShippingProgramPreference</strong> with a value of <code>false</code>).
     *  </span>
     *
     * @var bool $globalShippingProgramListingPreference
     */
    private $globalShippingProgramListingPreference = null;

    /**
     * If this flag is included and set to <code>true</code>, and the seller specifies an international shipping service to a particular country for a given listing, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program. The Global Shipping Program will still be the listing's default option for shipping to any Global Shipping-eligible country for which the seller does <em>not</em> specify an international shipping service.
     *  <br/><br/>
     *  If this flag is set to <code>false</code>, the Global Shipping Program will be each Global Shipping-eligible listing's default option for shipping to any Global Shipping-eligible country, regardless of any international shipping service that the seller specifies for the listing.
     *
     * @var bool $overrideGSPserviceWithIntlService
     */
    private $overrideGSPserviceWithIntlService = null;

    /**
     * If this flag is included and set to <code>true</code>, it enables the Out-of-Stock feature. A seller would use this feature to keep Fixed-Price GTC (Good 'Til Canceled) listings alive even when the "quantity available" value goes to 0 (zero). This is useful when waiting for additional stock and eliminates the need to end the listing and then recreating it when stock arrives. <br/><br/>
     *  While the "quantity available" value is 0, the listing would be hidden from eBay search and if that item was specifically searched for with <b>GetItem</b> (or related call), the element <b>HideFromSearch</b> would be returned as 'true' and <b>ReasonHideFromSearch</b> would be returned as 'OutOfStock'.
     *  <br/><br/>
     *  When stock is available, the seller can use the <b>Revise</b> calls to update the inventory of the item (through the <b>Item.Quantity</b> or <b>Item.Variations.Variation.Quantity</b> fields) and the listing would appear again.
     *  <br/><br/>
     *  You can return the value of this flag using the <a href="GetUserPreferences.html#Request.ShowOutOfStockControlPreference">GetUserPreferences</a> call and setting the <b>ShowOutOfStockControlPreference</b> field to 'true'. <br/><br/>
     *  <span class="tablenote"><b>IMPORTANT: </b> When a listing using the Out-of-Stock feature has zero quantity, the seller has 90 days to add inventory without incurring a listing fee. Fees are changed at the end of each the billing cycle but are then refunded if the item is out-of-stock for an entire billing period. See <a href="../../../../guides/features-guide/default.html#development/Listings-UseOutOfStock.html#FeesForaListingWithZeroQuantity">Fees For a Listing With Zero Quantity</a> for details. </span>
     *
     * @var bool $outOfStockControlPreference
     */
    private $outOfStockControlPreference = null;

    /**
     * Gets as bidderNoticePreferences
     *
     * This container is included if the seller wishes to receive contact information for unsuccessful bidders. This preference is only applicable for auction listings.
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
     * This container is included if the seller wishes to receive contact information for unsuccessful bidders. This preference is only applicable for auction listings.
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
     * This container is included if the seller wishes to set the preference for allowing Combined Invoice orders for cases where the buyer has multiple unpaid order line items from the same seller.
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
     * This container is included if the seller wishes to set the preference for allowing Combined Invoice orders for cases where the buyer has multiple unpaid order line items from the same seller.
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
     * This container is included if the seller wishes to set various payment preferences. One or more preferences may be set or modified under this container. Payment preferences specified in a <b>SetUserPreferences</b> call override the settings in My eBay payment preferences.
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
     * This container is included if the seller wishes to set various payment preferences. One or more preferences may be set or modified under this container. Payment preferences specified in a <b>SetUserPreferences</b> call override the settings in My eBay payment preferences.
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
     * This container is included if the seller wishes to set preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. One or more preferences may be set or modified under this container.
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
     * This container is included if the seller wishes to set preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. One or more preferences may be set or modified under this container.
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
     * This container is included if the seller wishes to set preferences for the end-of-auction email sent to the winning bidder. These preferences allow the seller to customize the Email that is sent to buyer at the end of the auction. One or more preferences may be set or modified under this container. These preferences are only applicable for auction listings.
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
     * This container is included if the seller wishes to set preferences for the end-of-auction email sent to the winning bidder. These preferences allow the seller to customize the Email that is sent to buyer at the end of the auction. One or more preferences may be set or modified under this container. These preferences are only applicable for auction listings.
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
     * This field is included and set to <code>true</code> if the seller wishes to email the shipment's tracking number to the buyer.
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
     * This field is included and set to <code>true</code> if the seller wishes to email the shipment's tracking number to the buyer.
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
     * This field is included and set to <code>true</code> if the seller wishes to require the buyer to provide a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number.
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
     * This field is included and set to <code>true</code> if the seller wishes to require the buyer to provide a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number.
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
     * Gets as unpaidItemAssistancePreferences
     *
     * This container is included if the seller wishes to set Unpaid Item Assistant preferences. The Unpaid Item Assistant automatically opens an Unpaid Item case on the behalf of the seller if the buyer has not paid for the order after a specified number of days. One or more preferences may be set or modified under this container.
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
     * This container is included if the seller wishes to set Unpaid Item Assistant preferences. The Unpaid Item Assistant automatically opens an Unpaid Item case on the behalf of the seller if the buyer has not paid for the order after a specified number of days. One or more preferences may be set or modified under this container.
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
     * Gets as purchaseReminderEmailPreferences
     *
     * This container is included if the seller wishes to set the preference for sending a purchase reminder email to buyers.
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
     * This container is included if the seller wishes to set the preference for sending a purchase reminder email to buyers.
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
     * This field is no longer applicable, as third-party checkout on eBay is no longer possible.
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
     * This field is no longer applicable, as third-party checkout on eBay is no longer possible.
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
     * Gets as dispatchCutoffTimePreference
     *
     * This container is included if the seller wishes to set/modify the order cut off time for same-day shipping. If the seller specifies a value of <code>0</code> in <strong>Item.DispatchTimeMax</strong> to offer same day handling when listing an item, the seller's shipping time commitment depends on the order cut off time set for the listing site, as indicated by the <strong>DispatchCutoffTimePreference.CutoffTime</strong> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cut off times for each business day, this container cannot be used to change the order cut off for one or more business days. If this container is used, it will have no effect on any of the order cut off times configured for the seller. In order for the seller to change and/or confirm the actual order cutoff times for same-day handling, that seller should go to Shipping Preferences in My eBay.</span>
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
     * This container is included if the seller wishes to set/modify the order cut off time for same-day shipping. If the seller specifies a value of <code>0</code> in <strong>Item.DispatchTimeMax</strong> to offer same day handling when listing an item, the seller's shipping time commitment depends on the order cut off time set for the listing site, as indicated by the <strong>DispatchCutoffTimePreference.CutoffTime</strong> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers opted in to the feature that supports different order cut off times for each business day, this container cannot be used to change the order cut off for one or more business days. If this container is used, it will have no effect on any of the order cut off times configured for the seller. In order for the seller to change and/or confirm the actual order cutoff times for same-day handling, that seller should go to Shipping Preferences in My eBay.</span>
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
     * If this flag is included and set to <code>true</code>, the seller's new listings will enable the Global Shipping Program by default.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is ignored for sellers who are not opted in to the Global Shipping Program (when GetUserPreferences returns <strong>OfferGlobalShippingProgramPreference</strong> with a value of <code>false</code>).
     *  </span>
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
     * If this flag is included and set to <code>true</code>, the seller's new listings will enable the Global Shipping Program by default.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is ignored for sellers who are not opted in to the Global Shipping Program (when GetUserPreferences returns <strong>OfferGlobalShippingProgramPreference</strong> with a value of <code>false</code>).
     *  </span>
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
     * Gets as overrideGSPserviceWithIntlService
     *
     * If this flag is included and set to <code>true</code>, and the seller specifies an international shipping service to a particular country for a given listing, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program. The Global Shipping Program will still be the listing's default option for shipping to any Global Shipping-eligible country for which the seller does <em>not</em> specify an international shipping service.
     *  <br/><br/>
     *  If this flag is set to <code>false</code>, the Global Shipping Program will be each Global Shipping-eligible listing's default option for shipping to any Global Shipping-eligible country, regardless of any international shipping service that the seller specifies for the listing.
     *
     * @return bool
     */
    public function getOverrideGSPserviceWithIntlService()
    {
        return $this->overrideGSPserviceWithIntlService;
    }

    /**
     * Sets a new overrideGSPserviceWithIntlService
     *
     * If this flag is included and set to <code>true</code>, and the seller specifies an international shipping service to a particular country for a given listing, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program. The Global Shipping Program will still be the listing's default option for shipping to any Global Shipping-eligible country for which the seller does <em>not</em> specify an international shipping service.
     *  <br/><br/>
     *  If this flag is set to <code>false</code>, the Global Shipping Program will be each Global Shipping-eligible listing's default option for shipping to any Global Shipping-eligible country, regardless of any international shipping service that the seller specifies for the listing.
     *
     * @param bool $overrideGSPserviceWithIntlService
     * @return self
     */
    public function setOverrideGSPserviceWithIntlService($overrideGSPserviceWithIntlService)
    {
        $this->overrideGSPserviceWithIntlService = $overrideGSPserviceWithIntlService;
        return $this;
    }

    /**
     * Gets as outOfStockControlPreference
     *
     * If this flag is included and set to <code>true</code>, it enables the Out-of-Stock feature. A seller would use this feature to keep Fixed-Price GTC (Good 'Til Canceled) listings alive even when the "quantity available" value goes to 0 (zero). This is useful when waiting for additional stock and eliminates the need to end the listing and then recreating it when stock arrives. <br/><br/>
     *  While the "quantity available" value is 0, the listing would be hidden from eBay search and if that item was specifically searched for with <b>GetItem</b> (or related call), the element <b>HideFromSearch</b> would be returned as 'true' and <b>ReasonHideFromSearch</b> would be returned as 'OutOfStock'.
     *  <br/><br/>
     *  When stock is available, the seller can use the <b>Revise</b> calls to update the inventory of the item (through the <b>Item.Quantity</b> or <b>Item.Variations.Variation.Quantity</b> fields) and the listing would appear again.
     *  <br/><br/>
     *  You can return the value of this flag using the <a href="GetUserPreferences.html#Request.ShowOutOfStockControlPreference">GetUserPreferences</a> call and setting the <b>ShowOutOfStockControlPreference</b> field to 'true'. <br/><br/>
     *  <span class="tablenote"><b>IMPORTANT: </b> When a listing using the Out-of-Stock feature has zero quantity, the seller has 90 days to add inventory without incurring a listing fee. Fees are changed at the end of each the billing cycle but are then refunded if the item is out-of-stock for an entire billing period. See <a href="../../../../guides/features-guide/default.html#development/Listings-UseOutOfStock.html#FeesForaListingWithZeroQuantity">Fees For a Listing With Zero Quantity</a> for details. </span>
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
     * If this flag is included and set to <code>true</code>, it enables the Out-of-Stock feature. A seller would use this feature to keep Fixed-Price GTC (Good 'Til Canceled) listings alive even when the "quantity available" value goes to 0 (zero). This is useful when waiting for additional stock and eliminates the need to end the listing and then recreating it when stock arrives. <br/><br/>
     *  While the "quantity available" value is 0, the listing would be hidden from eBay search and if that item was specifically searched for with <b>GetItem</b> (or related call), the element <b>HideFromSearch</b> would be returned as 'true' and <b>ReasonHideFromSearch</b> would be returned as 'OutOfStock'.
     *  <br/><br/>
     *  When stock is available, the seller can use the <b>Revise</b> calls to update the inventory of the item (through the <b>Item.Quantity</b> or <b>Item.Variations.Variation.Quantity</b> fields) and the listing would appear again.
     *  <br/><br/>
     *  You can return the value of this flag using the <a href="GetUserPreferences.html#Request.ShowOutOfStockControlPreference">GetUserPreferences</a> call and setting the <b>ShowOutOfStockControlPreference</b> field to 'true'. <br/><br/>
     *  <span class="tablenote"><b>IMPORTANT: </b> When a listing using the Out-of-Stock feature has zero quantity, the seller has 90 days to add inventory without incurring a listing fee. Fees are changed at the end of each the billing cycle but are then refunded if the item is out-of-stock for an entire billing period. See <a href="../../../../guides/features-guide/default.html#development/Listings-UseOutOfStock.html#FeesForaListingWithZeroQuantity">Fees For a Listing With Zero Quantity</a> for details. </span>
     *
     * @param bool $outOfStockControlPreference
     * @return self
     */
    public function setOutOfStockControlPreference($outOfStockControlPreference)
    {
        $this->outOfStockControlPreference = $outOfStockControlPreference;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = $this->getUnpaidItemAssistancePreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnpaidItemAssistancePreferences", $value);
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
        $value = $this->getDispatchCutoffTimePreference();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DispatchCutoffTimePreference", $value);
        }
        $value = $this->getGlobalShippingProgramListingPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GlobalShippingProgramListingPreference", $value);
        }
        $value = $this->getOverrideGSPserviceWithIntlService();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OverrideGSPserviceWithIntlService", $value);
        }
        $value = $this->getOutOfStockControlPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OutOfStockControlPreference", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnpaidItemAssistancePreferences');
        if (null !== $value) {
            $this->setUnpaidItemAssistancePreferences(\Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PurchaseReminderEmailPreferences');
        if (null !== $value) {
            $this->setPurchaseReminderEmailPreferences(\Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerThirdPartyCheckoutDisabled');
        if (null !== $value) {
            $this->setSellerThirdPartyCheckoutDisabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DispatchCutoffTimePreference');
        if (null !== $value) {
            $this->setDispatchCutoffTimePreference(\Nogrod\eBaySDK\Trading\DispatchCutoffTimePreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalShippingProgramListingPreference');
        if (null !== $value) {
            $this->setGlobalShippingProgramListingPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OverrideGSPserviceWithIntlService');
        if (null !== $value) {
            $this->setOverrideGSPserviceWithIntlService($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OutOfStockControlPreference');
        if (null !== $value) {
            $this->setOutOfStockControlPreference($value);
        }
    }
}
