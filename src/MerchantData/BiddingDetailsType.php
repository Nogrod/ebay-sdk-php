<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BiddingDetailsType
 *
 * Type defining the <b>BiddingDetails</b> container, which consists of
 *  information about the buyer's bidding history on a single auction item.
 * XSD Type: BiddingDetailsType
 */
class BiddingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Converted value (from seller's currency to buyer's currency) of the amount in the <b>MaxBid</b> field. This field is only applicable and returned if the buyer purchased an item from an eBay site in another country. For active items, it is recommended to refresh the listing's data every 24 hours to pick up the current conversion rates.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $convertedMaxBid
     */
    private $convertedMaxBid = null;

    /**
     * This value is the dollar value of the highest bid that the buyer placed on the
     *  auction item.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $maxBid
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
     * This field is deprecated.
     *
     * @var bool $bidAssistant
     */
    private $bidAssistant = null;

    /**
     * Gets as convertedMaxBid
     *
     * Converted value (from seller's currency to buyer's currency) of the amount in the <b>MaxBid</b> field. This field is only applicable and returned if the buyer purchased an item from an eBay site in another country. For active items, it is recommended to refresh the listing's data every 24 hours to pick up the current conversion rates.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
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
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $convertedMaxBid
     * @return self
     */
    public function setConvertedMaxBid(\Nogrod\eBaySDK\MerchantData\AmountType $convertedMaxBid)
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
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
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
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $maxBid
     * @return self
     */
    public function setMaxBid(\Nogrod\eBaySDK\MerchantData\AmountType $maxBid)
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

    /**
     * Gets as bidAssistant
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getBidAssistant()
    {
        return $this->bidAssistant;
    }

    /**
     * Sets a new bidAssistant
     *
     * This field is deprecated.
     *
     * @param bool $bidAssistant
     * @return self
     */
    public function setBidAssistant($bidAssistant)
    {
        $this->bidAssistant = $bidAssistant;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getConvertedMaxBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedMaxBid", $value);
        }
        $value = $this->getMaxBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxBid", $value);
        }
        $value = $this->getQuantityBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityBid", $value);
        }
        $value = $this->getQuantityWon();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityWon", $value);
        }
        $value = $this->getWinning();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Winning", $value);
        }
        $value = $this->getBidAssistant();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidAssistant", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedMaxBid');
        if (null !== $value) {
            $this->setConvertedMaxBid(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxBid');
        if (null !== $value) {
            $this->setMaxBid(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityBid');
        if (null !== $value) {
            $this->setQuantityBid($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityWon');
        if (null !== $value) {
            $this->setQuantityWon($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Winning');
        if (null !== $value) {
            $this->setWinning($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidAssistant');
        if (null !== $value) {
            $this->setBidAssistant($value);
        }
    }
}
