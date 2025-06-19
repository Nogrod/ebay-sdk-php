<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing GetConsolidationJobStatusResponse
 *
 * The root response container of the <b>getConsolidationJobStatus</b> call.
 */
class GetConsolidationJobStatusResponse extends GetConsolidationJobStatusResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusResponse
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
