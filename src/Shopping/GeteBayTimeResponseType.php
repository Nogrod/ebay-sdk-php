<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing GeteBayTimeResponseType
 *
 * The Timestamp field indicates the official eBay system time in GMT.
 *  The value returned represents the date and time when eBay processed the request.
 *  The value is in the ISO 8601 date-time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
 * XSD Type: GeteBayTimeResponseType
 */
class GeteBayTimeResponseType extends AbstractResponseType
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
