<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing AmountType
 *
 * Monetary amount.
 * XSD Type: Amount
 */
class AmountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * Currency in which the monetary amount is specified.
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
     * Currency in which the monetary amount is specified.
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
     * Currency in which the monetary amount is specified.
     *
     * @param string $currencyId
     * @return self
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getCurrencyId();
        if (null !== $value) {
            $writer->writeAttribute("currencyId", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self($keyValue);
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
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
