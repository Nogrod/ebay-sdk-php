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
class TransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The total amount the buyer paid for the order line item. This amount includes the sale price of
     *  each line item, shipping and handling charges, additional services, sales tax, and any Buyer Protection
     *  fees + tax against this fee for the line item in the order. <br><br>If the
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $buyer
     */
    private $buyer = null;

    /**
     * Container consisting of shipping-related details for a sales transaction. Shipping details may include shipping rates, package dimensions, handling costs, excluded shipping locations (if specified), shipping service options, sales tax information (if applicable), and shipment tracking details (if shipped).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For <b>GetOrders</b>, a <b>ShippingDetails</b> container is returned at the order at line item level.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingDetailsType $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * This field shows the converted value of <b>AmountPaid</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates.
     *  <br><br>
     *  This field is always returned for paid orders. This value should be the same as the value in <b>AmountPaid</b> if the eBay listing site and the site that returned the response are the same, or use the same currency.
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
     * This value indicates whether or not the seller requires a deposit for the purchase of a motor vehicle. This field is only applicable to motor vehicle listings that require an initial deposit. A value of 'OtherMethod' will be returned if the motor vehicle listing requires an initial deposit, or a value of 'None' if an initial deposit is not required.
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
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
     *  <br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer and seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, transaction ID is only returned to the buyer and seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * The sale price for one unit of the line item. This price does not include any other costs like shipping/handling costs, sales tax costs, or any discounts, and its value will remain the same before and after payment. If multiple units were purchased through a single-variation, fixed-price listing, to get the subtotal of the units purchased, the <b>TransactionPrice</b> value would have to be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br>
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
     *  <li>Programmatically by the seller through the <b>CompleteSale</b> call.</li>
     *  </ul>
     *
     * @var \DateTime $paidTime
     */
    private $paidTime = null;

    /**
     * Indicates the time when the line item was marked as 'Shipped'. This value will only be visible to the user on either side of the order. An order can be marked as 'Shipped' by purchasing an eBay shipping label, providing shipment tracking in My eBay or through Selling Manager Pro, or programmatically by the seller through the <b>CompleteSale</b> call.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in the Sell Feed API's <code>LMS_ORDER_REPORT</code> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in the <code>LMS_ORDER_REPORT</code> responses.
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, order line item ID is only returned to the buyer or seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
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
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item. This container is only returned if the order line item is eligible for seller discounts.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerDiscountsType $sellerDiscounts
     */
    private $sellerDiscounts = null;

    /**
     * This field is returned if the <b>IncludeCodiceFiscale</b> flag is included in the request and set to <code>true</code>, and if the buyer has provided this value at checkout time.
     *  <br/><br/>
     *  This field is only applicable to buyers on the Italy and Spain sites. The Codice Fiscale number is unique for each Italian and Spanish citizen and is used for tax purposes.
     *
     * @var string $codiceFiscale
     */
    private $codiceFiscale = null;

    /**
     * Order line items requiring multiple shipping legs include items being shipped through the Global Shipping Program or through eBay International Shipping, as well as order line items subject to/eligible for the Authenticity Guarantee program. For both international shipping options, the address of the shipping logistics provider is shown in the <b>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</b> container. Similarly, for Authenticity Guarantee orders, the authentication partner's shipping address is shown in the same container.
     *  <br><br>
     *  If an order line item is subject to the Authenticity Guarantee service, the <b>Transaction.Program</b> container will be returned.
     *
     * @var bool $isMultiLegShipping
     */
    private $isMultiLegShipping = null;

    /**
     * This container consists of details related to the first leg of an order requiring multiple shipping legs. Types of orders that require multiple shipping legs include international orders going through the Global Shipping Program or through eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program.</br/></br/>If the item is subject to the Authenticity Guarantee service program, the seller ships the item to the authentication partner, and if the item passes an authentication inspection, the authentication partner ships it directly to the buyer.<br/><br/>
     *  This container is only returned if the order has one or more order line items requiring multiple shipping legs.
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
     * This flag indicates whether or not the order line item is an intangible good, such as an MP3 track or a mobile phone ringtone.
     *
     * @var bool $intangibleItem
     */
    private $intangibleItem = null;

    /**
     * Contains information about each monetary transaction that occurs for the order line item, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container.
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentsInformationType $monetaryDetails
     */
    private $monetaryDetails = null;

    /**
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PickupOptionsType[] $pickupDetails
     */
    private $pickupDetails = null;

    /**
     * <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PickupMethodSelectedType $pickupMethodSelected
     */
    private $pickupMethodSelected = null;

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
     * A unique identifier for an eBay order. This field is only returned for paid orders, and not unpaid orders.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> <b>ExtendedOrderID</b> was first created when eBay changed the format of Order IDs back in June 2019. For a short period, the <b>OrderID</b> field showed the old Order ID format and the <b>ExtendedOrderID</b> field showed the new Order ID format. For paid orders, both <b>OrderID</b> and <b>ExtendedOrderID</b> now show the same Order ID value.
     *  <br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties.
     *  <br>
     *
     * @var string $extendedOrderID
     */
    private $extendedOrderID = null;

    /**
     * If <code>true</code>, the buyer of the order line item has an eBay Plus subscription and is eligible to receive program benefits, such as fast, free domestic shipping and free returns on eligible items. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany and Australia.
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
     * This field is deprecated, and can be ignored if returned. The Guaranteed Delivery program is no longer supported on any eBay marketplace.
     *
     * @var bool $guaranteedDelivery
     */
    private $guaranteedDelivery = null;

    /**
     * This boolean field is returned as <code>true</code> if the line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). An <b>eBayCollectAndRemitTaxes</b> container is returned if the order line item is subject to such a tax, and the type and amount of this tax is displayed in the <b>eBayCollectAndRemitTaxes.TaxDetails</b> container.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @var bool $eBayCollectAndRemitTax
     */
    private $eBayCollectAndRemitTax = null;

    /**
     * This container is returned if the order line item is subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. The type of tax will be shown in the <b>TaxDetails.Imposition</b> and <b>TaxDetails.TaxDescription</b> fields, and the amount of this tax will be displayed in the <b>TaxDetails.TaxAmount</b> field.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxesType $eBayCollectAndRemitTaxes
     */
    private $eBayCollectAndRemitTaxes = null;

    /**
     * This container gives the status of an order line item going through the Authenticity Guarantee service process. In the Authenticity Guarantee service program, a third-party authenticator must verify the authenticity of the item before it can be sent to the buyer.
     *  <br/><br/>
     *  This container is only returned for order line items subject to the Authenticity Guarantee service process, and if it is returned, the seller must make sure to send the item to the third-party authenticator's address (shown in the <b>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</b> field), and not to the buyer's shipping address. If the item is successfully authenticated, the authenticator will ship the item to the buyer.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionProgramType $program
     */
    private $program = null;

    /**
     * <span class="tablenote"><b>Note: </b> This array is only returned if the order has associated linked line items.</span>
     *  Container consisting of an array of linked line item objects.
     *
     * @var \Nogrod\eBaySDK\Trading\LinkedLineItemType[] $linkedLineItemArray
     */
    private $linkedLineItemArray = null;

    /**
     * Gets as amountPaid
     *
     * The total amount the buyer paid for the order line item. This amount includes the sale price of
     *  each line item, shipping and handling charges, additional services, sales tax, and any Buyer Protection
     *  fees + tax against this fee for the line item in the order. <br><br>If the
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
     * The total amount the buyer paid for the order line item. This amount includes the sale price of
     *  each line item, shipping and handling charges, additional services, sales tax, and any Buyer Protection
     *  fees + tax against this fee for the line item in the order. <br><br>If the
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
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
     *  <span class="tablenote"><b>Note: </b> For <b>GetOrders</b>, a <b>ShippingDetails</b> container is returned at the order at line item level.
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
     *  <span class="tablenote"><b>Note: </b> For <b>GetOrders</b>, a <b>ShippingDetails</b> container is returned at the order at line item level.
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
     * This value indicates whether or not the seller requires a deposit for the purchase of a motor vehicle. This field is only applicable to motor vehicle listings that require an initial deposit. A value of 'OtherMethod' will be returned if the motor vehicle listing requires an initial deposit, or a value of 'None' if an initial deposit is not required.
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
     * This value indicates whether or not the seller requires a deposit for the purchase of a motor vehicle. This field is only applicable to motor vehicle listings that require an initial deposit. A value of 'OtherMethod' will be returned if the motor vehicle listing requires an initial deposit, or a value of 'None' if an initial deposit is not required.
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
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
     *  <br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer and seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, transaction ID is only returned to the buyer and seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
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
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
     *  <br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer and seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, transaction ID is only returned to the buyer and seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
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
     * The sale price for one unit of the line item. This price does not include any other costs like shipping/handling costs, sales tax costs, or any discounts, and its value will remain the same before and after payment. If multiple units were purchased through a single-variation, fixed-price listing, to get the subtotal of the units purchased, the <b>TransactionPrice</b> value would have to be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br>
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
     * The sale price for one unit of the line item. This price does not include any other costs like shipping/handling costs, sales tax costs, or any discounts, and its value will remain the same before and after payment. If multiple units were purchased through a single-variation, fixed-price listing, to get the subtotal of the units purchased, the <b>TransactionPrice</b> value would have to be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br>
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
     *  <li>Programmatically by the seller through the <b>CompleteSale</b> call.</li>
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
     *  <li>Programmatically by the seller through the <b>CompleteSale</b> call.</li>
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
     * Indicates the time when the line item was marked as 'Shipped'. This value will only be visible to the user on either side of the order. An order can be marked as 'Shipped' by purchasing an eBay shipping label, providing shipment tracking in My eBay or through Selling Manager Pro, or programmatically by the seller through the <b>CompleteSale</b> call.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in the Sell Feed API's <code>LMS_ORDER_REPORT</code> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in the <code>LMS_ORDER_REPORT</code> responses.
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
     * Indicates the time when the line item was marked as 'Shipped'. This value will only be visible to the user on either side of the order. An order can be marked as 'Shipped' by purchasing an eBay shipping label, providing shipment tracking in My eBay or through Selling Manager Pro, or programmatically by the seller through the <b>CompleteSale</b> call.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in the Sell Feed API's <code>LMS_ORDER_REPORT</code> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in the <code>LMS_ORDER_REPORT</code> responses.
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, order line item ID is only returned to the buyer or seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, order line item ID is only returned to the buyer or seller, and a dummy value of <code>10000000000000</code> will be returned to all third parties.
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
     * Order line items requiring multiple shipping legs include items being shipped through the Global Shipping Program or through eBay International Shipping, as well as order line items subject to/eligible for the Authenticity Guarantee program. For both international shipping options, the address of the shipping logistics provider is shown in the <b>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</b> container. Similarly, for Authenticity Guarantee orders, the authentication partner's shipping address is shown in the same container.
     *  <br><br>
     *  If an order line item is subject to the Authenticity Guarantee service, the <b>Transaction.Program</b> container will be returned.
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
     * Order line items requiring multiple shipping legs include items being shipped through the Global Shipping Program or through eBay International Shipping, as well as order line items subject to/eligible for the Authenticity Guarantee program. For both international shipping options, the address of the shipping logistics provider is shown in the <b>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</b> container. Similarly, for Authenticity Guarantee orders, the authentication partner's shipping address is shown in the same container.
     *  <br><br>
     *  If an order line item is subject to the Authenticity Guarantee service, the <b>Transaction.Program</b> container will be returned.
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
     * This container consists of details related to the first leg of an order requiring multiple shipping legs. Types of orders that require multiple shipping legs include international orders going through the Global Shipping Program or through eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program.</br/></br/>If the item is subject to the Authenticity Guarantee service program, the seller ships the item to the authentication partner, and if the item passes an authentication inspection, the authentication partner ships it directly to the buyer.<br/><br/>
     *  This container is only returned if the order has one or more order line items requiring multiple shipping legs.
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
     * This container consists of details related to the first leg of an order requiring multiple shipping legs. Types of orders that require multiple shipping legs include international orders going through the Global Shipping Program or through eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program.</br/></br/>If the item is subject to the Authenticity Guarantee service program, the seller ships the item to the authentication partner, and if the item passes an authentication inspection, the authentication partner ships it directly to the buyer.<br/><br/>
     *  This container is only returned if the order has one or more order line items requiring multiple shipping legs.
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
     * Gets as intangibleItem
     *
     * This flag indicates whether or not the order line item is an intangible good, such as an MP3 track or a mobile phone ringtone.
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
     * This flag indicates whether or not the order line item is an intangible good, such as an MP3 track or a mobile phone ringtone.
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
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PickupOptionsType $pickupOptions
     */
    public function addToPickupDetails(\Nogrod\eBaySDK\Trading\PickupOptionsType $pickupOptions)
    {
        if (!is_array($this->pickupDetails)) {
            throw new \LogicException('pickupDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->pickupDetails[] = $pickupOptions;
        return $this;
    }

    /**
     * isset pickupDetails
     *
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
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
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
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
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\PickupOptionsType>
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
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\PickupOptionsType> $pickupDetails
     * @return self
     */
    public function setPickupDetails(iterable $pickupDetails)
    {
        $this->pickupDetails = $pickupDetails;
        return $this;
    }

    /**
     * Gets as pickupMethodSelected
     *
     * <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
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
        if (!is_array($this->buyerPackageEnclosures)) {
            throw new \LogicException('buyerPackageEnclosures is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType> $buyerPackageEnclosures
     * @return self
     */
    public function setBuyerPackageEnclosures(iterable $buyerPackageEnclosures)
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
     * A unique identifier for an eBay order. This field is only returned for paid orders, and not unpaid orders.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> <b>ExtendedOrderID</b> was first created when eBay changed the format of Order IDs back in June 2019. For a short period, the <b>OrderID</b> field showed the old Order ID format and the <b>ExtendedOrderID</b> field showed the new Order ID format. For paid orders, both <b>OrderID</b> and <b>ExtendedOrderID</b> now show the same Order ID value.
     *  <br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties.
     *  <br>
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
     * A unique identifier for an eBay order. This field is only returned for paid orders, and not unpaid orders.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> <b>ExtendedOrderID</b> was first created when eBay changed the format of Order IDs back in June 2019. For a short period, the <b>OrderID</b> field showed the old Order ID format and the <b>ExtendedOrderID</b> field showed the new Order ID format. For paid orders, both <b>OrderID</b> and <b>ExtendedOrderID</b> now show the same Order ID value.
     *  <br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct Order ID is returned to the buyer or seller, but a dummy Order ID value of <code>1000000000000</code> will be returned to all third parties.
     *  <br>
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
     * If <code>true</code>, the buyer of the order line item has an eBay Plus subscription and is eligible to receive program benefits, such as fast, free domestic shipping and free returns on eligible items. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany and Australia.
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
     * If <code>true</code>, the buyer of the order line item has an eBay Plus subscription and is eligible to receive program benefits, such as fast, free domestic shipping and free returns on eligible items. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany and Australia.
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
     * This field is deprecated, and can be ignored if returned. The Guaranteed Delivery program is no longer supported on any eBay marketplace.
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
     * This field is deprecated, and can be ignored if returned. The Guaranteed Delivery program is no longer supported on any eBay marketplace.
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
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *
     * @param \Nogrod\eBaySDK\Trading\TaxesType $eBayCollectAndRemitTaxes
     * @return self
     */
    public function setEBayCollectAndRemitTaxes(\Nogrod\eBaySDK\Trading\TaxesType $eBayCollectAndRemitTaxes)
    {
        $this->eBayCollectAndRemitTaxes = $eBayCollectAndRemitTaxes;
        return $this;
    }

    /**
     * Gets as program
     *
     * This container gives the status of an order line item going through the Authenticity Guarantee service process. In the Authenticity Guarantee service program, a third-party authenticator must verify the authenticity of the item before it can be sent to the buyer.
     *  <br/><br/>
     *  This container is only returned for order line items subject to the Authenticity Guarantee service process, and if it is returned, the seller must make sure to send the item to the third-party authenticator's address (shown in the <b>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</b> field), and not to the buyer's shipping address. If the item is successfully authenticated, the authenticator will ship the item to the buyer.
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionProgramType
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets a new program
     *
     * This container gives the status of an order line item going through the Authenticity Guarantee service process. In the Authenticity Guarantee service program, a third-party authenticator must verify the authenticity of the item before it can be sent to the buyer.
     *  <br/><br/>
     *  This container is only returned for order line items subject to the Authenticity Guarantee service process, and if it is returned, the seller must make sure to send the item to the third-party authenticator's address (shown in the <b>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</b> field), and not to the buyer's shipping address. If the item is successfully authenticated, the authenticator will ship the item to the buyer.
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionProgramType $program
     * @return self
     */
    public function setProgram(\Nogrod\eBaySDK\Trading\TransactionProgramType $program)
    {
        $this->program = $program;
        return $this;
    }

    /**
     * Adds as linkedLineItem
     *
     * <span class="tablenote"><b>Note: </b> This array is only returned if the order has associated linked line items.</span>
     *  Container consisting of an array of linked line item objects.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\LinkedLineItemType $linkedLineItem
     */
    public function addToLinkedLineItemArray(\Nogrod\eBaySDK\Trading\LinkedLineItemType $linkedLineItem)
    {
        if (!is_array($this->linkedLineItemArray)) {
            throw new \LogicException('linkedLineItemArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->linkedLineItemArray[] = $linkedLineItem;
        return $this;
    }

    /**
     * isset linkedLineItemArray
     *
     * <span class="tablenote"><b>Note: </b> This array is only returned if the order has associated linked line items.</span>
     *  Container consisting of an array of linked line item objects.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedLineItemArray($index)
    {
        return isset($this->linkedLineItemArray[$index]);
    }

    /**
     * unset linkedLineItemArray
     *
     * <span class="tablenote"><b>Note: </b> This array is only returned if the order has associated linked line items.</span>
     *  Container consisting of an array of linked line item objects.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedLineItemArray($index)
    {
        unset($this->linkedLineItemArray[$index]);
    }

    /**
     * Gets as linkedLineItemArray
     *
     * <span class="tablenote"><b>Note: </b> This array is only returned if the order has associated linked line items.</span>
     *  Container consisting of an array of linked line item objects.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\LinkedLineItemType>
     */
    public function getLinkedLineItemArray()
    {
        return $this->linkedLineItemArray;
    }

    /**
     * Sets a new linkedLineItemArray
     *
     * <span class="tablenote"><b>Note: </b> This array is only returned if the order has associated linked line items.</span>
     *  Container consisting of an array of linked line item objects.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\LinkedLineItemType> $linkedLineItemArray
     * @return self
     */
    public function setLinkedLineItemArray(iterable $linkedLineItemArray)
    {
        $this->linkedLineItemArray = $linkedLineItemArray;
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
        $value = $this->amountPaid;
        if (null !== $value) {
            $writer->startElementNs(null, 'AmountPaid', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->adjustmentAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'AdjustmentAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->convertedAdjustmentAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'ConvertedAdjustmentAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->buyer;
        if (null !== $value) {
            $writer->startElementNs(null, 'Buyer', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->shippingDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'ShippingDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->convertedAmountPaid;
        if (null !== $value) {
            $writer->startElementNs(null, 'ConvertedAmountPaid', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->convertedTransactionPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'ConvertedTransactionPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->createdDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CreatedDate', null, Func::formatDateTime($value));
        }
        $value = $this->depositType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DepositType', null, (string) $value);
        }
        $value = $this->item;
        if (null !== $value) {
            $writer->startElementNs(null, 'Item', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->quantityPurchased;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuantityPurchased', null, (string) $value);
        }
        $value = $this->status;
        if (null !== $value) {
            $writer->startElementNs(null, 'Status', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->transactionID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionID', null, (string) $value);
        }
        $value = $this->transactionPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'TransactionPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->bestOfferSale;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BestOfferSale', null, ($value ? 'true' : 'false'));
        }
        $value = $this->vATPercent;
        if (null !== $value) {
            $writer->writeElementNs(null, 'VATPercent', null, (string) $value);
        }
        $value = $this->shippingServiceSelected;
        if (null !== $value) {
            $writer->startElementNs(null, 'ShippingServiceSelected', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->buyerMessage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyerMessage', null, (string) $value);
        }
        $value = $this->buyerPaidStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyerPaidStatus', null, (string) $value);
        }
        $value = $this->sellerPaidStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SellerPaidStatus', null, (string) $value);
        }
        $value = $this->paidTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PaidTime', null, Func::formatDateTime($value));
        }
        $value = $this->shippedTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippedTime', null, Func::formatDateTime($value));
        }
        $value = $this->totalPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->feedbackLeft;
        if (null !== $value) {
            $writer->startElementNs(null, 'FeedbackLeft', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->feedbackReceived;
        if (null !== $value) {
            $writer->startElementNs(null, 'FeedbackReceived', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->containingOrder;
        if (null !== $value) {
            $writer->startElementNs(null, 'ContainingOrder', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->finalValueFee;
        if (null !== $value) {
            $writer->startElementNs(null, 'FinalValueFee', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->transactionSiteID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionSiteID', null, (string) $value);
        }
        $value = $this->platform;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Platform', null, (string) $value);
        }
        $value = $this->variation;
        if (null !== $value) {
            $writer->startElementNs(null, 'Variation', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->buyerCheckoutMessage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyerCheckoutMessage', null, (string) $value);
        }
        $value = $this->totalTransactionPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalTransactionPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->taxes;
        if (null !== $value) {
            $writer->startElementNs(null, 'Taxes', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->bundlePurchase;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BundlePurchase', null, ($value ? 'true' : 'false'));
        }
        $value = $this->actualShippingCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'ActualShippingCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->actualHandlingCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'ActualHandlingCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->orderLineItemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderLineItemID', null, (string) $value);
        }
        $value = $this->eBayPaymentID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'eBayPaymentID', null, (string) $value);
        }
        $value = $this->sellerDiscounts;
        if (null !== $value) {
            $writer->startElementNs(null, 'SellerDiscounts', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->codiceFiscale;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CodiceFiscale', null, (string) $value);
        }
        $value = $this->isMultiLegShipping;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IsMultiLegShipping', null, ($value ? 'true' : 'false'));
        }
        $value = $this->multiLegShippingDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'MultiLegShippingDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->invoiceSentTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'InvoiceSentTime', null, Func::formatDateTime($value));
        }
        $value = $this->intangibleItem;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IntangibleItem', null, ($value ? 'true' : 'false'));
        }
        $value = $this->monetaryDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'MonetaryDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->pickupDetails;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'PickupDetails', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'PickupOptions', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->pickupMethodSelected;
        if (null !== $value) {
            $writer->startElementNs(null, 'PickupMethodSelected', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->logisticsPlanType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LogisticsPlanType', null, (string) $value);
        }
        $value = $this->buyerPackageEnclosures;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'BuyerPackageEnclosures', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'BuyerPackageEnclosure', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->inventoryReservationID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'InventoryReservationID', null, (string) $value);
        }
        $value = $this->extendedOrderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExtendedOrderID', null, (string) $value);
        }
        $value = $this->eBayPlusTransaction;
        if (null !== $value) {
            $writer->writeElementNs(null, 'eBayPlusTransaction', null, ($value ? 'true' : 'false'));
        }
        $value = $this->giftSummary;
        if (null !== $value) {
            $writer->startElementNs(null, 'GiftSummary', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->digitalDeliverySelected;
        if (null !== $value) {
            $writer->startElementNs(null, 'DigitalDeliverySelected', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->gift;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Gift', null, ($value ? 'true' : 'false'));
        }
        $value = $this->guaranteedShipping;
        if (null !== $value) {
            $writer->writeElementNs(null, 'GuaranteedShipping', null, ($value ? 'true' : 'false'));
        }
        $value = $this->guaranteedDelivery;
        if (null !== $value) {
            $writer->writeElementNs(null, 'GuaranteedDelivery', null, ($value ? 'true' : 'false'));
        }
        $value = $this->eBayCollectAndRemitTax;
        if (null !== $value) {
            $writer->writeElementNs(null, 'eBayCollectAndRemitTax', null, ($value ? 'true' : 'false'));
        }
        $value = $this->eBayCollectAndRemitTaxes;
        if (null !== $value) {
            $writer->startElementNs(null, 'eBayCollectAndRemitTaxes', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->program;
        if (null !== $value) {
            $writer->startElementNs(null, 'Program', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->linkedLineItemArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'LinkedLineItemArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'LinkedLineItem', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TransactionType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->pickupDetails = [];
        $this->buyerPackageEnclosures = [];
        $this->linkedLineItemArray = [];
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
                case 'AmountPaid':
                    $this->amountPaid = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'AdjustmentAmount':
                    $this->adjustmentAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ConvertedAdjustmentAmount':
                    $this->convertedAdjustmentAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'Buyer':
                    $this->buyer = \Nogrod\eBaySDK\Trading\UserType::xmlRead($reader);
                    return true;
                case 'ShippingDetails':
                    $this->shippingDetails = \Nogrod\eBaySDK\Trading\ShippingDetailsType::xmlRead($reader);
                    return true;
                case 'ConvertedAmountPaid':
                    $this->convertedAmountPaid = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ConvertedTransactionPrice':
                    $this->convertedTransactionPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'CreatedDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->createdDate = new \DateTime($value);
                    }
                    return true;
                case 'DepositType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->depositType = $value;
                    }
                    return true;
                case 'Item':
                    $this->item = \Nogrod\eBaySDK\Trading\ItemType::xmlRead($reader);
                    return true;
                case 'QuantityPurchased':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->quantityPurchased = (int) $value;
                    }
                    return true;
                case 'Status':
                    $this->status = \Nogrod\eBaySDK\Trading\TransactionStatusType::xmlRead($reader);
                    return true;
                case 'TransactionID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionID = $value;
                    }
                    return true;
                case 'TransactionPrice':
                    $this->transactionPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'BestOfferSale':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bestOfferSale = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'VATPercent':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->vATPercent = (float) $value;
                    }
                    return true;
                case 'ShippingServiceSelected':
                    $this->shippingServiceSelected = \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType::xmlRead($reader);
                    return true;
                case 'BuyerMessage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyerMessage = $value;
                    }
                    return true;
                case 'BuyerPaidStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyerPaidStatus = $value;
                    }
                    return true;
                case 'SellerPaidStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sellerPaidStatus = $value;
                    }
                    return true;
                case 'PaidTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->paidTime = new \DateTime($value);
                    }
                    return true;
                case 'ShippedTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippedTime = new \DateTime($value);
                    }
                    return true;
                case 'TotalPrice':
                    $this->totalPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'FeedbackLeft':
                    $this->feedbackLeft = \Nogrod\eBaySDK\Trading\FeedbackInfoType::xmlRead($reader);
                    return true;
                case 'FeedbackReceived':
                    $this->feedbackReceived = \Nogrod\eBaySDK\Trading\FeedbackInfoType::xmlRead($reader);
                    return true;
                case 'ContainingOrder':
                    $this->containingOrder = \Nogrod\eBaySDK\Trading\OrderType::xmlRead($reader);
                    return true;
                case 'FinalValueFee':
                    $this->finalValueFee = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'TransactionSiteID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionSiteID = $value;
                    }
                    return true;
                case 'Platform':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->platform = $value;
                    }
                    return true;
                case 'Variation':
                    $this->variation = \Nogrod\eBaySDK\Trading\VariationType::xmlRead($reader);
                    return true;
                case 'BuyerCheckoutMessage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyerCheckoutMessage = $value;
                    }
                    return true;
                case 'TotalTransactionPrice':
                    $this->totalTransactionPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'Taxes':
                    $this->taxes = \Nogrod\eBaySDK\Trading\TaxesType::xmlRead($reader);
                    return true;
                case 'BundlePurchase':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bundlePurchase = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ActualShippingCost':
                    $this->actualShippingCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ActualHandlingCost':
                    $this->actualHandlingCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'OrderLineItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderLineItemID = $value;
                    }
                    return true;
                case 'eBayPaymentID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eBayPaymentID = $value;
                    }
                    return true;
                case 'SellerDiscounts':
                    $this->sellerDiscounts = \Nogrod\eBaySDK\Trading\SellerDiscountsType::xmlRead($reader);
                    return true;
                case 'CodiceFiscale':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->codiceFiscale = $value;
                    }
                    return true;
                case 'IsMultiLegShipping':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->isMultiLegShipping = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'MultiLegShippingDetails':
                    $this->multiLegShippingDetails = \Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType::xmlRead($reader);
                    return true;
                case 'InvoiceSentTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->invoiceSentTime = new \DateTime($value);
                    }
                    return true;
                case 'IntangibleItem':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->intangibleItem = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'MonetaryDetails':
                    $this->monetaryDetails = \Nogrod\eBaySDK\Trading\PaymentsInformationType::xmlRead($reader);
                    return true;
                case 'PickupDetails':
                    $this->pickupDetails = Func::readList($reader, 'PickupOptions', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\PickupOptionsType::xmlRead($reader));
                    return true;
                case 'PickupMethodSelected':
                    $this->pickupMethodSelected = \Nogrod\eBaySDK\Trading\PickupMethodSelectedType::xmlRead($reader);
                    return true;
                case 'LogisticsPlanType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->logisticsPlanType = $value;
                    }
                    return true;
                case 'BuyerPackageEnclosures':
                    $this->buyerPackageEnclosures = Func::readList($reader, 'BuyerPackageEnclosure', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType::xmlRead($reader));
                    return true;
                case 'InventoryReservationID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->inventoryReservationID = $value;
                    }
                    return true;
                case 'ExtendedOrderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->extendedOrderID = $value;
                    }
                    return true;
                case 'eBayPlusTransaction':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eBayPlusTransaction = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'GiftSummary':
                    $this->giftSummary = \Nogrod\eBaySDK\Trading\GiftSummaryType::xmlRead($reader);
                    return true;
                case 'DigitalDeliverySelected':
                    $this->digitalDeliverySelected = \Nogrod\eBaySDK\Trading\DigitalDeliverySelectedType::xmlRead($reader);
                    return true;
                case 'Gift':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->gift = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'GuaranteedShipping':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->guaranteedShipping = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'GuaranteedDelivery':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->guaranteedDelivery = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'eBayCollectAndRemitTax':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eBayCollectAndRemitTax = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'eBayCollectAndRemitTaxes':
                    $this->eBayCollectAndRemitTaxes = \Nogrod\eBaySDK\Trading\TaxesType::xmlRead($reader);
                    return true;
                case 'Program':
                    $this->program = \Nogrod\eBaySDK\Trading\TransactionProgramType::xmlRead($reader);
                    return true;
                case 'LinkedLineItemArray':
                    $this->linkedLineItemArray = Func::readList($reader, 'LinkedLineItem', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\LinkedLineItemType::xmlRead($reader));
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['AmountPaid'] = $this->amountPaid;
        $data['AdjustmentAmount'] = $this->adjustmentAmount;
        $data['ConvertedAdjustmentAmount'] = $this->convertedAdjustmentAmount;
        $data['Buyer'] = $this->buyer;
        $data['ShippingDetails'] = $this->shippingDetails;
        $data['ConvertedAmountPaid'] = $this->convertedAmountPaid;
        $data['ConvertedTransactionPrice'] = $this->convertedTransactionPrice;
        $data['CreatedDate'] = Func::jsonDate($this->createdDate);
        $data['DepositType'] = $this->depositType;
        $data['Item'] = $this->item;
        $data['QuantityPurchased'] = $this->quantityPurchased;
        $data['Status'] = $this->status;
        $data['TransactionID'] = $this->transactionID;
        $data['TransactionPrice'] = $this->transactionPrice;
        $data['BestOfferSale'] = $this->bestOfferSale;
        $data['VATPercent'] = $this->vATPercent;
        $data['ShippingServiceSelected'] = $this->shippingServiceSelected;
        $data['BuyerMessage'] = $this->buyerMessage;
        $data['BuyerPaidStatus'] = $this->buyerPaidStatus;
        $data['SellerPaidStatus'] = $this->sellerPaidStatus;
        $data['PaidTime'] = Func::jsonDate($this->paidTime);
        $data['ShippedTime'] = Func::jsonDate($this->shippedTime);
        $data['TotalPrice'] = $this->totalPrice;
        $data['FeedbackLeft'] = $this->feedbackLeft;
        $data['FeedbackReceived'] = $this->feedbackReceived;
        $data['ContainingOrder'] = $this->containingOrder;
        $data['FinalValueFee'] = $this->finalValueFee;
        $data['TransactionSiteID'] = $this->transactionSiteID;
        $data['Platform'] = $this->platform;
        $data['Variation'] = $this->variation;
        $data['BuyerCheckoutMessage'] = $this->buyerCheckoutMessage;
        $data['TotalTransactionPrice'] = $this->totalTransactionPrice;
        $data['Taxes'] = $this->taxes;
        $data['BundlePurchase'] = $this->bundlePurchase;
        $data['ActualShippingCost'] = $this->actualShippingCost;
        $data['ActualHandlingCost'] = $this->actualHandlingCost;
        $data['OrderLineItemID'] = $this->orderLineItemID;
        $data['eBayPaymentID'] = $this->eBayPaymentID;
        $data['SellerDiscounts'] = $this->sellerDiscounts;
        $data['CodiceFiscale'] = $this->codiceFiscale;
        $data['IsMultiLegShipping'] = $this->isMultiLegShipping;
        $data['MultiLegShippingDetails'] = $this->multiLegShippingDetails;
        $data['InvoiceSentTime'] = Func::jsonDate($this->invoiceSentTime);
        $data['IntangibleItem'] = $this->intangibleItem;
        $data['MonetaryDetails'] = $this->monetaryDetails;
        $data['PickupDetails'] = Func::jsonList($this->pickupDetails);
        $data['PickupMethodSelected'] = $this->pickupMethodSelected;
        $data['LogisticsPlanType'] = $this->logisticsPlanType;
        $data['BuyerPackageEnclosures'] = Func::jsonList($this->buyerPackageEnclosures);
        $data['InventoryReservationID'] = $this->inventoryReservationID;
        $data['ExtendedOrderID'] = $this->extendedOrderID;
        $data['eBayPlusTransaction'] = $this->eBayPlusTransaction;
        $data['GiftSummary'] = $this->giftSummary;
        $data['DigitalDeliverySelected'] = $this->digitalDeliverySelected;
        $data['Gift'] = $this->gift;
        $data['GuaranteedShipping'] = $this->guaranteedShipping;
        $data['GuaranteedDelivery'] = $this->guaranteedDelivery;
        $data['eBayCollectAndRemitTax'] = $this->eBayCollectAndRemitTax;
        $data['eBayCollectAndRemitTaxes'] = $this->eBayCollectAndRemitTaxes;
        $data['Program'] = $this->program;
        $data['LinkedLineItemArray'] = Func::jsonList($this->linkedLineItemArray);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
