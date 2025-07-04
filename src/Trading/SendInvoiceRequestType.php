<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SendInvoiceRequestType
 *
 * This call enables a seller to send an order invoice to a buyer. Optionally, and when applicable, this call can also be used to update the shipping service options available for shipment, to provide payment or checkout instructions to the buyer, to make a cost adjustment for the order/order line item, or to provide one or more offline payment methods (for orders where offline payment is an option).
 * XSD Type: SendInvoiceRequestType
 */
class SendInvoiceRequestType extends AbstractRequestType
{
    /**
     * Unique identifier of the eBay listing. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> value (or <b>SKU</b> value) is conditionally required and must be paired with the corresponding <b>TransactionID</b> value to identify an order line item. For a multiple line item order, <b>OrderID</b> should be used.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
     *  <br>
     *  Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> value is required and must be paired with the corresponding <b>ItemID</b> value to identify an order line item. For a multiple line item order, <b>OrderID</b> should be used.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * A unique identifier that identifies a single line item or multiple line
     *  item order.
     *  <br><br>
     *  Unless the <b>ItemID</b> value (or <b>SKU</b> value) and corresponding <b>TransactionID</b> value, or the <b>OrderLineItemID</b> value is provided in the request to identify a single line item order, the <b>OrderID</b> value must be specified. If <b>OrderID</b> value is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> fields are ignored if present in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all Trading API calls that accept Order ID values as filters in the request payload will support the identifiers for both unpaid and paid orders.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of <code>Complete</code> in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * If the buyer has an international shipping address, use this container to offer up to four international shipping service options (or five if one of the shipping service options is Global Shipping Program or eBay International Shipping). If one or more international shipping service options are offered through this container, the (domestic) <b>ShippingServiceOptions</b> container should not be included in the same request.
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType[] $internationalShippingServiceOptions
     */
    private $internationalShippingServiceOptions = [

    ];

    /**
     * If the buyer has a domestic shipping address, use this container
     *  to offer up to four domestic shipping service options. If one or more domestic
     *  shipping service options are offered through this container, the <b>InternationalShippingServiceOptions</b> container should
     *  not be included in the same request.
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType[] $shippingServiceOptions
     */
    private $shippingServiceOptions = [

    ];

    /**
     * This container is used if the seller wishes to apply sales tax to the order if the buyer lives in a state/jurisdiction where sales tax is not already collected automatically by eBay and remitted to the tax authority. The amount of sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of the order only or the cost of the order plus shipping and handling.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\SalesTaxType $salesTax
     */
    private $salesTax = null;

