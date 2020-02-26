<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * OrderLineItemID is required upon input and always returned in the
     *  response. You can use this field to track whether or not a response is
     *  returned for every request, and to match specific responses to
     *  Specific requests.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
