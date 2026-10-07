<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyeBaySellingSummaryType
 *
 * Contains summary information about the items the seller is selling.
 * XSD Type: MyeBaySellingSummaryType
 */
class MyeBaySellingSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The number of currently active auctions that will sell. That
     *  is, there is at least one bidder, and any reserve price has
     *  been met. Equivalent to the "Will Sell" value in My eBay.
     *
     * @var int $activeAuctionCount
     */
    private $activeAuctionCount = null;

    /**
     * The total number of currently active auctions for a given
     *  seller. Note that this does not include listings that are
     *  FixedPriceItem or StoresFixedPrice. Equivalent to the
     *  "Auction Quantity" value in My eBay.
     *
     * @var int $auctionSellingCount
     */
    private $auctionSellingCount = null;

    /**
     * For all items that the seller has for sale, the total
     *  selling values of those items having bids and where the
     *  Reserve price is met (if a Reserve price is specified).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalAuctionSellingValue
     */
    private $totalAuctionSellingValue = null;

    /**
     * The total number of items that the seller has sold in the
     *  past 31 days.
     *
     * @var int $totalSoldCount
     */
    private $totalSoldCount = null;

    /**
     * The total monetary value of the items the seller has sold.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalSoldValue
     */
    private $totalSoldValue = null;

    /**
     * The average duration, in days, of all items sold.
     *
     * @var int $soldDurationInDays
     */
    private $soldDurationInDays = null;

    /**
     * The total number of Classified Ad listings listed by the
     *  seller.
     *
     * @var int $classifiedAdCount
     */
    private $classifiedAdCount = null;

    /**
     * The total number of Classified Ad listings that have an
     *  associated lead.
     *
     * @var int $totalListingsWithLeads
     */
    private $totalListingsWithLeads = null;

    /**
     * The quantity of items that this seller can list. This number refers to the total quantity of items in all listings.
     *  For example, if the seller's limit was a quantity of 100, this could be 100 listings of one item each, or one listing with a quantity of 100 items.
     *  The seller will be unable to list additional items or quantities of items for sale in excess of this number for the
     *  current month unless the seller requests an increase from eBay using the "Request higher selling limits" link in the All Selling section
     *  of My eBay. (Under "Selling Limits".) Notice that the amount limit (see AmountLimitRemaining) may be reached
     *  before the quantity limit is reached.
     *
     * @var int $quantityLimitRemaining
     */
    private $quantityLimitRemaining = null;

    /**
     * The total value of the items listed price that this seller can list. This amount is the total of the prices
     *  specified upon listing. For example, for fixed price listings, this is the total of the fixed price amounts.
     *  For auction listings, this is the total of the starting prices.
     *  The seller will be unable to list an item if the amount of the item's fixed price or starting price (for auctions)
     *  exceeds the amount limit.
     *  This is part of the seller limit, which can be increased by requesting an increase from eBay using the
     *  "Request higher selling limits" link in the All Selling section
     *  of My eBay. (Under "Selling Limits".) Notice that the quantity limit (see QuantityLimitRemaining) may be reached
     *  before the amount limit is reached.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amountLimitRemaining
     */
    private $amountLimitRemaining = null;

    /**
     * Gets as activeAuctionCount
     *
     * The number of currently active auctions that will sell. That
     *  is, there is at least one bidder, and any reserve price has
     *  been met. Equivalent to the "Will Sell" value in My eBay.
     *
     * @return int
     */
    public function getActiveAuctionCount()
    {
        return $this->activeAuctionCount;
    }

    /**
     * Sets a new activeAuctionCount
     *
     * The number of currently active auctions that will sell. That
     *  is, there is at least one bidder, and any reserve price has
     *  been met. Equivalent to the "Will Sell" value in My eBay.
     *
     * @param int $activeAuctionCount
     * @return self
     */
    public function setActiveAuctionCount($activeAuctionCount)
    {
        $this->activeAuctionCount = $activeAuctionCount;
        return $this;
    }

    /**
     * Gets as auctionSellingCount
     *
     * The total number of currently active auctions for a given
     *  seller. Note that this does not include listings that are
     *  FixedPriceItem or StoresFixedPrice. Equivalent to the
     *  "Auction Quantity" value in My eBay.
     *
     * @return int
     */
    public function getAuctionSellingCount()
    {
        return $this->auctionSellingCount;
    }

    /**
     * Sets a new auctionSellingCount
     *
     * The total number of currently active auctions for a given
     *  seller. Note that this does not include listings that are
     *  FixedPriceItem or StoresFixedPrice. Equivalent to the
     *  "Auction Quantity" value in My eBay.
     *
     * @param int $auctionSellingCount
     * @return self
     */
    public function setAuctionSellingCount($auctionSellingCount)
    {
        $this->auctionSellingCount = $auctionSellingCount;
        return $this;
    }

    /**
     * Gets as totalAuctionSellingValue
     *
     * For all items that the seller has for sale, the total
     *  selling values of those items having bids and where the
     *  Reserve price is met (if a Reserve price is specified).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalAuctionSellingValue()
    {
        return $this->totalAuctionSellingValue;
    }

    /**
     * Sets a new totalAuctionSellingValue
     *
     * For all items that the seller has for sale, the total
     *  selling values of those items having bids and where the
     *  Reserve price is met (if a Reserve price is specified).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalAuctionSellingValue
     * @return self
     */
    public function setTotalAuctionSellingValue(\Nogrod\eBaySDK\Trading\AmountType $totalAuctionSellingValue)
    {
        $this->totalAuctionSellingValue = $totalAuctionSellingValue;
        return $this;
    }

    /**
     * Gets as totalSoldCount
     *
     * The total number of items that the seller has sold in the
     *  past 31 days.
     *
     * @return int
     */
    public function getTotalSoldCount()
    {
        return $this->totalSoldCount;
    }

    /**
     * Sets a new totalSoldCount
     *
     * The total number of items that the seller has sold in the
     *  past 31 days.
     *
     * @param int $totalSoldCount
     * @return self
     */
    public function setTotalSoldCount($totalSoldCount)
    {
        $this->totalSoldCount = $totalSoldCount;
        return $this;
    }

    /**
     * Gets as totalSoldValue
     *
     * The total monetary value of the items the seller has sold.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalSoldValue()
    {
        return $this->totalSoldValue;
    }

    /**
     * Sets a new totalSoldValue
     *
     * The total monetary value of the items the seller has sold.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalSoldValue
     * @return self
     */
    public function setTotalSoldValue(\Nogrod\eBaySDK\Trading\AmountType $totalSoldValue)
    {
        $this->totalSoldValue = $totalSoldValue;
        return $this;
    }

    /**
     * Gets as soldDurationInDays
     *
     * The average duration, in days, of all items sold.
     *
     * @return int
     */
    public function getSoldDurationInDays()
    {
        return $this->soldDurationInDays;
    }

    /**
     * Sets a new soldDurationInDays
     *
     * The average duration, in days, of all items sold.
     *
     * @param int $soldDurationInDays
     * @return self
     */
    public function setSoldDurationInDays($soldDurationInDays)
    {
        $this->soldDurationInDays = $soldDurationInDays;
        return $this;
    }

    /**
     * Gets as classifiedAdCount
     *
     * The total number of Classified Ad listings listed by the
     *  seller.
     *
     * @return int
     */
    public function getClassifiedAdCount()
    {
        return $this->classifiedAdCount;
    }

    /**
     * Sets a new classifiedAdCount
     *
     * The total number of Classified Ad listings listed by the
     *  seller.
     *
     * @param int $classifiedAdCount
     * @return self
     */
    public function setClassifiedAdCount($classifiedAdCount)
    {
        $this->classifiedAdCount = $classifiedAdCount;
        return $this;
    }

    /**
     * Gets as totalListingsWithLeads
     *
     * The total number of Classified Ad listings that have an
     *  associated lead.
     *
     * @return int
     */
    public function getTotalListingsWithLeads()
    {
        return $this->totalListingsWithLeads;
    }

    /**
     * Sets a new totalListingsWithLeads
     *
     * The total number of Classified Ad listings that have an
     *  associated lead.
     *
     * @param int $totalListingsWithLeads
     * @return self
     */
    public function setTotalListingsWithLeads($totalListingsWithLeads)
    {
        $this->totalListingsWithLeads = $totalListingsWithLeads;
        return $this;
    }

    /**
     * Gets as quantityLimitRemaining
     *
     * The quantity of items that this seller can list. This number refers to the total quantity of items in all listings.
     *  For example, if the seller's limit was a quantity of 100, this could be 100 listings of one item each, or one listing with a quantity of 100 items.
     *  The seller will be unable to list additional items or quantities of items for sale in excess of this number for the
     *  current month unless the seller requests an increase from eBay using the "Request higher selling limits" link in the All Selling section
     *  of My eBay. (Under "Selling Limits".) Notice that the amount limit (see AmountLimitRemaining) may be reached
     *  before the quantity limit is reached.
     *
     * @return int
     */
    public function getQuantityLimitRemaining()
    {
        return $this->quantityLimitRemaining;
    }

    /**
     * Sets a new quantityLimitRemaining
     *
     * The quantity of items that this seller can list. This number refers to the total quantity of items in all listings.
     *  For example, if the seller's limit was a quantity of 100, this could be 100 listings of one item each, or one listing with a quantity of 100 items.
     *  The seller will be unable to list additional items or quantities of items for sale in excess of this number for the
     *  current month unless the seller requests an increase from eBay using the "Request higher selling limits" link in the All Selling section
     *  of My eBay. (Under "Selling Limits".) Notice that the amount limit (see AmountLimitRemaining) may be reached
     *  before the quantity limit is reached.
     *
     * @param int $quantityLimitRemaining
     * @return self
     */
    public function setQuantityLimitRemaining($quantityLimitRemaining)
    {
        $this->quantityLimitRemaining = $quantityLimitRemaining;
        return $this;
    }

    /**
     * Gets as amountLimitRemaining
     *
     * The total value of the items listed price that this seller can list. This amount is the total of the prices
     *  specified upon listing. For example, for fixed price listings, this is the total of the fixed price amounts.
     *  For auction listings, this is the total of the starting prices.
     *  The seller will be unable to list an item if the amount of the item's fixed price or starting price (for auctions)
     *  exceeds the amount limit.
     *  This is part of the seller limit, which can be increased by requesting an increase from eBay using the
     *  "Request higher selling limits" link in the All Selling section
     *  of My eBay. (Under "Selling Limits".) Notice that the quantity limit (see QuantityLimitRemaining) may be reached
     *  before the amount limit is reached.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAmountLimitRemaining()
    {
        return $this->amountLimitRemaining;
    }

    /**
     * Sets a new amountLimitRemaining
     *
     * The total value of the items listed price that this seller can list. This amount is the total of the prices
     *  specified upon listing. For example, for fixed price listings, this is the total of the fixed price amounts.
     *  For auction listings, this is the total of the starting prices.
     *  The seller will be unable to list an item if the amount of the item's fixed price or starting price (for auctions)
     *  exceeds the amount limit.
     *  This is part of the seller limit, which can be increased by requesting an increase from eBay using the
     *  "Request higher selling limits" link in the All Selling section
     *  of My eBay. (Under "Selling Limits".) Notice that the quantity limit (see QuantityLimitRemaining) may be reached
     *  before the amount limit is reached.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $amountLimitRemaining
     * @return self
     */
    public function setAmountLimitRemaining(\Nogrod\eBaySDK\Trading\AmountType $amountLimitRemaining)
    {
        $this->amountLimitRemaining = $amountLimitRemaining;
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
        $value = $this->activeAuctionCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ActiveAuctionCount', null, (string) $value);
        }
        $value = $this->auctionSellingCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AuctionSellingCount', null, (string) $value);
        }
        $value = $this->totalAuctionSellingValue;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalAuctionSellingValue', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->totalSoldCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TotalSoldCount', null, (string) $value);
        }
        $value = $this->totalSoldValue;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalSoldValue', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->soldDurationInDays;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SoldDurationInDays', null, (string) $value);
        }
        $value = $this->classifiedAdCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ClassifiedAdCount', null, (string) $value);
        }
        $value = $this->totalListingsWithLeads;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TotalListingsWithLeads', null, (string) $value);
        }
        $value = $this->quantityLimitRemaining;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuantityLimitRemaining', null, (string) $value);
        }
        $value = $this->amountLimitRemaining;
        if (null !== $value) {
            $writer->startElementNs(null, 'AmountLimitRemaining', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyeBaySellingSummaryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'ActiveAuctionCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->activeAuctionCount = (int) $value;
                    }
                    return true;
                case 'AuctionSellingCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->auctionSellingCount = (int) $value;
                    }
                    return true;
                case 'TotalAuctionSellingValue':
                    $this->totalAuctionSellingValue = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'TotalSoldCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->totalSoldCount = (int) $value;
                    }
                    return true;
                case 'TotalSoldValue':
                    $this->totalSoldValue = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'SoldDurationInDays':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->soldDurationInDays = (int) $value;
                    }
                    return true;
                case 'ClassifiedAdCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->classifiedAdCount = (int) $value;
                    }
                    return true;
                case 'TotalListingsWithLeads':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->totalListingsWithLeads = (int) $value;
                    }
                    return true;
                case 'QuantityLimitRemaining':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->quantityLimitRemaining = (int) $value;
                    }
                    return true;
                case 'AmountLimitRemaining':
                    $this->amountLimitRemaining = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
