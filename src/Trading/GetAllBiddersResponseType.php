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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
        if (!is_array($this->bidArray)) {
            throw new \LogicException('bidArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\OfferType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\OfferType> $bidArray
     * @return self
     */
    public function setBidArray(iterable $bidArray)
    {
        $this->bidArray = $bidArray;
        return $this;
    }

    /**
     * Gets as highBidder
     *
     * The eBay user ID for the user with the winning bid (if auction has ended) or current highest bid (if auction is still active). The seller should take note of or save this User ID as this user may be a a Second Chance Offer candidate.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->bidArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'BidArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Offer', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->highBidder;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HighBidder', null, (string) $value);
        }
        $value = $this->highestBid;
        if (null !== $value) {
            $writer->startElementNs(null, 'HighestBid', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->listingStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ListingStatus', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetAllBiddersResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->bidArray = [];
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
                case 'BidArray':
                    $this->bidArray = Func::readList($reader, 'Offer', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\OfferType::xmlRead($reader));
                    return true;
                case 'HighBidder':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->highBidder = $value;
                    }
                    return true;
                case 'HighestBid':
                    $this->highestBid = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ListingStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->listingStatus = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
