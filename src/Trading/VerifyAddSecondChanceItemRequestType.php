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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
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
     * Specifies the bidder from the original, ended listing to whom the seller
     *  is extending the second chance offer. Specify only one
     *  <b>RecipientBidderUserID</b> per call. If multiple users are specified (each in a
     *  <b>RecipientBidderUserID</b> node), only the last one specified receives the
     *  offer.
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\VerifyAddSecondChanceItemRequestType
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

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['RecipientBidderUserID'] = $this->recipientBidderUserID;
        $data['BuyItNowPrice'] = $this->buyItNowPrice;
        $data['Duration'] = $this->duration;
        $data['ItemID'] = $this->itemID;
        $data['SellerMessage'] = $this->sellerMessage;
        return $data;
    }
}
