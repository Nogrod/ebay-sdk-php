<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BiddingDetailsType
 *
 * Type defining the <b>BiddingDetails</b> container, which consists of
 *  information about the buyer's bidding history on a single auction item.
 * XSD Type: BiddingDetailsType
 */
class BiddingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Converted value (from seller's currency to buyer's currency) of the amount in the <b>MaxBid</b> field. This field is only applicable and returned if the buyer purchased an item from an eBay site in another country. For active items, it is recommended to refresh the listing's data every 24 hours to pick up the current conversion rates.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedMaxBid
     */
    private $convertedMaxBid = null;

    /**
     * This value is the dollar value of the highest bid that the buyer placed on the
     *  auction item.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $maxBid
     */
    private $maxBid = null;

    /**
     * This value is the total number of bids that the buyer placed on the
     *  auction item throughout the duration of the listing.
     *
     * @var int $quantityBid
     */
    private $quantityBid = null;

    /**
     * This field will only be returned if the buyer won the auction item, and if it is returned, its value will always be <code>1</code>.
     *
     * @var int $quantityWon
     */
    private $quantityWon = null;

    /**
     * This field is returned as <code>true</code> if the prospective buyer is the current high bidder in an active listing.
     *
     * @var bool $winning
     */
    private $winning = null;

    /**
     * Gets as convertedMaxBid
     *
     * Converted value (from seller's currency to buyer's currency) of the amount in the <b>MaxBid</b> field. This field is only applicable and returned if the buyer purchased an item from an eBay site in another country. For active items, it is recommended to refresh the listing's data every 24 hours to pick up the current conversion rates.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedMaxBid()
    {
        return $this->convertedMaxBid;
    }

    /**
     * Sets a new convertedMaxBid
     *
     * Converted value (from seller's currency to buyer's currency) of the amount in the <b>MaxBid</b> field. This field is only applicable and returned if the buyer purchased an item from an eBay site in another country. For active items, it is recommended to refresh the listing's data every 24 hours to pick up the current conversion rates.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedMaxBid
     * @return self
     */
    public function setConvertedMaxBid(\Nogrod\eBaySDK\Trading\AmountType $convertedMaxBid)
    {
        $this->convertedMaxBid = $convertedMaxBid;
        return $this;
    }

    /**
     * Gets as maxBid
     *
     * This value is the dollar value of the highest bid that the buyer placed on the
     *  auction item.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMaxBid()
    {
        return $this->maxBid;
    }

    /**
     * Sets a new maxBid
     *
     * This value is the dollar value of the highest bid that the buyer placed on the
     *  auction item.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $maxBid
     * @return self
     */
    public function setMaxBid(\Nogrod\eBaySDK\Trading\AmountType $maxBid)
    {
        $this->maxBid = $maxBid;
        return $this;
    }

    /**
     * Gets as quantityBid
     *
     * This value is the total number of bids that the buyer placed on the
     *  auction item throughout the duration of the listing.
     *
     * @return int
     */
    public function getQuantityBid()
    {
        return $this->quantityBid;
    }

    /**
     * Sets a new quantityBid
     *
     * This value is the total number of bids that the buyer placed on the
     *  auction item throughout the duration of the listing.
     *
     * @param int $quantityBid
     * @return self
     */
    public function setQuantityBid($quantityBid)
    {
        $this->quantityBid = $quantityBid;
        return $this;
    }

    /**
     * Gets as quantityWon
     *
     * This field will only be returned if the buyer won the auction item, and if it is returned, its value will always be <code>1</code>.
     *
     * @return int
     */
    public function getQuantityWon()
    {
        return $this->quantityWon;
    }

    /**
     * Sets a new quantityWon
     *
     * This field will only be returned if the buyer won the auction item, and if it is returned, its value will always be <code>1</code>.
     *
     * @param int $quantityWon
     * @return self
     */
    public function setQuantityWon($quantityWon)
    {
        $this->quantityWon = $quantityWon;
        return $this;
    }

    /**
     * Gets as winning
     *
     * This field is returned as <code>true</code> if the prospective buyer is the current high bidder in an active listing.
     *
     * @return bool
     */
    public function getWinning()
    {
        return $this->winning;
    }

    /**
     * Sets a new winning
     *
     * This field is returned as <code>true</code> if the prospective buyer is the current high bidder in an active listing.
     *
     * @param bool $winning
     * @return self
     */
    public function setWinning($winning)
    {
        $this->winning = $winning;
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
        $value = $this->convertedMaxBid;
        if (null !== $value) {
            $writer->startElementNs(null, 'ConvertedMaxBid', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->maxBid;
        if (null !== $value) {
            $writer->startElementNs(null, 'MaxBid', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->quantityBid;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuantityBid', null, (string) $value);
        }
        $value = $this->quantityWon;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuantityWon', null, (string) $value);
        }
        $value = $this->winning;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Winning', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BiddingDetailsType
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
                case 'ConvertedMaxBid':
                    $this->convertedMaxBid = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'MaxBid':
                    $this->maxBid = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'QuantityBid':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->quantityBid = (int) $value;
                    }
                    return true;
                case 'QuantityWon':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->quantityWon = (int) $value;
                    }
                    return true;
                case 'Winning':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->winning = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ConvertedMaxBid'] = $this->convertedMaxBid;
        $data['MaxBid'] = $this->maxBid;
        $data['QuantityBid'] = $this->quantityBid;
        $data['QuantityWon'] = $this->quantityWon;
        $data['Winning'] = $this->winning;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
