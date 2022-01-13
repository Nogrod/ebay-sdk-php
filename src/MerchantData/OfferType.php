<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OfferType
 *
 * Contains information pertaining to an offer made on an item listing and
 *  the current bidding or purchase state of the listing.
 * XSD Type: OfferType
 */
class OfferType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the type of offer being made on the specified listing.
     *  If the item is Best Offer-enabled and the buyer
     *  makes a Best Offer (or a counter offer), then after
     *  the <b>PlaceOffer</b> call,
     *  the buyer can get the status of the Best Offer
     *  (and a seller-counter-offer, etc.)
     *  using the <b>GetBestOffers</b> call. See the
     *  <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Feature-BestOffer.html">eBay Features Guide</a>
     *  for information about Best Offer-enabled listings and about <b>GetBestOffers</b>.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * Three-digit currency code for the currency used for the auction. Valid values can
     *  be viewed in the <b>CurrencyCodeType</b> code list.
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * The unique identifier of an eBay listing item listed on the eBay site.
     *  Returned by eBay when the item is created.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Amount of the offer placed. For auction listings, the amount
     *  bid on the item (subject to outbid by other buyers). For fixed-price
     *  listings, the fixed sale price at which the item is purchased. For
     *  auction listings with an active Buy It Now option, this amount
     *  will be either the Buy It Now price for purchase or the amount of a bid,
     *  depending on the offer type (as specified in <b>Action</b>). For <b>PlaceOffer</b>,
     *  the <b>CurrencyID</b> attribute is ignored if provided. Regarding Value-Added Tax (VAT):
     *  Even if VAT applies, you do not need to add VAT to the <b>MaxBid</b> value.
     *  If VAT applies to the listing, the seller can specify a VAT percent value
     *  when they list the item.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $maxBid
     */
    private $maxBid = null;

    /**
     * <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     *
     * @var \Nogrod\eBaySDK\MerchantData\OfferDiscountsType $discounts
     */
    private $discounts = null;

    /**
     * Specifies the quantity of items from the specified listing that the user tendering the offer intends to purchase, bid on, or make a Best Offer on. For auctions, the value is always <b>1 </b>. For multiple-quantity listings, this value must be greater than zero but not exceeding the quantity available for sale in the listing.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Indicates the user's preference to accept second chance offers. If <code>true</code>,
     *  the user is willing to be the recipient of second chance offers.
     *
     * @var bool $secondChanceEnabled
     */
    private $secondChanceEnabled = null;

    /**
     * Unique ID identifying the currency in which the localized offer amounts are
     *  expressed.
     *
     * @var string $siteCurrency
     */
    private $siteCurrency = null;

    /**
     * Timestamp indicating the date and time that the bid was placed.
     *
     * @var \DateTime $timeBid
     */
    private $timeBid = null;

    /**
     * This amount indicates the highest bid that the corresponding bidder has made on the auction item. If that specific bidder has only made one bid on the auction listing, this value will be the same value as in the <b>MaxBid</b> field, but if the bidder has made multiple bids on the auction item, the <b>HighestBid</b> will show the highest of the bidder's bids, but <b>MaxBid</b> will show the value of the corresponding bid.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $highestBid
     */
    private $highestBid = null;

    /**
     * Dollar amount of the bid in the user's currency. This field is always returned but its amount will be the same as the value in the <b>MaxBid</b> field, unless currency conversion was actually performed.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $convertedPrice
     */
    private $convertedPrice = null;

    /**
     * The unique identifier of the order line item (transaction). An order line item
     *  is created when a winning bidder commits to purchasing an
     *  item.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * This container consists of detailed information on the user that made the bid. Some information in this container will be masked unless the call is made by the owner of the listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\UserType $user
     */
    private $user = null;

    /**
     * If <code>true</code>, confirms that the bidder read and agrees to eBay's
     *  privacy policy. Applies if the subject item is in a category
     *  that requires user consent. If user consent, which is
     *  confirmation that a bidder read and agrees to eBay's privacy
     *  policy, is required for a category that the subject item is in,
     *  this value must be <code>true</code> for a bid to occur.
     *
     * @var bool $userConsent
     */
    private $userConsent = null;

    /**
     * This field is deprecated.
     *
     * @var int $bidCount
     */
    private $bidCount = null;

    /**
     * A message from the buyer to the seller. Applies if the buyer
     *  is using <b>PlaceOffer</b> to perform a Best Offer-related
     *  action (Best Offer, Counter Offer, etc.).
     *
     * @var string $message
     */
    private $message = null;

    /**
     * The unique identifier of a Best Offer on an item. This value must be specified as input to <b>PlaceOffer</b> if a
     *  buyer is performing any action against a Best Offer or Counter Offer.
     *
     * @var string $bestOfferID
     */
    private $bestOfferID = null;

    /**
     * The maximum bid placed by the user making the call. This field is only returned if the corresponding bid was made by the user making the call.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $myMaxBid
     */
    private $myMaxBid = null;

    /**
     * Gets as action
     *
     * Indicates the type of offer being made on the specified listing.
     *  If the item is Best Offer-enabled and the buyer
     *  makes a Best Offer (or a counter offer), then after
     *  the <b>PlaceOffer</b> call,
     *  the buyer can get the status of the Best Offer
     *  (and a seller-counter-offer, etc.)
     *  using the <b>GetBestOffers</b> call. See the
     *  <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Feature-BestOffer.html">eBay Features Guide</a>
     *  for information about Best Offer-enabled listings and about <b>GetBestOffers</b>.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Indicates the type of offer being made on the specified listing.
     *  If the item is Best Offer-enabled and the buyer
     *  makes a Best Offer (or a counter offer), then after
     *  the <b>PlaceOffer</b> call,
     *  the buyer can get the status of the Best Offer
     *  (and a seller-counter-offer, etc.)
     *  using the <b>GetBestOffers</b> call. See the
     *  <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Feature-BestOffer.html">eBay Features Guide</a>
     *  for information about Best Offer-enabled listings and about <b>GetBestOffers</b>.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as currency
     *
     * Three-digit currency code for the currency used for the auction. Valid values can
     *  be viewed in the <b>CurrencyCodeType</b> code list.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Three-digit currency code for the currency used for the auction. Valid values can
     *  be viewed in the <b>CurrencyCodeType</b> code list.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of an eBay listing item listed on the eBay site.
     *  Returned by eBay when the item is created.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of an eBay listing item listed on the eBay site.
     *  Returned by eBay when the item is created.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as maxBid
     *
     * Amount of the offer placed. For auction listings, the amount
     *  bid on the item (subject to outbid by other buyers). For fixed-price
     *  listings, the fixed sale price at which the item is purchased. For
     *  auction listings with an active Buy It Now option, this amount
     *  will be either the Buy It Now price for purchase or the amount of a bid,
     *  depending on the offer type (as specified in <b>Action</b>). For <b>PlaceOffer</b>,
     *  the <b>CurrencyID</b> attribute is ignored if provided. Regarding Value-Added Tax (VAT):
     *  Even if VAT applies, you do not need to add VAT to the <b>MaxBid</b> value.
     *  If VAT applies to the listing, the seller can specify a VAT percent value
     *  when they list the item.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getMaxBid()
    {
        return $this->maxBid;
    }

    /**
     * Sets a new maxBid
     *
     * Amount of the offer placed. For auction listings, the amount
     *  bid on the item (subject to outbid by other buyers). For fixed-price
     *  listings, the fixed sale price at which the item is purchased. For
     *  auction listings with an active Buy It Now option, this amount
     *  will be either the Buy It Now price for purchase or the amount of a bid,
     *  depending on the offer type (as specified in <b>Action</b>). For <b>PlaceOffer</b>,
     *  the <b>CurrencyID</b> attribute is ignored if provided. Regarding Value-Added Tax (VAT):
     *  Even if VAT applies, you do not need to add VAT to the <b>MaxBid</b> value.
     *  If VAT applies to the listing, the seller can specify a VAT percent value
     *  when they list the item.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $maxBid
     * @return self
     */
    public function setMaxBid(\Nogrod\eBaySDK\MerchantData\AmountType $maxBid)
    {
        $this->maxBid = $maxBid;
        return $this;
    }

    /**
     * Gets as discounts
     *
     * <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OfferDiscountsType
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Sets a new discounts
     *
     * <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     *
     * @param \Nogrod\eBaySDK\MerchantData\OfferDiscountsType $discounts
     * @return self
     */
    public function setDiscounts(\Nogrod\eBaySDK\MerchantData\OfferDiscountsType $discounts)
    {
        $this->discounts = $discounts;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Specifies the quantity of items from the specified listing that the user tendering the offer intends to purchase, bid on, or make a Best Offer on. For auctions, the value is always <b>1 </b>. For multiple-quantity listings, this value must be greater than zero but not exceeding the quantity available for sale in the listing.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Specifies the quantity of items from the specified listing that the user tendering the offer intends to purchase, bid on, or make a Best Offer on. For auctions, the value is always <b>1 </b>. For multiple-quantity listings, this value must be greater than zero but not exceeding the quantity available for sale in the listing.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as secondChanceEnabled
     *
     * Indicates the user's preference to accept second chance offers. If <code>true</code>,
     *  the user is willing to be the recipient of second chance offers.
     *
     * @return bool
     */
    public function getSecondChanceEnabled()
    {
        return $this->secondChanceEnabled;
    }

    /**
     * Sets a new secondChanceEnabled
     *
     * Indicates the user's preference to accept second chance offers. If <code>true</code>,
     *  the user is willing to be the recipient of second chance offers.
     *
     * @param bool $secondChanceEnabled
     * @return self
     */
    public function setSecondChanceEnabled($secondChanceEnabled)
    {
        $this->secondChanceEnabled = $secondChanceEnabled;
        return $this;
    }

    /**
     * Gets as siteCurrency
     *
     * Unique ID identifying the currency in which the localized offer amounts are
     *  expressed.
     *
     * @return string
     */
    public function getSiteCurrency()
    {
        return $this->siteCurrency;
    }

    /**
     * Sets a new siteCurrency
     *
     * Unique ID identifying the currency in which the localized offer amounts are
     *  expressed.
     *
     * @param string $siteCurrency
     * @return self
     */
    public function setSiteCurrency($siteCurrency)
    {
        $this->siteCurrency = $siteCurrency;
        return $this;
    }

    /**
     * Gets as timeBid
     *
     * Timestamp indicating the date and time that the bid was placed.
     *
     * @return \DateTime
     */
    public function getTimeBid()
    {
        return $this->timeBid;
    }

    /**
     * Sets a new timeBid
     *
     * Timestamp indicating the date and time that the bid was placed.
     *
     * @param \DateTime $timeBid
     * @return self
     */
    public function setTimeBid(\DateTime $timeBid)
    {
        $this->timeBid = $timeBid;
        return $this;
    }

    /**
     * Gets as highestBid
     *
     * This amount indicates the highest bid that the corresponding bidder has made on the auction item. If that specific bidder has only made one bid on the auction listing, this value will be the same value as in the <b>MaxBid</b> field, but if the bidder has made multiple bids on the auction item, the <b>HighestBid</b> will show the highest of the bidder's bids, but <b>MaxBid</b> will show the value of the corresponding bid.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getHighestBid()
    {
        return $this->highestBid;
    }

    /**
     * Sets a new highestBid
     *
     * This amount indicates the highest bid that the corresponding bidder has made on the auction item. If that specific bidder has only made one bid on the auction listing, this value will be the same value as in the <b>MaxBid</b> field, but if the bidder has made multiple bids on the auction item, the <b>HighestBid</b> will show the highest of the bidder's bids, but <b>MaxBid</b> will show the value of the corresponding bid.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $highestBid
     * @return self
     */
    public function setHighestBid(\Nogrod\eBaySDK\MerchantData\AmountType $highestBid)
    {
        $this->highestBid = $highestBid;
        return $this;
    }

    /**
     * Gets as convertedPrice
     *
     * Dollar amount of the bid in the user's currency. This field is always returned but its amount will be the same as the value in the <b>MaxBid</b> field, unless currency conversion was actually performed.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getConvertedPrice()
    {
        return $this->convertedPrice;
    }

    /**
     * Sets a new convertedPrice
     *
     * Dollar amount of the bid in the user's currency. This field is always returned but its amount will be the same as the value in the <b>MaxBid</b> field, unless currency conversion was actually performed.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $convertedPrice
     * @return self
     */
    public function setConvertedPrice(\Nogrod\eBaySDK\MerchantData\AmountType $convertedPrice)
    {
        $this->convertedPrice = $convertedPrice;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * The unique identifier of the order line item (transaction). An order line item
     *  is created when a winning bidder commits to purchasing an
     *  item.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * The unique identifier of the order line item (transaction). An order line item
     *  is created when a winning bidder commits to purchasing an
     *  item.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as user
     *
     * This container consists of detailed information on the user that made the bid. Some information in this container will be masked unless the call is made by the owner of the listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * This container consists of detailed information on the user that made the bid. Some information in this container will be masked unless the call is made by the owner of the listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\UserType $user
     * @return self
     */
    public function setUser(\Nogrod\eBaySDK\MerchantData\UserType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as userConsent
     *
     * If <code>true</code>, confirms that the bidder read and agrees to eBay's
     *  privacy policy. Applies if the subject item is in a category
     *  that requires user consent. If user consent, which is
     *  confirmation that a bidder read and agrees to eBay's privacy
     *  policy, is required for a category that the subject item is in,
     *  this value must be <code>true</code> for a bid to occur.
     *
     * @return bool
     */
    public function getUserConsent()
    {
        return $this->userConsent;
    }

    /**
     * Sets a new userConsent
     *
     * If <code>true</code>, confirms that the bidder read and agrees to eBay's
     *  privacy policy. Applies if the subject item is in a category
     *  that requires user consent. If user consent, which is
     *  confirmation that a bidder read and agrees to eBay's privacy
     *  policy, is required for a category that the subject item is in,
     *  this value must be <code>true</code> for a bid to occur.
     *
     * @param bool $userConsent
     * @return self
     */
    public function setUserConsent($userConsent)
    {
        $this->userConsent = $userConsent;
        return $this;
    }

    /**
     * Gets as bidCount
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getBidCount()
    {
        return $this->bidCount;
    }

    /**
     * Sets a new bidCount
     *
     * This field is deprecated.
     *
     * @param int $bidCount
     * @return self
     */
    public function setBidCount($bidCount)
    {
        $this->bidCount = $bidCount;
        return $this;
    }

    /**
     * Gets as message
     *
     * A message from the buyer to the seller. Applies if the buyer
     *  is using <b>PlaceOffer</b> to perform a Best Offer-related
     *  action (Best Offer, Counter Offer, etc.).
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * A message from the buyer to the seller. Applies if the buyer
     *  is using <b>PlaceOffer</b> to perform a Best Offer-related
     *  action (Best Offer, Counter Offer, etc.).
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as bestOfferID
     *
     * The unique identifier of a Best Offer on an item. This value must be specified as input to <b>PlaceOffer</b> if a
     *  buyer is performing any action against a Best Offer or Counter Offer.
     *
     * @return string
     */
    public function getBestOfferID()
    {
        return $this->bestOfferID;
    }

    /**
     * Sets a new bestOfferID
     *
     * The unique identifier of a Best Offer on an item. This value must be specified as input to <b>PlaceOffer</b> if a
     *  buyer is performing any action against a Best Offer or Counter Offer.
     *
     * @param string $bestOfferID
     * @return self
     */
    public function setBestOfferID($bestOfferID)
    {
        $this->bestOfferID = $bestOfferID;
        return $this;
    }

    /**
     * Gets as myMaxBid
     *
     * The maximum bid placed by the user making the call. This field is only returned if the corresponding bid was made by the user making the call.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getMyMaxBid()
    {
        return $this->myMaxBid;
    }

    /**
     * Sets a new myMaxBid
     *
     * The maximum bid placed by the user making the call. This field is only returned if the corresponding bid was made by the user making the call.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $myMaxBid
     * @return self
     */
    public function setMyMaxBid(\Nogrod\eBaySDK\MerchantData\AmountType $myMaxBid)
    {
        $this->myMaxBid = $myMaxBid;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Action", $value);
        }
        $value = $this->getCurrency();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Currency", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getMaxBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxBid", $value);
        }
        $value = $this->getDiscounts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Discounts", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getSecondChanceEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondChanceEnabled", $value);
        }
        $value = $this->getSiteCurrency();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteCurrency", $value);
        }
        $value = $this->getTimeBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeBid", $value);
        }
        $value = $this->getHighestBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HighestBid", $value);
        }
        $value = $this->getConvertedPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedPrice", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getUser();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}User", $value);
        }
        $value = $this->getUserConsent();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserConsent", $value);
        }
        $value = $this->getBidCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidCount", $value);
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Message", $value);
        }
        $value = $this->getBestOfferID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferID", $value);
        }
        $value = $this->getMyMaxBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MyMaxBid", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Action');
        if (null !== $value) {
            $this->setAction($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Currency');
        if (null !== $value) {
            $this->setCurrency($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxBid');
        if (null !== $value) {
            $this->setMaxBid(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Discounts');
        if (null !== $value) {
            $this->setDiscounts(\Nogrod\eBaySDK\MerchantData\OfferDiscountsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceEnabled');
        if (null !== $value) {
            $this->setSecondChanceEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteCurrency');
        if (null !== $value) {
            $this->setSiteCurrency($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeBid');
        if (null !== $value) {
            $this->setTimeBid(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HighestBid');
        if (null !== $value) {
            $this->setHighestBid(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedPrice');
        if (null !== $value) {
            $this->setConvertedPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}User');
        if (null !== $value) {
            $this->setUser(\Nogrod\eBaySDK\MerchantData\UserType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserConsent');
        if (null !== $value) {
            $this->setUserConsent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidCount');
        if (null !== $value) {
            $this->setBidCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Message');
        if (null !== $value) {
            $this->setMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferID');
        if (null !== $value) {
            $this->setBestOfferID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MyMaxBid');
        if (null !== $value) {
            $this->setMyMaxBid(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }
}
