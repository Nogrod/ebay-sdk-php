<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing NotificationEventTypeCodeType
 *
 * Enumerated type that contains the complete list of platform notifications that can be sent out to subscribed users, servers, or applications. Some notifications are only sent to buyers or sellers, and some are sent to both buyers and sellers.
 * XSD Type: NotificationEventTypeCodeType
 */
class NotificationEventTypeCodeType
{
    /**
     * Constant for 'OutBid' value.
     *
     * This buyer-facing notification is sent when another buyer has outbid
     *  (placed a higher bid) the subscribed buyer on an auction listing, and
     *  the subscribed buyer is no longer the current high bidder. This notification is
     * only applicable for auction listings.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_outbid.html"
     * target="_blank">OutBid</a> for additional information about this notification.
     */
    public const VAL_OUT_BID = 'OutBid';

    /**
     * Constant for 'EndOfAuction' value.
     *
     * This notification is applicable to both buyers and sellers and is sent as soon
     * as an auction listing ends with or without a winning bidder. This notification
     * will also be sent if the auction ends as a result of a buyer using the auction
     * listing's Buy It Now feature. This notification is only applicable for auction
     * listings.
     *  <br><br>
     *  This notification will appear in the <b>GetItemTransactions</b> call response.
     * See <a href="https://developer.ebay.com/api-docs/static/pn_end-of-auction.html"
     * target="_blank">EndOfAuction</a> for additional information about this
     * notification.
     */
    public const VAL_END_OF_AUCTION = 'EndOfAuction';

    /**
     * Constant for 'AuctionCheckoutComplete' value.
     *
     * This seller-facing notification is sent when the winning bidder or buyer has
     * paid for the auction or fixed-price item and completed the checkout process. For
     * multiple line item orders, an <b>AuctionCheckoutComplete</b> notification is
     * only generated for one of the line items in the order.
     *  <br><br>
     *  This notification will appear in the <b>GetItemTransactions</b> call response.
     * See <a
     * href="https://developer.ebay.com/api-docs/static/pn_auction-checkout-complete.html"
     * target="_blank">AuctionCheckoutComplete</a> for additional information about
     * this notification.
     */
    public const VAL_AUCTION_CHECKOUT_COMPLETE = 'AuctionCheckoutComplete';

    /**
     * Constant for 'CheckoutBuyerRequestsTotal' value.
     *
     * This seller-facing notification is sent when a buyer/winning bidder is
     * requesting a total price before paying for the item. This notification is
     * applicable for auction listings and for fixed-price listings that do not require
     * immediate payment.
     *  <br><br>
     *  This notification will appear in the <b>GetItemTransactions</b> call response.
     * See <a
     * href="https://developer.ebay.com/api-docs/static/pn_buyer-requests-total.html"
     * target="_blank">CheckoutBuyerRequestsTotal</a> for additional information about
     * this notification.
     */
    public const VAL_CHECKOUT_BUYER_REQUESTS_TOTAL = 'CheckoutBuyerRequestsTotal';

    /**
     * Constant for 'Feedback' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when that
     * buyer or seller has left Feedback for the other party in the order, or has
     * received Feedback from the other party in the order. Feedback is given at the
     * order line item level.
     *  <br><br>
     *  This notification will appear in the <b>GetFeedback</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_feedback.html"
     * target="_blank">Feedback</a> for additional information about this notification.
     */
    public const VAL_FEEDBACK = 'Feedback';

    /**
     * Constant for 'FeedbackForSeller' value.
     *
     * This notification is deprecated. Use the <b>Feedback</b> notification instead.
     */
    public const VAL_FEEDBACK_FOR_SELLER = 'FeedbackForSeller';

    /**
     * Constant for 'FixedPriceTransaction' value.
     *
     * This seller-facing notification is sent each time a buyer purchases an item in a
     * single or multiple-quantity, fixed-price listing. This notification is only
     * applicable for fixed-price listings.
     *  <br><br>
     *  This notification will appear in the <b>GetFeedback</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_fixed-price-transaction.html"
     * target="_blank">GetItemTransactions</a> for additional information about this
     * notification.
     */
    public const VAL_FIXED_PRICE_TRANSACTION = 'FixedPriceTransaction';

    /**
     * Constant for 'SecondChanceOffer' value.
     *
     * This buyer-facing notification is sent when the buyer is offered a Second Chance
     * Offer from the seller, after that buyer failed to win the original auction of
     * the item.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_second-chance.html"
     * target="_blank">SecondChanceOffer</a> for additional information about this
     * notification.
     */
    public const VAL_SECOND_CHANCE_OFFER = 'SecondChanceOffer';

