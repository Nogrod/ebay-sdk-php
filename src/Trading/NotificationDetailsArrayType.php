<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationDetailsArrayType
 *
 * Type used by the <b>NotificationDetailsArray</b> container that is returned by the <b>GetNotificationsUsage</b> call. The <b>NotificationDetailsArray</b> container consists of one or more notifications that match the input criteria in the call request.
 *  <br><br>
 *  This container is only returned if an <b>ItemID</b> value was specified in the request, and there were notifications related to this listing during the specified time range.
 * XSD Type: NotificationDetailsArrayType
 */
class NotificationDetailsArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if an <b>ItemID</b> value was specified in the request, and there were one or more notifications related to this listing during the specified time range.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationDetailsType[] $notificationDetails
     */
    private $notificationDetails = [

    ];

    /**
     * Adds as notificationDetails
     *
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if an <b>ItemID</b> value was specified in the request, and there were one or more notifications related to this listing during the specified time range.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NotificationDetailsType $notificationDetails
     */
    public function addToNotificationDetails(\Nogrod\eBaySDK\Trading\NotificationDetailsType $notificationDetails)
    {
        $this->notificationDetails[] = $notificationDetails;
        return $this;
    }

    /**
     * isset notificationDetails
     *
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if an <b>ItemID</b> value was specified in the request, and there were one or more notifications related to this listing during the specified time range.
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
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if an <b>ItemID</b> value was specified in the request, and there were one or more notifications related to this listing during the specified time range.
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
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if an <b>ItemID</b> value was specified in the request, and there were one or more notifications related to this listing during the specified time range.
     *
     * @return \Nogrod\eBaySDK\Trading\NotificationDetailsType[]
     */
    public function getNotificationDetails()
    {
        return $this->notificationDetails;
    }

    /**
     * Sets a new notificationDetails
     *
     * Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if an <b>ItemID</b> value was specified in the request, and there were one or more notifications related to this listing during the specified time range.
     *
     * @param \Nogrod\eBaySDK\Trading\NotificationDetailsType[] $notificationDetails
     * @return self
     */
    public function setNotificationDetails(array $notificationDetails)
    {
        $this->notificationDetails = $notificationDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNotificationDetails();
        if (null !== $value && !empty($this->getNotificationDetails())) {
            $writer->write(array_map(function ($v) {return ["NotificationDetails" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setNotificationDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\NotificationDetailsType::fromKeyValue($v);}, $value));
        }
    }
}
