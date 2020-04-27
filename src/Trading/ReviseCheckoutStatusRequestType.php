<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseCheckoutStatusRequestType
 *
 * Enables a seller to update the payment details, the shipping details,
 *  and the status of an order.
 * XSD Type: ReviseCheckoutStatusRequestType
 */
class ReviseCheckoutStatusRequestType extends AbstractRequestType
{

    /**
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> value can be paired up with a corresponding <b>TransactionID</b> value to identify and order line item in a <b>ReviseCheckoutStatus</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a an order line item, or an <b>OrderID</b> value is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified.
     *  <br><br>
     *  If an <b>OrderID</b> or an <b>OrderLineItemID</b> value is specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     *  <br/>
     *  <br/>
     *  It is also possible to identify an order line item with a
     *  <b>ItemID</b>/<b>BuyerID</b> combination, but this is not the most ideal approach since an error is returned if there are multiple order line items for that combination.
     *  <br/>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for a sales transaction. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). Since an auction listing can only have one sale/winning bidder during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>. An <b>ItemID</b>/<b>TransactionID</b> pair can be used to identify an order line item in a <b>ReviseCheckoutStatus</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or an <b>OrderID</b> value is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. For a multiple line item order, <b>OrderID</b>
     *  should be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     *  <br>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * A unique identifier that identifies a single line item or multiple line item order.
     *  <br><br>
     *  If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     *  <b>ItemID</b>/<b>TransactionID</b> pair are ignored if they are specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in April 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>ReviseCheckoutStatus</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * The total amount paid by the buyer. For a motor vehicle listing that requires a deposit, the <b>AmountPaid</b> value is the total amount paid by the buyer for the deposit. <b>AmountPaid</b> is optional if <b>CheckoutStatus</b> is <code>Incomplete</code> and required if it is <code>Complete</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amountPaid
     */
    private $amountPaid = null;

    /**
     * Payment method used by the buyer. This field may be needed if the order payment between the buyer and seller happens off of eBay's platform. If the payment happens on eBay's platform, this field will not be necessary.
     *  <br><br>
     *  See eBay's
     *  <a href="https://www.ebay.com/help/policies/payment-policies/accepted-payments-policy?id=4269" target="_blank">Accepted Payments Policy</a> for more information about safe offline payment methods. Accepted payment methods will vary by category and by country.
     *
     * @var string $paymentMethodUsed
     */
    private $paymentMethodUsed = null;

    /**
     * This field is included and its value is set to <code>Complete</code> if the seller is using the <b>ReviseCheckoutStatus</b> call to mark the order as 'Paid' by including the <b>PaymentStatus</b> field and setting its value to <code>Paid</code>.
     *
     * @var string $checkoutStatus
     */
    private $checkoutStatus = null;

    /**
     * The shipping service selected by the buyer from among the shipping services offered by the seller (such as UPS Ground). For a list of valid values, call <b>GeteBayDetails</b> with the <b>DetailName</b> field set to <code>ShippingServiceDetails</code>. The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present in the response. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br/><br/>
     *  <span class="tablenote"> <strong>Note:</strong> This field should not be used for orders being shipping through the Global Shipping program; specifying <code>InternationalPriorityShipping</code> as a value for this field will produce an error. </span>
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * This field is included and set to <code>true</code> if sales tax for the order is applied against shipping costs (in addition to the item cost).
     *
     * @var bool $shippingIncludedInTax
     */
    private $shippingIncludedInTax = null;

    /**
     * This field is deprecated.
     *
     * @var string $checkoutMethod
     */
    private $checkoutMethod = null;

    /**
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var string $insuranceType
     */
    private $insuranceType = null;

    /**
     * This field is used to mark the order as paid or awaiting payment in eBay's system. This field may be needed if the order payment between the buyer and seller happens off of eBay's platform. If the payment happens on eBay's platform, this field will not be necessary. A user specifies <code>Pending</code> to indicate that the order is awaiting payment or if the the buyer has initiated payment, but the funds have not yet been sent to the seller's financial institution.
     *
     * @var string $paymentStatus
     */
    private $paymentStatus = null;

