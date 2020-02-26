<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ItemBidDetailsType
 *
 * This type is used by the <b>ItemBidDetails</b> container that is returned in <b>GetAllBidders<b>. The <b>ItemBidDetails</b> container shows a few details about a user's bid on an auction listing. An <b>ItemBidDetails</b> container is returned for each bid that a user makes during the life of an auction listing. An <b>ItemBidDetails</b> container will only be returned to the seller of the auction listing or to an actual bidder for the listing.
 * XSD Type: ItemBidDetailsType
 */
class ItemBidDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The unique identifier of an item listed on the eBay site.
     *  <br><br>
     *  Since a bidder's user information is anonymous, this tag will contain the real ID value only for that bidder, and the seller of an item that the user is
     *  bidding on. For all other users, the real ID value will be replaced with the anonymous value, according to these rules:
     *  <br><br>
     *  When bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID. For example, if the UserID = IBidALot, it might be displayed as, "I****A". <br>
     *  Note that in this format, the anonymous bidder ID stays the same for every auction.
     *  <br><br>
     *  (<b>GetMyeBayBuying</b> only) when bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID.
     *  <br><br>
     *  When bidding on items listed on the UK and AU sites: UserID is replaced with the value "Bidder X" where X is a number indicating the order of that user's first bid. For example, if the user was the third bidder,
     *  UserID = Bidder 3. <br>
     *  Note that in this format, the anonymous bidder ID stays the same for a given auction, but is different for different auctions. For example, a bidder who is the third and then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder on a different auction, the bidder will be listed for that auction as "Bidder 1",
     *  not "Bidder 3".
     *  <br><br>
     *  (<b>GetMyeBayBuying</b> only) when bidding on items listed on the UK and AU sites: UserID is replaced with the string "High Bidder".
     *  <br><br>
     *  (<b>GetBestOffers</b> only) - all sites: The last part of the user ID is replaced with asterisks for users that submit best offers on an item. The seller of the item will be able to see the full User ID.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier of the eBay category that the auction item is listed under.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * The total number of bids that the user has placed on the auction item.
     *
     * @var int $bidCount
     */
    private $bidCount = null;

    /**
     * The eBay ID of the seller who listed the item.
     *  <br><br>
     *  This will be returned with the anonymous
     *  value "Seller X", where X indicates where the seller falls
     *  in the sequence of sellers that the user has purchased items
     *  from. For example, if the seller is the third seller that
     *  the user has purchased items from, the value "Seller 3" is
     *  returned.
     *
     * @var string $sellerID
     */
    private $sellerID = null;

    /**
     * This timestamp indicates the date/time at which the user placed the last bid on the auction item.
     *
     * @var \DateTime $lastBidTime
     */
    private $lastBidTime = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of an item listed on the eBay site.
     *  <br><br>
     *  Since a bidder's user information is anonymous, this tag will contain the real ID value only for that bidder, and the seller of an item that the user is
     *  bidding on. For all other users, the real ID value will be replaced with the anonymous value, according to these rules:
     *  <br><br>
     *  When bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID. For example, if the UserID = IBidALot, it might be displayed as, "I****A". <br>
     *  Note that in this format, the anonymous bidder ID stays the same for every auction.
     *  <br><br>
     *  (<b>GetMyeBayBuying</b> only) when bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID.
     *  <br><br>
     *  When bidding on items listed on the UK and AU sites: UserID is replaced with the value "Bidder X" where X is a number indicating the order of that user's first bid. For example, if the user was the third bidder,
     *  UserID = Bidder 3. <br>
     *  Note that in this format, the anonymous bidder ID stays the same for a given auction, but is different for different auctions. For example, a bidder who is the third and then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder on a different auction, the bidder will be listed for that auction as "Bidder 1",
     *  not "Bidder 3".
     *  <br><br>
     *  (<b>GetMyeBayBuying</b> only) when bidding on items listed on the UK and AU sites: UserID is replaced with the string "High Bidder".
     *  <br><br>
     *  (<b>GetBestOffers</b> only) - all sites: The last part of the user ID is replaced with asterisks for users that submit best offers on an item. The seller of the item will be able to see the full User ID.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of an item listed on the eBay site.
     *  <br><br>
     *  Since a bidder's user information is anonymous, this tag will contain the real ID value only for that bidder, and the seller of an item that the user is
     *  bidding on. For all other users, the real ID value will be replaced with the anonymous value, according to these rules:
     *  <br><br>
     *  When bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID. For example, if the UserID = IBidALot, it might be displayed as, "I****A". <br>
     *  Note that in this format, the anonymous bidder ID stays the same for every auction.
     *  <br><br>
     *  (<b>GetMyeBayBuying</b> only) when bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID.
     *  <br><br>
     *  When bidding on items listed on the UK and AU sites: UserID is replaced with the value "Bidder X" where X is a number indicating the order of that user's first bid. For example, if the user was the third bidder,
     *  UserID = Bidder 3. <br>
     *  Note that in this format, the anonymous bidder ID stays the same for a given auction, but is different for different auctions. For example, a bidder who is the third and then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder on a different auction, the bidder will be listed for that auction as "Bidder 1",
     *  not "Bidder 3".
     *  <br><br>
     *  (<b>GetMyeBayBuying</b> only) when bidding on items listed on the UK and AU sites: UserID is replaced with the string "High Bidder".
     *  <br><br>
     *  (<b>GetBestOffers</b> only) - all sites: The last part of the user ID is replaced with asterisks for users that submit best offers on an item. The seller of the item will be able to see the full User ID.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * Unique identifier of the eBay category that the auction item is listed under.
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * Unique identifier of the eBay category that the auction item is listed under.
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as bidCount
     *
     * The total number of bids that the user has placed on the auction item.
     *
     * @return int
     */
    public function getBidCount()
    {
        return $this->bidCount;
    }

    /**
     * Sets a new bidCount
     *
     * The total number of bids that the user has placed on the auction item.
     *
     * @param int $bidCount
     * @return self
     */
    public function setBidCount($bidCount)
    {
        $this->bidCount = $bidCount;
        return $this;
    }

    /**
     * Gets as sellerID
     *
     * The eBay ID of the seller who listed the item.
     *  <br><br>
     *  This will be returned with the anonymous
     *  value "Seller X", where X indicates where the seller falls
     *  in the sequence of sellers that the user has purchased items
     *  from. For example, if the seller is the third seller that
     *  the user has purchased items from, the value "Seller 3" is
     *  returned.
     *
     * @return string
     */
    public function getSellerID()
    {
        return $this->sellerID;
    }

    /**
     * Sets a new sellerID
     *
     * The eBay ID of the seller who listed the item.
     *  <br><br>
     *  This will be returned with the anonymous
     *  value "Seller X", where X indicates where the seller falls
     *  in the sequence of sellers that the user has purchased items
     *  from. For example, if the seller is the third seller that
     *  the user has purchased items from, the value "Seller 3" is
     *  returned.
     *
     * @param string $sellerID
     * @return self
     */
    public function setSellerID($sellerID)
    {
        $this->sellerID = $sellerID;
        return $this;
    }

    /**
     * Gets as lastBidTime
     *
     * This timestamp indicates the date/time at which the user placed the last bid on the auction item.
     *
     * @return \DateTime
     */
    public function getLastBidTime()
    {
        return $this->lastBidTime;
    }

    /**
     * Sets a new lastBidTime
     *
     * This timestamp indicates the date/time at which the user placed the last bid on the auction item.
     *
     * @param \DateTime $lastBidTime
     * @return self
     */
    public function setLastBidTime(\DateTime $lastBidTime)
    {
        $this->lastBidTime = $lastBidTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getBidCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidCount", $value);
        }
        $value = $this->getSellerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerID", $value);
        }
        $value = $this->getLastBidTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastBidTime", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidCount');
        if (null !== $value) {
            $this->setBidCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerID');
        if (null !== $value) {
            $this->setSellerID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastBidTime');
        if (null !== $value) {
            $this->setLastBidTime(new \DateTime($value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
