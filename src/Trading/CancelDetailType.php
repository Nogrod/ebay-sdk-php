<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CancelDetailType
 *
 * Type used by the <b>CancelDetail</b> container, which consists of details related to an eBay order that has been cancelled or is in the process of possibly being cancelled.
 * XSD Type: CancelDetailType
 */
class CancelDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This value indicates the reason why the order cancellation was initiated. This field is always returned with the <b>CancelDetail</b> container. Typical buyer-initiated cancellation reasons include <code>OrderPlacedByMistake</code>, <code>WontArriveInTime</code>, or <code>FoundCheaperPrice</code>. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as <code>BuyerCancelOrder</code>. If the seller is cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as <code>OutOfStock</code>. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. Other order cancellation reasons are specific to eBay Scheduled Delivery orders. eBay Scheduled Delivery is similar to the eBay Now service in the US (now retired), and is only available in the UK. See <a href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Currently, the <b>CancelReason</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from <b>OrderType</b> in the future.
     *  </span>
     *
     * @var string $cancelReason
     */
    private $cancelReason = null;

    /**
     * The detailed reason of why the order cancellation was initiated. This field is only returned if it is available for an order that has been cancelled, or if an order is going through the cancellation process.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Currently, the <b>CancelReasonDetails</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from <b>OrderType</b> in the future.
     *  </span>
     *
     * @var string $cancelReasonDetails
     */
    private $cancelReasonDetails = null;

    /**
     * This value indicates which party initiated the cancellation of the eBay order. It will usually be <code>Buyer</code> or <code>Seller</code>, but it can also be <code>CS</code> (eBay Customer Support). See <a href="types/CancelInitiatorCodeType.html">CancelInitiatorCodeType</a> for the complete list of enumeration values that can be returned in this field. This field is always returned with the <b>CancelDetail</b> container.
     *
     * @var string $cancelIntiator
     */
    private $cancelIntiator = null;

    /**
     * This timestamp indicates when the cancellation of the eBay order was initiated. This field is always returned with the <b>CancelDetail</b> container.
     *
     * @var \DateTime $cancelIntiationDate
     */
    private $cancelIntiationDate = null;

    /**
     * Timestamp indicating when the cancellation process of an eBay order has been completed, which will be indicated if the <b>Order.CancelStatus</b> field has a value of <code>CancelComplete</code>. This field will not be returned until the cancellation process is completed.
     *
     * @var \DateTime $cancelCompleteDate
     */
    private $cancelCompleteDate = null;

    /**
     * Gets as cancelReason
     *
     * This value indicates the reason why the order cancellation was initiated. This field is always returned with the <b>CancelDetail</b> container. Typical buyer-initiated cancellation reasons include <code>OrderPlacedByMistake</code>, <code>WontArriveInTime</code>, or <code>FoundCheaperPrice</code>. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as <code>BuyerCancelOrder</code>. If the seller is cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as <code>OutOfStock</code>. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. Other order cancellation reasons are specific to eBay Scheduled Delivery orders. eBay Scheduled Delivery is similar to the eBay Now service in the US (now retired), and is only available in the UK. See <a href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Currently, the <b>CancelReason</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from <b>OrderType</b> in the future.
     *  </span>
     *
     * @return string
     */
    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    /**
     * Sets a new cancelReason
     *
     * This value indicates the reason why the order cancellation was initiated. This field is always returned with the <b>CancelDetail</b> container. Typical buyer-initiated cancellation reasons include <code>OrderPlacedByMistake</code>, <code>WontArriveInTime</code>, or <code>FoundCheaperPrice</code>. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as <code>BuyerCancelOrder</code>. If the seller is cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as <code>OutOfStock</code>. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. Other order cancellation reasons are specific to eBay Scheduled Delivery orders. eBay Scheduled Delivery is similar to the eBay Now service in the US (now retired), and is only available in the UK. See <a href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Currently, the <b>CancelReason</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from <b>OrderType</b> in the future.
     *  </span>
     *
     * @param string $cancelReason
     * @return self
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason = $cancelReason;
        return $this;
    }

    /**
     * Gets as cancelReasonDetails
     *
     * The detailed reason of why the order cancellation was initiated. This field is only returned if it is available for an order that has been cancelled, or if an order is going through the cancellation process.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Currently, the <b>CancelReasonDetails</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from <b>OrderType</b> in the future.
     *  </span>
     *
     * @return string
     */
    public function getCancelReasonDetails()
    {
        return $this->cancelReasonDetails;
    }

    /**
     * Sets a new cancelReasonDetails
     *
     * The detailed reason of why the order cancellation was initiated. This field is only returned if it is available for an order that has been cancelled, or if an order is going through the cancellation process.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Currently, the <b>CancelReasonDetails</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from <b>OrderType</b> in the future.
     *  </span>
     *
     * @param string $cancelReasonDetails
     * @return self
     */
    public function setCancelReasonDetails($cancelReasonDetails)
    {
        $this->cancelReasonDetails = $cancelReasonDetails;
        return $this;
    }

    /**
     * Gets as cancelIntiator
     *
     * This value indicates which party initiated the cancellation of the eBay order. It will usually be <code>Buyer</code> or <code>Seller</code>, but it can also be <code>CS</code> (eBay Customer Support). See <a href="types/CancelInitiatorCodeType.html">CancelInitiatorCodeType</a> for the complete list of enumeration values that can be returned in this field. This field is always returned with the <b>CancelDetail</b> container.
     *
     * @return string
     */
    public function getCancelIntiator()
    {
        return $this->cancelIntiator;
    }

    /**
     * Sets a new cancelIntiator
     *
     * This value indicates which party initiated the cancellation of the eBay order. It will usually be <code>Buyer</code> or <code>Seller</code>, but it can also be <code>CS</code> (eBay Customer Support). See <a href="types/CancelInitiatorCodeType.html">CancelInitiatorCodeType</a> for the complete list of enumeration values that can be returned in this field. This field is always returned with the <b>CancelDetail</b> container.
     *
     * @param string $cancelIntiator
     * @return self
     */
    public function setCancelIntiator($cancelIntiator)
    {
        $this->cancelIntiator = $cancelIntiator;
        return $this;
    }

    /**
     * Gets as cancelIntiationDate
     *
     * This timestamp indicates when the cancellation of the eBay order was initiated. This field is always returned with the <b>CancelDetail</b> container.
     *
     * @return \DateTime
     */
    public function getCancelIntiationDate()
    {
        return $this->cancelIntiationDate;
    }

    /**
     * Sets a new cancelIntiationDate
     *
     * This timestamp indicates when the cancellation of the eBay order was initiated. This field is always returned with the <b>CancelDetail</b> container.
     *
     * @param \DateTime $cancelIntiationDate
     * @return self
     */
    public function setCancelIntiationDate(\DateTime $cancelIntiationDate)
    {
        $this->cancelIntiationDate = $cancelIntiationDate;
        return $this;
    }

    /**
     * Gets as cancelCompleteDate
     *
     * Timestamp indicating when the cancellation process of an eBay order has been completed, which will be indicated if the <b>Order.CancelStatus</b> field has a value of <code>CancelComplete</code>. This field will not be returned until the cancellation process is completed.
     *
     * @return \DateTime
     */
    public function getCancelCompleteDate()
    {
        return $this->cancelCompleteDate;
    }

    /**
     * Sets a new cancelCompleteDate
     *
     * Timestamp indicating when the cancellation process of an eBay order has been completed, which will be indicated if the <b>Order.CancelStatus</b> field has a value of <code>CancelComplete</code>. This field will not be returned until the cancellation process is completed.
     *
     * @param \DateTime $cancelCompleteDate
     * @return self
     */
    public function setCancelCompleteDate(\DateTime $cancelCompleteDate)
    {
        $this->cancelCompleteDate = $cancelCompleteDate;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCancelReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CancelReason", $value);
        }
        $value = $this->getCancelReasonDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CancelReasonDetails", $value);
        }
        $value = $this->getCancelIntiator();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CancelIntiator", $value);
        }
        $value = $this->getCancelIntiationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CancelIntiationDate", $value);
        }
        $value = $this->getCancelCompleteDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CancelCompleteDate", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelReason');
        if (null !== $value) {
            $this->setCancelReason($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelReasonDetails');
        if (null !== $value) {
            $this->setCancelReasonDetails($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelIntiator');
        if (null !== $value) {
            $this->setCancelIntiator($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelIntiationDate');
        if (null !== $value) {
            $this->setCancelIntiationDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelCompleteDate');
        if (null !== $value) {
            $this->setCancelCompleteDate(new \DateTime($value));
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
