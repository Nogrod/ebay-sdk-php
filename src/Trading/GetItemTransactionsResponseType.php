<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemTransactionsResponseType
 *
 * Returns an array of order line item data for the item specified in the request.
 *  The results can be used to create a report of data that is commonly
 *  necessary for order processing.
 *  Zero, one, or many <b>Transaction</b> objects can be returned in the <b>TransactionArray</b>.
 *  The set of order line items returned is limited to those that were modified between
 *  the times specified in the request's <b>ModTimeFrom</b> and <b>ModTime</b> filters.
 *  Also returns the <b>Item</b> object that spawned the order line items.
 *  If pagination filters were specified in the request, returns meta-data describing
 *  the effects of those filters on the current response and the estimated effects if
 *  the same filters are used in subsequent calls.
 *  <br><br>
 *  Data from the <b>TransactionArray</b> may be used to trigger the following Platform Notifications: <b>EndOfAuction</b>, <b>AuctionCheckoutComplete</b>, <b>FixedPriceTransaction</b>, <b>CheckoutBuyerRequestsTotal</b>, <b>ItemMarkedShipped</b>, and <b>ItemMarkedPaid</b>. Each notification will be based on the state of the item (a 'snapshot' of the item) at the time the order line item was created.
 * XSD Type: GetItemTransactionsResponseType
 */
class GetItemTransactionsResponseType extends AbstractResponseType
{
    /**
     * Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number
     *  of entries (<b>TotalNumberOfEntries</b>) that could be returned given repeated calls
     *  that use the same selection criteria as the call that returned this response.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Indicates whether there are additional order line items to retrieve.
     *  That is, indicates whether more pages of data are available to be
     *  returned, given the filters that were specified in the request.
     *  Returns false for the last page of data.
     *
     * @var bool $hasMoreTransactions
     */
    private $hasMoreTransactions = null;

    /**
     * Number of order line items returned per page (per call). May be a higher value
     *  than <b>ReturnedTransactionCountActual</b> if the page returned is the last page
     *  and more than one page of data exists.
     *
     * @var int $transactionsPerPage
     */
    private $transactionsPerPage = null;

    /**
     * Page number for the page of order line items the response returned.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * Number of order line items retrieved in the current page of results just returned.
     *  May be a lower value than <b>TransactionsPerPage</b> if the page returned is the last
     *  page and more than one page of data exists.
     *
     * @var int $returnedTransactionCountActual
     */
    private $returnedTransactionCountActual = null;

    /**
     * <b>Item</b> object that spawned the order line item. It is a purchase from this item's listing
     *  that the order line item represents.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * List of <b>Transaction</b> objects representing the order line items resulting
     *  from the listing. Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing). The <b>Transaction.Item</b> field is not
     *  returned because the <b>Item</b> object is returned at the root level of the response.
     *  See the reference guide for more information about the fields that are returned.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetItemTransactions</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetItemTransactions</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;TransactionArray/&gt;</code>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionType[] $transactionArray
     */
    private $transactionArray = null;

    /**
     * Gets as paginationResult
     *
     * Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number
     *  of entries (<b>TotalNumberOfEntries</b>) that could be returned given repeated calls
     *  that use the same selection criteria as the call that returned this response.
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
     * Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number
     *  of entries (<b>TotalNumberOfEntries</b>) that could be returned given repeated calls
     *  that use the same selection criteria as the call that returned this response.
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
     * Gets as hasMoreTransactions
     *
     * Indicates whether there are additional order line items to retrieve.
     *  That is, indicates whether more pages of data are available to be
     *  returned, given the filters that were specified in the request.
     *  Returns false for the last page of data.
     *
     * @return bool
     */
    public function getHasMoreTransactions()
    {
        return $this->hasMoreTransactions;
    }

    /**
     * Sets a new hasMoreTransactions
     *
     * Indicates whether there are additional order line items to retrieve.
     *  That is, indicates whether more pages of data are available to be
     *  returned, given the filters that were specified in the request.
     *  Returns false for the last page of data.
     *
     * @param bool $hasMoreTransactions
     * @return self
     */
    public function setHasMoreTransactions($hasMoreTransactions)
    {
        $this->hasMoreTransactions = $hasMoreTransactions;
        return $this;
    }

    /**
     * Gets as transactionsPerPage
     *
     * Number of order line items returned per page (per call). May be a higher value
     *  than <b>ReturnedTransactionCountActual</b> if the page returned is the last page
     *  and more than one page of data exists.
     *
     * @return int
     */
    public function getTransactionsPerPage()
    {
        return $this->transactionsPerPage;
    }

