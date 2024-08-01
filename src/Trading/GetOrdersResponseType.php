<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetOrdersResponseType
 *
 * Returns the set of orders that match the order IDs or filter criteria specified.
 * XSD Type: GetOrdersResponseType
 */
class GetOrdersResponseType extends AbstractResponseType
{
    /**
     * Contains information regarding the pagination of data, including the total number of pages and the total number of orders.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * A true value indicates that there are more orders to be retrieved. Additional <b>GetOrders</b> calls with higher page numbers or more entries per page must be made to retrieve these orders. If false, no more orders are available or no orders match the request (based on the input filters).
     *
     * @var bool $hasMoreOrders
     */
    private $hasMoreOrders = null;

    /**
     * The set of orders that match the order IDs or filter criteria specified.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetOrders</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetOrders</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;OrderArray/&gt;</code>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\OrderArrayType $orderArray
     */
    private $orderArray = null;

    /**
     * Indicates the number of orders that can be returned per page of data (i.e., per call). This is the same value specified in the <b>Pagination.EntriesPerPage</b> input (or the default value, if <b>EntriesPerPage</b> was not specified). This is not necessarily the actual number of orders returned per page (see <b>ReturnedOrderCountActual</b>).
     *
     * @var int $ordersPerPage
     */
    private $ordersPerPage = null;

    /**
     * Indicates the page number of data returned in the response. This is the same value specified in the <b>Pagination.PageNumber</b> input. If orders are returned, the first page is 1.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * Indicates the total number of orders returned.
     *
     * @var int $returnedOrderCountActual
     */
    private $returnedOrderCountActual = null;

    /**
     * Gets as paginationResult
     *
     * Contains information regarding the pagination of data, including the total number of pages and the total number of orders.
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
     * Contains information regarding the pagination of data, including the total number of pages and the total number of orders.
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
     * Gets as hasMoreOrders
     *
     * A true value indicates that there are more orders to be retrieved. Additional <b>GetOrders</b> calls with higher page numbers or more entries per page must be made to retrieve these orders. If false, no more orders are available or no orders match the request (based on the input filters).
     *
     * @return bool
     */
    public function getHasMoreOrders()
    {
        return $this->hasMoreOrders;
    }

    /**
     * Sets a new hasMoreOrders
     *
     * A true value indicates that there are more orders to be retrieved. Additional <b>GetOrders</b> calls with higher page numbers or more entries per page must be made to retrieve these orders. If false, no more orders are available or no orders match the request (based on the input filters).
     *
     * @param bool $hasMoreOrders
     * @return self
     */
    public function setHasMoreOrders($hasMoreOrders)
    {
        $this->hasMoreOrders = $hasMoreOrders;
        return $this;
    }

    /**
     * Gets as orderArray
     *
     * The set of orders that match the order IDs or filter criteria specified.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetOrders</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetOrders</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;OrderArray/&gt;</code>.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\OrderArrayType
     */
    public function getOrderArray()
    {
        return $this->orderArray;
    }

    /**
     * Sets a new orderArray
     *
     * The set of orders that match the order IDs or filter criteria specified.
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetOrders</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Multi-user account access</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetOrders</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;OrderArray/&gt;</code>.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\OrderArrayType $orderArray
     * @return self
     */
    public function setOrderArray(\Nogrod\eBaySDK\Trading\OrderArrayType $orderArray)
    {
        $this->orderArray = $orderArray;
        return $this;
    }

    /**
     * Gets as ordersPerPage
     *
     * Indicates the number of orders that can be returned per page of data (i.e., per call). This is the same value specified in the <b>Pagination.EntriesPerPage</b> input (or the default value, if <b>EntriesPerPage</b> was not specified). This is not necessarily the actual number of orders returned per page (see <b>ReturnedOrderCountActual</b>).
     *
     * @return int
     */
    public function getOrdersPerPage()
    {
        return $this->ordersPerPage;
    }

    /**
     * Sets a new ordersPerPage
     *
     * Indicates the number of orders that can be returned per page of data (i.e., per call). This is the same value specified in the <b>Pagination.EntriesPerPage</b> input (or the default value, if <b>EntriesPerPage</b> was not specified). This is not necessarily the actual number of orders returned per page (see <b>ReturnedOrderCountActual</b>).
     *
     * @param int $ordersPerPage
     * @return self
     */
    public function setOrdersPerPage($ordersPerPage)
    {
        $this->ordersPerPage = $ordersPerPage;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * Indicates the page number of data returned in the response. This is the same value specified in the <b>Pagination.PageNumber</b> input. If orders are returned, the first page is 1.
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
     * Indicates the page number of data returned in the response. This is the same value specified in the <b>Pagination.PageNumber</b> input. If orders are returned, the first page is 1.
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
     * Gets as returnedOrderCountActual
     *
     * Indicates the total number of orders returned.
     *
     * @return int
     */
    public function getReturnedOrderCountActual()
    {
        return $this->returnedOrderCountActual;
    }

    /**
     * Sets a new returnedOrderCountActual
     *
     * Indicates the total number of orders returned.
     *
     * @param int $returnedOrderCountActual
     * @return self
     */
    public function setReturnedOrderCountActual($returnedOrderCountActual)
    {
        $this->returnedOrderCountActual = $returnedOrderCountActual;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
        }
        $value = $this->getHasMoreOrders();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasMoreOrders", $value);
        }
        $value = $this->getOrderArray();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderArray", $value);
        }
        $value = $this->getOrdersPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrdersPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getReturnedOrderCountActual();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnedOrderCountActual", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasMoreOrders');
        if (null !== $value) {
            $this->setHasMoreOrders($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderArray');
        if (null !== $value) {
            $this->setOrderArray(\Nogrod\eBaySDK\Trading\OrderArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrdersPerPage');
        if (null !== $value) {
            $this->setOrdersPerPage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnedOrderCountActual');
        if (null !== $value) {
            $this->setReturnedOrderCountActual($value);
        }
    }
}
