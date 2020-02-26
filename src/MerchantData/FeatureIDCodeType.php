<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeatureIDCodeType
 *
 * Enumerated type that lists all possible values that can be passed into the <b>FeatureID</b> field in a <b>GetCategoryFeatures</b> call. The <b>FeatureID</b> field is to used to check if specific listing features are enabled at the site or category level. Multiple <b>FeatureID</b> fields can be used in the request. If no <b>FeatureID</b> fields are used, the call retrieves data for all features defined within this enumerated type.
 * XSD Type: FeatureIDCodeType
 */
class FeatureIDCodeType
{

    /**
     * Constant for 'ListingDurations' value.
     *
     * If this value is specified, supported site-default and category-specific listing
     * durations values for each listing type are returned in the
     * <b>SiteDefaults.ListingDuration</b> and <b>Category.ListingDuration</b> fields
     * of the <b>GetCategoryFeatures</b> response.
     */
    public const VAL_LISTING_DURATIONS = 'ListingDurations';

    /**
     * Constant for 'BestOfferEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.BestOfferEnabled</b> and
     * <b>Category.BestOfferEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site supports the Best Offer feature, and which categories allow the Best
     * Offer feature.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature can be set for auction listings on the US, Canada, UK,
     * Germany, Australia, France, Italy, and Spain marketplaces, but keep in mind that
     * Best Offer and Buy It Now cannot be used simultaneously in a listing. Also, once
     * a qualifying bid is made on an auction listing, the Best Offer feature is
     * disabled, and any pending offer or counteroffers are no longer valid.
     *  </span>
     */
    public const VAL_BEST_OFFER_ENABLED = 'BestOfferEnabled';

    /**
     * Constant for 'DutchBINEnabled' value.
     *
     * This value is <b>deprecated</b>, as Dutch-style auctions are no longer available
     * on any eBay sites.
     */
    public const VAL_DUTCH_BINENABLED = 'DutchBINEnabled';

    /**
     * Constant for 'ShippingTermsRequired' value.
     *
     * If this value is specified, the <b>SiteDefaults.ShippingTermsRequired</b> and
     * <b>Category.ShippingTermsRequired</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site, and individual categories on that site, require at least one domestic
     * shipping service option (with cost) to be specified before an item is listed.
     */
    public const VAL_SHIPPING_TERMS_REQUIRED = 'ShippingTermsRequired';

    /**
     * Constant for 'UserConsentRequired' value.
     *
     * If this value is specified, the <b>SiteDefaults.UserConsentRequired</b> boolean
     * field in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * the specified eBay site requires a prospective bidder of an auction item to read
     * and agree to the terms in eBay's privacy policy before bidding on the item.
     */
    public const VAL_USER_CONSENT_REQUIRED = 'UserConsentRequired';

    /**
     * Constant for 'HomePageFeaturedEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.HomePageFeaturedEnabled</b>
     * boolean field in the <b>GetCategoryFeatures</b> response will indicate whether
     * or not the specified eBay site supports the featuring of items within a special
     * area of eBay's home page. This is a listing enhancement that requires a fee, and
     * support for this feature varies by site.
     */
    public const VAL_HOME_PAGE_FEATURED_ENABLED = 'HomePageFeaturedEnabled';

    /**
     * Constant for 'AdFormatEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.AdFormatEnabled</b> and
     * <b>Category.AdFormatEnabled</b> fields in the <b>GetCategoryFeatures</b>
     * response will indicate whether or not the specified eBay site and individual
     * categories support Classified Ad listings.
     */
    public const VAL_AD_FORMAT_ENABLED = 'AdFormatEnabled';

    /**
     * Constant for 'DigitalDeliveryEnabled' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_DIGITAL_DELIVERY_ENABLED = 'DigitalDeliveryEnabled';

    /**
     * Constant for 'BestOfferCounterEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.BestOfferCounterEnabled</b> and
     * <b>Category.BestOfferCounterEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site supports the Best Offer counter offers, and which categories allow the
     * Best Offer counter offers.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature can be set for auction listings on the US, Canada, UK,
     * Germany, Australia, France, Italy, and Spain marketplaces, but keep in mind that
     * Best Offer and Buy It Now cannot be used simultaneously in a listing. Also, once
     * a qualifying bid is made on an auction listing, the Best Offer feature is
     * disabled, and any pending offer or counteroffers are no longer valid.
     *  </span>
     */
    public const VAL_BEST_OFFER_COUNTER_ENABLED = 'BestOfferCounterEnabled';

    /**
     * Constant for 'BestOfferAutoDeclineEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.BestOfferAutoDeclineEnabled</b>
     * and <b>Category.BestOfferAutoDeclineEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto decline feature.
     * With the Best Offer auto decline feature, the seller sets a price threshold, and
     * all Best Offers and counter offers below this price value are automatically
     * declined without any seller action.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature can be set for auction listings on the US, Canada, UK,
     * Germany, Australia, France, Italy, and Spain marketplaces, but keep in mind that
     * Best Offer and Buy It Now cannot be used simultaneously in a listing. Also, once
     * a qualifying bid is made on an auction listing, the Best Offer feature is
     * disabled, and any pending offer or counteroffers are no longer valid.
     *  </span>
     */
    public const VAL_BEST_OFFER_AUTO_DECLINE_ENABLED = 'BestOfferAutoDeclineEnabled';

    /**
     * Constant for 'ProPack' value.
     *
     * If this value is specified, the <b>SiteDefaults.ProPackEnabled</b> and
     * <b>Category.ProPackEnabled</b> boolean fields in the <b>GetCategoryFeatures</b>
     * response will indicate whether or not the specified eBay site and individual
     * categories support the Pro Pack listing enhancement bundle.
     */
    public const VAL_PRO_PACK = 'ProPack';

    /**
     * Constant for 'BasicUpgradePack' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_BASIC_UPGRADE_PACK = 'BasicUpgradePack';

    /**
     * Constant for 'ValuePack' value.
     *
     * If this value is specified, the <b>SiteDefaults.ValuePackEnabled</b> and
     * <b>Category.ValuePackEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Value Pack listing enhancement
     * bundle. The Value Pack bundle includes the Gallery Plus feature, a listing
     * subtitle, and use of a Listing Designer template.
     */
    public const VAL_VALUE_PACK = 'ValuePack';

    /**
     * Constant for 'ProPackPlus' value.
     *
     * If this value is specified, the <b>SiteDefaults.ProPackPlusEnabled</b> and
     * <b>Category.ProPackPlusEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Pro Pack Plus listing
     * enhancement bundle. The Pro Pack Plus bundle includes the Bold Title, Border,
     * Highlight, Featured, and Gallery features for a discounted price.
     */
    public const VAL_PRO_PACK_PLUS = 'ProPackPlus';

    /**
     * Constant for 'LocalMarketSpecialitySubscription' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketSpecialitySubscription</b> boolean field in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site supports Local Market listings for sellers with a specialty
     * subscription to Local Market for Vehicles.
     */
    public const VAL_LOCAL_MARKET_SPECIALITY_SUBSCRIPTION = 'LocalMarketSpecialitySubscription';

    /**
     * Constant for 'LocalMarketRegularSubscription' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketRegularSubscription</b> boolean field in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site supports Local Market listings for sellers with a regular subscription
     * to Local Market for Vehicles.
     */
    public const VAL_LOCAL_MARKET_REGULAR_SUBSCRIPTION = 'LocalMarketRegularSubscription';

    /**
     * Constant for 'LocalMarketPremiumSubscription' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketPremiumSubscription</b> boolean field in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site supports Local Market listings for sellers with a premium subscription
     * to Local Market for Vehicles.
     */
    public const VAL_LOCAL_MARKET_PREMIUM_SUBSCRIPTION = 'LocalMarketPremiumSubscription';

