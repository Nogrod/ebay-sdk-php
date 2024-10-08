<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GeteBayOfficialTimeRequestType
 *
 * Gets the official eBay system time in GMT.
 * XSD Type: GeteBayOfficialTimeRequestType
 */
class GeteBayOfficialTimeRequestType extends AbstractRequestType
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