    /**
     * This field may be used if the buyer and seller have agreed on making an adjustment to the order total. A positive value indicates that the amount is an extra charge being paid to the seller by the buyer. A negative value indicates that the amount is a discount given to the buyer by the seller.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $adjustmentAmount
     */
    private $adjustmentAmount = null;

    /**
     * For internal use only. Do not use.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     */
    private $shippingAddress = null;

    /**
     * The eBay user ID for the order's buyer. A single line item order can actually be identified by a <b>BuyerID</b>/<b>ItemID</b> pair, but this approach is not recommended since an error may occur if there are multiple order line items between the buyer and seller. <b>BuyerID</b> is ignored if any other valid filter or filter combination is used in the same request.
     *
     * @var string $buyerID
     */
    private $buyerID = null;

    /**
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingInsuranceCost
     */
    private $shippingInsuranceCost = null;

    /**
     * This field is used if sales tax is being applied to the order. If the sales tax amount is also being applied to the shipping charges (in addition to the item cost), the <b>ShippingIncludedInTax</b> boolean field should be included in the call request and set to <code>true</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $salesTax
     */
    private $salesTax = null;

    /**
     * This field is used to show the cost of shipping being applied to the order.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingCost
     */
    private $shippingCost = null;

    /**
     * Not supported.
     *
     * @var string $encryptedID
     */
    private $encryptedID = null;

    /**
     * This container is used if payment for the order occurred off of eBay, and the seller wants to pass in the external payment reference ID.
     *
     * @var \Nogrod\eBaySDK\Trading\ExternalTransactionType $externalTransaction
     */
    private $externalTransaction = null;

    /**
     * Not supported.
     *
     * @var string $multipleSellerPaymentID
     */
    private $multipleSellerPaymentID = null;

    /**
     * This dollar value indicates the money due from the buyer upon delivery of the item.
     *  <br><br>
     *  This field should only be specified in the <b>ReviseCheckoutStatus</b> request if 'COD' (cash-on-delivery) was the payment method selected by the buyer and it is included as the <b>PaymentMethodUsed</b> value in the same request.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $cODCost
     */
    private $cODCost = null;

