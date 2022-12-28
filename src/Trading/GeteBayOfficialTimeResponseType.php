<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GeteBayOfficialTimeResponseType
 *
 * The Timestamp field indicates the official eBay system time in GMT.
 *  For information about converting between GMT and other time zones,
 *  see "Time Values" in the Data Types appendix in the eBay Features guide.
 * XSD Type: GeteBayOfficialTimeResponseType
 */
class GeteBayOfficialTimeResponseType extends AbstractResponseType
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
