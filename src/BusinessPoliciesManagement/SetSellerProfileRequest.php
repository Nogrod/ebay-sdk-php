<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing SetSellerProfileRequest
 *
 * The root request container of the <b>setSellerProfile</b> call.
 */
class SetSellerProfileRequest extends SetSellerProfileRequestType
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
