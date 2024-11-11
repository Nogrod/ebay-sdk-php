<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SalesTaxType
 *
 * This type is used to express sales tax details for the shipping destination. Sales tax information is only returned in <b>GetShippingCosts</b> (through <b>ShippingDetails.SalesTax</b> container) if sales tax is applicable to the shipping destination.
 * XSD Type: SalesTaxType
 */
class SalesTaxType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Percent of an item's price to be charged as the sales tax for the transaction. The sales tax percentage value is stored with a precision of three digits after the decimal point (##.###).
     *
     * @var float $salesTaxPercent
     */
    private $salesTaxPercent = null;

    /**
     * State or jurisdiction for which the sales tax is applicable.
     *  Only returned if the seller specified a value. This should be the same value that is passed into the <b>DestinationPostalCode</b> in the call request.
     *
     * @var string $salesTaxState
     */
    private $salesTaxState = null;

    /**
     * This field is returned as <code>true</code> if shipping costs (in addition to item cost) are considered when calculating the sales tax amount. Shipping costs can only be taxed for US listings.
     *
     * @var bool $shippingIncludedInTax
     */
    private $shippingIncludedInTax = null;

    /**
     * This is the expected tax amount based on the item cost (and shipping costs if <b>ShippingIncludedInTax</b> is <code>true</code>), the sales tax percentage, and the shipping destination.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $salesTaxAmount
     */
    private $salesTaxAmount = null;

    /**
     * Gets as salesTaxPercent
     *
     * Percent of an item's price to be charged as the sales tax for the transaction. The sales tax percentage value is stored with a precision of three digits after the decimal point (##.###).
     *
     * @return float
     */
    public function getSalesTaxPercent()
    {
        return $this->salesTaxPercent;
    }

    /**
     * Sets a new salesTaxPercent
     *
     * Percent of an item's price to be charged as the sales tax for the transaction. The sales tax percentage value is stored with a precision of three digits after the decimal point (##.###).
     *
     * @param float $salesTaxPercent
     * @return self
     */
    public function setSalesTaxPercent($salesTaxPercent)
    {
        $this->salesTaxPercent = $salesTaxPercent;
        return $this;
    }

    /**
     * Gets as salesTaxState
     *
     * State or jurisdiction for which the sales tax is applicable.
     *  Only returned if the seller specified a value. This should be the same value that is passed into the <b>DestinationPostalCode</b> in the call request.
     *
     * @return string
     */
    public function getSalesTaxState()
    {
        return $this->salesTaxState;
    }

    /**
     * Sets a new salesTaxState
     *
     * State or jurisdiction for which the sales tax is applicable.
     *  Only returned if the seller specified a value. This should be the same value that is passed into the <b>DestinationPostalCode</b> in the call request.
     *
     * @param string $salesTaxState
     * @return self
     */
    public function setSalesTaxState($salesTaxState)
    {
        $this->salesTaxState = $salesTaxState;
        return $this;
    }

    /**
     * Gets as shippingIncludedInTax
     *
     * This field is returned as <code>true</code> if shipping costs (in addition to item cost) are considered when calculating the sales tax amount. Shipping costs can only be taxed for US listings.
     *
     * @return bool
     */
    public function getShippingIncludedInTax()
    {
        return $this->shippingIncludedInTax;
    }

    /**
     * Sets a new shippingIncludedInTax
     *
     * This field is returned as <code>true</code> if shipping costs (in addition to item cost) are considered when calculating the sales tax amount. Shipping costs can only be taxed for US listings.
     *
     * @param bool $shippingIncludedInTax
     * @return self
     */
    public function setShippingIncludedInTax($shippingIncludedInTax)
    {
        $this->shippingIncludedInTax = $shippingIncludedInTax;
        return $this;
    }

    /**
     * Gets as salesTaxAmount
     *
     * This is the expected tax amount based on the item cost (and shipping costs if <b>ShippingIncludedInTax</b> is <code>true</code>), the sales tax percentage, and the shipping destination.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getSalesTaxAmount()
    {
        return $this->salesTaxAmount;
    }

    /**
     * Sets a new salesTaxAmount
     *
     * This is the expected tax amount based on the item cost (and shipping costs if <b>ShippingIncludedInTax</b> is <code>true</code>), the sales tax percentage, and the shipping destination.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $salesTaxAmount
     * @return self
     */
    public function setSalesTaxAmount(\Nogrod\eBaySDK\Shopping\AmountType $salesTaxAmount)
    {
        $this->salesTaxAmount = $salesTaxAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSalesTaxPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTaxPercent", $value);
        }
        $value = $this->getSalesTaxState();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTaxState", $value);
        }
        $value = $this->getShippingIncludedInTax();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingIncludedInTax", $value);
        }
        $value = $this->getSalesTaxAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTaxAmount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTaxPercent');
        if (null !== $value) {
            $this->setSalesTaxPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTaxState');
        if (null !== $value) {
            $this->setSalesTaxState($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingIncludedInTax');
        if (null !== $value) {
            $this->setShippingIncludedInTax(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTaxAmount');
        if (null !== $value) {
            $this->setSalesTaxAmount(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
    }
}
