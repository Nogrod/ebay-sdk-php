<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderType
 *
 * This type is used to express the details of an order. An order may contain one or more line items (purchases) from the same buyer. Regardless of how many line items an order has, only one payment is made for the order.
 *  <br><br>
 *  The <b>GetOrders</b> call returns many of the fields of this type.
 *  <br><br>
 *  The <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> calls will only return order-level details if the <b>IncludeContainingOrder</b> boolean field is included in the call request and set to <code>true</code>.
 *  <br><br>
 *  The <b>AddOrder</b> call is used to combine two or more unpaid order line items (between the same seller and buyer) into a 'Combined Invoice' order. While combining these order line items into one 'Combined Invoice' order, the seller can make adjustments to accepted payment methods, shipping details (including costs), and the total cost of the order. Sometimes, sellers will reduce the cost of shipping if one or more order line items can be shipped together in the same package.
 *  <br><br>
 *  The <b>GetMyeBaySelling</b> call returns order details if the seller wishes to view listings that have sold, and the <b>GetMyeBayBuying</b> call returns order details if the buyer wishes to view items they have won or purchased.
 * XSD Type: OrderType
 */
class OrderType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique identifier for an eBay order. This identifier is globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Note that the order ID will change for a 'non-immediate payment' order as it goes from an unpaid order to a paid order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The value in the <b>OrderID</b> and <b>ExtendedOrderID</b> fields should always be the same. The <b>ExtendedOrderID</b> field was added back in 2019 during a transition period where the Trading API was supporting both old and new order ID formats, and which order ID format that was returned was dependent on the compatibility level version used.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * This enumeration value indicates the current status of the order.
     *
     * @var string $orderStatus
     */
    private $orderStatus = null;

    /**
     * This value indicates the dollar amount by which the buyer has adjusted the order total. Adjustments to order costs may include shipping and handling, buyer discounts, or added services. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $adjustmentAmount
     */
    private $adjustmentAmount = null;

    /**
     * This value indicates the total amount paid by the buyer for the order. This amount includes the sale price of each line item, shipping and handling charges, additional services, sales tax, and any <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>s + tax against this fee for any line items in the order. This value is only returned after the buyer has paid for the order.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only</b>: If using Trading WSDL Version 1307 or above, the amount in this field will include sales tax. If using a Trading WSDL older than Version 1307, the amount in this field will not include sales tax. To incorporate the new logic while using a Trading WSDL that is older than 1307, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1307 or higher.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amountPaid
     */
    private $amountPaid = null;

    /**
     * This value indicates the amount that the buyer saved on the order due to any discounts (item, shipping, promotional) applied to the purchase, or if the seller 'manually' reduced the order total. This field is always returned even when it is '0.0'.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amountSaved
     */
    private $amountSaved = null;

    /**
     * This container indicates the current status of the order, including a timestamp that indicates the last time that the status of the order changed. For orders that have been paid for, the <b>Status</b> value will show as <code>Complete</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\CheckoutStatusType $checkoutStatus
     */
    private $checkoutStatus = null;

    /**
     * Container consisting of order-level shipping details. More shipping-related details can be found at the line item level for each line item in the order.
     *  <br><br>
     *  In an <b>AddOrder</b> call, the seller can use the <b>ShippingDetails</b> container to make adjustments to shipping details, including the available shipping service options and shipping cost. Sometimes, sellers will reduce the cost of shipping if one or more order line items can be shipped together in the same package.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingDetailsType $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * This value indicates whether a 'Combined Invoice' order was initiated/created by the buyer or by the seller. This field is only returned for Combined Invoice orders.
     *  <br><br>
     *  An <b>AddOrder</b> call can be used by a seller or buyer to combine two or more unpaid order line items into a 'Combined Invoice' order. Once two or more line items are successfully combined into one order, the buyer only needs to make one payment (instead of multiple payments - one for each order line item). The <b>CreatingUserRole</b> field is required in the <b>AddOrder</b> call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Except for listings that required immediate payment, buyers also may have the opportunity to combine multiple line items (from the same seller) into a 'Combined Invoice' order through the buy/checkout flow. This may include accepted Best Offers or auctions that the buyer wins.
     *  </span>
     *
     * @var string $creatingUserRole
     */
    private $creatingUserRole = null;

    /**
     * Timestamp that indicates the date and time that the order was created.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For
     *  single line item orders, this timestamp value is often the same as the <b>CreatedDate</b> field in the corresponding
     *  <b>Transaction</b> container.
     *  </span>
     *
     * @var \DateTime $createdTime
     */
    private $createdTime = null;

    /**
     * In <b>GetOrders</b> and <b>OrderReport</b>, a <b>PaymentMethods</b> field will appear for each payment method available to the buyer for the order's purchase. However, once the buyer pays for the order, any and all of these <b>PaymentMethods</b> fields will stop being returned, and instead, the actual payment method used will be returned in the <b>PaymentMethod</b> field of the <b>CheckoutStatus</b> container.
     *  <br>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can use one or more <b>PaymentMethods</b> fields to override whatever available payment methods were already defined for each individual line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For <b>AddOrder</b>, the seller can only specify offline payment methods (if offline payment is supported for the listing), as eBay now controls all electronic payment methods avaialable to buyers, and sellers have no control over these payment methods.
     *  </span>
     *
     * @var string[] $paymentMethods
     */
    private $paymentMethods = [

    ];

    /**
     * The email address of the seller involved in the order. The email address of the seller is only returned if it is the same seller making the call.<br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetOrders</strong> calls, this field is only returned to the seller of the order; this field is not returned to the buyer or to a third party.
     *  </span>
     *
     * @var string $sellerEmail
     */
    private $sellerEmail = null;

    /**
     * This container shows the shipping address for the order.
     *  <br>
     *  <br>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For an Authenticity Guarantee program shipment, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer's shipping address.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For transactions completed offline, the shipping address detail may be empty.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For In-Store Pickup and Click and Collect orders, this is the address of the merchant's store where the buyer will pick up the order.</span></p>
     *  <p><span class="tablenote"><b>Note:</b>
     *  For eBay Vault scenarios: <strong>GetOrders</strong> and <strong>GetItemTransactions</strong> calls, mock address details are returned for: <br><br>-<em> Vault to vault orders</em>: Buyer and Seller View<br><br>-<em> Ship to vault orders</em>: Mock addresses are returned for the Buyer View (only); the address returned for the Seller View will be the authenticator's address.<br><br>-<em> Vault in-hand submission orders</em>: the address returned for the Buyer View will be the authenticator's address.<br><br>
     *  The following address details are returned for mock addresses:
     *  <pre>
     *  &lt;ShippingAddress&gt;
     *  <br/>
     *  <code> &nbsp;&lt;Name&gt;eBay Vault&lt;/Name&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressID&gt;Invalid Request&lt;/AddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressOwner&gt;eBay&lt;/AddressOwner&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressUsage&gt;Invalid&lt;/AddressUsage&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CityName&gt;Invalid Request&lt;/CityName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Country&gt;US&lt;/Country&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CountryName&gt;Invalid Request&lt;/CountryName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;ExternalAddressID&gt;Invalid Request&lt;/ExternalAddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Phone&gt;Invalid Request&lt;/Phone&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;PostalCode&gt;Invalid Request&lt;/PostalCode&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;StateOrProvince&gt;Invalid Request&lt;/StateOrProvince&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street1&gt;Invalid Request&lt;/Street1&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street2&gt;&lt;/Street2&gt;</code>
     *  <br/>
     *  &lt;/ShippingAddress&gt;
     *  </pre>
     *  <br/></span></p>
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     */
    private $shippingAddress = null;

    /**
     * Container consisting of details about the domestic or international shipping
     *  service selected by the buyer for delivery of the order. Note that more shipping service information may be returned at the order line item level in the <strong>Transaction.ShippingServiceSelected</strong> container.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType $shippingServiceSelected
     */
    private $shippingServiceSelected = null;

    /**
     * The cumulative item cost for all line items in the order. This value does not take into account any shipping/handling costs, sales tax costs, or any discounts. For a single line item order, the amount in this field should be the same as the amount in the <strong>Transaction.TransactionPrice</strong> field. For a multiple line item order, the amount in this field should equal the cumulative amount of each <strong>Transaction.TransactionPrice</strong> fields for each order line item.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only:</b> This field, for backward compatibility, includes discounts from the <b>TransactionPrice</b> value and <b>Order.Subtotal</b> value.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $subtotal
     */
    private $subtotal = null;

    /**
     * The <b>Total</b> amount shows the total cost for the order, including total item cost (shown in <b>Subtotal</b> field), shipping charges (shown in <b>ShippingServiceSelected.ShippingServiceCost</b> field), sales tax (shown in <b>SalesTax.SalesTaxAmount</b> field), and any <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>s + any taxes applied against this fee for any line items in the order.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only</b>: If using Trading WSDL Version 1307 or above, the amount in this field will include sales tax. If using a Trading WSDL older than Version 1307, the amount in this field will not include sales tax. To incorporate the new logic while using a Trading WSDL that is older than 1307, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1307 or higher.
     *  </span>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can pass in the <b>Total</b> amount for the 'Combined Invoice' order, and this is what the buyer will be expected to pay for the order.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $total
     */
    private $total = null;

    /**
     * Container consisting of one or more line items that comprise an order. The data for each order line item in the order is stored in a separate <b>Transaction</b> container.
     *  <br><br>
     *  Under the <b>TransactionArray</b> container in an <b>AddOrder</b> call, a seller or buyer specifies two or more (up to 40) order line items into a 'Combined Invoice' order.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionType[] $transactionArray
     */
    private $transactionArray = null;

    /**
     * The eBay user ID of the order's buyer.
     *
     * @var string $buyerUserID
     */
    private $buyerUserID = null;

    /**
     * Timestamp indicating the date and time of order payment. This field is not
     *  returned until payment has been made by the buyer.
     *  <br><br>
     *  This time is specified in GMT (not Pacific time).
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/make-a-call/tapi-data-types.html#utc-local"> API data types</a> section of the Making a Trading API call guide for information about converting between GMT and other time zones.
     *
     * @var \DateTime $paidTime
     */
    private $paidTime = null;

    /**
     * Timestamp indicating the date and time of order shipment. This field is not returned until shipment tracking is provided for all line items in the order, or if the order has been marked as 'shipped' by the seller.
     *  <br><br>
     *  This time is specified in GMT (not Pacific time).
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/make-a-call/tapi-data-types.html"> API data types</a> section of the Making a Trading API call guide for information about converting between GMT and other time zones.
     *
     * @var \DateTime $shippedTime
     */
    private $shippedTime = null;

    /**
     * Reserved for future use.
     *
     * @var bool $bundlePurchase
     */
    private $bundlePurchase = null;

    /**
     * This field is returned if the buyer left a message for the seller during
     *  checkout.
     *
     * @var string $buyerCheckoutMessage
     */
    private $buyerCheckoutMessage = null;

    /**
     * Unique identifier for the user that does not change when the eBay user name
     *  is changed. Use when an application needs to associate a new eBay user name
     *  with the corresponding eBay user.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     *
     * @var string $eIASToken
     */
    private $eIASToken = null;

    /**
     * This field indicates the type and/or status of a payment hold on the item. It is always returned for <b>GetOrders</b>, even if there are no payment holds (in which case, an enumeration value of <code>None</code> is shown).
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> and <strong>GetOrders</strong> calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var string $paymentHoldStatus
     */
    private $paymentHoldStatus = null;

    /**
     * The amount of the refund due to, or already issued to the buyer for the order. This field is only returned in <b>GetMyeBaySelling</b> if a buyer refund is due, or was issued for the order.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $refundAmount
     */
    private $refundAmount = null;

    /**
     * This string value indicates the result of a seller's refund to the buyer. Its value are 'Success', 'Failure' or 'Pending'. This field is only returned in <b>GetMyeBaySelling</b> if the buyer has received a refund from the seller, or is due to receive a refund.
     *
     * @var string $refundStatus
     */
    private $refundStatus = null;

    /**
     * <br>
     *  If <strong>IsMultilegShipping</strong> is <code>true</code>, at least one order line item in the order will not be shipped directly to the buyer. Orders requiring multiple shipping legs include international orders being shipped through the Global Shipping Program or through eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program. For both international shipping options, the address of the shipping logistics provider is shown in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. Similarly, for Authenticity Guarantee orders, the authentication partner's shipping address is shown in the same container.
     *  <br><br>
     *  If an order line item is subject to the Authenticity Guarantee service, the &lt;b&gt;Transaction.Program&lt;/b&gt; container will be returned.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.IsMultiLegShipping</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $isMultiLegShipping
     */
    private $isMultiLegShipping = null;

    /**
     * <br>
     *  This container consists of details related to the first leg of an order requiring multiple shipping legs. Types of orders that require multiple shipping legs include international orders going through Global Shipping Program or eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program. </br/></br/>If the item is subject to the Authenticity Guarantee service program, the seller ships the item to the authentication partner, and if the item passes an authentication inspection, the authentication partner ships it directly to the buyer.
     *  <br/><br/>
     *  This container is only returned if the order has one or more order line items requiring multiple shipping legs.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.MultiLegShippingDetails</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType $multiLegShippingDetails
     */
    private $multiLegShippingDetails = null;

    /**
     * <br>
     *  Contains information about each monetary transaction that occurs for the order, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.MonetaryDetails</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentsInformationType $monetaryDetails
     */
    private $monetaryDetails = null;

    /**
     * Container consisting of an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  For <strong>GetOrders</strong>, this container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PickupOptionsType[] $pickupDetails
     */
    private $pickupDetails = null;

    /**
     * Container consisting of details related to the selected pickup method, including the pickup method type, the merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant).
     *  <br/><br/>
     *  This container is only returned when the buyer has selected the In-Store Pickup or Click and Collect option and has paid for the order. All fields in the <strong>PickupMethodSelected</strong> container are static, except for the <strong>PickupStatus</strong> field, which can change states based on the notifications that a merchant sends to eBay through the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect feature to list an item that is eligible for these features. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PickupMethodSelectedType $pickupMethodSelected
     */
    private $pickupMethodSelected = null;

    /**
     * This is the eBay user ID of the order's seller.
     *
     * @var string $sellerUserID
     */
    private $sellerUserID = null;

    /**
     * This is a unique identifier for the seller that does not change when the eBay user name is changed. This is useful when an application needs to associate a new eBay user name with the corresponding eBay user.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetOrders</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @var string $sellerEIASToken
     */
    private $sellerEIASToken = null;

    /**
     * This value indicates the reason why the order cancellation was initiated. This field is only returned if an order cancellation has been initiated by the buyer or seller. Typical buyer-initiated cancellation reasons include 'OrderPlacedByMistake', 'WontArriveInTime', or 'FoundCheaperPrice'. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as 'BuyerCancelOrder'. If the seller is cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as 'OutOfStock'. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. See <a href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field.
     *
     * @var string $cancelReason
     */
    private $cancelReason = null;

    /**
     * The current status for the order cancellation request (if it exists for the order). This field is only returned if a cancellation request has been made on the order, or if the order is currently going through the cancellation process, or if the order has already been cancelled.
     *
     * @var string $cancelStatus
     */
    private $cancelStatus = null;

    /**
     * <br/>
     *  This field will be returned at the order level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature.
     *  <br/><br/>
     *  Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or, <code>DigitalDelivery</code>, which indicates that the order is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.LogisticsPlanType</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var string $logisticsPlanType
     */
    private $logisticsPlanType = null;

    /**
     * <br>
     *  This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer.
     *  <br/><br/>
     *  It is required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that is associated with the buyer's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerTaxIdentifier</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\TaxIdentifierType[] $buyerTaxIdentifier
     */
    private $buyerTaxIdentifier = [

    ];

    /**
     * <br>
     *  This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerPackageEnclosures</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType[] $buyerPackageEnclosures
     */
    private $buyerPackageEnclosures = null;

    /**
     * A unique identifier for an eBay order. This identifier is globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Note that the order ID will change for a 'non-immediate payment' order as it goes from an unpaid order to a paid order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The value in the <b>OrderID</b> and <b>ExtendedOrderID</b> fields should always be the same. The <b>ExtendedOrderID</b> field was added back in 2019 during a transition period where the Trading API was supporting both old and new order ID formats, and which order ID format that was returned was dependent on the compatibility level version used.
     *  </span>
     *
     * @var string $extendedOrderID
     */
    private $extendedOrderID = null;

    /**
     * If <code>true</code>, the order contains a transaction for an item that was purchased under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany and Australia.
     *  </span>
     *
     * @var bool $containseBayPlusTransaction
     */
    private $containseBayPlusTransaction = null;

    /**
     * <br/>
     *  This boolean field is returned as <code>true</code> if one or more line items in the order are subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). A <b>Transaction.eBayCollectAndRemitTaxes</b> container is returned for any order line items subject to such a tax, and the type and amount of this tax is displayed in the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> container.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section3">eBay sales tax collection</a> help topic.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.eBayCollectAndRemitTax</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $eBayCollectAndRemitTax
     */
    private $eBayCollectAndRemitTax = null;

    /**
     * <br/>
     *  This field indicates the total number of line items in the order. This field is returned under the <b>ContainingOrder</b> container of a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. In order for the <b>ContainingOrder</b> container to be returned, a user must include the <b>IncludeContainingOrder</b> field in the call request and set its value to <b>true</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> This field is automatically returned if the user is using Version 1113 of the Trading WSDL (or newer), or if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header and sets its value to <code>1113</code> (or newer). If a user is using a Trading WSDL older than 1113 (or is not setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to 1113 or newer), this field will not be returned.
     *
     * @var int $orderLineItemCount
     */
    private $orderLineItemCount = null;

    /**
     * Gets as orderID
     *
     * A unique identifier for an eBay order. This identifier is globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Note that the order ID will change for a 'non-immediate payment' order as it goes from an unpaid order to a paid order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The value in the <b>OrderID</b> and <b>ExtendedOrderID</b> fields should always be the same. The <b>ExtendedOrderID</b> field was added back in 2019 during a transition period where the Trading API was supporting both old and new order ID formats, and which order ID format that was returned was dependent on the compatibility level version used.
     *  </span>
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * A unique identifier for an eBay order. This identifier is globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Note that the order ID will change for a 'non-immediate payment' order as it goes from an unpaid order to a paid order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The value in the <b>OrderID</b> and <b>ExtendedOrderID</b> fields should always be the same. The <b>ExtendedOrderID</b> field was added back in 2019 during a transition period where the Trading API was supporting both old and new order ID formats, and which order ID format that was returned was dependent on the compatibility level version used.
     *  </span>
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Gets as orderStatus
     *
     * This enumeration value indicates the current status of the order.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Sets a new orderStatus
     *
     * This enumeration value indicates the current status of the order.
     *
     * @param string $orderStatus
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Gets as adjustmentAmount
     *
     * This value indicates the dollar amount by which the buyer has adjusted the order total. Adjustments to order costs may include shipping and handling, buyer discounts, or added services. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
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
     * This value indicates the dollar amount by which the buyer has adjusted the order total. Adjustments to order costs may include shipping and handling, buyer discounts, or added services. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller.
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
     * Gets as amountPaid
     *
     * This value indicates the total amount paid by the buyer for the order. This amount includes the sale price of each line item, shipping and handling charges, additional services, sales tax, and any <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>s + tax against this fee for any line items in the order. This value is only returned after the buyer has paid for the order.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only</b>: If using Trading WSDL Version 1307 or above, the amount in this field will include sales tax. If using a Trading WSDL older than Version 1307, the amount in this field will not include sales tax. To incorporate the new logic while using a Trading WSDL that is older than 1307, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1307 or higher.
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
     * This value indicates the total amount paid by the buyer for the order. This amount includes the sale price of each line item, shipping and handling charges, additional services, sales tax, and any <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>s + tax against this fee for any line items in the order. This value is only returned after the buyer has paid for the order.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only</b>: If using Trading WSDL Version 1307 or above, the amount in this field will include sales tax. If using a Trading WSDL older than Version 1307, the amount in this field will not include sales tax. To incorporate the new logic while using a Trading WSDL that is older than 1307, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1307 or higher.
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
     * Gets as amountSaved
     *
     * This value indicates the amount that the buyer saved on the order due to any discounts (item, shipping, promotional) applied to the purchase, or if the seller 'manually' reduced the order total. This field is always returned even when it is '0.0'.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAmountSaved()
    {
        return $this->amountSaved;
    }

    /**
     * Sets a new amountSaved
     *
     * This value indicates the amount that the buyer saved on the order due to any discounts (item, shipping, promotional) applied to the purchase, or if the seller 'manually' reduced the order total. This field is always returned even when it is '0.0'.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $amountSaved
     * @return self
     */
    public function setAmountSaved(\Nogrod\eBaySDK\Trading\AmountType $amountSaved)
    {
        $this->amountSaved = $amountSaved;
        return $this;
    }

    /**
     * Gets as checkoutStatus
     *
     * This container indicates the current status of the order, including a timestamp that indicates the last time that the status of the order changed. For orders that have been paid for, the <b>Status</b> value will show as <code>Complete</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\CheckoutStatusType
     */
    public function getCheckoutStatus()
    {
        return $this->checkoutStatus;
    }

    /**
     * Sets a new checkoutStatus
     *
     * This container indicates the current status of the order, including a timestamp that indicates the last time that the status of the order changed. For orders that have been paid for, the <b>Status</b> value will show as <code>Complete</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\CheckoutStatusType $checkoutStatus
     * @return self
     */
    public function setCheckoutStatus(\Nogrod\eBaySDK\Trading\CheckoutStatusType $checkoutStatus)
    {
        $this->checkoutStatus = $checkoutStatus;
        return $this;
    }

    /**
     * Gets as shippingDetails
     *
     * Container consisting of order-level shipping details. More shipping-related details can be found at the line item level for each line item in the order.
     *  <br><br>
     *  In an <b>AddOrder</b> call, the seller can use the <b>ShippingDetails</b> container to make adjustments to shipping details, including the available shipping service options and shipping cost. Sometimes, sellers will reduce the cost of shipping if one or more order line items can be shipped together in the same package.
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
     * Container consisting of order-level shipping details. More shipping-related details can be found at the line item level for each line item in the order.
     *  <br><br>
     *  In an <b>AddOrder</b> call, the seller can use the <b>ShippingDetails</b> container to make adjustments to shipping details, including the available shipping service options and shipping cost. Sometimes, sellers will reduce the cost of shipping if one or more order line items can be shipped together in the same package.
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
     * Gets as creatingUserRole
     *
     * This value indicates whether a 'Combined Invoice' order was initiated/created by the buyer or by the seller. This field is only returned for Combined Invoice orders.
     *  <br><br>
     *  An <b>AddOrder</b> call can be used by a seller or buyer to combine two or more unpaid order line items into a 'Combined Invoice' order. Once two or more line items are successfully combined into one order, the buyer only needs to make one payment (instead of multiple payments - one for each order line item). The <b>CreatingUserRole</b> field is required in the <b>AddOrder</b> call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Except for listings that required immediate payment, buyers also may have the opportunity to combine multiple line items (from the same seller) into a 'Combined Invoice' order through the buy/checkout flow. This may include accepted Best Offers or auctions that the buyer wins.
     *  </span>
     *
     * @return string
     */
    public function getCreatingUserRole()
    {
        return $this->creatingUserRole;
    }

    /**
     * Sets a new creatingUserRole
     *
     * This value indicates whether a 'Combined Invoice' order was initiated/created by the buyer or by the seller. This field is only returned for Combined Invoice orders.
     *  <br><br>
     *  An <b>AddOrder</b> call can be used by a seller or buyer to combine two or more unpaid order line items into a 'Combined Invoice' order. Once two or more line items are successfully combined into one order, the buyer only needs to make one payment (instead of multiple payments - one for each order line item). The <b>CreatingUserRole</b> field is required in the <b>AddOrder</b> call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Except for listings that required immediate payment, buyers also may have the opportunity to combine multiple line items (from the same seller) into a 'Combined Invoice' order through the buy/checkout flow. This may include accepted Best Offers or auctions that the buyer wins.
     *  </span>
     *
     * @param string $creatingUserRole
     * @return self
     */
    public function setCreatingUserRole($creatingUserRole)
    {
        $this->creatingUserRole = $creatingUserRole;
        return $this;
    }

    /**
     * Gets as createdTime
     *
     * Timestamp that indicates the date and time that the order was created.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For
     *  single line item orders, this timestamp value is often the same as the <b>CreatedDate</b> field in the corresponding
     *  <b>Transaction</b> container.
     *  </span>
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Sets a new createdTime
     *
     * Timestamp that indicates the date and time that the order was created.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For
     *  single line item orders, this timestamp value is often the same as the <b>CreatedDate</b> field in the corresponding
     *  <b>Transaction</b> container.
     *  </span>
     *
     * @param \DateTime $createdTime
     * @return self
     */
    public function setCreatedTime(\DateTime $createdTime)
    {
        $this->createdTime = $createdTime;
        return $this;
    }

    /**
     * Adds as paymentMethods
     *
     * In <b>GetOrders</b> and <b>OrderReport</b>, a <b>PaymentMethods</b> field will appear for each payment method available to the buyer for the order's purchase. However, once the buyer pays for the order, any and all of these <b>PaymentMethods</b> fields will stop being returned, and instead, the actual payment method used will be returned in the <b>PaymentMethod</b> field of the <b>CheckoutStatus</b> container.
     *  <br>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can use one or more <b>PaymentMethods</b> fields to override whatever available payment methods were already defined for each individual line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For <b>AddOrder</b>, the seller can only specify offline payment methods (if offline payment is supported for the listing), as eBay now controls all electronic payment methods avaialable to buyers, and sellers have no control over these payment methods.
     *  </span>
     *
     * @return self
     * @param string $paymentMethods
     */
    public function addToPaymentMethods($paymentMethods)
    {
        $this->paymentMethods[] = $paymentMethods;
        return $this;
    }

    /**
     * isset paymentMethods
     *
     * In <b>GetOrders</b> and <b>OrderReport</b>, a <b>PaymentMethods</b> field will appear for each payment method available to the buyer for the order's purchase. However, once the buyer pays for the order, any and all of these <b>PaymentMethods</b> fields will stop being returned, and instead, the actual payment method used will be returned in the <b>PaymentMethod</b> field of the <b>CheckoutStatus</b> container.
     *  <br>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can use one or more <b>PaymentMethods</b> fields to override whatever available payment methods were already defined for each individual line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For <b>AddOrder</b>, the seller can only specify offline payment methods (if offline payment is supported for the listing), as eBay now controls all electronic payment methods avaialable to buyers, and sellers have no control over these payment methods.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMethods($index)
    {
        return isset($this->paymentMethods[$index]);
    }

    /**
     * unset paymentMethods
     *
     * In <b>GetOrders</b> and <b>OrderReport</b>, a <b>PaymentMethods</b> field will appear for each payment method available to the buyer for the order's purchase. However, once the buyer pays for the order, any and all of these <b>PaymentMethods</b> fields will stop being returned, and instead, the actual payment method used will be returned in the <b>PaymentMethod</b> field of the <b>CheckoutStatus</b> container.
     *  <br>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can use one or more <b>PaymentMethods</b> fields to override whatever available payment methods were already defined for each individual line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For <b>AddOrder</b>, the seller can only specify offline payment methods (if offline payment is supported for the listing), as eBay now controls all electronic payment methods avaialable to buyers, and sellers have no control over these payment methods.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMethods($index)
    {
        unset($this->paymentMethods[$index]);
    }

    /**
     * Gets as paymentMethods
     *
     * In <b>GetOrders</b> and <b>OrderReport</b>, a <b>PaymentMethods</b> field will appear for each payment method available to the buyer for the order's purchase. However, once the buyer pays for the order, any and all of these <b>PaymentMethods</b> fields will stop being returned, and instead, the actual payment method used will be returned in the <b>PaymentMethod</b> field of the <b>CheckoutStatus</b> container.
     *  <br>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can use one or more <b>PaymentMethods</b> fields to override whatever available payment methods were already defined for each individual line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For <b>AddOrder</b>, the seller can only specify offline payment methods (if offline payment is supported for the listing), as eBay now controls all electronic payment methods avaialable to buyers, and sellers have no control over these payment methods.
     *  </span>
     *
     * @return string[]
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Sets a new paymentMethods
     *
     * In <b>GetOrders</b> and <b>OrderReport</b>, a <b>PaymentMethods</b> field will appear for each payment method available to the buyer for the order's purchase. However, once the buyer pays for the order, any and all of these <b>PaymentMethods</b> fields will stop being returned, and instead, the actual payment method used will be returned in the <b>PaymentMethod</b> field of the <b>CheckoutStatus</b> container.
     *  <br>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can use one or more <b>PaymentMethods</b> fields to override whatever available payment methods were already defined for each individual line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For <b>AddOrder</b>, the seller can only specify offline payment methods (if offline payment is supported for the listing), as eBay now controls all electronic payment methods avaialable to buyers, and sellers have no control over these payment methods.
     *  </span>
     *
     * @param string $paymentMethods
     * @return self
     */
    public function setPaymentMethods(array $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    /**
     * Gets as sellerEmail
     *
     * The email address of the seller involved in the order. The email address of the seller is only returned if it is the same seller making the call.<br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetOrders</strong> calls, this field is only returned to the seller of the order; this field is not returned to the buyer or to a third party.
     *  </span>
     *
     * @return string
     */
    public function getSellerEmail()
    {
        return $this->sellerEmail;
    }

    /**
     * Sets a new sellerEmail
     *
     * The email address of the seller involved in the order. The email address of the seller is only returned if it is the same seller making the call.<br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetOrders</strong> calls, this field is only returned to the seller of the order; this field is not returned to the buyer or to a third party.
     *  </span>
     *
     * @param string $sellerEmail
     * @return self
     */
    public function setSellerEmail($sellerEmail)
    {
        $this->sellerEmail = $sellerEmail;
        return $this;
    }

    /**
     * Gets as shippingAddress
     *
     * This container shows the shipping address for the order.
     *  <br>
     *  <br>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For an Authenticity Guarantee program shipment, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer's shipping address.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For transactions completed offline, the shipping address detail may be empty.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For In-Store Pickup and Click and Collect orders, this is the address of the merchant's store where the buyer will pick up the order.</span></p>
     *  <p><span class="tablenote"><b>Note:</b>
     *  For eBay Vault scenarios: <strong>GetOrders</strong> and <strong>GetItemTransactions</strong> calls, mock address details are returned for: <br><br>-<em> Vault to vault orders</em>: Buyer and Seller View<br><br>-<em> Ship to vault orders</em>: Mock addresses are returned for the Buyer View (only); the address returned for the Seller View will be the authenticator's address.<br><br>-<em> Vault in-hand submission orders</em>: the address returned for the Buyer View will be the authenticator's address.<br><br>
     *  The following address details are returned for mock addresses:
     *  <pre>
     *  &lt;ShippingAddress&gt;
     *  <br/>
     *  <code> &nbsp;&lt;Name&gt;eBay Vault&lt;/Name&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressID&gt;Invalid Request&lt;/AddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressOwner&gt;eBay&lt;/AddressOwner&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressUsage&gt;Invalid&lt;/AddressUsage&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CityName&gt;Invalid Request&lt;/CityName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Country&gt;US&lt;/Country&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CountryName&gt;Invalid Request&lt;/CountryName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;ExternalAddressID&gt;Invalid Request&lt;/ExternalAddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Phone&gt;Invalid Request&lt;/Phone&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;PostalCode&gt;Invalid Request&lt;/PostalCode&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;StateOrProvince&gt;Invalid Request&lt;/StateOrProvince&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street1&gt;Invalid Request&lt;/Street1&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street2&gt;&lt;/Street2&gt;</code>
     *  <br/>
     *  &lt;/ShippingAddress&gt;
     *  </pre>
     *  <br/></span></p>
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * This container shows the shipping address for the order.
     *  <br>
     *  <br>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For an Authenticity Guarantee program shipment, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer's shipping address.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For transactions completed offline, the shipping address detail may be empty.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For In-Store Pickup and Click and Collect orders, this is the address of the merchant's store where the buyer will pick up the order.</span></p>
     *  <p><span class="tablenote"><b>Note:</b>
     *  For eBay Vault scenarios: <strong>GetOrders</strong> and <strong>GetItemTransactions</strong> calls, mock address details are returned for: <br><br>-<em> Vault to vault orders</em>: Buyer and Seller View<br><br>-<em> Ship to vault orders</em>: Mock addresses are returned for the Buyer View (only); the address returned for the Seller View will be the authenticator's address.<br><br>-<em> Vault in-hand submission orders</em>: the address returned for the Buyer View will be the authenticator's address.<br><br>
     *  The following address details are returned for mock addresses:
     *  <pre>
     *  &lt;ShippingAddress&gt;
     *  <br/>
     *  <code> &nbsp;&lt;Name&gt;eBay Vault&lt;/Name&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressID&gt;Invalid Request&lt;/AddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressOwner&gt;eBay&lt;/AddressOwner&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressUsage&gt;Invalid&lt;/AddressUsage&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CityName&gt;Invalid Request&lt;/CityName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Country&gt;US&lt;/Country&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CountryName&gt;Invalid Request&lt;/CountryName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;ExternalAddressID&gt;Invalid Request&lt;/ExternalAddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Phone&gt;Invalid Request&lt;/Phone&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;PostalCode&gt;Invalid Request&lt;/PostalCode&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;StateOrProvince&gt;Invalid Request&lt;/StateOrProvince&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street1&gt;Invalid Request&lt;/Street1&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street2&gt;&lt;/Street2&gt;</code>
     *  <br/>
     *  &lt;/ShippingAddress&gt;
     *  </pre>
     *  <br/></span></p>
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     * @return self
     */
    public function setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Gets as shippingServiceSelected
     *
     * Container consisting of details about the domestic or international shipping
     *  service selected by the buyer for delivery of the order. Note that more shipping service information may be returned at the order line item level in the <strong>Transaction.ShippingServiceSelected</strong> container.
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
     * Container consisting of details about the domestic or international shipping
     *  service selected by the buyer for delivery of the order. Note that more shipping service information may be returned at the order line item level in the <strong>Transaction.ShippingServiceSelected</strong> container.
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
     * Gets as subtotal
     *
     * The cumulative item cost for all line items in the order. This value does not take into account any shipping/handling costs, sales tax costs, or any discounts. For a single line item order, the amount in this field should be the same as the amount in the <strong>Transaction.TransactionPrice</strong> field. For a multiple line item order, the amount in this field should equal the cumulative amount of each <strong>Transaction.TransactionPrice</strong> fields for each order line item.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only:</b> This field, for backward compatibility, includes discounts from the <b>TransactionPrice</b> value and <b>Order.Subtotal</b> value.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Sets a new subtotal
     *
     * The cumulative item cost for all line items in the order. This value does not take into account any shipping/handling costs, sales tax costs, or any discounts. For a single line item order, the amount in this field should be the same as the amount in the <strong>Transaction.TransactionPrice</strong> field. For a multiple line item order, the amount in this field should equal the cumulative amount of each <strong>Transaction.TransactionPrice</strong> fields for each order line item.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only:</b> This field, for backward compatibility, includes discounts from the <b>TransactionPrice</b> value and <b>Order.Subtotal</b> value.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $subtotal
     * @return self
     */
    public function setSubtotal(\Nogrod\eBaySDK\Trading\AmountType $subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * Gets as total
     *
     * The <b>Total</b> amount shows the total cost for the order, including total item cost (shown in <b>Subtotal</b> field), shipping charges (shown in <b>ShippingServiceSelected.ShippingServiceCost</b> field), sales tax (shown in <b>SalesTax.SalesTaxAmount</b> field), and any <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>s + any taxes applied against this fee for any line items in the order.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only</b>: If using Trading WSDL Version 1307 or above, the amount in this field will include sales tax. If using a Trading WSDL older than Version 1307, the amount in this field will not include sales tax. To incorporate the new logic while using a Trading WSDL that is older than 1307, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1307 or higher.
     *  </span>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can pass in the <b>Total</b> amount for the 'Combined Invoice' order, and this is what the buyer will be expected to pay for the order.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The <b>Total</b> amount shows the total cost for the order, including total item cost (shown in <b>Subtotal</b> field), shipping charges (shown in <b>ShippingServiceSelected.ShippingServiceCost</b> field), sales tax (shown in <b>SalesTax.SalesTaxAmount</b> field), and any <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>s + any taxes applied against this fee for any line items in the order.
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>For GetOrders only</b>: If using Trading WSDL Version 1307 or above, the amount in this field will include sales tax. If using a Trading WSDL older than Version 1307, the amount in this field will not include sales tax. To incorporate the new logic while using a Trading WSDL that is older than 1307, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1307 or higher.
     *  </span>
     *  <br>
     *  In an <b>AddOrder</b> call, the seller can pass in the <b>Total</b> amount for the 'Combined Invoice' order, and this is what the buyer will be expected to pay for the order.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $total
     * @return self
     */
    public function setTotal(\Nogrod\eBaySDK\Trading\AmountType $total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Adds as transaction
     *
     * Container consisting of one or more line items that comprise an order. The data for each order line item in the order is stored in a separate <b>Transaction</b> container.
     *  <br><br>
     *  Under the <b>TransactionArray</b> container in an <b>AddOrder</b> call, a seller or buyer specifies two or more (up to 40) order line items into a 'Combined Invoice' order.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TransactionType $transaction
     */
    public function addToTransactionArray(\Nogrod\eBaySDK\Trading\TransactionType $transaction)
    {
        $this->transactionArray[] = $transaction;
        return $this;
    }

    /**
     * isset transactionArray
     *
     * Container consisting of one or more line items that comprise an order. The data for each order line item in the order is stored in a separate <b>Transaction</b> container.
     *  <br><br>
     *  Under the <b>TransactionArray</b> container in an <b>AddOrder</b> call, a seller or buyer specifies two or more (up to 40) order line items into a 'Combined Invoice' order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransactionArray($index)
    {
        return isset($this->transactionArray[$index]);
    }

    /**
     * unset transactionArray
     *
     * Container consisting of one or more line items that comprise an order. The data for each order line item in the order is stored in a separate <b>Transaction</b> container.
     *  <br><br>
     *  Under the <b>TransactionArray</b> container in an <b>AddOrder</b> call, a seller or buyer specifies two or more (up to 40) order line items into a 'Combined Invoice' order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransactionArray($index)
    {
        unset($this->transactionArray[$index]);
    }

    /**
     * Gets as transactionArray
     *
     * Container consisting of one or more line items that comprise an order. The data for each order line item in the order is stored in a separate <b>Transaction</b> container.
     *  <br><br>
     *  Under the <b>TransactionArray</b> container in an <b>AddOrder</b> call, a seller or buyer specifies two or more (up to 40) order line items into a 'Combined Invoice' order.
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionType[]
     */
    public function getTransactionArray()
    {
        return $this->transactionArray;
    }

    /**
     * Sets a new transactionArray
     *
     * Container consisting of one or more line items that comprise an order. The data for each order line item in the order is stored in a separate <b>Transaction</b> container.
     *  <br><br>
     *  Under the <b>TransactionArray</b> container in an <b>AddOrder</b> call, a seller or buyer specifies two or more (up to 40) order line items into a 'Combined Invoice' order.
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionType[] $transactionArray
     * @return self
     */
    public function setTransactionArray(array $transactionArray)
    {
        $this->transactionArray = $transactionArray;
        return $this;
    }

    /**
     * Gets as buyerUserID
     *
     * The eBay user ID of the order's buyer.
     *
     * @return string
     */
    public function getBuyerUserID()
    {
        return $this->buyerUserID;
    }

    /**
     * Sets a new buyerUserID
     *
     * The eBay user ID of the order's buyer.
     *
     * @param string $buyerUserID
     * @return self
     */
    public function setBuyerUserID($buyerUserID)
    {
        $this->buyerUserID = $buyerUserID;
        return $this;
    }

    /**
     * Gets as paidTime
     *
     * Timestamp indicating the date and time of order payment. This field is not
     *  returned until payment has been made by the buyer.
     *  <br><br>
     *  This time is specified in GMT (not Pacific time).
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/make-a-call/tapi-data-types.html#utc-local"> API data types</a> section of the Making a Trading API call guide for information about converting between GMT and other time zones.
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
     * Timestamp indicating the date and time of order payment. This field is not
     *  returned until payment has been made by the buyer.
     *  <br><br>
     *  This time is specified in GMT (not Pacific time).
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/make-a-call/tapi-data-types.html#utc-local"> API data types</a> section of the Making a Trading API call guide for information about converting between GMT and other time zones.
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
     * Timestamp indicating the date and time of order shipment. This field is not returned until shipment tracking is provided for all line items in the order, or if the order has been marked as 'shipped' by the seller.
     *  <br><br>
     *  This time is specified in GMT (not Pacific time).
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/make-a-call/tapi-data-types.html"> API data types</a> section of the Making a Trading API call guide for information about converting between GMT and other time zones.
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
     * Timestamp indicating the date and time of order shipment. This field is not returned until shipment tracking is provided for all line items in the order, or if the order has been marked as 'shipped' by the seller.
     *  <br><br>
     *  This time is specified in GMT (not Pacific time).
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/make-a-call/tapi-data-types.html"> API data types</a> section of the Making a Trading API call guide for information about converting between GMT and other time zones.
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
     * Gets as bundlePurchase
     *
     * Reserved for future use.
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
     * Reserved for future use.
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
     * Gets as buyerCheckoutMessage
     *
     * This field is returned if the buyer left a message for the seller during
     *  checkout.
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
     * This field is returned if the buyer left a message for the seller during
     *  checkout.
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
     * Gets as eIASToken
     *
     * Unique identifier for the user that does not change when the eBay user name
     *  is changed. Use when an application needs to associate a new eBay user name
     *  with the corresponding eBay user.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     *
     * @return string
     */
    public function getEIASToken()
    {
        return $this->eIASToken;
    }

    /**
     * Sets a new eIASToken
     *
     * Unique identifier for the user that does not change when the eBay user name
     *  is changed. Use when an application needs to associate a new eBay user name
     *  with the corresponding eBay user.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
     *
     * @param string $eIASToken
     * @return self
     */
    public function setEIASToken($eIASToken)
    {
        $this->eIASToken = $eIASToken;
        return $this;
    }

    /**
     * Gets as paymentHoldStatus
     *
     * This field indicates the type and/or status of a payment hold on the item. It is always returned for <b>GetOrders</b>, even if there are no payment holds (in which case, an enumeration value of <code>None</code> is shown).
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> and <strong>GetOrders</strong> calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return string
     */
    public function getPaymentHoldStatus()
    {
        return $this->paymentHoldStatus;
    }

    /**
     * Sets a new paymentHoldStatus
     *
     * This field indicates the type and/or status of a payment hold on the item. It is always returned for <b>GetOrders</b>, even if there are no payment holds (in which case, an enumeration value of <code>None</code> is shown).
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> and <strong>GetOrders</strong> calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param string $paymentHoldStatus
     * @return self
     */
    public function setPaymentHoldStatus($paymentHoldStatus)
    {
        $this->paymentHoldStatus = $paymentHoldStatus;
        return $this;
    }

    /**
     * Gets as refundAmount
     *
     * The amount of the refund due to, or already issued to the buyer for the order. This field is only returned in <b>GetMyeBaySelling</b> if a buyer refund is due, or was issued for the order.
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
     * The amount of the refund due to, or already issued to the buyer for the order. This field is only returned in <b>GetMyeBaySelling</b> if a buyer refund is due, or was issued for the order.
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
     * This string value indicates the result of a seller's refund to the buyer. Its value are 'Success', 'Failure' or 'Pending'. This field is only returned in <b>GetMyeBaySelling</b> if the buyer has received a refund from the seller, or is due to receive a refund.
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
     * This string value indicates the result of a seller's refund to the buyer. Its value are 'Success', 'Failure' or 'Pending'. This field is only returned in <b>GetMyeBaySelling</b> if the buyer has received a refund from the seller, or is due to receive a refund.
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
     * Gets as isMultiLegShipping
     *
     * <br>
     *  If <strong>IsMultilegShipping</strong> is <code>true</code>, at least one order line item in the order will not be shipped directly to the buyer. Orders requiring multiple shipping legs include international orders being shipped through the Global Shipping Program or through eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program. For both international shipping options, the address of the shipping logistics provider is shown in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. Similarly, for Authenticity Guarantee orders, the authentication partner's shipping address is shown in the same container.
     *  <br><br>
     *  If an order line item is subject to the Authenticity Guarantee service, the &lt;b&gt;Transaction.Program&lt;/b&gt; container will be returned.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.IsMultiLegShipping</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  If <strong>IsMultilegShipping</strong> is <code>true</code>, at least one order line item in the order will not be shipped directly to the buyer. Orders requiring multiple shipping legs include international orders being shipped through the Global Shipping Program or through eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program. For both international shipping options, the address of the shipping logistics provider is shown in the <strong>MultiLegShippingDetails.SellerShipmentToLogisticsProvider.ShipToAddress</strong> container. Similarly, for Authenticity Guarantee orders, the authentication partner's shipping address is shown in the same container.
     *  <br><br>
     *  If an order line item is subject to the Authenticity Guarantee service, the &lt;b&gt;Transaction.Program&lt;/b&gt; container will be returned.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.IsMultiLegShipping</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This container consists of details related to the first leg of an order requiring multiple shipping legs. Types of orders that require multiple shipping legs include international orders going through Global Shipping Program or eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program. </br/></br/>If the item is subject to the Authenticity Guarantee service program, the seller ships the item to the authentication partner, and if the item passes an authentication inspection, the authentication partner ships it directly to the buyer.
     *  <br/><br/>
     *  This container is only returned if the order has one or more order line items requiring multiple shipping legs.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.MultiLegShippingDetails</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This container consists of details related to the first leg of an order requiring multiple shipping legs. Types of orders that require multiple shipping legs include international orders going through Global Shipping Program or eBay International Shipping, as well as orders subject to/eligible for the Authenticity Guarantee program. </br/></br/>If the item is subject to the Authenticity Guarantee service program, the seller ships the item to the authentication partner, and if the item passes an authentication inspection, the authentication partner ships it directly to the buyer.
     *  <br/><br/>
     *  This container is only returned if the order has one or more order line items requiring multiple shipping legs.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.MultiLegShippingDetails</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * Gets as monetaryDetails
     *
     * <br>
     *  Contains information about each monetary transaction that occurs for the order, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.MonetaryDetails</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
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
     * <br>
     *  Contains information about each monetary transaction that occurs for the order, including order payment, any refund, a credit, etc. Both the payer and payee are shown in this container.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.MonetaryDetails</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
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
     *  For <strong>GetOrders</strong>, this container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
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
     *  For <strong>GetOrders</strong>, this container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
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
     *  For <strong>GetOrders</strong>, this container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
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
     *  For <strong>GetOrders</strong>, this container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
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
     *  For <strong>GetOrders</strong>, this container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
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
     * Container consisting of details related to the selected pickup method, including the pickup method type, the merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant).
     *  <br/><br/>
     *  This container is only returned when the buyer has selected the In-Store Pickup or Click and Collect option and has paid for the order. All fields in the <strong>PickupMethodSelected</strong> container are static, except for the <strong>PickupStatus</strong> field, which can change states based on the notifications that a merchant sends to eBay through the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect feature to list an item that is eligible for these features. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
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
     * Container consisting of details related to the selected pickup method, including the pickup method type, the merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant).
     *  <br/><br/>
     *  This container is only returned when the buyer has selected the In-Store Pickup or Click and Collect option and has paid for the order. All fields in the <strong>PickupMethodSelected</strong> container are static, except for the <strong>PickupStatus</strong> field, which can change states based on the notifications that a merchant sends to eBay through the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect feature to list an item that is eligible for these features. At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multiple-quantity, fixed-price listings.
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
     * Gets as sellerUserID
     *
     * This is the eBay user ID of the order's seller.
     *
     * @return string
     */
    public function getSellerUserID()
    {
        return $this->sellerUserID;
    }

    /**
     * Sets a new sellerUserID
     *
     * This is the eBay user ID of the order's seller.
     *
     * @param string $sellerUserID
     * @return self
     */
    public function setSellerUserID($sellerUserID)
    {
        $this->sellerUserID = $sellerUserID;
        return $this;
    }

    /**
     * Gets as sellerEIASToken
     *
     * This is a unique identifier for the seller that does not change when the eBay user name is changed. This is useful when an application needs to associate a new eBay user name with the corresponding eBay user.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetOrders</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @return string
     */
    public function getSellerEIASToken()
    {
        return $this->sellerEIASToken;
    }

    /**
     * Sets a new sellerEIASToken
     *
     * This is a unique identifier for the seller that does not change when the eBay user name is changed. This is useful when an application needs to associate a new eBay user name with the corresponding eBay user.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetOrders</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @param string $sellerEIASToken
     * @return self
     */
    public function setSellerEIASToken($sellerEIASToken)
    {
        $this->sellerEIASToken = $sellerEIASToken;
        return $this;
    }

    /**
     * Gets as cancelReason
     *
     * This value indicates the reason why the order cancellation was initiated. This field is only returned if an order cancellation has been initiated by the buyer or seller. Typical buyer-initiated cancellation reasons include 'OrderPlacedByMistake', 'WontArriveInTime', or 'FoundCheaperPrice'. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as 'BuyerCancelOrder'. If the seller is cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as 'OutOfStock'. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. See <a href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field.
     *
     * @return string
     */
    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    /**
     * Sets a new cancelReason
     *
     * This value indicates the reason why the order cancellation was initiated. This field is only returned if an order cancellation has been initiated by the buyer or seller. Typical buyer-initiated cancellation reasons include 'OrderPlacedByMistake', 'WontArriveInTime', or 'FoundCheaperPrice'. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as 'BuyerCancelOrder'. If the seller is cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as 'OutOfStock'. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. See <a href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field.
     *
     * @param string $cancelReason
     * @return self
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason = $cancelReason;
        return $this;
    }

    /**
     * Gets as cancelStatus
     *
     * The current status for the order cancellation request (if it exists for the order). This field is only returned if a cancellation request has been made on the order, or if the order is currently going through the cancellation process, or if the order has already been cancelled.
     *
     * @return string
     */
    public function getCancelStatus()
    {
        return $this->cancelStatus;
    }

    /**
     * Sets a new cancelStatus
     *
     * The current status for the order cancellation request (if it exists for the order). This field is only returned if a cancellation request has been made on the order, or if the order is currently going through the cancellation process, or if the order has already been cancelled.
     *
     * @param string $cancelStatus
     * @return self
     */
    public function setCancelStatus($cancelStatus)
    {
        $this->cancelStatus = $cancelStatus;
        return $this;
    }

    /**
     * Gets as logisticsPlanType
     *
     * <br/>
     *  This field will be returned at the order level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature.
     *  <br/><br/>
     *  Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or, <code>DigitalDelivery</code>, which indicates that the order is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.LogisticsPlanType</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br/>
     *  This field will be returned at the order level only if the buyer purchased a digital gift card, which is delivered by email, or if the buyer purchased an item that is enabled with the 'Click and Collect' feature.
     *  <br/><br/>
     *  Currently, <strong>LogisticsPlanType</strong> has two applicable values: <code>PickUpDropOff</code>, which indicates that the buyer selected the 'Click and Collect' option. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK and Australia sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK and Australia sites; or, <code>DigitalDelivery</code>, which indicates that the order is a digital gift card that will be delivered to the buyer or recipient of the gift card by email.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.LogisticsPlanType</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * Adds as buyerTaxIdentifier
     *
     * <br>
     *  This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer.
     *  <br/><br/>
     *  It is required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that is associated with the buyer's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerTaxIdentifier</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxIdentifierType $buyerTaxIdentifier
     */
    public function addToBuyerTaxIdentifier(\Nogrod\eBaySDK\Trading\TaxIdentifierType $buyerTaxIdentifier)
    {
        $this->buyerTaxIdentifier[] = $buyerTaxIdentifier;
        return $this;
    }

    /**
     * isset buyerTaxIdentifier
     *
     * <br>
     *  This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer.
     *  <br/><br/>
     *  It is required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that is associated with the buyer's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerTaxIdentifier</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyerTaxIdentifier($index)
    {
        return isset($this->buyerTaxIdentifier[$index]);
    }

    /**
     * unset buyerTaxIdentifier
     *
     * <br>
     *  This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer.
     *  <br/><br/>
     *  It is required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that is associated with the buyer's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerTaxIdentifier</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyerTaxIdentifier($index)
    {
        unset($this->buyerTaxIdentifier[$index]);
    }

    /**
     * Gets as buyerTaxIdentifier
     *
     * <br>
     *  This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer.
     *  <br/><br/>
     *  It is required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that is associated with the buyer's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerTaxIdentifier</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\TaxIdentifierType[]
     */
    public function getBuyerTaxIdentifier()
    {
        return $this->buyerTaxIdentifier;
    }

    /**
     * Sets a new buyerTaxIdentifier
     *
     * <br>
     *  This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer.
     *  <br/><br/>
     *  It is required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> container will be returned for each tax ID that is associated with the buyer's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerTaxIdentifier</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\TaxIdentifierType[] $buyerTaxIdentifier
     * @return self
     */
    public function setBuyerTaxIdentifier(array $buyerTaxIdentifier)
    {
        $this->buyerTaxIdentifier = $buyerTaxIdentifier;
        return $this;
    }

    /**
     * Adds as buyerPackageEnclosure
     *
     * <br>
     *  This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerPackageEnclosures</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerPackageEnclosures</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerPackageEnclosures</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerPackageEnclosures</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br>
     *  This container is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s) for the order. The 'Pay Upon Invoice' option is only available on the Germany site.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.BuyerPackageEnclosures</b> container will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * Gets as extendedOrderID
     *
     * A unique identifier for an eBay order. This identifier is globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Note that the order ID will change for a 'non-immediate payment' order as it goes from an unpaid order to a paid order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The value in the <b>OrderID</b> and <b>ExtendedOrderID</b> fields should always be the same. The <b>ExtendedOrderID</b> field was added back in 2019 during a transition period where the Trading API was supporting both old and new order ID formats, and which order ID format that was returned was dependent on the compatibility level version used.
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
     * A unique identifier for an eBay order. This identifier is globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Note that the order ID will change for a 'non-immediate payment' order as it goes from an unpaid order to a paid order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The value in the <b>OrderID</b> and <b>ExtendedOrderID</b> fields should always be the same. The <b>ExtendedOrderID</b> field was added back in 2019 during a transition period where the Trading API was supporting both old and new order ID formats, and which order ID format that was returned was dependent on the compatibility level version used.
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
     * Gets as containseBayPlusTransaction
     *
     * If <code>true</code>, the order contains a transaction for an item that was purchased under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany and Australia.
     *  </span>
     *
     * @return bool
     */
    public function getContainseBayPlusTransaction()
    {
        return $this->containseBayPlusTransaction;
    }

    /**
     * Sets a new containseBayPlusTransaction
     *
     * If <code>true</code>, the order contains a transaction for an item that was purchased under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany and Australia.
     *  </span>
     *
     * @param bool $containseBayPlusTransaction
     * @return self
     */
    public function setContainseBayPlusTransaction($containseBayPlusTransaction)
    {
        $this->containseBayPlusTransaction = $containseBayPlusTransaction;
        return $this;
    }

    /**
     * Gets as eBayCollectAndRemitTax
     *
     * <br/>
     *  This boolean field is returned as <code>true</code> if one or more line items in the order are subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). A <b>Transaction.eBayCollectAndRemitTaxes</b> container is returned for any order line items subject to such a tax, and the type and amount of this tax is displayed in the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> container.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section3">eBay sales tax collection</a> help topic.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.eBayCollectAndRemitTax</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * <br/>
     *  This boolean field is returned as <code>true</code> if one or more line items in the order are subject to a tax (US sales tax or Australian Goods and Services tax) that eBay will collect and remit to the proper taxing authority on the buyer's behalf. This field is also returned if <code>false</code> (not subject to eBay Collect and Remit). A <b>Transaction.eBayCollectAndRemitTaxes</b> container is returned for any order line items subject to such a tax, and the type and amount of this tax is displayed in the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> container.
     *  <br/><br/>
     *  Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. Sellers on the Australia site do not have to take any extra steps to enable the collection of GST, as this tax is collected by eBay and remitted to the Australian government. For more information about Australian GST, see the <a href="https://www.ebay.com.au/help/selling/fees-credits-invoices/taxes-import-charges?id=4121">Taxes and import charges</a> help topic.
     *  <br/><br/>
     *  Buyers in all US states will automatically be charged sales tax for purchases, and the seller does not set this rate. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. For more US state-level information on sales tax, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section3">eBay sales tax collection</a> help topic.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ContainingOrder.eBayCollectAndRemitTax</b> field will stop being returned by <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
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
     * Gets as orderLineItemCount
     *
     * <br/>
     *  This field indicates the total number of line items in the order. This field is returned under the <b>ContainingOrder</b> container of a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. In order for the <b>ContainingOrder</b> container to be returned, a user must include the <b>IncludeContainingOrder</b> field in the call request and set its value to <b>true</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> This field is automatically returned if the user is using Version 1113 of the Trading WSDL (or newer), or if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header and sets its value to <code>1113</code> (or newer). If a user is using a Trading WSDL older than 1113 (or is not setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to 1113 or newer), this field will not be returned.
     *
     * @return int
     */
    public function getOrderLineItemCount()
    {
        return $this->orderLineItemCount;
    }

    /**
     * Sets a new orderLineItemCount
     *
     * <br/>
     *  This field indicates the total number of line items in the order. This field is returned under the <b>ContainingOrder</b> container of a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. In order for the <b>ContainingOrder</b> container to be returned, a user must include the <b>IncludeContainingOrder</b> field in the call request and set its value to <b>true</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> This field is automatically returned if the user is using Version 1113 of the Trading WSDL (or newer), or if the user includes the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header and sets its value to <code>1113</code> (or newer). If a user is using a Trading WSDL older than 1113 (or is not setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to 1113 or newer), this field will not be returned.
     *
     * @param int $orderLineItemCount
     * @return self
     */
    public function setOrderLineItemCount($orderLineItemCount)
    {
        $this->orderLineItemCount = $orderLineItemCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getOrderStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderStatus", $value);
        }
        $value = $this->getAdjustmentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount", $value);
        }
        $value = $this->getAmountPaid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AmountPaid", $value);
        }
        $value = $this->getAmountSaved();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AmountSaved", $value);
        }
        $value = $this->getCheckoutStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutStatus", $value);
        }
        $value = $this->getShippingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDetails", $value);
        }
        $value = $this->getCreatingUserRole();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreatingUserRole", $value);
        }
        $value = $this->getCreatedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreatedTime", $value);
        }
        $value = $this->getPaymentMethods();
        if (null !== $value && [] !== $this->getPaymentMethods()) {
            $writer->write(array_map(function ($v) {return ["PaymentMethods" => $v];}, $value));
        }
        $value = $this->getSellerEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerEmail", $value);
        }
        $value = $this->getShippingAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingAddress", $value);
        }
        $value = $this->getShippingServiceSelected();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceSelected", $value);
        }
        $value = $this->getSubtotal();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Subtotal", $value);
        }
        $value = $this->getTotal();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Total", $value);
        }
        $value = $this->getTransactionArray();
        if (null !== $value && [] !== $this->getTransactionArray()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionArray", array_map(function ($v) {return ["Transaction" => $v];}, $value));
        }
        $value = $this->getBuyerUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerUserID", $value);
        }
        $value = $this->getPaidTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaidTime", $value);
        }
        $value = $this->getShippedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippedTime", $value);
        }
        $value = $this->getBundlePurchase();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BundlePurchase", $value);
        }
        $value = $this->getBuyerCheckoutMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerCheckoutMessage", $value);
        }
        $value = $this->getEIASToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EIASToken", $value);
        }
        $value = $this->getPaymentHoldStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentHoldStatus", $value);
        }
        $value = $this->getRefundAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundAmount", $value);
        }
        $value = $this->getRefundStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundStatus", $value);
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
        $value = $this->getMonetaryDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MonetaryDetails", $value);
        }
        $value = $this->getPickupDetails();
        if (null !== $value && [] !== $this->getPickupDetails()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupDetails", array_map(function ($v) {return ["PickupOptions" => $v];}, $value));
        }
        $value = $this->getPickupMethodSelected();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupMethodSelected", $value);
        }
        $value = $this->getSellerUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerUserID", $value);
        }
        $value = $this->getSellerEIASToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerEIASToken", $value);
        }
        $value = $this->getCancelReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CancelReason", $value);
        }
        $value = $this->getCancelStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CancelStatus", $value);
        }
        $value = $this->getLogisticsPlanType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogisticsPlanType", $value);
        }
        $value = $this->getBuyerTaxIdentifier();
        if (null !== $value && [] !== $this->getBuyerTaxIdentifier()) {
            $writer->write(array_map(function ($v) {return ["BuyerTaxIdentifier" => $v];}, $value));
        }
        $value = $this->getBuyerPackageEnclosures();
        if (null !== $value && [] !== $this->getBuyerPackageEnclosures()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerPackageEnclosures", array_map(function ($v) {return ["BuyerPackageEnclosure" => $v];}, $value));
        }
        $value = $this->getExtendedOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtendedOrderID", $value);
        }
        $value = $this->getContainseBayPlusTransaction();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ContainseBayPlusTransaction", $value);
        }
        $value = $this->getEBayCollectAndRemitTax();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayCollectAndRemitTax", $value);
        }
        $value = $this->getOrderLineItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemCount", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\OrderType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderStatus');
        if (null !== $value) {
            $this->setOrderStatus($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount');
        if (null !== $value) {
            $this->setAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}AmountPaid');
        if (null !== $value) {
            $this->setAmountPaid(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}AmountSaved');
        if (null !== $value) {
            $this->setAmountSaved(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutStatus');
        if (null !== $value) {
            $this->setCheckoutStatus(\Nogrod\eBaySDK\Trading\CheckoutStatusType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDetails');
        if (null !== $value) {
            $this->setShippingDetails(\Nogrod\eBaySDK\Trading\ShippingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreatingUserRole');
        if (null !== $value) {
            $this->setCreatingUserRole($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreatedTime');
        if (null !== $value) {
            $this->setCreatedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethods', true);
        if (null !== $value) {
            $this->setPaymentMethods($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerEmail');
        if (null !== $value) {
            $this->setSellerEmail($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingAddress');
        if (null !== $value) {
            $this->setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceSelected');
        if (null !== $value) {
            $this->setShippingServiceSelected(\Nogrod\eBaySDK\Trading\ShippingServiceOptionsType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Subtotal');
        if (null !== $value) {
            $this->setSubtotal(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Total');
        if (null !== $value) {
            $this->setTotal(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionArray');
        if (null !== $value) {
            $this->setTransactionArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TransactionType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Transaction'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerUserID');
        if (null !== $value) {
            $this->setBuyerUserID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaidTime');
        if (null !== $value) {
            $this->setPaidTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippedTime');
        if (null !== $value) {
            $this->setShippedTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BundlePurchase');
        if (null !== $value) {
            $this->setBundlePurchase(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerCheckoutMessage');
        if (null !== $value) {
            $this->setBuyerCheckoutMessage($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EIASToken');
        if (null !== $value) {
            $this->setEIASToken($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentHoldStatus');
        if (null !== $value) {
            $this->setPaymentHoldStatus($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundAmount');
        if (null !== $value) {
            $this->setRefundAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundStatus');
        if (null !== $value) {
            $this->setRefundStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}IsMultiLegShipping');
        if (null !== $value) {
            $this->setIsMultiLegShipping(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MultiLegShippingDetails');
        if (null !== $value) {
            $this->setMultiLegShippingDetails(\Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MonetaryDetails');
        if (null !== $value) {
            $this->setMonetaryDetails(\Nogrod\eBaySDK\Trading\PaymentsInformationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupDetails');
        if (null !== $value) {
            $this->setPickupDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\PickupOptionsType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}PickupOptions'));}, $value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupMethodSelected');
        if (null !== $value) {
            $this->setPickupMethodSelected(\Nogrod\eBaySDK\Trading\PickupMethodSelectedType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerUserID');
        if (null !== $value) {
            $this->setSellerUserID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerEIASToken');
        if (null !== $value) {
            $this->setSellerEIASToken($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelReason');
        if (null !== $value) {
            $this->setCancelReason($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelStatus');
        if (null !== $value) {
            $this->setCancelStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogisticsPlanType');
        if (null !== $value) {
            $this->setLogisticsPlanType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerTaxIdentifier');
        if (null !== $value) {
            $this->setBuyerTaxIdentifier(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TaxIdentifierType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerPackageEnclosures');
        if (null !== $value) {
            $this->setBuyerPackageEnclosures(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}BuyerPackageEnclosure'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtendedOrderID');
        if (null !== $value) {
            $this->setExtendedOrderID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ContainseBayPlusTransaction');
        if (null !== $value) {
            $this->setContainseBayPlusTransaction(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayCollectAndRemitTax');
        if (null !== $value) {
            $this->setEBayCollectAndRemitTax(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemCount');
        if (null !== $value) {
            $this->setOrderLineItemCount($value);
        }
    }
}
