<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemSortTypeCodeType
 *
 * This enumerated type contains the possible values that can be used when sorting results in the <b>GetItemsAwaitingFeedback</b>, <b>GetMyeBayBuying</b>, and <b>GetMyeBaySelling</b> calls. Assume that each of sort values can be used in any of the three calls above unless it is specifically called out that a certain enumeration value will not work/is not applicable to a call.
 * XSD Type: ItemSortTypeCodeType
 */
class ItemSortTypeCodeType
{
    /**
     * Constant for 'ItemID' value.
     *
     * This enumeration value is used to sort listings and orders according to Item ID
     * value in ascending order.
     */
    public const VAL_ITEM_ID = 'ItemID';

    /**
     * Constant for 'Price' value.
     *
     * This enumeration value is used to sort listings according to item price value in
     * ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_PRICE = 'Price';

    /**
     * Constant for 'StartPrice' value.
     *
     * This enumeration value is used to sort listings or orders according to the
     * starting price value in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_START_PRICE = 'StartPrice';

    /**
     * Constant for 'Title' value.
     *
     * This enumeration value is used to sort listings or orders according to listing
     * title in ascending (alphabetical) order.
     */
    public const VAL_TITLE = 'Title';

    /**
     * Constant for 'BidCount' value.
     *
     * This enumeration value is used to sort auction listings according to the number
     * of bids received in ascending order. This enumeration value is only applicable
     * to auction listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> call.
     */
    public const VAL_BID_COUNT = 'BidCount';

    /**
     * Constant for 'Quantity' value.
     *
     * This enumeration value is used to sort fixed-price listings and orders according
     * to item quantity in ascending order. This enumeration value is only applicable
     * to fixed-price listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> call.
     */
    public const VAL_QUANTITY = 'Quantity';

    /**
     * Constant for 'StartTime' value.
     *
     * This enumeration value is used to sort listings and orders according to start
     * time in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_START_TIME = 'StartTime';

    /**
     * Constant for 'EndTime' value.
     *
     * This enumeration value is used to sort listings and orders according to end time
     * in ascending order.
     */
    public const VAL_END_TIME = 'EndTime';

    /**
     * Constant for 'SellerUserID' value.
     *
     * This enumeration value is used to sort listings and orders according to the
     * seller's user ID in ascending (alphabetical) order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBaySelling</b> calls.
     */
    public const VAL_SELLER_USER_ID = 'SellerUserID';

    /**
     * Constant for 'TimeLeft' value.
     *
     * This enumeration value is used to sort active listings and orders according to
     * the time left before listing ends (in ascending order).
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_TIME_LEFT = 'TimeLeft';

    /**
     * Constant for 'ListingDuration' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings according to the listing duration in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_LISTING_DURATION = 'ListingDuration';

    /**
     * Constant for 'ListingType' value.
     *
     * This enumeration value is used to sort listings and orders according to the
     * listing type in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_LISTING_TYPE = 'ListingType';

    /**
     * Constant for 'CurrentPrice' value.
     *
     * This enumeration value is used to sort listings and orders according to the
     * current/final price in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_CURRENT_PRICE = 'CurrentPrice';

    /**
     * Constant for 'ReservePrice' value.
     *
     * This enumeration value is used to sort auction listings and orders according to
     * the reserve price in ascending order. This enumeration value is only applicable
     * when a seller wants to retrieve information on their own auction listings that
     * have reserve prices set on them. This enumeration is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_RESERVE_PRICE = 'ReservePrice';

    /**
     * Constant for 'MaxBid' value.
     *
     * This enumeration value is used by a buyer to sort auction listings and orders
     * according to the maximum bid price that they placed on an auction listing in
     * ascending order. This enumeration value is only applicable to auction listings,
     * and is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBaySelling</b> calls.
     */
    public const VAL_MAX_BID = 'MaxBid';