    /**
     * Constant for 'AskSellerQuestion' value.
     *
     * This is a seller-facing notification that is sent when an eBay user has used the
     * Ask a Question feature on the seller's active listing. An eBay user does not
     * have to be an active bidder on an auction listing to ask a seller a question.
     *  <br><br>
     *  This notification will appear in the <b>GetMemberMessages</b> call response.
     * See <a
     * href="https://developer.ebay.com/api-docs/static/pn_ask-seller-question.html"
     * target="_blank">AskSellerQuestion</a> for additional information about this
     * notification.
     */
    public const VAL_ASK_SELLER_QUESTION = 'AskSellerQuestion';

    /**
     * Constant for 'ItemListed' value.
     *
     * This seller-facing notification is sent each time one of the subscribed seller's
     * items is listed or relisted. This notification is also triggered when the Unpaid
     * Item preferences relists an item for the seller.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-listed.html"
     * target="_blank">ItemListed</a> for additional information about this
     * notification.
     */
    public const VAL_ITEM_LISTED = 'ItemListed';

    /**
     * Constant for 'ItemRevised' value.
     *
     * This seller-facing notification is sent when one of the subscribed seller's
     * items is revised.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-revised.html"
     * target="_blank">ItemRevised</a> for additional information about this
     * notification.
     */
    public const VAL_ITEM_REVISED = 'ItemRevised';

    /**
     * Constant for 'BestOffer' value.
     *
     * This seller-facing notification is sent if a potential buyer has made a Best
     * Offer on a Best Offer-enabled listing.
     *  <br><br>
     *  This notification will appear in the <b>GetBestOffers</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_best-offer.html"
     * target="_blank">BestOffer</a> for additional information about this
     * notification.
     */
    public const VAL_BEST_OFFER = 'BestOffer';

    /**
     * Constant for 'MyMessagesAlertHeader' value.
     *
     * This notification is deprecated and can no longer be used.
     */
    public const VAL_MY_MESSAGES_ALERT_HEADER = 'MyMessagesAlertHeader';

    /**
     * Constant for 'MyMessagesAlert' value.
     *
     * This notification is deprecated. Use <b>MyMessagesHighPriorityMessage</b>
     * instead.
     */
    public const VAL_MY_MESSAGES_ALERT = 'MyMessagesAlert';

    /**
     * Constant for 'MyMessageseBayMessageHeader' value.
     *
     * This notification is sent to a subscribed buyer or seller when eBay sends a
     * message to that user's InBox.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetMyMessages</b> call response. For this notification to
     * be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the
     * <b>GetMyMessages</b> request must be set to <code>ReturnHeaders</code>.
     *  <br><br>
     *  <b>MyMessageseBayMessageHeader</b> and <b>MyMessageseBayMessage</b> cannot be
     * subscribed
     *  to at the same time or specified in the same call.
     */
    public const VAL_MY_MESSAGESE_BAY_MESSAGE_HEADER = 'MyMessageseBayMessageHeader';

    /**
     * Constant for 'MyMessageseBayMessage' value.
     *
     * This notification is sent to a subscribed buyer or seller when eBay sends a
     * message to that user's InBox.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetMyMessages</b> call response. For this notification to
     * be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the
     * <b>GetMyMessages</b> request must be set to <code>ReturnMessages</code>.
     *  <br><br>
     *  <b>MyMessageseBayMessageHeader</b> and <b>MyMessageseBayMessage</b> cannot be
     * subscribed
     *  to at the same time or specified in the same call.
     */
    public const VAL_MY_MESSAGESE_BAY_MESSAGE = 'MyMessageseBayMessage';

    /**
     * Constant for 'MyMessagesM2MMessageHeader' value.
     *
     * This notification is sent to a subscribed buyer or seller when another eBay user
     * sends a message to that user's InBox.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetMyMessages</b> call response. For this notification to
     * be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the
     * <b>GetMyMessages</b> request must be set to <code>ReturnHeaders</code>.
     *  <br><br>
     *  <b>MyMessagesM2MMessageHeader</b> and <b>MyMessagesM2MMessage</b> cannot
     *  be subscribed to at the same time or specified in the same call.
     */
    public const VAL_MY_MESSAGES_M_2_MMESSAGE_HEADER = 'MyMessagesM2MMessageHeader';