    /**
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> value can be paired up with a corresponding <b>TransactionID</b> value to identify and order line item in a <b>ReviseCheckoutStatus</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a an order line item, or an <b>OrderID</b> value is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified.
     *  <br><br>
     *  If an <b>OrderID</b> or an <b>OrderLineItemID</b> value is specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     *  <br/>
     *  <br/>
     *  It is also possible to identify an order line item with a
     *  <b>ItemID</b>/<b>BuyerID</b> combination, but this is not the most ideal approach since an error is returned if there are multiple order line items for that combination.
     *  <br/>
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
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> value can be paired up with a corresponding <b>TransactionID</b> value to identify and order line item in a <b>ReviseCheckoutStatus</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a an order line item, or an <b>OrderID</b> value is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified.
     *  <br><br>
     *  If an <b>OrderID</b> or an <b>OrderLineItemID</b> value is specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     *  <br/>
     *  <br/>
     *  It is also possible to identify an order line item with a
     *  <b>ItemID</b>/<b>BuyerID</b> combination, but this is not the most ideal approach since an error is returned if there are multiple order line items for that combination.
     *  <br/>
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
     * Unique identifier for a sales transaction. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). Since an auction listing can only have one sale/winning bidder during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>. An <b>ItemID</b>/<b>TransactionID</b> pair can be used to identify an order line item in a <b>ReviseCheckoutStatus</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or an <b>OrderID</b> value is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. For a multiple line item order, <b>OrderID</b>
     *  should be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     *  <br>
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
     * Unique identifier for a sales transaction. This identifier is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). Since an auction listing can only have one sale/winning bidder during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>. An <b>ItemID</b>/<b>TransactionID</b> pair can be used to identify an order line item in a <b>ReviseCheckoutStatus</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or an <b>OrderID</b> value is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. For a multiple line item order, <b>OrderID</b>
     *  should be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     *  <br>
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
     * A unique identifier that identifies a single line item or multiple line item order.
     *  <br><br>
     *  If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     *  <b>ItemID</b>/<b>TransactionID</b> pair are ignored if they are specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in April 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>ReviseCheckoutStatus</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
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
     * A unique identifier that identifies a single line item or multiple line item order.
     *  <br><br>
     *  If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     *  <b>ItemID</b>/<b>TransactionID</b> pair are ignored if they are specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in April 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>ReviseCheckoutStatus</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
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
     * Gets as amountPaid
     *
     * The total amount paid by the buyer. For a motor vehicle listing that requires a deposit, the <b>AmountPaid</b> value is the total amount paid by the buyer for the deposit. <b>AmountPaid</b> is optional if <b>CheckoutStatus</b> is <code>Incomplete</code> and required if it is <code>Complete</code>.
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
     * The total amount paid by the buyer. For a motor vehicle listing that requires a deposit, the <b>AmountPaid</b> value is the total amount paid by the buyer for the deposit. <b>AmountPaid</b> is optional if <b>CheckoutStatus</b> is <code>Incomplete</code> and required if it is <code>Complete</code>.
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
     * Gets as paymentMethodUsed
     *
     * Payment method used by the buyer. This field may be needed if the order payment between the buyer and seller happens off of eBay's platform. If the payment happens on eBay's platform, this field will not be necessary.
     *  <br><br>
     *  See eBay's
     *  <a href="https://www.ebay.com/help/policies/payment-policies/accepted-payments-policy?id=4269" target="_blank">Accepted Payments Policy</a> for more information about safe offline payment methods. Accepted payment methods will vary by category and by country.
     *
     * @return string
     */
    public function getPaymentMethodUsed()
    {
        return $this->paymentMethodUsed;
    }

    /**
     * Sets a new paymentMethodUsed
     *
     * Payment method used by the buyer. This field may be needed if the order payment between the buyer and seller happens off of eBay's platform. If the payment happens on eBay's platform, this field will not be necessary.
     *  <br><br>
     *  See eBay's
     *  <a href="https://www.ebay.com/help/policies/payment-policies/accepted-payments-policy?id=4269" target="_blank">Accepted Payments Policy</a> for more information about safe offline payment methods. Accepted payment methods will vary by category and by country.
     *
     * @param string $paymentMethodUsed
     * @return self
     */
    public function setPaymentMethodUsed($paymentMethodUsed)
    {
        $this->paymentMethodUsed = $paymentMethodUsed;
        return $this;
    }

    /**
     * Gets as checkoutStatus
     *
     * This field is included and its value is set to <code>Complete</code> if the seller is using the <b>ReviseCheckoutStatus</b> call to mark the order as 'Paid' by including the <b>PaymentStatus</b> field and setting its value to <code>Paid</code>.
     *
     * @return string
     */
    public function getCheckoutStatus()
    {
        return $this->checkoutStatus;
    }

    /**
     * Sets a new checkoutStatus
     *
     * This field is included and its value is set to <code>Complete</code> if the seller is using the <b>ReviseCheckoutStatus</b> call to mark the order as 'Paid' by including the <b>PaymentStatus</b> field and setting its value to <code>Paid</code>.
     *
     * @param string $checkoutStatus
     * @return self
     */
    public function setCheckoutStatus($checkoutStatus)
    {
        $this->checkoutStatus = $checkoutStatus;
        return $this;
    }

