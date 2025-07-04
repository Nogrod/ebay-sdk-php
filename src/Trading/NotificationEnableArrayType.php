<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationEnableArrayType
 *
 * This type is used by the <b>UserDeliveryPreferenceArray</b> container of the <b>SetNotificationPreferences</b> and <b>GetNotificationPreferences</b> calls. The <b>UserDeliveryPreferenceArray</b> container consists of one or more notifications and whether or not each notification is enabled or disabled.
 * XSD Type: NotificationEnableArrayType
 */
class NotificationEnableArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * In a <b>SetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is used for each notification that the user either wants to subsribe to or disable.
     *  <br><br>
     *  If a <b>UserDeliveryPreferenceArray</b> container is used, at least one <b>NotificationEnable</b> container must be specified.
     *  <br><br>
     *  In a <b>GetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is returned for each notification that the user has set a preference on - enabled or disabled.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationEnableType[] $notificationEnable
     */
    private $notificationEnable = [

    ];

    /**
     * Adds as notificationEnable
     *
     * In a <b>SetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is used for each notification that the user either wants to subsribe to or disable.
     *  <br><br>
     *  If a <b>UserDeliveryPreferenceArray</b> container is used, at least one <b>NotificationEnable</b> container must be specified.
     *  <br><br>
     *  In a <b>GetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is returned for each notification that the user has set a preference on - enabled or disabled.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NotificationEnableType $notificationEnable
     */
    public function addToNotificationEnable(\Nogrod\eBaySDK\Trading\NotificationEnableType $notificationEnable)
    {
        $this->notificationEnable[] = $notificationEnable;
        return $this;
    }

    /**
     * isset notificationEnable
     *
     * In a <b>SetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is used for each notification that the user either wants to subsribe to or disable.
     *  <br><br>
     *  If a <b>UserDeliveryPreferenceArray</b> container is used, at least one <b>NotificationEnable</b> container must be specified.
     *  <br><br>
     *  In a <b>GetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is returned for each notification that the user has set a preference on - enabled or disabled.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationEnable($index)
    {
        return isset($this->notificationEnable[$index]);
    }

    /**
     * unset notificationEnable
     *
     * In a <b>SetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is used for each notification that the user either wants to subsribe to or disable.
     *  <br><br>
     *  If a <b>UserDeliveryPreferenceArray</b> container is used, at least one <b>NotificationEnable</b> container must be specified.
     *  <br><br>
     *  In a <b>GetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is returned for each notification that the user has set a preference on - enabled or disabled.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationEnable($index)
    {
        unset($this->notificationEnable[$index]);
    }

    /**
     * Gets as notificationEnable
     *
     * In a <b>SetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is used for each notification that the user either wants to subsribe to or disable.
     *  <br><br>
     *  If a <b>UserDeliveryPreferenceArray</b> container is used, at least one <b>NotificationEnable</b> container must be specified.
     *  <br><br>
     *  In a <b>GetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is returned for each notification that the user has set a preference on - enabled or disabled.
     *
     * @return \Nogrod\eBaySDK\Trading\NotificationEnableType[]
     */
    public function getNotificationEnable()
    {
        return $this->notificationEnable;
    }

    /**
     * Sets a new notificationEnable
     *
     * In a <b>SetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is used for each notification that the user either wants to subsribe to or disable.
     *  <br><br>
     *  If a <b>UserDeliveryPreferenceArray</b> container is used, at least one <b>NotificationEnable</b> container must be specified.
     *  <br><br>
     *  In a <b>GetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is returned for each notification that the user has set a preference on - enabled or disabled.
     *
     * @param \Nogrod\eBaySDK\Trading\NotificationEnableType[] $notificationEnable
     * @return self
     */
    public function setNotificationEnable(array $notificationEnable)
    {
        $this->notificationEnable = $notificationEnable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNotificationEnable();
        if (null !== $value && [] !== $this->getNotificationEnable()) {
            $writer->write(array_map(function ($v) {return ["NotificationEnable" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\NotificationEnableArrayType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationEnable');
        if (null !== $value) {
            $this->setNotificationEnable(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\NotificationEnableType::fromKeyValue($v);}, $value));
        }
    }
}