    /**
     * Constant for 'MyMessagesM2MMessage' value.
     *
     * This notification is sent to a subscribed buyer or seller when another eBay user
     * sends a message to that user's InBox.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetMyMessages</b> call response. For this notification to
     * be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the
     * <b>GetMyMessages</b> request must be set to <code>ReturnMessages</code>.
     *  <br><br>
     *  <b>MyMessagesM2MMessageHeader</b> and <b>MyMessagesM2MMessage</b> cannot
     *  be subscribed to at the same time or specified in the same call.
     */
    public const VAL_MY_MESSAGES_M_2_MMESSAGE = 'MyMessagesM2MMessage';

    /**
     * Constant for 'INRBuyerOpenedDispute' value.
     *
     * This event type has been deprecated along with legacy user disputes. As an
     * alternative, subscribe to <b>EBPMyResponseDue</b> event type.
     */
    public const VAL_INRBUYER_OPENED_DISPUTE = 'INRBuyerOpenedDispute';

    /**
     * Constant for 'INRBuyerRespondedToDispute' value.
     *
     * This notification is sent to a subscribed seller when a buyer responds to an
     * Item Not Received case opened by that buyer.
     */
    public const VAL_INRBUYER_RESPONDED_TO_DISPUTE = 'INRBuyerRespondedToDispute';

    /**
     * Constant for 'INRBuyerClosedDispute' value.
     *
     * This event type has been deprecated along with legacy user disputes. As an
     * alternative, subscribe to <b>EBPClosedCase</b> event type.
     */
    public const VAL_INRBUYER_CLOSED_DISPUTE = 'INRBuyerClosedDispute';

    /**
     * Constant for 'INRSellerRespondedToDispute' value.
     *
     * This event type has been deprecated along with legacy user disputes.
     */
    public const VAL_INRSELLER_RESPONDED_TO_DISPUTE = 'INRSellerRespondedToDispute';

    /**
     * Constant for 'Checkout' value.
     *
     * This notification is deprecated. Use <b>AuctionCheckoutComplete</b> instead.
     */
    public const VAL_CHECKOUT = 'Checkout';

    /**
     * Constant for 'WatchedItemEndingSoon' value.
     *
     * This buyer-facing notification is sent when a listing that the buyer is watching
     * is ending soon. This event has a <b>TimeLeft</b> property that defines the
     * 'ending soon' threshold value.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_watched-item-ending-soon.html"
     * target="_blank">WatchedItemEndingSoon</a> for additional information about this
     * notification.
     */
    public const VAL_WATCHED_ITEM_ENDING_SOON = 'WatchedItemEndingSoon';

    /**
     * Constant for 'ItemClosed' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when a
     * listing ends. This notification can be triggered by an
     *  <b>ItemWon</b>, an <b>ItemSold</b>, or an <b>ItemUnsold</b> event.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-closed.html"
     * target="_blank">ItemClosed</a> for additional information about this
     * notification.
     */
    public const VAL_ITEM_CLOSED = 'ItemClosed';

    /**
     * Constant for 'ItemSuspended' value.
     *
     * This notification is sent to a subscribed buyer or seller when a listing is
     * administratively taken down by eBay.
     */
    public const VAL_ITEM_SUSPENDED = 'ItemSuspended';

    /**
     * Constant for 'ItemSold' value.
     *
     * This seller-facing notification is sent when an eBay listing ends in a sale.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-sold.html"
     * target="_blank">ItemSold</a> for additional information about this notification.
     */
    public const VAL_ITEM_SOLD = 'ItemSold';

    /**
     * Constant for 'ItemExtended' value.
     *
     * This notification is sent to a subscribed seller when the duration of an eBay
     * listing has been extended.
     */
    public const VAL_ITEM_EXTENDED = 'ItemExtended';

    /**
     * Constant for 'UserIDChanged' value.
     *
     * This notification is no longer applicable.
     */
    public const VAL_USER_IDCHANGED = 'UserIDChanged';

    /**
     * Constant for 'ThirdPartyCartCheckout' value.
     *
     * This notification is deprecated.
     */
    public const VAL_THIRD_PARTY_CART_CHECKOUT = 'ThirdPartyCartCheckout';

    /**
     * Constant for 'ItemRevisedAddCharity' value.
     *
     * This notification is sent to a subscribed seller when the seller has
     *  revised a listing and added a nonprofit organization to receive a percentage
     * (10 percent up to 100 percent) of the proceeds.
     */
    public const VAL_ITEM_REVISED_ADD_CHARITY = 'ItemRevisedAddCharity';

    /**
     * Constant for 'ItemAddedToWatchList' value.
     *
     * This buyer-facing notification is sent when that buyer adds an item to the Watch
     * List.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-added-to-watch-list.html"
     * target="_blank">ItemAddedToWatchList</a> for additional information about this
     * notification.
     */
    public const VAL_ITEM_ADDED_TO_WATCH_LIST = 'ItemAddedToWatchList';

