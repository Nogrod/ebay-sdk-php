<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetTokenStatusRequestType
 *
 * This call is used to get the current status of a user token. There are no call-specific fields in the request payload.
 * XSD Type: GetTokenStatusRequestType
 */
class GetTokenStatusRequestType extends AbstractRequestType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
