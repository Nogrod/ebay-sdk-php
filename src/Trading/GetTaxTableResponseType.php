<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetTaxTableResponseType
 *
 * The base response of the <b>GetTaxTable</b> call.
 * XSD Type: GetTaxTableResponseType
 */
class GetTaxTableResponseType extends AbstractResponseType
{
    /**
     * The last time (in GMT) that the tax table was updated. Only returned if the user previously created a tax table and if the site has jurisdictions. <b>LastUpdateTime</b> is useful for synchronization. If you cache the user's tax table, you can use <b>GetTaxTable</b> to check if it has changed and whether you need to update the cached tax table.
     *
     * @var \DateTime $lastUpdateTime
     */
    private $lastUpdateTime = null;

    /**
     * A container of tax jurisdiction information unique to a user/site combination. Returned as an empty container if no Sales Tax Table information exists for the seller's account and no <b>DetailLevel</b> is used. If <b>DetailLevel</b> is not specified, information is only returned for the jurisdictions for which the user provided tax information. If <b>DetailLevel</b> is set to <b>ReturnAll</b>, tax information is returned for all possible jurisdictions, whether specified by the user or not. <b>ShippingIncludedInTax</b> and <b>SalesTaxPercent</b> are returned but are empty.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxTable
     */
    private $taxTable = null;

    /**
     * Gets as lastUpdateTime
     *
     * The last time (in GMT) that the tax table was updated. Only returned if the user previously created a tax table and if the site has jurisdictions. <b>LastUpdateTime</b> is useful for synchronization. If you cache the user's tax table, you can use <b>GetTaxTable</b> to check if it has changed and whether you need to update the cached tax table.
     *
     * @return \DateTime
     */
    public function getLastUpdateTime()
    {
        return $this->lastUpdateTime;
    }

    /**
     * Sets a new lastUpdateTime
     *
     * The last time (in GMT) that the tax table was updated. Only returned if the user previously created a tax table and if the site has jurisdictions. <b>LastUpdateTime</b> is useful for synchronization. If you cache the user's tax table, you can use <b>GetTaxTable</b> to check if it has changed and whether you need to update the cached tax table.
     *
     * @param \DateTime $lastUpdateTime
     * @return self
     */
    public function setLastUpdateTime(\DateTime $lastUpdateTime)
    {
        $this->lastUpdateTime = $lastUpdateTime;
        return $this;
    }

    /**
     * Adds as taxJurisdiction
     *
     * A container of tax jurisdiction information unique to a user/site combination. Returned as an empty container if no Sales Tax Table information exists for the seller's account and no <b>DetailLevel</b> is used. If <b>DetailLevel</b> is not specified, information is only returned for the jurisdictions for which the user provided tax information. If <b>DetailLevel</b> is set to <b>ReturnAll</b>, tax information is returned for all possible jurisdictions, whether specified by the user or not. <b>ShippingIncludedInTax</b> and <b>SalesTaxPercent</b> are returned but are empty.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxJurisdictionType $taxJurisdiction
     */
    public function addToTaxTable(\Nogrod\eBaySDK\Trading\TaxJurisdictionType $taxJurisdiction)
    {
        $this->taxTable[] = $taxJurisdiction;
        return $this;
    }

    /**
     * isset taxTable
     *
     * A container of tax jurisdiction information unique to a user/site combination. Returned as an empty container if no Sales Tax Table information exists for the seller's account and no <b>DetailLevel</b> is used. If <b>DetailLevel</b> is not specified, information is only returned for the jurisdictions for which the user provided tax information. If <b>DetailLevel</b> is set to <b>ReturnAll</b>, tax information is returned for all possible jurisdictions, whether specified by the user or not. <b>ShippingIncludedInTax</b> and <b>SalesTaxPercent</b> are returned but are empty.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTable($index)
    {
        return isset($this->taxTable[$index]);
    }

    /**
     * unset taxTable
     *
     * A container of tax jurisdiction information unique to a user/site combination. Returned as an empty container if no Sales Tax Table information exists for the seller's account and no <b>DetailLevel</b> is used. If <b>DetailLevel</b> is not specified, information is only returned for the jurisdictions for which the user provided tax information. If <b>DetailLevel</b> is set to <b>ReturnAll</b>, tax information is returned for all possible jurisdictions, whether specified by the user or not. <b>ShippingIncludedInTax</b> and <b>SalesTaxPercent</b> are returned but are empty.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTable($index)
    {
        unset($this->taxTable[$index]);
    }

    /**
     * Gets as taxTable
     *
     * A container of tax jurisdiction information unique to a user/site combination. Returned as an empty container if no Sales Tax Table information exists for the seller's account and no <b>DetailLevel</b> is used. If <b>DetailLevel</b> is not specified, information is only returned for the jurisdictions for which the user provided tax information. If <b>DetailLevel</b> is set to <b>ReturnAll</b>, tax information is returned for all possible jurisdictions, whether specified by the user or not. <b>ShippingIncludedInTax</b> and <b>SalesTaxPercent</b> are returned but are empty.
     *
     * @return \Nogrod\eBaySDK\Trading\TaxJurisdictionType[]
     */
    public function getTaxTable()
    {
        return $this->taxTable;
    }

    /**
     * Sets a new taxTable
     *
     * A container of tax jurisdiction information unique to a user/site combination. Returned as an empty container if no Sales Tax Table information exists for the seller's account and no <b>DetailLevel</b> is used. If <b>DetailLevel</b> is not specified, information is only returned for the jurisdictions for which the user provided tax information. If <b>DetailLevel</b> is set to <b>ReturnAll</b>, tax information is returned for all possible jurisdictions, whether specified by the user or not. <b>ShippingIncludedInTax</b> and <b>SalesTaxPercent</b> are returned but are empty.
     *
     * @param \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxTable
     * @return self
     */
    public function setTaxTable(array $taxTable)
    {
        $this->taxTable = $taxTable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getLastUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastUpdateTime", $value);
        }
        $value = $this->getTaxTable();
        if (null !== $value && !empty($this->getTaxTable())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxTable", array_map(function ($v) {return ["TaxJurisdiction" => $v];}, $value));
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastUpdateTime');
        if (null !== $value) {
            $this->setLastUpdateTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxTable', true);
        if (null !== $value && !empty($value)) {
            $this->setTaxTable(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TaxJurisdictionType::fromKeyValue($v);}, $value));
        }
    }
}
