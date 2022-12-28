<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetAllBiddersResponseType
 *
 * Includes detailed bidding data for the auction listing that was specified in the request. Unless the listing is private, the actual eBay user IDs of all bidders are returned if the listing's seller makes this API call. If a bidder makes this API call, only that bidder's eBay user ID is returned, and the rest of the bidder's user IDs are anonymized.
 * XSD Type: GetAllBiddersResponseType
 */
class GetAllBiddersResponseType extends AbstractResponseType
{
    /**
     * This container consists of an array of bids made on the specified auction listing. Each <b>OfferType</b> object represents the data for one bid.
     *
     * @var \Nogrod\eBaySDK\Trading\OfferType[] $bidArray
     */
    private $bidArray = null;

    /**
     * The eBay user ID for the user with the winning bid (if auction has ended) or current highest bid (if auction is still active). The seller should take note of or save this User ID as this user may be a a Second Chance Offer candidate.
     *
     * @var string $highBidder
     */
    private $highBidder = null;

    /**
     * This is the dollar amount of the winning bid (if auction has ended) or dollar amount of the current highest bid (if auction is still active).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $highestBid
     */
    private $highestBid = null;

    /**
     * This enumeration value indicates the listing status of the specified listing.
     *
     * @var string $listingStatus
     */
    private $listingStatus = null;

    /**
     * Adds as offer
     *
     * This container consists of an array of bids made on the specified auction listing. Each <b>OfferType</b> object represents the data for one bid.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OfferType $offer
     */
    public function addToBidArray(\Nogrod\eBaySDK\Trading\OfferType $offer)
    {
        $this->bidArray[] = $offer;
        return $this;
    }

    /**
     * isset bidArray
     *
     * This container consists of an array of bids made on the specified auction listing. Each <b>OfferType</b> object represents the data for one bid.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidArray($index)
    {
        return isset($this->bidArray[$index]);
    }

    /**
     * unset bidArray
     *
     * This container consists of an array of bids made on the specified auction listing. Each <b>OfferType</b> object represents the data for one bid.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidArray($index)
    {
        unset($this->bidArray[$index]);
    }

    /**
     * Gets as bidArray
     *
     * This container consists of an array of bids made on the specified auction listing. Each <b>OfferType</b> object represents the data for one bid.
     *
     * @return \Nogrod\eBaySDK\Trading\OfferType[]
     */
    public function getBidArray()
    {
        return $this->bidArray;
    }

    /**
     * Sets a new bidArray
     *
     * This container consists of an array of bids made on the specified auction listing. Each <b>OfferType</b> object represents the data for one bid.
     *
     * @param \Nogrod\eBaySDK\Trading\OfferType[] $bidArray
     * @return self
     */
    public function setBidArray(array $bidArray)
    {
        $this->bidArray = $bidArray;
        return $this;
    }

    /**
     * Gets as highBidder
     *
     * The eBay user ID for the user with the winning bid (if auction has ended) or current highest bid (if auction is still active). The seller should take note of or save this User ID as this user may be a a Second Chance Offer candidate.
     *
     * @return string
     */
    public function getHighBidder()
    {
        return $this->highBidder;
    }

    /**
     * Sets a new highBidder
     *
     * The eBay user ID for the user with the winning bid (if auction has ended) or current highest bid (if auction is still active). The seller should take note of or save this User ID as this user may be a a Second Chance Offer candidate.
     *
     * @param string $highBidder
     * @return self
     */
    public function setHighBidder($highBidder)
    {
        $this->highBidder = $highBidder;
        return $this;
    }

    /**
     * Gets as highestBid
     *
     * This is the dollar amount of the winning bid (if auction has ended) or dollar amount of the current highest bid (if auction is still active).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getHighestBid()
    {
        return $this->highestBid;
    }

    /**
     * Sets a new highestBid
     *
     * This is the dollar amount of the winning bid (if auction has ended) or dollar amount of the current highest bid (if auction is still active).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $highestBid
     * @return self
     */
    public function setHighestBid(\Nogrod\eBaySDK\Trading\AmountType $highestBid)
    {
        $this->highestBid = $highestBid;
        return $this;
    }

    /**
     * Gets as listingStatus
     *
     * This enumeration value indicates the listing status of the specified listing.
     *
     * @return string
     */
    public function getListingStatus()
    {
        return $this->listingStatus;
    }

    /**
     * Sets a new listingStatus
     *
     * This enumeration value indicates the listing status of the specified listing.
     *
     * @param string $listingStatus
     * @return self
     */
    public function setListingStatus($listingStatus)
    {
        $this->listingStatus = $listingStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getBidArray();
        if (null !== $value && !empty($this->getBidArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidArray", array_map(function ($v) {
                return ["Offer" => $v];
            }, $value));
        }
        $value = $this->getHighBidder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HighBidder", $value);
        }
        $value = $this->getHighestBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HighestBid", $value);
        }
        $value = $this->getListingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidArray', true);
        if (null !== $value && !empty($value)) {
            $this->setBidArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\OfferType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HighBidder');
        if (null !== $value) {
            $this->setHighBidder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HighestBid');
        if (null !== $value) {
            $this->setHighestBid(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingStatus');
        if (null !== $value) {
            $this->setListingStatus($value);
        }
    }
}
