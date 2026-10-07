<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteMyMessagesResponse
 */
class DeleteMyMessagesResponse extends DeleteMyMessagesResponseType
{
    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeRootNamespace($writer, 'urn:ebay:apis:eBLBaseComponents');
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

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\DeleteMyMessagesResponse
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
