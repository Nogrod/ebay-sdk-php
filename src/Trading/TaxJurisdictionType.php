<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxJurisdictionType
 *
 * This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * XSD Type: TaxJurisdictionType
 */
class TaxJurisdictionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all <b>JurisdictionID</b> values for a site, a seller can either use a <b>GetTaxTable</b> call with <b>DetailLevel</b> set to <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>.
     *  <br/><br/>
     *  The <b>JurisdictionID</b> field is always required in a <b>SetTaxTable</b> call, and always returned with each <b>TaxJurisdiction</b> container to identify the tax jurisdiction.
     *
     * @var string $jurisdictionID
     */
    private $jurisdictionID = null;

    /**
     * This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction. Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
     *  <br><br>
     *  This field is only returned in <b>GetTaxTable</b> (and other 'Get' calls) if a sales tax percentage rate has been set.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @var float $salesTaxPercent
     */
    private $salesTaxPercent = null;

    /**
     * This field is included in a <b>SetTaxTable</b> call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to <code>false</code> if not specified.
     *  <br><br>
     *  This field is always returned with each <b>TaxJurisdiction</b> container (whether <code>true</code> or <code>false</code>).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @var bool $shippingIncludedInTax
     */
    private $shippingIncludedInTax = null;

    /**
     * Full name for the jurisdiction or region for display purposes.
     *
     * @var string $jurisdictionName
     */
    private $jurisdictionName = null;

    /**
     * Returns the latest version number for this feature. Use the version to determine
     *  if and when to refresh your cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * The time in GMT when the details for this feature were last updated. Use this
     *  timestamp to determine if and when to refresh your cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as jurisdictionID
     *
     * This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all <b>JurisdictionID</b> values for a site, a seller can either use a <b>GetTaxTable</b> call with <b>DetailLevel</b> set to <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>.
     *  <br/><br/>
     *  The <b>JurisdictionID</b> field is always required in a <b>SetTaxTable</b> call, and always returned with each <b>TaxJurisdiction</b> container to identify the tax jurisdiction.
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
     * This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all <b>JurisdictionID</b> values for a site, a seller can either use a <b>GetTaxTable</b> call with <b>DetailLevel</b> set to <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>.
     *  <br/><br/>
     *  The <b>JurisdictionID</b> field is always required in a <b>SetTaxTable</b> call, and always returned with each <b>TaxJurisdiction</b> container to identify the tax jurisdiction.
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
     * This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction. Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
     *  <br><br>
     *  This field is only returned in <b>GetTaxTable</b> (and other 'Get' calls) if a sales tax percentage rate has been set.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     * This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction. Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
     *  <br><br>
     *  This field is only returned in <b>GetTaxTable</b> (and other 'Get' calls) if a sales tax percentage rate has been set.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     * This field is included in a <b>SetTaxTable</b> call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to <code>false</code> if not specified.
     *  <br><br>
     *  This field is always returned with each <b>TaxJurisdiction</b> container (whether <code>true</code> or <code>false</code>).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     * This field is included in a <b>SetTaxTable</b> call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to <code>false</code> if not specified.
     *  <br><br>
     *  This field is always returned with each <b>TaxJurisdiction</b> container (whether <code>true</code> or <code>false</code>).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     * Gets as jurisdictionName
     *
     * Full name for the jurisdiction or region for display purposes.
     *
     * @return string
     */
    public function getJurisdictionName()
    {
        return $this->jurisdictionName;
    }

    /**
     * Sets a new jurisdictionName
     *
     * Full name for the jurisdiction or region for display purposes.
     *
     * @param string $jurisdictionName
     * @return self
     */
    public function setJurisdictionName($jurisdictionName)
    {
        $this->jurisdictionName = $jurisdictionName;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this feature. Use the version to determine
     *  if and when to refresh your cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this feature. Use the version to determine
     *  if and when to refresh your cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * The time in GMT when the details for this feature were last updated. Use this
     *  timestamp to determine if and when to refresh your cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * The time in GMT when the details for this feature were last updated. Use this
     *  timestamp to determine if and when to refresh your cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = $this->getJurisdictionName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}JurisdictionName", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
            $this->setShippingIncludedInTax($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}JurisdictionName');
        if (null !== $value) {
            $this->setJurisdictionName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
