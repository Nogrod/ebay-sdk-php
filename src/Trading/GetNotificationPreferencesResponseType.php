<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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
        if (!is_array($this->userDeliveryPreferenceArray)) {
            throw new \LogicException('userDeliveryPreferenceArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NotificationEnableType>
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
        if (!is_array($this->eventProperty)) {
            throw new \LogicException('eventProperty is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NotificationEventPropertyType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\NotificationEventPropertyType> $eventProperty
     * @return self
     */
    public function setEventProperty(iterable $eventProperty)
    {
        $this->eventProperty = $eventProperty;
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
        $value = $this->deliveryURLName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveryURLName', null, (string) $value);
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
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetNotificationPreferencesResponseType
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
                case 'DeliveryURLName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryURLName = $value;
                    }
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
            }
        }
        return parent::xmlReadElement($reader);
    }
}