    /**
     * Constant for 'LocalMarketNonSubscription' value.
     *
     * If this value is specified, the <b>SiteDefaults.LocalMarketNonSubscription</b>
     * boolean field in the <b>GetCategoryFeatures</b> response will indicate whether
     * or not the specified eBay site supports Local Market listings for sellers
     * without a subscription to Local Market for Vehicles.
     */
    public const VAL_LOCAL_MARKET_NON_SUBSCRIPTION = 'LocalMarketNonSubscription';

    /**
     * Constant for 'ExpressEnabled' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_EXPRESS_ENABLED = 'ExpressEnabled';

    /**
     * Constant for 'ExpressPicturesRequired' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_EXPRESS_PICTURES_REQUIRED = 'ExpressPicturesRequired';

    /**
     * Constant for 'ExpressConditionRequired' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_EXPRESS_CONDITION_REQUIRED = 'ExpressConditionRequired';

    /**
     * Constant for 'SellerContactDetailsEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.SellerContactDetailsEnabled</b>
     * and <b>Category.SellerContactDetailsEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow the seller to provide contact
     * information within a Classified Ad listing. This feature is only applicable to
     * Classified Ad listings.
     */
    public const VAL_SELLER_CONTACT_DETAILS_ENABLED = 'SellerContactDetailsEnabled';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'MinimumReservePrice' value.
     *
     * If this value is specified, the <b>SiteDefaults.MinimumReservePrice</b> and
     * <b>Category.MinimumReservePrice</b> fields in the <b>GetCategoryFeatures</b>
     * response will indicate whether or not the specified eBay site and individual
     * categories require a minimum Reserve Price for auction listings. This feature is
     * only applicable to Auction listings and only if the seller decides to set a
     * Reserve Price for the auction.
     */
    public const VAL_MINIMUM_RESERVE_PRICE = 'MinimumReservePrice';

    /**
     * Constant for 'TransactionConfirmationRequestEnabled' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_TRANSACTION_CONFIRMATION_REQUEST_ENABLED = 'TransactionConfirmationRequestEnabled';

    /**
     * Constant for 'StoreInventoryEnabled' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_STORE_INVENTORY_ENABLED = 'StoreInventoryEnabled';

    /**
     * Constant for 'LocalListingDistances' value.
     *
     * If this value is specified, the integer values in the
     * <b>LocalListingDistancesRegular</b>, <b>LocalListingDistancesSpecialty</b>, and
     * <b>LocalListingDistancesNonSubscription</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate the radius (in miles) of the
     * selling area for Local Market Vehicle listings, based on Local Market
     * subscription status of the motor vehicle seller (specialty subscription, regular
     * subscription, or no subscription).
     */
    public const VAL_LOCAL_LISTING_DISTANCES = 'LocalListingDistances';

    /**
     * Constant for 'SkypeMeTransactionalEnabled' value.
     *
     * This enumeration value is no longer applicable, as Skype communication between
     * eBay members is no longer supported.
     */
    public const VAL_SKYPE_ME_TRANSACTIONAL_ENABLED = 'SkypeMeTransactionalEnabled';

    /**
     * Constant for 'SkypeMeNonTransactionalEnabled' value.
     *
     * This enumeration value is no longer applicable, as Skype communication between
     * eBay members is no longer supported.
     */
    public const VAL_SKYPE_ME_NON_TRANSACTIONAL_ENABLED = 'SkypeMeNonTransactionalEnabled';

    /**
     * Constant for 'ClassifiedAdPaymentMethodEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdPaymentMethodEnabled</b> and
     * <b>Category.ClassifiedAdPaymentMethodEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not (and when)
     * accepted payment methods are displayed to buyers for the specified eBay site and
     * for individual categories. This feature is only applicable for Classified Ad
     * listings.
     */
    public const VAL_CLASSIFIED_AD_PAYMENT_METHOD_ENABLED = 'ClassifiedAdPaymentMethodEnabled';

    /**
     * Constant for 'ClassifiedAdShippingMethodEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdShippingMethodEnabled</b> and
     * <b>Category.ClassifiedAdShippingMethodEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the display of available shipping
     * methods to buyers. This feature is only applicable for Classified Ad listings.
     */
    public const VAL_CLASSIFIED_AD_SHIPPING_METHOD_ENABLED = 'ClassifiedAdShippingMethodEnabled';

    /**
     * Constant for 'ClassifiedAdBestOfferEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.ClassifiedAdBestOfferEnabled</b>
     * and <b>Category.ClassifiedAdBestOfferEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer feature for
     * Classified Ad listings.
     */
    public const VAL_CLASSIFIED_AD_BEST_OFFER_ENABLED = 'ClassifiedAdBestOfferEnabled';

    /**
     * Constant for 'ClassifiedAdCounterOfferEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdCounterOfferEnabled</b> and
     * <b>Category.ClassifiedAdCounterOfferEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support Best Offer counter offers for
     * Classified Ad listings. This feature is only applicable for Classified Ad
     * listings.
     */
    public const VAL_CLASSIFIED_AD_COUNTER_OFFER_ENABLED = 'ClassifiedAdCounterOfferEnabled';

    /**
     * Constant for 'ClassifiedAdAutoDeclineEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdAutoDeclineEnabled</b> and
     * <b>Category.ClassifiedAdAutoDeclineEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto decline feature
     * for Classified Ad listings. With the Best Offer auto decline feature, the seller
     * sets a price threshold, and all Best Offers and counter offers below this price
     * value are automatically declined without any seller action. This feature is only
     * applicable for Classified Ad listings.
     */
    public const VAL_CLASSIFIED_AD_AUTO_DECLINE_ENABLED = 'ClassifiedAdAutoDeclineEnabled';

    /**
     * Constant for 'ClassifiedAdContactByEmailEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdContactByEmailEnabled</b> and
     * <b>Category.ClassifiedAdContactByEmailEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow the seller to provide a contact email
     * address within a Classified Ad listing. This feature is only applicable to
     * Classified Ad listings.
     */
    public const VAL_CLASSIFIED_AD_CONTACT_BY_EMAIL_ENABLED = 'ClassifiedAdContactByEmailEnabled';

    /**
     * Constant for 'ClassifiedAdContactByPhoneEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdContactByPhoneEnabled</b> and
     * <b>Category.ClassifiedAdContactByPhoneEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow the seller to provide a contact phone
     * number within a Classified Ad listing. This feature is only applicable to
     * Classified Ad listings.
     */
    public const VAL_CLASSIFIED_AD_CONTACT_BY_PHONE_ENABLED = 'ClassifiedAdContactByPhoneEnabled';

    /**
     * Constant for 'SafePaymentRequired' value.
     *
     * If this value is specified, the <b>SiteDefaults.SafePaymentRequired</b> and
     * <b>Category.SafePaymentRequired</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site, and individual categories on that site, require that the seller set
     * at least one accepted payment method in the listing that is certified by eBay to
     * be a "safe payment method".
     */
    public const VAL_SAFE_PAYMENT_REQUIRED = 'SafePaymentRequired';

    /**
     * Constant for 'MaximumBestOffersAllowed' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_MAXIMUM_BEST_OFFERS_ALLOWED = 'MaximumBestOffersAllowed';

    /**
     * Constant for 'ClassifiedAdMaximumBestOffersAllowed' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_CLASSIFIED_AD_MAXIMUM_BEST_OFFERS_ALLOWED = 'ClassifiedAdMaximumBestOffersAllowed';

    /**
     * Constant for 'ClassifiedAdContactByEmailAvailable' value.
     *
     * This value is <b>deprecated</b> and should no longer be used. To verify if the
     * seller's contact information can be shared with prospective buyers in the
     * listing, use the <b>SellerContactDetailsEnabled</b> enumeration value instead.
     */
    public const VAL_CLASSIFIED_AD_CONTACT_BY_EMAIL_AVAILABLE = 'ClassifiedAdContactByEmailAvailable';

