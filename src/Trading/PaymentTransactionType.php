<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentTransactionType
 *
 * This type contains details about the allocation of funds to one payee from a buyer payment for a specified order.
 * XSD Type: PaymentTransactionType
 */
class PaymentTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This field indicates the eBay user or eBay partner who submitted the payment.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct payer is returned to the buyer or seller, but the identity of the payer will be masked to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\UserIdentityType $payer
     */
    private $payer = null;

    /**
     * The person or organization who is to receive the payment allocation.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
        if (!is_array($this->paymentReferenceID)) {
            throw new \LogicException('paymentReferenceID is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\TransactionReferenceType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\TransactionReferenceType> $paymentReferenceID
     * @return self
     */
    public function setPaymentReferenceID(iterable $paymentReferenceID)
    {
        $this->paymentReferenceID = $paymentReferenceID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->payer;
        if (null !== $value) {
            $writer->startElementNs(null, 'Payer', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->payee;
        if (null !== $value) {
            $writer->startElementNs(null, 'Payee', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->paymentTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PaymentTime', null, Func::formatDateTime($value));
        }
        $value = $this->paymentAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'PaymentAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->referenceID;
        if (null !== $value) {
            $writer->startElementNs(null, 'ReferenceID', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->feeOrCreditAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'FeeOrCreditAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->paymentReferenceID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'PaymentReferenceID', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaymentTransactionType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->paymentReferenceID = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Payer':
                    $this->payer = \Nogrod\eBaySDK\Trading\UserIdentityType::xmlRead($reader);
                    return true;
                case 'Payee':
                    $this->payee = \Nogrod\eBaySDK\Trading\UserIdentityType::xmlRead($reader);
                    return true;
                case 'PaymentTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->paymentTime = new \DateTime($value);
                    }
                    return true;
                case 'PaymentAmount':
                    $this->paymentAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ReferenceID':
                    $this->referenceID = \Nogrod\eBaySDK\Trading\TransactionReferenceType::xmlRead($reader);
                    return true;
                case 'FeeOrCreditAmount':
                    $this->feeOrCreditAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'PaymentReferenceID':
                    $this->paymentReferenceID[] = \Nogrod\eBaySDK\Trading\TransactionReferenceType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Payer'] = $this->payer;
        $data['Payee'] = $this->payee;
        $data['PaymentTime'] = Func::jsonDate($this->paymentTime);
        $data['PaymentAmount'] = $this->paymentAmount;
        $data['ReferenceID'] = $this->referenceID;
        $data['FeeOrCreditAmount'] = $this->feeOrCreditAmount;
        $data['PaymentReferenceID'] = Func::jsonList($this->paymentReferenceID);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
