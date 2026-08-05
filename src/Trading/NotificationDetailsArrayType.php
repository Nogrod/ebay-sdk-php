<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationDetailsArrayType
 *
 * Type used by the <b>NotificationDetailsArray</b> container that is returned by the <b>GetNotificationsUsage</b> call. The <b>NotificationDetailsArray</b> container consists of one or more notifications that match the input criteria in the call request.
 *  <br><br>
 *  This container is only returned if there were notifications related to this listing during the specified time range.
 * XSD Type: NotificationDetailsArrayType
 */
class NotificationDetailsArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if there were one or more notifications related to this listing during the specified time range.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationDetailsType[] $notificationDetails
     */
    private $notificationDetails = [

    ];

    /**
     * Adds as notificationDetails
     *
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if there were one or more notifications related to this listing during the specified time range.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NotificationDetailsType $notificationDetails
     */
    public function addToNotificationDetails(\Nogrod\eBaySDK\Trading\NotificationDetailsType $notificationDetails)
    {
        if (!is_array($this->notificationDetails)) {
            throw new \LogicException('notificationDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->notificationDetails[] = $notificationDetails;
        return $this;
    }

    /**
     * isset notificationDetails
     *
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if there were one or more notifications related to this listing during the specified time range.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationDetails($index)
    {
        return isset($this->notificationDetails[$index]);
    }

    /**
     * unset notificationDetails
     *
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if there were one or more notifications related to this listing during the specified time range.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationDetails($index)
    {
        unset($this->notificationDetails[$index]);
    }

    /**
     * Gets as notificationDetails
     *
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if there were one or more notifications related to this listing during the specified time range.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\NotificationDetailsType>
     */
    public function getNotificationDetails()
    {
        return $this->notificationDetails;
    }

    /**
     * Sets a new notificationDetails
     *
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if there were one or more notifications related to this listing during the specified time range.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\NotificationDetailsType> $notificationDetails
     * @return self
     */
    public function setNotificationDetails(iterable $notificationDetails)
    {
        $this->notificationDetails = $notificationDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNotificationDetails();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["NotificationDetails" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\NotificationDetailsArrayType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationDetails');
        if (null !== $value) {
            $this->setNotificationDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NotificationDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