    /**
     * Constant for 'BidderCount' value.
     *
     * This enumeration value is used to sort auction listings according to the number
     * of unique bidders in ascending order. This enumeration value is only applicable
     * to auction listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_BIDDER_COUNT = 'BidderCount';

    /**
     * Constant for 'HighBidderUserID' value.
     *
     * This enumeration value is used to sort auction listings according to the user ID
     * of the highest bidder in ascending order. This enumeration value is only
     * applicable to auction listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_HIGH_BIDDER_USER_ID = 'HighBidderUserID';

    /**
     * Constant for 'BuyerUserID' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings according to the buyer's user ID in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_BUYER_USER_ID = 'BuyerUserID';

    /**
     * Constant for 'BuyerPostalCode' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings according to the buyer's location in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_BUYER_POSTAL_CODE = 'BuyerPostalCode';

    /**
     * Constant for 'BuyerEmail' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings according to the buyer's email address in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls, and a buyer's email address will only be
     * exposed to the seller within two weeks of order purchase.
     */
    public const VAL_BUYER_EMAIL = 'BuyerEmail';

    /**
     * Constant for 'SellerEmail' value.
     *
     * This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort
     * listings and orders according to the seller's email address in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBaySelling</b> calls.
     */
    public const VAL_SELLER_EMAIL = 'SellerEmail';

    /**
     * Constant for 'TotalPrice' value.
     *
     * This enumeration value is used to sort orders according to item price value in
     * ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_TOTAL_PRICE = 'TotalPrice';

    /**
     * Constant for 'WatchCount' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings and orders according to the number of users watching the listing in
     * ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_WATCH_COUNT = 'WatchCount';

    /**
     * Constant for 'BestOfferCount' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * active listings according to the number of Best Offers that the listing has
     * received in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_BEST_OFFER_COUNT = 'BestOfferCount';

    /**
     * Constant for 'QuestionCount' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings and orders according to the number of questions that the listing has
     * received in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_QUESTION_COUNT = 'QuestionCount';

    /**
     * Constant for 'ShippingServiceCost' value.
     *
     * This enumeration value is used to sort orders according to the cost to ship one
     * unit of the order line item in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_SHIPPING_SERVICE_COST = 'ShippingServiceCost';

    /**
     * Constant for 'FeedbackReceived' value.
     *
     * This enumeration value is used to sort orders according to the type of feedback
     * that a user received in ascending order. The Feedback ratings are defined in
     * <b>CommentTypeCodeType</b>.
     */
    public const VAL_FEEDBACK_RECEIVED = 'FeedbackReceived';

    /**
     * Constant for 'FeedbackLeft' value.
     *
     * This enumeration value is used to sort orders according to the type of feedback
     * that a user left for another user in ascending order. The Feedback ratings are
     * defined in <b>CommentTypeCodeType</b>.
     */
    public const VAL_FEEDBACK_LEFT = 'FeedbackLeft';

    /**
     * Constant for 'UserID' value.
     *
     * This enumeration value is used to sort listings and orders according to the eBay
     * user ID of the order partner/owner of listing in ascending order.
     */
    public const VAL_USER_ID = 'UserID';

    /**
     * Constant for 'QuantitySold' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort order
     * line items according to the quantity sold in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_QUANTITY_SOLD = 'QuantitySold';

    /**
     * Constant for 'BestOffer' value.
     *
     * This enumeration value is used by the buyer in a <b>GetMyeBayBuying</b> call to
     * sort all Best Offers made in ascending order according to the dollar amount of
     * the Best Offer. This sort option is only applicable if the buyer has at least
     * one pending Best Offer on an order line item.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBaySelling</b> calls.
     */
    public const VAL_BEST_OFFER = 'BestOffer';

    /**
     * Constant for 'QuantityAvailable' value.
     *
     * This enumeration value is used to sort order line items according to quantity
     * available for purchase in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call, and it is only relevant to the <b>WatchList</b> container of the
     * <b>GetMyeBayBuying</b> call.
     */
    public const VAL_QUANTITY_AVAILABLE = 'QuantityAvailable';

    /**
     * Constant for 'QuantityPurchased' value.
     *
     * This enumeration value is used to sort purchased line items according to the
     * quantity purchased by the buyer in ascending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_QUANTITY_PURCHASED = 'QuantityPurchased';

    /**
     * Constant for 'WonPlatform' value.
     *
     * This enumeration value is no longer applicable as Half.com has been shut down,
     * and eBay marketplace is the only remaining platform.
     */
    public const VAL_WON_PLATFORM = 'WonPlatform';

