<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SendInvoiceRequestType
 *
 * Enables a seller to send an order invoice to a buyer. Where applicable, updates
 *  to shipping, payment methods, and sales tax made in this request are applied to
 *  the specified order as a whole and to the individual order line items whose data
 *  are stored in individual <b>Transaction</b> objects.
 * XSD Type: SendInvoiceRequestType
 */
class SendInvoiceRequestType extends AbstractRequestType
{
    /**
     * Unique identifier for an eBay listing. Unless <b>OrderID</b> or
     *  <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> (or <b>SKU</b>) is
     *  required and must be paired with the corresponding <b>TransactionID</b> to
     *  identify a single line item order. For a multiple line item order, <b>OrderID</b> should be used.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> is required and must be paired with the corresponding <b>ItemID</b> to identify a single line item order. For a multiple line item order, <b>OrderID</b> should be used.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * A unique identifier that identifies a single line item or multiple line
     *  item order.
     *  <br><br>
     *  Unless the <b>ItemID</b> (or SKU) and corresponding <b>TransactionID</b>, or the <b>OrderLineItemID</b> is provided in the request to identify a single line item order, the <b>OrderID</b> must be specified. If <b>OrderID</b> is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>SendInvoice</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * If the buyer has an International shipping address, use this container
     *  to offer up to four International shipping services (or five if one of them is a Global Shipping Program service). If International
     *  shipping services are offered, (domestic) <b>ShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType[] $internationalShippingServiceOptions
     */
    private $internationalShippingServiceOptions = [
        
    ];

    /**
     * If the buyer has a domestic shipping address, use this container
     *  to offer up to four domestic shipping services. If domestic
     *  shipping services are offered, <b>InternationalShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType[] $shippingServiceOptions
     */
    private $shippingServiceOptions = [
        
    ];

    /**
     * This container is used if the seller wishes to apply sales tax to the order. The amount of sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of the order only or the cost of the order plus shipping and handling.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of January 1, 2019, buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if the order's buyer is in a state that is subject to 'eBay Collect and Remit Tax', the seller should not send the buyer any sales tax information, since eBay will be handling the sales tax instead without buyer's assistance. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\SalesTaxType $salesTax
     */
    private $salesTax = null;

    /**
     * This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var string $insuranceOption
     */
    private $insuranceOption = null;

    /**
     * This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $insuranceFee
     */
    private $insuranceFee = null;

    /**
     * This optional field allows a US or German seller to add specific payment methods that were not in the original listing. The only valid values for this field are 'PayPal' for a US listing (or 'CreditCard' for sellers opted in to eBay managed payments), or 'MoneyXferAcceptedInCheckout' (CIP+) for a listing on the Germany site.
     *
     * @var string[] $paymentMethods
     */
    private $paymentMethods = [
        
    ];

    /**
     * If the <b>PaymentMethods</b> field is used and set to <code>PayPal</code>, the seller provides his/her PayPal email address in this field.
     *
     * @var string $payPalEmailAddress
     */
    private $payPalEmailAddress = null;

    /**
     * This field allows the seller to provide a message or instructions
     *  regarding checkout/payment, or the return policy.
     *
     * @var string $checkoutInstructions
     */
    private $checkoutInstructions = null;

    /**
     * This field is included and set to <code>true</code> if the seller wishes to receive an email copy of the invoice sent to the buyer.
     *
     * @var bool $emailCopyToSeller
     */
    private $emailCopyToSeller = null;

    /**
     * This dollar value indicates the money due from the buyer upon delivery of the item.
     *  <br><br>
     *  This field should only be specified in the <b>SendInvoice</b> request if 'COD'
     *  (cash-on-delivery) was the payment method selected by the buyer and it is included
     *  as the <b>PaymentMethods</b> value in the same request.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $cODCost
     */
    private $cODCost = null;

