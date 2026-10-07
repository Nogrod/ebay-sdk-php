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
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
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
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
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
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
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
        if (!is_array($this->suggestedBidValues)) {
            throw new \LogicException('suggestedBidValues is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AmountType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\AmountType> $suggestedBidValues
     * @return self
     */
    public function setSuggestedBidValues(iterable $suggestedBidValues)
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->bidCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BidCount', null, (string) $value);
        }
        $value = $this->bidIncrement;
        if (null !== $value) {
            $writer->startElementNs(null, 'BidIncrement', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->convertedCurrentPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'ConvertedCurrentPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->currentPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'CurrentPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->highBidder;
        if (null !== $value) {
            $writer->startElementNs(null, 'HighBidder', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->leadCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LeadCount', null, (string) $value);
        }
        $value = $this->minimumToBid;
        if (null !== $value) {
            $writer->startElementNs(null, 'MinimumToBid', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->quantitySold;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuantitySold', null, (string) $value);
        }
        $value = $this->reserveMet;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReserveMet', null, ($value ? 'true' : 'false'));
        }
        $value = $this->secondChanceEligible;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SecondChanceEligible', null, ($value ? 'true' : 'false'));
        }
        $value = $this->bidderCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BidderCount', null, (string) $value);
        }
        $value = $this->listingStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ListingStatus', null, (string) $value);
        }
        $value = $this->finalValueFee;
        if (null !== $value) {
            $writer->startElementNs(null, 'FinalValueFee', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->promotionalSaleDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'PromotionalSaleDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->adminEnded;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AdminEnded', null, ($value ? 'true' : 'false'));
        }
        $value = $this->soldAsBin;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SoldAsBin', null, ($value ? 'true' : 'false'));
        }
        $value = $this->quantitySoldByPickupInStore;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuantitySoldByPickupInStore', null, (string) $value);
        }
        $value = $this->suggestedBidValues;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'SuggestedBidValues', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'BidValue', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->listingOnHold;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ListingOnHold', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellingStatusType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->suggestedBidValues = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'BidCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bidCount = (int) $value;
                    }
                    return true;
                case 'BidIncrement':
                    $this->bidIncrement = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ConvertedCurrentPrice':
                    $this->convertedCurrentPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'CurrentPrice':
                    $this->currentPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'HighBidder':
                    $this->highBidder = \Nogrod\eBaySDK\Trading\UserType::xmlRead($reader);
                    return true;
                case 'LeadCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->leadCount = (int) $value;
                    }
                    return true;
                case 'MinimumToBid':
                    $this->minimumToBid = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'QuantitySold':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->quantitySold = (int) $value;
                    }
                    return true;
                case 'ReserveMet':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->reserveMet = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'SecondChanceEligible':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->secondChanceEligible = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'BidderCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bidderCount = (int) $value;
                    }
                    return true;
                case 'ListingStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->listingStatus = $value;
                    }
                    return true;
                case 'FinalValueFee':
                    $this->finalValueFee = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'PromotionalSaleDetails':
                    $this->promotionalSaleDetails = \Nogrod\eBaySDK\Trading\PromotionalSaleDetailsType::xmlRead($reader);
                    return true;
                case 'AdminEnded':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->adminEnded = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'SoldAsBin':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->soldAsBin = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'QuantitySoldByPickupInStore':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->quantitySoldByPickupInStore = (int) $value;
                    }
                    return true;
                case 'SuggestedBidValues':
                    $this->suggestedBidValues = Func::readList($reader, 'BidValue', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader));
                    return true;
                case 'ListingOnHold':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->listingOnHold = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
