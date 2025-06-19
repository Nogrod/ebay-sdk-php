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
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTaxJurisdiction();
        if (null !== $value && [] !== $this->getTaxJurisdiction()) {
            $writer->write(array_map(function ($v) {return ["TaxJurisdiction" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\TaxTableType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxJurisdiction');
        if (null !== $value) {
            $this->setTaxJurisdiction(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TaxJurisdictionType::fromKeyValue($v);}, $value));
        }
    }
}
