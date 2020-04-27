<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TransactionType
 *
 * Contains information about a sales transaction from an eBay listing. This identifier is automatically created by the eBay system once a buyer has committed to make a purchase in an
 *  auction or fixed-price listing. A fixed-priced listing (single or multiple-variation) with multiple quantity can spawn one or more sales transactions.
 * XSD Type: TransactionType
 */
class TransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The total amount the buyer paid for the order line item. This
     *  amount includes all costs such as item cost, shipping/handling charges, and sales tax that is applied to the order by the seller. If the
     *  seller allowed the buyer to change the total for an order, the buyer is
     *  able to change the total up until the time when Checkout status is
     *  Complete. Determine whether the buyer changed the amount by retrieving the
     *  order line item data and comparing the <b>AmountPaid</b> value to
     *  what the seller expected. If multiple order line items
     *  between the same buyer and seller have been combined into a 'Combined
     *  Invoice' order, the <b>AmountPaid</b> value returned for each line item in the order reflects the total amount paid for the entire order,
     *  and not for the individual order line item. In a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call, you can determine which
     *  order line items belong to the same 'Combined Invoice' order by checking
     *  to see if the <b>ContainingOrder.OrderID</b> value is the same.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>AmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>AmountPaid</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amountPaid
     */
    private $amountPaid = null;

    /**
     * This value indicates the dollar amount by which the buyer has adjusted the the total cost of the sales transaction. Adjustments to sales transaction costs may include shipping and handling, buyer discounts, or added services. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
     *  <br><br>
     *  This field is always returned, even if there was no cost adjustment to the sales transaction. Its value will just be '0.0' if there was no cost adjustment.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $adjustmentAmount
     */
    private $adjustmentAmount = null;

    /**
     * This field shows the converted value of <b>AdjustmentAmount</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned, even if there was no cost adjustment to the sales transaction. Its value will just be '0.0' if there was no cost adjustment. This value should be the same as the value in <b>AdjustmentAmount</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedAdjustmentAmount
     */
    private $convertedAdjustmentAmount = null;

    /**
     * Container consisting of user and shipping details for the order's buyer. To be returned by <b>GetItemsAwaitingFeedback</b> the seller
     *  must be the one making the request.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $buyer
     */
    private $buyer = null;

    /**
     * Container consisting of shipping-related details for a sales transaction. Shipping details may include shipping rates, package dimensions, handling costs, excluded shipping locations (if specified), shipping service options, sales tax information (if applicable), and shipment tracking details (if shipped).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For <b>GetOrders</b> and <b>GetOrderTransactions</b>, a <b>ShippingDetails</b> container is returned at the order at line item level.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingDetailsType $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * This field shows the converted value of <b>AmountPaid</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned for paid orders. This value should be the same as the value in <b>AmountPaid</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>ConvertedAmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>ConvertedAmountPaid</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedAmountPaid
     */
    private $convertedAmountPaid = null;

    /**
     * This field shows the converted value of <b>TransactionPrice</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned for sales transactions. This value should be the same as the value in <b>TransactionPrice</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedTransactionPrice
     */
    private $convertedTransactionPrice = null;

    /**
     * This timestamp indicates date/time when the sales transaction occurred. A sales transaction is created when there is a commitment to buy, or when the buyer purchases the item through a 'Buy it Now' option. For auction listings, a sales transaction is created when that listing ends with a high bidder whose bid meets or exceeds the Reserve Price (if set). For a fixed-price listing or a 'Buy It Now' auction listing, a sales transaction is created once the buyer clicks the Buy button.
     *
     * @var \DateTime $createdDate
     */
    private $createdDate = null;

    /**
     * This value indicates whether or not the seller requires a deposit for the purchase of a motor vehicle. This field is only applicable to motor vehicle listings that require an initial deposit. For these listings, its value is returned as 'OtherMethod'. For any other type of listing, its value is returned as 'None'.
     *
     * @var string $depositType
     */
    private $depositType = null;

    /**
     * This container consists of relevant details about the listing associated with the sales transaction. Which listing fields are returned under this container will depend on the listing, the eBay marketplace, and the API call.
     *  <br><br>
     *  In an <b>AddOrder</b> call, only the unique identifier of the listing (<b>ItemID</b>) is needed to help identify the sales transaction to combine into a 'Combined Invoice' order.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * This value indicates the quantity of the line item purchased at the same
     *  time by the same buyer from one listing. For auction listings, this value
     *  is always '1'. For fixed-price, non-variation listings, this value can be
     *  greater than 1.
     *
     * @var int $quantityPurchased
     */
    private $quantityPurchased = null;

    /**
     * Container consisting of checkout/payment status details for an order line item. Several of these fields change values during the checkout flow.
     *  <br><br>
     *  For <b>GetOrders</b>, only a limited number of applicable fields are returned at the order line item level. The
     *  fields indicating the status of the order are actually found in the
     *  <b>OrderArray.Order.CheckoutStatus</b> container.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionStatusType $status
     */
    private $status = null;

    /**
     * Unique identifier for an eBay sales transaction. This identifier
     *  is created once there is a commitment from a buyer to
     *  purchase an item, or if/when the buyer actually purchases the line item through a 'Buy it Now' option. An <b>ItemID</b>/<b>TransactionID</b> pair can be used and referenced during an order checkout flow to identify a line item.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer, seller, or PayPal (if payment method is PayPal), and no longer returned at all to third parties (except for PayPal). If using a Trading WSDL older than Version 1019, transaction ID is only returned to the buyer, seller or PayPal, and a dummy value of <code>10000000000000</code> will be returned to all third parties (except for PayPal).
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * The sale price for one unit of the line item. This price does not include any other costs like shipping charges or sales tax, and its value will remain the same before and after payment. If multiple units were purchased through a single-variation, fixed-price listing, to get the subtotal of the units purchased, the <b>TransactionPrice</b> value would have to be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br>
     *  For a motor vehicle listing that required a deposit/down payment, the amount in the <b>TransactionPrice</b> is actually the deposit amount. <br><br>
     *  <strong>For GetMyeBaySelling</strong>: this field is only returned if the transaction came as a result of a buyer's Best Offer accepted by the seller. Otherwise, the <b>Transaction.TotalPrice</b> field should be viewed instead.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $transactionPrice
     */
    private $transactionPrice = null;

    /**
     * Indicates whether or not the sales transaction resulted from the seller accepting a Best Offer (or Counter Offer) from a buyer.
     *
     * @var bool $bestOfferSale
     */
    private $bestOfferSale = null;

    /**
     * VAT rate for the line item. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a <b>VATPercent</b>, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max precision 3 decimal places. Max length 5 characters. Note: The View Item page displays the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored.
     *
     * @var float $vATPercent
     */
    private $vATPercent = null;

    /**
     * Container consisting of payment details for an eBay sales transaction, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned after payment for the order has occurred.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real transaction identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to start using <strong>MonetaryDetails</strong> as soon as possible.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ExternalTransactionType[] $externalTransaction
     */
    private $externalTransaction = [
        
    ];

    /**
     * This container consists of Selling Manager product details and is only
     *  returned if the item was listed through Selling Manager Pro.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    private $sellingManagerProductDetails = null;

    /**
     * The shipping service actually selected by the buyer from the shipping services
     *  offered by the seller. The buyer typically selects the shipping service at checkout/payment time.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType $shippingServiceSelected
     */
    private $shippingServiceSelected = null;

    /**
     * Display message from buyer. This field holds transient data that is only
     *  being returned in Checkout-related notifications.
     *
     * @var string $buyerMessage
     */
    private $buyerMessage = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $dutchAuctionBid
     */
    private $dutchAuctionBid = null;

    /**
     * Specifies the paid status of the order.
     *
     * @var string $buyerPaidStatus
     */
    private $buyerPaidStatus = null;

    /**
     * Specifies the paid status of the order.
     *
     * @var string $sellerPaidStatus
     */
    private $sellerPaidStatus = null;

    /**
     * Indicates the time when the buyer paid for the order and/or order was marked as 'Paid' by the seller. This field is returned once payment has been made by the buyer.
     *  <br><br>
     *  This value will only be visible to the user on either side of the order. An order can be marked as 'Paid' in the following ways:
     *  <ul>
     *  <li>Automatically when a payment is made through eBay's system</li>
     *  <li>Seller marks the item as paid in My eBay or through Selling Manager Pro </li>
     *  <li>Programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> calls.</li>
     *  </ul>
     *
     * @var \DateTime $paidTime
     */
    private $paidTime = null;

    /**
     * Indicates the time when the line item was marked as 'Shipped'. This value will only be visible to the user on either side of the order. An order can be marked as 'Shipped' by purchasing an eBay shipping label, providing shipment tracking in My eBay or through Selling Manager Pro, or programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> call.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer (or marked as shipped), the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
     *  </span>
     *
     * @var \DateTime $shippedTime
     */
    private $shippedTime = null;

    /**
     * This field indicates the total price for a sales transaction. Before payment, this dollar value will be the price before a shipping service option is selected. Once a shipping service option is selected, the price in this field will be updated to reflect the shipping and handling costs associated with that shipping service option.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalPrice
     */
    private $totalPrice = null;

    /**
     * This container consists of Feedback left by the caller for their order
     *  partner. This container is only returned if the order is complete and
     *  feedback on the order line item has been left by the caller.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackLeft
     */
    private $feedbackLeft = null;

    /**
     * This container consists of Feedback received by the caller from their
     *  order partner. This container is only returned if the order is complete and
     *  feedback on the order line item has been received by the
     *  caller.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackReceived
     */
    private $feedbackReceived = null;

    /**
     * This container is returned in a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> response if the <b>IncludeContainingOrder</b> field is
     *  included in the call request payload and set to 'true'. This container will be returned whether the order line item is the only line item in the order, or if the order has multiple line items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The new <b>OrderLineItemCount</b> field is automatically returned if the user is using Version 1113 of the Trading WSDL (or newer, as versions roll out). If the user is using Versions 1107 or 1111 of the Trading WSDL, the <b>OrderLineItemCount</b> field will only be returned if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header and sets its value to <code>1113</code>. If a user is using a Trading WSDL older than 1107, the <b>OrderLineItemCount</b> field will not be returned.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\OrderType $containingOrder
     */
    private $containingOrder = null;

    /**
     * A Final Value Fee is calculated and charged to a seller's account
     *  immediately upon creation of an order line item. Note that this fee is created
     *  before the buyer makes a payment. As long as the <b>IncludeFinalValueFee</b> field is included in the call request and set to 'true', the Final Value Fee for each order line
     *  item is returned, regardless of the checkout status.
     *  <br><br>
     *  If a seller requests a Final Value Fee credit, the value of
     *  <b>Transaction.FinalValueFee</b> will not change if a credit is
     *  issued. The credit only appears in the seller's account data.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $finalValueFee
     */
    private $finalValueFee = null;

    /**
     * This field is no longer applicable
     *
     * @var \Nogrod\eBaySDK\Trading\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference
     */
    private $listingCheckoutRedirectPreference = null;

    /**
     * <span class="tablenote"><b>Note: </b> This container is only applicable for Half.com order refunds, and since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RefundType[] $refundArray
     */
    private $refundArray = null;

    /**
     * The site upon which the line item was purchased.
     *
     * @var string $transactionSiteID
     */
    private $transactionSiteID = null;

    /**
     * This value indicates the site on which the sales transaction originated.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Currently, the only value that should be returned in this field is <code>eBay</code>, as the Half.com marketplace no longer exists.
     *  </span>
     *
     * @var string $platform
     */
    private $platform = null;

    /**
     * This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     *
     * @var string $cartID
     */
    private $cartID = null;

    /**
     * This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     *
     * @var bool $sellerContactBuyerByEmail
     */
    private $sellerContactBuyerByEmail = null;

    /**
     * The seller's PayPal email address. This value is only revealed if it is the
     *  seller making the call.
     *
     * @var string $payPalEmailAddress
     */
    private $payPalEmailAddress = null;

    /**
     * Unique identifier for a <b>PaisaPay</b> transaction. Only applicable if <b>PaisaPay</b> was the payment method used.
     *
     * @var string $paisaPayID
     */
    private $paisaPayID = null;

    /**
     * For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection coverage,
     *  offered for the item at the time of purchase. Details of coverage are in the
     *  following sections of the View Item page: the Buy Safely section and the Payment
     *  Details section.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $buyerGuaranteePrice
     */
    private $buyerGuaranteePrice = null;

    /**
     * In a fixed-priced listing, a seller can offer variations of the same item.
     *  For example, the seller could create a fixed-priced listing for a t-shirt
     *  design, and offer the shirt in different colors and sizes. In this case, each
     *  color and size combination is a separate variation. Each variation can have
     *  a different quantity and price. Due to the possible price differentiation,
     *  buyers can buy multiple items from this listing at the same time, but all of
     *  the items must be of the same variation. One order line item is created
     *  whether one or multiple quanity of the same variation are purchased.
     *  <br><br>
     *  The <b>Variation</b> node contains information about which variation
     *  was purchased. Therefore, applications that process orders
     *  should always check to see if this node is present.
     *
     * @var \Nogrod\eBaySDK\Trading\VariationType $variation
     */
    private $variation = null;

    /**
     * This field is returned if a buyer left a comment for the seller during the
     *  left by buyer during the checkout flow.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @var string $buyerCheckoutMessage
     */
    private $buyerCheckoutMessage = null;

    /**
     * The sale price of the order line item. This amount does not take
     *  into account shipping and handling charges, sales tax, or any other costs related to the order line
     *  item. If multiple units were purchased through a non-
     *  variation, fixed-price listing, this value will reflect that. So, if the base cost of the order line item was $15.00, and a quantity of two were purchased (<b>Transaction.QuantityPurchased</b>) the value in this field would show as <code>30.00</code>.
     *  <br><br>
     *  To see the full price of the order line item, including any shipping and handling charges, and any sales tax, the (<b>Transaction.TotalPrice</b>) field value should be viewed instead. However, note that the <b>TotalPrice</b> field value is only updated after a shipping service option is selected and payment is made. And if the seller is offering free shipping, the values in the <b>TotalTransactionPrice</b> and the <b>TotalPrice</b> fields may be the same.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalTransactionPrice
     */
    private $totalTransactionPrice = null;

    /**
     * A container consisting of detailed tax information (sales tax, Goods and Services tax, or VAT) for a sales transaction. The <b>Taxes</b> container is returned if the order line item is subject to any taxes on the buyer's purchase. The information in this container supercedes/overrides any sales tax information in the <b>ShippingDetails.SalesTax</b> container.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Boolean value indicating whether or not an order line item is
     *  part of a bundle purchase using Product Configurator.
     *
     * @var bool $bundlePurchase
     */
    private $bundlePurchase = null;

    /**
     * The shipping cost paid by the buyer for the order line item. This field is only returned after checkout is complete.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $actualShippingCost
     */
    private $actualShippingCost = null;

    /**
     * The handling cost that the seller has charged for the order line item. This field is only returned after checkout is complete.
     *  <br><br>
     *  The value of this field is returned as zero dollars (0.0) if the seller did not specify a handling cost for the listing.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $actualHandlingCost
     */
    private $actualHandlingCost = null;

    /**
     * A unique identifier for an eBay order line item. This identifier is created as
     *  soon as there is a commitment to buy from the seller, or the buyer actually purchases the item using a 'Buy it Now' option.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, order line item ID is only returned to the buyer or seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * The generated eBay payment ID used by the buyer when he/she chooses electronic
     *  transfer as payment method for paying the seller. This field is only applicable to the eBay Germany site (Site ID 77).
     *
     * @var string $eBayPaymentID
     */
    private $eBayPaymentID = null;

    /**
     * This container consists of information related to the payment hold on the order line item, including the reason why the buyer's payment for the order line item is being held, the expected release date of the funds into the seller's account, and possible action(s) the seller can take to expedite the payout of funds into their account. This container is only returned if a payment hold has been placed on the order line item.
     *  <br><br>
     *  See <b>PaymentHoldReasonCodeType</b> for some details on why/when a seller's funds may be held, or visit the <a href="https://www.ebay.com/help/selling/getting-paid/getting-paid-items-youve-sold/pending-payments?id=4816">Pending payments</a> help topic for more information on eBay's payment hold policies.
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentHoldDetailType $paymentHoldDetails
     */
    private $paymentHoldDetails = null;

    /**
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item. This container is only returned if the order line item is eligible for seller discounts.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerDiscountsType $sellerDiscounts
     */
    private $sellerDiscounts = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $refundAmount
     */
    private $refundAmount = null;

    /**
     * This field is deprecated.
     *
     * @var string $refundStatus
     */
    private $refundStatus = null;

    /**
     * This field is returned if the <b>IncludeCodiceFiscale</b> flag is included in the request and set to <code>true</code>, and if the buyer has provided this value at checkout time.
     *  <br/><br/>
     *  This field is only applicable to buyers on the Italy and Spain sites. The Codice Fiscale number is unique for each Italian and Spanish citizen and is used for tax purposes.
     *
     * @var string $codiceFiscale
     */
    private $codiceFiscale = null;

    /**
     * If <strong>IsMultilegShipping</strong> is <code>true</code>, the order line item will be shipped internationally using the Global Shipping Program (GSP). With GSP, the shipment has a domestic leg and an international leg. In the domestic leg, the seller ships the item to eBay's shipping partner. This shipping address can be found in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. eBay's shipping partner will be responsible for the international leg of the shipment and the order's final destination.
     *
     * @var bool $isMultiLegShipping
     */
    private $isMultiLegShipping = null;

    /**
     * This container consists of details about the domestic leg of a Global Shipping Program (GSP) shipment. With GSP, the shipment has a domestic leg and an international leg. In the domestic leg, the seller ships the item to eBay's shipping partner.
     *  <br/><br/>
     *  This container is only returned if the order line item requires shipping through GSP. It is not returned if <strong>IsMultilegShipping</strong> is <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType $multiLegShippingDetails
     */
    private $multiLegShippingDetails = null;

    /**
     * This field indicates the date/time that an order invoice was sent from the seller to the buyer. This field is only returned if an invoice (containing the order line item) was sent to the buyer.
     *
     * @var \DateTime $invoiceSentTime
     */
    private $invoiceSentTime = null;

    /**
     * Container consisting of details related to the type and status of an Unpaid Item case. This container is only returned if there is an open (or recently closed) Unpaid Item case associated with the order line item.
     *
     * @var \Nogrod\eBaySDK\Trading\UnpaidItemType $unpaidItem
     */
    private $unpaidItem = null;

    /**
     * This flag indicates whether or not the order line item is an intangible good, such as an MP3 track or a mobile phone ringtone. Intangible items are not eligible for PayPal's Seller Protection program, so the seller will not be able to open an Unpaid Item case against the buyer.
     *
     * @var bool $intangibleItem
     */
    private $intangibleItem = null;

    /**
     * Contains information about each monetary transaction that occurs for the order line item, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> <strong>MonetaryDetails</strong> can already be used instead of the older <strong>ExternalTransaction</strong> container, and the <strong>ExternalTransaction</strong> container may eventually get deprecated. Due to this possibility, you are encouraged to start using <strong>MonetaryDetails</strong> as soon as it is convenient.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentsInformationType $monetaryDetails
     */
    private $monetaryDetails = null;

    /**
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PickupOptionsType[] $pickupDetails
     */
    private $pickupDetails = null;

    /**
     * This container consists of details related to the selected In-Store pickup method, including the pickup method, the merchant's store ID, the status of the In-Store pickup, and the pickup reference code (if provided by merchant).
     *
     * @var \Nogrod\eBaySDK\Trading\PickupMethodSelectedType $pickupMethodSelected
     */
    private $pickupMethodSelected = null;

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  This field is no longer applicable/used. It was previously used for eBay Now and 'eBay On Demand Delivery' orders - two features that have been deprecated.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingConvenienceCharge
     */
    private $shippingConvenienceCharge = null;

    /**
     * This field will be returned at the order line item level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature.
     *  <br/><br/>
     *  Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or, <code>DigitalDelivery</code>, which indicates that the order line item is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     *
     * @var string $logisticsPlanType
     */
    private $logisticsPlanType = null;

    /**
     * This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *
     * @var \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType[] $buyerPackageEnclosures
     */
    private $buyerPackageEnclosures = null;

    /**
     * The unique identifier of the inventory reservation.
     *
     * @var string $inventoryReservationID
     */
    private $inventoryReservationID = null;

    /**
     * A unique identifier for an eBay order in the new eBay REST API model. <b>ExtendedOrderID</b> values will be used to identify orders in REST-based APIs, including the Post-Order API and the Fulfillment API.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values, and this new format is relevant to both legacy and REST API-based order ID fields. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order (for <b>OrderID</b> and <b>ExtendedOrderID</b>) will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $extendedOrderID
     */
    private $extendedOrderID = null;

    /**
     * If <code>true</code>, the buyer of the order line item has a eBay Plus program subscription, and is eligible to receive the benefits of this program, such as fast, free shipping and free returns. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia.
     *  </span>
     *
     * @var bool $eBayPlusTransaction
     */
    private $eBayPlusTransaction = null;

    /**
     * This container is returned in <b>GetOrders</b> and other order management calls if a buyer has purchased a digital gift card but has sent it to another individual as a gift, and has left a message for the recipient. The <b>GiftSummary</b> container consists of the message that the buyer wrote for the recipient of the digital gift card. A digital gift card line item is indicated if the <b>DigitalDeliverySelected</b> container is returned in the response, and if the digital gift card is sent to another individual as a gift, the <b>Gift</b> boolean field will be returned with a value of <code>true</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\GiftSummaryType $giftSummary
     */
    private $giftSummary = null;

    /**
     * This container is only returned by <b>GetOrders</b> and other order management calls if the buyer purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift (in this case, the <b>Gift</b> boolean field will be returned with a value of <code>true</code>). The <b>DigitalDeliverySelected</b> container consists of information related to the digital gift card order line item, including the delivery method, delivery status, and recipient of the gift card (either the buyer, or another individual that is receiving the gift card as a gift from the buyer.
     *
     * @var \Nogrod\eBaySDK\Trading\DigitalDeliverySelectedType $digitalDeliverySelected
     */
    private $digitalDeliverySelected = null;

    /**
     * This boolean field is returned as <code>true</code> if the seller is giving a digital gift card to another individual as a gift. This field is only applicable for digital gift card order line items.
     *
     * @var bool $gift
     */
    private $gift = null;

    /**
     * <span class="tablenote"><b>Note: </b> This field is for future use, as the eBay Guaranteed Shipping feature has been put on hold. eBay Guaranteed Shipping should not be confused with eBay Guaranteed Delivery, which is a completely different feature.
     *  </span>
     *  This field is returned as <code>true</code> if the seller chose to use eBay's Guaranteed Shipping feature at listing time. With eBay's Guaranteed Shipping, the seller will never pay more for shipping than what is charged to the buyer. eBay recommends the shipping service option for the seller to use based on the dimensions and weight of the shipping package.
     *
     * @var bool $guaranteedShipping
     */
    private $guaranteedShipping = null;

    /**
     * This field is returned as <code>true</code> if the order line item is qualified for eBay Guaranteed Delivery, or <code>false</code> if it is not eligible. At this time, eBay Guaranteed Delivery is only available to a select number of sellers on the US and Australia sites, but this feature will be enabled on more eBay sites in 2019. <br/><br/>Only domestic shipments are available for eBay Guaranteed Delivery. For an order line item to be qualified for eBay Guaranteed Delivery, the following must be true:
     *  <ul>
     *  <li>The eBay Guaranteed Delivery feature must be available to the seller</li>
     *  <li>That seller must be opted in to one of the two eBay Guaranteed Delivery programs</li>
     *  <li>If the seller is opted into the "Door-to-Door" program, a domestic shipping rate table must be applied to the listing, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or less; </li>
     *  <li>If the seller is opted into the "Handling Time" program, the handling time plus the max shipping time must equal 3 business days or less, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or less</li>
     *  <li>The listing must have a return policy</li>
     *  </ul>
     *  With eBay Guaranteed Delivery, the sellers are committed to getting the order line item to the buyer within 3 business days. The seller's defined "Order Cutoff" time will control what is considered 3 business days. If a buyer wanted to get an order by Friday, that buyer would have to purchase that item on Monday before the seller's "Order Cutoff" time. The seller's "Order Cutoff" time is generally set in their timezone, so the buyer should take this into account before the purchase.
     *
     * @var bool $guaranteedDelivery
     */
    private $guaranteedDelivery = null;

    /**
     * This boolean field is returned as <code>true</code> if the line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). An <b>eBayCollectAndRemitTaxes</b> container is returned if the order line item is subject to such a tax, and the type and amount of this tax is displayed in the <b>eBayCollectAndRemitTaxes.TaxDetails</b> container.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  As of July 1, 2019, buyers in 22 US states will automatically be charged sales tax for eBay purchases, and at least six more US states are scheduled to be subject to eBay Collect and Remit Tax by the end of 2019. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps to enable the collection of this sales tax. If the seller is employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a list of the US states that are or will become subject to 'eBay Collect and Remit Tax' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @var bool $eBayCollectAndRemitTax
     */
    private $eBayCollectAndRemitTax = null;

    /**
     * This container is returned if the order line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. The type of tax will be shown in the <b>TaxDetails.Imposition</b> and <b>TaxDetails.TaxDescription</b> fields, and the amount of this tax will be displayed in the <b>TaxDetails.TaxAmount</b> field.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  As of January 1, 2019, buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps to enable the collection of this sales tax. If the seller is employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxesType $eBayCollectAndRemitTaxes
     */
    private $eBayCollectAndRemitTaxes = null;

    /**
     * Gets as amountPaid
     *
     * The total amount the buyer paid for the order line item. This
     *  amount includes all costs such as item cost, shipping/handling charges, and sales tax that is applied to the order by the seller. If the
     *  seller allowed the buyer to change the total for an order, the buyer is
     *  able to change the total up until the time when Checkout status is
     *  Complete. Determine whether the buyer changed the amount by retrieving the
     *  order line item data and comparing the <b>AmountPaid</b> value to
     *  what the seller expected. If multiple order line items
     *  between the same buyer and seller have been combined into a 'Combined
     *  Invoice' order, the <b>AmountPaid</b> value returned for each line item in the order reflects the total amount paid for the entire order,
     *  and not for the individual order line item. In a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call, you can determine which
     *  order line items belong to the same 'Combined Invoice' order by checking
     *  to see if the <b>ContainingOrder.OrderID</b> value is the same.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>AmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>AmountPaid</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }

    /**
     * Sets a new amountPaid
     *
     * The total amount the buyer paid for the order line item. This
     *  amount includes all costs such as item cost, shipping/handling charges, and sales tax that is applied to the order by the seller. If the
     *  seller allowed the buyer to change the total for an order, the buyer is
     *  able to change the total up until the time when Checkout status is
     *  Complete. Determine whether the buyer changed the amount by retrieving the
     *  order line item data and comparing the <b>AmountPaid</b> value to
     *  what the seller expected. If multiple order line items
     *  between the same buyer and seller have been combined into a 'Combined
     *  Invoice' order, the <b>AmountPaid</b> value returned for each line item in the order reflects the total amount paid for the entire order,
     *  and not for the individual order line item. In a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call, you can determine which
     *  order line items belong to the same 'Combined Invoice' order by checking
     *  to see if the <b>ContainingOrder.OrderID</b> value is the same.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>AmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>AmountPaid</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $amountPaid
     * @return self
     */
    public function setAmountPaid(\Nogrod\eBaySDK\Trading\AmountType $amountPaid)
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * Gets as adjustmentAmount
     *
     * This value indicates the dollar amount by which the buyer has adjusted the the total cost of the sales transaction. Adjustments to sales transaction costs may include shipping and handling, buyer discounts, or added services. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
     *  <br><br>
     *  This field is always returned, even if there was no cost adjustment to the sales transaction. Its value will just be '0.0' if there was no cost adjustment.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAdjustmentAmount()
    {
        return $this->adjustmentAmount;
    }

    /**
     * Sets a new adjustmentAmount
     *
     * This value indicates the dollar amount by which the buyer has adjusted the the total cost of the sales transaction. Adjustments to sales transaction costs may include shipping and handling, buyer discounts, or added services. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
     *  <br><br>
     *  This field is always returned, even if there was no cost adjustment to the sales transaction. Its value will just be '0.0' if there was no cost adjustment.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $adjustmentAmount
     * @return self
     */
    public function setAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType $adjustmentAmount)
    {
        $this->adjustmentAmount = $adjustmentAmount;
        return $this;
    }

    /**
     * Gets as convertedAdjustmentAmount
     *
     * This field shows the converted value of <b>AdjustmentAmount</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned, even if there was no cost adjustment to the sales transaction. Its value will just be '0.0' if there was no cost adjustment. This value should be the same as the value in <b>AdjustmentAmount</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedAdjustmentAmount()
    {
        return $this->convertedAdjustmentAmount;
    }

    /**
     * Sets a new convertedAdjustmentAmount
     *
     * This field shows the converted value of <b>AdjustmentAmount</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned, even if there was no cost adjustment to the sales transaction. Its value will just be '0.0' if there was no cost adjustment. This value should be the same as the value in <b>AdjustmentAmount</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedAdjustmentAmount
     * @return self
     */
    public function setConvertedAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType $convertedAdjustmentAmount)
    {
        $this->convertedAdjustmentAmount = $convertedAdjustmentAmount;
        return $this;
    }

    /**
     * Gets as buyer
     *
     * Container consisting of user and shipping details for the order's buyer. To be returned by <b>GetItemsAwaitingFeedback</b> the seller
     *  must be the one making the request.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @return \Nogrod\eBaySDK\Trading\UserType
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Sets a new buyer
     *
     * Container consisting of user and shipping details for the order's buyer. To be returned by <b>GetItemsAwaitingFeedback</b> the seller
     *  must be the one making the request.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @param \Nogrod\eBaySDK\Trading\UserType $buyer
     * @return self
     */
    public function setBuyer(\Nogrod\eBaySDK\Trading\UserType $buyer)
    {
        $this->buyer = $buyer;
        return $this;
    }

    /**
     * Gets as shippingDetails
     *
     * Container consisting of shipping-related details for a sales transaction. Shipping details may include shipping rates, package dimensions, handling costs, excluded shipping locations (if specified), shipping service options, sales tax information (if applicable), and shipment tracking details (if shipped).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For <b>GetOrders</b> and <b>GetOrderTransactions</b>, a <b>ShippingDetails</b> container is returned at the order at line item level.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingDetailsType
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * Sets a new shippingDetails
     *
     * Container consisting of shipping-related details for a sales transaction. Shipping details may include shipping rates, package dimensions, handling costs, excluded shipping locations (if specified), shipping service options, sales tax information (if applicable), and shipment tracking details (if shipped).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For <b>GetOrders</b> and <b>GetOrderTransactions</b>, a <b>ShippingDetails</b> container is returned at the order at line item level.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingDetailsType $shippingDetails
     * @return self
     */
    public function setShippingDetails(\Nogrod\eBaySDK\Trading\ShippingDetailsType $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * Gets as convertedAmountPaid
     *
     * This field shows the converted value of <b>AmountPaid</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned for paid orders. This value should be the same as the value in <b>AmountPaid</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>ConvertedAmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>ConvertedAmountPaid</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedAmountPaid()
    {
        return $this->convertedAmountPaid;
    }

    /**
     * Sets a new convertedAmountPaid
     *
     * This field shows the converted value of <b>AmountPaid</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned for paid orders. This value should be the same as the value in <b>AmountPaid</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>ConvertedAmountPaid</b> value. To determine if 'Collect and Remit' taxes were added into <b>ConvertedAmountPaid</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedAmountPaid
     * @return self
     */
    public function setConvertedAmountPaid(\Nogrod\eBaySDK\Trading\AmountType $convertedAmountPaid)
    {
        $this->convertedAmountPaid = $convertedAmountPaid;
        return $this;
    }

    /**
     * Gets as convertedTransactionPrice
     *
     * This field shows the converted value of <b>TransactionPrice</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned for sales transactions. This value should be the same as the value in <b>TransactionPrice</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedTransactionPrice()
    {
        return $this->convertedTransactionPrice;
    }

    /**
     * Sets a new convertedTransactionPrice
     *
     * This field shows the converted value of <b>TransactionPrice</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned for sales transactions. This value should be the same as the value in <b>TransactionPrice</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedTransactionPrice
     * @return self
     */
    public function setConvertedTransactionPrice(\Nogrod\eBaySDK\Trading\AmountType $convertedTransactionPrice)
    {
        $this->convertedTransactionPrice = $convertedTransactionPrice;
        return $this;
    }

    /**
     * Gets as createdDate
     *
     * This timestamp indicates date/time when the sales transaction occurred. A sales transaction is created when there is a commitment to buy, or when the buyer purchases the item through a 'Buy it Now' option. For auction listings, a sales transaction is created when that listing ends with a high bidder whose bid meets or exceeds the Reserve Price (if set). For a fixed-price listing or a 'Buy It Now' auction listing, a sales transaction is created once the buyer clicks the Buy button.
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Sets a new createdDate
     *
     * This timestamp indicates date/time when the sales transaction occurred. A sales transaction is created when there is a commitment to buy, or when the buyer purchases the item through a 'Buy it Now' option. For auction listings, a sales transaction is created when that listing ends with a high bidder whose bid meets or exceeds the Reserve Price (if set). For a fixed-price listing or a 'Buy It Now' auction listing, a sales transaction is created once the buyer clicks the Buy button.
     *
     * @param \DateTime $createdDate
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Gets as depositType
     *
     * This value indicates whether or not the seller requires a deposit for the purchase of a motor vehicle. This field is only applicable to motor vehicle listings that require an initial deposit. For these listings, its value is returned as 'OtherMethod'. For any other type of listing, its value is returned as 'None'.
     *
     * @return string
     */
    public function getDepositType()
    {
        return $this->depositType;
    }

    /**
     * Sets a new depositType
     *
     * This value indicates whether or not the seller requires a deposit for the purchase of a motor vehicle. This field is only applicable to motor vehicle listings that require an initial deposit. For these listings, its value is returned as 'OtherMethod'. For any other type of listing, its value is returned as 'None'.
     *
     * @param string $depositType
     * @return self
     */
    public function setDepositType($depositType)
    {
        $this->depositType = $depositType;
        return $this;
    }

    /**
     * Gets as item
     *
     * This container consists of relevant details about the listing associated with the sales transaction. Which listing fields are returned under this container will depend on the listing, the eBay marketplace, and the API call.
     *  <br><br>
     *  In an <b>AddOrder</b> call, only the unique identifier of the listing (<b>ItemID</b>) is needed to help identify the sales transaction to combine into a 'Combined Invoice' order.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * This container consists of relevant details about the listing associated with the sales transaction. Which listing fields are returned under this container will depend on the listing, the eBay marketplace, and the API call.
     *  <br><br>
     *  In an <b>AddOrder</b> call, only the unique identifier of the listing (<b>ItemID</b>) is needed to help identify the sales transaction to combine into a 'Combined Invoice' order.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as quantityPurchased
     *
     * This value indicates the quantity of the line item purchased at the same
     *  time by the same buyer from one listing. For auction listings, this value
     *  is always '1'. For fixed-price, non-variation listings, this value can be
     *  greater than 1.
     *
     * @return int
     */
    public function getQuantityPurchased()
    {
        return $this->quantityPurchased;
    }

    /**
     * Sets a new quantityPurchased
     *
     * This value indicates the quantity of the line item purchased at the same
     *  time by the same buyer from one listing. For auction listings, this value
     *  is always '1'. For fixed-price, non-variation listings, this value can be
     *  greater than 1.
     *
     * @param int $quantityPurchased
     * @return self
     */
    public function setQuantityPurchased($quantityPurchased)
    {
        $this->quantityPurchased = $quantityPurchased;
        return $this;
    }

    /**
     * Gets as status
     *
     * Container consisting of checkout/payment status details for an order line item. Several of these fields change values during the checkout flow.
     *  <br><br>
     *  For <b>GetOrders</b>, only a limited number of applicable fields are returned at the order line item level. The
     *  fields indicating the status of the order are actually found in the
     *  <b>OrderArray.Order.CheckoutStatus</b> container.
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Container consisting of checkout/payment status details for an order line item. Several of these fields change values during the checkout flow.
     *  <br><br>
     *  For <b>GetOrders</b>, only a limited number of applicable fields are returned at the order line item level. The
     *  fields indicating the status of the order are actually found in the
     *  <b>OrderArray.Order.CheckoutStatus</b> container.
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionStatusType $status
     * @return self
     */
    public function setStatus(\Nogrod\eBaySDK\Trading\TransactionStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * Unique identifier for an eBay sales transaction. This identifier
     *  is created once there is a commitment from a buyer to
     *  purchase an item, or if/when the buyer actually purchases the line item through a 'Buy it Now' option. An <b>ItemID</b>/<b>TransactionID</b> pair can be used and referenced during an order checkout flow to identify a line item.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer, seller, or PayPal (if payment method is PayPal), and no longer returned at all to third parties (except for PayPal). If using a Trading WSDL older than Version 1019, transaction ID is only returned to the buyer, seller or PayPal, and a dummy value of <code>10000000000000</code> will be returned to all third parties (except for PayPal).
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
     * Unique identifier for an eBay sales transaction. This identifier
     *  is created once there is a commitment from a buyer to
     *  purchase an item, or if/when the buyer actually purchases the line item through a 'Buy it Now' option. An <b>ItemID</b>/<b>TransactionID</b> pair can be used and referenced during an order checkout flow to identify a line item.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer, seller, or PayPal (if payment method is PayPal), and no longer returned at all to third parties (except for PayPal). If using a Trading WSDL older than Version 1019, transaction ID is only returned to the buyer, seller or PayPal, and a dummy value of <code>10000000000000</code> will be returned to all third parties (except for PayPal).
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
     * Gets as transactionPrice
     *
     * The sale price for one unit of the line item. This price does not include any other costs like shipping charges or sales tax, and its value will remain the same before and after payment. If multiple units were purchased through a single-variation, fixed-price listing, to get the subtotal of the units purchased, the <b>TransactionPrice</b> value would have to be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br>
     *  For a motor vehicle listing that required a deposit/down payment, the amount in the <b>TransactionPrice</b> is actually the deposit amount. <br><br>
     *  <strong>For GetMyeBaySelling</strong>: this field is only returned if the transaction came as a result of a buyer's Best Offer accepted by the seller. Otherwise, the <b>Transaction.TotalPrice</b> field should be viewed instead.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTransactionPrice()
    {
        return $this->transactionPrice;
    }

    /**
     * Sets a new transactionPrice
     *
     * The sale price for one unit of the line item. This price does not include any other costs like shipping charges or sales tax, and its value will remain the same before and after payment. If multiple units were purchased through a single-variation, fixed-price listing, to get the subtotal of the units purchased, the <b>TransactionPrice</b> value would have to be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br>
     *  For a motor vehicle listing that required a deposit/down payment, the amount in the <b>TransactionPrice</b> is actually the deposit amount. <br><br>
     *  <strong>For GetMyeBaySelling</strong>: this field is only returned if the transaction came as a result of a buyer's Best Offer accepted by the seller. Otherwise, the <b>Transaction.TotalPrice</b> field should be viewed instead.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $transactionPrice
     * @return self
     */
    public function setTransactionPrice(\Nogrod\eBaySDK\Trading\AmountType $transactionPrice)
    {
        $this->transactionPrice = $transactionPrice;
        return $this;
    }

    /**
     * Gets as bestOfferSale
     *
     * Indicates whether or not the sales transaction resulted from the seller accepting a Best Offer (or Counter Offer) from a buyer.
     *
     * @return bool
     */
    public function getBestOfferSale()
    {
        return $this->bestOfferSale;
    }

    /**
     * Sets a new bestOfferSale
     *
     * Indicates whether or not the sales transaction resulted from the seller accepting a Best Offer (or Counter Offer) from a buyer.
     *
     * @param bool $bestOfferSale
     * @return self
     */
    public function setBestOfferSale($bestOfferSale)
    {
        $this->bestOfferSale = $bestOfferSale;
        return $this;
    }

    /**
     * Gets as vATPercent
     *
     * VAT rate for the line item. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a <b>VATPercent</b>, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max precision 3 decimal places. Max length 5 characters. Note: The View Item page displays the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored.
     *
     * @return float
     */
    public function getVATPercent()
    {
        return $this->vATPercent;
    }

    /**
     * Sets a new vATPercent
     *
     * VAT rate for the line item. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a <b>VATPercent</b>, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max precision 3 decimal places. Max length 5 characters. Note: The View Item page displays the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored.
     *
     * @param float $vATPercent
     * @return self
     */
    public function setVATPercent($vATPercent)
    {
        $this->vATPercent = $vATPercent;
        return $this;
    }

    /**
     * Adds as externalTransaction
     *
     * Container consisting of payment details for an eBay sales transaction, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned after payment for the order has occurred.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real transaction identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to start using <strong>MonetaryDetails</strong> as soon as possible.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ExternalTransactionType $externalTransaction
     */
    public function addToExternalTransaction(\Nogrod\eBaySDK\Trading\ExternalTransactionType $externalTransaction)
    {
        $this->externalTransaction[] = $externalTransaction;
        return $this;
    }

    /**
     * isset externalTransaction
     *
     * Container consisting of payment details for an eBay sales transaction, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned after payment for the order has occurred.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real transaction identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to start using <strong>MonetaryDetails</strong> as soon as possible.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExternalTransaction($index)
    {
        return isset($this->externalTransaction[$index]);
    }

    /**
     * unset externalTransaction
     *
     * Container consisting of payment details for an eBay sales transaction, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned after payment for the order has occurred.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real transaction identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to start using <strong>MonetaryDetails</strong> as soon as possible.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExternalTransaction($index)
    {
        unset($this->externalTransaction[$index]);
    }

    /**
     * Gets as externalTransaction
     *
     * Container consisting of payment details for an eBay sales transaction, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned after payment for the order has occurred.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real transaction identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to start using <strong>MonetaryDetails</strong> as soon as possible.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ExternalTransactionType[]
     */
    public function getExternalTransaction()
    {
        return $this->externalTransaction;
    }

    /**
     * Sets a new externalTransaction
     *
     * Container consisting of payment details for an eBay sales transaction, including an identifier for the monetary transaction and a field to express any fees or credits applied to the monetary transaction. This field is only returned after payment for the order has occurred.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real transaction identifier is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <strong>MonetaryDetails</strong> container also shows payment information for the order. In the future, it is possible that the <strong>ExternalTransaction</strong> container will be deprecated, so you are encouraged to start using <strong>MonetaryDetails</strong> as soon as possible.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ExternalTransactionType[] $externalTransaction
     * @return self
     */
    public function setExternalTransaction(array $externalTransaction)
    {
        $this->externalTransaction = $externalTransaction;
        return $this;
    }

    /**
     * Gets as sellingManagerProductDetails
     *
     * This container consists of Selling Manager product details and is only
     *  returned if the item was listed through Selling Manager Pro.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType
     */
    public function getSellingManagerProductDetails()
    {
        return $this->sellingManagerProductDetails;
    }

    /**
     * Sets a new sellingManagerProductDetails
     *
     * This container consists of Selling Manager product details and is only
     *  returned if the item was listed through Selling Manager Pro.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return self
     */
    public function setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails)
    {
        $this->sellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }

    /**
     * Gets as shippingServiceSelected
     *
     * The shipping service actually selected by the buyer from the shipping services
     *  offered by the seller. The buyer typically selects the shipping service at checkout/payment time.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType
     */
    public function getShippingServiceSelected()
    {
        return $this->shippingServiceSelected;
    }

    /**
     * Sets a new shippingServiceSelected
     *
     * The shipping service actually selected by the buyer from the shipping services
     *  offered by the seller. The buyer typically selects the shipping service at checkout/payment time.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType $shippingServiceSelected
     * @return self
     */
    public function setShippingServiceSelected(\Nogrod\eBaySDK\Trading\ShippingServiceOptionsType $shippingServiceSelected)
    {
        $this->shippingServiceSelected = $shippingServiceSelected;
        return $this;
    }

    /**
     * Gets as buyerMessage
     *
     * Display message from buyer. This field holds transient data that is only
     *  being returned in Checkout-related notifications.
     *
     * @return string
     */
    public function getBuyerMessage()
    {
        return $this->buyerMessage;
    }

    /**
     * Sets a new buyerMessage
     *
     * Display message from buyer. This field holds transient data that is only
     *  being returned in Checkout-related notifications.
     *
     * @param string $buyerMessage
     * @return self
     */
    public function setBuyerMessage($buyerMessage)
    {
        $this->buyerMessage = $buyerMessage;
        return $this;
    }

    /**
     * Gets as dutchAuctionBid
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getDutchAuctionBid()
    {
        return $this->dutchAuctionBid;
    }

    /**
     * Sets a new dutchAuctionBid
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $dutchAuctionBid
     * @return self
     */
    public function setDutchAuctionBid(\Nogrod\eBaySDK\Trading\AmountType $dutchAuctionBid)
    {
        $this->dutchAuctionBid = $dutchAuctionBid;
        return $this;
    }

    /**
     * Gets as buyerPaidStatus
     *
     * Specifies the paid status of the order.
     *
     * @return string
     */
    public function getBuyerPaidStatus()
    {
        return $this->buyerPaidStatus;
    }

    /**
     * Sets a new buyerPaidStatus
     *
     * Specifies the paid status of the order.
     *
     * @param string $buyerPaidStatus
     * @return self
     */
    public function setBuyerPaidStatus($buyerPaidStatus)
    {
        $this->buyerPaidStatus = $buyerPaidStatus;
        return $this;
    }

    /**
     * Gets as sellerPaidStatus
     *
     * Specifies the paid status of the order.
     *
     * @return string
     */
    public function getSellerPaidStatus()
    {
        return $this->sellerPaidStatus;
    }

    /**
     * Sets a new sellerPaidStatus
     *
     * Specifies the paid status of the order.
     *
     * @param string $sellerPaidStatus
     * @return self
     */
    public function setSellerPaidStatus($sellerPaidStatus)
    {
        $this->sellerPaidStatus = $sellerPaidStatus;
        return $this;
    }

    /**
     * Gets as paidTime
     *
     * Indicates the time when the buyer paid for the order and/or order was marked as 'Paid' by the seller. This field is returned once payment has been made by the buyer.
     *  <br><br>
     *  This value will only be visible to the user on either side of the order. An order can be marked as 'Paid' in the following ways:
     *  <ul>
     *  <li>Automatically when a payment is made through eBay's system</li>
     *  <li>Seller marks the item as paid in My eBay or through Selling Manager Pro </li>
     *  <li>Programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> calls.</li>
     *  </ul>
     *
     * @return \DateTime
     */
    public function getPaidTime()
    {
        return $this->paidTime;
    }

    /**
     * Sets a new paidTime
     *
     * Indicates the time when the buyer paid for the order and/or order was marked as 'Paid' by the seller. This field is returned once payment has been made by the buyer.
     *  <br><br>
     *  This value will only be visible to the user on either side of the order. An order can be marked as 'Paid' in the following ways:
     *  <ul>
     *  <li>Automatically when a payment is made through eBay's system</li>
     *  <li>Seller marks the item as paid in My eBay or through Selling Manager Pro </li>
     *  <li>Programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> calls.</li>
     *  </ul>
     *
     * @param \DateTime $paidTime
     * @return self
     */
    public function setPaidTime(\DateTime $paidTime)
    {
        $this->paidTime = $paidTime;
        return $this;
    }

    /**
     * Gets as shippedTime
     *
     * Indicates the time when the line item was marked as 'Shipped'. This value will only be visible to the user on either side of the order. An order can be marked as 'Shipped' by purchasing an eBay shipping label, providing shipment tracking in My eBay or through Selling Manager Pro, or programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> call.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer (or marked as shipped), the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
     *  </span>
     *
     * @return \DateTime
     */
    public function getShippedTime()
    {
        return $this->shippedTime;
    }

    /**
     * Sets a new shippedTime
     *
     * Indicates the time when the line item was marked as 'Shipped'. This value will only be visible to the user on either side of the order. An order can be marked as 'Shipped' by purchasing an eBay shipping label, providing shipment tracking in My eBay or through Selling Manager Pro, or programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> call.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer (or marked as shipped), the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
     *  </span>
     *
     * @param \DateTime $shippedTime
     * @return self
     */
    public function setShippedTime(\DateTime $shippedTime)
    {
        $this->shippedTime = $shippedTime;
        return $this;
    }

    /**
     * Gets as totalPrice
     *
     * This field indicates the total price for a sales transaction. Before payment, this dollar value will be the price before a shipping service option is selected. Once a shipping service option is selected, the price in this field will be updated to reflect the shipping and handling costs associated with that shipping service option.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * This field indicates the total price for a sales transaction. Before payment, this dollar value will be the price before a shipping service option is selected. Once a shipping service option is selected, the price in this field will be updated to reflect the shipping and handling costs associated with that shipping service option.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalPrice
     * @return self
     */
    public function setTotalPrice(\Nogrod\eBaySDK\Trading\AmountType $totalPrice)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * Gets as feedbackLeft
     *
     * This container consists of Feedback left by the caller for their order
     *  partner. This container is only returned if the order is complete and
     *  feedback on the order line item has been left by the caller.
     *
     * @return \Nogrod\eBaySDK\Trading\FeedbackInfoType
     */
    public function getFeedbackLeft()
    {
        return $this->feedbackLeft;
    }

    /**
     * Sets a new feedbackLeft
     *
     * This container consists of Feedback left by the caller for their order
     *  partner. This container is only returned if the order is complete and
     *  feedback on the order line item has been left by the caller.
     *
     * @param \Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackLeft
     * @return self
     */
    public function setFeedbackLeft(\Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackLeft)
    {
        $this->feedbackLeft = $feedbackLeft;
        return $this;
    }

    /**
     * Gets as feedbackReceived
     *
     * This container consists of Feedback received by the caller from their
     *  order partner. This container is only returned if the order is complete and
     *  feedback on the order line item has been received by the
     *  caller.
     *
     * @return \Nogrod\eBaySDK\Trading\FeedbackInfoType
     */
    public function getFeedbackReceived()
    {
        return $this->feedbackReceived;
    }

    /**
     * Sets a new feedbackReceived
     *
     * This container consists of Feedback received by the caller from their
     *  order partner. This container is only returned if the order is complete and
     *  feedback on the order line item has been received by the
     *  caller.
     *
     * @param \Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackReceived
     * @return self
     */
    public function setFeedbackReceived(\Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackReceived)
    {
        $this->feedbackReceived = $feedbackReceived;
        return $this;
    }

    /**
     * Gets as containingOrder
     *
     * This container is returned in a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> response if the <b>IncludeContainingOrder</b> field is
     *  included in the call request payload and set to 'true'. This container will be returned whether the order line item is the only line item in the order, or if the order has multiple line items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The new <b>OrderLineItemCount</b> field is automatically returned if the user is using Version 1113 of the Trading WSDL (or newer, as versions roll out). If the user is using Versions 1107 or 1111 of the Trading WSDL, the <b>OrderLineItemCount</b> field will only be returned if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header and sets its value to <code>1113</code>. If a user is using a Trading WSDL older than 1107, the <b>OrderLineItemCount</b> field will not be returned.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\OrderType
     */
    public function getContainingOrder()
    {
        return $this->containingOrder;
    }

    /**
     * Sets a new containingOrder
     *
     * This container is returned in a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> response if the <b>IncludeContainingOrder</b> field is
     *  included in the call request payload and set to 'true'. This container will be returned whether the order line item is the only line item in the order, or if the order has multiple line items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> The new <b>OrderLineItemCount</b> field is automatically returned if the user is using Version 1113 of the Trading WSDL (or newer, as versions roll out). If the user is using Versions 1107 or 1111 of the Trading WSDL, the <b>OrderLineItemCount</b> field will only be returned if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header and sets its value to <code>1113</code>. If a user is using a Trading WSDL older than 1107, the <b>OrderLineItemCount</b> field will not be returned.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\OrderType $containingOrder
     * @return self
     */
    public function setContainingOrder(\Nogrod\eBaySDK\Trading\OrderType $containingOrder)
    {
        $this->containingOrder = $containingOrder;
        return $this;
    }

    /**
     * Gets as finalValueFee
     *
     * A Final Value Fee is calculated and charged to a seller's account
     *  immediately upon creation of an order line item. Note that this fee is created
     *  before the buyer makes a payment. As long as the <b>IncludeFinalValueFee</b> field is included in the call request and set to 'true', the Final Value Fee for each order line
     *  item is returned, regardless of the checkout status.
     *  <br><br>
     *  If a seller requests a Final Value Fee credit, the value of
     *  <b>Transaction.FinalValueFee</b> will not change if a credit is
     *  issued. The credit only appears in the seller's account data.
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
     * A Final Value Fee is calculated and charged to a seller's account
     *  immediately upon creation of an order line item. Note that this fee is created
     *  before the buyer makes a payment. As long as the <b>IncludeFinalValueFee</b> field is included in the call request and set to 'true', the Final Value Fee for each order line
     *  item is returned, regardless of the checkout status.
     *  <br><br>
     *  If a seller requests a Final Value Fee credit, the value of
     *  <b>Transaction.FinalValueFee</b> will not change if a credit is
     *  issued. The credit only appears in the seller's account data.
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
     * Gets as listingCheckoutRedirectPreference
     *
     * This field is no longer applicable
     *
     * @return \Nogrod\eBaySDK\Trading\ListingCheckoutRedirectPreferenceType
     */
    public function getListingCheckoutRedirectPreference()
    {
        return $this->listingCheckoutRedirectPreference;
    }

    /**
     * Sets a new listingCheckoutRedirectPreference
     *
     * This field is no longer applicable
     *
     * @param \Nogrod\eBaySDK\Trading\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference
     * @return self
     */
    public function setListingCheckoutRedirectPreference(\Nogrod\eBaySDK\Trading\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference)
    {
        $this->listingCheckoutRedirectPreference = $listingCheckoutRedirectPreference;
        return $this;
    }

    /**
     * Adds as refund
     *
     * <span class="tablenote"><b>Note: </b> This container is only applicable for Half.com order refunds, and since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundType $refund
     */
    public function addToRefundArray(\Nogrod\eBaySDK\Trading\RefundType $refund)
    {
        $this->refundArray[] = $refund;
        return $this;
    }

    /**
     * isset refundArray
     *
     * <span class="tablenote"><b>Note: </b> This container is only applicable for Half.com order refunds, and since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefundArray($index)
    {
        return isset($this->refundArray[$index]);
    }

    /**
     * unset refundArray
     *
     * <span class="tablenote"><b>Note: </b> This container is only applicable for Half.com order refunds, and since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefundArray($index)
    {
        unset($this->refundArray[$index]);
    }

    /**
     * Gets as refundArray
     *
     * <span class="tablenote"><b>Note: </b> This container is only applicable for Half.com order refunds, and since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RefundType[]
     */
    public function getRefundArray()
    {
        return $this->refundArray;
    }

    /**
     * Sets a new refundArray
     *
     * <span class="tablenote"><b>Note: </b> This container is only applicable for Half.com order refunds, and since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RefundType[] $refundArray
     * @return self
     */
    public function setRefundArray(array $refundArray)
    {
        $this->refundArray = $refundArray;
        return $this;
    }

    /**
     * Gets as transactionSiteID
     *
     * The site upon which the line item was purchased.
     *
     * @return string
     */
    public function getTransactionSiteID()
    {
        return $this->transactionSiteID;
    }

    /**
     * Sets a new transactionSiteID
     *
     * The site upon which the line item was purchased.
     *
     * @param string $transactionSiteID
     * @return self
     */
    public function setTransactionSiteID($transactionSiteID)
    {
        $this->transactionSiteID = $transactionSiteID;
        return $this;
    }

    /**
     * Gets as platform
     *
     * This value indicates the site on which the sales transaction originated.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Currently, the only value that should be returned in this field is <code>eBay</code>, as the Half.com marketplace no longer exists.
     *  </span>
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Sets a new platform
     *
     * This value indicates the site on which the sales transaction originated.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Currently, the only value that should be returned in this field is <code>eBay</code>, as the Half.com marketplace no longer exists.
     *  </span>
     *
     * @param string $platform
     * @return self
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * Gets as cartID
     *
     * This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     *
     * @return string
     */
    public function getCartID()
    {
        return $this->cartID;
    }

    /**
     * Sets a new cartID
     *
     * This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     *
     * @param string $cartID
     * @return self
     */
    public function setCartID($cartID)
    {
        $this->cartID = $cartID;
        return $this;
    }

    /**
     * Gets as sellerContactBuyerByEmail
     *
     * This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     *
     * @return bool
     */
    public function getSellerContactBuyerByEmail()
    {
        return $this->sellerContactBuyerByEmail;
    }

    /**
     * Sets a new sellerContactBuyerByEmail
     *
     * This field is no longer applicable as Shopping.com listings are no longer created or managed with eBay APIs.
     *
     * @param bool $sellerContactBuyerByEmail
     * @return self
     */
    public function setSellerContactBuyerByEmail($sellerContactBuyerByEmail)
    {
        $this->sellerContactBuyerByEmail = $sellerContactBuyerByEmail;
        return $this;
    }

    /**
     * Gets as payPalEmailAddress
     *
     * The seller's PayPal email address. This value is only revealed if it is the
     *  seller making the call.
     *
     * @return string
     */
    public function getPayPalEmailAddress()
    {
        return $this->payPalEmailAddress;
    }

    /**
     * Sets a new payPalEmailAddress
     *
     * The seller's PayPal email address. This value is only revealed if it is the
     *  seller making the call.
     *
     * @param string $payPalEmailAddress
     * @return self
     */
    public function setPayPalEmailAddress($payPalEmailAddress)
    {
        $this->payPalEmailAddress = $payPalEmailAddress;
        return $this;
    }

    /**
     * Gets as paisaPayID
     *
     * Unique identifier for a <b>PaisaPay</b> transaction. Only applicable if <b>PaisaPay</b> was the payment method used.
     *
     * @return string
     */
    public function getPaisaPayID()
    {
        return $this->paisaPayID;
    }

    /**
     * Sets a new paisaPayID
     *
     * Unique identifier for a <b>PaisaPay</b> transaction. Only applicable if <b>PaisaPay</b> was the payment method used.
     *
     * @param string $paisaPayID
     * @return self
     */
    public function setPaisaPayID($paisaPayID)
    {
        $this->paisaPayID = $paisaPayID;
        return $this;
    }

    /**
     * Gets as buyerGuaranteePrice
     *
     * For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection coverage,
     *  offered for the item at the time of purchase. Details of coverage are in the
     *  following sections of the View Item page: the Buy Safely section and the Payment
     *  Details section.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getBuyerGuaranteePrice()
    {
        return $this->buyerGuaranteePrice;
    }

    /**
     * Sets a new buyerGuaranteePrice
     *
     * For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection coverage,
     *  offered for the item at the time of purchase. Details of coverage are in the
     *  following sections of the View Item page: the Buy Safely section and the Payment
     *  Details section.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $buyerGuaranteePrice
     * @return self
     */
    public function setBuyerGuaranteePrice(\Nogrod\eBaySDK\Trading\AmountType $buyerGuaranteePrice)
    {
        $this->buyerGuaranteePrice = $buyerGuaranteePrice;
        return $this;
    }

    /**
     * Gets as variation
     *
     * In a fixed-priced listing, a seller can offer variations of the same item.
     *  For example, the seller could create a fixed-priced listing for a t-shirt
     *  design, and offer the shirt in different colors and sizes. In this case, each
     *  color and size combination is a separate variation. Each variation can have
     *  a different quantity and price. Due to the possible price differentiation,
     *  buyers can buy multiple items from this listing at the same time, but all of
     *  the items must be of the same variation. One order line item is created
     *  whether one or multiple quanity of the same variation are purchased.
     *  <br><br>
     *  The <b>Variation</b> node contains information about which variation
     *  was purchased. Therefore, applications that process orders
     *  should always check to see if this node is present.
     *
     * @return \Nogrod\eBaySDK\Trading\VariationType
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Sets a new variation
     *
     * In a fixed-priced listing, a seller can offer variations of the same item.
     *  For example, the seller could create a fixed-priced listing for a t-shirt
     *  design, and offer the shirt in different colors and sizes. In this case, each
     *  color and size combination is a separate variation. Each variation can have
     *  a different quantity and price. Due to the possible price differentiation,
     *  buyers can buy multiple items from this listing at the same time, but all of
     *  the items must be of the same variation. One order line item is created
     *  whether one or multiple quanity of the same variation are purchased.
     *  <br><br>
     *  The <b>Variation</b> node contains information about which variation
     *  was purchased. Therefore, applications that process orders
     *  should always check to see if this node is present.
     *
     * @param \Nogrod\eBaySDK\Trading\VariationType $variation
     * @return self
     */
    public function setVariation(\Nogrod\eBaySDK\Trading\VariationType $variation)
    {
        $this->variation = $variation;
        return $this;
    }

    /**
     * Gets as buyerCheckoutMessage
     *
     * This field is returned if a buyer left a comment for the seller during the
     *  left by buyer during the checkout flow.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @return string
     */
    public function getBuyerCheckoutMessage()
    {
        return $this->buyerCheckoutMessage;
    }

    /**
     * Sets a new buyerCheckoutMessage
     *
     * This field is returned if a buyer left a comment for the seller during the
     *  left by buyer during the checkout flow.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @param string $buyerCheckoutMessage
     * @return self
     */
    public function setBuyerCheckoutMessage($buyerCheckoutMessage)
    {
        $this->buyerCheckoutMessage = $buyerCheckoutMessage;
        return $this;
    }

    /**
     * Gets as totalTransactionPrice
     *
     * The sale price of the order line item. This amount does not take
     *  into account shipping and handling charges, sales tax, or any other costs related to the order line
     *  item. If multiple units were purchased through a non-
     *  variation, fixed-price listing, this value will reflect that. So, if the base cost of the order line item was $15.00, and a quantity of two were purchased (<b>Transaction.QuantityPurchased</b>) the value in this field would show as <code>30.00</code>.
     *  <br><br>
     *  To see the full price of the order line item, including any shipping and handling charges, and any sales tax, the (<b>Transaction.TotalPrice</b>) field value should be viewed instead. However, note that the <b>TotalPrice</b> field value is only updated after a shipping service option is selected and payment is made. And if the seller is offering free shipping, the values in the <b>TotalTransactionPrice</b> and the <b>TotalPrice</b> fields may be the same.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalTransactionPrice()
    {
        return $this->totalTransactionPrice;
    }

    /**
     * Sets a new totalTransactionPrice
     *
     * The sale price of the order line item. This amount does not take
     *  into account shipping and handling charges, sales tax, or any other costs related to the order line
     *  item. If multiple units were purchased through a non-
     *  variation, fixed-price listing, this value will reflect that. So, if the base cost of the order line item was $15.00, and a quantity of two were purchased (<b>Transaction.QuantityPurchased</b>) the value in this field would show as <code>30.00</code>.
     *  <br><br>
     *  To see the full price of the order line item, including any shipping and handling charges, and any sales tax, the (<b>Transaction.TotalPrice</b>) field value should be viewed instead. However, note that the <b>TotalPrice</b> field value is only updated after a shipping service option is selected and payment is made. And if the seller is offering free shipping, the values in the <b>TotalTransactionPrice</b> and the <b>TotalPrice</b> fields may be the same.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalTransactionPrice
     * @return self
     */
    public function setTotalTransactionPrice(\Nogrod\eBaySDK\Trading\AmountType $totalTransactionPrice)
    {
        $this->totalTransactionPrice = $totalTransactionPrice;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * A container consisting of detailed tax information (sales tax, Goods and Services tax, or VAT) for a sales transaction. The <b>Taxes</b> container is returned if the order line item is subject to any taxes on the buyer's purchase. The information in this container supercedes/overrides any sales tax information in the <b>ShippingDetails.SalesTax</b> container.
     *
     * @return \Nogrod\eBaySDK\Trading\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * A container consisting of detailed tax information (sales tax, Goods and Services tax, or VAT) for a sales transaction. The <b>Taxes</b> container is returned if the order line item is subject to any taxes on the buyer's purchase. The information in this container supercedes/overrides any sales tax information in the <b>ShippingDetails.SalesTax</b> container.
     *
     * @param \Nogrod\eBaySDK\Trading\TaxesType $taxes
     * @return self
     */
    public function setTaxes(\Nogrod\eBaySDK\Trading\TaxesType $taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets as bundlePurchase
     *
     * Boolean value indicating whether or not an order line item is
     *  part of a bundle purchase using Product Configurator.
     *
     * @return bool
     */
    public function getBundlePurchase()
    {
        return $this->bundlePurchase;
    }

    /**
     * Sets a new bundlePurchase
     *
     * Boolean value indicating whether or not an order line item is
     *  part of a bundle purchase using Product Configurator.
     *
     * @param bool $bundlePurchase
     * @return self
     */
    public function setBundlePurchase($bundlePurchase)
    {
        $this->bundlePurchase = $bundlePurchase;
        return $this;
    }

    /**
     * Gets as actualShippingCost
     *
     * The shipping cost paid by the buyer for the order line item. This field is only returned after checkout is complete.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getActualShippingCost()
    {
        return $this->actualShippingCost;
    }

    /**
     * Sets a new actualShippingCost
     *
     * The shipping cost paid by the buyer for the order line item. This field is only returned after checkout is complete.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $actualShippingCost
     * @return self
     */
    public function setActualShippingCost(\Nogrod\eBaySDK\Trading\AmountType $actualShippingCost)
    {
        $this->actualShippingCost = $actualShippingCost;
        return $this;
    }

    /**
     * Gets as actualHandlingCost
     *
     * The handling cost that the seller has charged for the order line item. This field is only returned after checkout is complete.
     *  <br><br>
     *  The value of this field is returned as zero dollars (0.0) if the seller did not specify a handling cost for the listing.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getActualHandlingCost()
    {
        return $this->actualHandlingCost;
    }

    /**
     * Sets a new actualHandlingCost
     *
     * The handling cost that the seller has charged for the order line item. This field is only returned after checkout is complete.
     *  <br><br>
     *  The value of this field is returned as zero dollars (0.0) if the seller did not specify a handling cost for the listing.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $actualHandlingCost
     * @return self
     */
    public function setActualHandlingCost(\Nogrod\eBaySDK\Trading\AmountType $actualHandlingCost)
    {
        $this->actualHandlingCost = $actualHandlingCost;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. This identifier is created as
     *  soon as there is a commitment to buy from the seller, or the buyer actually purchases the item using a 'Buy it Now' option.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, order line item ID is only returned to the buyer or seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
     *  <br>
     *
     * @return string
     */
    public function getOrderLineItemID()
    {
        return $this->orderLineItemID;
    }

    /**
     * Sets a new orderLineItemID
     *
     * A unique identifier for an eBay order line item. This identifier is created as
     *  soon as there is a commitment to buy from the seller, or the buyer actually purchases the item using a 'Buy it Now' option.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, order line item ID is only returned to the buyer or seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
     *  <br>
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    /**
     * Gets as eBayPaymentID
     *
     * The generated eBay payment ID used by the buyer when he/she chooses electronic
     *  transfer as payment method for paying the seller. This field is only applicable to the eBay Germany site (Site ID 77).
     *
     * @return string
     */
    public function getEBayPaymentID()
    {
        return $this->eBayPaymentID;
    }

    /**
     * Sets a new eBayPaymentID
     *
     * The generated eBay payment ID used by the buyer when he/she chooses electronic
     *  transfer as payment method for paying the seller. This field is only applicable to the eBay Germany site (Site ID 77).
     *
     * @param string $eBayPaymentID
     * @return self
     */
    public function setEBayPaymentID($eBayPaymentID)
    {
        $this->eBayPaymentID = $eBayPaymentID;
        return $this;
    }

    /**
     * Gets as paymentHoldDetails
     *
     * This container consists of information related to the payment hold on the order line item, including the reason why the buyer's payment for the order line item is being held, the expected release date of the funds into the seller's account, and possible action(s) the seller can take to expedite the payout of funds into their account. This container is only returned if a payment hold has been placed on the order line item.
     *  <br><br>
     *  See <b>PaymentHoldReasonCodeType</b> for some details on why/when a seller's funds may be held, or visit the <a href="https://www.ebay.com/help/selling/getting-paid/getting-paid-items-youve-sold/pending-payments?id=4816">Pending payments</a> help topic for more information on eBay's payment hold policies.
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentHoldDetailType
     */
    public function getPaymentHoldDetails()
    {
        return $this->paymentHoldDetails;
    }

    /**
     * Sets a new paymentHoldDetails
     *
     * This container consists of information related to the payment hold on the order line item, including the reason why the buyer's payment for the order line item is being held, the expected release date of the funds into the seller's account, and possible action(s) the seller can take to expedite the payout of funds into their account. This container is only returned if a payment hold has been placed on the order line item.
     *  <br><br>
     *  See <b>PaymentHoldReasonCodeType</b> for some details on why/when a seller's funds may be held, or visit the <a href="https://www.ebay.com/help/selling/getting-paid/getting-paid-items-youve-sold/pending-payments?id=4816">Pending payments</a> help topic for more information on eBay's payment hold policies.
     *
     * @param \Nogrod\eBaySDK\Trading\PaymentHoldDetailType $paymentHoldDetails
     * @return self
     */
    public function setPaymentHoldDetails(\Nogrod\eBaySDK\Trading\PaymentHoldDetailType $paymentHoldDetails)
    {
        $this->paymentHoldDetails = $paymentHoldDetails;
        return $this;
    }

    /**
     * Gets as sellerDiscounts
     *
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item. This container is only returned if the order line item is eligible for seller discounts.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerDiscountsType
     */
    public function getSellerDiscounts()
    {
        return $this->sellerDiscounts;
    }

    /**
     * Sets a new sellerDiscounts
     *
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item. This container is only returned if the order line item is eligible for seller discounts.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerDiscountsType $sellerDiscounts
     * @return self
     */
    public function setSellerDiscounts(\Nogrod\eBaySDK\Trading\SellerDiscountsType $sellerDiscounts)
    {
        $this->sellerDiscounts = $sellerDiscounts;
        return $this;
    }

    /**
     * Gets as refundAmount
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets a new refundAmount
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $refundAmount
     * @return self
     */
    public function setRefundAmount(\Nogrod\eBaySDK\Trading\AmountType $refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }

    /**
     * Gets as refundStatus
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->refundStatus;
    }

    /**
     * Sets a new refundStatus
     *
     * This field is deprecated.
     *
     * @param string $refundStatus
     * @return self
     */
    public function setRefundStatus($refundStatus)
    {
        $this->refundStatus = $refundStatus;
        return $this;
    }

    /**
     * Gets as codiceFiscale
     *
     * This field is returned if the <b>IncludeCodiceFiscale</b> flag is included in the request and set to <code>true</code>, and if the buyer has provided this value at checkout time.
     *  <br/><br/>
     *  This field is only applicable to buyers on the Italy and Spain sites. The Codice Fiscale number is unique for each Italian and Spanish citizen and is used for tax purposes.
     *
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    /**
     * Sets a new codiceFiscale
     *
     * This field is returned if the <b>IncludeCodiceFiscale</b> flag is included in the request and set to <code>true</code>, and if the buyer has provided this value at checkout time.
     *  <br/><br/>
     *  This field is only applicable to buyers on the Italy and Spain sites. The Codice Fiscale number is unique for each Italian and Spanish citizen and is used for tax purposes.
     *
     * @param string $codiceFiscale
     * @return self
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;
        return $this;
    }

    /**
     * Gets as isMultiLegShipping
     *
     * If <strong>IsMultilegShipping</strong> is <code>true</code>, the order line item will be shipped internationally using the Global Shipping Program (GSP). With GSP, the shipment has a domestic leg and an international leg. In the domestic leg, the seller ships the item to eBay's shipping partner. This shipping address can be found in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. eBay's shipping partner will be responsible for the international leg of the shipment and the order's final destination.
     *
     * @return bool
     */
    public function getIsMultiLegShipping()
    {
        return $this->isMultiLegShipping;
    }

    /**
     * Sets a new isMultiLegShipping
     *
     * If <strong>IsMultilegShipping</strong> is <code>true</code>, the order line item will be shipped internationally using the Global Shipping Program (GSP). With GSP, the shipment has a domestic leg and an international leg. In the domestic leg, the seller ships the item to eBay's shipping partner. This shipping address can be found in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. eBay's shipping partner will be responsible for the international leg of the shipment and the order's final destination.
     *
     * @param bool $isMultiLegShipping
     * @return self
     */
    public function setIsMultiLegShipping($isMultiLegShipping)
    {
        $this->isMultiLegShipping = $isMultiLegShipping;
        return $this;
    }

    /**
     * Gets as multiLegShippingDetails
     *
     * This container consists of details about the domestic leg of a Global Shipping Program (GSP) shipment. With GSP, the shipment has a domestic leg and an international leg. In the domestic leg, the seller ships the item to eBay's shipping partner.
     *  <br/><br/>
     *  This container is only returned if the order line item requires shipping through GSP. It is not returned if <strong>IsMultilegShipping</strong> is <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType
     */
    public function getMultiLegShippingDetails()
    {
        return $this->multiLegShippingDetails;
    }

    /**
     * Sets a new multiLegShippingDetails
     *
     * This container consists of details about the domestic leg of a Global Shipping Program (GSP) shipment. With GSP, the shipment has a domestic leg and an international leg. In the domestic leg, the seller ships the item to eBay's shipping partner.
     *  <br/><br/>
     *  This container is only returned if the order line item requires shipping through GSP. It is not returned if <strong>IsMultilegShipping</strong> is <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType $multiLegShippingDetails
     * @return self
     */
    public function setMultiLegShippingDetails(\Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType $multiLegShippingDetails)
    {
        $this->multiLegShippingDetails = $multiLegShippingDetails;
        return $this;
    }

    /**
     * Gets as invoiceSentTime
     *
     * This field indicates the date/time that an order invoice was sent from the seller to the buyer. This field is only returned if an invoice (containing the order line item) was sent to the buyer.
     *
     * @return \DateTime
     */
    public function getInvoiceSentTime()
    {
        return $this->invoiceSentTime;
    }

    /**
     * Sets a new invoiceSentTime
     *
     * This field indicates the date/time that an order invoice was sent from the seller to the buyer. This field is only returned if an invoice (containing the order line item) was sent to the buyer.
     *
     * @param \DateTime $invoiceSentTime
     * @return self
     */
    public function setInvoiceSentTime(\DateTime $invoiceSentTime)
    {
        $this->invoiceSentTime = $invoiceSentTime;
        return $this;
    }

    /**
     * Gets as unpaidItem
     *
     * Container consisting of details related to the type and status of an Unpaid Item case. This container is only returned if there is an open (or recently closed) Unpaid Item case associated with the order line item.
     *
     * @return \Nogrod\eBaySDK\Trading\UnpaidItemType
     */
    public function getUnpaidItem()
    {
        return $this->unpaidItem;
    }

    /**
     * Sets a new unpaidItem
     *
     * Container consisting of details related to the type and status of an Unpaid Item case. This container is only returned if there is an open (or recently closed) Unpaid Item case associated with the order line item.
     *
     * @param \Nogrod\eBaySDK\Trading\UnpaidItemType $unpaidItem
     * @return self
     */
    public function setUnpaidItem(\Nogrod\eBaySDK\Trading\UnpaidItemType $unpaidItem)
    {
        $this->unpaidItem = $unpaidItem;
        return $this;
    }

    /**
     * Gets as intangibleItem
     *
     * This flag indicates whether or not the order line item is an intangible good, such as an MP3 track or a mobile phone ringtone. Intangible items are not eligible for PayPal's Seller Protection program, so the seller will not be able to open an Unpaid Item case against the buyer.
     *
     * @return bool
     */
    public function getIntangibleItem()
    {
        return $this->intangibleItem;
    }

    /**
     * Sets a new intangibleItem
     *
     * This flag indicates whether or not the order line item is an intangible good, such as an MP3 track or a mobile phone ringtone. Intangible items are not eligible for PayPal's Seller Protection program, so the seller will not be able to open an Unpaid Item case against the buyer.
     *
     * @param bool $intangibleItem
     * @return self
     */
    public function setIntangibleItem($intangibleItem)
    {
        $this->intangibleItem = $intangibleItem;
        return $this;
    }

    /**
     * Gets as monetaryDetails
     *
     * Contains information about each monetary transaction that occurs for the order line item, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> <strong>MonetaryDetails</strong> can already be used instead of the older <strong>ExternalTransaction</strong> container, and the <strong>ExternalTransaction</strong> container may eventually get deprecated. Due to this possibility, you are encouraged to start using <strong>MonetaryDetails</strong> as soon as it is convenient.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentsInformationType
     */
    public function getMonetaryDetails()
    {
        return $this->monetaryDetails;
    }

    /**
     * Sets a new monetaryDetails
     *
     * Contains information about each monetary transaction that occurs for the order line item, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> <strong>MonetaryDetails</strong> can already be used instead of the older <strong>ExternalTransaction</strong> container, and the <strong>ExternalTransaction</strong> container may eventually get deprecated. Due to this possibility, you are encouraged to start using <strong>MonetaryDetails</strong> as soon as it is convenient.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\PaymentsInformationType $monetaryDetails
     * @return self
     */
    public function setMonetaryDetails(\Nogrod\eBaySDK\Trading\PaymentsInformationType $monetaryDetails)
    {
        $this->monetaryDetails = $monetaryDetails;
        return $this;
    }

    /**
     * Adds as pickupOptions
     *
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PickupOptionsType $pickupOptions
     */
    public function addToPickupDetails(\Nogrod\eBaySDK\Trading\PickupOptionsType $pickupOptions)
    {
        $this->pickupDetails[] = $pickupOptions;
        return $this;
    }

    /**
     * isset pickupDetails
     *
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickupDetails($index)
    {
        return isset($this->pickupDetails[$index]);
    }

    /**
     * unset pickupDetails
     *
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickupDetails($index)
    {
        unset($this->pickupDetails[$index]);
    }

    /**
     * Gets as pickupDetails
     *
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\PickupOptionsType[]
     */
    public function getPickupDetails()
    {
        return $this->pickupDetails;
    }

    /**
     * Sets a new pickupDetails
     *
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\PickupOptionsType[] $pickupDetails
     * @return self
     */
    public function setPickupDetails(array $pickupDetails)
    {
        $this->pickupDetails = $pickupDetails;
        return $this;
    }

    /**
     * Gets as pickupMethodSelected
     *
     * This container consists of details related to the selected In-Store pickup method, including the pickup method, the merchant's store ID, the status of the In-Store pickup, and the pickup reference code (if provided by merchant).
     *
     * @return \Nogrod\eBaySDK\Trading\PickupMethodSelectedType
     */
    public function getPickupMethodSelected()
    {
        return $this->pickupMethodSelected;
    }

    /**
     * Sets a new pickupMethodSelected
     *
     * This container consists of details related to the selected In-Store pickup method, including the pickup method, the merchant's store ID, the status of the In-Store pickup, and the pickup reference code (if provided by merchant).
     *
     * @param \Nogrod\eBaySDK\Trading\PickupMethodSelectedType $pickupMethodSelected
     * @return self
     */
    public function setPickupMethodSelected(\Nogrod\eBaySDK\Trading\PickupMethodSelectedType $pickupMethodSelected)
    {
        $this->pickupMethodSelected = $pickupMethodSelected;
        return $this;
    }

    /**
     * Gets as shippingConvenienceCharge
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This field is no longer applicable/used. It was previously used for eBay Now and 'eBay On Demand Delivery' orders - two features that have been deprecated.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingConvenienceCharge()
    {
        return $this->shippingConvenienceCharge;
    }

    /**
     * Sets a new shippingConvenienceCharge
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This field is no longer applicable/used. It was previously used for eBay Now and 'eBay On Demand Delivery' orders - two features that have been deprecated.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingConvenienceCharge
     * @return self
     */
    public function setShippingConvenienceCharge(\Nogrod\eBaySDK\Trading\AmountType $shippingConvenienceCharge)
    {
        $this->shippingConvenienceCharge = $shippingConvenienceCharge;
        return $this;
    }

    /**
     * Gets as logisticsPlanType
     *
     * This field will be returned at the order line item level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature.
     *  <br/><br/>
     *  Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or, <code>DigitalDelivery</code>, which indicates that the order line item is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     *
     * @return string
     */
    public function getLogisticsPlanType()
    {
        return $this->logisticsPlanType;
    }

    /**
     * Sets a new logisticsPlanType
     *
     * This field will be returned at the order line item level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature.
     *  <br/><br/>
     *  Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or, <code>DigitalDelivery</code>, which indicates that the order line item is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     *
     * @param string $logisticsPlanType
     * @return self
     */
    public function setLogisticsPlanType($logisticsPlanType)
    {
        $this->logisticsPlanType = $logisticsPlanType;
        return $this;
    }

    /**
     * Adds as buyerPackageEnclosure
     *
     * This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType $buyerPackageEnclosure
     */
    public function addToBuyerPackageEnclosures(\Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType $buyerPackageEnclosure)
    {
        $this->buyerPackageEnclosures[] = $buyerPackageEnclosure;
        return $this;
    }

    /**
     * isset buyerPackageEnclosures
     *
     * This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyerPackageEnclosures($index)
    {
        return isset($this->buyerPackageEnclosures[$index]);
    }

    /**
     * unset buyerPackageEnclosures
     *
     * This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyerPackageEnclosures($index)
    {
        unset($this->buyerPackageEnclosures[$index]);
    }

    /**
     * Gets as buyerPackageEnclosures
     *
     * This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *
     * @return \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType[]
     */
    public function getBuyerPackageEnclosures()
    {
        return $this->buyerPackageEnclosures;
    }

    /**
     * Sets a new buyerPackageEnclosures
     *
     * This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *
     * @param \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType[] $buyerPackageEnclosures
     * @return self
     */
    public function setBuyerPackageEnclosures(array $buyerPackageEnclosures)
    {
        $this->buyerPackageEnclosures = $buyerPackageEnclosures;
        return $this;
    }

    /**
     * Gets as inventoryReservationID
     *
     * The unique identifier of the inventory reservation.
     *
     * @return string
     */
    public function getInventoryReservationID()
    {
        return $this->inventoryReservationID;
    }

    /**
     * Sets a new inventoryReservationID
     *
     * The unique identifier of the inventory reservation.
     *
     * @param string $inventoryReservationID
     * @return self
     */
    public function setInventoryReservationID($inventoryReservationID)
    {
        $this->inventoryReservationID = $inventoryReservationID;
        return $this;
    }

    /**
     * Gets as extendedOrderID
     *
     * A unique identifier for an eBay order in the new eBay REST API model. <b>ExtendedOrderID</b> values will be used to identify orders in REST-based APIs, including the Post-Order API and the Fulfillment API.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values, and this new format is relevant to both legacy and REST API-based order ID fields. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order (for <b>OrderID</b> and <b>ExtendedOrderID</b>) will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @return string
     */
    public function getExtendedOrderID()
    {
        return $this->extendedOrderID;
    }

    /**
     * Sets a new extendedOrderID
     *
     * A unique identifier for an eBay order in the new eBay REST API model. <b>ExtendedOrderID</b> values will be used to identify orders in REST-based APIs, including the Post-Order API and the Fulfillment API.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values, and this new format is relevant to both legacy and REST API-based order ID fields. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order (for <b>OrderID</b> and <b>ExtendedOrderID</b>) will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @param string $extendedOrderID
     * @return self
     */
    public function setExtendedOrderID($extendedOrderID)
    {
        $this->extendedOrderID = $extendedOrderID;
        return $this;
    }

    /**
     * Gets as eBayPlusTransaction
     *
     * If <code>true</code>, the buyer of the order line item has a eBay Plus program subscription, and is eligible to receive the benefits of this program, such as fast, free shipping and free returns. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia.
     *  </span>
     *
     * @return bool
     */
    public function getEBayPlusTransaction()
    {
        return $this->eBayPlusTransaction;
    }

    /**
     * Sets a new eBayPlusTransaction
     *
     * If <code>true</code>, the buyer of the order line item has a eBay Plus program subscription, and is eligible to receive the benefits of this program, such as fast, free shipping and free returns. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia.
     *  </span>
     *
     * @param bool $eBayPlusTransaction
     * @return self
     */
    public function setEBayPlusTransaction($eBayPlusTransaction)
    {
        $this->eBayPlusTransaction = $eBayPlusTransaction;
        return $this;
    }

    /**
     * Gets as giftSummary
     *
     * This container is returned in <b>GetOrders</b> and other order management calls if a buyer has purchased a digital gift card but has sent it to another individual as a gift, and has left a message for the recipient. The <b>GiftSummary</b> container consists of the message that the buyer wrote for the recipient of the digital gift card. A digital gift card line item is indicated if the <b>DigitalDeliverySelected</b> container is returned in the response, and if the digital gift card is sent to another individual as a gift, the <b>Gift</b> boolean field will be returned with a value of <code>true</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\GiftSummaryType
     */
    public function getGiftSummary()
    {
        return $this->giftSummary;
    }

    /**
     * Sets a new giftSummary
     *
     * This container is returned in <b>GetOrders</b> and other order management calls if a buyer has purchased a digital gift card but has sent it to another individual as a gift, and has left a message for the recipient. The <b>GiftSummary</b> container consists of the message that the buyer wrote for the recipient of the digital gift card. A digital gift card line item is indicated if the <b>DigitalDeliverySelected</b> container is returned in the response, and if the digital gift card is sent to another individual as a gift, the <b>Gift</b> boolean field will be returned with a value of <code>true</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\GiftSummaryType $giftSummary
     * @return self
     */
    public function setGiftSummary(\Nogrod\eBaySDK\Trading\GiftSummaryType $giftSummary)
    {
        $this->giftSummary = $giftSummary;
        return $this;
    }

    /**
     * Gets as digitalDeliverySelected
     *
     * This container is only returned by <b>GetOrders</b> and other order management calls if the buyer purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift (in this case, the <b>Gift</b> boolean field will be returned with a value of <code>true</code>). The <b>DigitalDeliverySelected</b> container consists of information related to the digital gift card order line item, including the delivery method, delivery status, and recipient of the gift card (either the buyer, or another individual that is receiving the gift card as a gift from the buyer.
     *
     * @return \Nogrod\eBaySDK\Trading\DigitalDeliverySelectedType
     */
    public function getDigitalDeliverySelected()
    {
        return $this->digitalDeliverySelected;
    }

    /**
     * Sets a new digitalDeliverySelected
     *
     * This container is only returned by <b>GetOrders</b> and other order management calls if the buyer purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift (in this case, the <b>Gift</b> boolean field will be returned with a value of <code>true</code>). The <b>DigitalDeliverySelected</b> container consists of information related to the digital gift card order line item, including the delivery method, delivery status, and recipient of the gift card (either the buyer, or another individual that is receiving the gift card as a gift from the buyer.
     *
     * @param \Nogrod\eBaySDK\Trading\DigitalDeliverySelectedType $digitalDeliverySelected
     * @return self
     */
    public function setDigitalDeliverySelected(\Nogrod\eBaySDK\Trading\DigitalDeliverySelectedType $digitalDeliverySelected)
    {
        $this->digitalDeliverySelected = $digitalDeliverySelected;
        return $this;
    }

    /**
     * Gets as gift
     *
     * This boolean field is returned as <code>true</code> if the seller is giving a digital gift card to another individual as a gift. This field is only applicable for digital gift card order line items.
     *
     * @return bool
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Sets a new gift
     *
     * This boolean field is returned as <code>true</code> if the seller is giving a digital gift card to another individual as a gift. This field is only applicable for digital gift card order line items.
     *
     * @param bool $gift
     * @return self
     */
    public function setGift($gift)
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * Gets as guaranteedShipping
     *
     * <span class="tablenote"><b>Note: </b> This field is for future use, as the eBay Guaranteed Shipping feature has been put on hold. eBay Guaranteed Shipping should not be confused with eBay Guaranteed Delivery, which is a completely different feature.
     *  </span>
     *  This field is returned as <code>true</code> if the seller chose to use eBay's Guaranteed Shipping feature at listing time. With eBay's Guaranteed Shipping, the seller will never pay more for shipping than what is charged to the buyer. eBay recommends the shipping service option for the seller to use based on the dimensions and weight of the shipping package.
     *
     * @return bool
     */
    public function getGuaranteedShipping()
    {
        return $this->guaranteedShipping;
    }

    /**
     * Sets a new guaranteedShipping
     *
     * <span class="tablenote"><b>Note: </b> This field is for future use, as the eBay Guaranteed Shipping feature has been put on hold. eBay Guaranteed Shipping should not be confused with eBay Guaranteed Delivery, which is a completely different feature.
     *  </span>
     *  This field is returned as <code>true</code> if the seller chose to use eBay's Guaranteed Shipping feature at listing time. With eBay's Guaranteed Shipping, the seller will never pay more for shipping than what is charged to the buyer. eBay recommends the shipping service option for the seller to use based on the dimensions and weight of the shipping package.
     *
     * @param bool $guaranteedShipping
     * @return self
     */
    public function setGuaranteedShipping($guaranteedShipping)
    {
        $this->guaranteedShipping = $guaranteedShipping;
        return $this;
    }

    /**
     * Gets as guaranteedDelivery
     *
     * This field is returned as <code>true</code> if the order line item is qualified for eBay Guaranteed Delivery, or <code>false</code> if it is not eligible. At this time, eBay Guaranteed Delivery is only available to a select number of sellers on the US and Australia sites, but this feature will be enabled on more eBay sites in 2019. <br/><br/>Only domestic shipments are available for eBay Guaranteed Delivery. For an order line item to be qualified for eBay Guaranteed Delivery, the following must be true:
     *  <ul>
     *  <li>The eBay Guaranteed Delivery feature must be available to the seller</li>
     *  <li>That seller must be opted in to one of the two eBay Guaranteed Delivery programs</li>
     *  <li>If the seller is opted into the "Door-to-Door" program, a domestic shipping rate table must be applied to the listing, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or less; </li>
     *  <li>If the seller is opted into the "Handling Time" program, the handling time plus the max shipping time must equal 3 business days or less, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or less</li>
     *  <li>The listing must have a return policy</li>
     *  </ul>
     *  With eBay Guaranteed Delivery, the sellers are committed to getting the order line item to the buyer within 3 business days. The seller's defined "Order Cutoff" time will control what is considered 3 business days. If a buyer wanted to get an order by Friday, that buyer would have to purchase that item on Monday before the seller's "Order Cutoff" time. The seller's "Order Cutoff" time is generally set in their timezone, so the buyer should take this into account before the purchase.
     *
     * @return bool
     */
    public function getGuaranteedDelivery()
    {
        return $this->guaranteedDelivery;
    }

    /**
     * Sets a new guaranteedDelivery
     *
     * This field is returned as <code>true</code> if the order line item is qualified for eBay Guaranteed Delivery, or <code>false</code> if it is not eligible. At this time, eBay Guaranteed Delivery is only available to a select number of sellers on the US and Australia sites, but this feature will be enabled on more eBay sites in 2019. <br/><br/>Only domestic shipments are available for eBay Guaranteed Delivery. For an order line item to be qualified for eBay Guaranteed Delivery, the following must be true:
     *  <ul>
     *  <li>The eBay Guaranteed Delivery feature must be available to the seller</li>
     *  <li>That seller must be opted in to one of the two eBay Guaranteed Delivery programs</li>
     *  <li>If the seller is opted into the "Door-to-Door" program, a domestic shipping rate table must be applied to the listing, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or less; </li>
     *  <li>If the seller is opted into the "Handling Time" program, the handling time plus the max shipping time must equal 3 business days or less, and that shipping rate table must include the buyer's location with a transit time (handling + shipping time) of 3 business days or less</li>
     *  <li>The listing must have a return policy</li>
     *  </ul>
     *  With eBay Guaranteed Delivery, the sellers are committed to getting the order line item to the buyer within 3 business days. The seller's defined "Order Cutoff" time will control what is considered 3 business days. If a buyer wanted to get an order by Friday, that buyer would have to purchase that item on Monday before the seller's "Order Cutoff" time. The seller's "Order Cutoff" time is generally set in their timezone, so the buyer should take this into account before the purchase.
     *
     * @param bool $guaranteedDelivery
     * @return self
     */
    public function setGuaranteedDelivery($guaranteedDelivery)
    {
        $this->guaranteedDelivery = $guaranteedDelivery;
        return $this;
    }

    /**
     * Gets as eBayCollectAndRemitTax
     *
     * This boolean field is returned as <code>true</code> if the line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). An <b>eBayCollectAndRemitTaxes</b> container is returned if the order line item is subject to such a tax, and the type and amount of this tax is displayed in the <b>eBayCollectAndRemitTaxes.TaxDetails</b> container.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  As of July 1, 2019, buyers in 22 US states will automatically be charged sales tax for eBay purchases, and at least six more US states are scheduled to be subject to eBay Collect and Remit Tax by the end of 2019. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps to enable the collection of this sales tax. If the seller is employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a list of the US states that are or will become subject to 'eBay Collect and Remit Tax' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @return bool
     */
    public function getEBayCollectAndRemitTax()
    {
        return $this->eBayCollectAndRemitTax;
    }

    /**
     * Sets a new eBayCollectAndRemitTax
     *
     * This boolean field is returned as <code>true</code> if the line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). An <b>eBayCollectAndRemitTaxes</b> container is returned if the order line item is subject to such a tax, and the type and amount of this tax is displayed in the <b>eBayCollectAndRemitTaxes.TaxDetails</b> container.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  As of July 1, 2019, buyers in 22 US states will automatically be charged sales tax for eBay purchases, and at least six more US states are scheduled to be subject to eBay Collect and Remit Tax by the end of 2019. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps to enable the collection of this sales tax. If the seller is employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a list of the US states that are or will become subject to 'eBay Collect and Remit Tax' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @param bool $eBayCollectAndRemitTax
     * @return self
     */
    public function setEBayCollectAndRemitTax($eBayCollectAndRemitTax)
    {
        $this->eBayCollectAndRemitTax = $eBayCollectAndRemitTax;
        return $this;
    }

    /**
     * Gets as eBayCollectAndRemitTaxes
     *
     * This container is returned if the order line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. The type of tax will be shown in the <b>TaxDetails.Imposition</b> and <b>TaxDetails.TaxDescription</b> fields, and the amount of this tax will be displayed in the <b>TaxDetails.TaxAmount</b> field.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  As of January 1, 2019, buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps to enable the collection of this sales tax. If the seller is employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @return \Nogrod\eBaySDK\Trading\TaxesType
     */
    public function getEBayCollectAndRemitTaxes()
    {
        return $this->eBayCollectAndRemitTaxes;
    }

    /**
     * Sets a new eBayCollectAndRemitTaxes
     *
     * This container is returned if the order line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. The type of tax will be shown in the <b>TaxDetails.Imposition</b> and <b>TaxDetails.TaxDescription</b> fields, and the amount of this tax will be displayed in the <b>TaxDetails.TaxAmount</b> field.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  As of January 1, 2019, buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. Sellers do not have to take any extra steps to enable the collection of this sales tax. If the seller is employing a Sales Tax Table for the listing, and a sales tax rate is established for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @param \Nogrod\eBaySDK\Trading\TaxesType $eBayCollectAndRemitTaxes
     * @return self
     */
    public function setEBayCollectAndRemitTaxes(\Nogrod\eBaySDK\Trading\TaxesType $eBayCollectAndRemitTaxes)
    {
        $this->eBayCollectAndRemitTaxes = $eBayCollectAndRemitTaxes;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAmountPaid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AmountPaid", $value);
        }
        $value = $this->getAdjustmentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount", $value);
        }
        $value = $this->getConvertedAdjustmentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedAdjustmentAmount", $value);
        }
        $value = $this->getBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Buyer", $value);
        }
        $value = $this->getShippingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDetails", $value);
        }
        $value = $this->getConvertedAmountPaid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedAmountPaid", $value);
        }
        $value = $this->getConvertedTransactionPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedTransactionPrice", $value);
        }
        $value = $this->getCreatedDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreatedDate", $value);
        }
        $value = $this->getDepositType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DepositType", $value);
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getQuantityPurchased();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityPurchased", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getTransactionPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionPrice", $value);
        }
        $value = $this->getBestOfferSale();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferSale", $value);
        }
        $value = $this->getVATPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATPercent", $value);
        }
        $value = $this->getExternalTransaction();
        if (null !== $value && !empty($this->getExternalTransaction())) {
            $writer->write(array_map(function ($v) {
                return ["ExternalTransaction" => $v];
            }, $value));
        }
        $value = $this->getSellingManagerProductDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails", $value);
        }
        $value = $this->getShippingServiceSelected();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceSelected", $value);
        }
        $value = $this->getBuyerMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerMessage", $value);
        }
        $value = $this->getDutchAuctionBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DutchAuctionBid", $value);
        }
        $value = $this->getBuyerPaidStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerPaidStatus", $value);
        }
        $value = $this->getSellerPaidStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerPaidStatus", $value);
        }
        $value = $this->getPaidTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaidTime", $value);
        }
        $value = $this->getShippedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippedTime", $value);
        }
        $value = $this->getTotalPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalPrice", $value);
        }
        $value = $this->getFeedbackLeft();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackLeft", $value);
        }
        $value = $this->getFeedbackReceived();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackReceived", $value);
        }
        $value = $this->getContainingOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ContainingOrder", $value);
        }
        $value = $this->getFinalValueFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FinalValueFee", $value);
        }
        $value = $this->getListingCheckoutRedirectPreference();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingCheckoutRedirectPreference", $value);
        }
        $value = $this->getRefundArray();
        if (null !== $value && !empty($this->getRefundArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundArray", array_map(function ($v) {
                return ["Refund" => $v];
            }, $value));
        }
        $value = $this->getTransactionSiteID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionSiteID", $value);
        }
        $value = $this->getPlatform();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Platform", $value);
        }
        $value = $this->getCartID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CartID", $value);
        }
        $value = $this->getSellerContactBuyerByEmail();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerContactBuyerByEmail", $value);
        }
        $value = $this->getPayPalEmailAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalEmailAddress", $value);
        }
        $value = $this->getPaisaPayID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaisaPayID", $value);
        }
        $value = $this->getBuyerGuaranteePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteePrice", $value);
        }
        $value = $this->getVariation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Variation", $value);
        }
        $value = $this->getBuyerCheckoutMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerCheckoutMessage", $value);
        }
        $value = $this->getTotalTransactionPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalTransactionPrice", $value);
        }
        $value = $this->getTaxes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Taxes", $value);
        }
        $value = $this->getBundlePurchase();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BundlePurchase", $value);
        }
        $value = $this->getActualShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActualShippingCost", $value);
        }
        $value = $this->getActualHandlingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActualHandlingCost", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
        }
        $value = $this->getEBayPaymentID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPaymentID", $value);
        }
        $value = $this->getPaymentHoldDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentHoldDetails", $value);
        }
        $value = $this->getSellerDiscounts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerDiscounts", $value);
        }
        $value = $this->getRefundAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundAmount", $value);
        }
        $value = $this->getRefundStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundStatus", $value);
        }
        $value = $this->getCodiceFiscale();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CodiceFiscale", $value);
        }
        $value = $this->getIsMultiLegShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IsMultiLegShipping", $value);
        }
        $value = $this->getMultiLegShippingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MultiLegShippingDetails", $value);
        }
        $value = $this->getInvoiceSentTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoiceSentTime", $value);
        }
        $value = $this->getUnpaidItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnpaidItem", $value);
        }
        $value = $this->getIntangibleItem();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IntangibleItem", $value);
        }
        $value = $this->getMonetaryDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MonetaryDetails", $value);
        }
        $value = $this->getPickupDetails();
        if (null !== $value && !empty($this->getPickupDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupDetails", array_map(function ($v) {
                return ["PickupOptions" => $v];
            }, $value));
        }
        $value = $this->getPickupMethodSelected();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupMethodSelected", $value);
        }
        $value = $this->getShippingConvenienceCharge();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingConvenienceCharge", $value);
        }
        $value = $this->getLogisticsPlanType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogisticsPlanType", $value);
        }
        $value = $this->getBuyerPackageEnclosures();
        if (null !== $value && !empty($this->getBuyerPackageEnclosures())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerPackageEnclosures", array_map(function ($v) {
                return ["BuyerPackageEnclosure" => $v];
            }, $value));
        }
        $value = $this->getInventoryReservationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InventoryReservationID", $value);
        }
        $value = $this->getExtendedOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtendedOrderID", $value);
        }
        $value = $this->getEBayPlusTransaction();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPlusTransaction", $value);
        }
        $value = $this->getGiftSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GiftSummary", $value);
        }
        $value = $this->getDigitalDeliverySelected();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DigitalDeliverySelected", $value);
        }
        $value = $this->getGift();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Gift", $value);
        }
        $value = $this->getGuaranteedShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GuaranteedShipping", $value);
        }
        $value = $this->getGuaranteedDelivery();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GuaranteedDelivery", $value);
        }
        $value = $this->getEBayCollectAndRemitTax();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayCollectAndRemitTax", $value);
        }
        $value = $this->getEBayCollectAndRemitTaxes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayCollectAndRemitTaxes", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AmountPaid');
        if (null !== $value) {
            $this->setAmountPaid(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount');
        if (null !== $value) {
            $this->setAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedAdjustmentAmount');
        if (null !== $value) {
            $this->setConvertedAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Buyer');
        if (null !== $value) {
            $this->setBuyer(\Nogrod\eBaySDK\Trading\UserType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDetails');
        if (null !== $value) {
            $this->setShippingDetails(\Nogrod\eBaySDK\Trading\ShippingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedAmountPaid');
        if (null !== $value) {
            $this->setConvertedAmountPaid(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedTransactionPrice');
        if (null !== $value) {
            $this->setConvertedTransactionPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreatedDate');
        if (null !== $value) {
            $this->setCreatedDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DepositType');
        if (null !== $value) {
            $this->setDepositType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityPurchased');
        if (null !== $value) {
            $this->setQuantityPurchased($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus(\Nogrod\eBaySDK\Trading\TransactionStatusType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionPrice');
        if (null !== $value) {
            $this->setTransactionPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferSale');
        if (null !== $value) {
            $this->setBestOfferSale($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATPercent');
        if (null !== $value) {
            $this->setVATPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransaction', true);
        if (null !== $value && !empty($value)) {
            $this->setExternalTransaction(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ExternalTransactionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails');
        if (null !== $value) {
            $this->setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceSelected');
        if (null !== $value) {
            $this->setShippingServiceSelected(\Nogrod\eBaySDK\Trading\ShippingServiceOptionsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerMessage');
        if (null !== $value) {
            $this->setBuyerMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DutchAuctionBid');
        if (null !== $value) {
            $this->setDutchAuctionBid(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerPaidStatus');
        if (null !== $value) {
            $this->setBuyerPaidStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerPaidStatus');
        if (null !== $value) {
            $this->setSellerPaidStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaidTime');
        if (null !== $value) {
            $this->setPaidTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippedTime');
        if (null !== $value) {
            $this->setShippedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalPrice');
        if (null !== $value) {
            $this->setTotalPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackLeft');
        if (null !== $value) {
            $this->setFeedbackLeft(\Nogrod\eBaySDK\Trading\FeedbackInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackReceived');
        if (null !== $value) {
            $this->setFeedbackReceived(\Nogrod\eBaySDK\Trading\FeedbackInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ContainingOrder');
        if (null !== $value) {
            $this->setContainingOrder(\Nogrod\eBaySDK\Trading\OrderType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FinalValueFee');
        if (null !== $value) {
            $this->setFinalValueFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingCheckoutRedirectPreference');
        if (null !== $value) {
            $this->setListingCheckoutRedirectPreference(\Nogrod\eBaySDK\Trading\ListingCheckoutRedirectPreferenceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundArray', true);
        if (null !== $value && !empty($value)) {
            $this->setRefundArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RefundType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionSiteID');
        if (null !== $value) {
            $this->setTransactionSiteID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Platform');
        if (null !== $value) {
            $this->setPlatform($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CartID');
        if (null !== $value) {
            $this->setCartID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerContactBuyerByEmail');
        if (null !== $value) {
            $this->setSellerContactBuyerByEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalEmailAddress');
        if (null !== $value) {
            $this->setPayPalEmailAddress($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaisaPayID');
        if (null !== $value) {
            $this->setPaisaPayID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteePrice');
        if (null !== $value) {
            $this->setBuyerGuaranteePrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Variation');
        if (null !== $value) {
            $this->setVariation(\Nogrod\eBaySDK\Trading\VariationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerCheckoutMessage');
        if (null !== $value) {
            $this->setBuyerCheckoutMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalTransactionPrice');
        if (null !== $value) {
            $this->setTotalTransactionPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Taxes');
        if (null !== $value) {
            $this->setTaxes(\Nogrod\eBaySDK\Trading\TaxesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BundlePurchase');
        if (null !== $value) {
            $this->setBundlePurchase($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActualShippingCost');
        if (null !== $value) {
            $this->setActualShippingCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActualHandlingCost');
        if (null !== $value) {
            $this->setActualHandlingCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPaymentID');
        if (null !== $value) {
            $this->setEBayPaymentID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentHoldDetails');
        if (null !== $value) {
            $this->setPaymentHoldDetails(\Nogrod\eBaySDK\Trading\PaymentHoldDetailType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerDiscounts');
        if (null !== $value) {
            $this->setSellerDiscounts(\Nogrod\eBaySDK\Trading\SellerDiscountsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundAmount');
        if (null !== $value) {
            $this->setRefundAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundStatus');
        if (null !== $value) {
            $this->setRefundStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CodiceFiscale');
        if (null !== $value) {
            $this->setCodiceFiscale($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IsMultiLegShipping');
        if (null !== $value) {
            $this->setIsMultiLegShipping($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MultiLegShippingDetails');
        if (null !== $value) {
            $this->setMultiLegShippingDetails(\Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoiceSentTime');
        if (null !== $value) {
            $this->setInvoiceSentTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnpaidItem');
        if (null !== $value) {
            $this->setUnpaidItem(\Nogrod\eBaySDK\Trading\UnpaidItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IntangibleItem');
        if (null !== $value) {
            $this->setIntangibleItem($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MonetaryDetails');
        if (null !== $value) {
            $this->setMonetaryDetails(\Nogrod\eBaySDK\Trading\PaymentsInformationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setPickupDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PickupOptionsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupMethodSelected');
        if (null !== $value) {
            $this->setPickupMethodSelected(\Nogrod\eBaySDK\Trading\PickupMethodSelectedType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingConvenienceCharge');
        if (null !== $value) {
            $this->setShippingConvenienceCharge(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogisticsPlanType');
        if (null !== $value) {
            $this->setLogisticsPlanType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerPackageEnclosures', true);
        if (null !== $value && !empty($value)) {
            $this->setBuyerPackageEnclosures(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InventoryReservationID');
        if (null !== $value) {
            $this->setInventoryReservationID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtendedOrderID');
        if (null !== $value) {
            $this->setExtendedOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPlusTransaction');
        if (null !== $value) {
            $this->setEBayPlusTransaction($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GiftSummary');
        if (null !== $value) {
            $this->setGiftSummary(\Nogrod\eBaySDK\Trading\GiftSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DigitalDeliverySelected');
        if (null !== $value) {
            $this->setDigitalDeliverySelected(\Nogrod\eBaySDK\Trading\DigitalDeliverySelectedType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Gift');
        if (null !== $value) {
            $this->setGift($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GuaranteedShipping');
        if (null !== $value) {
            $this->setGuaranteedShipping($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GuaranteedDelivery');
        if (null !== $value) {
            $this->setGuaranteedDelivery($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayCollectAndRemitTax');
        if (null !== $value) {
            $this->setEBayCollectAndRemitTax($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayCollectAndRemitTaxes');
        if (null !== $value) {
            $this->setEBayCollectAndRemitTaxes(\Nogrod\eBaySDK\Trading\TaxesType::fromKeyValue($value));
        }
    }
}
