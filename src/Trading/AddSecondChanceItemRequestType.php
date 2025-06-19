<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddSecondChanceItemRequestType
 *
 * Used by the seller of an auction listing to provide a Second Chance Offer to one of that auction item's non-winning bidders. A Second Chance Offer is used by sellers whenever the seller was unable to complete the sale with the winning bidder because the bidder didn't pay, or if the auction listing ended without the Reserve Price being met, or if that seller has multiple identical items for sale and wants to give other bidders a chance to purchase the item.
 *  <br>
 *  <br>
 *  To get information on the bidders for a recently-ended auction listing, the seller can use the <b>GetAllBidders</b> call and pass the corresponding <b>ItemID</b> value into the call request.
 *  <br>
 *  <br>
 *  For more information on the specifics of Second Chance Offers, see the <a href="https://pages.ebay.com/help/sell/second_chance_offer.html" target="_blank">Making a Second Chance Offer</a> help page.
 * XSD Type: AddSecondChanceItemRequestType
 */
class AddSecondChanceItemRequestType extends AbstractRequestType
{
    /**
     * This field is used to specify the bidder that is being offered the Second Chance Offer. The eBay User ID of the bidder is used in this field. Specify only one <b>RecipientBidderUserID</b> per call. If multiple users are specified, only the last one specified receives the offer. User ID values will be returned in the <b>Offer.User.UserID</b> field of the <b>GetAllBidders</b> call response.
     *
     * @var string $recipientBidderUserID
     */
    private $recipientBidderUserID = null;

    /**
     * The amount the offer recipient must pay to purchase the item as a Second Chance Offer. This field should only be used when the original item was listed in an eBay Motors vehicle category (or in some categories on U.S. and international sites for high-priced items, such as items in many U.S. and Canada Business and Industrial categories) and it ended unsold because the reserve price was not met. Otherwise, eBay establishes the price and no price should be submitted. The price offered to the Second Chance Offer recipient is generally the highest bid that the user made on the original listing.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $buyItNowPrice
     */
    private $buyItNowPrice = null;

    /**
     * This enumeration value indicates the length of time (in days) that the Second Chance Offer will be available to the recipient. Upon receiving the Second Chance Offer, the recipient bidder will have this many days to accept the offer before the offer expires. One of the values in <b>SecondChanceOfferDurationCodeType</b> must be used.
     *
     * @var string $duration
     */
    private $duration = null;

    /**
     * This field is used to identify the original auction listing through its unique identifier (Item ID). Upon a successful call, the Second Chance Offer will be identified by a new <b>ItemID</b> in the response.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This optional field is used to provide a message to the recipient of the Second Chance Offer. This message cannot contain HTML, asterisks, or quotes. The content in this field will be included in the Second Chance Offer email that is sent to the recipient.
     *
     * @var string $sellerMessage
     */
    private $sellerMessage = null;

    /**
     * Gets as recipientBidderUserID
     *
     * This field is used to specify the bidder that is being offered the Second Chance Offer. The eBay User ID of the bidder is used in this field. Specify only one <b>RecipientBidderUserID</b> per call. If multiple users are specified, only the last one specified receives the offer. User ID values will be returned in the <b>Offer.User.UserID</b> field of the <b>GetAllBidders</b> call response.
     *
     * @return string
     */
    public function getRecipientBidderUserID()
    {
        return $this->recipientBidderUserID;
    }

    /**
     * Sets a new recipientBidderUserID
     *
     * This field is used to specify the bidder that is being offered the Second Chance Offer. The eBay User ID of the bidder is used in this field. Specify only one <b>RecipientBidderUserID</b> per call. If multiple users are specified, only the last one specified receives the offer. User ID values will be returned in the <b>Offer.User.UserID</b> field of the <b>GetAllBidders</b> call response.
     *
     * @param string $recipientBidderUserID
     * @return self
     */
    public function setRecipientBidderUserID($recipientBidderUserID)
    {
        $this->recipientBidderUserID = $recipientBidderUserID;
        return $this;
    }

    /**
     * Gets as buyItNowPrice
     *
     * The amount the offer recipient must pay to purchase the item as a Second Chance Offer. This field should only be used when the original item was listed in an eBay Motors vehicle category (or in some categories on U.S. and international sites for high-priced items, such as items in many U.S. and Canada Business and Industrial categories) and it ended unsold because the reserve price was not met. Otherwise, eBay establishes the price and no price should be submitted. The price offered to the Second Chance Offer recipient is generally the highest bid that the user made on the original listing.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getBuyItNowPrice()
    {
        return $this->buyItNowPrice;
    }

    /**
     * Sets a new buyItNowPrice
     *
     * The amount the offer recipient must pay to purchase the item as a Second Chance Offer. This field should only be used when the original item was listed in an eBay Motors vehicle category (or in some categories on U.S. and international sites for high-priced items, such as items in many U.S. and Canada Business and Industrial categories) and it ended unsold because the reserve price was not met. Otherwise, eBay establishes the price and no price should be submitted. The price offered to the Second Chance Offer recipient is generally the highest bid that the user made on the original listing.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $buyItNowPrice
     * @return self
     */
    public function setBuyItNowPrice(\Nogrod\eBaySDK\Trading\AmountType $buyItNowPrice)
    {
        $this->buyItNowPrice = $buyItNowPrice;
        return $this;
    }

    /**
     * Gets as duration
     *
     * This enumeration value indicates the length of time (in days) that the Second Chance Offer will be available to the recipient. Upon receiving the Second Chance Offer, the recipient bidder will have this many days to accept the offer before the offer expires. One of the values in <b>SecondChanceOfferDurationCodeType</b> must be used.
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * This enumeration value indicates the length of time (in days) that the Second Chance Offer will be available to the recipient. Upon receiving the Second Chance Offer, the recipient bidder will have this many days to accept the offer before the offer expires. One of the values in <b>SecondChanceOfferDurationCodeType</b> must be used.
     *
     * @param string $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * This field is used to identify the original auction listing through its unique identifier (Item ID). Upon a successful call, the Second Chance Offer will be identified by a new <b>ItemID</b> in the response.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * This field is used to identify the original auction listing through its unique identifier (Item ID). Upon a successful call, the Second Chance Offer will be identified by a new <b>ItemID</b> in the response.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as sellerMessage
     *
     * This optional field is used to provide a message to the recipient of the Second Chance Offer. This message cannot contain HTML, asterisks, or quotes. The content in this field will be included in the Second Chance Offer email that is sent to the recipient.
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
     * This optional field is used to provide a message to the recipient of the Second Chance Offer. This message cannot contain HTML, asterisks, or quotes. The content in this field will be included in the Second Chance Offer email that is sent to the recipient.
     *
     * @param string $sellerMessage
     * @return self
     */
    public function setSellerMessage($sellerMessage)
    {
        $this->sellerMessage = $sellerMessage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getRecipientBidderUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecipientBidderUserID", $value);
        }
        $value = $this->getBuyItNowPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyItNowPrice", $value);
        }
        $value = $this->getDuration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Duration", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getSellerMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerMessage", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AddSecondChanceItemRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecipientBidderUserID');
        if (null !== $value) {
            $this->setRecipientBidderUserID($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyItNowPrice');
        if (null !== $value) {
            $this->setBuyItNowPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Duration');
        if (null !== $value) {
            $this->setDuration($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerMessage');
        if (null !== $value) {
            $this->setSellerMessage($value);
        }
    }
}
