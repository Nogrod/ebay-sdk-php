<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerListResponseType
 *
 * This is the base response type of the <b>GetSellerList</b> call. The <b>GetSellerList</b> response includes an array of one or more listings that matched the input criteria, as well as pagination data.
 * XSD Type: GetSellerListResponseType
 */
class GetSellerListResponseType extends AbstractResponseType
{
    /**
     * This container shows the total number or pages in the result set, as well as the total number of listings that match the current input criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * This field's value is returned as <code>true</code> if there are more pages in the current result set to view, or <code>false</code> if the current page being viewed is the last (or only) page of the result set.
     *  <br/><br/>
     *  If there are more listings to view in the result set, additional <b>GetSellerList</b> calls can be made but with changes to the <b>Pagination</b> values in the request. For example, if the <b>Pagination.PageNumber</b> value in the request for the last call was <code>1</code>, you can make another <b>GetSellerList</b> call, keeping everything the same except changing the value of the <b>Pagination.PageNumber</b> field from <code>1</code> to <code>2</code>.
     *
     * @var bool $hasMoreItems
     */
    private $hasMoreItems = null;

    /**
     * This container is an array of one or more listings that match the input criteria. If none of the seller's listings match the input criteria, this container is returned as an empty tag.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $itemArray
     */
    private $itemArray = null;

    /**
     * This value reflects the value that was set in the <b>Pagination.EntriesPerPage</b> field in the request. This is the maximum number of listings that may be returned per page of the result set. Note that this value is only the maximum threshold and does not necessarily reflect the number of listings appearing on the current page of data.
     *
     * @var int $itemsPerPage
     */
    private $itemsPerPage = null;

    /**
     * This value indicates the current page of data in the result set that is being displayed. This value reflects the value specified in the <b>Pagination.PageNumber</b> field in the request. Note that page number defaults to <code>1</code> if the <b>Pagination.PageNumber</b> field was not included in the request.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * This value indicates the total number of listings being shown on the current page of the results set.
     *
     * @var int $returnedItemCountActual
     */
    private $returnedItemCountActual = null;

    /**
     * This container consists of detailed information about the seller and the seller's account. This container is only returned if the <b>GranularityLevel</b> field is included in the request and set to <code>Fine</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $seller
     */
    private $seller = null;

    /**
     * Gets as paginationResult
     *
     * This container shows the total number or pages in the result set, as well as the total number of listings that match the current input criteria.
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
     * This container shows the total number or pages in the result set, as well as the total number of listings that match the current input criteria.
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
     * Gets as hasMoreItems
     *
     * This field's value is returned as <code>true</code> if there are more pages in the current result set to view, or <code>false</code> if the current page being viewed is the last (or only) page of the result set.
     *  <br/><br/>
     *  If there are more listings to view in the result set, additional <b>GetSellerList</b> calls can be made but with changes to the <b>Pagination</b> values in the request. For example, if the <b>Pagination.PageNumber</b> value in the request for the last call was <code>1</code>, you can make another <b>GetSellerList</b> call, keeping everything the same except changing the value of the <b>Pagination.PageNumber</b> field from <code>1</code> to <code>2</code>.
     *
     * @return bool
     */
    public function getHasMoreItems()
    {
        return $this->hasMoreItems;
    }

    /**
     * Sets a new hasMoreItems
     *
     * This field's value is returned as <code>true</code> if there are more pages in the current result set to view, or <code>false</code> if the current page being viewed is the last (or only) page of the result set.
     *  <br/><br/>
     *  If there are more listings to view in the result set, additional <b>GetSellerList</b> calls can be made but with changes to the <b>Pagination</b> values in the request. For example, if the <b>Pagination.PageNumber</b> value in the request for the last call was <code>1</code>, you can make another <b>GetSellerList</b> call, keeping everything the same except changing the value of the <b>Pagination.PageNumber</b> field from <code>1</code> to <code>2</code>.
     *
     * @param bool $hasMoreItems
     * @return self
     */
    public function setHasMoreItems($hasMoreItems)
    {
        $this->hasMoreItems = $hasMoreItems;
        return $this;
    }

    /**
     * Adds as item
     *
     * This container is an array of one or more listings that match the input criteria. If none of the seller's listings match the input criteria, this container is returned as an empty tag.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     */
    public function addToItemArray(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->itemArray[] = $item;
        return $this;
    }

