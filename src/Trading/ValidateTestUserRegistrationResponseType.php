<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ValidateTestUserRegistrationResponseType
 *
 * The response of a <b>ValidateTestUserRegistration</b> call only includes the standard response fields for Trading API calls, such as the <b>Ack</b> field (to indicate the success or failure of the call), the timestamp, and an <b>Errors</b> container (if there were any errors and/or warnings).
 * XSD Type: ValidateTestUserRegistrationResponseType
 */
class ValidateTestUserRegistrationResponseType extends AbstractResponseType
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
