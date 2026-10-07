<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxesType
 *
 * Type defining the <b>Taxes</b> container, which contains detailed tax information (sales tax and VAT) for an order line item. The information in this container supercedes/overrides the sales tax information in the <b>ShippingDetails.SalesTax</b> container.
 * XSD Type: TaxesType
 */
class TaxesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The value returned in this field is the VAT ID for eBay, and this value may vary based on the region or country. The <b>eBayReference</b> field's <b>name</b> attribute will show the type of VAT ID, such as <code>IOSS</code>, <code>OSS</code>, or <code>ABN</code>. This field will be returned if VAT tax is applicable for the order. See the <a href="types/eBayTaxReferenceValue.html">eBayTaxReferenceValue</a> type page for more information on the VAT tax type strings that may appear for the <b>name</b> attribute.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For all VAT ID/VATIN values to be returned (except for France), developers will need to use a Trading WSDL with a version number of 1211 (or newer). For French VAT ID/VATIN values to be returned, developers will need to use a Trading WSDL with a version number of 1225 (or newer). Otherwise, the VAT information will be returned in the <b>Order.ShippingAddress.Street2</b> field. Developers will also have the option of using older version, but setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> header value to 1211 or 1225 or higher.
     *  </span>
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\EBayTaxReferenceValueType $eBayReference
     */
    private $eBayReference = null;

    /**
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>, or other fees like an electronic waste recycling fee.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxDetailsType[] $taxDetails
     */
    private $taxDetails = [

    ];

    /**
     * Gets as eBayReference
     *
     * The value returned in this field is the VAT ID for eBay, and this value may vary based on the region or country. The <b>eBayReference</b> field's <b>name</b> attribute will show the type of VAT ID, such as <code>IOSS</code>, <code>OSS</code>, or <code>ABN</code>. This field will be returned if VAT tax is applicable for the order. See the <a href="types/eBayTaxReferenceValue.html">eBayTaxReferenceValue</a> type page for more information on the VAT tax type strings that may appear for the <b>name</b> attribute.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For all VAT ID/VATIN values to be returned (except for France), developers will need to use a Trading WSDL with a version number of 1211 (or newer). For French VAT ID/VATIN values to be returned, developers will need to use a Trading WSDL with a version number of 1225 (or newer). Otherwise, the VAT information will be returned in the <b>Order.ShippingAddress.Street2</b> field. Developers will also have the option of using older version, but setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> header value to 1211 or 1225 or higher.
     *  </span>
     *  <br>
     *
     * @return \Nogrod\eBaySDK\Trading\EBayTaxReferenceValueType
     */
    public function getEBayReference()
    {
        return $this->eBayReference;
    }

    /**
     * Sets a new eBayReference
     *
     * The value returned in this field is the VAT ID for eBay, and this value may vary based on the region or country. The <b>eBayReference</b> field's <b>name</b> attribute will show the type of VAT ID, such as <code>IOSS</code>, <code>OSS</code>, or <code>ABN</code>. This field will be returned if VAT tax is applicable for the order. See the <a href="types/eBayTaxReferenceValue.html">eBayTaxReferenceValue</a> type page for more information on the VAT tax type strings that may appear for the <b>name</b> attribute.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For all VAT ID/VATIN values to be returned (except for France), developers will need to use a Trading WSDL with a version number of 1211 (or newer). For French VAT ID/VATIN values to be returned, developers will need to use a Trading WSDL with a version number of 1225 (or newer). Otherwise, the VAT information will be returned in the <b>Order.ShippingAddress.Street2</b> field. Developers will also have the option of using older version, but setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> header value to 1211 or 1225 or higher.
     *  </span>
     *  <br>
     *
     * @param \Nogrod\eBaySDK\Trading\EBayTaxReferenceValueType $eBayReference
     * @return self
     */
    public function setEBayReference(\Nogrod\eBaySDK\Trading\EBayTaxReferenceValueType $eBayReference)
    {
        $this->eBayReference = $eBayReference;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>, or other fees like an electronic waste recycling fee.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), taxes that are applied against the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fee</a>, or other fees like an electronic waste recycling fee.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(\Nogrod\eBaySDK\Trading\AmountType $totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Adds as taxDetails
     *
     * Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxDetailsType $taxDetails
     */
    public function addToTaxDetails(\Nogrod\eBaySDK\Trading\TaxDetailsType $taxDetails)
    {
        if (!is_array($this->taxDetails)) {
            throw new \LogicException('taxDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->taxDetails[] = $taxDetails;
        return $this;
    }

    /**
     * isset taxDetails
     *
     * Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxDetails($index)
    {
        return isset($this->taxDetails[$index]);
    }

    /**
     * unset taxDetails
     *
     * Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxDetails($index)
    {
        unset($this->taxDetails[$index]);
    }

    /**
     * Gets as taxDetails
     *
     * Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\TaxDetailsType>
     */
    public function getTaxDetails()
    {
        return $this->taxDetails;
    }

    /**
     * Sets a new taxDetails
     *
     * Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\TaxDetailsType> $taxDetails
     * @return self
     */
    public function setTaxDetails(iterable $taxDetails)
    {
        $this->taxDetails = $taxDetails;
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
        $value = $this->eBayReference;
        if (null !== $value) {
            $writer->startElementNs(null, 'eBayReference', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->totalTaxAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalTaxAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->taxDetails;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'TaxDetails', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TaxesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->taxDetails = [];
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
                case 'eBayReference':
                    $this->eBayReference = \Nogrod\eBaySDK\Trading\EBayTaxReferenceValueType::xmlRead($reader);
                    return true;
                case 'TotalTaxAmount':
                    $this->totalTaxAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'TaxDetails':
                    $this->taxDetails[] = \Nogrod\eBaySDK\Trading\TaxDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
