<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetShipmentTrackingInfoRequestType
 *
 * Specifies the shipment tracking information associated with one package of an
 *  order. If multiple packages are required for the order, this call must be made
 *  separately for each package.
 * XSD Type: SetShipmentTrackingInfoRequestType
 */
class SetShipmentTrackingInfoRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A unique identifier that identifies a single line item or multiple line item
     *  order. Either the <b>OrderID</b> or <b>OrderLineItemID</b> value must be
     *  passed in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>OrderReport</b>. When using a <b>SetShipmentTrackingInfo</b> call, either of these order IDs (paid or unpaid status) can be used to provide tracking information for a package in the order.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy from the seller. Either the <b>OrderLineItemID</b> or the <b>OrderID</b> value must be passed in the request.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * This container is used to provide the name of the shipping carrier, the package tracking number, and optionally, the timestamp of the shipment.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShipmentType $shipment
     */
    private $shipment = null;

    /**
     * This field is included and set to <code>true</code> to indicate that an order or order line item was shipped. If this element is missing, eBay assumes that the order or order line item was shipped.
     *
     * @var bool $isShipped
     */
    private $isShipped = null;

    /**
     * This field is included and set to <code>true</code> to indicate that the buyer has paid for the order.
     *
     * @var bool $isPaid
     */
    private $isPaid = null;

    /**
     * Gets as orderID
     *
     * A unique identifier that identifies a single line item or multiple line item
     *  order. Either the <b>OrderID</b> or <b>OrderLineItemID</b> value must be
     *  passed in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>OrderReport</b>. When using a <b>SetShipmentTrackingInfo</b> call, either of these order IDs (paid or unpaid status) can be used to provide tracking information for a package in the order.
     *  </span>
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
     * A unique identifier that identifies a single line item or multiple line item
     *  order. Either the <b>OrderID</b> or <b>OrderLineItemID</b> value must be
     *  passed in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>OrderReport</b>. When using a <b>SetShipmentTrackingInfo</b> call, either of these order IDs (paid or unpaid status) can be used to provide tracking information for a package in the order.
     *  </span>
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
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy from the seller. Either the <b>OrderLineItemID</b> or the <b>OrderID</b> value must be passed in the request.
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
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy from the seller. Either the <b>OrderLineItemID</b> or the <b>OrderID</b> value must be passed in the request.
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
     * Gets as shipment
     *
     * This container is used to provide the name of the shipping carrier, the package tracking number, and optionally, the timestamp of the shipment.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShipmentType
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * This container is used to provide the name of the shipping carrier, the package tracking number, and optionally, the timestamp of the shipment.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShipmentType $shipment
     * @return self
     */
    public function setShipment(\Nogrod\eBaySDK\MerchantData\ShipmentType $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Gets as isShipped
     *
     * This field is included and set to <code>true</code> to indicate that an order or order line item was shipped. If this element is missing, eBay assumes that the order or order line item was shipped.
     *
     * @return bool
     */
    public function getIsShipped()
    {
        return $this->isShipped;
    }

    /**
     * Sets a new isShipped
     *
     * This field is included and set to <code>true</code> to indicate that an order or order line item was shipped. If this element is missing, eBay assumes that the order or order line item was shipped.
     *
     * @param bool $isShipped
     * @return self
     */
    public function setIsShipped($isShipped)
    {
        $this->isShipped = $isShipped;
        return $this;
    }

    /**
     * Gets as isPaid
     *
     * This field is included and set to <code>true</code> to indicate that the buyer has paid for the order.
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

    /**
     * Sets a new isPaid
     *
     * This field is included and set to <code>true</code> to indicate that the buyer has paid for the order.
     *
     * @param bool $isPaid
     * @return self
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = $this->getShipment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Shipment", $value);
        }
        $value = $this->getIsShipped();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IsShipped", $value);
        }
        $value = $this->getIsPaid();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IsPaid", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Shipment');
        if (null !== $value) {
            $this->setShipment(\Nogrod\eBaySDK\MerchantData\ShipmentType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IsShipped');
        if (null !== $value) {
            $this->setIsShipped($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IsPaid');
        if (null !== $value) {
            $this->setIsPaid($value);
        }
    }
}