    /**
     * Constant for 'SoldPlatform' value.
     *
     * This enumeration value is no longer applicable as Half.com has been shut down,
     * and eBay marketplace is the only remaining platform.
     */
    public const VAL_SOLD_PLATFORM = 'SoldPlatform';

    /**
     * Constant for 'ListingDurationDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings according to the listing duration in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_LISTING_DURATION_DESCENDING = 'ListingDurationDescending';

    /**
     * Constant for 'ListingTypeDescending' value.
     *
     * This enumeration value is used to sort listings and orders according to the
     * listing type in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_LISTING_TYPE_DESCENDING = 'ListingTypeDescending';

    /**
     * Constant for 'CurrentPriceDescending' value.
     *
     * This enumeration value is used to sort listings and orders according to the
     * current/final price in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_CURRENT_PRICE_DESCENDING = 'CurrentPriceDescending';

    /**
     * Constant for 'ReservePriceDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * auction listings and orders according to the reserve price in descending order.
     * This enumeration value is only applicable when a seller wants to retrieve
     * information on their own auction listings that have reserve prices set on them.
     *  <br/><br/>
     *  This enumeration is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_RESERVE_PRICE_DESCENDING = 'ReservePriceDescending';

    /**
     * Constant for 'MaxBidDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort
     * auction listings and orders according to the maximum bid price that a buyer
     * placed on an auction listing in descending order.
     *  <br/><br/>
     *  This enumeration value is only applicable to auction listings, and is not
     * applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBaySelling</b>
     * calls.
     */
    public const VAL_MAX_BID_DESCENDING = 'MaxBidDescending';

    /**
     * Constant for 'BidderCountDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * auction listings according to the number of unique bidders in descending order.
     *  <br/><br/>
     *  This enumeration value is only applicable to auction listings, and is not
     * applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b>
     * calls.
     */
    public const VAL_BIDDER_COUNT_DESCENDING = 'BidderCountDescending';

    /**
     * Constant for 'HighBidderUserIDDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * auction listings according to the user ID of the highest bidder in descending
     * order.
     *  <br/><br/>
     *  This enumeration value is only applicable to auction listings, and is not
     * applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b>
     * calls.
     */
    public const VAL_HIGH_BIDDER_USER_IDDESCENDING = 'HighBidderUserIDDescending';

    /**
     * Constant for 'BuyerUserIDDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings according to the buyer's user ID in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_BUYER_USER_IDDESCENDING = 'BuyerUserIDDescending';

    /**
     * Constant for 'BuyerPostalCodeDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings according to the buyer's location in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_BUYER_POSTAL_CODE_DESCENDING = 'BuyerPostalCodeDescending';

    /**
     * Constant for 'BuyerEmailDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings according to the buyer's email address in descending order. A buyer's
     * actual email address will only be exposed to the seller within two weeks of
     * order purchase.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_BUYER_EMAIL_DESCENDING = 'BuyerEmailDescending';

    /**
     * Constant for 'SellerEmailDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort
     * listings and orders according to the seller's email address in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBaySelling</b> calls.
     */
    public const VAL_SELLER_EMAIL_DESCENDING = 'SellerEmailDescending';

    /**
     * Constant for 'TotalPriceDescending' value.
     *
     * This enumeration value is used to sort orders according to item price value in
     * descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_TOTAL_PRICE_DESCENDING = 'TotalPriceDescending';

    /**
     * Constant for 'WatchCountDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings and orders according to the number of users watching the listing in
     * descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_WATCH_COUNT_DESCENDING = 'WatchCountDescending';

    /**
     * Constant for 'QuestionCountDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * listings and orders according to the number of questions that the listing has
     * received in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_QUESTION_COUNT_DESCENDING = 'QuestionCountDescending';

    /**
     * Constant for 'ShippingServiceCostDescending' value.
     *
     * This enumeration value is used to sort orders according to the cost to ship one
     * unit of the order line item in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_SHIPPING_SERVICE_COST_DESCENDING = 'ShippingServiceCostDescending';

    /**
     * Constant for 'FeedbackReceivedDescending' value.
     *
     * This enumeration value is used to sort orders according to the type of feedback
     * that a user received in descending order. The Feedback ratings are defined in
     * <b>CommentTypeCodeType</b>.
     */
    public const VAL_FEEDBACK_RECEIVED_DESCENDING = 'FeedbackReceivedDescending';

