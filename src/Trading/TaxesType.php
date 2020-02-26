<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing TaxesType
 *
 * Type defining the Taxes container, which contains detailed sales tax information for an
 *  order line item. The Taxes container is only returned if the seller is using the Vertex-
 *  based Premium Sales Tax Engine solution. The information in this container
 *  supercedes/overrides the sales tax information in the ShippingDetails.SalesTax container.
 * XSD Type: TaxesType
 */
class TaxesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or other fees like an electronic waste recycling fee.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes</b> and <b>Taxes</b> containers), the order is subject to 'eBay Collect and Remit' tax, and a change in logic has rolled out as of early November 2019. For orders that are subject to eBay 'Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * Container consisting of detailed sales tax information for an order line item,
     *  including the tax type and description, sales tax on the item cost, and sales tax
     *  related to shipping and handling.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxDetailsType[] $taxDetails
     */
    private $taxDetails = [
        
    ];

    /**
     * Gets as totalTaxAmount
     *
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or other fees like an electronic waste recycling fee.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes</b> and <b>Taxes</b> containers), the order is subject to 'eBay Collect and Remit' tax, and a change in logic has rolled out as of early November 2019. For orders that are subject to eBay 'Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
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
     * This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or other fees like an electronic waste recycling fee.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes</b> and <b>Taxes</b> containers), the order is subject to 'eBay Collect and Remit' tax, and a change in logic has rolled out as of early November 2019. For orders that are subject to eBay 'Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
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
     * Container consisting of detailed sales tax information for an order line item,
     *  including the tax type and description, sales tax on the item cost, and sales tax
     *  related to shipping and handling.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxDetailsType $taxDetails
     */
    public function addToTaxDetails(\Nogrod\eBaySDK\Trading\TaxDetailsType $taxDetails)
    {
        $this->taxDetails[] = $taxDetails;
        return $this;
    }

    /**
     * isset taxDetails
     *
     * Container consisting of detailed sales tax information for an order line item,
     *  including the tax type and description, sales tax on the item cost, and sales tax
     *  related to shipping and handling.
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
     * Container consisting of detailed sales tax information for an order line item,
     *  including the tax type and description, sales tax on the item cost, and sales tax
     *  related to shipping and handling.
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
     * Container consisting of detailed sales tax information for an order line item,
     *  including the tax type and description, sales tax on the item cost, and sales tax
     *  related to shipping and handling.
     *
     * @return \Nogrod\eBaySDK\Trading\TaxDetailsType[]
     */
    public function getTaxDetails()
    {
        return $this->taxDetails;
    }

    /**
     * Sets a new taxDetails
     *
     * Container consisting of detailed sales tax information for an order line item,
     *  including the tax type and description, sales tax on the item cost, and sales tax
     *  related to shipping and handling.
     *
     * @param \Nogrod\eBaySDK\Trading\TaxDetailsType[] $taxDetails
     * @return self
     */
    public function setTaxDetails(array $taxDetails)
    {
        $this->taxDetails = $taxDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalTaxAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalTaxAmount", $value);
        }
        $value = $this->getTaxDetails();
        if (null !== $value && !empty($this->getTaxDetails())) {
            $writer->write(array_map(function ($v) {
                return ["TaxDetails" => $v];
            }, $value));
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalTaxAmount');
        if (null !== $value) {
            $this->setTotalTaxAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setTaxDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\TaxDetailsType::fromKeyValue($v);
            }, $value));
        }
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