    /**
     * Constant for 'ClassifiedAdPayPerLeadEnabled' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_CLASSIFIED_AD_PAY_PER_LEAD_ENABLED = 'ClassifiedAdPayPerLeadEnabled';

    /**
     * Constant for 'ItemSpecificsEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.ItemSpecificsEnabled</b> and
     * <b>Category.ItemSpecificsEnabled</b> fields in the <b>GetCategoryFeatures</b>
     * response will indicate if the eBay site and individual categories support the
     * use of Item Specifics in listings.
     */
    public const VAL_ITEM_SPECIFICS_ENABLED = 'ItemSpecificsEnabled';

    /**
     * Constant for 'PaisaPayFullEscrowEnabled' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This value is deprecated since it is only applicable to the eBay India site,
     * and this marketplace is no longer available.</span>
     *  If this value is specified, the <b>SiteDefaults.PaisaPayFullEscrowEnabled</b>
     * and <b>Category.PaisaPayFullEscrowEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories on that site support Paisa Pay Full Escrow
     * as an accepted payment method. This field is only relevant to listings on the
     * eBay India site, which is the only site where Paisa Pay is available.
     */
    public const VAL_PAISA_PAY_FULL_ESCROW_ENABLED = 'PaisaPayFullEscrowEnabled';

    /**
     * Constant for 'ISBNIdentifierEnabled' value.
     *
     * This value is deprecated and should no longer be used. Use <b>ISBNEnabled</b>
     * instead.
     */
    public const VAL_ISBNIDENTIFIER_ENABLED = 'ISBNIdentifierEnabled';

    /**
     * Constant for 'UPCIdentifierEnabled' value.
     *
     * This value is deprecated and should no longer be used. Use <b>UPCEnabled</b>
     * instead.
     */
    public const VAL_UPCIDENTIFIER_ENABLED = 'UPCIdentifierEnabled';

    /**
     * Constant for 'EANIdentifierEnabled' value.
     *
     * This value is deprecated and should no longer be used. Use <b>EANEnabled</b>
     * instead.
     */
    public const VAL_EANIDENTIFIER_ENABLED = 'EANIdentifierEnabled';

    /**
     * Constant for 'BrandMPNIdentifierEnabled' value.
     *
     * If this value is specified, the <b>Category.BrandMPNIdentifierEnabled</b>
     * boolean field in the <b>GetCategoryFeatures</b> response will indicate whether
     * or not individual categories on the specified site support the ability of a
     * seller to identify a product through a Brand/Manufacturer Part Number (MPN)
     * combination.
     */
    public const VAL_BRAND_MPNIDENTIFIER_ENABLED = 'BrandMPNIdentifierEnabled';

    /**
     * Constant for 'ClassifiedAdAutoAcceptEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdAutoAcceptEnabled</b> and
     * <b>Category.ClassifiedAdAutoAcceptEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto accept feature
     * for Classified Ad listings. With the Best Offer auto accept feature, the seller
     * sets a price threshold, and all Best Offers and counter offers at or above this
     * price value are automatically accepted without any seller action. This feature
     * is only applicable for Classified Ad listings.
     */
    public const VAL_CLASSIFIED_AD_AUTO_ACCEPT_ENABLED = 'ClassifiedAdAutoAcceptEnabled';

    /**
     * Constant for 'BestOfferAutoAcceptEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.BestOfferAutoAcceptEnabled</b>
     * and <b>Category.BestOfferAutoAcceptEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto accept feature.
     * With the Best Offer auto accept feature, the seller sets a price threshold, and
     * all Best Offers and counter offers at or above this price value are
     * automatically accepted without any seller action.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature can be set for auction listings on the US, Canada, UK,
     * Germany, Australia, France, Italy, and Spain marketplaces, but keep in mind that
     * Best Offer and Buy It Now cannot be used simultaneously in a listing. Also, once
     * a qualifying bid is made on an auction listing, the Best Offer feature is
     * disabled, and any pending offer or counteroffers are no longer valid.
     *  </span>
     */
    public const VAL_BEST_OFFER_AUTO_ACCEPT_ENABLED = 'BestOfferAutoAcceptEnabled';

    /**
     * Constant for 'CrossBorderTradeEnabled' value.
     *
     * If this value is specified, the <b>CrossBorderTradeNorthAmericaEnabled</b>,
     * <b>CrossBorderTradeGBEnabled</b>, and <b>CrossBorderTradeAustraliaEnabled</b>
     * fields in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * the specified eBay site and individual categories support the International Site
     * Visibility (Cross-Border Trade) feature, and on which sites. With the
     * International Site Visibility feature, the seller is able to create a listing
     * and make this listing available on multiple eBay sites (not just their domestic
     * eBay site).
     */
    public const VAL_CROSS_BORDER_TRADE_ENABLED = 'CrossBorderTradeEnabled';

    /**
     * Constant for 'PayPalBuyerProtectionEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.PayPalBuyerProtectionEnabled</b>
     * and <b>Category.PayPalBuyerProtectionEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories are enabled with PayPal Purchase Protection.
     * Of course, an eligible item must be purchased with PayPal to be eligible for
     * PayPal Purchase Protection.
     */
    public const VAL_PAY_PAL_BUYER_PROTECTION_ENABLED = 'PayPalBuyerProtectionEnabled';

    /**
     * Constant for 'BuyerGuaranteeEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.BuyerGuaranteeEnabled</b> and
     * <b>Category.BuyerGuaranteeEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories are enabled with the Australian version of
     * the Buyer Protection program. This enumeration value is only applicable to the
     * eBay Australia site.
     */
    public const VAL_BUYER_GUARANTEE_ENABLED = 'BuyerGuaranteeEnabled';

    /**
     * Constant for 'INEscrowWorkflowTimeline' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This value is deprecated since it is only applicable to the eBay India site,
     * and this marketplace is no longer available.</span>
     *  If this value is specified, the <b>Category.INEscrowWorkflowTimeline</b> fields
     * in the <b>GetCategoryFeatures</b> response will indicate the escrow workflows
     * that will be used for individual categories on the eBay India site. This
     * enumeration value is only applicable to the eBay India site, and only if Paisa
     * Pay Full Escrow is an accepted payment method.
     */
    public const VAL_INESCROW_WORKFLOW_TIMELINE = 'INEscrowWorkflowTimeline';

    /**
     * Constant for 'CombinedFixedPriceTreatment' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_COMBINED_FIXED_PRICE_TREATMENT = 'CombinedFixedPriceTreatment';

    /**
     * Constant for 'GalleryFeaturedDurations' value.
     *
     * If this value is specified, the <b>SiteDefaults.GalleryFeaturedDurations</b>
     * container in the <b>GetCategoryFeatures</b> response will indicate the listing
     * duration times that the Featured Gallery feature may be enabled for a listing.
     */
    public const VAL_GALLERY_FEATURED_DURATIONS = 'GalleryFeaturedDurations';

    /**
     * Constant for 'PayPalRequired' value.
     *
     * If this value is specified, the <b>SiteDefaults.PayPalRequired</b> and
     * <b>Category.PayPalRequired</b> boolean fields in the <b>GetCategoryFeatures</b>
     * response will indicate whether or not the specified eBay site and individual
     * categories require PayPal as one of the accepted payment methods in a listing.
     * This value is not applicable in countries where PayPal is not available.
     */
    public const VAL_PAY_PAL_REQUIRED = 'PayPalRequired';

    /**
     * Constant for 'eBayMotorsProAdFormatEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.eBayMotorsProAdFormatEnabled</b>
     * and <b>Category.eBayMotorsProAdFormatEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow motor vehicles to be sold through
     * Classified Ads. This value is only applicable for eBay Motors Pro users.
     */
    public const VAL_E_BAY_MOTORS_PRO_AD_FORMAT_ENABLED = 'eBayMotorsProAdFormatEnabled';

