<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingInfoType
 *
 * Contains information specific to the item listing.
 * XSD Type: ListingInfo
 */
class ListingInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Shows whether or not the seller will accept a best offer for the
     *  associated item. Best Offer allows a buyer to make a lower-priced binding
     *  offer on a fixed price item. Buyers cannot see how many offers have been
     *  made (only the seller can see this information). To make a best offer on
     *  a listing, use the eBay Web site.
     *
     * @var bool $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * Applies only to auction listings that were listed with a Buy It Now
     *  price. Buy It Now lets a user purchase the item at a fixed price,
     *  effectively ending the auction. On most sites, the Buy It Now option is
     *  removed (and this value returns false) once a valid bid is made on the
     *  associated item (a valid bid could be a bid above the reserve price).
     *  <br><br>
     *  buyItNowAvailable will return "false" if the listing type is anything but
     *  "AuctionWithBIN". Please ignore buyItNowAvailable for fixed-price
     *  listings.
     *
     * @var bool $buyItNowAvailable
     */
    private $buyItNowAvailable = null;

    /**
     * The Buy It Now Price of the item (if any), in the currency of the site on
     *  which the item was listed. You can use this field to determine if the
     *  item was originally listed with Buy It Now, even if the Buy It Now option
     *  is no longer available for the item.
     *  <br><br>
     *  For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad
     *  Format (AdFormat), and Classified Ad (Classified) listings, currentPrice
     *  is the current fixed price.
     *  <br><br>
     *  Only returned if an item was listed with Buy It Now.
     *
     * @var \Nogrod\eBaySDK\Finding\AmountType $buyItNowPrice
     */
    private $buyItNowPrice = null;

    /**
     * The listing's Buy It Now Price (if any), converted into the currency of
     *  the site to which you sent your search request. For active items, refresh
     *  this value every 24 hours to pick up changes in conversion rates (if this
     *  value has been converted).
     *  <br><br>
     *  Price fields are returned as doubles, not necessarily in the traditional
     *  monetary format of the site's country. For example, a US Dollar value
     *  might be returned as 3.880001 instead of 3.88.
     *  <br><br>
     *  Only returned if an item was listed with Buy It Now.
     *
     * @var \Nogrod\eBaySDK\Finding\AmountType $convertedBuyItNowPrice
     */
    private $convertedBuyItNowPrice = null;

    /**
     * Time stamp that eBay recorded as the moment the listing was made
     *  available. This value is returned in GMT, the ISO 8601 date and time
     *  format (YYYY-MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for
     *  information about the time format, and for details on converting to and
     *  from the GMT time zone. Note that it is possible for startTime to be
     *  different from the value returned by GetSingleItem.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Time stamp specifying when the listing is scheduled to end, or the
     *  actual end time if the item listing has ended. This value is returned in
     *  GMT, the ISO 8601 date and time format (YYYY-MM- DDTHH:MM:SS.SSSZ). See
     *  the "dateTime" type for information about the time format, and for
     *  details on converting to and from the GMT time zone.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  For items that are "Good Till Canceled," this value is 5 minutes later
     *  than the actual end time of the item. This difference in time is
     *  intended to facilitate the renewal of these items' end times (which
     *  occurs every 30 days).
     *  </span>
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * The format of the listing, such as online auction, fixed price, or
     *  advertisement.
     *  <dl>
     *  <dt>
     *  <strong>listingType values:</strong>
     *  </dt>
     *  <dt>
     *  AdFormat
     *  </dt>
     *  <dd>
     *  Advertisement to solicit inquiries on listings such as real estate.
     *  Permits no bidding on that item, service, or property. To express
     *  interest, a buyer fills out a contact form that eBay forwards to the
     *  seller as a lead. This format does not enable buyers and sellers to
     *  transact online through eBay and eBay Feedback is not available for
     *  ad format listings.
     *  </dd>
     *  <dt>
     *  Auction
     *  </dt>
     *  <dd>
     *  Competitive-bid online auction format. Buyers engage in competitive
     *  bidding, although Buy It Now may be offered as long as no valid bids
     *  have been placed. Online auctions are listed on eBay.com; they can
     *  also be listed in a seller's eBay Store if the seller is a Store
     *  owner.
     *  </dd>
     *  <dt>
     *  AuctionWithBIN
     *  </dt>
     *  <dd>
     *  Same as Auction format, but Buy It Now is enabled. AuctionWithBIN
     *  changes to Auction if a valid bid has been placed on the item. Valid
     *  bids include bids that are equal to or above any specified reserve
     *  price.
     *  </dd>
     *  <dt>
     *  Classified
     *  </dt>
     *  <dd>
     *  Classified Ads connect buyers and sellers, who then complete the sale
     *  outside of eBay. This format does not enable buyers and sellers to
     *  transact online through eBay and eBay Feedback is not available for
     *  these listing types.
     *  </dd>
     *  <dt>
     *  FixedPrice
     *  </dt>
     *  <dd>
     *  A fixed-price listing. Auction-style bidding is not allowed. On some
     *  sites, this auction format is also known as "Buy It Now Only" (not to
     *  be confused with the Buy It Now option available with competitive-
     *  bidding auctions). Fixed-price listings appear on eBay.com; they can
     *  also be listed in a seller's eBay Store if the seller is a Store
     *  owner.
     *  </dd>
     *  </dl>
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * If true, a generic gift icon displays next the listing's title in search
     *  and browse pages.
     *
     * @var bool $gift
     */
    private $gift = null;

    /**
     * The number of users that have added the item to their watch list.
     *
     * @var int $watchCount
     */
    private $watchCount = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as bestOfferEnabled
     *
     * Shows whether or not the seller will accept a best offer for the
     *  associated item. Best Offer allows a buyer to make a lower-priced binding
     *  offer on a fixed price item. Buyers cannot see how many offers have been
     *  made (only the seller can see this information). To make a best offer on
     *  a listing, use the eBay Web site.
     *
     * @return bool
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * Sets a new bestOfferEnabled
     *
     * Shows whether or not the seller will accept a best offer for the
     *  associated item. Best Offer allows a buyer to make a lower-priced binding
     *  offer on a fixed price item. Buyers cannot see how many offers have been
     *  made (only the seller can see this information). To make a best offer on
     *  a listing, use the eBay Web site.
     *
     * @param bool $bestOfferEnabled
     * @return self
     */
    public function setBestOfferEnabled($bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }

    /**
     * Gets as buyItNowAvailable
     *
     * Applies only to auction listings that were listed with a Buy It Now
     *  price. Buy It Now lets a user purchase the item at a fixed price,
     *  effectively ending the auction. On most sites, the Buy It Now option is
     *  removed (and this value returns false) once a valid bid is made on the
     *  associated item (a valid bid could be a bid above the reserve price).
     *  <br><br>
     *  buyItNowAvailable will return "false" if the listing type is anything but
     *  "AuctionWithBIN". Please ignore buyItNowAvailable for fixed-price
     *  listings.
     *
     * @return bool
     */
    public function getBuyItNowAvailable()
    {
        return $this->buyItNowAvailable;
    }

    /**
     * Sets a new buyItNowAvailable
     *
     * Applies only to auction listings that were listed with a Buy It Now
     *  price. Buy It Now lets a user purchase the item at a fixed price,
     *  effectively ending the auction. On most sites, the Buy It Now option is
     *  removed (and this value returns false) once a valid bid is made on the
     *  associated item (a valid bid could be a bid above the reserve price).
     *  <br><br>
     *  buyItNowAvailable will return "false" if the listing type is anything but
     *  "AuctionWithBIN". Please ignore buyItNowAvailable for fixed-price
     *  listings.
     *
     * @param bool $buyItNowAvailable
     * @return self
     */
    public function setBuyItNowAvailable($buyItNowAvailable)
    {
        $this->buyItNowAvailable = $buyItNowAvailable;
        return $this;
    }

    /**
     * Gets as buyItNowPrice
     *
     * The Buy It Now Price of the item (if any), in the currency of the site on
     *  which the item was listed. You can use this field to determine if the
     *  item was originally listed with Buy It Now, even if the Buy It Now option
     *  is no longer available for the item.
     *  <br><br>
     *  For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad
     *  Format (AdFormat), and Classified Ad (Classified) listings, currentPrice
     *  is the current fixed price.
     *  <br><br>
     *  Only returned if an item was listed with Buy It Now.
     *
     * @return \Nogrod\eBaySDK\Finding\AmountType
     */
    public function getBuyItNowPrice()
    {
        return $this->buyItNowPrice;
    }

    /**
     * Sets a new buyItNowPrice
     *
     * The Buy It Now Price of the item (if any), in the currency of the site on
     *  which the item was listed. You can use this field to determine if the
     *  item was originally listed with Buy It Now, even if the Buy It Now option
     *  is no longer available for the item.
     *  <br><br>
     *  For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad
     *  Format (AdFormat), and Classified Ad (Classified) listings, currentPrice
     *  is the current fixed price.
     *  <br><br>
     *  Only returned if an item was listed with Buy It Now.
     *
     * @param \Nogrod\eBaySDK\Finding\AmountType $buyItNowPrice
     * @return self
     */
    public function setBuyItNowPrice(\Nogrod\eBaySDK\Finding\AmountType $buyItNowPrice)
    {
        $this->buyItNowPrice = $buyItNowPrice;
        return $this;
    }

    /**
     * Gets as convertedBuyItNowPrice
     *
     * The listing's Buy It Now Price (if any), converted into the currency of
     *  the site to which you sent your search request. For active items, refresh
     *  this value every 24 hours to pick up changes in conversion rates (if this
     *  value has been converted).
     *  <br><br>
     *  Price fields are returned as doubles, not necessarily in the traditional
     *  monetary format of the site's country. For example, a US Dollar value
     *  might be returned as 3.880001 instead of 3.88.
     *  <br><br>
     *  Only returned if an item was listed with Buy It Now.
     *
     * @return \Nogrod\eBaySDK\Finding\AmountType
     */
    public function getConvertedBuyItNowPrice()
    {
        return $this->convertedBuyItNowPrice;
    }

    /**
     * Sets a new convertedBuyItNowPrice
     *
     * The listing's Buy It Now Price (if any), converted into the currency of
     *  the site to which you sent your search request. For active items, refresh
     *  this value every 24 hours to pick up changes in conversion rates (if this
     *  value has been converted).
     *  <br><br>
     *  Price fields are returned as doubles, not necessarily in the traditional
     *  monetary format of the site's country. For example, a US Dollar value
     *  might be returned as 3.880001 instead of 3.88.
     *  <br><br>
     *  Only returned if an item was listed with Buy It Now.
     *
     * @param \Nogrod\eBaySDK\Finding\AmountType $convertedBuyItNowPrice
     * @return self
     */
    public function setConvertedBuyItNowPrice(\Nogrod\eBaySDK\Finding\AmountType $convertedBuyItNowPrice)
    {
        $this->convertedBuyItNowPrice = $convertedBuyItNowPrice;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * Time stamp that eBay recorded as the moment the listing was made
     *  available. This value is returned in GMT, the ISO 8601 date and time
     *  format (YYYY-MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for
     *  information about the time format, and for details on converting to and
     *  from the GMT time zone. Note that it is possible for startTime to be
     *  different from the value returned by GetSingleItem.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * Time stamp that eBay recorded as the moment the listing was made
     *  available. This value is returned in GMT, the ISO 8601 date and time
     *  format (YYYY-MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for
     *  information about the time format, and for details on converting to and
     *  from the GMT time zone. Note that it is possible for startTime to be
     *  different from the value returned by GetSingleItem.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * Time stamp specifying when the listing is scheduled to end, or the
     *  actual end time if the item listing has ended. This value is returned in
     *  GMT, the ISO 8601 date and time format (YYYY-MM- DDTHH:MM:SS.SSSZ). See
     *  the "dateTime" type for information about the time format, and for
     *  details on converting to and from the GMT time zone.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  For items that are "Good Till Canceled," this value is 5 minutes later
     *  than the actual end time of the item. This difference in time is
     *  intended to facilitate the renewal of these items' end times (which
     *  occurs every 30 days).
     *  </span>
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * Time stamp specifying when the listing is scheduled to end, or the
     *  actual end time if the item listing has ended. This value is returned in
     *  GMT, the ISO 8601 date and time format (YYYY-MM- DDTHH:MM:SS.SSSZ). See
     *  the "dateTime" type for information about the time format, and for
     *  details on converting to and from the GMT time zone.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  For items that are "Good Till Canceled," this value is 5 minutes later
     *  than the actual end time of the item. This difference in time is
     *  intended to facilitate the renewal of these items' end times (which
     *  occurs every 30 days).
     *  </span>
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * The format of the listing, such as online auction, fixed price, or
     *  advertisement.
     *  <dl>
     *  <dt>
     *  <strong>listingType values:</strong>
     *  </dt>
     *  <dt>
     *  AdFormat
     *  </dt>
     *  <dd>
     *  Advertisement to solicit inquiries on listings such as real estate.
     *  Permits no bidding on that item, service, or property. To express
     *  interest, a buyer fills out a contact form that eBay forwards to the
     *  seller as a lead. This format does not enable buyers and sellers to
     *  transact online through eBay and eBay Feedback is not available for
     *  ad format listings.
     *  </dd>
     *  <dt>
     *  Auction
     *  </dt>
     *  <dd>
     *  Competitive-bid online auction format. Buyers engage in competitive
     *  bidding, although Buy It Now may be offered as long as no valid bids
     *  have been placed. Online auctions are listed on eBay.com; they can
     *  also be listed in a seller's eBay Store if the seller is a Store
     *  owner.
     *  </dd>
     *  <dt>
     *  AuctionWithBIN
     *  </dt>
     *  <dd>
     *  Same as Auction format, but Buy It Now is enabled. AuctionWithBIN
     *  changes to Auction if a valid bid has been placed on the item. Valid
     *  bids include bids that are equal to or above any specified reserve
     *  price.
     *  </dd>
     *  <dt>
     *  Classified
     *  </dt>
     *  <dd>
     *  Classified Ads connect buyers and sellers, who then complete the sale
     *  outside of eBay. This format does not enable buyers and sellers to
     *  transact online through eBay and eBay Feedback is not available for
     *  these listing types.
     *  </dd>
     *  <dt>
     *  FixedPrice
     *  </dt>
     *  <dd>
     *  A fixed-price listing. Auction-style bidding is not allowed. On some
     *  sites, this auction format is also known as "Buy It Now Only" (not to
     *  be confused with the Buy It Now option available with competitive-
     *  bidding auctions). Fixed-price listings appear on eBay.com; they can
     *  also be listed in a seller's eBay Store if the seller is a Store
     *  owner.
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * The format of the listing, such as online auction, fixed price, or
     *  advertisement.
     *  <dl>
     *  <dt>
     *  <strong>listingType values:</strong>
     *  </dt>
     *  <dt>
     *  AdFormat
     *  </dt>
     *  <dd>
     *  Advertisement to solicit inquiries on listings such as real estate.
     *  Permits no bidding on that item, service, or property. To express
     *  interest, a buyer fills out a contact form that eBay forwards to the
     *  seller as a lead. This format does not enable buyers and sellers to
     *  transact online through eBay and eBay Feedback is not available for
     *  ad format listings.
     *  </dd>
     *  <dt>
     *  Auction
     *  </dt>
     *  <dd>
     *  Competitive-bid online auction format. Buyers engage in competitive
     *  bidding, although Buy It Now may be offered as long as no valid bids
     *  have been placed. Online auctions are listed on eBay.com; they can
     *  also be listed in a seller's eBay Store if the seller is a Store
     *  owner.
     *  </dd>
     *  <dt>
     *  AuctionWithBIN
     *  </dt>
     *  <dd>
     *  Same as Auction format, but Buy It Now is enabled. AuctionWithBIN
     *  changes to Auction if a valid bid has been placed on the item. Valid
     *  bids include bids that are equal to or above any specified reserve
     *  price.
     *  </dd>
     *  <dt>
     *  Classified
     *  </dt>
     *  <dd>
     *  Classified Ads connect buyers and sellers, who then complete the sale
     *  outside of eBay. This format does not enable buyers and sellers to
     *  transact online through eBay and eBay Feedback is not available for
     *  these listing types.
     *  </dd>
     *  <dt>
     *  FixedPrice
     *  </dt>
     *  <dd>
     *  A fixed-price listing. Auction-style bidding is not allowed. On some
     *  sites, this auction format is also known as "Buy It Now Only" (not to
     *  be confused with the Buy It Now option available with competitive-
     *  bidding auctions). Fixed-price listings appear on eBay.com; they can
     *  also be listed in a seller's eBay Store if the seller is a Store
     *  owner.
     *  </dd>
     *  </dl>
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as gift
     *
     * If true, a generic gift icon displays next the listing's title in search
     *  and browse pages.
     *
     * @return bool
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Sets a new gift
     *
     * If true, a generic gift icon displays next the listing's title in search
     *  and browse pages.
     *
     * @param bool $gift
     * @return self
     */
    public function setGift($gift)
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * Gets as watchCount
     *
     * The number of users that have added the item to their watch list.
     *
     * @return int
     */
    public function getWatchCount()
    {
        return $this->watchCount;
    }

    /**
     * Sets a new watchCount
     *
     * The number of users that have added the item to their watch list.
     *
     * @param int $watchCount
     * @return self
     */
    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getBestOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}bestOfferEnabled", $value);
        }
        $value = $this->getBuyItNowAvailable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}buyItNowAvailable", $value);
        }
        $value = $this->getBuyItNowPrice();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}buyItNowPrice", $value);
        }
        $value = $this->getConvertedBuyItNowPrice();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}convertedBuyItNowPrice", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}startTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}endTime", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}listingType", $value);
        }
        $value = $this->getGift();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}gift", $value);
        }
        $value = $this->getWatchCount();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}watchCount", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}bestOfferEnabled');
        if (null !== $value) {
            $this->setBestOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}buyItNowAvailable');
        if (null !== $value) {
            $this->setBuyItNowAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}buyItNowPrice');
        if (null !== $value) {
            $this->setBuyItNowPrice(\Nogrod\eBaySDK\Finding\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}convertedBuyItNowPrice');
        if (null !== $value) {
            $this->setConvertedBuyItNowPrice(\Nogrod\eBaySDK\Finding\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}startTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}endTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}listingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}gift');
        if (null !== $value) {
            $this->setGift($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}watchCount');
        if (null !== $value) {
            $this->setWatchCount($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
