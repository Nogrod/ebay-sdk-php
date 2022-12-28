<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddToItemDescriptionResponseType
 *
 * This type defines the response of the <b>AddToItemDescription</b> call. There are no call-specific fields in this response. The seller should look for an <b>Ack</b> value of <code>true</code> in the response, that will indicate that the additional text in the item description was added successfully.
 * XSD Type: AddToItemDescriptionResponseType
 */
class AddToItemDescriptionResponseType extends AbstractResponseType
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
