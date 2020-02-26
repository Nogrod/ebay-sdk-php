<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BestOfferType
 *
 * Type defining the <b>BestOffer</b> container, which consists of information on one Best Offer or counter offer. This information includes the price of the offer, the expiration of the offer, and any messaging provided by the prospective buyer or seller.
 * XSD Type: BestOfferType
 */
class BestOfferType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Unique identifier for a Best Offer. This identifier is created once a prospective buyer makes a Best Offer on an item.
     *
     * @var string $bestOfferID
     */
    private $bestOfferID = null;

    /**
     * Timestamp indicating when a Best Offer will naturally expire (if the
     *  seller has not accepted or declined the offer).
     *
     * @var \DateTime $expirationTime
     */
    private $expirationTime = null;

    /**
     * Container consisting of information about the prospective buyer who made the Best Offer.
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $buyer
     */
    private $buyer = null;

    /**
     * The amount of the Best Offer or counter offer. For this field to be returned, the user must have a relationship to the Best Offer, either as the seller, buyer, or potential buyer who has made the Best Offer or counter offer.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $price
     */
    private $price = null;

    /**
     * The status of the Best Offer or counter offer. For <b>PlaceOffer</b>, the only applicable values are <code>Accepted</code>, <code>AdminEnded</code>, <code>Declined</code>, and <code>Expired</code>.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The quantity of the item for which the buyer is making a Best Offer. This value will usually be <code>1</code>, unless the buyer is making an offer on multiple quantity of a line item in a multi-quantity listing.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * A prospective buyer has the option to include a comment when placing a Best Offer or making a counter offer to the seller's counter offer. This field will display that comment.
     *
     * @var string $buyerMessage
     */
    private $buyerMessage = null;

    /**
     * A seller has the option to include a comment when making a counter offer to the prospective buyer's Best Offer. This field will display that comment.
     *
     * @var string $sellerMessage
     */
    private $sellerMessage = null;

    /**
     * This value indicates whether the corresponding offer is a Best Offer, a seller's counter offer, or a buyer counter offer to the seller's counter offer.
     *
     * @var string $bestOfferCodeType
     */
    private $bestOfferCodeType = null;

    /**
     * The value in this field (<code>Success</code> or <code>Failure</code>) will indicate whether or not the seller's attempt to accept, decline, or counter offer a Best Offer was successful. This field is only used by the <b>RespondToBestOffer</b> response.
     *
     * @var string $callStatus
     */
    private $callStatus = null;

    /**
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @var bool $newBestOffer
     */
    private $newBestOffer = null;

    /**
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @var bool $immediatePayEligible
     */
    private $immediatePayEligible = null;

    /**
     * Gets as bestOfferID
     *
     * Unique identifier for a Best Offer. This identifier is created once a prospective buyer makes a Best Offer on an item.
     *
     * @return string
     */
    public function getBestOfferID()
    {
        return $this->bestOfferID;
    }

    /**
     * Sets a new bestOfferID
     *
     * Unique identifier for a Best Offer. This identifier is created once a prospective buyer makes a Best Offer on an item.
     *
     * @param string $bestOfferID
     * @return self
     */
    public function setBestOfferID($bestOfferID)
    {
        $this->bestOfferID = $bestOfferID;
        return $this;
    }

    /**
     * Gets as expirationTime
     *
     * Timestamp indicating when a Best Offer will naturally expire (if the
     *  seller has not accepted or declined the offer).
     *
     * @return \DateTime
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * Sets a new expirationTime
     *
     * Timestamp indicating when a Best Offer will naturally expire (if the
     *  seller has not accepted or declined the offer).
     *
     * @param \DateTime $expirationTime
     * @return self
     */
    public function setExpirationTime(\DateTime $expirationTime)
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * Gets as buyer
     *
     * Container consisting of information about the prospective buyer who made the Best Offer.
     *
     * @return \Nogrod\eBaySDK\Trading\UserType
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Sets a new buyer
     *
     * Container consisting of information about the prospective buyer who made the Best Offer.
     *
     * @param \Nogrod\eBaySDK\Trading\UserType $buyer
     * @return self
     */
    public function setBuyer(\Nogrod\eBaySDK\Trading\UserType $buyer)
    {
        $this->buyer = $buyer;
        return $this;
    }

    /**
     * Gets as price
     *
     * The amount of the Best Offer or counter offer. For this field to be returned, the user must have a relationship to the Best Offer, either as the seller, buyer, or potential buyer who has made the Best Offer or counter offer.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * The amount of the Best Offer or counter offer. For this field to be returned, the user must have a relationship to the Best Offer, either as the seller, buyer, or potential buyer who has made the Best Offer or counter offer.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $price
     * @return self
     */
    public function setPrice(\Nogrod\eBaySDK\Trading\AmountType $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the Best Offer or counter offer. For <b>PlaceOffer</b>, the only applicable values are <code>Accepted</code>, <code>AdminEnded</code>, <code>Declined</code>, and <code>Expired</code>.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the Best Offer or counter offer. For <b>PlaceOffer</b>, the only applicable values are <code>Accepted</code>, <code>AdminEnded</code>, <code>Declined</code>, and <code>Expired</code>.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of the item for which the buyer is making a Best Offer. This value will usually be <code>1</code>, unless the buyer is making an offer on multiple quantity of a line item in a multi-quantity listing.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of the item for which the buyer is making a Best Offer. This value will usually be <code>1</code>, unless the buyer is making an offer on multiple quantity of a line item in a multi-quantity listing.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as buyerMessage
     *
     * A prospective buyer has the option to include a comment when placing a Best Offer or making a counter offer to the seller's counter offer. This field will display that comment.
     *
     * @return string
     */
    public function getBuyerMessage()
    {
        return $this->buyerMessage;
    }

    /**
     * Sets a new buyerMessage
     *
     * A prospective buyer has the option to include a comment when placing a Best Offer or making a counter offer to the seller's counter offer. This field will display that comment.
     *
     * @param string $buyerMessage
     * @return self
     */
    public function setBuyerMessage($buyerMessage)
    {
        $this->buyerMessage = $buyerMessage;
        return $this;
    }

    /**
     * Gets as sellerMessage
     *
     * A seller has the option to include a comment when making a counter offer to the prospective buyer's Best Offer. This field will display that comment.
     *
     * @return string
     */
    public function getSellerMessage()
    {
        return $this->sellerMessage;
    }

    /**
     * Sets a new sellerMessage
     *
     * A seller has the option to include a comment when making a counter offer to the prospective buyer's Best Offer. This field will display that comment.
     *
     * @param string $sellerMessage
     * @return self
     */
    public function setSellerMessage($sellerMessage)
    {
        $this->sellerMessage = $sellerMessage;
        return $this;
    }

    /**
     * Gets as bestOfferCodeType
     *
     * This value indicates whether the corresponding offer is a Best Offer, a seller's counter offer, or a buyer counter offer to the seller's counter offer.
     *
     * @return string
     */
    public function getBestOfferCodeType()
    {
        return $this->bestOfferCodeType;
    }

    /**
     * Sets a new bestOfferCodeType
     *
     * This value indicates whether the corresponding offer is a Best Offer, a seller's counter offer, or a buyer counter offer to the seller's counter offer.
     *
     * @param string $bestOfferCodeType
     * @return self
     */
    public function setBestOfferCodeType($bestOfferCodeType)
    {
        $this->bestOfferCodeType = $bestOfferCodeType;
        return $this;
    }

    /**
     * Gets as callStatus
     *
     * The value in this field (<code>Success</code> or <code>Failure</code>) will indicate whether or not the seller's attempt to accept, decline, or counter offer a Best Offer was successful. This field is only used by the <b>RespondToBestOffer</b> response.
     *
     * @return string
     */
    public function getCallStatus()
    {
        return $this->callStatus;
    }

    /**
     * Sets a new callStatus
     *
     * The value in this field (<code>Success</code> or <code>Failure</code>) will indicate whether or not the seller's attempt to accept, decline, or counter offer a Best Offer was successful. This field is only used by the <b>RespondToBestOffer</b> response.
     *
     * @param string $callStatus
     * @return self
     */
    public function setCallStatus($callStatus)
    {
        $this->callStatus = $callStatus;
        return $this;
    }

    /**
     * Gets as newBestOffer
     *
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @return bool
     */
    public function getNewBestOffer()
    {
        return $this->newBestOffer;
    }

    /**
     * Sets a new newBestOffer
     *
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @param bool $newBestOffer
     * @return self
     */
    public function setNewBestOffer($newBestOffer)
    {
        $this->newBestOffer = $newBestOffer;
        return $this;
    }

    /**
     * Gets as immediatePayEligible
     *
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @return bool
     */
    public function getImmediatePayEligible()
    {
        return $this->immediatePayEligible;
    }

    /**
     * Sets a new immediatePayEligible
     *
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @param bool $immediatePayEligible
     * @return self
     */
    public function setImmediatePayEligible($immediatePayEligible)
    {
        $this->immediatePayEligible = $immediatePayEligible;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBestOfferID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferID", $value);
        }
        $value = $this->getExpirationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpirationTime", $value);
        }
        $value = $this->getBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Buyer", $value);
        }
        $value = $this->getPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Price", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getBuyerMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerMessage", $value);
        }
        $value = $this->getSellerMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerMessage", $value);
        }
        $value = $this->getBestOfferCodeType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferCodeType", $value);
        }
        $value = $this->getCallStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CallStatus", $value);
        }
        $value = $this->getNewBestOffer();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewBestOffer", $value);
        }
        $value = $this->getImmediatePayEligible();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImmediatePayEligible", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferID');
        if (null !== $value) {
            $this->setBestOfferID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpirationTime');
        if (null !== $value) {
            $this->setExpirationTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Buyer');
        if (null !== $value) {
            $this->setBuyer(\Nogrod\eBaySDK\Trading\UserType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Price');
        if (null !== $value) {
            $this->setPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerMessage');
        if (null !== $value) {
            $this->setBuyerMessage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerMessage');
        if (null !== $value) {
            $this->setSellerMessage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferCodeType');
        if (null !== $value) {
            $this->setBestOfferCodeType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CallStatus');
        if (null !== $value) {
            $this->setCallStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewBestOffer');
        if (null !== $value) {
            $this->setNewBestOffer($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImmediatePayEligible');
        if (null !== $value) {
            $this->setImmediatePayEligible($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
