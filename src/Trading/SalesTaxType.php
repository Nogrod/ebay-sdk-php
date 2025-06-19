<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SalesTaxType
 *
 * This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * XSD Type: SalesTaxType
 */
class SalesTaxType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction (US state or Canadian province). Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
     *  <br><br>
     *  This field is only returned in order management calls if sales tax applies to the order line item, and is only in <b>GetItem</b> (and other 'Get' calls) if sales tax is applicable to the listing or order line item, and the seller is the person making the call.
     *  <br><br>
     *  Although this field will be returned at the order level in order management calls for a single line item order, sales tax is applied at the line item level and not order level. For multiple line item orders, this field will not be returned at all at the order level.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
     *  </span>
     *
     * @var float $salesTaxPercent
     */
    private $salesTaxPercent = null;

    /**
     * This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all two-digit identifiers for all states/territories/provinces for a site, a seller can either use a <b>GetTaxTable</b> call with <b>DetailLevel</b> set to <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>. Please note that both <b>GetTaxTable</b> and <b>GeteBayDetails</b> calls use a <b>JurisdictionID</b> field to express these tax jurisdiction identifiers instead of <b>SalesTaxState</b>, but the values used in these fields are the same.
     *  <br/><br/>
     *  The <b>SalesTaxState</b> field is conditionally required in an Add/Revise/Relist/Verify call if the seller is applying sales tax to a listing for a particular jurisdiction, and is returned with each <b>SalesTax</b> container to identify the tax jurisdiction.
     *
     * @var string $salesTaxState
     */
    private $salesTaxState = null;

    /**
     * This field is included in an Add/Revise/Relist/Verify call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to <code>false</code> if not specified.
     *  <br><br>
     *  This field is always returned with the <b>SalesTax</b> container (whether <code>true</code> or <code>false</code>).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
     *  </span>
     *
     * @var bool $shippingIncludedInTax
     */
    private $shippingIncludedInTax = null;

    /**
     * The amount of sales tax calculated for an order line item based on the sale price and the sales tax rate for the buyer's tax jurisdiction. For a multiple line item order, the <b>SalesTaxAmount</b> returned at the order level will be the cumulative amount for all line items in the order.
     *  <br><br>
     *  GetItemTransactions can return incorrect sales tax if the name of a state is not
     *  abbreviated (e.g. if the value is "Illinois" rather than "IL") in
     *  <b>TransactionArray.Transaction.Buyer.BuyerInfo.ShippingAddress.StateOrProvince</b>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $salesTaxAmount
     */
    private $salesTaxAmount = null;

    /**
     * Gets as salesTaxPercent
     *
     * This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction (US state or Canadian province). Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
     *  <br><br>
     *  This field is only returned in order management calls if sales tax applies to the order line item, and is only in <b>GetItem</b> (and other 'Get' calls) if sales tax is applicable to the listing or order line item, and the seller is the person making the call.
     *  <br><br>
     *  Although this field will be returned at the order level in order management calls for a single line item order, sales tax is applied at the line item level and not order level. For multiple line item orders, this field will not be returned at all at the order level.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     * This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction (US state or Canadian province). Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
     *  <br><br>
     *  This field is only returned in order management calls if sales tax applies to the order line item, and is only in <b>GetItem</b> (and other 'Get' calls) if sales tax is applicable to the listing or order line item, and the seller is the person making the call.
     *  <br><br>
     *  Although this field will be returned at the order level in order management calls for a single line item order, sales tax is applied at the line item level and not order level. For multiple line item orders, this field will not be returned at all at the order level.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     * Gets as salesTaxState
     *
     * This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all two-digit identifiers for all states/territories/provinces for a site, a seller can either use a <b>GetTaxTable</b> call with <b>DetailLevel</b> set to <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>. Please note that both <b>GetTaxTable</b> and <b>GeteBayDetails</b> calls use a <b>JurisdictionID</b> field to express these tax jurisdiction identifiers instead of <b>SalesTaxState</b>, but the values used in these fields are the same.
     *  <br/><br/>
     *  The <b>SalesTaxState</b> field is conditionally required in an Add/Revise/Relist/Verify call if the seller is applying sales tax to a listing for a particular jurisdiction, and is returned with each <b>SalesTax</b> container to identify the tax jurisdiction.
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
     * This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all two-digit identifiers for all states/territories/provinces for a site, a seller can either use a <b>GetTaxTable</b> call with <b>DetailLevel</b> set to <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>. Please note that both <b>GetTaxTable</b> and <b>GeteBayDetails</b> calls use a <b>JurisdictionID</b> field to express these tax jurisdiction identifiers instead of <b>SalesTaxState</b>, but the values used in these fields are the same.
     *  <br/><br/>
     *  The <b>SalesTaxState</b> field is conditionally required in an Add/Revise/Relist/Verify call if the seller is applying sales tax to a listing for a particular jurisdiction, and is returned with each <b>SalesTax</b> container to identify the tax jurisdiction.
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
     * This field is included in an Add/Revise/Relist/Verify call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to <code>false</code> if not specified.
     *  <br><br>
     *  This field is always returned with the <b>SalesTax</b> container (whether <code>true</code> or <code>false</code>).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     * This field is included in an Add/Revise/Relist/Verify call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to <code>false</code> if not specified.
     *  <br><br>
     *  This field is always returned with the <b>SalesTax</b> container (whether <code>true</code> or <code>false</code>).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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

    /**
     * Gets as salesTaxAmount
     *
     * The amount of sales tax calculated for an order line item based on the sale price and the sales tax rate for the buyer's tax jurisdiction. For a multiple line item order, the <b>SalesTaxAmount</b> returned at the order level will be the cumulative amount for all line items in the order.
     *  <br><br>
     *  GetItemTransactions can return incorrect sales tax if the name of a state is not
     *  abbreviated (e.g. if the value is "Illinois" rather than "IL") in
     *  <b>TransactionArray.Transaction.Buyer.BuyerInfo.ShippingAddress.StateOrProvince</b>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getSalesTaxAmount()
    {
        return $this->salesTaxAmount;
    }

    /**
     * Sets a new salesTaxAmount
     *
     * The amount of sales tax calculated for an order line item based on the sale price and the sales tax rate for the buyer's tax jurisdiction. For a multiple line item order, the <b>SalesTaxAmount</b> returned at the order level will be the cumulative amount for all line items in the order.
     *  <br><br>
     *  GetItemTransactions can return incorrect sales tax if the name of a state is not
     *  abbreviated (e.g. if the value is "Illinois" rather than "IL") in
     *  <b>TransactionArray.Transaction.Buyer.BuyerInfo.ShippingAddress.StateOrProvince</b>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $salesTaxAmount
     * @return self
     */
    public function setSalesTaxAmount(\Nogrod\eBaySDK\Trading\AmountType $salesTaxAmount)
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

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SalesTaxType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTaxPercent');
        if (null !== $value) {
            $this->setSalesTaxPercent($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTaxState');
        if (null !== $value) {
            $this->setSalesTaxState($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingIncludedInTax');
        if (null !== $value) {
            $this->setShippingIncludedInTax(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTaxAmount');
        if (null !== $value) {
            $this->setSalesTaxAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
