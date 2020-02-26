<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetNotificationPreferencesResponseType
 *
 * Contains the requesting application's notification preferences. <b>GetNotificationPreferences</b> retrieves preferences that you have deliberately set. For example, if you enable the <b>EndOfAuction</b> event and then later disable it, the response shows the <b>EndOfAuction</b> event preference as <b>Disabled</b>. But if you have never set a preference for the <b>EndOfAuction</b> event, no <b>EndOfAuction</b> preference is returned at all.
 * XSD Type: GetNotificationPreferencesResponseType
 */
class GetNotificationPreferencesResponseType extends AbstractResponseType
{

    /**
     * Specifies application-based event preferences that have been enabled.
     *
     * @var \Nogrod\eBaySDK\Trading\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     */
    private $applicationDeliveryPreferences = null;

    /**
     * Specifies application delivery URL Name associated with this user.
     *
     * @var string $deliveryURLName
     */
    private $deliveryURLName = null;

    /**
     * Specifies user-based event preferences that have been enabled or disabled.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationEnableType[] $userDeliveryPreferenceArray
     */
    private $userDeliveryPreferenceArray = null;

    /**
     * Returns user data for notification settings, such as set mobile phone.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationUserDataType $userData
     */
    private $userData = null;

    /**
     * Contains names and values assigned to a notification event.
     *  Currently can only be set for wireless applications.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationEventPropertyType[] $eventProperty
     */
    private $eventProperty = [
        
    ];

    /**
     * Gets as applicationDeliveryPreferences
     *
     * Specifies application-based event preferences that have been enabled.
     *
     * @return \Nogrod\eBaySDK\Trading\ApplicationDeliveryPreferencesType
     */
    public function getApplicationDeliveryPreferences()
    {
        return $this->applicationDeliveryPreferences;
    }

    /**
     * Sets a new applicationDeliveryPreferences
     *
     * Specifies application-based event preferences that have been enabled.
     *
     * @param \Nogrod\eBaySDK\Trading\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     * @return self
     */
    public function setApplicationDeliveryPreferences(\Nogrod\eBaySDK\Trading\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences)
    {
        $this->applicationDeliveryPreferences = $applicationDeliveryPreferences;
        return $this;
    }

    /**
     * Gets as deliveryURLName
     *
     * Specifies application delivery URL Name associated with this user.
     *
     * @return string
     */
    public function getDeliveryURLName()
    {
        return $this->deliveryURLName;
    }

    /**
     * Sets a new deliveryURLName
     *
     * Specifies application delivery URL Name associated with this user.
     *
     * @param string $deliveryURLName
     * @return self
     */
    public function setDeliveryURLName($deliveryURLName)
    {
        $this->deliveryURLName = $deliveryURLName;
        return $this;
    }

    /**
     * Adds as notificationEnable
     *
     * Specifies user-based event preferences that have been enabled or disabled.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NotificationEnableType $notificationEnable
     */
    public function addToUserDeliveryPreferenceArray(\Nogrod\eBaySDK\Trading\NotificationEnableType $notificationEnable)
    {
        $this->userDeliveryPreferenceArray[] = $notificationEnable;
        return $this;
    }

    /**
     * isset userDeliveryPreferenceArray
     *
     * Specifies user-based event preferences that have been enabled or disabled.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDeliveryPreferenceArray($index)
    {
        return isset($this->userDeliveryPreferenceArray[$index]);
    }

    /**
     * unset userDeliveryPreferenceArray
     *
     * Specifies user-based event preferences that have been enabled or disabled.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDeliveryPreferenceArray($index)
    {
        unset($this->userDeliveryPreferenceArray[$index]);
    }

    /**
     * Gets as userDeliveryPreferenceArray
     *
     * Specifies user-based event preferences that have been enabled or disabled.
     *
     * @return \Nogrod\eBaySDK\Trading\NotificationEnableType[]
     */
    public function getUserDeliveryPreferenceArray()
    {
        return $this->userDeliveryPreferenceArray;
    }