    /**
     * Gets as shippingService
     *
     * The shipping service selected by the buyer from among the shipping services offered by the seller (such as UPS Ground). For a list of valid values, call <b>GeteBayDetails</b> with the <b>DetailName</b> field set to <code>ShippingServiceDetails</code>. The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present in the response. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br/><br/>
     *  <span class="tablenote"> <strong>Note:</strong> This field should not be used for orders being shipping through the Global Shipping program; specifying <code>InternationalPriorityShipping</code> as a value for this field will produce an error. </span>
     *
     * @return string
     */
    public function getShippingService()
    {
        return $this->shippingService;
    }

    /**
     * Sets a new shippingService
     *
     * The shipping service selected by the buyer from among the shipping services offered by the seller (such as UPS Ground). For a list of valid values, call <b>GeteBayDetails</b> with the <b>DetailName</b> field set to <code>ShippingServiceDetails</code>. The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present in the response. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br/><br/>
     *  <span class="tablenote"> <strong>Note:</strong> This field should not be used for orders being shipping through the Global Shipping program; specifying <code>InternationalPriorityShipping</code> as a value for this field will produce an error. </span>
     *
     * @param string $shippingService
     * @return self
     */
    public function setShippingService($shippingService)
    {
        $this->shippingService = $shippingService;
        return $this;
    }

    /**
     * Gets as shippingIncludedInTax
     *
     * This field is included and set to <code>true</code> if sales tax for the order is applied against shipping costs (in addition to the item cost).
     *
     * @return bool
     */
    public function getShippingIncludedInTax()
    {
        return $this->shippingIncludedInTax;
    }

    /**
     * Sets a new shippingIncludedInTax
     *
     * This field is included and set to <code>true</code> if sales tax for the order is applied against shipping costs (in addition to the item cost).
     *
     * @param bool $shippingIncludedInTax
     * @return self
     */
    public function setShippingIncludedInTax($shippingIncludedInTax)
    {
        $this->shippingIncludedInTax = $shippingIncludedInTax;
        return $this;
    }

    /**
     * Gets as checkoutMethod
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCheckoutMethod()
    {
        return $this->checkoutMethod;
    }

    /**
     * Sets a new checkoutMethod
     *
     * This field is deprecated.
     *
     * @param string $checkoutMethod
     * @return self
     */
    public function setCheckoutMethod($checkoutMethod)
    {
        $this->checkoutMethod = $checkoutMethod;
        return $this;
    }

    /**
     * Gets as insuranceType
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return string
     */
    public function getInsuranceType()
    {
        return $this->insuranceType;
    }

    /**
     * Sets a new insuranceType
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param string $insuranceType
     * @return self
     */
    public function setInsuranceType($insuranceType)
    {
        $this->insuranceType = $insuranceType;
        return $this;
    }

    /**
     * Gets as paymentStatus
     *
     * This field is used to mark the order as paid or awaiting payment in eBay's system. This field may be needed if the order payment between the buyer and seller happens off of eBay's platform. If the payment happens on eBay's platform, this field will not be necessary. A user specifies <code>Pending</code> to indicate that the order is awaiting payment or if the the buyer has initiated payment, but the funds have not yet been sent to the seller's financial institution.
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Sets a new paymentStatus
     *
     * This field is used to mark the order as paid or awaiting payment in eBay's system. This field may be needed if the order payment between the buyer and seller happens off of eBay's platform. If the payment happens on eBay's platform, this field will not be necessary. A user specifies <code>Pending</code> to indicate that the order is awaiting payment or if the the buyer has initiated payment, but the funds have not yet been sent to the seller's financial institution.
     *
     * @param string $paymentStatus
     * @return self
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    /**
     * Gets as adjustmentAmount
     *
     * This field may be used if the buyer and seller have agreed on making an adjustment to the order total. A positive value indicates that the amount is an extra charge being paid to the seller by the buyer. A negative value indicates that the amount is a discount given to the buyer by the seller.
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
     * This field may be used if the buyer and seller have agreed on making an adjustment to the order total. A positive value indicates that the amount is an extra charge being paid to the seller by the buyer. A negative value indicates that the amount is a discount given to the buyer by the seller.
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
     * Gets as shippingAddress
     *
     * For internal use only. Do not use.
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
     * For internal use only. Do not use.
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
     * Gets as buyerID
     *
     * The eBay user ID for the order's buyer. A single line item order can actually be identified by a <b>BuyerID</b>/<b>ItemID</b> pair, but this approach is not recommended since an error may occur if there are multiple order line items between the buyer and seller. <b>BuyerID</b> is ignored if any other valid filter or filter combination is used in the same request.
     *
     * @return string
     */
    public function getBuyerID()
    {
        return $this->buyerID;
    }

