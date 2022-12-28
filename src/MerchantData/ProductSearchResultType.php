<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductSearchResultType
 *
 * This type is deprecated.
 * XSD Type: ProductSearchResultType
 */
class ProductSearchResultType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * This field is deprecated.
     *
     * @var string $numProducts
     */
    private $numProducts = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ResponseAttributeSetType[] $attributeSet
     */
    private $attributeSet = [

    ];

    /**
     * This field is deprecated.
     *
     * @var bool $displayStockPhotos
     */
    private $displayStockPhotos = null;

    /**
     * Gets as iD
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * This field is deprecated.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as numProducts
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getNumProducts()
    {
        return $this->numProducts;
    }

    /**
     * Sets a new numProducts
     *
     * This field is deprecated.
     *
     * @param string $numProducts
     * @return self
     */
    public function setNumProducts($numProducts)
    {
        $this->numProducts = $numProducts;
        return $this;
    }

    /**
     * Adds as attributeSet
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ResponseAttributeSetType $attributeSet
     */
    public function addToAttributeSet(\Nogrod\eBaySDK\MerchantData\ResponseAttributeSetType $attributeSet)
    {
        $this->attributeSet[] = $attributeSet;
        return $this;
    }

    /**
     * isset attributeSet
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeSet($index)
    {
        return isset($this->attributeSet[$index]);
    }

    /**
     * unset attributeSet
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeSet($index)
    {
        unset($this->attributeSet[$index]);
    }

    /**
     * Gets as attributeSet
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ResponseAttributeSetType[]
     */
    public function getAttributeSet()
    {
        return $this->attributeSet;
    }

    /**
     * Sets a new attributeSet
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ResponseAttributeSetType[] $attributeSet
     * @return self
     */
    public function setAttributeSet(array $attributeSet)
    {
        $this->attributeSet = $attributeSet;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ID", $value);
        }
        $value = $this->getNumProducts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NumProducts", $value);
        }
        $value = $this->getAttributeSet();
        if (null !== $value && !empty($this->getAttributeSet())) {
            $writer->write(array_map(function ($v) {
                return ["AttributeSet" => $v];
            }, $value));
        }
        $value = $this->getDisplayStockPhotos();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayStockPhotos", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ID');
        if (null !== $value) {
            $this->setID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumProducts');
        if (null !== $value) {
            $this->setNumProducts($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSet', true);
        if (null !== $value && !empty($value)) {
            $this->setAttributeSet(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ResponseAttributeSetType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayStockPhotos');
        if (null !== $value) {
            $this->setDisplayStockPhotos($value);
        }
    }
}