    /**
     * Constant for 'eBayMotorsProContactByPhoneEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProContactByPhoneEnabled</b> and
     * <b>Category.eBayMotorsProContactByPhoneEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Motors Pro users to provide
     * contact phone numbers within a Motor Vehicles Classified Ad listing. The
     * <b>Category.eBayMotorsProPhoneCount</b> field indicates how many contact phone
     * numbers are supported in each listing. This feature is only applicable to Motor
     * Vehicles Classified Ad listings.
     */
    public const VAL_E_BAY_MOTORS_PRO_CONTACT_BY_PHONE_ENABLED = 'eBayMotorsProContactByPhoneEnabled';

    /**
     * Constant for 'eBayMotorsProContactByAddressEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProContactByAddressEnabled</b> and
     * <b>Category.eBayMotorsProContactByAddressEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Motors Pro users to provide
     * contact street addresses within a Motor Vehicles Classified Ad listing. The
     * <b>Category.eBayMotorsProStreetCount</b> field indicates how many contact street
     * addresses are supported in each listing. This feature is only applicable to
     * Motor Vehicles Classified Ad listings.
     */
    public const VAL_E_BAY_MOTORS_PRO_CONTACT_BY_ADDRESS_ENABLED = 'eBayMotorsProContactByAddressEnabled';

    /**
     * Constant for 'eBayMotorsProCompanyNameEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProCompanyNameEnabled</b> and
     * <b>Category.eBayMotorsProCompanyNameEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Motors Pro users to provide a
     * company name within a Motor Vehicles Classified Ad listing. This feature is only
     * applicable to Motor Vehicles Classified Ad listings.
     */
    public const VAL_E_BAY_MOTORS_PRO_COMPANY_NAME_ENABLED = 'eBayMotorsProCompanyNameEnabled';

    /**
     * Constant for 'eBayMotorsProContactByEmailEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProContactByEmailEnabled</b> and
     * <b>Category.eBayMotorsProContactByEmailEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Motors Pro users to provide a
     * contact email address within a Motor Vehicles Classified Ad listing. This
     * feature is only applicable to Motor Vehicles Classified Ad listings.
     */
    public const VAL_E_BAY_MOTORS_PRO_CONTACT_BY_EMAIL_ENABLED = 'eBayMotorsProContactByEmailEnabled';

    /**
     * Constant for 'eBayMotorsProBestOfferEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProBestOfferEnabled</b> and
     * <b>Category.eBayMotorsProBestOfferEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer feature for Motor
     * Vehicles Classified Ad listings.
     */
    public const VAL_E_BAY_MOTORS_PRO_BEST_OFFER_ENABLED = 'eBayMotorsProBestOfferEnabled';

    /**
     * Constant for 'eBayMotorsProAutoAcceptEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProAutoAcceptEnabled</b> and
     * <b>Category.eBayMotorsProAutoAcceptEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto accept feature
     * for Motor Vehicles Classified Ad listings. With the Best Offer auto accept
     * feature, the seller sets a price threshold, and all Best Offers and counter
     * offers at or above this price value are automatically accepted without any
     * seller action. This feature is only applicable for Motor Vehicles Classified Ad
     * listings, and is only available to eBay Motors Pro users.
     */
    public const VAL_E_BAY_MOTORS_PRO_AUTO_ACCEPT_ENABLED = 'eBayMotorsProAutoAcceptEnabled';

    /**
     * Constant for 'eBayMotorsProAutoDeclineEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProAutoDeclineEnabled</b> and
     * <b>Category.eBayMotorsProAutoDeclineEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto decline feature
     * for Motor Vehicles Classified Ad listings. With the Best Offer auto decline
     * feature, the seller sets a price threshold, and all Best Offers and counter
     * offers below this price value are automatically declined without any seller
     * action. This feature is only applicable for Motor Vehicles Classified Ad
     * listings, and is only available to eBay Motors Pro users.
     */
    public const VAL_E_BAY_MOTORS_PRO_AUTO_DECLINE_ENABLED = 'eBayMotorsProAutoDeclineEnabled';

    /**
     * Constant for 'eBayMotorsProPaymentMethodCheckOutEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProPaymentMethodCheckOutEnabled</b> and
     * <b>Category.eBayMotorsProPaymentMethodCheckOutEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not (and when)
     * accepted payment methods are displayed to buyers for the specified eBay site and
     * for individual categories. This feature is only applicable for Motor Vehicles
     * Classified Ad listings, and is only available to eBay Motors Pro users.
     */
    public const VAL_E_BAY_MOTORS_PRO_PAYMENT_METHOD_CHECK_OUT_ENABLED = 'eBayMotorsProPaymentMethodCheckOutEnabled';

    /**
     * Constant for 'eBayMotorsProShippingMethodEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProShippingMethodEnabled</b> and
     * <b>Category.eBayMotorsProShippingMethodEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the display of available shipping
     * methods to buyers. This feature is only applicable for Motor Vehicles Classified
     * Ad listings, and is only available to eBay Motors Pro users.
     */
    public const VAL_E_BAY_MOTORS_PRO_SHIPPING_METHOD_ENABLED = 'eBayMotorsProShippingMethodEnabled';

    /**
     * Constant for 'eBayMotorsProCounterOfferEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProCounterOfferEnabled</b> and
     * <b>Category.eBayMotorsProCounterOfferEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support Best Offer counter offers for Motor
     * Vehicles Classified Ad listings. This feature is only applicable for Motor
     * Vehicles Classified Ad listings, and is only available to eBay Motors Pro users.
     */
    public const VAL_E_BAY_MOTORS_PRO_COUNTER_OFFER_ENABLED = 'eBayMotorsProCounterOfferEnabled';

    /**
     * Constant for 'eBayMotorsProSellerContactDetailsEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.eBayMotorsProSellerContactDetailsEnabled</b> and
     * <b>Category.eBayMotorsProSellerContactDetailsEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow the seller to provide contact
     * information within a Motor Vehicles Classified Ad listing. This feature is only
     * applicable for Motor Vehicles Classified Ad listings, and is only available to
     * eBay Motors Pro users.
     */
    public const VAL_E_BAY_MOTORS_PRO_SELLER_CONTACT_DETAILS_ENABLED = 'eBayMotorsProSellerContactDetailsEnabled';

    /**
     * Constant for 'LocalMarketAdFormatEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.LocalMarketAdFormatEnabled</b>
     * and <b>Category.LocalMarketAdFormatEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow motor vehicles to be sold through
     * Local Market Classified Ads. Motors Local Market listings are only available to
     * eBay sellers who are Licensed Vehicle Dealers on eBay.
     */
    public const VAL_LOCAL_MARKET_AD_FORMAT_ENABLED = 'LocalMarketAdFormatEnabled';

    /**
     * Constant for 'LocalMarketContactByPhoneEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketContactByPhoneEnabled</b> and
     * <b>Category.LocalMarketContactByPhoneEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Licensed Vehicle Dealers to
     * provide contact phone numbers within a Motors Local Market listing. The
     * <b>Category.LocalMarketPhoneCount</b> field indicates how many contact phone
     * numbers are supported in each listing. This feature is only applicable to Motors
     * Local Market listings.
     */
    public const VAL_LOCAL_MARKET_CONTACT_BY_PHONE_ENABLED = 'LocalMarketContactByPhoneEnabled';

    /**
     * Constant for 'LocalMarketContactByAddressEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketContactByAddressEnabled</b> and
     * <b>Category.LocalMarketContactByAddressEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Licensed Vehicle Dealers to
     * provide contact street addresses within a Motors Local Market listing. This
     * feature is only applicable to Motors Local Market listings.
     */
    public const VAL_LOCAL_MARKET_CONTACT_BY_ADDRESS_ENABLED = 'LocalMarketContactByAddressEnabled';

    /**
     * Constant for 'LocalMarketCompanyNameEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketCompanyNameEnabled</b> and
     * <b>Category.LocalMarketCompanyNameEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Licensed Vehicle Dealers to
     * provide a company name within a Motors Local Market listing. This feature is
     * only applicable to Motors Local Market listings.
     */
    public const VAL_LOCAL_MARKET_COMPANY_NAME_ENABLED = 'LocalMarketCompanyNameEnabled';

