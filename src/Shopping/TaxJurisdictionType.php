<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxJurisdictionType
 *
 * Type used by each <b>TaxJurisdiction</b> container that is returned in the <b>GetShippingCosts</b> response. A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request).
 * XSD Type: TaxJurisdictionType
 */
class TaxJurisdictionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier of the sales tax jurisdiction (typically, a state or province). In the US, the two-digit acronyms for the states are used (such as 'CA' for California).
     *
     * @var string $jurisdictionID
     */
    private $jurisdictionID = null;

    /**
     * The sales tax percentage that will be applied to orders shipped to this
     *  jurisdiction. Sellers define sales tax rates for different tax jurisdictions using the <b>Sales Tax Table </b> UI in My eBay. The sales tax percent value supports a precision of
     *  3 digits after the decimal point (##.###).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @var float $salesTaxPercent
     */
    private $salesTaxPercent = null;

    /**
     * This boolean field indicates whether or not shipping costs are to be part of the base order amount that is taxed. This value is 'false' by default, and the seller will have to mark this setting to 'true' in the <b>Sales Tax Table </b> UI in My eBay.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @var bool $shippingIncludedInTax
     */
    private $shippingIncludedInTax = null;

    /**
     * Gets as jurisdictionID
     *
     * Unique identifier of the sales tax jurisdiction (typically, a state or province). In the US, the two-digit acronyms for the states are used (such as 'CA' for California).
     *
     * @return string
     */
    public function getJurisdictionID()
    {
        return $this->jurisdictionID;
    }

    /**
     * Sets a new jurisdictionID
     *
     * Unique identifier of the sales tax jurisdiction (typically, a state or province). In the US, the two-digit acronyms for the states are used (such as 'CA' for California).
     *
     * @param string $jurisdictionID
     * @return self
     */
    public function setJurisdictionID($jurisdictionID)
    {
        $this->jurisdictionID = $jurisdictionID;
        return $this;
    }

    /**
     * Gets as salesTaxPercent
     *
     * The sales tax percentage that will be applied to orders shipped to this
     *  jurisdiction. Sellers define sales tax rates for different tax jurisdictions using the <b>Sales Tax Table </b> UI in My eBay. The sales tax percent value supports a precision of
     *  3 digits after the decimal point (##.###).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
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
     * The sales tax percentage that will be applied to orders shipped to this
     *  jurisdiction. Sellers define sales tax rates for different tax jurisdictions using the <b>Sales Tax Table </b> UI in My eBay. The sales tax percent value supports a precision of
     *  3 digits after the decimal point (##.###).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
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
     * Gets as shippingIncludedInTax
     *
     * This boolean field indicates whether or not shipping costs are to be part of the base order amount that is taxed. This value is 'false' by default, and the seller will have to mark this setting to 'true' in the <b>Sales Tax Table </b> UI in My eBay.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
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
     * This boolean field indicates whether or not shipping costs are to be part of the base order amount that is taxed. This value is 'false' by default, and the seller will have to mark this setting to 'true' in the <b>Sales Tax Table </b> UI in My eBay.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @param bool $shippingIncludedInTax
     * @return self
     */
    public function setShippingIncludedInTax($shippingIncludedInTax)
    {
        $this->shippingIncludedInTax = $shippingIncludedInTax;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getJurisdictionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}JurisdictionID", $value);
        }
        $value = $this->getSalesTaxPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTaxPercent", $value);
        }
        $value = $this->getShippingIncludedInTax();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingIncludedInTax", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}JurisdictionID');
        if (null !== $value) {
            $this->setJurisdictionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTaxPercent');
        if (null !== $value) {
            $this->setSalesTaxPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingIncludedInTax');
        if (null !== $value) {
            $this->setShippingIncludedInTax(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
