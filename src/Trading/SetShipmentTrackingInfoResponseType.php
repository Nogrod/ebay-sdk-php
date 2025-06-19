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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
