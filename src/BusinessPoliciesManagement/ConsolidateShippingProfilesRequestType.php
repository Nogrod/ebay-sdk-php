<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ConsolidateShippingProfilesRequestType
 *
 * This call can be used to consolidate shipping policies that have identical data with the exception of shipping costs.
 * XSD Type: ConsolidateShippingProfilesRequest
 */
class ConsolidateShippingProfilesRequestType extends BaseRequestType
{
    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesRequestType
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
