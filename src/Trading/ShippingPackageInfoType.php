<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPackageInfoType
 *
 * Type defining the <b>ShippingPackageInfoType</b> container, which is returned in order management calls. The <b>ShippingPackageInfoType</b> container provides information on delivery times and tracking information for a shipping package.
 * XSD Type: ShippingPackageInfoType
 */
class ShippingPackageInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of the store from where the order will be delivered. This field is only applicable to 'In-Store Pickup' and 'Click and Collect' orders.
     *
     * @var string $storeID
     */
    private $storeID = null;

    /**
     * This enumeration value indicates whether or not the order has been picked up from the store indicated by the <b>StoreID</b> value. This field is only applicable to 'In-Store Pickup' and 'Click and Collect' orders.
     *
     * @var string $shippingTrackingEvent
     */
    private $shippingTrackingEvent = null;

    /**
     * The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> timestamps indicate the delivery window for which the buyer can expect to receive the order. The <b>ScheduledDeliveryTimeMin</b> value indicates the earliest time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields will start being returned once the seller marks the order as shipped/provides tracking information. Until then, the <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are returned instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @var \DateTime $scheduledDeliveryTimeMin
     */
    private $scheduledDeliveryTimeMin = null;

    /**
     * The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> timestamps indicate the delivery window for which the buyer can expect to receive the order. The <b>ScheduledDeliveryTimeMax</b> value indicates the latest time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields will start being returned once the seller marks the order as shipped/provides tracking information. Until then, the <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are returned instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @var \DateTime $scheduledDeliveryTimeMax
     */
    private $scheduledDeliveryTimeMax = null;

    /**
     * This timestamp indicates when the order was actually delivered to the buyer. This field is only returned after the order has been delivered to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer (or marked as shipped), the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @var \DateTime $actualDeliveryTime
     */
    private $actualDeliveryTime = null;

    /**
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the window during which the buyer can expect delivery. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are only estimates made by eBay, and their accuracy will depend on the seller meeting the handling time deadline. Once the seller ships the order, and marks it as shipped/provides tracking information, the more accurate delivery dates can be found in the the <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields.
     *
     * @var \DateTime $estimatedDeliveryTimeMin
     */
    private $estimatedDeliveryTimeMin = null;

    /**
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the window during which the buyer can expect delivery. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are only estimates made by eBay, and their accuracy will depend on the seller meeting the handling time deadline. Once the seller ships the order, and marks it as shipped/provides tracking information, the more accurate delivery dates can be found in the the <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields.
     *
     * @var \DateTime $estimatedDeliveryTimeMax
     */
    private $estimatedDeliveryTimeMax = null;

    /**
     * This timestamp indicates the latest date/time that the seller should ship the package to ensure that the package arrives to the buyer within the estimated delivery window. This date/time is calculated by adding the handling time (in days) to the purchase time.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @var \DateTime $handleByTime
     */
    private $handleByTime = null;

    /**
     * The <b>MinNativeEstimatedDeliveryTime</b> and <b>MaxNativeEstimatedDeliveryTime</b> timestamps indicate the window during which the buyer can expect delivery based on the seller's handling time and selected shipping service. The <b>MinNativeEstimatedDeliveryTime</b> value indicates the earliest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @var \DateTime $minNativeEstimatedDeliveryTime
     */
    private $minNativeEstimatedDeliveryTime = null;

    /**
     * The <b>MinNativeEstimatedDeliveryTime</b> and <b>MaxNativeEstimatedDeliveryTime</b> timestamps indicate the window during which the buyer can expect delivery based on the seller's handling time and selected shipping service. The <b>MaxNativeEstimatedDeliveryTime</b> value indicates the latest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @var \DateTime $maxNativeEstimatedDeliveryTime
     */
    private $maxNativeEstimatedDeliveryTime = null;

    /**
     * Gets as storeID
     *
     * The unique identifier of the store from where the order will be delivered. This field is only applicable to 'In-Store Pickup' and 'Click and Collect' orders.
     *
     * @return string
     */
    public function getStoreID()
    {
        return $this->storeID;
    }

    /**
     * Sets a new storeID
     *
     * The unique identifier of the store from where the order will be delivered. This field is only applicable to 'In-Store Pickup' and 'Click and Collect' orders.
     *
     * @param string $storeID
     * @return self
     */
    public function setStoreID($storeID)
    {
        $this->storeID = $storeID;
        return $this;
    }

    /**
     * Gets as shippingTrackingEvent
     *
     * This enumeration value indicates whether or not the order has been picked up from the store indicated by the <b>StoreID</b> value. This field is only applicable to 'In-Store Pickup' and 'Click and Collect' orders.
     *
     * @return string
     */
    public function getShippingTrackingEvent()
    {
        return $this->shippingTrackingEvent;
    }

    /**
     * Sets a new shippingTrackingEvent
     *
     * This enumeration value indicates whether or not the order has been picked up from the store indicated by the <b>StoreID</b> value. This field is only applicable to 'In-Store Pickup' and 'Click and Collect' orders.
     *
     * @param string $shippingTrackingEvent
     * @return self
     */
    public function setShippingTrackingEvent($shippingTrackingEvent)
    {
        $this->shippingTrackingEvent = $shippingTrackingEvent;
        return $this;
    }

    /**
     * Gets as scheduledDeliveryTimeMin
     *
     * The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> timestamps indicate the delivery window for which the buyer can expect to receive the order. The <b>ScheduledDeliveryTimeMin</b> value indicates the earliest time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields will start being returned once the seller marks the order as shipped/provides tracking information. Until then, the <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are returned instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @return \DateTime
     */
    public function getScheduledDeliveryTimeMin()
    {
        return $this->scheduledDeliveryTimeMin;
    }

    /**
     * Sets a new scheduledDeliveryTimeMin
     *
     * The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> timestamps indicate the delivery window for which the buyer can expect to receive the order. The <b>ScheduledDeliveryTimeMin</b> value indicates the earliest time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields will start being returned once the seller marks the order as shipped/provides tracking information. Until then, the <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are returned instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @param \DateTime $scheduledDeliveryTimeMin
     * @return self
     */
    public function setScheduledDeliveryTimeMin(\DateTime $scheduledDeliveryTimeMin)
    {
        $this->scheduledDeliveryTimeMin = $scheduledDeliveryTimeMin;
        return $this;
    }

    /**
     * Gets as scheduledDeliveryTimeMax
     *
     * The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> timestamps indicate the delivery window for which the buyer can expect to receive the order. The <b>ScheduledDeliveryTimeMax</b> value indicates the latest time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields will start being returned once the seller marks the order as shipped/provides tracking information. Until then, the <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are returned instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @return \DateTime
     */
    public function getScheduledDeliveryTimeMax()
    {
        return $this->scheduledDeliveryTimeMax;
    }

    /**
     * Sets a new scheduledDeliveryTimeMax
     *
     * The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> timestamps indicate the delivery window for which the buyer can expect to receive the order. The <b>ScheduledDeliveryTimeMax</b> value indicates the latest time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields will start being returned once the seller marks the order as shipped/provides tracking information. Until then, the <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are returned instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @param \DateTime $scheduledDeliveryTimeMax
     * @return self
     */
    public function setScheduledDeliveryTimeMax(\DateTime $scheduledDeliveryTimeMax)
    {
        $this->scheduledDeliveryTimeMax = $scheduledDeliveryTimeMax;
        return $this;
    }

    /**
     * Gets as actualDeliveryTime
     *
     * This timestamp indicates when the order was actually delivered to the buyer. This field is only returned after the order has been delivered to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer (or marked as shipped), the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @return \DateTime
     */
    public function getActualDeliveryTime()
    {
        return $this->actualDeliveryTime;
    }

    /**
     * Sets a new actualDeliveryTime
     *
     * This timestamp indicates when the order was actually delivered to the buyer. This field is only returned after the order has been delivered to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer (or marked as shipped), the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @param \DateTime $actualDeliveryTime
     * @return self
     */
    public function setActualDeliveryTime(\DateTime $actualDeliveryTime)
    {
        $this->actualDeliveryTime = $actualDeliveryTime;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryTimeMin
     *
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the window during which the buyer can expect delivery. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are only estimates made by eBay, and their accuracy will depend on the seller meeting the handling time deadline. Once the seller ships the order, and marks it as shipped/provides tracking information, the more accurate delivery dates can be found in the the <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields.
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
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the window during which the buyer can expect delivery. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are only estimates made by eBay, and their accuracy will depend on the seller meeting the handling time deadline. Once the seller ships the order, and marks it as shipped/provides tracking information, the more accurate delivery dates can be found in the the <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields.
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
     * Gets as estimatedDeliveryTimeMax
     *
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the window during which the buyer can expect delivery. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are only estimates made by eBay, and their accuracy will depend on the seller meeting the handling time deadline. Once the seller ships the order, and marks it as shipped/provides tracking information, the more accurate delivery dates can be found in the the <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields.
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
     * The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the window during which the buyer can expect delivery. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> dates are only estimates made by eBay, and their accuracy will depend on the seller meeting the handling time deadline. Once the seller ships the order, and marks it as shipped/provides tracking information, the more accurate delivery dates can be found in the the <b>ScheduledDeliveryTimeMin</b> and <b>ScheduledDeliveryTimeMax</b> fields.
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
     * Gets as handleByTime
     *
     * This timestamp indicates the latest date/time that the seller should ship the package to ensure that the package arrives to the buyer within the estimated delivery window. This date/time is calculated by adding the handling time (in days) to the purchase time.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @return \DateTime
     */
    public function getHandleByTime()
    {
        return $this->handleByTime;
    }

    /**
     * Sets a new handleByTime
     *
     * This timestamp indicates the latest date/time that the seller should ship the package to ensure that the package arrives to the buyer within the estimated delivery window. This date/time is calculated by adding the handling time (in days) to the purchase time.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @param \DateTime $handleByTime
     * @return self
     */
    public function setHandleByTime(\DateTime $handleByTime)
    {
        $this->handleByTime = $handleByTime;
        return $this;
    }

    /**
     * Gets as minNativeEstimatedDeliveryTime
     *
     * The <b>MinNativeEstimatedDeliveryTime</b> and <b>MaxNativeEstimatedDeliveryTime</b> timestamps indicate the window during which the buyer can expect delivery based on the seller's handling time and selected shipping service. The <b>MinNativeEstimatedDeliveryTime</b> value indicates the earliest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @return \DateTime
     */
    public function getMinNativeEstimatedDeliveryTime()
    {
        return $this->minNativeEstimatedDeliveryTime;
    }

    /**
     * Sets a new minNativeEstimatedDeliveryTime
     *
     * The <b>MinNativeEstimatedDeliveryTime</b> and <b>MaxNativeEstimatedDeliveryTime</b> timestamps indicate the window during which the buyer can expect delivery based on the seller's handling time and selected shipping service. The <b>MinNativeEstimatedDeliveryTime</b> value indicates the earliest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @param \DateTime $minNativeEstimatedDeliveryTime
     * @return self
     */
    public function setMinNativeEstimatedDeliveryTime(\DateTime $minNativeEstimatedDeliveryTime)
    {
        $this->minNativeEstimatedDeliveryTime = $minNativeEstimatedDeliveryTime;
        return $this;
    }

    /**
     * Gets as maxNativeEstimatedDeliveryTime
     *
     * The <b>MinNativeEstimatedDeliveryTime</b> and <b>MaxNativeEstimatedDeliveryTime</b> timestamps indicate the window during which the buyer can expect delivery based on the seller's handling time and selected shipping service. The <b>MaxNativeEstimatedDeliveryTime</b> value indicates the latest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @return \DateTime
     */
    public function getMaxNativeEstimatedDeliveryTime()
    {
        return $this->maxNativeEstimatedDeliveryTime;
    }

    /**
     * Sets a new maxNativeEstimatedDeliveryTime
     *
     * The <b>MinNativeEstimatedDeliveryTime</b> and <b>MaxNativeEstimatedDeliveryTime</b> timestamps indicate the window during which the buyer can expect delivery based on the seller's handling time and selected shipping service. The <b>MaxNativeEstimatedDeliveryTime</b> value indicates the latest date and time that the buyer can expect to receive the order.
     *  <br><br>
     *  This field is applicable for domestic shipping services, and for Click and Collect orders in the UK and Australia.
     *
     * @param \DateTime $maxNativeEstimatedDeliveryTime
     * @return self
     */
    public function setMaxNativeEstimatedDeliveryTime(\DateTime $maxNativeEstimatedDeliveryTime)
    {
        $this->maxNativeEstimatedDeliveryTime = $maxNativeEstimatedDeliveryTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStoreID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreID", $value);
        }
        $value = $this->getShippingTrackingEvent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTrackingEvent", $value);
        }
        $value = $this->getScheduledDeliveryTimeMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ScheduledDeliveryTimeMin", $value);
        }
        $value = $this->getScheduledDeliveryTimeMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ScheduledDeliveryTimeMax", $value);
        }
        $value = $this->getActualDeliveryTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActualDeliveryTime", $value);
        }
        $value = $this->getEstimatedDeliveryTimeMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryTimeMin", $value);
        }
        $value = $this->getEstimatedDeliveryTimeMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryTimeMax", $value);
        }
        $value = $this->getHandleByTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HandleByTime", $value);
        }
        $value = $this->getMinNativeEstimatedDeliveryTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinNativeEstimatedDeliveryTime", $value);
        }
        $value = $this->getMaxNativeEstimatedDeliveryTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxNativeEstimatedDeliveryTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreID');
        if (null !== $value) {
            $this->setStoreID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTrackingEvent');
        if (null !== $value) {
            $this->setShippingTrackingEvent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduledDeliveryTimeMin');
        if (null !== $value) {
            $this->setScheduledDeliveryTimeMin(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduledDeliveryTimeMax');
        if (null !== $value) {
            $this->setScheduledDeliveryTimeMax(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActualDeliveryTime');
        if (null !== $value) {
            $this->setActualDeliveryTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryTimeMin');
        if (null !== $value) {
            $this->setEstimatedDeliveryTimeMin(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryTimeMax');
        if (null !== $value) {
            $this->setEstimatedDeliveryTimeMax(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HandleByTime');
        if (null !== $value) {
            $this->setHandleByTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinNativeEstimatedDeliveryTime');
        if (null !== $value) {
            $this->setMinNativeEstimatedDeliveryTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxNativeEstimatedDeliveryTime');
        if (null !== $value) {
            $this->setMaxNativeEstimatedDeliveryTime(new \DateTime($value));
        }
    }
}
