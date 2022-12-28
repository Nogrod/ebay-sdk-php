<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryFeatureType
 *
 * Type defining the <b>Category</b> container that is returned in the <b>GetCategoryFeatures</b> response. A <b>Category</b> node is returned for each category that is relevant/applicable to the input criteria in the <b>GetCategoryFeatures</b> request. The <b>CategoryID</b> value identifies the eBay category. The rest of the <b>CategoryFeatureType</b> fields that are returned will be dependent on which <b>FeatureID</b> value(s) are specified in the <b>GetCategoryFeatures</b> request.
 * XSD Type: CategoryFeatureType
 */
class CategoryFeatureType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specifies the unique identifier of the eBay category. All eBay feature information that is returned under the corresponding <b>Category</b> container is relevant to this eBay category.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * A <b>ListingDuration</b> field is returned for each listing type and listing duration combination that is supported for the category. The integer value indicates the number of days of the listing duration, and the <b>type</b> attribute identifies the supported listing type.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ListingDurations</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingDurationReferenceType[] $listingDuration
     */
    private $listingDuration = [

    ];

    /**
     * Indicates whether the category requires sellers to specify shipping details at listing time.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ShippingTermsRequired</code>.
     *
     * @var bool $shippingTermsRequired
     */
    private $shippingTermsRequired = null;

    /**
     * Indicates whether the category supports the Best Offer feature for listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferEnabled</code>.
     *
     * @var bool $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $dutchBINEnabled
     */
    private $dutchBINEnabled = null;

    /**
     * Indicates whether a bidder must consent to the bid by confirming that
     *  he or she read and agrees to the terms in eBay's privacy policy.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>UserConsentRequired</code>.
     *
     * @var bool $userConsentRequired
     */
    private $userConsentRequired = null;

    /**
     * Indicates whether or not it is possible to enhance a listing by putting
     *  it into a rotation for display on a special area of the eBay home page.
     *  Support for this feature varies by site. Item or feedback restrictions may apply.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>HomePageFeaturedEnabled</code>.
     *
     * @var bool $homePageFeaturedEnabled
     */
    private $homePageFeaturedEnabled = null;

    /**
     * Indicates whether the category supports the Pro Pack Bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProPack</code>.
     *
     * @var bool $proPackEnabled
     */
    private $proPackEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $basicUpgradePackEnabled
     */
    private $basicUpgradePackEnabled = null;

    /**
     * Indicates whether the category supports the Value Pack bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ValuePack</code>.
     *
     * @var bool $valuePackEnabled
     */
    private $valuePackEnabled = null;

    /**
     * Indicates whether the category supports the Pro Pack Plus bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProPackPlus</code>.
     *
     * @var bool $proPackPlusEnabled
     */
    private $proPackPlusEnabled = null;

    /**
     * Indicates whether the category supports Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>AdFormatEnabled</code>.
     *
     * @var string $adFormatEnabled
     */
    private $adFormatEnabled = null;

    /**
     * Indicates whether the category supports sellers offering a counter offer against a buyer's Best Offer, or a buyer offering a counter offer against the seller's counter offer.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferCounterEnabled</code>.
     *
     * @var bool $bestOfferCounterEnabled
     */
    private $bestOfferCounterEnabled = null;

    /**
     * Indicates whether the category supports the Best Offer Auto Decline feature.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferAutoDeclineEnabled</code>.
     *
     * @var bool $bestOfferAutoDeclineEnabled
     */
    private $bestOfferAutoDeclineEnabled = null;

    /**
     * Indicates whether the category supports the Speciality level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketSpecialitySubscription</code>.
     *
     * @var bool $localMarketSpecialitySubscription
     */
    private $localMarketSpecialitySubscription = null;

    /**
     * Indicates whether the category supports the Regular level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketRegularSubscription</code>.
     *
     * @var bool $localMarketRegularSubscription
     */
    private $localMarketRegularSubscription = null;

    /**
     * Indicates whether the category supports the Premium level subscription Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketPremiumSubscription</code>.
     *
     * @var bool $localMarketPremiumSubscription
     */
    private $localMarketPremiumSubscription = null;

    /**
     * Indicates whether the category supports a seller creating a Motors Local Market listing without a subscription. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketNonSubscription</code>.
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
     * Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of <code>0.0</code> is returned in this field.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MinimumReservePrice</code>.
     *
     * @var float $minimumReservePrice
     */
    private $minimumReservePrice = null;

    /**
     * Indicates whether this category supports seller-level contact information for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>SellerContactDetailsEnabled</code>.
     *
     * @var bool $sellerContactDetailsEnabled
     */
    private $sellerContactDetailsEnabled = null;

    /**
     * Indicates whether the Transaction Confirmation Request feature is supported for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
     *
     * @var bool $transactionConfirmationRequestEnabled
     */
    private $transactionConfirmationRequestEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $storeInventoryEnabled
     */
    private $storeInventoryEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $skypeMeTransactionalEnabled
     */
    private $skypeMeTransactionalEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $skypeMeNonTransactionalEnabled
     */
    private $skypeMeNonTransactionalEnabled = null;

    /**
     * Indicates whether the payment method should be displayed to the user for
     *  Classified Ad format listings.
     *  Even if enabled, checkout may or may not be enabled.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdPaymentMethodEnabled</code>.
     *
     * @var string $classifiedAdPaymentMethodEnabled
     */
    private $classifiedAdPaymentMethodEnabled = null;

    /**
     * Indicates if shipping options are available for Classified Ad listings
     *  in the category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdShippingMethodEnabled</code>.
     *
     * @var bool $classifiedAdShippingMethodEnabled
     */
    private $classifiedAdShippingMethodEnabled = null;

    /**
     * Indicates if Best offer is enabled for Classified Ad listings for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdBestOfferEnabled</code>.
     *
     * @var string $classifiedAdBestOfferEnabled
     */
    private $classifiedAdBestOfferEnabled = null;

    /**
     * Indicates whether counter offers are allowed in Classified Ad listings
     *  for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdCounterOfferEnabled</code>.
     *
     * @var bool $classifiedAdCounterOfferEnabled
     */
    private $classifiedAdCounterOfferEnabled = null;

    /**
     * Indicates whether automatic decline for best offers for Classified Ad listings is enabled for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdAutoDeclineEnabled</code>.
     *
     * @var bool $classifiedAdAutoDeclineEnabled
     */
    private $classifiedAdAutoDeclineEnabled = null;

    /**
     * Indicates whether the category supports the telephone as a contact method for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByPhoneEnabled</code>.
     *
     * @var bool $classifiedAdContactByPhoneEnabled
     */
    private $classifiedAdContactByPhoneEnabled = null;

    /**
     * Indicates whether the category supports email as a contact method for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByEmailEnabled</code>.
     *
     * @var bool $classifiedAdContactByEmailEnabled
     */
    private $classifiedAdContactByEmailEnabled = null;

    /**
     * This field is no longer applicable, as eBay now controls all online payment methods.
     *
     * @var bool $safePaymentRequired
     */
    private $safePaymentRequired = null;

    /**
     * Indicates if pay-per-lead listings are allowed for this category. Pay-per-lead listings can be applicable if the value of <b>ListingType</b> is <code>LeadGeneration</code> and the value of <b>ListingSubtype</b> is <code>ClassifiedAd</code>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
     *
     * @var bool $classifiedAdPayPerLeadEnabled
     */
    private $classifiedAdPayPerLeadEnabled = null;

    /**
     * Indicates whether the category supports the use of Item Specifics in listings. If enabled, sellers can use the <b>Item.ItemSpecifics</b> node in Add/Revise/Relist calls to specify Item Specific name-value pairs.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ItemSpecificsEnabled</code>.
     *
     * @var string $itemSpecificsEnabled
     */
    private $itemSpecificsEnabled = null;

    /**
     * <span class="tablenote"><b>Note:</b>
     *  This field is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
     *
     * @var bool $paisaPayFullEscrowEnabled
     */
    private $paisaPayFullEscrowEnabled = null;

    /**
     * Indicates whether the category supports the capability to identify a product using the brand/manufacturer part number combination.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BrandMPNIdentifierEnabled</code>.
     *
     * @var bool $brandMPNIdentifierEnabled
     */
    private $brandMPNIdentifierEnabled = null;

    /**
     * Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdAutoAcceptEnabled</code>.
     *
     * @var bool $classifiedAdAutoAcceptEnabled
     */
    private $classifiedAdAutoAcceptEnabled = null;

    /**
     * Indicates whether the category supports the Best Offer Automatic Accept feature for listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferAutoAcceptEnabled</code>.
     *
     * @var bool $bestOfferAutoAcceptEnabled
     */
    private $bestOfferAutoAcceptEnabled = null;

    /**
     * Indicates whether the category supports specifying that listings be displayed in the default search results of North America sites (US and Canada (English).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
     *
     * @var bool $crossBorderTradeNorthAmericaEnabled
     */
    private $crossBorderTradeNorthAmericaEnabled = null;

    /**
     * Indicates whether the category supports specifying that listings be displayed in the default search results of the UK and Ireland sites.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
     *
     * @var bool $crossBorderTradeGBEnabled
     */
    private $crossBorderTradeGBEnabled = null;

    /**
     * Indicates whether the category supports specifying that listings be displayed in the default search results of the Australia site.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
     *
     * @var bool $crossBorderTradeAustraliaEnabled
     */
    private $crossBorderTradeAustraliaEnabled = null;

    /**
     * This field is no longer applicable.
     *
     * @var bool $payPalBuyerProtectionEnabled
     */
    private $payPalBuyerProtectionEnabled = null;

    /**
     * If this field is returned as <code>true</code>, the category supports the Best Price Guarantee feature on the Australia site. This field/feature is only applicable to Australia.
     *
     * @var bool $buyerGuaranteeEnabled
     */
    private $buyerGuaranteeEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $combinedFixedPriceTreatmentEnabled
     */
    private $combinedFixedPriceTreatmentEnabled = null;

    /**
     * This field is returned if the Featured Gallery feature is supported for the category. The time unit that is returned in this field indicates how long a gallery will be featured on eBay.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GalleryFeaturedDurations</code>.
     *
     * @var string[] $galleryFeaturedDurations
     */
    private $galleryFeaturedDurations = null;

    /**
     * This field is no longer applicable.
     *
     * @var bool $payPalRequired
     */
    private $payPalRequired = null;

    /**
     * Specifies whether this category allows Classified Ad listings on eBay Motors. This element is applicable for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAdFormatEnabled</code>.
     *
     * @var string $eBayMotorsProAdFormatEnabled
     */
    private $eBayMotorsProAdFormatEnabled = null;

    /**
     * Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByPhoneEnabled</code>.
     *
     * @var bool $eBayMotorsProContactByPhoneEnabled
     */
    private $eBayMotorsProContactByPhoneEnabled = null;

    /**
     * Indicates which telephone option is enabled for the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByPhoneEnabled</code>.
     *
     * @var int $eBayMotorsProPhoneCount
     */
    private $eBayMotorsProPhoneCount = null;

    /**
     * Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByAddressEnabled</code>.
     *
     * @var bool $eBayMotorsProContactByAddressEnabled
     */
    private $eBayMotorsProContactByAddressEnabled = null;

    /**
     * Indicates which address option is enabled for the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByAddressEnabled</code>.
     *
     * @var int $eBayMotorsProStreetCount
     */
    private $eBayMotorsProStreetCount = null;

    /**
     * Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProCompanyNameEnabled</code>.
     *
     * @var bool $eBayMotorsProCompanyNameEnabled
     */
    private $eBayMotorsProCompanyNameEnabled = null;

    /**
     * Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByEmailEnabled</code>.
     *
     * @var bool $eBayMotorsProContactByEmailEnabled
     */
    private $eBayMotorsProContactByEmailEnabled = null;

    /**
     * Indicates if Best Offer is supported for eBay Motors Classified Ad listings in this category. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProBestOfferEnabled</code>.
     *
     * @var string $eBayMotorsProBestOfferEnabled
     */
    private $eBayMotorsProBestOfferEnabled = null;

    /**
     * Specifies whether this category allows auto-accept for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAutoAcceptEnabled</code>.
     *
     * @var bool $eBayMotorsProAutoAcceptEnabled
     */
    private $eBayMotorsProAutoAcceptEnabled = null;

    /**
     * Specifies whether this category allows auto-decline for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAutoDeclineEnabled</code>.
     *
     * @var bool $eBayMotorsProAutoDeclineEnabled
     */
    private $eBayMotorsProAutoDeclineEnabled = null;

    /**
     * Indicates if the payment method should be displayed to the user for this category in an eBay Motors Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProPaymentMethodCheckOutEnabled</code>.
     *
     * @var string $eBayMotorsProPaymentMethodCheckOutEnabled
     */
    private $eBayMotorsProPaymentMethodCheckOutEnabled = null;

    /**
     * Indicates if shipping options should be displayed to the user for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProShippingMethodEnabled</code>.
     *
     * @var bool $eBayMotorsProShippingMethodEnabled
     */
    private $eBayMotorsProShippingMethodEnabled = null;

    /**
     * Indicates whether counter offers are allowed on Best Offers for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProCounterOfferEnabled</code>.
     *
     * @var bool $eBayMotorsProCounterOfferEnabled
     */
    private $eBayMotorsProCounterOfferEnabled = null;

    /**
     * Specifies whether this category allows seller-level contact information for eBay Motors Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProSellerContactDetailsEnabled</code>.
     *
     * @var bool $eBayMotorsProSellerContactDetailsEnabled
     */
    private $eBayMotorsProSellerContactDetailsEnabled = null;

    /**
     * Specifies whether this category supports Motor Local Market Classified Ad listings. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAdFormatEnabled</code>.
     *
     * @var string $localMarketAdFormatEnabled
     */
    private $localMarketAdFormatEnabled = null;

    /**
     * Indicates whether this category supports including the telephone in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByPhoneEnabled</code>.
     *
     * @var bool $localMarketContactByPhoneEnabled
     */
    private $localMarketContactByPhoneEnabled = null;

    /**
     * Indicates which telephone option is enabled for the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByPhoneEnabled</code>.
     *
     * @var int $localMarketPhoneCount
     */
    private $localMarketPhoneCount = null;

    /**
     * Indicates whether this category supports including the address in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByAddressEnabled</code>.
     *
     * @var bool $localMarketContactByAddressEnabled
     */
    private $localMarketContactByAddressEnabled = null;

    /**
     * Indicates which address option is enabled for the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByAddressEnabled</code>.
     *
     * @var int $localMarketStreetCount
     */
    private $localMarketStreetCount = null;

    /**
     * Indicates whether the category supports including a company name in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketCompanyNameEnabled</code>.
     *
     * @var bool $localMarketCompanyNameEnabled
     */
    private $localMarketCompanyNameEnabled = null;

    /**
     * Indicates whether the category supports including an email address in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByEmailEnabled</code>.
     *
     * @var bool $localMarketContactByEmailEnabled
     */
    private $localMarketContactByEmailEnabled = null;

    /**
     * Indicates if Best Offer is enabled/required for Motors Local Market Classified Ad listings in this category. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketBestOfferEnabled</code>.
     *
     * @var string $localMarketBestOfferEnabled
     */
    private $localMarketBestOfferEnabled = null;

    /**
     * Specifies whether this category supports auto-accept for Best Offers for Motors Local Market Classified Ads. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAutoAcceptEnabled</code>.
     *
     * @var bool $localMarketAutoAcceptEnabled
     */
    private $localMarketAutoAcceptEnabled = null;

    /**
     * Specifies whether this category supports auto-decline for Best Offers for Motors Local Market Classified Ads. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAutoDeclineEnabled</code>.
     *
     * @var bool $localMarketAutoDeclineEnabled
     */
    private $localMarketAutoDeclineEnabled = null;

    /**
     * Indicates if the payment method should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketPaymentMethodCheckOutEnabled</code>.
     *
     * @var string $localMarketPaymentMethodCheckOutEnabled
     */
    private $localMarketPaymentMethodCheckOutEnabled = null;

    /**
     * Indicates if shipping methods should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for Local market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketShippingMethodEnabled</code>.
     *
     * @var bool $localMarketShippingMethodEnabled
     */
    private $localMarketShippingMethodEnabled = null;

    /**
     * Indicates whether counter offers are allowed on Best Offers for this category for Motors Local Market Classified Ad listings. This element is for Local market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketCounterOfferEnabled</code>.
     *
     * @var bool $localMarketCounterOfferEnabled
     */
    private $localMarketCounterOfferEnabled = null;

    /**
     * Specifies the whether this category allows seller-level contact information for Motors Local Market Classified Ad listings. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketSellerContactDetailsEnabled</code>.
     *
     * @var bool $localMarketSellerContactDetailsEnabled
     */
    private $localMarketSellerContactDetailsEnabled = null;

    /**
     * Indicates which telephone option is included in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByPhoneEnabled</code>.
     *
     * @var int $classifiedAdPhoneCount
     */
    private $classifiedAdPhoneCount = null;

    /**
     * Indicates whether this category supports including an address in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByAddressEnabled</code>.
     *
     * @var bool $classifiedAdContactByAddressEnabled
     */
    private $classifiedAdContactByAddressEnabled = null;

    /**
     * Indicates which address option is included in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByAddressEnabled</code>.
     *
     * @var int $classifiedAdStreetCount
     */
    private $classifiedAdStreetCount = null;

    /**
     * Indicates whether this category supports including a company name in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdCompanyNameEnabled</code>.
     *
     * @var bool $classifiedAdCompanyNameEnabled
     */
    private $classifiedAdCompanyNameEnabled = null;

    /**
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Specialty vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>SpecialitySubscription</code>.
     *
     * @var string $specialitySubscription
     */
    private $specialitySubscription = null;

    /**
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Regular vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>RegularSubscription</code>.
     *
     * @var string $regularSubscription
     */
    private $regularSubscription = null;

    /**
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Premium vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PremiumSubscription</code>.
     *
     * @var string $premiumSubscription
     */
    private $premiumSubscription = null;

    /**
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller does not have a vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>NonSubscription</code>.
     *
     * @var string $nonSubscription
     */
    private $nonSubscription = null;

    /**
     * <span class="tablenote"><b>Note:</b>
     *  This field is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
     *
     * @var string $iNEscrowWorkflowTimeline
     */
    private $iNEscrowWorkflowTimeline = null;

    /**
     * This field is deprecated.
     *
     * @var bool $payPalRequiredForStoreOwner
     */
    private $payPalRequiredForStoreOwner = null;

    /**
     * Indicates if the category allows the seller to revise the quantity of a multi-quantity, active listing.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReviseQuantityAllowed</code>.
     *
     * @var bool $reviseQuantityAllowed
     */
    private $reviseQuantityAllowed = null;

    /**
     * Indicates if the category allows the seller to revise the price of a fixed-price listing.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>RevisePriceAllowed</code>.
     *
     * @var bool $revisePriceAllowed
     */
    private $revisePriceAllowed = null;

    /**
     * Indicates if an eBay Store owner gets extended listing durations in a given category. When the value of this element is true, it means the listing duration values defined in <b>StoreOwnerExtendedListingDurations</b> are applicable to fixed-price listings in a given category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurationsEnabled</code>.
     *
     * @var bool $storeOwnerExtendedListingDurationsEnabled
     */
    private $storeOwnerExtendedListingDurationsEnabled = null;

    /**
     * Provides additional listings durations that are available to eBay Store owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the <b>ListingDurations</b> element. Applies to fixed-price Listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurations</code>.
     *
     * @var string[] $storeOwnerExtendedListingDurations
     */
    private $storeOwnerExtendedListingDurations = null;

    /**
     * <b>For most sites:</b> If true, listings in this
     *  category require a return policy. <br/>
     *  <br/>
     *  <b>For eBay Australia (AU) and
     *  US eBay Motors Parts and Accessories:</b>
     *  If true, the category supports but does not require a
     *  return policy.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReturnPolicyEnabled</code>.
     *
     * @var bool $returnPolicyEnabled
     */
    private $returnPolicyEnabled = null;

    /**
     * Indicates if a seller's stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup. <br/>
     *  <br/>
     *  The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time).
     *  <br/>
     *  For a list of the handling time values allowed for each site, use
     *  <code>DispatchTimeMaxDetails</code> in <b>GeteBayDetails</b>.<br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  Although the field name ends with "Enabled", a value of true means
     *  that a handling time is NOT supported, and value of false means
     *  that a handling time IS supported.</span><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>HandlingTimeEnabled</code>.
     *
     * @var bool $handlingTimeEnabled
     */
    private $handlingTimeEnabled = null;

    /**
     * The maximum cost the seller can charge for the first domestic flat-rate shipping
     *  service.
     *  Mutually exclusive with the <b>Group</b><code>N</code><b>MaxFlatShippingCost</b> elements.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxFlatShippingCost</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $maxFlatShippingCost
     */
    private $maxFlatShippingCost = null;

    /**
     * Returns the applicable max cap per shipping cost for shipping service group1.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group1MaxFlatShippingCost</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $group1MaxFlatShippingCost
     */
    private $group1MaxFlatShippingCost = null;

    /**
     * Returns the applicable max cap per shipping cost for shipping service group2.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group2MaxFlatShippingCost</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $group2MaxFlatShippingCost
     */
    private $group2MaxFlatShippingCost = null;

    /**
     * Returns the applicable max cap per shipping cost for shipping service group3.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group3MaxFlatShippingCost</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $group3MaxFlatShippingCost
     */
    private $group3MaxFlatShippingCost = null;

    /**
     * Indicates the acceptable payment methods that can be used when listing an item for sale in the corresponding category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentMethods</code>.
     *
     * @var string[] $paymentMethod
     */
    private $paymentMethod = [

    ];

    /**
     * If <code>true</code>, you can pass in <b>Item.Variations</b> in an
     *  Add/Revise/Relist fixed-price item call when you list in this
     *  category.<br/>
     *  <br/>
     *  Multi-variation listings contain items that are logically the same
     *  product, but that vary in their manufacturing details or packaging.
     *  For example, a particular brand and style of shirt could be
     *  available in different sizes and colors, such as "large blue" and
     *  "medium black" variations.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>VariationsEnabled</code>.
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
     * Indicates whether the category supports free, automatic upgrades for Gallery Plus, which enhances pictures in search results.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>FreeGalleryPlusEnabled</code>.
     *
     * @var bool $freeGalleryPlusEnabled
     */
    private $freeGalleryPlusEnabled = null;

    /**
     * Indicates whether the category supports free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>FreePicturePackEnabled</code>.
     *
     * @var bool $freePicturePackEnabled
     */
    private $freePicturePackEnabled = null;

    /**
     * Indicates whether the category supports parts compatibility by application
     *  (<b>ByApplication</b>), by specification (<b>BySpecification</b>), or not at all
     *  (<b>Disabled</b>). Categories cannot support both types of parts compatibility.
     *  <br/><br/>
     *  Parts Compatibility is supported in limited Parts & Accessories
     *  categories for the eBay Motors (US) site (site ID 100) only.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CompatibilityEnabled</code>.
     *
     * @var string $itemCompatibilityEnabled
     */
    private $itemCompatibilityEnabled = null;

    /**
     * This field specifies the minimum number of required compatible applications
     *  for listing items. A value of "0" indicates it is not mandatory to specify
     *  parts compatibilities when listing.
     *  <br/><br/>
     *  This applies to categories that are enabled for compatibility by application
     *  only. Parts compatiblity by application can be specified by listing with a
     *  catalog product that supports parts compatibility or by specifying parts
     *  compatibility by application manually (<b class="con">
     *  Item.ItemCompatibilityList</b>).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MinCompatibleApplications</code>.
     *
     * @var int $minItemCompatibility
     */
    private $minItemCompatibility = null;

    /**
     * This field specifies the maximum number of compatible applications allowed
     *  per item when adding or revising items. This is relevant for specifying parts
     *  compatibility by application manually (<b class="con">
     *  Item.ItemCompatibilityList</b>) only.
     *  <br/><br/>
     *  Applicable for the US site only.
     *  <br/><br/>
     *  For DE, UK, and AU sites, this field returns the same value as <b>MaxGranularFitmentCount</b>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxCompatibleApplications</code>.
     *
     * @var int $maxItemCompatibility
     */
    private $maxItemCompatibility = null;

    /**
     * Indicates whether the category supports, requires, or doesn't support the use item condition for an item listing. For categories that require or support the use of item condition, see the <b>ConditionValues</b> and/or <b>SpecialFeatures</b> containers for a list of valid item conditions (display names and ID values).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionEnabled</code>.
     *
     * @var string $conditionEnabled
     */
    private $conditionEnabled = null;

    /**
     * This container specifies all of the item conditions that are supported for the corresponding category. The display name of the item condiation and the ID associated with the description are both shown.
     *  <br/><br/>
     *  This container will not be returned for any eBay categories that don't support the use of an item condition value. To see which categories require, support, or don't support the use of item conditions, you can include a <b>FeatureID</b> value of <code>ConditionEnabled</code>. Any eBay category that does not support the use of an item condition value will return a <b>ConditionEnabled</b> value of <code>Disabled</code>.
     *  <br/><br/>
     *  This container will also not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionValues</code>.
     *  <br/>
     *  <br/>
     *
     * @var \Nogrod\eBaySDK\MerchantData\ConditionValuesType $conditionValues
     */
    private $conditionValues = null;

    /**
     * This container is only returned if the corresponding category supports a special item condition such as <b>Certified - Refurbished</b> condition (condition ID 2000), <b>Excellent - Refurbished</b> condition (condition ID 2010), <b>Very Good - Refurbished</b> condition (condition ID 2020), and <b>Good - Refurbished</b> condition (condition ID 2030). A seller must be pre-qualified by eBay to list items with the any of these refurbished item conditions.
     *  <br/><br/>
     *  All other item conditions supported by a category will be returned in the <b>ConditionValues</b> container instead.
     *  <br/><br/>
     *  Neither the <b>ConditionValues</b> or the <b>SpecialFeatures</b> containers will be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionValues</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ConditionValuesType $specialFeatures
     */
    private $specialFeatures = null;

    /**
     * Some eBay sites may select a few categories and designate them as
     *  "value categories". These are typically selected from
     *  categories where buyers can find great deals. (Not all categories
     *  with great deals are designated as value categories.)
     *  This designation can change over time. <br/>
     *  <br/>
     *  While a category is designated as a value category (i.e.,
     *  when <b>ValueCategory</b> is <code>true</code>), it is subject to the following rule:
     *  Items in value categories can only be listed in one category.<br/>
     *  <br/>
     *  For example, if you attempt to list in two categories and the
     *  primary category or secondary category is a value category,
     *  then eBay drops the secondary category and lists the
     *  item in the primary category only.
     *  Similarly, if you attempt to add a secondary category to an existing
     *  listing, or you change the category for an existing listing,
     *  and if the primary or secondary category is a value category,
     *  then eBay drops the secondary category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ValueCategory</code>.
     *
     * @var bool $valueCategory
     */
    private $valueCategory = null;

    /**
     * Indicates whether a category supports the creation of a listing using an eBay Catalog product. To create a listing based on an eBay Catalog product, the seller passed in Global Trade Item Number (GTIN) or eBay Product ID (ePID) value in an Add/Revise/Relist call and then eBay tries to match the product identifier to a product in the eBay Catalog. If a match is found, the listing picks up the details of the eBay Catalog product, including product title, product description, product aspects, primary eBay listing category ID, and links to any product stock photos.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProductCreationEnabled</code>.
     *
     * @var string $productCreationEnabled
     */
    private $productCreationEnabled = null;

    /**
     * Indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that EANs cannot be used for the category, a value of <code>Enabled</code> indicates that EANs can be used for the category, and a value of <code>Required</code> indicates that an EAN is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>EANEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>EANEnabled</b>, <b>ISBNEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
     *
     * @var string $eANEnabled
     */
    private $eANEnabled = null;

    /**
     * Indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that ISBNs cannot be used for the category, a value of <code>Enabled</code> indicates that ISBNs can be used for the category, and a value of <code>Required</code> indicates that an ISBN is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ISBNEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>ISBNEnabled</b>, <b>EANEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
     *
     * @var string $iSBNEnabled
     */
    private $iSBNEnabled = null;

    /**
     * Indicates whether or not Universal Product Codes (UPCs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that UPCs cannot be used for the category, a value of <code>Enabled</code> indicates that UPCs can be used for the category, and a value of <code>Required</code> indicates that a UPC is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>UPCEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>UPCEnabled</b>, <b>ISBNEnabled</b>, <b>EANEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
     *
     * @var string $uPCEnabled
     */
    private $uPCEnabled = null;

    /**
     * Indicates the maximum number of compatible applications allowed per item when adding or revising items with compatibilities provided at the most detailed granularity. For example, in Car and Truck Parts on the US site, the most granular application would include Year, Make, Model, Trim, and Engine.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxGranularFitmentCount</code>.
     *
     * @var int $maxGranularFitmentCount
     */
    private $maxGranularFitmentCount = null;

    /**
     * This field is for future use. It is currently returned as an empty field, but in the future, the string value in this field will indicate Parts Compatibility vehicle type (e.g. cars, motorcycles, boats).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CompatibleVehicleType</code>.
     *
     * @var string $compatibleVehicleType
     */
    private $compatibleVehicleType = null;

    /**
     * This field is deprecated.
     *
     * @var string $paymentOptionsGroup
     */
    private $paymentOptionsGroup = null;

    /**
     * Indicates the Business Policies category group that may be used for Shipping profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ShippingProfileCategoryGroup</code>.
     *
     * @var string $shippingProfileCategoryGroup
     */
    private $shippingProfileCategoryGroup = null;

    /**
     * Indicates the Business Policies category group that may be used for Payment profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentProfileCategoryGroup</code>.
     *
     * @var string $paymentProfileCategoryGroup
     */
    private $paymentProfileCategoryGroup = null;

    /**
     * Indicates the Business Policies category group that may be used for Return Policy profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReturnPolicyProfileCategoryGroup</code>.
     *
     * @var string $returnPolicyProfileCategoryGroup
     */
    private $returnPolicyProfileCategoryGroup = null;

    /**
     * This field is deprecated.
     *
     * @var bool $vINSupported
     */
    private $vINSupported = null;

    /**
     * This field is deprecated.
     *
     * @var bool $vRMSupported
     */
    private $vRMSupported = null;

    /**
     * This field is returned as <code>true</code> if the corresponding category supports the use of a seller-provided title for a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title, given by the seller, that appears below eBay's pre-filled listing title for the motor vehicle. Visually, the seller-provided title is similar to a subtitle on other types of eBay listings (non-vehicle). A seller-provided title can assist in helping buyers discover the vehicle.
     *
     * @var bool $sellerProvidedTitleSupported
     */
    private $sellerProvidedTitleSupported = null;

    /**
     * This field is returned as <code>true</code> if the corresponding category supports the use of a deposit/down payment on a motor vehicle listing. In an <b>AddItem</b> call, the seller can configure a down payment for a motor vehicle listing using the <b>PaymentDetails</b> container.
     *
     * @var bool $depositSupported
     */
    private $depositSupported = null;

    /**
     * Indicates if the Global Shipping Program (GSP) is supported for the category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GlobalShippingEnabled</code>.
     *
     * @var bool $globalShippingEnabled
     */
    private $globalShippingEnabled = null;

    /**
     * This field indicates whether or not the category (specified in the <b>Category.CategoryID</b> field) supports Boats and Motorcycles Parts compatibility. If <code>true</code>, parts compatibility name-value pairs for boats and motorcycles can be added to an item listed in the specified category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>AdditionalCompatibilityEnabled</code>.
     *
     * @var bool $additionalCompatibilityEnabled
     */
    private $additionalCompatibilityEnabled = null;

    /**
     * A <code>true</code> value in this field indicates that items listed in the category (specified in the <b>Category.CategoryID</b> field) may be enabled with the 'Click and Collect' feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available. A <code>false</code> value in this field indicates that items listed in the category are not eligible for the 'Click and Collect' feature.
     *  <br/><br/>
     *  The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PickupDropOffEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @var bool $pickupDropOffEnabled
     */
    private $pickupDropOffEnabled = null;

    /**
     * A <code>true</code> value in this field indicates that digital gift cards (eBay gift cards or third-party gift cards) can be listed in the category specified in the <b>Category.CategoryID</b> field. A <code>false</code> value in this field indicates that digital gift cards can not be listed in the specified category.
     *  <br/><br/>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  http://pages.ebay.com/help/policies/gift.html" target="_blank">Gift cards policy Help page</a>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>DigitalGoodDeliveryEnabled</code>.
     *
     * @var bool $digitalGoodDeliveryEnabled
     */
    private $digitalGoodDeliveryEnabled = null;

    /**
     * This field is returned as <code>true</code> if the category supports the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>EpidSupported</code>.
     *
     * @var bool $epidSupported
     */
    private $epidSupported = null;

    /**
     * This field is returned as <code>true</code> if the category supports the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>KTypeSupported</code>.
     *
     * @var bool $kTypeSupported
     */
    private $kTypeSupported = null;

    /**
     * This field is no longer applicable, and if it is returned for a category, it can be ignored.
     *
     * @var string $productRequiredEnabled
     */
    private $productRequiredEnabled = null;

    /**
     * The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsAcceptedValues</b> field.</span>
     *
     * @var string[] $domesticReturnsAcceptedValues
     */
    private $domesticReturnsAcceptedValues = null;

    /**
     * The values returned in this field indicate whether or not the seller can offer international returns. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
     *
     * @var string[] $internationalReturnsAcceptedValues
     */
    private $internationalReturnsAcceptedValues = null;

    /**
     * The values returned in this field indicate the return duration options that are available for domestic returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsDurationValues</b> field.</span>
     *
     * @var string[] $domesticReturnsDurationValues
     */
    private $domesticReturnsDurationValues = null;

    /**
     * The values returned in this field indicate the return duration options that are available for international returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
     *
     * @var string[] $internationalReturnsDurationValues
     */
    private $internationalReturnsDurationValues = null;

    /**
     * The values returned in this field indicate the available options for who pays the return shipping for domestic returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsShipmentPayeeValues</b> field.</span>
     *
     * @var string[] $domesticReturnsShipmentPayeeValues
     */
    private $domesticReturnsShipmentPayeeValues = null;

    /**
     * The values returned in this field indicate the available options for who pays the return shipping for international returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
     *
     * @var string[] $internationalReturnsShipmentPayeeValues
     */
    private $internationalReturnsShipmentPayeeValues = null;

    /**
     * On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalRefundMethodValues</b> field.</span>
     *
     * @var string[] $domesticRefundMethodValues
     */
    private $domesticRefundMethodValues = null;

    /**
     * In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values returned in this field indicate the availability of such options for the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
     *
     * @var string[] $internationalRefundMethodValues
     */
    private $internationalRefundMethodValues = null;

    /**
     * In some EU countries, sellers are legally required to describe the return policy they offer. The value returned by this field indicates if sellers can provide such a description within the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy.
     *
     * @var bool $returnPolicyDescriptionEnabled
     */
    private $returnPolicyDescriptionEnabled = null;

    /**
     * Gets as categoryID
     *
     * Specifies the unique identifier of the eBay category. All eBay feature information that is returned under the corresponding <b>Category</b> container is relevant to this eBay category.
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
     * Specifies the unique identifier of the eBay category. All eBay feature information that is returned under the corresponding <b>Category</b> container is relevant to this eBay category.
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
     * Adds as listingDuration
     *
     * A <b>ListingDuration</b> field is returned for each listing type and listing duration combination that is supported for the category. The integer value indicates the number of days of the listing duration, and the <b>type</b> attribute identifies the supported listing type.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ListingDurations</code>.
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
     * A <b>ListingDuration</b> field is returned for each listing type and listing duration combination that is supported for the category. The integer value indicates the number of days of the listing duration, and the <b>type</b> attribute identifies the supported listing type.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ListingDurations</code>.
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
     * A <b>ListingDuration</b> field is returned for each listing type and listing duration combination that is supported for the category. The integer value indicates the number of days of the listing duration, and the <b>type</b> attribute identifies the supported listing type.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ListingDurations</code>.
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
     * A <b>ListingDuration</b> field is returned for each listing type and listing duration combination that is supported for the category. The integer value indicates the number of days of the listing duration, and the <b>type</b> attribute identifies the supported listing type.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ListingDurations</code>.
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
     * A <b>ListingDuration</b> field is returned for each listing type and listing duration combination that is supported for the category. The integer value indicates the number of days of the listing duration, and the <b>type</b> attribute identifies the supported listing type.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ListingDurations</code>.
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
     * Indicates whether the category requires sellers to specify shipping details at listing time.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ShippingTermsRequired</code>.
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
     * Indicates whether the category requires sellers to specify shipping details at listing time.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ShippingTermsRequired</code>.
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
     * Indicates whether the category supports the Best Offer feature for listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferEnabled</code>.
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
     * Indicates whether the category supports the Best Offer feature for listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferEnabled</code>.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Indicates whether a bidder must consent to the bid by confirming that
     *  he or she read and agrees to the terms in eBay's privacy policy.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>UserConsentRequired</code>.
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
     * Indicates whether a bidder must consent to the bid by confirming that
     *  he or she read and agrees to the terms in eBay's privacy policy.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>UserConsentRequired</code>.
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
     * Indicates whether or not it is possible to enhance a listing by putting
     *  it into a rotation for display on a special area of the eBay home page.
     *  Support for this feature varies by site. Item or feedback restrictions may apply.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>HomePageFeaturedEnabled</code>.
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
     * Indicates whether or not it is possible to enhance a listing by putting
     *  it into a rotation for display on a special area of the eBay home page.
     *  Support for this feature varies by site. Item or feedback restrictions may apply.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>HomePageFeaturedEnabled</code>.
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
     * Indicates whether the category supports the Pro Pack Bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProPack</code>.
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
     * Indicates whether the category supports the Pro Pack Bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProPack</code>.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Indicates whether the category supports the Value Pack bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ValuePack</code>.
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
     * Indicates whether the category supports the Value Pack bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ValuePack</code>.
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
     * Indicates whether the category supports the Pro Pack Plus bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProPackPlus</code>.
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
     * Indicates whether the category supports the Pro Pack Plus bundle listing upgrade.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProPackPlus</code>.
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
     * Indicates whether the category supports Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>AdFormatEnabled</code>.
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
     * Indicates whether the category supports Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>AdFormatEnabled</code>.
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
     * Indicates whether the category supports sellers offering a counter offer against a buyer's Best Offer, or a buyer offering a counter offer against the seller's counter offer.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferCounterEnabled</code>.
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
     * Indicates whether the category supports sellers offering a counter offer against a buyer's Best Offer, or a buyer offering a counter offer against the seller's counter offer.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferCounterEnabled</code>.
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
     * Indicates whether the category supports the Best Offer Auto Decline feature.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferAutoDeclineEnabled</code>.
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
     * Indicates whether the category supports the Best Offer Auto Decline feature.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferAutoDeclineEnabled</code>.
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
     * Indicates whether the category supports the Speciality level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketSpecialitySubscription</code>.
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
     * Indicates whether the category supports the Speciality level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketSpecialitySubscription</code>.
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
     * Indicates whether the category supports the Regular level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketRegularSubscription</code>.
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
     * Indicates whether the category supports the Regular level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketRegularSubscription</code>.
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
     * Indicates whether the category supports the Premium level subscription Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketPremiumSubscription</code>.
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
     * Indicates whether the category supports the Premium level subscription Motors Local Market listings. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketPremiumSubscription</code>.
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
     * Indicates whether the category supports a seller creating a Motors Local Market listing without a subscription. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketNonSubscription</code>.
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
     * Indicates whether the category supports a seller creating a Motors Local Market listing without a subscription. This feature is only available to licensed vehicle dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketNonSubscription</code>.
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
     * Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of <code>0.0</code> is returned in this field.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MinimumReservePrice</code>.
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
     * Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of <code>0.0</code> is returned in this field.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MinimumReservePrice</code>.
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
     * Indicates whether this category supports seller-level contact information for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>SellerContactDetailsEnabled</code>.
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
     * Indicates whether this category supports seller-level contact information for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>SellerContactDetailsEnabled</code>.
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
     * Indicates whether the Transaction Confirmation Request feature is supported for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
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
     * Indicates whether the Transaction Confirmation Request feature is supported for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as classifiedAdPaymentMethodEnabled
     *
     * Indicates whether the payment method should be displayed to the user for
     *  Classified Ad format listings.
     *  Even if enabled, checkout may or may not be enabled.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdPaymentMethodEnabled</code>.
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
     * Indicates whether the payment method should be displayed to the user for
     *  Classified Ad format listings.
     *  Even if enabled, checkout may or may not be enabled.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdPaymentMethodEnabled</code>.
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
     * Indicates if shipping options are available for Classified Ad listings
     *  in the category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdShippingMethodEnabled</code>.
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
     * Indicates if shipping options are available for Classified Ad listings
     *  in the category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdShippingMethodEnabled</code>.
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
     * Indicates if Best offer is enabled for Classified Ad listings for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdBestOfferEnabled</code>.
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
     * Indicates if Best offer is enabled for Classified Ad listings for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdBestOfferEnabled</code>.
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
     * Indicates whether counter offers are allowed in Classified Ad listings
     *  for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdCounterOfferEnabled</code>.
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
     * Indicates whether counter offers are allowed in Classified Ad listings
     *  for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdCounterOfferEnabled</code>.
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
     * Indicates whether automatic decline for best offers for Classified Ad listings is enabled for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdAutoDeclineEnabled</code>.
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
     * Indicates whether automatic decline for best offers for Classified Ad listings is enabled for this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdAutoDeclineEnabled</code>.
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
     * Indicates whether the category supports the telephone as a contact method for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByPhoneEnabled</code>.
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
     * Indicates whether the category supports the telephone as a contact method for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByPhoneEnabled</code>.
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
     * Indicates whether the category supports email as a contact method for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByEmailEnabled</code>.
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
     * Indicates whether the category supports email as a contact method for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByEmailEnabled</code>.
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
     * This field is no longer applicable, as eBay now controls all online payment methods.
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
     * This field is no longer applicable, as eBay now controls all online payment methods.
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
     * Indicates if pay-per-lead listings are allowed for this category. Pay-per-lead listings can be applicable if the value of <b>ListingType</b> is <code>LeadGeneration</code> and the value of <b>ListingSubtype</b> is <code>ClassifiedAd</code>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
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
     * Indicates if pay-per-lead listings are allowed for this category. Pay-per-lead listings can be applicable if the value of <b>ListingType</b> is <code>LeadGeneration</code> and the value of <b>ListingSubtype</b> is <code>ClassifiedAd</code>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
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
     * Indicates whether the category supports the use of Item Specifics in listings. If enabled, sellers can use the <b>Item.ItemSpecifics</b> node in Add/Revise/Relist calls to specify Item Specific name-value pairs.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ItemSpecificsEnabled</code>.
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
     * Indicates whether the category supports the use of Item Specifics in listings. If enabled, sellers can use the <b>Item.ItemSpecifics</b> node in Add/Revise/Relist calls to specify Item Specific name-value pairs.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ItemSpecificsEnabled</code>.
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
     * <span class="tablenote"><b>Note:</b>
     *  This field is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
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
     * <span class="tablenote"><b>Note:</b>
     *  This field is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
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
     * Gets as brandMPNIdentifierEnabled
     *
     * Indicates whether the category supports the capability to identify a product using the brand/manufacturer part number combination.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BrandMPNIdentifierEnabled</code>.
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
     * Indicates whether the category supports the capability to identify a product using the brand/manufacturer part number combination.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BrandMPNIdentifierEnabled</code>.
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
     * Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdAutoAcceptEnabled</code>.
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
     * Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdAutoAcceptEnabled</code>.
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
     * Indicates whether the category supports the Best Offer Automatic Accept feature for listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferAutoAcceptEnabled</code>.
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
     * Indicates whether the category supports the Best Offer Automatic Accept feature for listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferAutoAcceptEnabled</code>.
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
     * Indicates whether the category supports specifying that listings be displayed in the default search results of North America sites (US and Canada (English).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
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
     * Indicates whether the category supports specifying that listings be displayed in the default search results of North America sites (US and Canada (English).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
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
     * Indicates whether the category supports specifying that listings be displayed in the default search results of the UK and Ireland sites.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
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
     * Indicates whether the category supports specifying that listings be displayed in the default search results of the UK and Ireland sites.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
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
     * Indicates whether the category supports specifying that listings be displayed in the default search results of the Australia site.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
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
     * Indicates whether the category supports specifying that listings be displayed in the default search results of the Australia site.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
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
     * This field is no longer applicable.
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
     * This field is no longer applicable.
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
     * If this field is returned as <code>true</code>, the category supports the Best Price Guarantee feature on the Australia site. This field/feature is only applicable to Australia.
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
     * If this field is returned as <code>true</code>, the category supports the Best Price Guarantee feature on the Australia site. This field/feature is only applicable to Australia.
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
     * This field is returned if the Featured Gallery feature is supported for the category. The time unit that is returned in this field indicates how long a gallery will be featured on eBay.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GalleryFeaturedDurations</code>.
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
     * This field is returned if the Featured Gallery feature is supported for the category. The time unit that is returned in this field indicates how long a gallery will be featured on eBay.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GalleryFeaturedDurations</code>.
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
     * This field is returned if the Featured Gallery feature is supported for the category. The time unit that is returned in this field indicates how long a gallery will be featured on eBay.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GalleryFeaturedDurations</code>.
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
     * This field is returned if the Featured Gallery feature is supported for the category. The time unit that is returned in this field indicates how long a gallery will be featured on eBay.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GalleryFeaturedDurations</code>.
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
     * This field is returned if the Featured Gallery feature is supported for the category. The time unit that is returned in this field indicates how long a gallery will be featured on eBay.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GalleryFeaturedDurations</code>.
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
     * This field is no longer applicable.
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
     * This field is no longer applicable.
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
     * Specifies whether this category allows Classified Ad listings on eBay Motors. This element is applicable for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAdFormatEnabled</code>.
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
     * Specifies whether this category allows Classified Ad listings on eBay Motors. This element is applicable for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAdFormatEnabled</code>.
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
     * Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByPhoneEnabled</code>.
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
     * Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByPhoneEnabled</code>.
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
     * Indicates which telephone option is enabled for the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByPhoneEnabled</code>.
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
     * Indicates which telephone option is enabled for the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByPhoneEnabled</code>.
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
     * Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByAddressEnabled</code>.
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
     * Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByAddressEnabled</code>.
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
     * Indicates which address option is enabled for the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByAddressEnabled</code>.
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
     * Indicates which address option is enabled for the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByAddressEnabled</code>.
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
     * Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProCompanyNameEnabled</code>.
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
     * Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProCompanyNameEnabled</code>.
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
     * Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByEmailEnabled</code>.
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
     * Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProContactByEmailEnabled</code>.
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
     * Indicates if Best Offer is supported for eBay Motors Classified Ad listings in this category. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProBestOfferEnabled</code>.
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
     * Indicates if Best Offer is supported for eBay Motors Classified Ad listings in this category. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProBestOfferEnabled</code>.
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
     * Specifies whether this category allows auto-accept for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAutoAcceptEnabled</code>.
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
     * Specifies whether this category allows auto-accept for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAutoAcceptEnabled</code>.
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
     * Specifies whether this category allows auto-decline for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAutoDeclineEnabled</code>.
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
     * Specifies whether this category allows auto-decline for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProAutoDeclineEnabled</code>.
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
     * Indicates if the payment method should be displayed to the user for this category in an eBay Motors Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProPaymentMethodCheckOutEnabled</code>.
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
     * Indicates if the payment method should be displayed to the user for this category in an eBay Motors Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProPaymentMethodCheckOutEnabled</code>.
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
     * Indicates if shipping options should be displayed to the user for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProShippingMethodEnabled</code>.
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
     * Indicates if shipping options should be displayed to the user for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProShippingMethodEnabled</code>.
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
     * Indicates whether counter offers are allowed on Best Offers for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProCounterOfferEnabled</code>.
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
     * Indicates whether counter offers are allowed on Best Offers for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProCounterOfferEnabled</code>.
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
     * Specifies whether this category allows seller-level contact information for eBay Motors Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProSellerContactDetailsEnabled</code>.
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
     * Specifies whether this category allows seller-level contact information for eBay Motors Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element is for eBay Motors Pro users.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProSellerContactDetailsEnabled</code>.
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
     * Specifies whether this category supports Motor Local Market Classified Ad listings. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAdFormatEnabled</code>.
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
     * Specifies whether this category supports Motor Local Market Classified Ad listings. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAdFormatEnabled</code>.
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
     * Indicates whether this category supports including the telephone in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByPhoneEnabled</code>.
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
     * Indicates whether this category supports including the telephone in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByPhoneEnabled</code>.
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
     * Indicates which telephone option is enabled for the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByPhoneEnabled</code>.
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
     * Indicates which telephone option is enabled for the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByPhoneEnabled</code>.
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
     * Indicates whether this category supports including the address in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByAddressEnabled</code>.
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
     * Indicates whether this category supports including the address in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByAddressEnabled</code>.
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
     * Indicates which address option is enabled for the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByAddressEnabled</code>.
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
     * Indicates which address option is enabled for the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByAddressEnabled</code>.
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
     * Indicates whether the category supports including a company name in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketCompanyNameEnabled</code>.
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
     * Indicates whether the category supports including a company name in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketCompanyNameEnabled</code>.
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
     * Indicates whether the category supports including an email address in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByEmailEnabled</code>.
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
     * Indicates whether the category supports including an email address in the seller's contact information. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketContactByEmailEnabled</code>.
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
     * Indicates if Best Offer is enabled/required for Motors Local Market Classified Ad listings in this category. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketBestOfferEnabled</code>.
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
     * Indicates if Best Offer is enabled/required for Motors Local Market Classified Ad listings in this category. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketBestOfferEnabled</code>.
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
     * Specifies whether this category supports auto-accept for Best Offers for Motors Local Market Classified Ads. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAutoAcceptEnabled</code>.
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
     * Specifies whether this category supports auto-accept for Best Offers for Motors Local Market Classified Ads. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAutoAcceptEnabled</code>.
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
     * Specifies whether this category supports auto-decline for Best Offers for Motors Local Market Classified Ads. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAutoDeclineEnabled</code>.
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
     * Specifies whether this category supports auto-decline for Best Offers for Motors Local Market Classified Ads. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAutoDeclineEnabled</code>.
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
     * Indicates if the payment method should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketPaymentMethodCheckOutEnabled</code>.
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
     * Indicates if the payment method should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketPaymentMethodCheckOutEnabled</code>.
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
     * Indicates if shipping methods should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for Local market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketShippingMethodEnabled</code>.
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
     * Indicates if shipping methods should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for Local market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketShippingMethodEnabled</code>.
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
     * Indicates whether counter offers are allowed on Best Offers for this category for Motors Local Market Classified Ad listings. This element is for Local market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketCounterOfferEnabled</code>.
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
     * Indicates whether counter offers are allowed on Best Offers for this category for Motors Local Market Classified Ad listings. This element is for Local market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketCounterOfferEnabled</code>.
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
     * Specifies the whether this category allows seller-level contact information for Motors Local Market Classified Ad listings. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketSellerContactDetailsEnabled</code>.
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
     * Specifies the whether this category allows seller-level contact information for Motors Local Market Classified Ad listings. This element is for Local Market dealers.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketSellerContactDetailsEnabled</code>.
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
     * Indicates which telephone option is included in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByPhoneEnabled</code>.
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
     * Indicates which telephone option is included in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByPhoneEnabled</code>.
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
     * Indicates whether this category supports including an address in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByAddressEnabled</code>.
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
     * Indicates whether this category supports including an address in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByAddressEnabled</code>.
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
     * Indicates which address option is included in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByAddressEnabled</code>.
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
     * Indicates which address option is included in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByAddressEnabled</code>.
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
     * Indicates whether this category supports including a company name in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdCompanyNameEnabled</code>.
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
     * Indicates whether this category supports including a company name in the seller's contact information. This element is for For Sale By Owner listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdCompanyNameEnabled</code>.
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
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Specialty vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>SpecialitySubscription</code>.
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
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Specialty vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>SpecialitySubscription</code>.
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
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Regular vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>RegularSubscription</code>.
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
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Regular vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>RegularSubscription</code>.
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
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Premium vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PremiumSubscription</code>.
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
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Premium vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PremiumSubscription</code>.
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
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller does not have a vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>NonSubscription</code>.
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
     * The value in this field indicates whether the category supports Motors Local Market listings if the seller does not have a vehicle subscription.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>NonSubscription</code>.
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
     * Gets as iNEscrowWorkflowTimeline
     *
     * <span class="tablenote"><b>Note:</b>
     *  This field is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
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
     * <span class="tablenote"><b>Note:</b>
     *  This field is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
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
     * Indicates if the category allows the seller to revise the quantity of a multi-quantity, active listing.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReviseQuantityAllowed</code>.
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
     * Indicates if the category allows the seller to revise the quantity of a multi-quantity, active listing.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReviseQuantityAllowed</code>.
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
     * Indicates if the category allows the seller to revise the price of a fixed-price listing.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>RevisePriceAllowed</code>.
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
     * Indicates if the category allows the seller to revise the price of a fixed-price listing.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>RevisePriceAllowed</code>.
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
     * Indicates if an eBay Store owner gets extended listing durations in a given category. When the value of this element is true, it means the listing duration values defined in <b>StoreOwnerExtendedListingDurations</b> are applicable to fixed-price listings in a given category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurationsEnabled</code>.
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
     * Indicates if an eBay Store owner gets extended listing durations in a given category. When the value of this element is true, it means the listing duration values defined in <b>StoreOwnerExtendedListingDurations</b> are applicable to fixed-price listings in a given category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurationsEnabled</code>.
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
     * Provides additional listings durations that are available to eBay Store owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the <b>ListingDurations</b> element. Applies to fixed-price Listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurations</code>.
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
     * Provides additional listings durations that are available to eBay Store owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the <b>ListingDurations</b> element. Applies to fixed-price Listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurations</code>.
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
     * Provides additional listings durations that are available to eBay Store owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the <b>ListingDurations</b> element. Applies to fixed-price Listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurations</code>.
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
     * Provides additional listings durations that are available to eBay Store owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the <b>ListingDurations</b> element. Applies to fixed-price Listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurations</code>.
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
     * Provides additional listings durations that are available to eBay Store owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the <b>ListingDurations</b> element. Applies to fixed-price Listings.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurations</code>.
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
     * <b>For most sites:</b> If true, listings in this
     *  category require a return policy. <br/>
     *  <br/>
     *  <b>For eBay Australia (AU) and
     *  US eBay Motors Parts and Accessories:</b>
     *  If true, the category supports but does not require a
     *  return policy.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReturnPolicyEnabled</code>.
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
     * <b>For most sites:</b> If true, listings in this
     *  category require a return policy. <br/>
     *  <br/>
     *  <b>For eBay Australia (AU) and
     *  US eBay Motors Parts and Accessories:</b>
     *  If true, the category supports but does not require a
     *  return policy.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReturnPolicyEnabled</code>.
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
     * Indicates if a seller's stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup. <br/>
     *  <br/>
     *  The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time).
     *  <br/>
     *  For a list of the handling time values allowed for each site, use
     *  <code>DispatchTimeMaxDetails</code> in <b>GeteBayDetails</b>.<br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  Although the field name ends with "Enabled", a value of true means
     *  that a handling time is NOT supported, and value of false means
     *  that a handling time IS supported.</span><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>HandlingTimeEnabled</code>.
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
     * Indicates if a seller's stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup. <br/>
     *  <br/>
     *  The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time).
     *  <br/>
     *  For a list of the handling time values allowed for each site, use
     *  <code>DispatchTimeMaxDetails</code> in <b>GeteBayDetails</b>.<br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  Although the field name ends with "Enabled", a value of true means
     *  that a handling time is NOT supported, and value of false means
     *  that a handling time IS supported.</span><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>HandlingTimeEnabled</code>.
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
     * The maximum cost the seller can charge for the first domestic flat-rate shipping
     *  service.
     *  Mutually exclusive with the <b>Group</b><code>N</code><b>MaxFlatShippingCost</b> elements.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxFlatShippingCost</code>.
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
     * The maximum cost the seller can charge for the first domestic flat-rate shipping
     *  service.
     *  Mutually exclusive with the <b>Group</b><code>N</code><b>MaxFlatShippingCost</b> elements.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxFlatShippingCost</code>.
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
     * Gets as group1MaxFlatShippingCost
     *
     * Returns the applicable max cap per shipping cost for shipping service group1.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group1MaxFlatShippingCost</code>.
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
     * Returns the applicable max cap per shipping cost for shipping service group1.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group1MaxFlatShippingCost</code>.
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
     * Returns the applicable max cap per shipping cost for shipping service group2.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group2MaxFlatShippingCost</code>.
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
     * Returns the applicable max cap per shipping cost for shipping service group2.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group2MaxFlatShippingCost</code>.
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
     * Returns the applicable max cap per shipping cost for shipping service group3.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group3MaxFlatShippingCost</code>.
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
     * Returns the applicable max cap per shipping cost for shipping service group3.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group3MaxFlatShippingCost</code>.
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
     * Indicates the acceptable payment methods that can be used when listing an item for sale in the corresponding category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentMethods</code>.
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
     * Indicates the acceptable payment methods that can be used when listing an item for sale in the corresponding category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentMethods</code>.
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
     * Indicates the acceptable payment methods that can be used when listing an item for sale in the corresponding category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentMethods</code>.
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
     * Indicates the acceptable payment methods that can be used when listing an item for sale in the corresponding category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentMethods</code>.
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
     * Indicates the acceptable payment methods that can be used when listing an item for sale in the corresponding category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentMethods</code>.
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
     * If <code>true</code>, you can pass in <b>Item.Variations</b> in an
     *  Add/Revise/Relist fixed-price item call when you list in this
     *  category.<br/>
     *  <br/>
     *  Multi-variation listings contain items that are logically the same
     *  product, but that vary in their manufacturing details or packaging.
     *  For example, a particular brand and style of shirt could be
     *  available in different sizes and colors, such as "large blue" and
     *  "medium black" variations.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>VariationsEnabled</code>.
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
     * If <code>true</code>, you can pass in <b>Item.Variations</b> in an
     *  Add/Revise/Relist fixed-price item call when you list in this
     *  category.<br/>
     *  <br/>
     *  Multi-variation listings contain items that are logically the same
     *  product, but that vary in their manufacturing details or packaging.
     *  For example, a particular brand and style of shirt could be
     *  available in different sizes and colors, such as "large blue" and
     *  "medium black" variations.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>VariationsEnabled</code>.
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
     * Indicates whether the category supports free, automatic upgrades for Gallery Plus, which enhances pictures in search results.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>FreeGalleryPlusEnabled</code>.
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
     * Indicates whether the category supports free, automatic upgrades for Gallery Plus, which enhances pictures in search results.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>FreeGalleryPlusEnabled</code>.
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
     * Indicates whether the category supports free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>FreePicturePackEnabled</code>.
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
     * Indicates whether the category supports free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>FreePicturePackEnabled</code>.
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
     * Indicates whether the category supports parts compatibility by application
     *  (<b>ByApplication</b>), by specification (<b>BySpecification</b>), or not at all
     *  (<b>Disabled</b>). Categories cannot support both types of parts compatibility.
     *  <br/><br/>
     *  Parts Compatibility is supported in limited Parts & Accessories
     *  categories for the eBay Motors (US) site (site ID 100) only.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CompatibilityEnabled</code>.
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
     * Indicates whether the category supports parts compatibility by application
     *  (<b>ByApplication</b>), by specification (<b>BySpecification</b>), or not at all
     *  (<b>Disabled</b>). Categories cannot support both types of parts compatibility.
     *  <br/><br/>
     *  Parts Compatibility is supported in limited Parts & Accessories
     *  categories for the eBay Motors (US) site (site ID 100) only.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CompatibilityEnabled</code>.
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
     * This field specifies the minimum number of required compatible applications
     *  for listing items. A value of "0" indicates it is not mandatory to specify
     *  parts compatibilities when listing.
     *  <br/><br/>
     *  This applies to categories that are enabled for compatibility by application
     *  only. Parts compatiblity by application can be specified by listing with a
     *  catalog product that supports parts compatibility or by specifying parts
     *  compatibility by application manually (<b class="con">
     *  Item.ItemCompatibilityList</b>).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MinCompatibleApplications</code>.
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
     * This field specifies the minimum number of required compatible applications
     *  for listing items. A value of "0" indicates it is not mandatory to specify
     *  parts compatibilities when listing.
     *  <br/><br/>
     *  This applies to categories that are enabled for compatibility by application
     *  only. Parts compatiblity by application can be specified by listing with a
     *  catalog product that supports parts compatibility or by specifying parts
     *  compatibility by application manually (<b class="con">
     *  Item.ItemCompatibilityList</b>).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MinCompatibleApplications</code>.
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
     * This field specifies the maximum number of compatible applications allowed
     *  per item when adding or revising items. This is relevant for specifying parts
     *  compatibility by application manually (<b class="con">
     *  Item.ItemCompatibilityList</b>) only.
     *  <br/><br/>
     *  Applicable for the US site only.
     *  <br/><br/>
     *  For DE, UK, and AU sites, this field returns the same value as <b>MaxGranularFitmentCount</b>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxCompatibleApplications</code>.
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
     * This field specifies the maximum number of compatible applications allowed
     *  per item when adding or revising items. This is relevant for specifying parts
     *  compatibility by application manually (<b class="con">
     *  Item.ItemCompatibilityList</b>) only.
     *  <br/><br/>
     *  Applicable for the US site only.
     *  <br/><br/>
     *  For DE, UK, and AU sites, this field returns the same value as <b>MaxGranularFitmentCount</b>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxCompatibleApplications</code>.
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
     * Indicates whether the category supports, requires, or doesn't support the use item condition for an item listing. For categories that require or support the use of item condition, see the <b>ConditionValues</b> and/or <b>SpecialFeatures</b> containers for a list of valid item conditions (display names and ID values).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionEnabled</code>.
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
     * Indicates whether the category supports, requires, or doesn't support the use item condition for an item listing. For categories that require or support the use of item condition, see the <b>ConditionValues</b> and/or <b>SpecialFeatures</b> containers for a list of valid item conditions (display names and ID values).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionEnabled</code>.
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
     * This container specifies all of the item conditions that are supported for the corresponding category. The display name of the item condiation and the ID associated with the description are both shown.
     *  <br/><br/>
     *  This container will not be returned for any eBay categories that don't support the use of an item condition value. To see which categories require, support, or don't support the use of item conditions, you can include a <b>FeatureID</b> value of <code>ConditionEnabled</code>. Any eBay category that does not support the use of an item condition value will return a <b>ConditionEnabled</b> value of <code>Disabled</code>.
     *  <br/><br/>
     *  This container will also not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionValues</code>.
     *  <br/>
     *  <br/>
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
     * This container specifies all of the item conditions that are supported for the corresponding category. The display name of the item condiation and the ID associated with the description are both shown.
     *  <br/><br/>
     *  This container will not be returned for any eBay categories that don't support the use of an item condition value. To see which categories require, support, or don't support the use of item conditions, you can include a <b>FeatureID</b> value of <code>ConditionEnabled</code>. Any eBay category that does not support the use of an item condition value will return a <b>ConditionEnabled</b> value of <code>Disabled</code>.
     *  <br/><br/>
     *  This container will also not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionValues</code>.
     *  <br/>
     *  <br/>
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
     * This container is only returned if the corresponding category supports a special item condition such as <b>Certified - Refurbished</b> condition (condition ID 2000), <b>Excellent - Refurbished</b> condition (condition ID 2010), <b>Very Good - Refurbished</b> condition (condition ID 2020), and <b>Good - Refurbished</b> condition (condition ID 2030). A seller must be pre-qualified by eBay to list items with the any of these refurbished item conditions.
     *  <br/><br/>
     *  All other item conditions supported by a category will be returned in the <b>ConditionValues</b> container instead.
     *  <br/><br/>
     *  Neither the <b>ConditionValues</b> or the <b>SpecialFeatures</b> containers will be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionValues</code>.
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
     * This container is only returned if the corresponding category supports a special item condition such as <b>Certified - Refurbished</b> condition (condition ID 2000), <b>Excellent - Refurbished</b> condition (condition ID 2010), <b>Very Good - Refurbished</b> condition (condition ID 2020), and <b>Good - Refurbished</b> condition (condition ID 2030). A seller must be pre-qualified by eBay to list items with the any of these refurbished item conditions.
     *  <br/><br/>
     *  All other item conditions supported by a category will be returned in the <b>ConditionValues</b> container instead.
     *  <br/><br/>
     *  Neither the <b>ConditionValues</b> or the <b>SpecialFeatures</b> containers will be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ConditionValues</code>.
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
     * Some eBay sites may select a few categories and designate them as
     *  "value categories". These are typically selected from
     *  categories where buyers can find great deals. (Not all categories
     *  with great deals are designated as value categories.)
     *  This designation can change over time. <br/>
     *  <br/>
     *  While a category is designated as a value category (i.e.,
     *  when <b>ValueCategory</b> is <code>true</code>), it is subject to the following rule:
     *  Items in value categories can only be listed in one category.<br/>
     *  <br/>
     *  For example, if you attempt to list in two categories and the
     *  primary category or secondary category is a value category,
     *  then eBay drops the secondary category and lists the
     *  item in the primary category only.
     *  Similarly, if you attempt to add a secondary category to an existing
     *  listing, or you change the category for an existing listing,
     *  and if the primary or secondary category is a value category,
     *  then eBay drops the secondary category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ValueCategory</code>.
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
     * Some eBay sites may select a few categories and designate them as
     *  "value categories". These are typically selected from
     *  categories where buyers can find great deals. (Not all categories
     *  with great deals are designated as value categories.)
     *  This designation can change over time. <br/>
     *  <br/>
     *  While a category is designated as a value category (i.e.,
     *  when <b>ValueCategory</b> is <code>true</code>), it is subject to the following rule:
     *  Items in value categories can only be listed in one category.<br/>
     *  <br/>
     *  For example, if you attempt to list in two categories and the
     *  primary category or secondary category is a value category,
     *  then eBay drops the secondary category and lists the
     *  item in the primary category only.
     *  Similarly, if you attempt to add a secondary category to an existing
     *  listing, or you change the category for an existing listing,
     *  and if the primary or secondary category is a value category,
     *  then eBay drops the secondary category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ValueCategory</code>.
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
     * Indicates whether a category supports the creation of a listing using an eBay Catalog product. To create a listing based on an eBay Catalog product, the seller passed in Global Trade Item Number (GTIN) or eBay Product ID (ePID) value in an Add/Revise/Relist call and then eBay tries to match the product identifier to a product in the eBay Catalog. If a match is found, the listing picks up the details of the eBay Catalog product, including product title, product description, product aspects, primary eBay listing category ID, and links to any product stock photos.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProductCreationEnabled</code>.
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
     * Indicates whether a category supports the creation of a listing using an eBay Catalog product. To create a listing based on an eBay Catalog product, the seller passed in Global Trade Item Number (GTIN) or eBay Product ID (ePID) value in an Add/Revise/Relist call and then eBay tries to match the product identifier to a product in the eBay Catalog. If a match is found, the listing picks up the details of the eBay Catalog product, including product title, product description, product aspects, primary eBay listing category ID, and links to any product stock photos.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProductCreationEnabled</code>.
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
     * Indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that EANs cannot be used for the category, a value of <code>Enabled</code> indicates that EANs can be used for the category, and a value of <code>Required</code> indicates that an EAN is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>EANEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>EANEnabled</b>, <b>ISBNEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
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
     * Indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that EANs cannot be used for the category, a value of <code>Enabled</code> indicates that EANs can be used for the category, and a value of <code>Required</code> indicates that an EAN is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>EANEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>EANEnabled</b>, <b>ISBNEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
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
     * Indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that ISBNs cannot be used for the category, a value of <code>Enabled</code> indicates that ISBNs can be used for the category, and a value of <code>Required</code> indicates that an ISBN is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ISBNEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>ISBNEnabled</b>, <b>EANEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
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
     * Indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that ISBNs cannot be used for the category, a value of <code>Enabled</code> indicates that ISBNs can be used for the category, and a value of <code>Required</code> indicates that an ISBN is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ISBNEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>ISBNEnabled</b>, <b>EANEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
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
     * Indicates whether or not Universal Product Codes (UPCs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that UPCs cannot be used for the category, a value of <code>Enabled</code> indicates that UPCs can be used for the category, and a value of <code>Required</code> indicates that a UPC is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>UPCEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>UPCEnabled</b>, <b>ISBNEnabled</b>, <b>EANEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
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
     * Indicates whether or not Universal Product Codes (UPCs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that UPCs cannot be used for the category, a value of <code>Enabled</code> indicates that UPCs can be used for the category, and a value of <code>Required</code> indicates that a UPC is required when listing a product in this category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>UPCEnabled</code>.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that means that they should look for <b>UPCEnabled</b>, <b>ISBNEnabled</b>, <b>EANEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. </span>
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
     * Indicates the maximum number of compatible applications allowed per item when adding or revising items with compatibilities provided at the most detailed granularity. For example, in Car and Truck Parts on the US site, the most granular application would include Year, Make, Model, Trim, and Engine.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxGranularFitmentCount</code>.
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
     * Indicates the maximum number of compatible applications allowed per item when adding or revising items with compatibilities provided at the most detailed granularity. For example, in Car and Truck Parts on the US site, the most granular application would include Year, Make, Model, Trim, and Engine.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxGranularFitmentCount</code>.
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
     * This field is for future use. It is currently returned as an empty field, but in the future, the string value in this field will indicate Parts Compatibility vehicle type (e.g. cars, motorcycles, boats).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CompatibleVehicleType</code>.
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
     * This field is for future use. It is currently returned as an empty field, but in the future, the string value in this field will indicate Parts Compatibility vehicle type (e.g. cars, motorcycles, boats).
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CompatibleVehicleType</code>.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Indicates the Business Policies category group that may be used for Shipping profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ShippingProfileCategoryGroup</code>.
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
     * Indicates the Business Policies category group that may be used for Shipping profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ShippingProfileCategoryGroup</code>.
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
     * Indicates the Business Policies category group that may be used for Payment profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentProfileCategoryGroup</code>.
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
     * Indicates the Business Policies category group that may be used for Payment profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentProfileCategoryGroup</code>.
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
     * Indicates the Business Policies category group that may be used for Return Policy profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReturnPolicyProfileCategoryGroup</code>.
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
     * Indicates the Business Policies category group that may be used for Return Policy profiles.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReturnPolicyProfileCategoryGroup</code>.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is returned as <code>true</code> if the corresponding category supports the use of a seller-provided title for a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title, given by the seller, that appears below eBay's pre-filled listing title for the motor vehicle. Visually, the seller-provided title is similar to a subtitle on other types of eBay listings (non-vehicle). A seller-provided title can assist in helping buyers discover the vehicle.
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
     * This field is returned as <code>true</code> if the corresponding category supports the use of a seller-provided title for a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title, given by the seller, that appears below eBay's pre-filled listing title for the motor vehicle. Visually, the seller-provided title is similar to a subtitle on other types of eBay listings (non-vehicle). A seller-provided title can assist in helping buyers discover the vehicle.
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
     * This field is returned as <code>true</code> if the corresponding category supports the use of a deposit/down payment on a motor vehicle listing. In an <b>AddItem</b> call, the seller can configure a down payment for a motor vehicle listing using the <b>PaymentDetails</b> container.
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
     * This field is returned as <code>true</code> if the corresponding category supports the use of a deposit/down payment on a motor vehicle listing. In an <b>AddItem</b> call, the seller can configure a down payment for a motor vehicle listing using the <b>PaymentDetails</b> container.
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
     * Indicates if the Global Shipping Program (GSP) is supported for the category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GlobalShippingEnabled</code>.
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
     * Indicates if the Global Shipping Program (GSP) is supported for the category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GlobalShippingEnabled</code>.
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
     * This field indicates whether or not the category (specified in the <b>Category.CategoryID</b> field) supports Boats and Motorcycles Parts compatibility. If <code>true</code>, parts compatibility name-value pairs for boats and motorcycles can be added to an item listed in the specified category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>AdditionalCompatibilityEnabled</code>.
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
     * This field indicates whether or not the category (specified in the <b>Category.CategoryID</b> field) supports Boats and Motorcycles Parts compatibility. If <code>true</code>, parts compatibility name-value pairs for boats and motorcycles can be added to an item listed in the specified category.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>AdditionalCompatibilityEnabled</code>.
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
     * A <code>true</code> value in this field indicates that items listed in the category (specified in the <b>Category.CategoryID</b> field) may be enabled with the 'Click and Collect' feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available. A <code>false</code> value in this field indicates that items listed in the category are not eligible for the 'Click and Collect' feature.
     *  <br/><br/>
     *  The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PickupDropOffEnabled</code>.
     *  <br/>
     *  <br/>
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
     * A <code>true</code> value in this field indicates that items listed in the category (specified in the <b>Category.CategoryID</b> field) may be enabled with the 'Click and Collect' feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available. A <code>false</code> value in this field indicates that items listed in the category are not eligible for the 'Click and Collect' feature.
     *  <br/><br/>
     *  The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PickupDropOffEnabled</code>.
     *  <br/>
     *  <br/>
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
     * A <code>true</code> value in this field indicates that digital gift cards (eBay gift cards or third-party gift cards) can be listed in the category specified in the <b>Category.CategoryID</b> field. A <code>false</code> value in this field indicates that digital gift cards can not be listed in the specified category.
     *  <br/><br/>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  http://pages.ebay.com/help/policies/gift.html" target="_blank">Gift cards policy Help page</a>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>DigitalGoodDeliveryEnabled</code>.
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
     * A <code>true</code> value in this field indicates that digital gift cards (eBay gift cards or third-party gift cards) can be listed in the category specified in the <b>Category.CategoryID</b> field. A <code>false</code> value in this field indicates that digital gift cards can not be listed in the specified category.
     *  <br/><br/>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  http://pages.ebay.com/help/policies/gift.html" target="_blank">Gift cards policy Help page</a>.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>DigitalGoodDeliveryEnabled</code>.
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
     * This field is returned as <code>true</code> if the category supports the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>EpidSupported</code>.
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
     * This field is returned as <code>true</code> if the category supports the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>EpidSupported</code>.
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
     * This field is returned as <code>true</code> if the category supports the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>KTypeSupported</code>.
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
     * This field is returned as <code>true</code> if the category supports the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *  <br/><br/>
     *  Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>KTypeSupported</code>.
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
     * This field is no longer applicable, and if it is returned for a category, it can be ignored.
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
     * This field is no longer applicable, and if it is returned for a category, it can be ignored.
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
     * The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsAcceptedValues</b> field.</span>
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
     * The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsAcceptedValues</b> field.</span>
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
     * The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsAcceptedValues</b> field.</span>
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
     * The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsAcceptedValues</b> field.</span>
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
     * The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsAcceptedValues</b> field.</span>
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
     * The values returned in this field indicate whether or not the seller can offer international returns. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * The values returned in this field indicate whether or not the seller can offer international returns. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * The values returned in this field indicate whether or not the seller can offer international returns. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * The values returned in this field indicate whether or not the seller can offer international returns. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * The values returned in this field indicate whether or not the seller can offer international returns. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * The values returned in this field indicate the return duration options that are available for domestic returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsDurationValues</b> field.</span>
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
     * The values returned in this field indicate the return duration options that are available for domestic returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsDurationValues</b> field.</span>
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
     * The values returned in this field indicate the return duration options that are available for domestic returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsDurationValues</b> field.</span>
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
     * The values returned in this field indicate the return duration options that are available for domestic returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsDurationValues</b> field.</span>
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
     * The values returned in this field indicate the return duration options that are available for domestic returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsDurationValues</b> field.</span>
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
     * The values returned in this field indicate the return duration options that are available for international returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the return duration options that are available for international returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the return duration options that are available for international returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the return duration options that are available for international returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the return duration options that are available for international returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for domestic returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsShipmentPayeeValues</b> field.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for domestic returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsShipmentPayeeValues</b> field.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for domestic returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsShipmentPayeeValues</b> field.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for domestic returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsShipmentPayeeValues</b> field.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for domestic returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalReturnsShipmentPayeeValues</b> field.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for international returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for international returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for international returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for international returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * The values returned in this field indicate the available options for who pays the return shipping for international returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead.</span>
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
     * On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalRefundMethodValues</b> field.</span>
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
     * On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalRefundMethodValues</b> field.</span>
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
     * On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalRefundMethodValues</b> field.</span>
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
     * On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalRefundMethodValues</b> field.</span>
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
     * On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For the international equivalent of this field, see the <b>InternationalRefundMethodValues</b> field.</span>
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
     * In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values returned in this field indicate the availability of such options for the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values returned in this field indicate the availability of such options for the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values returned in this field indicate the availability of such options for the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values returned in this field indicate the availability of such options for the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values returned in this field indicate the availability of such options for the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account API.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Sellers have the option of creating a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. </span>
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
     * In some EU countries, sellers are legally required to describe the return policy they offer. The value returned by this field indicates if sellers can provide such a description within the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy.
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
     * In some EU countries, sellers are legally required to describe the return policy they offer. The value returned by this field indicates if sellers can provide such a description within the given marketplace and category. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy.
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
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getListingDuration();
        if (null !== $value && !empty($this->getListingDuration())) {
            $writer->write(array_map(function ($v) {
                return ["ListingDuration" => $v];
            }, $value));
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
        $value = $this->getCombinedFixedPriceTreatmentEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedFixedPriceTreatmentEnabled", $value);
        }
        $value = $this->getGalleryFeaturedDurations();
        if (null !== $value && !empty($this->getGalleryFeaturedDurations())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryFeaturedDurations", array_map(function ($v) {
                return ["Duration" => $v];
            }, $value));
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
        $value = $this->getINEscrowWorkflowTimeline();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}INEscrowWorkflowTimeline", $value);
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
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurations", array_map(function ($v) {
                return ["Duration" => $v];
            }, $value));
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
            $writer->write(array_map(function ($v) {
                return ["PaymentMethod" => $v];
            }, $value));
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
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsAcceptedValues", array_map(function ($v) {
                return ["DomesticReturnsAccepted" => $v];
            }, $value));
        }
        $value = $this->getInternationalReturnsAcceptedValues();
        if (null !== $value && !empty($this->getInternationalReturnsAcceptedValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedValues", array_map(function ($v) {
                return ["InternationalReturnsAccepted" => $v];
            }, $value));
        }
        $value = $this->getDomesticReturnsDurationValues();
        if (null !== $value && !empty($this->getDomesticReturnsDurationValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsDurationValues", array_map(function ($v) {
                return ["DomesticReturnsDuration" => $v];
            }, $value));
        }
        $value = $this->getInternationalReturnsDurationValues();
        if (null !== $value && !empty($this->getInternationalReturnsDurationValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsDurationValues", array_map(function ($v) {
                return ["InternationalReturnsDuration" => $v];
            }, $value));
        }
        $value = $this->getDomesticReturnsShipmentPayeeValues();
        if (null !== $value && !empty($this->getDomesticReturnsShipmentPayeeValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsShipmentPayeeValues", array_map(function ($v) {
                return ["DomesticReturnsShipmentPayee" => $v];
            }, $value));
        }
        $value = $this->getInternationalReturnsShipmentPayeeValues();
        if (null !== $value && !empty($this->getInternationalReturnsShipmentPayeeValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsShipmentPayeeValues", array_map(function ($v) {
                return ["InternationalReturnsShipmentPayee" => $v];
            }, $value));
        }
        $value = $this->getDomesticRefundMethodValues();
        if (null !== $value && !empty($this->getDomesticRefundMethodValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticRefundMethodValues", array_map(function ($v) {
                return ["DomesticRefundMethod" => $v];
            }, $value));
        }
        $value = $this->getInternationalRefundMethodValues();
        if (null !== $value && !empty($this->getInternationalRefundMethodValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalRefundMethodValues", array_map(function ($v) {
                return ["InternationalRefundMethod" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDuration', true);
        if (null !== $value && !empty($value)) {
            $this->setListingDuration(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ListingDurationReferenceType::fromKeyValue($v);
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}INEscrowWorkflowTimeline');
        if (null !== $value) {
            $this->setINEscrowWorkflowTimeline($value);
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