    /**
     * Sets a new buyerID
     *
     * The eBay user ID for the order's buyer. A single line item order can actually be identified by a <b>BuyerID</b>/<b>ItemID</b> pair, but this approach is not recommended since an error may occur if there are multiple order line items between the buyer and seller. <b>BuyerID</b> is ignored if any other valid filter or filter combination is used in the same request.
     *
     * @param string $buyerID
     * @return self
     */
    public function setBuyerID($buyerID)
    {
        $this->buyerID = $buyerID;
        return $this;
    }

    /**
     * Gets as shippingInsuranceCost
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingInsuranceCost()
    {
        return $this->shippingInsuranceCost;
    }

    /**
     * Sets a new shippingInsuranceCost
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingInsuranceCost
     * @return self
     */
    public function setShippingInsuranceCost(\Nogrod\eBaySDK\Trading\AmountType $shippingInsuranceCost)
    {
        $this->shippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }

    /**
     * Gets as salesTax
     *
     * This field is used if sales tax is being applied to the order. If the sales tax amount is also being applied to the shipping charges (in addition to the item cost), the <b>ShippingIncludedInTax</b> boolean field should be included in the call request and set to <code>true</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    /**
     * Sets a new salesTax
     *
     * This field is used if sales tax is being applied to the order. If the sales tax amount is also being applied to the shipping charges (in addition to the item cost), the <b>ShippingIncludedInTax</b> boolean field should be included in the call request and set to <code>true</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $salesTax
     * @return self
     */
    public function setSalesTax(\Nogrod\eBaySDK\Trading\AmountType $salesTax)
    {
        $this->salesTax = $salesTax;
        return $this;
    }

    /**
     * Gets as shippingCost
     *
     * This field is used to show the cost of shipping being applied to the order.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Sets a new shippingCost
     *
     * This field is used to show the cost of shipping being applied to the order.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingCost
     * @return self
     */
    public function setShippingCost(\Nogrod\eBaySDK\Trading\AmountType $shippingCost)
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Gets as encryptedID
     *
     * Not supported.
     *
     * @return string
     */
    public function getEncryptedID()
    {
        return $this->encryptedID;
    }

    /**
     * Sets a new encryptedID
     *
     * Not supported.
     *
     * @param string $encryptedID
     * @return self
     */
    public function setEncryptedID($encryptedID)
    {
        $this->encryptedID = $encryptedID;
        return $this;
    }

    /**
     * Gets as externalTransaction
     *
     * This container is used if payment for the order occurred off of eBay, and the seller wants to pass in the external payment reference ID.
     *
     * @return \Nogrod\eBaySDK\Trading\ExternalTransactionType
     */
    public function getExternalTransaction()
    {
        return $this->externalTransaction;
    }

    /**
     * Sets a new externalTransaction
     *
     * This container is used if payment for the order occurred off of eBay, and the seller wants to pass in the external payment reference ID.
     *
     * @param \Nogrod\eBaySDK\Trading\ExternalTransactionType $externalTransaction
     * @return self
     */
    public function setExternalTransaction(\Nogrod\eBaySDK\Trading\ExternalTransactionType $externalTransaction)
    {
        $this->externalTransaction = $externalTransaction;
        return $this;
    }

