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
     * <br>
     *  Indicates whether the seller allows buyers to edit the
     *  total cost of an item during checkout.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This flag indicates whether or not the seller's Checkout Enabled preference is turned on.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $checkoutEnabled
     */
    private $checkoutEnabled = null;

    /**
     * <br>
     *  This boolean field indicates whether or not the seller has stored bank account information on file with eBay.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $cIPBankAccountStored
     */
    private $cIPBankAccountStored = null;

    /**
     * <br>
     *  This boolean field indicates whether or not the seller is in good standing with eBay.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  Indicates whether the user is subject to VAT. Users who have registered with
     *  eBay as VAT-exempt are not subject to VAT.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This enumeration value indicates the user's eBay PowerSeller tier.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * Container for scheduling limits for the user. Conveys the minimum and maximum minutes the user may schedule listings in advance, as well as the maximum number of items the user may schedule at any given time.
     *
     * @var \Nogrod\eBaySDK\Trading\SchedulingInfoType $schedulingInfo
     */
    private $schedulingInfo = null;

    /**
     * <br>
     *  Boolean value indicates whether or not the seller is an eBay Store owner.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $storeOwner
     */
    private $storeOwner = null;

    /**
     * <br>
     *  The URL for the seller's eBay Store. This field is only returned if the seller is a store owner (look for a value of <code>true</code> in the <b>SellerInfo.StoreOwner</b> field).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var string $storeURL
     */
    private $storeURL = null;

    /**
     * This enumeration value indicates the type of eBay account used by the seller.
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
     * This enumeration value indicates the eBay marketplace hosting the seller's eBay Store.
     *
     * @var string $storeSite
     */
    private $storeSite = null;

    /**
     * This enumeration value indicates the default payment method that the seller is using to pay eBay fees.
     *
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * Indicates whether or not the seller is a registered charity
     *  seller. If <b>CharityRegistered</b> is <code>false</code>, the user must
     *  register their nonprofit organization with the PayPal Giving Fund to list eBay for Charity items.
     *
     * @var bool $charityRegistered
     */
    private $charityRegistered = null;

    /**
     * <br>
     *  If this field is <code>true</code>, the user is exempt from the requirement to offer at least one safe payment method when listing items.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $safePaymentExempt
     */
    private $safePaymentExempt = null;

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
     * Contains eligibility details about seller- or platform-based features. This is returned only
     *  if the <b>IncludeFeatureEligibility</b> field is included and set to <code>true</code> in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\FeatureEligibilityType $featureEligibility
     */
    private $featureEligibility = null;

    /**
     * This boolean field indicates if the seller is certified as a
     *  <em>Top Rated Seller</em>. Only Top Rated Sellers can qualify for Top Rated Plus listings, which receive the Top Rated Plus seal and other benefits.
     *  <br/>
     *  This field is only returned for the following sites: US, Germany, Austria, Switzerland, UK, Ireland, and Australia. The Top Rated Seller and Top Rated Plus listing requirements will differ by site. Below are some links to Help pages that discuss these requirements:
     *  <ul>
     *  <li>eBay US: <a href="https://www.ebay.com/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">Requirements to become Top Rated</a></li>
     *  <li>eBay UK/IE: <a href="https://www.ebay.co.uk/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">Requirements to become Top Rated and the eBay Premium Service</a></li>
     *  <li>eBay DE/AT/CH: <a href="https://pages.ebay.de/help/sell/top-rated/2.html">
     * Anforderungen fur den Verkaufer mit Top-Bewertung</a></li>
     *  <li>eBay AU: <a href="https://www.ebay.com.au/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">
     * Requirements to become Top Rated</a></li>
     *  </ul>
     *  Top Rated Sellers, registered in the US, can qualify for Top Rated Seller programs in other countries as long as they meet the selling requirements in those countries. However, even if US sellers qualify for programs in other countries, they will not receive the Final Value Fee discount on sales in those countries.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * A returned value of <code>true</code> indicates that the seller has configured a default, domestic shipping rate table in their My eBay shipping preferences.
     *
     * @var bool $domesticRateTable
     */
    private $domesticRateTable = null;

    /**
     * A returned value of <code>true</code> indicates that the seller has configured a default, international shipping rate table in their My eBay shipping preferences.
     *
     * @var bool $internationalRateTable
     */
    private $internationalRateTable = null;

    /**
     * Gets as allowPaymentEdit
     *
     * <br>
     *  Indicates whether the seller allows buyers to edit the
     *  total cost of an item during checkout.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  Indicates whether the seller allows buyers to edit the
     *  total cost of an item during checkout.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This flag indicates whether or not the seller's Checkout Enabled preference is turned on.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
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
     * <br>
     *  This flag indicates whether or not the seller's Checkout Enabled preference is turned on.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
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
     * Gets as cIPBankAccountStored
     *
     * <br>
     *  This boolean field indicates whether or not the seller has stored bank account information on file with eBay.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This boolean field indicates whether or not the seller has stored bank account information on file with eBay.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This boolean field indicates whether or not the seller is in good standing with eBay.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This boolean field indicates whether or not the seller is in good standing with eBay.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  Indicates whether the user is subject to VAT. Users who have registered with
     *  eBay as VAT-exempt are not subject to VAT.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  Indicates whether the user is subject to VAT. Users who have registered with
     *  eBay as VAT-exempt are not subject to VAT.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This enumeration value indicates the user's eBay PowerSeller tier.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This enumeration value indicates the user's eBay PowerSeller tier.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * Container for scheduling limits for the user. Conveys the minimum and maximum minutes the user may schedule listings in advance, as well as the maximum number of items the user may schedule at any given time.
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
     * Container for scheduling limits for the user. Conveys the minimum and maximum minutes the user may schedule listings in advance, as well as the maximum number of items the user may schedule at any given time.
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
     * <br>
     *  Boolean value indicates whether or not the seller is an eBay Store owner.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  Boolean value indicates whether or not the seller is an eBay Store owner.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  The URL for the seller's eBay Store. This field is only returned if the seller is a store owner (look for a value of <code>true</code> in the <b>SellerInfo.StoreOwner</b> field).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  The URL for the seller's eBay Store. This field is only returned if the seller is a store owner (look for a value of <code>true</code> in the <b>SellerInfo.StoreOwner</b> field).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * This enumeration value indicates the type of eBay account used by the seller.
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
     * This enumeration value indicates the type of eBay account used by the seller.
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
     * This enumeration value indicates the eBay marketplace hosting the seller's eBay Store.
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
     * This enumeration value indicates the eBay marketplace hosting the seller's eBay Store.
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
     * This enumeration value indicates the default payment method that the seller is using to pay eBay fees.
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
     * This enumeration value indicates the default payment method that the seller is using to pay eBay fees.
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
     * <br>
     *  If this field is <code>true</code>, the user is exempt from the requirement to offer at least one safe payment method when listing items.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  If this field is <code>true</code>, the user is exempt from the requirement to offer at least one safe payment method when listing items.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * Gets as featureEligibility
     *
     * Contains eligibility details about seller- or platform-based features. This is returned only
     *  if the <b>IncludeFeatureEligibility</b> field is included and set to <code>true</code> in the request.
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
     *  if the <b>IncludeFeatureEligibility</b> field is included and set to <code>true</code> in the request.
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
     *  <em>Top Rated Seller</em>. Only Top Rated Sellers can qualify for Top Rated Plus listings, which receive the Top Rated Plus seal and other benefits.
     *  <br/>
     *  This field is only returned for the following sites: US, Germany, Austria, Switzerland, UK, Ireland, and Australia. The Top Rated Seller and Top Rated Plus listing requirements will differ by site. Below are some links to Help pages that discuss these requirements:
     *  <ul>
     *  <li>eBay US: <a href="https://www.ebay.com/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">Requirements to become Top Rated</a></li>
     *  <li>eBay UK/IE: <a href="https://www.ebay.co.uk/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">Requirements to become Top Rated and the eBay Premium Service</a></li>
     *  <li>eBay DE/AT/CH: <a href="https://pages.ebay.de/help/sell/top-rated/2.html">
     * Anforderungen fur den Verkaufer mit Top-Bewertung</a></li>
     *  <li>eBay AU: <a href="https://www.ebay.com.au/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">
     * Requirements to become Top Rated</a></li>
     *  </ul>
     *  Top Rated Sellers, registered in the US, can qualify for Top Rated Seller programs in other countries as long as they meet the selling requirements in those countries. However, even if US sellers qualify for programs in other countries, they will not receive the Final Value Fee discount on sales in those countries.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     *  <em>Top Rated Seller</em>. Only Top Rated Sellers can qualify for Top Rated Plus listings, which receive the Top Rated Plus seal and other benefits.
     *  <br/>
     *  This field is only returned for the following sites: US, Germany, Austria, Switzerland, UK, Ireland, and Australia. The Top Rated Seller and Top Rated Plus listing requirements will differ by site. Below are some links to Help pages that discuss these requirements:
     *  <ul>
     *  <li>eBay US: <a href="https://www.ebay.com/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">Requirements to become Top Rated</a></li>
     *  <li>eBay UK/IE: <a href="https://www.ebay.co.uk/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">Requirements to become Top Rated and the eBay Premium Service</a></li>
     *  <li>eBay DE/AT/CH: <a href="https://pages.ebay.de/help/sell/top-rated/2.html">
     * Anforderungen fur den Verkaufer mit Top-Bewertung</a></li>
     *  <li>eBay AU: <a href="https://www.ebay.com.au/help/policies/selling-policies/seller-standards-policy?id=4347&#section3">
     * Requirements to become Top Rated</a></li>
     *  </ul>
     *  Top Rated Sellers, registered in the US, can qualify for Top Rated Seller programs in other countries as long as they meet the selling requirements in those countries. However, even if US sellers qualify for programs in other countries, they will not receive the Final Value Fee discount on sales in those countries.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>SellerInfo</b> container and its child fields will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * A returned value of <code>true</code> indicates that the seller has configured a default, domestic shipping rate table in their My eBay shipping preferences.
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
     * A returned value of <code>true</code> indicates that the seller has configured a default, domestic shipping rate table in their My eBay shipping preferences.
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
     * A returned value of <code>true</code> indicates that the seller has configured a default, international shipping rate table in their My eBay shipping preferences.
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
     * A returned value of <code>true</code> indicates that the seller has configured a default, international shipping rate table in their My eBay shipping preferences.
     *
     * @param bool $internationalRateTable
     * @return self
     */
    public function setInternationalRateTable($internationalRateTable)
    {
        $this->internationalRateTable = $internationalRateTable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
        $value = $this->getCharityAffiliationDetails();
        if (null !== $value && [] !== $this->getCharityAffiliationDetails()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityAffiliationDetails", array_map(function ($v) {return ["CharityAffiliationDetail" => $v];}, $value));
        }
        $value = $this->getTransactionPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionPercent", $value);
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
        if (null !== $value && [] !== $this->getTopRatedSellerDetails()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TopRatedSellerDetails", array_map(function ($v) {return ["TopRatedProgram" => $v];}, $value));
        }
        $value = $this->getRecoupmentPolicyConsent();
        if (null !== $value && [] !== $this->getRecoupmentPolicyConsent()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecoupmentPolicyConsent", array_map(function ($v) {return ["Site" => $v];}, $value));
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
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SellerType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AllowPaymentEdit');
        if (null !== $value) {
            $this->setAllowPaymentEdit(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BillingCurrency');
        if (null !== $value) {
            $this->setBillingCurrency($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutEnabled');
        if (null !== $value) {
            $this->setCheckoutEnabled(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CIPBankAccountStored');
        if (null !== $value) {
            $this->setCIPBankAccountStored(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}GoodStanding');
        if (null !== $value) {
            $this->setGoodStanding(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MerchandizingPref');
        if (null !== $value) {
            $this->setMerchandizingPref($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}QualifiesForB2BVAT');
        if (null !== $value) {
            $this->setQualifiesForB2BVAT(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerGuaranteeLevel');
        if (null !== $value) {
            $this->setSellerGuaranteeLevel($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerLevel');
        if (null !== $value) {
            $this->setSellerLevel($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerPaymentAddress');
        if (null !== $value) {
            $this->setSellerPaymentAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SchedulingInfo');
        if (null !== $value) {
            $this->setSchedulingInfo(\Nogrod\eBaySDK\Trading\SchedulingInfoType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreOwner');
        if (null !== $value) {
            $this->setStoreOwner(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreURL');
        if (null !== $value) {
            $this->setStoreURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerBusinessType');
        if (null !== $value) {
            $this->setSellerBusinessType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegisteredBusinessSeller');
        if (null !== $value) {
            $this->setRegisteredBusinessSeller(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreSite');
        if (null !== $value) {
            $this->setStoreSite($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethod');
        if (null !== $value) {
            $this->setPaymentMethod($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityRegistered');
        if (null !== $value) {
            $this->setCharityRegistered(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SafePaymentExempt');
        if (null !== $value) {
            $this->setSafePaymentExempt(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityAffiliationDetails');
        if (null !== $value) {
            $this->setCharityAffiliationDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}CharityAffiliationDetail'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionPercent');
        if (null !== $value) {
            $this->setTransactionPercent($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeatureEligibility');
        if (null !== $value) {
            $this->setFeatureEligibility(\Nogrod\eBaySDK\Trading\FeatureEligibilityType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TopRatedSeller');
        if (null !== $value) {
            $this->setTopRatedSeller(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TopRatedSellerDetails', true);
        if (null !== $value) {
            $this->setTopRatedSellerDetails(array_map(function ($v) {return Func::mapValue($v, '{urn:ebay:apis:eBLBaseComponents}TopRatedProgram');}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecoupmentPolicyConsent', true);
        if (null !== $value) {
            $this->setRecoupmentPolicyConsent(array_map(function ($v) {return Func::mapValue($v, '{urn:ebay:apis:eBLBaseComponents}Site');}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticRateTable');
        if (null !== $value) {
            $this->setDomesticRateTable(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRateTable');
        if (null !== $value) {
            $this->setInternationalRateTable(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