    /**
     * This field should only be used if the seller needs to add one or more offline payment options for an order that requires/supports offline payment. A seller should not submit any online payment methods here since eBay now controls the available online payment options that are available to buyers, and not the seller.
     *  </span>
     *
     * @var string[] $paymentMethods
     */
    private $paymentMethods = [

    ];

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
     * The seller's unique identifier for an item that is being tracked by this SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to uniquely identify a single line item order. For a multiple line item order, <b>OrderID</b> must be used.
     *  <br>
     *  <br>
     *  This field should only be used if the <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to <code>SKU</code>.
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
     * Unique identifier of the eBay listing. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> value (or <b>SKU</b> value) is conditionally required and must be paired with the corresponding <b>TransactionID</b> value to identify an order line item. For a multiple line item order, <b>OrderID</b> should be used.
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
     * Unique identifier of the eBay listing. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> value (or <b>SKU</b> value) is conditionally required and must be paired with the corresponding <b>TransactionID</b> value to identify an order line item. For a multiple line item order, <b>OrderID</b> should be used.
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
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
     *  <br>
     *  Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> value is required and must be paired with the corresponding <b>ItemID</b> value to identify an order line item. For a multiple line item order, <b>OrderID</b> should be used.
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
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
     *  <br>
     *  Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> value is required and must be paired with the corresponding <b>ItemID</b> value to identify an order line item. For a multiple line item order, <b>OrderID</b> should be used.
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
     *  Unless the <b>ItemID</b> value (or <b>SKU</b> value) and corresponding <b>TransactionID</b> value, or the <b>OrderLineItemID</b> value is provided in the request to identify a single line item order, the <b>OrderID</b> value must be specified. If <b>OrderID</b> value is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> fields are ignored if present in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all Trading API calls that accept Order ID values as filters in the request payload will support the identifiers for both unpaid and paid orders.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of <code>Complete</code> in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
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
     *  Unless the <b>ItemID</b> value (or <b>SKU</b> value) and corresponding <b>TransactionID</b> value, or the <b>OrderLineItemID</b> value is provided in the request to identify a single line item order, the <b>OrderID</b> value must be specified. If <b>OrderID</b> value is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> fields are ignored if present in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all Trading API calls that accept Order ID values as filters in the request payload will support the identifiers for both unpaid and paid orders.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of <code>Complete</code> in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
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
     * If the buyer has an international shipping address, use this container to offer up to four international shipping service options (or five if one of the shipping service options is Global Shipping Program or eBay International Shipping). If one or more international shipping service options are offered through this container, the (domestic) <b>ShippingServiceOptions</b> container should not be included in the same request.
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
     * If the buyer has an international shipping address, use this container to offer up to four international shipping service options (or five if one of the shipping service options is Global Shipping Program or eBay International Shipping). If one or more international shipping service options are offered through this container, the (domestic) <b>ShippingServiceOptions</b> container should not be included in the same request.
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
     * If the buyer has an international shipping address, use this container to offer up to four international shipping service options (or five if one of the shipping service options is Global Shipping Program or eBay International Shipping). If one or more international shipping service options are offered through this container, the (domestic) <b>ShippingServiceOptions</b> container should not be included in the same request.
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
     * If the buyer has an international shipping address, use this container to offer up to four international shipping service options (or five if one of the shipping service options is Global Shipping Program or eBay International Shipping). If one or more international shipping service options are offered through this container, the (domestic) <b>ShippingServiceOptions</b> container should not be included in the same request.
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
     * If the buyer has an international shipping address, use this container to offer up to four international shipping service options (or five if one of the shipping service options is Global Shipping Program or eBay International Shipping). If one or more international shipping service options are offered through this container, the (domestic) <b>ShippingServiceOptions</b> container should not be included in the same request.
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
     *  to offer up to four domestic shipping service options. If one or more domestic
     *  shipping service options are offered through this container, the <b>InternationalShippingServiceOptions</b> container should
     *  not be included in the same request.
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
     *  to offer up to four domestic shipping service options. If one or more domestic
     *  shipping service options are offered through this container, the <b>InternationalShippingServiceOptions</b> container should
     *  not be included in the same request.
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
     *  to offer up to four domestic shipping service options. If one or more domestic
     *  shipping service options are offered through this container, the <b>InternationalShippingServiceOptions</b> container should
     *  not be included in the same request.
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
     *  to offer up to four domestic shipping service options. If one or more domestic
     *  shipping service options are offered through this container, the <b>InternationalShippingServiceOptions</b> container should
     *  not be included in the same request.
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
     *  to offer up to four domestic shipping service options. If one or more domestic
     *  shipping service options are offered through this container, the <b>InternationalShippingServiceOptions</b> container should
     *  not be included in the same request.
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
     * This container is used if the seller wishes to apply sales tax to the order if the buyer lives in a state/jurisdiction where sales tax is not already collected automatically by eBay and remitted to the tax authority. The amount of sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of the order only or the cost of the order plus shipping and handling.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     * This container is used if the seller wishes to apply sales tax to the order if the buyer lives in a state/jurisdiction where sales tax is not already collected automatically by eBay and remitted to the tax authority. The amount of sales tax applied to the order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of the order only or the cost of the order plus shipping and handling.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     * Adds as paymentMethods
     *
     * This field should only be used if the seller needs to add one or more offline payment options for an order that requires/supports offline payment. A seller should not submit any online payment methods here since eBay now controls the available online payment options that are available to buyers, and not the seller.
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
     * This field should only be used if the seller needs to add one or more offline payment options for an order that requires/supports offline payment. A seller should not submit any online payment methods here since eBay now controls the available online payment options that are available to buyers, and not the seller.
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
     * This field should only be used if the seller needs to add one or more offline payment options for an order that requires/supports offline payment. A seller should not submit any online payment methods here since eBay now controls the available online payment options that are available to buyers, and not the seller.
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
     * This field should only be used if the seller needs to add one or more offline payment options for an order that requires/supports offline payment. A seller should not submit any online payment methods here since eBay now controls the available online payment options that are available to buyers, and not the seller.
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
     * This field should only be used if the seller needs to add one or more offline payment options for an order that requires/supports offline payment. A seller should not submit any online payment methods here since eBay now controls the available online payment options that are available to buyers, and not the seller.
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
     * Gets as sKU
     *
     * The seller's unique identifier for an item that is being tracked by this SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to uniquely identify a single line item order. For a multiple line item order, <b>OrderID</b> must be used.
     *  <br>
     *  <br>
     *  This field should only be used if the <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to <code>SKU</code>.
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
     * The seller's unique identifier for an item that is being tracked by this SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to uniquely identify a single line item order. For a multiple line item order, <b>OrderID</b> must be used.
     *  <br>
     *  <br>
     *  This field should only be used if the <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to <code>SKU</code>.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        if (null !== $value && [] !== $this->getInternationalShippingServiceOptions()) {
            $writer->write(array_map(function ($v) {return ["InternationalShippingServiceOptions" => $v];}, $value));
        }
        $value = $this->getShippingServiceOptions();
        if (null !== $value && [] !== $this->getShippingServiceOptions()) {
            $writer->write(array_map(function ($v) {return ["ShippingServiceOptions" => $v];}, $value));
        }
        $value = $this->getSalesTax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTax", $value);
        }
        $value = $this->getPaymentMethods();
        if (null !== $value && [] !== $this->getPaymentMethods()) {
            $writer->write(array_map(function ($v) {return ["PaymentMethods" => $v];}, $value));
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

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SendInvoiceRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingServiceOptions');
        if (null !== $value) {
            $this->setInternationalShippingServiceOptions(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceOptions');
        if (null !== $value) {
            $this->setShippingServiceOptions(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTax');
        if (null !== $value) {
            $this->setSalesTax(\Nogrod\eBaySDK\Trading\SalesTaxType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethods', true);
        if (null !== $value) {
            $this->setPaymentMethods($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutInstructions');
        if (null !== $value) {
            $this->setCheckoutInstructions($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailCopyToSeller');
        if (null !== $value) {
            $this->setEmailCopyToSeller(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount');
        if (null !== $value) {
            $this->setAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
