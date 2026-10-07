<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BestOfferType
 *
 * Type defining the <b>BestOffer</b> container, which consists of information on one Best Offer or counter offer. This information includes the price of the offer, the expiration of the offer, and any messaging provided by the prospective buyer or seller.
 * XSD Type: BestOfferType
 */
class BestOfferType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->bestOfferID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BestOfferID', null, (string) $value);
        }
        $value = $this->expirationTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExpirationTime', null, Func::formatDateTime($value));
        }
        $value = $this->buyer;
        if (null !== $value) {
            $writer->startElementNs(null, 'Buyer', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->price;
        if (null !== $value) {
            $writer->startElementNs(null, 'Price', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->status;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Status', null, (string) $value);
        }
        $value = $this->quantity;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Quantity', null, (string) $value);
        }
        $value = $this->buyerMessage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyerMessage', null, (string) $value);
        }
        $value = $this->sellerMessage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SellerMessage', null, (string) $value);
        }
        $value = $this->bestOfferCodeType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BestOfferCodeType', null, (string) $value);
        }
        $value = $this->callStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CallStatus', null, (string) $value);
        }
        $value = $this->newBestOffer;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NewBestOffer', null, ($value ? 'true' : 'false'));
        }
        $value = $this->immediatePayEligible;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ImmediatePayEligible', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BestOfferType
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
                case 'BestOfferID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bestOfferID = $value;
                    }
                    return true;
                case 'ExpirationTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->expirationTime = new \DateTime($value);
                    }
                    return true;
                case 'Buyer':
                    $this->buyer = \Nogrod\eBaySDK\Trading\UserType::xmlRead($reader);
                    return true;
                case 'Price':
                    $this->price = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'Status':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->status = $value;
                    }
                    return true;
                case 'Quantity':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->quantity = (int) $value;
                    }
                    return true;
                case 'BuyerMessage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyerMessage = $value;
                    }
                    return true;
                case 'SellerMessage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sellerMessage = $value;
                    }
                    return true;
                case 'BestOfferCodeType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bestOfferCodeType = $value;
                    }
                    return true;
                case 'CallStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->callStatus = $value;
                    }
                    return true;
                case 'NewBestOffer':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->newBestOffer = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ImmediatePayEligible':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->immediatePayEligible = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['BestOfferID'] = $this->bestOfferID;
        $data['ExpirationTime'] = Func::jsonDate($this->expirationTime);
        $data['Buyer'] = $this->buyer;
        $data['Price'] = $this->price;
        $data['Status'] = $this->status;
        $data['Quantity'] = $this->quantity;
        $data['BuyerMessage'] = $this->buyerMessage;
        $data['SellerMessage'] = $this->sellerMessage;
        $data['BestOfferCodeType'] = $this->bestOfferCodeType;
        $data['CallStatus'] = $this->callStatus;
        $data['NewBestOffer'] = $this->newBestOffer;
        $data['ImmediatePayEligible'] = $this->immediatePayEligible;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
