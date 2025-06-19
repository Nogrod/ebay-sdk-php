<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderAckResponseType
 *
 * The base response type of the <b>OrderAck</b> call.
 * XSD Type: OrderAckResponseType
 */
class OrderAckResponseType extends AbstractResponseType
{
    /**
     * This is the unique identifier of the order line item that was successfully acknowledged. This field is returned whether an <b>OrderID</b> (for a single line item order) or an <b>OrderLineItemID</b> value was passed into the call request.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as orderLineItemID
     *
     * This is the unique identifier of the order line item that was successfully acknowledged. This field is returned whether an <b>OrderID</b> (for a single line item order) or an <b>OrderLineItemID</b> value was passed into the call request.
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
     * This is the unique identifier of the order line item that was successfully acknowledged. This field is returned whether an <b>OrderID</b> (for a single line item order) or an <b>OrderLineItemID</b> value was passed into the call request.
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
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\OrderAckResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
