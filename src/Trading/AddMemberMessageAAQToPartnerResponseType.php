<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddMemberMessageAAQToPartnerResponseType
 *
 * This type defines the response to the <b>AddMemberMessageAAQToPartner</b> call. There are no call-specific fields in this response.
 * XSD Type: AddMemberMessageAAQToPartnerResponseType
 */
class AddMemberMessageAAQToPartnerResponseType extends AbstractResponseType
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
