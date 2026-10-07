<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetAccountResponseType
 *
 * Returns information about an eBay seller's own account.
 * XSD Type: GetAccountResponseType
 */
class GetAccountResponseType extends AbstractResponseType
{
    /**
     * Specifies the seller's unique account number.
     *
     * @var string $accountID
     */
    private $accountID = null;

    /**
     * This enumeration value indicates the current status of the seller's account for the fee netting mechanism. If the <code>Enabled</code> value is returned, the seller may include the <b>IncludeNettedEntries</b> field in the request to retrieve the total net amount of all charges/fees that have been deducted from seller payouts instead of being invoiced to the seller. The total net amount of any seller credits related to these fees is also shown in the <b>AccountSummary.NettedTransactionSummary</b> container in the response.
     *
     * @var string $feeNettingStatus
     */
    private $feeNettingStatus = null;

    /**
     * Contains summary data for the seller's account, such as the overall
     *  balance, bank account and credit card information, and amount and
     *  date of any past due balances. Can also contain data for
     *  one or more additional accounts, if the user has changed country
     *  of residence.
     *
     * @var \Nogrod\eBaySDK\Trading\AccountSummaryType $accountSummary
     */
    private $accountSummary = null;

    /**
     * Indicates the currency used for monetary amounts in the report.
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b> container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if <code>LastInvoice</code> value is used), between the specified dates (if <code>BetweenSpecifiedDates</code> value is used), or no entries exist for an order (if <code>OrderId</code> value is used).
     *
     * @var \Nogrod\eBaySDK\Trading\AccountEntryType[] $accountEntries
     */
    private $accountEntries = null;

    /**
     * This container shows the total number of account entries and the total number of account entry pages that exist based on the filters used in the <b>GetAccount</b> call request. The total number of account entry pages is partly controlled by the <b>Pagination.EntriesPerPage</b> value that is set in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * If this boolean value is returned as 'true', there are more account entries to view on one or more pages of data. To view additional entries, the user would have to make additional <b>GetAccount</b> calls and increment the value of the <b>Pagination.PageNumber</b> field by '1' to view additional pages of account entries.
     *
     * @var bool $hasMoreEntries
     */
    private $hasMoreEntries = null;

    /**
     * This integer value indicates the number of account entries that are being returned per virtual page of data. This value will be the same value passed into the <b>Pagination.EntriesPerPage</b> field in the request.
     *
     * @var int $entriesPerPage
     */
    private $entriesPerPage = null;

    /**
     * This integer value indicates the current page number of account entries that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * Gets as accountID
     *
     * Specifies the seller's unique account number.
     *
     * @return string
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * Specifies the seller's unique account number.
     *
     * @param string $accountID
     * @return self
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }

    /**
     * Gets as feeNettingStatus
     *
     * This enumeration value indicates the current status of the seller's account for the fee netting mechanism. If the <code>Enabled</code> value is returned, the seller may include the <b>IncludeNettedEntries</b> field in the request to retrieve the total net amount of all charges/fees that have been deducted from seller payouts instead of being invoiced to the seller. The total net amount of any seller credits related to these fees is also shown in the <b>AccountSummary.NettedTransactionSummary</b> container in the response.
     *
     * @return string
     */
    public function getFeeNettingStatus()
    {
        return $this->feeNettingStatus;
    }

    /**
     * Sets a new feeNettingStatus
     *
     * This enumeration value indicates the current status of the seller's account for the fee netting mechanism. If the <code>Enabled</code> value is returned, the seller may include the <b>IncludeNettedEntries</b> field in the request to retrieve the total net amount of all charges/fees that have been deducted from seller payouts instead of being invoiced to the seller. The total net amount of any seller credits related to these fees is also shown in the <b>AccountSummary.NettedTransactionSummary</b> container in the response.
     *
     * @param string $feeNettingStatus
     * @return self
     */
    public function setFeeNettingStatus($feeNettingStatus)
    {
        $this->feeNettingStatus = $feeNettingStatus;
        return $this;
    }

