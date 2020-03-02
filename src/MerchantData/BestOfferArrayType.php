<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BestOfferArrayType
 *
 * An array of one or more Best Offers. This type is used in the responses of the <b>GetBestOffers</b> and <b>RespondToBestOffer</b> calls.
 * XSD Type: BestOfferArrayType
 */
class BestOfferArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * For <b>GetBestOffers</b>, each <b>BestOffer</b> container consists of detailed information on the Best Offer/Counter Offer, including the type of Best Offer (Best Offer, Buyer/Seller Counter Offer), amount of the Best Offer/Counter Offer, and status of Best Offer/Counter Offer.
     *  <br/><br/>
     *  For <b>RespondToBestOffer</b>, each <b>BestOffer</b> container provides the status ('Success' or 'Failure') of the Best Offer action (Accept, Counter, or Decline), which are defined in <a href="types/BestOfferActionCodeType.html">BestOfferActionCodeType</a>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BestOfferType[] $bestOffer
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
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferType $bestOffer
     */
    public function addToBestOffer(\Nogrod\eBaySDK\MerchantData\BestOfferType $bestOffer)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\BestOfferType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferType[] $bestOffer
     * @return self
     */
    public function setBestOffer(array $bestOffer)
    {
        $this->bestOffer = $bestOffer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBestOffer();
        if (null !== $value && !empty($this->getBestOffer())) {
            $writer->write(array_map(function ($v) {
                return ["BestOffer" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOffer', true);
        if (null !== $value && !empty($value)) {
            $this->setBestOffer(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\BestOfferType::fromKeyValue($v);
            }, $value));
        }
    }
}
