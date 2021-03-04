<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentTransactionCodeType
 *
 * This type is deprecated.
 * XSD Type: PaymentTransactionCodeType
 */
class PaymentTransactionCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $paymentStatus
     */
    private $paymentStatus = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\UserIdentityType $payer
     */
    private $payer = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\UserIdentityType $payee
     */
    private $payee = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $paymentTime
     */
    private $paymentTime = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $paymentAmount
     */
    private $paymentAmount = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID
     */
    private $referenceID = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount
     */
    private $feeOrCreditAmount = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionReferenceType[] $paymentReferenceID
     */
    private $paymentReferenceID = [
        
    ];

    /**
     * Gets as paymentStatus
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionReferenceType[] $paymentReferenceID
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentStatus');
        if (null !== $value) {
            $this->setPaymentStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payer');
        if (null !== $value) {
            $this->setPayer(\Nogrod\eBaySDK\Trading\UserIdentityType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payee');
        if (null !== $value) {
            $this->setPayee(\Nogrod\eBaySDK\Trading\UserIdentityType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentTime');
        if (null !== $value) {
            $this->setPaymentTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentAmount');
        if (null !== $value) {
            $this->setPaymentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferenceID');
        if (null !== $value) {
            $this->setReferenceID(\Nogrod\eBaySDK\Trading\TransactionReferenceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeOrCreditAmount');
        if (null !== $value) {
            $this->setFeeOrCreditAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentReferenceID', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentReferenceID(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\TransactionReferenceType::fromKeyValue($v);
            }, $value));
        }
    }
}
