<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PaymentTransactionType
 *
 * This type contains details about the allocation of funds to one payee from a buyer payment for a specified order.
 * XSD Type: PaymentTransactionType
 */
class PaymentTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The current status of a buyer payment that is allocated to a specified payee.
     *
     * @var string $paymentStatus
     */
    private $paymentStatus = null;

    /**
     * This field indicates the eBay user or eBay partner who submitted the payment.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     *
     * @var \Nogrod\eBaySDK\MerchantData\UserIdentityType $payer
     */
    private $payer = null;

    /**
     * The person or organization who is to receive the payment allocation.
     *
     * @var \Nogrod\eBaySDK\MerchantData\UserIdentityType $payee
     */
    private $payee = null;

    /**
     * The date and time when the payment is received by the payee.
     *
     * @var \DateTime $paymentTime
     */
    private $paymentTime = null;

    /**
     * The amount of the payment that is allocated to the payee.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>PaymentAmount</b> value (if the corresponding monetary transaction is buyer payment for an order). To determine if 'Collect and Remit' taxes were added into <b>PaymentAmount</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $paymentAmount
     */
    private $paymentAmount = null;

    /**
     * A unique transaction ID for the payment.
     *  <br/><br/>
     *  This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TransactionReferenceType $referenceID
     */
    private $referenceID = null;

    /**
     * Fee Amount is a positive value and Credit Amount is a negative value.
     *  <br/><br/>
     *  This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $feeOrCreditAmount
     */
    private $feeOrCreditAmount = null;

    /**
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TransactionReferenceType[] $paymentReferenceID
     */
    private $paymentReferenceID = [
        
    ];

    /**
     * Gets as paymentStatus
     *
     * The current status of a buyer payment that is allocated to a specified payee.
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Sets a new paymentStatus
     *
     * The current status of a buyer payment that is allocated to a specified payee.
     *
     * @param string $paymentStatus
     * @return self
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    /**
     * Gets as payer
     *
     * This field indicates the eBay user or eBay partner who submitted the payment.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     *
     * @return \Nogrod\eBaySDK\MerchantData\UserIdentityType
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Sets a new payer
     *
     * This field indicates the eBay user or eBay partner who submitted the payment.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     *
     * @param \Nogrod\eBaySDK\MerchantData\UserIdentityType $payer
     * @return self
     */
    public function setPayer(\Nogrod\eBaySDK\MerchantData\UserIdentityType $payer)
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * Gets as payee
     *
     * The person or organization who is to receive the payment allocation.
     *
     * @return \Nogrod\eBaySDK\MerchantData\UserIdentityType
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * Sets a new payee
     *
     * The person or organization who is to receive the payment allocation.
     *
     * @param \Nogrod\eBaySDK\MerchantData\UserIdentityType $payee
     * @return self
     */
    public function setPayee(\Nogrod\eBaySDK\MerchantData\UserIdentityType $payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Gets as paymentTime
     *
     * The date and time when the payment is received by the payee.
     *
     * @return \DateTime
     */
    public function getPaymentTime()
    {
        return $this->paymentTime;
    }

    /**
     * Sets a new paymentTime
     *
     * The date and time when the payment is received by the payee.
     *
     * @param \DateTime $paymentTime
     * @return self
     */
    public function setPaymentTime(\DateTime $paymentTime)
    {
        $this->paymentTime = $paymentTime;
        return $this;
    }

    /**
     * Gets as paymentAmount
     *
     * The amount of the payment that is allocated to the payee.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>PaymentAmount</b> value (if the corresponding monetary transaction is buyer payment for an order). To determine if 'Collect and Remit' taxes were added into <b>PaymentAmount</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Sets a new paymentAmount
     *
     * The amount of the payment that is allocated to the payee.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit' tax amount for the order will be included in the <b>PaymentAmount</b> value (if the corresponding monetary transaction is buyer payment for an order). To determine if 'Collect and Remit' taxes were added into <b>PaymentAmount</b> value, the user can check for the <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code> (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $paymentAmount
     * @return self
     */
    public function setPaymentAmount(\Nogrod\eBaySDK\MerchantData\AmountType $paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * Gets as referenceID
     *
     * A unique transaction ID for the payment.
     *  <br/><br/>
     *  This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @return \Nogrod\eBaySDK\MerchantData\TransactionReferenceType
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * A unique transaction ID for the payment.
     *  <br/><br/>
     *  This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @param \Nogrod\eBaySDK\MerchantData\TransactionReferenceType $referenceID
     * @return self
     */
    public function setReferenceID(\Nogrod\eBaySDK\MerchantData\TransactionReferenceType $referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as feeOrCreditAmount
     *
     * Fee Amount is a positive value and Credit Amount is a negative value.
     *  <br/><br/>
     *  This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
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
     *  <br/><br/>
     *  This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
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
     * Adds as paymentReferenceID
     *
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\TransactionReferenceType $paymentReferenceID
     */
    public function addToPaymentReferenceID(\Nogrod\eBaySDK\MerchantData\TransactionReferenceType $paymentReferenceID)
    {
        $this->paymentReferenceID[] = $paymentReferenceID;
        return $this;
    }

    /**
     * isset paymentReferenceID
     *
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentReferenceID($index)
    {
        return isset($this->paymentReferenceID[$index]);
    }

    /**
     * unset paymentReferenceID
     *
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentReferenceID($index)
    {
        unset($this->paymentReferenceID[$index]);
    }

    /**
     * Gets as paymentReferenceID
     *
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @return \Nogrod\eBaySDK\MerchantData\TransactionReferenceType[]
     */
    public function getPaymentReferenceID()
    {
        return $this->paymentReferenceID;
    }

    /**
     * Sets a new paymentReferenceID
     *
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @param \Nogrod\eBaySDK\MerchantData\TransactionReferenceType[] $paymentReferenceID
     * @return self
     */
    public function setPaymentReferenceID(array $paymentReferenceID)
    {
        $this->paymentReferenceID = $paymentReferenceID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPaymentStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentStatus", $value);
        }
        $value = $this->getPayer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Payer", $value);
        }
        $value = $this->getPayee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Payee", $value);
        }
        $value = $this->getPaymentTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentTime", $value);
        }
        $value = $this->getPaymentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentAmount", $value);
        }
        $value = $this->getReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferenceID", $value);
        }
        $value = $this->getFeeOrCreditAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount", $value);
        }
        $value = $this->getPaymentReferenceID();
        if (null !== $value && !empty($this->getPaymentReferenceID())) {
            $writer->write(array_map(function ($v) {
                return ["PaymentReferenceID" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentStatus');
        if (null !== $value) {
            $this->setPaymentStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payer');
        if (null !== $value) {
            $this->setPayer(\Nogrod\eBaySDK\MerchantData\UserIdentityType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payee');
        if (null !== $value) {
            $this->setPayee(\Nogrod\eBaySDK\MerchantData\UserIdentityType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentTime');
        if (null !== $value) {
            $this->setPaymentTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentAmount');
        if (null !== $value) {
            $this->setPaymentAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferenceID');
        if (null !== $value) {
            $this->setReferenceID(\Nogrod\eBaySDK\MerchantData\TransactionReferenceType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount');
        if (null !== $value) {
            $this->setFeeOrCreditAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentReferenceID', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentReferenceID(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\TransactionReferenceType::fromKeyValue($v);
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