    /**
     * Constant for 'ItemRemovedFromWatchList' value.
     *
     * This buyer-facing notification is sent when that buyer removes an item from the
     * Watch List.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-removed-from-watch-list.html"
     * target="_blank">ItemRemovedFromWatchList</a> for additional information about
     * this notification.
     */
    public const VAL_ITEM_REMOVED_FROM_WATCH_LIST = 'ItemRemovedFromWatchList';

    /**
     * Constant for 'ItemAddedToBidGroup' value.
     *
     * This notification is deprecated.
     */
    public const VAL_ITEM_ADDED_TO_BID_GROUP = 'ItemAddedToBidGroup';

    /**
     * Constant for 'ItemRemovedFromBidGroup' value.
     *
     * This notification is deprecated.
     */
    public const VAL_ITEM_REMOVED_FROM_BID_GROUP = 'ItemRemovedFromBidGroup';

    /**
     * Constant for 'FeedbackLeft' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when that
     * user leaves feedback for an order partner.
     *  <br><br>
     *  This notification will appear in the <b>GetFeedback</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_feedback-left.html"
     * target="_blank">FeedbackLeft</a> for additional information about this
     * notification.
     */
    public const VAL_FEEDBACK_LEFT = 'FeedbackLeft';

    /**
     * Constant for 'FeedbackReceived' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when that
     * user receives feedback from an order partner.
     *  <br><br>
     *  This notification will appear in the <b>GetFeedback</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_feedback-received.html"
     * target="_blank">FeedbackReceived</a> for additional information about this
     * notification.
     */
    public const VAL_FEEDBACK_RECEIVED = 'FeedbackReceived';

    /**
     * Constant for 'FeedbackStarChanged' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when that
     * user's Feedback star has changed.
     *  Sent to a subscribing third party when a user's Feedback star level changes.
     *  <br><br>
     *  This notification will appear in the <b>GetUser</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_feedback-star-changed.html"
     * target="_blank">FeedbackStarChanged</a> for additional information about this
     * notification.
     */
    public const VAL_FEEDBACK_STAR_CHANGED = 'FeedbackStarChanged';

    /**
     * Constant for 'BidPlaced' value.
     *
     * This buyer-facing notification is sent when the buyer places a bid for an
     * auction item.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_bid-placed.html"
     * target="_blank">BidPlaced</a> for additional information about this
     * notification.
     */
    public const VAL_BID_PLACED = 'BidPlaced';

    /**
     * Constant for 'BidReceived' value.
     *
     * This seller-facing notification is sent each time a prospective buyer places a
     * bid for the seller's auction item.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_bid-received.html"
     * target="_blank">BidReceived</a> for additional information about this
     * notification.
     */
    public const VAL_BID_RECEIVED = 'BidReceived';

    /**
     * Constant for 'ItemWon' value.
     *
     * This buyer-facing notification is sent if the buyer is the winner of an auction
     * item.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-won.html"
     * target="_blank">ItemWon</a> for additional information about this notification.
     */
    public const VAL_ITEM_WON = 'ItemWon';

    /**
     * Constant for 'ItemLost' value.
     *
     * This buyer-facing notification is sent if that buyer did not end up as the
     * highest bidder for an auction item.
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-lost.html"
     * target="_blank">ItemLost</a> for additional information about this notification.
     */
    public const VAL_ITEM_LOST = 'ItemLost';

    /**
     * Constant for 'ItemUnsold' value.
     *
     * This seller-facing notification is sent when an auction listing ends with no
     * winning bidder or when a fixed-price listing ends with no sale(s).
     *  <br><br>
     *  This notification will appear in the <b>GetItem</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_item-unsold.html"
     * target="_blank">ItemUnsold</a> for additional information about this
     * notification.
     */
    public const VAL_ITEM_UNSOLD = 'ItemUnsold';

    /**
     * Constant for 'CounterOfferReceived' value.
     *
     * This buyer-facing notification is sent when a seller makes a counter offer to
     * the buyer's Best Offer on an item.
     *  <br><br>
     *  This notification will appear in the <b>GetBestOffers</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_counter-offer-recd.html"
     * target="_blank">CounterOfferReceived</a> for additional information about this
     * notification.
     */
    public const VAL_COUNTER_OFFER_RECEIVED = 'CounterOfferReceived';

