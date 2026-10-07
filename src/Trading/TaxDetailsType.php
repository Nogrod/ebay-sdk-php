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
     *  corresponding tax type (see <b>Imposition</b> value), and includes taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>.
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b> + the tax on the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $taxAmount
     */
    private $taxAmount = null;

    /**
     * This value is the amount of sales tax applied based on the unit cost of the
     *  order line item for the corresponding imposition (tax type) and includes taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>.<span class="tablenote"><strong>Note:</strong> As part of EU Customs Reform (effective July 1, 2026), for orders shipped to EU member states, this field will also include EU customs fees.</span>
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
     *  corresponding tax type (see <b>Imposition</b> value), and includes taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>.
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b> + the tax on the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>
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
     *  corresponding tax type (see <b>Imposition</b> value), and includes taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>.
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b> + the tax on the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>
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
     *  order line item for the corresponding imposition (tax type) and includes taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>.<span class="tablenote"><strong>Note:</strong> As part of EU Customs Reform (effective July 1, 2026), for orders shipped to EU member states, this field will also include EU customs fees.</span>
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
     *  order line item for the corresponding imposition (tax type) and includes taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>.<span class="tablenote"><strong>Note:</strong> As part of EU Customs Reform (effective July 1, 2026), for orders shipped to EU member states, this field will also include EU customs fees.</span>
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->imposition;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Imposition', null, (string) $value);
        }
        $value = $this->taxDescription;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TaxDescription', null, (string) $value);
        }
        $value = $this->taxAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'TaxAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->taxOnSubtotalAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'TaxOnSubtotalAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->taxOnShippingAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'TaxOnShippingAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->taxOnHandlingAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'TaxOnHandlingAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->taxCode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TaxCode', null, (string) $value);
        }
        $value = $this->collectionMethod;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CollectionMethod', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TaxDetailsType
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
                case 'Imposition':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->imposition = $value;
                    }
                    return true;
                case 'TaxDescription':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->taxDescription = $value;
                    }
                    return true;
                case 'TaxAmount':
                    $this->taxAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'TaxOnSubtotalAmount':
                    $this->taxOnSubtotalAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'TaxOnShippingAmount':
                    $this->taxOnShippingAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'TaxOnHandlingAmount':
                    $this->taxOnHandlingAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'TaxCode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->taxCode = $value;
                    }
                    return true;
                case 'CollectionMethod':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->collectionMethod = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
