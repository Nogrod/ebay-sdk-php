<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OfferArrayType
 *
 * Type used by the <b>BidArray</b> container that is returned in the <b>GetAllBidders</b> response. The <b>BidArray</b> container is an array of all bids made on an auction listing that is specified in the call request.
 * XSD Type: OfferArrayType
 */
class OfferArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data for the user making the bid.
     *
     * @var \Nogrod\eBaySDK\Trading\OfferType[] $offer
     */
    private $offer = [
        
    ];

    /**
     * Adds as offer
     *
     * Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data for the user making the bid.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OfferType $offer
     */
    public function addToOffer(\Nogrod\eBaySDK\Trading\OfferType $offer)
    {
        $this->offer[] = $offer;
        return $this;
    }

    /**
     * isset offer
     *
     * Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data for the user making the bid.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data for the user making the bid.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data for the user making the bid.
     *
     * @return \Nogrod\eBaySDK\Trading\OfferType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Each <b>Offer</b> container consists of detailed information on each bid made on an auction listing that is specified in the call request. Information in this container includes the amount of the bid, the time of the bid, and data for the user making the bid.
     *
     * @param \Nogrod\eBaySDK\Trading\OfferType[] $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOffer();
        if (null !== $value && !empty($this->getOffer())) {
            $writer->write(array_map(function ($v) {
                return ["Offer" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Offer', true);
        if (null !== $value && !empty($value)) {
            $this->setOffer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\OfferType::fromKeyValue($v);
            }, $value));
        }
    }
}
