<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddDisputeResponseResponseType
 *
 * This type is the base response of the <b>AddDisputeResponse</b> call. This type has no call-specific fields, but the applicable fields of the <b>AbstractResponseType</b> will be returned in the <b>AddDisputeResponse</b> response.
 * XSD Type: AddDisputeResponseResponseType
 */
class AddDisputeResponseResponseType extends AbstractResponseType
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

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
