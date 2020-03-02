<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetStorePreferencesRequestType
 *
 * This call is used to retrieve an eBay seller's Store preferences. This call does not have any call-specific request payload.
 * XSD Type: GetStorePreferencesRequestType
 */
class GetStorePreferencesRequestType extends AbstractRequestType
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
