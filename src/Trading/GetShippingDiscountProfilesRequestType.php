<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetShippingDiscountProfilesRequestType
 *
 * This call retrieves all shipping discount profiles currently defined by the user, along with other Combined Invoice-related details such as packaging and handling costs.
 * XSD Type: GetShippingDiscountProfilesRequestType
 */
class GetShippingDiscountProfilesRequestType extends AbstractRequestType
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
