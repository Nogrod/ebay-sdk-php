<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BestOfferArrayType
 *
 * An array of one or more Best Offers. This type is used in the responses of the <b>GetBestOffers</b> and <b>RespondToBestOffer</b> calls.
 * XSD Type: BestOfferArrayType
 */
class BestOfferArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter Offer, and status of Best Offer/Counter Offer.
     *  <br/><br/>
     *  For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     *
     * @var \Nogrod\eBaySDK\Trading\BestOfferType[] $bestOffer
     */
    private $bestOffer = [

    ];

    /**
     * Adds as bestOffer
     *
     * For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter Offer, and status of Best Offer/Counter Offer.
     *  <br/><br/>
     *  For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BestOfferType $bestOffer
     */
    public function addToBestOffer(\Nogrod\eBaySDK\Trading\BestOfferType $bestOffer)
    {
        if (!is_array($this->bestOffer)) {
            throw new \LogicException('bestOffer is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->bestOffer[] = $bestOffer;
        return $this;
    }

    /**
     * isset bestOffer
     *
     * For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter Offer, and status of Best Offer/Counter Offer.
     *  <br/><br/>
     *  For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBestOffer($index)
    {
        return isset($this->bestOffer[$index]);
    }

    /**
     * unset bestOffer
     *
     * For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter Offer, and status of Best Offer/Counter Offer.
     *  <br/><br/>
     *  For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBestOffer($index)
    {
        unset($this->bestOffer[$index]);
    }

    /**
     * Gets as bestOffer
     *
     * For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter Offer, and status of Best Offer/Counter Offer.
     *  <br/><br/>
     *  For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\BestOfferType>
     */
    public function getBestOffer()
    {
        return $this->bestOffer;
    }

    /**
     * Sets a new bestOffer
     *
     * For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter Offer, and status of Best Offer/Counter Offer.
     *  <br/><br/>
     *  For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\BestOfferType> $bestOffer
     * @return self
     */
    public function setBestOffer(iterable $bestOffer)
    {
        $this->bestOffer = $bestOffer;
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
        $value = $this->bestOffer;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'BestOffer', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BestOfferArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->bestOffer = [];
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
                case 'BestOffer':
                    $this->bestOffer[] = \Nogrod\eBaySDK\Trading\BestOfferType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['BestOffer'] = Func::jsonList($this->bestOffer);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
