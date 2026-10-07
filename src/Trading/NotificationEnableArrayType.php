<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationEnableArrayType
 *
 * This type is used by the <b>UserDeliveryPreferenceArray</b> container of the <b>SetNotificationPreferences</b> and <b>GetNotificationPreferences</b> calls. The <b>UserDeliveryPreferenceArray</b> container consists of one or more notifications and whether or not each notification is enabled or disabled.
 * XSD Type: NotificationEnableArrayType
 */
class NotificationEnableArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->notificationEnable)) {
            throw new \LogicException('notificationEnable is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NotificationEnableType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\NotificationEnableType> $notificationEnable
     * @return self
     */
    public function setNotificationEnable(iterable $notificationEnable)
    {
        $this->notificationEnable = $notificationEnable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->notificationEnable;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'NotificationEnable', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NotificationEnableArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->notificationEnable = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'NotificationEnable':
                    $this->notificationEnable[] = \Nogrod\eBaySDK\Trading\NotificationEnableType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['NotificationEnable'] = Func::jsonList($this->notificationEnable);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
