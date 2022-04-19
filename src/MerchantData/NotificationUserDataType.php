<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationUserDataType
 *
 * User data related to notifications.
 * XSD Type: NotificationUserDataType
 */
class NotificationUserDataType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * User data related to SMS notifications. SMS is currently reserved for future use.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SMSSubscriptionType $sMSSubscription
     */
    private $sMSSubscription = null;

    /**
     * User account activity summary alert delivery schedule.
     *  Returned if PreferenceLevel is set to UserData in
     *  GetNotificationPreferences.
     *  See "Working with Platform Notifications" for instructions on
     *  "Informational Alerts".
     *
     * @var \Nogrod\eBaySDK\MerchantData\SummaryEventScheduleType[] $summarySchedule
     */
    private $summarySchedule = [

    ];

    /**
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned in the
     *  notification payload. The string can contain user-specific information to
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution and proper encryption.
     *
     * @var string $externalUserData
     */
    private $externalUserData = null;

    /**
     * Gets as sMSSubscription
     *
     * User data related to SMS notifications. SMS is currently reserved for future use.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SMSSubscriptionType
     */
    public function getSMSSubscription()
    {
        return $this->sMSSubscription;
    }

    /**
     * Sets a new sMSSubscription
     *
     * User data related to SMS notifications. SMS is currently reserved for future use.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SMSSubscriptionType $sMSSubscription
     * @return self
     */
    public function setSMSSubscription(\Nogrod\eBaySDK\MerchantData\SMSSubscriptionType $sMSSubscription)
    {
        $this->sMSSubscription = $sMSSubscription;
        return $this;
    }

    /**
     * Adds as summarySchedule
     *
     * User account activity summary alert delivery schedule.
     *  Returned if PreferenceLevel is set to UserData in
     *  GetNotificationPreferences.
     *  See "Working with Platform Notifications" for instructions on
     *  "Informational Alerts".
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SummaryEventScheduleType $summarySchedule
     */
    public function addToSummarySchedule(\Nogrod\eBaySDK\MerchantData\SummaryEventScheduleType $summarySchedule)
    {
        $this->summarySchedule[] = $summarySchedule;
        return $this;
    }

    /**
     * isset summarySchedule
     *
     * User account activity summary alert delivery schedule.
     *  Returned if PreferenceLevel is set to UserData in
     *  GetNotificationPreferences.
     *  See "Working with Platform Notifications" for instructions on
     *  "Informational Alerts".
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSummarySchedule($index)
    {
        return isset($this->summarySchedule[$index]);
    }

    /**
     * unset summarySchedule
     *
     * User account activity summary alert delivery schedule.
     *  Returned if PreferenceLevel is set to UserData in
     *  GetNotificationPreferences.
     *  See "Working with Platform Notifications" for instructions on
     *  "Informational Alerts".
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSummarySchedule($index)
    {
        unset($this->summarySchedule[$index]);
    }

    /**
     * Gets as summarySchedule
     *
     * User account activity summary alert delivery schedule.
     *  Returned if PreferenceLevel is set to UserData in
     *  GetNotificationPreferences.
     *  See "Working with Platform Notifications" for instructions on
     *  "Informational Alerts".
     *
     * @return \Nogrod\eBaySDK\MerchantData\SummaryEventScheduleType[]
     */
    public function getSummarySchedule()
    {
        return $this->summarySchedule;
    }

    /**
     * Sets a new summarySchedule
     *
     * User account activity summary alert delivery schedule.
     *  Returned if PreferenceLevel is set to UserData in
     *  GetNotificationPreferences.
     *  See "Working with Platform Notifications" for instructions on
     *  "Informational Alerts".
     *
     * @param \Nogrod\eBaySDK\MerchantData\SummaryEventScheduleType[] $summarySchedule
     * @return self
     */
    public function setSummarySchedule(array $summarySchedule)
    {
        $this->summarySchedule = $summarySchedule;
        return $this;
    }

    /**
     * Gets as externalUserData
     *
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned in the
     *  notification payload. The string can contain user-specific information to
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution and proper encryption.
     *
     * @return string
     */
    public function getExternalUserData()
    {
        return $this->externalUserData;
    }

    /**
     * Sets a new externalUserData
     *
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned in the
     *  notification payload. The string can contain user-specific information to
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution and proper encryption.
     *
     * @param string $externalUserData
     * @return self
     */
    public function setExternalUserData($externalUserData)
    {
        $this->externalUserData = $externalUserData;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSMSSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SMSSubscription", $value);
        }
        $value = $this->getSummarySchedule();
        if (null !== $value && !empty($this->getSummarySchedule())) {
            $writer->write(array_map(function ($v) {
                return ["SummarySchedule" => $v];
            }, $value));
        }
        $value = $this->getExternalUserData();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalUserData", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SMSSubscription');
        if (null !== $value) {
            $this->setSMSSubscription(\Nogrod\eBaySDK\MerchantData\SMSSubscriptionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SummarySchedule', true);
        if (null !== $value && !empty($value)) {
            $this->setSummarySchedule(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SummaryEventScheduleType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalUserData');
        if (null !== $value) {
            $this->setExternalUserData($value);
        }
    }
}
