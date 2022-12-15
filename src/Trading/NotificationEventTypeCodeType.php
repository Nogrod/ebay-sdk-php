<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing NotificationEventTypeCodeType
 *
 * Enumerated type that contains the complete list of platform notifications that
 *  can be sent out to subscribed users, servers, or applications. Some notifications are
 *  only sent to buyers or sellers, and some are sent to both buyers and sellers.
 * XSD Type: NotificationEventTypeCodeType
 */
class NotificationEventTypeCodeType
{
    /**
     * Constant for 'None' value.
     *
     * This notification is for internal or future use.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'OutBid' value.
     *
     * This notification is sent to a subscribed buyer when another buyer has outbid
     *  (placed a higher bid) the subscribed buyer on an auction listing, and
     *  the subscribed buyer is no longer the current high bidder.
     *  <br><br>
     *  This notification is only applicable for auction listings.
     */
    public const VAL_OUT_BID = 'OutBid';

    /**
     * Constant for 'EndOfAuction' value.
     *
     * This notification is sent to all subscribed bidders of an auction item and to
     *  the subscribed seller of the auction item as soon as the auction listing ends
     *  with or without a winning bidder. This notification will also be sent to
     *  subscribed bidders and the subscribed seller if the auction ends as a
     *  result of a buyer using the auction listing's Buy It Now feature.
     *  <br><br>
     *  This notification is only applicable for auction listings.
     */
    public const VAL_END_OF_AUCTION = 'EndOfAuction';

    /**
     * Constant for 'AuctionCheckoutComplete' value.
     *
     * This notification is sent to the subscribed seller when the winning bidder
     *  or buyer has paid for the auction or fixed-price item and completed the
     * checkout process.
     *  <br><br>
     *  For multiple line item orders, an <b>AuctionCheckoutComplete</b> notification
     * is only generated for one of the line items in the order.
     */
    public const VAL_AUCTION_CHECKOUT_COMPLETE = 'AuctionCheckoutComplete';

    /**
     * Constant for 'CheckoutBuyerRequestsTotal' value.
     *
     * This notification is sent to a subscribed seller when a buyer/winning bidder
     *  is requesting a total price before paying for the item.
     *  <br><br>
     *  This notification is applicable for auction listings and for fixed-price
     * listings that do not require immediate payment.
     */
    public const VAL_CHECKOUT_BUYER_REQUESTS_TOTAL = 'CheckoutBuyerRequestsTotal';

    /**
     * Constant for 'Feedback' value.
     *
     * This notification is sent to a subscribed buyer or seller when that buyer or
     * seller has left Feedback for the other party in the order, or has received
     * Feedback from the other party in the order. Feedback is given at the order line
     * item level.
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
     * This notification is sent to a subscribed seller each time a buyer purchases an
     * item in a single or multiple-quantity, fixed-price listing.
     *  <br><br>
     *  This notification is only applicable for fixed-price listings.
     */
    public const VAL_FIXED_PRICE_TRANSACTION = 'FixedPriceTransaction';

    /**
     * Constant for 'SecondChanceOffer' value.
     *
     * This notification is sent to a subscribed buyer when that buyer is offered a
     * Second Chance Offer from the seller, after that buyer failed to win the original
     * auction of the item.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
     */
    public const VAL_SECOND_CHANCE_OFFER = 'SecondChanceOffer';

    /**
     * Constant for 'AskSellerQuestion' value.
     *
     * This notification is sent to a subscribed seller when an eBay user has used the
     * Ask a Question feature on the seller's active listing. An eBay user does not
     * have to be an active bidder on an auction listing to ask a seller a question.
     *  <br><br>
     *  If subscribed to by a seller and when applicable, this notification will appear
     * in the <b>GetMemberMessages</b> call response.
     */
    public const VAL_ASK_SELLER_QUESTION = 'AskSellerQuestion';

    /**
     * Constant for 'ItemListed' value.
     *
     * This notification is sent to a subscribed seller each time one of the subscribed
     * seller's items is listed or relisted. This notification is also triggered when
     * the Unpaid Item preferences relists an item for the seller.
     */
    public const VAL_ITEM_LISTED = 'ItemListed';

    /**
     * Constant for 'ItemRevised' value.
     *
     * This notification is sent to a subscribed seller when one of the subscribed
     * seller's items is revised.
     *  <br><br>
     *  If subscribed to by a seller and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
     */
    public const VAL_ITEM_REVISED = 'ItemRevised';