    /**
     * Constant for 'LocalMarketContactByEmailEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketContactByEmailEnabled</b> and
     * <b>Category.LocalMarketContactByEmailEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Licensed Vehicle Dealers to
     * provide contact email addresses within a Motors Local Market listing. This
     * feature is only applicable to Motors Local Market listings.
     */
    public const VAL_LOCAL_MARKET_CONTACT_BY_EMAIL_ENABLED = 'LocalMarketContactByEmailEnabled';

    /**
     * Constant for 'LocalMarketBestOfferEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.LocalMarketBestOfferEnabled</b>
     * and <b>Category.LocalMarketBestOfferEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer feature for Motors
     * Local Market listings.
     */
    public const VAL_LOCAL_MARKET_BEST_OFFER_ENABLED = 'LocalMarketBestOfferEnabled';

    /**
     * Constant for 'LocalMarketAutoAcceptEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.LocalMarketAutoAcceptEnabled</b>
     * and <b>Category.LocalMarketAutoAcceptEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto accept feature
     * for Motors Local Market listings. With the Best Offer auto accept feature, the
     * seller sets a price threshold, and all Best Offers and counter offers at or
     * above this price value are automatically accepted without any seller action.
     * This feature is only applicable for Motors Local Market listings, and is only
     * available to eBay Licensed Vehicle Dealers.
     */
    public const VAL_LOCAL_MARKET_AUTO_ACCEPT_ENABLED = 'LocalMarketAutoAcceptEnabled';

    /**
     * Constant for 'LocalMarketAutoDeclineEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketAutoDeclineEnabled</b> and
     * <b>Category.LocalMarketAutoDeclineEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto decline feature
     * for Motors Local Market listings. With the Best Offer auto decline feature, the
     * seller sets a price threshold, and all Best Offers and counter offers below this
     * price value are automatically declined without any seller action. This feature
     * is only applicable for Motors Local Market listings, and is only available to
     * eBay Licensed Vehicle Dealers.
     */
    public const VAL_LOCAL_MARKET_AUTO_DECLINE_ENABLED = 'LocalMarketAutoDeclineEnabled';

    /**
     * Constant for 'LocalMarketPaymentMethodCheckOutEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketPaymentMethodCheckOutEnabled</b> and
     * <b>Category.LocalMarketPaymentMethodCheckOutEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not (and when)
     * accepted payment methods are displayed to buyers for the specified eBay site and
     * for individual categories. This feature is only applicable for Motors Local
     * Market listings, and is only available to eBay Licensed Vehicle Dealers.
     */
    public const VAL_LOCAL_MARKET_PAYMENT_METHOD_CHECK_OUT_ENABLED = 'LocalMarketPaymentMethodCheckOutEnabled';

    /**
     * Constant for 'LocalMarketShippingMethodEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketShippingMethodEnabled</b> and
     * <b>Category.LocalMarketShippingMethodEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the display of available shipping
     * methods to buyers. This feature is only applicable for Motors Local Market
     * listings, and is only available to eBay Licensed Vehicle Dealers.
     */
    public const VAL_LOCAL_MARKET_SHIPPING_METHOD_ENABLED = 'LocalMarketShippingMethodEnabled';

    /**
     * Constant for 'LocalMarketCounterOfferEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketCounterOfferEnabled</b> and
     * <b>Category.LocalMarketCounterOfferEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support Best Offer counter offers for Motors
     * Local Market listings. This feature is only applicable for Motors Local Market
     * listings, and is only available to eBay Licensed Vehicle Dealers.
     */
    public const VAL_LOCAL_MARKET_COUNTER_OFFER_ENABLED = 'LocalMarketCounterOfferEnabled';

    /**
     * Constant for 'LocalMarketSellerContactDetailsEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.LocalMarketSellerContactDetailsEnabled</b> and
     * <b>Category.LocalMarketSellerContactDetailsEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow the seller to provide contact
     * information within a Motors Local Market listing. This feature is only
     * applicable for Motors Local Market listings, and is only available to eBay
     * Licensed Vehicle Dealers.
     */
    public const VAL_LOCAL_MARKET_SELLER_CONTACT_DETAILS_ENABLED = 'LocalMarketSellerContactDetailsEnabled';

    /**
     * Constant for 'ClassifiedAdContactByAddressEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdContactByAddressEnabled</b> and
     * <b>Category.ClassifiedAdContactByAddressEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow sellers to provide contact street
     * addresses within a Classified Ad listing. The
     * <b>Category.ClassifiedAdStreetCount</b> field indicates how many street
     * addresses are allowed in each listing. This feature is only applicable to
     * Classified Ad listings.
     */
    public const VAL_CLASSIFIED_AD_CONTACT_BY_ADDRESS_ENABLED = 'ClassifiedAdContactByAddressEnabled';

    /**
     * Constant for 'ClassifiedAdCompanyNameEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.ClassifiedAdCompanyNameEnabled</b> and
     * <b>Category.ClassifiedAdCompanyNameEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow sellers to provide a company name
     * within a Classified Ad listing. This feature is only applicable to Classified Ad
     * listings.
     */
    public const VAL_CLASSIFIED_AD_COMPANY_NAME_ENABLED = 'ClassifiedAdCompanyNameEnabled';

    /**
     * Constant for 'SpecialitySubscription' value.
     *
     * If this value is specified, the <b>SiteDefaults.SpecialitySubscription</b>
     * boolean field in the <b>GetCategoryFeatures</b> response will indicate whether
     * or not the specified eBay site supports Motors National listings for sellers
     * with a specialty dealer subscription for selling motor vehicles.
     */
    public const VAL_SPECIALITY_SUBSCRIPTION = 'SpecialitySubscription';

    /**
     * Constant for 'RegularSubscription' value.
     *
     * If this value is specified, the <b>SiteDefaults.RegularSubscription</b> boolean
     * field in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * the specified eBay site supports Motors National listings for sellers with a
     * regular dealer subscription for selling motor vehicles.
     */
    public const VAL_REGULAR_SUBSCRIPTION = 'RegularSubscription';

    /**
     * Constant for 'PremiumSubscription' value.
     *
     * If this value is specified, the <b>SiteDefaults.PremiumSubscription</b> boolean
     * field in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * the specified eBay site supports Motors National listings for sellers with a
     * premium dealer subscription for selling motor vehicles.
     */
    public const VAL_PREMIUM_SUBSCRIPTION = 'PremiumSubscription';

    /**
     * Constant for 'NonSubscription' value.
     *
     * If this value is specified, the <b>SiteDefaults.NonSubscription</b> boolean
     * field in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * the specified eBay site supports Motors National listings for sellers without a
     * dealer subscription for selling motor vehicles.
     */
    public const VAL_NON_SUBSCRIPTION = 'NonSubscription';

    /**
     * Constant for 'IntangibleEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.IntangibleEnabled</b> and
     * <b>Category.IntangibleEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow sellers to sell intangible items.
     */
    public const VAL_INTANGIBLE_ENABLED = 'IntangibleEnabled';

    /**
     * Constant for 'PayPalRequiredForStoreOwner' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_PAY_PAL_REQUIRED_FOR_STORE_OWNER = 'PayPalRequiredForStoreOwner';

    /**
     * Constant for 'ReviseQuantityAllowed' value.
     *
     * If this value is specified, the <b>SiteDefaults.ReviseQuantityAllowed</b> and
     * <b>Category.ReviseQuantityAllowed</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow sellers to revise quantity in a
     * multi-quantity, fixed-price listing while the listing is in a semi- or
     * fully-restricted mode (such as when the listing already has sales or when the
     * listing is scheduled to end within 12 hours). This value is only applicable to
     * fixed-price listings.
     */
    public const VAL_REVISE_QUANTITY_ALLOWED = 'ReviseQuantityAllowed';

