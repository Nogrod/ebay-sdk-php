<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DeleteSellingManagerInventoryFolderResponseType
 *
 * Returns the status of delete folder operation.
 * XSD Type: DeleteSellingManagerInventoryFolderResponseType
 */
class DeleteSellingManagerInventoryFolderResponseType extends AbstractResponseType
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