    /**
     * The seller's unique identifier for an item that is being tracked by this
     *  SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or
     *  <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to uniquely
     *  identify a single line item order. For a multiple line item order, <b>OrderID</b> must be used.
     *  <br>
     *  <br>
     *  This field can only be used if the <b>Item.InventoryTrackingMethod</b> field
     *  (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to
     *  <code>SKU</code>.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br>
     *  <br>
     *  Unless the <b>ItemID</b> (or <b>SKU</b>) and corresponding <b>TransactionID</b> is used to
     *  identify a single line item order, or the <b>OrderID</b> is used to identify a
     *  single or multiple line item order, the
     *  <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified,
     *  <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same
     *  request.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * This field allows the seller to adjust the total cost of the order to account for an extra charge or to pass down a discount to the buyer. <br><br>
     *  The currency used in this field must be the same currency of the listing site. A positive value in this field indicates that the amount is an extra charge being paid to the seller by the buyer, and a negative value indicates that the amount is a discount given to the buyer by the seller.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $adjustmentAmount
     */
    private $adjustmentAmount = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. Unless <b>OrderID</b> or
     *  <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> (or <b>SKU</b>) is
     *  required and must be paired with the corresponding <b>TransactionID</b> to
     *  identify a single line item order. For a multiple line item order, <b>OrderID</b> should be used.
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
     * Unique identifier for an eBay listing. Unless <b>OrderID</b> or
     *  <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> (or <b>SKU</b>) is
     *  required and must be paired with the corresponding <b>TransactionID</b> to
     *  identify a single line item order. For a multiple line item order, <b>OrderID</b> should be used.
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
     * Gets as transactionID
     *
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> is required and must be paired with the corresponding <b>ItemID</b> to identify a single line item order. For a multiple line item order, <b>OrderID</b> should be used.
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
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> is required and must be paired with the corresponding <b>ItemID</b> to identify a single line item order. For a multiple line item order, <b>OrderID</b> should be used.
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
     * Gets as orderID
     *
     * A unique identifier that identifies a single line item or multiple line
     *  item order.
     *  <br><br>
     *  Unless the <b>ItemID</b> (or SKU) and corresponding <b>TransactionID</b>, or the <b>OrderLineItemID</b> is provided in the request to identify a single line item order, the <b>OrderID</b> must be specified. If <b>OrderID</b> is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>SendInvoice</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
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
     * A unique identifier that identifies a single line item or multiple line
     *  item order.
     *  <br><br>
     *  Unless the <b>ItemID</b> (or SKU) and corresponding <b>TransactionID</b>, or the <b>OrderLineItemID</b> is provided in the request to identify a single line item order, the <b>OrderID</b> must be specified. If <b>OrderID</b> is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>SendInvoice</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
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
     * Adds as internationalShippingServiceOptions
     *
     * If the buyer has an International shipping address, use this container
     *  to offer up to four International shipping services (or five if one of them is a Global Shipping Program service). If International
     *  shipping services are offered, (domestic) <b>ShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType $internationalShippingServiceOptions
     */
    public function addToInternationalShippingServiceOptions(\Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType $internationalShippingServiceOptions)
    {
        $this->internationalShippingServiceOptions[] = $internationalShippingServiceOptions;
        return $this;
    }

    /**
     * isset internationalShippingServiceOptions
     *
     * If the buyer has an International shipping address, use this container
     *  to offer up to four International shipping services (or five if one of them is a Global Shipping Program service). If International
     *  shipping services are offered, (domestic) <b>ShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalShippingServiceOptions($index)
    {
        return isset($this->internationalShippingServiceOptions[$index]);
    }

    /**
     * unset internationalShippingServiceOptions
     *
     * If the buyer has an International shipping address, use this container
     *  to offer up to four International shipping services (or five if one of them is a Global Shipping Program service). If International
     *  shipping services are offered, (domestic) <b>ShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalShippingServiceOptions($index)
    {
        unset($this->internationalShippingServiceOptions[$index]);
    }

    /**
     * Gets as internationalShippingServiceOptions
     *
     * If the buyer has an International shipping address, use this container
     *  to offer up to four International shipping services (or five if one of them is a Global Shipping Program service). If International
     *  shipping services are offered, (domestic) <b>ShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @return \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType[]
     */
    public function getInternationalShippingServiceOptions()
    {
        return $this->internationalShippingServiceOptions;
    }

