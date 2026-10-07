<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiscountType
 *
 * The type is used to indicate the discount type and amount applied to an account entry.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note: </b>
 *  The discount amount will only be shown if the corresponding fee was deducted from a seller payout.
 *  </span>
 * XSD Type: DiscountType
 */
class DiscountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The value in this field indicates the type of discount applied to the corresponding account entry.
     *
     * @var string $discountType
     */
    private $discountType = null;

    /**
     * The amount of the discount in the currency indicated in the <b>currencyID</b> attribute.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amount
     */
    private $amount = null;

    /**
     * Gets as discountType
     *
     * The value in this field indicates the type of discount applied to the corresponding account entry.
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * Sets a new discountType
     *
     * The value in this field indicates the type of discount applied to the corresponding account entry.
     *
     * @param string $discountType
     * @return self
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The amount of the discount in the currency indicated in the <b>currencyID</b> attribute.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The amount of the discount in the currency indicated in the <b>currencyID</b> attribute.<br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $amount
     * @return self
     */
    public function setAmount(\Nogrod\eBaySDK\Trading\AmountType $amount)
    {
        $this->amount = $amount;
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
        $value = $this->discountType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DiscountType', null, (string) $value);
        }
        $value = $this->amount;
        if (null !== $value) {
            $writer->startElementNs(null, 'Amount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DiscountType
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
                case 'DiscountType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->discountType = $value;
                    }
                    return true;
                case 'Amount':
                    $this->amount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