    /**
     * Gets as accountSummary
     *
     * Contains summary data for the seller's account, such as the overall
     *  balance, bank account and credit card information, and amount and
     *  date of any past due balances. Can also contain data for
     *  one or more additional accounts, if the user has changed country
     *  of residence.
     *
     * @return \Nogrod\eBaySDK\Trading\AccountSummaryType
     */
    public function getAccountSummary()
    {
        return $this->accountSummary;
    }

    /**
     * Sets a new accountSummary
     *
     * Contains summary data for the seller's account, such as the overall
     *  balance, bank account and credit card information, and amount and
     *  date of any past due balances. Can also contain data for
     *  one or more additional accounts, if the user has changed country
     *  of residence.
     *
     * @param \Nogrod\eBaySDK\Trading\AccountSummaryType $accountSummary
     * @return self
     */
    public function setAccountSummary(\Nogrod\eBaySDK\Trading\AccountSummaryType $accountSummary)
    {
        $this->accountSummary = $accountSummary;
        return $this;
    }

    /**
     * Gets as currency
     *
     * Indicates the currency used for monetary amounts in the report.
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
     * Indicates the currency used for monetary amounts in the report.
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
     * Adds as accountEntry
     *
     * This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b> container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if <code>LastInvoice</code> value is used), between the specified dates (if <code>BetweenSpecifiedDates</code> value is used), or no entries exist for an order (if <code>OrderId</code> value is used).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AccountEntryType $accountEntry
     */
    public function addToAccountEntries(\Nogrod\eBaySDK\Trading\AccountEntryType $accountEntry)
    {
        if (!is_array($this->accountEntries)) {
            throw new \LogicException('accountEntries is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->accountEntries[] = $accountEntry;
        return $this;
    }

    /**
     * isset accountEntries
     *
     * This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b> container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if <code>LastInvoice</code> value is used), between the specified dates (if <code>BetweenSpecifiedDates</code> value is used), or no entries exist for an order (if <code>OrderId</code> value is used).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountEntries($index)
    {
        return isset($this->accountEntries[$index]);
    }

    /**
     * unset accountEntries
     *
     * This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b> container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if <code>LastInvoice</code> value is used), between the specified dates (if <code>BetweenSpecifiedDates</code> value is used), or no entries exist for an order (if <code>OrderId</code> value is used).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountEntries($index)
    {
        unset($this->accountEntries[$index]);
    }

    /**
     * Gets as accountEntries
     *
     * This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b> container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if <code>LastInvoice</code> value is used), between the specified dates (if <code>BetweenSpecifiedDates</code> value is used), or no entries exist for an order (if <code>OrderId</code> value is used).
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AccountEntryType>
     */
    public function getAccountEntries()
    {
        return $this->accountEntries;
    }

    /**
     * Sets a new accountEntries
     *
     * This container holds an array of account entries. The account entries that are returned are dependent on the selection that the user made in the <b>AccountHistorySelection</b> field in the call request. Each <b>AccountEntry</b> container consists of one credit, one debit, or one administrative action on the account. It is possible that no <b>AccountEntry</b> containers will be returned if no account entries exist since the last invoice (if <code>LastInvoice</code> value is used), between the specified dates (if <code>BetweenSpecifiedDates</code> value is used), or no entries exist for an order (if <code>OrderId</code> value is used).
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AccountEntryType> $accountEntries
     * @return self
     */
    public function setAccountEntries(iterable $accountEntries)
    {
        $this->accountEntries = $accountEntries;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * This container shows the total number of account entries and the total number of account entry pages that exist based on the filters used in the <b>GetAccount</b> call request. The total number of account entry pages is partly controlled by the <b>Pagination.EntriesPerPage</b> value that is set in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationResultType
     */
    public function getPaginationResult()
    {
        return $this->paginationResult;
    }

    /**
     * Sets a new paginationResult
     *
     * This container shows the total number of account entries and the total number of account entry pages that exist based on the filters used in the <b>GetAccount</b> call request. The total number of account entry pages is partly controlled by the <b>Pagination.EntriesPerPage</b> value that is set in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    /**
     * Gets as hasMoreEntries
     *
     * If this boolean value is returned as 'true', there are more account entries to view on one or more pages of data. To view additional entries, the user would have to make additional <b>GetAccount</b> calls and increment the value of the <b>Pagination.PageNumber</b> field by '1' to view additional pages of account entries.
     *
     * @return bool
     */
    public function getHasMoreEntries()
    {
        return $this->hasMoreEntries;
    }

    /**
     * Sets a new hasMoreEntries
     *
     * If this boolean value is returned as 'true', there are more account entries to view on one or more pages of data. To view additional entries, the user would have to make additional <b>GetAccount</b> calls and increment the value of the <b>Pagination.PageNumber</b> field by '1' to view additional pages of account entries.
     *
     * @param bool $hasMoreEntries
     * @return self
     */
    public function setHasMoreEntries($hasMoreEntries)
    {
        $this->hasMoreEntries = $hasMoreEntries;
        return $this;
    }

    /**
     * Gets as entriesPerPage
     *
     * This integer value indicates the number of account entries that are being returned per virtual page of data. This value will be the same value passed into the <b>Pagination.EntriesPerPage</b> field in the request.
     *
     * @return int
     */
    public function getEntriesPerPage()
    {
        return $this->entriesPerPage;
    }

    /**
     * Sets a new entriesPerPage
     *
     * This integer value indicates the number of account entries that are being returned per virtual page of data. This value will be the same value passed into the <b>Pagination.EntriesPerPage</b> field in the request.
     *
     * @param int $entriesPerPage
     * @return self
     */
    public function setEntriesPerPage($entriesPerPage)
    {
        $this->entriesPerPage = $entriesPerPage;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * This integer value indicates the current page number of account entries that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Sets a new pageNumber
     *
     * This integer value indicates the current page number of account entries that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->accountID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AccountID', null, (string) $value);
        }
        $value = $this->feeNettingStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FeeNettingStatus', null, (string) $value);
        }
        $value = $this->accountSummary;
        if (null !== $value) {
            $writer->startElementNs(null, 'AccountSummary', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->currency;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Currency', null, (string) $value);
        }
        $value = $this->accountEntries;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'AccountEntries', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'AccountEntry', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->paginationResult;
        if (null !== $value) {
            $writer->startElementNs(null, 'PaginationResult', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->hasMoreEntries;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HasMoreEntries', null, ($value ? 'true' : 'false'));
        }
        $value = $this->entriesPerPage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EntriesPerPage', null, (string) $value);
        }
        $value = $this->pageNumber;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PageNumber', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetAccountResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->accountEntries = [];
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
                case 'AccountID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->accountID = $value;
                    }
                    return true;
                case 'FeeNettingStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->feeNettingStatus = $value;
                    }
                    return true;
                case 'AccountSummary':
                    $this->accountSummary = \Nogrod\eBaySDK\Trading\AccountSummaryType::xmlRead($reader);
                    return true;
                case 'Currency':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->currency = $value;
                    }
                    return true;
                case 'AccountEntries':
                    $this->accountEntries = Func::readList($reader, 'AccountEntry', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\AccountEntryType::xmlRead($reader));
                    return true;
                case 'PaginationResult':
                    $this->paginationResult = \Nogrod\eBaySDK\Trading\PaginationResultType::xmlRead($reader);
                    return true;
                case 'HasMoreEntries':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hasMoreEntries = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'EntriesPerPage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->entriesPerPage = (int) $value;
                    }
                    return true;
                case 'PageNumber':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pageNumber = (int) $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['AccountID'] = $this->accountID;
        $data['FeeNettingStatus'] = $this->feeNettingStatus;
        $data['AccountSummary'] = $this->accountSummary;
        $data['Currency'] = $this->currency;
        $data['AccountEntries'] = Func::jsonList($this->accountEntries);
        $data['PaginationResult'] = $this->paginationResult;
        $data['HasMoreEntries'] = $this->hasMoreEntries;
        $data['EntriesPerPage'] = $this->entriesPerPage;
        $data['PageNumber'] = $this->pageNumber;
        return $data;
    }
}