    /**
     * Sets a new internationalShippingServiceOptions
     *
     * If the buyer has an International shipping address, use this container
     *  to offer up to four International shipping services (or five if one of them is a Global Shipping Program service). If International
     *  shipping services are offered, (domestic) <b>ShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @param \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType[] $internationalShippingServiceOptions
     * @return self
     */
    public function setInternationalShippingServiceOptions(array $internationalShippingServiceOptions)
    {
        $this->internationalShippingServiceOptions = $internationalShippingServiceOptions;
        return $this;
    }

    /**
     * Adds as shippingServiceOptions
     *
     * If the buyer has a domestic shipping address, use this container
     *  to offer up to four domestic shipping services. If domestic
     *  shipping services are offered, <b>InternationalShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType $shippingServiceOptions
     */
    public function addToShippingServiceOptions(\Nogrod\eBaySDK\Trading\ShippingServiceOptionsType $shippingServiceOptions)
    {
        $this->shippingServiceOptions[] = $shippingServiceOptions;
        return $this;
    }

    /**
     * isset shippingServiceOptions
     *
     * If the buyer has a domestic shipping address, use this container
     *  to offer up to four domestic shipping services. If domestic
     *  shipping services are offered, <b>InternationalShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingServiceOptions($index)
    {
        return isset($this->shippingServiceOptions[$index]);
    }

    /**
     * unset shippingServiceOptions
     *
     * If the buyer has a domestic shipping address, use this container
     *  to offer up to four domestic shipping services. If domestic
     *  shipping services are offered, <b>InternationalShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingServiceOptions($index)
    {
        unset($this->shippingServiceOptions[$index]);
    }

    /**
     * Gets as shippingServiceOptions
     *
     * If the buyer has a domestic shipping address, use this container
     *  to offer up to four domestic shipping services. If domestic
     *  shipping services are offered, <b>InternationalShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType[]
     */
    public function getShippingServiceOptions()
    {
        return $this->shippingServiceOptions;
    }

    /**
     * Sets a new shippingServiceOptions
     *
     * If the buyer has a domestic shipping address, use this container
     *  to offer up to four domestic shipping services. If domestic
     *  shipping services are offered, <b>InternationalShippingServiceOptions</b> should
     *  not be included in the request.
     *  <br>
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType[] $shippingServiceOptions
     * @return self
     */
    public function setShippingServiceOptions(array $shippingServiceOptions)
    {
        $this->shippingServiceOptions = $shippingServiceOptions;
        return $this;
    }

    /**
     * Gets as salesTax
     *
     * This container is used if the seller wishes to apply sales tax to the order. The amount of sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of the order only or the cost of the order plus shipping and handling.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of January 1, 2019, buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if the order's buyer is in a state that is subject to 'eBay Collect and Remit Tax', the seller should not send the buyer any sales tax information, since eBay will be handling the sales tax instead without buyer's assistance. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\SalesTaxType
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    /**
     * Sets a new salesTax
     *
     * This container is used if the seller wishes to apply sales tax to the order. The amount of sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of the order only or the cost of the order plus shipping and handling.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of January 1, 2019, buyers in some US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if the order's buyer is in a state that is subject to 'eBay Collect and Remit Tax', the seller should not send the buyer any sales tax information, since eBay will be handling the sales tax instead without buyer's assistance. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\SalesTaxType $salesTax
     * @return self
     */
    public function setSalesTax(\Nogrod\eBaySDK\Trading\SalesTaxType $salesTax)
    {
        $this->salesTax = $salesTax;
        return $this;
    }

    /**
     * Gets as insuranceOption
     *
     * This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return string
     */
    public function getInsuranceOption()
    {
        return $this->insuranceOption;
    }

    /**
     * Sets a new insuranceOption
     *
     * This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param string $insuranceOption
     * @return self
     */
    public function setInsuranceOption($insuranceOption)
    {
        $this->insuranceOption = $insuranceOption;
        return $this;
    }

    /**
     * Gets as insuranceFee
     *
     * This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getInsuranceFee()
    {
        return $this->insuranceFee;
    }

    /**
     * Sets a new insuranceFee
     *
     * This field is no longer applicable as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $insuranceFee
     * @return self
     */
    public function setInsuranceFee(\Nogrod\eBaySDK\Trading\AmountType $insuranceFee)
    {
        $this->insuranceFee = $insuranceFee;
        return $this;
    }

