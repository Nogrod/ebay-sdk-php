<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing GetVersionRequestType
 *
 * This call is used to return the current version of Business Policies Management API. This call can be used to monitor the service for availability. This call has no input parameters and the response contains only the standard output fields.
 * XSD Type: GetVersionRequest
 */
class GetVersionRequestType extends BaseRequestType
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
