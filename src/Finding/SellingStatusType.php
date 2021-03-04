<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingStatusType
 *
 * Selling details pertaining to the respective item.
 * XSD Type: SellingStatus
 */
class SellingStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The current price of the item given in the currency of the site on which
     *  the item is listed. That is, currentPrice is returned in the original
     *  listing currency.
     *  <br><br>
     *  For competitive-bid item listings, currentPrice is the current minimum
     *  bid price if the listing has no bids, or the current high bid if the
     *  listing has bids. A Buy It Now price has no effect on currentPrice.
     *  <br><br>
     *  For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad
     *  Format (AdFormat), and Classified Ad (Classified) listings, currentPrice
     *  is the current fixed price.
     *
     * @var \Nogrod\eBaySDK\Finding\AmountType $currentPrice
     */
    private $currentPrice = null;

    /**
     * The listing's current price converted to the currency of the site
     *  specified in the find request (globalId).
     *
     * @var \Nogrod\eBaySDK\Finding\AmountType $convertedCurrentPrice
     */
    private $convertedCurrentPrice = null;

    /**
     * The number of bids that have been placed on the item.
     *
     * @var int $bidCount
     */
    private $bidCount = null;

    /**
     * Specifies the listing's status in eBay's processing workflow. If an
     *  item's EndTime is in the past, but there are no details about the buyer
     *  or high bidder (and the user is not anonymous), you can use sellingState
     *  information to determine whether eBay has finished processing the
     *  listing.
     *  <dl>
     *  <dt>
     *  <strong>sellingState values:</strong>
     *  </dt>
     *  <dt>
     *  Active
     *  </dt>
     *  <dd>
     *  The listing is still live. It is also possible that the auction has
     *  recently ended, but eBay has not completed the final processing
     *  (e.g., the high bidder is still being determined).
     *  </dd>
     *  <dt>
     *  Canceled
     *  </dt>
     *  <dd>
     *  The listing has been canceled by either the seller or eBay.
     *  </dd>
     *  <dt>
     *  Ended
     *  </dt>
     *  <dd>
     *  The listing has ended and eBay has completed the processing of the
     *  sale (if any).
     *  </dd>
     *  <dt>
     *  EndedWithSales
     *  </dt>
     *  <dd>
     *  The listing has been ended with sales.
     *  </dd>
     *  <dt>
     *  EndedWithoutSales
     *  </dt>
     *  <dd>
     *  The listing has been ended without sales.
     *  </dd>
     *  </dl>
     *
     * @var string $sellingState
     */
    private $sellingState = null;

    /**
     * Time left before the listing ends. The duration is represented in the ISO
     *  8601 duration format (PnYnMnDTnHnMnS). For listings that have ended, the
     *  time left is PT0S (zero seconds). See the "duration" type for information
     *  about this time format.
     *
     * @var \DateInterval $timeLeft
     */
    private $timeLeft = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as currentPrice
     *
     * The current price of the item given in the currency of the site on which
     *  the item is listed. That is, currentPrice is returned in the original
     *  listing currency.
     *  <br><br>
     *  For competitive-bid item listings, currentPrice is the current minimum
     *  bid price if the listing has no bids, or the current high bid if the
     *  listing has bids. A Buy It Now price has no effect on currentPrice.
     *  <br><br>
     *  For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad
     *  Format (AdFormat), and Classified Ad (Classified) listings, currentPrice
     *  is the current fixed price.
     *
     * @return \Nogrod\eBaySDK\Finding\AmountType
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * Sets a new currentPrice
     *
     * The current price of the item given in the currency of the site on which
     *  the item is listed. That is, currentPrice is returned in the original
     *  listing currency.
     *  <br><br>
     *  For competitive-bid item listings, currentPrice is the current minimum
     *  bid price if the listing has no bids, or the current high bid if the
     *  listing has bids. A Buy It Now price has no effect on currentPrice.
     *  <br><br>
     *  For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad
     *  Format (AdFormat), and Classified Ad (Classified) listings, currentPrice
     *  is the current fixed price.
     *
     * @param \Nogrod\eBaySDK\Finding\AmountType $currentPrice
     * @return self
     */
    public function setCurrentPrice(\Nogrod\eBaySDK\Finding\AmountType $currentPrice)
    {
        $this->currentPrice = $currentPrice;
        return $this;
    }

    /**
     * Gets as convertedCurrentPrice
     *
     * The listing's current price converted to the currency of the site
     *  specified in the find request (globalId).
     *
     * @return \Nogrod\eBaySDK\Finding\AmountType
     */
    public function getConvertedCurrentPrice()
    {
        return $this->convertedCurrentPrice;
    }

    /**
     * Sets a new convertedCurrentPrice
     *
     * The listing's current price converted to the currency of the site
     *  specified in the find request (globalId).
     *
     * @param \Nogrod\eBaySDK\Finding\AmountType $convertedCurrentPrice
     * @return self
     */
    public function setConvertedCurrentPrice(\Nogrod\eBaySDK\Finding\AmountType $convertedCurrentPrice)
    {
        $this->convertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }

    /**
     * Gets as bidCount
     *
     * The number of bids that have been placed on the item.
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
     * The number of bids that have been placed on the item.
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
     * Gets as sellingState
     *
     * Specifies the listing's status in eBay's processing workflow. If an
     *  item's EndTime is in the past, but there are no details about the buyer
     *  or high bidder (and the user is not anonymous), you can use sellingState
     *  information to determine whether eBay has finished processing the
     *  listing.
     *  <dl>
     *  <dt>
     *  <strong>sellingState values:</strong>
     *  </dt>
     *  <dt>
     *  Active
     *  </dt>
     *  <dd>
     *  The listing is still live. It is also possible that the auction has
     *  recently ended, but eBay has not completed the final processing
     *  (e.g., the high bidder is still being determined).
     *  </dd>
     *  <dt>
     *  Canceled
     *  </dt>
     *  <dd>
     *  The listing has been canceled by either the seller or eBay.
     *  </dd>
     *  <dt>
     *  Ended
     *  </dt>
     *  <dd>
     *  The listing has ended and eBay has completed the processing of the
     *  sale (if any).
     *  </dd>
     *  <dt>
     *  EndedWithSales
     *  </dt>
     *  <dd>
     *  The listing has been ended with sales.
     *  </dd>
     *  <dt>
     *  EndedWithoutSales
     *  </dt>
     *  <dd>
     *  The listing has been ended without sales.
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getSellingState()
    {
        return $this->sellingState;
    }

    /**
     * Sets a new sellingState
     *
     * Specifies the listing's status in eBay's processing workflow. If an
     *  item's EndTime is in the past, but there are no details about the buyer
     *  or high bidder (and the user is not anonymous), you can use sellingState
     *  information to determine whether eBay has finished processing the
     *  listing.
     *  <dl>
     *  <dt>
     *  <strong>sellingState values:</strong>
     *  </dt>
     *  <dt>
     *  Active
     *  </dt>
     *  <dd>
     *  The listing is still live. It is also possible that the auction has
     *  recently ended, but eBay has not completed the final processing
     *  (e.g., the high bidder is still being determined).
     *  </dd>
     *  <dt>
     *  Canceled
     *  </dt>
     *  <dd>
     *  The listing has been canceled by either the seller or eBay.
     *  </dd>
     *  <dt>
     *  Ended
     *  </dt>
     *  <dd>
     *  The listing has ended and eBay has completed the processing of the
     *  sale (if any).
     *  </dd>
     *  <dt>
     *  EndedWithSales
     *  </dt>
     *  <dd>
     *  The listing has been ended with sales.
     *  </dd>
     *  <dt>
     *  EndedWithoutSales
     *  </dt>
     *  <dd>
     *  The listing has been ended without sales.
     *  </dd>
     *  </dl>
     *
     * @param string $sellingState
     * @return self
     */
    public function setSellingState($sellingState)
    {
        $this->sellingState = $sellingState;
        return $this;
    }

    /**
     * Gets as timeLeft
     *
     * Time left before the listing ends. The duration is represented in the ISO
     *  8601 duration format (PnYnMnDTnHnMnS). For listings that have ended, the
     *  time left is PT0S (zero seconds). See the "duration" type for information
     *  about this time format.
     *
     * @return \DateInterval
     */
    public function getTimeLeft()
    {
        return $this->timeLeft;
    }

    /**
     * Sets a new timeLeft
     *
     * Time left before the listing ends. The duration is represented in the ISO
     *  8601 duration format (PnYnMnDTnHnMnS). For listings that have ended, the
     *  time left is PT0S (zero seconds). See the "duration" type for information
     *  about this time format.
     *
     * @param \DateInterval $timeLeft
     * @return self
     */
    public function setTimeLeft(\DateInterval $timeLeft)
    {
        $this->timeLeft = $timeLeft;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getCurrentPrice();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}currentPrice", $value);
        }
        $value = $this->getConvertedCurrentPrice();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}convertedCurrentPrice", $value);
        }
        $value = $this->getBidCount();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}bidCount", $value);
        }
        $value = $this->getSellingState();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}sellingState", $value);
        }
        $value = $this->getTimeLeft();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}timeLeft", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}currentPrice');
        if (null !== $value) {
            $this->setCurrentPrice(\Nogrod\eBaySDK\Finding\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}convertedCurrentPrice');
        if (null !== $value) {
            $this->setConvertedCurrentPrice(\Nogrod\eBaySDK\Finding\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}bidCount');
        if (null !== $value) {
            $this->setBidCount($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}sellingState');
        if (null !== $value) {
            $this->setSellingState($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}timeLeft');
        if (null !== $value) {
            $this->setTimeLeft(new \DateInterval($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
