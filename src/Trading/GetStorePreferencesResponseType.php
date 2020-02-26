<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetStorePreferencesResponseType
 *
 * Base response of the <b>GetStorePreferences</b> call.
 * XSD Type: GetStorePreferencesResponseType
 */
class GetStorePreferencesResponseType extends AbstractResponseType
{

    /**
     * This container consists of the seller's current eBay Store preferences. Currently, the only eBay Store preferences are related to putting an eBay Store on vacation mode, but more preferences may get added in the future.
     *
     * @var \Nogrod\eBaySDK\Trading\StorePreferencesType $storePreferences
     */
    private $storePreferences = null;

    /**
     * Gets as storePreferences
     *
     * This container consists of the seller's current eBay Store preferences. Currently, the only eBay Store preferences are related to putting an eBay Store on vacation mode, but more preferences may get added in the future.
     *
     * @return \Nogrod\eBaySDK\Trading\StorePreferencesType
     */
    public function getStorePreferences()
    {
        return $this->storePreferences;
    }

    /**
     * Sets a new storePreferences
     *
     * This container consists of the seller's current eBay Store preferences. Currently, the only eBay Store preferences are related to putting an eBay Store on vacation mode, but more preferences may get added in the future.
     *
     * @param \Nogrod\eBaySDK\Trading\StorePreferencesType $storePreferences
     * @return self
     */
    public function setStorePreferences(\Nogrod\eBaySDK\Trading\StorePreferencesType $storePreferences)
    {
        $this->storePreferences = $storePreferences;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getStorePreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StorePreferences", $value);
        }
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StorePreferences');
        if (null !== $value) {
            $this->setStorePreferences(\Nogrod\eBaySDK\Trading\StorePreferencesType::fromKeyValue($value));
        }
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
