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

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AddMemberMessageAAQToPartnerResponseType
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
