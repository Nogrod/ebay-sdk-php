<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetApiAccessRulesRequestType
 *
 * The base request type for the <b>GetApiAccessRules</b> call, which returns details on how many calls your application has made and is allowed to make per hour or day.
 * XSD Type: GetApiAccessRulesRequestType
 */
class GetApiAccessRulesRequestType extends AbstractRequestType
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
