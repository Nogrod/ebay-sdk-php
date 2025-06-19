<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing GetSellerProfilesRequest
 *
 * The root request container of the <b>getSellerProfiles</b> call.
 */
class GetSellerProfilesRequest extends GetSellerProfilesRequestType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesRequest
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