    /**
     * isset itemArray
     *
     * This container is an array of one or more listings that match the input criteria. If none of the seller's listings match the input criteria, this container is returned as an empty tag.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemArray($index)
    {
        return isset($this->itemArray[$index]);
    }

    /**
     * unset itemArray
     *
     * This container is an array of one or more listings that match the input criteria. If none of the seller's listings match the input criteria, this container is returned as an empty tag.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemArray($index)
    {
        unset($this->itemArray[$index]);
    }

    /**
     * Gets as itemArray
     *
     * This container is an array of one or more listings that match the input criteria. If none of the seller's listings match the input criteria, this container is returned as an empty tag.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType[]
     */
    public function getItemArray()
    {
        return $this->itemArray;
    }

    /**
     * Sets a new itemArray
     *
     * This container is an array of one or more listings that match the input criteria. If none of the seller's listings match the input criteria, this container is returned as an empty tag.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType[] $itemArray
     * @return self
     */
    public function setItemArray(array $itemArray)
    {
        $this->itemArray = $itemArray;
        return $this;
    }

    /**
     * Gets as itemsPerPage
     *
     * This value reflects the value that was set in the <b>Pagination.EntriesPerPage</b> field in the request. This is the maximum number of listings that may be returned per page of the result set. Note that this value is only the maximum threshold and does not necessarily reflect the number of listings appearing on the current page of data.
     *
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * Sets a new itemsPerPage
     *
     * This value reflects the value that was set in the <b>Pagination.EntriesPerPage</b> field in the request. This is the maximum number of listings that may be returned per page of the result set. Note that this value is only the maximum threshold and does not necessarily reflect the number of listings appearing on the current page of data.
     *
     * @param int $itemsPerPage
     * @return self
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * This value indicates the current page of data in the result set that is being displayed. This value reflects the value specified in the <b>Pagination.PageNumber</b> field in the request. Note that page number defaults to <code>1</code> if the <b>Pagination.PageNumber</b> field was not included in the request.
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
     * This value indicates the current page of data in the result set that is being displayed. This value reflects the value specified in the <b>Pagination.PageNumber</b> field in the request. Note that page number defaults to <code>1</code> if the <b>Pagination.PageNumber</b> field was not included in the request.
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
     * Gets as returnedItemCountActual
     *
     * This value indicates the total number of listings being shown on the current page of the results set.
     *
     * @return int
     */
    public function getReturnedItemCountActual()
    {
        return $this->returnedItemCountActual;
    }

    /**
     * Sets a new returnedItemCountActual
     *
     * This value indicates the total number of listings being shown on the current page of the results set.
     *
     * @param int $returnedItemCountActual
     * @return self
     */
    public function setReturnedItemCountActual($returnedItemCountActual)
    {
        $this->returnedItemCountActual = $returnedItemCountActual;
        return $this;
    }

    /**
     * Gets as seller
     *
     * This container consists of detailed information about the seller and the seller's account. This container is only returned if the <b>GranularityLevel</b> field is included in the request and set to <code>Fine</code>.
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
     * This container consists of detailed information about the seller and the seller's account. This container is only returned if the <b>GranularityLevel</b> field is included in the request and set to <code>Fine</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\UserType $seller
     * @return self
     */
    public function setSeller(\Nogrod\eBaySDK\Trading\UserType $seller)
    {
        $this->seller = $seller;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
        }
        $value = $this->getHasMoreItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasMoreItems", $value);
        }
        $value = $this->getItemArray();
        if (null !== $value && [] !== $this->getItemArray()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemArray", array_map(function ($v) {return ["Item" => $v];}, $value));
        }
        $value = $this->getItemsPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemsPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getReturnedItemCountActual();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnedItemCountActual", $value);
        }
        $value = $this->getSeller();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Seller", $value);
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasMoreItems');
        if (null !== $value) {
            $this->setHasMoreItems(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemArray');
        if (null !== $value) {
            $this->setItemArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ItemType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Item'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemsPerPage');
        if (null !== $value) {
            $this->setItemsPerPage($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnedItemCountActual');
        if (null !== $value) {
            $this->setReturnedItemCountActual($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Seller');
        if (null !== $value) {
            $this->setSeller(\Nogrod\eBaySDK\Trading\UserType::fromKeyValue($value));
        }
    }
}