    /**
     * Constant for 'FeedbackLeftDescending' value.
     *
     * This enumeration value is used to sort orders according to the type of feedback
     * that a user left for another user in descending order. The Feedback ratings are
     * defined in <b>CommentTypeCodeType</b>.
     */
    public const VAL_FEEDBACK_LEFT_DESCENDING = 'FeedbackLeftDescending';

    /**
     * Constant for 'UserIDDescending' value.
     *
     * This enumeration value is used to sort listings and orders according to the eBay
     * user ID of the order partner/owner of listing in descending order.
     */
    public const VAL_USER_IDDESCENDING = 'UserIDDescending';

    /**
     * Constant for 'QuantitySoldDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort order
     * line items according to the quantity sold in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_QUANTITY_SOLD_DESCENDING = 'QuantitySoldDescending';

    /**
     * Constant for 'BestOfferCountDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort
     * active listings according to the number of Best Offers that the listing has
     * received in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_BEST_OFFER_COUNT_DESCENDING = 'BestOfferCountDescending';

    /**
     * Constant for 'QuantityAvailableDescending' value.
     *
     * This enumeration value is used to sort order line items according to quantity
     * available for purchase in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call, and it is only relevant to the <b>WatchList</b> container of the
     * <b>GetMyeBayBuying</b> call.
     */
    public const VAL_QUANTITY_AVAILABLE_DESCENDING = 'QuantityAvailableDescending';

    /**
     * Constant for 'QuantityPurchasedDescending' value.
     *
     * This enumeration value is used to sort purchased line items according to the
     * quantity purchased by the buyer in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_QUANTITY_PURCHASED_DESCENDING = 'QuantityPurchasedDescending';

    /**
     * Constant for 'BestOfferDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort all
     * Best Offers made in descending order according to the dollar amount of the Best
     * Offer. This sort option is only applicable if the buyer has at least one pending
     * Best Offer on an order line item.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBaySelling</b> calls.
     */
    public const VAL_BEST_OFFER_DESCENDING = 'BestOfferDescending';

    /**
     * Constant for 'ItemIDDescending' value.
     *
     * This enumeration value is used to sort listings and orders according to Item ID
     * value in descending order.
     */
    public const VAL_ITEM_IDDESCENDING = 'ItemIDDescending';

    /**
     * Constant for 'PriceDescending' value.
     *
     * This enumeration value is used to sort listings according to item price value in
     * descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_PRICE_DESCENDING = 'PriceDescending';

    /**
     * Constant for 'StartPriceDescending' value.
     *
     * This enumeration value is used to sort listings or orders according to the
     * starting price value in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_START_PRICE_DESCENDING = 'StartPriceDescending';

    /**
     * Constant for 'TitleDescending' value.
     *
     * This enumeration value is used to sort listings or orders according to listing
     * title in descending (alphabetical) order.
     */
    public const VAL_TITLE_DESCENDING = 'TitleDescending';

    /**
     * Constant for 'BidCountDescending' value.
     *
     * This enumeration value is used to sort auction listings according to the number
     * of bids received in descending order.
     *  <br/><br/>
     *  This enumeration value is only applicable to auction listings, and is not
     * applicable to the <b>GetItemsAwaitingFeedback</b> call.
     */
    public const VAL_BID_COUNT_DESCENDING = 'BidCountDescending';

    /**
     * Constant for 'QuantityDescending' value.
     *
     * This enumeration value is used to sort fixed-price listings and orders according
     * to item quantity in descending order.
     *  <br/><br/>
     *  This enumeration value is only applicable to fixed-price listings, and is not
     * applicable to the <b>GetItemsAwaitingFeedback</b> call.
     */
    public const VAL_QUANTITY_DESCENDING = 'QuantityDescending';

