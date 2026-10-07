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
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
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
        if (!is_array($this->discountDetail)) {
            throw new \LogicException('discountDetail is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\DiscountType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\DiscountType> $discountDetail
     * @return self
     */
    public function setDiscountDetail(iterable $discountDetail)
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
     *
     * @param bool $netted
     * @return self
     */
    public function setNetted($netted)
    {
        $this->netted = $netted;
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
        $value = $this->accountDetailsEntryType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AccountDetailsEntryType', null, (string) $value);
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
        $value = $this->balance;
        if (null !== $value) {
            $writer->startElementNs(null, 'Balance', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->date;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Date', null, Func::formatDateTime($value));
        }
        $value = $this->grossDetailAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'GrossDetailAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->memo;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Memo', null, (string) $value);
        }
        $value = $this->conversionRate;
        if (null !== $value) {
            $writer->startElementNs(null, 'ConversionRate', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->netDetailAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'NetDetailAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->refNumber;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RefNumber', null, (string) $value);
        }
        $value = $this->vATPercent;
        if (null !== $value) {
            $writer->writeElementNs(null, 'VATPercent', null, (string) $value);
        }
        $value = $this->title;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Title', null, (string) $value);
        }
        $value = $this->orderLineItemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderLineItemID', null, (string) $value);
        }
        $value = $this->transactionID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionID', null, (string) $value);
        }
        $value = $this->receivedTopRatedDiscount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReceivedTopRatedDiscount', null, ($value ? 'true' : 'false'));
        }
        $value = $this->orderId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderId', null, (string) $value);
        }
        $value = $this->discountDetail;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'DiscountDetail', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Discount', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->netted;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Netted', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AccountEntryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->discountDetail = [];
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
                case 'AccountDetailsEntryType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->accountDetailsEntryType = $value;
                    }
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
                case 'Balance':
                    $this->balance = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'Date':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->date = new \DateTime($value);
                    }
                    return true;
                case 'GrossDetailAmount':
                    $this->grossDetailAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'Memo':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->memo = $value;
                    }
                    return true;
                case 'ConversionRate':
                    $this->conversionRate = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'NetDetailAmount':
                    $this->netDetailAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'RefNumber':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->refNumber = $value;
                    }
                    return true;
                case 'VATPercent':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->vATPercent = (float) $value;
                    }
                    return true;
                case 'Title':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->title = $value;
                    }
                    return true;
                case 'OrderLineItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderLineItemID = $value;
                    }
                    return true;
                case 'TransactionID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionID = $value;
                    }
                    return true;
                case 'ReceivedTopRatedDiscount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->receivedTopRatedDiscount = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'OrderId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderId = $value;
                    }
                    return true;
                case 'DiscountDetail':
                    $this->discountDetail = Func::readList($reader, 'Discount', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\DiscountType::xmlRead($reader));
                    return true;
                case 'Netted':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->netted = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
