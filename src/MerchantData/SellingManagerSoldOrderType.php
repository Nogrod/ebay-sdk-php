<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerSoldOrderType
 *
 * Contains information about a sale record.
 * XSD Type: SellingManagerSoldOrderType
 */
class SellingManagerSoldOrderType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Information about one line item in the order.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerSoldTransactionType[] $sellingManagerSoldTransaction
     */
    private $sellingManagerSoldTransaction = [

    ];

    /**
     * Shipping address of a buyer.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress
     */
    private $shippingAddress = null;

    /**
     * The shipping-related details for an order,
     *  including flat and calculated shipping costs and shipping insurance costs.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShippingDetailsType $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * The cost of cash-on-delivery.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $cashOnDeliveryCost
     */
    private $cashOnDeliveryCost = null;

    /**
     * Total cost in the order.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalAmount
     */
    private $totalAmount = null;

    /**
     * Total item quantity.
     *
     * @var int $totalQuantity
     */
    private $totalQuantity = null;

    /**
     * A SMPro seller can record the cost of the item, as calculated by the seller, in
     *  this field.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $itemCost
     */
    private $itemCost = null;

    /**
     * Rate of applicable value added tax.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VATRateType[] $vATRate
     */
    private $vATRate = [

    ];

    /**
     * Total cost of shipping insurance.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $netInsuranceFee
     */
    private $netInsuranceFee = null;

    /**
     * Amount of applicable value added tax insurance fee.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $vATInsuranceFee
     */
    private $vATInsuranceFee = null;

    /**
     * VAT shipping fee.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $vATShippingFee
     */
    private $vATShippingFee = null;

    /**
     * Total shipping fee.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $netShippingFee
     */
    private $netShippingFee = null;

    /**
     * The seller records in this field a net total amount obtained according to the
     *  seller's method of calculation. This field is returned for VAT transactions
     *  only.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $netTotalAmount
     */
    private $netTotalAmount = null;

    /**
     * VAT total amount.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $vATTotalAmount
     */
    private $vATTotalAmount = null;

    /**
     * The shipping cost paid by the seller to ship the order line item.
     *  <br/><br/>
     *  For multiple line item orders, it is possible that one order line item will have the shipping cost and the value for the other order line item will be 0.00.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This is different from the field of the same name returned by GetOrders and its related calls, which contains the shipping cost paid by the buyer.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $actualShippingCost
     */
    private $actualShippingCost = null;

    /**
     * Discount, or charge, to which the buyer and seller have agreed.
     *  If this value is a positive value,
     *  the amount is the extra money that the buyer pays the seller.
     *  If this value is a negative value,
     *  the amount is a discount the seller gives the buyer.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $adjustmentAmount
     */
    private $adjustmentAmount = null;

    /**
     * Notes from the seller to the buyer.
     *
     * @var string $notesToBuyer
     */
    private $notesToBuyer = null;

    /**
     * Notes from the buyer to the seller.
     *
     * @var string $notesFromBuyer
     */
    private $notesFromBuyer = null;

    /**
     * Notes to self from seller.
     *
     * @var string $notesToSeller
     */
    private $notesToSeller = null;

    /**
     * Status of the order regarding payment, shipping, feedback, and other
     *  communications.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerOrderStatusType $orderStatus
     */
    private $orderStatus = null;

    /**
     * The status of an unpaid item regarding final value, state of communications
     *  between buyer and seller, and the filing of an Unpaid Item.
     *
     * @var string $unpaidItemStatus
     */
    private $unpaidItemStatus = null;

    /**
     * Amount of the accepted offer for the listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $salePrice
     */
    private $salePrice = null;

    /**
     * Number of emails sent regarding this order.
     *
     * @var int $emailsSent
     */
    private $emailsSent = null;

    /**
     * Number of days since the sale.
     *
     * @var int $daysSinceSale
     */
    private $daysSinceSale = null;

    /**
     * The user ID of the buyer.
     *
     * @var string $buyerID
     */
    private $buyerID = null;

    /**
     * The email of the buyer.
     *
     * @var string $buyerEmail
     */
    private $buyerEmail = null;

    /**
     * The sale record ID. Applicable to Selling Manager users.
     *  When an item is sold, Selling Manager generates a sale record.
     *  A sale record contains buyer information, shipping, and other information.
     *  A sale record is displayed in the Sold view in Selling Manager.
     *  Each sale record has a sale record ID. In the following calls,
     *  the value for the sale record ID is in the SellingManagerSalesRecordNumber field:
     *  GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions.
     *  In the Selling Manager calls, the value for the sale record ID is in the
     *  SaleRecordID field. The sale record ID can be for single or multiple line item orders.
     *
     * @var int $saleRecordID
     */
    private $saleRecordID = null;

    /**
     * The sale date.
     *
     * @var \DateTime $creationTime
     */
    private $creationTime = null;

    /**
     * This field is no longer used.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $refundAmount
     */
    private $refundAmount = null;

    /**
     * This field is no longer used.
     *
     * @var string $refundStatus
     */
    private $refundStatus = null;

    /**
     * Adds as sellingManagerSoldTransaction
     *
     * Information about one line item in the order.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerSoldTransactionType $sellingManagerSoldTransaction
     */
    public function addToSellingManagerSoldTransaction(\Nogrod\eBaySDK\MerchantData\SellingManagerSoldTransactionType $sellingManagerSoldTransaction)
    {
        $this->sellingManagerSoldTransaction[] = $sellingManagerSoldTransaction;
        return $this;
    }

    /**
     * isset sellingManagerSoldTransaction
     *
     * Information about one line item in the order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellingManagerSoldTransaction($index)
    {
        return isset($this->sellingManagerSoldTransaction[$index]);
    }

    /**
     * unset sellingManagerSoldTransaction
     *
     * Information about one line item in the order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellingManagerSoldTransaction($index)
    {
        unset($this->sellingManagerSoldTransaction[$index]);
    }

    /**
     * Gets as sellingManagerSoldTransaction
     *
     * Information about one line item in the order.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerSoldTransactionType[]
     */
    public function getSellingManagerSoldTransaction()
    {
        return $this->sellingManagerSoldTransaction;
    }

    /**
     * Sets a new sellingManagerSoldTransaction
     *
     * Information about one line item in the order.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerSoldTransactionType[] $sellingManagerSoldTransaction
     * @return self
     */
    public function setSellingManagerSoldTransaction(array $sellingManagerSoldTransaction)
    {
        $this->sellingManagerSoldTransaction = $sellingManagerSoldTransaction;
        return $this;
    }

    /**
     * Gets as shippingAddress
     *
     * Shipping address of a buyer.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * Shipping address of a buyer.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress
     * @return self
     */
    public function setShippingAddress(\Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Gets as shippingDetails
     *
     * The shipping-related details for an order,
     *  including flat and calculated shipping costs and shipping insurance costs.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShippingDetailsType
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * Sets a new shippingDetails
     *
     * The shipping-related details for an order,
     *  including flat and calculated shipping costs and shipping insurance costs.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShippingDetailsType $shippingDetails
     * @return self
     */
    public function setShippingDetails(\Nogrod\eBaySDK\MerchantData\ShippingDetailsType $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * Gets as cashOnDeliveryCost
     *
     * The cost of cash-on-delivery.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getCashOnDeliveryCost()
    {
        return $this->cashOnDeliveryCost;
    }

    /**
     * Sets a new cashOnDeliveryCost
     *
     * The cost of cash-on-delivery.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $cashOnDeliveryCost
     * @return self
     */
    public function setCashOnDeliveryCost(\Nogrod\eBaySDK\MerchantData\AmountType $cashOnDeliveryCost)
    {
        $this->cashOnDeliveryCost = $cashOnDeliveryCost;
        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * Total cost in the order.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * Total cost in the order.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalAmount
     * @return self
     */
    public function setTotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType $totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Gets as totalQuantity
     *
     * Total item quantity.
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    /**
     * Sets a new totalQuantity
     *
     * Total item quantity.
     *
     * @param int $totalQuantity
     * @return self
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->totalQuantity = $totalQuantity;
        return $this;
    }

    /**
     * Gets as itemCost
     *
     * A SMPro seller can record the cost of the item, as calculated by the seller, in
     *  this field.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getItemCost()
    {
        return $this->itemCost;
    }

    /**
     * Sets a new itemCost
     *
     * A SMPro seller can record the cost of the item, as calculated by the seller, in
     *  this field.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $itemCost
     * @return self
     */
    public function setItemCost(\Nogrod\eBaySDK\MerchantData\AmountType $itemCost)
    {
        $this->itemCost = $itemCost;
        return $this;
    }

    /**
     * Adds as vATRate
     *
     * Rate of applicable value added tax.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\VATRateType $vATRate
     */
    public function addToVATRate(\Nogrod\eBaySDK\MerchantData\VATRateType $vATRate)
    {
        $this->vATRate[] = $vATRate;
        return $this;
    }

    /**
     * isset vATRate
     *
     * Rate of applicable value added tax.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVATRate($index)
    {
        return isset($this->vATRate[$index]);
    }

    /**
     * unset vATRate
     *
     * Rate of applicable value added tax.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVATRate($index)
    {
        unset($this->vATRate[$index]);
    }

    /**
     * Gets as vATRate
     *
     * Rate of applicable value added tax.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VATRateType[]
     */
    public function getVATRate()
    {
        return $this->vATRate;
    }

    /**
     * Sets a new vATRate
     *
     * Rate of applicable value added tax.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VATRateType[] $vATRate
     * @return self
     */
    public function setVATRate(array $vATRate)
    {
        $this->vATRate = $vATRate;
        return $this;
    }

    /**
     * Gets as netInsuranceFee
     *
     * Total cost of shipping insurance.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getNetInsuranceFee()
    {
        return $this->netInsuranceFee;
    }

    /**
     * Sets a new netInsuranceFee
     *
     * Total cost of shipping insurance.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $netInsuranceFee
     * @return self
     */
    public function setNetInsuranceFee(\Nogrod\eBaySDK\MerchantData\AmountType $netInsuranceFee)
    {
        $this->netInsuranceFee = $netInsuranceFee;
        return $this;
    }

    /**
     * Gets as vATInsuranceFee
     *
     * Amount of applicable value added tax insurance fee.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getVATInsuranceFee()
    {
        return $this->vATInsuranceFee;
    }

    /**
     * Sets a new vATInsuranceFee
     *
     * Amount of applicable value added tax insurance fee.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $vATInsuranceFee
     * @return self
     */
    public function setVATInsuranceFee(\Nogrod\eBaySDK\MerchantData\AmountType $vATInsuranceFee)
    {
        $this->vATInsuranceFee = $vATInsuranceFee;
        return $this;
    }

    /**
     * Gets as vATShippingFee
     *
     * VAT shipping fee.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getVATShippingFee()
    {
        return $this->vATShippingFee;
    }

    /**
     * Sets a new vATShippingFee
     *
     * VAT shipping fee.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $vATShippingFee
     * @return self
     */
    public function setVATShippingFee(\Nogrod\eBaySDK\MerchantData\AmountType $vATShippingFee)
    {
        $this->vATShippingFee = $vATShippingFee;
        return $this;
    }

    /**
     * Gets as netShippingFee
     *
     * Total shipping fee.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getNetShippingFee()
    {
        return $this->netShippingFee;
    }

    /**
     * Sets a new netShippingFee
     *
     * Total shipping fee.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $netShippingFee
     * @return self
     */
    public function setNetShippingFee(\Nogrod\eBaySDK\MerchantData\AmountType $netShippingFee)
    {
        $this->netShippingFee = $netShippingFee;
        return $this;
    }

    /**
     * Gets as netTotalAmount
     *
     * The seller records in this field a net total amount obtained according to the
     *  seller's method of calculation. This field is returned for VAT transactions
     *  only.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getNetTotalAmount()
    {
        return $this->netTotalAmount;
    }

    /**
     * Sets a new netTotalAmount
     *
     * The seller records in this field a net total amount obtained according to the
     *  seller's method of calculation. This field is returned for VAT transactions
     *  only.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $netTotalAmount
     * @return self
     */
    public function setNetTotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType $netTotalAmount)
    {
        $this->netTotalAmount = $netTotalAmount;
        return $this;
    }

    /**
     * Gets as vATTotalAmount
     *
     * VAT total amount.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getVATTotalAmount()
    {
        return $this->vATTotalAmount;
    }

    /**
     * Sets a new vATTotalAmount
     *
     * VAT total amount.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $vATTotalAmount
     * @return self
     */
    public function setVATTotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType $vATTotalAmount)
    {
        $this->vATTotalAmount = $vATTotalAmount;
        return $this;
    }

    /**
     * Gets as actualShippingCost
     *
     * The shipping cost paid by the seller to ship the order line item.
     *  <br/><br/>
     *  For multiple line item orders, it is possible that one order line item will have the shipping cost and the value for the other order line item will be 0.00.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This is different from the field of the same name returned by GetOrders and its related calls, which contains the shipping cost paid by the buyer.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getActualShippingCost()
    {
        return $this->actualShippingCost;
    }

    /**
     * Sets a new actualShippingCost
     *
     * The shipping cost paid by the seller to ship the order line item.
     *  <br/><br/>
     *  For multiple line item orders, it is possible that one order line item will have the shipping cost and the value for the other order line item will be 0.00.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This is different from the field of the same name returned by GetOrders and its related calls, which contains the shipping cost paid by the buyer.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $actualShippingCost
     * @return self
     */
    public function setActualShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $actualShippingCost)
    {
        $this->actualShippingCost = $actualShippingCost;
        return $this;
    }

    /**
     * Gets as adjustmentAmount
     *
     * Discount, or charge, to which the buyer and seller have agreed.
     *  If this value is a positive value,
     *  the amount is the extra money that the buyer pays the seller.
     *  If this value is a negative value,
     *  the amount is a discount the seller gives the buyer.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getAdjustmentAmount()
    {
        return $this->adjustmentAmount;
    }

    /**
     * Sets a new adjustmentAmount
     *
     * Discount, or charge, to which the buyer and seller have agreed.
     *  If this value is a positive value,
     *  the amount is the extra money that the buyer pays the seller.
     *  If this value is a negative value,
     *  the amount is a discount the seller gives the buyer.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $adjustmentAmount
     * @return self
     */
    public function setAdjustmentAmount(\Nogrod\eBaySDK\MerchantData\AmountType $adjustmentAmount)
    {
        $this->adjustmentAmount = $adjustmentAmount;
        return $this;
    }

    /**
     * Gets as notesToBuyer
     *
     * Notes from the seller to the buyer.
     *
     * @return string
     */
    public function getNotesToBuyer()
    {
        return $this->notesToBuyer;
    }

    /**
     * Sets a new notesToBuyer
     *
     * Notes from the seller to the buyer.
     *
     * @param string $notesToBuyer
     * @return self
     */
    public function setNotesToBuyer($notesToBuyer)
    {
        $this->notesToBuyer = $notesToBuyer;
        return $this;
    }

    /**
     * Gets as notesFromBuyer
     *
     * Notes from the buyer to the seller.
     *
     * @return string
     */
    public function getNotesFromBuyer()
    {
        return $this->notesFromBuyer;
    }

    /**
     * Sets a new notesFromBuyer
     *
     * Notes from the buyer to the seller.
     *
     * @param string $notesFromBuyer
     * @return self
     */
    public function setNotesFromBuyer($notesFromBuyer)
    {
        $this->notesFromBuyer = $notesFromBuyer;
        return $this;
    }

    /**
     * Gets as notesToSeller
     *
     * Notes to self from seller.
     *
     * @return string
     */
    public function getNotesToSeller()
    {
        return $this->notesToSeller;
    }

    /**
     * Sets a new notesToSeller
     *
     * Notes to self from seller.
     *
     * @param string $notesToSeller
     * @return self
     */
    public function setNotesToSeller($notesToSeller)
    {
        $this->notesToSeller = $notesToSeller;
        return $this;
    }

    /**
     * Gets as orderStatus
     *
     * Status of the order regarding payment, shipping, feedback, and other
     *  communications.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerOrderStatusType
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Sets a new orderStatus
     *
     * Status of the order regarding payment, shipping, feedback, and other
     *  communications.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerOrderStatusType $orderStatus
     * @return self
     */
    public function setOrderStatus(\Nogrod\eBaySDK\MerchantData\SellingManagerOrderStatusType $orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Gets as unpaidItemStatus
     *
     * The status of an unpaid item regarding final value, state of communications
     *  between buyer and seller, and the filing of an Unpaid Item.
     *
     * @return string
     */
    public function getUnpaidItemStatus()
    {
        return $this->unpaidItemStatus;
    }

    /**
     * Sets a new unpaidItemStatus
     *
     * The status of an unpaid item regarding final value, state of communications
     *  between buyer and seller, and the filing of an Unpaid Item.
     *
     * @param string $unpaidItemStatus
     * @return self
     */
    public function setUnpaidItemStatus($unpaidItemStatus)
    {
        $this->unpaidItemStatus = $unpaidItemStatus;
        return $this;
    }

    /**
     * Gets as salePrice
     *
     * Amount of the accepted offer for the listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Sets a new salePrice
     *
     * Amount of the accepted offer for the listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $salePrice
     * @return self
     */
    public function setSalePrice(\Nogrod\eBaySDK\MerchantData\AmountType $salePrice)
    {
        $this->salePrice = $salePrice;
        return $this;
    }

    /**
     * Gets as emailsSent
     *
     * Number of emails sent regarding this order.
     *
     * @return int
     */
    public function getEmailsSent()
    {
        return $this->emailsSent;
    }

    /**
     * Sets a new emailsSent
     *
     * Number of emails sent regarding this order.
     *
     * @param int $emailsSent
     * @return self
     */
    public function setEmailsSent($emailsSent)
    {
        $this->emailsSent = $emailsSent;
        return $this;
    }

    /**
     * Gets as daysSinceSale
     *
     * Number of days since the sale.
     *
     * @return int
     */
    public function getDaysSinceSale()
    {
        return $this->daysSinceSale;
    }

    /**
     * Sets a new daysSinceSale
     *
     * Number of days since the sale.
     *
     * @param int $daysSinceSale
     * @return self
     */
    public function setDaysSinceSale($daysSinceSale)
    {
        $this->daysSinceSale = $daysSinceSale;
        return $this;
    }

    /**
     * Gets as buyerID
     *
     * The user ID of the buyer.
     *
     * @return string
     */
    public function getBuyerID()
    {
        return $this->buyerID;
    }

    /**
     * Sets a new buyerID
     *
     * The user ID of the buyer.
     *
     * @param string $buyerID
     * @return self
     */
    public function setBuyerID($buyerID)
    {
        $this->buyerID = $buyerID;
        return $this;
    }

    /**
     * Gets as buyerEmail
     *
     * The email of the buyer.
     *
     * @return string
     */
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }

    /**
     * Sets a new buyerEmail
     *
     * The email of the buyer.
     *
     * @param string $buyerEmail
     * @return self
     */
    public function setBuyerEmail($buyerEmail)
    {
        $this->buyerEmail = $buyerEmail;
        return $this;
    }

    /**
     * Gets as saleRecordID
     *
     * The sale record ID. Applicable to Selling Manager users.
     *  When an item is sold, Selling Manager generates a sale record.
     *  A sale record contains buyer information, shipping, and other information.
     *  A sale record is displayed in the Sold view in Selling Manager.
     *  Each sale record has a sale record ID. In the following calls,
     *  the value for the sale record ID is in the SellingManagerSalesRecordNumber field:
     *  GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions.
     *  In the Selling Manager calls, the value for the sale record ID is in the
     *  SaleRecordID field. The sale record ID can be for single or multiple line item orders.
     *
     * @return int
     */
    public function getSaleRecordID()
    {
        return $this->saleRecordID;
    }

    /**
     * Sets a new saleRecordID
     *
     * The sale record ID. Applicable to Selling Manager users.
     *  When an item is sold, Selling Manager generates a sale record.
     *  A sale record contains buyer information, shipping, and other information.
     *  A sale record is displayed in the Sold view in Selling Manager.
     *  Each sale record has a sale record ID. In the following calls,
     *  the value for the sale record ID is in the SellingManagerSalesRecordNumber field:
     *  GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions.
     *  In the Selling Manager calls, the value for the sale record ID is in the
     *  SaleRecordID field. The sale record ID can be for single or multiple line item orders.
     *
     * @param int $saleRecordID
     * @return self
     */
    public function setSaleRecordID($saleRecordID)
    {
        $this->saleRecordID = $saleRecordID;
        return $this;
    }

    /**
     * Gets as creationTime
     *
     * The sale date.
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Sets a new creationTime
     *
     * The sale date.
     *
     * @param \DateTime $creationTime
     * @return self
     */
    public function setCreationTime(\DateTime $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    /**
     * Gets as refundAmount
     *
     * This field is no longer used.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets a new refundAmount
     *
     * This field is no longer used.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $refundAmount
     * @return self
     */
    public function setRefundAmount(\Nogrod\eBaySDK\MerchantData\AmountType $refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }

    /**
     * Gets as refundStatus
     *
     * This field is no longer used.
     *
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->refundStatus;
    }

    /**
     * Sets a new refundStatus
     *
     * This field is no longer used.
     *
     * @param string $refundStatus
     * @return self
     */
    public function setRefundStatus($refundStatus)
    {
        $this->refundStatus = $refundStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellingManagerSoldTransaction();
        if (null !== $value && !empty($this->getSellingManagerSoldTransaction())) {
            $writer->write(array_map(function ($v) {
                return ["SellingManagerSoldTransaction" => $v];
            }, $value));
        }
        $value = $this->getShippingAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingAddress", $value);
        }
        $value = $this->getShippingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDetails", $value);
        }
        $value = $this->getCashOnDeliveryCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CashOnDeliveryCost", $value);
        }
        $value = $this->getTotalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAmount", $value);
        }
        $value = $this->getTotalQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalQuantity", $value);
        }
        $value = $this->getItemCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCost", $value);
        }
        $value = $this->getVATRate();
        if (null !== $value && !empty($this->getVATRate())) {
            $writer->write(array_map(function ($v) {
                return ["VATRate" => $v];
            }, $value));
        }
        $value = $this->getNetInsuranceFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NetInsuranceFee", $value);
        }
        $value = $this->getVATInsuranceFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATInsuranceFee", $value);
        }
        $value = $this->getVATShippingFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATShippingFee", $value);
        }
        $value = $this->getNetShippingFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NetShippingFee", $value);
        }
        $value = $this->getNetTotalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NetTotalAmount", $value);
        }
        $value = $this->getVATTotalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATTotalAmount", $value);
        }
        $value = $this->getActualShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActualShippingCost", $value);
        }
        $value = $this->getAdjustmentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount", $value);
        }
        $value = $this->getNotesToBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotesToBuyer", $value);
        }
        $value = $this->getNotesFromBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotesFromBuyer", $value);
        }
        $value = $this->getNotesToSeller();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotesToSeller", $value);
        }
        $value = $this->getOrderStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderStatus", $value);
        }
        $value = $this->getUnpaidItemStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnpaidItemStatus", $value);
        }
        $value = $this->getSalePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalePrice", $value);
        }
        $value = $this->getEmailsSent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EmailsSent", $value);
        }
        $value = $this->getDaysSinceSale();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DaysSinceSale", $value);
        }
        $value = $this->getBuyerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerID", $value);
        }
        $value = $this->getBuyerEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerEmail", $value);
        }
        $value = $this->getSaleRecordID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleRecordID", $value);
        }
        $value = $this->getCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreationTime", $value);
        }
        $value = $this->getRefundAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundAmount", $value);
        }
        $value = $this->getRefundStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerSoldTransaction', true);
        if (null !== $value && !empty($value)) {
            $this->setSellingManagerSoldTransaction(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SellingManagerSoldTransactionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingAddress');
        if (null !== $value) {
            $this->setShippingAddress(\Nogrod\eBaySDK\MerchantData\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDetails');
        if (null !== $value) {
            $this->setShippingDetails(\Nogrod\eBaySDK\MerchantData\ShippingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CashOnDeliveryCost');
        if (null !== $value) {
            $this->setCashOnDeliveryCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAmount');
        if (null !== $value) {
            $this->setTotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalQuantity');
        if (null !== $value) {
            $this->setTotalQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCost');
        if (null !== $value) {
            $this->setItemCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATRate', true);
        if (null !== $value && !empty($value)) {
            $this->setVATRate(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\VATRateType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NetInsuranceFee');
        if (null !== $value) {
            $this->setNetInsuranceFee(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATInsuranceFee');
        if (null !== $value) {
            $this->setVATInsuranceFee(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATShippingFee');
        if (null !== $value) {
            $this->setVATShippingFee(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NetShippingFee');
        if (null !== $value) {
            $this->setNetShippingFee(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NetTotalAmount');
        if (null !== $value) {
            $this->setNetTotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATTotalAmount');
        if (null !== $value) {
            $this->setVATTotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActualShippingCost');
        if (null !== $value) {
            $this->setActualShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdjustmentAmount');
        if (null !== $value) {
            $this->setAdjustmentAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotesToBuyer');
        if (null !== $value) {
            $this->setNotesToBuyer($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotesFromBuyer');
        if (null !== $value) {
            $this->setNotesFromBuyer($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotesToSeller');
        if (null !== $value) {
            $this->setNotesToSeller($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderStatus');
        if (null !== $value) {
            $this->setOrderStatus(\Nogrod\eBaySDK\MerchantData\SellingManagerOrderStatusType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnpaidItemStatus');
        if (null !== $value) {
            $this->setUnpaidItemStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalePrice');
        if (null !== $value) {
            $this->setSalePrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailsSent');
        if (null !== $value) {
            $this->setEmailsSent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DaysSinceSale');
        if (null !== $value) {
            $this->setDaysSinceSale($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerID');
        if (null !== $value) {
            $this->setBuyerID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerEmail');
        if (null !== $value) {
            $this->setBuyerEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleRecordID');
        if (null !== $value) {
            $this->setSaleRecordID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreationTime');
        if (null !== $value) {
            $this->setCreationTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundAmount');
        if (null !== $value) {
            $this->setRefundAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundStatus');
        if (null !== $value) {
            $this->setRefundStatus($value);
        }
    }
}
