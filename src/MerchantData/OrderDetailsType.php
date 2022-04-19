<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderDetailsType
 *
 * Contains information about the sold item, such as: order id, buyer information,
 *  shipping information, order creation time, payment cleared time, tax amount,
 *  insurance cost, and total cost.
 * XSD Type: OrderDetailsType
 */
class OrderDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique identifier for a single or multiple line item order. When a buyer
     *  purchases multiple items from the same listing, each item purchased will have an Order Line
     *  Item ID and all items in that purchase will have the same Order ID.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * The date and time that the payment was acknowledged.
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @var \DateTime $paymentClearedTime
     */
    private $paymentClearedTime = null;

    /**
     * The eBay site that the buyer used when paying for the item(s).
     *
     * @var int $checkoutSiteID
     */
    private $checkoutSiteID = null;

    /**
     * The date and time that the order was created.
     *
     * @var \DateTime $orderCreationTime
     */
    private $orderCreationTime = null;

    /**
     * Amount seller charged to buyer, not amount of fees that seller owes eBay.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $orderSalePrice
     */
    private $orderSalePrice = null;

    /**
     * Calculated tax fee based on the sale price and the sales tax at the seller's location.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $taxAmount
     */
    private $taxAmount = null;

    /**
     * Cost of insuring the delivery of this order with the courier.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost
     */
    private $insuranceCost = null;

    /**
     * Calculated shipping cost based on item weight, buyer's postal code, and shipping service.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $shippingCost
     */
    private $shippingCost = null;

    /**
     * The total cost of the order, which includes the sale price of all order line items, shipping costs, and taxes.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $orderTotalCost
     */
    private $orderTotalCost = null;

    /**
     * This boolean field is returned as <code>true</code> if the <b>OrderTotalCost</b> value includes eBay 'Collect and Remit' taxes. eBay 'Collect and Remit' taxes include US state-mandated sales tax and 'Goods and Services' taxes that are applicable to orders from Australian and New Zealand sellers.
     *  <br><br>
     *  More and more US states are mandating the collection of sales tax for Internet sales. For a full list of affected states and effective dates, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">eBay sales tax collection</a> help page.
     *
     * @var bool $totalIncludeseBayCollectedTax
     */
    private $totalIncludeseBayCollectedTax = null;

    /**
     * Contains the data for each line item in the order.
     *
     * @var \Nogrod\eBaySDK\MerchantData\OrderLineItemType[] $orderItemDetails
     */
    private $orderItemDetails = null;

    /**
     * Gets as orderID
     *
     * A unique identifier for a single or multiple line item order. When a buyer
     *  purchases multiple items from the same listing, each item purchased will have an Order Line
     *  Item ID and all items in that purchase will have the same Order ID.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
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
     * A unique identifier for a single or multiple line item order. When a buyer
     *  purchases multiple items from the same listing, each item purchased will have an Order Line
     *  Item ID and all items in that purchase will have the same Order ID.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
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
     * Gets as paymentClearedTime
     *
     * The date and time that the payment was acknowledged.
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @return \DateTime
     */
    public function getPaymentClearedTime()
    {
        return $this->paymentClearedTime;
    }

    /**
     * Sets a new paymentClearedTime
     *
     * The date and time that the payment was acknowledged.
     *  Only returned if payment has been marked as sent (checkout is complete). If a buyer has completed checkout using PayPal, the Payment is automatically marked
     *  as sent. Otherwise, the buyer must mark it manually on the MyeBay page.
     *
     * @param \DateTime $paymentClearedTime
     * @return self
     */
    public function setPaymentClearedTime(\DateTime $paymentClearedTime)
    {
        $this->paymentClearedTime = $paymentClearedTime;
        return $this;
    }

    /**
     * Gets as checkoutSiteID
     *
     * The eBay site that the buyer used when paying for the item(s).
     *
     * @return int
     */
    public function getCheckoutSiteID()
    {
        return $this->checkoutSiteID;
    }

    /**
     * Sets a new checkoutSiteID
     *
     * The eBay site that the buyer used when paying for the item(s).
     *
     * @param int $checkoutSiteID
     * @return self
     */
    public function setCheckoutSiteID($checkoutSiteID)
    {
        $this->checkoutSiteID = $checkoutSiteID;
        return $this;
    }

    /**
     * Gets as orderCreationTime
     *
     * The date and time that the order was created.
     *
     * @return \DateTime
     */
    public function getOrderCreationTime()
    {
        return $this->orderCreationTime;
    }

    /**
     * Sets a new orderCreationTime
     *
     * The date and time that the order was created.
     *
     * @param \DateTime $orderCreationTime
     * @return self
     */
    public function setOrderCreationTime(\DateTime $orderCreationTime)
    {
        $this->orderCreationTime = $orderCreationTime;
        return $this;
    }

    /**
     * Gets as orderSalePrice
     *
     * Amount seller charged to buyer, not amount of fees that seller owes eBay.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getOrderSalePrice()
    {
        return $this->orderSalePrice;
    }

    /**
     * Sets a new orderSalePrice
     *
     * Amount seller charged to buyer, not amount of fees that seller owes eBay.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $orderSalePrice
     * @return self
     */
    public function setOrderSalePrice(\Nogrod\eBaySDK\MerchantData\AmountType $orderSalePrice)
    {
        $this->orderSalePrice = $orderSalePrice;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * Calculated tax fee based on the sale price and the sales tax at the seller's location.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * Calculated tax fee based on the sale price and the sales tax at the seller's location.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $taxAmount
     * @return self
     */
    public function setTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as insuranceCost
     *
     * Cost of insuring the delivery of this order with the courier.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getInsuranceCost()
    {
        return $this->insuranceCost;
    }

    /**
     * Sets a new insuranceCost
     *
     * Cost of insuring the delivery of this order with the courier.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost
     * @return self
     */
    public function setInsuranceCost(\Nogrod\eBaySDK\MerchantData\AmountType $insuranceCost)
    {
        $this->insuranceCost = $insuranceCost;
        return $this;
    }

    /**
     * Gets as shippingCost
     *
     * Calculated shipping cost based on item weight, buyer's postal code, and shipping service.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Sets a new shippingCost
     *
     * Calculated shipping cost based on item weight, buyer's postal code, and shipping service.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $shippingCost
     * @return self
     */
    public function setShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $shippingCost)
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Gets as orderTotalCost
     *
     * The total cost of the order, which includes the sale price of all order line items, shipping costs, and taxes.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getOrderTotalCost()
    {
        return $this->orderTotalCost;
    }

    /**
     * Sets a new orderTotalCost
     *
     * The total cost of the order, which includes the sale price of all order line items, shipping costs, and taxes.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $orderTotalCost
     * @return self
     */
    public function setOrderTotalCost(\Nogrod\eBaySDK\MerchantData\AmountType $orderTotalCost)
    {
        $this->orderTotalCost = $orderTotalCost;
        return $this;
    }

    /**
     * Gets as totalIncludeseBayCollectedTax
     *
     * This boolean field is returned as <code>true</code> if the <b>OrderTotalCost</b> value includes eBay 'Collect and Remit' taxes. eBay 'Collect and Remit' taxes include US state-mandated sales tax and 'Goods and Services' taxes that are applicable to orders from Australian and New Zealand sellers.
     *  <br><br>
     *  More and more US states are mandating the collection of sales tax for Internet sales. For a full list of affected states and effective dates, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">eBay sales tax collection</a> help page.
     *
     * @return bool
     */
    public function getTotalIncludeseBayCollectedTax()
    {
        return $this->totalIncludeseBayCollectedTax;
    }

    /**
     * Sets a new totalIncludeseBayCollectedTax
     *
     * This boolean field is returned as <code>true</code> if the <b>OrderTotalCost</b> value includes eBay 'Collect and Remit' taxes. eBay 'Collect and Remit' taxes include US state-mandated sales tax and 'Goods and Services' taxes that are applicable to orders from Australian and New Zealand sellers.
     *  <br><br>
     *  More and more US states are mandating the collection of sales tax for Internet sales. For a full list of affected states and effective dates, see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">eBay sales tax collection</a> help page.
     *
     * @param bool $totalIncludeseBayCollectedTax
     * @return self
     */
    public function setTotalIncludeseBayCollectedTax($totalIncludeseBayCollectedTax)
    {
        $this->totalIncludeseBayCollectedTax = $totalIncludeseBayCollectedTax;
        return $this;
    }

    /**
     * Adds as orderLineItem
     *
     * Contains the data for each line item in the order.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderLineItemType $orderLineItem
     */
    public function addToOrderItemDetails(\Nogrod\eBaySDK\MerchantData\OrderLineItemType $orderLineItem)
    {
        $this->orderItemDetails[] = $orderLineItem;
        return $this;
    }

    /**
     * isset orderItemDetails
     *
     * Contains the data for each line item in the order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderItemDetails($index)
    {
        return isset($this->orderItemDetails[$index]);
    }

    /**
     * unset orderItemDetails
     *
     * Contains the data for each line item in the order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderItemDetails($index)
    {
        unset($this->orderItemDetails[$index]);
    }

    /**
     * Gets as orderItemDetails
     *
     * Contains the data for each line item in the order.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderLineItemType[]
     */
    public function getOrderItemDetails()
    {
        return $this->orderItemDetails;
    }

    /**
     * Sets a new orderItemDetails
     *
     * Contains the data for each line item in the order.
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderLineItemType[] $orderItemDetails
     * @return self
     */
    public function setOrderItemDetails(array $orderItemDetails)
    {
        $this->orderItemDetails = $orderItemDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getPaymentClearedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentClearedTime", $value);
        }
        $value = $this->getCheckoutSiteID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutSiteID", $value);
        }
        $value = $this->getOrderCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderCreationTime", $value);
        }
        $value = $this->getOrderSalePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderSalePrice", $value);
        }
        $value = $this->getTaxAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxAmount", $value);
        }
        $value = $this->getInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceCost", $value);
        }
        $value = $this->getShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCost", $value);
        }
        $value = $this->getOrderTotalCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderTotalCost", $value);
        }
        $value = $this->getTotalIncludeseBayCollectedTax();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalIncludeseBayCollectedTax", $value);
        }
        $value = $this->getOrderItemDetails();
        if (null !== $value && !empty($this->getOrderItemDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderItemDetails", array_map(function ($v) {
                return ["OrderLineItem" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentClearedTime');
        if (null !== $value) {
            $this->setPaymentClearedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutSiteID');
        if (null !== $value) {
            $this->setCheckoutSiteID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderCreationTime');
        if (null !== $value) {
            $this->setOrderCreationTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderSalePrice');
        if (null !== $value) {
            $this->setOrderSalePrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxAmount');
        if (null !== $value) {
            $this->setTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceCost');
        if (null !== $value) {
            $this->setInsuranceCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCost');
        if (null !== $value) {
            $this->setShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderTotalCost');
        if (null !== $value) {
            $this->setOrderTotalCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalIncludeseBayCollectedTax');
        if (null !== $value) {
            $this->setTotalIncludeseBayCollectedTax($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderItemDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderItemDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderLineItemType::fromKeyValue($v);
            }, $value));
        }
    }
}
