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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDiscountType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountType", $value);
        }
        $value = $this->getAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Amount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountType');
        if (null !== $value) {
            $this->setDiscountType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Amount');
        if (null !== $value) {
            $this->setAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
