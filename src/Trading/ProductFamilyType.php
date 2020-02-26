<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ProductFamilyType
 *
 * This type is deprecated.
 * XSD Type: ProductFamilyType
 */
class ProductFamilyType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var bool $hasMoreChildren
     */
    private $hasMoreChildren = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductType $parentProduct
     */
    private $parentProduct = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductType[] $familyMembers
     */
    private $familyMembers = [
        
    ];

    /**
     * Gets as hasMoreChildren
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getHasMoreChildren()
    {
        return $this->hasMoreChildren;
    }

    /**
     * Sets a new hasMoreChildren
     *
     * This field is deprecated.
     *
     * @param bool $hasMoreChildren
     * @return self
     */
    public function setHasMoreChildren($hasMoreChildren)
    {
        $this->hasMoreChildren = $hasMoreChildren;
        return $this;
    }

    /**
     * Gets as parentProduct
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ProductType
     */
    public function getParentProduct()
    {
        return $this->parentProduct;
    }

    /**
     * Sets a new parentProduct
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ProductType $parentProduct
     * @return self
     */
    public function setParentProduct(\Nogrod\eBaySDK\Trading\ProductType $parentProduct)
    {
        $this->parentProduct = $parentProduct;
        return $this;
    }

    /**
     * Adds as familyMembers
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ProductType $familyMembers
     */
    public function addToFamilyMembers(\Nogrod\eBaySDK\Trading\ProductType $familyMembers)
    {
        $this->familyMembers[] = $familyMembers;
        return $this;
    }

    /**
     * isset familyMembers
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFamilyMembers($index)
    {
        return isset($this->familyMembers[$index]);
    }

    /**
     * unset familyMembers
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFamilyMembers($index)
    {
        unset($this->familyMembers[$index]);
    }

    /**
     * Gets as familyMembers
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ProductType[]
     */
    public function getFamilyMembers()
    {
        return $this->familyMembers;
    }

    /**
     * Sets a new familyMembers
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ProductType[] $familyMembers
     * @return self
     */
    public function setFamilyMembers(array $familyMembers)
    {
        $this->familyMembers = $familyMembers;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getHasMoreChildren();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeAttribute("hasMoreChildren", $value);
        }
        $value = $this->getParentProduct();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ParentProduct", $value);
        }
        $value = $this->getFamilyMembers();
        if (null !== $value && !empty($this->getFamilyMembers())) {
            $writer->write(array_map(function ($v) {
                return ["FamilyMembers" => $v];
            }, $value));
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ParentProduct');
        if (null !== $value) {
            $this->setParentProduct(\Nogrod\eBaySDK\Trading\ProductType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FamilyMembers', true);
        if (null !== $value && !empty($value)) {
            $this->setFamilyMembers(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ProductType::fromKeyValue($v);
            }, $value));
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
