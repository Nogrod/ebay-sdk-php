<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerType
 *
 * Information about a user returned in the context of an item's seller.
 * XSD Type: SellerType
 */
class SellerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * PaisaPay is no longer a supported payment method, so this field is no longer applicable.
     *
     * @var int $paisaPayStatus
     */
    private $paisaPayStatus = null;

    /**
     * Indicates whether the user as a seller by default allows buyers to edit the
     *  total cost of an item (while in checkout). (Sellers enable this property in
     *  their My eBay user preferences on the eBay site.)
     *
     * @var bool $allowPaymentEdit
     */
    private $allowPaymentEdit = null;

    /**
     * Currency type in which the user is billed seller fees.
     *
     * @var string $billingCurrency
     */
    private $billingCurrency = null;

    /**
     * This flag indicates whether or not the seller's Checkout Enabled preference is turned on (at account level or at
     *  listing level). This preference is managed through Payment Preferences in My eBay. If this preference is enabled,
     *  a Pay Now button will appear in checkout flow pages and in the email notifications that are sent to buyers. This
     *  preferance is enabled by default if PayPal is one of the payment methods.
     *
     * @var bool $checkoutEnabled
     */
    private $checkoutEnabled = null;

    /**
     * If true, this flag indicates that the seller has stored bank account information on file
     *  with eBay. A seller must have stored bank account information on file with eBay in order
     *  to use 'CashOnPickup' as a payment method (known as 'Pay upon Pickup' on the site). This
     *  field is applicable to all eBay sites that support 'CashOnPickup' as a payment method.
     *
     * @var bool $cIPBankAccountStored
     */
    private $cIPBankAccountStored = null;

    /**
     * If true, indicates that the user is in good standing with eBay. (One of the
     *  requirements for listing a new item with Immediate Payment.)
     *
     * @var bool $goodStanding
     */
    private $goodStanding = null;

    /**
     * This field is deprecated.
     *
     * @var string $merchandizingPref
     */
    private $merchandizingPref = null;

    /**
     * Indicates whether the user is subject to VAT. Users who have registered with
     *  eBay as VAT-exempt are not subject to VAT.
     *
     * @var bool $qualifiesForB2BVAT
     */
    private $qualifiesForB2BVAT = null;

    /**
     * This field is deprecated.
     *
     * @var string $sellerGuaranteeLevel
     */
    private $sellerGuaranteeLevel = null;

    /**
     * The user's eBay PowerSeller tier. Possible values are enumerated in the SellerLevelCodeType code list.
     *  SellerInfo.SellerLevel is no longer returned in the GetUser, GetBidderList, GetSellerList, GetItem, and
     *  GetItemTransactions responses for the US, DE/AT/CH, and UK/IE sites, for version 629 and later. If you are using
     *  a version older than 629, SellerInfo.SellerLevel will still be returned. Developers should note that
     *  SellerInfo.SellerLevel could potentially be removed from other sites as well.
     *
     * @var string $sellerLevel
     */
    private $sellerLevel = null;

    /**
     * Address used by eBay for purposes of billing the user for seller fees.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $sellerPaymentAddress
     */
    private $sellerPaymentAddress = null;

    /**
     * Container for scheduling limits for the user.
     *  Conveys the minimum and maximum
     *  minutes the user may schedule listings in advance, as well as the maximum
     *  number of items the user may schedule.
     *
     * @var \Nogrod\eBaySDK\Trading\SchedulingInfoType $schedulingInfo
     */
    private $schedulingInfo = null;

    /**
     * Boolean value indicates whether or not the seller is an eBay Store owner.
     *
     * @var bool $storeOwner
     */
    private $storeOwner = null;

    /**
     * The URL for the seller's eBay Store. This field is only returned if the seller is a store
     *  owner. To determine if a seller is a Store owner, check for the <b>User.SellerInfo.StoreOwner</b>
     *  and a value of true. The eBay Stores domain that is returned in this field is based on the
     *  <b>SITEID</b> header that is passed in the request, and not on the user's
     *  registration address, as was the case prior to version 757. So, if the seller's
     *  registration county is the UK, but a <b>SITEID</b> value of 71 (France) is
     *  passed into the call, the eBay Stores domain that is returned would be stores.ebay.fr.
     *
     * @var string $storeURL
     */
    private $storeURL = null;

    /**
     * Type of seller account. This value is returned if the German
     *  (ID 77), UK (ID 3), Ireland (ID 205), or US eBay Motors (ID 0) sites are specified.
     *
     * @var string $sellerBusinessType
     */
    private $sellerBusinessType = null;

    /**
     * If true, the user is registered as a vehicle dealer on the eBay Motors site.
     *
     * @var bool $registeredBusinessSeller
     */
    private $registeredBusinessSeller = null;

    /**
     * The site associated with the seller's eBay Store.
     *
     * @var string $storeSite
     */
    private $storeSite = null;

    /**
     * Indicates the method the seller selected to pay eBay with for
     *  the account.
     *  The payment methods vary from one eBay site to the next.
     *
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ProStoresCheckoutPreferenceType $proStoresPreference
     */
    private $proStoresPreference = null;

    /**
     * Indicates whether or not the seller is a registered charity
     *  seller. If <b>CharityRegistered</b> is <code>false</code>, the user must
     *  register their nonprofit organization with the PayPal Giving Fund to list eBay for Charity items.
     *
     * @var bool $charityRegistered
     */
    private $charityRegistered = null;

    /**
     * If this field is <code>true</code>, the user is currently exempt from the requirement to offer at least
     *  one safe payment method (PayPal/PaisaPay or one of the credit cards specified
     *  in <b>Item.PaymentMethods</b>) when listing items. This value should only return <code>true</code>
     *  for sellers who registered before January 17, 2007. Otherwise, it should
     *  return <code>false</code>. This setting overrides both the site and category values for
     *  <b>SafePaymentRequired</b>.
     *
     * @var bool $safePaymentExempt
     */
    private $safePaymentExempt = null;

    /**
     * This field is deprecated since eBay India is no longer a functioning marketplace.
     *
     * @var int $paisaPayEscrowEMIStatus
     */
    private $paisaPayEscrowEMIStatus = null;

    /**
     * This container consists of one or more of nonprofit organizations associated with the seller's account. This container will not be returned if the user is not affiliated with any nonprofit organizations. A seller must be registered with the PayPal Giving Fund to be affiliated with an eBay for Charity nonprofit organization.
     *
     * @var \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType[] $charityAffiliationDetails
     */
    private $charityAffiliationDetails = null;

    /**
     * Percentage of the number of times a member has sold successfully vs.
     *  the number of times a member has bought an item in the preceding 365 days.
     *
     * @var float $transactionPercent
     */
    private $transactionPercent = null;

    /**
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *  This container is returned if the seller has a payment gateway account on one or more eBay marketplaces.
     *
     * @var string[] $integratedMerchantCreditCardInfo
     */
    private $integratedMerchantCreditCardInfo = null;

    /**
     * Contains eligibility details about seller- or platform-based features. This is returned only
     *  if IncludeFeatureEligibility is set to true in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\FeatureEligibilityType $featureEligibility
     */
    private $featureEligibility = null;

    /**
     * This boolean field indicates if the seller is certified as a
     *  <em>Top Rated Seller</em>. Only Top Rated Sellers can qualify for Top Rated Plus listings, which receive the Top Rated Plus seal, and will help those listings stand out. Top Rated Plus listings also receive a 20 percent discount on the Final Value Fee.
     *  <br/><br/>
     *  This field is only returned for the following sites: US (EBAY-US), Motors (EBAY-MOTOR), AT (EBAY-AT), CH (EBAY-CH), DE (EBAY-DE), IE (EBAY-IE), UK (EBAY-GB), and AU (EBAY-AU). The Top Rated Seller and Top Rated Plus listing requirements will differ by site. Below are some links to Help pages that discusss these requirements:
     *  <ul>
     *  <li>eBay US: <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a></li>
     *  <li>eBay US Motors: <a href="http://pages.ebay.com/help/sell/top-rated.html#becoming">Becoming a Top Rated Seller in Motors vehicles categories</a></li>
     *  <li>eBay UK/IE: <a href="http://pages.ebay.co.uk/help/sell/top-rated.html">eBay Top-rated Seller status and the eBay Premium Service</a></li>
     *  <li>eBay DE/AT/CH: <a href="http://pages.ebay.de/help/sell/top-rated/2.html">
     * Anforderungen fur den Verkaufer mit Top-Bewertung</a></li>
     *  <li>eBay AU: <a href="http://pages.ebay.com.au/help/sell/top-rated.html">
     * Becoming a Top Rated Seller and qualifying for eBay Premium Service</a></li>
     *  </ul>
     *  Top Rated Sellers, registered in the US, can qualify for Top Rated Seller programs in other countries as long as they meet the selling requirments in those countries. However, even if US sellers qualify for programs in other countries, they will not receive the Final Value Fee discount on sales in those countries. For more information, see the <a href="http://pages.ebay.com/help/sell/top-rated.html#qualifying">
     * Qualifying for Top Rated Seller status on other eBay sites</a> help topic.
     *
     * @var bool $topRatedSeller
     */
    private $topRatedSeller = null;

    /**
     * Contains Top Rated Seller program details for the seller.
     *
     * @var string[] $topRatedSellerDetails
     */
    private $topRatedSellerDetails = null;

    /**
     * The list of the sites where a seller has agreed to the cross-border recoupment terms.
     *  <br><br>
     *  Sellers who engage in cross-border trade on sites that require a recoupment agreement, must
     *  agree to the recoupment terms before adding items to the site. This agreement allows eBay to
     *  reimburse a buyer during a dispute and then recoup the cost from the seller.
     *
     * @var string[] $recoupmentPolicyConsent
     */
    private $recoupmentPolicyConsent = null;

    /**
     * If true, the seller has configured a domestic shipping rate table on the DE, UK or US website.
     *
     * @var bool $domesticRateTable
     */
    private $domesticRateTable = null;

    /**
     * If true, the seller has configured an international shipping rate table on the US, UK or DE website.
     *
     * @var bool $internationalRateTable
     */
    private $internationalRateTable = null;

    /**
     * This field is no longer used.
     *
     * @var string $sellereBayPaymentProcessStatus
     */
    private $sellereBayPaymentProcessStatus = null;

    /**
     * This field is no longer used.
     *
     * @var \Nogrod\eBaySDK\Trading\SellereBayPaymentProcessConsentCodeType $sellereBayPaymentProcessConsent
     */
    private $sellereBayPaymentProcessConsent = null;

    /**
     * Gets as paisaPayStatus
     *
     * PaisaPay is no longer a supported payment method, so this field is no longer applicable.
     *
     * @return int
     */
    public function getPaisaPayStatus()
    {
        return $this->paisaPayStatus;
    }

    /**
     * Sets a new paisaPayStatus
     *
     * PaisaPay is no longer a supported payment method, so this field is no longer applicable.
     *
     * @param int $paisaPayStatus
     * @return self
     */
    public function setPaisaPayStatus($paisaPayStatus)
    {
        $this->paisaPayStatus = $paisaPayStatus;
        return $this;
    }

    /**
     * Gets as allowPaymentEdit
     *
     * Indicates whether the user as a seller by default allows buyers to edit the
     *  total cost of an item (while in checkout). (Sellers enable this property in
     *  their My eBay user preferences on the eBay site.)
     *
     * @return bool
     */
    public function getAllowPaymentEdit()
    {
        return $this->allowPaymentEdit;
    }

    /**
     * Sets a new allowPaymentEdit
     *
     * Indicates whether the user as a seller by default allows buyers to edit the
     *  total cost of an item (while in checkout). (Sellers enable this property in
     *  their My eBay user preferences on the eBay site.)
     *
     * @param bool $allowPaymentEdit
     * @return self
     */
    public function setAllowPaymentEdit($allowPaymentEdit)
    {
        $this->allowPaymentEdit = $allowPaymentEdit;
        return $this;
    }

    /**
     * Gets as billingCurrency
     *
     * Currency type in which the user is billed seller fees.
     *
     * @return string
     */
    public function getBillingCurrency()
    {
        return $this->billingCurrency;
    }

    /**
     * Sets a new billingCurrency
     *
     * Currency type in which the user is billed seller fees.
     *
     * @param string $billingCurrency
     * @return self
     */
    public function setBillingCurrency($billingCurrency)
    {
        $this->billingCurrency = $billingCurrency;
        return $this;
    }

    /**
     * Gets as checkoutEnabled
     *
     * This flag indicates whether or not the seller's Checkout Enabled preference is turned on (at account level or at
     *  listing level). This preference is managed through Payment Preferences in My eBay. If this preference is enabled,
     *  a Pay Now button will appear in checkout flow pages and in the email notifications that are sent to buyers. This
     *  preferance is enabled by default if PayPal is one of the payment methods.
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
     * This flag indicates whether or not the seller's Checkout Enabled preference is turned on (at account level or at
     *  listing level). This preference is managed through Payment Preferences in My eBay. If this preference is enabled,
     *  a Pay Now button will appear in checkout flow pages and in the email notifications that are sent to buyers. This
     *  preferance is enabled by default if PayPal is one of the payment methods.
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
     * Gets as cIPBankAccountStored
     *
     * If true, this flag indicates that the seller has stored bank account information on file
     *  with eBay. A seller must have stored bank account information on file with eBay in order
     *  to use 'CashOnPickup' as a payment method (known as 'Pay upon Pickup' on the site). This
     *  field is applicable to all eBay sites that support 'CashOnPickup' as a payment method.
     *
     * @return bool
     */
    public function getCIPBankAccountStored()
    {
        return $this->cIPBankAccountStored;
    }

    /**
     * Sets a new cIPBankAccountStored
     *
     * If true, this flag indicates that the seller has stored bank account information on file
     *  with eBay. A seller must have stored bank account information on file with eBay in order
     *  to use 'CashOnPickup' as a payment method (known as 'Pay upon Pickup' on the site). This
     *  field is applicable to all eBay sites that support 'CashOnPickup' as a payment method.
     *
     * @param bool $cIPBankAccountStored
     * @return self
     */
    public function setCIPBankAccountStored($cIPBankAccountStored)
    {
        $this->cIPBankAccountStored = $cIPBankAccountStored;
        return $this;
    }

    /**
     * Gets as goodStanding
     *
     * If true, indicates that the user is in good standing with eBay. (One of the
     *  requirements for listing a new item with Immediate Payment.)
     *
     * @return bool
     */
    public function getGoodStanding()
    {
        return $this->goodStanding;
    }

    /**
     * Sets a new goodStanding
     *
     * If true, indicates that the user is in good standing with eBay. (One of the
     *  requirements for listing a new item with Immediate Payment.)
     *
     * @param bool $goodStanding
     * @return self
     */
    public function setGoodStanding($goodStanding)
    {
        $this->goodStanding = $goodStanding;
        return $this;
    }

    /**
     * Gets as merchandizingPref
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getMerchandizingPref()
    {
        return $this->merchandizingPref;
    }

    /**
     * Sets a new merchandizingPref
     *
     * This field is deprecated.
     *
     * @param string $merchandizingPref
     * @return self
     */
    public function setMerchandizingPref($merchandizingPref)
    {
        $this->merchandizingPref = $merchandizingPref;
        return $this;
    }

    /**
     * Gets as qualifiesForB2BVAT
     *
     * Indicates whether the user is subject to VAT. Users who have registered with
     *  eBay as VAT-exempt are not subject to VAT.
     *
     * @return bool
     */
    public function getQualifiesForB2BVAT()
    {
        return $this->qualifiesForB2BVAT;
    }

    /**
     * Sets a new qualifiesForB2BVAT
     *
     * Indicates whether the user is subject to VAT. Users who have registered with
     *  eBay as VAT-exempt are not subject to VAT.
     *
     * @param bool $qualifiesForB2BVAT
     * @return self
     */
    public function setQualifiesForB2BVAT($qualifiesForB2BVAT)
    {
        $this->qualifiesForB2BVAT = $qualifiesForB2BVAT;
        return $this;
    }

    /**
     * Gets as sellerGuaranteeLevel
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSellerGuaranteeLevel()
    {
        return $this->sellerGuaranteeLevel;
    }

    /**
     * Sets a new sellerGuaranteeLevel
     *
     * This field is deprecated.
     *
     * @param string $sellerGuaranteeLevel
     * @return self
     */
    public function setSellerGuaranteeLevel($sellerGuaranteeLevel)
    {
        $this->sellerGuaranteeLevel = $sellerGuaranteeLevel;
        return $this;
    }

    /**
     * Gets as sellerLevel
     *
     * The user's eBay PowerSeller tier. Possible values are enumerated in the SellerLevelCodeType code list.
     *  SellerInfo.SellerLevel is no longer returned in the GetUser, GetBidderList, GetSellerList, GetItem, and
     *  GetItemTransactions responses for the US, DE/AT/CH, and UK/IE sites, for version 629 and later. If you are using
     *  a version older than 629, SellerInfo.SellerLevel will still be returned. Developers should note that
     *  SellerInfo.SellerLevel could potentially be removed from other sites as well.
     *
     * @return string
     */
    public function getSellerLevel()
    {
        return $this->sellerLevel;
    }

    /**
     * Sets a new sellerLevel
     *
     * The user's eBay PowerSeller tier. Possible values are enumerated in the SellerLevelCodeType code list.
     *  SellerInfo.SellerLevel is no longer returned in the GetUser, GetBidderList, GetSellerList, GetItem, and
     *  GetItemTransactions responses for the US, DE/AT/CH, and UK/IE sites, for version 629 and later. If you are using
     *  a version older than 629, SellerInfo.SellerLevel will still be returned. Developers should note that
     *  SellerInfo.SellerLevel could potentially be removed from other sites as well.
     *
     * @param string $sellerLevel
     * @return self
     */
    public function setSellerLevel($sellerLevel)
    {
        $this->sellerLevel = $sellerLevel;
        return $this;
    }

    /**
     * Gets as sellerPaymentAddress
     *
     * Address used by eBay for purposes of billing the user for seller fees.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getSellerPaymentAddress()
    {
        return $this->sellerPaymentAddress;
    }

    /**
     * Sets a new sellerPaymentAddress
     *
     * Address used by eBay for purposes of billing the user for seller fees.
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $sellerPaymentAddress
     * @return self
     */
    public function setSellerPaymentAddress(\Nogrod\eBaySDK\Trading\AddressType $sellerPaymentAddress)
    {
        $this->sellerPaymentAddress = $sellerPaymentAddress;
        return $this;
    }

    /**
     * Gets as schedulingInfo
     *
     * Container for scheduling limits for the user.
     *  Conveys the minimum and maximum
     *  minutes the user may schedule listings in advance, as well as the maximum
     *  number of items the user may schedule.
     *
     * @return \Nogrod\eBaySDK\Trading\SchedulingInfoType
     */
    public function getSchedulingInfo()
    {
        return $this->schedulingInfo;
    }

    /**
     * Sets a new schedulingInfo
     *
     * Container for scheduling limits for the user.
     *  Conveys the minimum and maximum
     *  minutes the user may schedule listings in advance, as well as the maximum
     *  number of items the user may schedule.
     *
     * @param \Nogrod\eBaySDK\Trading\SchedulingInfoType $schedulingInfo
     * @return self
     */
    public function setSchedulingInfo(\Nogrod\eBaySDK\Trading\SchedulingInfoType $schedulingInfo)
    {
        $this->schedulingInfo = $schedulingInfo;
        return $this;
    }

    /**
     * Gets as storeOwner
     *
     * Boolean value indicates whether or not the seller is an eBay Store owner.
     *
     * @return bool
     */
    public function getStoreOwner()
    {
        return $this->storeOwner;
    }

    /**
     * Sets a new storeOwner
     *
     * Boolean value indicates whether or not the seller is an eBay Store owner.
     *
     * @param bool $storeOwner
     * @return self
     */
    public function setStoreOwner($storeOwner)
    {
        $this->storeOwner = $storeOwner;
        return $this;
    }

    /**
     * Gets as storeURL
     *
     * The URL for the seller's eBay Store. This field is only returned if the seller is a store
     *  owner. To determine if a seller is a Store owner, check for the <b>User.SellerInfo.StoreOwner</b>
     *  and a value of true. The eBay Stores domain that is returned in this field is based on the
     *  <b>SITEID</b> header that is passed in the request, and not on the user's
     *  registration address, as was the case prior to version 757. So, if the seller's
     *  registration county is the UK, but a <b>SITEID</b> value of 71 (France) is
     *  passed into the call, the eBay Stores domain that is returned would be stores.ebay.fr.
     *
     * @return string
     */
    public function getStoreURL()
    {
        return $this->storeURL;
    }

    /**
     * Sets a new storeURL
     *
     * The URL for the seller's eBay Store. This field is only returned if the seller is a store
     *  owner. To determine if a seller is a Store owner, check for the <b>User.SellerInfo.StoreOwner</b>
     *  and a value of true. The eBay Stores domain that is returned in this field is based on the
     *  <b>SITEID</b> header that is passed in the request, and not on the user's
     *  registration address, as was the case prior to version 757. So, if the seller's
     *  registration county is the UK, but a <b>SITEID</b> value of 71 (France) is
     *  passed into the call, the eBay Stores domain that is returned would be stores.ebay.fr.
     *
     * @param string $storeURL
     * @return self
     */
    public function setStoreURL($storeURL)
    {
        $this->storeURL = $storeURL;
        return $this;
    }

    /**
     * Gets as sellerBusinessType
     *
     * Type of seller account. This value is returned if the German
     *  (ID 77), UK (ID 3), Ireland (ID 205), or US eBay Motors (ID 0) sites are specified.
     *
     * @return string
     */
    public function getSellerBusinessType()
    {
        return $this->sellerBusinessType;
    }

    /**
     * Sets a new sellerBusinessType
     *
     * Type of seller account. This value is returned if the German
     *  (ID 77), UK (ID 3), Ireland (ID 205), or US eBay Motors (ID 0) sites are specified.
     *
     * @param string $sellerBusinessType
     * @return self
     */
    public function setSellerBusinessType($sellerBusinessType)
    {
        $this->sellerBusinessType = $sellerBusinessType;
        return $this;
    }

    /**
     * Gets as registeredBusinessSeller
     *
     * If true, the user is registered as a vehicle dealer on the eBay Motors site.
     *
     * @return bool
     */
    public function getRegisteredBusinessSeller()
    {
        return $this->registeredBusinessSeller;
    }

    /**
     * Sets a new registeredBusinessSeller
     *
     * If true, the user is registered as a vehicle dealer on the eBay Motors site.
     *
     * @param bool $registeredBusinessSeller
     * @return self
     */
    public function setRegisteredBusinessSeller($registeredBusinessSeller)
    {
        $this->registeredBusinessSeller = $registeredBusinessSeller;
        return $this;
    }

    /**
     * Gets as storeSite
     *
     * The site associated with the seller's eBay Store.
     *
     * @return string
     */
    public function getStoreSite()
    {
        return $this->storeSite;
    }

    /**
     * Sets a new storeSite
     *
     * The site associated with the seller's eBay Store.
     *
     * @param string $storeSite
     * @return self
     */
    public function setStoreSite($storeSite)
    {
        $this->storeSite = $storeSite;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * Indicates the method the seller selected to pay eBay with for
     *  the account.
     *  The payment methods vary from one eBay site to the next.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * Indicates the method the seller selected to pay eBay with for
     *  the account.
     *  The payment methods vary from one eBay site to the next.
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
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
     * Gets as charityRegistered
     *
     * Indicates whether or not the seller is a registered charity
     *  seller. If <b>CharityRegistered</b> is <code>false</code>, the user must
     *  register their nonprofit organization with the PayPal Giving Fund to list eBay for Charity items.
     *
     * @return bool
     */
    public function getCharityRegistered()
    {
        return $this->charityRegistered;
    }

    /**
     * Sets a new charityRegistered
     *
     * Indicates whether or not the seller is a registered charity
     *  seller. If <b>CharityRegistered</b> is <code>false</code>, the user must
     *  register their nonprofit organization with the PayPal Giving Fund to list eBay for Charity items.
     *
     * @param bool $charityRegistered
     * @return self
     */
    public function setCharityRegistered($charityRegistered)
    {
        $this->charityRegistered = $charityRegistered;
        return $this;
    }

    /**
     * Gets as safePaymentExempt
     *
     * If this field is <code>true</code>, the user is currently exempt from the requirement to offer at least
     *  one safe payment method (PayPal/PaisaPay or one of the credit cards specified
     *  in <b>Item.PaymentMethods</b>) when listing items. This value should only return <code>true</code>
     *  for sellers who registered before January 17, 2007. Otherwise, it should
     *  return <code>false</code>. This setting overrides both the site and category values for
     *  <b>SafePaymentRequired</b>.
     *
     * @return bool
     */
    public function getSafePaymentExempt()
    {
        return $this->safePaymentExempt;
    }

    /**
     * Sets a new safePaymentExempt
     *
     * If this field is <code>true</code>, the user is currently exempt from the requirement to offer at least
     *  one safe payment method (PayPal/PaisaPay or one of the credit cards specified
     *  in <b>Item.PaymentMethods</b>) when listing items. This value should only return <code>true</code>
     *  for sellers who registered before January 17, 2007. Otherwise, it should
     *  return <code>false</code>. This setting overrides both the site and category values for
     *  <b>SafePaymentRequired</b>.
     *
     * @param bool $safePaymentExempt
     * @return self
     */
    public function setSafePaymentExempt($safePaymentExempt)
    {
        $this->safePaymentExempt = $safePaymentExempt;
        return $this;
    }

    /**
     * Gets as paisaPayEscrowEMIStatus
     *
     * This field is deprecated since eBay India is no longer a functioning marketplace.
     *
     * @return int
     */
    public function getPaisaPayEscrowEMIStatus()
    {
        return $this->paisaPayEscrowEMIStatus;
    }

    /**
     * Sets a new paisaPayEscrowEMIStatus
     *
     * This field is deprecated since eBay India is no longer a functioning marketplace.
     *
     * @param int $paisaPayEscrowEMIStatus
     * @return self
     */
    public function setPaisaPayEscrowEMIStatus($paisaPayEscrowEMIStatus)
    {
        $this->paisaPayEscrowEMIStatus = $paisaPayEscrowEMIStatus;
        return $this;
    }

    /**
     * Adds as charityAffiliationDetail
     *
     * This container consists of one or more of nonprofit organizations associated with the seller's account. This container will not be returned if the user is not affiliated with any nonprofit organizations. A seller must be registered with the PayPal Giving Fund to be affiliated with an eBay for Charity nonprofit organization.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType $charityAffiliationDetail
     */
    public function addToCharityAffiliationDetails(\Nogrod\eBaySDK\Trading\CharityAffiliationDetailType $charityAffiliationDetail)
    {
        $this->charityAffiliationDetails[] = $charityAffiliationDetail;
        return $this;
    }

    /**
     * isset charityAffiliationDetails
     *
     * This container consists of one or more of nonprofit organizations associated with the seller's account. This container will not be returned if the user is not affiliated with any nonprofit organizations. A seller must be registered with the PayPal Giving Fund to be affiliated with an eBay for Charity nonprofit organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharityAffiliationDetails($index)
    {
        return isset($this->charityAffiliationDetails[$index]);
    }

    /**
     * unset charityAffiliationDetails
     *
     * This container consists of one or more of nonprofit organizations associated with the seller's account. This container will not be returned if the user is not affiliated with any nonprofit organizations. A seller must be registered with the PayPal Giving Fund to be affiliated with an eBay for Charity nonprofit organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharityAffiliationDetails($index)
    {
        unset($this->charityAffiliationDetails[$index]);
    }

    /**
     * Gets as charityAffiliationDetails
     *
     * This container consists of one or more of nonprofit organizations associated with the seller's account. This container will not be returned if the user is not affiliated with any nonprofit organizations. A seller must be registered with the PayPal Giving Fund to be affiliated with an eBay for Charity nonprofit organization.
     *
     * @return \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType[]
     */
    public function getCharityAffiliationDetails()
    {
        return $this->charityAffiliationDetails;
    }

    /**
     * Sets a new charityAffiliationDetails
     *
     * This container consists of one or more of nonprofit organizations associated with the seller's account. This container will not be returned if the user is not affiliated with any nonprofit organizations. A seller must be registered with the PayPal Giving Fund to be affiliated with an eBay for Charity nonprofit organization.
     *
     * @param \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType[] $charityAffiliationDetails
     * @return self
     */
    public function setCharityAffiliationDetails(array $charityAffiliationDetails)
    {
        $this->charityAffiliationDetails = $charityAffiliationDetails;
        return $this;
    }

    /**
     * Gets as transactionPercent
     *
     * Percentage of the number of times a member has sold successfully vs.
     *  the number of times a member has bought an item in the preceding 365 days.
     *
     * @return float
     */
    public function getTransactionPercent()
    {
        return $this->transactionPercent;
    }

    /**
     * Sets a new transactionPercent
     *
     * Percentage of the number of times a member has sold successfully vs.
     *  the number of times a member has bought an item in the preceding 365 days.
     *
     * @param float $transactionPercent
     * @return self
     */
    public function setTransactionPercent($transactionPercent)
    {
        $this->transactionPercent = $transactionPercent;
        return $this;
    }

    /**
     * Adds as supportedSite
     *
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *  This container is returned if the seller has a payment gateway account on one or more eBay marketplaces.
     *
     * @return self
     * @param string $supportedSite
     */
    public function addToIntegratedMerchantCreditCardInfo($supportedSite)
    {
        $this->integratedMerchantCreditCardInfo[] = $supportedSite;
        return $this;
    }

    /**
     * isset integratedMerchantCreditCardInfo
     *
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *  This container is returned if the seller has a payment gateway account on one or more eBay marketplaces.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntegratedMerchantCreditCardInfo($index)
    {
        return isset($this->integratedMerchantCreditCardInfo[$index]);
    }

    /**
     * unset integratedMerchantCreditCardInfo
     *
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *  This container is returned if the seller has a payment gateway account on one or more eBay marketplaces.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntegratedMerchantCreditCardInfo($index)
    {
        unset($this->integratedMerchantCreditCardInfo[$index]);
    }

    /**
     * Gets as integratedMerchantCreditCardInfo
     *
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *  This container is returned if the seller has a payment gateway account on one or more eBay marketplaces.
     *
     * @return string[]
     */
    public function getIntegratedMerchantCreditCardInfo()
    {
        return $this->integratedMerchantCreditCardInfo;
    }

    /**
     * Sets a new integratedMerchantCreditCardInfo
     *
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *  This container is returned if the seller has a payment gateway account on one or more eBay marketplaces.
     *
     * @param string $integratedMerchantCreditCardInfo
     * @return self
     */
    public function setIntegratedMerchantCreditCardInfo(array $integratedMerchantCreditCardInfo)
    {
        $this->integratedMerchantCreditCardInfo = $integratedMerchantCreditCardInfo;
        return $this;
    }

    /**
     * Gets as featureEligibility
     *
     * Contains eligibility details about seller- or platform-based features. This is returned only
     *  if IncludeFeatureEligibility is set to true in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\FeatureEligibilityType
     */
    public function getFeatureEligibility()
    {
        return $this->featureEligibility;
    }

    /**
     * Sets a new featureEligibility
     *
     * Contains eligibility details about seller- or platform-based features. This is returned only
     *  if IncludeFeatureEligibility is set to true in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\FeatureEligibilityType $featureEligibility
     * @return self
     */
    public function setFeatureEligibility(\Nogrod\eBaySDK\Trading\FeatureEligibilityType $featureEligibility)
    {
        $this->featureEligibility = $featureEligibility;
        return $this;
    }

    /**
     * Gets as topRatedSeller
     *
     * This boolean field indicates if the seller is certified as a
     *  <em>Top Rated Seller</em>. Only Top Rated Sellers can qualify for Top Rated Plus listings, which receive the Top Rated Plus seal, and will help those listings stand out. Top Rated Plus listings also receive a 20 percent discount on the Final Value Fee.
     *  <br/><br/>
     *  This field is only returned for the following sites: US (EBAY-US), Motors (EBAY-MOTOR), AT (EBAY-AT), CH (EBAY-CH), DE (EBAY-DE), IE (EBAY-IE), UK (EBAY-GB), and AU (EBAY-AU). The Top Rated Seller and Top Rated Plus listing requirements will differ by site. Below are some links to Help pages that discusss these requirements:
     *  <ul>
     *  <li>eBay US: <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a></li>
     *  <li>eBay US Motors: <a href="http://pages.ebay.com/help/sell/top-rated.html#becoming">Becoming a Top Rated Seller in Motors vehicles categories</a></li>
     *  <li>eBay UK/IE: <a href="http://pages.ebay.co.uk/help/sell/top-rated.html">eBay Top-rated Seller status and the eBay Premium Service</a></li>
     *  <li>eBay DE/AT/CH: <a href="http://pages.ebay.de/help/sell/top-rated/2.html">
     * Anforderungen fur den Verkaufer mit Top-Bewertung</a></li>
     *  <li>eBay AU: <a href="http://pages.ebay.com.au/help/sell/top-rated.html">
     * Becoming a Top Rated Seller and qualifying for eBay Premium Service</a></li>
     *  </ul>
     *  Top Rated Sellers, registered in the US, can qualify for Top Rated Seller programs in other countries as long as they meet the selling requirments in those countries. However, even if US sellers qualify for programs in other countries, they will not receive the Final Value Fee discount on sales in those countries. For more information, see the <a href="http://pages.ebay.com/help/sell/top-rated.html#qualifying">
     * Qualifying for Top Rated Seller status on other eBay sites</a> help topic.
     *
     * @return bool
     */
    public function getTopRatedSeller()
    {
        return $this->topRatedSeller;
    }

    /**
     * Sets a new topRatedSeller
     *
     * This boolean field indicates if the seller is certified as a
     *  <em>Top Rated Seller</em>. Only Top Rated Sellers can qualify for Top Rated Plus listings, which receive the Top Rated Plus seal, and will help those listings stand out. Top Rated Plus listings also receive a 20 percent discount on the Final Value Fee.
     *  <br/><br/>
     *  This field is only returned for the following sites: US (EBAY-US), Motors (EBAY-MOTOR), AT (EBAY-AT), CH (EBAY-CH), DE (EBAY-DE), IE (EBAY-IE), UK (EBAY-GB), and AU (EBAY-AU). The Top Rated Seller and Top Rated Plus listing requirements will differ by site. Below are some links to Help pages that discusss these requirements:
     *  <ul>
     *  <li>eBay US: <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a></li>
     *  <li>eBay US Motors: <a href="http://pages.ebay.com/help/sell/top-rated.html#becoming">Becoming a Top Rated Seller in Motors vehicles categories</a></li>
     *  <li>eBay UK/IE: <a href="http://pages.ebay.co.uk/help/sell/top-rated.html">eBay Top-rated Seller status and the eBay Premium Service</a></li>
     *  <li>eBay DE/AT/CH: <a href="http://pages.ebay.de/help/sell/top-rated/2.html">
     * Anforderungen fur den Verkaufer mit Top-Bewertung</a></li>
     *  <li>eBay AU: <a href="http://pages.ebay.com.au/help/sell/top-rated.html">
     * Becoming a Top Rated Seller and qualifying for eBay Premium Service</a></li>
     *  </ul>
     *  Top Rated Sellers, registered in the US, can qualify for Top Rated Seller programs in other countries as long as they meet the selling requirments in those countries. However, even if US sellers qualify for programs in other countries, they will not receive the Final Value Fee discount on sales in those countries. For more information, see the <a href="http://pages.ebay.com/help/sell/top-rated.html#qualifying">
     * Qualifying for Top Rated Seller status on other eBay sites</a> help topic.
     *
     * @param bool $topRatedSeller
     * @return self
     */
    public function setTopRatedSeller($topRatedSeller)
    {
        $this->topRatedSeller = $topRatedSeller;
        return $this;
    }

    /**
     * Adds as topRatedProgram
     *
     * Contains Top Rated Seller program details for the seller.
     *
     * @return self
     * @param string $topRatedProgram
     */
    public function addToTopRatedSellerDetails($topRatedProgram)
    {
        $this->topRatedSellerDetails[] = $topRatedProgram;
        return $this;
    }

    /**
     * isset topRatedSellerDetails
     *
     * Contains Top Rated Seller program details for the seller.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTopRatedSellerDetails($index)
    {
        return isset($this->topRatedSellerDetails[$index]);
    }

    /**
     * unset topRatedSellerDetails
     *
     * Contains Top Rated Seller program details for the seller.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTopRatedSellerDetails($index)
    {
        unset($this->topRatedSellerDetails[$index]);
    }

    /**
     * Gets as topRatedSellerDetails
     *
     * Contains Top Rated Seller program details for the seller.
     *
     * @return string[]
     */
    public function getTopRatedSellerDetails()
    {
        return $this->topRatedSellerDetails;
    }

    /**
     * Sets a new topRatedSellerDetails
     *
     * Contains Top Rated Seller program details for the seller.
     *
     * @param string $topRatedSellerDetails
     * @return self
     */
    public function setTopRatedSellerDetails(array $topRatedSellerDetails)
    {
        $this->topRatedSellerDetails = $topRatedSellerDetails;
        return $this;
    }

    /**
     * Adds as site
     *
     * The list of the sites where a seller has agreed to the cross-border recoupment terms.
     *  <br><br>
     *  Sellers who engage in cross-border trade on sites that require a recoupment agreement, must
     *  agree to the recoupment terms before adding items to the site. This agreement allows eBay to
     *  reimburse a buyer during a dispute and then recoup the cost from the seller.
     *
     * @return self
     * @param string $site
     */
    public function addToRecoupmentPolicyConsent($site)
    {
        $this->recoupmentPolicyConsent[] = $site;
        return $this;
    }

    /**
     * isset recoupmentPolicyConsent
     *
     * The list of the sites where a seller has agreed to the cross-border recoupment terms.
     *  <br><br>
     *  Sellers who engage in cross-border trade on sites that require a recoupment agreement, must
     *  agree to the recoupment terms before adding items to the site. This agreement allows eBay to
     *  reimburse a buyer during a dispute and then recoup the cost from the seller.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecoupmentPolicyConsent($index)
    {
        return isset($this->recoupmentPolicyConsent[$index]);
    }

    /**
     * unset recoupmentPolicyConsent
     *
     * The list of the sites where a seller has agreed to the cross-border recoupment terms.
     *  <br><br>
     *  Sellers who engage in cross-border trade on sites that require a recoupment agreement, must
     *  agree to the recoupment terms before adding items to the site. This agreement allows eBay to
     *  reimburse a buyer during a dispute and then recoup the cost from the seller.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecoupmentPolicyConsent($index)
    {
        unset($this->recoupmentPolicyConsent[$index]);
    }

    /**
     * Gets as recoupmentPolicyConsent
     *
     * The list of the sites where a seller has agreed to the cross-border recoupment terms.
     *  <br><br>
     *  Sellers who engage in cross-border trade on sites that require a recoupment agreement, must
     *  agree to the recoupment terms before adding items to the site. This agreement allows eBay to
     *  reimburse a buyer during a dispute and then recoup the cost from the seller.
     *
     * @return string[]
     */
    public function getRecoupmentPolicyConsent()
    {
        return $this->recoupmentPolicyConsent;
    }

    /**
     * Sets a new recoupmentPolicyConsent
     *
     * The list of the sites where a seller has agreed to the cross-border recoupment terms.
     *  <br><br>
     *  Sellers who engage in cross-border trade on sites that require a recoupment agreement, must
     *  agree to the recoupment terms before adding items to the site. This agreement allows eBay to
     *  reimburse a buyer during a dispute and then recoup the cost from the seller.
     *
     * @param string $recoupmentPolicyConsent
     * @return self
     */
    public function setRecoupmentPolicyConsent(array $recoupmentPolicyConsent)
    {
        $this->recoupmentPolicyConsent = $recoupmentPolicyConsent;
        return $this;
    }

    /**
     * Gets as domesticRateTable
     *
     * If true, the seller has configured a domestic shipping rate table on the DE, UK or US website.
     *
     * @return bool
     */
    public function getDomesticRateTable()
    {
        return $this->domesticRateTable;
    }

    /**
     * Sets a new domesticRateTable
     *
     * If true, the seller has configured a domestic shipping rate table on the DE, UK or US website.
     *
     * @param bool $domesticRateTable
     * @return self
     */
    public function setDomesticRateTable($domesticRateTable)
    {
        $this->domesticRateTable = $domesticRateTable;
        return $this;
    }

    /**
     * Gets as internationalRateTable
     *
     * If true, the seller has configured an international shipping rate table on the US, UK or DE website.
     *
     * @return bool
     */
    public function getInternationalRateTable()
    {
        return $this->internationalRateTable;
    }

    /**
     * Sets a new internationalRateTable
     *
     * If true, the seller has configured an international shipping rate table on the US, UK or DE website.
     *
     * @param bool $internationalRateTable
     * @return self
     */
    public function setInternationalRateTable($internationalRateTable)
    {
        $this->internationalRateTable = $internationalRateTable;
        return $this;
    }

    /**
     * Gets as sellereBayPaymentProcessStatus
     *
     * This field is no longer used.
     *
     * @return string
     */
    public function getSellereBayPaymentProcessStatus()
    {
        return $this->sellereBayPaymentProcessStatus;
    }

    /**
     * Sets a new sellereBayPaymentProcessStatus
     *
     * This field is no longer used.
     *
     * @param string $sellereBayPaymentProcessStatus
     * @return self
     */
    public function setSellereBayPaymentProcessStatus($sellereBayPaymentProcessStatus)
    {
        $this->sellereBayPaymentProcessStatus = $sellereBayPaymentProcessStatus;
        return $this;
    }

    /**
     * Gets as sellereBayPaymentProcessConsent
     *
     * This field is no longer used.
     *
     * @return \Nogrod\eBaySDK\Trading\SellereBayPaymentProcessConsentCodeType
     */
    public function getSellereBayPaymentProcessConsent()
    {
        return $this->sellereBayPaymentProcessConsent;
    }

    /**
     * Sets a new sellereBayPaymentProcessConsent
     *
     * This field is no longer used.
     *
     * @param \Nogrod\eBaySDK\Trading\SellereBayPaymentProcessConsentCodeType $sellereBayPaymentProcessConsent
     * @return self
     */
    public function setSellereBayPaymentProcessConsent(\Nogrod\eBaySDK\Trading\SellereBayPaymentProcessConsentCodeType $sellereBayPaymentProcessConsent)
    {
        $this->sellereBayPaymentProcessConsent = $sellereBayPaymentProcessConsent;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPaisaPayStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaisaPayStatus", $value);
        }
        $value = $this->getAllowPaymentEdit();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AllowPaymentEdit", $value);
        }
        $value = $this->getBillingCurrency();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BillingCurrency", $value);
        }
        $value = $this->getCheckoutEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutEnabled", $value);
        }
        $value = $this->getCIPBankAccountStored();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CIPBankAccountStored", $value);
        }
        $value = $this->getGoodStanding();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GoodStanding", $value);
        }
        $value = $this->getMerchandizingPref();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MerchandizingPref", $value);
        }
        $value = $this->getQualifiesForB2BVAT();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QualifiesForB2BVAT", $value);
        }
        $value = $this->getSellerGuaranteeLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerGuaranteeLevel", $value);
        }
        $value = $this->getSellerLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerLevel", $value);
        }
        $value = $this->getSellerPaymentAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerPaymentAddress", $value);
        }
        $value = $this->getSchedulingInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SchedulingInfo", $value);
        }
        $value = $this->getStoreOwner();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreOwner", $value);
        }
        $value = $this->getStoreURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreURL", $value);
        }
        $value = $this->getSellerBusinessType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerBusinessType", $value);
        }
        $value = $this->getRegisteredBusinessSeller();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegisteredBusinessSeller", $value);
        }
        $value = $this->getStoreSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreSite", $value);
        }
        $value = $this->getPaymentMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethod", $value);
        }
        $value = $this->getProStoresPreference();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProStoresPreference", $value);
        }
        $value = $this->getCharityRegistered();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityRegistered", $value);
        }
        $value = $this->getSafePaymentExempt();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SafePaymentExempt", $value);
        }
        $value = $this->getPaisaPayEscrowEMIStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaisaPayEscrowEMIStatus", $value);
        }
        $value = $this->getCharityAffiliationDetails();
        if (null !== $value && !empty($this->getCharityAffiliationDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityAffiliationDetails", array_map(function ($v) {
                return ["CharityAffiliationDetail" => $v];
            }, $value));
        }
        $value = $this->getTransactionPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionPercent", $value);
        }
        $value = $this->getIntegratedMerchantCreditCardInfo();
        if (null !== $value && !empty($this->getIntegratedMerchantCreditCardInfo())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardInfo", array_map(function ($v) {
                return ["SupportedSite" => $v];
            }, $value));
        }
        $value = $this->getFeatureEligibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeatureEligibility", $value);
        }
        $value = $this->getTopRatedSeller();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TopRatedSeller", $value);
        }
        $value = $this->getTopRatedSellerDetails();
        if (null !== $value && !empty($this->getTopRatedSellerDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TopRatedSellerDetails", array_map(function ($v) {
                return ["TopRatedProgram" => $v];
            }, $value));
        }
        $value = $this->getRecoupmentPolicyConsent();
        if (null !== $value && !empty($this->getRecoupmentPolicyConsent())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecoupmentPolicyConsent", array_map(function ($v) {
                return ["Site" => $v];
            }, $value));
        }
        $value = $this->getDomesticRateTable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticRateTable", $value);
        }
        $value = $this->getInternationalRateTable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalRateTable", $value);
        }
        $value = $this->getSellereBayPaymentProcessStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellereBayPaymentProcessStatus", $value);
        }
        $value = $this->getSellereBayPaymentProcessConsent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellereBayPaymentProcessConsent", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaisaPayStatus');
        if (null !== $value) {
            $this->setPaisaPayStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AllowPaymentEdit');
        if (null !== $value) {
            $this->setAllowPaymentEdit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BillingCurrency');
        if (null !== $value) {
            $this->setBillingCurrency($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutEnabled');
        if (null !== $value) {
            $this->setCheckoutEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CIPBankAccountStored');
        if (null !== $value) {
            $this->setCIPBankAccountStored($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GoodStanding');
        if (null !== $value) {
            $this->setGoodStanding($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MerchandizingPref');
        if (null !== $value) {
            $this->setMerchandizingPref($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QualifiesForB2BVAT');
        if (null !== $value) {
            $this->setQualifiesForB2BVAT($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerGuaranteeLevel');
        if (null !== $value) {
            $this->setSellerGuaranteeLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerLevel');
        if (null !== $value) {
            $this->setSellerLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerPaymentAddress');
        if (null !== $value) {
            $this->setSellerPaymentAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SchedulingInfo');
        if (null !== $value) {
            $this->setSchedulingInfo(\Nogrod\eBaySDK\Trading\SchedulingInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreOwner');
        if (null !== $value) {
            $this->setStoreOwner($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreURL');
        if (null !== $value) {
            $this->setStoreURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerBusinessType');
        if (null !== $value) {
            $this->setSellerBusinessType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegisteredBusinessSeller');
        if (null !== $value) {
            $this->setRegisteredBusinessSeller($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreSite');
        if (null !== $value) {
            $this->setStoreSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethod');
        if (null !== $value) {
            $this->setPaymentMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProStoresPreference');
        if (null !== $value) {
            $this->setProStoresPreference(\Nogrod\eBaySDK\Trading\ProStoresCheckoutPreferenceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityRegistered');
        if (null !== $value) {
            $this->setCharityRegistered($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SafePaymentExempt');
        if (null !== $value) {
            $this->setSafePaymentExempt($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaisaPayEscrowEMIStatus');
        if (null !== $value) {
            $this->setPaisaPayEscrowEMIStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityAffiliationDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setCharityAffiliationDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionPercent');
        if (null !== $value) {
            $this->setTransactionPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardInfo', true);
        if (null !== $value && !empty($value)) {
            $this->setIntegratedMerchantCreditCardInfo($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeatureEligibility');
        if (null !== $value) {
            $this->setFeatureEligibility(\Nogrod\eBaySDK\Trading\FeatureEligibilityType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TopRatedSeller');
        if (null !== $value) {
            $this->setTopRatedSeller($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TopRatedSellerDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setTopRatedSellerDetails($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecoupmentPolicyConsent', true);
        if (null !== $value && !empty($value)) {
            $this->setRecoupmentPolicyConsent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticRateTable');
        if (null !== $value) {
            $this->setDomesticRateTable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRateTable');
        if (null !== $value) {
            $this->setInternationalRateTable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellereBayPaymentProcessStatus');
        if (null !== $value) {
            $this->setSellereBayPaymentProcessStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellereBayPaymentProcessConsent');
        if (null !== $value) {
            $this->setSellereBayPaymentProcessConsent(\Nogrod\eBaySDK\Trading\SellereBayPaymentProcessConsentCodeType::fromKeyValue($value));
        }
    }
}
