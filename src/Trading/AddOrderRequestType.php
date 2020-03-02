<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddOrderRequestType
 *
 * The <b>AddOrder</b> call can be used by a seller to combine two or more unpaid, single line item orders from the same buyer into one 'Combined Invoice' order with multiple line items. Once multiple line items are combined into one order, the buyer can make one single payment for multiple line item order. If possible and agreed to, the seller can then ship multiple line items in the same shipping package, saving on shipping costs, and possibly passing that savings down to the buyer through Combined Shipping Discount rules set up in My eBay.
 * XSD Type: AddOrderRequestType
 */
class AddOrderRequestType extends AbstractRequestType
{

    /**
     * The root container of the <b>AddOrder</b> request. In this call, the seller identifies two or more unpaid order line items from the same buyer through the <b>TransactionArray</b> container, specifies one or more accepted payment methods through the <b>PaymentMethods</b> field(s), and specifies available shipping services and other shipping details through the <b>ShippingDetails</b> container.
     *
     * @var \Nogrod\eBaySDK\Trading\OrderType $order
     */
    private $order = null;

    /**
     * Gets as order
     *
     * The root container of the <b>AddOrder</b> request. In this call, the seller identifies two or more unpaid order line items from the same buyer through the <b>TransactionArray</b> container, specifies one or more accepted payment methods through the <b>PaymentMethods</b> field(s), and specifies available shipping services and other shipping details through the <b>ShippingDetails</b> container.
     *
     * @return \Nogrod\eBaySDK\Trading\OrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * The root container of the <b>AddOrder</b> request. In this call, the seller identifies two or more unpaid order line items from the same buyer through the <b>TransactionArray</b> container, specifies one or more accepted payment methods through the <b>PaymentMethods</b> field(s), and specifies available shipping services and other shipping details through the <b>ShippingDetails</b> container.
     *
     * @param \Nogrod\eBaySDK\Trading\OrderType $order
     * @return self
     */
    public function setOrder(\Nogrod\eBaySDK\Trading\OrderType $order)
    {
        $this->order = $order;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Order", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Order');
        if (null !== $value) {
            $this->setOrder(\Nogrod\eBaySDK\Trading\OrderType::fromKeyValue($value));
        }
    }
}
