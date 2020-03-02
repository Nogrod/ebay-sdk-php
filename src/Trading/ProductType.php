<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductType
 *
 * This type is deprecated.
 * XSD Type: ProductType
 */
class ProductType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $productID
     */
    private $productID = null;

    /**
     * This field is deprecated.
     *
     * @var string $stockPhotoURL
     */
    private $stockPhotoURL = null;

    /**
     * This field is deprecated.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CharacteristicsSetType $characteristicsSet
     */
    private $characteristicsSet = null;

    /**
     * This field is deprecated.
     *
     * @var string $detailsURL
     */
    private $detailsURL = null;

    /**
     * This field is deprecated.
     *
     * @var int $numItems
     */
    private $numItems = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $minPrice
     */
    private $minPrice = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $maxPrice
     */
    private $maxPrice = null;

    /**
     * This field is deprecated.
     *
     * @var string $productReferenceID
     */
    private $productReferenceID = null;

    /**
     * Gets as productID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * This field is deprecated.
     *
     * @param string $productID
     * @return self
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
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
     * Gets as characteristicsSet
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CharacteristicsSetType
     */
    public function getCharacteristicsSet()
    {
        return $this->characteristicsSet;
    }

    /**
     * Sets a new characteristicsSet
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\CharacteristicsSetType $characteristicsSet
     * @return self
     */
    public function setCharacteristicsSet(\Nogrod\eBaySDK\Trading\CharacteristicsSetType $characteristicsSet)
    {
        $this->characteristicsSet = $characteristicsSet;
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
     * Gets as numItems
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getNumItems()
    {
        return $this->numItems;
    }

    /**
     * Sets a new numItems
     *
     * This field is deprecated.
     *
     * @param int $numItems
     * @return self
     */
    public function setNumItems($numItems)
    {
        $this->numItems = $numItems;
        return $this;
    }

    /**
     * Gets as minPrice
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Sets a new minPrice
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $minPrice
     * @return self
     */
    public function setMinPrice(\Nogrod\eBaySDK\Trading\AmountType $minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * Gets as maxPrice
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Sets a new maxPrice
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $maxPrice
     * @return self
     */
    public function setMaxPrice(\Nogrod\eBaySDK\Trading\AmountType $maxPrice)
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * Gets as productReferenceID
     *
     * This field is deprecated.
     *
     * @return string
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
     * @param string $productReferenceID
     * @return self
     */
    public function setProductReferenceID($productReferenceID)
    {
        $this->productReferenceID = $productReferenceID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeAttribute("productID", $value);
        }
        $value = $this->getStockPhotoURL();
        if (null !== $value) {
            $writer->writeAttribute("stockPhotoURL", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeAttribute("title", $value);
        }
        $value = $this->getCharacteristicsSet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharacteristicsSet", $value);
        }
        $value = $this->getDetailsURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailsURL", $value);
        }
        $value = $this->getNumItems();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NumItems", $value);
        }
        $value = $this->getMinPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinPrice", $value);
        }
        $value = $this->getMaxPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxPrice", $value);
        }
        $value = $this->getProductReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductReferenceID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharacteristicsSet');
        if (null !== $value) {
            $this->setCharacteristicsSet(\Nogrod\eBaySDK\Trading\CharacteristicsSetType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailsURL');
        if (null !== $value) {
            $this->setDetailsURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumItems');
        if (null !== $value) {
            $this->setNumItems($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinPrice');
        if (null !== $value) {
            $this->setMinPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxPrice');
        if (null !== $value) {
            $this->setMaxPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductReferenceID');
        if (null !== $value) {
            $this->setProductReferenceID($value);
        }
    }
}
