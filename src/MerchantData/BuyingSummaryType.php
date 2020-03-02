<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyingSummaryType
 *
 * Type defining the <b>BuyingSummary</b> container returned in
 *  <b>GetMyeBayBuying</b>. The <b>BuyingSummary</b> container
 *  consists of data that summarizes the buyer's recent buying activity, including the
 *  number of items the user has bid on, the number of items the user is winning, and the number of items
 *  the user has won. The <b>BuyingSummary</b> container is only returned if
 *  the <b>BuyingSummary.Include</b> field is included in the <b>GetMyeBayBuying</b> request and set to
 *  <code>true</code>.
 * XSD Type: BuyingSummaryType
 */
class BuyingSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The number of auction items the user has bid on.
     *
     * @var int $biddingCount
     */
    private $biddingCount = null;

    /**
     * The number of active auction listings in which the user is currently the highest bidder.
     *
     * @var int $winningCount
     */
    private $winningCount = null;

    /**
     * The total cost of items that the user is currently the highest bidder on.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalWinningCost
     */
    private $totalWinningCost = null;

    /**
     * The number of auction items that the user has won.
     *
     * @var int $wonCount
     */
    private $wonCount = null;

    /**
     * The total cost of auction items that the user has won.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalWonCost
     */
    private $totalWonCost = null;

    /**
     * The time period for which won items are displayed. Default is 31 days.
     *
     * @var int $wonDurationInDays
     */
    private $wonDurationInDays = null;

    /**
     * The number of items the user has made Best Offers on.
     *
     * @var int $bestOfferCount
     */
    private $bestOfferCount = null;

    /**
     * Gets as biddingCount
     *
     * The number of auction items the user has bid on.
     *
     * @return int
     */
    public function getBiddingCount()
    {
        return $this->biddingCount;
    }

    /**
     * Sets a new biddingCount
     *
     * The number of auction items the user has bid on.
     *
     * @param int $biddingCount
     * @return self
     */
    public function setBiddingCount($biddingCount)
    {
        $this->biddingCount = $biddingCount;
        return $this;
    }

    /**
     * Gets as winningCount
     *
     * The number of active auction listings in which the user is currently the highest bidder.
     *
     * @return int
     */
    public function getWinningCount()
    {
        return $this->winningCount;
    }

    /**
     * Sets a new winningCount
     *
     * The number of active auction listings in which the user is currently the highest bidder.
     *
     * @param int $winningCount
     * @return self
     */
    public function setWinningCount($winningCount)
    {
        $this->winningCount = $winningCount;
        return $this;
    }

    /**
     * Gets as totalWinningCost
     *
     * The total cost of items that the user is currently the highest bidder on.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalWinningCost()
    {
        return $this->totalWinningCost;
    }

    /**
     * Sets a new totalWinningCost
     *
     * The total cost of items that the user is currently the highest bidder on.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalWinningCost
     * @return self
     */
    public function setTotalWinningCost(\Nogrod\eBaySDK\MerchantData\AmountType $totalWinningCost)
    {
        $this->totalWinningCost = $totalWinningCost;
        return $this;
    }

    /**
     * Gets as wonCount
     *
     * The number of auction items that the user has won.
     *
     * @return int
     */
    public function getWonCount()
    {
        return $this->wonCount;
    }

    /**
     * Sets a new wonCount
     *
     * The number of auction items that the user has won.
     *
     * @param int $wonCount
     * @return self
     */
    public function setWonCount($wonCount)
    {
        $this->wonCount = $wonCount;
        return $this;
    }

    /**
     * Gets as totalWonCost
     *
     * The total cost of auction items that the user has won.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalWonCost()
    {
        return $this->totalWonCost;
    }

    /**
     * Sets a new totalWonCost
     *
     * The total cost of auction items that the user has won.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalWonCost
     * @return self
     */
    public function setTotalWonCost(\Nogrod\eBaySDK\MerchantData\AmountType $totalWonCost)
    {
        $this->totalWonCost = $totalWonCost;
        return $this;
    }

    /**
     * Gets as wonDurationInDays
     *
     * The time period for which won items are displayed. Default is 31 days.
     *
     * @return int
     */
    public function getWonDurationInDays()
    {
        return $this->wonDurationInDays;
    }

    /**
     * Sets a new wonDurationInDays
     *
     * The time period for which won items are displayed. Default is 31 days.
     *
     * @param int $wonDurationInDays
     * @return self
     */
    public function setWonDurationInDays($wonDurationInDays)
    {
        $this->wonDurationInDays = $wonDurationInDays;
        return $this;
    }

    /**
     * Gets as bestOfferCount
     *
     * The number of items the user has made Best Offers on.
     *
     * @return int
     */
    public function getBestOfferCount()
    {
        return $this->bestOfferCount;
    }

    /**
     * Sets a new bestOfferCount
     *
     * The number of items the user has made Best Offers on.
     *
     * @param int $bestOfferCount
     * @return self
     */
    public function setBestOfferCount($bestOfferCount)
    {
        $this->bestOfferCount = $bestOfferCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBiddingCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BiddingCount", $value);
        }
        $value = $this->getWinningCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WinningCount", $value);
        }
        $value = $this->getTotalWinningCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalWinningCost", $value);
        }
        $value = $this->getWonCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WonCount", $value);
        }
        $value = $this->getTotalWonCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalWonCost", $value);
        }
        $value = $this->getWonDurationInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WonDurationInDays", $value);
        }
        $value = $this->getBestOfferCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BiddingCount');
        if (null !== $value) {
            $this->setBiddingCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WinningCount');
        if (null !== $value) {
            $this->setWinningCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalWinningCost');
        if (null !== $value) {
            $this->setTotalWinningCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WonCount');
        if (null !== $value) {
            $this->setWonCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalWonCost');
        if (null !== $value) {
            $this->setTotalWonCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WonDurationInDays');
        if (null !== $value) {
            $this->setWonDurationInDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferCount');
        if (null !== $value) {
            $this->setBestOfferCount($value);
        }
    }
}
