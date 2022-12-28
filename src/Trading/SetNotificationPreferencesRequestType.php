<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetNotificationPreferencesRequestType
 *
 * Manages notification and alert preferences for applications and users.
 * XSD Type: SetNotificationPreferencesRequestType
 */
class SetNotificationPreferencesRequestType extends AbstractRequestType
{
    /**
     * Specifies application-level event preferences that have been enabled,
     *  including the URL to which notifications should be delivered and whether
     *  notifications should be enabled or disabled (although the
     *  <b>UserDeliveryPreferenceArray</b> input property specifies specific
     *  notification subscriptions).
     *
     * @var \Nogrod\eBaySDK\Trading\ApplicationDeliveryPreferencesType $applicationDeliveryPreferences
     */
    private $applicationDeliveryPreferences = null;

    /**
     * Specifies events and whether or not they are enabled.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationEnableType[] $userDeliveryPreferenceArray
     */
    private $userDeliveryPreferenceArray = null;

    /**
     * Specifies user data for notification settings, such as mobile phone number.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationUserDataType $userData
     */
    private $userData = null;

    /**
     * Characteristics or details of an event such as type, name and value.
     *  Currently can only be set for wireless applications.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationEventPropertyType[] $eventProperty
     */
    private $eventProperty = [

    ];

    /**
     * Specifies up to 25 ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName to associate with a user token sent in a SetNotificationPreferences request. To specify multiple DeliveryURLNames, create separate instances of ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName, and then enable up to 25 DeliveryURLNames by including them in comma-separated format in this field.
     *
     * @var string $deliveryURLName
     */
    private $deliveryURLName = null;

    /**
     * Gets as applicationDeliveryPreferences
     *
     * Specifies application-level event preferences that have been enabled,
     *  including the URL to which notifications should be delivered and whether
     *  notifications should be enabled or disabled (although the
     *  <b>UserDeliveryPreferenceArray</b> input property specifies specific
     *  notification subscriptions).
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
     * Specifies application-level event preferences that have been enabled,
     *  including the URL to which notifications should be delivered and whether
     *  notifications should be enabled or disabled (although the
     *  <b>UserDeliveryPreferenceArray</b> input property specifies specific
     *  notification subscriptions).
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
     * Adds as notificationEnable
     *
     * Specifies events and whether or not they are enabled.
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
     * Specifies events and whether or not they are enabled.
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
     * Specifies events and whether or not they are enabled.
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
     * Specifies events and whether or not they are enabled.
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
     * Specifies events and whether or not they are enabled.
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
     * Specifies user data for notification settings, such as mobile phone number.
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
     * Specifies user data for notification settings, such as mobile phone number.
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
     * Characteristics or details of an event such as type, name and value.
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
     * Characteristics or details of an event such as type, name and value.
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
     * Characteristics or details of an event such as type, name and value.
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
     * Characteristics or details of an event such as type, name and value.
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
     * Characteristics or details of an event such as type, name and value.
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

    /**
     * Gets as deliveryURLName
     *
     * Specifies up to 25 ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName to associate with a user token sent in a SetNotificationPreferences request. To specify multiple DeliveryURLNames, create separate instances of ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName, and then enable up to 25 DeliveryURLNames by including them in comma-separated format in this field.
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
     * Specifies up to 25 ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName to associate with a user token sent in a SetNotificationPreferences request. To specify multiple DeliveryURLNames, create separate instances of ApplicationDeliveryPreferences.DeliveryURLDetails.DeliveryURLName, and then enable up to 25 DeliveryURLNames by including them in comma-separated format in this field.
     *
     * @param string $deliveryURLName
     * @return self
     */
    public function setDeliveryURLName($deliveryURLName)
    {
        $this->deliveryURLName = $deliveryURLName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getApplicationDeliveryPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApplicationDeliveryPreferences", $value);
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
        $value = $this->getDeliveryURLName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryURLName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplicationDeliveryPreferences');
        if (null !== $value) {
            $this->setApplicationDeliveryPreferences(\Nogrod\eBaySDK\Trading\ApplicationDeliveryPreferencesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserDeliveryPreferenceArray', true);
        if (null !== $value && !empty($value)) {
            $this->setUserDeliveryPreferenceArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NotificationEnableType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserData');
        if (null !== $value) {
            $this->setUserData(\Nogrod\eBaySDK\Trading\NotificationUserDataType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventProperty', true);
        if (null !== $value && !empty($value)) {
            $this->setEventProperty(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NotificationEventPropertyType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryURLName');
        if (null !== $value) {
            $this->setDeliveryURLName($value);
        }
    }
}
