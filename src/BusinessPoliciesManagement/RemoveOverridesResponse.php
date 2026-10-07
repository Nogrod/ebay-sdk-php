<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveOverridesResponse
 *
 * The root response container of the <b>removeOverrides</b> call.
 */
class RemoveOverridesResponse extends RemoveOverridesResponseType
{
    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeRootNamespace($writer, 'http://www.ebay.com/marketplace/selling/v1/services');
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

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesResponse
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
