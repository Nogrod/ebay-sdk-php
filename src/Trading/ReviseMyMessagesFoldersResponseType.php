<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ReviseMyMessagesFoldersResponseType
 *
 * The response of a <b>ReviseMyMessagesFolders</b> call only includes the standard response fields for Trading API calls, such as the <b>Ack</b> field (to indicate the success or failure of the call), the timestamp, and an <b>Errors</b> container (if there were any errors and/or warnings).
 * XSD Type: ReviseMyMessagesFoldersResponseType
 */
class ReviseMyMessagesFoldersResponseType extends AbstractResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ReviseMyMessagesFoldersResponseType
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