    /**
     * Constant for 'BuyerResponseDispute' value.
     *
     * This notification is sent to a subscribed seller each time a buyer responds to
     * an Unpaid Item or Cancel Transaction case that the subscribed seller has opened
     * up against the buyer.
     */
    public const VAL_BUYER_RESPONSE_DISPUTE = 'BuyerResponseDispute';

    /**
     * Constant for 'SellerOpenedDispute' value.
     *
     * This notification is sent to a subscribed buyer if a seller opens up an Unpaid
     * Item or Cancel Transaction case against the subscribed buyer.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * through the <b>GetDispute</b> call response.
     */
    public const VAL_SELLER_OPENED_DISPUTE = 'SellerOpenedDispute';

    /**
     * Constant for 'SellerRespondedToDispute' value.
     *
     * This notification is sent to a subscribed buyer each time a seller responds to
     * an Item Not Received or (Item) Significantly Not As Described case that the
     * subscribed buyer has opened up against the seller.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetDispute</b> call response.
     */
    public const VAL_SELLER_RESPONDED_TO_DISPUTE = 'SellerRespondedToDispute';

    /**
     * Constant for 'SellerClosedDispute' value.
     *
     * This notification is sent to the subscribed buyer and seller if the seller
     * closes an Unpaid Item or Cancel Transaction case against the buyer.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetDispute</b> call response.
     */
    public const VAL_SELLER_CLOSED_DISPUTE = 'SellerClosedDispute';

    /**
     * Constant for 'BestOffer' value.
     *
     * This notification is sent to a subscribed seller if a potential buyer has made a
     * Best Offer on a Best Offer-enabled listing.
     *  <br><br>
     *  If subscribed to by a seller and when applicable, this notification will appear
     * in the <b>GetBestOffers</b> call response.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature can be set for auction listings on the US, Canada, UK,
     * Germany, Australia, France, Italy, and Spain marketplaces, but keep in mind that
     * Best Offer and Buy It Now cannot be used simultaneously in a listing. Also, once
     * a qualifying bid is made on an auction listing, the Best Offer feature is
     * disabled, and any pending offer or counteroffers are no longer valid.
     *  </span>
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
     * This notification is sent to a subscribed seller when a buyer opens an Item Not
     * Received dispute against that seller.
     *  <br><br>
     *  If subscribed to by the seller and when applicable, this notification will
     * appear in the <b>GetDispute</b> call response.
     */
    public const VAL_INRBUYER_OPENED_DISPUTE = 'INRBuyerOpenedDispute';

    /**
     * Constant for 'INRBuyerRespondedToDispute' value.
     *
     * This notification is sent to a subscribed seller when a buyer responds to an
     * Item Not Received dispute opened by that buyer.
     *  <br><br>
     *  If subscribed to by the seller and when applicable, this notification will
     * appear in the <b>GetDispute</b> call response.
     */
    public const VAL_INRBUYER_RESPONDED_TO_DISPUTE = 'INRBuyerRespondedToDispute';

    /**
     * Constant for 'INRBuyerClosedDispute' value.
     *
     * This notification is sent to a subscribed seller when a buyer closes an Item Not
     * Received dispute opened by that buyer.
     *  <br><br>
     *  If subscribed to by the seller and when applicable, this notification will
     * appear in the <b>GetDispute</b> call response.
     */
    public const VAL_INRBUYER_CLOSED_DISPUTE = 'INRBuyerClosedDispute';

    /**
     * Constant for 'INRSellerRespondedToDispute' value.
     *
     * This notification is sent to a subscribed buyer when a seller responds to an
     * Item Not Received dispute opened by the buyer.
     *  <br><br>
     *  If subscribed to by the buyer and when applicable, this notification will
     * appear in the <b>GetDispute</b> call response.
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
     * This notification is sent to a subscribed buyer when a listing that the buyer is
     * watching is ending soon. This event has a <b>TimeLeft</b> property that defines
     * the 'ending soon' threshold value.
     */
    public const VAL_WATCHED_ITEM_ENDING_SOON = 'WatchedItemEndingSoon';

    /**
     * Constant for 'ItemClosed' value.
     *
     * This notification is sent to a subscribed buyer or seller when a listing ends.
     * This notification can be triggered by an
     *  <b>ItemWon</b>, an <b>ItemSold</b>, or an <b>ItemUnsold</b> event.
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
     * This notification is sent to a subscribed seller when an eBay listing ends in a
     * sale.
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
     * This notification is sent to a subscribed buyer or seller when that user has
     * modified their eBay user ID.
     */
    public const VAL_USER_IDCHANGED = 'UserIDChanged';

