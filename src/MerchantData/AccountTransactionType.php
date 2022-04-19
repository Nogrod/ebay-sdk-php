<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AccountTransactionType
 *
 * Cost of insuring the delivery of this order with the courier.
 * XSD Type: AccountTransactionType
 */
class AccountTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Description of the fee type.
     *
     * @var string $feeDescription
     */
    private $feeDescription = null;

    /**
     * List of transactions for a certain fee type.
     *
     * @var \Nogrod\eBaySDK\MerchantData\NonUsageTransactionType[] $transaction
     */
    private $transaction = [

    ];

    /**
     * Gets as feeDescription
     *
     * Description of the fee type.
     *
     * @return string
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * Description of the fee type.
     *
     * @param string $feeDescription
     * @return self
     */
    public function setFeeDescription($feeDescription)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Adds as transaction
     *
     * List of transactions for a certain fee type.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NonUsageTransactionType $transaction
     */
    public function addToTransaction(\Nogrod\eBaySDK\MerchantData\NonUsageTransactionType $transaction)
    {
        $this->transaction[] = $transaction;
        return $this;
    }

    /**
     * isset transaction
     *
     * List of transactions for a certain fee type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransaction($index)
    {
        return isset($this->transaction[$index]);
    }

    /**
     * unset transaction
     *
     * List of transactions for a certain fee type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransaction($index)
    {
        unset($this->transaction[$index]);
    }

    /**
     * Gets as transaction
     *
     * List of transactions for a certain fee type.
     *
     * @return \Nogrod\eBaySDK\MerchantData\NonUsageTransactionType[]
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * List of transactions for a certain fee type.
     *
     * @param \Nogrod\eBaySDK\MerchantData\NonUsageTransactionType[] $transaction
     * @return self
     */
    public function setTransaction(array $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFeeDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeDescription", $value);
        }
        $value = $this->getTransaction();
        if (null !== $value && !empty($this->getTransaction())) {
            $writer->write(array_map(function ($v) {
                return ["Transaction" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeDescription');
        if (null !== $value) {
            $this->setFeeDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Transaction', true);
        if (null !== $value && !empty($value)) {
            $this->setTransaction(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\NonUsageTransactionType::fromKeyValue($v);
            }, $value));
        }
    }
}
