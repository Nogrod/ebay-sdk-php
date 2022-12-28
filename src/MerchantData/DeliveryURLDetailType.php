<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeliveryURLDetailType
 *
 * Defines settings for a notification URL (including the URL name in DeliveryURLName).
 * XSD Type: DeliveryURLDetailType
 */
class DeliveryURLDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of a notification delivery URL. You can list up to 25 instances of
     *  DeliveryURLName, and then subscribe these URLs to notifications by listing them in comma-
     *  separated format in the DeliveryURLName element outside of
     *  ApplicationDeliveryPreferences.
     *
     * @var string $deliveryURLName
     */
    private $deliveryURLName = null;

    /**
     * The address of a notification delivery URL.
     *  This address applies to the DeliveryURLName
     *  within the same
     *  ApplicationDeliveryPreferences.DeliveryURLDetails container.
     *  For delivery to a server, the URL must
     *  begin with "<code>https://</code>" and must be well
     *  formed. Use a URL that is functional at the time of the
     *  call.
     *
     * @var string $deliveryURL
     */
    private $deliveryURL = null;

    /**
     * The status of a notification delivery URL.
     *  This status applies to the DeliveryURLName and delivery URL
     *  within the same ApplicationDeliveryPreferences.DeliveryURLDetails container.
     *  If the status is disabled, then notifications will not be sent to the delivery URL.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as deliveryURLName
     *
     * The name of a notification delivery URL. You can list up to 25 instances of
     *  DeliveryURLName, and then subscribe these URLs to notifications by listing them in comma-
     *  separated format in the DeliveryURLName element outside of
     *  ApplicationDeliveryPreferences.
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
     * The name of a notification delivery URL. You can list up to 25 instances of
     *  DeliveryURLName, and then subscribe these URLs to notifications by listing them in comma-
     *  separated format in the DeliveryURLName element outside of
     *  ApplicationDeliveryPreferences.
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
     * Gets as deliveryURL
     *
     * The address of a notification delivery URL.
     *  This address applies to the DeliveryURLName
     *  within the same
     *  ApplicationDeliveryPreferences.DeliveryURLDetails container.
     *  For delivery to a server, the URL must
     *  begin with "<code>https://</code>" and must be well
     *  formed. Use a URL that is functional at the time of the
     *  call.
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
     * The address of a notification delivery URL.
     *  This address applies to the DeliveryURLName
     *  within the same
     *  ApplicationDeliveryPreferences.DeliveryURLDetails container.
     *  For delivery to a server, the URL must
     *  begin with "<code>https://</code>" and must be well
     *  formed. Use a URL that is functional at the time of the
     *  call.
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
     * Gets as status
     *
     * The status of a notification delivery URL.
     *  This status applies to the DeliveryURLName and delivery URL
     *  within the same ApplicationDeliveryPreferences.DeliveryURLDetails container.
     *  If the status is disabled, then notifications will not be sent to the delivery URL.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of a notification delivery URL.
     *  This status applies to the DeliveryURLName and delivery URL
     *  within the same ApplicationDeliveryPreferences.DeliveryURLDetails container.
     *  If the status is disabled, then notifications will not be sent to the delivery URL.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDeliveryURLName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryURLName", $value);
        }
        $value = $this->getDeliveryURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryURL", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryURLName');
        if (null !== $value) {
            $this->setDeliveryURLName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryURL');
        if (null !== $value) {
            $this->setDeliveryURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
    }
}
