<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DeleteMyMessagesResponseType
 *
 * The response to <b>DeleteMyMessages</b>. If the request is successful,
 *  <b>DeleteMyMessages</b> has an empty payload.
 * XSD Type: DeleteMyMessagesResponseType
 */
class DeleteMyMessagesResponseType extends AbstractResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\DeleteMyMessagesResponseType
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
