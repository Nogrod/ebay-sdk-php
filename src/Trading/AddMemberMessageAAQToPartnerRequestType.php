<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddMemberMessageAAQToPartnerRequestType
 *
 * Enables a buyer and seller in an order relationship to
 *  send messages to each other's My Messages Inboxes.
 * XSD Type: AddMemberMessageAAQToPartnerRequestType
 */
class AddMemberMessageAAQToPartnerRequestType extends AbstractRequestType
{
    /**
     * Unique identifier for the listing that is being discussed between the two order partners.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This container holds the message, and includes the subject, message body, and other details related to the message.
     *
     * @var \Nogrod\eBaySDK\Trading\MemberMessageType $memberMessage
     */
    private $memberMessage = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for the listing that is being discussed between the two order partners.
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
     * Unique identifier for the listing that is being discussed between the two order partners.
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
     * This container holds the message, and includes the subject, message body, and other details related to the message.
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
     * This container holds the message, and includes the subject, message body, and other details related to the message.
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

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AddMemberMessageAAQToPartnerRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
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
