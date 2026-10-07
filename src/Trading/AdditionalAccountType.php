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
class AdditionalAccountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->balance;
        if (null !== $value) {
            $writer->startElementNs(null, 'Balance', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->currency;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Currency', null, (string) $value);
        }
        $value = $this->accountCode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AccountCode', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AdditionalAccountType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'Balance':
                    $this->balance = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'Currency':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->currency = $value;
                    }
                    return true;
                case 'AccountCode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->accountCode = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Balance'] = $this->balance;
        $data['Currency'] = $this->currency;
        $data['AccountCode'] = $this->accountCode;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
