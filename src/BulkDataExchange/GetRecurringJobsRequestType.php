<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing GetRecurringJobsRequestType
 *
 * Get all recurring jobs submitted by this seller. There should only be one
 *  recurring job per job type.
 * XSD Type: GetRecurringJobsRequest
 */
class GetRecurringJobsRequestType extends BaseServiceRequestType
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
