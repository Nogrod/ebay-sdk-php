<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaginatedItemArrayType
 *
 * Contains a paginated list of items.
 * XSD Type: PaginatedItemArrayType
 */
class PaginatedItemArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An array of one or more items returned under one or more containers in a <b>GetMyeBayBuying</b> or <b>GetMyeBaySelling</b> call response.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $itemArray
     */
    private $itemArray = null;

    /**
     * This container shows the total numer of items that matched the input criteria and the total number of the results set. Users can use the <b>Pagination.PageNumber</b> field in the request to toggle through different pages in the results set.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Adds as item
     *
     * An array of one or more items returned under one or more containers in a <b>GetMyeBayBuying</b> or <b>GetMyeBaySelling</b> call response.
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
     * An array of one or more items returned under one or more containers in a <b>GetMyeBayBuying</b> or <b>GetMyeBaySelling</b> call response.
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
     * An array of one or more items returned under one or more containers in a <b>GetMyeBayBuying</b> or <b>GetMyeBaySelling</b> call response.
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
     * An array of one or more items returned under one or more containers in a <b>GetMyeBayBuying</b> or <b>GetMyeBaySelling</b> call response.
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
     * An array of one or more items returned under one or more containers in a <b>GetMyeBayBuying</b> or <b>GetMyeBaySelling</b> call response.
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
     * Gets as paginationResult
     *
     * This container shows the total numer of items that matched the input criteria and the total number of the results set. Users can use the <b>Pagination.PageNumber</b> field in the request to toggle through different pages in the results set.
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
     * This container shows the total numer of items that matched the input criteria and the total number of the results set. Users can use the <b>Pagination.PageNumber</b> field in the request to toggle through different pages in the results set.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemArray();
        if (null !== $value && !empty($this->getItemArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemArray", array_map(function ($v) {return ["Item" => $v];}, $value));
        }
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemArray', true);
        if (null !== $value && !empty($value)) {
            $this->setItemArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ItemType::fromKeyValue(Func::mapArray($v, '{urn:ebay:apis:eBLBaseComponents}Item', true));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
    }
}
