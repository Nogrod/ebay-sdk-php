<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RespondToBestOfferResponseType
 *
 * This is the base response type for the <b>RespondToBestOffer</b> call. Along with the standard output fields for Trading API calls, this type contains a <b>RespondToBestOffer</b> container that indicates whether or not the action specified in the call request (accept, decline, or counter offer) was successful.
 * XSD Type: RespondToBestOfferResponseType
 */
class RespondToBestOfferResponseType extends AbstractResponseType
{
    /**
     * The <b>BestOffer.CallStatus</b> value returned in this container will indicate whether or not the action specified in the call request (accept, decline, or counter offer) was successful. The accept and counter offer actions can only be applied toward a single Best Offer. However, multiple Best Offers on a listing can be declined with one call. All Best Offers must be successfully declined with the <b>RespondToBestOffer</b> call for the <b> BestOffer.CallStatus</b> value to be <code>Success</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\BestOfferType[] $respondToBestOffer
     */
    private $respondToBestOffer = null;

    /**
     * Adds as bestOffer
     *
     * The <b>BestOffer.CallStatus</b> value returned in this container will indicate whether or not the action specified in the call request (accept, decline, or counter offer) was successful. The accept and counter offer actions can only be applied toward a single Best Offer. However, multiple Best Offers on a listing can be declined with one call. All Best Offers must be successfully declined with the <b>RespondToBestOffer</b> call for the <b> BestOffer.CallStatus</b> value to be <code>Success</code>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BestOfferType $bestOffer
     */
    public function addToRespondToBestOffer(\Nogrod\eBaySDK\Trading\BestOfferType $bestOffer)
    {
        $this->respondToBestOffer[] = $bestOffer;
        return $this;
    }

    /**
     * isset respondToBestOffer
     *
     * The <b>BestOffer.CallStatus</b> value returned in this container will indicate whether or not the action specified in the call request (accept, decline, or counter offer) was successful. The accept and counter offer actions can only be applied toward a single Best Offer. However, multiple Best Offers on a listing can be declined with one call. All Best Offers must be successfully declined with the <b>RespondToBestOffer</b> call for the <b> BestOffer.CallStatus</b> value to be <code>Success</code>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRespondToBestOffer($index)
    {
        return isset($this->respondToBestOffer[$index]);
    }

    /**
     * unset respondToBestOffer
     *
     * The <b>BestOffer.CallStatus</b> value returned in this container will indicate whether or not the action specified in the call request (accept, decline, or counter offer) was successful. The accept and counter offer actions can only be applied toward a single Best Offer. However, multiple Best Offers on a listing can be declined with one call. All Best Offers must be successfully declined with the <b>RespondToBestOffer</b> call for the <b> BestOffer.CallStatus</b> value to be <code>Success</code>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRespondToBestOffer($index)
    {
        unset($this->respondToBestOffer[$index]);
    }

    /**
     * Gets as respondToBestOffer
     *
     * The <b>BestOffer.CallStatus</b> value returned in this container will indicate whether or not the action specified in the call request (accept, decline, or counter offer) was successful. The accept and counter offer actions can only be applied toward a single Best Offer. However, multiple Best Offers on a listing can be declined with one call. All Best Offers must be successfully declined with the <b>RespondToBestOffer</b> call for the <b> BestOffer.CallStatus</b> value to be <code>Success</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\BestOfferType[]
     */
    public function getRespondToBestOffer()
    {
        return $this->respondToBestOffer;
    }

    /**
     * Sets a new respondToBestOffer
     *
     * The <b>BestOffer.CallStatus</b> value returned in this container will indicate whether or not the action specified in the call request (accept, decline, or counter offer) was successful. The accept and counter offer actions can only be applied toward a single Best Offer. However, multiple Best Offers on a listing can be declined with one call. All Best Offers must be successfully declined with the <b>RespondToBestOffer</b> call for the <b> BestOffer.CallStatus</b> value to be <code>Success</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\BestOfferType[] $respondToBestOffer
     * @return self
     */
    public function setRespondToBestOffer(array $respondToBestOffer)
    {
        $this->respondToBestOffer = $respondToBestOffer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getRespondToBestOffer();
        if (null !== $value && [] !== $this->getRespondToBestOffer()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RespondToBestOffer", array_map(function ($v) {return ["BestOffer" => $v];}, $value));
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RespondToBestOffer');
        if (null !== $value) {
            $this->setRespondToBestOffer(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\BestOfferType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}BestOffer'));}, $value));
        }
    }
}