    /**
     * Gets as multipleSellerPaymentID
     *
     * Not supported.
     *
     * @return string
     */
    public function getMultipleSellerPaymentID()
    {
        return $this->multipleSellerPaymentID;
    }

    /**
     * Sets a new multipleSellerPaymentID
     *
     * Not supported.
     *
     * @param string $multipleSellerPaymentID
     * @return self
     */
    public function setMultipleSellerPaymentID($multipleSellerPaymentID)
    {
        $this->multipleSellerPaymentID = $multipleSellerPaymentID;
        return $this;
    }

    /**
     * Gets as cODCost
     *
     * This dollar value indicates the money due from the buyer upon delivery of the item.
     *  <br><br>
     *  This field should only be specified in the <b>ReviseCheckoutStatus</b> request if 'COD' (cash-on-delivery) was the payment method selected by the buyer and it is included as the <b>PaymentMethodUsed</b> value in the same request.
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
     *  This field should only be specified in the <b>ReviseCheckoutStatus</b> request if 'COD' (cash-on-delivery) was the payment method selected by the buyer and it is included as the <b>PaymentMethodUsed</b> value in the same request.
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
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
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
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
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
        $value = $this->getAmountPaid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AmountPaid", $value);
        }
        $value = $this->getPaymentMethodUsed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethodUsed", $value);
        }
        $value = $this->getCheckoutStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutStatus", $value);
        }
        $value = $this->getShippingService();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingService", $value);
        }
        $value = $this->getShippingIncludedInTax();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingIncludedInTax", $value);
        }
        $value = $this->getCheckoutMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutMethod", $value);
        }
        $value = $this->getInsuranceType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceType", $value);
        }
        $value = $this->getPaymentStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentStatus", $value);
        }
        $value = $this->getAdjustmentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount", $value);
        }
        $value = $this->getShippingAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingAddress", $value);
        }
        $value = $this->getBuyerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerID", $value);
        }
        $value = $this->getShippingInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingInsuranceCost", $value);
        }
        $value = $this->getSalesTax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTax", $value);
        }
        $value = $this->getShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCost", $value);
        }
        $value = $this->getEncryptedID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EncryptedID", $value);
        }
        $value = $this->getExternalTransaction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalTransaction", $value);
        }
        $value = $this->getMultipleSellerPaymentID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MultipleSellerPaymentID", $value);
        }
        $value = $this->getCODCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CODCost", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AmountPaid');
        if (null !== $value) {
            $this->setAmountPaid(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethodUsed');
        if (null !== $value) {
            $this->setPaymentMethodUsed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutStatus');
        if (null !== $value) {
            $this->setCheckoutStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingIncludedInTax');
        if (null !== $value) {
            $this->setShippingIncludedInTax($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutMethod');
        if (null !== $value) {
            $this->setCheckoutMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceType');
        if (null !== $value) {
            $this->setInsuranceType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentStatus');
        if (null !== $value) {
            $this->setPaymentStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount');
        if (null !== $value) {
            $this->setAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingAddress');
        if (null !== $value) {
            $this->setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerID');
        if (null !== $value) {
            $this->setBuyerID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingInsuranceCost');
        if (null !== $value) {
            $this->setShippingInsuranceCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTax');
        if (null !== $value) {
            $this->setSalesTax(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCost');
        if (null !== $value) {
            $this->setShippingCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EncryptedID');
        if (null !== $value) {
            $this->setEncryptedID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransaction');
        if (null !== $value) {
            $this->setExternalTransaction(\Nogrod\eBaySDK\Trading\ExternalTransactionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MultipleSellerPaymentID');
        if (null !== $value) {
            $this->setMultipleSellerPaymentID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CODCost');
        if (null !== $value) {
            $this->setCODCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
