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
        if (!is_array($this->userDeliveryPreferenceArray)) {
            throw new \LogicException('userDeliveryPreferenceArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NotificationEnableType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\NotificationEnableType> $userDeliveryPreferenceArray
     * @return self
     */
    public function setUserDeliveryPreferenceArray(iterable $userDeliveryPreferenceArray)
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
        if (!is_array($this->eventProperty)) {
            throw new \LogicException('eventProperty is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NotificationEventPropertyType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\NotificationEventPropertyType> $eventProperty
     * @return self
     */
    public function setEventProperty(iterable $eventProperty)
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->applicationDeliveryPreferences;
        if (null !== $value) {
            $writer->startElementNs(null, 'ApplicationDeliveryPreferences', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->userDeliveryPreferenceArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'UserDeliveryPreferenceArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'NotificationEnable', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->userData;
        if (null !== $value) {
            $writer->startElementNs(null, 'UserData', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->eventProperty;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'EventProperty', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->deliveryURLName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveryURLName', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SetNotificationPreferencesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->userDeliveryPreferenceArray = [];
        $this->eventProperty = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ApplicationDeliveryPreferences':
                    $this->applicationDeliveryPreferences = \Nogrod\eBaySDK\Trading\ApplicationDeliveryPreferencesType::xmlRead($reader);
                    return true;
                case 'UserDeliveryPreferenceArray':
                    $this->userDeliveryPreferenceArray = Func::readList($reader, 'NotificationEnable', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\NotificationEnableType::xmlRead($reader));
                    return true;
                case 'UserData':
                    $this->userData = \Nogrod\eBaySDK\Trading\NotificationUserDataType::xmlRead($reader);
                    return true;
                case 'EventProperty':
                    $this->eventProperty[] = \Nogrod\eBaySDK\Trading\NotificationEventPropertyType::xmlRead($reader);
                    return true;
                case 'DeliveryURLName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryURLName = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ApplicationDeliveryPreferences'] = $this->applicationDeliveryPreferences;
        $data['UserDeliveryPreferenceArray'] = Func::jsonList($this->userDeliveryPreferenceArray);
        $data['UserData'] = $this->userData;
        $data['EventProperty'] = Func::jsonList($this->eventProperty);
        $data['DeliveryURLName'] = $this->deliveryURLName;
        return $data;
    }
}
