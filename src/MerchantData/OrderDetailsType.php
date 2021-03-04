<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderDetailsType
 *
 * Contains information about the sold item, such as: order id, buyer information,
 *  shipping information, order creation time, payment cleared time, tax amount,
 *  insurance cost, and total cost.
 * XSD Type: OrderDetailsType
 */
class OrderDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique identifier for a single or multiple line item order. When a buyer
     *  purchases multiple items from the same listing, each item purchased will have an Order Line
     *  Item ID and all items in that purchase will have the same Order ID.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * The buyer's eBay User ID.
     *
     * @var string $buyerUserID
     */
    private $buyerUserID = null;

    /**
     * Displays the first name of the buyer (from their eBay user account).
     *
     * @var string $buyerFirstName
     */
    private $buyerFirstName = null;

    /**
     * Displays the last name of the buyer (from their eBay user account).
     *
     * @var string $buyerLastName
     */
    private $buyerLastName = null;

    /**
     * Displays the email address of the buyer (from their eBay user account).
     *  Used for off-eBay communication.
     *
     * @var string $buyerEmail
     */
    private $buyerEmail = null;

    /**
     * Buyer's primary phone number. This may return a value of "Invalid Request" if you
     *  are not authorized to see the buyer's phone number.
     *
     * @var string $buyerPhone
     */
    private $buyerPhone = null;

    /**
     * Displays the buyer's recipient name for shipping (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @var string $shipRecipientName
     */
    private $shipRecipientName = null;

    /**
     * Displays the buyer's street name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @var string $shipStreet1
     */
    private $shipStreet1 = null;

    /**
     * Displays the second line of a buyer's street name (if one exists in the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @var string $shipStreet2
     */
    private $shipStreet2 = null;

    /**
     * Displays the buyer's city name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @var string $shipCityName
     */
    private $shipCityName = null;

    /**
     * Displays the buyer's state or province name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @var string $shipStateOrProvince
     */
    private $shipStateOrProvince = null;

    /**
     * Displays the buyer's postal code or zip code (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @var string $shipPostalCode
     */
    private $shipPostalCode = null;

    /**
     * Displays the buyer's <a href=
     *  "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm"
     *  >ISO 3166</a> country code (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @var string $shipCountryName
     */
    private $shipCountryName = null;

    /**
     * Name of the shipping service for display purposes.<br><br>
     *  Note that this value can change for aesthetic purposes, whereas
     *  the <b class="con">ShippingServiceToken</b> will not.
     *  Therefore, for all practical purposes, use <b class="con">ShippingServiceToken</b>
     *  when programmatically reading and processing.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * The date and time that the payment was acknowledged.
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @var \DateTime $paymentClearedTime
     */
    private $paymentClearedTime = null;

    /**
     * The eBay site that the buyer used when paying for the item(s).
     *
     * @var int $checkoutSiteID
     */
    private $checkoutSiteID = null;

    /**
     * The date and time that the order was created.
     *
     * @var \DateTime $orderCreationTime
     */
    private $orderCreationTime = null;

    /**
     * Amount seller charged to buyer, not amount of fees that seller owes eBay.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $orderSalePrice
     */
    private $orderSalePrice = null;

    /**
     * Calculated tax fee based on the sale price and the sales tax at the seller's location.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $taxAmount
     */
    private $taxAmount = null;

    /**
     * Cost of insuring the delivery of this order with the courier.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost
     */
    private $insuranceCost = null;

    /**
     * Calculated shipping cost based on item weight, buyer's postal code, and shipping service.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $shippingCost
     */
    private $shippingCost = null;

    /**
     * The total cost of the order, which includes the sale price of all order line items, shipping costs, and taxes.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>OrderTotalCost</b> value. To determine if 'Collect and Remit' taxes were added into <b>OrderTotalCost</b> value, the user can check for the <b>TotalIncludeseBayCollectedTax</b> boolean value. If this value is returned as <code>true</code>, the tax amount shown in the <b>Taxes.TaxDetails.TaxAmount</b> field for each order line item is reflected in the <b>OrderTotalCost</b> value. For a multiple line item order, the seller would need to view and add up the taxes shown in the Taxes.TaxDetails.TaxAmount field for each line item in the order.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $orderTotalCost
     */
    private $orderTotalCost = null;

    /**
     * This boolean field is returned as <code>true</code> if the <b>OrderTotalCost</b> value includes eBay 'Collect and Remit' taxes. eBay 'Collect and Remit' taxes include US state-mandated sales tax and 'Goods and Services' taxes that are applicable to orders from Australian and New Zealand sellers.
     *  <br><br>
     *  More and more US states are mandating the collection of sales tax for Internet sales. For a full list of affected states and effective dates, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">eBay sales tax collection</a> help page.
     *  <br><br>
     *  For eBay managed payment orders, this field should always be returned as <code>false</code>, since eBay will always strip out any applicable sales tax (and remit to taxing authority) before the seller payout for the order is distributed to the seller's account.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. However, shortly after the order funds clear in the seller's account, the 'Collect and Remit' tax amount will be pulled by PayPal from the seller's account and then disributed to the appropriate taxing authority. Previously, PayPal was stripping this 'Collect and Remit' tax from the buyer's payment and directly submitting this amount to the appropriate taxing authority, and this tax amount never shows up in the sellers account.
     *  </span>
     *
     * @var bool $totalIncludeseBayCollectedTax
     */
    private $totalIncludeseBayCollectedTax = null;

    /**
     * For users of the Selling Manager or Selling Manager Pro tools only. If you are not
     *  using Selling Manager or Selling Manager Pro, this field will not be returned in your response.
     *  <br><br>
     *  Unique identifier for the record, assigned by eBay. An example of a recordId:
     *  1111:222:333:444:x.
     *
     * @var int $sellingManagerSaleRecordID
     */
    private $sellingManagerSaleRecordID = null;

    /**
     * Contains the data for each line item in the order.
     *
     * @var \Nogrod\eBaySDK\MerchantData\OrderLineItemType[] $orderItemDetails
     */
    private $orderItemDetails = null;

    /**
     * Static anonymous email address of the buyer for eBay intermediated
     *  member-to-memmber emails. Messaging calls in the Trading API, such as <b
     *  class="con">GetMemeberMessages</b> will also use this static email
     *  address.
     *  <br><br>
     *  The email address is in the form <code>
     *  &lt;alias&gt;@members.ebay.&lt;SiteDomain&gt;</code>.
     *  Each eBay member is assigned a static alias, which is the first part of the
     *  email address. The &lt;SiteDomain&gt; value is based on the buyer's
     *  registered site. For example, the email address ends in
     *  <code>@members.ebay.de</code> for a buyer registered on the eBay
     *  Germany site. The &lt;SiteDomain&gt; value can be
     *  used to help identify the user's language. If the buyer changes his registered
     *  site, then the value of &lt;SiteDomain&gt; will change accordingly.
     *
     * @var string $buyerStaticAlias
     */
    private $buyerStaticAlias = null;

    /**
     * Value used for the shipping service. For a list of valid values,
     *  call GeteBayDetails with DetailName set to ShippingServiceDetails.lt;br><br>
     *  Related fields:<br>
     *  Item.ShippingDetails.InternationalShippingServiceOption.ShippingService in AddFixedPriceItem<br>
     *  Item.ShippingDetails.ShippingServiceOptions.ShippingService in AddFixedPriceItem
     *
     * @var string $shippingServiceToken
     */
    private $shippingServiceToken = null;

    /**
     * The current checkout status of the order.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CheckoutStatusType $checkoutStatus
     */
    private $checkoutStatus = null;

    /**
     * Contains the status of a PayPal payment hold on the item.
     *
     * @var string $paymentHoldStatus
     */
    private $paymentHoldStatus = null;

    /**
     * The transaction that relates to the eBay order line item.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ExternalTransactionType[] $externalTransaction
     */
    private $externalTransaction = [
        
    ];

    /**
     * Uniquely identifies an order shipped using the Global Shipping Program. This value is generated by eBay when the order is completed. The international shipping provider uses the ReferenceID as the primary reference when processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider.
     * Example: "Reference #1234567890123456"
     *
     * @var string $shipReferenceId
     */
    private $shipReferenceId = null;

    /**
     * Contains all local pickup related information.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PickupOptionsType[] $pickupDetails
     */
    private $pickupDetails = null;

    /**
     * Contains the information about buyer selected pickup method
     *
     * @var \Nogrod\eBaySDK\MerchantData\PickupMethodSelectedType $pickupMethodSelected
     */
    private $pickupMethodSelected = null;

    /**
     * Gets as orderID
     *
     * A unique identifier for a single or multiple line item order. When a buyer
     *  purchases multiple items from the same listing, each item purchased will have an Order Line
     *  Item ID and all items in that purchase will have the same Order ID.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
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
     * A unique identifier for a single or multiple line item order. When a buyer
     *  purchases multiple items from the same listing, each item purchased will have an Order Line
     *  Item ID and all items in that purchase will have the same Order ID.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
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
     * Gets as buyerUserID
     *
     * The buyer's eBay User ID.
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
     * The buyer's eBay User ID.
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
     * Gets as buyerFirstName
     *
     * Displays the first name of the buyer (from their eBay user account).
     *
     * @return string
     */
    public function getBuyerFirstName()
    {
        return $this->buyerFirstName;
    }

    /**
     * Sets a new buyerFirstName
     *
     * Displays the first name of the buyer (from their eBay user account).
     *
     * @param string $buyerFirstName
     * @return self
     */
    public function setBuyerFirstName($buyerFirstName)
    {
        $this->buyerFirstName = $buyerFirstName;
        return $this;
    }

    /**
     * Gets as buyerLastName
     *
     * Displays the last name of the buyer (from their eBay user account).
     *
     * @return string
     */
    public function getBuyerLastName()
    {
        return $this->buyerLastName;
    }

    /**
     * Sets a new buyerLastName
     *
     * Displays the last name of the buyer (from their eBay user account).
     *
     * @param string $buyerLastName
     * @return self
     */
    public function setBuyerLastName($buyerLastName)
    {
        $this->buyerLastName = $buyerLastName;
        return $this;
    }

    /**
     * Gets as buyerEmail
     *
     * Displays the email address of the buyer (from their eBay user account).
     *  Used for off-eBay communication.
     *
     * @return string
     */
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }

    /**
     * Sets a new buyerEmail
     *
     * Displays the email address of the buyer (from their eBay user account).
     *  Used for off-eBay communication.
     *
     * @param string $buyerEmail
     * @return self
     */
    public function setBuyerEmail($buyerEmail)
    {
        $this->buyerEmail = $buyerEmail;
        return $this;
    }

    /**
     * Gets as buyerPhone
     *
     * Buyer's primary phone number. This may return a value of "Invalid Request" if you
     *  are not authorized to see the buyer's phone number.
     *
     * @return string
     */
    public function getBuyerPhone()
    {
        return $this->buyerPhone;
    }

    /**
     * Sets a new buyerPhone
     *
     * Buyer's primary phone number. This may return a value of "Invalid Request" if you
     *  are not authorized to see the buyer's phone number.
     *
     * @param string $buyerPhone
     * @return self
     */
    public function setBuyerPhone($buyerPhone)
    {
        $this->buyerPhone = $buyerPhone;
        return $this;
    }

    /**
     * Gets as shipRecipientName
     *
     * Displays the buyer's recipient name for shipping (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @return string
     */
    public function getShipRecipientName()
    {
        return $this->shipRecipientName;
    }

    /**
     * Sets a new shipRecipientName
     *
     * Displays the buyer's recipient name for shipping (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @param string $shipRecipientName
     * @return self
     */
    public function setShipRecipientName($shipRecipientName)
    {
        $this->shipRecipientName = $shipRecipientName;
        return $this;
    }

    /**
     * Gets as shipStreet1
     *
     * Displays the buyer's street name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @return string
     */
    public function getShipStreet1()
    {
        return $this->shipStreet1;
    }

    /**
     * Sets a new shipStreet1
     *
     * Displays the buyer's street name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @param string $shipStreet1
     * @return self
     */
    public function setShipStreet1($shipStreet1)
    {
        $this->shipStreet1 = $shipStreet1;
        return $this;
    }

    /**
     * Gets as shipStreet2
     *
     * Displays the second line of a buyer's street name (if one exists in the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @return string
     */
    public function getShipStreet2()
    {
        return $this->shipStreet2;
    }

    /**
     * Sets a new shipStreet2
     *
     * Displays the second line of a buyer's street name (if one exists in the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @param string $shipStreet2
     * @return self
     */
    public function setShipStreet2($shipStreet2)
    {
        $this->shipStreet2 = $shipStreet2;
        return $this;
    }

    /**
     * Gets as shipCityName
     *
     * Displays the buyer's city name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @return string
     */
    public function getShipCityName()
    {
        return $this->shipCityName;
    }

    /**
     * Sets a new shipCityName
     *
     * Displays the buyer's city name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @param string $shipCityName
     * @return self
     */
    public function setShipCityName($shipCityName)
    {
        $this->shipCityName = $shipCityName;
        return $this;
    }

    /**
     * Gets as shipStateOrProvince
     *
     * Displays the buyer's state or province name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @return string
     */
    public function getShipStateOrProvince()
    {
        return $this->shipStateOrProvince;
    }

    /**
     * Sets a new shipStateOrProvince
     *
     * Displays the buyer's state or province name (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @param string $shipStateOrProvince
     * @return self
     */
    public function setShipStateOrProvince($shipStateOrProvince)
    {
        $this->shipStateOrProvince = $shipStateOrProvince;
        return $this;
    }

    /**
     * Gets as shipPostalCode
     *
     * Displays the buyer's postal code or zip code (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @return string
     */
    public function getShipPostalCode()
    {
        return $this->shipPostalCode;
    }

    /**
     * Sets a new shipPostalCode
     *
     * Displays the buyer's postal code or zip code (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @param string $shipPostalCode
     * @return self
     */
    public function setShipPostalCode($shipPostalCode)
    {
        $this->shipPostalCode = $shipPostalCode;
        return $this;
    }

    /**
     * Gets as shipCountryName
     *
     * Displays the buyer's <a href=
     *  "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm"
     *  >ISO 3166</a> country code (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @return string
     */
    public function getShipCountryName()
    {
        return $this->shipCountryName;
    }

    /**
     * Sets a new shipCountryName
     *
     * Displays the buyer's <a href=
     *  "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm"
     *  >ISO 3166</a> country code (from the shipping address on their eBay user account).
     *  Only returned if payment has been marked as sent.
     *
     * @param string $shipCountryName
     * @return self
     */
    public function setShipCountryName($shipCountryName)
    {
        $this->shipCountryName = $shipCountryName;
        return $this;
    }

    /**
     * Gets as shippingService
     *
     * Name of the shipping service for display purposes.<br><br>
     *  Note that this value can change for aesthetic purposes, whereas
     *  the <b class="con">ShippingServiceToken</b> will not.
     *  Therefore, for all practical purposes, use <b class="con">ShippingServiceToken</b>
     *  when programmatically reading and processing.
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
     * Name of the shipping service for display purposes.<br><br>
     *  Note that this value can change for aesthetic purposes, whereas
     *  the <b class="con">ShippingServiceToken</b> will not.
     *  Therefore, for all practical purposes, use <b class="con">ShippingServiceToken</b>
     *  when programmatically reading and processing.
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
     * Gets as paymentClearedTime
     *
     * The date and time that the payment was acknowledged.
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @return \DateTime
     */
    public function getPaymentClearedTime()
    {
        return $this->paymentClearedTime;
    }

    /**
     * Sets a new paymentClearedTime
     *
     * The date and time that the payment was acknowledged.
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @param \DateTime $paymentClearedTime
     * @return self
     */
    public function setPaymentClearedTime(\DateTime $paymentClearedTime)
    {
        $this->paymentClearedTime = $paymentClearedTime;
        return $this;
    }

    /**
     * Gets as checkoutSiteID
     *
     * The eBay site that the buyer used when paying for the item(s).
     *
     * @return int
     */
    public function getCheckoutSiteID()
    {
        return $this->checkoutSiteID;
    }

    /**
     * Sets a new checkoutSiteID
     *
     * The eBay site that the buyer used when paying for the item(s).
     *
     * @param int $checkoutSiteID
     * @return self
     */
    public function setCheckoutSiteID($checkoutSiteID)
    {
        $this->checkoutSiteID = $checkoutSiteID;
        return $this;
    }

    /**
     * Gets as orderCreationTime
     *
     * The date and time that the order was created.
     *
     * @return \DateTime
     */
    public function getOrderCreationTime()
    {
        return $this->orderCreationTime;
    }

    /**
     * Sets a new orderCreationTime
     *
     * The date and time that the order was created.
     *
     * @param \DateTime $orderCreationTime
     * @return self
     */
    public function setOrderCreationTime(\DateTime $orderCreationTime)
    {
        $this->orderCreationTime = $orderCreationTime;
        return $this;
    }

    /**
     * Gets as orderSalePrice
     *
     * Amount seller charged to buyer, not amount of fees that seller owes eBay.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getOrderSalePrice()
    {
        return $this->orderSalePrice;
    }

    /**
     * Sets a new orderSalePrice
     *
     * Amount seller charged to buyer, not amount of fees that seller owes eBay.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $orderSalePrice
     * @return self
     */
    public function setOrderSalePrice(\Nogrod\eBaySDK\MerchantData\AmountType $orderSalePrice)
    {
        $this->orderSalePrice = $orderSalePrice;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * Calculated tax fee based on the sale price and the sales tax at the seller's location.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * Calculated tax fee based on the sale price and the sales tax at the seller's location.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $taxAmount
     * @return self
     */
    public function setTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as insuranceCost
     *
     * Cost of insuring the delivery of this order with the courier.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getInsuranceCost()
    {
        return $this->insuranceCost;
    }

    /**
     * Sets a new insuranceCost
     *
     * Cost of insuring the delivery of this order with the courier.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost
     * @return self
     */
    public function setInsuranceCost(\Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost)
    {
        $this->insuranceCost = $insuranceCost;
        return $this;
    }

    /**
     * Gets as shippingCost
     *
     * Calculated shipping cost based on item weight, buyer's postal code, and shipping service.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Sets a new shippingCost
     *
     * Calculated shipping cost based on item weight, buyer's postal code, and shipping service.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $shippingCost
     * @return self
     */
    public function setShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $shippingCost)
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Gets as orderTotalCost
     *
     * The total cost of the order, which includes the sale price of all order line items, shipping costs, and taxes.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>OrderTotalCost</b> value. To determine if 'Collect and Remit' taxes were added into <b>OrderTotalCost</b> value, the user can check for the <b>TotalIncludeseBayCollectedTax</b> boolean value. If this value is returned as <code>true</code>, the tax amount shown in the <b>Taxes.TaxDetails.TaxAmount</b> field for each order line item is reflected in the <b>OrderTotalCost</b> value. For a multiple line item order, the seller would need to view and add up the taxes shown in the Taxes.TaxDetails.TaxAmount field for each line item in the order.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getOrderTotalCost()
    {
        return $this->orderTotalCost;
    }

    /**
     * Sets a new orderTotalCost
     *
     * The total cost of the order, which includes the sale price of all order line items, shipping costs, and taxes.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>OrderTotalCost</b> value. To determine if 'Collect and Remit' taxes were added into <b>OrderTotalCost</b> value, the user can check for the <b>TotalIncludeseBayCollectedTax</b> boolean value. If this value is returned as <code>true</code>, the tax amount shown in the <b>Taxes.TaxDetails.TaxAmount</b> field for each order line item is reflected in the <b>OrderTotalCost</b> value. For a multiple line item order, the seller would need to view and add up the taxes shown in the Taxes.TaxDetails.TaxAmount field for each line item in the order.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $orderTotalCost
     * @return self
     */
    public function setOrderTotalCost(\Nogrod\eBaySDK\MerchantData\AmountType $orderTotalCost)
    {
        $this->orderTotalCost = $orderTotalCost;
        return $this;
    }

    /**
     * Gets as totalIncludeseBayCollectedTax
     *
     * This boolean field is returned as <code>true</code> if the <b>OrderTotalCost</b> value includes eBay 'Collect and Remit' taxes. eBay 'Collect and Remit' taxes include US state-mandated sales tax and 'Goods and Services' taxes that are applicable to orders from Australian and New Zealand sellers.
     *  <br><br>
     *  More and more US states are mandating the collection of sales tax for Internet sales. For a full list of affected states and effective dates, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">eBay sales tax collection</a> help page.
     *  <br><br>
     *  For eBay managed payment orders, this field should always be returned as <code>false</code>, since eBay will always strip out any applicable sales tax (and remit to taxing authority) before the seller payout for the order is distributed to the seller's account.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. However, shortly after the order funds clear in the seller's account, the 'Collect and Remit' tax amount will be pulled by PayPal from the seller's account and then disributed to the appropriate taxing authority. Previously, PayPal was stripping this 'Collect and Remit' tax from the buyer's payment and directly submitting this amount to the appropriate taxing authority, and this tax amount never shows up in the sellers account.
     *  </span>
     *
     * @return bool
     */
    public function getTotalIncludeseBayCollectedTax()
    {
        return $this->totalIncludeseBayCollectedTax;
    }

    /**
     * Sets a new totalIncludeseBayCollectedTax
     *
     * This boolean field is returned as <code>true</code> if the <b>OrderTotalCost</b> value includes eBay 'Collect and Remit' taxes. eBay 'Collect and Remit' taxes include US state-mandated sales tax and 'Goods and Services' taxes that are applicable to orders from Australian and New Zealand sellers.
     *  <br><br>
     *  More and more US states are mandating the collection of sales tax for Internet sales. For a full list of affected states and effective dates, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">eBay sales tax collection</a> help page.
     *  <br><br>
     *  For eBay managed payment orders, this field should always be returned as <code>false</code>, since eBay will always strip out any applicable sales tax (and remit to taxing authority) before the seller payout for the order is distributed to the seller's account.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. However, shortly after the order funds clear in the seller's account, the 'Collect and Remit' tax amount will be pulled by PayPal from the seller's account and then disributed to the appropriate taxing authority. Previously, PayPal was stripping this 'Collect and Remit' tax from the buyer's payment and directly submitting this amount to the appropriate taxing authority, and this tax amount never shows up in the sellers account.
     *  </span>
     *
     * @param bool $totalIncludeseBayCollectedTax
     * @return self
     */
    public function setTotalIncludeseBayCollectedTax($totalIncludeseBayCollectedTax)
    {
        $this->totalIncludeseBayCollectedTax = $totalIncludeseBayCollectedTax;
        return $this;
    }

    /**
     * Gets as sellingManagerSaleRecordID
     *
     * For users of the Selling Manager or Selling Manager Pro tools only. If you are not
     *  using Selling Manager or Selling Manager Pro, this field will not be returned in your response.
     *  <br><br>
     *  Unique identifier for the record, assigned by eBay. An example of a recordId:
     *  1111:222:333:444:x.
     *
     * @return int
     */
    public function getSellingManagerSaleRecordID()
    {
        return $this->sellingManagerSaleRecordID;
    }

    /**
     * Sets a new sellingManagerSaleRecordID
     *
     * For users of the Selling Manager or Selling Manager Pro tools only. If you are not
     *  using Selling Manager or Selling Manager Pro, this field will not be returned in your response.
     *  <br><br>
     *  Unique identifier for the record, assigned by eBay. An example of a recordId:
     *  1111:222:333:444:x.
     *
     * @param int $sellingManagerSaleRecordID
     * @return self
     */
    public function setSellingManagerSaleRecordID($sellingManagerSaleRecordID)
    {
        $this->sellingManagerSaleRecordID = $sellingManagerSaleRecordID;
        return $this;
    }

    /**
     * Adds as orderLineItem
     *
     * Contains the data for each line item in the order.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderLineItemType $orderLineItem
     */
    public function addToOrderItemDetails(\Nogrod\eBaySDK\MerchantData\OrderLineItemType $orderLineItem)
    {
        $this->orderItemDetails[] = $orderLineItem;
        return $this;
    }

    /**
     * isset orderItemDetails
     *
     * Contains the data for each line item in the order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderItemDetails($index)
    {
        return isset($this->orderItemDetails[$index]);
    }

    /**
     * unset orderItemDetails
     *
     * Contains the data for each line item in the order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderItemDetails($index)
    {
        unset($this->orderItemDetails[$index]);
    }

    /**
     * Gets as orderItemDetails
     *
     * Contains the data for each line item in the order.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderLineItemType[]
     */
    public function getOrderItemDetails()
    {
        return $this->orderItemDetails;
    }

    /**
     * Sets a new orderItemDetails
     *
     * Contains the data for each line item in the order.
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderLineItemType[] $orderItemDetails
     * @return self
     */
    public function setOrderItemDetails(array $orderItemDetails)
    {
        $this->orderItemDetails = $orderItemDetails;
        return $this;
    }

    /**
     * Gets as buyerStaticAlias
     *
     * Static anonymous email address of the buyer for eBay intermediated
     *  member-to-memmber emails. Messaging calls in the Trading API, such as <b
     *  class="con">GetMemeberMessages</b> will also use this static email
     *  address.
     *  <br><br>
     *  The email address is in the form <code>
     *  &lt;alias&gt;@members.ebay.&lt;SiteDomain&gt;</code>.
     *  Each eBay member is assigned a static alias, which is the first part of the
     *  email address. The &lt;SiteDomain&gt; value is based on the buyer's
     *  registered site. For example, the email address ends in
     *  <code>@members.ebay.de</code> for a buyer registered on the eBay
     *  Germany site. The &lt;SiteDomain&gt; value can be
     *  used to help identify the user's language. If the buyer changes his registered
     *  site, then the value of &lt;SiteDomain&gt; will change accordingly.
     *
     * @return string
     */
    public function getBuyerStaticAlias()
    {
        return $this->buyerStaticAlias;
    }

    /**
     * Sets a new buyerStaticAlias
     *
     * Static anonymous email address of the buyer for eBay intermediated
     *  member-to-memmber emails. Messaging calls in the Trading API, such as <b
     *  class="con">GetMemeberMessages</b> will also use this static email
     *  address.
     *  <br><br>
     *  The email address is in the form <code>
     *  &lt;alias&gt;@members.ebay.&lt;SiteDomain&gt;</code>.
     *  Each eBay member is assigned a static alias, which is the first part of the
     *  email address. The &lt;SiteDomain&gt; value is based on the buyer's
     *  registered site. For example, the email address ends in
     *  <code>@members.ebay.de</code> for a buyer registered on the eBay
     *  Germany site. The &lt;SiteDomain&gt; value can be
     *  used to help identify the user's language. If the buyer changes his registered
     *  site, then the value of &lt;SiteDomain&gt; will change accordingly.
     *
     * @param string $buyerStaticAlias
     * @return self
     */
    public function setBuyerStaticAlias($buyerStaticAlias)
    {
        $this->buyerStaticAlias = $buyerStaticAlias;
        return $this;
    }

    /**
     * Gets as shippingServiceToken
     *
     * Value used for the shipping service. For a list of valid values,
     *  call GeteBayDetails with DetailName set to ShippingServiceDetails.lt;br><br>
     *  Related fields:<br>
     *  Item.ShippingDetails.InternationalShippingServiceOption.ShippingService in AddFixedPriceItem<br>
     *  Item.ShippingDetails.ShippingServiceOptions.ShippingService in AddFixedPriceItem
     *
     * @return string
     */
    public function getShippingServiceToken()
    {
        return $this->shippingServiceToken;
    }

    /**
     * Sets a new shippingServiceToken
     *
     * Value used for the shipping service. For a list of valid values,
     *  call GeteBayDetails with DetailName set to ShippingServiceDetails.lt;br><br>
     *  Related fields:<br>
     *  Item.ShippingDetails.InternationalShippingServiceOption.ShippingService in AddFixedPriceItem<br>
     *  Item.ShippingDetails.ShippingServiceOptions.ShippingService in AddFixedPriceItem
     *
     * @param string $shippingServiceToken
     * @return self
     */
    public function setShippingServiceToken($shippingServiceToken)
    {
        $this->shippingServiceToken = $shippingServiceToken;
        return $this;
    }

    /**
     * Gets as checkoutStatus
     *
     * The current checkout status of the order.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CheckoutStatusType
     */
    public function getCheckoutStatus()
    {
        return $this->checkoutStatus;
    }

    /**
     * Sets a new checkoutStatus
     *
     * The current checkout status of the order.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CheckoutStatusType $checkoutStatus
     * @return self
     */
    public function setCheckoutStatus(\Nogrod\eBaySDK\MerchantData\CheckoutStatusType $checkoutStatus)
    {
        $this->checkoutStatus = $checkoutStatus;
        return $this;
    }

    /**
     * Gets as paymentHoldStatus
     *
     * Contains the status of a PayPal payment hold on the item.
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
     * Contains the status of a PayPal payment hold on the item.
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
     * Adds as externalTransaction
     *
     * The transaction that relates to the eBay order line item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ExternalTransactionType $externalTransaction
     */
    public function addToExternalTransaction(\Nogrod\eBaySDK\MerchantData\ExternalTransactionType $externalTransaction)
    {
        $this->externalTransaction[] = $externalTransaction;
        return $this;
    }

    /**
     * isset externalTransaction
     *
     * The transaction that relates to the eBay order line item.
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
     * The transaction that relates to the eBay order line item.
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
     * The transaction that relates to the eBay order line item.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ExternalTransactionType[]
     */
    public function getExternalTransaction()
    {
        return $this->externalTransaction;
    }

    /**
     * Sets a new externalTransaction
     *
     * The transaction that relates to the eBay order line item.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ExternalTransactionType[] $externalTransaction
     * @return self
     */
    public function setExternalTransaction(array $externalTransaction)
    {
        $this->externalTransaction = $externalTransaction;
        return $this;
    }

    /**
     * Gets as shipReferenceId
     *
     * Uniquely identifies an order shipped using the Global Shipping Program. This value is generated by eBay when the order is completed. The international shipping provider uses the ReferenceID as the primary reference when processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider.
     * Example: "Reference #1234567890123456"
     *
     * @return string
     */
    public function getShipReferenceId()
    {
        return $this->shipReferenceId;
    }

    /**
     * Sets a new shipReferenceId
     *
     * Uniquely identifies an order shipped using the Global Shipping Program. This value is generated by eBay when the order is completed. The international shipping provider uses the ReferenceID as the primary reference when processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider.
     * Example: "Reference #1234567890123456"
     *
     * @param string $shipReferenceId
     * @return self
     */
    public function setShipReferenceId($shipReferenceId)
    {
        $this->shipReferenceId = $shipReferenceId;
        return $this;
    }

    /**
     * Adds as pickupOptions
     *
     * Contains all local pickup related information.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\PickupOptionsType $pickupOptions
     */
    public function addToPickupDetails(\Nogrod\eBaySDK\MerchantData\PickupOptionsType $pickupOptions)
    {
        $this->pickupDetails[] = $pickupOptions;
        return $this;
    }

    /**
     * isset pickupDetails
     *
     * Contains all local pickup related information.
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
     * Contains all local pickup related information.
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
     * Contains all local pickup related information.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PickupOptionsType[]
     */
    public function getPickupDetails()
    {
        return $this->pickupDetails;
    }

    /**
     * Sets a new pickupDetails
     *
     * Contains all local pickup related information.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PickupOptionsType[] $pickupDetails
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
     * Contains the information about buyer selected pickup method
     *
     * @return \Nogrod\eBaySDK\MerchantData\PickupMethodSelectedType
     */
    public function getPickupMethodSelected()
    {
        return $this->pickupMethodSelected;
    }

    /**
     * Sets a new pickupMethodSelected
     *
     * Contains the information about buyer selected pickup method
     *
     * @param \Nogrod\eBaySDK\MerchantData\PickupMethodSelectedType $pickupMethodSelected
     * @return self
     */
    public function setPickupMethodSelected(\Nogrod\eBaySDK\MerchantData\PickupMethodSelectedType $pickupMethodSelected)
    {
        $this->pickupMethodSelected = $pickupMethodSelected;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getBuyerUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerUserID", $value);
        }
        $value = $this->getBuyerFirstName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerFirstName", $value);
        }
        $value = $this->getBuyerLastName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerLastName", $value);
        }
        $value = $this->getBuyerEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerEmail", $value);
        }
        $value = $this->getBuyerPhone();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerPhone", $value);
        }
        $value = $this->getShipRecipientName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipRecipientName", $value);
        }
        $value = $this->getShipStreet1();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipStreet1", $value);
        }
        $value = $this->getShipStreet2();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipStreet2", $value);
        }
        $value = $this->getShipCityName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipCityName", $value);
        }
        $value = $this->getShipStateOrProvince();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipStateOrProvince", $value);
        }
        $value = $this->getShipPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipPostalCode", $value);
        }
        $value = $this->getShipCountryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipCountryName", $value);
        }
        $value = $this->getShippingService();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingService", $value);
        }
        $value = $this->getPaymentClearedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentClearedTime", $value);
        }
        $value = $this->getCheckoutSiteID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutSiteID", $value);
        }
        $value = $this->getOrderCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderCreationTime", $value);
        }
        $value = $this->getOrderSalePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderSalePrice", $value);
        }
        $value = $this->getTaxAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxAmount", $value);
        }
        $value = $this->getInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceCost", $value);
        }
        $value = $this->getShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCost", $value);
        }
        $value = $this->getOrderTotalCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderTotalCost", $value);
        }
        $value = $this->getTotalIncludeseBayCollectedTax();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalIncludeseBayCollectedTax", $value);
        }
        $value = $this->getSellingManagerSaleRecordID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerSaleRecordID", $value);
        }
        $value = $this->getOrderItemDetails();
        if (null !== $value && !empty($this->getOrderItemDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderItemDetails", array_map(function ($v) {
                return ["OrderLineItem" => $v];
            }, $value));
        }
        $value = $this->getBuyerStaticAlias();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerStaticAlias", $value);
        }
        $value = $this->getShippingServiceToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceToken", $value);
        }
        $value = $this->getCheckoutStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutStatus", $value);
        }
        $value = $this->getPaymentHoldStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentHoldStatus", $value);
        }
        $value = $this->getExternalTransaction();
        if (null !== $value && !empty($this->getExternalTransaction())) {
            $writer->write(array_map(function ($v) {
                return ["ExternalTransaction" => $v];
            }, $value));
        }
        $value = $this->getShipReferenceId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipReferenceId", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerUserID');
        if (null !== $value) {
            $this->setBuyerUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerFirstName');
        if (null !== $value) {
            $this->setBuyerFirstName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerLastName');
        if (null !== $value) {
            $this->setBuyerLastName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerEmail');
        if (null !== $value) {
            $this->setBuyerEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerPhone');
        if (null !== $value) {
            $this->setBuyerPhone($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipRecipientName');
        if (null !== $value) {
            $this->setShipRecipientName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipStreet1');
        if (null !== $value) {
            $this->setShipStreet1($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipStreet2');
        if (null !== $value) {
            $this->setShipStreet2($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipCityName');
        if (null !== $value) {
            $this->setShipCityName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipStateOrProvince');
        if (null !== $value) {
            $this->setShipStateOrProvince($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipPostalCode');
        if (null !== $value) {
            $this->setShipPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipCountryName');
        if (null !== $value) {
            $this->setShipCountryName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentClearedTime');
        if (null !== $value) {
            $this->setPaymentClearedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutSiteID');
        if (null !== $value) {
            $this->setCheckoutSiteID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderCreationTime');
        if (null !== $value) {
            $this->setOrderCreationTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderSalePrice');
        if (null !== $value) {
            $this->setOrderSalePrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxAmount');
        if (null !== $value) {
            $this->setTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceCost');
        if (null !== $value) {
            $this->setInsuranceCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCost');
        if (null !== $value) {
            $this->setShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderTotalCost');
        if (null !== $value) {
            $this->setOrderTotalCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalIncludeseBayCollectedTax');
        if (null !== $value) {
            $this->setTotalIncludeseBayCollectedTax($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerSaleRecordID');
        if (null !== $value) {
            $this->setSellingManagerSaleRecordID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderItemDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderItemDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderLineItemType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerStaticAlias');
        if (null !== $value) {
            $this->setBuyerStaticAlias($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceToken');
        if (null !== $value) {
            $this->setShippingServiceToken($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutStatus');
        if (null !== $value) {
            $this->setCheckoutStatus(\Nogrod\eBaySDK\MerchantData\CheckoutStatusType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentHoldStatus');
        if (null !== $value) {
            $this->setPaymentHoldStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransaction', true);
        if (null !== $value && !empty($value)) {
            $this->setExternalTransaction(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ExternalTransactionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipReferenceId');
        if (null !== $value) {
            $this->setShipReferenceId($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setPickupDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\PickupOptionsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupMethodSelected');
        if (null !== $value) {
            $this->setPickupMethodSelected(\Nogrod\eBaySDK\MerchantData\PickupMethodSelectedType::fromKeyValue($value));
        }
    }
}
