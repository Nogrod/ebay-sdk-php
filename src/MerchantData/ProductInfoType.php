<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductInfoType
 *
 * This type is deprecated.
 * XSD Type: ProductInfoType
 */
class ProductInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $productInfoID
     */
    private $productInfoID = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $averageStartPrice
     */
    private $averageStartPrice = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPrice
     */
    private $averageSoldPrice = null;

    /**
     * This field is deprecated.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * This field is deprecated.
     *
     * @var string $productState
     */
    private $productState = null;

    /**
     * Gets as productInfoID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getProductInfoID()
    {
        return $this->productInfoID;
    }

    /**
     * Sets a new productInfoID
     *
     * This field is deprecated.
     *
     * @param string $productInfoID
     * @return self
     */
    public function setProductInfoID($productInfoID)
    {
        $this->productInfoID = $productInfoID;
        return $this;
    }

    /**
     * Gets as averageStartPrice
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getAverageStartPrice()
    {
        return $this->averageStartPrice;
    }

    /**
     * Sets a new averageStartPrice
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $averageStartPrice
     * @return self
     */
    public function setAverageStartPrice(\Nogrod\eBaySDK\MerchantData\AmountType $averageStartPrice)
    {
        $this->averageStartPrice = $averageStartPrice;
        return $this;
    }

    /**
     * Gets as averageSoldPrice
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getAverageSoldPrice()
    {
        return $this->averageSoldPrice;
    }

    /**
     * Sets a new averageSoldPrice
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPrice
     * @return self
     */
    public function setAverageSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPrice)
    {
        $this->averageSoldPrice = $averageSoldPrice;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductInfoID();
        if (null !== $value) {
            $writer->writeAttribute("productInfoID", $value);
        }
        $value = $this->getAverageStartPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AverageStartPrice", $value);
        }
        $value = $this->getAverageSoldPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AverageSoldPrice", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageStartPrice');
        if (null !== $value) {
            $this->setAverageStartPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageSoldPrice');
        if (null !== $value) {
            $this->setAverageSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductState');
        if (null !== $value) {
            $this->setProductState($value);
        }
    }
}