    /**
     * Sets a new userDeliveryPreferenceArray
     *
     * Specifies user-based event preferences that have been enabled or disabled.
     *
     * @param \Nogrod\eBaySDK\Trading\NotificationEnableType[] $userDeliveryPreferenceArray
     * @return self
     */
    public function setUserDeliveryPreferenceArray(array $userDeliveryPreferenceArray)
    {
        $this->userDeliveryPreferenceArray = $userDeliveryPreferenceArray;
        return $this;
    }

    /**
     * Gets as userData
     *
     * Returns user data for notification settings, such as set mobile phone.
     *
     * @return \Nogrod\eBaySDK\Trading\NotificationUserDataType
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * Sets a new userData
     *
     * Returns user data for notification settings, such as set mobile phone.
     *
     * @param \Nogrod\eBaySDK\Trading\NotificationUserDataType $userData
     * @return self
     */
    public function setUserData(\Nogrod\eBaySDK\Trading\NotificationUserDataType $userData)
    {
        $this->userData = $userData;
        return $this;
    }

    /**
     * Adds as eventProperty
     *
     * Contains names and values assigned to a notification event.
     *  Currently can only be set for wireless applications.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NotificationEventPropertyType $eventProperty
     */
    public function addToEventProperty(\Nogrod\eBaySDK\Trading\NotificationEventPropertyType $eventProperty)
    {
        $this->eventProperty[] = $eventProperty;
        return $this;
    }

    /**
     * isset eventProperty
     *
     * Contains names and values assigned to a notification event.
     *  Currently can only be set for wireless applications.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventProperty($index)
    {
        return isset($this->eventProperty[$index]);
    }

    /**
     * unset eventProperty
     *
     * Contains names and values assigned to a notification event.
     *  Currently can only be set for wireless applications.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventProperty($index)
    {
        unset($this->eventProperty[$index]);
    }

    /**
     * Gets as eventProperty
     *
     * Contains names and values assigned to a notification event.
     *  Currently can only be set for wireless applications.
     *
     * @return \Nogrod\eBaySDK\Trading\NotificationEventPropertyType[]
     */
    public function getEventProperty()
    {
        return $this->eventProperty;
    }

    /**
     * Sets a new eventProperty
     *
     * Contains names and values assigned to a notification event.
     *  Currently can only be set for wireless applications.
     *
     * @param \Nogrod\eBaySDK\Trading\NotificationEventPropertyType[] $eventProperty
     * @return self
     */
    public function setEventProperty(array $eventProperty)
    {
        $this->eventProperty = $eventProperty;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getApplicationDeliveryPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApplicationDeliveryPreferences", $value);
        }
        $value = $this->getDeliveryURLName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryURLName", $value);
        }
        $value = $this->getUserDeliveryPreferenceArray();
        if (null !== $value && !empty($this->getUserDeliveryPreferenceArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserDeliveryPreferenceArray", array_map(function ($v) {
                return ["NotificationEnable" => $v];
            }, $value));
        }
        $value = $this->getUserData();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserData", $value);
        }
        $value = $this->getEventProperty();
        if (null !== $value && !empty($this->getEventProperty())) {
            $writer->write(array_map(function ($v) {
                return ["EventProperty" => $v];
            }, $value));
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplicationDeliveryPreferences');
        if (null !== $value) {
            $this->setApplicationDeliveryPreferences(\Nogrod\eBaySDK\Trading\ApplicationDeliveryPreferencesType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryURLName');
        if (null !== $value) {
            $this->setDeliveryURLName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserDeliveryPreferenceArray', true);
        if (null !== $value && !empty($value)) {
            $this->setUserDeliveryPreferenceArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NotificationEnableType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserData');
        if (null !== $value) {
            $this->setUserData(\Nogrod\eBaySDK\Trading\NotificationUserDataType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventProperty', true);
        if (null !== $value && !empty($value)) {
            $this->setEventProperty(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NotificationEventPropertyType::fromKeyValue($v);
            }, $value));
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
