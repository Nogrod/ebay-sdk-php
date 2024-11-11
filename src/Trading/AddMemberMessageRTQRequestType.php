<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddMemberMessageRTQRequestType
 *
 * The base request of the <b>AddMemberMessageRTQ</b> call that enables a seller to reply to a question about an active item listing.
 * XSD Type: AddMemberMessageRTQRequestType
 */
class AddMemberMessageRTQRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the listing about which the question was asked. This field is not required if the request includes a <b>RecipientID</b> value in the <b>MemberMessage</b> container, and the bidder/potential buyer and seller do not have more than one listing in common between one another.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This container is used by the seller to answer the question from the bidder/potential buyer. This container includes the recipient ID of the bidder/potential buyer, the message subject, the message body (where the question is answered), and other values related to the message.
     *
     * @var \Nogrod\eBaySDK\Trading\MemberMessageType $memberMessage
     */
    private $memberMessage = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing about which the question was asked. This field is not required if the request includes a <b>RecipientID</b> value in the <b>MemberMessage</b> container, and the bidder/potential buyer and seller do not have more than one listing in common between one another.
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
     * The unique identifier of the listing about which the question was asked. This field is not required if the request includes a <b>RecipientID</b> value in the <b>MemberMessage</b> container, and the bidder/potential buyer and seller do not have more than one listing in common between one another.
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
     * This container is used by the seller to answer the question from the bidder/potential buyer. This container includes the recipient ID of the bidder/potential buyer, the message subject, the message body (where the question is answered), and other values related to the message.
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
     * This container is used by the seller to answer the question from the bidder/potential buyer. This container includes the recipient ID of the bidder/potential buyer, the message subject, the message body (where the question is answered), and other values related to the message.
     *
     * @param \Nogrod\eBaySDK\Trading\MemberMessageType $memberMessage
     * @return self
     */
    public function setMemberMessage(\Nogrod\eBaySDK\Trading\MemberMessageType $memberMessage)
    {
        $this->memberMessage = $memberMessage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MemberMessage');
        if (null !== $value) {
            $this->setMemberMessage(\Nogrod\eBaySDK\Trading\MemberMessageType::fromKeyValue($value));
        }
    }
}
