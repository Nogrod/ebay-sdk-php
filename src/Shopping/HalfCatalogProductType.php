<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing HalfCatalogProductType
 *
 * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
 *  </span>
 * XSD Type: HalfCatalogProductType
 */
class HalfCatalogProductType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $title
     */
    private $title = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $detailsURL
     */
    private $detailsURL = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $stockPhotoURL
     */
    private $stockPhotoURL = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary
     */
    private $shippingCostSummary = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var bool $displayStockPhotos
     */
    private $displayStockPhotos = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var int $itemCount
     */
    private $itemCount = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ProductIDType[] $productID
     */
    private $productID = [
        
    ];

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $domainName
     */
    private $domainName = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\NameValueListType[] $itemSpecifics
     */
    private $itemSpecifics = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleItemType[] $itemArray
     */
    private $itemArray = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var int $reviewCount
     */
    private $reviewCount = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $minPrice
     */
    private $minPrice = null;

    /**
     * Gets as title
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as detailsURL
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getDetailsURL()
    {
        return $this->detailsURL;
    }

    /**
     * Sets a new detailsURL
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $detailsURL
     * @return self
     */
    public function setDetailsURL($detailsURL)
    {
        $this->detailsURL = $detailsURL;
        return $this;
    }

    /**
     * Gets as stockPhotoURL
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getStockPhotoURL()
    {
        return $this->stockPhotoURL;
    }

    /**
     * Sets a new stockPhotoURL
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $stockPhotoURL
     * @return self
     */
    public function setStockPhotoURL($stockPhotoURL)
    {
        $this->stockPhotoURL = $stockPhotoURL;
        return $this;
    }

    /**
     * Gets as shippingCostSummary
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType
     */
    public function getShippingCostSummary()
    {
        return $this->shippingCostSummary;
    }

    /**
     * Sets a new shippingCostSummary
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary
     * @return self
     */
    public function setShippingCostSummary(\Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary)
    {
        $this->shippingCostSummary = $shippingCostSummary;
        return $this;
    }

    /**
     * Gets as displayStockPhotos
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return bool
     */
    public function getDisplayStockPhotos()
    {
        return $this->displayStockPhotos;
    }

    /**
     * Sets a new displayStockPhotos
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param bool $displayStockPhotos
     * @return self
     */
    public function setDisplayStockPhotos($displayStockPhotos)
    {
        $this->displayStockPhotos = $displayStockPhotos;
        return $this;
    }

    /**
     * Gets as itemCount
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * Sets a new itemCount
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int $itemCount
     * @return self
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    /**
     * Adds as productID
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     */
    public function addToProductID(\Nogrod\eBaySDK\Shopping\ProductIDType $productID)
    {
        $this->productID[] = $productID;
        return $this;
    }

    /**
     * isset productID
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductID($index)
    {
        return isset($this->productID[$index]);
    }

    /**
     * unset productID
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductID($index)
    {
        unset($this->productID[$index]);
    }

    /**
     * Gets as productID
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ProductIDType[]
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType[] $productID
     * @return self
     */
    public function setProductID(array $productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as domainName
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Sets a new domainName
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $domainName
     * @return self
     */
    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList
     */
    public function addToItemSpecifics(\Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList)
    {
        $this->itemSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset itemSpecifics
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecifics($index)
    {
        return isset($this->itemSpecifics[$index]);
    }

    /**
     * unset itemSpecifics
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecifics($index)
    {
        unset($this->itemSpecifics[$index]);
    }

    /**
     * Gets as itemSpecifics
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\NameValueListType[]
     */
    public function getItemSpecifics()
    {
        return $this->itemSpecifics;
    }

    /**
     * Sets a new itemSpecifics
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType[] $itemSpecifics
     * @return self
     */
    public function setItemSpecifics(array $itemSpecifics)
    {
        $this->itemSpecifics = $itemSpecifics;
        return $this;
    }

    /**
     * Adds as item
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType $item
     */
    public function addToItemArray(\Nogrod\eBaySDK\Shopping\SimpleItemType $item)
    {
        $this->itemArray[] = $item;
        return $this;
    }

    /**
     * isset itemArray
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemArray($index)
    {
        return isset($this->itemArray[$index]);
    }

    /**
     * unset itemArray
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemArray($index)
    {
        unset($this->itemArray[$index]);
    }

    /**
     * Gets as itemArray
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleItemType[]
     */
    public function getItemArray()
    {
        return $this->itemArray;
    }

    /**
     * Sets a new itemArray
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType[] $itemArray
     * @return self
     */
    public function setItemArray(array $itemArray)
    {
        $this->itemArray = $itemArray;
        return $this;
    }

    /**
     * Gets as reviewCount
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return int
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * Sets a new reviewCount
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int $reviewCount
     * @return self
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }

    /**
     * Gets as minPrice
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Sets a new minPrice
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfCatalogProductType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $minPrice
     * @return self
     */
    public function setMinPrice(\Nogrod\eBaySDK\Shopping\AmountType $minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getDetailsURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailsURL", $value);
        }
        $value = $this->getStockPhotoURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StockPhotoURL", $value);
        }
        $value = $this->getShippingCostSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCostSummary", $value);
        }
        $value = $this->getDisplayStockPhotos();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayStockPhotos", $value);
        }
        $value = $this->getItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCount", $value);
        }
        $value = $this->getProductID();
        if (null !== $value && !empty($this->getProductID())) {
            $writer->write(array_map(function ($v) {
                return ["ProductID" => $v];
            }, $value));
        }
        $value = $this->getDomainName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomainName", $value);
        }
        $value = $this->getItemSpecifics();
        if (null !== $value && !empty($this->getItemSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecifics", array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
        }
        $value = $this->getItemArray();
        if (null !== $value && !empty($this->getItemArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemArray", array_map(function ($v) {
                return ["Item" => $v];
            }, $value));
        }
        $value = $this->getReviewCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewCount", $value);
        }
        $value = $this->getMinPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinPrice", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailsURL');
        if (null !== $value) {
            $this->setDetailsURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StockPhotoURL');
        if (null !== $value) {
            $this->setStockPhotoURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCostSummary');
        if (null !== $value) {
            $this->setShippingCostSummary(\Nogrod\eBaySDK\Shopping\ShippingCostSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayStockPhotos');
        if (null !== $value) {
            $this->setDisplayStockPhotos($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCount');
        if (null !== $value) {
            $this->setItemCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID', true);
        if (null !== $value && !empty($value)) {
            $this->setProductID(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\ProductIDType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomainName');
        if (null !== $value) {
            $this->setDomainName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setItemSpecifics(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\NameValueListType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemArray', true);
        if (null !== $value && !empty($value)) {
            $this->setItemArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\SimpleItemType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewCount');
        if (null !== $value) {
            $this->setReviewCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinPrice');
        if (null !== $value) {
            $this->setMinPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
    }
}
