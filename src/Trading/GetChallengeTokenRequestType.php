<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetChallengeTokenRequestType
 *
 * This is the base request type for the <b>GetChallengeToken</b> call. This call retrieves a botblock token and URLs for an image or audio clip that the user is to match.
 *  <br/><br/>
 *  This call does not have any call-specific input parameters.
 * XSD Type: GetChallengeTokenRequestType
 */
class GetChallengeTokenRequestType extends AbstractRequestType
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
