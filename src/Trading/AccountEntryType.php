<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AccountEntryType
 *
 * Type defining the <b>AccountEntry</b> container returned in the <b>GetAccount</b> response. Each <b>AccountEntry</b> container consists of detailed information for a single credit or debit transaction, or an administrative action which occurred on the eBay user's account.
 * XSD Type: AccountEntryType
 */
class AccountEntryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This enumeration value indicates the type of transaction or administrative action that occurred on the eBay user's account. Possible values are defined in the <b>AccountDetailEntryCodeType</b> enumerated type.
     *
     * @var string $accountDetailsEntryType
     */
    private $accountDetailsEntryType = null;

    /**
     * The category of the monetary transaction or administrative action applied
     *  to an eBay account.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This field is no longer returned. If the eBay user has an outstanding balance owed to eBay, the owed amount will be displayed in the <b>AccountSummary.CurrentBalance</b> field in the <b>GetAccount</b> response.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $balance
     */
    private $balance = null;

    /**
     * Timestamp indicating the date and time that the entry was posted to the account, in
     *  GMT.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gross fees that are assessed by eBay (net fees plus VAT, if any).
     *  Returned even if VAT does not apply.
     *  The value is positive for debits and negative for credits.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $grossDetailAmount
     */
    private $grossDetailAmount = null;

    /**
     * If the account entry is associated with an eBay listing, this field
     *  shows the eBay <b>ItemID</b> value. If there is no correlation between the account entry and one of the user's eBay listings, '0' is returned in this field.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Memo line for the account entry. It can be an empty string.
     *
     * @var string $memo
     */
    private $memo = null;

    /**
     * The rate used for the currency conversion for a transaction.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $conversionRate
     */
    private $conversionRate = null;

    /**
     * Net fees that are assessed by eBay, excluding additional surcharges and VAT
     *  (if any). Returned even if VAT does not apply. The value is positive for
     *  debits (user pays eBay) and negative for credits (eBay pays user).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $netDetailAmount
     */
    private $netDetailAmount = null;

    /**
     * This value is the unique identifier for the account entry. This value is created by eBay once the transaction occurs on the user's account.
     *
     * @var string $refNumber
     */
    private $refNumber = null;

    /**
     * The applicable rate that was used to calculate the VAT (Value-Added Tax) for the transaction. When the <b>VATPercent</b> is specified for a listing, the item's VAT information appears on the View Item page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. VAT is only applicable to sellers located in a European Union (EU) country. If VAT does not apply to the account entry, this field is still returned but it's value will be '0'.
     *
     * @var float $vATPercent
     */
    private $vATPercent = null;

    /**
     * A description or comment about the monetary transaction or administrative action applied to an eBay user account.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. This field is only returned if the account entry is associated with an order line item.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * The unique identifier of an order line item. This field is only returned if the account entry is associated with an order line item.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * This boolean field is returned as <code>true</code> if the seller received a discount on the Final Value Fee for the order line item. Only Top-Rated sellers are eligible for this Final Value Fee discount. The Final Value Fee discount percentage varies by country. For more information on becoming a Top-Rated Seller in the US and the requirements for Top-Rated Plus listings, see the <a href="https://www.ebay.com/help/selling/seller-levels-performance-standards/seller-levels-performance-standards?id=4080" target="_blank">Becoming a Top Rated Seller</a> help topic.
     *  <br/><br/>
     *  This field will not be returned until eBay bills the seller for the Final Value Fee for the eligible order line item.
     *
     * @var bool $receivedTopRatedDiscount
     */
    private $receivedTopRatedDiscount = null;

    /**
     * This field is returned if the account fee or credit is associated with an entire (single or multiple line item) order, and not necessarily for a single line item within the order.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetAccount</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderId
     */
    private $orderId = null;

    /**
     * This container is an array of one or more discounts applied to the corresponding accounty entry. This container will not be returned if there are no discounts applied to the corresponding accounty entry.
     *
     * @var \Nogrod\eBaySDK\Trading\DiscountType[] $discountDetail
     */
    private $discountDetail = null;

    /**
     * This boolean field is returned with each account entry if the <b>IncludeNettedEntries</b> field is included in the request and set to <code>true</code>. The value indicates whether or not the corresponding account entry value (charge or credit) is a part of the 'Total Netted Charge Amount' or 'Total Netted Credit Amount' values returned in the <b>AccountSummary.NettedTransactionSummary</b> container.
     *  <br>
     *  <br>
     *  If this value is <code>true</code>, it indicates that the corresponding fee was deducted from a seller payout. If the value is <code>false</code>, it indicates that the fee or credit was invoiced to the seller instead.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  For seller accounts not yet enabled for eBay managed payments, the returned value will always be <code>false</code>. There may also be some seller accounts enabled for managed payments, but the fee netting mechanism may not yet be available for an account. A seller can check their status for the fee netting mechanism by checking the value in the <b>FeeNettingStatus</b> field.
     *  </span>
     *
     * @var bool $netted
     */
    private $netted = null;

    /**
     * Gets as accountDetailsEntryType
     *
     * This enumeration value indicates the type of transaction or administrative action that occurred on the eBay user's account. Possible values are defined in the <b>AccountDetailEntryCodeType</b> enumerated type.
     *
     * @return string
     */
    public function getAccountDetailsEntryType()
    {
        return $this->accountDetailsEntryType;
    }

    /**
     * Sets a new accountDetailsEntryType
     *
     * This enumeration value indicates the type of transaction or administrative action that occurred on the eBay user's account. Possible values are defined in the <b>AccountDetailEntryCodeType</b> enumerated type.
     *
     * @param string $accountDetailsEntryType
     * @return self
     */
    public function setAccountDetailsEntryType($accountDetailsEntryType)
    {
        $this->accountDetailsEntryType = $accountDetailsEntryType;
        return $this;
    }

    /**
     * Gets as description
     *
     * The category of the monetary transaction or administrative action applied
     *  to an eBay account.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The category of the monetary transaction or administrative action applied
     *  to an eBay account.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as balance
     *
     * This field is no longer returned. If the eBay user has an outstanding balance owed to eBay, the owed amount will be displayed in the <b>AccountSummary.CurrentBalance</b> field in the <b>GetAccount</b> response.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Sets a new balance
     *
     * This field is no longer returned. If the eBay user has an outstanding balance owed to eBay, the owed amount will be displayed in the <b>AccountSummary.CurrentBalance</b> field in the <b>GetAccount</b> response.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $balance
     * @return self
     */
    public function setBalance(\Nogrod\eBaySDK\Trading\AmountType $balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Gets as date
     *
     * Timestamp indicating the date and time that the entry was posted to the account, in
     *  GMT.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Timestamp indicating the date and time that the entry was posted to the account, in
     *  GMT.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as grossDetailAmount
     *
     * Gross fees that are assessed by eBay (net fees plus VAT, if any).
     *  Returned even if VAT does not apply.
     *  The value is positive for debits and negative for credits.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getGrossDetailAmount()
    {
        return $this->grossDetailAmount;
    }

    /**
     * Sets a new grossDetailAmount
     *
     * Gross fees that are assessed by eBay (net fees plus VAT, if any).
     *  Returned even if VAT does not apply.
     *  The value is positive for debits and negative for credits.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $grossDetailAmount
     * @return self
     */
    public function setGrossDetailAmount(\Nogrod\eBaySDK\Trading\AmountType $grossDetailAmount)
    {
        $this->grossDetailAmount = $grossDetailAmount;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * If the account entry is associated with an eBay listing, this field
     *  shows the eBay <b>ItemID</b> value. If there is no correlation between the account entry and one of the user's eBay listings, '0' is returned in this field.
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
     * If the account entry is associated with an eBay listing, this field
     *  shows the eBay <b>ItemID</b> value. If there is no correlation between the account entry and one of the user's eBay listings, '0' is returned in this field.
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
     * Gets as memo
     *
     * Memo line for the account entry. It can be an empty string.
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets a new memo
     *
     * Memo line for the account entry. It can be an empty string.
     *
     * @param string $memo
     * @return self
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Gets as conversionRate
     *
     * The rate used for the currency conversion for a transaction.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Sets a new conversionRate
     *
     * The rate used for the currency conversion for a transaction.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $conversionRate
     * @return self
     */
    public function setConversionRate(\Nogrod\eBaySDK\Trading\AmountType $conversionRate)
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * Gets as netDetailAmount
     *
     * Net fees that are assessed by eBay, excluding additional surcharges and VAT
     *  (if any). Returned even if VAT does not apply. The value is positive for
     *  debits (user pays eBay) and negative for credits (eBay pays user).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getNetDetailAmount()
    {
        return $this->netDetailAmount;
    }

    /**
     * Sets a new netDetailAmount
     *
     * Net fees that are assessed by eBay, excluding additional surcharges and VAT
     *  (if any). Returned even if VAT does not apply. The value is positive for
     *  debits (user pays eBay) and negative for credits (eBay pays user).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $netDetailAmount
     * @return self
     */
    public function setNetDetailAmount(\Nogrod\eBaySDK\Trading\AmountType $netDetailAmount)
    {
        $this->netDetailAmount = $netDetailAmount;
        return $this;
    }

    /**
     * Gets as refNumber
     *
     * This value is the unique identifier for the account entry. This value is created by eBay once the transaction occurs on the user's account.
     *
     * @return string
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }

    /**
     * Sets a new refNumber
     *
     * This value is the unique identifier for the account entry. This value is created by eBay once the transaction occurs on the user's account.
     *
     * @param string $refNumber
     * @return self
     */
    public function setRefNumber($refNumber)
    {
        $this->refNumber = $refNumber;
        return $this;
    }

    /**
     * Gets as vATPercent
     *
     * The applicable rate that was used to calculate the VAT (Value-Added Tax) for the transaction. When the <b>VATPercent</b> is specified for a listing, the item's VAT information appears on the View Item page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. VAT is only applicable to sellers located in a European Union (EU) country. If VAT does not apply to the account entry, this field is still returned but it's value will be '0'.
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
     * The applicable rate that was used to calculate the VAT (Value-Added Tax) for the transaction. When the <b>VATPercent</b> is specified for a listing, the item's VAT information appears on the View Item page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. VAT is only applicable to sellers located in a European Union (EU) country. If VAT does not apply to the account entry, this field is still returned but it's value will be '0'.
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
     * Gets as title
     *
     * A description or comment about the monetary transaction or administrative action applied to an eBay user account.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A description or comment about the monetary transaction or administrative action applied to an eBay user account.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. This field is only returned if the account entry is associated with an order line item.
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
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. This field is only returned if the account entry is associated with an order line item.
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
     * Gets as transactionID
     *
     * The unique identifier of an order line item. This field is only returned if the account entry is associated with an order line item.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * The unique identifier of an order line item. This field is only returned if the account entry is associated with an order line item.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * Gets as receivedTopRatedDiscount
     *
     * This boolean field is returned as <code>true</code> if the seller received a discount on the Final Value Fee for the order line item. Only Top-Rated sellers are eligible for this Final Value Fee discount. The Final Value Fee discount percentage varies by country. For more information on becoming a Top-Rated Seller in the US and the requirements for Top-Rated Plus listings, see the <a href="https://www.ebay.com/help/selling/seller-levels-performance-standards/seller-levels-performance-standards?id=4080" target="_blank">Becoming a Top Rated Seller</a> help topic.
     *  <br/><br/>
     *  This field will not be returned until eBay bills the seller for the Final Value Fee for the eligible order line item.
     *
     * @return bool
     */
    public function getReceivedTopRatedDiscount()
    {
        return $this->receivedTopRatedDiscount;
    }

    /**
     * Sets a new receivedTopRatedDiscount
     *
     * This boolean field is returned as <code>true</code> if the seller received a discount on the Final Value Fee for the order line item. Only Top-Rated sellers are eligible for this Final Value Fee discount. The Final Value Fee discount percentage varies by country. For more information on becoming a Top-Rated Seller in the US and the requirements for Top-Rated Plus listings, see the <a href="https://www.ebay.com/help/selling/seller-levels-performance-standards/seller-levels-performance-standards?id=4080" target="_blank">Becoming a Top Rated Seller</a> help topic.
     *  <br/><br/>
     *  This field will not be returned until eBay bills the seller for the Final Value Fee for the eligible order line item.
     *
     * @param bool $receivedTopRatedDiscount
     * @return self
     */
    public function setReceivedTopRatedDiscount($receivedTopRatedDiscount)
    {
        $this->receivedTopRatedDiscount = $receivedTopRatedDiscount;
        return $this;
    }

    /**
     * Gets as orderId
     *
     * This field is returned if the account fee or credit is associated with an entire (single or multiple line item) order, and not necessarily for a single line item within the order.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetAccount</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets a new orderId
     *
     * This field is returned if the account fee or credit is associated with an entire (single or multiple line item) order, and not necessarily for a single line item within the order.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetAccount</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @param string $orderId
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * Adds as discount
     *
     * This container is an array of one or more discounts applied to the corresponding accounty entry. This container will not be returned if there are no discounts applied to the corresponding accounty entry.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DiscountType $discount
     */
    public function addToDiscountDetail(\Nogrod\eBaySDK\Trading\DiscountType $discount)
    {
        $this->discountDetail[] = $discount;
        return $this;
    }

    /**
     * isset discountDetail
     *
     * This container is an array of one or more discounts applied to the corresponding accounty entry. This container will not be returned if there are no discounts applied to the corresponding accounty entry.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscountDetail($index)
    {
        return isset($this->discountDetail[$index]);
    }

    /**
     * unset discountDetail
     *
     * This container is an array of one or more discounts applied to the corresponding accounty entry. This container will not be returned if there are no discounts applied to the corresponding accounty entry.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscountDetail($index)
    {
        unset($this->discountDetail[$index]);
    }

    /**
     * Gets as discountDetail
     *
     * This container is an array of one or more discounts applied to the corresponding accounty entry. This container will not be returned if there are no discounts applied to the corresponding accounty entry.
     *
     * @return \Nogrod\eBaySDK\Trading\DiscountType[]
     */
    public function getDiscountDetail()
    {
        return $this->discountDetail;
    }

    /**
     * Sets a new discountDetail
     *
     * This container is an array of one or more discounts applied to the corresponding accounty entry. This container will not be returned if there are no discounts applied to the corresponding accounty entry.
     *
     * @param \Nogrod\eBaySDK\Trading\DiscountType[] $discountDetail
     * @return self
     */
    public function setDiscountDetail(array $discountDetail)
    {
        $this->discountDetail = $discountDetail;
        return $this;
    }

    /**
     * Gets as netted
     *
     * This boolean field is returned with each account entry if the <b>IncludeNettedEntries</b> field is included in the request and set to <code>true</code>. The value indicates whether or not the corresponding account entry value (charge or credit) is a part of the 'Total Netted Charge Amount' or 'Total Netted Credit Amount' values returned in the <b>AccountSummary.NettedTransactionSummary</b> container.
     *  <br>
     *  <br>
     *  If this value is <code>true</code>, it indicates that the corresponding fee was deducted from a seller payout. If the value is <code>false</code>, it indicates that the fee or credit was invoiced to the seller instead.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  For seller accounts not yet enabled for eBay managed payments, the returned value will always be <code>false</code>. There may also be some seller accounts enabled for managed payments, but the fee netting mechanism may not yet be available for an account. A seller can check their status for the fee netting mechanism by checking the value in the <b>FeeNettingStatus</b> field.
     *  </span>
     *
     * @return bool
     */
    public function getNetted()
    {
        return $this->netted;
    }

    /**
     * Sets a new netted
     *
     * This boolean field is returned with each account entry if the <b>IncludeNettedEntries</b> field is included in the request and set to <code>true</code>. The value indicates whether or not the corresponding account entry value (charge or credit) is a part of the 'Total Netted Charge Amount' or 'Total Netted Credit Amount' values returned in the <b>AccountSummary.NettedTransactionSummary</b> container.
     *  <br>
     *  <br>
     *  If this value is <code>true</code>, it indicates that the corresponding fee was deducted from a seller payout. If the value is <code>false</code>, it indicates that the fee or credit was invoiced to the seller instead.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  For seller accounts not yet enabled for eBay managed payments, the returned value will always be <code>false</code>. There may also be some seller accounts enabled for managed payments, but the fee netting mechanism may not yet be available for an account. A seller can check their status for the fee netting mechanism by checking the value in the <b>FeeNettingStatus</b> field.
     *  </span>
     *
     * @param bool $netted
     * @return self
     */
    public function setNetted($netted)
    {
        $this->netted = $netted;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAccountDetailsEntryType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AccountDetailsEntryType", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getBalance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Balance", $value);
        }
        $value = $this->getDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Date", $value);
        }
        $value = $this->getGrossDetailAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GrossDetailAmount", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getMemo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Memo", $value);
        }
        $value = $this->getConversionRate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConversionRate", $value);
        }
        $value = $this->getNetDetailAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NetDetailAmount", $value);
        }
        $value = $this->getRefNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefNumber", $value);
        }
        $value = $this->getVATPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATPercent", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getReceivedTopRatedDiscount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReceivedTopRatedDiscount", $value);
        }
        $value = $this->getOrderId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderId", $value);
        }
        $value = $this->getDiscountDetail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountDetail", $value);
        }
        $value = $this->getNetted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Netted", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountDetailsEntryType');
        if (null !== $value) {
            $this->setAccountDetailsEntryType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Balance');
        if (null !== $value) {
            $this->setBalance(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Date');
        if (null !== $value) {
            $this->setDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GrossDetailAmount');
        if (null !== $value) {
            $this->setGrossDetailAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Memo');
        if (null !== $value) {
            $this->setMemo($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConversionRate');
        if (null !== $value) {
            $this->setConversionRate(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NetDetailAmount');
        if (null !== $value) {
            $this->setNetDetailAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefNumber');
        if (null !== $value) {
            $this->setRefNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATPercent');
        if (null !== $value) {
            $this->setVATPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReceivedTopRatedDiscount');
        if (null !== $value) {
            $this->setReceivedTopRatedDiscount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderId');
        if (null !== $value) {
            $this->setOrderId($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountDetail', true);
        if (null !== $value && !empty($value)) {
            $this->setDiscountDetail(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DiscountType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Netted');
        if (null !== $value) {
            $this->setNetted($value);
        }
    }
}
