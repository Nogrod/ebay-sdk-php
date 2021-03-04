<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddTransactionConfirmationItemRequestType
 *
 * Base request of the <b>AddTransactionConfirmationItem</b> call, which is used to end an eBay Motors listing and creates a new Transaction Confirmation Request (TCR) for the motor vehichle, thus enabling the TCR recipient to purchase the item. You can also use this call to see if a new TCR can be created for the specified item.
 * XSD Type: AddTransactionConfirmationItemRequestType
 */
class AddTransactionConfirmationItemRequestType extends AbstractRequestType
{
    /**
     * This field is used to specify the recipient of the Transaction
     *  Confirmation Request (TCR).
     *
     * @var string $recipientUserID
     */
    private $recipientUserID = null;

    /**
     * This field is included and set to <code>true</code> if the seller wants to verify whether or not a new Transaction
     *  Confirmation Request (TCR) can be created for the item. If this field is included and its value set to <code>true</code>, no TCR is actually created. If this field is included and its value set to <code>false</code>, or if it is omitted, a Transaction
     *  Confirmation Request is actually created.
     *
     * @var string $verifyEligibilityOnly
     */
    private $verifyEligibilityOnly = null;

    /**
     * This field is used to specify the postal code of the user to whom the seller is offering the Transaction Confirmation Request. This field is only required if the user does not meet the other options listed in <b>RecipientRelationCodeType</b>.
     *
     * @var string $recipientPostalCode
     */
    private $recipientPostalCode = null;

    /**
     * The enumeration value supplied in this field specifies the current relationship between the seller and the potential buyer. A Transaction Confirmation Request (TCR) for an item can be sent to a potential buyer who has at least one of the following criteria: is an active bidder on the auction listing; has made a Best Offer on the fixed-price listing, is an eBay user who has used the Ask Seller a Question feature, or is an eBay user whose postal code is known.
     *
     * @var string $recipientRelationType
     */
    private $recipientRelationType = null;

    /**
     * The amount in this field is the price that the seller is asking for to purchase the motor vehicle.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $negotiatedPrice
     */
    private $negotiatedPrice = null;

    /**
     * The enumeration value specified in this field will control how many days that the recipient of the offer has to purchase the motor vehicle at the price listed in the <b>NegotiatedPrice</b> field.
     *
     * @var string $listingDuration
     */
    private $listingDuration = null;

    /**
     * This field is used to identify the eBay Motors listing using the unique identifier of the listing (<b>ItemID</b>).
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This is optional free-form string field that can be used by the seller to provide any comments or additional information about the Transaction Confirmation Item.
     *
     * @var string $comments
     */
    private $comments = null;

    /**
     * Gets as recipientUserID
     *
     * This field is used to specify the recipient of the Transaction
     *  Confirmation Request (TCR).
     *
     * @return string
     */
    public function getRecipientUserID()
    {
        return $this->recipientUserID;
    }

    /**
     * Sets a new recipientUserID
     *
     * This field is used to specify the recipient of the Transaction
     *  Confirmation Request (TCR).
     *
     * @param string $recipientUserID
     * @return self
     */
    public function setRecipientUserID($recipientUserID)
    {
        $this->recipientUserID = $recipientUserID;
        return $this;
    }

    /**
     * Gets as verifyEligibilityOnly
     *
     * This field is included and set to <code>true</code> if the seller wants to verify whether or not a new Transaction
     *  Confirmation Request (TCR) can be created for the item. If this field is included and its value set to <code>true</code>, no TCR is actually created. If this field is included and its value set to <code>false</code>, or if it is omitted, a Transaction
     *  Confirmation Request is actually created.
     *
     * @return string
     */
    public function getVerifyEligibilityOnly()
    {
        return $this->verifyEligibilityOnly;
    }

    /**
     * Sets a new verifyEligibilityOnly
     *
     * This field is included and set to <code>true</code> if the seller wants to verify whether or not a new Transaction
     *  Confirmation Request (TCR) can be created for the item. If this field is included and its value set to <code>true</code>, no TCR is actually created. If this field is included and its value set to <code>false</code>, or if it is omitted, a Transaction
     *  Confirmation Request is actually created.
     *
     * @param string $verifyEligibilityOnly
     * @return self
     */
    public function setVerifyEligibilityOnly($verifyEligibilityOnly)
    {
        $this->verifyEligibilityOnly = $verifyEligibilityOnly;
        return $this;
    }

    /**
     * Gets as recipientPostalCode
     *
     * This field is used to specify the postal code of the user to whom the seller is offering the Transaction Confirmation Request. This field is only required if the user does not meet the other options listed in <b>RecipientRelationCodeType</b>.
     *
     * @return string
     */
    public function getRecipientPostalCode()
    {
        return $this->recipientPostalCode;
    }

