<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxJurisdictionType
 *
 * This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * XSD Type: TaxJurisdictionType
 */
class TaxJurisdictionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     * This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction. Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
     *  <br><br>
     *  This field is only returned in <b>GetTaxTable</b> (and other 'Get' calls) if a sales tax percentage rate has been set.
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
     * Gets as shippingIncludedInTax
     *
     * This field is included in a <b>SetTaxTable</b> call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to <code>false</code> if not specified.
     *  <br><br>
     *  This field is always returned with each <b>TaxJurisdiction</b> container (whether <code>true</code> or <code>false</code>).
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
     * This field is included in a <b>SetTaxTable</b> call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to <code>false</code> if not specified.
     *  <br><br>
     *  This field is always returned with each <b>TaxJurisdiction</b> container (whether <code>true</code> or <code>false</code>).
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
        $value = $this->jurisdictionID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'JurisdictionID', null, (string) $value);
        }
        $value = $this->salesTaxPercent;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SalesTaxPercent', null, (string) $value);
        }
        $value = $this->shippingIncludedInTax;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingIncludedInTax', null, ($value ? 'true' : 'false'));
        }
        $value = $this->jurisdictionName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'JurisdictionName', null, (string) $value);
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TaxJurisdictionType
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
                case 'JurisdictionID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->jurisdictionID = $value;
                    }
                    return true;
                case 'SalesTaxPercent':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->salesTaxPercent = (float) $value;
                    }
                    return true;
                case 'ShippingIncludedInTax':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingIncludedInTax = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'JurisdictionName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->jurisdictionName = $value;
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['JurisdictionID'] = $this->jurisdictionID;
        $data['SalesTaxPercent'] = $this->salesTaxPercent;
        $data['ShippingIncludedInTax'] = $this->shippingIncludedInTax;
        $data['JurisdictionName'] = $this->jurisdictionName;
        $data['DetailVersion'] = $this->detailVersion;
        $data['UpdateTime'] = Func::jsonDate($this->updateTime);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
