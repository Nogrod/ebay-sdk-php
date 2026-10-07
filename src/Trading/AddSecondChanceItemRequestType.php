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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->recipientBidderUserID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RecipientBidderUserID', null, (string) $value);
        }
        $value = $this->buyItNowPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'BuyItNowPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->duration;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Duration', null, (string) $value);
        }
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->sellerMessage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SellerMessage', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddSecondChanceItemRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'RecipientBidderUserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->recipientBidderUserID = $value;
                    }
                    return true;
                case 'BuyItNowPrice':
                    $this->buyItNowPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'Duration':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->duration = $value;
                    }
                    return true;
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'SellerMessage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sellerMessage = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
