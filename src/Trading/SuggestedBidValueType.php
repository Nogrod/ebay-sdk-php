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
        if (!is_array($this->bidValue)) {
            throw new \LogicException('bidValue is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AmountType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\AmountType> $bidValue
     * @return self
     */
    public function setBidValue(iterable $bidValue)
    {
        $this->bidValue = $bidValue;
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
        $value = $this->bidValue;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'BidValue', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SuggestedBidValueType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->bidValue = [];
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
                case 'BidValue':
                    $this->bidValue[] = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
