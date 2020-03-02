<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

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
     * @var \Nogrod\eBaySDK\MerchantData\ProductType $parentProduct
     */
    private $parentProduct = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProductType[] $familyMembers
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
     * @return \Nogrod\eBaySDK\MerchantData\ProductType
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
     * @param \Nogrod\eBaySDK\MerchantData\ProductType $parentProduct
     * @return self
     */
    public function setParentProduct(\Nogrod\eBaySDK\MerchantData\ProductType $parentProduct)
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
     * @param \Nogrod\eBaySDK\MerchantData\ProductType $familyMembers
     */
    public function addToFamilyMembers(\Nogrod\eBaySDK\MerchantData\ProductType $familyMembers)
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
     * @return \Nogrod\eBaySDK\MerchantData\ProductType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\ProductType[] $familyMembers
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ParentProduct');
        if (null !== $value) {
            $this->setParentProduct(\Nogrod\eBaySDK\MerchantData\ProductType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FamilyMembers', true);
        if (null !== $value && !empty($value)) {
            $this->setFamilyMembers(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ProductType::fromKeyValue($v);
            }, $value));
        }
    }
}
