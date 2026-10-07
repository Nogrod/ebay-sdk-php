<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetTaxTableRequestType
 *
 * This call allows you to add or modify sales tax rates for one or more tax jurisdictions within the specified site. Any additions or modifications made with this call is saved in the seller's Sales Tax Table in My eBay.
 *  <br/><br/>
 *  Sales Tax Tables are only supported on the US and Canada (English and French versions) sites, so this call is only applicable to those sites. To view their current Sales Tax Table, a seller may go to the Sales Tax Table in My eBay, or they can make a <b>GetTaxTable</b> call.
 * XSD Type: SetTaxTableRequestType
 */
class SetTaxTableRequestType extends AbstractRequestType
{
    /**
     * This table is used to set or modify sales tax rates for one or more tax jurisdictions within that country. A <b>TaxJurisdiction</b> container is required for each tax jurisdiction that is being added/updated.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxTable
     */
    private $taxTable = null;

    /**
     * Adds as taxJurisdiction
     *
     * This table is used to set or modify sales tax rates for one or more tax jurisdictions within that country. A <b>TaxJurisdiction</b> container is required for each tax jurisdiction that is being added/updated.
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
     * This table is used to set or modify sales tax rates for one or more tax jurisdictions within that country. A <b>TaxJurisdiction</b> container is required for each tax jurisdiction that is being added/updated.
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
     * This table is used to set or modify sales tax rates for one or more tax jurisdictions within that country. A <b>TaxJurisdiction</b> container is required for each tax jurisdiction that is being added/updated.
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
     * This table is used to set or modify sales tax rates for one or more tax jurisdictions within that country. A <b>TaxJurisdiction</b> container is required for each tax jurisdiction that is being added/updated.
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
     * This table is used to set or modify sales tax rates for one or more tax jurisdictions within that country. A <b>TaxJurisdiction</b> container is required for each tax jurisdiction that is being added/updated.
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
        $value = $this->getTaxTable();
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElement("{urn:ebay:apis:eBLBaseComponents}TaxTable");
                    $open = true;
                }
                $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxJurisdiction", $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SetTaxTableRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxTable');
        if (null !== $value) {
            $value = Func::mapArray($value, '{urn:ebay:apis:eBLBaseComponents}TaxJurisdiction');
            $this->setTaxTable(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\TaxJurisdictionType::fromKeyValue($v);
            }, $value));
        }
    }
}