    /**
     * Sets a new transactionsPerPage
     *
     * Number of order line items returned per page (per call). May be a higher value
     *  than <b>ReturnedTransactionCountActual</b> if the page returned is the last page
     *  and more than one page of data exists.
     *
     * @param int $transactionsPerPage
     * @return self
     */
    public function setTransactionsPerPage($transactionsPerPage)
    {
        $this->transactionsPerPage = $transactionsPerPage;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * Page number for the page of order line items the response returned.
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
     * Page number for the page of order line items the response returned.
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * Gets as returnedTransactionCountActual
     *
     * Number of order line items retrieved in the current page of results just returned.
     *  May be a lower value than <b>TransactionsPerPage</b> if the page returned is the last
     *  page and more than one page of data exists.
     *
     * @return int
     */
    public function getReturnedTransactionCountActual()
    {
        return $this->returnedTransactionCountActual;
    }

    /**
     * Sets a new returnedTransactionCountActual
     *
     * Number of order line items retrieved in the current page of results just returned.
     *  May be a lower value than <b>TransactionsPerPage</b> if the page returned is the last
     *  page and more than one page of data exists.
     *
     * @param int $returnedTransactionCountActual
     * @return self
     */
    public function setReturnedTransactionCountActual($returnedTransactionCountActual)
    {
        $this->returnedTransactionCountActual = $returnedTransactionCountActual;
        return $this;
    }

    /**
     * Gets as item
     *
     * <b>Item</b> object that spawned the order line item. It is a purchase from this item's listing
     *  that the order line item represents.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * <b>Item</b> object that spawned the order line item. It is a purchase from this item's listing
     *  that the order line item represents.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as transaction
     *
     * List of <b>Transaction</b> objects representing the order line items resulting
     *  from the listing. Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing). The <b>Transaction.Item</b> field is not
     *  returned because the <b>Item</b> object is returned at the root level of the response.
     *  See the reference guide for more information about the fields that are returned.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetItemTransactions</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetItemTransactions</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;TransactionArray/&gt;</code>.
     *  </span>
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
     * List of <b>Transaction</b> objects representing the order line items resulting
     *  from the listing. Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing). The <b>Transaction.Item</b> field is not
     *  returned because the <b>Item</b> object is returned at the root level of the response.
     *  See the reference guide for more information about the fields that are returned.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetItemTransactions</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetItemTransactions</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;TransactionArray/&gt;</code>.
     *  </span>
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
     * List of <b>Transaction</b> objects representing the order line items resulting
     *  from the listing. Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing). The <b>Transaction.Item</b> field is not
     *  returned because the <b>Item</b> object is returned at the root level of the response.
     *  See the reference guide for more information about the fields that are returned.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetItemTransactions</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetItemTransactions</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;TransactionArray/&gt;</code>.
     *  </span>
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
     * List of <b>Transaction</b> objects representing the order line items resulting
     *  from the listing. Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing). The <b>Transaction.Item</b> field is not
     *  returned because the <b>Item</b> object is returned at the root level of the response.
     *  See the reference guide for more information about the fields that are returned.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetItemTransactions</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetItemTransactions</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;TransactionArray/&gt;</code>.
     *  </span>
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
     * List of <b>Transaction</b> objects representing the order line items resulting
     *  from the listing. Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing). The <b>Transaction.Item</b> field is not
     *  returned because the <b>Item</b> object is returned at the root level of the response.
     *  See the reference guide for more information about the fields that are returned.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetItemTransactions</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetItemTransactions</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;TransactionArray/&gt;</code>.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionType[] $transactionArray
     * @return self
     */
    public function setTransactionArray(array $transactionArray)
    {
        $this->transactionArray = $transactionArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
        }
        $value = $this->getHasMoreTransactions();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasMoreTransactions", $value);
        }
        $value = $this->getTransactionsPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionsPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getReturnedTransactionCountActual();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnedTransactionCountActual", $value);
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getTransactionArray();
        if (null !== $value && [] !== $this->getTransactionArray()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionArray", array_map(function ($v) {return ["Transaction" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetItemTransactionsResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasMoreTransactions');
        if (null !== $value) {
            $this->setHasMoreTransactions(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionsPerPage');
        if (null !== $value) {
            $this->setTransactionsPerPage($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnedTransactionCountActual');
        if (null !== $value) {
            $this->setReturnedTransactionCountActual($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionArray');
        if (null !== $value) {
            $this->setTransactionArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TransactionType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Transaction'));}, $value));
        }
    }
}
