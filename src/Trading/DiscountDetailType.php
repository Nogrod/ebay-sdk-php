<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiscountDetailType
 *
 * This type is used by the <b>DiscountDetail</b> container, which is returned if a discount is applicable to an account entry.
 * XSD Type: DiscountDetailType
 */
class DiscountDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\DiscountType[] $discount
     */
    private $discount = [

    ];

    /**
     * Adds as discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DiscountType $discount
     */
    public function addToDiscount(\Nogrod\eBaySDK\Trading\DiscountType $discount)
    {
        if (!is_array($this->discount)) {
            throw new \LogicException('discount is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * isset discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\DiscountType>
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\DiscountType> $discount
     * @return self
     */
    public function setDiscount(iterable $discount)
    {
        $this->discount = $discount;
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
        $value = $this->discount;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Discount', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DiscountDetailType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->discount = [];
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
                case 'Discount':
                    $this->discount[] = \Nogrod\eBaySDK\Trading\DiscountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
