<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetDescriptionTemplatesResponse
 *
 * Retrieves detailed information on Listing Designer templates that are available for use by the seller.
 */
class GetDescriptionTemplatesResponse extends GetDescriptionTemplatesResponseType
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
