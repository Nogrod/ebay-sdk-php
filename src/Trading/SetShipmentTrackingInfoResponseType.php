<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetShipmentTrackingInfoResponseType
 *
 * Response to a SetShipmentTrackingInfo request that verifies whether or not the
 *  call request reached the eBay servers with or without errors.
 * XSD Type: SetShipmentTrackingInfoResponseType
 */
class SetShipmentTrackingInfoResponseType extends AbstractResponseType
{
    /**
     * OrderID is always returned in the
     *  response. You can use this field to track whether or not a response is
     *  returned for every request, and to match specific responses to
     *  Specific requests.
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * OrderLineItemID is required upon input and always returned in the
     *  response. You can use this field to track whether or not a response is
     *  returned for every request, and to match specific responses to
     *  Specific requests.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as orderID
     *
     * OrderID is always returned in the
     *  response. You can use this field to track whether or not a response is
     *  returned for every request, and to match specific responses to
     *  Specific requests.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * OrderID is always returned in the
     *  response. You can use this field to track whether or not a response is
     *  returned for every request, and to match specific responses to
     *  Specific requests.
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * OrderLineItemID is required upon input and always returned in the
     *  response. You can use this field to track whether or not a response is
     *  returned for every request, and to match specific responses to
     *  Specific requests.
     *
     * @return string
     */
    public function getOrderLineItemID()
    {
        return $this->orderLineItemID;
    }

    /**
     * Sets a new orderLineItemID
     *
     * OrderLineItemID is required upon input and always returned in the
     *  response. You can use this field to track whether or not a response is
     *  returned for every request, and to match specific responses to
     *  Specific requests.
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->orderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderID', null, (string) $value);
        }
        $value = $this->orderLineItemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderLineItemID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'OrderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderID = $value;
                    }
                    return true;
                case 'OrderLineItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderLineItemID = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
