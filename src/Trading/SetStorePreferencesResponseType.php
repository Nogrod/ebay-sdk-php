<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SetStorePreferencesResponseType
 *
 * The base response for the <b>SetStorePreferences</b> call. There are no call-specific fields in this response, but the seller should look for an <b>Ack</b> value of <code>Success</code> to know that the preferences were successfully updated.
 * XSD Type: SetStorePreferencesResponseType
 */
class SetStorePreferencesResponseType extends AbstractResponseType
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
