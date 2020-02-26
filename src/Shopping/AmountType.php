<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing AmountType
 *
 * Basic type for specifying monetary amounts. A double value (e.g.,
 *  1.00 or 1.0) is meaningful as a monetary amount when accompanied by a
 *  specification of the currency, in which case the value specifies
 *  the amount in that currency. An AmountType expresses both the value
 *  (a double) and the currency. Details such as prices, fees, costs,
 *  and payments are specified as amount types.
 * XSD Type: AmountType
 */
class AmountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * Three-digit ISO 4217 code representing the currency type being used.
     *
     * @var string $currencyID
     */
    private $currencyID = null;

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
     * Gets as currencyID
     *
     * Three-digit ISO 4217 code representing the currency type being used.
     *
     * @return string
     */
    public function getCurrencyID()
    {
        return $this->currencyID;
    }

    /**
     * Sets a new currencyID
     *
     * Three-digit ISO 4217 code representing the currency type being used.
     *
     * @param string $currencyID
     * @return self
     */
    public function setCurrencyID($currencyID)
    {
        $this->currencyID = $currencyID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getCurrencyID();
        if (null !== $value) {
            $writer->writeAttribute("currencyID", $value);
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
