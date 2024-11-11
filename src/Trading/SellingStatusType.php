<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingStatusType
 *
 * Contains various details about the current status of a listing. These
 *  values are computed by eBay and cannot be specified at listing time.
 * XSD Type: SellingStatusType
 */
class SellingStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Number of bids placed so far against the auction item.
     *
     * @var int $bidCount
     */
    private $bidCount = null;

    /**
     * The minimum amount a progressive bid must be above the current high bid to be accepted. This field is only
     *  applicable to auction listings. The value of this field will always be '0.00' for Classified Ad and fixed-price
     *  listings.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $bidIncrement
     */
    private $bidIncrement = null;

    /**
     * Converted value of the <b>CurrentPrice</b> in the currency of the site that
     *  returned this response. For active items, refresh the listing's data every 24
     *  hours to pick up the current conversion rates. Only returned when the item's
     *  <b>CurrentPrice</b> on the listing site is in different currency than the currency of
     *  the host site for the user/application making the API call. <b>ConvertedCurrentPrice</b>
     *  is not returned for Classified listings (Classified listings are not available
     *  on all sites).<br>
     *  <br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedCurrentPrice
     */
    private $convertedCurrentPrice = null;

    /**
     * The current price of the item in the original listing currency.
     *  <br><br>
     *  For auction listings, this price is the starting minimum price (if the listing has no bids) or the current highest bid (if bids have been placed) for the item. This does not reflect the <b>BuyItNow</b> price.
     *  <br><br>
     *  For fixed-price and ad format listings, this is the current listing price.
     *  <br><br>
     *  In multi-variation, fixed-price listings, this value matches the lowest-priced variation that is still available for sale.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $currentPrice
     */
    private $currentPrice = null;

    /**
     * For ended auction listings that have a winning bidder,
     *  this field is a container for the high bidder's user ID.
     *  For ended, single-item, fixed-price listings,
     *  this field is a container for the user ID of the purchaser.
     *  This field isn't returned for auctions with no bids, or for active fixed-price listings.
     *  <br/><br/>
     *  In the case of <b>PlaceOffer</b>, for auction listings,
     *  this field is a container for the high bidder's user ID.
     *  In the <b>PlaceOffer</b> response, the following applies:
     *  For multiple-quantity, fixed-price listings,
     *  the high bidder is only returned if there is just one order line item
     *  (or only for the first order line item that is created).
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $highBidder
     */
    private $highBidder = null;

    /**
     * Applicable to Ad type listings only. Indicates how many leads to
     *  potential buyers are associated with this item. Returns 0 (zero) for listings in other formats. You must be the seller of the item to retrieve the lead count.
     *
     * @var int $leadCount
     */
    private $leadCount = null;

    /**
     * Smallest amount the next bid on the item can be. Returns same value as
     *  <b>Item.StartPrice</b> (if no bids have yet been placed) or <b>CurrentPrice</b> plus
     *  <b>BidIncrement</b> (if at least one bid has been placed). Only applicable to
     *  auction listings. Returns null for fixed-price
     *  and Ad type listings.
     *  <br><br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $minimumToBid
     */
    private $minimumToBid = null;

    /**
     * The total number of items purchased so far (in the listing's lifetime).
     *  Subtract this from <b>Quantity</b> to determine the quantity available.
     *  <br><br>
     *  If the listing has Item Variations,
     *  then in <b>GetItem</b> (and related calls) and <b>GetItemTransactions</b>,
     *  <b>Item.SellingStatus.QuantitySold</b> contains the sum of all quantities
     *  sold across all variations in the listing, and <b>Variation.SellingStatus.QuantitySold</b> contains the number
     *  of items sold for that variation.
     *  <br/><br/>
     *  In <b>GetSellerTransactions</b>,
     *  <b>Transaction.Item.SellingStatus.QuantitySold</b> contains the number
     *  of items sold in that order line item.<br>
     *  <br>
     *  For order line item calls, also see <b>Transaction.QuantityPurchased</b> for
     *  the number of items purchased in the order line item.<br>
     *  In multi-variation listings, this value matches total quantity sold
     *  across all variations.
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * Indicates whether the reserve price has been met for the listing. Returns
     *  true if the reserve price was met or no reserve price was specified.
     *
     * @var bool $reserveMet
     */
    private $reserveMet = null;

    /**
     * Part of the Second Chance Offer feature, indicates whether the seller can
     *  extend a second chance offer for the item.
     *
     * @var bool $secondChanceEligible
     */
    private $secondChanceEligible = null;

    /**
     * Number of bidders for an item. Only applicable to auction listings.
     *  Only returned for the seller of the item.
     *
     * @var int $bidderCount
     */
    private $bidderCount = null;

    /**
     * Specifies an active or ended listing's status in eBay's processing workflow.
     *  <b></b>
     *  <ul>
     *  <li>If a listing ends with a sale (or sales), eBay needs to update the sale details
     *  (e.g., total price and buyer/high bidder) and the transaction fees. This processing
     *  can take several minutes.</li>
     *  <li>If you retrieve a sold item and no details about the buyer/high bidder
     *  are returned or no transaction fees are available, use this listing status information
     *  to determine whether eBay has finished processing the listing.</li>
     *  </ul>
     *
     * @var string $listingStatus
     */
    private $listingStatus = null;

    /**
     * A seller is changed a Final Value Fee (FVF) when the item is sold, ends with a
     *  winning bid, or is purchased. This fee applies whether or not the sale is completed with the buyer and
     *  is generated before the buyer makes a payment.
     *  <br/><br/>
     *  The FVF is calculated using a percentage. This percentage is based on whether the seller has a
     *  Store subscription or not. If a seller does have a Store subscription, the FVF is calculated based on
     *  the level of that plan. For complete information about selling fees and eBay Store subscription plans, see the
     *  <a href="http://www.feectr.ebay.com/feecenter/home">Fee Center Home Page</a>.
     *  <br/><br/>
     *  The Final Value Fee for each order line
     *  item is returned by <b>GetSellerTransactions</b>, <b>GetItemTransactions</b>, and <b>GetOrders</b>,
     *  regardless of the checkout status.
     *  <br><br>
     *  If a seller requests a Final Value Fee credit, the value of
     *  <b>Transaction.FinalValueFee</b> will not change if a credit is
     *  issued. The credit only appears in the seller's account data.
     *  <br>
     *  <br>
     *  See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more information about how Final Value Fees are calculated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $finalValueFee
     */
    private $finalValueFee = null;

    /**
     * If a seller has reduced the price of a listed item with the Promotional Price Display feature,
     *  this field contains the original price of the discounted item, along with the start-time
     *  and end-time of the discount.
     *
     * @var \Nogrod\eBaySDK\Trading\PromotionalSaleDetailsType $promotionalSaleDetails
     */
    private $promotionalSaleDetails = null;

    /**
     * If included in the response as <code>true</code>, indicates that the listing was administratively
     *  canceled due to a violation of eBay's listing policies and that the item can be relisted
     *  using <b>RelistItem</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  <b>GetItem</b> returns an error (invalid item ID)
     *  in the response if <b>Item.SellingStatus.AdminEnded</b> = <code>true</code> and the requesting user is not the seller of the item.
     *  </span>
     *
     * @var bool $adminEnded
     */
    private $adminEnded = null;

    /**
     * If this flag appears in the <b>GetItem</b> response, the auction has ended due to the
     *  item being sold to a seller using the <b>Buy It Now</b> option.
     *  This flag is not relevant for fixed-priced listings.
     *
     * @var bool $soldAsBin
     */
    private $soldAsBin = null;

    /**
     * Indicates the total quantity of items sold and picked up by buyers using the In-Store Pickup option. This value is the total number of items purchased by one or more buyers using the In-Store Pickup option, and is not the total number of In-Store Pickup orders. So, if two buyers selected the In-Store Pickup option, but each of these buyers bought a quantity of five of these items (in same purchase), the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be '10' and not '2'.
     *  <br>
     *  <br>
     *  In the case of multi-variation, fixed-price listings, each <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value indicates the total quantity of that corresponding item variation (for example, large blue shirts) sold and picked up by buyers using the In-Store Pickup option, and the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be the total quantity of all item variations sold for the listing.
     *  <br>
     *  <br>
     *  This field is returned only if the listing is eligible for In-Store Pickup (<b>EligibleForPickupInStore</b> is returned as <code>true</code>).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @var int $quantitySoldByPickupInStore
     */
    private $quantitySoldByPickupInStore = null;

    /**
     * This container is only returned if the buyer is attempting to bid on an auction item. To bid on an auction item, the buyer sets the value of the <b>Offer.Action</b> field to <code>Bid</code>, and sets the maximum bid amount in the <b>Offer.MaxBid</b> field.
     *  <br><br>
     *  The <b>SuggestedBidValues</b> container consists of an array of incremental bid values (up to the dollar value in the <b>Offer.MaxBid</b> field) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType[] $suggestedBidValues
     */
    private $suggestedBidValues = null;

    /**
     * Indicates if a listing is on hold due to an eBay policy violation.
     *  <br><br>
     *  If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bids for the listing are blocked. eBay, however, gives sellers the opportunity to address violations and get listings fully reinstated. A listing will be ended if a seller does not address a violation, or if the violation can not be rectified.
     *  <br><br>
     *  If a listing is fixable, the seller should be able to view the listing details and this boolean will be returned as <code>true</code>.
     *  <br><br>
     *  Once a listing is fixed, this boolean will no longer be returned.
     *
     * @var bool $listingOnHold
     */
    private $listingOnHold = null;

    /**
     * Gets as bidCount
     *
     * Number of bids placed so far against the auction item.
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
     * Number of bids placed so far against the auction item.
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
     * Gets as bidIncrement
     *
     * The minimum amount a progressive bid must be above the current high bid to be accepted. This field is only
     *  applicable to auction listings. The value of this field will always be '0.00' for Classified Ad and fixed-price
     *  listings.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getBidIncrement()
    {
        return $this->bidIncrement;
    }

    /**
     * Sets a new bidIncrement
     *
     * The minimum amount a progressive bid must be above the current high bid to be accepted. This field is only
     *  applicable to auction listings. The value of this field will always be '0.00' for Classified Ad and fixed-price
     *  listings.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $bidIncrement
     * @return self
     */
    public function setBidIncrement(\Nogrod\eBaySDK\Trading\AmountType $bidIncrement)
    {
        $this->bidIncrement = $bidIncrement;
        return $this;
    }

    /**
     * Gets as convertedCurrentPrice
     *
     * Converted value of the <b>CurrentPrice</b> in the currency of the site that
     *  returned this response. For active items, refresh the listing's data every 24
     *  hours to pick up the current conversion rates. Only returned when the item's
     *  <b>CurrentPrice</b> on the listing site is in different currency than the currency of
     *  the host site for the user/application making the API call. <b>ConvertedCurrentPrice</b>
     *  is not returned for Classified listings (Classified listings are not available
     *  on all sites).<br>
     *  <br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedCurrentPrice()
    {
        return $this->convertedCurrentPrice;
    }

    /**
     * Sets a new convertedCurrentPrice
     *
     * Converted value of the <b>CurrentPrice</b> in the currency of the site that
     *  returned this response. For active items, refresh the listing's data every 24
     *  hours to pick up the current conversion rates. Only returned when the item's
     *  <b>CurrentPrice</b> on the listing site is in different currency than the currency of
     *  the host site for the user/application making the API call. <b>ConvertedCurrentPrice</b>
     *  is not returned for Classified listings (Classified listings are not available
     *  on all sites).<br>
     *  <br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedCurrentPrice
     * @return self
     */
    public function setConvertedCurrentPrice(\Nogrod\eBaySDK\Trading\AmountType $convertedCurrentPrice)
    {
        $this->convertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }

    /**
     * Gets as currentPrice
     *
     * The current price of the item in the original listing currency.
     *  <br><br>
     *  For auction listings, this price is the starting minimum price (if the listing has no bids) or the current highest bid (if bids have been placed) for the item. This does not reflect the <b>BuyItNow</b> price.
     *  <br><br>
     *  For fixed-price and ad format listings, this is the current listing price.
     *  <br><br>
     *  In multi-variation, fixed-price listings, this value matches the lowest-priced variation that is still available for sale.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * Sets a new currentPrice
     *
     * The current price of the item in the original listing currency.
     *  <br><br>
     *  For auction listings, this price is the starting minimum price (if the listing has no bids) or the current highest bid (if bids have been placed) for the item. This does not reflect the <b>BuyItNow</b> price.
     *  <br><br>
     *  For fixed-price and ad format listings, this is the current listing price.
     *  <br><br>
     *  In multi-variation, fixed-price listings, this value matches the lowest-priced variation that is still available for sale.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $currentPrice
     * @return self
     */
    public function setCurrentPrice(\Nogrod\eBaySDK\Trading\AmountType $currentPrice)
    {
        $this->currentPrice = $currentPrice;
        return $this;
    }

    /**
     * Gets as highBidder
     *
     * For ended auction listings that have a winning bidder,
     *  this field is a container for the high bidder's user ID.
     *  For ended, single-item, fixed-price listings,
     *  this field is a container for the user ID of the purchaser.
     *  This field isn't returned for auctions with no bids, or for active fixed-price listings.
     *  <br/><br/>
     *  In the case of <b>PlaceOffer</b>, for auction listings,
     *  this field is a container for the high bidder's user ID.
     *  In the <b>PlaceOffer</b> response, the following applies:
     *  For multiple-quantity, fixed-price listings,
     *  the high bidder is only returned if there is just one order line item
     *  (or only for the first order line item that is created).
     *
     * @return \Nogrod\eBaySDK\Trading\UserType
     */
    public function getHighBidder()
    {
        return $this->highBidder;
    }

    /**
     * Sets a new highBidder
     *
     * For ended auction listings that have a winning bidder,
     *  this field is a container for the high bidder's user ID.
     *  For ended, single-item, fixed-price listings,
     *  this field is a container for the user ID of the purchaser.
     *  This field isn't returned for auctions with no bids, or for active fixed-price listings.
     *  <br/><br/>
     *  In the case of <b>PlaceOffer</b>, for auction listings,
     *  this field is a container for the high bidder's user ID.
     *  In the <b>PlaceOffer</b> response, the following applies:
     *  For multiple-quantity, fixed-price listings,
     *  the high bidder is only returned if there is just one order line item
     *  (or only for the first order line item that is created).
     *
     * @param \Nogrod\eBaySDK\Trading\UserType $highBidder
     * @return self
     */
    public function setHighBidder(\Nogrod\eBaySDK\Trading\UserType $highBidder)
    {
        $this->highBidder = $highBidder;
        return $this;
    }

    /**
     * Gets as leadCount
     *
     * Applicable to Ad type listings only. Indicates how many leads to
     *  potential buyers are associated with this item. Returns 0 (zero) for listings in other formats. You must be the seller of the item to retrieve the lead count.
     *
     * @return int
     */
    public function getLeadCount()
    {
        return $this->leadCount;
    }

    /**
     * Sets a new leadCount
     *
     * Applicable to Ad type listings only. Indicates how many leads to
     *  potential buyers are associated with this item. Returns 0 (zero) for listings in other formats. You must be the seller of the item to retrieve the lead count.
     *
     * @param int $leadCount
     * @return self
     */
    public function setLeadCount($leadCount)
    {
        $this->leadCount = $leadCount;
        return $this;
    }

    /**
     * Gets as minimumToBid
     *
     * Smallest amount the next bid on the item can be. Returns same value as
     *  <b>Item.StartPrice</b> (if no bids have yet been placed) or <b>CurrentPrice</b> plus
     *  <b>BidIncrement</b> (if at least one bid has been placed). Only applicable to
     *  auction listings. Returns null for fixed-price
     *  and Ad type listings.
     *  <br><br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMinimumToBid()
    {
        return $this->minimumToBid;
    }

    /**
     * Sets a new minimumToBid
     *
     * Smallest amount the next bid on the item can be. Returns same value as
     *  <b>Item.StartPrice</b> (if no bids have yet been placed) or <b>CurrentPrice</b> plus
     *  <b>BidIncrement</b> (if at least one bid has been placed). Only applicable to
     *  auction listings. Returns null for fixed-price
     *  and Ad type listings.
     *  <br><br>
     *  In multi-variation listings, this value matches the lowest-priced
     *  variation that is still available for sale.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $minimumToBid
     * @return self
     */
    public function setMinimumToBid(\Nogrod\eBaySDK\Trading\AmountType $minimumToBid)
    {
        $this->minimumToBid = $minimumToBid;
        return $this;
    }

    /**
     * Gets as quantitySold
     *
     * The total number of items purchased so far (in the listing's lifetime).
     *  Subtract this from <b>Quantity</b> to determine the quantity available.
     *  <br><br>
     *  If the listing has Item Variations,
     *  then in <b>GetItem</b> (and related calls) and <b>GetItemTransactions</b>,
     *  <b>Item.SellingStatus.QuantitySold</b> contains the sum of all quantities
     *  sold across all variations in the listing, and <b>Variation.SellingStatus.QuantitySold</b> contains the number
     *  of items sold for that variation.
     *  <br/><br/>
     *  In <b>GetSellerTransactions</b>,
     *  <b>Transaction.Item.SellingStatus.QuantitySold</b> contains the number
     *  of items sold in that order line item.<br>
     *  <br>
     *  For order line item calls, also see <b>Transaction.QuantityPurchased</b> for
     *  the number of items purchased in the order line item.<br>
     *  In multi-variation listings, this value matches total quantity sold
     *  across all variations.
     *
     * @return int
     */
    public function getQuantitySold()
    {
        return $this->quantitySold;
    }

    /**
     * Sets a new quantitySold
     *
     * The total number of items purchased so far (in the listing's lifetime).
     *  Subtract this from <b>Quantity</b> to determine the quantity available.
     *  <br><br>
     *  If the listing has Item Variations,
     *  then in <b>GetItem</b> (and related calls) and <b>GetItemTransactions</b>,
     *  <b>Item.SellingStatus.QuantitySold</b> contains the sum of all quantities
     *  sold across all variations in the listing, and <b>Variation.SellingStatus.QuantitySold</b> contains the number
     *  of items sold for that variation.
     *  <br/><br/>
     *  In <b>GetSellerTransactions</b>,
     *  <b>Transaction.Item.SellingStatus.QuantitySold</b> contains the number
     *  of items sold in that order line item.<br>
     *  <br>
     *  For order line item calls, also see <b>Transaction.QuantityPurchased</b> for
     *  the number of items purchased in the order line item.<br>
     *  In multi-variation listings, this value matches total quantity sold
     *  across all variations.
     *
     * @param int $quantitySold
     * @return self
     */
    public function setQuantitySold($quantitySold)
    {
        $this->quantitySold = $quantitySold;
        return $this;
    }

    /**
     * Gets as reserveMet
     *
     * Indicates whether the reserve price has been met for the listing. Returns
     *  true if the reserve price was met or no reserve price was specified.
     *
     * @return bool
     */
    public function getReserveMet()
    {
        return $this->reserveMet;
    }

    /**
     * Sets a new reserveMet
     *
     * Indicates whether the reserve price has been met for the listing. Returns
     *  true if the reserve price was met or no reserve price was specified.
     *
     * @param bool $reserveMet
     * @return self
     */
    public function setReserveMet($reserveMet)
    {
        $this->reserveMet = $reserveMet;
        return $this;
    }

    /**
     * Gets as secondChanceEligible
     *
     * Part of the Second Chance Offer feature, indicates whether the seller can
     *  extend a second chance offer for the item.
     *
     * @return bool
     */
    public function getSecondChanceEligible()
    {
        return $this->secondChanceEligible;
    }

    /**
     * Sets a new secondChanceEligible
     *
     * Part of the Second Chance Offer feature, indicates whether the seller can
     *  extend a second chance offer for the item.
     *
     * @param bool $secondChanceEligible
     * @return self
     */
    public function setSecondChanceEligible($secondChanceEligible)
    {
        $this->secondChanceEligible = $secondChanceEligible;
        return $this;
    }

    /**
     * Gets as bidderCount
     *
     * Number of bidders for an item. Only applicable to auction listings.
     *  Only returned for the seller of the item.
     *
     * @return int
     */
    public function getBidderCount()
    {
        return $this->bidderCount;
    }

    /**
     * Sets a new bidderCount
     *
     * Number of bidders for an item. Only applicable to auction listings.
     *  Only returned for the seller of the item.
     *
     * @param int $bidderCount
     * @return self
     */
    public function setBidderCount($bidderCount)
    {
        $this->bidderCount = $bidderCount;
        return $this;
    }

    /**
     * Gets as listingStatus
     *
     * Specifies an active or ended listing's status in eBay's processing workflow.
     *  <b></b>
     *  <ul>
     *  <li>If a listing ends with a sale (or sales), eBay needs to update the sale details
     *  (e.g., total price and buyer/high bidder) and the transaction fees. This processing
     *  can take several minutes.</li>
     *  <li>If you retrieve a sold item and no details about the buyer/high bidder
     *  are returned or no transaction fees are available, use this listing status information
     *  to determine whether eBay has finished processing the listing.</li>
     *  </ul>
     *
     * @return string
     */
    public function getListingStatus()
    {
        return $this->listingStatus;
    }

    /**
     * Sets a new listingStatus
     *
     * Specifies an active or ended listing's status in eBay's processing workflow.
     *  <b></b>
     *  <ul>
     *  <li>If a listing ends with a sale (or sales), eBay needs to update the sale details
     *  (e.g., total price and buyer/high bidder) and the transaction fees. This processing
     *  can take several minutes.</li>
     *  <li>If you retrieve a sold item and no details about the buyer/high bidder
     *  are returned or no transaction fees are available, use this listing status information
     *  to determine whether eBay has finished processing the listing.</li>
     *  </ul>
     *
     * @param string $listingStatus
     * @return self
     */
    public function setListingStatus($listingStatus)
    {
        $this->listingStatus = $listingStatus;
        return $this;
    }

    /**
     * Gets as finalValueFee
     *
     * A seller is changed a Final Value Fee (FVF) when the item is sold, ends with a
     *  winning bid, or is purchased. This fee applies whether or not the sale is completed with the buyer and
     *  is generated before the buyer makes a payment.
     *  <br/><br/>
     *  The FVF is calculated using a percentage. This percentage is based on whether the seller has a
     *  Store subscription or not. If a seller does have a Store subscription, the FVF is calculated based on
     *  the level of that plan. For complete information about selling fees and eBay Store subscription plans, see the
     *  <a href="http://www.feectr.ebay.com/feecenter/home">Fee Center Home Page</a>.
     *  <br/><br/>
     *  The Final Value Fee for each order line
     *  item is returned by <b>GetSellerTransactions</b>, <b>GetItemTransactions</b>, and <b>GetOrders</b>,
     *  regardless of the checkout status.
     *  <br><br>
     *  If a seller requests a Final Value Fee credit, the value of
     *  <b>Transaction.FinalValueFee</b> will not change if a credit is
     *  issued. The credit only appears in the seller's account data.
     *  <br>
     *  <br>
     *  See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more information about how Final Value Fees are calculated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getFinalValueFee()
    {
        return $this->finalValueFee;
    }

    /**
     * Sets a new finalValueFee
     *
     * A seller is changed a Final Value Fee (FVF) when the item is sold, ends with a
     *  winning bid, or is purchased. This fee applies whether or not the sale is completed with the buyer and
     *  is generated before the buyer makes a payment.
     *  <br/><br/>
     *  The FVF is calculated using a percentage. This percentage is based on whether the seller has a
     *  Store subscription or not. If a seller does have a Store subscription, the FVF is calculated based on
     *  the level of that plan. For complete information about selling fees and eBay Store subscription plans, see the
     *  <a href="http://www.feectr.ebay.com/feecenter/home">Fee Center Home Page</a>.
     *  <br/><br/>
     *  The Final Value Fee for each order line
     *  item is returned by <b>GetSellerTransactions</b>, <b>GetItemTransactions</b>, and <b>GetOrders</b>,
     *  regardless of the checkout status.
     *  <br><br>
     *  If a seller requests a Final Value Fee credit, the value of
     *  <b>Transaction.FinalValueFee</b> will not change if a credit is
     *  issued. The credit only appears in the seller's account data.
     *  <br>
     *  <br>
     *  See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more information about how Final Value Fees are calculated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $finalValueFee
     * @return self
     */
    public function setFinalValueFee(\Nogrod\eBaySDK\Trading\AmountType $finalValueFee)
    {
        $this->finalValueFee = $finalValueFee;
        return $this;
    }

    /**
     * Gets as promotionalSaleDetails
     *
     * If a seller has reduced the price of a listed item with the Promotional Price Display feature,
     *  this field contains the original price of the discounted item, along with the start-time
     *  and end-time of the discount.
     *
     * @return \Nogrod\eBaySDK\Trading\PromotionalSaleDetailsType
     */
    public function getPromotionalSaleDetails()
    {
        return $this->promotionalSaleDetails;
    }

    /**
     * Sets a new promotionalSaleDetails
     *
     * If a seller has reduced the price of a listed item with the Promotional Price Display feature,
     *  this field contains the original price of the discounted item, along with the start-time
     *  and end-time of the discount.
     *
     * @param \Nogrod\eBaySDK\Trading\PromotionalSaleDetailsType $promotionalSaleDetails
     * @return self
     */
    public function setPromotionalSaleDetails(\Nogrod\eBaySDK\Trading\PromotionalSaleDetailsType $promotionalSaleDetails)
    {
        $this->promotionalSaleDetails = $promotionalSaleDetails;
        return $this;
    }

    /**
     * Gets as adminEnded
     *
     * If included in the response as <code>true</code>, indicates that the listing was administratively
     *  canceled due to a violation of eBay's listing policies and that the item can be relisted
     *  using <b>RelistItem</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  <b>GetItem</b> returns an error (invalid item ID)
     *  in the response if <b>Item.SellingStatus.AdminEnded</b> = <code>true</code> and the requesting user is not the seller of the item.
     *  </span>
     *
     * @return bool
     */
    public function getAdminEnded()
    {
        return $this->adminEnded;
    }

    /**
     * Sets a new adminEnded
     *
     * If included in the response as <code>true</code>, indicates that the listing was administratively
     *  canceled due to a violation of eBay's listing policies and that the item can be relisted
     *  using <b>RelistItem</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  <b>GetItem</b> returns an error (invalid item ID)
     *  in the response if <b>Item.SellingStatus.AdminEnded</b> = <code>true</code> and the requesting user is not the seller of the item.
     *  </span>
     *
     * @param bool $adminEnded
     * @return self
     */
    public function setAdminEnded($adminEnded)
    {
        $this->adminEnded = $adminEnded;
        return $this;
    }

    /**
     * Gets as soldAsBin
     *
     * If this flag appears in the <b>GetItem</b> response, the auction has ended due to the
     *  item being sold to a seller using the <b>Buy It Now</b> option.
     *  This flag is not relevant for fixed-priced listings.
     *
     * @return bool
     */
    public function getSoldAsBin()
    {
        return $this->soldAsBin;
    }

    /**
     * Sets a new soldAsBin
     *
     * If this flag appears in the <b>GetItem</b> response, the auction has ended due to the
     *  item being sold to a seller using the <b>Buy It Now</b> option.
     *  This flag is not relevant for fixed-priced listings.
     *
     * @param bool $soldAsBin
     * @return self
     */
    public function setSoldAsBin($soldAsBin)
    {
        $this->soldAsBin = $soldAsBin;
        return $this;
    }

    /**
     * Gets as quantitySoldByPickupInStore
     *
     * Indicates the total quantity of items sold and picked up by buyers using the In-Store Pickup option. This value is the total number of items purchased by one or more buyers using the In-Store Pickup option, and is not the total number of In-Store Pickup orders. So, if two buyers selected the In-Store Pickup option, but each of these buyers bought a quantity of five of these items (in same purchase), the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be '10' and not '2'.
     *  <br>
     *  <br>
     *  In the case of multi-variation, fixed-price listings, each <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value indicates the total quantity of that corresponding item variation (for example, large blue shirts) sold and picked up by buyers using the In-Store Pickup option, and the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be the total quantity of all item variations sold for the listing.
     *  <br>
     *  <br>
     *  This field is returned only if the listing is eligible for In-Store Pickup (<b>EligibleForPickupInStore</b> is returned as <code>true</code>).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @return int
     */
    public function getQuantitySoldByPickupInStore()
    {
        return $this->quantitySoldByPickupInStore;
    }

    /**
     * Sets a new quantitySoldByPickupInStore
     *
     * Indicates the total quantity of items sold and picked up by buyers using the In-Store Pickup option. This value is the total number of items purchased by one or more buyers using the In-Store Pickup option, and is not the total number of In-Store Pickup orders. So, if two buyers selected the In-Store Pickup option, but each of these buyers bought a quantity of five of these items (in same purchase), the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be '10' and not '2'.
     *  <br>
     *  <br>
     *  In the case of multi-variation, fixed-price listings, each <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value indicates the total quantity of that corresponding item variation (for example, large blue shirts) sold and picked up by buyers using the In-Store Pickup option, and the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be the total quantity of all item variations sold for the listing.
     *  <br>
     *  <br>
     *  This field is returned only if the listing is eligible for In-Store Pickup (<b>EligibleForPickupInStore</b> is returned as <code>true</code>).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @param int $quantitySoldByPickupInStore
     * @return self
     */
    public function setQuantitySoldByPickupInStore($quantitySoldByPickupInStore)
    {
        $this->quantitySoldByPickupInStore = $quantitySoldByPickupInStore;
        return $this;
    }

    /**
     * Adds as bidValue
     *
     * This container is only returned if the buyer is attempting to bid on an auction item. To bid on an auction item, the buyer sets the value of the <b>Offer.Action</b> field to <code>Bid</code>, and sets the maximum bid amount in the <b>Offer.MaxBid</b> field.
     *  <br><br>
     *  The <b>SuggestedBidValues</b> container consists of an array of incremental bid values (up to the dollar value in the <b>Offer.MaxBid</b> field) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AmountType $bidValue
     */
    public function addToSuggestedBidValues(\Nogrod\eBaySDK\Trading\AmountType $bidValue)
    {
        $this->suggestedBidValues[] = $bidValue;
        return $this;
    }

    /**
     * isset suggestedBidValues
     *
     * This container is only returned if the buyer is attempting to bid on an auction item. To bid on an auction item, the buyer sets the value of the <b>Offer.Action</b> field to <code>Bid</code>, and sets the maximum bid amount in the <b>Offer.MaxBid</b> field.
     *  <br><br>
     *  The <b>SuggestedBidValues</b> container consists of an array of incremental bid values (up to the dollar value in the <b>Offer.MaxBid</b> field) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestedBidValues($index)
    {
        return isset($this->suggestedBidValues[$index]);
    }

    /**
     * unset suggestedBidValues
     *
     * This container is only returned if the buyer is attempting to bid on an auction item. To bid on an auction item, the buyer sets the value of the <b>Offer.Action</b> field to <code>Bid</code>, and sets the maximum bid amount in the <b>Offer.MaxBid</b> field.
     *  <br><br>
     *  The <b>SuggestedBidValues</b> container consists of an array of incremental bid values (up to the dollar value in the <b>Offer.MaxBid</b> field) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestedBidValues($index)
    {
        unset($this->suggestedBidValues[$index]);
    }

    /**
     * Gets as suggestedBidValues
     *
     * This container is only returned if the buyer is attempting to bid on an auction item. To bid on an auction item, the buyer sets the value of the <b>Offer.Action</b> field to <code>Bid</code>, and sets the maximum bid amount in the <b>Offer.MaxBid</b> field.
     *  <br><br>
     *  The <b>SuggestedBidValues</b> container consists of an array of incremental bid values (up to the dollar value in the <b>Offer.MaxBid</b> field) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType[]
     */
    public function getSuggestedBidValues()
    {
        return $this->suggestedBidValues;
    }

    /**
     * Sets a new suggestedBidValues
     *
     * This container is only returned if the buyer is attempting to bid on an auction item. To bid on an auction item, the buyer sets the value of the <b>Offer.Action</b> field to <code>Bid</code>, and sets the maximum bid amount in the <b>Offer.MaxBid</b> field.
     *  <br><br>
     *  The <b>SuggestedBidValues</b> container consists of an array of incremental bid values (up to the dollar value in the <b>Offer.MaxBid</b> field) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType[] $suggestedBidValues
     * @return self
     */
    public function setSuggestedBidValues(array $suggestedBidValues)
    {
        $this->suggestedBidValues = $suggestedBidValues;
        return $this;
    }

    /**
     * Gets as listingOnHold
     *
     * Indicates if a listing is on hold due to an eBay policy violation.
     *  <br><br>
     *  If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bids for the listing are blocked. eBay, however, gives sellers the opportunity to address violations and get listings fully reinstated. A listing will be ended if a seller does not address a violation, or if the violation can not be rectified.
     *  <br><br>
     *  If a listing is fixable, the seller should be able to view the listing details and this boolean will be returned as <code>true</code>.
     *  <br><br>
     *  Once a listing is fixed, this boolean will no longer be returned.
     *
     * @return bool
     */
    public function getListingOnHold()
    {
        return $this->listingOnHold;
    }

    /**
     * Sets a new listingOnHold
     *
     * Indicates if a listing is on hold due to an eBay policy violation.
     *  <br><br>
     *  If a listing is put on hold, users are unable to view the listing details, the listing is hidden from search, and all attempted purchases, offers, and bids for the listing are blocked. eBay, however, gives sellers the opportunity to address violations and get listings fully reinstated. A listing will be ended if a seller does not address a violation, or if the violation can not be rectified.
     *  <br><br>
     *  If a listing is fixable, the seller should be able to view the listing details and this boolean will be returned as <code>true</code>.
     *  <br><br>
     *  Once a listing is fixed, this boolean will no longer be returned.
     *
     * @param bool $listingOnHold
     * @return self
     */
    public function setListingOnHold($listingOnHold)
    {
        $this->listingOnHold = $listingOnHold;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBidCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidCount", $value);
        }
        $value = $this->getBidIncrement();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidIncrement", $value);
        }
        $value = $this->getConvertedCurrentPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedCurrentPrice", $value);
        }
        $value = $this->getCurrentPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CurrentPrice", $value);
        }
        $value = $this->getHighBidder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HighBidder", $value);
        }
        $value = $this->getLeadCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LeadCount", $value);
        }
        $value = $this->getMinimumToBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumToBid", $value);
        }
        $value = $this->getQuantitySold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySold", $value);
        }
        $value = $this->getReserveMet();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReserveMet", $value);
        }
        $value = $this->getSecondChanceEligible();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondChanceEligible", $value);
        }
        $value = $this->getBidderCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidderCount", $value);
        }
        $value = $this->getListingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingStatus", $value);
        }
        $value = $this->getFinalValueFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FinalValueFee", $value);
        }
        $value = $this->getPromotionalSaleDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleDetails", $value);
        }
        $value = $this->getAdminEnded();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdminEnded", $value);
        }
        $value = $this->getSoldAsBin();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SoldAsBin", $value);
        }
        $value = $this->getQuantitySoldByPickupInStore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySoldByPickupInStore", $value);
        }
        $value = $this->getSuggestedBidValues();
        if (null !== $value && [] !== $this->getSuggestedBidValues()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SuggestedBidValues", array_map(function ($v) {return ["BidValue" => $v];}, $value));
        }
        $value = $this->getListingOnHold();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingOnHold", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidCount');
        if (null !== $value) {
            $this->setBidCount($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidIncrement');
        if (null !== $value) {
            $this->setBidIncrement(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedCurrentPrice');
        if (null !== $value) {
            $this->setConvertedCurrentPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrentPrice');
        if (null !== $value) {
            $this->setCurrentPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}HighBidder');
        if (null !== $value) {
            $this->setHighBidder(\Nogrod\eBaySDK\Trading\UserType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}LeadCount');
        if (null !== $value) {
            $this->setLeadCount($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumToBid');
        if (null !== $value) {
            $this->setMinimumToBid(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReserveMet');
        if (null !== $value) {
            $this->setReserveMet(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceEligible');
        if (null !== $value) {
            $this->setSecondChanceEligible(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidderCount');
        if (null !== $value) {
            $this->setBidderCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingStatus');
        if (null !== $value) {
            $this->setListingStatus($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FinalValueFee');
        if (null !== $value) {
            $this->setFinalValueFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleDetails');
        if (null !== $value) {
            $this->setPromotionalSaleDetails(\Nogrod\eBaySDK\Trading\PromotionalSaleDetailsType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdminEnded');
        if (null !== $value) {
            $this->setAdminEnded(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldAsBin');
        if (null !== $value) {
            $this->setSoldAsBin(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySoldByPickupInStore');
        if (null !== $value) {
            $this->setQuantitySoldByPickupInStore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SuggestedBidValues');
        if (null !== $value) {
            $this->setSuggestedBidValues(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\AmountType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}BidValue'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingOnHold');
        if (null !== $value) {
            $this->setListingOnHold(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
