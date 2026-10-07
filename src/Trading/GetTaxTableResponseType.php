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
        if (!is_array($this->taxTable)) {
            throw new \LogicException('taxTable is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\TaxJurisdictionType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\TaxJurisdictionType> $taxTable
     * @return self
     */
    public function setTaxTable(iterable $taxTable)
    {
        $this->taxTable = $taxTable;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->lastUpdateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LastUpdateTime', null, Func::formatDateTime($value));
        }
        $value = $this->taxTable;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'TaxTable', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'TaxJurisdiction', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetTaxTableResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->taxTable = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'LastUpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->lastUpdateTime = new \DateTime($value);
                    }
                    return true;
                case 'TaxTable':
                    $this->taxTable = Func::readList($reader, 'TaxJurisdiction', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\TaxJurisdictionType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['LastUpdateTime'] = Func::jsonDate($this->lastUpdateTime);
        $data['TaxTable'] = Func::jsonList($this->taxTable);
        return $data;
    }
}
