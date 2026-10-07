<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AmountType
 *
 * An eBay-defined complex type for specifying monetary amounts.
 *  <br><br>
 *  A double value (e.g., 1.00 or 1.0) is meaningful as a monetary amount when accompanied by a specification of the currency, in which case the value specifies the amount in that currency. An <b>AmountType</b> expresses both the value (a double) and the currency.
 *  <br><br>
 *  The <b>AmountType</b> data type is typically used to specify details such as prices, fees, costs, and payments. In some cases, a whole number (i.e., without a period) can be passed or returned as a monetary value. This is necessary to support certain currencies that are only expressed as whole numbers.
 *  <br><br>
 *  Because a double is used to represent the amount, this also means whole monetary amounts may be returned with only one 0 after the decimal. For example, a dollar value could be returned as 1.0 instead of 1.00 in calls like <b>AddItem</b>.
 * XSD Type: AmountType
 */
class AmountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * Three-digit code representing the currency type being used. <br>
     *  <br>
     *  In <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls, the currency can be specified in
     *  the <b>Item.Currency</b> field in requests instead.
     *  If you do specify this attribute in <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls,
     *  the value must match the site currency (i.e., it must be the same
     *  as the value in <b>Item.Currency</b>) unless otherwise stated.<br>
     *  <br>
     *  In <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls, listing fees are returned in the
     *  currency of the user's registration site.
     *  For example, a user who is registered on the eBay US site always
     *  sees their fees returned in USD, even when their listing request
     *  is sent to another site, such as eBay UK or eBay Germany.
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
     * Three-digit code representing the currency type being used. <br>
     *  <br>
     *  In <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls, the currency can be specified in
     *  the <b>Item.Currency</b> field in requests instead.
     *  If you do specify this attribute in <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls,
     *  the value must match the site currency (i.e., it must be the same
     *  as the value in <b>Item.Currency</b>) unless otherwise stated.<br>
     *  <br>
     *  In <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls, listing fees are returned in the
     *  currency of the user's registration site.
     *  For example, a user who is registered on the eBay US site always
     *  sees their fees returned in USD, even when their listing request
     *  is sent to another site, such as eBay UK or eBay Germany.
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
     * Three-digit code representing the currency type being used. <br>
     *  <br>
     *  In <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls, the currency can be specified in
     *  the <b>Item.Currency</b> field in requests instead.
     *  If you do specify this attribute in <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls,
     *  the value must match the site currency (i.e., it must be the same
     *  as the value in <b>Item.Currency</b>) unless otherwise stated.<br>
     *  <br>
     *  In <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls, listing fees are returned in the
     *  currency of the user's registration site.
     *  For example, a user who is registered on the eBay US site always
     *  sees their fees returned in USD, even when their listing request
     *  is sent to another site, such as eBay UK or eBay Germany.
     *
     * @param string $currencyID
     * @return self
     */
    public function setCurrencyID($currencyID)
    {
        $this->currencyID = $currencyID;
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
        $value = $this->currencyID;
        if (null !== $value) {
            $writer->writeAttribute('currencyID', (string) $value);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AmountType
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
            case 'currencyID':
                $this->currencyID = $reader->value;
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
