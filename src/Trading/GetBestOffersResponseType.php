<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetBestOffersResponseType
 *
 * All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. For the notification client usage, this response includes a single Best Offer.
 * XSD Type: GetBestOffersResponseType
 */
class GetBestOffersResponseType extends AbstractResponseType
{
    /**
     * All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the <code>ReturnAll</code> detail level is used. Only returned if Best Offers have been made.
     *
     * @var \Nogrod\eBaySDK\Trading\BestOfferType[] $bestOfferArray
     */
    private $bestOfferArray = null;

    /**
     * This container consists of several details about the listing for which a Best Offer has been made, including the Item ID, the current price of the item (not the Best Offer price), and the time that the listing is scheduled to end.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemBestOffersType[] $itemBestOffersArray
     */
    private $itemBestOffersArray = null;

    /**
     * This integer value indicates the current page number of Best Offers that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * Provides information about the data returned, including the number of pages and the number
     *  of entries.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Adds as bestOffer
     *
     * All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the <code>ReturnAll</code> detail level is used. Only returned if Best Offers have been made.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BestOfferType $bestOffer
     */
    public function addToBestOfferArray(\Nogrod\eBaySDK\Trading\BestOfferType $bestOffer)
    {
        if (!is_array($this->bestOfferArray)) {
            throw new \LogicException('bestOfferArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->bestOfferArray[] = $bestOffer;
        return $this;
    }

    /**
     * isset bestOfferArray
     *
     * All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the <code>ReturnAll</code> detail level is used. Only returned if Best Offers have been made.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBestOfferArray($index)
    {
        return isset($this->bestOfferArray[$index]);
    }

    /**
     * unset bestOfferArray
     *
     * All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the <code>ReturnAll</code> detail level is used. Only returned if Best Offers have been made.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBestOfferArray($index)
    {
        unset($this->bestOfferArray[$index]);
    }

    /**
     * Gets as bestOfferArray
     *
     * All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the <code>ReturnAll</code> detail level is used. Only returned if Best Offers have been made.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\BestOfferType>
     */
    public function getBestOfferArray()
    {
        return $this->bestOfferArray;
    }

    /**
     * Sets a new bestOfferArray
     *
     * All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the <code>ReturnAll</code> detail level is used. Only returned if Best Offers have been made.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\BestOfferType> $bestOfferArray
     * @return self
     */
    public function setBestOfferArray(iterable $bestOfferArray)
    {
        $this->bestOfferArray = $bestOfferArray;
        return $this;
    }

    /**
     * Gets as item
     *
     * This container consists of several details about the listing for which a Best Offer has been made, including the Item ID, the current price of the item (not the Best Offer price), and the time that the listing is scheduled to end.
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
     * This container consists of several details about the listing for which a Best Offer has been made, including the Item ID, the current price of the item (not the Best Offer price), and the time that the listing is scheduled to end.
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
     * Adds as itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemBestOffersType $itemBestOffers
     */
    public function addToItemBestOffersArray(\Nogrod\eBaySDK\Trading\ItemBestOffersType $itemBestOffers)
    {
        if (!is_array($this->itemBestOffersArray)) {
            throw new \LogicException('itemBestOffersArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->itemBestOffersArray[] = $itemBestOffers;
        return $this;
    }

    /**
     * isset itemBestOffersArray
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemBestOffersArray($index)
    {
        return isset($this->itemBestOffersArray[$index]);
    }

    /**
     * unset itemBestOffersArray
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemBestOffersArray($index)
    {
        unset($this->itemBestOffersArray[$index]);
    }

    /**
     * Gets as itemBestOffersArray
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ItemBestOffersType>
     */
    public function getItemBestOffersArray()
    {
        return $this->itemBestOffersArray;
    }

    /**
     * Sets a new itemBestOffersArray
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ItemBestOffersType> $itemBestOffersArray
     * @return self
     */
    public function setItemBestOffersArray(iterable $itemBestOffersArray)
    {
        $this->itemBestOffersArray = $itemBestOffersArray;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * This integer value indicates the current page number of Best Offers that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
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
     * This integer value indicates the current page number of Best Offers that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
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
     * Gets as paginationResult
     *
     * Provides information about the data returned, including the number of pages and the number
     *  of entries.
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
     * Provides information about the data returned, including the number of pages and the number
     *  of entries.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->bestOfferArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'BestOfferArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'BestOffer', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->item;
        if (null !== $value) {
            $writer->startElementNs(null, 'Item', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->itemBestOffersArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'ItemBestOffersArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'ItemBestOffers', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->pageNumber;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PageNumber', null, (string) $value);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetBestOffersResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->bestOfferArray = [];
        $this->itemBestOffersArray = [];
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
                case 'BestOfferArray':
                    $this->bestOfferArray = Func::readList($reader, 'BestOffer', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\BestOfferType::xmlRead($reader));
                    return true;
                case 'Item':
                    $this->item = \Nogrod\eBaySDK\Trading\ItemType::xmlRead($reader);
                    return true;
                case 'ItemBestOffersArray':
                    $this->itemBestOffersArray = Func::readList($reader, 'ItemBestOffers', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\ItemBestOffersType::xmlRead($reader));
                    return true;
                case 'PageNumber':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pageNumber = (int) $value;
                    }
                    return true;
                case 'PaginationResult':
                    $this->paginationResult = \Nogrod\eBaySDK\Trading\PaginationResultType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['BestOfferArray'] = Func::jsonList($this->bestOfferArray);
        $data['Item'] = $this->item;
        $data['ItemBestOffersArray'] = Func::jsonList($this->itemBestOffersArray);
        $data['PageNumber'] = $this->pageNumber;
        $data['PaginationResult'] = $this->paginationResult;
        return $data;
    }
}
