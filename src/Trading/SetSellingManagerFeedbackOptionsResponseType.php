<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SetSellingManagerFeedbackOptionsResponseType
 *
 * Base response of <b>SetSellingManagerFeedbackOptions</b> call. This response provides confirmation that feedback comments and (optionally) automated feedback preferences were added successfully.
 * XSD Type: SetSellingManagerFeedbackOptionsResponseType
 */
class SetSellingManagerFeedbackOptionsResponseType extends AbstractResponseType
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
