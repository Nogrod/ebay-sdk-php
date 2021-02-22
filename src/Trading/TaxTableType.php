<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxTableType
 *
 * This type is used to express sales tax details for one or more tax jurisdictions. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * XSD Type: TaxTableType
 */
class TaxTableType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * In a <b>SetTaxTable</b>, a <b>TaxJurisdiction</b> container is required for each tax jurisdiction that the seller wishes to make additions/changes. Sales tax details for zero or more jurisdictions (states,
     *  provinces, etc). This can be just one jurisdiction, up to all jurisdictions defined for the site's country. Any values specified through a <b>TaxJurisdiction</b> container will override any existing values defined in the seller's Sales Tax Table.
     *  <br><br>
     *  If <b>GetTaxTable</b> is called without the <b>DetailLevel</b> field, only tax jurisdictions where sales tax rates have been set up are returned. However, if the <b>DetailLevel</b> field is included in the request and set to <code>ReturnAll</code>, all tax jurisdictions are returned, regardless of whether or not the seller has modified settings for any/all of these jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxJurisdiction
     */
    private $taxJurisdiction = [
        
    ];

    /**
     * Adds as taxJurisdiction
     *
     * In a <b>SetTaxTable</b>, a <b>TaxJurisdiction</b> container is required for each tax jurisdiction that the seller wishes to make additions/changes. Sales tax details for zero or more jurisdictions (states,
     *  provinces, etc). This can be just one jurisdiction, up to all jurisdictions defined for the site's country. Any values specified through a <b>TaxJurisdiction</b> container will override any existing values defined in the seller's Sales Tax Table.
     *  <br><br>
     *  If <b>GetTaxTable</b> is called without the <b>DetailLevel</b> field, only tax jurisdictions where sales tax rates have been set up are returned. However, if the <b>DetailLevel</b> field is included in the request and set to <code>ReturnAll</code>, all tax jurisdictions are returned, regardless of whether or not the seller has modified settings for any/all of these jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxJurisdictionType $taxJurisdiction
     */
    public function addToTaxJurisdiction(\Nogrod\eBaySDK\Trading\TaxJurisdictionType $taxJurisdiction)
    {
        $this->taxJurisdiction[] = $taxJurisdiction;
        return $this;
    }

    /**
     * isset taxJurisdiction
     *
     * In a <b>SetTaxTable</b>, a <b>TaxJurisdiction</b> container is required for each tax jurisdiction that the seller wishes to make additions/changes. Sales tax details for zero or more jurisdictions (states,
     *  provinces, etc). This can be just one jurisdiction, up to all jurisdictions defined for the site's country. Any values specified through a <b>TaxJurisdiction</b> container will override any existing values defined in the seller's Sales Tax Table.
     *  <br><br>
     *  If <b>GetTaxTable</b> is called without the <b>DetailLevel</b> field, only tax jurisdictions where sales tax rates have been set up are returned. However, if the <b>DetailLevel</b> field is included in the request and set to <code>ReturnAll</code>, all tax jurisdictions are returned, regardless of whether or not the seller has modified settings for any/all of these jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxJurisdiction($index)
    {
        return isset($this->taxJurisdiction[$index]);
    }

    /**
     * unset taxJurisdiction
     *
     * In a <b>SetTaxTable</b>, a <b>TaxJurisdiction</b> container is required for each tax jurisdiction that the seller wishes to make additions/changes. Sales tax details for zero or more jurisdictions (states,
     *  provinces, etc). This can be just one jurisdiction, up to all jurisdictions defined for the site's country. Any values specified through a <b>TaxJurisdiction</b> container will override any existing values defined in the seller's Sales Tax Table.
     *  <br><br>
     *  If <b>GetTaxTable</b> is called without the <b>DetailLevel</b> field, only tax jurisdictions where sales tax rates have been set up are returned. However, if the <b>DetailLevel</b> field is included in the request and set to <code>ReturnAll</code>, all tax jurisdictions are returned, regardless of whether or not the seller has modified settings for any/all of these jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxJurisdiction($index)
    {
        unset($this->taxJurisdiction[$index]);
    }

    /**
     * Gets as taxJurisdiction
     *
     * In a <b>SetTaxTable</b>, a <b>TaxJurisdiction</b> container is required for each tax jurisdiction that the seller wishes to make additions/changes. Sales tax details for zero or more jurisdictions (states,
     *  provinces, etc). This can be just one jurisdiction, up to all jurisdictions defined for the site's country. Any values specified through a <b>TaxJurisdiction</b> container will override any existing values defined in the seller's Sales Tax Table.
     *  <br><br>
     *  If <b>GetTaxTable</b> is called without the <b>DetailLevel</b> field, only tax jurisdictions where sales tax rates have been set up are returned. However, if the <b>DetailLevel</b> field is included in the request and set to <code>ReturnAll</code>, all tax jurisdictions are returned, regardless of whether or not the seller has modified settings for any/all of these jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\TaxJurisdictionType[]
     */
    public function getTaxJurisdiction()
    {
        return $this->taxJurisdiction;
    }

    /**
     * Sets a new taxJurisdiction
     *
     * In a <b>SetTaxTable</b>, a <b>TaxJurisdiction</b> container is required for each tax jurisdiction that the seller wishes to make additions/changes. Sales tax details for zero or more jurisdictions (states,
     *  provinces, etc). This can be just one jurisdiction, up to all jurisdictions defined for the site's country. Any values specified through a <b>TaxJurisdiction</b> container will override any existing values defined in the seller's Sales Tax Table.
     *  <br><br>
     *  If <b>GetTaxTable</b> is called without the <b>DetailLevel</b> field, only tax jurisdictions where sales tax rates have been set up are returned. However, if the <b>DetailLevel</b> field is included in the request and set to <code>ReturnAll</code>, all tax jurisdictions are returned, regardless of whether or not the seller has modified settings for any/all of these jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxJurisdiction
     * @return self
     */
    public function setTaxJurisdiction(array $taxJurisdiction)
    {
        $this->taxJurisdiction = $taxJurisdiction;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTaxJurisdiction();
        if (null !== $value && !empty($this->getTaxJurisdiction())) {
            $writer->write(array_map(function ($v) {
                return ["TaxJurisdiction" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxJurisdiction', true);
        if (null !== $value && !empty($value)) {
            $this->setTaxJurisdiction(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\TaxJurisdictionType::fromKeyValue($v);
            }, $value));
        }
    }
}
