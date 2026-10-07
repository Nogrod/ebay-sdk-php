<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerTransactionsResponseType
 *
 * Returns an array of order line item (transaction) data for the seller specified in the request. The results can be used to create a report of data that is commonly necessary for order processing. <br/><br/> Zero, one, or many <b>Transaction</b> objects can be returned in the <b>TransactionArray</b>. The set of order line items returned is limited to those that were modified between the times specified in the request's <b>ModTimeFrom</b> and <b>ModTimeTo</b> filters. The order line items returned are sorted by <b>Transaction.Status.LastTimeModified</b>, ascending order (that is, order line items that more recently were modified are returned last). This call also returns information about the seller whose order line items were requested. <br/><br/> If pagination filters were specified in the request, returns meta-data describing the effects of those filters on the current response and the estimated effects if the same filters are used in subsequent calls.
 * XSD Type: GetSellerTransactionsResponseType
 */
class GetSellerTransactionsResponseType extends AbstractResponseType
{
    /**
     * Container consisting of the total number of order line items that match the input criteria and the total number of pages that must be scrolled through to view all order line items. To scroll through each page of order line item data, make subsequent <b>GetSellerTransactions</b> calls, incrementing the <b>Pagination.PageNumber</b> field by a value of '1' each time.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * This flag indicates whether there are additional pages of order line items to view. This field will be returned as <code>true</code> if there are additional pages or order line items to <code>view</code>, or <code>false</code> if the current page of order line item data is the last page of data.
     *
     * @var bool $hasMoreTransactions
     */
    private $hasMoreTransactions = null;

    /**
     * This value indicates the number of order line items returned per page (per call) and is controlled by the <b>Pagination.EntriesPerPage</b> value passed in the call request. Unless it is the last (or possibly only) page of data (<b>HasMoreTransactions=false</b>), the <b>TransactionsPerPage</b> value should equal the <b>Pagination.EntriesPerPage</b> value passed in the call request. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
     *
     * @var int $transactionsPerPage
     */
    private $transactionsPerPage = null;

    /**
     * This value indicates the page number of retrieved order line items that match the input criteria. This value is controlled by the <b>Pagination.PageNumber</b> value passed in the call request. To scroll through all pages of order line items that match the input criteria, you increment the <b>Pagination.PageNumber</b> value by <code>1</code> with each subsequent <b>GetSellerTransactions</b> call.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * This value indicates the total number of (non-empty) order line items retrieved in the current page of results. The <b>ReturnedTransactionCountActual</b> value will be lower than the <b>TransactionsPerPage</b> value if one or more empty order line items are retrieved on the page. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no order line item data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
     *
     * @var int $returnedTransactionCountActual
     */
    private $returnedTransactionCountActual = null;

    /**
     * Contains information about the seller whose order line items are being returned.
     *  See the reference guide for information about the <b>Seller</b> object fields
     *  that are returned.
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $seller
     */
    private $seller = null;

    /**
     * List of <b>Transaction</b> objects representing the seller's recent sales.
     *  Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing).
     *  See the reference guide for more information about the fields that are returned
     *  for each order line item.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionType[] $transactionArray
     */
    private $transactionArray = null;

    /**
     * Gets as paginationResult
     *
     * Container consisting of the total number of order line items that match the input criteria and the total number of pages that must be scrolled through to view all order line items. To scroll through each page of order line item data, make subsequent <b>GetSellerTransactions</b> calls, incrementing the <b>Pagination.PageNumber</b> field by a value of '1' each time.
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
     * Container consisting of the total number of order line items that match the input criteria and the total number of pages that must be scrolled through to view all order line items. To scroll through each page of order line item data, make subsequent <b>GetSellerTransactions</b> calls, incrementing the <b>Pagination.PageNumber</b> field by a value of '1' each time.
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
     * This flag indicates whether there are additional pages of order line items to view. This field will be returned as <code>true</code> if there are additional pages or order line items to <code>view</code>, or <code>false</code> if the current page of order line item data is the last page of data.
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
     * This flag indicates whether there are additional pages of order line items to view. This field will be returned as <code>true</code> if there are additional pages or order line items to <code>view</code>, or <code>false</code> if the current page of order line item data is the last page of data.
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
     * This value indicates the number of order line items returned per page (per call) and is controlled by the <b>Pagination.EntriesPerPage</b> value passed in the call request. Unless it is the last (or possibly only) page of data (<b>HasMoreTransactions=false</b>), the <b>TransactionsPerPage</b> value should equal the <b>Pagination.EntriesPerPage</b> value passed in the call request. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
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
     * This value indicates the number of order line items returned per page (per call) and is controlled by the <b>Pagination.EntriesPerPage</b> value passed in the call request. Unless it is the last (or possibly only) page of data (<b>HasMoreTransactions=false</b>), the <b>TransactionsPerPage</b> value should equal the <b>Pagination.EntriesPerPage</b> value passed in the call request. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
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
     * This value indicates the page number of retrieved order line items that match the input criteria. This value is controlled by the <b>Pagination.PageNumber</b> value passed in the call request. To scroll through all pages of order line items that match the input criteria, you increment the <b>Pagination.PageNumber</b> value by <code>1</code> with each subsequent <b>GetSellerTransactions</b> call.
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
     * This value indicates the page number of retrieved order line items that match the input criteria. This value is controlled by the <b>Pagination.PageNumber</b> value passed in the call request. To scroll through all pages of order line items that match the input criteria, you increment the <b>Pagination.PageNumber</b> value by <code>1</code> with each subsequent <b>GetSellerTransactions</b> call.
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
     * This value indicates the total number of (non-empty) order line items retrieved in the current page of results. The <b>ReturnedTransactionCountActual</b> value will be lower than the <b>TransactionsPerPage</b> value if one or more empty order line items are retrieved on the page. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no order line item data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
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
     * This value indicates the total number of (non-empty) order line items retrieved in the current page of results. The <b>ReturnedTransactionCountActual</b> value will be lower than the <b>TransactionsPerPage</b> value if one or more empty order line items are retrieved on the page. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no order line item data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
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
     * Gets as seller
     *
     * Contains information about the seller whose order line items are being returned.
     *  See the reference guide for information about the <b>Seller</b> object fields
     *  that are returned.
     *
     * @return \Nogrod\eBaySDK\Trading\UserType
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Sets a new seller
     *
     * Contains information about the seller whose order line items are being returned.
     *  See the reference guide for information about the <b>Seller</b> object fields
     *  that are returned.
     *
     * @param \Nogrod\eBaySDK\Trading\UserType $seller
     * @return self
     */
    public function setSeller(\Nogrod\eBaySDK\Trading\UserType $seller)
    {
        $this->seller = $seller;
        return $this;
    }