    /**
     * Constant for 'BestOfferDeclined' value.
     *
     * This buyer-facing notification is sent when a seller declines the buyer's Best
     * Offer on an item.
     *  <br><br>
     *  This notification will appear in the <b>GetBestOffers</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_best-offer-declined.html"
     * target="_blank">BestOfferDeclined</a> for additional information about this
     * notification.
     */
    public const VAL_BEST_OFFER_DECLINED = 'BestOfferDeclined';

    /**
     * Constant for 'BestOfferPlaced' value.
     *
     * This buyer-facing notification is sent each time a prospective buyer places a
     * Best Offer on an item.
     *  <br><br>
     *  This notification will appear in the <b>GetBestOffer</b> call response. See <a
     * href="https://developer.ebay.com/api-docs/static/pn_best-offer-placed.html"
     * target="_blank">BestOfferPlaced</a> for additional information.
     */
    public const VAL_BEST_OFFER_PLACED = 'BestOfferPlaced';

    /**
     * Constant for 'AddToWatchList' value.
     *
     * This notification is deprecated. Use <b>ItemAddedToWatchList</b> notification
     * instead.
     */
    public const VAL_ADD_TO_WATCH_LIST = 'AddToWatchList';

    /**
     * Constant for 'PlaceOffer' value.
     *
     * This notification is deprecated. Use <b>BidPlaced</b> notification instead.
     */
    public const VAL_PLACE_OFFER = 'PlaceOffer';

    /**
     * Constant for 'RemoveFromWatchList' value.
     *
     * This notification is deprecated. Use <b>ItemRemovedFromWatchList</b>
     * notification instead. ItemRemovedFromWatchList
     */
    public const VAL_REMOVE_FROM_WATCH_LIST = 'RemoveFromWatchList';

    /**
     * Constant for 'AddToBidGroup' value.
     *
     * This notification is deprecated.
     */
    public const VAL_ADD_TO_BID_GROUP = 'AddToBidGroup';

    /**
     * Constant for 'RemoveFromBidGroup' value.
     *
     * This notification is deprecated.
     */
    public const VAL_REMOVE_FROM_BID_GROUP = 'RemoveFromBidGroup';

    /**
     * Constant for 'ItemsCanceled' value.
     *
     * This notification is deprecated.
     */
    public const VAL_ITEMS_CANCELED = 'ItemsCanceled';

    /**
     * Constant for 'TokenRevocation' value.
     *
     * This notification is applicable to both buyers and sellers and is sent if that
     * user's authentication token is revoked.
     *  <br><br>
     *  This notification will appear in the <b>GetTokenStatus</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_token-revocation.html"
     * target="_blank">TokenRevocation</a> for additional information about this
     * notification.
     */
    public const VAL_TOKEN_REVOCATION = 'TokenRevocation';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'ItemMarkedShipped' value.
     *
     * This notification is sent to a subscribed buyer and seller when that seller has
     * marked an item as 'shipped'.
     */
    public const VAL_ITEM_MARKED_SHIPPED = 'ItemMarkedShipped';

    /**
     * Constant for 'ItemMarkedPaid' value.
     *
     * This notification is sent to a subscribed buyer and seller when that seller has
     * marked an order as 'paid'.
     */
    public const VAL_ITEM_MARKED_PAID = 'ItemMarkedPaid';

    /**
     * Constant for 'EBPMyResponseDue' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when a
     * response to the eBay Money Back Guarantee case is due from that user. When an
     * eBay Money Back Guarantee case is opened, this notification is only sent to the
     * seller involved in the case and not the buyer.<br><br>This notification is also
     * sent to a subscribed seller when the buyer has opened up either of the
     * following:<ul><li>an Item Not Received inquiry against an order line
     * item</li><li>an Item Not Received case against that seller.</li></ul>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_ebp-my-response-due.html"
     * target="_blank">EBPMyResponseDue</a> for additional information about this
     * notification.
     */
    public const VAL_EBPMY_RESPONSE_DUE = 'EBPMyResponseDue';

    /**
     * Constant for 'EBPOtherPartyResponseDue' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when a
     * response to the eBay Money Back Guarantee case is due from the other party in
     * the case.
     *  <br><br>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a
     * href="https://developer.ebay.com/api-docs/static/pn_ebp-other-party-response-due.html"
     * target="_blank">EBPOtherPartyResponseDue</a> for additional information about
     * this notification.
     */
    public const VAL_EBPOTHER_PARTY_RESPONSE_DUE = 'EBPOtherPartyResponseDue';

