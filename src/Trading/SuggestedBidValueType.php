<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SuggestedBidValueType
 *
 * This type is used by the <b>SuggestedBidValues</b> container that is returned if the buyer is attempting to bid on an auction item through the <b>PlaceOffer</b> call.
 * XSD Type: SuggestedBidValueType
 */
class SuggestedBidValueType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid increment, and the buyer's specified max bid amount.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType[] $bidValue
     */
    private $bidValue = [

    ];

    /**
     * Adds as bidValue
     *
     * The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid increment, and the buyer's specified max bid amount.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AmountType $bidValue
     */
    public function addToBidValue(\Nogrod\eBaySDK\Trading\AmountType $bidValue)
    {
        $this->bidValue[] = $bidValue;
        return $this;
    }

    /**
     * isset bidValue
     *
     * The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid increment, and the buyer's specified max bid amount.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidValue($index)
    {
        return isset($this->bidValue[$index]);
    }

    /**
     * unset bidValue
     *
     * The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid increment, and the buyer's specified max bid amount.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidValue($index)
    {
        unset($this->bidValue[$index]);
    }

    /**
     * Gets as bidValue
     *
     * The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid increment, and the buyer's specified max bid amount.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType[]
     */
    public function getBidValue()
    {
        return $this->bidValue;
    }

    /**
     * Sets a new bidValue
     *
     * The <b>SuggestedBidValues</b> container is only returned if the buyer is attempting to bid on an auction item. A <b>BidValue</b> field is returned for each incremental bid value (up to the dollar value specified in the <b>Offer.MaxBid</b> field in the request) that eBay will bid on behalf of the buyer each time that buyer is outbid for the auction item. How many <b>BidValue</b> fields that appear will depend on the current winning bid amount, the required bid increment, and the buyer's specified max bid amount.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType[] $bidValue
     * @return self
     */
    public function setBidValue(array $bidValue)
    {
        $this->bidValue = $bidValue;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBidValue();
        if (null !== $value && !empty($this->getBidValue())) {
            $writer->write(array_map(function ($v) {
                return ["BidValue" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidValue', true);
        if (null !== $value && !empty($value)) {
            $this->setBidValue(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($v);
            }, $value));
        }
    }
}
