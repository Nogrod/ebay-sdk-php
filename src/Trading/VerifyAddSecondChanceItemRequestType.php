<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VerifyAddSecondChanceItemRequestType
 *
 * Simulates the creation of a new Second Chance Offer
 *  listing of an item without actually creating a listing.
 * XSD Type: VerifyAddSecondChanceItemRequestType
 */
class VerifyAddSecondChanceItemRequestType extends AbstractRequestType
{
    /**
     * Specifies the bidder from the original, ended listing to whom the seller
     *  is extending the second chance offer. Specify only one
     *  <b>RecipientBidderUserID</b> per call. If multiple users are specified (each in a
     *  <b>RecipientBidderUserID</b> node), only the last one specified receives the
     *  offer.
     *
     * @var string $recipientBidderUserID
     */
    private $recipientBidderUserID = null;

    /**
     * Specifies the amount the offer recipient must pay to purchase the item
     *  from the Second Chance Offer listing. Use only when the original item was
     *  an eBay Motors (or in some categories on U.S. and international sites for
     *  high-priced items, such as items in many U.S. and Canada Business and
     *  Industrial categories) and it ended unsold because the reserve price was
     *  not met. Call fails with an error for any other item conditions.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $buyItNowPrice
     */
    private $buyItNowPrice = null;

    /**
     * Specifies the length of time the Second Chance Offer listing will be
     *  active. The recipient bidder has that much time to purchase the item or
     *  the listing expires.
     *
     * @var string $duration
     */
    private $duration = null;

    /**
     * This field is used to identify the recently-ended auction listing for which a Second Chance Offer will be made to one of the non-winning bidders on the recently-ended auction listing.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Message content. Cannot contain HTML, asterisks, or quotes. This content
     *  is included in the Second Chance Offer email sent to the recipient, which
     *  can be retrieved with <b>GetMyMessages</b>.
     *
     * @var string $sellerMessage
     */
    private $sellerMessage = null;

    /**
     * Gets as recipientBidderUserID
     *
     * Specifies the bidder from the original, ended listing to whom the seller
     *  is extending the second chance offer. Specify only one
     *  <b>RecipientBidderUserID</b> per call. If multiple users are specified (each in a
     *  <b>RecipientBidderUserID</b> node), only the last one specified receives the
     *  offer.
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
     * Specifies the bidder from the original, ended listing to whom the seller
     *  is extending the second chance offer. Specify only one
     *  <b>RecipientBidderUserID</b> per call. If multiple users are specified (each in a
     *  <b>RecipientBidderUserID</b> node), only the last one specified receives the
     *  offer.
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
     * Specifies the amount the offer recipient must pay to purchase the item
     *  from the Second Chance Offer listing. Use only when the original item was
     *  an eBay Motors (or in some categories on U.S. and international sites for
     *  high-priced items, such as items in many U.S. and Canada Business and
     *  Industrial categories) and it ended unsold because the reserve price was
     *  not met. Call fails with an error for any other item conditions.
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
     * Specifies the amount the offer recipient must pay to purchase the item
     *  from the Second Chance Offer listing. Use only when the original item was
     *  an eBay Motors (or in some categories on U.S. and international sites for
     *  high-priced items, such as items in many U.S. and Canada Business and
     *  Industrial categories) and it ended unsold because the reserve price was
     *  not met. Call fails with an error for any other item conditions.
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
     * Specifies the length of time the Second Chance Offer listing will be
     *  active. The recipient bidder has that much time to purchase the item or
     *  the listing expires.
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
     * Specifies the length of time the Second Chance Offer listing will be
     *  active. The recipient bidder has that much time to purchase the item or
     *  the listing expires.
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
     * This field is used to identify the recently-ended auction listing for which a Second Chance Offer will be made to one of the non-winning bidders on the recently-ended auction listing.
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
     * This field is used to identify the recently-ended auction listing for which a Second Chance Offer will be made to one of the non-winning bidders on the recently-ended auction listing.
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
     * Message content. Cannot contain HTML, asterisks, or quotes. This content
     *  is included in the Second Chance Offer email sent to the recipient, which
     *  can be retrieved with <b>GetMyMessages</b>.
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
     * Message content. Cannot contain HTML, asterisks, or quotes. This content
     *  is included in the Second Chance Offer email sent to the recipient, which
     *  can be retrieved with <b>GetMyMessages</b>.
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