    /**
     * Adds as transaction
     *
     * List of <b>Transaction</b> objects representing the seller's recent sales.
     *  Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing).
     *  See the reference guide for more information about the fields that are returned
     *  for each order line item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TransactionType $transaction
     */
    public function addToTransactionArray(\Nogrod\eBaySDK\Trading\TransactionType $transaction)
    {
        if (!is_array($this->transactionArray)) {
            throw new \LogicException('transactionArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->transactionArray[] = $transaction;
        return $this;
    }

    /**
     * isset transactionArray
     *
     * List of <b>Transaction</b> objects representing the seller's recent sales.
     *  Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing).
     *  See the reference guide for more information about the fields that are returned
     *  for each order line item.
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
     * List of <b>Transaction</b> objects representing the seller's recent sales.
     *  Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing).
     *  See the reference guide for more information about the fields that are returned
     *  for each order line item.
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
     * List of <b>Transaction</b> objects representing the seller's recent sales.
     *  Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing).
     *  See the reference guide for more information about the fields that are returned
     *  for each order line item.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\TransactionType>
     */
    public function getTransactionArray()
    {
        return $this->transactionArray;
    }

    /**
     * Sets a new transactionArray
     *
     * List of <b>Transaction</b> objects representing the seller's recent sales.
     *  Each <b>Transaction</b> object contains the data for one purchase
     *  (of one or more items in the same listing).
     *  See the reference guide for more information about the fields that are returned
     *  for each order line item.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\TransactionType> $transactionArray
     * @return self
     */
    public function setTransactionArray(iterable $transactionArray)
    {
        $this->transactionArray = $transactionArray;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->paginationResult;
        if (null !== $value) {
            $writer->startElementNs(null, 'PaginationResult', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->hasMoreTransactions;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HasMoreTransactions', null, ($value ? 'true' : 'false'));
        }
        $value = $this->transactionsPerPage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionsPerPage', null, (string) $value);
        }
        $value = $this->pageNumber;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PageNumber', null, (string) $value);
        }
        $value = $this->returnedTransactionCountActual;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReturnedTransactionCountActual', null, (string) $value);
        }
        $value = $this->seller;
        if (null !== $value) {
            $writer->startElementNs(null, 'Seller', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->transactionArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'TransactionArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Transaction', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetSellerTransactionsResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->transactionArray = [];
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
                case 'PaginationResult':
                    $this->paginationResult = \Nogrod\eBaySDK\Trading\PaginationResultType::xmlRead($reader);
                    return true;
                case 'HasMoreTransactions':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hasMoreTransactions = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'TransactionsPerPage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionsPerPage = (int) $value;
                    }
                    return true;
                case 'PageNumber':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pageNumber = (int) $value;
                    }
                    return true;
                case 'ReturnedTransactionCountActual':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->returnedTransactionCountActual = (int) $value;
                    }
                    return true;
                case 'Seller':
                    $this->seller = \Nogrod\eBaySDK\Trading\UserType::xmlRead($reader);
                    return true;
                case 'TransactionArray':
                    $this->transactionArray = Func::readList($reader, 'Transaction', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\TransactionType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['PaginationResult'] = $this->paginationResult;
        $data['HasMoreTransactions'] = $this->hasMoreTransactions;
        $data['TransactionsPerPage'] = $this->transactionsPerPage;
        $data['PageNumber'] = $this->pageNumber;
        $data['ReturnedTransactionCountActual'] = $this->returnedTransactionCountActual;
        $data['Seller'] = $this->seller;
        $data['TransactionArray'] = Func::jsonList($this->transactionArray);
        return $data;
    }
}
