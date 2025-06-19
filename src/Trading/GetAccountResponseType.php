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
     * @return \Nogrod\eBaySDK\Trading\AccountEntryType[]
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
     * @param \Nogrod\eBaySDK\Trading\AccountEntryType[] $accountEntries
     * @return self
     */
    public function setAccountEntries(array $accountEntries)
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getAccountID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AccountID", $value);
        }
        $value = $this->getFeeNettingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeNettingStatus", $value);
        }
        $value = $this->getAccountSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AccountSummary", $value);
        }
        $value = $this->getCurrency();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Currency", $value);
        }
        $value = $this->getAccountEntries();
        if (null !== $value && [] !== $this->getAccountEntries()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AccountEntries", array_map(function ($v) {return ["AccountEntry" => $v];}, $value));
        }
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
        }
        $value = $this->getHasMoreEntries();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasMoreEntries", $value);
        }
        $value = $this->getEntriesPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EntriesPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetAccountResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountID');
        if (null !== $value) {
            $this->setAccountID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeNettingStatus');
        if (null !== $value) {
            $this->setFeeNettingStatus($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountSummary');
        if (null !== $value) {
            $this->setAccountSummary(\Nogrod\eBaySDK\Trading\AccountSummaryType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Currency');
        if (null !== $value) {
            $this->setCurrency($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountEntries');
        if (null !== $value) {
            $this->setAccountEntries(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\AccountEntryType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}AccountEntry'));}, $value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasMoreEntries');
        if (null !== $value) {
            $this->setHasMoreEntries(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EntriesPerPage');
        if (null !== $value) {
            $this->setEntriesPerPage($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
    }
}