    /**
     * Constant for 'RevisePriceAllowed' value.
     *
     * If this value is specified, the <b>SiteDefaults.RevisePriceAllowed</b> and
     * <b>Category.RevisePriceAllowed</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow sellers to revise the price in a
     * fixed-price listing while the listing is in a semi- or fully-restricted mode
     * (such as when the listing already has sales or when the listing is scheduled to
     * end within 12 hours). This value is only applicable to fixed-price listings.
     */
    public const VAL_REVISE_PRICE_ALLOWED = 'RevisePriceAllowed';

    /**
     * Constant for 'StoreOwnerExtendedListingDurationsEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.StoreOwnerExtendedListingDurationsEnabled</b> and
     * <b>Category.StoreOwnerExtendedListingDurationsEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Store sellers to create
     * fixed-price listings with longer listing durations than sellers without eBay
     * Stores. This value is only applicable to fixed-price listings.
     */
    public const VAL_STORE_OWNER_EXTENDED_LISTING_DURATIONS_ENABLED = 'StoreOwnerExtendedListingDurationsEnabled';

    /**
     * Constant for 'StoreOwnerExtendedListingDurations' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.StoreOwnerExtendedListingDurations</b> container in the
     * <b>GetCategoryFeatures</b> response will indicate the extended listing duration
     * times that eBay Store sellers may set when creating a fixed-price listing. This
     * value is only applicable to fixed-price listings. The site and category must
     * support extended listing durations
     * (<b>StoreOwnerExtendedListingDurationsEnabled</b>=true).
     */
    public const VAL_STORE_OWNER_EXTENDED_LISTING_DURATIONS = 'StoreOwnerExtendedListingDurations';

    /**
     * Constant for 'ReturnPolicyEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.ReturnPolicyEnabled</b> and
     * <b>Category.ReturnPolicyEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay sellers to create a return policy
     * for the listing.
     */
    public const VAL_RETURN_POLICY_ENABLED = 'ReturnPolicyEnabled';

    /**
     * Constant for 'HandlingTimeEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.HandlingTimeEnabled</b> and
     * <b>Category.HandlingTimeEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories require eBay sellers to set a handling time
     * for products sold within the listing. The handling time is the maximum number of
     * business days the seller commits to for preparing an item to be shipped after
     * receiving a cleared payment. The seller's handling time does not include the
     * shipping time (the carrier's transit time).
     */
    public const VAL_HANDLING_TIME_ENABLED = 'HandlingTimeEnabled';

    /**
     * Constant for 'PaymentMethods' value.
     *
     * If this value is specified, the <b>SiteDefaults.PaymentMethod</b> and
     * <b>SiteDefaults.PaymentMethod</b> fields in the <b>GetCategoryFeatures</b>
     * response will indicate the accepted payment methods at the eBay site level and
     * within the individual categories.
     */
    public const VAL_PAYMENT_METHODS = 'PaymentMethods';

    /**
     * Constant for 'MaxFlatShippingCost' value.
     *
     * If this value is specified, the <b>Category.MaxFlatShippingCost</b> fields in
     * the <b>GetCategoryFeatures</b> response will indicate the maximum flat-rate
     * shipping costs that the seller may charge the buyer to ship one item
     * domestically. At least one available shipping service option has to be under
     * this value. Handling cost (if any) goes toward this maximum cost threshold.
     */
    public const VAL_MAX_FLAT_SHIPPING_COST = 'MaxFlatShippingCost';

    /**
     * Constant for 'MaxFlatShippingCostCBTExempt' value.
     *
     * If this value is specified, the <b>SiteDefaults.MaxFlatShippingCostCBTExempt</b>
     * boolean field in the <b>GetCategoryFeatures</b> response will indicate whether
     * or not sellers, who sell items to domestic buyers, but are shipping the item
     * from another country, are exempt from the <b>MaxFlatShippingCost</b> threshold.
     */
    public const VAL_MAX_FLAT_SHIPPING_COST_CBTEXEMPT = 'MaxFlatShippingCostCBTExempt';

    /**
     * Constant for 'Group1MaxFlatShippingCost' value.
     *
     * If this value is specified, the <b>Category.Group1MaxFlatShippingCost</b> fields
     * in the <b>GetCategoryFeatures</b> response will indicate the maximum flat-rate
     * shipping costs that the seller may charge the buyer to ship one item
     * domestically using a Group 1 shipping service. At least one available Group 1
     * shipping service option has to be under this value. Handling cost (if any) goes
     * toward this maximum cost threshold.
     */
    public const VAL_GROUP_1_MAX_FLAT_SHIPPING_COST = 'Group1MaxFlatShippingCost';

    /**
     * Constant for 'Group2MaxFlatShippingCost' value.
     *
     * If this value is specified, the <b>Category.Group2MaxFlatShippingCost</b> fields
     * in the <b>GetCategoryFeatures</b> response will indicate the maximum flat-rate
     * shipping costs that the seller may charge the buyer to ship one item
     * domestically using a Group 2 shipping service. At least one available Group 2
     * shipping service option has to be under this value. Handling cost (if any) goes
     * toward this maximum cost threshold.
     */
    public const VAL_GROUP_2_MAX_FLAT_SHIPPING_COST = 'Group2MaxFlatShippingCost';

    /**
     * Constant for 'Group3MaxFlatShippingCost' value.
     *
     * If this value is specified, the <b>Category.Group3MaxFlatShippingCost</b> fields
     * in the <b>GetCategoryFeatures</b> response will indicate the maximum flat-rate
     * shipping costs that the seller may charge the buyer to ship one item
     * domestically using a Group 3 shipping service. At least one available Group 3
     * shipping service option has to be under this value. Handling cost (if any) goes
     * toward this maximum cost threshold.
     */
    public const VAL_GROUP_3_MAX_FLAT_SHIPPING_COST = 'Group3MaxFlatShippingCost';

    /**
     * Constant for 'VariationsEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.VariationsEnabled</b> and
     * <b>Category.VariationsEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support multi-variation listings. Variations
     * are items within the same listing that are logically the same product, but
     * differ slightly in size, color, or other aspect.
     */
    public const VAL_VARIATIONS_ENABLED = 'VariationsEnabled';

    /**
     * Constant for 'AttributeConversionEnabled' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_ATTRIBUTE_CONVERSION_ENABLED = 'AttributeConversionEnabled';

    /**
     * Constant for 'FreeGalleryPlusEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.FreeGalleryPlusEnabled</b> and
     * <b>Category.FreeGalleryPlusEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support a free Gallery Plus upgrade. The
     * Gallery Plus feature includes the picture zoom-in option (when you hover the
     * mouse over the picture) and the ability to enlarge the photo by clicking a link.
     */
    public const VAL_FREE_GALLERY_PLUS_ENABLED = 'FreeGalleryPlusEnabled';

    /**
     * Constant for 'FreePicturePackEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.FreePicturePackEnabled</b> and
     * <b>Category.FreePicturePackEnabled</b> boolean fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support a free Picture Pack upgrade. The
     * Picture Pack feature is only available for eBay Motors vehicle listings. The
     * Picture Pack feature includes up to 12 supersized photos with the zoom-in
     * feature enabled for each one.
     */
    public const VAL_FREE_PICTURE_PACK_ENABLED = 'FreePicturePackEnabled';

    /**
     * Constant for 'CompatibilityEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.ItemCompatibilityEnabled</b> and
     * <b>Category.ItemCompatibilityEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Parts Compatibility feature, and
     * if so, the mode of compatibility that is used (by application or by
     * specification). The Parts Compatibility feature allows sellers to list their
     * motor vehicles parts and accessories items with parts compatibility name-value
     * pairs specific to motor vehicles, and allows potential buyers to search for
     * these items using parts compatibility search fields.
     */
    public const VAL_COMPATIBILITY_ENABLED = 'CompatibilityEnabled';

