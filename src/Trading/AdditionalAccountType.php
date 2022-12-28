<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AdditionalAccountType
 *
 * Contains the data for one additional account. An additional account is
 *  created when the user has an active account and changes country of
 *  registry (i.e., registers with the eBay site for the new country). A
 *  new account is created and the old account becomes inactive as an
 *  additional account. A user who never changes country of residency while
 *  having an account will never have any additional accounts.
 * XSD Type: AdditionalAccountType
 */
class AdditionalAccountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the current balance of the additional account.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $balance
     */
    private $balance = null;

    /**
     * Indicates the currency in which monetary amounts for the additional account
     *  are expressed.
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Indicates the unique identifier for the additional account (the account ID).
     *
     * @var string $accountCode
     */
    private $accountCode = null;

    /**
     * Gets as balance
     *
     * Indicates the current balance of the additional account.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Sets a new balance
     *
     * Indicates the current balance of the additional account.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $balance
     * @return self
     */
    public function setBalance(\Nogrod\eBaySDK\Trading\AmountType $balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Gets as currency
     *
     * Indicates the currency in which monetary amounts for the additional account
     *  are expressed.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Indicates the currency in which monetary amounts for the additional account
     *  are expressed.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as accountCode
     *
     * Indicates the unique identifier for the additional account (the account ID).
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * Sets a new accountCode
     *
     * Indicates the unique identifier for the additional account (the account ID).
     *
     * @param string $accountCode
     * @return self
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBalance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Balance", $value);
        }
        $value = $this->getCurrency();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Currency", $value);
        }
        $value = $this->getAccountCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AccountCode", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Balance');
        if (null !== $value) {
            $this->setBalance(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Currency');
        if (null !== $value) {
            $this->setCurrency($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountCode');
        if (null !== $value) {
            $this->setAccountCode($value);
        }
    }
}