    /**
     * Sets a new recipientPostalCode
     *
     * This field is used to specify the postal code of the user to whom the seller is offering the Transaction Confirmation Request. This field is only required if the user does not meet the other options listed in <b>RecipientRelationCodeType</b>.
     *
     * @param string $recipientPostalCode
     * @return self
     */
    public function setRecipientPostalCode($recipientPostalCode)
    {
        $this->recipientPostalCode = $recipientPostalCode;
        return $this;
    }

    /**
     * Gets as recipientRelationType
     *
     * The enumeration value supplied in this field specifies the current relationship between the seller and the potential buyer. A Transaction Confirmation Request (TCR) for an item can be sent to a potential buyer who has at least one of the following criteria: is an active bidder on the auction listing; has made a Best Offer on the fixed-price listing, is an eBay user who has used the Ask Seller a Question feature, or is an eBay user whose postal code is known.
     *
     * @return string
     */
    public function getRecipientRelationType()
    {
        return $this->recipientRelationType;
    }

    /**
     * Sets a new recipientRelationType
     *
     * The enumeration value supplied in this field specifies the current relationship between the seller and the potential buyer. A Transaction Confirmation Request (TCR) for an item can be sent to a potential buyer who has at least one of the following criteria: is an active bidder on the auction listing; has made a Best Offer on the fixed-price listing, is an eBay user who has used the Ask Seller a Question feature, or is an eBay user whose postal code is known.
     *
     * @param string $recipientRelationType
     * @return self
     */
    public function setRecipientRelationType($recipientRelationType)
    {
        $this->recipientRelationType = $recipientRelationType;
        return $this;
    }

    /**
     * Gets as negotiatedPrice
     *
     * The amount in this field is the price that the seller is asking for to purchase the motor vehicle.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getNegotiatedPrice()
    {
        return $this->negotiatedPrice;
    }

    /**
     * Sets a new negotiatedPrice
     *
     * The amount in this field is the price that the seller is asking for to purchase the motor vehicle.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $negotiatedPrice
     * @return self
     */
    public function setNegotiatedPrice(\Nogrod\eBaySDK\Trading\AmountType $negotiatedPrice)
    {
        $this->negotiatedPrice = $negotiatedPrice;
        return $this;
    }

    /**
     * Gets as listingDuration
     *
     * The enumeration value specified in this field will control how many days that the recipient of the offer has to purchase the motor vehicle at the price listed in the <b>NegotiatedPrice</b> field.
     *
     * @return string
     */
    public function getListingDuration()
    {
        return $this->listingDuration;
    }

    /**
     * Sets a new listingDuration
     *
     * The enumeration value specified in this field will control how many days that the recipient of the offer has to purchase the motor vehicle at the price listed in the <b>NegotiatedPrice</b> field.
     *
     * @param string $listingDuration
     * @return self
     */
    public function setListingDuration($listingDuration)
    {
        $this->listingDuration = $listingDuration;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * This field is used to identify the eBay Motors listing using the unique identifier of the listing (<b>ItemID</b>).
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
     * This field is used to identify the eBay Motors listing using the unique identifier of the listing (<b>ItemID</b>).
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
     * Gets as comments
     *
     * This is optional free-form string field that can be used by the seller to provide any comments or additional information about the Transaction Confirmation Item.
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * This is optional free-form string field that can be used by the seller to provide any comments or additional information about the Transaction Confirmation Item.
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getRecipientUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecipientUserID", $value);
        }
        $value = $this->getVerifyEligibilityOnly();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VerifyEligibilityOnly", $value);
        }
        $value = $this->getRecipientPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecipientPostalCode", $value);
        }
        $value = $this->getRecipientRelationType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecipientRelationType", $value);
        }
        $value = $this->getNegotiatedPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NegotiatedPrice", $value);
        }
        $value = $this->getListingDuration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingDuration", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getComments();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Comments", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecipientUserID');
        if (null !== $value) {
            $this->setRecipientUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyEligibilityOnly');
        if (null !== $value) {
            $this->setVerifyEligibilityOnly($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecipientPostalCode');
        if (null !== $value) {
            $this->setRecipientPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecipientRelationType');
        if (null !== $value) {
            $this->setRecipientRelationType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NegotiatedPrice');
        if (null !== $value) {
            $this->setNegotiatedPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDuration');
        if (null !== $value) {
            $this->setListingDuration($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Comments');
        if (null !== $value) {
            $this->setComments($value);
        }
    }
}
