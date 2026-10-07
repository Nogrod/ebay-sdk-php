<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaginatedItemArrayType
 *
 * Contains a paginated list of items.
 * XSD Type: PaginatedItemArrayType
 */
class PaginatedItemArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->itemArray)) {
            throw new \LogicException('itemArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ItemType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\ItemType> $itemArray
     * @return self
     */
    public function setItemArray(iterable $itemArray)
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->itemArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'ItemArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Item', null);
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
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->itemArray = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ItemArray':
                    $this->itemArray = Func::readList($reader, 'Item', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\ItemType::xmlRead($reader));
                    return true;
                case 'PaginationResult':
                    $this->paginationResult = \Nogrod\eBaySDK\Trading\PaginationResultType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ItemArray'] = Func::jsonList($this->itemArray);
        $data['PaginationResult'] = $this->paginationResult;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
