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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->notificationDetails;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'NotificationDetails', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NotificationDetailsArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->notificationDetails = [];
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
                case 'NotificationDetails':
                    $this->notificationDetails[] = \Nogrod\eBaySDK\Trading\NotificationDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
