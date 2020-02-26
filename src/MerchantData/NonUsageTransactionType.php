<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing NonUsageTransactionType
 *
 * Cost of insuring the delivery of this order with the courier.
 * XSD Type: NonUsageTransactionType
 */
class NonUsageTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The date time when the transaction occur.
     *
     * @var \DateTime $transactionTime
     */
    private $transactionTime = null;

    /**
     * The description for this transaction purpose etc.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Notes for this transaction.
     *
     * @var string $memo
     */
    private $memo = null;

    /**
     * Original charge time if this is an adjustment transaction.
     *
     * @var \DateTime $originalChargeTime
     */
    private $originalChargeTime = null;

    /**
     * Start time of the transaction.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * End time of the transaction.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Fee Amount for a certain Fee type.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $feeAmount
     */
    private $feeAmount = null;

    /**
     * Gets as transactionTime
     *
     * The date time when the transaction occur.
     *
     * @return \DateTime
     */
    public function getTransactionTime()
    {
        return $this->transactionTime;
    }

    /**
     * Sets a new transactionTime
     *
     * The date time when the transaction occur.
     *
     * @param \DateTime $transactionTime
     * @return self
     */
    public function setTransactionTime(\DateTime $transactionTime)
    {
        $this->transactionTime = $transactionTime;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description for this transaction purpose etc.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description for this transaction purpose etc.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as memo
     *
     * Notes for this transaction.
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets a new memo
     *
     * Notes for this transaction.
     *
     * @param string $memo
     * @return self
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Gets as originalChargeTime
     *
     * Original charge time if this is an adjustment transaction.
     *
     * @return \DateTime
     */
    public function getOriginalChargeTime()
    {
        return $this->originalChargeTime;
    }

    /**
     * Sets a new originalChargeTime
     *
     * Original charge time if this is an adjustment transaction.
     *
     * @param \DateTime $originalChargeTime
     * @return self
     */
    public function setOriginalChargeTime(\DateTime $originalChargeTime)
    {
        $this->originalChargeTime = $originalChargeTime;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * Start time of the transaction.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * Start time of the transaction.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * End time of the transaction.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * End time of the transaction.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * Fee Amount for a certain Fee type.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * Fee Amount for a certain Fee type.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $feeAmount
     * @return self
     */
    public function setFeeAmount(\Nogrod\eBaySDK\MerchantData\AmountType $feeAmount)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTransactionTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionTime", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getMemo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Memo", $value);
        }
        $value = $this->getOriginalChargeTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginalChargeTime", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getFeeAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeAmount", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionTime');
        if (null !== $value) {
            $this->setTransactionTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Memo');
        if (null !== $value) {
            $this->setMemo($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginalChargeTime');
        if (null !== $value) {
            $this->setOriginalChargeTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeAmount');
        if (null !== $value) {
            $this->setFeeAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
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
