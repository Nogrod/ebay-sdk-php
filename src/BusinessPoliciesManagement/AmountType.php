<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AmountType
 *
 * Monetary amount. This type is used in several locations in payment policies and return policies.
 * XSD Type: Amount
 */
class AmountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * This attribute identifies the currency in which the monetary amount is specified. For a full list of 3-digit ISO 4217 currency codes, see the Trading API's <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/CurrencyCodeType.html" target="_blank">CurrencyCodeType</a>.
     *
     * @var string $currencyId
     */
    private $currencyId = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as currencyId
     *
     * This attribute identifies the currency in which the monetary amount is specified. For a full list of 3-digit ISO 4217 currency codes, see the Trading API's <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/CurrencyCodeType.html" target="_blank">CurrencyCodeType</a>.
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Sets a new currencyId
     *
     * This attribute identifies the currency in which the monetary amount is specified. For a full list of 3-digit ISO 4217 currency codes, see the Trading API's <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/CurrencyCodeType.html" target="_blank">CurrencyCodeType</a>.
     *
     * @param string $currencyId
     * @return self
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->currencyId;
        if (null !== $value) {
            $writer->writeAttribute('currencyId', (string) $value);
        }
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->__value;
        if (null !== $value) {
            $writer->text((string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
    {
        $self = new self(null);
        $self->xmlInitLists();
        $value = Func::readValue($reader, $self);
        if ('' !== $value) {
            $self->value((float) $value);
        }
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
        switch ($reader->localName) {
            case 'currencyId':
                $this->currencyId = $reader->value;
                return true;
        }
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        return false;
    }
}
