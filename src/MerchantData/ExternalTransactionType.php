<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ExternalTransactionType
 *
 * Container consisting of details related to payment of an eBay order on an
 *  external system such as PayPal. This container is only returned if payment has
 *  been made on an order. For <b>GetSellerTransaactions</b> and <b>GetItemTransactions</b>, this
 *  container is not returned for multiple line item orders.
 * XSD Type: ExternalTransactionType
 */
class ExternalTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Unique identifier for a PayPal payment of an eBay order. If the order was purchased
     *  with a payment method other than PayPal, "SIS" is returned, which stands for "Send
     *  Information To Seller." This field is only returned after payment has been made.
     *
     * @var string $externalTransactionID
     */
    private $externalTransactionID = null;

    /**
     * Timestamp for payment transaction.
     *
     * @var \DateTime $externalTransactionTime
     */
    private $externalTransactionTime = null;

    /**
     * Fee Amount is a positive value and Credit Amount is a negative value.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $feeOrCreditAmount
     */
    private $feeOrCreditAmount = null;

    /**
     * If this dollar value is a positive amount, this is the amount that the buyer pays the seller through PayPal for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any 'Collect and Remit' tax (mandated US state sales tax or 'Goods and Services' tax in Australia or New Zealand) charged to the buyer for one or more order line items, since this tax is collected by eBay and not by the seller.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>PaymentOrRefundAmount</b> value (for the payment scenario). To determine if 'Collect and Remit' taxes were added into <b>PaymentOrRefundAmount</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $paymentOrRefundAmount
     */
    private $paymentOrRefundAmount = null;

    /**
     * The current processing status of a PayPal payment for an eBay order.
     *
     * @var string $externalTransactionStatus
     */
    private $externalTransactionStatus = null;

    /**
     * Gets as externalTransactionID
     *
     * Unique identifier for a PayPal payment of an eBay order. If the order was purchased
     *  with a payment method other than PayPal, "SIS" is returned, which stands for "Send
     *  Information To Seller." This field is only returned after payment has been made.
     *
     * @return string
     */
    public function getExternalTransactionID()
    {
        return $this->externalTransactionID;
    }

    /**
     * Sets a new externalTransactionID
     *
     * Unique identifier for a PayPal payment of an eBay order. If the order was purchased
     *  with a payment method other than PayPal, "SIS" is returned, which stands for "Send
     *  Information To Seller." This field is only returned after payment has been made.
     *
     * @param string $externalTransactionID
     * @return self
     */
    public function setExternalTransactionID($externalTransactionID)
    {
        $this->externalTransactionID = $externalTransactionID;
        return $this;
    }

    /**
     * Gets as externalTransactionTime
     *
     * Timestamp for payment transaction.
     *
     * @return \DateTime
     */
    public function getExternalTransactionTime()
    {
        return $this->externalTransactionTime;
    }

    /**
     * Sets a new externalTransactionTime
     *
     * Timestamp for payment transaction.
     *
     * @param \DateTime $externalTransactionTime
     * @return self
     */
    public function setExternalTransactionTime(\DateTime $externalTransactionTime)
    {
        $this->externalTransactionTime = $externalTransactionTime;
        return $this;
    }

    /**
     * Gets as feeOrCreditAmount
     *
     * Fee Amount is a positive value and Credit Amount is a negative value.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getFeeOrCreditAmount()
    {
        return $this->feeOrCreditAmount;
    }

    /**
     * Sets a new feeOrCreditAmount
     *
     * Fee Amount is a positive value and Credit Amount is a negative value.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $feeOrCreditAmount
     * @return self
     */
    public function setFeeOrCreditAmount(\Nogrod\eBaySDK\MerchantData\AmountType $feeOrCreditAmount)
    {
        $this->feeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }

    /**
     * Gets as paymentOrRefundAmount
     *
     * If this dollar value is a positive amount, this is the amount that the buyer pays the seller through PayPal for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any 'Collect and Remit' tax (mandated US state sales tax or 'Goods and Services' tax in Australia or New Zealand) charged to the buyer for one or more order line items, since this tax is collected by eBay and not by the seller.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>PaymentOrRefundAmount</b> value (for the payment scenario). To determine if 'Collect and Remit' taxes were added into <b>PaymentOrRefundAmount</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getPaymentOrRefundAmount()
    {
        return $this->paymentOrRefundAmount;
    }

    /**
     * Sets a new paymentOrRefundAmount
     *
     * If this dollar value is a positive amount, this is the amount that the buyer pays the seller through PayPal for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any 'Collect and Remit' tax (mandated US state sales tax or 'Goods and Services' tax in Australia or New Zealand) charged to the buyer for one or more order line items, since this tax is collected by eBay and not by the seller.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>PaymentOrRefundAmount</b> value (for the payment scenario). To determine if 'Collect and Remit' taxes were added into <b>PaymentOrRefundAmount</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $paymentOrRefundAmount
     * @return self
     */
    public function setPaymentOrRefundAmount(\Nogrod\eBaySDK\MerchantData\AmountType $paymentOrRefundAmount)
    {
        $this->paymentOrRefundAmount = $paymentOrRefundAmount;
        return $this;
    }

    /**
     * Gets as externalTransactionStatus
     *
     * The current processing status of a PayPal payment for an eBay order.
     *
     * @return string
     */
    public function getExternalTransactionStatus()
    {
        return $this->externalTransactionStatus;
    }

    /**
     * Sets a new externalTransactionStatus
     *
     * The current processing status of a PayPal payment for an eBay order.
     *
     * @param string $externalTransactionStatus
     * @return self
     */
    public function setExternalTransactionStatus($externalTransactionStatus)
    {
        $this->externalTransactionStatus = $externalTransactionStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExternalTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalTransactionID", $value);
        }
        $value = $this->getExternalTransactionTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalTransactionTime", $value);
        }
        $value = $this->getFeeOrCreditAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount", $value);
        }
        $value = $this->getPaymentOrRefundAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentOrRefundAmount", $value);
        }
        $value = $this->getExternalTransactionStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalTransactionStatus", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransactionID');
        if (null !== $value) {
            $this->setExternalTransactionID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransactionTime');
        if (null !== $value) {
            $this->setExternalTransactionTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount');
        if (null !== $value) {
            $this->setFeeOrCreditAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentOrRefundAmount');
        if (null !== $value) {
            $this->setPaymentOrRefundAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalTransactionStatus');
        if (null !== $value) {
            $this->setExternalTransactionStatus($value);
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