    /**
     * Constant for 'MinCompatibleApplications' value.
     *
     * If this value is specified, the <b>Category.MinCompatibleApplications</b> fields
     * in the <b>GetCategoryFeatures</b> response will indicate the minimum number of
     * compatible applications that must be specified when listing a motor vehicle part
     * or accessory in the given category.
     */
    public const VAL_MIN_COMPATIBLE_APPLICATIONS = 'MinCompatibleApplications';

    /**
     * Constant for 'MaxCompatibleApplications' value.
     *
     * If this value is specified, the <b>Category.MaxCompatibleApplications</b> fields
     * in the <b>GetCategoryFeatures</b> response will indicate the maximum number of
     * compatible applications that can be specified when listing a motor vehicle part
     * or accessory in the given category.
     */
    public const VAL_MAX_COMPATIBLE_APPLICATIONS = 'MaxCompatibleApplications';

    /**
     * Constant for 'ConditionEnabled' value.
     *
     * If this value is specified, the <b>Category.ConditionEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate which individual categories
     * support (and even require) the use of <b>ConditionID</b> values to specify the
     * condition of an item within a listing.
     */
    public const VAL_CONDITION_ENABLED = 'ConditionEnabled';

    /**
     * Constant for 'ConditionValues' value.
     *
     * If this value is specified, the <b>Category.Condition</b> containers in the
     * <b>GetCategoryFeatures</b> response will include Condition ID values and item
     * conditions like 'Very Good', 'Acceptable', 'Used', etc. for all categories that
     * support the use of Condition ID values.
     */
    public const VAL_CONDITION_VALUES = 'ConditionValues';

    /**
     * Constant for 'ValueCategory' value.
     *
     * If this value is specified, the <b>Category.ValueCategory</b> boolean fields in
     * the <b>GetCategoryFeatures</b> response will indicate the categories that are
     * considered by eBay to be 'Value Categories'. 'Value Categories' are generally
     * categories where buyers can find good deals on items. If sellers decide to list
     * within a value category, only this category may be used, and a secondary
     * category is not supported.
     */
    public const VAL_VALUE_CATEGORY = 'ValueCategory';

    /**
     * Constant for 'ProductCreationEnabled' value.
     *
     * This enumeration value is no longer applicable. Use the
     * <code>ProductRequiredEnabled</code> enumeration value instead to see if a
     * category supports listings that are associated with an eBay Catalog product.
     */
    public const VAL_PRODUCT_CREATION_ENABLED = 'ProductCreationEnabled';

    /**
     * Constant for 'EANEnabled' value.
     *
     * If this value is specified, the <b>Category.EANEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not items listed in
     * the corresponding category may utilize EANs to identify a product. A value of
     * <code>Disabled</code> indicates that EANs cannot be used for the category, a
     * value of <code>Enabled</code> indicates that EANs can be used for the category,
     * and a value of <code>Required</code> indicates that an EAN is required when
     * listing a product in this category.
     */
    public const VAL_EANENABLED = 'EANEnabled';

    /**
     * Constant for 'ISBNEnabled' value.
     *
     * If this value is specified, the <b>Category.ISBNEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not items listed in
     * the corresponding category may utilize ISBNs to identify a product. A value of
     * <code>Disabled</code> indicates that ISBNs cannot be used for the category, a
     * value of <code>Enabled</code> indicates that ISBNs can be used for the category,
     * and a value of <code>Required</code> indicates that an ISBN is required when
     * listing a product in this category.
     */
    public const VAL_ISBNENABLED = 'ISBNEnabled';

    /**
     * Constant for 'UPCEnabled' value.
     *
     * If this value is specified, the <b>Category.UPCEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not items listed in
     * the corresponding category may utilize UPCs to identify a product. A value of
     * <code>Disabled</code> indicates that UPCs cannot be used for the category, a
     * value of <code>Enabled</code> indicates that UPCs can be used for the category,
     * and a value of <code>Required</code> indicates that a UPC is required when
     * listing a product in this category.
     */
    public const VAL_UPCENABLED = 'UPCEnabled';

    /**
     * Constant for 'MaxGranularFitmentCount' value.
     *
     * If this value is specified, the <b>Category.MaxGranularFitmentCount</b> fields
     * in the <b>GetCategoryFeatures</b> response will indicate how many Parts
     * Compatibility name-value pairs may be passed in for each motor vehicle aspect
     * (Year, Make, and Model) in a motor vehicle parts and accessory listing.
     * granularity. This field is only applicable to motor vehicle parts and accessory
     * listings.
     */
    public const VAL_MAX_GRANULAR_FITMENT_COUNT = 'MaxGranularFitmentCount';

    /**
     * Constant for 'CompatibleVehicleType' value.
     *
     * If this value is specified, the <b>Category.CompatibleVehicleType</b> fields in
     * the <b>GetCategoryFeatures</b> response will indicate the type of vehicle that
     * parts compatibility name-value pairs in a listing will be referring to, such as
     * 'cars and trucks', 'all-terrain vehicles (ATV)', 'boats', and 'motorcycles'.
     * This field is only applicable to motor vehicle parts and accessory listings.
     */
    public const VAL_COMPATIBLE_VEHICLE_TYPE = 'CompatibleVehicleType';

    /**
     * Constant for 'PaymentOptionsGroup' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_PAYMENT_OPTIONS_GROUP = 'PaymentOptionsGroup';

    /**
     * Constant for 'ShippingProfileCategoryGroup' value.
     *
     * If this value is specified, the <b>Category.ShippingProfileCategoryGroup</b>
     * fields in the <b>GetCategoryFeatures</b> response will indicate which shipping
     * business policy category group that each category will inherit as the default
     * category group. Currently, there are only two Business Policies category groups
     * - 'MOTORS_VEHICLE' covers all motor-vehicle related categories, and 'ALL' covers
     * all other categories.
     */
    public const VAL_SHIPPING_PROFILE_CATEGORY_GROUP = 'ShippingProfileCategoryGroup';

    /**
     * Constant for 'PaymentProfileCategoryGroup' value.
     *
     * If this value is specified, the <b>Category.PaymentProfileCategoryGroup</b>
     * fields in the <b>GetCategoryFeatures</b> response will indicate which payment
     * business policy category group that each category will inherit as the default
     * category group. Currently, there are only two Business Policies category groups
     * - 'MOTORS_VEHICLE' covers all motor-vehicle related categories, and 'ALL' covers
     * all other categories.
     */
    public const VAL_PAYMENT_PROFILE_CATEGORY_GROUP = 'PaymentProfileCategoryGroup';

    /**
     * Constant for 'ReturnPolicyProfileCategoryGroup' value.
     *
     * If this value is specified, the <b>Category.ReturnPolicyProfileCategoryGroup</b>
     * fields in the <b>GetCategoryFeatures</b> response will indicate which return
     * policy business policy category group that each category will inherit as the
     * default category group. Currently, there are only two Business Policies category
     * groups - 'MOTORS_VEHICLE' covers all motor-vehicle related categories, and 'ALL'
     * covers all other categories.
     */
    public const VAL_RETURN_POLICY_PROFILE_CATEGORY_GROUP = 'ReturnPolicyProfileCategoryGroup';

    /**
     * Constant for 'VINSupported' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_VINSUPPORTED = 'VINSupported';

    /**
     * Constant for 'VRMSupported' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_VRMSUPPORTED = 'VRMSupported';

    /**
     * Constant for 'SellerProvidedTitleSupported' value.
     *
     * If this value is specified, the <b>SiteDefaults.SellerProvidedTitleSupported</b>
     * and <b>Category.SellerProvidedTitleSupported</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate if the eBay site and
     * individual categories support the use of a seller-provided title for a motor
     * vehicle listing on the US or Canada Motors marketplaces. A seller-provided title
     * is a descriptive title, given by the seller, that appears below eBay's
     * pre-filled listing title for the motor vehicle.
     */
    public const VAL_SELLER_PROVIDED_TITLE_SUPPORTED = 'SellerProvidedTitleSupported';

