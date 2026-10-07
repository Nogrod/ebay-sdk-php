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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->memberMessage;
        if (null !== $value) {
            $writer->startElementNs(null, 'MemberMessage', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddMemberMessageRTQRequestType
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
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'MemberMessage':
                    $this->memberMessage = \Nogrod\eBaySDK\Trading\MemberMessageType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
