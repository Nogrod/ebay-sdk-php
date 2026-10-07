<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetAccountRequestType
 *
 * Returns a seller's invoice data for their eBay account, including the account's
 *  summary data.
 * XSD Type: GetAccountRequestType
 */
class GetAccountRequestType extends AbstractRequestType
{
    /**
     * Specifies the report format in which to return account entries.
     *
     * @var string $accountHistorySelection
     */
    private $accountHistorySelection = null;

    /**
     * Since <code>SpecifiedInvoice</code> is no longer supported, this field is no longer applicable and should not be used. If this field is included, it will be ignored.
     *
     * @var \DateTime $invoiceDate
     */
    private $invoiceDate = null;

    /**
     * This field is used to retrieve all account entries dating back to the timestamp passed into this <b>BeginDate</b> field up until the timestamp passed into the <b>EndDate</b> field. The <b>BeginDate</b> value can not be set back any further than four months into the past.
     *  <br/><br/>
     *  The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>BeginDate</b> value must be less than or equal to the <b>EndDate</b> value. The user might use the same values in both fields if that user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used).
     *  <br/><br/>
     *  This field is only applicable if the <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. fiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     *
     * @var \DateTime $beginDate
     */
    private $beginDate = null;

    /**
     * This field is used to retrieve all account entries dating up to the timestamp passed into this <b>EndDate</b> field dating back to the timestamp passed into the <b>BeginDate</b> field. The <b>EndDate</b> value can not be set for a future date.
     *  <br/><br/>
     *  The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>EndDate</b> value must be more than or equal to the <b>BeginDate</b> value. The user might use the same values in both fields if that user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used).
     *  <br/><br/>
     *  This field is only applicable if the <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. If 'BetweenSpecifiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * This container is used to control how many account entries are returned on each page of data in the response. <b>PaginationType</b> is used by numerous Trading API calls, and the default and maximum values for the <b>EntriesPerPage</b> field differs with each call. For the <b>GetAccount</b> call, the default value is 500 (account entries) per page, and maximum allowed value is 2000 (account entries) per page.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * By default, the current balance of the user's account will not be returned in the call response. To retrieve the current balance of their account, the user should include the <b>ExcludeBalance</b> flag in the request and set its value to 'false'. The current balance on the account will be shown in the <b>AccountSummary.CurrentBalance</b> field in the call response.
     *
     * @var bool $excludeBalance
     */
    private $excludeBalance = null;

    /**
     * Specifies whether to return account summary information in an
     *  AccountSummary node. Default is true, to return AccountSummary.
     *
     * @var bool $excludeSummary
     */
    private $excludeSummary = null;

    /**
     * Specifies whether to retrieve the rate used for the currency conversion for usage transactions.
     *
     * @var bool $includeConversionRate
     */
    private $includeConversionRate = null;

    /**
     * Include this field and set it to <code>true</code> to retrieve the total net amount of all charges/fees that have been deducted from seller payouts instead of being invoiced to the seller. The total net amount of any seller credits related to these fees is also shown. These fees and credit amounts will be shown in the <b>AccountSummary.NettedTransactionSummary</b> container in the response.
     *
     * @var bool $includeNettedEntries
     */
    private $includeNettedEntries = null;

    /**
     * Specifies how account entries should be sorted in the response, by an
     *  element and then in ascending or descending order.
     *
     * @var string $accountEntrySortType
     */
    private $accountEntrySortType = null;

    /**
     * Specifies the currency used in the account report. Do not specify Currency
     *  in the request unless the following conditions are met. First, the user has
     *  or had multiple accounts under the same UserID. Second, the account
     *  identified in the request uses the currency you specify in the request. An
     *  error is returned if no account is found that uses the currency you specify
     *  in the request.
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Specifies the item ID for which to return account entries. If ItemID is
     *  used, all other filters in the request are ignored. If the specified item
     *  does not exist or if the requesting user is not the seller of the item, an
     *  error is returned.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The unique identifier of an eBay order. This field must be included if the value of the <b>AccountHistorySelection</b> filter is set to <code>OrderId</code>. A user can filter by order ID to see if there are specific account entries related to a specific eBay order.
     *  <br><br>
     *  It is possible that no account entries will be found directly related to the specified order ID, and if this is the case, no <b>AccountEntries</b> container will be returned, and the <b>ack</b> value will still be <code>Success</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetAccount</b> call, will support the identifiers for both unpaid and paid orders.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * Gets as accountHistorySelection
     *
     * Specifies the report format in which to return account entries.
     *
     * @return string
     */
    public function getAccountHistorySelection()
    {
        return $this->accountHistorySelection;
    }

