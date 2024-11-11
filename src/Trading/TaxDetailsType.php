<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxDetailsType
 *
 * Type used by the <b>TaxDetails</b> container, which consists of detailed tax information for an order line item, including the tax type and description, tax on the item cost, and tax related to shipping and handling. The information in this container supercedes/overrides the sales tax information in the <b>ShippingDetails.SalesTax</b> container (if returned).
 *  <br><br>
 *  A separate <b>TaxDetails</b> container will be returned for each type of tax that applied to an order line item. For tax that is subject to 'eBay collect and remit', such as US sales tax or 'Goods and Services tax' for Australia or New Zealand, the <b>TaxDetails</b> container will be returned under the <b>eBayCollectAndRemitTaxes</b> container. For all other tax, the tax details will be returned under the <b>Taxes</b> container.
 * XSD Type: TaxDetailsType
 */
class TaxDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field indicates the tax type. A separate <b>TaxDetails</b> container is returned for each unique imposition (tax type).
     *
     * @var string $imposition
     */
    private $imposition = null;

    /**
     * This enumeration value indicates the type of tax charged against the item.
     *
     * @var string $taxDescription
     */
    private $taxDescription = null;

    /**
     * This value is the total amount of tax charges for the order line item for the
     *  corresponding tax type (see <b>Imposition</b> value).
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $taxAmount
     */
    private $taxAmount = null;

    /**
     * This value is the amount of sales tax applied based on the unit cost of the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $taxOnSubtotalAmount
     */
    private $taxOnSubtotalAmount = null;

    /**
     * This value is the amount of sales tax applied based on shipping costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $taxOnShippingAmount
     */
    private $taxOnShippingAmount = null;

    /**
     * This value is the amount of sales tax applied based on handling costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $taxOnHandlingAmount
     */
    private $taxOnHandlingAmount = null;

    /**
     * This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     *
     * @var string $taxCode
     */
    private $taxCode = null;

    /**
     * This field indicates the collection method used to collect the 'eBay Collect and Remit' or 'Good and Services' tax for the order. This field is always returned for orders subject to 'Collect and Remit' or 'Good and Services' tax, and its value is always <code>NET</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for all orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.
     *  </span>
     *
     * @var string $collectionMethod
     */
    private $collectionMethod = null;

    /**
     * Gets as imposition
     *
     * This field indicates the tax type. A separate <b>TaxDetails</b> container is returned for each unique imposition (tax type).
     *
     * @return string
     */
    public function getImposition()
    {
        return $this->imposition;
    }

    /**
     * Sets a new imposition
     *
     * This field indicates the tax type. A separate <b>TaxDetails</b> container is returned for each unique imposition (tax type).
     *
     * @param string $imposition
     * @return self
     */
    public function setImposition($imposition)
    {
        $this->imposition = $imposition;
        return $this;
    }

    /**
     * Gets as taxDescription
     *
     * This enumeration value indicates the type of tax charged against the item.
     *
     * @return string
     */
    public function getTaxDescription()
    {
        return $this->taxDescription;
    }

    /**
     * Sets a new taxDescription
     *
     * This enumeration value indicates the type of tax charged against the item.
     *
     * @param string $taxDescription
     * @return self
     */
    public function setTaxDescription($taxDescription)
    {
        $this->taxDescription = $taxDescription;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * This value is the total amount of tax charges for the order line item for the
     *  corresponding tax type (see <b>Imposition</b> value).
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * This value is the total amount of tax charges for the order line item for the
     *  corresponding tax type (see <b>Imposition</b> value).
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $taxAmount
     * @return self
     */
    public function setTaxAmount(\Nogrod\eBaySDK\Trading\AmountType $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as taxOnSubtotalAmount
     *
     * This value is the amount of sales tax applied based on the unit cost of the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTaxOnSubtotalAmount()
    {
        return $this->taxOnSubtotalAmount;
    }

    /**
     * Sets a new taxOnSubtotalAmount
     *
     * This value is the amount of sales tax applied based on the unit cost of the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $taxOnSubtotalAmount
     * @return self
     */
    public function setTaxOnSubtotalAmount(\Nogrod\eBaySDK\Trading\AmountType $taxOnSubtotalAmount)
    {
        $this->taxOnSubtotalAmount = $taxOnSubtotalAmount;
        return $this;
    }

    /**
     * Gets as taxOnShippingAmount
     *
     * This value is the amount of sales tax applied based on shipping costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTaxOnShippingAmount()
    {
        return $this->taxOnShippingAmount;
    }

    /**
     * Sets a new taxOnShippingAmount
     *
     * This value is the amount of sales tax applied based on shipping costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $taxOnShippingAmount
     * @return self
     */
    public function setTaxOnShippingAmount(\Nogrod\eBaySDK\Trading\AmountType $taxOnShippingAmount)
    {
        $this->taxOnShippingAmount = $taxOnShippingAmount;
        return $this;
    }

    /**
     * Gets as taxOnHandlingAmount
     *
     * This value is the amount of sales tax applied based on handling costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTaxOnHandlingAmount()
    {
        return $this->taxOnHandlingAmount;
    }

    /**
     * Sets a new taxOnHandlingAmount
     *
     * This value is the amount of sales tax applied based on handling costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $taxOnHandlingAmount
     * @return self
     */
    public function setTaxOnHandlingAmount(\Nogrod\eBaySDK\Trading\AmountType $taxOnHandlingAmount)
    {
        $this->taxOnHandlingAmount = $taxOnHandlingAmount;
        return $this;
    }

    /**
     * Gets as taxCode
     *
     * This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * Sets a new taxCode
     *
     * This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     *
     * @param string $taxCode
     * @return self
     */
    public function setTaxCode($taxCode)
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Gets as collectionMethod
     *
     * This field indicates the collection method used to collect the 'eBay Collect and Remit' or 'Good and Services' tax for the order. This field is always returned for orders subject to 'Collect and Remit' or 'Good and Services' tax, and its value is always <code>NET</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for all orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.
     *  </span>
     *
     * @return string
     */
    public function getCollectionMethod()
    {
        return $this->collectionMethod;
    }

    /**
     * Sets a new collectionMethod
     *
     * This field indicates the collection method used to collect the 'eBay Collect and Remit' or 'Good and Services' tax for the order. This field is always returned for orders subject to 'Collect and Remit' or 'Good and Services' tax, and its value is always <code>NET</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for all orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.
     *  </span>
     *
     * @param string $collectionMethod
     * @return self
     */
    public function setCollectionMethod($collectionMethod)
    {
        $this->collectionMethod = $collectionMethod;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getImposition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Imposition", $value);
        }
        $value = $this->getTaxDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxDescription", $value);
        }
        $value = $this->getTaxAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxAmount", $value);
        }
        $value = $this->getTaxOnSubtotalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxOnSubtotalAmount", $value);
        }
        $value = $this->getTaxOnShippingAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxOnShippingAmount", $value);
        }
        $value = $this->getTaxOnHandlingAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxOnHandlingAmount", $value);
        }
        $value = $this->getTaxCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxCode", $value);
        }
        $value = $this->getCollectionMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CollectionMethod", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Imposition');
        if (null !== $value) {
            $this->setImposition($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxDescription');
        if (null !== $value) {
            $this->setTaxDescription($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxAmount');
        if (null !== $value) {
            $this->setTaxAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxOnSubtotalAmount');
        if (null !== $value) {
            $this->setTaxOnSubtotalAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxOnShippingAmount');
        if (null !== $value) {
            $this->setTaxOnShippingAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxOnHandlingAmount');
        if (null !== $value) {
            $this->setTaxOnHandlingAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxCode');
        if (null !== $value) {
            $this->setTaxCode($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CollectionMethod');
        if (null !== $value) {
            $this->setCollectionMethod($value);
        }
    }
}
