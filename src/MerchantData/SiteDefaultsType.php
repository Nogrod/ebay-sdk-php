<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SiteDefaultsType
 *
 * This type is used by the <b>SiteDefaults</b> container to display the features/settings that are default for most categories on the eBay marketplace.
 * XSD Type: SiteDefaultsType
 */
class SiteDefaultsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>ListingDuration</b> field will be returned for each different listing type that is supported on the eBay marketplace. Each field will show the listing type and the identifier associated with this listing type. These IDs will be used to match the default listing duration values that are displayed in the <b>FeatureDefinitions.ListingDurations</b> containers.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingDurationReferenceType[] $listingDuration
     */
    private $listingDuration = [

    ];

    /**
     * Specifies the default site setting for whether sellers are required to specify a domestic shipping service and its associated cost when listing items. True means the shipping terms are required unless a specific category overrides this setting.
     *
     * @var bool $shippingTermsRequired
     */
    private $shippingTermsRequired = null;

    /**
     * Specifies the default site setting for whether categories allow Best Offers. A value of <code>true</code> means Best Offers are allowed site-wide, unless a specific category overrides the setting.
     *
     * @var bool $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * This field is no longer applicable as Dutch auctions are no longer available on eBay sites.
     *
     * @var bool $dutchBINEnabled
     */
    private $dutchBINEnabled = null;

    /**
     * Specifies the default site setting for whether a bidder must consent to the bid by confirming that he or she read and agrees to the terms in eBay's privacy policy.
     *
     * @var bool $userConsentRequired
     */
    private $userConsentRequired = null;

    /**
     * Indicates whether or not it is possible to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Support for this feature varies by site. Item or feedback restrictions may apply.
     *
     * @var bool $homePageFeaturedEnabled
     */
    private $homePageFeaturedEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow the ProPack feature (a feature pack). True means ProPack is allowed site-wide, unless a specific category overrides the setting.
     *
     * @var bool $proPackEnabled
     */
    private $proPackEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow the <b>BasicUpgradePack</b> feature (a feature pack). No longer allowed on any sites. Formerly, Australia site (site ID 15, abbreviation AU) only.
     *
     * @var bool $basicUpgradePackEnabled
     */
    private $basicUpgradePackEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow the ValuePack feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     *
     * @var bool $valuePackEnabled
     */
    private $valuePackEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow the ProPackPlus feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     *
     * @var bool $proPackPlusEnabled
     */
    private $proPackPlusEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow Classified Ad format listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting.
     *
     * @var string $adFormatEnabled
     */
    private $adFormatEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow counter offers for Best Offers. A value of <code>true</code> means counter offers are allowed site-wide, unless a specific category overrides the setting.
     *
     * @var bool $bestOfferCounterEnabled
     */
    private $bestOfferCounterEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow auto decline for Best Offers. A value of <code>true</code> means auto decline is allowed site-wide, unless a specific category overrides the setting.
     *
     * @var bool $bestOfferAutoDeclineEnabled
     */
    private $bestOfferAutoDeclineEnabled = null;

    /**
     * Specifies the default site setting for whether
     *  <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     *
     * @var bool $localMarketSpecialitySubscription
     */
    private $localMarketSpecialitySubscription = null;

    /**
     * Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b>
     *  feature is supported for most categories.
     *
     * @var bool $localMarketRegularSubscription
     */
    private $localMarketRegularSubscription = null;

    /**
     * Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b>
     *  feature is supported for most categories.
     *
     * @var bool $localMarketPremiumSubscription
     */
    private $localMarketPremiumSubscription = null;

    /**
     * Specifies the default site setting for whether <b>LocalMarketNonSubscription</b>
     *  feature is supported for most categories.
     *
     * @var bool $localMarketNonSubscription
     */
    private $localMarketNonSubscription = null;

    /**
     * This field is deprecated.
     *
     * @var bool $expressEnabled
     */
    private $expressEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $expressPicturesRequired
     */
    private $expressPicturesRequired = null;

    /**
     * This field is deprecated.
     *
     * @var bool $expressConditionRequired
     */
    private $expressConditionRequired = null;

    /**
     * Specifies the default site setting for whether the Minimum Reserve Price feature is supported for most categories.
     *
     * @var float $minimumReservePrice
     */
    private $minimumReservePrice = null;

    /**
     * Specifies the default site setting for whether most categories allow seller-level contact information for Classified Ad listings.
     *  <br/><br/>
     *  A value of <code>true</code> means seller-level contact information is available for Classified Ad format listings site-wide, unless a specific category overrides the setting.
     *
     * @var bool $sellerContactDetailsEnabled
     */
    private $sellerContactDetailsEnabled = null;

    /**
     * Specifies the default site setting for whether the Transaction Confirmation Request feature is supported for most categories.
     *
     * @var bool $transactionConfirmationRequestEnabled
     */
    private $transactionConfirmationRequestEnabled = null;

    /**
     * This field is is no longer applicable.
     *
     * @var bool $storeInventoryEnabled
     */
    private $storeInventoryEnabled = null;

    /**
     * This feature is no longer applicable.
     *
     * @var bool $skypeMeTransactionalEnabled
     */
    private $skypeMeTransactionalEnabled = null;

    /**
     * This feature is no longer applicable.
     *
     * @var bool $skypeMeNonTransactionalEnabled
     */
    private $skypeMeNonTransactionalEnabled = null;

    /**
     * Specifies the supported local listing distances of regular vehicles
     *  for most categories.
     *
     * @var string $localListingDistancesRegular
     */
    private $localListingDistancesRegular = null;

    /**
     * Specifies the supported local listing distances of specialty vehicles
     *  for most categories.
     *
     * @var string $localListingDistancesSpecialty
     */
    private $localListingDistancesSpecialty = null;

    /**
     * Specifies the supported local listing distances for most categories,
     *  for users who have not subscribed to either Regular or Specialty vehicles.
     *
     * @var string $localListingDistancesNonSubscription
     */
    private $localListingDistancesNonSubscription = null;

    /**
     * Indicates if the payment method should be displayed to the user
     *  for most categories. Even if enabled, checkout may or may not
     *  be enabled.
     *
     * @var string $classifiedAdPaymentMethodEnabled
     */
    private $classifiedAdPaymentMethodEnabled = null;

    /**
     * Indicates if shipping options are available for most categories.
     *
     * @var bool $classifiedAdShippingMethodEnabled
     */
    private $classifiedAdShippingMethodEnabled = null;

    /**
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories.
     *
     * @var string $classifiedAdBestOfferEnabled
     */
    private $classifiedAdBestOfferEnabled = null;

    /**
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories.
     *
     * @var bool $classifiedAdCounterOfferEnabled
     */
    private $classifiedAdCounterOfferEnabled = null;

    /**
     * Indicates whether automatic decline for Best Offers is allowed for most
     *  categories.
     *
     * @var bool $classifiedAdAutoDeclineEnabled
     */
    private $classifiedAdAutoDeclineEnabled = null;

    /**
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information.
     *
     * @var bool $classifiedAdContactByPhoneEnabled
     */
    private $classifiedAdContactByPhoneEnabled = null;

    /**
     * Indicates whether most categories support including an email address in the
     *  seller's contact information.
     *
     * @var bool $classifiedAdContactByEmailEnabled
     */
    private $classifiedAdContactByEmailEnabled = null;

    /**
     * eBay controls all forms of electronic payment methods that are avaialable to buyers, so this field is no longer applicable.
     *
     * @var bool $safePaymentRequired
     */
    private $safePaymentRequired = null;

    /**
     * Specifies the default site setting for whether the pay-per-lead feature
     *  is supported for most categories.
     *
     * @var bool $classifiedAdPayPerLeadEnabled
     */
    private $classifiedAdPayPerLeadEnabled = null;

    /**
     * The value returned in this field indicates whether most categories on the specified eBay site support listings with Item Specifics. Item Specifics enable sellers to present descriptive details of an item in a structured manner.
     *
     * @var string $itemSpecificsEnabled
     */
    private $itemSpecificsEnabled = null;

    /**
     * <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so the <code>PaisaPayEscrow</code> payment method is no longer applicable since this payment method was only supported on the eBay India site.
     *  </span>
     *
     * @var bool $paisaPayFullEscrowEnabled
     */
    private $paisaPayFullEscrowEnabled = null;

    /**
     * This field is no longer applicable.
     *
     * @var bool $iSBNIdentifierEnabled
     */
    private $iSBNIdentifierEnabled = null;

    /**
     * This field is no longer applicable.
     *
     * @var bool $uPCIdentifierEnabled
     */
    private $uPCIdentifierEnabled = null;

    /**
     * This field is no longer applicable.
     *
     * @var bool $eANIdentifierEnabled
     */
    private $eANIdentifierEnabled = null;

    /**
     * Indicates whether the category is enabled for the <b>BrandMPN</b> field for a specific item. If <code>true</code>, sellers can add <b>BrandMPN</b> for that item.
     *
     * @var bool $brandMPNIdentifierEnabled
     */
    private $brandMPNIdentifierEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow
     *  auto-accept for Best Offers for Classified Ads.
     *
     * @var bool $classifiedAdAutoAcceptEnabled
     */
    private $classifiedAdAutoAcceptEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow auto-accept for Best Offers.
     *
     * @var bool $bestOfferAutoAcceptEnabled
     */
    private $bestOfferAutoAcceptEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective sites.
     *
     * @var bool $crossBorderTradeNorthAmericaEnabled
     */
    private $crossBorderTradeNorthAmericaEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     *
     * @var bool $crossBorderTradeGBEnabled
     */
    private $crossBorderTradeGBEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     *
     * @var bool $crossBorderTradeAustraliaEnabled
     */
    private $crossBorderTradeAustraliaEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $payPalBuyerProtectionEnabled
     */
    private $payPalBuyerProtectionEnabled = null;

    /**
     * For the Australia site, if the <b>BuyerGuaranteeEnabled</b> is returned, then the default site setting is that categories allow buyer protection.
     *
     * @var bool $buyerGuaranteeEnabled
     */
    private $buyerGuaranteeEnabled = null;

    /**
     * <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so this feature is no longer applicable since it was only supported on the eBay India site.
     *  </span>
     *
     * @var string $iNEscrowWorkflowTimeline
     */
    private $iNEscrowWorkflowTimeline = null;

    /**
     * This field is deprecated.
     *
     * @var bool $combinedFixedPriceTreatmentEnabled
     */
    private $combinedFixedPriceTreatmentEnabled = null;

    /**
     * Specifies the default site setting that enables durations for "Gallery Featured".
     *
     * @var string[] $galleryFeaturedDurations
     */
    private $galleryFeaturedDurations = null;

    /**
     * This field is deprecated.
     *
     * @var bool $payPalRequired
     */
    private $payPalRequired = null;

    /**
     * Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for eBay Motors Pro users.
     *
     * @var string $eBayMotorsProAdFormatEnabled
     */
    private $eBayMotorsProAdFormatEnabled = null;

    /**
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProContactByPhoneEnabled
     */
    private $eBayMotorsProContactByPhoneEnabled = null;

    /**
     * Indicates which telephone option is enabled to contact the seller. This element is for eBay Motors Pro users.
     *
     * @var int $eBayMotorsProPhoneCount
     */
    private $eBayMotorsProPhoneCount = null;

    /**
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProContactByAddressEnabled
     */
    private $eBayMotorsProContactByAddressEnabled = null;

    /**
     * Indicates which address option is enabled to
     *  contact the seller. This element is for eBay Motors Pro users.
     *
     * @var int $eBayMotorsProStreetCount
     */
    private $eBayMotorsProStreetCount = null;

    /**
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProCompanyNameEnabled
     */
    private $eBayMotorsProCompanyNameEnabled = null;

    /**
     * Indicates whether most categories support including an email address in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProContactByEmailEnabled
     */
    private $eBayMotorsProContactByEmailEnabled = null;

    /**
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories. This element is for eBay Motors Pro users.
     *
     * @var string $eBayMotorsProBestOfferEnabled
     */
    private $eBayMotorsProBestOfferEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow
     *  auto-accept for Best Offers for Classified Ads.
     *  This element is for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProAutoAcceptEnabled
     */
    private $eBayMotorsProAutoAcceptEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow
     *  auto-decline for Best Offers for Classified Ads.
     *  This element is for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProAutoDeclineEnabled
     */
    private $eBayMotorsProAutoDeclineEnabled = null;

    /**
     * Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     *
     * @var string $eBayMotorsProPaymentMethodCheckOutEnabled
     */
    private $eBayMotorsProPaymentMethodCheckOutEnabled = null;

    /**
     * Indicates if shipping options are available for most categories.
     *  This element is for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProShippingMethodEnabled
     */
    private $eBayMotorsProShippingMethodEnabled = null;

    /**
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories. This element is for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProCounterOfferEnabled
     */
    private $eBayMotorsProCounterOfferEnabled = null;

    /**
     * Specifies the default site setting for whether most categories allow seller-
     *  level contact information for Classified Ad format listings. A value of <code>true</code>
     *  means seller-level contact information is available for Classified Ad listings
     *  site-wide, unless a specific category overrides the setting. This element is
     *  for eBay Motors Pro users.
     *
     * @var bool $eBayMotorsProSellerContactDetailsEnabled
     */
    private $eBayMotorsProSellerContactDetailsEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for Local Market dealers.
     *
     * @var string $localMarketAdFormatEnabled
     */
    private $localMarketAdFormatEnabled = null;

    /**
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @var bool $localMarketContactByPhoneEnabled
     */
    private $localMarketContactByPhoneEnabled = null;

    /**
     * Indicates which telephone option is enabled to contact the seller. This element is for Local Market dealers.
     *
     * @var int $localMarketPhoneCount
     */
    private $localMarketPhoneCount = null;

    /**
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for Local Market dealers.
     *
     * @var bool $localMarketContactByAddressEnabled
     */
    private $localMarketContactByAddressEnabled = null;

    /**
     * Indicates which address option is enabled to
     *  contact the seller. This element is for Local Market dealers.
     *
     * @var int $localMarketStreetCount
     */
    private $localMarketStreetCount = null;

    /**
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @var bool $localMarketCompanyNameEnabled
     */
    private $localMarketCompanyNameEnabled = null;

    /**
     * Indicates whether most categories support including an email address in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @var bool $localMarketContactByEmailEnabled
     */
    private $localMarketContactByEmailEnabled = null;

    /**
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories. This element is for Local Market dealers.
     *
     * @var string $localMarketBestOfferEnabled
     */
    private $localMarketBestOfferEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads. This element is for Local Market dealers.
     *
     * @var bool $localMarketAutoAcceptEnabled
     */
    private $localMarketAutoAcceptEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow auto-decline for Best Offers for Classified Ads. This element is for Local Market dealers.
     *
     * @var bool $localMarketAutoDeclineEnabled
     */
    private $localMarketAutoDeclineEnabled = null;

    /**
     * Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     *
     * @var string $localMarketPaymentMethodCheckOutEnabled
     */
    private $localMarketPaymentMethodCheckOutEnabled = null;

    /**
     * Indicates if shipping options are available for most categories.
     *  This element is for Local Market dealers.
     *
     * @var bool $localMarketShippingMethodEnabled
     */
    private $localMarketShippingMethodEnabled = null;

    /**
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories. This element is for Local Market dealers.
     *
     * @var bool $localMarketCounterOfferEnabled
     */
    private $localMarketCounterOfferEnabled = null;

    /**
     * Specifies the default site setting for whether most categories allow seller- level contact information for Classified Ad format listings. A value of <code>true</code> means seller-level contact information is available for Classified Ad format listings site-wide, unless a specific category overrides the setting. This element is for Local Market dealers.
     *
     * @var bool $localMarketSellerContactDetailsEnabled
     */
    private $localMarketSellerContactDetailsEnabled = null;

    /**
     * Indicates which telephone option is enabled to
     *  contact the seller. This element is for For Sale By Owner.
     *
     * @var int $classifiedAdPhoneCount
     */
    private $classifiedAdPhoneCount = null;

    /**
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for For Sale By Owner.
     *
     * @var bool $classifiedAdContactByAddressEnabled
     */
    private $classifiedAdContactByAddressEnabled = null;

    /**
     * Indicates which address option is enabled to
     *  contact the seller. This element is for For Sale By Owner.
     *
     * @var int $classifiedAdStreetCount
     */
    private $classifiedAdStreetCount = null;

    /**
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for For Sale By Owner.
     *
     * @var bool $classifiedAdCompanyNameEnabled
     */
    private $classifiedAdCompanyNameEnabled = null;

    /**
     * Specifies the default site setting for whether
     *  <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     *
     * @var string $specialitySubscription
     */
    private $specialitySubscription = null;

    /**
     * Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b>
     *  feature is supported for most categories.
     *
     * @var string $regularSubscription
     */
    private $regularSubscription = null;

    /**
     * Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b>
     *  feature is supported for most categories.
     *
     * @var string $premiumSubscription
     */
    private $premiumSubscription = null;

    /**
     * Specifies the supported local listing distances for most categories,
     *  for users who have not subscribed to either Regular or Specialty vehicles.
     *
     * @var string $nonSubscription
     */
    private $nonSubscription = null;

    /**
     * This field is deprecated.
     *
     * @var bool $payPalRequiredForStoreOwner
     */
    private $payPalRequiredForStoreOwner = null;

    /**
     * Defines if quantity can be revised while a listing is in semi or fully restricted mode.
     *  Applies to fixed-price listings.
     *
     * @var bool $reviseQuantityAllowed
     */
    private $reviseQuantityAllowed = null;

    /**
     * Defines if price can be revised while a listing is in semi or fully restricted mode.
     *  Applies to fixed-price listings.
     *
     * @var bool $revisePriceAllowed
     */
    private $revisePriceAllowed = null;

    /**
     * Defines if extended business seller listing durations are enabled on a given site.
     *  When the value of this element is <code>true</code>, it means the listing duration values
     *  defined in <b>StoreOwnerExtendedListingDurations</b> are applicable to fixed-price
     *  listings.
     *
     * @var bool $storeOwnerExtendedListingDurationsEnabled
     */
    private $storeOwnerExtendedListingDurationsEnabled = null;

    /**
     * Provides additional listings durations that are supported by Store Owners.
     *  The extended listing durations provided here in this element should be merged
     *  in with the baseline listing durations provided in the <b>ListingDurations</b> container.
     *
     * @var string[] $storeOwnerExtendedListingDurations
     */
    private $storeOwnerExtendedListingDurations = null;

    /**
     * Specifies the default site setting for whether a return policy is required for most categories.
     *  <br>
     *  <br>
     *  <b>For most sites:</b> If true, listings in most categories require a return policy.
     *  <br>
     *  <br>
     *  <b>For eBay Australia (AU) and US eBay Motors Parts and Accessories:</b> If true, most categories support but do not require a return policy.
     *  <br>
     *  <br>
     *  Individual categories can override the site default.
     *
     * @var bool $returnPolicyEnabled
     */
    private $returnPolicyEnabled = null;

    /**
     * Specifies the default site setting for whether a handling time (dispatch time) is
     *  required for most categories.
     *  <br>
     *  <br>
     *  The handling time is the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time).
     *  <br>
     *  <br>
     *  If <code>false</code>, most listings on the site require a handling time (see <b>DispatchTimeMax</b> in <b>AddItem</b>) when flat or calculated shipping is specified. (A handling time is not required for local pickup or for freight shipping.)
     *  <br>
     *  <br>
     *  For a list of the handling time values allowed for each site, use <b>DispatchTimeMaxDetails</b> in <b>GeteBayDetails</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Although the field name ends with "Enabled", a value of <code>true</code> means that a handling time is NOT required, and value of <code>false</code> means that a handling time IS required.</span>
     *
     * @var bool $handlingTimeEnabled
     */
    private $handlingTimeEnabled = null;

    /**
     * Specifies the default site setting for whether a maximum flat rate shipping cost
     *  is imposed for listings in most categories on the site.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $maxFlatShippingCost
     */
    private $maxFlatShippingCost = null;

    /**
     * Specifies the default site setting for whether a maximum flat rate shipping cost
     *  is imposed on sellers who list in categories on this site yet are shipping an
     *  item into the country of this site from another country.
     *
     * @var bool $maxFlatShippingCostCBTExempt
     */
    private $maxFlatShippingCostCBTExempt = null;

    /**
     * Returns the applicable max cap per shipping cost for shipping service group1
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $group1MaxFlatShippingCost
     */
    private $group1MaxFlatShippingCost = null;

    /**
     * Returns the applicable max cap per shipping cost for shipping service group2
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $group2MaxFlatShippingCost
     */
    private $group2MaxFlatShippingCost = null;

    /**
     * Returns the applicable max cap per shipping cost for shipping service group3
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $group3MaxFlatShippingCost
     */
    private $group3MaxFlatShippingCost = null;

    /**
     * Indicates the acceptable payment methods that can be used when using the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls for an item listed on the corresponding site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @var string[] $paymentMethod
     */
    private $paymentMethod = [

    ];

    /**
     * Specifies the default site setting for whether categories support multi-variation listings. If true, you can pass in Item.Variations in the AddFixedPriceItem family of calls when you list in categories that support this feature.
     *  <br>
     *  <br>
     *  Multi-variation listings contain items that are logically the same product, but that vary in their manufacturing details or packaging. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations.
     *
     * @var bool $variationsEnabled
     */
    private $variationsEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var string $attributeConversionEnabled
     */
    private $attributeConversionEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow free, automatic upgrades for Gallery Plus, which enhances pictures in search results.
     *
     * @var bool $freeGalleryPlusEnabled
     */
    private $freeGalleryPlusEnabled = null;

    /**
     * Specifies the default site setting for whether categories allow free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures.
     *
     * @var bool $freePicturePackEnabled
     */
    private $freePicturePackEnabled = null;

    /**
     * Specifies the default site setting for whether listing items with parts compatibility is supported by application (<code>ByApplication</code>), by specification (<code>BySpecification</code>), or not at all (<code>Disabled</code>). A given category cannot support both types of parts compatibility.
     *  <br><br>
     *  Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  Parts Compatibility is supported in limited Parts & Accessories categories for the US eBay Motors site only.
     *
     * @var string $itemCompatibilityEnabled
     */
    private $itemCompatibilityEnabled = null;

    /**
     * Specifies the default site setting for whether parts compatibility information is required when listing items, and if so, how many compatibilities must be specified. If the value is "0," you are not required to specify compatibility information. A value greater than "0" indicates that listing with parts compatibity is mandatory and the listing must contain the specified number of compatibilities at a minimum.
     *  <br><br>
     *  Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed witih parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  This field applies only to listings in which compatibility is specified by application. Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies. This can be done automatically by listing with a catalog product that supports parts compatibility, or manually, using <b class="con">Item.ItemCompatibilityList</b> when listing or revising an item.
     *
     * @var int $minItemCompatibility
     */
    private $minItemCompatibility = null;

    /**
     * Specifies the default site setting for the maximum number of compatible applications allowed per item when adding or revising items with parts compatibility.
     *  <br><br>
     *  Parts compatibility listings contain structured information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  This field applies only to listings in which compatibility is specified by application manually when listing or revising an item. Entering parts compatibility by application manually specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies, using <b class="con">Item.ItemCompatibilityList</b>.
     *
     * @var int $maxItemCompatibility
     */
    private $maxItemCompatibility = null;

    /**
     * Specifies the default site setting for whether most categories support (or require) <b>Item.ConditionID</b> in listings. Use this to determine whether to use <b>ConditionID</b> in <b>AddItem</b> and related calls. See <b>ConditionValues</b> for a list of valid IDs.
     *  <br><br>
     *  In general, this is set to <code>Disabled</code>, and meta-categories
     *  (level 1 categories) define their own default settings.
     *
     * @var string $conditionEnabled
     */
    private $conditionEnabled = null;

    /**
     * This container shows the site default item condition values. Individual leaf categories define their own default set of item condition values and always override this list.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ConditionValuesType $conditionValues
     */
    private $conditionValues = null;

    /**
     * This container shows the site default special item condition values, such as <b>Certified - Refurbished</b> condition (condition ID 2000), <b>Excellent - Refurbished</b> condition (condition ID 2010), <b>Very Good - Refurbished</b> condition (condition ID 2020), and <b>Good - Refurbished</b> condition (condition ID 2030). A seller must be pre-qualified by eBay to list items with the any of these refurbished item conditions.
     *  <br/><br/>
     *  All other item conditions supported by a category will be returned in the <b>ConditionValues</b> container instead. Individual leaf categories define their own default set of item condition values and always override this list.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ConditionValuesType $specialFeatures
     */
    private $specialFeatures = null;

    /**
     * Specifies the default site setting for whether most categories follow specific rules associated with "value categories".
     *  <br>
     *  <br>
     *  Some eBay sites may select a few categories and designate them as "value categories". These are typically selected from categories where buyers can find great deals. (Not all categories with great deals are designated as value categories.) This designation can change over time.
     *  <br>
     *  <br>
     *  While a category is designated as a value category (i.e., when <b>ValueCategory</b> = <code>true</code>), it is subject to the following rule: Items in value categories can only be listed in one category.
     *  <br>
     *  <br>
     *  For example, if you attempt to list in two categories and the <b>PrimaryCategory</b> or <b>SecondaryCategory</b> is a value category, then eBay drops the <b>SecondaryCategory</b> and lists the item in the <b>PrimaryCategory</b> only. Similarly, if you attempt to add a secondary category to an existing listing, or you change the category for an existing listing, and if the primary or secondary category is a value category, then eBay drops the secondary category.
     *
     * @var bool $valueCategory
     */
    private $valueCategory = null;

    /**
     * Specifies the default site setting for whether most categories support creating/revising listings based off an eBay catalog product.
     *
     * @var string $productCreationEnabled
     */
    private $productCreationEnabled = null;

    /**
     * This enumeration value indicates whether or not most categories on the specified eBay site support the use of European Article Numbers (EANs) to help create a listing in an <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API call.
     *  <b></b>
     *  <ul>
     *  <li>A value of <code>Disabled</code> indicates that EANs cannot be used for most categories on the specified eBay site. </li>
     *  <li>A value of <code>Enabled</code> indicates that EANs can be used for most categories on the specified eBay site. </li>
     *  <li>A value of <code>Required</code> indicates that an EAN is required for most categories on the specified eBay site. </li>
     *  </ul>
     *
     * @var string $eANEnabled
     */
    private $eANEnabled = null;

    /**
     * This enumeration value indicates whether or not most categories on the specified eBay site support the use of International Standard Book Numbers (ISBNs) to help create a listing in an <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API call.
     *  <br/><br/>
     *  A value of <code>Disabled</code> indicates that ISBNs cannot be used for most categories on the specified eBay site, a value of <code>Enabled</code> indicates that ISBNs can be used for most categories on the specified eBay site, and a value of <code>Required</code> indicates that an ISBN is required for most categories on the specified eBay site.
     *
     * @var string $iSBNEnabled
     */
    private $iSBNEnabled = null;

    /**
     * This enumeration value indicates whether or not most categories on
     *  the specified eBay site support the use of Universal Product Codes
     *  (UPCs) to help create a listing in an
     *  Add/Revise/Relist/Verify API call. A value of
     *  <code>Disabled</code> indicates that UPCs cannot be
     *  used for most categories on the specified eBay site, a value of
     *  <code>Enabled</code> indicates that UPCs can be used
     *  for most categories on the specified eBay site, and a value of
     *  <code>Required</code> indicates that a UPC is required
     *  for most categories on the specified eBay site.
     *
     * @var string $uPCEnabled
     */
    private $uPCEnabled = null;

    /**
     * Specifies the maximum fitment count. Sellers can provide up to
     *  1000 fitments at the lowest level of granularity.
     *
     * @var int $maxGranularFitmentCount
     */
    private $maxGranularFitmentCount = null;

    /**
     * Indicates the type of vehicle; car, truck, boat, or motorcycle.
     *
     * @var string $compatibleVehicleType
     */
    private $compatibleVehicleType = null;

    /**
     * This field is deprecated
     *
     * @var string $paymentOptionsGroup
     */
    private $paymentOptionsGroup = null;

    /**
     * Specifies what categories the Shipping profile is applicable to.
     *  Only returned when this value (or this category's setting)
     *  overrides the value inherited from the category's parent.
     *
     * @var string $shippingProfileCategoryGroup
     */
    private $shippingProfileCategoryGroup = null;

    /**
     * Specifies what categories the Payment profile is applicable to.
     *
     * @var string $paymentProfileCategoryGroup
     */
    private $paymentProfileCategoryGroup = null;

    /**
     * Specifies what categories the Return Policy profile is applicable to.
     *
     * @var string $returnPolicyProfileCategoryGroup
     */
    private $returnPolicyProfileCategoryGroup = null;

    /**
     * After EOL Attributes, VIN will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports VIN.
     *
     * @var bool $vINSupported
     */
    private $vINSupported = null;

    /**
     * After EOL Attributes, VRM will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports VRM.
     *
     * @var bool $vRMSupported
     */
    private $vRMSupported = null;

    /**
     * After EOL Attributes, Seller Provided Title will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports Seller Provided Title.
     *
     * @var bool $sellerProvidedTitleSupported
     */
    private $sellerProvidedTitleSupported = null;

    /**
     * After EOL Attributes, Deposit will no longer be supported as primary attributes,
     *  rather consumers should use new tags. This feature helps consumers in identifying
     *  if category supports Deposit.
     *
     * @var bool $depositSupported
     */
    private $depositSupported = null;

    /**
     * Indicates whether or not the the specified category is enabled for Global Shipping Program.
     *
     * @var bool $globalShippingEnabled
     */
    private $globalShippingEnabled = null;

    /**
     * Indicates whether most categories on the specified eBay site support the Boat and Motorcycle Parts Compatibility feature. The Boats Parts Compatibility feature allows sellers to list their boats' parts and accessories items with parts compatibility name-value pairs specific to boats, and allows potential buyers to search for these items using parts compatibility search fields.
     *
     * @var bool $additionalCompatibilityEnabled
     */
    private $additionalCompatibilityEnabled = null;

    /**
     * Indicates whether most categories on the specified eBay site
     *  support the "Click and Collect" feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available.
     *  <br/><br/>
     *  The "Click and Collect" feature is only available to large merchants on the UK and Australia sites. The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @var bool $pickupDropOffEnabled
     */
    private $pickupDropOffEnabled = null;

    /**
     * This field indicates whether or not most categories on the specified eBay site support digital gift cards.
     *  <br/><br/>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time</li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="http://pages.ebay.com/help/policies/gift.html">Gift cards policy</a> Help page.
     *
     * @var bool $digitalGoodDeliveryEnabled
     */
    private $digitalGoodDeliveryEnabled = null;

    /**
     * This field is returned as <code>true</code> if one or more categories on an eBay site
     *  support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API
     *  call to identify which motorcycles and/or scooters are compatible with a motor
     *  vehicle part or accessory. ePIDs can only be used to identify motorcycles and
     *  scooters on the Germany and UK sites. <br/><br/> For more
     *  information on using an ePID to identify a compatible motorcycle or scooter
     *  through an Add/Revise/Relist API call on the Germany or UK site, see the
     *  documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request
     *  .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name
     *  ValueList</a> container.
     *
     * @var bool $epidSupported
     */
    private $epidSupported = null;

    /**
     * This field is returned as <code>true</code> if one or more categories on an eBay site
     *  support the use of a K Type vehicle number in an Add/Revise/Relist API call
     *  to identify which cars and/or trucks are compatible with a motor vehicle part
     *  or accessory. K type vehicle numbers can only be used to identify cars and
     *  trucks on the Germany site. <br/><br/> For more information on
     *  using a K Type vehicle number to identify a compatible car or truck through an
     *  Add/Revise/Relist API call on the Germany site, see the documentation for the
     *  <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request
     *  .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name
     *  ValueList</a> container.
     *
     * @var bool $kTypeSupported
     */
    private $kTypeSupported = null;

    /**
     * This field is deprecated. No eBay categories require listings based on an eBay catalog product.
     *
     * @var string $productRequiredEnabled
     */
    private $productRequiredEnabled = null;

    /**
     * This field returns the options a seller has for accepting or not accepting returns from domestic buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var string[] $domesticReturnsAcceptedValues
     */
    private $domesticReturnsAcceptedValues = null;

    /**
     * This field returns the options a seller has for accepting or not accepting returns from international buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var string[] $internationalReturnsAcceptedValues
     */
    private $internationalReturnsAcceptedValues = null;

    /**
     * This field returns the options a seller has for specifying the return period for returns from domestic buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var string[] $domesticReturnsDurationValues
     */
    private $domesticReturnsDurationValues = null;

    /**
     * This field returns the options a seller has for specifying the return period for returns from international buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var string[] $internationalReturnsDurationValues
     */
    private $internationalReturnsDurationValues = null;

    /**
     * This field returns the options a seller has for specifying who pays the return shipping cost for domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var string[] $domesticReturnsShipmentPayeeValues
     */
    private $domesticReturnsShipmentPayeeValues = null;

    /**
     * This field returns the options a seller has for specifying who pays the return shipping cost for international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var string[] $internationalReturnsShipmentPayeeValues
     */
    private $internationalReturnsShipmentPayeeValues = null;

    /**
     * In US, sellers can offer an item replacement in addition to offering money-back for domestic returns. This field returns the options a seller has for specifying how they will handle domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var string[] $domesticRefundMethodValues
     */
    private $domesticRefundMethodValues = null;

    /**
     * In US, sellers can offer an item replacement in addition to offering money-back for international returns. This field returns the options a seller has for specifying how they will handle international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var string[] $internationalRefundMethodValues
     */
    private $internationalRefundMethodValues = null;

    /**
     * In some EU countries, sellers are legally required to describe the return policy they offer. This field returns a flag that indicates whether or not the seller can specify their return-policy details in the associated marketplace.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @var bool $returnPolicyDescriptionEnabled
     */
    private $returnPolicyDescriptionEnabled = null;

    /**
     * Adds as listingDuration
     *
     * A <b>ListingDuration</b> field will be returned for each different listing type that is supported on the eBay marketplace. Each field will show the listing type and the identifier associated with this listing type. These IDs will be used to match the default listing duration values that are displayed in the <b>FeatureDefinitions.ListingDurations</b> containers.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ListingDurationReferenceType $listingDuration
     */
    public function addToListingDuration(\Nogrod\eBaySDK\MerchantData\ListingDurationReferenceType $listingDuration)
    {
        $this->listingDuration[] = $listingDuration;
        return $this;
    }

    /**
     * isset listingDuration
     *
     * A <b>ListingDuration</b> field will be returned for each different listing type that is supported on the eBay marketplace. Each field will show the listing type and the identifier associated with this listing type. These IDs will be used to match the default listing duration values that are displayed in the <b>FeatureDefinitions.ListingDurations</b> containers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingDuration($index)
    {
        return isset($this->listingDuration[$index]);
    }

    /**
     * unset listingDuration
     *
     * A <b>ListingDuration</b> field will be returned for each different listing type that is supported on the eBay marketplace. Each field will show the listing type and the identifier associated with this listing type. These IDs will be used to match the default listing duration values that are displayed in the <b>FeatureDefinitions.ListingDurations</b> containers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingDuration($index)
    {
        unset($this->listingDuration[$index]);
    }

    /**
     * Gets as listingDuration
     *
     * A <b>ListingDuration</b> field will be returned for each different listing type that is supported on the eBay marketplace. Each field will show the listing type and the identifier associated with this listing type. These IDs will be used to match the default listing duration values that are displayed in the <b>FeatureDefinitions.ListingDurations</b> containers.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ListingDurationReferenceType[]
     */
    public function getListingDuration()
    {
        return $this->listingDuration;
    }

    /**
     * Sets a new listingDuration
     *
     * A <b>ListingDuration</b> field will be returned for each different listing type that is supported on the eBay marketplace. Each field will show the listing type and the identifier associated with this listing type. These IDs will be used to match the default listing duration values that are displayed in the <b>FeatureDefinitions.ListingDurations</b> containers.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ListingDurationReferenceType[] $listingDuration
     * @return self
     */
    public function setListingDuration(array $listingDuration)
    {
        $this->listingDuration = $listingDuration;
        return $this;
    }

    /**
     * Gets as shippingTermsRequired
     *
     * Specifies the default site setting for whether sellers are required to specify a domestic shipping service and its associated cost when listing items. True means the shipping terms are required unless a specific category overrides this setting.
     *
     * @return bool
     */
    public function getShippingTermsRequired()
    {
        return $this->shippingTermsRequired;
    }

    /**
     * Sets a new shippingTermsRequired
     *
     * Specifies the default site setting for whether sellers are required to specify a domestic shipping service and its associated cost when listing items. True means the shipping terms are required unless a specific category overrides this setting.
     *
     * @param bool $shippingTermsRequired
     * @return self
     */
    public function setShippingTermsRequired($shippingTermsRequired)
    {
        $this->shippingTermsRequired = $shippingTermsRequired;
        return $this;
    }

    /**
     * Gets as bestOfferEnabled
     *
     * Specifies the default site setting for whether categories allow Best Offers. A value of <code>true</code> means Best Offers are allowed site-wide, unless a specific category overrides the setting.
     *
     * @return bool
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * Sets a new bestOfferEnabled
     *
     * Specifies the default site setting for whether categories allow Best Offers. A value of <code>true</code> means Best Offers are allowed site-wide, unless a specific category overrides the setting.
     *
     * @param bool $bestOfferEnabled
     * @return self
     */
    public function setBestOfferEnabled($bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }

    /**
     * Gets as dutchBINEnabled
     *
     * This field is no longer applicable as Dutch auctions are no longer available on eBay sites.
     *
     * @return bool
     */
    public function getDutchBINEnabled()
    {
        return $this->dutchBINEnabled;
    }

    /**
     * Sets a new dutchBINEnabled
     *
     * This field is no longer applicable as Dutch auctions are no longer available on eBay sites.
     *
     * @param bool $dutchBINEnabled
     * @return self
     */
    public function setDutchBINEnabled($dutchBINEnabled)
    {
        $this->dutchBINEnabled = $dutchBINEnabled;
        return $this;
    }

    /**
     * Gets as userConsentRequired
     *
     * Specifies the default site setting for whether a bidder must consent to the bid by confirming that he or she read and agrees to the terms in eBay's privacy policy.
     *
     * @return bool
     */
    public function getUserConsentRequired()
    {
        return $this->userConsentRequired;
    }

    /**
     * Sets a new userConsentRequired
     *
     * Specifies the default site setting for whether a bidder must consent to the bid by confirming that he or she read and agrees to the terms in eBay's privacy policy.
     *
     * @param bool $userConsentRequired
     * @return self
     */
    public function setUserConsentRequired($userConsentRequired)
    {
        $this->userConsentRequired = $userConsentRequired;
        return $this;
    }

    /**
     * Gets as homePageFeaturedEnabled
     *
     * Indicates whether or not it is possible to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Support for this feature varies by site. Item or feedback restrictions may apply.
     *
     * @return bool
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->homePageFeaturedEnabled;
    }

    /**
     * Sets a new homePageFeaturedEnabled
     *
     * Indicates whether or not it is possible to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Support for this feature varies by site. Item or feedback restrictions may apply.
     *
     * @param bool $homePageFeaturedEnabled
     * @return self
     */
    public function setHomePageFeaturedEnabled($homePageFeaturedEnabled)
    {
        $this->homePageFeaturedEnabled = $homePageFeaturedEnabled;
        return $this;
    }

    /**
     * Gets as proPackEnabled
     *
     * Specifies the default site setting for whether categories allow the ProPack feature (a feature pack). True means ProPack is allowed site-wide, unless a specific category overrides the setting.
     *
     * @return bool
     */
    public function getProPackEnabled()
    {
        return $this->proPackEnabled;
    }

    /**
     * Sets a new proPackEnabled
     *
     * Specifies the default site setting for whether categories allow the ProPack feature (a feature pack). True means ProPack is allowed site-wide, unless a specific category overrides the setting.
     *
     * @param bool $proPackEnabled
     * @return self
     */
    public function setProPackEnabled($proPackEnabled)
    {
        $this->proPackEnabled = $proPackEnabled;
        return $this;
    }

    /**
     * Gets as basicUpgradePackEnabled
     *
     * Specifies the default site setting for whether categories allow the <b>BasicUpgradePack</b> feature (a feature pack). No longer allowed on any sites. Formerly, Australia site (site ID 15, abbreviation AU) only.
     *
     * @return bool
     */
    public function getBasicUpgradePackEnabled()
    {
        return $this->basicUpgradePackEnabled;
    }

    /**
     * Sets a new basicUpgradePackEnabled
     *
     * Specifies the default site setting for whether categories allow the <b>BasicUpgradePack</b> feature (a feature pack). No longer allowed on any sites. Formerly, Australia site (site ID 15, abbreviation AU) only.
     *
     * @param bool $basicUpgradePackEnabled
     * @return self
     */
    public function setBasicUpgradePackEnabled($basicUpgradePackEnabled)
    {
        $this->basicUpgradePackEnabled = $basicUpgradePackEnabled;
        return $this;
    }

    /**
     * Gets as valuePackEnabled
     *
     * Specifies the default site setting for whether categories allow the ValuePack feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     *
     * @return bool
     */
    public function getValuePackEnabled()
    {
        return $this->valuePackEnabled;
    }

    /**
     * Sets a new valuePackEnabled
     *
     * Specifies the default site setting for whether categories allow the ValuePack feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     *
     * @param bool $valuePackEnabled
     * @return self
     */
    public function setValuePackEnabled($valuePackEnabled)
    {
        $this->valuePackEnabled = $valuePackEnabled;
        return $this;
    }

    /**
     * Gets as proPackPlusEnabled
     *
     * Specifies the default site setting for whether categories allow the ProPackPlus feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     *
     * @return bool
     */
    public function getProPackPlusEnabled()
    {
        return $this->proPackPlusEnabled;
    }

    /**
     * Sets a new proPackPlusEnabled
     *
     * Specifies the default site setting for whether categories allow the ProPackPlus feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     *
     * @param bool $proPackPlusEnabled
     * @return self
     */
    public function setProPackPlusEnabled($proPackPlusEnabled)
    {
        $this->proPackPlusEnabled = $proPackPlusEnabled;
        return $this;
    }

    /**
     * Gets as adFormatEnabled
     *
     * Specifies the default site setting for whether categories allow Classified Ad format listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting.
     *
     * @return string
     */
    public function getAdFormatEnabled()
    {
        return $this->adFormatEnabled;
    }

    /**
     * Sets a new adFormatEnabled
     *
     * Specifies the default site setting for whether categories allow Classified Ad format listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting.
     *
     * @param string $adFormatEnabled
     * @return self
     */
    public function setAdFormatEnabled($adFormatEnabled)
    {
        $this->adFormatEnabled = $adFormatEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferCounterEnabled
     *
     * Specifies the default site setting for whether categories allow counter offers for Best Offers. A value of <code>true</code> means counter offers are allowed site-wide, unless a specific category overrides the setting.
     *
     * @return bool
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->bestOfferCounterEnabled;
    }

    /**
     * Sets a new bestOfferCounterEnabled
     *
     * Specifies the default site setting for whether categories allow counter offers for Best Offers. A value of <code>true</code> means counter offers are allowed site-wide, unless a specific category overrides the setting.
     *
     * @param bool $bestOfferCounterEnabled
     * @return self
     */
    public function setBestOfferCounterEnabled($bestOfferCounterEnabled)
    {
        $this->bestOfferCounterEnabled = $bestOfferCounterEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferAutoDeclineEnabled
     *
     * Specifies the default site setting for whether categories allow auto decline for Best Offers. A value of <code>true</code> means auto decline is allowed site-wide, unless a specific category overrides the setting.
     *
     * @return bool
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->bestOfferAutoDeclineEnabled;
    }

    /**
     * Sets a new bestOfferAutoDeclineEnabled
     *
     * Specifies the default site setting for whether categories allow auto decline for Best Offers. A value of <code>true</code> means auto decline is allowed site-wide, unless a specific category overrides the setting.
     *
     * @param bool $bestOfferAutoDeclineEnabled
     * @return self
     */
    public function setBestOfferAutoDeclineEnabled($bestOfferAutoDeclineEnabled)
    {
        $this->bestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as localMarketSpecialitySubscription
     *
     * Specifies the default site setting for whether
     *  <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     *
     * @return bool
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->localMarketSpecialitySubscription;
    }

    /**
     * Sets a new localMarketSpecialitySubscription
     *
     * Specifies the default site setting for whether
     *  <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     *
     * @param bool $localMarketSpecialitySubscription
     * @return self
     */
    public function setLocalMarketSpecialitySubscription($localMarketSpecialitySubscription)
    {
        $this->localMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        return $this;
    }

    /**
     * Gets as localMarketRegularSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b>
     *  feature is supported for most categories.
     *
     * @return bool
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->localMarketRegularSubscription;
    }

    /**
     * Sets a new localMarketRegularSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b>
     *  feature is supported for most categories.
     *
     * @param bool $localMarketRegularSubscription
     * @return self
     */
    public function setLocalMarketRegularSubscription($localMarketRegularSubscription)
    {
        $this->localMarketRegularSubscription = $localMarketRegularSubscription;
        return $this;
    }

    /**
     * Gets as localMarketPremiumSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b>
     *  feature is supported for most categories.
     *
     * @return bool
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->localMarketPremiumSubscription;
    }

    /**
     * Sets a new localMarketPremiumSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b>
     *  feature is supported for most categories.
     *
     * @param bool $localMarketPremiumSubscription
     * @return self
     */
    public function setLocalMarketPremiumSubscription($localMarketPremiumSubscription)
    {
        $this->localMarketPremiumSubscription = $localMarketPremiumSubscription;
        return $this;
    }

    /**
     * Gets as localMarketNonSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketNonSubscription</b>
     *  feature is supported for most categories.
     *
     * @return bool
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->localMarketNonSubscription;
    }

    /**
     * Sets a new localMarketNonSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketNonSubscription</b>
     *  feature is supported for most categories.
     *
     * @param bool $localMarketNonSubscription
     * @return self
     */
    public function setLocalMarketNonSubscription($localMarketNonSubscription)
    {
        $this->localMarketNonSubscription = $localMarketNonSubscription;
        return $this;
    }

    /**
     * Gets as expressEnabled
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getExpressEnabled()
    {
        return $this->expressEnabled;
    }

    /**
     * Sets a new expressEnabled
     *
     * This field is deprecated.
     *
     * @param bool $expressEnabled
     * @return self
     */
    public function setExpressEnabled($expressEnabled)
    {
        $this->expressEnabled = $expressEnabled;
        return $this;
    }

    /**
     * Gets as expressPicturesRequired
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getExpressPicturesRequired()
    {
        return $this->expressPicturesRequired;
    }

    /**
     * Sets a new expressPicturesRequired
     *
     * This field is deprecated.
     *
     * @param bool $expressPicturesRequired
     * @return self
     */
    public function setExpressPicturesRequired($expressPicturesRequired)
    {
        $this->expressPicturesRequired = $expressPicturesRequired;
        return $this;
    }

    /**
     * Gets as expressConditionRequired
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getExpressConditionRequired()
    {
        return $this->expressConditionRequired;
    }

    /**
     * Sets a new expressConditionRequired
     *
     * This field is deprecated.
     *
     * @param bool $expressConditionRequired
     * @return self
     */
    public function setExpressConditionRequired($expressConditionRequired)
    {
        $this->expressConditionRequired = $expressConditionRequired;
        return $this;
    }

    /**
     * Gets as minimumReservePrice
     *
     * Specifies the default site setting for whether the Minimum Reserve Price feature is supported for most categories.
     *
     * @return float
     */
    public function getMinimumReservePrice()
    {
        return $this->minimumReservePrice;
    }

    /**
     * Sets a new minimumReservePrice
     *
     * Specifies the default site setting for whether the Minimum Reserve Price feature is supported for most categories.
     *
     * @param float $minimumReservePrice
     * @return self
     */
    public function setMinimumReservePrice($minimumReservePrice)
    {
        $this->minimumReservePrice = $minimumReservePrice;
        return $this;
    }

    /**
     * Gets as sellerContactDetailsEnabled
     *
     * Specifies the default site setting for whether most categories allow seller-level contact information for Classified Ad listings.
     *  <br/><br/>
     *  A value of <code>true</code> means seller-level contact information is available for Classified Ad format listings site-wide, unless a specific category overrides the setting.
     *
     * @return bool
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->sellerContactDetailsEnabled;
    }

    /**
     * Sets a new sellerContactDetailsEnabled
     *
     * Specifies the default site setting for whether most categories allow seller-level contact information for Classified Ad listings.
     *  <br/><br/>
     *  A value of <code>true</code> means seller-level contact information is available for Classified Ad format listings site-wide, unless a specific category overrides the setting.
     *
     * @param bool $sellerContactDetailsEnabled
     * @return self
     */
    public function setSellerContactDetailsEnabled($sellerContactDetailsEnabled)
    {
        $this->sellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as transactionConfirmationRequestEnabled
     *
     * Specifies the default site setting for whether the Transaction Confirmation Request feature is supported for most categories.
     *
     * @return bool
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->transactionConfirmationRequestEnabled;
    }

    /**
     * Sets a new transactionConfirmationRequestEnabled
     *
     * Specifies the default site setting for whether the Transaction Confirmation Request feature is supported for most categories.
     *
     * @param bool $transactionConfirmationRequestEnabled
     * @return self
     */
    public function setTransactionConfirmationRequestEnabled($transactionConfirmationRequestEnabled)
    {
        $this->transactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        return $this;
    }

    /**
     * Gets as storeInventoryEnabled
     *
     * This field is is no longer applicable.
     *
     * @return bool
     */
    public function getStoreInventoryEnabled()
    {
        return $this->storeInventoryEnabled;
    }

    /**
     * Sets a new storeInventoryEnabled
     *
     * This field is is no longer applicable.
     *
     * @param bool $storeInventoryEnabled
     * @return self
     */
    public function setStoreInventoryEnabled($storeInventoryEnabled)
    {
        $this->storeInventoryEnabled = $storeInventoryEnabled;
        return $this;
    }

    /**
     * Gets as skypeMeTransactionalEnabled
     *
     * This feature is no longer applicable.
     *
     * @return bool
     */
    public function getSkypeMeTransactionalEnabled()
    {
        return $this->skypeMeTransactionalEnabled;
    }

    /**
     * Sets a new skypeMeTransactionalEnabled
     *
     * This feature is no longer applicable.
     *
     * @param bool $skypeMeTransactionalEnabled
     * @return self
     */
    public function setSkypeMeTransactionalEnabled($skypeMeTransactionalEnabled)
    {
        $this->skypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        return $this;
    }

    /**
     * Gets as skypeMeNonTransactionalEnabled
     *
     * This feature is no longer applicable.
     *
     * @return bool
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
        return $this->skypeMeNonTransactionalEnabled;
    }

    /**
     * Sets a new skypeMeNonTransactionalEnabled
     *
     * This feature is no longer applicable.
     *
     * @param bool $skypeMeNonTransactionalEnabled
     * @return self
     */
    public function setSkypeMeNonTransactionalEnabled($skypeMeNonTransactionalEnabled)
    {
        $this->skypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        return $this;
    }

    /**
     * Gets as localListingDistancesRegular
     *
     * Specifies the supported local listing distances of regular vehicles
     *  for most categories.
     *
     * @return string
     */
    public function getLocalListingDistancesRegular()
    {
        return $this->localListingDistancesRegular;
    }

    /**
     * Sets a new localListingDistancesRegular
     *
     * Specifies the supported local listing distances of regular vehicles
     *  for most categories.
     *
     * @param string $localListingDistancesRegular
     * @return self
     */
    public function setLocalListingDistancesRegular($localListingDistancesRegular)
    {
        $this->localListingDistancesRegular = $localListingDistancesRegular;
        return $this;
    }

    /**
     * Gets as localListingDistancesSpecialty
     *
     * Specifies the supported local listing distances of specialty vehicles
     *  for most categories.
     *
     * @return string
     */
    public function getLocalListingDistancesSpecialty()
    {
        return $this->localListingDistancesSpecialty;
    }

    /**
     * Sets a new localListingDistancesSpecialty
     *
     * Specifies the supported local listing distances of specialty vehicles
     *  for most categories.
     *
     * @param string $localListingDistancesSpecialty
     * @return self
     */
    public function setLocalListingDistancesSpecialty($localListingDistancesSpecialty)
    {
        $this->localListingDistancesSpecialty = $localListingDistancesSpecialty;
        return $this;
    }

    /**
     * Gets as localListingDistancesNonSubscription
     *
     * Specifies the supported local listing distances for most categories,
     *  for users who have not subscribed to either Regular or Specialty vehicles.
     *
     * @return string
     */
    public function getLocalListingDistancesNonSubscription()
    {
        return $this->localListingDistancesNonSubscription;
    }

    /**
     * Sets a new localListingDistancesNonSubscription
     *
     * Specifies the supported local listing distances for most categories,
     *  for users who have not subscribed to either Regular or Specialty vehicles.
     *
     * @param string $localListingDistancesNonSubscription
     * @return self
     */
    public function setLocalListingDistancesNonSubscription($localListingDistancesNonSubscription)
    {
        $this->localListingDistancesNonSubscription = $localListingDistancesNonSubscription;
        return $this;
    }

    /**
     * Gets as classifiedAdPaymentMethodEnabled
     *
     * Indicates if the payment method should be displayed to the user
     *  for most categories. Even if enabled, checkout may or may not
     *  be enabled.
     *
     * @return string
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->classifiedAdPaymentMethodEnabled;
    }

    /**
     * Sets a new classifiedAdPaymentMethodEnabled
     *
     * Indicates if the payment method should be displayed to the user
     *  for most categories. Even if enabled, checkout may or may not
     *  be enabled.
     *
     * @param string $classifiedAdPaymentMethodEnabled
     * @return self
     */
    public function setClassifiedAdPaymentMethodEnabled($classifiedAdPaymentMethodEnabled)
    {
        $this->classifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdShippingMethodEnabled
     *
     * Indicates if shipping options are available for most categories.
     *
     * @return bool
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->classifiedAdShippingMethodEnabled;
    }

    /**
     * Sets a new classifiedAdShippingMethodEnabled
     *
     * Indicates if shipping options are available for most categories.
     *
     * @param bool $classifiedAdShippingMethodEnabled
     * @return self
     */
    public function setClassifiedAdShippingMethodEnabled($classifiedAdShippingMethodEnabled)
    {
        $this->classifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdBestOfferEnabled
     *
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories.
     *
     * @return string
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->classifiedAdBestOfferEnabled;
    }

    /**
     * Sets a new classifiedAdBestOfferEnabled
     *
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories.
     *
     * @param string $classifiedAdBestOfferEnabled
     * @return self
     */
    public function setClassifiedAdBestOfferEnabled($classifiedAdBestOfferEnabled)
    {
        $this->classifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdCounterOfferEnabled
     *
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories.
     *
     * @return bool
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->classifiedAdCounterOfferEnabled;
    }

    /**
     * Sets a new classifiedAdCounterOfferEnabled
     *
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories.
     *
     * @param bool $classifiedAdCounterOfferEnabled
     * @return self
     */
    public function setClassifiedAdCounterOfferEnabled($classifiedAdCounterOfferEnabled)
    {
        $this->classifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdAutoDeclineEnabled
     *
     * Indicates whether automatic decline for Best Offers is allowed for most
     *  categories.
     *
     * @return bool
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->classifiedAdAutoDeclineEnabled;
    }

    /**
     * Sets a new classifiedAdAutoDeclineEnabled
     *
     * Indicates whether automatic decline for Best Offers is allowed for most
     *  categories.
     *
     * @param bool $classifiedAdAutoDeclineEnabled
     * @return self
     */
    public function setClassifiedAdAutoDeclineEnabled($classifiedAdAutoDeclineEnabled)
    {
        $this->classifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByPhoneEnabled
     *
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information.
     *
     * @return bool
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->classifiedAdContactByPhoneEnabled;
    }

    /**
     * Sets a new classifiedAdContactByPhoneEnabled
     *
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information.
     *
     * @param bool $classifiedAdContactByPhoneEnabled
     * @return self
     */
    public function setClassifiedAdContactByPhoneEnabled($classifiedAdContactByPhoneEnabled)
    {
        $this->classifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByEmailEnabled
     *
     * Indicates whether most categories support including an email address in the
     *  seller's contact information.
     *
     * @return bool
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->classifiedAdContactByEmailEnabled;
    }

    /**
     * Sets a new classifiedAdContactByEmailEnabled
     *
     * Indicates whether most categories support including an email address in the
     *  seller's contact information.
     *
     * @param bool $classifiedAdContactByEmailEnabled
     * @return self
     */
    public function setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled)
    {
        $this->classifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as safePaymentRequired
     *
     * eBay controls all forms of electronic payment methods that are avaialable to buyers, so this field is no longer applicable.
     *
     * @return bool
     */
    public function getSafePaymentRequired()
    {
        return $this->safePaymentRequired;
    }

    /**
     * Sets a new safePaymentRequired
     *
     * eBay controls all forms of electronic payment methods that are avaialable to buyers, so this field is no longer applicable.
     *
     * @param bool $safePaymentRequired
     * @return self
     */
    public function setSafePaymentRequired($safePaymentRequired)
    {
        $this->safePaymentRequired = $safePaymentRequired;
        return $this;
    }

    /**
     * Gets as classifiedAdPayPerLeadEnabled
     *
     * Specifies the default site setting for whether the pay-per-lead feature
     *  is supported for most categories.
     *
     * @return bool
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->classifiedAdPayPerLeadEnabled;
    }

    /**
     * Sets a new classifiedAdPayPerLeadEnabled
     *
     * Specifies the default site setting for whether the pay-per-lead feature
     *  is supported for most categories.
     *
     * @param bool $classifiedAdPayPerLeadEnabled
     * @return self
     */
    public function setClassifiedAdPayPerLeadEnabled($classifiedAdPayPerLeadEnabled)
    {
        $this->classifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        return $this;
    }

    /**
     * Gets as itemSpecificsEnabled
     *
     * The value returned in this field indicates whether most categories on the specified eBay site support listings with Item Specifics. Item Specifics enable sellers to present descriptive details of an item in a structured manner.
     *
     * @return string
     */
    public function getItemSpecificsEnabled()
    {
        return $this->itemSpecificsEnabled;
    }

    /**
     * Sets a new itemSpecificsEnabled
     *
     * The value returned in this field indicates whether most categories on the specified eBay site support listings with Item Specifics. Item Specifics enable sellers to present descriptive details of an item in a structured manner.
     *
     * @param string $itemSpecificsEnabled
     * @return self
     */
    public function setItemSpecificsEnabled($itemSpecificsEnabled)
    {
        $this->itemSpecificsEnabled = $itemSpecificsEnabled;
        return $this;
    }

    /**
     * Gets as paisaPayFullEscrowEnabled
     *
     * <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so the <code>PaisaPayEscrow</code> payment method is no longer applicable since this payment method was only supported on the eBay India site.
     *  </span>
     *
     * @return bool
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->paisaPayFullEscrowEnabled;
    }

    /**
     * Sets a new paisaPayFullEscrowEnabled
     *
     * <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so the <code>PaisaPayEscrow</code> payment method is no longer applicable since this payment method was only supported on the eBay India site.
     *  </span>
     *
     * @param bool $paisaPayFullEscrowEnabled
     * @return self
     */
    public function setPaisaPayFullEscrowEnabled($paisaPayFullEscrowEnabled)
    {
        $this->paisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        return $this;
    }

    /**
     * Gets as iSBNIdentifierEnabled
     *
     * This field is no longer applicable.
     *
     * @return bool
     */
    public function getISBNIdentifierEnabled()
    {
        return $this->iSBNIdentifierEnabled;
    }

    /**
     * Sets a new iSBNIdentifierEnabled
     *
     * This field is no longer applicable.
     *
     * @param bool $iSBNIdentifierEnabled
     * @return self
     */
    public function setISBNIdentifierEnabled($iSBNIdentifierEnabled)
    {
        $this->iSBNIdentifierEnabled = $iSBNIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as uPCIdentifierEnabled
     *
     * This field is no longer applicable.
     *
     * @return bool
     */
    public function getUPCIdentifierEnabled()
    {
        return $this->uPCIdentifierEnabled;
    }

    /**
     * Sets a new uPCIdentifierEnabled
     *
     * This field is no longer applicable.
     *
     * @param bool $uPCIdentifierEnabled
     * @return self
     */
    public function setUPCIdentifierEnabled($uPCIdentifierEnabled)
    {
        $this->uPCIdentifierEnabled = $uPCIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as eANIdentifierEnabled
     *
     * This field is no longer applicable.
     *
     * @return bool
     */
    public function getEANIdentifierEnabled()
    {
        return $this->eANIdentifierEnabled;
    }

    /**
     * Sets a new eANIdentifierEnabled
     *
     * This field is no longer applicable.
     *
     * @param bool $eANIdentifierEnabled
     * @return self
     */
    public function setEANIdentifierEnabled($eANIdentifierEnabled)
    {
        $this->eANIdentifierEnabled = $eANIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as brandMPNIdentifierEnabled
     *
     * Indicates whether the category is enabled for the <b>BrandMPN</b> field for a specific item. If <code>true</code>, sellers can add <b>BrandMPN</b> for that item.
     *
     * @return bool
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->brandMPNIdentifierEnabled;
    }

    /**
     * Sets a new brandMPNIdentifierEnabled
     *
     * Indicates whether the category is enabled for the <b>BrandMPN</b> field for a specific item. If <code>true</code>, sellers can add <b>BrandMPN</b> for that item.
     *
     * @param bool $brandMPNIdentifierEnabled
     * @return self
     */
    public function setBrandMPNIdentifierEnabled($brandMPNIdentifierEnabled)
    {
        $this->brandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdAutoAcceptEnabled
     *
     * Specifies the default site setting for whether categories allow
     *  auto-accept for Best Offers for Classified Ads.
     *
     * @return bool
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->classifiedAdAutoAcceptEnabled;
    }

    /**
     * Sets a new classifiedAdAutoAcceptEnabled
     *
     * Specifies the default site setting for whether categories allow
     *  auto-accept for Best Offers for Classified Ads.
     *
     * @param bool $classifiedAdAutoAcceptEnabled
     * @return self
     */
    public function setClassifiedAdAutoAcceptEnabled($classifiedAdAutoAcceptEnabled)
    {
        $this->classifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferAutoAcceptEnabled
     *
     * Specifies the default site setting for whether categories allow auto-accept for Best Offers.
     *
     * @return bool
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->bestOfferAutoAcceptEnabled;
    }

    /**
     * Sets a new bestOfferAutoAcceptEnabled
     *
     * Specifies the default site setting for whether categories allow auto-accept for Best Offers.
     *
     * @param bool $bestOfferAutoAcceptEnabled
     * @return self
     */
    public function setBestOfferAutoAcceptEnabled($bestOfferAutoAcceptEnabled)
    {
        $this->bestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeNorthAmericaEnabled
     *
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective sites.
     *
     * @return bool
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->crossBorderTradeNorthAmericaEnabled;
    }

    /**
     * Sets a new crossBorderTradeNorthAmericaEnabled
     *
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective sites.
     *
     * @param bool $crossBorderTradeNorthAmericaEnabled
     * @return self
     */
    public function setCrossBorderTradeNorthAmericaEnabled($crossBorderTradeNorthAmericaEnabled)
    {
        $this->crossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeGBEnabled
     *
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     *
     * @return bool
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->crossBorderTradeGBEnabled;
    }

    /**
     * Sets a new crossBorderTradeGBEnabled
     *
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     *
     * @param bool $crossBorderTradeGBEnabled
     * @return self
     */
    public function setCrossBorderTradeGBEnabled($crossBorderTradeGBEnabled)
    {
        $this->crossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeAustraliaEnabled
     *
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     *
     * @return bool
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->crossBorderTradeAustraliaEnabled;
    }

    /**
     * Sets a new crossBorderTradeAustraliaEnabled
     *
     * Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     *
     * @param bool $crossBorderTradeAustraliaEnabled
     * @return self
     */
    public function setCrossBorderTradeAustraliaEnabled($crossBorderTradeAustraliaEnabled)
    {
        $this->crossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        return $this;
    }

    /**
     * Gets as payPalBuyerProtectionEnabled
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->payPalBuyerProtectionEnabled;
    }

    /**
     * Sets a new payPalBuyerProtectionEnabled
     *
     * This field is deprecated.
     *
     * @param bool $payPalBuyerProtectionEnabled
     * @return self
     */
    public function setPayPalBuyerProtectionEnabled($payPalBuyerProtectionEnabled)
    {
        $this->payPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        return $this;
    }

    /**
     * Gets as buyerGuaranteeEnabled
     *
     * For the Australia site, if the <b>BuyerGuaranteeEnabled</b> is returned, then the default site setting is that categories allow buyer protection.
     *
     * @return bool
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->buyerGuaranteeEnabled;
    }

    /**
     * Sets a new buyerGuaranteeEnabled
     *
     * For the Australia site, if the <b>BuyerGuaranteeEnabled</b> is returned, then the default site setting is that categories allow buyer protection.
     *
     * @param bool $buyerGuaranteeEnabled
     * @return self
     */
    public function setBuyerGuaranteeEnabled($buyerGuaranteeEnabled)
    {
        $this->buyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        return $this;
    }

    /**
     * Gets as iNEscrowWorkflowTimeline
     *
     * <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so this feature is no longer applicable since it was only supported on the eBay India site.
     *  </span>
     *
     * @return string
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->iNEscrowWorkflowTimeline;
    }

    /**
     * Sets a new iNEscrowWorkflowTimeline
     *
     * <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so this feature is no longer applicable since it was only supported on the eBay India site.
     *  </span>
     *
     * @param string $iNEscrowWorkflowTimeline
     * @return self
     */
    public function setINEscrowWorkflowTimeline($iNEscrowWorkflowTimeline)
    {
        $this->iNEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        return $this;
    }

    /**
     * Gets as combinedFixedPriceTreatmentEnabled
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
        return $this->combinedFixedPriceTreatmentEnabled;
    }

    /**
     * Sets a new combinedFixedPriceTreatmentEnabled
     *
     * This field is deprecated.
     *
     * @param bool $combinedFixedPriceTreatmentEnabled
     * @return self
     */
    public function setCombinedFixedPriceTreatmentEnabled($combinedFixedPriceTreatmentEnabled)
    {
        $this->combinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        return $this;
    }

    /**
     * Adds as duration
     *
     * Specifies the default site setting that enables durations for "Gallery Featured".
     *
     * @return self
     * @param string $duration
     */
    public function addToGalleryFeaturedDurations($duration)
    {
        $this->galleryFeaturedDurations[] = $duration;
        return $this;
    }

    /**
     * isset galleryFeaturedDurations
     *
     * Specifies the default site setting that enables durations for "Gallery Featured".
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGalleryFeaturedDurations($index)
    {
        return isset($this->galleryFeaturedDurations[$index]);
    }

    /**
     * unset galleryFeaturedDurations
     *
     * Specifies the default site setting that enables durations for "Gallery Featured".
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGalleryFeaturedDurations($index)
    {
        unset($this->galleryFeaturedDurations[$index]);
    }

    /**
     * Gets as galleryFeaturedDurations
     *
     * Specifies the default site setting that enables durations for "Gallery Featured".
     *
     * @return string[]
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->galleryFeaturedDurations;
    }

    /**
     * Sets a new galleryFeaturedDurations
     *
     * Specifies the default site setting that enables durations for "Gallery Featured".
     *
     * @param string[] $galleryFeaturedDurations
     * @return self
     */
    public function setGalleryFeaturedDurations(array $galleryFeaturedDurations)
    {
        $this->galleryFeaturedDurations = $galleryFeaturedDurations;
        return $this;
    }

    /**
     * Gets as payPalRequired
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPayPalRequired()
    {
        return $this->payPalRequired;
    }

    /**
     * Sets a new payPalRequired
     *
     * This field is deprecated.
     *
     * @param bool $payPalRequired
     * @return self
     */
    public function setPayPalRequired($payPalRequired)
    {
        $this->payPalRequired = $payPalRequired;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAdFormatEnabled
     *
     * Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for eBay Motors Pro users.
     *
     * @return string
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }

    /**
     * Sets a new eBayMotorsProAdFormatEnabled
     *
     * Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for eBay Motors Pro users.
     *
     * @param string $eBayMotorsProAdFormatEnabled
     * @return self
     */
    public function setEBayMotorsProAdFormatEnabled($eBayMotorsProAdFormatEnabled)
    {
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByPhoneEnabled
     *
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByPhoneEnabled
     *
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProContactByPhoneEnabled
     * @return self
     */
    public function setEBayMotorsProContactByPhoneEnabled($eBayMotorsProContactByPhoneEnabled)
    {
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProPhoneCount
     *
     * Indicates which telephone option is enabled to contact the seller. This element is for eBay Motors Pro users.
     *
     * @return int
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->eBayMotorsProPhoneCount;
    }

    /**
     * Sets a new eBayMotorsProPhoneCount
     *
     * Indicates which telephone option is enabled to contact the seller. This element is for eBay Motors Pro users.
     *
     * @param int $eBayMotorsProPhoneCount
     * @return self
     */
    public function setEBayMotorsProPhoneCount($eBayMotorsProPhoneCount)
    {
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByAddressEnabled
     *
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByAddressEnabled
     *
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProContactByAddressEnabled
     * @return self
     */
    public function setEBayMotorsProContactByAddressEnabled($eBayMotorsProContactByAddressEnabled)
    {
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProStreetCount
     *
     * Indicates which address option is enabled to
     *  contact the seller. This element is for eBay Motors Pro users.
     *
     * @return int
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->eBayMotorsProStreetCount;
    }

    /**
     * Sets a new eBayMotorsProStreetCount
     *
     * Indicates which address option is enabled to
     *  contact the seller. This element is for eBay Motors Pro users.
     *
     * @param int $eBayMotorsProStreetCount
     * @return self
     */
    public function setEBayMotorsProStreetCount($eBayMotorsProStreetCount)
    {
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        return $this;
    }

    /**
     * Gets as eBayMotorsProCompanyNameEnabled
     *
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }

    /**
     * Sets a new eBayMotorsProCompanyNameEnabled
     *
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProCompanyNameEnabled
     * @return self
     */
    public function setEBayMotorsProCompanyNameEnabled($eBayMotorsProCompanyNameEnabled)
    {
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByEmailEnabled
     *
     * Indicates whether most categories support including an email address in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByEmailEnabled
     *
     * Indicates whether most categories support including an email address in the
     *  seller's contact information. This element is for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProContactByEmailEnabled
     * @return self
     */
    public function setEBayMotorsProContactByEmailEnabled($eBayMotorsProContactByEmailEnabled)
    {
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProBestOfferEnabled
     *
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories. This element is for eBay Motors Pro users.
     *
     * @return string
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }

    /**
     * Sets a new eBayMotorsProBestOfferEnabled
     *
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories. This element is for eBay Motors Pro users.
     *
     * @param string $eBayMotorsProBestOfferEnabled
     * @return self
     */
    public function setEBayMotorsProBestOfferEnabled($eBayMotorsProBestOfferEnabled)
    {
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAutoAcceptEnabled
     *
     * Specifies the default site setting for whether categories allow
     *  auto-accept for Best Offers for Classified Ads.
     *  This element is for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }

    /**
     * Sets a new eBayMotorsProAutoAcceptEnabled
     *
     * Specifies the default site setting for whether categories allow
     *  auto-accept for Best Offers for Classified Ads.
     *  This element is for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProAutoAcceptEnabled
     * @return self
     */
    public function setEBayMotorsProAutoAcceptEnabled($eBayMotorsProAutoAcceptEnabled)
    {
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAutoDeclineEnabled
     *
     * Specifies the default site setting for whether categories allow
     *  auto-decline for Best Offers for Classified Ads.
     *  This element is for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }

    /**
     * Sets a new eBayMotorsProAutoDeclineEnabled
     *
     * Specifies the default site setting for whether categories allow
     *  auto-decline for Best Offers for Classified Ads.
     *  This element is for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProAutoDeclineEnabled
     * @return self
     */
    public function setEBayMotorsProAutoDeclineEnabled($eBayMotorsProAutoDeclineEnabled)
    {
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProPaymentMethodCheckOutEnabled
     *
     * Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     *
     * @return string
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }

    /**
     * Sets a new eBayMotorsProPaymentMethodCheckOutEnabled
     *
     * Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     *
     * @param string $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return self
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled($eBayMotorsProPaymentMethodCheckOutEnabled)
    {
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProShippingMethodEnabled
     *
     * Indicates if shipping options are available for most categories.
     *  This element is for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }

    /**
     * Sets a new eBayMotorsProShippingMethodEnabled
     *
     * Indicates if shipping options are available for most categories.
     *  This element is for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProShippingMethodEnabled
     * @return self
     */
    public function setEBayMotorsProShippingMethodEnabled($eBayMotorsProShippingMethodEnabled)
    {
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProCounterOfferEnabled
     *
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories. This element is for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }

    /**
     * Sets a new eBayMotorsProCounterOfferEnabled
     *
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories. This element is for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProCounterOfferEnabled
     * @return self
     */
    public function setEBayMotorsProCounterOfferEnabled($eBayMotorsProCounterOfferEnabled)
    {
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProSellerContactDetailsEnabled
     *
     * Specifies the default site setting for whether most categories allow seller-
     *  level contact information for Classified Ad format listings. A value of <code>true</code>
     *  means seller-level contact information is available for Classified Ad listings
     *  site-wide, unless a specific category overrides the setting. This element is
     *  for eBay Motors Pro users.
     *
     * @return bool
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }

    /**
     * Sets a new eBayMotorsProSellerContactDetailsEnabled
     *
     * Specifies the default site setting for whether most categories allow seller-
     *  level contact information for Classified Ad format listings. A value of <code>true</code>
     *  means seller-level contact information is available for Classified Ad listings
     *  site-wide, unless a specific category overrides the setting. This element is
     *  for eBay Motors Pro users.
     *
     * @param bool $eBayMotorsProSellerContactDetailsEnabled
     * @return self
     */
    public function setEBayMotorsProSellerContactDetailsEnabled($eBayMotorsProSellerContactDetailsEnabled)
    {
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAdFormatEnabled
     *
     * Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for Local Market dealers.
     *
     * @return string
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->localMarketAdFormatEnabled;
    }

    /**
     * Sets a new localMarketAdFormatEnabled
     *
     * Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for Local Market dealers.
     *
     * @param string $localMarketAdFormatEnabled
     * @return self
     */
    public function setLocalMarketAdFormatEnabled($localMarketAdFormatEnabled)
    {
        $this->localMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        return $this;
    }

    /**
     * Gets as localMarketContactByPhoneEnabled
     *
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->localMarketContactByPhoneEnabled;
    }

    /**
     * Sets a new localMarketContactByPhoneEnabled
     *
     * Indicates whether most categories support including a phone number in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @param bool $localMarketContactByPhoneEnabled
     * @return self
     */
    public function setLocalMarketContactByPhoneEnabled($localMarketContactByPhoneEnabled)
    {
        $this->localMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as localMarketPhoneCount
     *
     * Indicates which telephone option is enabled to contact the seller. This element is for Local Market dealers.
     *
     * @return int
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->localMarketPhoneCount;
    }

    /**
     * Sets a new localMarketPhoneCount
     *
     * Indicates which telephone option is enabled to contact the seller. This element is for Local Market dealers.
     *
     * @param int $localMarketPhoneCount
     * @return self
     */
    public function setLocalMarketPhoneCount($localMarketPhoneCount)
    {
        $this->localMarketPhoneCount = $localMarketPhoneCount;
        return $this;
    }

    /**
     * Gets as localMarketContactByAddressEnabled
     *
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->localMarketContactByAddressEnabled;
    }

    /**
     * Sets a new localMarketContactByAddressEnabled
     *
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for Local Market dealers.
     *
     * @param bool $localMarketContactByAddressEnabled
     * @return self
     */
    public function setLocalMarketContactByAddressEnabled($localMarketContactByAddressEnabled)
    {
        $this->localMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as localMarketStreetCount
     *
     * Indicates which address option is enabled to
     *  contact the seller. This element is for Local Market dealers.
     *
     * @return int
     */
    public function getLocalMarketStreetCount()
    {
        return $this->localMarketStreetCount;
    }

    /**
     * Sets a new localMarketStreetCount
     *
     * Indicates which address option is enabled to
     *  contact the seller. This element is for Local Market dealers.
     *
     * @param int $localMarketStreetCount
     * @return self
     */
    public function setLocalMarketStreetCount($localMarketStreetCount)
    {
        $this->localMarketStreetCount = $localMarketStreetCount;
        return $this;
    }

    /**
     * Gets as localMarketCompanyNameEnabled
     *
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->localMarketCompanyNameEnabled;
    }

    /**
     * Sets a new localMarketCompanyNameEnabled
     *
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @param bool $localMarketCompanyNameEnabled
     * @return self
     */
    public function setLocalMarketCompanyNameEnabled($localMarketCompanyNameEnabled)
    {
        $this->localMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as localMarketContactByEmailEnabled
     *
     * Indicates whether most categories support including an email address in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->localMarketContactByEmailEnabled;
    }

    /**
     * Sets a new localMarketContactByEmailEnabled
     *
     * Indicates whether most categories support including an email address in the
     *  seller's contact information. This element is for Local Market dealers.
     *
     * @param bool $localMarketContactByEmailEnabled
     * @return self
     */
    public function setLocalMarketContactByEmailEnabled($localMarketContactByEmailEnabled)
    {
        $this->localMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as localMarketBestOfferEnabled
     *
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories. This element is for Local Market dealers.
     *
     * @return string
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->localMarketBestOfferEnabled;
    }

    /**
     * Sets a new localMarketBestOfferEnabled
     *
     * Indicates if Best Offer is enabled for Classified Ad listings
     *  in most categories. This element is for Local Market dealers.
     *
     * @param string $localMarketBestOfferEnabled
     * @return self
     */
    public function setLocalMarketBestOfferEnabled($localMarketBestOfferEnabled)
    {
        $this->localMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAutoAcceptEnabled
     *
     * Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads. This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->localMarketAutoAcceptEnabled;
    }

    /**
     * Sets a new localMarketAutoAcceptEnabled
     *
     * Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads. This element is for Local Market dealers.
     *
     * @param bool $localMarketAutoAcceptEnabled
     * @return self
     */
    public function setLocalMarketAutoAcceptEnabled($localMarketAutoAcceptEnabled)
    {
        $this->localMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAutoDeclineEnabled
     *
     * Specifies the default site setting for whether categories allow auto-decline for Best Offers for Classified Ads. This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->localMarketAutoDeclineEnabled;
    }

    /**
     * Sets a new localMarketAutoDeclineEnabled
     *
     * Specifies the default site setting for whether categories allow auto-decline for Best Offers for Classified Ads. This element is for Local Market dealers.
     *
     * @param bool $localMarketAutoDeclineEnabled
     * @return self
     */
    public function setLocalMarketAutoDeclineEnabled($localMarketAutoDeclineEnabled)
    {
        $this->localMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as localMarketPaymentMethodCheckOutEnabled
     *
     * Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     *
     * @return string
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->localMarketPaymentMethodCheckOutEnabled;
    }

    /**
     * Sets a new localMarketPaymentMethodCheckOutEnabled
     *
     * Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     *
     * @param string $localMarketPaymentMethodCheckOutEnabled
     * @return self
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled($localMarketPaymentMethodCheckOutEnabled)
    {
        $this->localMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        return $this;
    }

    /**
     * Gets as localMarketShippingMethodEnabled
     *
     * Indicates if shipping options are available for most categories.
     *  This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->localMarketShippingMethodEnabled;
    }

    /**
     * Sets a new localMarketShippingMethodEnabled
     *
     * Indicates if shipping options are available for most categories.
     *  This element is for Local Market dealers.
     *
     * @param bool $localMarketShippingMethodEnabled
     * @return self
     */
    public function setLocalMarketShippingMethodEnabled($localMarketShippingMethodEnabled)
    {
        $this->localMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as localMarketCounterOfferEnabled
     *
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories. This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->localMarketCounterOfferEnabled;
    }

    /**
     * Sets a new localMarketCounterOfferEnabled
     *
     * Indicates whether counter offers are allowed on Best Offers for
     *  most categories. This element is for Local Market dealers.
     *
     * @param bool $localMarketCounterOfferEnabled
     * @return self
     */
    public function setLocalMarketCounterOfferEnabled($localMarketCounterOfferEnabled)
    {
        $this->localMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as localMarketSellerContactDetailsEnabled
     *
     * Specifies the default site setting for whether most categories allow seller- level contact information for Classified Ad format listings. A value of <code>true</code> means seller-level contact information is available for Classified Ad format listings site-wide, unless a specific category overrides the setting. This element is for Local Market dealers.
     *
     * @return bool
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->localMarketSellerContactDetailsEnabled;
    }

    /**
     * Sets a new localMarketSellerContactDetailsEnabled
     *
     * Specifies the default site setting for whether most categories allow seller- level contact information for Classified Ad format listings. A value of <code>true</code> means seller-level contact information is available for Classified Ad format listings site-wide, unless a specific category overrides the setting. This element is for Local Market dealers.
     *
     * @param bool $localMarketSellerContactDetailsEnabled
     * @return self
     */
    public function setLocalMarketSellerContactDetailsEnabled($localMarketSellerContactDetailsEnabled)
    {
        $this->localMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdPhoneCount
     *
     * Indicates which telephone option is enabled to
     *  contact the seller. This element is for For Sale By Owner.
     *
     * @return int
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->classifiedAdPhoneCount;
    }

    /**
     * Sets a new classifiedAdPhoneCount
     *
     * Indicates which telephone option is enabled to
     *  contact the seller. This element is for For Sale By Owner.
     *
     * @param int $classifiedAdPhoneCount
     * @return self
     */
    public function setClassifiedAdPhoneCount($classifiedAdPhoneCount)
    {
        $this->classifiedAdPhoneCount = $classifiedAdPhoneCount;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByAddressEnabled
     *
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for For Sale By Owner.
     *
     * @return bool
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->classifiedAdContactByAddressEnabled;
    }

    /**
     * Sets a new classifiedAdContactByAddressEnabled
     *
     * Indicates whether most categories support including an address in the seller's
     *  contact information. This element is for For Sale By Owner.
     *
     * @param bool $classifiedAdContactByAddressEnabled
     * @return self
     */
    public function setClassifiedAdContactByAddressEnabled($classifiedAdContactByAddressEnabled)
    {
        $this->classifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdStreetCount
     *
     * Indicates which address option is enabled to
     *  contact the seller. This element is for For Sale By Owner.
     *
     * @return int
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->classifiedAdStreetCount;
    }

    /**
     * Sets a new classifiedAdStreetCount
     *
     * Indicates which address option is enabled to
     *  contact the seller. This element is for For Sale By Owner.
     *
     * @param int $classifiedAdStreetCount
     * @return self
     */
    public function setClassifiedAdStreetCount($classifiedAdStreetCount)
    {
        $this->classifiedAdStreetCount = $classifiedAdStreetCount;
        return $this;
    }

    /**
     * Gets as classifiedAdCompanyNameEnabled
     *
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for For Sale By Owner.
     *
     * @return bool
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->classifiedAdCompanyNameEnabled;
    }

    /**
     * Sets a new classifiedAdCompanyNameEnabled
     *
     * Indicates whether most categories support including a company name in the
     *  seller's contact information. This element is for For Sale By Owner.
     *
     * @param bool $classifiedAdCompanyNameEnabled
     * @return self
     */
    public function setClassifiedAdCompanyNameEnabled($classifiedAdCompanyNameEnabled)
    {
        $this->classifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as specialitySubscription
     *
     * Specifies the default site setting for whether
     *  <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     *
     * @return string
     */
    public function getSpecialitySubscription()
    {
        return $this->specialitySubscription;
    }

    /**
     * Sets a new specialitySubscription
     *
     * Specifies the default site setting for whether
     *  <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     *
     * @param string $specialitySubscription
     * @return self
     */
    public function setSpecialitySubscription($specialitySubscription)
    {
        $this->specialitySubscription = $specialitySubscription;
        return $this;
    }

    /**
     * Gets as regularSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b>
     *  feature is supported for most categories.
     *
     * @return string
     */
    public function getRegularSubscription()
    {
        return $this->regularSubscription;
    }

    /**
     * Sets a new regularSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b>
     *  feature is supported for most categories.
     *
     * @param string $regularSubscription
     * @return self
     */
    public function setRegularSubscription($regularSubscription)
    {
        $this->regularSubscription = $regularSubscription;
        return $this;
    }

    /**
     * Gets as premiumSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b>
     *  feature is supported for most categories.
     *
     * @return string
     */
    public function getPremiumSubscription()
    {
        return $this->premiumSubscription;
    }

    /**
     * Sets a new premiumSubscription
     *
     * Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b>
     *  feature is supported for most categories.
     *
     * @param string $premiumSubscription
     * @return self
     */
    public function setPremiumSubscription($premiumSubscription)
    {
        $this->premiumSubscription = $premiumSubscription;
        return $this;
    }

    /**
     * Gets as nonSubscription
     *
     * Specifies the supported local listing distances for most categories,
     *  for users who have not subscribed to either Regular or Specialty vehicles.
     *
     * @return string
     */
    public function getNonSubscription()
    {
        return $this->nonSubscription;
    }

    /**
     * Sets a new nonSubscription
     *
     * Specifies the supported local listing distances for most categories,
     *  for users who have not subscribed to either Regular or Specialty vehicles.
     *
     * @param string $nonSubscription
     * @return self
     */
    public function setNonSubscription($nonSubscription)
    {
        $this->nonSubscription = $nonSubscription;
        return $this;
    }

    /**
     * Gets as payPalRequiredForStoreOwner
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPayPalRequiredForStoreOwner()
    {
        return $this->payPalRequiredForStoreOwner;
    }

    /**
     * Sets a new payPalRequiredForStoreOwner
     *
     * This field is deprecated.
     *
     * @param bool $payPalRequiredForStoreOwner
     * @return self
     */
    public function setPayPalRequiredForStoreOwner($payPalRequiredForStoreOwner)
    {
        $this->payPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        return $this;
    }

    /**
     * Gets as reviseQuantityAllowed
     *
     * Defines if quantity can be revised while a listing is in semi or fully restricted mode.
     *  Applies to fixed-price listings.
     *
     * @return bool
     */
    public function getReviseQuantityAllowed()
    {
        return $this->reviseQuantityAllowed;
    }

    /**
     * Sets a new reviseQuantityAllowed
     *
     * Defines if quantity can be revised while a listing is in semi or fully restricted mode.
     *  Applies to fixed-price listings.
     *
     * @param bool $reviseQuantityAllowed
     * @return self
     */
    public function setReviseQuantityAllowed($reviseQuantityAllowed)
    {
        $this->reviseQuantityAllowed = $reviseQuantityAllowed;
        return $this;
    }

    /**
     * Gets as revisePriceAllowed
     *
     * Defines if price can be revised while a listing is in semi or fully restricted mode.
     *  Applies to fixed-price listings.
     *
     * @return bool
     */
    public function getRevisePriceAllowed()
    {
        return $this->revisePriceAllowed;
    }

    /**
     * Sets a new revisePriceAllowed
     *
     * Defines if price can be revised while a listing is in semi or fully restricted mode.
     *  Applies to fixed-price listings.
     *
     * @param bool $revisePriceAllowed
     * @return self
     */
    public function setRevisePriceAllowed($revisePriceAllowed)
    {
        $this->revisePriceAllowed = $revisePriceAllowed;
        return $this;
    }

    /**
     * Gets as storeOwnerExtendedListingDurationsEnabled
     *
     * Defines if extended business seller listing durations are enabled on a given site.
     *  When the value of this element is <code>true</code>, it means the listing duration values
     *  defined in <b>StoreOwnerExtendedListingDurations</b> are applicable to fixed-price
     *  listings.
     *
     * @return bool
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->storeOwnerExtendedListingDurationsEnabled;
    }

    /**
     * Sets a new storeOwnerExtendedListingDurationsEnabled
     *
     * Defines if extended business seller listing durations are enabled on a given site.
     *  When the value of this element is <code>true</code>, it means the listing duration values
     *  defined in <b>StoreOwnerExtendedListingDurations</b> are applicable to fixed-price
     *  listings.
     *
     * @param bool $storeOwnerExtendedListingDurationsEnabled
     * @return self
     */
    public function setStoreOwnerExtendedListingDurationsEnabled($storeOwnerExtendedListingDurationsEnabled)
    {
        $this->storeOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        return $this;
    }

    /**
     * Adds as duration
     *
     * Provides additional listings durations that are supported by Store Owners.
     *  The extended listing durations provided here in this element should be merged
     *  in with the baseline listing durations provided in the <b>ListingDurations</b> container.
     *
     * @return self
     * @param string $duration
     */
    public function addToStoreOwnerExtendedListingDurations($duration)
    {
        $this->storeOwnerExtendedListingDurations[] = $duration;
        return $this;
    }

    /**
     * isset storeOwnerExtendedListingDurations
     *
     * Provides additional listings durations that are supported by Store Owners.
     *  The extended listing durations provided here in this element should be merged
     *  in with the baseline listing durations provided in the <b>ListingDurations</b> container.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStoreOwnerExtendedListingDurations($index)
    {
        return isset($this->storeOwnerExtendedListingDurations[$index]);
    }

    /**
     * unset storeOwnerExtendedListingDurations
     *
     * Provides additional listings durations that are supported by Store Owners.
     *  The extended listing durations provided here in this element should be merged
     *  in with the baseline listing durations provided in the <b>ListingDurations</b> container.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStoreOwnerExtendedListingDurations($index)
    {
        unset($this->storeOwnerExtendedListingDurations[$index]);
    }

    /**
     * Gets as storeOwnerExtendedListingDurations
     *
     * Provides additional listings durations that are supported by Store Owners.
     *  The extended listing durations provided here in this element should be merged
     *  in with the baseline listing durations provided in the <b>ListingDurations</b> container.
     *
     * @return string[]
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->storeOwnerExtendedListingDurations;
    }

    /**
     * Sets a new storeOwnerExtendedListingDurations
     *
     * Provides additional listings durations that are supported by Store Owners.
     *  The extended listing durations provided here in this element should be merged
     *  in with the baseline listing durations provided in the <b>ListingDurations</b> container.
     *
     * @param string[] $storeOwnerExtendedListingDurations
     * @return self
     */
    public function setStoreOwnerExtendedListingDurations(array $storeOwnerExtendedListingDurations)
    {
        $this->storeOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        return $this;
    }

    /**
     * Gets as returnPolicyEnabled
     *
     * Specifies the default site setting for whether a return policy is required for most categories.
     *  <br>
     *  <br>
     *  <b>For most sites:</b> If true, listings in most categories require a return policy.
     *  <br>
     *  <br>
     *  <b>For eBay Australia (AU) and US eBay Motors Parts and Accessories:</b> If true, most categories support but do not require a return policy.
     *  <br>
     *  <br>
     *  Individual categories can override the site default.
     *
     * @return bool
     */
    public function getReturnPolicyEnabled()
    {
        return $this->returnPolicyEnabled;
    }

    /**
     * Sets a new returnPolicyEnabled
     *
     * Specifies the default site setting for whether a return policy is required for most categories.
     *  <br>
     *  <br>
     *  <b>For most sites:</b> If true, listings in most categories require a return policy.
     *  <br>
     *  <br>
     *  <b>For eBay Australia (AU) and US eBay Motors Parts and Accessories:</b> If true, most categories support but do not require a return policy.
     *  <br>
     *  <br>
     *  Individual categories can override the site default.
     *
     * @param bool $returnPolicyEnabled
     * @return self
     */
    public function setReturnPolicyEnabled($returnPolicyEnabled)
    {
        $this->returnPolicyEnabled = $returnPolicyEnabled;
        return $this;
    }

    /**
     * Gets as handlingTimeEnabled
     *
     * Specifies the default site setting for whether a handling time (dispatch time) is
     *  required for most categories.
     *  <br>
     *  <br>
     *  The handling time is the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time).
     *  <br>
     *  <br>
     *  If <code>false</code>, most listings on the site require a handling time (see <b>DispatchTimeMax</b> in <b>AddItem</b>) when flat or calculated shipping is specified. (A handling time is not required for local pickup or for freight shipping.)
     *  <br>
     *  <br>
     *  For a list of the handling time values allowed for each site, use <b>DispatchTimeMaxDetails</b> in <b>GeteBayDetails</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Although the field name ends with "Enabled", a value of <code>true</code> means that a handling time is NOT required, and value of <code>false</code> means that a handling time IS required.</span>
     *
     * @return bool
     */
    public function getHandlingTimeEnabled()
    {
        return $this->handlingTimeEnabled;
    }

    /**
     * Sets a new handlingTimeEnabled
     *
     * Specifies the default site setting for whether a handling time (dispatch time) is
     *  required for most categories.
     *  <br>
     *  <br>
     *  The handling time is the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time).
     *  <br>
     *  <br>
     *  If <code>false</code>, most listings on the site require a handling time (see <b>DispatchTimeMax</b> in <b>AddItem</b>) when flat or calculated shipping is specified. (A handling time is not required for local pickup or for freight shipping.)
     *  <br>
     *  <br>
     *  For a list of the handling time values allowed for each site, use <b>DispatchTimeMaxDetails</b> in <b>GeteBayDetails</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Although the field name ends with "Enabled", a value of <code>true</code> means that a handling time is NOT required, and value of <code>false</code> means that a handling time IS required.</span>
     *
     * @param bool $handlingTimeEnabled
     * @return self
     */
    public function setHandlingTimeEnabled($handlingTimeEnabled)
    {
        $this->handlingTimeEnabled = $handlingTimeEnabled;
        return $this;
    }

    /**
     * Gets as maxFlatShippingCost
     *
     * Specifies the default site setting for whether a maximum flat rate shipping cost
     *  is imposed for listings in most categories on the site.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getMaxFlatShippingCost()
    {
        return $this->maxFlatShippingCost;
    }

    /**
     * Sets a new maxFlatShippingCost
     *
     * Specifies the default site setting for whether a maximum flat rate shipping cost
     *  is imposed for listings in most categories on the site.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $maxFlatShippingCost
     * @return self
     */
    public function setMaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $maxFlatShippingCost)
    {
        $this->maxFlatShippingCost = $maxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as maxFlatShippingCostCBTExempt
     *
     * Specifies the default site setting for whether a maximum flat rate shipping cost
     *  is imposed on sellers who list in categories on this site yet are shipping an
     *  item into the country of this site from another country.
     *
     * @return bool
     */
    public function getMaxFlatShippingCostCBTExempt()
    {
        return $this->maxFlatShippingCostCBTExempt;
    }

    /**
     * Sets a new maxFlatShippingCostCBTExempt
     *
     * Specifies the default site setting for whether a maximum flat rate shipping cost
     *  is imposed on sellers who list in categories on this site yet are shipping an
     *  item into the country of this site from another country.
     *
     * @param bool $maxFlatShippingCostCBTExempt
     * @return self
     */
    public function setMaxFlatShippingCostCBTExempt($maxFlatShippingCostCBTExempt)
    {
        $this->maxFlatShippingCostCBTExempt = $maxFlatShippingCostCBTExempt;
        return $this;
    }

    /**
     * Gets as group1MaxFlatShippingCost
     *
     * Returns the applicable max cap per shipping cost for shipping service group1
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->group1MaxFlatShippingCost;
    }

    /**
     * Sets a new group1MaxFlatShippingCost
     *
     * Returns the applicable max cap per shipping cost for shipping service group1
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $group1MaxFlatShippingCost
     * @return self
     */
    public function setGroup1MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $group1MaxFlatShippingCost)
    {
        $this->group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as group2MaxFlatShippingCost
     *
     * Returns the applicable max cap per shipping cost for shipping service group2
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->group2MaxFlatShippingCost;
    }

    /**
     * Sets a new group2MaxFlatShippingCost
     *
     * Returns the applicable max cap per shipping cost for shipping service group2
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $group2MaxFlatShippingCost
     * @return self
     */
    public function setGroup2MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $group2MaxFlatShippingCost)
    {
        $this->group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as group3MaxFlatShippingCost
     *
     * Returns the applicable max cap per shipping cost for shipping service group3
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->group3MaxFlatShippingCost;
    }

    /**
     * Sets a new group3MaxFlatShippingCost
     *
     * Returns the applicable max cap per shipping cost for shipping service group3
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $group3MaxFlatShippingCost
     * @return self
     */
    public function setGroup3MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $group3MaxFlatShippingCost)
    {
        $this->group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        return $this;
    }

    /**
     * Adds as paymentMethod
     *
     * Indicates the acceptable payment methods that can be used when using the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls for an item listed on the corresponding site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @return self
     * @param string $paymentMethod
     */
    public function addToPaymentMethod($paymentMethod)
    {
        $this->paymentMethod[] = $paymentMethod;
        return $this;
    }

    /**
     * isset paymentMethod
     *
     * Indicates the acceptable payment methods that can be used when using the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls for an item listed on the corresponding site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMethod($index)
    {
        return isset($this->paymentMethod[$index]);
    }

    /**
     * unset paymentMethod
     *
     * Indicates the acceptable payment methods that can be used when using the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls for an item listed on the corresponding site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMethod($index)
    {
        unset($this->paymentMethod[$index]);
    }

    /**
     * Gets as paymentMethod
     *
     * Indicates the acceptable payment methods that can be used when using the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls for an item listed on the corresponding site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @return string[]
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * Indicates the acceptable payment methods that can be used when using the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls for an item listed on the corresponding site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod(array $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as variationsEnabled
     *
     * Specifies the default site setting for whether categories support multi-variation listings. If true, you can pass in Item.Variations in the AddFixedPriceItem family of calls when you list in categories that support this feature.
     *  <br>
     *  <br>
     *  Multi-variation listings contain items that are logically the same product, but that vary in their manufacturing details or packaging. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations.
     *
     * @return bool
     */
    public function getVariationsEnabled()
    {
        return $this->variationsEnabled;
    }

    /**
     * Sets a new variationsEnabled
     *
     * Specifies the default site setting for whether categories support multi-variation listings. If true, you can pass in Item.Variations in the AddFixedPriceItem family of calls when you list in categories that support this feature.
     *  <br>
     *  <br>
     *  Multi-variation listings contain items that are logically the same product, but that vary in their manufacturing details or packaging. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations.
     *
     * @param bool $variationsEnabled
     * @return self
     */
    public function setVariationsEnabled($variationsEnabled)
    {
        $this->variationsEnabled = $variationsEnabled;
        return $this;
    }

    /**
     * Gets as attributeConversionEnabled
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getAttributeConversionEnabled()
    {
        return $this->attributeConversionEnabled;
    }

    /**
     * Sets a new attributeConversionEnabled
     *
     * This field is deprecated.
     *
     * @param string $attributeConversionEnabled
     * @return self
     */
    public function setAttributeConversionEnabled($attributeConversionEnabled)
    {
        $this->attributeConversionEnabled = $attributeConversionEnabled;
        return $this;
    }

    /**
     * Gets as freeGalleryPlusEnabled
     *
     * Specifies the default site setting for whether categories allow free, automatic upgrades for Gallery Plus, which enhances pictures in search results.
     *
     * @return bool
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->freeGalleryPlusEnabled;
    }

    /**
     * Sets a new freeGalleryPlusEnabled
     *
     * Specifies the default site setting for whether categories allow free, automatic upgrades for Gallery Plus, which enhances pictures in search results.
     *
     * @param bool $freeGalleryPlusEnabled
     * @return self
     */
    public function setFreeGalleryPlusEnabled($freeGalleryPlusEnabled)
    {
        $this->freeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        return $this;
    }

    /**
     * Gets as freePicturePackEnabled
     *
     * Specifies the default site setting for whether categories allow free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures.
     *
     * @return bool
     */
    public function getFreePicturePackEnabled()
    {
        return $this->freePicturePackEnabled;
    }

    /**
     * Sets a new freePicturePackEnabled
     *
     * Specifies the default site setting for whether categories allow free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures.
     *
     * @param bool $freePicturePackEnabled
     * @return self
     */
    public function setFreePicturePackEnabled($freePicturePackEnabled)
    {
        $this->freePicturePackEnabled = $freePicturePackEnabled;
        return $this;
    }

    /**
     * Gets as itemCompatibilityEnabled
     *
     * Specifies the default site setting for whether listing items with parts compatibility is supported by application (<code>ByApplication</code>), by specification (<code>BySpecification</code>), or not at all (<code>Disabled</code>). A given category cannot support both types of parts compatibility.
     *  <br><br>
     *  Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  Parts Compatibility is supported in limited Parts & Accessories categories for the US eBay Motors site only.
     *
     * @return string
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->itemCompatibilityEnabled;
    }

    /**
     * Sets a new itemCompatibilityEnabled
     *
     * Specifies the default site setting for whether listing items with parts compatibility is supported by application (<code>ByApplication</code>), by specification (<code>BySpecification</code>), or not at all (<code>Disabled</code>). A given category cannot support both types of parts compatibility.
     *  <br><br>
     *  Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  Parts Compatibility is supported in limited Parts & Accessories categories for the US eBay Motors site only.
     *
     * @param string $itemCompatibilityEnabled
     * @return self
     */
    public function setItemCompatibilityEnabled($itemCompatibilityEnabled)
    {
        $this->itemCompatibilityEnabled = $itemCompatibilityEnabled;
        return $this;
    }

    /**
     * Gets as minItemCompatibility
     *
     * Specifies the default site setting for whether parts compatibility information is required when listing items, and if so, how many compatibilities must be specified. If the value is "0," you are not required to specify compatibility information. A value greater than "0" indicates that listing with parts compatibity is mandatory and the listing must contain the specified number of compatibilities at a minimum.
     *  <br><br>
     *  Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed witih parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  This field applies only to listings in which compatibility is specified by application. Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies. This can be done automatically by listing with a catalog product that supports parts compatibility, or manually, using <b class="con">Item.ItemCompatibilityList</b> when listing or revising an item.
     *
     * @return int
     */
    public function getMinItemCompatibility()
    {
        return $this->minItemCompatibility;
    }

    /**
     * Sets a new minItemCompatibility
     *
     * Specifies the default site setting for whether parts compatibility information is required when listing items, and if so, how many compatibilities must be specified. If the value is "0," you are not required to specify compatibility information. A value greater than "0" indicates that listing with parts compatibity is mandatory and the listing must contain the specified number of compatibilities at a minimum.
     *  <br><br>
     *  Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed witih parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  This field applies only to listings in which compatibility is specified by application. Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies. This can be done automatically by listing with a catalog product that supports parts compatibility, or manually, using <b class="con">Item.ItemCompatibilityList</b> when listing or revising an item.
     *
     * @param int $minItemCompatibility
     * @return self
     */
    public function setMinItemCompatibility($minItemCompatibility)
    {
        $this->minItemCompatibility = $minItemCompatibility;
        return $this;
    }

    /**
     * Gets as maxItemCompatibility
     *
     * Specifies the default site setting for the maximum number of compatible applications allowed per item when adding or revising items with parts compatibility.
     *  <br><br>
     *  Parts compatibility listings contain structured information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  This field applies only to listings in which compatibility is specified by application manually when listing or revising an item. Entering parts compatibility by application manually specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies, using <b class="con">Item.ItemCompatibilityList</b>.
     *
     * @return int
     */
    public function getMaxItemCompatibility()
    {
        return $this->maxItemCompatibility;
    }

    /**
     * Sets a new maxItemCompatibility
     *
     * Specifies the default site setting for the maximum number of compatible applications allowed per item when adding or revising items with parts compatibility.
     *  <br><br>
     *  Parts compatibility listings contain structured information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     *  <br><br>
     *  This field applies only to listings in which compatibility is specified by application manually when listing or revising an item. Entering parts compatibility by application manually specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies, using <b class="con">Item.ItemCompatibilityList</b>.
     *
     * @param int $maxItemCompatibility
     * @return self
     */
    public function setMaxItemCompatibility($maxItemCompatibility)
    {
        $this->maxItemCompatibility = $maxItemCompatibility;
        return $this;
    }

    /**
     * Gets as conditionEnabled
     *
     * Specifies the default site setting for whether most categories support (or require) <b>Item.ConditionID</b> in listings. Use this to determine whether to use <b>ConditionID</b> in <b>AddItem</b> and related calls. See <b>ConditionValues</b> for a list of valid IDs.
     *  <br><br>
     *  In general, this is set to <code>Disabled</code>, and meta-categories
     *  (level 1 categories) define their own default settings.
     *
     * @return string
     */
    public function getConditionEnabled()
    {
        return $this->conditionEnabled;
    }

    /**
     * Sets a new conditionEnabled
     *
     * Specifies the default site setting for whether most categories support (or require) <b>Item.ConditionID</b> in listings. Use this to determine whether to use <b>ConditionID</b> in <b>AddItem</b> and related calls. See <b>ConditionValues</b> for a list of valid IDs.
     *  <br><br>
     *  In general, this is set to <code>Disabled</code>, and meta-categories
     *  (level 1 categories) define their own default settings.
     *
     * @param string $conditionEnabled
     * @return self
     */
    public function setConditionEnabled($conditionEnabled)
    {
        $this->conditionEnabled = $conditionEnabled;
        return $this;
    }

    /**
     * Gets as conditionValues
     *
     * This container shows the site default item condition values. Individual leaf categories define their own default set of item condition values and always override this list.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ConditionValuesType
     */
    public function getConditionValues()
    {
        return $this->conditionValues;
    }

    /**
     * Sets a new conditionValues
     *
     * This container shows the site default item condition values. Individual leaf categories define their own default set of item condition values and always override this list.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ConditionValuesType $conditionValues
     * @return self
     */
    public function setConditionValues(\Nogrod\eBaySDK\MerchantData\ConditionValuesType $conditionValues)
    {
        $this->conditionValues = $conditionValues;
        return $this;
    }

    /**
     * Gets as specialFeatures
     *
     * This container shows the site default special item condition values, such as <b>Certified - Refurbished</b> condition (condition ID 2000), <b>Excellent - Refurbished</b> condition (condition ID 2010), <b>Very Good - Refurbished</b> condition (condition ID 2020), and <b>Good - Refurbished</b> condition (condition ID 2030). A seller must be pre-qualified by eBay to list items with the any of these refurbished item conditions.
     *  <br/><br/>
     *  All other item conditions supported by a category will be returned in the <b>ConditionValues</b> container instead. Individual leaf categories define their own default set of item condition values and always override this list.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ConditionValuesType
     */
    public function getSpecialFeatures()
    {
        return $this->specialFeatures;
    }

    /**
     * Sets a new specialFeatures
     *
     * This container shows the site default special item condition values, such as <b>Certified - Refurbished</b> condition (condition ID 2000), <b>Excellent - Refurbished</b> condition (condition ID 2010), <b>Very Good - Refurbished</b> condition (condition ID 2020), and <b>Good - Refurbished</b> condition (condition ID 2030). A seller must be pre-qualified by eBay to list items with the any of these refurbished item conditions.
     *  <br/><br/>
     *  All other item conditions supported by a category will be returned in the <b>ConditionValues</b> container instead. Individual leaf categories define their own default set of item condition values and always override this list.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ConditionValuesType $specialFeatures
     * @return self
     */
    public function setSpecialFeatures(\Nogrod\eBaySDK\MerchantData\ConditionValuesType $specialFeatures)
    {
        $this->specialFeatures = $specialFeatures;
        return $this;
    }

    /**
     * Gets as valueCategory
     *
     * Specifies the default site setting for whether most categories follow specific rules associated with "value categories".
     *  <br>
     *  <br>
     *  Some eBay sites may select a few categories and designate them as "value categories". These are typically selected from categories where buyers can find great deals. (Not all categories with great deals are designated as value categories.) This designation can change over time.
     *  <br>
     *  <br>
     *  While a category is designated as a value category (i.e., when <b>ValueCategory</b> = <code>true</code>), it is subject to the following rule: Items in value categories can only be listed in one category.
     *  <br>
     *  <br>
     *  For example, if you attempt to list in two categories and the <b>PrimaryCategory</b> or <b>SecondaryCategory</b> is a value category, then eBay drops the <b>SecondaryCategory</b> and lists the item in the <b>PrimaryCategory</b> only. Similarly, if you attempt to add a secondary category to an existing listing, or you change the category for an existing listing, and if the primary or secondary category is a value category, then eBay drops the secondary category.
     *
     * @return bool
     */
    public function getValueCategory()
    {
        return $this->valueCategory;
    }

    /**
     * Sets a new valueCategory
     *
     * Specifies the default site setting for whether most categories follow specific rules associated with "value categories".
     *  <br>
     *  <br>
     *  Some eBay sites may select a few categories and designate them as "value categories". These are typically selected from categories where buyers can find great deals. (Not all categories with great deals are designated as value categories.) This designation can change over time.
     *  <br>
     *  <br>
     *  While a category is designated as a value category (i.e., when <b>ValueCategory</b> = <code>true</code>), it is subject to the following rule: Items in value categories can only be listed in one category.
     *  <br>
     *  <br>
     *  For example, if you attempt to list in two categories and the <b>PrimaryCategory</b> or <b>SecondaryCategory</b> is a value category, then eBay drops the <b>SecondaryCategory</b> and lists the item in the <b>PrimaryCategory</b> only. Similarly, if you attempt to add a secondary category to an existing listing, or you change the category for an existing listing, and if the primary or secondary category is a value category, then eBay drops the secondary category.
     *
     * @param bool $valueCategory
     * @return self
     */
    public function setValueCategory($valueCategory)
    {
        $this->valueCategory = $valueCategory;
        return $this;
    }

    /**
     * Gets as productCreationEnabled
     *
     * Specifies the default site setting for whether most categories support creating/revising listings based off an eBay catalog product.
     *
     * @return string
     */
    public function getProductCreationEnabled()
    {
        return $this->productCreationEnabled;
    }

    /**
     * Sets a new productCreationEnabled
     *
     * Specifies the default site setting for whether most categories support creating/revising listings based off an eBay catalog product.
     *
     * @param string $productCreationEnabled
     * @return self
     */
    public function setProductCreationEnabled($productCreationEnabled)
    {
        $this->productCreationEnabled = $productCreationEnabled;
        return $this;
    }

    /**
     * Gets as eANEnabled
     *
     * This enumeration value indicates whether or not most categories on the specified eBay site support the use of European Article Numbers (EANs) to help create a listing in an <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API call.
     *  <b></b>
     *  <ul>
     *  <li>A value of <code>Disabled</code> indicates that EANs cannot be used for most categories on the specified eBay site. </li>
     *  <li>A value of <code>Enabled</code> indicates that EANs can be used for most categories on the specified eBay site. </li>
     *  <li>A value of <code>Required</code> indicates that an EAN is required for most categories on the specified eBay site. </li>
     *  </ul>
     *
     * @return string
     */
    public function getEANEnabled()
    {
        return $this->eANEnabled;
    }

    /**
     * Sets a new eANEnabled
     *
     * This enumeration value indicates whether or not most categories on the specified eBay site support the use of European Article Numbers (EANs) to help create a listing in an <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API call.
     *  <b></b>
     *  <ul>
     *  <li>A value of <code>Disabled</code> indicates that EANs cannot be used for most categories on the specified eBay site. </li>
     *  <li>A value of <code>Enabled</code> indicates that EANs can be used for most categories on the specified eBay site. </li>
     *  <li>A value of <code>Required</code> indicates that an EAN is required for most categories on the specified eBay site. </li>
     *  </ul>
     *
     * @param string $eANEnabled
     * @return self
     */
    public function setEANEnabled($eANEnabled)
    {
        $this->eANEnabled = $eANEnabled;
        return $this;
    }

    /**
     * Gets as iSBNEnabled
     *
     * This enumeration value indicates whether or not most categories on the specified eBay site support the use of International Standard Book Numbers (ISBNs) to help create a listing in an <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API call.
     *  <br/><br/>
     *  A value of <code>Disabled</code> indicates that ISBNs cannot be used for most categories on the specified eBay site, a value of <code>Enabled</code> indicates that ISBNs can be used for most categories on the specified eBay site, and a value of <code>Required</code> indicates that an ISBN is required for most categories on the specified eBay site.
     *
     * @return string
     */
    public function getISBNEnabled()
    {
        return $this->iSBNEnabled;
    }

    /**
     * Sets a new iSBNEnabled
     *
     * This enumeration value indicates whether or not most categories on the specified eBay site support the use of International Standard Book Numbers (ISBNs) to help create a listing in an <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API call.
     *  <br/><br/>
     *  A value of <code>Disabled</code> indicates that ISBNs cannot be used for most categories on the specified eBay site, a value of <code>Enabled</code> indicates that ISBNs can be used for most categories on the specified eBay site, and a value of <code>Required</code> indicates that an ISBN is required for most categories on the specified eBay site.
     *
     * @param string $iSBNEnabled
     * @return self
     */
    public function setISBNEnabled($iSBNEnabled)
    {
        $this->iSBNEnabled = $iSBNEnabled;
        return $this;
    }

    /**
     * Gets as uPCEnabled
     *
     * This enumeration value indicates whether or not most categories on
     *  the specified eBay site support the use of Universal Product Codes
     *  (UPCs) to help create a listing in an
     *  Add/Revise/Relist/Verify API call. A value of
     *  <code>Disabled</code> indicates that UPCs cannot be
     *  used for most categories on the specified eBay site, a value of
     *  <code>Enabled</code> indicates that UPCs can be used
     *  for most categories on the specified eBay site, and a value of
     *  <code>Required</code> indicates that a UPC is required
     *  for most categories on the specified eBay site.
     *
     * @return string
     */
    public function getUPCEnabled()
    {
        return $this->uPCEnabled;
    }

    /**
     * Sets a new uPCEnabled
     *
     * This enumeration value indicates whether or not most categories on
     *  the specified eBay site support the use of Universal Product Codes
     *  (UPCs) to help create a listing in an
     *  Add/Revise/Relist/Verify API call. A value of
     *  <code>Disabled</code> indicates that UPCs cannot be
     *  used for most categories on the specified eBay site, a value of
     *  <code>Enabled</code> indicates that UPCs can be used
     *  for most categories on the specified eBay site, and a value of
     *  <code>Required</code> indicates that a UPC is required
     *  for most categories on the specified eBay site.
     *
     * @param string $uPCEnabled
     * @return self
     */
    public function setUPCEnabled($uPCEnabled)
    {
        $this->uPCEnabled = $uPCEnabled;
        return $this;
    }

    /**
     * Gets as maxGranularFitmentCount
     *
     * Specifies the maximum fitment count. Sellers can provide up to
     *  1000 fitments at the lowest level of granularity.
     *
     * @return int
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->maxGranularFitmentCount;
    }

    /**
     * Sets a new maxGranularFitmentCount
     *
     * Specifies the maximum fitment count. Sellers can provide up to
     *  1000 fitments at the lowest level of granularity.
     *
     * @param int $maxGranularFitmentCount
     * @return self
     */
    public function setMaxGranularFitmentCount($maxGranularFitmentCount)
    {
        $this->maxGranularFitmentCount = $maxGranularFitmentCount;
        return $this;
    }

    /**
     * Gets as compatibleVehicleType
     *
     * Indicates the type of vehicle; car, truck, boat, or motorcycle.
     *
     * @return string
     */
    public function getCompatibleVehicleType()
    {
        return $this->compatibleVehicleType;
    }

    /**
     * Sets a new compatibleVehicleType
     *
     * Indicates the type of vehicle; car, truck, boat, or motorcycle.
     *
     * @param string $compatibleVehicleType
     * @return self
     */
    public function setCompatibleVehicleType($compatibleVehicleType)
    {
        $this->compatibleVehicleType = $compatibleVehicleType;
        return $this;
    }

    /**
     * Gets as paymentOptionsGroup
     *
     * This field is deprecated
     *
     * @return string
     */
    public function getPaymentOptionsGroup()
    {
        return $this->paymentOptionsGroup;
    }

    /**
     * Sets a new paymentOptionsGroup
     *
     * This field is deprecated
     *
     * @param string $paymentOptionsGroup
     * @return self
     */
    public function setPaymentOptionsGroup($paymentOptionsGroup)
    {
        $this->paymentOptionsGroup = $paymentOptionsGroup;
        return $this;
    }

    /**
     * Gets as shippingProfileCategoryGroup
     *
     * Specifies what categories the Shipping profile is applicable to.
     *  Only returned when this value (or this category's setting)
     *  overrides the value inherited from the category's parent.
     *
     * @return string
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->shippingProfileCategoryGroup;
    }

    /**
     * Sets a new shippingProfileCategoryGroup
     *
     * Specifies what categories the Shipping profile is applicable to.
     *  Only returned when this value (or this category's setting)
     *  overrides the value inherited from the category's parent.
     *
     * @param string $shippingProfileCategoryGroup
     * @return self
     */
    public function setShippingProfileCategoryGroup($shippingProfileCategoryGroup)
    {
        $this->shippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as paymentProfileCategoryGroup
     *
     * Specifies what categories the Payment profile is applicable to.
     *
     * @return string
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->paymentProfileCategoryGroup;
    }

    /**
     * Sets a new paymentProfileCategoryGroup
     *
     * Specifies what categories the Payment profile is applicable to.
     *
     * @param string $paymentProfileCategoryGroup
     * @return self
     */
    public function setPaymentProfileCategoryGroup($paymentProfileCategoryGroup)
    {
        $this->paymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as returnPolicyProfileCategoryGroup
     *
     * Specifies what categories the Return Policy profile is applicable to.
     *
     * @return string
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->returnPolicyProfileCategoryGroup;
    }

    /**
     * Sets a new returnPolicyProfileCategoryGroup
     *
     * Specifies what categories the Return Policy profile is applicable to.
     *
     * @param string $returnPolicyProfileCategoryGroup
     * @return self
     */
    public function setReturnPolicyProfileCategoryGroup($returnPolicyProfileCategoryGroup)
    {
        $this->returnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as vINSupported
     *
     * After EOL Attributes, VIN will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports VIN.
     *
     * @return bool
     */
    public function getVINSupported()
    {
        return $this->vINSupported;
    }

    /**
     * Sets a new vINSupported
     *
     * After EOL Attributes, VIN will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports VIN.
     *
     * @param bool $vINSupported
     * @return self
     */
    public function setVINSupported($vINSupported)
    {
        $this->vINSupported = $vINSupported;
        return $this;
    }

    /**
     * Gets as vRMSupported
     *
     * After EOL Attributes, VRM will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports VRM.
     *
     * @return bool
     */
    public function getVRMSupported()
    {
        return $this->vRMSupported;
    }

    /**
     * Sets a new vRMSupported
     *
     * After EOL Attributes, VRM will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports VRM.
     *
     * @param bool $vRMSupported
     * @return self
     */
    public function setVRMSupported($vRMSupported)
    {
        $this->vRMSupported = $vRMSupported;
        return $this;
    }

    /**
     * Gets as sellerProvidedTitleSupported
     *
     * After EOL Attributes, Seller Provided Title will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports Seller Provided Title.
     *
     * @return bool
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->sellerProvidedTitleSupported;
    }

    /**
     * Sets a new sellerProvidedTitleSupported
     *
     * After EOL Attributes, Seller Provided Title will no longer be supported as primary attributes,
     *  rather consumers should use new tag. This feature helps consumers in identifying
     *  if category supports Seller Provided Title.
     *
     * @param bool $sellerProvidedTitleSupported
     * @return self
     */
    public function setSellerProvidedTitleSupported($sellerProvidedTitleSupported)
    {
        $this->sellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        return $this;
    }

    /**
     * Gets as depositSupported
     *
     * After EOL Attributes, Deposit will no longer be supported as primary attributes,
     *  rather consumers should use new tags. This feature helps consumers in identifying
     *  if category supports Deposit.
     *
     * @return bool
     */
    public function getDepositSupported()
    {
        return $this->depositSupported;
    }

    /**
     * Sets a new depositSupported
     *
     * After EOL Attributes, Deposit will no longer be supported as primary attributes,
     *  rather consumers should use new tags. This feature helps consumers in identifying
     *  if category supports Deposit.
     *
     * @param bool $depositSupported
     * @return self
     */
    public function setDepositSupported($depositSupported)
    {
        $this->depositSupported = $depositSupported;
        return $this;
    }

    /**
     * Gets as globalShippingEnabled
     *
     * Indicates whether or not the the specified category is enabled for Global Shipping Program.
     *
     * @return bool
     */
    public function getGlobalShippingEnabled()
    {
        return $this->globalShippingEnabled;
    }

    /**
     * Sets a new globalShippingEnabled
     *
     * Indicates whether or not the the specified category is enabled for Global Shipping Program.
     *
     * @param bool $globalShippingEnabled
     * @return self
     */
    public function setGlobalShippingEnabled($globalShippingEnabled)
    {
        $this->globalShippingEnabled = $globalShippingEnabled;
        return $this;
    }

    /**
     * Gets as additionalCompatibilityEnabled
     *
     * Indicates whether most categories on the specified eBay site support the Boat and Motorcycle Parts Compatibility feature. The Boats Parts Compatibility feature allows sellers to list their boats' parts and accessories items with parts compatibility name-value pairs specific to boats, and allows potential buyers to search for these items using parts compatibility search fields.
     *
     * @return bool
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->additionalCompatibilityEnabled;
    }

    /**
     * Sets a new additionalCompatibilityEnabled
     *
     * Indicates whether most categories on the specified eBay site support the Boat and Motorcycle Parts Compatibility feature. The Boats Parts Compatibility feature allows sellers to list their boats' parts and accessories items with parts compatibility name-value pairs specific to boats, and allows potential buyers to search for these items using parts compatibility search fields.
     *
     * @param bool $additionalCompatibilityEnabled
     * @return self
     */
    public function setAdditionalCompatibilityEnabled($additionalCompatibilityEnabled)
    {
        $this->additionalCompatibilityEnabled = $additionalCompatibilityEnabled;
        return $this;
    }

    /**
     * Gets as pickupDropOffEnabled
     *
     * Indicates whether most categories on the specified eBay site
     *  support the "Click and Collect" feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available.
     *  <br/><br/>
     *  The "Click and Collect" feature is only available to large merchants on the UK and Australia sites. The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @return bool
     */
    public function getPickupDropOffEnabled()
    {
        return $this->pickupDropOffEnabled;
    }

    /**
     * Sets a new pickupDropOffEnabled
     *
     * Indicates whether most categories on the specified eBay site
     *  support the "Click and Collect" feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available.
     *  <br/><br/>
     *  The "Click and Collect" feature is only available to large merchants on the UK and Australia sites. The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @param bool $pickupDropOffEnabled
     * @return self
     */
    public function setPickupDropOffEnabled($pickupDropOffEnabled)
    {
        $this->pickupDropOffEnabled = $pickupDropOffEnabled;
        return $this;
    }

    /**
     * Gets as digitalGoodDeliveryEnabled
     *
     * This field indicates whether or not most categories on the specified eBay site support digital gift cards.
     *  <br/><br/>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time</li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="http://pages.ebay.com/help/policies/gift.html">Gift cards policy</a> Help page.
     *
     * @return bool
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->digitalGoodDeliveryEnabled;
    }

    /**
     * Sets a new digitalGoodDeliveryEnabled
     *
     * This field indicates whether or not most categories on the specified eBay site support digital gift cards.
     *  <br/><br/>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time</li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="http://pages.ebay.com/help/policies/gift.html">Gift cards policy</a> Help page.
     *
     * @param bool $digitalGoodDeliveryEnabled
     * @return self
     */
    public function setDigitalGoodDeliveryEnabled($digitalGoodDeliveryEnabled)
    {
        $this->digitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        return $this;
    }

    /**
     * Gets as epidSupported
     *
     * This field is returned as <code>true</code> if one or more categories on an eBay site
     *  support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API
     *  call to identify which motorcycles and/or scooters are compatible with a motor
     *  vehicle part or accessory. ePIDs can only be used to identify motorcycles and
     *  scooters on the Germany and UK sites. <br/><br/> For more
     *  information on using an ePID to identify a compatible motorcycle or scooter
     *  through an Add/Revise/Relist API call on the Germany or UK site, see the
     *  documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request
     *  .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name
     *  ValueList</a> container.
     *
     * @return bool
     */
    public function getEpidSupported()
    {
        return $this->epidSupported;
    }

    /**
     * Sets a new epidSupported
     *
     * This field is returned as <code>true</code> if one or more categories on an eBay site
     *  support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API
     *  call to identify which motorcycles and/or scooters are compatible with a motor
     *  vehicle part or accessory. ePIDs can only be used to identify motorcycles and
     *  scooters on the Germany and UK sites. <br/><br/> For more
     *  information on using an ePID to identify a compatible motorcycle or scooter
     *  through an Add/Revise/Relist API call on the Germany or UK site, see the
     *  documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request
     *  .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name
     *  ValueList</a> container.
     *
     * @param bool $epidSupported
     * @return self
     */
    public function setEpidSupported($epidSupported)
    {
        $this->epidSupported = $epidSupported;
        return $this;
    }

    /**
     * Gets as kTypeSupported
     *
     * This field is returned as <code>true</code> if one or more categories on an eBay site
     *  support the use of a K Type vehicle number in an Add/Revise/Relist API call
     *  to identify which cars and/or trucks are compatible with a motor vehicle part
     *  or accessory. K type vehicle numbers can only be used to identify cars and
     *  trucks on the Germany site. <br/><br/> For more information on
     *  using a K Type vehicle number to identify a compatible car or truck through an
     *  Add/Revise/Relist API call on the Germany site, see the documentation for the
     *  <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request
     *  .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name
     *  ValueList</a> container.
     *
     * @return bool
     */
    public function getKTypeSupported()
    {
        return $this->kTypeSupported;
    }

    /**
     * Sets a new kTypeSupported
     *
     * This field is returned as <code>true</code> if one or more categories on an eBay site
     *  support the use of a K Type vehicle number in an Add/Revise/Relist API call
     *  to identify which cars and/or trucks are compatible with a motor vehicle part
     *  or accessory. K type vehicle numbers can only be used to identify cars and
     *  trucks on the Germany site. <br/><br/> For more information on
     *  using a K Type vehicle number to identify a compatible car or truck through an
     *  Add/Revise/Relist API call on the Germany site, see the documentation for the
     *  <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request
     *  .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name
     *  ValueList</a> container.
     *
     * @param bool $kTypeSupported
     * @return self
     */
    public function setKTypeSupported($kTypeSupported)
    {
        $this->kTypeSupported = $kTypeSupported;
        return $this;
    }

    /**
     * Gets as productRequiredEnabled
     *
     * This field is deprecated. No eBay categories require listings based on an eBay catalog product.
     *
     * @return string
     */
    public function getProductRequiredEnabled()
    {
        return $this->productRequiredEnabled;
    }

    /**
     * Sets a new productRequiredEnabled
     *
     * This field is deprecated. No eBay categories require listings based on an eBay catalog product.
     *
     * @param string $productRequiredEnabled
     * @return self
     */
    public function setProductRequiredEnabled($productRequiredEnabled)
    {
        $this->productRequiredEnabled = $productRequiredEnabled;
        return $this;
    }

    /**
     * Adds as domesticReturnsAccepted
     *
     * This field returns the options a seller has for accepting or not accepting returns from domestic buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return self
     * @param string $domesticReturnsAccepted
     */
    public function addToDomesticReturnsAcceptedValues($domesticReturnsAccepted)
    {
        $this->domesticReturnsAcceptedValues[] = $domesticReturnsAccepted;
        return $this;
    }

    /**
     * isset domesticReturnsAcceptedValues
     *
     * This field returns the options a seller has for accepting or not accepting returns from domestic buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticReturnsAcceptedValues($index)
    {
        return isset($this->domesticReturnsAcceptedValues[$index]);
    }

    /**
     * unset domesticReturnsAcceptedValues
     *
     * This field returns the options a seller has for accepting or not accepting returns from domestic buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticReturnsAcceptedValues($index)
    {
        unset($this->domesticReturnsAcceptedValues[$index]);
    }

    /**
     * Gets as domesticReturnsAcceptedValues
     *
     * This field returns the options a seller has for accepting or not accepting returns from domestic buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return string[]
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->domesticReturnsAcceptedValues;
    }

    /**
     * Sets a new domesticReturnsAcceptedValues
     *
     * This field returns the options a seller has for accepting or not accepting returns from domestic buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param string $domesticReturnsAcceptedValues
     * @return self
     */
    public function setDomesticReturnsAcceptedValues(array $domesticReturnsAcceptedValues)
    {
        $this->domesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        return $this;
    }

    /**
     * Adds as internationalReturnsAccepted
     *
     * This field returns the options a seller has for accepting or not accepting returns from international buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return self
     * @param string $internationalReturnsAccepted
     */
    public function addToInternationalReturnsAcceptedValues($internationalReturnsAccepted)
    {
        $this->internationalReturnsAcceptedValues[] = $internationalReturnsAccepted;
        return $this;
    }

    /**
     * isset internationalReturnsAcceptedValues
     *
     * This field returns the options a seller has for accepting or not accepting returns from international buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalReturnsAcceptedValues($index)
    {
        return isset($this->internationalReturnsAcceptedValues[$index]);
    }

    /**
     * unset internationalReturnsAcceptedValues
     *
     * This field returns the options a seller has for accepting or not accepting returns from international buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalReturnsAcceptedValues($index)
    {
        unset($this->internationalReturnsAcceptedValues[$index]);
    }

    /**
     * Gets as internationalReturnsAcceptedValues
     *
     * This field returns the options a seller has for accepting or not accepting returns from international buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return string[]
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->internationalReturnsAcceptedValues;
    }

    /**
     * Sets a new internationalReturnsAcceptedValues
     *
     * This field returns the options a seller has for accepting or not accepting returns from international buyers.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param string $internationalReturnsAcceptedValues
     * @return self
     */
    public function setInternationalReturnsAcceptedValues(array $internationalReturnsAcceptedValues)
    {
        $this->internationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        return $this;
    }

    /**
     * Adds as domesticReturnsDuration
     *
     * This field returns the options a seller has for specifying the return period for returns from domestic buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return self
     * @param string $domesticReturnsDuration
     */
    public function addToDomesticReturnsDurationValues($domesticReturnsDuration)
    {
        $this->domesticReturnsDurationValues[] = $domesticReturnsDuration;
        return $this;
    }

    /**
     * isset domesticReturnsDurationValues
     *
     * This field returns the options a seller has for specifying the return period for returns from domestic buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticReturnsDurationValues($index)
    {
        return isset($this->domesticReturnsDurationValues[$index]);
    }

    /**
     * unset domesticReturnsDurationValues
     *
     * This field returns the options a seller has for specifying the return period for returns from domestic buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticReturnsDurationValues($index)
    {
        unset($this->domesticReturnsDurationValues[$index]);
    }

    /**
     * Gets as domesticReturnsDurationValues
     *
     * This field returns the options a seller has for specifying the return period for returns from domestic buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return string[]
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->domesticReturnsDurationValues;
    }

    /**
     * Sets a new domesticReturnsDurationValues
     *
     * This field returns the options a seller has for specifying the return period for returns from domestic buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param string $domesticReturnsDurationValues
     * @return self
     */
    public function setDomesticReturnsDurationValues(array $domesticReturnsDurationValues)
    {
        $this->domesticReturnsDurationValues = $domesticReturnsDurationValues;
        return $this;
    }

    /**
     * Adds as internationalReturnsDuration
     *
     * This field returns the options a seller has for specifying the return period for returns from international buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return self
     * @param string $internationalReturnsDuration
     */
    public function addToInternationalReturnsDurationValues($internationalReturnsDuration)
    {
        $this->internationalReturnsDurationValues[] = $internationalReturnsDuration;
        return $this;
    }

    /**
     * isset internationalReturnsDurationValues
     *
     * This field returns the options a seller has for specifying the return period for returns from international buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalReturnsDurationValues($index)
    {
        return isset($this->internationalReturnsDurationValues[$index]);
    }

    /**
     * unset internationalReturnsDurationValues
     *
     * This field returns the options a seller has for specifying the return period for returns from international buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalReturnsDurationValues($index)
    {
        unset($this->internationalReturnsDurationValues[$index]);
    }

    /**
     * Gets as internationalReturnsDurationValues
     *
     * This field returns the options a seller has for specifying the return period for returns from international buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return string[]
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->internationalReturnsDurationValues;
    }

    /**
     * Sets a new internationalReturnsDurationValues
     *
     * This field returns the options a seller has for specifying the return period for returns from international buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param string $internationalReturnsDurationValues
     * @return self
     */
    public function setInternationalReturnsDurationValues(array $internationalReturnsDurationValues)
    {
        $this->internationalReturnsDurationValues = $internationalReturnsDurationValues;
        return $this;
    }

    /**
     * Adds as domesticReturnsShipmentPayee
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return self
     * @param string $domesticReturnsShipmentPayee
     */
    public function addToDomesticReturnsShipmentPayeeValues($domesticReturnsShipmentPayee)
    {
        $this->domesticReturnsShipmentPayeeValues[] = $domesticReturnsShipmentPayee;
        return $this;
    }

    /**
     * isset domesticReturnsShipmentPayeeValues
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticReturnsShipmentPayeeValues($index)
    {
        return isset($this->domesticReturnsShipmentPayeeValues[$index]);
    }

    /**
     * unset domesticReturnsShipmentPayeeValues
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticReturnsShipmentPayeeValues($index)
    {
        unset($this->domesticReturnsShipmentPayeeValues[$index]);
    }

    /**
     * Gets as domesticReturnsShipmentPayeeValues
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return string[]
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->domesticReturnsShipmentPayeeValues;
    }

    /**
     * Sets a new domesticReturnsShipmentPayeeValues
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param string $domesticReturnsShipmentPayeeValues
     * @return self
     */
    public function setDomesticReturnsShipmentPayeeValues(array $domesticReturnsShipmentPayeeValues)
    {
        $this->domesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        return $this;
    }

    /**
     * Adds as internationalReturnsShipmentPayee
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return self
     * @param string $internationalReturnsShipmentPayee
     */
    public function addToInternationalReturnsShipmentPayeeValues($internationalReturnsShipmentPayee)
    {
        $this->internationalReturnsShipmentPayeeValues[] = $internationalReturnsShipmentPayee;
        return $this;
    }

    /**
     * isset internationalReturnsShipmentPayeeValues
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalReturnsShipmentPayeeValues($index)
    {
        return isset($this->internationalReturnsShipmentPayeeValues[$index]);
    }

    /**
     * unset internationalReturnsShipmentPayeeValues
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalReturnsShipmentPayeeValues($index)
    {
        unset($this->internationalReturnsShipmentPayeeValues[$index]);
    }

    /**
     * Gets as internationalReturnsShipmentPayeeValues
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return string[]
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->internationalReturnsShipmentPayeeValues;
    }

    /**
     * Sets a new internationalReturnsShipmentPayeeValues
     *
     * This field returns the options a seller has for specifying who pays the return shipping cost for international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param string $internationalReturnsShipmentPayeeValues
     * @return self
     */
    public function setInternationalReturnsShipmentPayeeValues(array $internationalReturnsShipmentPayeeValues)
    {
        $this->internationalReturnsShipmentPayeeValues = $internationalReturnsShipmentPayeeValues;
        return $this;
    }

    /**
     * Adds as domesticRefundMethod
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for domestic returns. This field returns the options a seller has for specifying how they will handle domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return self
     * @param string $domesticRefundMethod
     */
    public function addToDomesticRefundMethodValues($domesticRefundMethod)
    {
        $this->domesticRefundMethodValues[] = $domesticRefundMethod;
        return $this;
    }

    /**
     * isset domesticRefundMethodValues
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for domestic returns. This field returns the options a seller has for specifying how they will handle domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticRefundMethodValues($index)
    {
        return isset($this->domesticRefundMethodValues[$index]);
    }

    /**
     * unset domesticRefundMethodValues
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for domestic returns. This field returns the options a seller has for specifying how they will handle domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticRefundMethodValues($index)
    {
        unset($this->domesticRefundMethodValues[$index]);
    }

    /**
     * Gets as domesticRefundMethodValues
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for domestic returns. This field returns the options a seller has for specifying how they will handle domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return string[]
     */
    public function getDomesticRefundMethodValues()
    {
        return $this->domesticRefundMethodValues;
    }

    /**
     * Sets a new domesticRefundMethodValues
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for domestic returns. This field returns the options a seller has for specifying how they will handle domestic returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param string $domesticRefundMethodValues
     * @return self
     */
    public function setDomesticRefundMethodValues(array $domesticRefundMethodValues)
    {
        $this->domesticRefundMethodValues = $domesticRefundMethodValues;
        return $this;
    }

    /**
     * Adds as internationalRefundMethod
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for international returns. This field returns the options a seller has for specifying how they will handle international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return self
     * @param string $internationalRefundMethod
     */
    public function addToInternationalRefundMethodValues($internationalRefundMethod)
    {
        $this->internationalRefundMethodValues[] = $internationalRefundMethod;
        return $this;
    }

    /**
     * isset internationalRefundMethodValues
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for international returns. This field returns the options a seller has for specifying how they will handle international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalRefundMethodValues($index)
    {
        return isset($this->internationalRefundMethodValues[$index]);
    }

    /**
     * unset internationalRefundMethodValues
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for international returns. This field returns the options a seller has for specifying how they will handle international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalRefundMethodValues($index)
    {
        unset($this->internationalRefundMethodValues[$index]);
    }

    /**
     * Gets as internationalRefundMethodValues
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for international returns. This field returns the options a seller has for specifying how they will handle international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return string[]
     */
    public function getInternationalRefundMethodValues()
    {
        return $this->internationalRefundMethodValues;
    }

    /**
     * Sets a new internationalRefundMethodValues
     *
     * In US, sellers can offer an item replacement in addition to offering money-back for international returns. This field returns the options a seller has for specifying how they will handle international returns.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param string $internationalRefundMethodValues
     * @return self
     */
    public function setInternationalRefundMethodValues(array $internationalRefundMethodValues)
    {
        $this->internationalRefundMethodValues = $internationalRefundMethodValues;
        return $this;
    }

    /**
     * Gets as returnPolicyDescriptionEnabled
     *
     * In some EU countries, sellers are legally required to describe the return policy they offer. This field returns a flag that indicates whether or not the seller can specify their return-policy details in the associated marketplace.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @return bool
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->returnPolicyDescriptionEnabled;
    }

    /**
     * Sets a new returnPolicyDescriptionEnabled
     *
     * In some EU countries, sellers are legally required to describe the return policy they offer. This field returns a flag that indicates whether or not the seller can specify their return-policy details in the associated marketplace.
     *  <br><br>
     *  The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     *
     * @param bool $returnPolicyDescriptionEnabled
     * @return self
     */
    public function setReturnPolicyDescriptionEnabled($returnPolicyDescriptionEnabled)
    {
        $this->returnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingDuration();
        if (null !== $value && !empty($this->getListingDuration())) {
            $writer->write(array_map(function ($v) {return ["ListingDuration" => $v];}, $value));
        }
        $value = $this->getShippingTermsRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTermsRequired", $value);
        }
        $value = $this->getBestOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled", $value);
        }
        $value = $this->getDutchBINEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DutchBINEnabled", $value);
        }
        $value = $this->getUserConsentRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserConsentRequired", $value);
        }
        $value = $this->getHomePageFeaturedEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HomePageFeaturedEnabled", $value);
        }
        $value = $this->getProPackEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProPackEnabled", $value);
        }
        $value = $this->getBasicUpgradePackEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BasicUpgradePackEnabled", $value);
        }
        $value = $this->getValuePackEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValuePackEnabled", $value);
        }
        $value = $this->getProPackPlusEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProPackPlusEnabled", $value);
        }
        $value = $this->getAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdFormatEnabled", $value);
        }
        $value = $this->getBestOfferCounterEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferCounterEnabled", $value);
        }
        $value = $this->getBestOfferAutoDeclineEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferAutoDeclineEnabled", $value);
        }
        $value = $this->getLocalMarketSpecialitySubscription();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketSpecialitySubscription", $value);
        }
        $value = $this->getLocalMarketRegularSubscription();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketRegularSubscription", $value);
        }
        $value = $this->getLocalMarketPremiumSubscription();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPremiumSubscription", $value);
        }
        $value = $this->getLocalMarketNonSubscription();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketNonSubscription", $value);
        }
        $value = $this->getExpressEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressEnabled", $value);
        }
        $value = $this->getExpressPicturesRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressPicturesRequired", $value);
        }
        $value = $this->getExpressConditionRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressConditionRequired", $value);
        }
        $value = $this->getMinimumReservePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumReservePrice", $value);
        }
        $value = $this->getSellerContactDetailsEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerContactDetailsEnabled", $value);
        }
        $value = $this->getTransactionConfirmationRequestEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionConfirmationRequestEnabled", $value);
        }
        $value = $this->getStoreInventoryEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreInventoryEnabled", $value);
        }
        $value = $this->getSkypeMeTransactionalEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SkypeMeTransactionalEnabled", $value);
        }
        $value = $this->getSkypeMeNonTransactionalEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SkypeMeNonTransactionalEnabled", $value);
        }
        $value = $this->getLocalListingDistancesRegular();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesRegular", $value);
        }
        $value = $this->getLocalListingDistancesSpecialty();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesSpecialty", $value);
        }
        $value = $this->getLocalListingDistancesNonSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesNonSubscription", $value);
        }
        $value = $this->getClassifiedAdPaymentMethodEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPaymentMethodEnabled", $value);
        }
        $value = $this->getClassifiedAdShippingMethodEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdShippingMethodEnabled", $value);
        }
        $value = $this->getClassifiedAdBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdBestOfferEnabled", $value);
        }
        $value = $this->getClassifiedAdCounterOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCounterOfferEnabled", $value);
        }
        $value = $this->getClassifiedAdAutoDeclineEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoDeclineEnabled", $value);
        }
        $value = $this->getClassifiedAdContactByPhoneEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByPhoneEnabled", $value);
        }
        $value = $this->getClassifiedAdContactByEmailEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByEmailEnabled", $value);
        }
        $value = $this->getSafePaymentRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SafePaymentRequired", $value);
        }
        $value = $this->getClassifiedAdPayPerLeadEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPayPerLeadEnabled", $value);
        }
        $value = $this->getItemSpecificsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecificsEnabled", $value);
        }
        $value = $this->getPaisaPayFullEscrowEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaisaPayFullEscrowEnabled", $value);
        }
        $value = $this->getISBNIdentifierEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ISBNIdentifierEnabled", $value);
        }
        $value = $this->getUPCIdentifierEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UPCIdentifierEnabled", $value);
        }
        $value = $this->getEANIdentifierEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EANIdentifierEnabled", $value);
        }
        $value = $this->getBrandMPNIdentifierEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BrandMPNIdentifierEnabled", $value);
        }
        $value = $this->getClassifiedAdAutoAcceptEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoAcceptEnabled", $value);
        }
        $value = $this->getBestOfferAutoAcceptEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferAutoAcceptEnabled", $value);
        }
        $value = $this->getCrossBorderTradeNorthAmericaEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeNorthAmericaEnabled", $value);
        }
        $value = $this->getCrossBorderTradeGBEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeGBEnabled", $value);
        }
        $value = $this->getCrossBorderTradeAustraliaEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeAustraliaEnabled", $value);
        }
        $value = $this->getPayPalBuyerProtectionEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalBuyerProtectionEnabled", $value);
        }
        $value = $this->getBuyerGuaranteeEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteeEnabled", $value);
        }
        $value = $this->getINEscrowWorkflowTimeline();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}INEscrowWorkflowTimeline", $value);
        }
        $value = $this->getCombinedFixedPriceTreatmentEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedFixedPriceTreatmentEnabled", $value);
        }
        $value = $this->getGalleryFeaturedDurations();
        if (null !== $value && !empty($this->getGalleryFeaturedDurations())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryFeaturedDurations", array_map(function ($v) {return ["Duration" => $v];}, $value));
        }
        $value = $this->getPayPalRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalRequired", $value);
        }
        $value = $this->getEBayMotorsProAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAdFormatEnabled", $value);
        }
        $value = $this->getEBayMotorsProContactByPhoneEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByPhoneEnabled", $value);
        }
        $value = $this->getEBayMotorsProPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPhoneCount", $value);
        }
        $value = $this->getEBayMotorsProContactByAddressEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByAddressEnabled", $value);
        }
        $value = $this->getEBayMotorsProStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProStreetCount", $value);
        }
        $value = $this->getEBayMotorsProCompanyNameEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCompanyNameEnabled", $value);
        }
        $value = $this->getEBayMotorsProContactByEmailEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByEmailEnabled", $value);
        }
        $value = $this->getEBayMotorsProBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProBestOfferEnabled", $value);
        }
        $value = $this->getEBayMotorsProAutoAcceptEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoAcceptEnabled", $value);
        }
        $value = $this->getEBayMotorsProAutoDeclineEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoDeclineEnabled", $value);
        }
        $value = $this->getEBayMotorsProPaymentMethodCheckOutEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPaymentMethodCheckOutEnabled", $value);
        }
        $value = $this->getEBayMotorsProShippingMethodEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProShippingMethodEnabled", $value);
        }
        $value = $this->getEBayMotorsProCounterOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCounterOfferEnabled", $value);
        }
        $value = $this->getEBayMotorsProSellerContactDetailsEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProSellerContactDetailsEnabled", $value);
        }
        $value = $this->getLocalMarketAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAdFormatEnabled", $value);
        }
        $value = $this->getLocalMarketContactByPhoneEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByPhoneEnabled", $value);
        }
        $value = $this->getLocalMarketPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPhoneCount", $value);
        }
        $value = $this->getLocalMarketContactByAddressEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByAddressEnabled", $value);
        }
        $value = $this->getLocalMarketStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketStreetCount", $value);
        }
        $value = $this->getLocalMarketCompanyNameEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketCompanyNameEnabled", $value);
        }
        $value = $this->getLocalMarketContactByEmailEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByEmailEnabled", $value);
        }
        $value = $this->getLocalMarketBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketBestOfferEnabled", $value);
        }
        $value = $this->getLocalMarketAutoAcceptEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoAcceptEnabled", $value);
        }
        $value = $this->getLocalMarketAutoDeclineEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoDeclineEnabled", $value);
        }
        $value = $this->getLocalMarketPaymentMethodCheckOutEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPaymentMethodCheckOutEnabled", $value);
        }
        $value = $this->getLocalMarketShippingMethodEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketShippingMethodEnabled", $value);
        }
        $value = $this->getLocalMarketCounterOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketCounterOfferEnabled", $value);
        }
        $value = $this->getLocalMarketSellerContactDetailsEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketSellerContactDetailsEnabled", $value);
        }
        $value = $this->getClassifiedAdPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPhoneCount", $value);
        }
        $value = $this->getClassifiedAdContactByAddressEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByAddressEnabled", $value);
        }
        $value = $this->getClassifiedAdStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdStreetCount", $value);
        }
        $value = $this->getClassifiedAdCompanyNameEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCompanyNameEnabled", $value);
        }
        $value = $this->getSpecialitySubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SpecialitySubscription", $value);
        }
        $value = $this->getRegularSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegularSubscription", $value);
        }
        $value = $this->getPremiumSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PremiumSubscription", $value);
        }
        $value = $this->getNonSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NonSubscription", $value);
        }
        $value = $this->getPayPalRequiredForStoreOwner();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalRequiredForStoreOwner", $value);
        }
        $value = $this->getReviseQuantityAllowed();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviseQuantityAllowed", $value);
        }
        $value = $this->getRevisePriceAllowed();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RevisePriceAllowed", $value);
        }
        $value = $this->getStoreOwnerExtendedListingDurationsEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurationsEnabled", $value);
        }
        $value = $this->getStoreOwnerExtendedListingDurations();
        if (null !== $value && !empty($this->getStoreOwnerExtendedListingDurations())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurations", array_map(function ($v) {return ["Duration" => $v];}, $value));
        }
        $value = $this->getReturnPolicyEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicyEnabled", $value);
        }
        $value = $this->getHandlingTimeEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HandlingTimeEnabled", $value);
        }
        $value = $this->getMaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCost", $value);
        }
        $value = $this->getMaxFlatShippingCostCBTExempt();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCostCBTExempt", $value);
        }
        $value = $this->getGroup1MaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Group1MaxFlatShippingCost", $value);
        }
        $value = $this->getGroup2MaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Group2MaxFlatShippingCost", $value);
        }
        $value = $this->getGroup3MaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Group3MaxFlatShippingCost", $value);
        }
        $value = $this->getPaymentMethod();
        if (null !== $value && !empty($this->getPaymentMethod())) {
            $writer->write(array_map(function ($v) {return ["PaymentMethod" => $v];}, $value));
        }
        $value = $this->getVariationsEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationsEnabled", $value);
        }
        $value = $this->getAttributeConversionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeConversionEnabled", $value);
        }
        $value = $this->getFreeGalleryPlusEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FreeGalleryPlusEnabled", $value);
        }
        $value = $this->getFreePicturePackEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FreePicturePackEnabled", $value);
        }
        $value = $this->getItemCompatibilityEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityEnabled", $value);
        }
        $value = $this->getMinItemCompatibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinItemCompatibility", $value);
        }
        $value = $this->getMaxItemCompatibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxItemCompatibility", $value);
        }
        $value = $this->getConditionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionEnabled", $value);
        }
        $value = $this->getConditionValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionValues", $value);
        }
        $value = $this->getSpecialFeatures();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SpecialFeatures", $value);
        }
        $value = $this->getValueCategory();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValueCategory", $value);
        }
        $value = $this->getProductCreationEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductCreationEnabled", $value);
        }
        $value = $this->getEANEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EANEnabled", $value);
        }
        $value = $this->getISBNEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ISBNEnabled", $value);
        }
        $value = $this->getUPCEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UPCEnabled", $value);
        }
        $value = $this->getMaxGranularFitmentCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxGranularFitmentCount", $value);
        }
        $value = $this->getCompatibleVehicleType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompatibleVehicleType", $value);
        }
        $value = $this->getPaymentOptionsGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentOptionsGroup", $value);
        }
        $value = $this->getShippingProfileCategoryGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingProfileCategoryGroup", $value);
        }
        $value = $this->getPaymentProfileCategoryGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentProfileCategoryGroup", $value);
        }
        $value = $this->getReturnPolicyProfileCategoryGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicyProfileCategoryGroup", $value);
        }
        $value = $this->getVINSupported();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VINSupported", $value);
        }
        $value = $this->getVRMSupported();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VRMSupported", $value);
        }
        $value = $this->getSellerProvidedTitleSupported();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerProvidedTitleSupported", $value);
        }
        $value = $this->getDepositSupported();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DepositSupported", $value);
        }
        $value = $this->getGlobalShippingEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GlobalShippingEnabled", $value);
        }
        $value = $this->getAdditionalCompatibilityEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdditionalCompatibilityEnabled", $value);
        }
        $value = $this->getPickupDropOffEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupDropOffEnabled", $value);
        }
        $value = $this->getDigitalGoodDeliveryEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DigitalGoodDeliveryEnabled", $value);
        }
        $value = $this->getEpidSupported();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EpidSupported", $value);
        }
        $value = $this->getKTypeSupported();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}KTypeSupported", $value);
        }
        $value = $this->getProductRequiredEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductRequiredEnabled", $value);
        }
        $value = $this->getDomesticReturnsAcceptedValues();
        if (null !== $value && !empty($this->getDomesticReturnsAcceptedValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsAcceptedValues", array_map(function ($v) {return ["DomesticReturnsAccepted" => $v];}, $value));
        }
        $value = $this->getInternationalReturnsAcceptedValues();
        if (null !== $value && !empty($this->getInternationalReturnsAcceptedValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedValues", array_map(function ($v) {return ["InternationalReturnsAccepted" => $v];}, $value));
        }
        $value = $this->getDomesticReturnsDurationValues();
        if (null !== $value && !empty($this->getDomesticReturnsDurationValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsDurationValues", array_map(function ($v) {return ["DomesticReturnsDuration" => $v];}, $value));
        }
        $value = $this->getInternationalReturnsDurationValues();
        if (null !== $value && !empty($this->getInternationalReturnsDurationValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsDurationValues", array_map(function ($v) {return ["InternationalReturnsDuration" => $v];}, $value));
        }
        $value = $this->getDomesticReturnsShipmentPayeeValues();
        if (null !== $value && !empty($this->getDomesticReturnsShipmentPayeeValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsShipmentPayeeValues", array_map(function ($v) {return ["DomesticReturnsShipmentPayee" => $v];}, $value));
        }
        $value = $this->getInternationalReturnsShipmentPayeeValues();
        if (null !== $value && !empty($this->getInternationalReturnsShipmentPayeeValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsShipmentPayeeValues", array_map(function ($v) {return ["InternationalReturnsShipmentPayee" => $v];}, $value));
        }
        $value = $this->getDomesticRefundMethodValues();
        if (null !== $value && !empty($this->getDomesticRefundMethodValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticRefundMethodValues", array_map(function ($v) {return ["DomesticRefundMethod" => $v];}, $value));
        }
        $value = $this->getInternationalRefundMethodValues();
        if (null !== $value && !empty($this->getInternationalRefundMethodValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalRefundMethodValues", array_map(function ($v) {return ["InternationalRefundMethod" => $v];}, $value));
        }
        $value = $this->getReturnPolicyDescriptionEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicyDescriptionEnabled", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDuration', true);
        if (null !== $value && !empty($value)) {
            $this->setListingDuration(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\ListingDurationReferenceType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTermsRequired');
        if (null !== $value) {
            $this->setShippingTermsRequired($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled');
        if (null !== $value) {
            $this->setBestOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DutchBINEnabled');
        if (null !== $value) {
            $this->setDutchBINEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserConsentRequired');
        if (null !== $value) {
            $this->setUserConsentRequired($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HomePageFeaturedEnabled');
        if (null !== $value) {
            $this->setHomePageFeaturedEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProPackEnabled');
        if (null !== $value) {
            $this->setProPackEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BasicUpgradePackEnabled');
        if (null !== $value) {
            $this->setBasicUpgradePackEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValuePackEnabled');
        if (null !== $value) {
            $this->setValuePackEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProPackPlusEnabled');
        if (null !== $value) {
            $this->setProPackPlusEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdFormatEnabled');
        if (null !== $value) {
            $this->setAdFormatEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferCounterEnabled');
        if (null !== $value) {
            $this->setBestOfferCounterEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferAutoDeclineEnabled');
        if (null !== $value) {
            $this->setBestOfferAutoDeclineEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketSpecialitySubscription');
        if (null !== $value) {
            $this->setLocalMarketSpecialitySubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketRegularSubscription');
        if (null !== $value) {
            $this->setLocalMarketRegularSubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPremiumSubscription');
        if (null !== $value) {
            $this->setLocalMarketPremiumSubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketNonSubscription');
        if (null !== $value) {
            $this->setLocalMarketNonSubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressEnabled');
        if (null !== $value) {
            $this->setExpressEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressPicturesRequired');
        if (null !== $value) {
            $this->setExpressPicturesRequired($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressConditionRequired');
        if (null !== $value) {
            $this->setExpressConditionRequired($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumReservePrice');
        if (null !== $value) {
            $this->setMinimumReservePrice($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setSellerContactDetailsEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionConfirmationRequestEnabled');
        if (null !== $value) {
            $this->setTransactionConfirmationRequestEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreInventoryEnabled');
        if (null !== $value) {
            $this->setStoreInventoryEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SkypeMeTransactionalEnabled');
        if (null !== $value) {
            $this->setSkypeMeTransactionalEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SkypeMeNonTransactionalEnabled');
        if (null !== $value) {
            $this->setSkypeMeNonTransactionalEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesRegular');
        if (null !== $value) {
            $this->setLocalListingDistancesRegular($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesSpecialty');
        if (null !== $value) {
            $this->setLocalListingDistancesSpecialty($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesNonSubscription');
        if (null !== $value) {
            $this->setLocalListingDistancesNonSubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPaymentMethodEnabled');
        if (null !== $value) {
            $this->setClassifiedAdPaymentMethodEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdShippingMethodEnabled');
        if (null !== $value) {
            $this->setClassifiedAdShippingMethodEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdBestOfferEnabled');
        if (null !== $value) {
            $this->setClassifiedAdBestOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCounterOfferEnabled');
        if (null !== $value) {
            $this->setClassifiedAdCounterOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoDeclineEnabled');
        if (null !== $value) {
            $this->setClassifiedAdAutoDeclineEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByPhoneEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByPhoneEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByEmailEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByEmailEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SafePaymentRequired');
        if (null !== $value) {
            $this->setSafePaymentRequired($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPayPerLeadEnabled');
        if (null !== $value) {
            $this->setClassifiedAdPayPerLeadEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecificsEnabled');
        if (null !== $value) {
            $this->setItemSpecificsEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaisaPayFullEscrowEnabled');
        if (null !== $value) {
            $this->setPaisaPayFullEscrowEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ISBNIdentifierEnabled');
        if (null !== $value) {
            $this->setISBNIdentifierEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPCIdentifierEnabled');
        if (null !== $value) {
            $this->setUPCIdentifierEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EANIdentifierEnabled');
        if (null !== $value) {
            $this->setEANIdentifierEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BrandMPNIdentifierEnabled');
        if (null !== $value) {
            $this->setBrandMPNIdentifierEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoAcceptEnabled');
        if (null !== $value) {
            $this->setClassifiedAdAutoAcceptEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferAutoAcceptEnabled');
        if (null !== $value) {
            $this->setBestOfferAutoAcceptEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeNorthAmericaEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeNorthAmericaEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeGBEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeGBEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeAustraliaEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeAustraliaEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalBuyerProtectionEnabled');
        if (null !== $value) {
            $this->setPayPalBuyerProtectionEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteeEnabled');
        if (null !== $value) {
            $this->setBuyerGuaranteeEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}INEscrowWorkflowTimeline');
        if (null !== $value) {
            $this->setINEscrowWorkflowTimeline($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedFixedPriceTreatmentEnabled');
        if (null !== $value) {
            $this->setCombinedFixedPriceTreatmentEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryFeaturedDurations', true);
        if (null !== $value && !empty($value)) {
            $this->setGalleryFeaturedDurations($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalRequired');
        if (null !== $value) {
            $this->setPayPalRequired($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAdFormatEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAdFormatEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByPhoneEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByPhoneEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPhoneCount');
        if (null !== $value) {
            $this->setEBayMotorsProPhoneCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByAddressEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByAddressEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProStreetCount');
        if (null !== $value) {
            $this->setEBayMotorsProStreetCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCompanyNameEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProCompanyNameEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByEmailEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByEmailEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProBestOfferEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProBestOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoAcceptEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAutoAcceptEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoDeclineEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAutoDeclineEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPaymentMethodCheckOutEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProPaymentMethodCheckOutEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProShippingMethodEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProShippingMethodEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCounterOfferEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProCounterOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProSellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProSellerContactDetailsEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAdFormatEnabled');
        if (null !== $value) {
            $this->setLocalMarketAdFormatEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByPhoneEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByPhoneEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPhoneCount');
        if (null !== $value) {
            $this->setLocalMarketPhoneCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByAddressEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByAddressEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketStreetCount');
        if (null !== $value) {
            $this->setLocalMarketStreetCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketCompanyNameEnabled');
        if (null !== $value) {
            $this->setLocalMarketCompanyNameEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByEmailEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByEmailEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketBestOfferEnabled');
        if (null !== $value) {
            $this->setLocalMarketBestOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoAcceptEnabled');
        if (null !== $value) {
            $this->setLocalMarketAutoAcceptEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoDeclineEnabled');
        if (null !== $value) {
            $this->setLocalMarketAutoDeclineEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPaymentMethodCheckOutEnabled');
        if (null !== $value) {
            $this->setLocalMarketPaymentMethodCheckOutEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketShippingMethodEnabled');
        if (null !== $value) {
            $this->setLocalMarketShippingMethodEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketCounterOfferEnabled');
        if (null !== $value) {
            $this->setLocalMarketCounterOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketSellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setLocalMarketSellerContactDetailsEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPhoneCount');
        if (null !== $value) {
            $this->setClassifiedAdPhoneCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByAddressEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByAddressEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdStreetCount');
        if (null !== $value) {
            $this->setClassifiedAdStreetCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCompanyNameEnabled');
        if (null !== $value) {
            $this->setClassifiedAdCompanyNameEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SpecialitySubscription');
        if (null !== $value) {
            $this->setSpecialitySubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegularSubscription');
        if (null !== $value) {
            $this->setRegularSubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PremiumSubscription');
        if (null !== $value) {
            $this->setPremiumSubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NonSubscription');
        if (null !== $value) {
            $this->setNonSubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalRequiredForStoreOwner');
        if (null !== $value) {
            $this->setPayPalRequiredForStoreOwner($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseQuantityAllowed');
        if (null !== $value) {
            $this->setReviseQuantityAllowed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RevisePriceAllowed');
        if (null !== $value) {
            $this->setRevisePriceAllowed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurationsEnabled');
        if (null !== $value) {
            $this->setStoreOwnerExtendedListingDurationsEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurations', true);
        if (null !== $value && !empty($value)) {
            $this->setStoreOwnerExtendedListingDurations($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyEnabled');
        if (null !== $value) {
            $this->setReturnPolicyEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HandlingTimeEnabled');
        if (null !== $value) {
            $this->setHandlingTimeEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCost');
        if (null !== $value) {
            $this->setMaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCostCBTExempt');
        if (null !== $value) {
            $this->setMaxFlatShippingCostCBTExempt($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group1MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup1MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group2MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup2MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group3MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup3MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethod', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationsEnabled');
        if (null !== $value) {
            $this->setVariationsEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeConversionEnabled');
        if (null !== $value) {
            $this->setAttributeConversionEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FreeGalleryPlusEnabled');
        if (null !== $value) {
            $this->setFreeGalleryPlusEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FreePicturePackEnabled');
        if (null !== $value) {
            $this->setFreePicturePackEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityEnabled');
        if (null !== $value) {
            $this->setItemCompatibilityEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinItemCompatibility');
        if (null !== $value) {
            $this->setMinItemCompatibility($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxItemCompatibility');
        if (null !== $value) {
            $this->setMaxItemCompatibility($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionEnabled');
        if (null !== $value) {
            $this->setConditionEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionValues');
        if (null !== $value) {
            $this->setConditionValues(\Nogrod\eBaySDK\MerchantData\ConditionValuesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SpecialFeatures');
        if (null !== $value) {
            $this->setSpecialFeatures(\Nogrod\eBaySDK\MerchantData\ConditionValuesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueCategory');
        if (null !== $value) {
            $this->setValueCategory($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductCreationEnabled');
        if (null !== $value) {
            $this->setProductCreationEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EANEnabled');
        if (null !== $value) {
            $this->setEANEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ISBNEnabled');
        if (null !== $value) {
            $this->setISBNEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPCEnabled');
        if (null !== $value) {
            $this->setUPCEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxGranularFitmentCount');
        if (null !== $value) {
            $this->setMaxGranularFitmentCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompatibleVehicleType');
        if (null !== $value) {
            $this->setCompatibleVehicleType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentOptionsGroup');
        if (null !== $value) {
            $this->setPaymentOptionsGroup($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingProfileCategoryGroup');
        if (null !== $value) {
            $this->setShippingProfileCategoryGroup($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentProfileCategoryGroup');
        if (null !== $value) {
            $this->setPaymentProfileCategoryGroup($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyProfileCategoryGroup');
        if (null !== $value) {
            $this->setReturnPolicyProfileCategoryGroup($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VINSupported');
        if (null !== $value) {
            $this->setVINSupported($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VRMSupported');
        if (null !== $value) {
            $this->setVRMSupported($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerProvidedTitleSupported');
        if (null !== $value) {
            $this->setSellerProvidedTitleSupported($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DepositSupported');
        if (null !== $value) {
            $this->setDepositSupported($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalShippingEnabled');
        if (null !== $value) {
            $this->setGlobalShippingEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdditionalCompatibilityEnabled');
        if (null !== $value) {
            $this->setAdditionalCompatibilityEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupDropOffEnabled');
        if (null !== $value) {
            $this->setPickupDropOffEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DigitalGoodDeliveryEnabled');
        if (null !== $value) {
            $this->setDigitalGoodDeliveryEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EpidSupported');
        if (null !== $value) {
            $this->setEpidSupported($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}KTypeSupported');
        if (null !== $value) {
            $this->setKTypeSupported($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductRequiredEnabled');
        if (null !== $value) {
            $this->setProductRequiredEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsAcceptedValues', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticReturnsAcceptedValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedValues', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalReturnsAcceptedValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsDurationValues', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticReturnsDurationValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsDurationValues', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalReturnsDurationValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsShipmentPayeeValues', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticReturnsShipmentPayeeValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsShipmentPayeeValues', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalReturnsShipmentPayeeValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticRefundMethodValues', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticRefundMethodValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRefundMethodValues', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalRefundMethodValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyDescriptionEnabled');
        if (null !== $value) {
            $this->setReturnPolicyDescriptionEnabled($value);
        }
    }
}
