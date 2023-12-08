<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     *  <br>
     *  <br>
     *  On January 31, 2022, the <b>Order.ShippingAddress.Street2</b> will stop being used to return VAT information regardless of WSDL version or compatibility level.
     *  </span>
     *  <br>
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayTaxReferenceValueType $eBayReference
     */
    private $eBayReference = null;

    /**
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or other fees like an electronic waste recycling fee.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TaxDetailsType[] $taxDetails
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
     *  <br>
     *  <br>
     *  On January 31, 2022, the <b>Order.ShippingAddress.Street2</b> will stop being used to return VAT information regardless of WSDL version or compatibility level.
     *  </span>
     *  <br>
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayTaxReferenceValueType
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
     *  <br>
     *  <br>
     *  On January 31, 2022, the <b>Order.ShippingAddress.Street2</b> will stop being used to return VAT information regardless of WSDL version or compatibility level.
     *  </span>
     *  <br>
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayTaxReferenceValueType $eBayReference
     * @return self
     */
    public function setEBayReference(\Nogrod\eBaySDK\MerchantData\EBayTaxReferenceValueType $eBayReference)
    {
        $this->eBayReference = $eBayReference;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or other fees like an electronic waste recycling fee.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or other fees like an electronic waste recycling fee.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType $totalTaxAmount)
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
     * @param \Nogrod\eBaySDK\MerchantData\TaxDetailsType $taxDetails
     */
    public function addToTaxDetails(\Nogrod\eBaySDK\MerchantData\TaxDetailsType $taxDetails)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\TaxDetailsType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\TaxDetailsType[] $taxDetails
     * @return self
     */
    public function setTaxDetails(array $taxDetails)
    {
        $this->taxDetails = $taxDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEBayReference();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayReference", $value);
        }
        $value = $this->getTotalTaxAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalTaxAmount", $value);
        }
        $value = $this->getTaxDetails();
        if (null !== $value && !empty($this->getTaxDetails())) {
            $writer->write(array_map(function ($v) {return ["TaxDetails" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayReference');
        if (null !== $value) {
            $this->setEBayReference(\Nogrod\eBaySDK\MerchantData\EBayTaxReferenceValueType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalTaxAmount');
        if (null !== $value) {
            $this->setTotalTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setTaxDetails(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\TaxDetailsType::fromKeyValue($v);}, $value));
        }
    }
}
