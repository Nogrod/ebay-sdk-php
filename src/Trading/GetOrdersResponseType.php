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
     *  The <b>GetOrders</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Team Access (formerly multi-user account access)</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetOrders</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;OrderArray/&gt;</code>.
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
     *  The <b>GetOrders</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Team Access (formerly multi-user account access)</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetOrders</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;OrderArray/&gt;</code>.
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
     *  The <b>GetOrders</b> call does not support <a href ="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank" >Team Access (formerly multi-user account access)</a>. Transactions are only returned for the user that makes the call. You cannot use <b>GetOrders</b> to return transactions for another user. The call succeeds but returns an empty <code>&lt;OrderArray/&gt;</code>.
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
        $value = $this->hasMoreOrders;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HasMoreOrders', null, ($value ? 'true' : 'false'));
        }
        $value = $this->orderArray;
        if (null !== $value) {
            $writer->startElementNs(null, 'OrderArray', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->ordersPerPage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrdersPerPage', null, (string) $value);
        }
        $value = $this->pageNumber;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PageNumber', null, (string) $value);
        }
        $value = $this->returnedOrderCountActual;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReturnedOrderCountActual', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetOrdersResponseType
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
                case 'PaginationResult':
                    $this->paginationResult = \Nogrod\eBaySDK\Trading\PaginationResultType::xmlRead($reader);
                    return true;
                case 'HasMoreOrders':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hasMoreOrders = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'OrderArray':
                    $this->orderArray = \Nogrod\eBaySDK\Trading\OrderArrayType::xmlRead($reader);
                    return true;
                case 'OrdersPerPage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->ordersPerPage = (int) $value;
                    }
                    return true;
                case 'PageNumber':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pageNumber = (int) $value;
                    }
                    return true;
                case 'ReturnedOrderCountActual':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->returnedOrderCountActual = (int) $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
