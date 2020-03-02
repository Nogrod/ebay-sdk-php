<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxTableType
 *
 * Type used by <b>TaxTable</b> container that is returned in the <b>GetShippingCosts</b> response. The <b>TaxTable</b> container consists of an array of <b>TaxJurisdiction</b> containers; one returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay). The <b>TaxTable</b> container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
 * XSD Type: TaxTableType
 */
class TaxTableType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\TaxJurisdictionType[] $taxJurisdiction
     */
    private $taxJurisdiction = [
        
    ];

    /**
     * Adds as taxJurisdiction
     *
     * A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\TaxJurisdictionType $taxJurisdiction
     */
    public function addToTaxJurisdiction(\Nogrod\eBaySDK\Shopping\TaxJurisdictionType $taxJurisdiction)
    {
        $this->taxJurisdiction[] = $taxJurisdiction;
        return $this;
    }

    /**
     * isset taxJurisdiction
     *
     * A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     * A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
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
     * A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\TaxJurisdictionType[]
     */
    public function getTaxJurisdiction()
    {
        return $this->taxJurisdiction;
    }

    /**
     * Sets a new taxJurisdiction
     *
     * A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\TaxJurisdictionType[] $taxJurisdiction
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
                return \Nogrod\eBaySDK\Shopping\TaxJurisdictionType::fromKeyValue($v);
            }, $value));
        }
    }
}
