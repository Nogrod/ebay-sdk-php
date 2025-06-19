<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing LinkedLineItemType
 *
 * Contains details of linked line item objects.
 * XSD Type: LinkedLineItemType
 */
class LinkedLineItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of the order to which the linked line item belongs.
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * The unique identifier of the linked order line item. For example, the order line item ID of the tire.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     *
     * @var string $sellerUserID
     */
    private $sellerUserID = null;

    /**
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and time to receive the order.
     *
     * @var \DateTime $estimatedDeliveryTimeMax
     */
    private $estimatedDeliveryTimeMax = null;

    /**
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date and time to receive the order.
     *
     * @var \DateTime $estimatedDeliveryTimeMin
     */
    private $estimatedDeliveryTimeMin = null;

    /**
     * Container consisting of details about the linked item.
     *  <span class="tablenote"><strong>Note:</strong>
     *  All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's listing site, which may vary from the seller's language.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * Gets as orderID
     *
     * The unique identifier of the order to which the linked line item belongs.
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
     * The unique identifier of the order to which the linked line item belongs.
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
     * The unique identifier of the linked order line item. For example, the order line item ID of the tire.
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
     * The unique identifier of the linked order line item. For example, the order line item ID of the tire.
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    /**
     * Gets as sellerUserID
     *
     * The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     *
     * @return string
     */
    public function getSellerUserID()
    {
        return $this->sellerUserID;
    }

    /**
     * Sets a new sellerUserID
     *
     * The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     *
     * @param string $sellerUserID
     * @return self
     */
    public function setSellerUserID($sellerUserID)
    {
        $this->sellerUserID = $sellerUserID;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryTimeMax
     *
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and time to receive the order.
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryTimeMax()
    {
        return $this->estimatedDeliveryTimeMax;
    }

    /**
     * Sets a new estimatedDeliveryTimeMax
     *
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and time to receive the order.
     *
     * @param \DateTime $estimatedDeliveryTimeMax
     * @return self
     */
    public function setEstimatedDeliveryTimeMax(\DateTime $estimatedDeliveryTimeMax)
    {
        $this->estimatedDeliveryTimeMax = $estimatedDeliveryTimeMax;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryTimeMin
     *
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date and time to receive the order.
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryTimeMin()
    {
        return $this->estimatedDeliveryTimeMin;
    }

    /**
     * Sets a new estimatedDeliveryTimeMin
     *
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date and time to receive the order.
     *
     * @param \DateTime $estimatedDeliveryTimeMin
     * @return self
     */
    public function setEstimatedDeliveryTimeMin(\DateTime $estimatedDeliveryTimeMin)
    {
        $this->estimatedDeliveryTimeMin = $estimatedDeliveryTimeMin;
        return $this;
    }

    /**
     * Gets as item
     *
     * Container consisting of details about the linked item.
     *  <span class="tablenote"><strong>Note:</strong>
     *  All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's listing site, which may vary from the seller's language.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Container consisting of details about the linked item.
     *  <span class="tablenote"><strong>Note:</strong>
     *  All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's listing site, which may vary from the seller's language.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
        }
        $value = $this->getSellerUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerUserID", $value);
        }
        $value = $this->getEstimatedDeliveryTimeMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryTimeMax", $value);
        }
        $value = $this->getEstimatedDeliveryTimeMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryTimeMin", $value);
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\LinkedLineItemType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerUserID');
        if (null !== $value) {
            $this->setSellerUserID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryTimeMax');
        if (null !== $value) {
            $this->setEstimatedDeliveryTimeMax(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryTimeMin');
        if (null !== $value) {
            $this->setEstimatedDeliveryTimeMin(new \DateTime($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
    }
}
