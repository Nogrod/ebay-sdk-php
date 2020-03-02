<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CrossPromotionPreferencesType
 *
 * This type is deprecated.
 * XSD Type: CrossPromotionPreferencesType
 */
class CrossPromotionPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var bool $crossPromotionEnabled
     */
    private $crossPromotionEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var string $crossSellItemFormatSortFilter
     */
    private $crossSellItemFormatSortFilter = null;

    /**
     * This field is deprecated.
     *
     * @var string $crossSellGallerySortFilter
     */
    private $crossSellGallerySortFilter = null;

    /**
     * This field is deprecated.
     *
     * @var string $crossSellItemSortFilter
     */
    private $crossSellItemSortFilter = null;

    /**
     * This field is deprecated.
     *
     * @var string $upSellItemFormatSortFilter
     */
    private $upSellItemFormatSortFilter = null;

    /**
     * This field is deprecated.
     *
     * @var string $upSellGallerySortFilter
     */
    private $upSellGallerySortFilter = null;

    /**
     * This field is deprecated.
     *
     * @var string $upSellItemSortFilter
     */
    private $upSellItemSortFilter = null;

    /**
     * Gets as crossPromotionEnabled
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getCrossPromotionEnabled()
    {
        return $this->crossPromotionEnabled;
    }

    /**
     * Sets a new crossPromotionEnabled
     *
     * This field is deprecated.
     *
     * @param bool $crossPromotionEnabled
     * @return self
     */
    public function setCrossPromotionEnabled($crossPromotionEnabled)
    {
        $this->crossPromotionEnabled = $crossPromotionEnabled;
        return $this;
    }

    /**
     * Gets as crossSellItemFormatSortFilter
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCrossSellItemFormatSortFilter()
    {
        return $this->crossSellItemFormatSortFilter;
    }

    /**
     * Sets a new crossSellItemFormatSortFilter
     *
     * This field is deprecated.
     *
     * @param string $crossSellItemFormatSortFilter
     * @return self
     */
    public function setCrossSellItemFormatSortFilter($crossSellItemFormatSortFilter)
    {
        $this->crossSellItemFormatSortFilter = $crossSellItemFormatSortFilter;
        return $this;
    }

    /**
     * Gets as crossSellGallerySortFilter
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCrossSellGallerySortFilter()
    {
        return $this->crossSellGallerySortFilter;
    }

    /**
     * Sets a new crossSellGallerySortFilter
     *
     * This field is deprecated.
     *
     * @param string $crossSellGallerySortFilter
     * @return self
     */
    public function setCrossSellGallerySortFilter($crossSellGallerySortFilter)
    {
        $this->crossSellGallerySortFilter = $crossSellGallerySortFilter;
        return $this;
    }

    /**
     * Gets as crossSellItemSortFilter
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCrossSellItemSortFilter()
    {
        return $this->crossSellItemSortFilter;
    }

    /**
     * Sets a new crossSellItemSortFilter
     *
     * This field is deprecated.
     *
     * @param string $crossSellItemSortFilter
     * @return self
     */
    public function setCrossSellItemSortFilter($crossSellItemSortFilter)
    {
        $this->crossSellItemSortFilter = $crossSellItemSortFilter;
        return $this;
    }

    /**
     * Gets as upSellItemFormatSortFilter
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getUpSellItemFormatSortFilter()
    {
        return $this->upSellItemFormatSortFilter;
    }

    /**
     * Sets a new upSellItemFormatSortFilter
     *
     * This field is deprecated.
     *
     * @param string $upSellItemFormatSortFilter
     * @return self
     */
    public function setUpSellItemFormatSortFilter($upSellItemFormatSortFilter)
    {
        $this->upSellItemFormatSortFilter = $upSellItemFormatSortFilter;
        return $this;
    }

    /**
     * Gets as upSellGallerySortFilter
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getUpSellGallerySortFilter()
    {
        return $this->upSellGallerySortFilter;
    }

    /**
     * Sets a new upSellGallerySortFilter
     *
     * This field is deprecated.
     *
     * @param string $upSellGallerySortFilter
     * @return self
     */
    public function setUpSellGallerySortFilter($upSellGallerySortFilter)
    {
        $this->upSellGallerySortFilter = $upSellGallerySortFilter;
        return $this;
    }

    /**
     * Gets as upSellItemSortFilter
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getUpSellItemSortFilter()
    {
        return $this->upSellItemSortFilter;
    }

    /**
     * Sets a new upSellItemSortFilter
     *
     * This field is deprecated.
     *
     * @param string $upSellItemSortFilter
     * @return self
     */
    public function setUpSellItemSortFilter($upSellItemSortFilter)
    {
        $this->upSellItemSortFilter = $upSellItemSortFilter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCrossPromotionEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossPromotionEnabled", $value);
        }
        $value = $this->getCrossSellItemFormatSortFilter();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossSellItemFormatSortFilter", $value);
        }
        $value = $this->getCrossSellGallerySortFilter();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossSellGallerySortFilter", $value);
        }
        $value = $this->getCrossSellItemSortFilter();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossSellItemSortFilter", $value);
        }
        $value = $this->getUpSellItemFormatSortFilter();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpSellItemFormatSortFilter", $value);
        }
        $value = $this->getUpSellGallerySortFilter();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpSellGallerySortFilter", $value);
        }
        $value = $this->getUpSellItemSortFilter();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpSellItemSortFilter", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossPromotionEnabled');
        if (null !== $value) {
            $this->setCrossPromotionEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossSellItemFormatSortFilter');
        if (null !== $value) {
            $this->setCrossSellItemFormatSortFilter($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossSellGallerySortFilter');
        if (null !== $value) {
            $this->setCrossSellGallerySortFilter($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossSellItemSortFilter');
        if (null !== $value) {
            $this->setCrossSellItemSortFilter($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpSellItemFormatSortFilter');
        if (null !== $value) {
            $this->setUpSellItemFormatSortFilter($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpSellGallerySortFilter');
        if (null !== $value) {
            $this->setUpSellGallerySortFilter($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpSellItemSortFilter');
        if (null !== $value) {
            $this->setUpSellItemSortFilter($value);
        }
    }
}
