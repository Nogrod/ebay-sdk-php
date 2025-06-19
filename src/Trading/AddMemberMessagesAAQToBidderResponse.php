<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddMemberMessagesAAQToBidderResponse
 */
class AddMemberMessagesAAQToBidderResponse extends AddMemberMessagesAAQToBidderResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponse
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
    }
}
