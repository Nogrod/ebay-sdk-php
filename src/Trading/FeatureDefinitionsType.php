<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeatureDefinitionsType
 *
 * This type is used by the <b>FeatureDefinitions</b> container that is returned in the <b>GetCategoryFeatures</b> response to indicate which eBay features are available on one more eBay API-enabled sites. If no <b>FeatureID</b> field is included in the call request, all eBay features available for one more eBay API-enabled sites are returned. If one or more <b>FeatureID</b> fields are included in the call request, only those eBay features specified in each <b>FeatureID</b> field are returned in the response.
 * XSD Type: FeatureDefinitionsType
 */
class FeatureDefinitionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingDurationDefinitionsType $listingDurations
     */
    private $listingDurations = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require shipping terms at listing time, whiche includesat least one domestic shipping service option and its associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingTermRequiredDefinitionType $shippingTermsRequired
     */
    private $shippingTermsRequired = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\BestOfferEnabledDefinitionType $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\DutchBINEnabledDefinitionType $dutchBINEnabled
     */
    private $dutchBINEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\UserConsentRequiredDefinitionType $userConsentRequired
     */
    private $userConsentRequired = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     */
    private $homePageFeaturedEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ProPackEnabledDefinitionType $proPackEnabled
     */
    private $proPackEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     */
    private $basicUpgradePackEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ValuePackEnabledDefinitionType $valuePackEnabled
     */
    private $valuePackEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     */
    private $proPackPlusEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\AdFormatEnabledDefinitionType $adFormatEnabled
     */
    private $adFormatEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     */
    private $bestOfferCounterEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     */
    private $bestOfferAutoDeclineEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     */
    private $localMarketSpecialitySubscription = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     */
    private $localMarketRegularSubscription = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     */
    private $localMarketPremiumSubscription = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     */
    private $localMarketNonSubscription = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ExpressEnabledDefinitionType $expressEnabled
     */
    private $expressEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     */
    private $expressPicturesRequired = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ExpressConditionRequiredDefinitionType $expressConditionRequired
     */
    private $expressConditionRequired = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\MinimumReservePriceDefinitionType $minimumReservePrice
     */
    private $minimumReservePrice = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     */
    private $transactionConfirmationRequestEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a classified ad listing. This feature is only applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     */
    private $sellerContactDetailsEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     */
    private $storeInventoryEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     */
    private $skypeMeTransactionalEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     */
    private $skypeMeNonTransactionalEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     */
    private $localListingDistancesRegular = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     */
    private $localListingDistancesSpecialty = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     */
    private $localListingDistancesNonSubscription = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     */
    private $classifiedAdPaymentMethodEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     */
    private $classifiedAdShippingMethodEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     */
    private $classifiedAdBestOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     */
    private $classifiedAdCounterOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     */
    private $classifiedAdAutoDeclineEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     */
    private $classifiedAdContactByPhoneEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     */
    private $classifiedAdContactByEmailEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require at least one form of safe payment. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SafePaymentRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  For the US, Canada and Australia sites, users registered after January
     *  17, 2007 are required to offer at least one safe payment method (i.e.
     *  PayPal/PaisaPay, or one of the credit cards specified in
     *  <b>Item.PaymentMethods</b>).
     *  <br><br>
     *  If a seller has a <code>SafePaymentExempt</code> status, they are exempt from the
     *  requirement to offer at least one safe payment method when listing
     *  an item on a site that has the safe payment requirement.
     *  <br>
     *  The safe payment requirement also applies to two-category listings that have
     *  one ship-to or available-to location in the US, Canada, or Australia. The
     *  French Canadian (CAFR) site is a special case, because listings on the CAFR
     *  site with ship-to or available-to locations in Canada do not require a Safe
     *  Payment method, yet listings on the CAFR site with ship-to or available-to
     *  locations in the US or Australia do require a Safe Payment method.
     *  <br><br>
     *  The Business and Industrial, Motors, Real Estate, and Mature Audiences
     *  categories, and all listings that don't support the <b>Item.PaymentMethods</b> field are
     *  exempt from this requirement. Therefore, listings in those categories do not
     *  require a safe payment method.
     *
     * @var \Nogrod\eBaySDK\Trading\SafePaymentRequiredDefinitionType $safePaymentRequired
     */
    private $safePaymentRequired = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     */
    private $classifiedAdPayPerLeadEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Item Specifics in listings. Item Specifics are typical aspects that items in a specific category tend to have, and they allow sellers to provide descriptive details of an item in a structured manner. For example, in a jewelry category, sellers might describe lockets with Item Specifics name-value pairs like "Chain Length=18 in." and "Main Shape=Heart", or in a Washers & Dryers category, sellers might include "Type=Top-Loading". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     */
    private $itemSpecificsEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of PaisaPay Full Escrow as a payment method. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaisaPayFullEscrowEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     */
    private $paisaPayFullEscrowEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     */
    private $iSBNIdentifierEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     */
    private $uPCIdentifierEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     */
    private $eANIdentifierEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     */
    private $brandMPNIdentifierEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     */
    private $bestOfferAutoAcceptEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     */
    private $classifiedAdAutoAcceptEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     */
    private $crossBorderTradeNorthAmericaEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     */
    private $crossBorderTradeGBEnabled = null;

    /**
     * This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     *
     * @var \Nogrod\eBaySDK\Trading\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     */
    private $crossBorderTradeAustraliaEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PayPal Purchase Protection. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalBuyerProtectionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     */
    private $payPalBuyerProtectionEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     */
    private $buyerGuaranteeEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     */
    private $combinedFixedPriceTreatmentEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     */
    private $galleryFeaturedDurations = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PaisaPay Full Escrow workflow timeline.This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>INEscrowWorkflowTimeline</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     */
    private $iNEscrowWorkflowTimeline = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require that PayPal is included as an accepted payment method. This is not applicable to classified ad listings, as payment is handled by the buyer and seller, and not eBay. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\PayPalRequiredDefinitionType $payPalRequired
     */
    private $payPalRequired = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     */
    private $eBayMotorsProAdFormatEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     */
    private $eBayMotorsProContactByPhoneEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     */
    private $eBayMotorsProPhoneCount = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     */
    private $eBayMotorsProContactByAddressEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     */
    private $eBayMotorsProStreetCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     */
    private $eBayMotorsProCompanyNameEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     */
    private $eBayMotorsProContactByEmailEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     */
    private $eBayMotorsProBestOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     */
    private $eBayMotorsProAutoAcceptEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     */
    private $eBayMotorsProAutoDeclineEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     */
    private $eBayMotorsProPaymentMethodCheckOutEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     */
    private $eBayMotorsProShippingMethodEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     */
    private $eBayMotorsProCounterOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     */
    private $eBayMotorsProSellerContactDetailsEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     */
    private $localMarketAdFormatEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of a phone number when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     */
    private $localMarketContactByPhoneEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     */
    private $localMarketPhoneCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of an address when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     */
    private $localMarketContactByAddressEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     */
    private $localMarketStreetCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     */
    private $localMarketCompanyNameEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     */
    private $localMarketContactByEmailEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     */
    private $localMarketBestOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     */
    private $localMarketAutoAcceptEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     */
    private $localMarketAutoDeclineEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     */
    private $localMarketPaymentMethodCheckOutEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     */
    private $localMarketShippingMethodEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     */
    private $localMarketCounterOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     */
    private $localMarketSellerContactDetailsEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     */
    private $classifiedAdPhoneCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     */
    private $classifiedAdContactByAddressEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street addresses for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     */
    private $classifiedAdStreetCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     */
    private $classifiedAdCompanyNameEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\SpecialitySubscriptionDefinitionType $specialitySubscription
     */
    private $specialitySubscription = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\RegularSubscriptionDefinitionType $regularSubscription
     */
    private $regularSubscription = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\PremiumSubscriptionDefinitionType $premiumSubscription
     */
    private $premiumSubscription = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\NonSubscriptionDefinitionType $nonSubscription
     */
    private $nonSubscription = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     */
    private $returnPolicyEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a stated handling time in listings. The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     */
    private $handlingTimeEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     */
    private $payPalRequiredForStoreOwner = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     */
    private $reviseQuantityAllowed = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\RevisePriceAllowedDefinitionType $revisePriceAllowed
     */
    private $revisePriceAllowed = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     */
    private $storeOwnerExtendedListingDurationsEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     */
    private $storeOwnerExtendedListingDurations = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentMethodDefinitionType $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     */
    private $group1MaxFlatShippingCost = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     */
    private $group2MaxFlatShippingCost = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     */
    private $group3MaxFlatShippingCost = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     */
    private $maxFlatShippingCostCBTExempt = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     */
    private $maxFlatShippingCost = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\VariationsEnabledDefinitionType $variationsEnabled
     */
    private $variationsEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     */
    private $attributeConversionEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     */
    private $freeGalleryPlusEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support a free Picture Pack upgrade for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     */
    private $freePicturePackEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     */
    private $itemCompatibilityEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     */
    private $maxItemCompatibility = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a minimum amount for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\MinItemCompatibilityDefinitionType $minItemCompatibility
     */
    private $minItemCompatibility = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the textual description of an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ConditionEnabledDefinitionType $conditionEnabled
     */
    private $conditionEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ConditionValuesDefinitionType $conditionValues
     */
    private $conditionValues = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support value categories. A Value category will typically have lower listing fees or another eBay promotion. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ValueCategoryDefinitionType $valueCategory
     */
    private $valueCategory = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC, ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductCreationEnabledDefinitionType $productCreationEnabled
     */
    private $productCreationEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.EANEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var \Nogrod\eBaySDK\Trading\EANEnabledDefinitionType $eANEnabled
     */
    private $eANEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.ISBNEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var \Nogrod\eBaySDK\Trading\ISBNEnabledDefinitionType $iSBNEnabled
     */
    private $iSBNEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.UPCEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var \Nogrod\eBaySDK\Trading\UPCEnabledDefinitionType $uPCEnabled
     */
    private $uPCEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     */
    private $compatibleVehicleType = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     */
    private $maxGranularFitmentCount = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     */
    private $paymentOptionsGroup = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in shipping business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     */
    private $shippingProfileCategoryGroup = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in payment business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     */
    private $paymentProfileCategoryGroup = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in return business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     */
    private $returnPolicyProfileCategoryGroup = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\VINSupportedDefinitionType $vINSupported
     */
    private $vINSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\VRMSupportedDefinitionType $vRMSupported
     */
    private $vRMSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support seller-provided titles in motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     */
    private $sellerProvidedTitleSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support deposits/down payments for motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\DepositSupportedDefinitionType $depositSupported
     */
    private $depositSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     */
    private $globalShippingEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports Boat and Motorcycle Parts Compatibility, pass in a
     *  <b>CategoryID</b> value in the request, and then look for a
     *  <code>true</code>
     *  <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var \Nogrod\eBaySDK\Trading\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     */
    private $additionalCompatibilityEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the Click and Collect feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     */
    private $pickupDropOffEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports digital gift card listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  https://www.ebay.com/help/policies/prohibited-restricted-items/gift-cards-policy?id=4294" target="_blank">Gift cards policy</a> help page.
     *
     * @var \Nogrod\eBaySDK\Trading\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     */
    private $digitalGoodDeliveryEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @var \Nogrod\eBaySDK\Trading\EpidSupportedDefinitionType $epidSupported
     */
    private $epidSupported = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @var \Nogrod\eBaySDK\Trading\KTypeSupportedDefinitionType $kTypeSupported
     */
    private $kTypeSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites supports Product-Based Shopping Experience listings (listings associated with eBay catalog products).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, association with an eBay catalog product will no longer be required for any categories on any eBay marketplace.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     */
    private $productRequiredEnabled = null;

    /**
     * If present, this flag indicates the seller can set how to handle domestic returns.
     *
     * @var \Nogrod\eBaySDK\Trading\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     */
    private $domesticReturnsAcceptedValues = null;

    /**
     * If present, this flag indicates the seller can set how to handle international returns.
     *
     * @var \Nogrod\eBaySDK\Trading\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     */
    private $internationalReturnsAcceptedValues = null;

    /**
     * If present, this flag indicates the seller can set the time duration for domestic returns.
     *
     * @var \Nogrod\eBaySDK\Trading\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     */
    private $domesticReturnsDurationValues = null;

    /**
     * If present, this flag indicates the seller can set the time duration for international returns.
     *
     * @var \Nogrod\eBaySDK\Trading\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     */
    private $internationalReturnsDurationValues = null;

    /**
     * If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     *
     * @var \Nogrod\eBaySDK\Trading\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     */
    private $domesticReturnsShipmentPayeeValues = null;

    /**
     * If present, this flag indicates the seller can set who pays the shipping for international returns.
     *
     * @var \Nogrod\eBaySDK\Trading\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     */
    private $internationalReturnsShipmentPayeeValues = null;

    /**
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
     *
     * @var string[] $domesticRefundMethodValues
     */
    private $domesticRefundMethodValues = null;

    /**
     * If present, this flag indicates the seller can set the method they use to refund international returns.
     *
     * @var string[] $internationalRefundMethodValues
     */
    private $internationalRefundMethodValues = null;

    /**
     * If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     *
     * @var \Nogrod\eBaySDK\Trading\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     */
    private $returnPolicyDescriptionEnabled = null;

    /**
     * Gets as listingDurations
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingDurationDefinitionsType
     */
    public function getListingDurations()
    {
        return $this->listingDurations;
    }

    /**
     * Sets a new listingDurations
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingDurationDefinitionsType $listingDurations
     * @return self
     */
    public function setListingDurations(\Nogrod\eBaySDK\Trading\ListingDurationDefinitionsType $listingDurations)
    {
        $this->listingDurations = $listingDurations;
        return $this;
    }

    /**
     * Gets as shippingTermsRequired
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require shipping terms at listing time, whiche includesat least one domestic shipping service option and its associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingTermRequiredDefinitionType
     */
    public function getShippingTermsRequired()
    {
        return $this->shippingTermsRequired;
    }

    /**
     * Sets a new shippingTermsRequired
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require shipping terms at listing time, whiche includesat least one domestic shipping service option and its associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingTermRequiredDefinitionType $shippingTermsRequired
     * @return self
     */
    public function setShippingTermsRequired(\Nogrod\eBaySDK\Trading\ShippingTermRequiredDefinitionType $shippingTermsRequired)
    {
        $this->shippingTermsRequired = $shippingTermsRequired;
        return $this;
    }

    /**
     * Gets as bestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\BestOfferEnabledDefinitionType
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * Sets a new bestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\BestOfferEnabledDefinitionType $bestOfferEnabled
     * @return self
     */
    public function setBestOfferEnabled(\Nogrod\eBaySDK\Trading\BestOfferEnabledDefinitionType $bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }

    /**
     * Gets as dutchBINEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\DutchBINEnabledDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\DutchBINEnabledDefinitionType $dutchBINEnabled
     * @return self
     */
    public function setDutchBINEnabled(\Nogrod\eBaySDK\Trading\DutchBINEnabledDefinitionType $dutchBINEnabled)
    {
        $this->dutchBINEnabled = $dutchBINEnabled;
        return $this;
    }

    /**
     * Gets as userConsentRequired
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\UserConsentRequiredDefinitionType
     */
    public function getUserConsentRequired()
    {
        return $this->userConsentRequired;
    }

    /**
     * Sets a new userConsentRequired
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\UserConsentRequiredDefinitionType $userConsentRequired
     * @return self
     */
    public function setUserConsentRequired(\Nogrod\eBaySDK\Trading\UserConsentRequiredDefinitionType $userConsentRequired)
    {
        $this->userConsentRequired = $userConsentRequired;
        return $this;
    }

    /**
     * Gets as homePageFeaturedEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\HomePageFeaturedEnabledDefinitionType
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->homePageFeaturedEnabled;
    }

    /**
     * Sets a new homePageFeaturedEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     * @return self
     */
    public function setHomePageFeaturedEnabled(\Nogrod\eBaySDK\Trading\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled)
    {
        $this->homePageFeaturedEnabled = $homePageFeaturedEnabled;
        return $this;
    }

    /**
     * Gets as proPackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ProPackEnabledDefinitionType
     */
    public function getProPackEnabled()
    {
        return $this->proPackEnabled;
    }

    /**
     * Sets a new proPackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ProPackEnabledDefinitionType $proPackEnabled
     * @return self
     */
    public function setProPackEnabled(\Nogrod\eBaySDK\Trading\ProPackEnabledDefinitionType $proPackEnabled)
    {
        $this->proPackEnabled = $proPackEnabled;
        return $this;
    }

    /**
     * Gets as basicUpgradePackEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\BasicUpgradePackEnabledDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     * @return self
     */
    public function setBasicUpgradePackEnabled(\Nogrod\eBaySDK\Trading\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled)
    {
        $this->basicUpgradePackEnabled = $basicUpgradePackEnabled;
        return $this;
    }

    /**
     * Gets as valuePackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ValuePackEnabledDefinitionType
     */
    public function getValuePackEnabled()
    {
        return $this->valuePackEnabled;
    }

    /**
     * Sets a new valuePackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ValuePackEnabledDefinitionType $valuePackEnabled
     * @return self
     */
    public function setValuePackEnabled(\Nogrod\eBaySDK\Trading\ValuePackEnabledDefinitionType $valuePackEnabled)
    {
        $this->valuePackEnabled = $valuePackEnabled;
        return $this;
    }

    /**
     * Gets as proPackPlusEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ProPackPlusEnabledDefinitionType
     */
    public function getProPackPlusEnabled()
    {
        return $this->proPackPlusEnabled;
    }

    /**
     * Sets a new proPackPlusEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     * @return self
     */
    public function setProPackPlusEnabled(\Nogrod\eBaySDK\Trading\ProPackPlusEnabledDefinitionType $proPackPlusEnabled)
    {
        $this->proPackPlusEnabled = $proPackPlusEnabled;
        return $this;
    }

    /**
     * Gets as adFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\AdFormatEnabledDefinitionType
     */
    public function getAdFormatEnabled()
    {
        return $this->adFormatEnabled;
    }

    /**
     * Sets a new adFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\AdFormatEnabledDefinitionType $adFormatEnabled
     * @return self
     */
    public function setAdFormatEnabled(\Nogrod\eBaySDK\Trading\AdFormatEnabledDefinitionType $adFormatEnabled)
    {
        $this->adFormatEnabled = $adFormatEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferCounterEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\BestOfferCounterEnabledDefinitionType
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->bestOfferCounterEnabled;
    }

    /**
     * Sets a new bestOfferCounterEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     * @return self
     */
    public function setBestOfferCounterEnabled(\Nogrod\eBaySDK\Trading\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled)
    {
        $this->bestOfferCounterEnabled = $bestOfferCounterEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\BestOfferAutoDeclineEnabledDefinitionType
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->bestOfferAutoDeclineEnabled;
    }

    /**
     * Sets a new bestOfferAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     * @return self
     */
    public function setBestOfferAutoDeclineEnabled(\Nogrod\eBaySDK\Trading\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled)
    {
        $this->bestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as localMarketSpecialitySubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketSpecialitySubscriptionDefinitionType
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->localMarketSpecialitySubscription;
    }

    /**
     * Sets a new localMarketSpecialitySubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     * @return self
     */
    public function setLocalMarketSpecialitySubscription(\Nogrod\eBaySDK\Trading\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription)
    {
        $this->localMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        return $this;
    }

    /**
     * Gets as localMarketRegularSubscription
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketRegularSubscriptionDefinitionType
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->localMarketRegularSubscription;
    }

    /**
     * Sets a new localMarketRegularSubscription
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     * @return self
     */
    public function setLocalMarketRegularSubscription(\Nogrod\eBaySDK\Trading\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription)
    {
        $this->localMarketRegularSubscription = $localMarketRegularSubscription;
        return $this;
    }

    /**
     * Gets as localMarketPremiumSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketPremiumSubscriptionDefinitionType
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->localMarketPremiumSubscription;
    }

    /**
     * Sets a new localMarketPremiumSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     * @return self
     */
    public function setLocalMarketPremiumSubscription(\Nogrod\eBaySDK\Trading\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription)
    {
        $this->localMarketPremiumSubscription = $localMarketPremiumSubscription;
        return $this;
    }

    /**
     * Gets as localMarketNonSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketNonSubscriptionDefinitionType
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->localMarketNonSubscription;
    }

    /**
     * Sets a new localMarketNonSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  See the <a href="
     *  http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     * @return self
     */
    public function setLocalMarketNonSubscription(\Nogrod\eBaySDK\Trading\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription)
    {
        $this->localMarketNonSubscription = $localMarketNonSubscription;
        return $this;
    }

    /**
     * Gets as expressEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ExpressEnabledDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\ExpressEnabledDefinitionType $expressEnabled
     * @return self
     */
    public function setExpressEnabled(\Nogrod\eBaySDK\Trading\ExpressEnabledDefinitionType $expressEnabled)
    {
        $this->expressEnabled = $expressEnabled;
        return $this;
    }

    /**
     * Gets as expressPicturesRequired
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ExpressPicturesRequiredDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     * @return self
     */
    public function setExpressPicturesRequired(\Nogrod\eBaySDK\Trading\ExpressPicturesRequiredDefinitionType $expressPicturesRequired)
    {
        $this->expressPicturesRequired = $expressPicturesRequired;
        return $this;
    }

    /**
     * Gets as expressConditionRequired
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ExpressConditionRequiredDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\ExpressConditionRequiredDefinitionType $expressConditionRequired
     * @return self
     */
    public function setExpressConditionRequired(\Nogrod\eBaySDK\Trading\ExpressConditionRequiredDefinitionType $expressConditionRequired)
    {
        $this->expressConditionRequired = $expressConditionRequired;
        return $this;
    }

    /**
     * Gets as minimumReservePrice
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\MinimumReservePriceDefinitionType
     */
    public function getMinimumReservePrice()
    {
        return $this->minimumReservePrice;
    }

    /**
     * Sets a new minimumReservePrice
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\MinimumReservePriceDefinitionType $minimumReservePrice
     * @return self
     */
    public function setMinimumReservePrice(\Nogrod\eBaySDK\Trading\MinimumReservePriceDefinitionType $minimumReservePrice)
    {
        $this->minimumReservePrice = $minimumReservePrice;
        return $this;
    }

    /**
     * Gets as transactionConfirmationRequestEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\TCREnabledDefinitionType
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->transactionConfirmationRequestEnabled;
    }

    /**
     * Sets a new transactionConfirmationRequestEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     * @return self
     */
    public function setTransactionConfirmationRequestEnabled(\Nogrod\eBaySDK\Trading\TCREnabledDefinitionType $transactionConfirmationRequestEnabled)
    {
        $this->transactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        return $this;
    }

    /**
     * Gets as sellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a classified ad listing. This feature is only applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerContactDetailsEnabledDefinitionType
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->sellerContactDetailsEnabled;
    }

    /**
     * Sets a new sellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a classified ad listing. This feature is only applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     * @return self
     */
    public function setSellerContactDetailsEnabled(\Nogrod\eBaySDK\Trading\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled)
    {
        $this->sellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as storeInventoryEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreInventoryEnabledDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     * @return self
     */
    public function setStoreInventoryEnabled(\Nogrod\eBaySDK\Trading\StoreInventoryEnabledDefinitionType $storeInventoryEnabled)
    {
        $this->storeInventoryEnabled = $storeInventoryEnabled;
        return $this;
    }

    /**
     * Gets as skypeMeTransactionalEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\SkypeMeTransactionalEnabledDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     * @return self
     */
    public function setSkypeMeTransactionalEnabled(\Nogrod\eBaySDK\Trading\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled)
    {
        $this->skypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        return $this;
    }

    /**
     * Gets as skypeMeNonTransactionalEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\SkypeMeNonTransactionalEnabledDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     * @return self
     */
    public function setSkypeMeNonTransactionalEnabled(\Nogrod\eBaySDK\Trading\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled)
    {
        $this->skypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        return $this;
    }

    /**
     * Gets as localListingDistancesRegular
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalListingDistancesRegularDefinitionType
     */
    public function getLocalListingDistancesRegular()
    {
        return $this->localListingDistancesRegular;
    }

    /**
     * Sets a new localListingDistancesRegular
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     * @return self
     */
    public function setLocalListingDistancesRegular(\Nogrod\eBaySDK\Trading\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular)
    {
        $this->localListingDistancesRegular = $localListingDistancesRegular;
        return $this;
    }

    /**
     * Gets as localListingDistancesSpecialty
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalListingDistancesSpecialtyDefinitionType
     */
    public function getLocalListingDistancesSpecialty()
    {
        return $this->localListingDistancesSpecialty;
    }

    /**
     * Sets a new localListingDistancesSpecialty
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     * @return self
     */
    public function setLocalListingDistancesSpecialty(\Nogrod\eBaySDK\Trading\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty)
    {
        $this->localListingDistancesSpecialty = $localListingDistancesSpecialty;
        return $this;
    }

    /**
     * Gets as localListingDistancesNonSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalListingDistancesNonSubscriptionDefinitionType
     */
    public function getLocalListingDistancesNonSubscription()
    {
        return $this->localListingDistancesNonSubscription;
    }

    /**
     * Sets a new localListingDistancesNonSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     * @return self
     */
    public function setLocalListingDistancesNonSubscription(\Nogrod\eBaySDK\Trading\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription)
    {
        $this->localListingDistancesNonSubscription = $localListingDistancesNonSubscription;
        return $this;
    }

    /**
     * Gets as classifiedAdPaymentMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdPaymentMethodEnabledDefinitionType
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->classifiedAdPaymentMethodEnabled;
    }

    /**
     * Sets a new classifiedAdPaymentMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     * @return self
     */
    public function setClassifiedAdPaymentMethodEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled)
    {
        $this->classifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdShippingMethodEnabledDefinitionType
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->classifiedAdShippingMethodEnabled;
    }

    /**
     * Sets a new classifiedAdShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     * @return self
     */
    public function setClassifiedAdShippingMethodEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled)
    {
        $this->classifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdBestOfferEnabledDefinitionType
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->classifiedAdBestOfferEnabled;
    }

    /**
     * Sets a new classifiedAdBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     * @return self
     */
    public function setClassifiedAdBestOfferEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled)
    {
        $this->classifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdCounterOfferEnabledDefinitionType
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->classifiedAdCounterOfferEnabled;
    }

    /**
     * Sets a new classifiedAdCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     * @return self
     */
    public function setClassifiedAdCounterOfferEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled)
    {
        $this->classifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdAutoDeclineEnabledDefinitionType
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->classifiedAdAutoDeclineEnabled;
    }

    /**
     * Sets a new classifiedAdAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     * @return self
     */
    public function setClassifiedAdAutoDeclineEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled)
    {
        $this->classifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdContactByPhoneEnabledDefinitionType
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->classifiedAdContactByPhoneEnabled;
    }

    /**
     * Sets a new classifiedAdContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     * @return self
     */
    public function setClassifiedAdContactByPhoneEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled)
    {
        $this->classifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdContactByEmailEnabledDefintionType
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->classifiedAdContactByEmailEnabled;
    }

    /**
     * Sets a new classifiedAdContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     * @return self
     */
    public function setClassifiedAdContactByEmailEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled)
    {
        $this->classifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as safePaymentRequired
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require at least one form of safe payment. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SafePaymentRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  For the US, Canada and Australia sites, users registered after January
     *  17, 2007 are required to offer at least one safe payment method (i.e.
     *  PayPal/PaisaPay, or one of the credit cards specified in
     *  <b>Item.PaymentMethods</b>).
     *  <br><br>
     *  If a seller has a <code>SafePaymentExempt</code> status, they are exempt from the
     *  requirement to offer at least one safe payment method when listing
     *  an item on a site that has the safe payment requirement.
     *  <br>
     *  The safe payment requirement also applies to two-category listings that have
     *  one ship-to or available-to location in the US, Canada, or Australia. The
     *  French Canadian (CAFR) site is a special case, because listings on the CAFR
     *  site with ship-to or available-to locations in Canada do not require a Safe
     *  Payment method, yet listings on the CAFR site with ship-to or available-to
     *  locations in the US or Australia do require a Safe Payment method.
     *  <br><br>
     *  The Business and Industrial, Motors, Real Estate, and Mature Audiences
     *  categories, and all listings that don't support the <b>Item.PaymentMethods</b> field are
     *  exempt from this requirement. Therefore, listings in those categories do not
     *  require a safe payment method.
     *
     * @return \Nogrod\eBaySDK\Trading\SafePaymentRequiredDefinitionType
     */
    public function getSafePaymentRequired()
    {
        return $this->safePaymentRequired;
    }

    /**
     * Sets a new safePaymentRequired
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require at least one form of safe payment. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SafePaymentRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  For the US, Canada and Australia sites, users registered after January
     *  17, 2007 are required to offer at least one safe payment method (i.e.
     *  PayPal/PaisaPay, or one of the credit cards specified in
     *  <b>Item.PaymentMethods</b>).
     *  <br><br>
     *  If a seller has a <code>SafePaymentExempt</code> status, they are exempt from the
     *  requirement to offer at least one safe payment method when listing
     *  an item on a site that has the safe payment requirement.
     *  <br>
     *  The safe payment requirement also applies to two-category listings that have
     *  one ship-to or available-to location in the US, Canada, or Australia. The
     *  French Canadian (CAFR) site is a special case, because listings on the CAFR
     *  site with ship-to or available-to locations in Canada do not require a Safe
     *  Payment method, yet listings on the CAFR site with ship-to or available-to
     *  locations in the US or Australia do require a Safe Payment method.
     *  <br><br>
     *  The Business and Industrial, Motors, Real Estate, and Mature Audiences
     *  categories, and all listings that don't support the <b>Item.PaymentMethods</b> field are
     *  exempt from this requirement. Therefore, listings in those categories do not
     *  require a safe payment method.
     *
     * @param \Nogrod\eBaySDK\Trading\SafePaymentRequiredDefinitionType $safePaymentRequired
     * @return self
     */
    public function setSafePaymentRequired(\Nogrod\eBaySDK\Trading\SafePaymentRequiredDefinitionType $safePaymentRequired)
    {
        $this->safePaymentRequired = $safePaymentRequired;
        return $this;
    }

    /**
     * Gets as classifiedAdPayPerLeadEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdPayPerLeadEnabledDefinitionType
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->classifiedAdPayPerLeadEnabled;
    }

    /**
     * Sets a new classifiedAdPayPerLeadEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     * @return self
     */
    public function setClassifiedAdPayPerLeadEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled)
    {
        $this->classifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        return $this;
    }

    /**
     * Gets as itemSpecificsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Item Specifics in listings. Item Specifics are typical aspects that items in a specific category tend to have, and they allow sellers to provide descriptive details of an item in a structured manner. For example, in a jewelry category, sellers might describe lockets with Item Specifics name-value pairs like "Chain Length=18 in." and "Main Shape=Heart", or in a Washers & Dryers category, sellers might include "Type=Top-Loading". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemSpecificsEnabledDefinitionType
     */
    public function getItemSpecificsEnabled()
    {
        return $this->itemSpecificsEnabled;
    }

    /**
     * Sets a new itemSpecificsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Item Specifics in listings. Item Specifics are typical aspects that items in a specific category tend to have, and they allow sellers to provide descriptive details of an item in a structured manner. For example, in a jewelry category, sellers might describe lockets with Item Specifics name-value pairs like "Chain Length=18 in." and "Main Shape=Heart", or in a Washers & Dryers category, sellers might include "Type=Top-Loading". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     * @return self
     */
    public function setItemSpecificsEnabled(\Nogrod\eBaySDK\Trading\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled)
    {
        $this->itemSpecificsEnabled = $itemSpecificsEnabled;
        return $this;
    }

    /**
     * Gets as paisaPayFullEscrowEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of PaisaPay Full Escrow as a payment method. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaisaPayFullEscrowEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\PaisaPayFullEscrowEnabledDefinitionType
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->paisaPayFullEscrowEnabled;
    }

    /**
     * Sets a new paisaPayFullEscrowEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of PaisaPay Full Escrow as a payment method. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaisaPayFullEscrowEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     * @return self
     */
    public function setPaisaPayFullEscrowEnabled(\Nogrod\eBaySDK\Trading\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled)
    {
        $this->paisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        return $this;
    }

    /**
     * Gets as iSBNIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ISBNIdentifierEnabledDefinitionType
     */
    public function getISBNIdentifierEnabled()
    {
        return $this->iSBNIdentifierEnabled;
    }

    /**
     * Sets a new iSBNIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     * @return self
     */
    public function setISBNIdentifierEnabled(\Nogrod\eBaySDK\Trading\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled)
    {
        $this->iSBNIdentifierEnabled = $iSBNIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as uPCIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\UPCIdentifierEnabledDefinitionType
     */
    public function getUPCIdentifierEnabled()
    {
        return $this->uPCIdentifierEnabled;
    }

    /**
     * Sets a new uPCIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     * @return self
     */
    public function setUPCIdentifierEnabled(\Nogrod\eBaySDK\Trading\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled)
    {
        $this->uPCIdentifierEnabled = $uPCIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as eANIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\EANIdentifierEnabledDefinitionType
     */
    public function getEANIdentifierEnabled()
    {
        return $this->eANIdentifierEnabled;
    }

    /**
     * Sets a new eANIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     * @return self
     */
    public function setEANIdentifierEnabled(\Nogrod\eBaySDK\Trading\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled)
    {
        $this->eANIdentifierEnabled = $eANIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as brandMPNIdentifierEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\BrandMPNIdentifierEnabledDefinitionType
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->brandMPNIdentifierEnabled;
    }

    /**
     * Sets a new brandMPNIdentifierEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     * @return self
     */
    public function setBrandMPNIdentifierEnabled(\Nogrod\eBaySDK\Trading\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled)
    {
        $this->brandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\BestOfferAutoAcceptEnabledDefinitionType
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->bestOfferAutoAcceptEnabled;
    }

    /**
     * Sets a new bestOfferAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     * @return self
     */
    public function setBestOfferAutoAcceptEnabled(\Nogrod\eBaySDK\Trading\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled)
    {
        $this->bestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdAutoAcceptEnabledDefinitionType
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->classifiedAdAutoAcceptEnabled;
    }

    /**
     * Sets a new classifiedAdAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     * @return self
     */
    public function setClassifiedAdAutoAcceptEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled)
    {
        $this->classifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeNorthAmericaEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\CrossBorderTradeNorthAmericaEnabledDefinitionType
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->crossBorderTradeNorthAmericaEnabled;
    }

    /**
     * Sets a new crossBorderTradeNorthAmericaEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     * @return self
     */
    public function setCrossBorderTradeNorthAmericaEnabled(\Nogrod\eBaySDK\Trading\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled)
    {
        $this->crossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeGBEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\CrossBorderTradeGBEnabledDefinitionType
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->crossBorderTradeGBEnabled;
    }

    /**
     * Sets a new crossBorderTradeGBEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     * @return self
     */
    public function setCrossBorderTradeGBEnabled(\Nogrod\eBaySDK\Trading\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled)
    {
        $this->crossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeAustraliaEnabled
     *
     * This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     *
     * @return \Nogrod\eBaySDK\Trading\CrossBorderTradeAustraliaEnabledDefinitionType
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->crossBorderTradeAustraliaEnabled;
    }

    /**
     * Sets a new crossBorderTradeAustraliaEnabled
     *
     * This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     *
     * @param \Nogrod\eBaySDK\Trading\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     * @return self
     */
    public function setCrossBorderTradeAustraliaEnabled(\Nogrod\eBaySDK\Trading\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled)
    {
        $this->crossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        return $this;
    }

    /**
     * Gets as payPalBuyerProtectionEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PayPal Purchase Protection. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalBuyerProtectionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\PayPalBuyerProtectionEnabledDefinitionType
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->payPalBuyerProtectionEnabled;
    }

    /**
     * Sets a new payPalBuyerProtectionEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PayPal Purchase Protection. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalBuyerProtectionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     * @return self
     */
    public function setPayPalBuyerProtectionEnabled(\Nogrod\eBaySDK\Trading\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled)
    {
        $this->payPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        return $this;
    }

    /**
     * Gets as buyerGuaranteeEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\BuyerGuaranteeEnabledDefinitionType
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->buyerGuaranteeEnabled;
    }

    /**
     * Sets a new buyerGuaranteeEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     * @return self
     */
    public function setBuyerGuaranteeEnabled(\Nogrod\eBaySDK\Trading\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled)
    {
        $this->buyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        return $this;
    }

    /**
     * Gets as combinedFixedPriceTreatmentEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CombinedFixedPriceTreatmentEnabledDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     * @return self
     */
    public function setCombinedFixedPriceTreatmentEnabled(\Nogrod\eBaySDK\Trading\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled)
    {
        $this->combinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        return $this;
    }

    /**
     * Gets as galleryFeaturedDurations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingEnhancementDurationDefinitionType
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->galleryFeaturedDurations;
    }

    /**
     * Sets a new galleryFeaturedDurations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     * @return self
     */
    public function setGalleryFeaturedDurations(\Nogrod\eBaySDK\Trading\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations)
    {
        $this->galleryFeaturedDurations = $galleryFeaturedDurations;
        return $this;
    }

    /**
     * Gets as iNEscrowWorkflowTimeline
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PaisaPay Full Escrow workflow timeline.This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>INEscrowWorkflowTimeline</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\INEscrowWorkflowTimelineDefinitionType
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->iNEscrowWorkflowTimeline;
    }

    /**
     * Sets a new iNEscrowWorkflowTimeline
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PaisaPay Full Escrow workflow timeline.This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>INEscrowWorkflowTimeline</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     * @return self
     */
    public function setINEscrowWorkflowTimeline(\Nogrod\eBaySDK\Trading\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline)
    {
        $this->iNEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        return $this;
    }

    /**
     * Gets as payPalRequired
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require that PayPal is included as an accepted payment method. This is not applicable to classified ad listings, as payment is handled by the buyer and seller, and not eBay. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\PayPalRequiredDefinitionType
     */
    public function getPayPalRequired()
    {
        return $this->payPalRequired;
    }

    /**
     * Sets a new payPalRequired
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require that PayPal is included as an accepted payment method. This is not applicable to classified ad listings, as payment is handled by the buyer and seller, and not eBay. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\PayPalRequiredDefinitionType $payPalRequired
     * @return self
     */
    public function setPayPalRequired(\Nogrod\eBaySDK\Trading\PayPalRequiredDefinitionType $payPalRequired)
    {
        $this->payPalRequired = $payPalRequired;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAdFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProAdFormatEnabledDefinitionType
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }

    /**
     * Sets a new eBayMotorsProAdFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @return self
     */
    public function setEBayMotorsProAdFormatEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled)
    {
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProContactByPhoneEnabledDefinitionType
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @return self
     */
    public function setEBayMotorsProContactByPhoneEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled)
    {
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProPhoneCountDefinitionType
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->eBayMotorsProPhoneCount;
    }

    /**
     * Sets a new eBayMotorsProPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @return self
     */
    public function setEBayMotorsProPhoneCount(\Nogrod\eBaySDK\Trading\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount)
    {
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByAddressEnabled
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProContactByAddressEnabledDefinitionType
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByAddressEnabled
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @return self
     */
    public function setEBayMotorsProContactByAddressEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled)
    {
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProStreetCountDefinitionType
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->eBayMotorsProStreetCount;
    }

    /**
     * Sets a new eBayMotorsProStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @return self
     */
    public function setEBayMotorsProStreetCount(\Nogrod\eBaySDK\Trading\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount)
    {
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        return $this;
    }

    /**
     * Gets as eBayMotorsProCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProCompanyNameEnabledDefinitionType
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }

    /**
     * Sets a new eBayMotorsProCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @return self
     */
    public function setEBayMotorsProCompanyNameEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled)
    {
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProContactByEmailEnabledDefinitionType
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @return self
     */
    public function setEBayMotorsProContactByEmailEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled)
    {
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProBestOfferEnabledDefinitionType
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }

    /**
     * Sets a new eBayMotorsProBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @return self
     */
    public function setEBayMotorsProBestOfferEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled)
    {
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProAutoAcceptEnabledDefinitionType
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }

    /**
     * Sets a new eBayMotorsProAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @return self
     */
    public function setEBayMotorsProAutoAcceptEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled)
    {
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProAutoDeclineEnabledDefinitionType
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }

    /**
     * Sets a new eBayMotorsProAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @return self
     */
    public function setEBayMotorsProAutoDeclineEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled)
    {
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProPaymentMethodCheckOutEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }

    /**
     * Sets a new eBayMotorsProPaymentMethodCheckOutEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return self
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled)
    {
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProShippingMethodEnabledDefinitionType
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }

    /**
     * Sets a new eBayMotorsProShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @return self
     */
    public function setEBayMotorsProShippingMethodEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled)
    {
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProCounterOfferEnabledDefinitionType
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }

    /**
     * Sets a new eBayMotorsProCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @return self
     */
    public function setEBayMotorsProCounterOfferEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled)
    {
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProSellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\EBayMotorsProSellerContactDetailsEnabledDefinitionType
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }

    /**
     * Sets a new eBayMotorsProSellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @return self
     */
    public function setEBayMotorsProSellerContactDetailsEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled)
    {
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAdFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketAdFormatEnabledDefinitionType
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->localMarketAdFormatEnabled;
    }

    /**
     * Sets a new localMarketAdFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     * @return self
     */
    public function setLocalMarketAdFormatEnabled(\Nogrod\eBaySDK\Trading\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled)
    {
        $this->localMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        return $this;
    }

    /**
     * Gets as localMarketContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of a phone number when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketContactByPhoneEnabledDefinitionType
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->localMarketContactByPhoneEnabled;
    }

    /**
     * Sets a new localMarketContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of a phone number when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     * @return self
     */
    public function setLocalMarketContactByPhoneEnabled(\Nogrod\eBaySDK\Trading\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled)
    {
        $this->localMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as localMarketPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketPhoneCountDefinitionType
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->localMarketPhoneCount;
    }

    /**
     * Sets a new localMarketPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     * @return self
     */
    public function setLocalMarketPhoneCount(\Nogrod\eBaySDK\Trading\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount)
    {
        $this->localMarketPhoneCount = $localMarketPhoneCount;
        return $this;
    }

    /**
     * Gets as localMarketContactByAddressEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of an address when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketContactByAddressEnabledDefinitionType
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->localMarketContactByAddressEnabled;
    }

    /**
     * Sets a new localMarketContactByAddressEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of an address when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     * @return self
     */
    public function setLocalMarketContactByAddressEnabled(\Nogrod\eBaySDK\Trading\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled)
    {
        $this->localMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as localMarketStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketStreetCountDefinitionType
     */
    public function getLocalMarketStreetCount()
    {
        return $this->localMarketStreetCount;
    }

    /**
     * Sets a new localMarketStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     * @return self
     */
    public function setLocalMarketStreetCount(\Nogrod\eBaySDK\Trading\LocalMarketStreetCountDefinitionType $localMarketStreetCount)
    {
        $this->localMarketStreetCount = $localMarketStreetCount;
        return $this;
    }

    /**
     * Gets as localMarketCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketCompanyNameEnabledDefinitionType
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->localMarketCompanyNameEnabled;
    }

    /**
     * Sets a new localMarketCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     * @return self
     */
    public function setLocalMarketCompanyNameEnabled(\Nogrod\eBaySDK\Trading\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled)
    {
        $this->localMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as localMarketContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketContactByEmailEnabledDefinitionType
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->localMarketContactByEmailEnabled;
    }

    /**
     * Sets a new localMarketContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     * @return self
     */
    public function setLocalMarketContactByEmailEnabled(\Nogrod\eBaySDK\Trading\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled)
    {
        $this->localMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as localMarketBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketBestOfferEnabledDefinitionType
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->localMarketBestOfferEnabled;
    }

    /**
     * Sets a new localMarketBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     * @return self
     */
    public function setLocalMarketBestOfferEnabled(\Nogrod\eBaySDK\Trading\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled)
    {
        $this->localMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketAutoAcceptEnabledDefinitionType
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->localMarketAutoAcceptEnabled;
    }

    /**
     * Sets a new localMarketAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     * @return self
     */
    public function setLocalMarketAutoAcceptEnabled(\Nogrod\eBaySDK\Trading\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled)
    {
        $this->localMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketAutoDeclineEnabledDefinitionType
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->localMarketAutoDeclineEnabled;
    }

    /**
     * Sets a new localMarketAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     * @return self
     */
    public function setLocalMarketAutoDeclineEnabled(\Nogrod\eBaySDK\Trading\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled)
    {
        $this->localMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as localMarketPaymentMethodCheckOutEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketPaymentMethodCheckOutEnabledDefinitionType
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->localMarketPaymentMethodCheckOutEnabled;
    }

    /**
     * Sets a new localMarketPaymentMethodCheckOutEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     * @return self
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled(\Nogrod\eBaySDK\Trading\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled)
    {
        $this->localMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        return $this;
    }

    /**
     * Gets as localMarketShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketShippingMethodEnabledDefinitionType
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->localMarketShippingMethodEnabled;
    }

    /**
     * Sets a new localMarketShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     * @return self
     */
    public function setLocalMarketShippingMethodEnabled(\Nogrod\eBaySDK\Trading\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled)
    {
        $this->localMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as localMarketCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketCounterOfferEnabledDefinitionType
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->localMarketCounterOfferEnabled;
    }

    /**
     * Sets a new localMarketCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     * @return self
     */
    public function setLocalMarketCounterOfferEnabled(\Nogrod\eBaySDK\Trading\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled)
    {
        $this->localMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as localMarketSellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\LocalMarketSellerContactDetailsEnabledDefinitionType
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->localMarketSellerContactDetailsEnabled;
    }

    /**
     * Sets a new localMarketSellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     * @return self
     */
    public function setLocalMarketSellerContactDetailsEnabled(\Nogrod\eBaySDK\Trading\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled)
    {
        $this->localMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdPhoneCountDefinitionType
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->classifiedAdPhoneCount;
    }

    /**
     * Sets a new classifiedAdPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     * @return self
     */
    public function setClassifiedAdPhoneCount(\Nogrod\eBaySDK\Trading\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount)
    {
        $this->classifiedAdPhoneCount = $classifiedAdPhoneCount;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByAddressEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdContactByAddressEnabledDefinitionType
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->classifiedAdContactByAddressEnabled;
    }

    /**
     * Sets a new classifiedAdContactByAddressEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     * @return self
     */
    public function setClassifiedAdContactByAddressEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled)
    {
        $this->classifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street addresses for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdStreetCountDefinitionType
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->classifiedAdStreetCount;
    }

    /**
     * Sets a new classifiedAdStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street addresses for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     * @return self
     */
    public function setClassifiedAdStreetCount(\Nogrod\eBaySDK\Trading\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount)
    {
        $this->classifiedAdStreetCount = $classifiedAdStreetCount;
        return $this;
    }

    /**
     * Gets as classifiedAdCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ClassifiedAdCompanyNameEnabledDefinitionType
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->classifiedAdCompanyNameEnabled;
    }

    /**
     * Sets a new classifiedAdCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     * @return self
     */
    public function setClassifiedAdCompanyNameEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled)
    {
        $this->classifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as specialitySubscription
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\SpecialitySubscriptionDefinitionType
     */
    public function getSpecialitySubscription()
    {
        return $this->specialitySubscription;
    }

    /**
     * Sets a new specialitySubscription
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\SpecialitySubscriptionDefinitionType $specialitySubscription
     * @return self
     */
    public function setSpecialitySubscription(\Nogrod\eBaySDK\Trading\SpecialitySubscriptionDefinitionType $specialitySubscription)
    {
        $this->specialitySubscription = $specialitySubscription;
        return $this;
    }

    /**
     * Gets as regularSubscription
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\RegularSubscriptionDefinitionType
     */
    public function getRegularSubscription()
    {
        return $this->regularSubscription;
    }

    /**
     * Sets a new regularSubscription
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\RegularSubscriptionDefinitionType $regularSubscription
     * @return self
     */
    public function setRegularSubscription(\Nogrod\eBaySDK\Trading\RegularSubscriptionDefinitionType $regularSubscription)
    {
        $this->regularSubscription = $regularSubscription;
        return $this;
    }

    /**
     * Gets as premiumSubscription
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\PremiumSubscriptionDefinitionType
     */
    public function getPremiumSubscription()
    {
        return $this->premiumSubscription;
    }

    /**
     * Sets a new premiumSubscription
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\PremiumSubscriptionDefinitionType $premiumSubscription
     * @return self
     */
    public function setPremiumSubscription(\Nogrod\eBaySDK\Trading\PremiumSubscriptionDefinitionType $premiumSubscription)
    {
        $this->premiumSubscription = $premiumSubscription;
        return $this;
    }

    /**
     * Gets as nonSubscription
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\NonSubscriptionDefinitionType
     */
    public function getNonSubscription()
    {
        return $this->nonSubscription;
    }

    /**
     * Sets a new nonSubscription
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\NonSubscriptionDefinitionType $nonSubscription
     * @return self
     */
    public function setNonSubscription(\Nogrod\eBaySDK\Trading\NonSubscriptionDefinitionType $nonSubscription)
    {
        $this->nonSubscription = $nonSubscription;
        return $this;
    }

    /**
     * Gets as returnPolicyEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ReturnPolicyEnabledDefinitionType
     */
    public function getReturnPolicyEnabled()
    {
        return $this->returnPolicyEnabled;
    }

    /**
     * Sets a new returnPolicyEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     * @return self
     */
    public function setReturnPolicyEnabled(\Nogrod\eBaySDK\Trading\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled)
    {
        $this->returnPolicyEnabled = $returnPolicyEnabled;
        return $this;
    }

    /**
     * Gets as handlingTimeEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a stated handling time in listings. The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\HandlingTimeEnabledDefinitionType
     */
    public function getHandlingTimeEnabled()
    {
        return $this->handlingTimeEnabled;
    }

    /**
     * Sets a new handlingTimeEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a stated handling time in listings. The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     * @return self
     */
    public function setHandlingTimeEnabled(\Nogrod\eBaySDK\Trading\HandlingTimeEnabledDefinitionType $handlingTimeEnabled)
    {
        $this->handlingTimeEnabled = $handlingTimeEnabled;
        return $this;
    }

    /**
     * Gets as payPalRequiredForStoreOwner
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\PayPalRequiredForStoreOwnerDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     * @return self
     */
    public function setPayPalRequiredForStoreOwner(\Nogrod\eBaySDK\Trading\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner)
    {
        $this->payPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        return $this;
    }

    /**
     * Gets as reviseQuantityAllowed
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ReviseQuantityAllowedDefinitionType
     */
    public function getReviseQuantityAllowed()
    {
        return $this->reviseQuantityAllowed;
    }

    /**
     * Sets a new reviseQuantityAllowed
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     * @return self
     */
    public function setReviseQuantityAllowed(\Nogrod\eBaySDK\Trading\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed)
    {
        $this->reviseQuantityAllowed = $reviseQuantityAllowed;
        return $this;
    }

    /**
     * Gets as revisePriceAllowed
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\RevisePriceAllowedDefinitionType
     */
    public function getRevisePriceAllowed()
    {
        return $this->revisePriceAllowed;
    }

    /**
     * Sets a new revisePriceAllowed
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\RevisePriceAllowedDefinitionType $revisePriceAllowed
     * @return self
     */
    public function setRevisePriceAllowed(\Nogrod\eBaySDK\Trading\RevisePriceAllowedDefinitionType $revisePriceAllowed)
    {
        $this->revisePriceAllowed = $revisePriceAllowed;
        return $this;
    }

    /**
     * Gets as storeOwnerExtendedListingDurationsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsEnabledDefinitionType
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->storeOwnerExtendedListingDurationsEnabled;
    }

    /**
     * Sets a new storeOwnerExtendedListingDurationsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     * @return self
     */
    public function setStoreOwnerExtendedListingDurationsEnabled(\Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled)
    {
        $this->storeOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        return $this;
    }

    /**
     * Gets as storeOwnerExtendedListingDurations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsDefinitionType
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->storeOwnerExtendedListingDurations;
    }

    /**
     * Sets a new storeOwnerExtendedListingDurations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     * @return self
     */
    public function setStoreOwnerExtendedListingDurations(\Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations)
    {
        $this->storeOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentMethodDefinitionType
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\PaymentMethodDefinitionType $paymentMethod
     * @return self
     */
    public function setPaymentMethod(\Nogrod\eBaySDK\Trading\PaymentMethodDefinitionType $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as group1MaxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\Group1MaxFlatShippingCostDefinitionType
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->group1MaxFlatShippingCost;
    }

    /**
     * Sets a new group1MaxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     * @return self
     */
    public function setGroup1MaxFlatShippingCost(\Nogrod\eBaySDK\Trading\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost)
    {
        $this->group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as group2MaxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\Group2MaxFlatShippingCostDefinitionType
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->group2MaxFlatShippingCost;
    }

    /**
     * Sets a new group2MaxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     * @return self
     */
    public function setGroup2MaxFlatShippingCost(\Nogrod\eBaySDK\Trading\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost)
    {
        $this->group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as group3MaxFlatShippingCost
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\Group3MaxFlatShippingCostDefinitionType
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->group3MaxFlatShippingCost;
    }

    /**
     * Sets a new group3MaxFlatShippingCost
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     * @return self
     */
    public function setGroup3MaxFlatShippingCost(\Nogrod\eBaySDK\Trading\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost)
    {
        $this->group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as maxFlatShippingCostCBTExempt
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\MaxFlatShippingCostCBTExemptDefinitionType
     */
    public function getMaxFlatShippingCostCBTExempt()
    {
        return $this->maxFlatShippingCostCBTExempt;
    }

    /**
     * Sets a new maxFlatShippingCostCBTExempt
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     * @return self
     */
    public function setMaxFlatShippingCostCBTExempt(\Nogrod\eBaySDK\Trading\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt)
    {
        $this->maxFlatShippingCostCBTExempt = $maxFlatShippingCostCBTExempt;
        return $this;
    }

    /**
     * Gets as maxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\MaxFlatShippingCostDefinitionType
     */
    public function getMaxFlatShippingCost()
    {
        return $this->maxFlatShippingCost;
    }

    /**
     * Sets a new maxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     * @return self
     */
    public function setMaxFlatShippingCost(\Nogrod\eBaySDK\Trading\MaxFlatShippingCostDefinitionType $maxFlatShippingCost)
    {
        $this->maxFlatShippingCost = $maxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as variationsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\VariationsEnabledDefinitionType
     */
    public function getVariationsEnabled()
    {
        return $this->variationsEnabled;
    }

    /**
     * Sets a new variationsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\VariationsEnabledDefinitionType $variationsEnabled
     * @return self
     */
    public function setVariationsEnabled(\Nogrod\eBaySDK\Trading\VariationsEnabledDefinitionType $variationsEnabled)
    {
        $this->variationsEnabled = $variationsEnabled;
        return $this;
    }

    /**
     * Gets as attributeConversionEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AttributeConversionEnabledFeatureDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     * @return self
     */
    public function setAttributeConversionEnabled(\Nogrod\eBaySDK\Trading\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled)
    {
        $this->attributeConversionEnabled = $attributeConversionEnabled;
        return $this;
    }

    /**
     * Gets as freeGalleryPlusEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\FreeGalleryPlusEnabledDefinitionType
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->freeGalleryPlusEnabled;
    }

    /**
     * Sets a new freeGalleryPlusEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     * @return self
     */
    public function setFreeGalleryPlusEnabled(\Nogrod\eBaySDK\Trading\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled)
    {
        $this->freeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        return $this;
    }

    /**
     * Gets as freePicturePackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support a free Picture Pack upgrade for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\FreePicturePackEnabledDefinitionType
     */
    public function getFreePicturePackEnabled()
    {
        return $this->freePicturePackEnabled;
    }

    /**
     * Sets a new freePicturePackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support a free Picture Pack upgrade for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     * @return self
     */
    public function setFreePicturePackEnabled(\Nogrod\eBaySDK\Trading\FreePicturePackEnabledDefinitionType $freePicturePackEnabled)
    {
        $this->freePicturePackEnabled = $freePicturePackEnabled;
        return $this;
    }

    /**
     * Gets as itemCompatibilityEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemCompatibilityEnabledDefinitionType
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->itemCompatibilityEnabled;
    }

    /**
     * Sets a new itemCompatibilityEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     * @return self
     */
    public function setItemCompatibilityEnabled(\Nogrod\eBaySDK\Trading\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled)
    {
        $this->itemCompatibilityEnabled = $itemCompatibilityEnabled;
        return $this;
    }

    /**
     * Gets as maxItemCompatibility
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\MaxItemCompatibilityDefinitionType
     */
    public function getMaxItemCompatibility()
    {
        return $this->maxItemCompatibility;
    }

    /**
     * Sets a new maxItemCompatibility
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     * @return self
     */
    public function setMaxItemCompatibility(\Nogrod\eBaySDK\Trading\MaxItemCompatibilityDefinitionType $maxItemCompatibility)
    {
        $this->maxItemCompatibility = $maxItemCompatibility;
        return $this;
    }

    /**
     * Gets as minItemCompatibility
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a minimum amount for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\MinItemCompatibilityDefinitionType
     */
    public function getMinItemCompatibility()
    {
        return $this->minItemCompatibility;
    }

    /**
     * Sets a new minItemCompatibility
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a minimum amount for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\MinItemCompatibilityDefinitionType $minItemCompatibility
     * @return self
     */
    public function setMinItemCompatibility(\Nogrod\eBaySDK\Trading\MinItemCompatibilityDefinitionType $minItemCompatibility)
    {
        $this->minItemCompatibility = $minItemCompatibility;
        return $this;
    }

    /**
     * Gets as conditionEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the textual description of an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ConditionEnabledDefinitionType
     */
    public function getConditionEnabled()
    {
        return $this->conditionEnabled;
    }

    /**
     * Sets a new conditionEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the textual description of an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ConditionEnabledDefinitionType $conditionEnabled
     * @return self
     */
    public function setConditionEnabled(\Nogrod\eBaySDK\Trading\ConditionEnabledDefinitionType $conditionEnabled)
    {
        $this->conditionEnabled = $conditionEnabled;
        return $this;
    }

    /**
     * Gets as conditionValues
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ConditionValuesDefinitionType
     */
    public function getConditionValues()
    {
        return $this->conditionValues;
    }

    /**
     * Sets a new conditionValues
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ConditionValuesDefinitionType $conditionValues
     * @return self
     */
    public function setConditionValues(\Nogrod\eBaySDK\Trading\ConditionValuesDefinitionType $conditionValues)
    {
        $this->conditionValues = $conditionValues;
        return $this;
    }

    /**
     * Gets as valueCategory
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support value categories. A Value category will typically have lower listing fees or another eBay promotion. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ValueCategoryDefinitionType
     */
    public function getValueCategory()
    {
        return $this->valueCategory;
    }

    /**
     * Sets a new valueCategory
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support value categories. A Value category will typically have lower listing fees or another eBay promotion. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ValueCategoryDefinitionType $valueCategory
     * @return self
     */
    public function setValueCategory(\Nogrod\eBaySDK\Trading\ValueCategoryDefinitionType $valueCategory)
    {
        $this->valueCategory = $valueCategory;
        return $this;
    }

    /**
     * Gets as productCreationEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC, ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ProductCreationEnabledDefinitionType
     */
    public function getProductCreationEnabled()
    {
        return $this->productCreationEnabled;
    }

    /**
     * Sets a new productCreationEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC, ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ProductCreationEnabledDefinitionType $productCreationEnabled
     * @return self
     */
    public function setProductCreationEnabled(\Nogrod\eBaySDK\Trading\ProductCreationEnabledDefinitionType $productCreationEnabled)
    {
        $this->productCreationEnabled = $productCreationEnabled;
        return $this;
    }

    /**
     * Gets as eANEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.EANEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return \Nogrod\eBaySDK\Trading\EANEnabledDefinitionType
     */
    public function getEANEnabled()
    {
        return $this->eANEnabled;
    }

    /**
     * Sets a new eANEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.EANEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param \Nogrod\eBaySDK\Trading\EANEnabledDefinitionType $eANEnabled
     * @return self
     */
    public function setEANEnabled(\Nogrod\eBaySDK\Trading\EANEnabledDefinitionType $eANEnabled)
    {
        $this->eANEnabled = $eANEnabled;
        return $this;
    }

    /**
     * Gets as iSBNEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.ISBNEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return \Nogrod\eBaySDK\Trading\ISBNEnabledDefinitionType
     */
    public function getISBNEnabled()
    {
        return $this->iSBNEnabled;
    }

    /**
     * Sets a new iSBNEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.ISBNEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param \Nogrod\eBaySDK\Trading\ISBNEnabledDefinitionType $iSBNEnabled
     * @return self
     */
    public function setISBNEnabled(\Nogrod\eBaySDK\Trading\ISBNEnabledDefinitionType $iSBNEnabled)
    {
        $this->iSBNEnabled = $iSBNEnabled;
        return $this;
    }

    /**
     * Gets as uPCEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.UPCEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return \Nogrod\eBaySDK\Trading\UPCEnabledDefinitionType
     */
    public function getUPCEnabled()
    {
        return $this->uPCEnabled;
    }

    /**
     * Sets a new uPCEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.UPCEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param \Nogrod\eBaySDK\Trading\UPCEnabledDefinitionType $uPCEnabled
     * @return self
     */
    public function setUPCEnabled(\Nogrod\eBaySDK\Trading\UPCEnabledDefinitionType $uPCEnabled)
    {
        $this->uPCEnabled = $uPCEnabled;
        return $this;
    }

    /**
     * Gets as compatibleVehicleType
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\CompatibleVehicleTypeDefinitionType
     */
    public function getCompatibleVehicleType()
    {
        return $this->compatibleVehicleType;
    }

    /**
     * Sets a new compatibleVehicleType
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     * @return self
     */
    public function setCompatibleVehicleType(\Nogrod\eBaySDK\Trading\CompatibleVehicleTypeDefinitionType $compatibleVehicleType)
    {
        $this->compatibleVehicleType = $compatibleVehicleType;
        return $this;
    }

    /**
     * Gets as maxGranularFitmentCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\MaxGranularFitmentCountDefinitionType
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->maxGranularFitmentCount;
    }

    /**
     * Sets a new maxGranularFitmentCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     * @return self
     */
    public function setMaxGranularFitmentCount(\Nogrod\eBaySDK\Trading\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount)
    {
        $this->maxGranularFitmentCount = $maxGranularFitmentCount;
        return $this;
    }

    /**
     * Gets as paymentOptionsGroup
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentOptionsGroupEnabledDefinitionType
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
     * @param \Nogrod\eBaySDK\Trading\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     * @return self
     */
    public function setPaymentOptionsGroup(\Nogrod\eBaySDK\Trading\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup)
    {
        $this->paymentOptionsGroup = $paymentOptionsGroup;
        return $this;
    }

    /**
     * Gets as shippingProfileCategoryGroup
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in shipping business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->shippingProfileCategoryGroup;
    }

    /**
     * Sets a new shippingProfileCategoryGroup
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in shipping business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     * @return self
     */
    public function setShippingProfileCategoryGroup(\Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup)
    {
        $this->shippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as paymentProfileCategoryGroup
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in payment business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->paymentProfileCategoryGroup;
    }

    /**
     * Sets a new paymentProfileCategoryGroup
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in payment business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     * @return self
     */
    public function setPaymentProfileCategoryGroup(\Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup)
    {
        $this->paymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as returnPolicyProfileCategoryGroup
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in return business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->returnPolicyProfileCategoryGroup;
    }

    /**
     * Sets a new returnPolicyProfileCategoryGroup
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in return business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     * @return self
     */
    public function setReturnPolicyProfileCategoryGroup(\Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup)
    {
        $this->returnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as vINSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\VINSupportedDefinitionType
     */
    public function getVINSupported()
    {
        return $this->vINSupported;
    }

    /**
     * Sets a new vINSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\VINSupportedDefinitionType $vINSupported
     * @return self
     */
    public function setVINSupported(\Nogrod\eBaySDK\Trading\VINSupportedDefinitionType $vINSupported)
    {
        $this->vINSupported = $vINSupported;
        return $this;
    }

    /**
     * Gets as vRMSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\VRMSupportedDefinitionType
     */
    public function getVRMSupported()
    {
        return $this->vRMSupported;
    }

    /**
     * Sets a new vRMSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\VRMSupportedDefinitionType $vRMSupported
     * @return self
     */
    public function setVRMSupported(\Nogrod\eBaySDK\Trading\VRMSupportedDefinitionType $vRMSupported)
    {
        $this->vRMSupported = $vRMSupported;
        return $this;
    }

    /**
     * Gets as sellerProvidedTitleSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support seller-provided titles in motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerProvidedTitleSupportedDefinitionType
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->sellerProvidedTitleSupported;
    }

    /**
     * Sets a new sellerProvidedTitleSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support seller-provided titles in motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     * @return self
     */
    public function setSellerProvidedTitleSupported(\Nogrod\eBaySDK\Trading\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported)
    {
        $this->sellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        return $this;
    }

    /**
     * Gets as depositSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support deposits/down payments for motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\DepositSupportedDefinitionType
     */
    public function getDepositSupported()
    {
        return $this->depositSupported;
    }

    /**
     * Sets a new depositSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support deposits/down payments for motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\DepositSupportedDefinitionType $depositSupported
     * @return self
     */
    public function setDepositSupported(\Nogrod\eBaySDK\Trading\DepositSupportedDefinitionType $depositSupported)
    {
        $this->depositSupported = $depositSupported;
        return $this;
    }

    /**
     * Gets as globalShippingEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\GlobalShippingEnabledDefinitionType
     */
    public function getGlobalShippingEnabled()
    {
        return $this->globalShippingEnabled;
    }

    /**
     * Sets a new globalShippingEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     * @return self
     */
    public function setGlobalShippingEnabled(\Nogrod\eBaySDK\Trading\GlobalShippingEnabledDefinitionType $globalShippingEnabled)
    {
        $this->globalShippingEnabled = $globalShippingEnabled;
        return $this;
    }

    /**
     * Gets as additionalCompatibilityEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports Boat and Motorcycle Parts Compatibility, pass in a
     *  <b>CategoryID</b> value in the request, and then look for a
     *  <code>true</code>
     *  <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return \Nogrod\eBaySDK\Trading\AdditionalCompatibilityEnabledDefinitionType
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->additionalCompatibilityEnabled;
    }

    /**
     * Sets a new additionalCompatibilityEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports Boat and Motorcycle Parts Compatibility, pass in a
     *  <b>CategoryID</b> value in the request, and then look for a
     *  <code>true</code>
     *  <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param \Nogrod\eBaySDK\Trading\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     * @return self
     */
    public function setAdditionalCompatibilityEnabled(\Nogrod\eBaySDK\Trading\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled)
    {
        $this->additionalCompatibilityEnabled = $additionalCompatibilityEnabled;
        return $this;
    }

    /**
     * Gets as pickupDropOffEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the Click and Collect feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\PickupDropOffEnabledDefinitionType
     */
    public function getPickupDropOffEnabled()
    {
        return $this->pickupDropOffEnabled;
    }

    /**
     * Sets a new pickupDropOffEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the Click and Collect feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     * @return self
     */
    public function setPickupDropOffEnabled(\Nogrod\eBaySDK\Trading\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled)
    {
        $this->pickupDropOffEnabled = $pickupDropOffEnabled;
        return $this;
    }

    /**
     * Gets as digitalGoodDeliveryEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports digital gift card listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  https://www.ebay.com/help/policies/prohibited-restricted-items/gift-cards-policy?id=4294" target="_blank">Gift cards policy</a> help page.
     *
     * @return \Nogrod\eBaySDK\Trading\DigitalGoodDeliveryEnabledDefinitionType
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->digitalGoodDeliveryEnabled;
    }

    /**
     * Sets a new digitalGoodDeliveryEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports digital gift card listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  https://www.ebay.com/help/policies/prohibited-restricted-items/gift-cards-policy?id=4294" target="_blank">Gift cards policy</a> help page.
     *
     * @param \Nogrod\eBaySDK\Trading\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     * @return self
     */
    public function setDigitalGoodDeliveryEnabled(\Nogrod\eBaySDK\Trading\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled)
    {
        $this->digitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        return $this;
    }

    /**
     * Gets as epidSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @return \Nogrod\eBaySDK\Trading\EpidSupportedDefinitionType
     */
    public function getEpidSupported()
    {
        return $this->epidSupported;
    }

    /**
     * Sets a new epidSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @param \Nogrod\eBaySDK\Trading\EpidSupportedDefinitionType $epidSupported
     * @return self
     */
    public function setEpidSupported(\Nogrod\eBaySDK\Trading\EpidSupportedDefinitionType $epidSupported)
    {
        $this->epidSupported = $epidSupported;
        return $this;
    }

    /**
     * Gets as kTypeSupported
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @return \Nogrod\eBaySDK\Trading\KTypeSupportedDefinitionType
     */
    public function getKTypeSupported()
    {
        return $this->kTypeSupported;
    }

    /**
     * Sets a new kTypeSupported
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @param \Nogrod\eBaySDK\Trading\KTypeSupportedDefinitionType $kTypeSupported
     * @return self
     */
    public function setKTypeSupported(\Nogrod\eBaySDK\Trading\KTypeSupportedDefinitionType $kTypeSupported)
    {
        $this->kTypeSupported = $kTypeSupported;
        return $this;
    }

    /**
     * Gets as productRequiredEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites supports Product-Based Shopping Experience listings (listings associated with eBay catalog products).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, association with an eBay catalog product will no longer be required for any categories on any eBay marketplace.</span>
     *
     * @return \Nogrod\eBaySDK\Trading\ProductRequiredEnabledDefinitionType
     */
    public function getProductRequiredEnabled()
    {
        return $this->productRequiredEnabled;
    }

    /**
     * Sets a new productRequiredEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites supports Product-Based Shopping Experience listings (listings associated with eBay catalog products).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, association with an eBay catalog product will no longer be required for any categories on any eBay marketplace.</span>
     *
     * @param \Nogrod\eBaySDK\Trading\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     * @return self
     */
    public function setProductRequiredEnabled(\Nogrod\eBaySDK\Trading\ProductRequiredEnabledDefinitionType $productRequiredEnabled)
    {
        $this->productRequiredEnabled = $productRequiredEnabled;
        return $this;
    }

    /**
     * Gets as domesticReturnsAcceptedValues
     *
     * If present, this flag indicates the seller can set how to handle domestic returns.
     *
     * @return \Nogrod\eBaySDK\Trading\DomesticReturnsAcceptedDefinitionType
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->domesticReturnsAcceptedValues;
    }

    /**
     * Sets a new domesticReturnsAcceptedValues
     *
     * If present, this flag indicates the seller can set how to handle domestic returns.
     *
     * @param \Nogrod\eBaySDK\Trading\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     * @return self
     */
    public function setDomesticReturnsAcceptedValues(\Nogrod\eBaySDK\Trading\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues)
    {
        $this->domesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        return $this;
    }

    /**
     * Gets as internationalReturnsAcceptedValues
     *
     * If present, this flag indicates the seller can set how to handle international returns.
     *
     * @return \Nogrod\eBaySDK\Trading\InternationalReturnsAcceptedDefinitionType
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->internationalReturnsAcceptedValues;
    }

    /**
     * Sets a new internationalReturnsAcceptedValues
     *
     * If present, this flag indicates the seller can set how to handle international returns.
     *
     * @param \Nogrod\eBaySDK\Trading\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     * @return self
     */
    public function setInternationalReturnsAcceptedValues(\Nogrod\eBaySDK\Trading\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues)
    {
        $this->internationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        return $this;
    }

    /**
     * Gets as domesticReturnsDurationValues
     *
     * If present, this flag indicates the seller can set the time duration for domestic returns.
     *
     * @return \Nogrod\eBaySDK\Trading\DomesticReturnsDurationDefinitionType
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->domesticReturnsDurationValues;
    }

    /**
     * Sets a new domesticReturnsDurationValues
     *
     * If present, this flag indicates the seller can set the time duration for domestic returns.
     *
     * @param \Nogrod\eBaySDK\Trading\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     * @return self
     */
    public function setDomesticReturnsDurationValues(\Nogrod\eBaySDK\Trading\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues)
    {
        $this->domesticReturnsDurationValues = $domesticReturnsDurationValues;
        return $this;
    }

    /**
     * Gets as internationalReturnsDurationValues
     *
     * If present, this flag indicates the seller can set the time duration for international returns.
     *
     * @return \Nogrod\eBaySDK\Trading\InternationalReturnsDurationDefinitionType
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->internationalReturnsDurationValues;
    }

    /**
     * Sets a new internationalReturnsDurationValues
     *
     * If present, this flag indicates the seller can set the time duration for international returns.
     *
     * @param \Nogrod\eBaySDK\Trading\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     * @return self
     */
    public function setInternationalReturnsDurationValues(\Nogrod\eBaySDK\Trading\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues)
    {
        $this->internationalReturnsDurationValues = $internationalReturnsDurationValues;
        return $this;
    }

    /**
     * Gets as domesticReturnsShipmentPayeeValues
     *
     * If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     *
     * @return \Nogrod\eBaySDK\Trading\DomesticReturnsShipmentPayeeDefinitionType
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->domesticReturnsShipmentPayeeValues;
    }

    /**
     * Sets a new domesticReturnsShipmentPayeeValues
     *
     * If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     *
     * @param \Nogrod\eBaySDK\Trading\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     * @return self
     */
    public function setDomesticReturnsShipmentPayeeValues(\Nogrod\eBaySDK\Trading\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues)
    {
        $this->domesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        return $this;
    }

    /**
     * Gets as internationalReturnsShipmentPayeeValues
     *
     * If present, this flag indicates the seller can set who pays the shipping for international returns.
     *
     * @return \Nogrod\eBaySDK\Trading\InternationalReturnsShipmentPayeeDefinitionType
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->internationalReturnsShipmentPayeeValues;
    }

    /**
     * Sets a new internationalReturnsShipmentPayeeValues
     *
     * If present, this flag indicates the seller can set who pays the shipping for international returns.
     *
     * @param \Nogrod\eBaySDK\Trading\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     * @return self
     */
    public function setInternationalReturnsShipmentPayeeValues(\Nogrod\eBaySDK\Trading\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues)
    {
        $this->internationalReturnsShipmentPayeeValues = $internationalReturnsShipmentPayeeValues;
        return $this;
    }

    /**
     * Adds as domesticRefundMethod
     *
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
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
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
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
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
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
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
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
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
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
     * If present, this flag indicates the seller can set the method they use to refund international returns.
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
     * If present, this flag indicates the seller can set the method they use to refund international returns.
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
     * If present, this flag indicates the seller can set the method they use to refund international returns.
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
     * If present, this flag indicates the seller can set the method they use to refund international returns.
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
     * If present, this flag indicates the seller can set the method they use to refund international returns.
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
     * If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     *
     * @return \Nogrod\eBaySDK\Trading\ReturnPolicyDescriptionEnabledDefinitionType
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->returnPolicyDescriptionEnabled;
    }

    /**
     * Sets a new returnPolicyDescriptionEnabled
     *
     * If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     *
     * @param \Nogrod\eBaySDK\Trading\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     * @return self
     */
    public function setReturnPolicyDescriptionEnabled(\Nogrod\eBaySDK\Trading\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled)
    {
        $this->returnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingDurations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingDurations", $value);
        }
        $value = $this->getShippingTermsRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTermsRequired", $value);
        }
        $value = $this->getBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled", $value);
        }
        $value = $this->getDutchBINEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DutchBINEnabled", $value);
        }
        $value = $this->getUserConsentRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserConsentRequired", $value);
        }
        $value = $this->getHomePageFeaturedEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HomePageFeaturedEnabled", $value);
        }
        $value = $this->getProPackEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProPackEnabled", $value);
        }
        $value = $this->getBasicUpgradePackEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BasicUpgradePackEnabled", $value);
        }
        $value = $this->getValuePackEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValuePackEnabled", $value);
        }
        $value = $this->getProPackPlusEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProPackPlusEnabled", $value);
        }
        $value = $this->getAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdFormatEnabled", $value);
        }
        $value = $this->getBestOfferCounterEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferCounterEnabled", $value);
        }
        $value = $this->getBestOfferAutoDeclineEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferAutoDeclineEnabled", $value);
        }
        $value = $this->getLocalMarketSpecialitySubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketSpecialitySubscription", $value);
        }
        $value = $this->getLocalMarketRegularSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketRegularSubscription", $value);
        }
        $value = $this->getLocalMarketPremiumSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPremiumSubscription", $value);
        }
        $value = $this->getLocalMarketNonSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketNonSubscription", $value);
        }
        $value = $this->getExpressEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressEnabled", $value);
        }
        $value = $this->getExpressPicturesRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressPicturesRequired", $value);
        }
        $value = $this->getExpressConditionRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressConditionRequired", $value);
        }
        $value = $this->getMinimumReservePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumReservePrice", $value);
        }
        $value = $this->getTransactionConfirmationRequestEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionConfirmationRequestEnabled", $value);
        }
        $value = $this->getSellerContactDetailsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerContactDetailsEnabled", $value);
        }
        $value = $this->getStoreInventoryEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreInventoryEnabled", $value);
        }
        $value = $this->getSkypeMeTransactionalEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SkypeMeTransactionalEnabled", $value);
        }
        $value = $this->getSkypeMeNonTransactionalEnabled();
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
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdShippingMethodEnabled", $value);
        }
        $value = $this->getClassifiedAdBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdBestOfferEnabled", $value);
        }
        $value = $this->getClassifiedAdCounterOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCounterOfferEnabled", $value);
        }
        $value = $this->getClassifiedAdAutoDeclineEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoDeclineEnabled", $value);
        }
        $value = $this->getClassifiedAdContactByPhoneEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByPhoneEnabled", $value);
        }
        $value = $this->getClassifiedAdContactByEmailEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByEmailEnabled", $value);
        }
        $value = $this->getSafePaymentRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SafePaymentRequired", $value);
        }
        $value = $this->getClassifiedAdPayPerLeadEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPayPerLeadEnabled", $value);
        }
        $value = $this->getItemSpecificsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecificsEnabled", $value);
        }
        $value = $this->getPaisaPayFullEscrowEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaisaPayFullEscrowEnabled", $value);
        }
        $value = $this->getISBNIdentifierEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ISBNIdentifierEnabled", $value);
        }
        $value = $this->getUPCIdentifierEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UPCIdentifierEnabled", $value);
        }
        $value = $this->getEANIdentifierEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EANIdentifierEnabled", $value);
        }
        $value = $this->getBrandMPNIdentifierEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BrandMPNIdentifierEnabled", $value);
        }
        $value = $this->getBestOfferAutoAcceptEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferAutoAcceptEnabled", $value);
        }
        $value = $this->getClassifiedAdAutoAcceptEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoAcceptEnabled", $value);
        }
        $value = $this->getCrossBorderTradeNorthAmericaEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeNorthAmericaEnabled", $value);
        }
        $value = $this->getCrossBorderTradeGBEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeGBEnabled", $value);
        }
        $value = $this->getCrossBorderTradeAustraliaEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeAustraliaEnabled", $value);
        }
        $value = $this->getPayPalBuyerProtectionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalBuyerProtectionEnabled", $value);
        }
        $value = $this->getBuyerGuaranteeEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteeEnabled", $value);
        }
        $value = $this->getCombinedFixedPriceTreatmentEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedFixedPriceTreatmentEnabled", $value);
        }
        $value = $this->getGalleryFeaturedDurations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryFeaturedDurations", $value);
        }
        $value = $this->getINEscrowWorkflowTimeline();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}INEscrowWorkflowTimeline", $value);
        }
        $value = $this->getPayPalRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalRequired", $value);
        }
        $value = $this->getEBayMotorsProAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAdFormatEnabled", $value);
        }
        $value = $this->getEBayMotorsProContactByPhoneEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByPhoneEnabled", $value);
        }
        $value = $this->getEBayMotorsProPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPhoneCount", $value);
        }
        $value = $this->getEBayMotorsProContactByAddressEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByAddressEnabled", $value);
        }
        $value = $this->getEBayMotorsProStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProStreetCount", $value);
        }
        $value = $this->getEBayMotorsProCompanyNameEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCompanyNameEnabled", $value);
        }
        $value = $this->getEBayMotorsProContactByEmailEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByEmailEnabled", $value);
        }
        $value = $this->getEBayMotorsProBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProBestOfferEnabled", $value);
        }
        $value = $this->getEBayMotorsProAutoAcceptEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoAcceptEnabled", $value);
        }
        $value = $this->getEBayMotorsProAutoDeclineEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoDeclineEnabled", $value);
        }
        $value = $this->getEBayMotorsProPaymentMethodCheckOutEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPaymentMethodCheckOutEnabled", $value);
        }
        $value = $this->getEBayMotorsProShippingMethodEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProShippingMethodEnabled", $value);
        }
        $value = $this->getEBayMotorsProCounterOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCounterOfferEnabled", $value);
        }
        $value = $this->getEBayMotorsProSellerContactDetailsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProSellerContactDetailsEnabled", $value);
        }
        $value = $this->getLocalMarketAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAdFormatEnabled", $value);
        }
        $value = $this->getLocalMarketContactByPhoneEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByPhoneEnabled", $value);
        }
        $value = $this->getLocalMarketPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPhoneCount", $value);
        }
        $value = $this->getLocalMarketContactByAddressEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByAddressEnabled", $value);
        }
        $value = $this->getLocalMarketStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketStreetCount", $value);
        }
        $value = $this->getLocalMarketCompanyNameEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketCompanyNameEnabled", $value);
        }
        $value = $this->getLocalMarketContactByEmailEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByEmailEnabled", $value);
        }
        $value = $this->getLocalMarketBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketBestOfferEnabled", $value);
        }
        $value = $this->getLocalMarketAutoAcceptEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoAcceptEnabled", $value);
        }
        $value = $this->getLocalMarketAutoDeclineEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoDeclineEnabled", $value);
        }
        $value = $this->getLocalMarketPaymentMethodCheckOutEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPaymentMethodCheckOutEnabled", $value);
        }
        $value = $this->getLocalMarketShippingMethodEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketShippingMethodEnabled", $value);
        }
        $value = $this->getLocalMarketCounterOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketCounterOfferEnabled", $value);
        }
        $value = $this->getLocalMarketSellerContactDetailsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketSellerContactDetailsEnabled", $value);
        }
        $value = $this->getClassifiedAdPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPhoneCount", $value);
        }
        $value = $this->getClassifiedAdContactByAddressEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByAddressEnabled", $value);
        }
        $value = $this->getClassifiedAdStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdStreetCount", $value);
        }
        $value = $this->getClassifiedAdCompanyNameEnabled();
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
        $value = $this->getReturnPolicyEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicyEnabled", $value);
        }
        $value = $this->getHandlingTimeEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HandlingTimeEnabled", $value);
        }
        $value = $this->getPayPalRequiredForStoreOwner();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalRequiredForStoreOwner", $value);
        }
        $value = $this->getReviseQuantityAllowed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviseQuantityAllowed", $value);
        }
        $value = $this->getRevisePriceAllowed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RevisePriceAllowed", $value);
        }
        $value = $this->getStoreOwnerExtendedListingDurationsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurationsEnabled", $value);
        }
        $value = $this->getStoreOwnerExtendedListingDurations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurations", $value);
        }
        $value = $this->getPaymentMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethod", $value);
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
        $value = $this->getMaxFlatShippingCostCBTExempt();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCostCBTExempt", $value);
        }
        $value = $this->getMaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCost", $value);
        }
        $value = $this->getVariationsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationsEnabled", $value);
        }
        $value = $this->getAttributeConversionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeConversionEnabled", $value);
        }
        $value = $this->getFreeGalleryPlusEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FreeGalleryPlusEnabled", $value);
        }
        $value = $this->getFreePicturePackEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FreePicturePackEnabled", $value);
        }
        $value = $this->getItemCompatibilityEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityEnabled", $value);
        }
        $value = $this->getMaxItemCompatibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxItemCompatibility", $value);
        }
        $value = $this->getMinItemCompatibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinItemCompatibility", $value);
        }
        $value = $this->getConditionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionEnabled", $value);
        }
        $value = $this->getConditionValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionValues", $value);
        }
        $value = $this->getValueCategory();
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
        $value = $this->getCompatibleVehicleType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompatibleVehicleType", $value);
        }
        $value = $this->getMaxGranularFitmentCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxGranularFitmentCount", $value);
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
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VINSupported", $value);
        }
        $value = $this->getVRMSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VRMSupported", $value);
        }
        $value = $this->getSellerProvidedTitleSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerProvidedTitleSupported", $value);
        }
        $value = $this->getDepositSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DepositSupported", $value);
        }
        $value = $this->getGlobalShippingEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GlobalShippingEnabled", $value);
        }
        $value = $this->getAdditionalCompatibilityEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdditionalCompatibilityEnabled", $value);
        }
        $value = $this->getPickupDropOffEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupDropOffEnabled", $value);
        }
        $value = $this->getDigitalGoodDeliveryEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DigitalGoodDeliveryEnabled", $value);
        }
        $value = $this->getEpidSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EpidSupported", $value);
        }
        $value = $this->getKTypeSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}KTypeSupported", $value);
        }
        $value = $this->getProductRequiredEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductRequiredEnabled", $value);
        }
        $value = $this->getDomesticReturnsAcceptedValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsAcceptedValues", $value);
        }
        $value = $this->getInternationalReturnsAcceptedValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedValues", $value);
        }
        $value = $this->getDomesticReturnsDurationValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsDurationValues", $value);
        }
        $value = $this->getInternationalReturnsDurationValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsDurationValues", $value);
        }
        $value = $this->getDomesticReturnsShipmentPayeeValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsShipmentPayeeValues", $value);
        }
        $value = $this->getInternationalReturnsShipmentPayeeValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsShipmentPayeeValues", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDurations');
        if (null !== $value) {
            $this->setListingDurations(\Nogrod\eBaySDK\Trading\ListingDurationDefinitionsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTermsRequired');
        if (null !== $value) {
            $this->setShippingTermsRequired(\Nogrod\eBaySDK\Trading\ShippingTermRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled');
        if (null !== $value) {
            $this->setBestOfferEnabled(\Nogrod\eBaySDK\Trading\BestOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DutchBINEnabled');
        if (null !== $value) {
            $this->setDutchBINEnabled(\Nogrod\eBaySDK\Trading\DutchBINEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserConsentRequired');
        if (null !== $value) {
            $this->setUserConsentRequired(\Nogrod\eBaySDK\Trading\UserConsentRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HomePageFeaturedEnabled');
        if (null !== $value) {
            $this->setHomePageFeaturedEnabled(\Nogrod\eBaySDK\Trading\HomePageFeaturedEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProPackEnabled');
        if (null !== $value) {
            $this->setProPackEnabled(\Nogrod\eBaySDK\Trading\ProPackEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BasicUpgradePackEnabled');
        if (null !== $value) {
            $this->setBasicUpgradePackEnabled(\Nogrod\eBaySDK\Trading\BasicUpgradePackEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValuePackEnabled');
        if (null !== $value) {
            $this->setValuePackEnabled(\Nogrod\eBaySDK\Trading\ValuePackEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProPackPlusEnabled');
        if (null !== $value) {
            $this->setProPackPlusEnabled(\Nogrod\eBaySDK\Trading\ProPackPlusEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdFormatEnabled');
        if (null !== $value) {
            $this->setAdFormatEnabled(\Nogrod\eBaySDK\Trading\AdFormatEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferCounterEnabled');
        if (null !== $value) {
            $this->setBestOfferCounterEnabled(\Nogrod\eBaySDK\Trading\BestOfferCounterEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferAutoDeclineEnabled');
        if (null !== $value) {
            $this->setBestOfferAutoDeclineEnabled(\Nogrod\eBaySDK\Trading\BestOfferAutoDeclineEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketSpecialitySubscription');
        if (null !== $value) {
            $this->setLocalMarketSpecialitySubscription(\Nogrod\eBaySDK\Trading\LocalMarketSpecialitySubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketRegularSubscription');
        if (null !== $value) {
            $this->setLocalMarketRegularSubscription(\Nogrod\eBaySDK\Trading\LocalMarketRegularSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPremiumSubscription');
        if (null !== $value) {
            $this->setLocalMarketPremiumSubscription(\Nogrod\eBaySDK\Trading\LocalMarketPremiumSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketNonSubscription');
        if (null !== $value) {
            $this->setLocalMarketNonSubscription(\Nogrod\eBaySDK\Trading\LocalMarketNonSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressEnabled');
        if (null !== $value) {
            $this->setExpressEnabled(\Nogrod\eBaySDK\Trading\ExpressEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressPicturesRequired');
        if (null !== $value) {
            $this->setExpressPicturesRequired(\Nogrod\eBaySDK\Trading\ExpressPicturesRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressConditionRequired');
        if (null !== $value) {
            $this->setExpressConditionRequired(\Nogrod\eBaySDK\Trading\ExpressConditionRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumReservePrice');
        if (null !== $value) {
            $this->setMinimumReservePrice(\Nogrod\eBaySDK\Trading\MinimumReservePriceDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionConfirmationRequestEnabled');
        if (null !== $value) {
            $this->setTransactionConfirmationRequestEnabled(\Nogrod\eBaySDK\Trading\TCREnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setSellerContactDetailsEnabled(\Nogrod\eBaySDK\Trading\SellerContactDetailsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreInventoryEnabled');
        if (null !== $value) {
            $this->setStoreInventoryEnabled(\Nogrod\eBaySDK\Trading\StoreInventoryEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SkypeMeTransactionalEnabled');
        if (null !== $value) {
            $this->setSkypeMeTransactionalEnabled(\Nogrod\eBaySDK\Trading\SkypeMeTransactionalEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SkypeMeNonTransactionalEnabled');
        if (null !== $value) {
            $this->setSkypeMeNonTransactionalEnabled(\Nogrod\eBaySDK\Trading\SkypeMeNonTransactionalEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesRegular');
        if (null !== $value) {
            $this->setLocalListingDistancesRegular(\Nogrod\eBaySDK\Trading\LocalListingDistancesRegularDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesSpecialty');
        if (null !== $value) {
            $this->setLocalListingDistancesSpecialty(\Nogrod\eBaySDK\Trading\LocalListingDistancesSpecialtyDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesNonSubscription');
        if (null !== $value) {
            $this->setLocalListingDistancesNonSubscription(\Nogrod\eBaySDK\Trading\LocalListingDistancesNonSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPaymentMethodEnabled');
        if (null !== $value) {
            $this->setClassifiedAdPaymentMethodEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdPaymentMethodEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdShippingMethodEnabled');
        if (null !== $value) {
            $this->setClassifiedAdShippingMethodEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdShippingMethodEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdBestOfferEnabled');
        if (null !== $value) {
            $this->setClassifiedAdBestOfferEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdBestOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCounterOfferEnabled');
        if (null !== $value) {
            $this->setClassifiedAdCounterOfferEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdCounterOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoDeclineEnabled');
        if (null !== $value) {
            $this->setClassifiedAdAutoDeclineEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdAutoDeclineEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByPhoneEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByPhoneEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdContactByPhoneEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByEmailEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByEmailEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdContactByEmailEnabledDefintionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SafePaymentRequired');
        if (null !== $value) {
            $this->setSafePaymentRequired(\Nogrod\eBaySDK\Trading\SafePaymentRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPayPerLeadEnabled');
        if (null !== $value) {
            $this->setClassifiedAdPayPerLeadEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdPayPerLeadEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecificsEnabled');
        if (null !== $value) {
            $this->setItemSpecificsEnabled(\Nogrod\eBaySDK\Trading\ItemSpecificsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaisaPayFullEscrowEnabled');
        if (null !== $value) {
            $this->setPaisaPayFullEscrowEnabled(\Nogrod\eBaySDK\Trading\PaisaPayFullEscrowEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ISBNIdentifierEnabled');
        if (null !== $value) {
            $this->setISBNIdentifierEnabled(\Nogrod\eBaySDK\Trading\ISBNIdentifierEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPCIdentifierEnabled');
        if (null !== $value) {
            $this->setUPCIdentifierEnabled(\Nogrod\eBaySDK\Trading\UPCIdentifierEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EANIdentifierEnabled');
        if (null !== $value) {
            $this->setEANIdentifierEnabled(\Nogrod\eBaySDK\Trading\EANIdentifierEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BrandMPNIdentifierEnabled');
        if (null !== $value) {
            $this->setBrandMPNIdentifierEnabled(\Nogrod\eBaySDK\Trading\BrandMPNIdentifierEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferAutoAcceptEnabled');
        if (null !== $value) {
            $this->setBestOfferAutoAcceptEnabled(\Nogrod\eBaySDK\Trading\BestOfferAutoAcceptEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoAcceptEnabled');
        if (null !== $value) {
            $this->setClassifiedAdAutoAcceptEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdAutoAcceptEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeNorthAmericaEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeNorthAmericaEnabled(\Nogrod\eBaySDK\Trading\CrossBorderTradeNorthAmericaEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeGBEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeGBEnabled(\Nogrod\eBaySDK\Trading\CrossBorderTradeGBEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeAustraliaEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeAustraliaEnabled(\Nogrod\eBaySDK\Trading\CrossBorderTradeAustraliaEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalBuyerProtectionEnabled');
        if (null !== $value) {
            $this->setPayPalBuyerProtectionEnabled(\Nogrod\eBaySDK\Trading\PayPalBuyerProtectionEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteeEnabled');
        if (null !== $value) {
            $this->setBuyerGuaranteeEnabled(\Nogrod\eBaySDK\Trading\BuyerGuaranteeEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedFixedPriceTreatmentEnabled');
        if (null !== $value) {
            $this->setCombinedFixedPriceTreatmentEnabled(\Nogrod\eBaySDK\Trading\CombinedFixedPriceTreatmentEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryFeaturedDurations');
        if (null !== $value) {
            $this->setGalleryFeaturedDurations(\Nogrod\eBaySDK\Trading\ListingEnhancementDurationDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}INEscrowWorkflowTimeline');
        if (null !== $value) {
            $this->setINEscrowWorkflowTimeline(\Nogrod\eBaySDK\Trading\INEscrowWorkflowTimelineDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalRequired');
        if (null !== $value) {
            $this->setPayPalRequired(\Nogrod\eBaySDK\Trading\PayPalRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAdFormatEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAdFormatEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProAdFormatEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByPhoneEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByPhoneEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProContactByPhoneEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPhoneCount');
        if (null !== $value) {
            $this->setEBayMotorsProPhoneCount(\Nogrod\eBaySDK\Trading\EBayMotorsProPhoneCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByAddressEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByAddressEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProContactByAddressEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProStreetCount');
        if (null !== $value) {
            $this->setEBayMotorsProStreetCount(\Nogrod\eBaySDK\Trading\EBayMotorsProStreetCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCompanyNameEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProCompanyNameEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProCompanyNameEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByEmailEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByEmailEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProContactByEmailEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProBestOfferEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProBestOfferEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProBestOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoAcceptEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAutoAcceptEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProAutoAcceptEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoDeclineEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAutoDeclineEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProAutoDeclineEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPaymentMethodCheckOutEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProPaymentMethodCheckOutEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProShippingMethodEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProShippingMethodEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProShippingMethodEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCounterOfferEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProCounterOfferEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProCounterOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProSellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProSellerContactDetailsEnabled(\Nogrod\eBaySDK\Trading\EBayMotorsProSellerContactDetailsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAdFormatEnabled');
        if (null !== $value) {
            $this->setLocalMarketAdFormatEnabled(\Nogrod\eBaySDK\Trading\LocalMarketAdFormatEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByPhoneEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByPhoneEnabled(\Nogrod\eBaySDK\Trading\LocalMarketContactByPhoneEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPhoneCount');
        if (null !== $value) {
            $this->setLocalMarketPhoneCount(\Nogrod\eBaySDK\Trading\LocalMarketPhoneCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByAddressEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByAddressEnabled(\Nogrod\eBaySDK\Trading\LocalMarketContactByAddressEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketStreetCount');
        if (null !== $value) {
            $this->setLocalMarketStreetCount(\Nogrod\eBaySDK\Trading\LocalMarketStreetCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketCompanyNameEnabled');
        if (null !== $value) {
            $this->setLocalMarketCompanyNameEnabled(\Nogrod\eBaySDK\Trading\LocalMarketCompanyNameEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByEmailEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByEmailEnabled(\Nogrod\eBaySDK\Trading\LocalMarketContactByEmailEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketBestOfferEnabled');
        if (null !== $value) {
            $this->setLocalMarketBestOfferEnabled(\Nogrod\eBaySDK\Trading\LocalMarketBestOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoAcceptEnabled');
        if (null !== $value) {
            $this->setLocalMarketAutoAcceptEnabled(\Nogrod\eBaySDK\Trading\LocalMarketAutoAcceptEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoDeclineEnabled');
        if (null !== $value) {
            $this->setLocalMarketAutoDeclineEnabled(\Nogrod\eBaySDK\Trading\LocalMarketAutoDeclineEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPaymentMethodCheckOutEnabled');
        if (null !== $value) {
            $this->setLocalMarketPaymentMethodCheckOutEnabled(\Nogrod\eBaySDK\Trading\LocalMarketPaymentMethodCheckOutEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketShippingMethodEnabled');
        if (null !== $value) {
            $this->setLocalMarketShippingMethodEnabled(\Nogrod\eBaySDK\Trading\LocalMarketShippingMethodEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketCounterOfferEnabled');
        if (null !== $value) {
            $this->setLocalMarketCounterOfferEnabled(\Nogrod\eBaySDK\Trading\LocalMarketCounterOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketSellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setLocalMarketSellerContactDetailsEnabled(\Nogrod\eBaySDK\Trading\LocalMarketSellerContactDetailsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPhoneCount');
        if (null !== $value) {
            $this->setClassifiedAdPhoneCount(\Nogrod\eBaySDK\Trading\ClassifiedAdPhoneCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByAddressEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByAddressEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdContactByAddressEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdStreetCount');
        if (null !== $value) {
            $this->setClassifiedAdStreetCount(\Nogrod\eBaySDK\Trading\ClassifiedAdStreetCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCompanyNameEnabled');
        if (null !== $value) {
            $this->setClassifiedAdCompanyNameEnabled(\Nogrod\eBaySDK\Trading\ClassifiedAdCompanyNameEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SpecialitySubscription');
        if (null !== $value) {
            $this->setSpecialitySubscription(\Nogrod\eBaySDK\Trading\SpecialitySubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegularSubscription');
        if (null !== $value) {
            $this->setRegularSubscription(\Nogrod\eBaySDK\Trading\RegularSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PremiumSubscription');
        if (null !== $value) {
            $this->setPremiumSubscription(\Nogrod\eBaySDK\Trading\PremiumSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NonSubscription');
        if (null !== $value) {
            $this->setNonSubscription(\Nogrod\eBaySDK\Trading\NonSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyEnabled');
        if (null !== $value) {
            $this->setReturnPolicyEnabled(\Nogrod\eBaySDK\Trading\ReturnPolicyEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HandlingTimeEnabled');
        if (null !== $value) {
            $this->setHandlingTimeEnabled(\Nogrod\eBaySDK\Trading\HandlingTimeEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalRequiredForStoreOwner');
        if (null !== $value) {
            $this->setPayPalRequiredForStoreOwner(\Nogrod\eBaySDK\Trading\PayPalRequiredForStoreOwnerDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseQuantityAllowed');
        if (null !== $value) {
            $this->setReviseQuantityAllowed(\Nogrod\eBaySDK\Trading\ReviseQuantityAllowedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RevisePriceAllowed');
        if (null !== $value) {
            $this->setRevisePriceAllowed(\Nogrod\eBaySDK\Trading\RevisePriceAllowedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurationsEnabled');
        if (null !== $value) {
            $this->setStoreOwnerExtendedListingDurationsEnabled(\Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurations');
        if (null !== $value) {
            $this->setStoreOwnerExtendedListingDurations(\Nogrod\eBaySDK\Trading\StoreOwnerExtendedListingDurationsDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethod');
        if (null !== $value) {
            $this->setPaymentMethod(\Nogrod\eBaySDK\Trading\PaymentMethodDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group1MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup1MaxFlatShippingCost(\Nogrod\eBaySDK\Trading\Group1MaxFlatShippingCostDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group2MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup2MaxFlatShippingCost(\Nogrod\eBaySDK\Trading\Group2MaxFlatShippingCostDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group3MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup3MaxFlatShippingCost(\Nogrod\eBaySDK\Trading\Group3MaxFlatShippingCostDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCostCBTExempt');
        if (null !== $value) {
            $this->setMaxFlatShippingCostCBTExempt(\Nogrod\eBaySDK\Trading\MaxFlatShippingCostCBTExemptDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCost');
        if (null !== $value) {
            $this->setMaxFlatShippingCost(\Nogrod\eBaySDK\Trading\MaxFlatShippingCostDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationsEnabled');
        if (null !== $value) {
            $this->setVariationsEnabled(\Nogrod\eBaySDK\Trading\VariationsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeConversionEnabled');
        if (null !== $value) {
            $this->setAttributeConversionEnabled(\Nogrod\eBaySDK\Trading\AttributeConversionEnabledFeatureDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FreeGalleryPlusEnabled');
        if (null !== $value) {
            $this->setFreeGalleryPlusEnabled(\Nogrod\eBaySDK\Trading\FreeGalleryPlusEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FreePicturePackEnabled');
        if (null !== $value) {
            $this->setFreePicturePackEnabled(\Nogrod\eBaySDK\Trading\FreePicturePackEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityEnabled');
        if (null !== $value) {
            $this->setItemCompatibilityEnabled(\Nogrod\eBaySDK\Trading\ItemCompatibilityEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxItemCompatibility');
        if (null !== $value) {
            $this->setMaxItemCompatibility(\Nogrod\eBaySDK\Trading\MaxItemCompatibilityDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinItemCompatibility');
        if (null !== $value) {
            $this->setMinItemCompatibility(\Nogrod\eBaySDK\Trading\MinItemCompatibilityDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionEnabled');
        if (null !== $value) {
            $this->setConditionEnabled(\Nogrod\eBaySDK\Trading\ConditionEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionValues');
        if (null !== $value) {
            $this->setConditionValues(\Nogrod\eBaySDK\Trading\ConditionValuesDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueCategory');
        if (null !== $value) {
            $this->setValueCategory(\Nogrod\eBaySDK\Trading\ValueCategoryDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductCreationEnabled');
        if (null !== $value) {
            $this->setProductCreationEnabled(\Nogrod\eBaySDK\Trading\ProductCreationEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EANEnabled');
        if (null !== $value) {
            $this->setEANEnabled(\Nogrod\eBaySDK\Trading\EANEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ISBNEnabled');
        if (null !== $value) {
            $this->setISBNEnabled(\Nogrod\eBaySDK\Trading\ISBNEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPCEnabled');
        if (null !== $value) {
            $this->setUPCEnabled(\Nogrod\eBaySDK\Trading\UPCEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompatibleVehicleType');
        if (null !== $value) {
            $this->setCompatibleVehicleType(\Nogrod\eBaySDK\Trading\CompatibleVehicleTypeDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxGranularFitmentCount');
        if (null !== $value) {
            $this->setMaxGranularFitmentCount(\Nogrod\eBaySDK\Trading\MaxGranularFitmentCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentOptionsGroup');
        if (null !== $value) {
            $this->setPaymentOptionsGroup(\Nogrod\eBaySDK\Trading\PaymentOptionsGroupEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingProfileCategoryGroup');
        if (null !== $value) {
            $this->setShippingProfileCategoryGroup(\Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentProfileCategoryGroup');
        if (null !== $value) {
            $this->setPaymentProfileCategoryGroup(\Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyProfileCategoryGroup');
        if (null !== $value) {
            $this->setReturnPolicyProfileCategoryGroup(\Nogrod\eBaySDK\Trading\ProfileCategoryGroupDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VINSupported');
        if (null !== $value) {
            $this->setVINSupported(\Nogrod\eBaySDK\Trading\VINSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VRMSupported');
        if (null !== $value) {
            $this->setVRMSupported(\Nogrod\eBaySDK\Trading\VRMSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerProvidedTitleSupported');
        if (null !== $value) {
            $this->setSellerProvidedTitleSupported(\Nogrod\eBaySDK\Trading\SellerProvidedTitleSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DepositSupported');
        if (null !== $value) {
            $this->setDepositSupported(\Nogrod\eBaySDK\Trading\DepositSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalShippingEnabled');
        if (null !== $value) {
            $this->setGlobalShippingEnabled(\Nogrod\eBaySDK\Trading\GlobalShippingEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdditionalCompatibilityEnabled');
        if (null !== $value) {
            $this->setAdditionalCompatibilityEnabled(\Nogrod\eBaySDK\Trading\AdditionalCompatibilityEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupDropOffEnabled');
        if (null !== $value) {
            $this->setPickupDropOffEnabled(\Nogrod\eBaySDK\Trading\PickupDropOffEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DigitalGoodDeliveryEnabled');
        if (null !== $value) {
            $this->setDigitalGoodDeliveryEnabled(\Nogrod\eBaySDK\Trading\DigitalGoodDeliveryEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EpidSupported');
        if (null !== $value) {
            $this->setEpidSupported(\Nogrod\eBaySDK\Trading\EpidSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}KTypeSupported');
        if (null !== $value) {
            $this->setKTypeSupported(\Nogrod\eBaySDK\Trading\KTypeSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductRequiredEnabled');
        if (null !== $value) {
            $this->setProductRequiredEnabled(\Nogrod\eBaySDK\Trading\ProductRequiredEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsAcceptedValues');
        if (null !== $value) {
            $this->setDomesticReturnsAcceptedValues(\Nogrod\eBaySDK\Trading\DomesticReturnsAcceptedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedValues');
        if (null !== $value) {
            $this->setInternationalReturnsAcceptedValues(\Nogrod\eBaySDK\Trading\InternationalReturnsAcceptedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsDurationValues');
        if (null !== $value) {
            $this->setDomesticReturnsDurationValues(\Nogrod\eBaySDK\Trading\DomesticReturnsDurationDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsDurationValues');
        if (null !== $value) {
            $this->setInternationalReturnsDurationValues(\Nogrod\eBaySDK\Trading\InternationalReturnsDurationDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsShipmentPayeeValues');
        if (null !== $value) {
            $this->setDomesticReturnsShipmentPayeeValues(\Nogrod\eBaySDK\Trading\DomesticReturnsShipmentPayeeDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsShipmentPayeeValues');
        if (null !== $value) {
            $this->setInternationalReturnsShipmentPayeeValues(\Nogrod\eBaySDK\Trading\InternationalReturnsShipmentPayeeDefinitionType::fromKeyValue($value));
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
            $this->setReturnPolicyDescriptionEnabled(\Nogrod\eBaySDK\Trading\ReturnPolicyDescriptionEnabledDefinitionType::fromKeyValue($value));
        }
    }
}
