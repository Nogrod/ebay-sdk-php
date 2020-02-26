<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddMemberMessagesAAQToBidderRequestContainerType
 *
 * This type is used by the <b>AddMemberMessagesAAQToBidderRequestContainer</b> container. An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each bidder the seller is sending a message to. The seller can communicate with up to 10 bidders with one <b>AddMemberMessagesAAQToBidder</b> call.
 * XSD Type: AddMemberMessagesAAQToBidderRequestContainerType
 */
class AddMemberMessagesAAQToBidderRequestContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A <b>CorrelationID</b> value is required for
     *  each <b>AddMemberMessagesAAQToBidderRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each
     *  member message container in the request with its corresponding member message container in the
     *  response. The same <b>CorrelationID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * A unique identifier for an eBay listing. This field is required and identifies the active listing that is being discussed between the seller and the bidder.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This container consists of message body, the recipient(s) of the message, and a boolean flag to control whether or not a copy of the message is sent to the sender's My eBay Inbox.
     *
     * @var \Nogrod\eBaySDK\Trading\MemberMessageType $memberMessage
     */
    private $memberMessage = null;

    /**
     * Gets as correlationID
     *
     * A <b>CorrelationID</b> value is required for
     *  each <b>AddMemberMessagesAAQToBidderRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each
     *  member message container in the request with its corresponding member message container in the
     *  response. The same <b>CorrelationID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * A <b>CorrelationID</b> value is required for
     *  each <b>AddMemberMessagesAAQToBidderRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each
     *  member message container in the request with its corresponding member message container in the
     *  response. The same <b>CorrelationID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * A unique identifier for an eBay listing. This field is required and identifies the active listing that is being discussed between the seller and the bidder.
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
     * A unique identifier for an eBay listing. This field is required and identifies the active listing that is being discussed between the seller and the bidder.
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
     * Gets as memberMessage
     *
     * This container consists of message body, the recipient(s) of the message, and a boolean flag to control whether or not a copy of the message is sent to the sender's My eBay Inbox.
     *
     * @return \Nogrod\eBaySDK\Trading\MemberMessageType
     */
    public function getMemberMessage()
    {
        return $this->memberMessage;
    }

    /**
     * Sets a new memberMessage
     *
     * This container consists of message body, the recipient(s) of the message, and a boolean flag to control whether or not a copy of the message is sent to the sender's My eBay Inbox.
     *
     * @param \Nogrod\eBaySDK\Trading\MemberMessageType $memberMessage
     * @return self
     */
    public function setMemberMessage(\Nogrod\eBaySDK\Trading\MemberMessageType $memberMessage)
    {
        $this->memberMessage = $memberMessage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCorrelationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CorrelationID", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getMemberMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MemberMessage", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CorrelationID');
        if (null !== $value) {
            $this->setCorrelationID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MemberMessage');
        if (null !== $value) {
            $this->setMemberMessage(\Nogrod\eBaySDK\Trading\MemberMessageType::fromKeyValue($value));
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