    /**
     * Constant for 'EBPEscalatedCase' value.
     *
     * This notification is applicable to both buyers an sellers and is sent when an
     * eBay Money Back Guarantee case is escalated to eBay customer support. This
     * notification is also sent to a subscribed seller when an Item Not Received
     * inquiry against an order line item has been escalated to an eBay Money Back
     * Guarantee case.
     *  <br><br>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_ebp-escalated-case.html"
     * target="_blank">EBPEscalatedCase</a> for additional information about this
     * notification.
     */
    public const VAL_EBPESCALATED_CASE = 'EBPEscalatedCase';

    /**
     * Constant for 'EBPAppealedCase' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when the
     * decision of an eBay Money Back Guarantee case is appealed.
     *  <br><br>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_ebp-appealed-case.html"
     * target="_blank">EBPAppealedCase</a> for additional information about this
     * notification.
     */
    public const VAL_EBPAPPEALED_CASE = 'EBPAppealedCase';

    /**
     * Constant for 'EBPMyPaymentDue' value.
     *
     * This seller-facing notification is sent when payment (to eBay or buyer) related
     * to the outcome of an eBay Money Back Guarantee case is due.
     *  <br><br>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_ebp-my-payment-due.html"
     * target="_blank">EBPMyPaymentDue</a> for additional information about this
     * notification.
     */
    public const VAL_EBPMY_PAYMENT_DUE = 'EBPMyPaymentDue';

    /**
     * Constant for 'EBPPaymentDone' value.
     *
     * This seller-facing notification is sent when payment (to eBay or buyer) related
     * to the outcome of an eBay Money Back Guarantee case is processed.
     *  <br><br>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_ebp-my-payment-done.html"
     * target="_blank">EBPPaymentDone</a> for additional information about this
     * notification.
     */
    public const VAL_EBPPAYMENT_DONE = 'EBPPaymentDone';

    /**
     * Constant for 'EBPClosedAppeal' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when an
     * appeal of an eBay Money Back Guarantee case decision has been closed.
     *  <br><br>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_ebp-closed-appeal.html"
     * target="_blank">EBPClosedAppeal</a> for additional information about this
     * notification.
     */
    public const VAL_EBPCLOSED_APPEAL = 'EBPClosedAppeal';

    /**
     * Constant for 'EBPClosedCase' value.
     *
     * This notification is is applicable to both buyers and sellers and is sent when
     * an eBay Money Back Guarantee case has been closed.<br><br>This notification can
     * also be sent to the subscribed seller when the buyer has closed either of the
     * following:<ul><li>an Item Not Received inquiry against an order line
     * item</li><li>an Item Not Received case opened by that buyer</li></ul>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_ebp-closed-case.html"
     * target="_blank">EBPClosedCase</a> for additional information about this
     * notification.
     */
    public const VAL_EBPCLOSED_CASE = 'EBPClosedCase';

    /**
     * Constant for 'MyMessagesHighPriorityMessage' value.
     *
     * This notification is sent to a subscribed buyer or seller when that user
     * receives a high-priority message in InBox.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetMyMessages</b> call response. For this notification to
     * be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the
     * <b>GetMyMessages</b> request must be set to <code>ReturnMessages</code>.
     *  <br><br>
     *  <b>MyMessagesHighPriorityMessage</b>, <b>MyMessagesM2MMessage</b>, and
     * <b>MyMessagesHighPriorityMessageHeader</b> cannot
     *  be subscribed to at the same time or specified in the same call.
     */
    public const VAL_MY_MESSAGES_HIGH_PRIORITY_MESSAGE = 'MyMessagesHighPriorityMessage';

    /**
     * Constant for 'MyMessagesHighPriorityMessageHeader' value.
     *
     * This notification is sent to a subscribed buyer or seller when that user
     * receives a high-priority message in InBox.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetMyMessages</b> call response. For this notification to
     * be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the
     * <b>GetMyMessages</b> request must be set to <code>ReturnHeaders</code>.
     *  <br><br>
     *  <b>MyMessagesHighPriorityMessage</b>, <b>MyMessagesM2MMessage</b>, and
     * <b>MyMessagesHighPriorityMessageHeader</b> cannot
     *  be subscribed to at the same time or specified in the same call.
     */
    public const VAL_MY_MESSAGES_HIGH_PRIORITY_MESSAGE_HEADER = 'MyMessagesHighPriorityMessageHeader';

    /**
     * Constant for 'EBPOnHoldCase' value.
     *
     * This notification is is applicable to both buyers and sellers and is sent when
     * an eBay Money Back Guarantee case has been put on hold by eBay customer support.
     *  <br><br>
     *  This notification will appear in the <b>getEBPCaseDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_ebp-on-hold-case.html"
     * target="_blank">EBPOnHoldCase</a> for additional information about this
     * notification.
     */
    public const VAL_EBPON_HOLD_CASE = 'EBPOnHoldCase';

