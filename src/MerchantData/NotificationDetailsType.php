<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * Returns the notification type. Possible values include: AskSellerQuestion,
     *  AuctionCheckoutComplete, BestOffer, CheckoutBuyerRequestTotal, EndOfAuction,
     *  Feedback, FixedPriceEndOfTransaction, FixedPriceTransaction, ItemNotReceived,
     *  MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute, UPISellerClosedDispute,
     *  UPISellerOpenedDispute, and UPISellerRespondedToDispute.
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
     * Returns the notification type. Possible values include: AskSellerQuestion,
     *  AuctionCheckoutComplete, BestOffer, CheckoutBuyerRequestTotal, EndOfAuction,
     *  Feedback, FixedPriceEndOfTransaction, FixedPriceTransaction, ItemNotReceived,
     *  MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute, UPISellerClosedDispute,
     *  UPISellerOpenedDispute, and UPISellerRespondedToDispute.
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
     * Returns the notification type. Possible values include: AskSellerQuestion,
     *  AuctionCheckoutComplete, BestOffer, CheckoutBuyerRequestTotal, EndOfAuction,
     *  Feedback, FixedPriceEndOfTransaction, FixedPriceTransaction, ItemNotReceived,
     *  MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute, UPISellerClosedDispute,
     *  UPISellerOpenedDispute, and UPISellerRespondedToDispute.
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDeliveryURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryURL", $value);
        }
        $value = $this->getReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferenceID", $value);
        }
        $value = $this->getExpirationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpirationTime", $value);
        }
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Type", $value);
        }
        $value = $this->getRetries();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Retries", $value);
        }
        $value = $this->getDeliveryStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryStatus", $value);
        }
        $value = $this->getNextRetryTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NextRetryTime", $value);
        }
        $value = $this->getDeliveryTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryTime", $value);
        }
        $value = $this->getErrorMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ErrorMessage", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryURL');
        if (null !== $value) {
            $this->setDeliveryURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferenceID');
        if (null !== $value) {
            $this->setReferenceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpirationTime');
        if (null !== $value) {
            $this->setExpirationTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Retries');
        if (null !== $value) {
            $this->setRetries($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryStatus');
        if (null !== $value) {
            $this->setDeliveryStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NextRetryTime');
        if (null !== $value) {
            $this->setNextRetryTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryTime');
        if (null !== $value) {
            $this->setDeliveryTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorMessage');
        if (null !== $value) {
            $this->setErrorMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryURLName');
        if (null !== $value) {
            $this->setDeliveryURLName($value);
        }
    }
}
