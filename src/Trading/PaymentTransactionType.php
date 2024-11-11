<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentTransactionType
 *
 * This type contains details about the allocation of funds to one payee from a buyer payment for a specified order.
 * XSD Type: PaymentTransactionType
 */
class PaymentTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field indicates the eBay user or eBay partner who submitted the payment.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\UserIdentityType $payer
     */
    private $payer = null;

    /**
     * The person or organization who is to receive the payment allocation.
     *
     * @var \Nogrod\eBaySDK\Trading\UserIdentityType $payee
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
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $paymentAmount
     */
    private $paymentAmount = null;

    /**
     * A unique transaction ID for the payment.
     *  <br/><br/>
     *  This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID
     */
    private $referenceID = null;

    /**
     * Fee Amount is a positive value and Credit Amount is a negative value.
     *  <br/><br/>
     *  This field is not returned if the <strong>Payee</strong> field's <strong>type</strong> attribute is <code>eBayPartner</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount
     */
    private $feeOrCreditAmount = null;

    /**
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionReferenceType[] $paymentReferenceID
     */
    private $paymentReferenceID = [

    ];

    /**
     * Gets as payer
     *
     * This field indicates the eBay user or eBay partner who submitted the payment.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     *
     * @return \Nogrod\eBaySDK\Trading\UserIdentityType
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     *
     * @param \Nogrod\eBaySDK\Trading\UserIdentityType $payer
     * @return self
     */
    public function setPayer(\Nogrod\eBaySDK\Trading\UserIdentityType $payer)
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * Gets as payee
     *
     * The person or organization who is to receive the payment allocation.
     *
     * @return \Nogrod\eBaySDK\Trading\UserIdentityType
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
     * @param \Nogrod\eBaySDK\Trading\UserIdentityType $payee
     * @return self
     */
    public function setPayee(\Nogrod\eBaySDK\Trading\UserIdentityType $payee)
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
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Sets a new paymentAmount
     *
     * The amount of the payment that is allocated to the payee.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $paymentAmount
     * @return self
     */
    public function setPaymentAmount(\Nogrod\eBaySDK\Trading\AmountType $paymentAmount)
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionReferenceType
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID
     * @return self
     */
    public function setReferenceID(\Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID)
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
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount
     * @return self
     */
    public function setFeeOrCreditAmount(\Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount)
    {
        $this->feeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }

    /**
     * Adds as paymentReferenceID
     *
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TransactionReferenceType $paymentReferenceID
     */
    public function addToPaymentReferenceID(\Nogrod\eBaySDK\Trading\TransactionReferenceType $paymentReferenceID)
    {
        $this->paymentReferenceID[] = $paymentReferenceID;
        return $this;
    }

    /**
     * isset paymentReferenceID
     *
     * The payment transaction ID.
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionReferenceType[]
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
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payment identifier is returned to the buyer or seller, but the payment identifier will be masked to all third parties.
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionReferenceType[] $paymentReferenceID
     * @return self
     */
    public function setPaymentReferenceID(array $paymentReferenceID)
    {
        $this->paymentReferenceID = $paymentReferenceID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
        if (null !== $value && [] !== $this->getPaymentReferenceID()) {
            $writer->write(array_map(function ($v) {return ["PaymentReferenceID" => $v];}, $value));
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payer');
        if (null !== $value) {
            $this->setPayer(\Nogrod\eBaySDK\Trading\UserIdentityType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payee');
        if (null !== $value) {
            $this->setPayee(\Nogrod\eBaySDK\Trading\UserIdentityType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentTime');
        if (null !== $value) {
            $this->setPaymentTime(new \DateTime($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentAmount');
        if (null !== $value) {
            $this->setPaymentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferenceID');
        if (null !== $value) {
            $this->setReferenceID(\Nogrod\eBaySDK\Trading\TransactionReferenceType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount');
        if (null !== $value) {
            $this->setFeeOrCreditAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentReferenceID');
        if (null !== $value) {
            $this->setPaymentReferenceID(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TransactionReferenceType::fromKeyValue($v);}, $value));
        }
    }
}
