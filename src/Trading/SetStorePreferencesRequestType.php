<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetStorePreferencesRequestType
 *
 * Sets the preferences for a user's eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * XSD Type: SetStorePreferencesRequestType
 */
class SetStorePreferencesRequestType extends AbstractRequestType
{

    /**
     * This container is used to set the eBay Store's preferences. Currently, the only applicable eBay Store preferences are Store vacation preferences.
     *
     * @var \Nogrod\eBaySDK\Trading\StorePreferencesType $storePreferences
     */
    private $storePreferences = null;

    /**
     * Gets as storePreferences
     *
     * This container is used to set the eBay Store's preferences. Currently, the only applicable eBay Store preferences are Store vacation preferences.
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
     * This container is used to set the eBay Store's preferences. Currently, the only applicable eBay Store preferences are Store vacation preferences.
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StorePreferences');
        if (null !== $value) {
            $this->setStorePreferences(\Nogrod\eBaySDK\Trading\StorePreferencesType::fromKeyValue($value));
        }
    }
}