    /**
     * Constant for 'EmailAddressChanged' value.
     *
     * This notification is sent to a subscribed buyer or seller when that user has
     * changed the email address associated with the user account. This notification is
     * available for Client Alerts and for SMS only. Not applicable to Platform
     * Notifications.
     */
    public const VAL_EMAIL_ADDRESS_CHANGED = 'EmailAddressChanged';

    /**
     * Constant for 'PasswordChanged' value.
     *
     * This notification is sent to a subscribed buyer or seller when that user has
     * changed the password used for login. This notification is available for Client
     * Alerts and for SMS only. Not applicable to Platform Notifications.
     */
    public const VAL_PASSWORD_CHANGED = 'PasswordChanged';

    /**
     * Constant for 'PasswordHintChanged' value.
     *
     * This notification is sent to a subscribed buyer or seller when that user has
     * changed the password hint. This notification is available for Client Alerts and
     * for SMS only. Not applicable to Platform Notifications.
     */
    public const VAL_PASSWORD_HINT_CHANGED = 'PasswordHintChanged';

    /**
     * Constant for 'PaymentDetailChanged' value.
     *
     * This notification is sent to a subscribed seller when that seller has changed
     * the payment methods used to pay seller fees for the account. This notification
     * is available for Client Alerts and for SMS only. Not applicable to Platform
     * Notifications.
     */
    public const VAL_PAYMENT_DETAIL_CHANGED = 'PaymentDetailChanged';

    /**
     * Constant for 'AccountSuspended' value.
     *
     * This notification is sent to a subscribed buyer or seller when that eBay user's
     * account is suspended. This notification is available for Client Alerts and for
     * SMS only. Not applicable to Platform Notifications.
     */
    public const VAL_ACCOUNT_SUSPENDED = 'AccountSuspended';

    /**
     * Constant for 'AccountSummary' value.
     *
     * An informational alert about account activity. A buyer or seller can subscribe
     * to receive an account activity summary via SMS or Client Alerts. The user can
     * specify the period (time range) for the account summary and can select how often
     * the summary is to be sent. It is not triggered by an event but rather by an eBay
     * daemon process that monitors a schedule database.
     */
    public const VAL_ACCOUNT_SUMMARY = 'AccountSummary';

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
     * This notification is sent to a subscribed buyer when that buyer adds an item to
     * the Watch List.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
     */
    public const VAL_ITEM_ADDED_TO_WATCH_LIST = 'ItemAddedToWatchList';

    /**
     * Constant for 'ItemRemovedFromWatchList' value.
     *
     * This notification is sent to a subscribed buyer when that buyer removes an item
     * from the Watch List.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
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
     * This notification is sent to a subscribed buyer or seller when that user leaves
     * feedback for an order partner.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetFeedback</b> call response.
     */
    public const VAL_FEEDBACK_LEFT = 'FeedbackLeft';

    /**
     * Constant for 'FeedbackReceived' value.
     *
     * This notification is sent to a subscribed buyer or seller when that user
     * receives feedback from an order partner.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetFeedback</b> call response.
     */
    public const VAL_FEEDBACK_RECEIVED = 'FeedbackReceived';

    /**
     * Constant for 'FeedbackStarChanged' value.
     *
     * This notification is sent to a subscribed buyer or seller when that user's
     * Feedback star has changed.
     *  Sent to a subscribing third party when a user's Feedback star level changes.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetUser</b> call response.
     */
    public const VAL_FEEDBACK_STAR_CHANGED = 'FeedbackStarChanged';

    /**
     * Constant for 'BidPlaced' value.
     *
     * This notification is sent to a subscribed buyer when that buyer places a bid for
     * an auction item.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
     */
    public const VAL_BID_PLACED = 'BidPlaced';

    /**
     * Constant for 'BidReceived' value.
     *
     * This notification is sent to a subscribed seller each time a prospective buyer
     * places a bid for the seller's auction item.
     *  <br><br>
     *  If subscribed to by a seller and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
     */
    public const VAL_BID_RECEIVED = 'BidReceived';

    /**
     * Constant for 'ItemWon' value.
     *
     * This notification is sent to a subscribed buyer if that buyer is the winner of
     * an auction item.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
     */
    public const VAL_ITEM_WON = 'ItemWon';

    /**
     * Constant for 'ItemLost' value.
     *
     * This notification is sent to a subscribed buyer if that buyer did not end up as
     * the highest bidder for an auction item.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
     */
    public const VAL_ITEM_LOST = 'ItemLost';

