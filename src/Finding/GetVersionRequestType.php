<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing GetVersionRequestType
 *
 * Returns the current version of the service. This simple call can be used to
 *  monitor the service for availability. This call has no input parameters and
 *  the response contains only the standard output fields.
 * XSD Type: GetVersionRequest
 */
class GetVersionRequestType extends BaseServiceRequestType
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