    /**
     * Constant for 'ReadyToShip' value.
     *
     * This notification is sent to a subscribed seller after the buyer's payment on an
     * order has cleared.
     */
    public const VAL_READY_TO_SHIP = 'ReadyToShip';

    /**
     * Constant for 'ReadyForPayout' value.
     *
     * This notification is sent to a subscribed seller when eBay is prepared to send
     * the seller's funds for an order that was previously placed on hold.
     */
    public const VAL_READY_FOR_PAYOUT = 'ReadyForPayout';

    /**
     * Constant for 'BidItemEndingSoon' value.
     *
     * This notification is sent to a subscribed buyer when the listing of the auction
     * item where the buyer has an active bid is about
     *  to end. This event has a <b>TimeLeft</b> property that defines the 'ending
     * soon' threshold value.
     */
    public const VAL_BID_ITEM_ENDING_SOON = 'BidItemEndingSoon';

    /**
     * Constant for 'ShoppingCartItemEndingSoon' value.
     *
     * This notification is sent to a subscribed buyer when an item in the buyer's
     * shopping cart is about
     *  to end. This event has a <b>TimeLeft</b> property that defines the 'ending
     * soon' threshold value.
     */
    public const VAL_SHOPPING_CART_ITEM_ENDING_SOON = 'ShoppingCartItemEndingSoon';

    /**
     * Constant for 'ReturnCreated' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when a
     * return request involving those users is created.
     *  <br><br>
     *  This notification will appear in the <b>getReturnDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_return-created.html"
     * target="_blank">ReturnCreated</a> for additional information about this
     * notification.
     */
    public const VAL_RETURN_CREATED = 'ReturnCreated';

    /**
     * Constant for 'ReturnWaitingForSellerInfo' value.
     *
     * This seller-facing notification is sent when a return request is waiting for
     * information from the seller, like a Return Merchandise Authorization (RMA)
     * number or a correct return address.
     *  <br><br>
     *  IThis notification will appear in the <b>getReturnDetail</b> call response. See
     * <a
     * href="https://developer.ebay.com/api-docs/static/pn_return-wait-for-seller-info.html"
     * target="_blank">ReturnWaitingForSellerInfo</a> for additional information about
     * this notification.
     */
    public const VAL_RETURN_WAITING_FOR_SELLER_INFO = 'ReturnWaitingForSellerInfo';

    /**
     * Constant for 'ReturnSellerInfoOverdue' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when
     * information from the seller (e.g. a Return Merchandise Authorization number) is
     * overdue.
     *  <br><br>
     *  This notification will appear in the <b>getReturnDetail</b> call response. See
     * <a
     * href="https://developer.ebay.com/api-docs/static/pn_return-seller-info-overdue.html"
     * target="_blank">ReturnSellerInfoOverdue</a> for additional information about
     * this notification.
     */
    public const VAL_RETURN_SELLER_INFO_OVERDUE = 'ReturnSellerInfoOverdue';

    /**
     * Constant for 'ReturnShipped' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when the
     * buyer has shipped a return item back to the seller.
     *  <br><br>
     *  This notification will appear in the <b>getReturnDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_return-shipped.html"
     * target="_blank">ReturnShipped</a> for additional information about this
     * notification.
     */
    public const VAL_RETURN_SHIPPED = 'ReturnShipped';

    /**
     * Constant for 'ReturnDelivered' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when a
     * return item is received by the seller.
     *  <br><br>
     *  This notification will appear in the <b>getReturnDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_return-delivered.html"
     * target="_blank">ReturnDelivered</a> for additional information about this
     * notification.
     */
    public const VAL_RETURN_DELIVERED = 'ReturnDelivered';

    /**
     * Constant for 'ReturnRefundOverdue' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when a
     * refund to the buyer is overdue on a return.
     *  <br><br>
     *  This notification will appear in the <b>getReturnDetail</b> call response. See
     * <a
     * href="https://developer.ebay.com/api-docs/static/pn_return-refund-overdue.html"
     * target="_blank">ReturnRefundOverdue</a> for additional information about this
     * notification.
     */
    public const VAL_RETURN_REFUND_OVERDUE = 'ReturnRefundOverdue';

    /**
     * Constant for 'ReturnClosed' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when a
     * return request is closed.
     *  <br><br>
     *  This notification will appear in the <b>getReturnDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_return-closed.html"
     * target="_blank">ReturnClosed</a> for additional information about this
     * notification.
     */
    public const VAL_RETURN_CLOSED = 'ReturnClosed';