    /**
     * Constant for 'ItemUnsold' value.
     *
     * This notification is sent to a subscribed seller when an auction listing ends
     * with no winning bidder or when a fixed-price listing ends with no sale(s).
     *  <br><br>
     *  If subscribed to by a seller and when applicable, this notification will appear
     * in the <b>GetItem</b> call response.
     */
    public const VAL_ITEM_UNSOLD = 'ItemUnsold';

    /**
     * Constant for 'CounterOfferReceived' value.
     *
     * This notification is sent to a subscribed buyer when a seller makes a counter
     * offer to the buyer's Best Offer on an item.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetBestOffers</b> call response.
     */
    public const VAL_COUNTER_OFFER_RECEIVED = 'CounterOfferReceived';

    /**
     * Constant for 'BestOfferDeclined' value.
     *
     * This notification is sent to a subscribed buyer when a seller declines the
     * buyer's Best Offer on an item.
     *  <br><br>
     *  If subscribed to by a buyer and when applicable, this notification will appear
     * in the <b>GetBestOffers</b> call response.
     */
    public const VAL_BEST_OFFER_DECLINED = 'BestOfferDeclined';

    /**
     * Constant for 'BestOfferPlaced' value.
     *
     * This notification is sent to a subscribed seller each time a prospective buyer
     * places a Best Offer on an item.
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
     * This notification is sent to a subscribed buyer or seller if that user's
     * authentication token is revoked.
     *  <br><br>
     *  If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetTokenStatus</b> call response.
     */
    public const VAL_TOKEN_REVOCATION = 'TokenRevocation';

    /**
     * Constant for 'BulkDataExchangeJobCompleted' value.
     *
     * This notification is sent to a subscribed seller when that seller's Bulk Data
     * Exchange job completes.
     */
    public const VAL_BULK_DATA_EXCHANGE_JOB_COMPLETED = 'BulkDataExchangeJobCompleted';

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
     * This notification is sent to a subscribing buyer or seller when a response to
     * the eBay Money Back Guarantee case is due from that user. When an eBay Money
     * Back Guarantee case is opened, this notification is only sent to the seller
     * involved in the case and not the buyer.
     */
    public const VAL_EBPMY_RESPONSE_DUE = 'EBPMyResponseDue';

    /**
     * Constant for 'EBPOtherPartyResponseDue' value.
     *
     * This notification is sent to the subscribed buyer or seller when a response to
     * the eBay Money Back Guarantee case is due from the other party in the case.
     */
    public const VAL_EBPOTHER_PARTY_RESPONSE_DUE = 'EBPOtherPartyResponseDue';

    /**
     * Constant for 'EBPEscalatedCase' value.
     *
     * This notification is sent to the subscribed buyer or seller when an eBay Money
     * Back Guarantee case is escalated to eBay customer support.
     */
    public const VAL_EBPESCALATED_CASE = 'EBPEscalatedCase';

    /**
     * Constant for 'EBPAppealedCase' value.
     *
     * This notification is sent to the subscribed buyer or seller when the decision of
     * an eBay Money Back Guarantee case is appealed.
     */
    public const VAL_EBPAPPEALED_CASE = 'EBPAppealedCase';

    /**
     * Constant for 'EBPMyPaymentDue' value.
     *
     * This notification is sent to the subscribed seller when payment (to eBay or
     * buyer) related to the outcome of an eBay Money Back Guarantee case is due.
     */
    public const VAL_EBPMY_PAYMENT_DUE = 'EBPMyPaymentDue';

    /**
     * Constant for 'EBPPaymentDone' value.
     *
     * This notification is sent to the subscribed seller when payment (to eBay or
     * buyer) related to the outcome of an eBay Money Back Guarantee case is processed.
     */
    public const VAL_EBPPAYMENT_DONE = 'EBPPaymentDone';

    /**
     * Constant for 'EBPClosedAppeal' value.
     *
     * This notification is sent to the subscribed buyer or seller when an appeal of an
     * eBay Money Back Guarantee case decision has been closed.
     */
    public const VAL_EBPCLOSED_APPEAL = 'EBPClosedAppeal';

    /**
     * Constant for 'EBPClosedCase' value.
     *
     * This notification is sent to the subscribed buyer or seller when an eBay Money
     * Back Guarantee case has been closed.
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
     * This notification is sent to a subscribed buyer or seller when an eBay Money
     * Back Guarantee case has been put on hold by eBay customer support.
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
     * This notification is sent to a subscribed buyer or seller when a return request
     * involving those users is created.
     */
    public const VAL_RETURN_CREATED = 'ReturnCreated';

