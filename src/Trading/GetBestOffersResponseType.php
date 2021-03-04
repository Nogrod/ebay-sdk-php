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
     * @return \Nogrod\eBaySDK\Trading\BestOfferType[]
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
     * @param \Nogrod\eBaySDK\Trading\BestOfferType[] $bestOfferArray
     * @return self
     */
    public function setBestOfferArray(array $bestOfferArray)
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
     * @return \Nogrod\eBaySDK\Trading\ItemBestOffersType[]
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
     * @param \Nogrod\eBaySDK\Trading\ItemBestOffersType[] $itemBestOffersArray
     * @return self
     */
    public function setItemBestOffersArray(array $itemBestOffersArray)
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getBestOfferArray();
        if (null !== $value && !empty($this->getBestOfferArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferArray", array_map(function ($v) {
                return ["BestOffer" => $v];
            }, $value));
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getItemBestOffersArray();
        if (null !== $value && !empty($this->getItemBestOffersArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemBestOffersArray", array_map(function ($v) {
                return ["ItemBestOffers" => $v];
            }, $value));
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferArray', true);
        if (null !== $value && !empty($value)) {
            $this->setBestOfferArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\BestOfferType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemBestOffersArray', true);
        if (null !== $value && !empty($value)) {
            $this->setItemBestOffersArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemBestOffersType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
    }
}
