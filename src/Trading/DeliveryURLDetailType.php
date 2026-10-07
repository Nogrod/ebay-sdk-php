<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeliveryURLDetailType
 *
 * Defines settings for a notification URL (including the URL name in DeliveryURLName).
 * XSD Type: DeliveryURLDetailType
 */
class DeliveryURLDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->deliveryURLName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveryURLName', null, (string) $value);
        }
        $value = $this->deliveryURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveryURL', null, (string) $value);
        }
        $value = $this->status;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Status', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DeliveryURLDetailType
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
                case 'DeliveryURLName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryURLName = $value;
                    }
                    return true;
                case 'DeliveryURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryURL = $value;
                    }
                    return true;
                case 'Status':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->status = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['DeliveryURLName'] = $this->deliveryURLName;
        $data['DeliveryURL'] = $this->deliveryURL;
        $data['Status'] = $this->status;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