    /**
     * Constant for 'ReturnEscalated' value.
     *
     * This notification is applicable to both buyers and sellers and is sent when a
     * return request is escalated into a eBay Money Back Guarantee case.
     *  <br><br>
     *  This notification will appear in the <b>getReturnDetail</b> call response. See
     * <a href="https://developer.ebay.com/api-docs/static/pn_return-escalated.html"
     * target="_blank">ReturnEscalated</a> for additional information about this
     * notification.
     */
    public const VAL_RETURN_ESCALATED = 'ReturnEscalated';

    /**
     * Constant for 'BuyerCancelRequested' value.
     *
     * This notification is sent to a subscribed seller when a buyer has requested an
     * order cancellation.
     */
    public const VAL_BUYER_CANCEL_REQUESTED = 'BuyerCancelRequested';

    /**
     * Constant for 'UnmatchedPaymentReceived' value.
     *
     * This notification is no longer applicable. Do not use.
     */
    public const VAL_UNMATCHED_PAYMENT_RECEIVED = 'UnmatchedPaymentReceived';

    /**
     * Constant for 'RefundSuccess' value.
     *
     * This notification is sent to a subscribed seller when a refund to the buyer has
     * been successfully processed.
     */
    public const VAL_REFUND_SUCCESS = 'RefundSuccess';

    /**
     * Constant for 'RefundFailure' value.
     *
     * This notification is sent to a subscribed seller when a refund to the buyer has
     * failed.
     */
    public const VAL_REFUND_FAILURE = 'RefundFailure';

    /**
     * Constant for 'OrderInquiryOpened' value.
     *
     * This event type has been deprecated along with legacy user disputes. As an
     * alternative, subscribe to <b>EBPMyResponseDue</b> event type.
     */
    public const VAL_ORDER_INQUIRY_OPENED = 'OrderInquiryOpened';

    /**
     * Constant for 'OrderInquiryReminderForEscalation' value.
     *
     * This notification is sent to a subscribed seller alerting the seller that the
     * buyer will soon be eligible to escalate an Item Not Received inquiry into an
     * eBay Money Back Guarantee case.
     */
    public const VAL_ORDER_INQUIRY_REMINDER_FOR_ESCALATION = 'OrderInquiryReminderForEscalation';

    /**
     * Constant for 'OrderInquiryProvideShipmentInformation' value.
     *
     * This event type has been deprecated along with legacy user disputes.
     */
    public const VAL_ORDER_INQUIRY_PROVIDE_SHIPMENT_INFORMATION = 'OrderInquiryProvideShipmentInformation';

    /**
     * Constant for 'OrderInquiryClosed' value.
     *
     * This event type has been deprecated along with legacy user disputes. As an
     * alternative, subscribe to <b>EBPClosedCase</b> event type.
     */
    public const VAL_ORDER_INQUIRY_CLOSED = 'OrderInquiryClosed';

    /**
     * Constant for 'OrderInquiryEscalatedToCase' value.
     *
     * This event type has been deprecated along with legacy user disputes. As an
     * alternative, subscribe to <b>EBPEscalatedCase</b> event type.
     */
    public const VAL_ORDER_INQUIRY_ESCALATED_TO_CASE = 'OrderInquiryEscalatedToCase';

    /**
     * Constant for 'ItemReadyForPickup' value.
     *
     * This notification is sent to a subscribed buyer when an In-Store Pickup or Click
     * and Collect order is ready to be picked up at the merchant's store.
     */
    public const VAL_ITEM_READY_FOR_PICKUP = 'ItemReadyForPickup';

    /**
     * Constant for 'ItemOutOfStock' value.
     *
     * This notification is sent to a subscribed seller when the quantity of a
     * multiple-quantity, Good 'Til Cancelled, fixed-price listing has reached '0'.
     * This notification will only be sent if the seller has the out-of-stock feature
     * turned on in My eBay Preferences.
     */
    public const VAL_ITEM_OUT_OF_STOCK = 'ItemOutOfStock';

    /**
     * Constant for 'PaymentReminder' value.
     *
     * This notification is sent to a subscribed buyer if payment is still due for an
     * order.
     */
    public const VAL_PAYMENT_REMINDER = 'PaymentReminder';

    /**
     * Constant for 'M2MMessageStatusChange' value.
     *
     * This notification is sent to a subscribed buyer or seller if the status of a
     * member-to-member message has changed.
     */
    public const VAL_M_2_MMESSAGE_STATUS_CHANGE = 'M2MMessageStatusChange';

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
