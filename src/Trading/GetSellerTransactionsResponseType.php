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
     * Indicates whether the seller has the preference enabled that shows that the seller
     *  prefers PayPal as the method of payment for an item. This preference is indicated on
     *  an item's View Item page and is intended to influence a buyer to use PayPal
     *  to pay for the item.
     *
     * @var bool $payPalPreferred
     */
    private $payPalPreferred = null;

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
     * @return \Nogrod\eBaySDK\Trading\TransactionType[]
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
     * @param \Nogrod\eBaySDK\Trading\TransactionType[] $transactionArray
     * @return self
     */
    public function setTransactionArray(array $transactionArray)
    {
        $this->transactionArray = $transactionArray;
        return $this;
    }

    /**
     * Gets as payPalPreferred
     *
     * Indicates whether the seller has the preference enabled that shows that the seller
     *  prefers PayPal as the method of payment for an item. This preference is indicated on
     *  an item's View Item page and is intended to influence a buyer to use PayPal
     *  to pay for the item.
     *
     * @return bool
     */
    public function getPayPalPreferred()
    {
        return $this->payPalPreferred;
    }

    /**
     * Sets a new payPalPreferred
     *
     * Indicates whether the seller has the preference enabled that shows that the seller
     *  prefers PayPal as the method of payment for an item. This preference is indicated on
     *  an item's View Item page and is intended to influence a buyer to use PayPal
     *  to pay for the item.
     *
     * @param bool $payPalPreferred
     * @return self
     */
    public function setPayPalPreferred($payPalPreferred)
    {
        $this->payPalPreferred = $payPalPreferred;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = $this->getSeller();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Seller", $value);
        }
        $value = $this->getTransactionArray();
        if (null !== $value && !empty($this->getTransactionArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionArray", array_map(function ($v) {
                return ["Transaction" => $v];
            }, $value));
        }
        $value = $this->getPayPalPreferred();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalPreferred", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasMoreTransactions');
        if (null !== $value) {
            $this->setHasMoreTransactions($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionsPerPage');
        if (null !== $value) {
            $this->setTransactionsPerPage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnedTransactionCountActual');
        if (null !== $value) {
            $this->setReturnedTransactionCountActual($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Seller');
        if (null !== $value) {
            $this->setSeller(\Nogrod\eBaySDK\Trading\UserType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionArray', true);
        if (null !== $value && !empty($value)) {
            $this->setTransactionArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\TransactionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalPreferred');
        if (null !== $value) {
            $this->setPayPalPreferred($value);
        }
    }
}
