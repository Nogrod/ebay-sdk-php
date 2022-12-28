<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CatalogProductType
 *
 * This type is deprecated.
 * XSD Type: CatalogProductType
 */
class CatalogProductType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * This field is deprecated.
     *
     * @var string $detailsURL
     */
    private $detailsURL = null;

    /**
     * This field is deprecated.
     *
     * @var string $stockPhotoURL
     */
    private $stockPhotoURL = null;

    /**
     * This field is deprecated.
     *
     * @var bool $displayStockPhotos
     */
    private $displayStockPhotos = null;

    /**
     * This field is deprecated.
     *
     * @var int $itemCount
     */
    private $itemCount = null;

    /**
     * This field is deprecated.
     *
     * @var int $productReferenceID
     */
    private $productReferenceID = null;

    /**
     * This field is deprecated.
     *
     * @var int $attributeSetID
     */
    private $attributeSetID = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $itemSpecifics
     */
    private $itemSpecifics = null;

    /**
     * This field is deprecated.
     *
     * @var int $reviewCount
     */
    private $reviewCount = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ReviewDetailsType $reviewDetails
     */
    private $reviewDetails = null;

    /**
     * This field is deprecated.
     *
     * @var string $productState
     */
    private $productState = null;

    /**
     * Gets as title
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as displayStockPhotos
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as productReferenceID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getProductReferenceID()
    {
        return $this->productReferenceID;
    }

    /**
     * Sets a new productReferenceID
     *
     * This field is deprecated.
     *
     * @param int $productReferenceID
     * @return self
     */
    public function setProductReferenceID($productReferenceID)
    {
        $this->productReferenceID = $productReferenceID;
        return $this;
    }

    /**
     * Gets as attributeSetID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }

    /**
     * Sets a new attributeSetID
     *
     * This field is deprecated.
     *
     * @param int $attributeSetID
     * @return self
     */
    public function setAttributeSetID($attributeSetID)
    {
        $this->attributeSetID = $attributeSetID;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToItemSpecifics(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->itemSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset itemSpecifics
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getItemSpecifics()
    {
        return $this->itemSpecifics;
    }

    /**
     * Sets a new itemSpecifics
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $itemSpecifics
     * @return self
     */
    public function setItemSpecifics(array $itemSpecifics)
    {
        $this->itemSpecifics = $itemSpecifics;
        return $this;
    }

    /**
     * Gets as reviewCount
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as reviewDetails
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ReviewDetailsType
     */
    public function getReviewDetails()
    {
        return $this->reviewDetails;
    }

    /**
     * Sets a new reviewDetails
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ReviewDetailsType $reviewDetails
     * @return self
     */
    public function setReviewDetails(\Nogrod\eBaySDK\Trading\ReviewDetailsType $reviewDetails)
    {
        $this->reviewDetails = $reviewDetails;
        return $this;
    }

    /**
     * Gets as productState
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getProductState()
    {
        return $this->productState;
    }

    /**
     * Sets a new productState
     *
     * This field is deprecated.
     *
     * @param string $productState
     * @return self
     */
    public function setProductState($productState)
    {
        $this->productState = $productState;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        $value = $this->getDisplayStockPhotos();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayStockPhotos", $value);
        }
        $value = $this->getItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCount", $value);
        }
        $value = $this->getProductReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductReferenceID", $value);
        }
        $value = $this->getAttributeSetID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeSetID", $value);
        }
        $value = $this->getItemSpecifics();
        if (null !== $value && !empty($this->getItemSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecifics", array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
        }
        $value = $this->getReviewCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewCount", $value);
        }
        $value = $this->getReviewDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewDetails", $value);
        }
        $value = $this->getProductState();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductState", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayStockPhotos');
        if (null !== $value) {
            $this->setDisplayStockPhotos($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCount');
        if (null !== $value) {
            $this->setItemCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductReferenceID');
        if (null !== $value) {
            $this->setProductReferenceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSetID');
        if (null !== $value) {
            $this->setAttributeSetID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setItemSpecifics(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewCount');
        if (null !== $value) {
            $this->setReviewCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewDetails');
        if (null !== $value) {
            $this->setReviewDetails(\Nogrod\eBaySDK\Trading\ReviewDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductState');
        if (null !== $value) {
            $this->setProductState($value);
        }
    }
}
