<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellerPaymentType
 *
 * <span class="tablenote"><b>Note: </b> This type is deprecated since it was only applicable to the Half.com, and the Half.com site was shut down.
 *  </span>
 * XSD Type: SellerPaymentType
 */
class SellerPaymentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var string $sellerInventoryID
     */
    private $sellerInventoryID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var string $privateNotes
     */
    private $privateNotes = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var string $title
     */
    private $title = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var string $paymentType
     */
    private $paymentType = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $transactionPrice
     */
    private $transactionPrice = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $shippingReimbursement
     */
    private $shippingReimbursement = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $commission
     */
    private $commission = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $amountPaid
     */
    private $amountPaid = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var \DateTime $paidTime
     */
    private $paidTime = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as orderID
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
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
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
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
     * Gets as sellerInventoryID
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return string
     */
    public function getSellerInventoryID()
    {
        return $this->sellerInventoryID;
    }

    /**
     * Sets a new sellerInventoryID
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param string $sellerInventoryID
     * @return self
     */
    public function setSellerInventoryID($sellerInventoryID)
    {
        $this->sellerInventoryID = $sellerInventoryID;
        return $this;
    }

    /**
     * Gets as privateNotes
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return string
     */
    public function getPrivateNotes()
    {
        return $this->privateNotes;
    }

    /**
     * Sets a new privateNotes
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param string $privateNotes
     * @return self
     */
    public function setPrivateNotes($privateNotes)
    {
        $this->privateNotes = $privateNotes;
        return $this;
    }

    /**
     * Gets as title
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as paymentType
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as transactionPrice
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTransactionPrice()
    {
        return $this->transactionPrice;
    }

    /**
     * Sets a new transactionPrice
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $transactionPrice
     * @return self
     */
    public function setTransactionPrice(\Nogrod\eBaySDK\MerchantData\AmountType $transactionPrice)
    {
        $this->transactionPrice = $transactionPrice;
        return $this;
    }

    /**
     * Gets as shippingReimbursement
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getShippingReimbursement()
    {
        return $this->shippingReimbursement;
    }

    /**
     * Sets a new shippingReimbursement
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $shippingReimbursement
     * @return self
     */
    public function setShippingReimbursement(\Nogrod\eBaySDK\MerchantData\AmountType $shippingReimbursement)
    {
        $this->shippingReimbursement = $shippingReimbursement;
        return $this;
    }

    /**
     * Gets as commission
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $commission
     * @return self
     */
    public function setCommission(\Nogrod\eBaySDK\MerchantData\AmountType $commission)
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * Gets as amountPaid
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }

    /**
     * Sets a new amountPaid
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $amountPaid
     * @return self
     */
    public function setAmountPaid(\Nogrod\eBaySDK\MerchantData\AmountType $amountPaid)
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * Gets as paidTime
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @return \DateTime
     */
    public function getPaidTime()
    {
        return $this->paidTime;
    }

    /**
     * Sets a new paidTime
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
     *
     * @param \DateTime $paidTime
     * @return self
     */
    public function setPaidTime(\DateTime $paidTime)
    {
        $this->paidTime = $paidTime;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>SellerPaymentType</b> and all of its fields are no longer applicable since the Half.com site was shut down.
     *  </span>
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getSellerInventoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerInventoryID", $value);
        }
        $value = $this->getPrivateNotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrivateNotes", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getPaymentType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentType", $value);
        }
        $value = $this->getTransactionPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionPrice", $value);
        }
        $value = $this->getShippingReimbursement();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingReimbursement", $value);
        }
        $value = $this->getCommission();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Commission", $value);
        }
        $value = $this->getAmountPaid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AmountPaid", $value);
        }
        $value = $this->getPaidTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaidTime", $value);
        }
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerInventoryID');
        if (null !== $value) {
            $this->setSellerInventoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrivateNotes');
        if (null !== $value) {
            $this->setPrivateNotes($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentType');
        if (null !== $value) {
            $this->setPaymentType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionPrice');
        if (null !== $value) {
            $this->setTransactionPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingReimbursement');
        if (null !== $value) {
            $this->setShippingReimbursement(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Commission');
        if (null !== $value) {
            $this->setCommission(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AmountPaid');
        if (null !== $value) {
            $this->setAmountPaid(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaidTime');
        if (null !== $value) {
            $this->setPaidTime(new \DateTime($value));
        }
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