    /**
     * Adds as paymentMethods
     *
     * This optional field allows a US or German seller to add specific payment methods that were not in the original listing. The only valid values for this field are 'PayPal' for a US listing (or 'CreditCard' for sellers opted in to eBay managed payments), or 'MoneyXferAcceptedInCheckout' (CIP+) for a listing on the Germany site.
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
     * This optional field allows a US or German seller to add specific payment methods that were not in the original listing. The only valid values for this field are 'PayPal' for a US listing (or 'CreditCard' for sellers opted in to eBay managed payments), or 'MoneyXferAcceptedInCheckout' (CIP+) for a listing on the Germany site.
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
     * This optional field allows a US or German seller to add specific payment methods that were not in the original listing. The only valid values for this field are 'PayPal' for a US listing (or 'CreditCard' for sellers opted in to eBay managed payments), or 'MoneyXferAcceptedInCheckout' (CIP+) for a listing on the Germany site.
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
     * This optional field allows a US or German seller to add specific payment methods that were not in the original listing. The only valid values for this field are 'PayPal' for a US listing (or 'CreditCard' for sellers opted in to eBay managed payments), or 'MoneyXferAcceptedInCheckout' (CIP+) for a listing on the Germany site.
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
     * This optional field allows a US or German seller to add specific payment methods that were not in the original listing. The only valid values for this field are 'PayPal' for a US listing (or 'CreditCard' for sellers opted in to eBay managed payments), or 'MoneyXferAcceptedInCheckout' (CIP+) for a listing on the Germany site.
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
     * Gets as payPalEmailAddress
     *
     * If the <b>PaymentMethods</b> field is used and set to <code>PayPal</code>, the seller provides his/her PayPal email address in this field.
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
     * If the <b>PaymentMethods</b> field is used and set to <code>PayPal</code>, the seller provides his/her PayPal email address in this field.
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
     * Gets as checkoutInstructions
     *
     * This field allows the seller to provide a message or instructions
     *  regarding checkout/payment, or the return policy.
     *
     * @return string
     */
    public function getCheckoutInstructions()
    {
        return $this->checkoutInstructions;
    }

    /**
     * Sets a new checkoutInstructions
     *
     * This field allows the seller to provide a message or instructions
     *  regarding checkout/payment, or the return policy.
     *
     * @param string $checkoutInstructions
     * @return self
     */
    public function setCheckoutInstructions($checkoutInstructions)
    {
        $this->checkoutInstructions = $checkoutInstructions;
        return $this;
    }

    /**
     * Gets as emailCopyToSeller
     *
     * This field is included and set to <code>true</code> if the seller wishes to receive an email copy of the invoice sent to the buyer.
     *
     * @return bool
     */
    public function getEmailCopyToSeller()
    {
        return $this->emailCopyToSeller;
    }

    /**
     * Sets a new emailCopyToSeller
     *
     * This field is included and set to <code>true</code> if the seller wishes to receive an email copy of the invoice sent to the buyer.
     *
     * @param bool $emailCopyToSeller
     * @return self
     */
    public function setEmailCopyToSeller($emailCopyToSeller)
    {
        $this->emailCopyToSeller = $emailCopyToSeller;
        return $this;
    }

    /**
     * Gets as cODCost
     *
     * This dollar value indicates the money due from the buyer upon delivery of the item.
     *  <br><br>
     *  This field should only be specified in the <b>SendInvoice</b> request if 'COD'
     *  (cash-on-delivery) was the payment method selected by the buyer and it is included
     *  as the <b>PaymentMethods</b> value in the same request.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getCODCost()
    {
        return $this->cODCost;
    }

    /**
     * Sets a new cODCost
     *
     * This dollar value indicates the money due from the buyer upon delivery of the item.
     *  <br><br>
     *  This field should only be specified in the <b>SendInvoice</b> request if 'COD'
     *  (cash-on-delivery) was the payment method selected by the buyer and it is included
     *  as the <b>PaymentMethods</b> value in the same request.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $cODCost
     * @return self
     */
    public function setCODCost(\Nogrod\eBaySDK\Trading\AmountType $cODCost)
    {
        $this->cODCost = $cODCost;
        return $this;
    }