    /**
     * Constant for 'ReturnWaitingForSellerInfo' value.
     *
     * This notification is sent to a subscribed seller when a return request is
     * waiting for information from the seller, like a Return Merchandise Authorization
     * (RMA) number or a correct return address.
     */
    public const VAL_RETURN_WAITING_FOR_SELLER_INFO = 'ReturnWaitingForSellerInfo';

    /**
     * Constant for 'ReturnSellerInfoOverdue' value.
     *
     * This notification is sent to a subscribed buyer or seller when information from
     * the seller (e.g. a Return Merchandise Authorization number) is overdue.
     */
    public const VAL_RETURN_SELLER_INFO_OVERDUE = 'ReturnSellerInfoOverdue';

    /**
     * Constant for 'ReturnShipped' value.
     *
     * This notification is sent to a subscribed buyer or seller when the buyer has
     * shipped a return item back to the seller.
     */
    public const VAL_RETURN_SHIPPED = 'ReturnShipped';

    /**
     * Constant for 'ReturnDelivered' value.
     *
     * This notification is sent to a subscribed buyer or seller when a return item is
     * received by the seller.
     */
    public const VAL_RETURN_DELIVERED = 'ReturnDelivered';

    /**
     * Constant for 'ReturnRefundOverdue' value.
     *
     * This notification is sent to a subscribed buyer or seller when a refund to the
     * buyer is overdue on a return.
     */
    public const VAL_RETURN_REFUND_OVERDUE = 'ReturnRefundOverdue';

    /**
     * Constant for 'ReturnClosed' value.
     *
     * This notification is sent to a subscribed buyer or seller when a return request
     * is closed.
     */
    public const VAL_RETURN_CLOSED = 'ReturnClosed';

    /**
     * Constant for 'ReturnEscalated' value.
     *
     * This notification is sent to a subscribed buyer or seller when a return request
     * is escalated into a eBay Money Back Guarantee case.
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
     * This notification is sent to a subscribed seller when the buyer has opened up an
     * Item Not Received inquiry against an order line item.
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
     * This notification is sent to a subscribed seller alerting the seller that he/she
     * should provide shipment tracking information to the buyer in order to expedite
     * the closure of an Item Not Received inquiry, and to avoid the possibility that
     * the buyer will escalate the inquiry into an eBay Money Back Guarantee case.
     */
    public const VAL_ORDER_INQUIRY_PROVIDE_SHIPMENT_INFORMATION = 'OrderInquiryProvideShipmentInformation';

    /**
     * Constant for 'OrderInquiryClosed' value.
     *
     * This notification is sent to a subscribed seller when an Item Not Received
     * inquiry against an order line item has closed.
     */
    public const VAL_ORDER_INQUIRY_CLOSED = 'OrderInquiryClosed';

    /**
     * Constant for 'OrderInquiryEscalatedToCase' value.
     *
     * This notification is sent to a subscribed seller when an Item Not Received
     * inquiry against an order line item has been escalated to an eBay Money Back
     * Guarantee case.
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
     * Constant for 'BuyerNoShow' value.
     *
     * This notification is sent to a subscribed seller if an eBay courier was unable
     * to deliver an eBay Scheduled Delivery order to a buyer. This notification is
     * only applicable for eBay Scheduled Delivery orders, which are only available in
     * the London (UK) area.
     */
    public const VAL_BUYER_NO_SHOW = 'BuyerNoShow';

    /**
     * Constant for 'WebnextMobilePhotoSync' value.
     *
     * This notification is no longer applicable.
     */
    public const VAL_WEBNEXT_MOBILE_PHOTO_SYNC = 'WebnextMobilePhotoSync';

    /**
     * Constant for 'PaymentReminder' value.
     *
     * This notification is sent to a subscribed buyer if payment is still due for an
     * order.
     */
    public const VAL_PAYMENT_REMINDER = 'PaymentReminder';

    /**
     * Constant for 'EBNOrderPickedUp' value.
     *
     * This notification is sent to a subscribed seller if an eBay courier has picked
     * up an eBay On Demand Delivery order from a store for delivery to a buyer. This
     * notification is only applicable for eBay On Demand Delivery orders, which are
     * only available in the London (UK) area.
     */
    public const VAL_EBNORDER_PICKED_UP = 'EBNOrderPickedUp';

    /**
     * Constant for 'EBNOrderCanceled' value.
     *
     * This notification is sent to a subscribed seller if an eBay On Demand Delivery
     * order has been cancelled. This notification is only applicable for eBay On
     * Demand Delivery orders, which are only available in the London (UK) area.
     */
    public const VAL_EBNORDER_CANCELED = 'EBNOrderCanceled';

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
