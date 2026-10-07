<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DigitalDeliverySelectedType
 *
 * This type is used by the <b>DigitalDeliverySelected</b> container that is returned by <b>GetOrders</b> and other order management calls. The <b>DigitalDeliverySelected</b> container is only applicable and returned if the buyer purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift.
 * XSD Type: DigitalDeliverySelectedType
 */
class DigitalDeliverySelectedType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates the method in which the digital gift card will be delivered to the buyer or to the person whom the purchaser is giving the digital gift card to. Currently, the only supported delivery method is by email.
     *
     * @var string $deliveryMethod
     */
    private $deliveryMethod = null;

    /**
     * This container consists of the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b> field). Currently, the only supported delivery method is by email.
     *
     * @var \Nogrod\eBaySDK\Trading\DeliveryStatusType $deliveryStatus
     */
    private $deliveryStatus = null;

    /**
     * This container is returned by <b>GetOrders</b> and other order management calls to provide details on the recipient of a digital gift card that was purchased. The <b>DeliveryDetails</b> container is only returned if the buyer is buying a digital gift card and giving that gift card to another person.
     *
     * @var \Nogrod\eBaySDK\Trading\DeliveryDetailsType $deliveryDetails
     */
    private $deliveryDetails = null;

    /**
     * Gets as deliveryMethod
     *
     * This value indicates the method in which the digital gift card will be delivered to the buyer or to the person whom the purchaser is giving the digital gift card to. Currently, the only supported delivery method is by email.
     *
     * @return string
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * Sets a new deliveryMethod
     *
     * This value indicates the method in which the digital gift card will be delivered to the buyer or to the person whom the purchaser is giving the digital gift card to. Currently, the only supported delivery method is by email.
     *
     * @param string $deliveryMethod
     * @return self
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    /**
     * Gets as deliveryStatus
     *
     * This container consists of the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b> field). Currently, the only supported delivery method is by email.
     *
     * @return \Nogrod\eBaySDK\Trading\DeliveryStatusType
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * Sets a new deliveryStatus
     *
     * This container consists of the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b> field). Currently, the only supported delivery method is by email.
     *
     * @param \Nogrod\eBaySDK\Trading\DeliveryStatusType $deliveryStatus
     * @return self
     */
    public function setDeliveryStatus(\Nogrod\eBaySDK\Trading\DeliveryStatusType $deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    /**
     * Gets as deliveryDetails
     *
     * This container is returned by <b>GetOrders</b> and other order management calls to provide details on the recipient of a digital gift card that was purchased. The <b>DeliveryDetails</b> container is only returned if the buyer is buying a digital gift card and giving that gift card to another person.
     *
     * @return \Nogrod\eBaySDK\Trading\DeliveryDetailsType
     */
    public function getDeliveryDetails()
    {
        return $this->deliveryDetails;
    }

    /**
     * Sets a new deliveryDetails
     *
     * This container is returned by <b>GetOrders</b> and other order management calls to provide details on the recipient of a digital gift card that was purchased. The <b>DeliveryDetails</b> container is only returned if the buyer is buying a digital gift card and giving that gift card to another person.
     *
     * @param \Nogrod\eBaySDK\Trading\DeliveryDetailsType $deliveryDetails
     * @return self
     */
    public function setDeliveryDetails(\Nogrod\eBaySDK\Trading\DeliveryDetailsType $deliveryDetails)
    {
        $this->deliveryDetails = $deliveryDetails;
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
        $value = $this->deliveryMethod;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveryMethod', null, (string) $value);
        }
        $value = $this->deliveryStatus;
        if (null !== $value) {
            $writer->startElementNs(null, 'DeliveryStatus', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->deliveryDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'DeliveryDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DigitalDeliverySelectedType
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
                case 'DeliveryMethod':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveryMethod = $value;
                    }
                    return true;
                case 'DeliveryStatus':
                    $this->deliveryStatus = \Nogrod\eBaySDK\Trading\DeliveryStatusType::xmlRead($reader);
                    return true;
                case 'DeliveryDetails':
                    $this->deliveryDetails = \Nogrod\eBaySDK\Trading\DeliveryDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