    /**
     * Constant for 'StartTimeDescending' value.
     *
     * This enumeration value is used to sort listings and orders according to start
     * time in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_START_TIME_DESCENDING = 'StartTimeDescending';

    /**
     * Constant for 'EndTimeDescending' value.
     *
     * This enumeration value is used to sort listings and orders according to end time
     * in descending order.
     */
    public const VAL_END_TIME_DESCENDING = 'EndTimeDescending';

    /**
     * Constant for 'SellerUserIDDescending' value.
     *
     * This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort
     * listings and orders according to the seller's user ID in descending order.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBaySelling</b> calls.
     */
    public const VAL_SELLER_USER_IDDESCENDING = 'SellerUserIDDescending';

    /**
     * Constant for 'TimeLeftDescending' value.
     *
     * This enumeration value is used to sort active listings and orders according to
     * the time left before listing ends (in descending order).
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * call.
     */
    public const VAL_TIME_LEFT_DESCENDING = 'TimeLeftDescending';

    /**
     * Constant for 'WonPlatformDescending' value.
     *
     * This enumeration value is no longer applicable as Half.com has been shut down,
     * and eBay marketplace is the only remaining platform.
     */
    public const VAL_WON_PLATFORM_DESCENDING = 'WonPlatformDescending';

    /**
     * Constant for 'SoldPlatformDescending' value.
     *
     * This enumeration value is no longer applicable as Half.com has been shut down,
     * and eBay marketplace is the only remaining platform.
     */
    public const VAL_SOLD_PLATFORM_DESCENDING = 'SoldPlatformDescending';

    /**
     * Constant for 'LeadCount' value.
     *
     * This enumeration value is used by the seller of a classified ad listing in a
     * <b>GetMyeBaySelling</b> call to sort classified ad listings according to the
     * total number of leads (prospective buyer inquiries) in ascending order. Each
     * lead involves an email to the buyer, and the <b>LeadCount</b> value includes
     * read and unread emails.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_LEAD_COUNT = 'LeadCount';

    /**
     * Constant for 'NewLeadCount' value.
     *
     * This enumeration value is used by the seller of a classified ad listing in a
     * <b>GetMyeBaySelling</b> call to sort classified ad listings according to the
     * number of new leads (prospective buyer inquiries) in ascending order. Each lead
     * involves an email to the buyer, and the <b>NewLeadCount</b> value only includes
     * unread emails.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_NEW_LEAD_COUNT = 'NewLeadCount';

    /**
     * Constant for 'LeadCountDescending' value.
     *
     * This enumeration value is used by the seller of a classified ad listing in a
     * <b>GetMyeBaySelling</b> call to sort classified ad listings according to the
     * total number of leads (prospective buyer inquiries) in descending order. Each
     * lead involves an email to the buyer, and the <b>LeadCount</b> value includes
     * read and unread emails.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_LEAD_COUNT_DESCENDING = 'LeadCountDescending';

    /**
     * Constant for 'NewLeadCountDescending' value.
     *
     * This enumeration value is used by the seller of a classified ad listing in a
     * <b>GetMyeBaySelling</b> call to sort classified ad listings according to the
     * number of new leads (prospective buyer inquiries) in descending order. Each lead
     * involves an email to the buyer, and the <b>NewLeadCount</b> value only includes
     * unread emails.
     *  <br/><br/>
     *  This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     */
    public const VAL_NEW_LEAD_COUNT_DESCENDING = 'NewLeadCountDescending';

    /**
     * Constant for 'ClassifiedAdPayPerLeadFee' value.
     *
     * The pay-per-lead feature is no longer available, so this value is no longer
     *  applicable.
     */
    public const VAL_CLASSIFIED_AD_PAY_PER_LEAD_FEE = 'ClassifiedAdPayPerLeadFee';

    /**
     * Constant for 'ClassifiedAdPayPerLeadFeeDescending' value.
     *
     * The pay-per-lead feature is no longer available, so this value is no longer
     *  applicable.
     */
    public const VAL_CLASSIFIED_AD_PAY_PER_LEAD_FEE_DESCENDING = 'ClassifiedAdPayPerLeadFeeDescending';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

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
