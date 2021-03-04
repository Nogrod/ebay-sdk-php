<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellingManagerSoldListingsResponseType
 *
 * Returns a Selling Manager user's sold listings. Response can be filtered by date, search
 *  values, and stores.
 * XSD Type: GetSellingManagerSoldListingsResponseType
 */
class GetSellingManagerSoldListingsResponseType extends AbstractResponseType
{
    /**
     * A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType[] $saleRecord
     */
    private $saleRecord = [
        
    ];

    /**
     * Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of products entries (<b>TotalNumberOfEntries</b>) that can be returned on repeated calls with the same format and report criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Adds as saleRecord
     *
     * A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType $saleRecord
     */
    public function addToSaleRecord(\Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType $saleRecord)
    {
        $this->saleRecord[] = $saleRecord;
        return $this;
    }

    /**
     * isset saleRecord
     *
     * A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSaleRecord($index)
    {
        return isset($this->saleRecord[$index]);
    }

    /**
     * unset saleRecord
     *
     * A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSaleRecord($index)
    {
        unset($this->saleRecord[$index]);
    }

    /**
     * Gets as saleRecord
     *
     * A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType[]
     */
    public function getSaleRecord()
    {
        return $this->saleRecord;
    }

    /**
     * Sets a new saleRecord
     *
     * A <b>SaleRecord</b> container is returned for each order that matches the input criteria.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType[] $saleRecord
     * @return self
     */
    public function setSaleRecord(array $saleRecord)
    {
        $this->saleRecord = $saleRecord;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of products entries (<b>TotalNumberOfEntries</b>) that can be returned on repeated calls with the same format and report criteria.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationResultType
     */
    public function getPaginationResult()
    {
        return $this->paginationResult;
    }

    /**
     * Sets a new paginationResult
     *
     * Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of products entries (<b>TotalNumberOfEntries</b>) that can be returned on repeated calls with the same format and report criteria.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSaleRecord();
        if (null !== $value && !empty($this->getSaleRecord())) {
            $writer->write(array_map(function ($v) {
                return ["SaleRecord" => $v];
            }, $value));
        }
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleRecord', true);
        if (null !== $value && !empty($value)) {
            $this->setSaleRecord(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
    }
}
