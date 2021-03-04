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
     * The total number of bids made on the seller's active listings.
     *
     * @var int $auctionBidCount
     */
    private $auctionBidCount = null;

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
     * The total number of leads from the seller's classified
     *  ad listings. Number indicates the total number of emails
     *  received for the listings
     *
     * @var int $totalLeadCount
     */
    private $totalLeadCount = null;

    /**
     * The total number of offers received on active Classified
     *  Ad listings.
     *
     * @var int $classifiedAdOfferCount
     */
    private $classifiedAdOfferCount = null;

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
     * Gets as auctionBidCount
     *
     * The total number of bids made on the seller's active listings.
     *
     * @return int
     */
    public function getAuctionBidCount()
    {
        return $this->auctionBidCount;
    }

    /**
     * Sets a new auctionBidCount
     *
     * The total number of bids made on the seller's active listings.
     *
     * @param int $auctionBidCount
     * @return self
     */
    public function setAuctionBidCount($auctionBidCount)
    {
        $this->auctionBidCount = $auctionBidCount;
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
     * Gets as totalLeadCount
     *
     * The total number of leads from the seller's classified
     *  ad listings. Number indicates the total number of emails
     *  received for the listings
     *
     * @return int
     */
    public function getTotalLeadCount()
    {
        return $this->totalLeadCount;
    }

    /**
     * Sets a new totalLeadCount
     *
     * The total number of leads from the seller's classified
     *  ad listings. Number indicates the total number of emails
     *  received for the listings
     *
     * @param int $totalLeadCount
     * @return self
     */
    public function setTotalLeadCount($totalLeadCount)
    {
        $this->totalLeadCount = $totalLeadCount;
        return $this;
    }

    /**
     * Gets as classifiedAdOfferCount
     *
     * The total number of offers received on active Classified
     *  Ad listings.
     *
     * @return int
     */
    public function getClassifiedAdOfferCount()
    {
        return $this->classifiedAdOfferCount;
    }

    /**
     * Sets a new classifiedAdOfferCount
     *
     * The total number of offers received on active Classified
     *  Ad listings.
     *
     * @param int $classifiedAdOfferCount
     * @return self
     */
    public function setClassifiedAdOfferCount($classifiedAdOfferCount)
    {
        $this->classifiedAdOfferCount = $classifiedAdOfferCount;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getActiveAuctionCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActiveAuctionCount", $value);
        }
        $value = $this->getAuctionSellingCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AuctionSellingCount", $value);
        }
        $value = $this->getAuctionBidCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AuctionBidCount", $value);
        }
        $value = $this->getTotalAuctionSellingValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAuctionSellingValue", $value);
        }
        $value = $this->getTotalSoldCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalSoldCount", $value);
        }
        $value = $this->getTotalSoldValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalSoldValue", $value);
        }
        $value = $this->getSoldDurationInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SoldDurationInDays", $value);
        }
        $value = $this->getClassifiedAdCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCount", $value);
        }
        $value = $this->getTotalLeadCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalLeadCount", $value);
        }
        $value = $this->getClassifiedAdOfferCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdOfferCount", $value);
        }
        $value = $this->getTotalListingsWithLeads();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalListingsWithLeads", $value);
        }
        $value = $this->getQuantityLimitRemaining();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityLimitRemaining", $value);
        }
        $value = $this->getAmountLimitRemaining();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AmountLimitRemaining", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActiveAuctionCount');
        if (null !== $value) {
            $this->setActiveAuctionCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AuctionSellingCount');
        if (null !== $value) {
            $this->setAuctionSellingCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AuctionBidCount');
        if (null !== $value) {
            $this->setAuctionBidCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAuctionSellingValue');
        if (null !== $value) {
            $this->setTotalAuctionSellingValue(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalSoldCount');
        if (null !== $value) {
            $this->setTotalSoldCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalSoldValue');
        if (null !== $value) {
            $this->setTotalSoldValue(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldDurationInDays');
        if (null !== $value) {
            $this->setSoldDurationInDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCount');
        if (null !== $value) {
            $this->setClassifiedAdCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalLeadCount');
        if (null !== $value) {
            $this->setTotalLeadCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdOfferCount');
        if (null !== $value) {
            $this->setClassifiedAdOfferCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalListingsWithLeads');
        if (null !== $value) {
            $this->setTotalListingsWithLeads($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityLimitRemaining');
        if (null !== $value) {
            $this->setQuantityLimitRemaining($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AmountLimitRemaining');
        if (null !== $value) {
            $this->setAmountLimitRemaining(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
