<?php

namespace Nogrod\eBaySDK\Trading;

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
class BuyingSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalWinningCost
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
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalWonCost
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
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalWinningCost
     * @return self
     */
    public function setTotalWinningCost(\Nogrod\eBaySDK\Trading\AmountType $totalWinningCost)
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
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalWonCost
     * @return self
     */
    public function setTotalWonCost(\Nogrod\eBaySDK\Trading\AmountType $totalWonCost)
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
        $value = $this->biddingCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BiddingCount', null, (string) $value);
        }
        $value = $this->winningCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'WinningCount', null, (string) $value);
        }
        $value = $this->totalWinningCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalWinningCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->wonCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'WonCount', null, (string) $value);
        }
        $value = $this->totalWonCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalWonCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->wonDurationInDays;
        if (null !== $value) {
            $writer->writeElementNs(null, 'WonDurationInDays', null, (string) $value);
        }
        $value = $this->bestOfferCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BestOfferCount', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BuyingSummaryType
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
                case 'BiddingCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->biddingCount = (int) $value;
                    }
                    return true;
                case 'WinningCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->winningCount = (int) $value;
                    }
                    return true;
                case 'TotalWinningCost':
                    $this->totalWinningCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'WonCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->wonCount = (int) $value;
                    }
                    return true;
                case 'TotalWonCost':
                    $this->totalWonCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'WonDurationInDays':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->wonDurationInDays = (int) $value;
                    }
                    return true;
                case 'BestOfferCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bestOfferCount = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['BiddingCount'] = $this->biddingCount;
        $data['WinningCount'] = $this->winningCount;
        $data['TotalWinningCost'] = $this->totalWinningCost;
        $data['WonCount'] = $this->wonCount;
        $data['TotalWonCost'] = $this->totalWonCost;
        $data['WonDurationInDays'] = $this->wonDurationInDays;
        $data['BestOfferCount'] = $this->bestOfferCount;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
