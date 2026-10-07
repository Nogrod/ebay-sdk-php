<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationDetailsType
 *
 * Information about a single notification. Notification information includes
 *  the reference ID, notification type, current status, time delivered, error code,
 *  and error message for the notification. If notification details are included in
 *  the response, all of the detail fields are returned.
 * XSD Type: NotificationDetailsType
 */
class NotificationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Returns the destination address for the notification. This is the value set
     *  using SetNotificationPreferences.
     *
     * @var string $deliveryURL
     */
    private $deliveryURL = null;

    /**
     * Reference identifier for the notification.
     *
     * @var string $referenceID
     */
    private $referenceID = null;

    /**
     * Date and time when this notification will be removed from the
     *  eBay system.
     *
     * @var \DateTime $expirationTime
     */
    private $expirationTime = null;

    /**
     * The returned enumeration value indicates the type of platform notification,
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Returns the total number of retries for the given notification.
     *
     * @var int $retries
     */
    private $retries = null;

    /**
     * Returns the notification status. Possible values include Delivered,
     *  Failed, Rejected, and MarkedDown.
     *
     * @var string $deliveryStatus
     */
    private $deliveryStatus = null;

    /**
     * Returns the time when the notification is scheduled for retry.
     *  This won't be included if the DeliveryStatus is Delivered.
     *
     * @var \DateTime $nextRetryTime
     */
    private $nextRetryTime = null;

    /**
     * Returns the time when the notification was delivered.
     *
     * @var \DateTime $deliveryTime
     */
    private $deliveryTime = null;

    /**
     * Returns the error message.
     *
     * @var string $errorMessage
     */
    private $errorMessage = null;

    /**
     * Returns the delivery URL name for the notification. This is the value set
     *  using SetNotificationPreferences.
     *
     * @var string $deliveryURLName
     */
    private $deliveryURLName = null;

    /**
     * Gets as deliveryURL
     *
     * Returns the destination address for the notification. This is the value set
     *  using SetNotificationPreferences.
     *
     * @return string
     */
    public function getDeliveryURL()
    {
        return $this->deliveryURL;
    }

    /**
     * Sets a new deliveryURL
     *
     * Returns the destination address for the notification. This is the value set
     *  using SetNotificationPreferences.
     *
     * @param string $deliveryURL
     * @return self
     */
    public function setDeliveryURL($deliveryURL)
    {
        $this->deliveryURL = $deliveryURL;
        return $this;
    }

    /**
     * Gets as referenceID
     *
     * Reference identifier for the notification.
     *
     * @return string
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * Reference identifier for the notification.
     *
     * @param string $referenceID
     * @return self
     */
    public function setReferenceID($referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as expirationTime
     *
     * Date and time when this notification will be removed from the
     *  eBay system.
     *
     * @return \DateTime
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * Sets a new expirationTime
     *
     * Date and time when this notification will be removed from the
     *  eBay system.
     *
     * @param \DateTime $expirationTime
     * @return self
     */
    public function setExpirationTime(\DateTime $expirationTime)
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * Gets as type
     *
     * The returned enumeration value indicates the type of platform notification,
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The returned enumeration value indicates the type of platform notification,
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as retries
     *
     * Returns the total number of retries for the given notification.
     *
     * @return int
     */
    public function getRetries()
    {
        return $this->retries;
    }

    /**
     * Sets a new retries
     *
     * Returns the total number of retries for the given notification.
     *
     * @param int $retries
     * @return self
     */
    public function setRetries($retries)
    {
        $this->retries = $retries;
        return $this;
    }

    /**
     * Gets as deliveryStatus
     *
     * Returns the notification status. Possible values include Delivered,
     *  Failed, Rejected, and MarkedDown.
     *
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * Sets a new deliveryStatus
     *
     * Returns the notification status. Possible values include Delivered,
     *  Failed, Rejected, and MarkedDown.
     *
     * @param string $deliveryStatus
     * @return self
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    /**
     * Gets as nextRetryTime
     *
     * Returns the time when the notification is scheduled for retry.
     *  This won't be included if the DeliveryStatus is Delivered.
     *
     * @return \DateTime
     */
    public function getNextRetryTime()
    {
        return $this->nextRetryTime;
    }

    /**
     * Sets a new nextRetryTime
     *
     * Returns the time when the notification is scheduled for retry.
     *  This won't be included if the DeliveryStatus is Delivered.
     *
     * @param \DateTime $nextRetryTime
     * @return self
     */
    public function setNextRetryTime(\DateTime $nextRetryTime)
    {
        $this->nextRetryTime = $nextRetryTime;
        return $this;
    }

    /**
     * Gets as deliveryTime
     *
     * Returns the time when the notification was delivered.
     *
     * @return \DateTime
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Sets a new deliveryTime
     *
     * Returns the time when the notification was delivered.
     *
     * @param \DateTime $deliveryTime
     * @return self
     */
    public function setDeliveryTime(\DateTime $deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * Gets as errorMessage
     *
     * Returns the error message.
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * Returns the error message.
     *
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Gets as deliveryURLName
     *
     * Returns the delivery URL name for the notification. This is the value set
     *  using SetNotificationPreferences.
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
     * Returns the delivery URL name for the notification. This is the value set
     *  using SetNotificationPreferences.
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->deliveryURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveryURL', null, (string) $value);
        }
        $value = $this->referenceID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReferenceID', null, (string) $value);
        }
        $value = $this->expirationTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExpirationTime', null, Func::formatDateTime($value));
        }
        $value = $this->type;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Type', null, (string) $value);
        }
        $value = $this->retries;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Retries', null, (string) $value);
        }
        $value = $this->deliveryStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveryStatus', null, (string) $value);
        }
        $value = $this->nextRetryTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NextRetryTime', null, Func::formatDateTime($value));
        }
        $value = $this->deliveryTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveryTime', null, Func::formatDateTime($value));
        }
        $value = $this->errorMessage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ErrorMessage', null, (string) $value);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NotificationDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'DeliveryURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryURL = $value;
                    }
                    return true;
                case 'ReferenceID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->referenceID = $value;
                    }
                    return true;
                case 'ExpirationTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->expirationTime = new \DateTime($value);
                    }
                    return true;
                case 'Type':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->type = $value;
                    }
                    return true;
                case 'Retries':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->retries = (int) $value;
                    }
                    return true;
                case 'DeliveryStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryStatus = $value;
                    }
                    return true;
                case 'NextRetryTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->nextRetryTime = new \DateTime($value);
                    }
                    return true;
                case 'DeliveryTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryTime = new \DateTime($value);
                    }
                    return true;
                case 'ErrorMessage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->errorMessage = $value;
                    }
                    return true;
                case 'DeliveryURLName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryURLName = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
