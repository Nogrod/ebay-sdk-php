<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GeteBayDetailsResponse
 *
 * Details about a specified site in response to <b>GeteBayDetailsRequest</b>. If no <b>DetailName</b> field is identified in the request, all elements of <b>GeteBayDetailsResponse</b> are returned. Otherwise, eBay returns only the elements corresponding to the specified <b>DetailName</b> fields. UpdateTime gives the time of modification of the most recently modified <b>DetailName</b>.
 */
class GeteBayDetailsResponse extends GeteBayDetailsResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GeteBayDetailsResponse
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
