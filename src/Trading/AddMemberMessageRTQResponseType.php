<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddMemberMessageRTQResponseType
 *
 * This type defines the response to the <b>AddMemberMessageRTQ</b> call. There are no call-specific fields in this response.
 * XSD Type: AddMemberMessageRTQResponseType
 */
class AddMemberMessageRTQResponseType extends AbstractResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
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
    }
}