    /**
     * Constant for 'DepositSupported' value.
     *
     * This value is <b>deprecated</b> and should no longer be used.
     */
    public const VAL_DEPOSIT_SUPPORTED = 'DepositSupported';

    /**
     * Constant for 'GlobalShippingEnabled' value.
     *
     * If this value is specified, the <b>SiteDefaults.GlobalShippingEnabled</b> and
     * <b>Category.GlobalShippingEnabled</b> fields in the <b>GetCategoryFeatures</b>
     * response will indicate if the eBay site and individual categories support the
     * Global Shipping Program (GSP) as a means for shipping items internationally. The
     * GSP feature is only applicable to shipping items internationally.
     */
    public const VAL_GLOBAL_SHIPPING_ENABLED = 'GlobalShippingEnabled';

    /**
     * Constant for 'AdditionalCompatibilityEnabled' value.
     *
     * If this value is specified, the
     * <b>SiteDefaults.AdditionalCompatibilityEnabled</b> and
     * <b>Category.AdditionalCompatibilityEnabled</b> fields in the
     * <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the second-generation Parts
     * Compatibility feature where parts-compatibility name-value pairs can be passed
     * in for boats, motorcycles, and other vehicles instead of just cars and trucks.
     * This feature is only applicable to motor vehicle parts and accessory listings.
     */
    public const VAL_ADDITIONAL_COMPATIBILITY_ENABLED = 'AdditionalCompatibilityEnabled';

    /**
     * Constant for 'PickupDropOffEnabled' value.
     *
     * If this value is specified, the <b>Category.PickupDropOffEnabled</b> fields in
     * the <b>GetCategoryFeatures</b> response will indicate that items listed in the
     * corresponding category may be enabled with the 'Click and Collect' feature. With
     * the 'Click and Collect' feature, a buyer can purchase certain items on the eBay
     * site and collect them at a local store. Buyers are notified by eBay once their
     * items are available. A <code>false</code> value in this field indicates that
     * items listed in the category are not eligible for the 'Click and Collect'
     * feature.
     *  <br/><br/>
     *  The 'Click and Collect' feature is only available to large merchants on the
     * eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID
     * - 77) sites.
     */
    public const VAL_PICKUP_DROP_OFF_ENABLED = 'PickupDropOffEnabled';

    /**
     * Constant for 'DigitalGoodDeliveryEnabled' value.
     *
     * If this value is specified, the <b>Category.DigitalGoodDeliveryEnabled</b>
     * fields in the <b>GetCategoryFeatures</b> response will indicate that digital
     * gift cards can be listed in the corresponding category. A <code>false</code>
     * value in this field indicates that digital gift cards may not be listed in the
     * category.
     *  <br/><br/>
     *  Digital gift cards are currently only supported on the US site. There are some
     * restrictions when it comes to selling gift cards, including the following:
     *
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time;</li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00; and</li>
     *  <li>prepaid credit cards from American Express, Discover, MasterCard, or Visa
     * are not allowed.</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a
     * href="http://pages.ebay.com/help/policies/gift.html">Gift cards policy</a> Help
     * page.
     */
    public const VAL_DIGITAL_GOOD_DELIVERY_ENABLED = 'DigitalGoodDeliveryEnabled';

    /**
     * Constant for 'EpidSupported' value.
     *
     * This value is used to see if an eBay Product ID (e.g. ePID) can be used in an
     * Add/Revise/Relist API call to identify which motorcycles and/or scooters are
     * compatible with a motor vehicle part or accessory is supported. ePIDs can only
     * be used to identify motorcycles and scooters on the Germany and UK sites.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or
     * scooter through an Add/Revise/Relist API call on the Germany or UK site, see the
     * documentation for the <a href="
     *  http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a>
     * container.
     */
    public const VAL_EPID_SUPPORTED = 'EpidSupported';

    /**
     * Constant for 'KTypeSupported' value.
     *
     * This value is used to see if a K Type vehicle number in an Add/Revise/Relist API
     * call to identify which cars and/or trucks are compatible with a motor vehicle
     * part or accessory is supported. K type vehicle numbers can only be used to
     * identify cars and trucks on the Germany site.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible
     * car or truck through an Add/Revise/Relist API call on the Germany site, see the
     * documentation for the <a href="
     *  http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a>
     * container.
     */
    public const VAL_KTYPE_SUPPORTED = 'KTypeSupported';

    /**
     * Constant for 'ProductRequiredEnabled' value.
     *
     * This value is used to see if the site supports Product-Based Shopping Experience
     * listings (listings associated with an eBay catalog product).
     *  <br><br>
     *  The <b>Category.ProductRequiredEnabled</b> field will only be returned if the
     * category requires association with an eBay Catalog product.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all
     * eBay categories, the value for this field should never get returned as
     * <code>Enabled</code> for <b>SiteDefaults</b> or for any categories.</span>
     */
    public const VAL_PRODUCT_REQUIRED_ENABLED = 'ProductRequiredEnabled';

    /**
     * Constant for 'DomesticReturnsAcceptedValues' value.
     *
     * Use this ID to return the values you can specify for whether or not a seller
     * accepts domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_DOMESTIC_RETURNS_ACCEPTED_VALUES = 'DomesticReturnsAcceptedValues';

    /**
     * Constant for 'InternationalReturnsAcceptedValues' value.
     *
     * Use this ID to return the values you can specify for whether or not a seller
     * accepts international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_INTERNATIONAL_RETURNS_ACCEPTED_VALUES = 'InternationalReturnsAcceptedValues';

    /**
     * Constant for 'DomesticReturnsDurationValues' value.
     *
     * Use this ID to return the values you can specify for the return duration for
     * domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_DOMESTIC_RETURNS_DURATION_VALUES = 'DomesticReturnsDurationValues';

    /**
     * Constant for 'InternationalReturnsDurationValues' value.
     *
     * Use this ID to return the values you can specify for the return duration for
     * international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_INTERNATIONAL_RETURNS_DURATION_VALUES = 'InternationalReturnsDurationValues';

    /**
     * Constant for 'DomesticReturnsShipmentPayeeValues' value.
     *
     * Use this ID to return the values you can specify for who pays any return
     * shipping costs for domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_DOMESTIC_RETURNS_SHIPMENT_PAYEE_VALUES = 'DomesticReturnsShipmentPayeeValues';

    /**
     * Constant for 'InternationalReturnsShipmentPayeeValues' value.
     *
     * Use this ID to return the values you can specify for who pays any return
     * shipping costs for international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_INTERNATIONAL_RETURNS_SHIPMENT_PAYEE_VALUES = 'InternationalReturnsShipmentPayeeValues';

    /**
     * Constant for 'DomesticRefundMethodValues' value.
     *
     * In US, sellers can offer item replacement in addition to offering a money-back
     * refund for domestic returns. Use this ID to return whether or not the seller can
     * offer <code>MoneyBackorReplacement</code> for the specified category.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_DOMESTIC_REFUND_METHOD_VALUES = 'DomesticRefundMethodValues';

    /**
     * Constant for 'InternationalRefundMethodValues' value.
     *
     * In US, sellers can offer item replacement in addition to offering a money-back
     * refund for international returns. Use this ID to return whether or not the
     * seller can offer <code>MoneyBackorReplacement</code> for the specified category.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_INTERNATIONAL_REFUND_METHOD_VALUES = 'InternationalRefundMethodValues';

    /**
     * Constant for 'ReturnPolicyDescriptionEnabled' value.
     *
     * In some EU countries, sellers are legally required to describe the return policy
     * they offer. The value returned by this field indicates if sellers can provide
     * such description within the given marketplace and category.
     *  <br><br>
     *  The values returned in this field are pertinent only if
     * <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code>
     * for the associated marketplace and category.
     */
    public const VAL_RETURN_POLICY_DESCRIPTION_ENABLED = 'ReturnPolicyDescriptionEnabled';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
