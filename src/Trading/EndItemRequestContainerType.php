<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndItemRequestContainerType
 *
 * A container to specify a single eBay item to end.
 * XSD Type: EndItemRequestContainerType
 */
class EndItemRequestContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of the eBay listing to end.
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
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>EndItems</b>, the seller can pass in a different
     *  <b>MessageID</b> value for
     *  each <b>EndItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>EndItemResponseContainer</b> container is used to correlate each
     *  End Item request container with its corresponding End Item response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *  <br>
     *  <br>
     *  If you do not pass in a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @var string $messageID
     */
    private $messageID = null;

    /**
     * This field was previously only used to identify and end Half.com listings, and since the Half.com site has been shut down, this element is no longer applicable.
     *
     * @var string $sellerInventoryID
     */
    private $sellerInventoryID = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the eBay listing to end.
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
     * The unique identifier of the eBay listing to end.
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
     * Gets as messageID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>EndItems</b>, the seller can pass in a different
     *  <b>MessageID</b> value for
     *  each <b>EndItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>EndItemResponseContainer</b> container is used to correlate each
     *  End Item request container with its corresponding End Item response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *  <br>
     *  <br>
     *  If you do not pass in a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @return string
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>EndItems</b>, the seller can pass in a different
     *  <b>MessageID</b> value for
     *  each <b>EndItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>EndItemResponseContainer</b> container is used to correlate each
     *  End Item request container with its corresponding End Item response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *  <br>
     *  <br>
     *  If you do not pass in a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @param string $messageID
     * @return self
     */
    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getEndingReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndingReason", $value);
        }
        $value = $this->getMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndingReason');
        if (null !== $value) {
            $this->setEndingReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageID');
        if (null !== $value) {
            $this->setMessageID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerInventoryID');
        if (null !== $value) {
            $this->setSellerInventoryID($value);
        }
    }
}
