<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndItemRequestType
 *
 * Ends the specified item listing before the date and time at which it would normally end per the listing duration.
 * XSD Type: EndItemRequestType
 */
class EndItemRequestType extends AbstractRequestType
{
    /**
     * Unique item ID that identifies the listing that you want to end.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted</code> value, as this ending reason can only be used internally by eBay to administratively end a listing due to the associated Catalog product being removed from the eBay Catalog.
     *
     * @var string $endingReason
     */
    private $endingReason = null;

    /**
     * This field was previously only used to identify and end Half.com listings, and since the Half.com site has been shut down, this element is no longer applicable.
     *
     * @var string $sellerInventoryID
     */
    private $sellerInventoryID = null;

    /**
     * Gets as itemID
     *
     * Unique item ID that identifies the listing that you want to end.
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
     * Unique item ID that identifies the listing that you want to end.
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
     * Gets as endingReason
     *
     * The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted</code> value, as this ending reason can only be used internally by eBay to administratively end a listing due to the associated Catalog product being removed from the eBay Catalog.
     *
     * @return string
     */
    public function getEndingReason()
    {
        return $this->endingReason;
    }

    /**
     * Sets a new endingReason
     *
     * The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted</code> value, as this ending reason can only be used internally by eBay to administratively end a listing due to the associated Catalog product being removed from the eBay Catalog.
     *
     * @param string $endingReason
     * @return self
     */
    public function setEndingReason($endingReason)
    {
        $this->endingReason = $endingReason;
        return $this;
    }

    /**
     * Gets as sellerInventoryID
     *
     * This field was previously only used to identify and end Half.com listings, and since the Half.com site has been shut down, this element is no longer applicable.
     *
     * @return string
     */
    public function getSellerInventoryID()
    {
        return $this->sellerInventoryID;
    }

    /**
     * Sets a new sellerInventoryID
     *
     * This field was previously only used to identify and end Half.com listings, and since the Half.com site has been shut down, this element is no longer applicable.
     *
     * @param string $sellerInventoryID
     * @return self
     */
    public function setSellerInventoryID($sellerInventoryID)
    {
        $this->sellerInventoryID = $sellerInventoryID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getEndingReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndingReason", $value);
        }
        $value = $this->getSellerInventoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerInventoryID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndingReason');
        if (null !== $value) {
            $this->setEndingReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerInventoryID');
        if (null !== $value) {
            $this->setSellerInventoryID($value);
        }
    }
}