    /**
     * Sets a new accountHistorySelection
     *
     * Specifies the report format in which to return account entries.
     *
     * @param string $accountHistorySelection
     * @return self
     */
    public function setAccountHistorySelection($accountHistorySelection)
    {
        $this->accountHistorySelection = $accountHistorySelection;
        return $this;
    }

    /**
     * Gets as invoiceDate
     *
     * Since <code>SpecifiedInvoice</code> is no longer supported, this field is no longer applicable and should not be used. If this field is included, it will be ignored.
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Sets a new invoiceDate
     *
     * Since <code>SpecifiedInvoice</code> is no longer supported, this field is no longer applicable and should not be used. If this field is included, it will be ignored.
     *
     * @param \DateTime $invoiceDate
     * @return self
     */
    public function setInvoiceDate(\DateTime $invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Gets as beginDate
     *
     * This field is used to retrieve all account entries dating back to the timestamp passed into this <b>BeginDate</b> field up until the timestamp passed into the <b>EndDate</b> field. The <b>BeginDate</b> value can not be set back any further than four months into the past.
     *  <br/><br/>
     *  The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>BeginDate</b> value must be less than or equal to the <b>EndDate</b> value. The user might use the same values in both fields if that user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used).
     *  <br/><br/>
     *  This field is only applicable if the <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. fiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     *
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Sets a new beginDate
     *
     * This field is used to retrieve all account entries dating back to the timestamp passed into this <b>BeginDate</b> field up until the timestamp passed into the <b>EndDate</b> field. The <b>BeginDate</b> value can not be set back any further than four months into the past.
     *  <br/><br/>
     *  The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>BeginDate</b> value must be less than or equal to the <b>EndDate</b> value. The user might use the same values in both fields if that user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used).
     *  <br/><br/>
     *  This field is only applicable if the <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. fiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     *
     * @param \DateTime $beginDate
     * @return self
     */
    public function setBeginDate(\DateTime $beginDate)
    {
        $this->beginDate = $beginDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * This field is used to retrieve all account entries dating up to the timestamp passed into this <b>EndDate</b> field dating back to the timestamp passed into the <b>BeginDate</b> field. The <b>EndDate</b> value can not be set for a future date.
     *  <br/><br/>
     *  The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>EndDate</b> value must be more than or equal to the <b>BeginDate</b> value. The user might use the same values in both fields if that user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used).
     *  <br/><br/>
     *  This field is only applicable if the <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. If 'BetweenSpecifiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * This field is used to retrieve all account entries dating up to the timestamp passed into this <b>EndDate</b> field dating back to the timestamp passed into the <b>BeginDate</b> field. The <b>EndDate</b> value can not be set for a future date.
     *  <br/><br/>
     *  The allowed date formats are <em>YYYY-MM-DD</em> and <em>YYYY-MM-DD HH:mm:ss</em> The <b>EndDate</b> value must be more than or equal to the <b>BeginDate</b> value. The user might use the same values in both fields if that user wanted to retrieve all account entries from a specific day (if <em>YYYY-MM-DD</em> format used) or wanted to retrieve a specific account entry (if <em>YYYY-MM-DD HH:mm:ss</em> format used).
     *  <br/><br/>
     *  This field is only applicable if the <b>AccountHistorySelection</b> value is set to 'BetweenSpecifiedDates'; otherwise, this field will be ignored. If 'BetweenSpecifiedDates' is used, both the <b>BeginDate</b> and <b>EndDate</b> must be included.
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * This container is used to control how many account entries are returned on each page of data in the response. <b>PaginationType</b> is used by numerous Trading API calls, and the default and maximum values for the <b>EntriesPerPage</b> field differs with each call. For the <b>GetAccount</b> call, the default value is 500 (account entries) per page, and maximum allowed value is 2000 (account entries) per page.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * This container is used to control how many account entries are returned on each page of data in the response. <b>PaginationType</b> is used by numerous Trading API calls, and the default and maximum values for the <b>EntriesPerPage</b> field differs with each call. For the <b>GetAccount</b> call, the default value is 500 (account entries) per page, and maximum allowed value is 2000 (account entries) per page.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * Gets as excludeBalance
     *
     * By default, the current balance of the user's account will not be returned in the call response. To retrieve the current balance of their account, the user should include the <b>ExcludeBalance</b> flag in the request and set its value to 'false'. The current balance on the account will be shown in the <b>AccountSummary.CurrentBalance</b> field in the call response.
     *
     * @return bool
     */
    public function getExcludeBalance()
    {
        return $this->excludeBalance;
    }

    /**
     * Sets a new excludeBalance
     *
     * By default, the current balance of the user's account will not be returned in the call response. To retrieve the current balance of their account, the user should include the <b>ExcludeBalance</b> flag in the request and set its value to 'false'. The current balance on the account will be shown in the <b>AccountSummary.CurrentBalance</b> field in the call response.
     *
     * @param bool $excludeBalance
     * @return self
     */
    public function setExcludeBalance($excludeBalance)
    {
        $this->excludeBalance = $excludeBalance;
        return $this;
    }

    /**
     * Gets as excludeSummary
     *
     * Specifies whether to return account summary information in an
     *  AccountSummary node. Default is true, to return AccountSummary.
     *
     * @return bool
     */
    public function getExcludeSummary()
    {
        return $this->excludeSummary;
    }

    /**
     * Sets a new excludeSummary
     *
     * Specifies whether to return account summary information in an
     *  AccountSummary node. Default is true, to return AccountSummary.
     *
     * @param bool $excludeSummary
     * @return self
     */
    public function setExcludeSummary($excludeSummary)
    {
        $this->excludeSummary = $excludeSummary;
        return $this;
    }

    /**
     * Gets as includeConversionRate
     *
     * Specifies whether to retrieve the rate used for the currency conversion for usage transactions.
     *
     * @return bool
     */
    public function getIncludeConversionRate()
    {
        return $this->includeConversionRate;
    }

    /**
     * Sets a new includeConversionRate
     *
     * Specifies whether to retrieve the rate used for the currency conversion for usage transactions.
     *
     * @param bool $includeConversionRate
     * @return self
     */
    public function setIncludeConversionRate($includeConversionRate)
    {
        $this->includeConversionRate = $includeConversionRate;
        return $this;
    }

    /**
     * Gets as includeNettedEntries
     *
     * Include this field and set it to <code>true</code> to retrieve the total net amount of all charges/fees that have been deducted from seller payouts instead of being invoiced to the seller. The total net amount of any seller credits related to these fees is also shown. These fees and credit amounts will be shown in the <b>AccountSummary.NettedTransactionSummary</b> container in the response.
     *
     * @return bool
     */
    public function getIncludeNettedEntries()
    {
        return $this->includeNettedEntries;
    }

    /**
     * Sets a new includeNettedEntries
     *
     * Include this field and set it to <code>true</code> to retrieve the total net amount of all charges/fees that have been deducted from seller payouts instead of being invoiced to the seller. The total net amount of any seller credits related to these fees is also shown. These fees and credit amounts will be shown in the <b>AccountSummary.NettedTransactionSummary</b> container in the response.
     *
     * @param bool $includeNettedEntries
     * @return self
     */
    public function setIncludeNettedEntries($includeNettedEntries)
    {
        $this->includeNettedEntries = $includeNettedEntries;
        return $this;
    }

    /**
     * Gets as accountEntrySortType
     *
     * Specifies how account entries should be sorted in the response, by an
     *  element and then in ascending or descending order.
     *
     * @return string
     */
    public function getAccountEntrySortType()
    {
        return $this->accountEntrySortType;
    }

    /**
     * Sets a new accountEntrySortType
     *
     * Specifies how account entries should be sorted in the response, by an
     *  element and then in ascending or descending order.
     *
     * @param string $accountEntrySortType
     * @return self
     */
    public function setAccountEntrySortType($accountEntrySortType)
    {
        $this->accountEntrySortType = $accountEntrySortType;
        return $this;
    }

    /**
     * Gets as currency
     *
     * Specifies the currency used in the account report. Do not specify Currency
     *  in the request unless the following conditions are met. First, the user has
     *  or had multiple accounts under the same UserID. Second, the account
     *  identified in the request uses the currency you specify in the request. An
     *  error is returned if no account is found that uses the currency you specify
     *  in the request.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Specifies the currency used in the account report. Do not specify Currency
     *  in the request unless the following conditions are met. First, the user has
     *  or had multiple accounts under the same UserID. Second, the account
     *  identified in the request uses the currency you specify in the request. An
     *  error is returned if no account is found that uses the currency you specify
     *  in the request.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Specifies the item ID for which to return account entries. If ItemID is
     *  used, all other filters in the request are ignored. If the specified item
     *  does not exist or if the requesting user is not the seller of the item, an
     *  error is returned.
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
     * Specifies the item ID for which to return account entries. If ItemID is
     *  used, all other filters in the request are ignored. If the specified item
     *  does not exist or if the requesting user is not the seller of the item, an
     *  error is returned.
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
     * Gets as orderID
     *
     * The unique identifier of an eBay order. This field must be included if the value of the <b>AccountHistorySelection</b> filter is set to <code>OrderId</code>. A user can filter by order ID to see if there are specific account entries related to a specific eBay order.
     *  <br><br>
     *  It is possible that no account entries will be found directly related to the specified order ID, and if this is the case, no <b>AccountEntries</b> container will be returned, and the <b>ack</b> value will still be <code>Success</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetAccount</b> call, will support the identifiers for both unpaid and paid orders.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
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
     * The unique identifier of an eBay order. This field must be included if the value of the <b>AccountHistorySelection</b> filter is set to <code>OrderId</code>. A user can filter by order ID to see if there are specific account entries related to a specific eBay order.
     *  <br><br>
     *  It is possible that no account entries will be found directly related to the specified order ID, and if this is the case, no <b>AccountEntries</b> container will be returned, and the <b>ack</b> value will still be <code>Success</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetAccount</b> call, will support the identifiers for both unpaid and paid orders.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->accountHistorySelection;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AccountHistorySelection', null, (string) $value);
        }
        $value = $this->invoiceDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'InvoiceDate', null, Func::formatDateTime($value));
        }
        $value = $this->beginDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BeginDate', null, Func::formatDateTime($value));
        }
        $value = $this->endDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndDate', null, Func::formatDateTime($value));
        }
        $value = $this->pagination;
        if (null !== $value) {
            $writer->startElementNs(null, 'Pagination', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->excludeBalance;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExcludeBalance', null, ($value ? 'true' : 'false'));
        }
        $value = $this->excludeSummary;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExcludeSummary', null, ($value ? 'true' : 'false'));
        }
        $value = $this->includeConversionRate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeConversionRate', null, ($value ? 'true' : 'false'));
        }
        $value = $this->includeNettedEntries;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeNettedEntries', null, ($value ? 'true' : 'false'));
        }
        $value = $this->accountEntrySortType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AccountEntrySortType', null, (string) $value);
        }
        $value = $this->currency;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Currency', null, (string) $value);
        }
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->orderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetAccountRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'AccountHistorySelection':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->accountHistorySelection = $value;
                    }
                    return true;
                case 'InvoiceDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->invoiceDate = new \DateTime($value);
                    }
                    return true;
                case 'BeginDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->beginDate = new \DateTime($value);
                    }
                    return true;
                case 'EndDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endDate = new \DateTime($value);
                    }
                    return true;
                case 'Pagination':
                    $this->pagination = \Nogrod\eBaySDK\Trading\PaginationType::xmlRead($reader);
                    return true;
                case 'ExcludeBalance':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->excludeBalance = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ExcludeSummary':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->excludeSummary = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'IncludeConversionRate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeConversionRate = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'IncludeNettedEntries':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeNettedEntries = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'AccountEntrySortType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->accountEntrySortType = $value;
                    }
                    return true;
                case 'Currency':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->currency = $value;
                    }
                    return true;
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'OrderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderID = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
