<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetSellingManagerInventoryResponseType
 *
 * Contains a list of the products created by the seller. The list of products is returned as a set of tags, in which are returned zero, one, or multiple SellingManagerProductType objects. Each SellingManagerProductType object contains the information about for one Selling Manager product and any Selling Manager templates the product contains.
 * XSD Type: GetSellingManagerInventoryResponseType
 */
class GetSellingManagerInventoryResponseType extends AbstractResponseType
{

    /**
     * Returns the date the inventory counts were last calculated.
     *
     * @var \DateTime $inventoryCountLastCalculatedDate
     */
    private $inventoryCountLastCalculatedDate = null;

    /**
     * Container for information about the requested products and templates.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductType[] $sellingManagerProduct
     */
    private $sellingManagerProduct = [
        
    ];

    /**
     * Contains the total number of pages (TotalNumberOfPages) and the total
     *  number of products entries (TotalNumberOfEntries) that can be returned
     *  on repeated calls with the same format and report criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Gets as inventoryCountLastCalculatedDate
     *
     * Returns the date the inventory counts were last calculated.
     *
     * @return \DateTime
     */
    public function getInventoryCountLastCalculatedDate()
    {
        return $this->inventoryCountLastCalculatedDate;
    }

    /**
     * Sets a new inventoryCountLastCalculatedDate
     *
     * Returns the date the inventory counts were last calculated.
     *
     * @param \DateTime $inventoryCountLastCalculatedDate
     * @return self
     */
    public function setInventoryCountLastCalculatedDate(\DateTime $inventoryCountLastCalculatedDate)
    {
        $this->inventoryCountLastCalculatedDate = $inventoryCountLastCalculatedDate;
        return $this;
    }

    /**
     * Adds as sellingManagerProduct
     *
     * Container for information about the requested products and templates.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellingManagerProductType $sellingManagerProduct
     */
    public function addToSellingManagerProduct(\Nogrod\eBaySDK\Trading\SellingManagerProductType $sellingManagerProduct)
    {
        $this->sellingManagerProduct[] = $sellingManagerProduct;
        return $this;
    }

    /**
     * isset sellingManagerProduct
     *
     * Container for information about the requested products and templates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellingManagerProduct($index)
    {
        return isset($this->sellingManagerProduct[$index]);
    }

    /**
     * unset sellingManagerProduct
     *
     * Container for information about the requested products and templates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellingManagerProduct($index)
    {
        unset($this->sellingManagerProduct[$index]);
    }

    /**
     * Gets as sellingManagerProduct
     *
     * Container for information about the requested products and templates.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerProductType[]
     */
    public function getSellingManagerProduct()
    {
        return $this->sellingManagerProduct;
    }

    /**
     * Sets a new sellingManagerProduct
     *
     * Container for information about the requested products and templates.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerProductType[] $sellingManagerProduct
     * @return self
     */
    public function setSellingManagerProduct(array $sellingManagerProduct)
    {
        $this->sellingManagerProduct = $sellingManagerProduct;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * Contains the total number of pages (TotalNumberOfPages) and the total
     *  number of products entries (TotalNumberOfEntries) that can be returned
     *  on repeated calls with the same format and report criteria.
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
     * Contains the total number of pages (TotalNumberOfPages) and the total
     *  number of products entries (TotalNumberOfEntries) that can be returned
     *  on repeated calls with the same format and report criteria.
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
        $value = $this->getInventoryCountLastCalculatedDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InventoryCountLastCalculatedDate", $value);
        }
        $value = $this->getSellingManagerProduct();
        if (null !== $value && !empty($this->getSellingManagerProduct())) {
            $writer->write(array_map(function ($v) {
                return ["SellingManagerProduct" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InventoryCountLastCalculatedDate');
        if (null !== $value) {
            $this->setInventoryCountLastCalculatedDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProduct', true);
        if (null !== $value && !empty($value)) {
            $this->setSellingManagerProduct(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellingManagerProductType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
