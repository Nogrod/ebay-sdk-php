<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RespondToFeedbackResponseType
 *
 * Base response for the <b>RespondToFeedback</b>. This response will indicate the success or failure of the attempt to reply to Feedback that has been left for a user, or to post a follow-up comment to a Feedback comment a user has left for someone else. This response has no call-specific output fields.
 * XSD Type: RespondToFeedbackResponseType
 */
class RespondToFeedbackResponseType extends AbstractResponseType
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

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\RespondToFeedbackResponseType
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
