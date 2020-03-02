<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MoveSellingManagerInventoryFolderResponseType
 *
 * Base response of the <b>MoveSellingManagerInventoryFolder</b> call. This response does not have any call-specific output fields.
 * XSD Type: MoveSellingManagerInventoryFolderResponseType
 */
class MoveSellingManagerInventoryFolderResponseType extends AbstractResponseType
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