    /**
     * Gets as sKU
     *
     * The seller's unique identifier for an item that is being tracked by this
     *  SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or
     *  <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to uniquely
     *  identify a single line item order. For a multiple line item order, <b>OrderID</b> must be used.
     *  <br>
     *  <br>
     *  This field can only be used if the <b>Item.InventoryTrackingMethod</b> field
     *  (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to
     *  <code>SKU</code>.
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * The seller's unique identifier for an item that is being tracked by this
     *  SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or
     *  <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to uniquely
     *  identify a single line item order. For a multiple line item order, <b>OrderID</b> must be used.
     *  <br>
     *  <br>
     *  This field can only be used if the <b>Item.InventoryTrackingMethod</b> field
     *  (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to
     *  <code>SKU</code>.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br>
     *  <br>
     *  Unless the <b>ItemID</b> (or <b>SKU</b>) and corresponding <b>TransactionID</b> is used to
     *  identify a single line item order, or the <b>OrderID</b> is used to identify a
     *  single or multiple line item order, the
     *  <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified,
     *  <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same
     *  request.
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
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br>
     *  <br>
     *  Unless the <b>ItemID</b> (or <b>SKU</b>) and corresponding <b>TransactionID</b> is used to
     *  identify a single line item order, or the <b>OrderID</b> is used to identify a
     *  single or multiple line item order, the
     *  <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified,
     *  <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same
     *  request.
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
     * Gets as adjustmentAmount
     *
     * This field allows the seller to adjust the total cost of the order to account for an extra charge or to pass down a discount to the buyer. <br><br>
     *  The currency used in this field must be the same currency of the listing site. A positive value in this field indicates that the amount is an extra charge being paid to the seller by the buyer, and a negative value indicates that the amount is a discount given to the buyer by the seller.
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
     * This field allows the seller to adjust the total cost of the order to account for an extra charge or to pass down a discount to the buyer. <br><br>
     *  The currency used in this field must be the same currency of the listing site. A positive value in this field indicates that the amount is an extra charge being paid to the seller by the buyer, and a negative value indicates that the amount is a discount given to the buyer by the seller.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $adjustmentAmount
     * @return self
     */
    public function setAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType $adjustmentAmount)
    {
        $this->adjustmentAmount = $adjustmentAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getInternationalShippingServiceOptions();
        if (null !== $value && !empty($this->getInternationalShippingServiceOptions())) {
            $writer->write(array_map(function ($v) {
                return ["InternationalShippingServiceOptions" => $v];
            }, $value));
        }
        $value = $this->getShippingServiceOptions();
        if (null !== $value && !empty($this->getShippingServiceOptions())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingServiceOptions" => $v];
            }, $value));
        }
        $value = $this->getSalesTax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTax", $value);
        }
        $value = $this->getInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceOption", $value);
        }
        $value = $this->getInsuranceFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceFee", $value);
        }
        $value = $this->getPaymentMethods();
        if (null !== $value && !empty($this->getPaymentMethods())) {
            $writer->write(array_map(function ($v) {
                return ["PaymentMethods" => $v];
            }, $value));
        }
        $value = $this->getPayPalEmailAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalEmailAddress", $value);
        }
        $value = $this->getCheckoutInstructions();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutInstructions", $value);
        }
        $value = $this->getEmailCopyToSeller();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EmailCopyToSeller", $value);
        }
        $value = $this->getCODCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CODCost", $value);
        }
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
        }
        $value = $this->getAdjustmentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingServiceOptions', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalShippingServiceOptions(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceOptions', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingServiceOptions(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTax');
        if (null !== $value) {
            $this->setSalesTax(\Nogrod\eBaySDK\Trading\SalesTaxType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceOption');
        if (null !== $value) {
            $this->setInsuranceOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceFee');
        if (null !== $value) {
            $this->setInsuranceFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethods', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentMethods($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalEmailAddress');
        if (null !== $value) {
            $this->setPayPalEmailAddress($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutInstructions');
        if (null !== $value) {
            $this->setCheckoutInstructions($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailCopyToSeller');
        if (null !== $value) {
            $this->setEmailCopyToSeller($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CODCost');
        if (null !== $value) {
            $this->setCODCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount');
        if (null !== $value) {
            $this->setAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
