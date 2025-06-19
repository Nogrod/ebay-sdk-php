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
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getCurrencyId();
        if (null !== $value) {
            $writer->writeAttribute("currencyId", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
    {
        $self = new self($keyValue);
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, 'value');
        if (null !== $value) {
            $this->value($value);
        }
        $value = Func::mapValue($keyValue, 'currencyId');
        if (null !== $value) {
            $this->setCurrencyId($value);
        }
    }
}
