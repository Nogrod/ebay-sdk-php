<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OfferArrayType
 *
 * Type used by the <b>BidArray</b> container that is returned in the <b>GetAllBidders</b> response. The <b>BidArray</b> container is an array of all bids made on an auction listing that is specified in the call request.
 * XSD Type: OfferArrayType
 */
class OfferArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->offer)) {
            throw new \LogicException('offer is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\OfferType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\OfferType> $offer
     * @return self
     */
    public function setOffer(iterable $offer)
    {
        $this->offer = $offer;
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
        $value = $this->offer;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Offer', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\OfferArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->offer = [];
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
                case 'Offer':
                    $this->offer[] = \Nogrod\eBaySDK\Trading\OfferType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Offer'] = Func::jsonList($this->offer);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
