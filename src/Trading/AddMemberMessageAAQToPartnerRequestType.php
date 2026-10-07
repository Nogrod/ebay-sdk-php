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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddMemberMessageAAQToPartnerRequestType
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
