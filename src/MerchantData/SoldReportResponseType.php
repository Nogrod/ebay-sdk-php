<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SoldReportResponseType
 *
 * <b>SoldReport</b> shows detailed information on all unacknowledged orders, and all unacknowledged line items in each order from the past 30 days. The unique identifier of each order is shown in the <b>Order.OrderID</b> response field, and unique identifier of each order line item is shown in a separate <b>Transaction.OrderLineItemID</b> response field. Sellers use the information in <b>SoldReport</b> to make inventory updates and start order fulfillment.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b> Once orders and order line items have been acknowledged with the <b>OrderAck</b> call, those orders and order line items will no longer appear in the <b>SoldReport</b> response. See
 *  <a href="http://developer.ebay.com/DevZone/large-merchant-services/Concepts/LMS_APIGuide.html#soldrpt"
 *  target="_blank">Acknowledging Sales</a> for more information.
 *  </span>
 * XSD Type: SoldReportResponseType
 */
class SoldReportResponseType extends AbstractResponseType
{

    /**
     * Contains information about the sold item, such as: order ID, order line item ID, buyer information, shipping information, order creation time, payment cleared time, tax amount, and total cost.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  In the Trading API, eBay is rolling out this change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. Since the <b>SoldReport</b> response will not be updated with the new format for <b>OrderID</b> values, it is suggested that Large Merchant Services users migrate to <b>OrderReport</b> instead, which has been enabled to return <b>OrderID</b> values in the new format.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\OrderDetailsType[] $orderDetails
     */
    private $orderDetails = [
        
    ];

    /**
     * Adds as orderDetails
     *
     * Contains information about the sold item, such as: order ID, order line item ID, buyer information, shipping information, order creation time, payment cleared time, tax amount, and total cost.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  In the Trading API, eBay is rolling out this change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. Since the <b>SoldReport</b> response will not be updated with the new format for <b>OrderID</b> values, it is suggested that Large Merchant Services users migrate to <b>OrderReport</b> instead, which has been enabled to return <b>OrderID</b> values in the new format.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderDetailsType $orderDetails
     */
    public function addToOrderDetails(\Nogrod\eBaySDK\MerchantData\OrderDetailsType $orderDetails)
    {
        $this->orderDetails[] = $orderDetails;
        return $this;
    }

    /**
     * isset orderDetails
     *
     * Contains information about the sold item, such as: order ID, order line item ID, buyer information, shipping information, order creation time, payment cleared time, tax amount, and total cost.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  In the Trading API, eBay is rolling out this change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. Since the <b>SoldReport</b> response will not be updated with the new format for <b>OrderID</b> values, it is suggested that Large Merchant Services users migrate to <b>OrderReport</b> instead, which has been enabled to return <b>OrderID</b> values in the new format.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderDetails($index)
    {
        return isset($this->orderDetails[$index]);
    }

    /**
     * unset orderDetails
     *
     * Contains information about the sold item, such as: order ID, order line item ID, buyer information, shipping information, order creation time, payment cleared time, tax amount, and total cost.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  In the Trading API, eBay is rolling out this change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. Since the <b>SoldReport</b> response will not be updated with the new format for <b>OrderID</b> values, it is suggested that Large Merchant Services users migrate to <b>OrderReport</b> instead, which has been enabled to return <b>OrderID</b> values in the new format.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderDetails($index)
    {
        unset($this->orderDetails[$index]);
    }

    /**
     * Gets as orderDetails
     *
     * Contains information about the sold item, such as: order ID, order line item ID, buyer information, shipping information, order creation time, payment cleared time, tax amount, and total cost.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  In the Trading API, eBay is rolling out this change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. Since the <b>SoldReport</b> response will not be updated with the new format for <b>OrderID</b> values, it is suggested that Large Merchant Services users migrate to <b>OrderReport</b> instead, which has been enabled to return <b>OrderID</b> values in the new format.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderDetailsType[]
     */
    public function getOrderDetails()
    {
        return $this->orderDetails;
    }

    /**
     * Sets a new orderDetails
     *
     * Contains information about the sold item, such as: order ID, order line item ID, buyer information, shipping information, order creation time, payment cleared time, tax amount, and total cost.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  In the Trading API, eBay is rolling out this change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. Since the <b>SoldReport</b> response will not be updated with the new format for <b>OrderID</b> values, it is suggested that Large Merchant Services users migrate to <b>OrderReport</b> instead, which has been enabled to return <b>OrderID</b> values in the new format.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderDetailsType[] $orderDetails
     * @return self
     */
    public function setOrderDetails(array $orderDetails)
    {
        $this->orderDetails = $orderDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrderDetails();
        if (null !== $value && !empty($this->getOrderDetails())) {
            $writer->write(array_map(function ($v) {
                return ["OrderDetails" => $v];
            }, $value));
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderDetailsType::fromKeyValue($v);
            }, $value));
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
